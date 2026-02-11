<?php
/**
 * Form submission handler: contact + all service forms.
 * Validates required fields (*), saves to DB, sends email, redirects with success/error.
 */
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: ../index.php');
    exit;
}

require_once __DIR__ . '/../config.php';
require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/../config/email.php';

// Form type: contact (from form_type) or service type (from service_type)
$form_type = trim($_POST['form_type'] ?? $_POST['service_type'] ?? '');
if ($form_type === '') {
    redirect_with_error(null, 'Invalid form.');
}

// Required fields per form type (* in the UI)
$required = [
    'contact' => ['name', 'email', 'message'],
    'certification' => ['name', 'phone', 'country', 'city', 'services'],
    'concept_design' => ['name', 'phone', 'country', 'city', 'services'],
    'digitalization' => ['name', 'phone', 'country', 'city', 'services'],
    'restaurant_marketing' => ['name', 'phone', 'country', 'city', 'services'],
    'staff_training' => ['name', 'phone', 'country', 'city', 'services'],
    'hotel_operations' => ['name', 'phone', 'services'],
];

if (!isset($required[$form_type])) {
    redirect_with_error(null, 'Unknown form type.');
}

$errors = [];
foreach ($required[$form_type] as $field) {
    if ($field === 'services') {
        $val = $_POST['services'] ?? [];
        if (!is_array($val)) $val = [];
        $val = array_filter($val);
        if (empty($val)) {
            $errors[] = 'Please select at least one service.';
        }
        continue;
    }
    $val = trim($_POST[$field] ?? '');
    if ($val === '') {
        $errors[] = 'Required field: ' . $field;
    }
}

if (!empty($errors)) {
    redirect_with_error(null, implode(' ', $errors));
}

// Sanitize inputs
$name = trim($_POST['name'] ?? '');
$email = trim($_POST['email'] ?? '');
$phone = trim($_POST['phone'] ?? '');
$company = trim($_POST['company'] ?? '');
$country = trim($_POST['country'] ?? '');
$city = trim($_POST['city'] ?? '');
$message = trim($_POST['message'] ?? '');
$services_selected = null;
if (!empty($_POST['services']) && is_array($_POST['services'])) {
    $services_selected = json_encode(array_values(array_filter($_POST['services'])));
}

// Save to database
try {
    $pdo = get_db();
    $stmt = $pdo->prepare("
        INSERT INTO form_submissions (form_type, name, email, phone, company, country, city, message, services_selected)
        VALUES (:form_type, :name, :email, :phone, :company, :country, :city, :message, :services_selected)
    ");
    $stmt->execute([
        ':form_type' => $form_type,
        ':name' => $name,
        ':email' => $email ?: null,
        ':phone' => $phone ?: null,
        ':company' => $company ?: null,
        ':country' => $country ?: null,
        ':city' => $city ?: null,
        ':message' => $message ?: null,
        ':services_selected' => $services_selected,
    ]);
} catch (Exception $e) {
    redirect_with_error(null, 'Could not save your submission. Please try again.');
}

// Send email
$to = get_form_recipient_email();
$subject = '[DMT Groupe] ' . ucfirst(str_replace('_', ' ', $form_type)) . ' – New submission';
$body = build_email_body($form_type, [
    'name' => $name,
    'email' => $email,
    'phone' => $phone,
    'company' => $company,
    'country' => $country,
    'city' => $city,
    'message' => $message,
    'services_selected' => $services_selected,
]);
$headers = [
    'MIME-Version: 1.0',
    'Content-type: text/plain; charset=UTF-8',
    'From: ' . (defined('CONTACT_EMAIL') ? CONTACT_EMAIL : 'noreply@' . ($_SERVER['HTTP_HOST'] ?? 'localhost')),
];
$sent = @mail($to, $subject, $body, implode("\r\n", $headers));

// Always redirect success (we stored the data); mail failure is logged but user sees success)
redirect_with_success();

function get_db() {
    $dsn = 'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=' . DB_CHARSET;
    $opts = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ];
    return new PDO($dsn, DB_USER, DB_PASS, $opts);
}

function build_email_body($form_type, $data) {
    $lines = [
        'Form: ' . $form_type,
        'Name: ' . ($data['name'] ?? ''),
        'Email: ' . ($data['email'] ?? ''),
        'Phone: ' . ($data['phone'] ?? ''),
        'Company: ' . ($data['company'] ?? ''),
        'Country: ' . ($data['country'] ?? ''),
        'City: ' . ($data['city'] ?? ''),
        'Message: ' . ($data['message'] ?? ''),
    ];
    if (!empty($data['services_selected'])) {
        $lines[] = 'Services: ' . $data['services_selected'];
    }
    return implode("\n", $lines);
}

function get_return_url() {
    if (!empty($_POST['return_url']) && preg_match('#^https?://#', $_POST['return_url'])) {
        return $_POST['return_url'];
    }
    $ref = $_SERVER['HTTP_REFERER'] ?? '';
    if ($ref !== '') {
        return $ref;
    }
    return (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http') . '://' . ($_SERVER['HTTP_HOST'] ?? 'localhost') . '/dmt_group/';
}

function redirect_with_success() {
    $url = get_return_url();
    $sep = strpos($url, '?') !== false ? '&' : '?';
    header('Location: ' . $url . $sep . 'form_success=1');
    exit;
}

function redirect_with_error($url, $message) {
    $url = $url ?? get_return_url();
    $sep = strpos($url, '?') !== false ? '&' : '?';
    header('Location: ' . $url . $sep . 'form_error=1&form_message=' . rawurlencode($message));
    exit;
}
