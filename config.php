<?php
// Start session for language preference
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Site Configuration
define('SITE_NAME', 'DMT GROUPE');
define('SITE_TAGLINE', 'Le succès est ici');
define('SITE_URL', 'http://localhost/dmt_group');
define('ASSETS_PATH', 'assets/');

// Base path for assets (set by each page, defaults to root)
$base_path = isset($base_path) ? $base_path : '';

// Contact Information
define('CONTACT_EMAIL', 'contact@dmtgroupe.com');
define('CONTACT_PHONE', '+237 651 98 44 83');
define('CONTACT_ADDRESS', '123 Fifth Avenue, Yaoundé, Cameroun');

// Working Hours
define('WORKING_HOURS', '8h00 - 17h00');

// Social Media Links
$social_links = [
    'facebook' => '#',
    'twitter' => '#',
    'instagram' => '#',
    'linkedin' => '#'
];

// Current Page (to be set in each page file)
$current_page = isset($current_page) ? $current_page : 'home';

// Available languages
$available_languages = ['en', 'fr']; // Add more languages as needed

// Get language from URL parameter, session, or default to English
if (isset($_GET['lang']) && in_array($_GET['lang'], $available_languages)) {
    $_SESSION['lang'] = $_GET['lang'];
}

$current_lang = $_SESSION['lang'] ?? 'fr';

// Load language file
$lang_file = __DIR__ . "/languages/{$current_lang}.php";
if (file_exists($lang_file)) {
    $translations = require $lang_file;
} else {
    // Fallback to English if language file doesn't exist
    $translations = require __DIR__ . "/languages/en.php";
}

/**
 * Translation Helper Function
 *
 * Usage: t('home.banner.title') or __('home.banner.title')
 *
 * @param string $key Dot-notation key (e.g., 'nav.home')
 * @return string Translated text or the key itself if not found
 */
function t($key) {
    global $translations;

    $keys = explode('.', $key);
    $value = $translations;

    foreach ($keys as $k) {
        if (isset($value[$k])) {
            $value = $value[$k];
        } else {
            // Return the key itself if translation not found (for debugging)
            return "[MISSING: {$key}]";
        }
    }

    return $value;
}

// Alias for t() function (shorter version)
function __($key) {
    return t($key);
}

/**
 * Get Current Language
 *
 * @return string Current language code
 */
function get_current_lang() {
    global $current_lang;
    return $current_lang;
}

/**
 * Get Available Languages
 *
 * @return array Available language codes
 */
function get_available_languages() {
    global $available_languages;
    return $available_languages;
}

/**
 * Generate Language Switcher URL
 *
 * @param string $lang Language code
 * @return string URL with language parameter
 */
function lang_url($lang) {
    $current_url = $_SERVER['REQUEST_URI'];
    $parsed_url = parse_url($current_url);

    parse_str($parsed_url['query'] ?? '', $params);
    $params['lang'] = $lang;

    $new_query = http_build_query($params);
    $base_url = $parsed_url['path'];

    return $base_url . ($new_query ? '?' . $new_query : '');
}
?>
