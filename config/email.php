<?php
/**
 * Email configuration for form submissions.
 * Dev: use a test inbox. Prod: use the real address where leads should land.
 */
// 'dev' = use test email; 'prod' = use production email
define('FORM_ENVIRONMENT', 'dev');

// Where form emails go in development (test inbox)
define('FORM_EMAIL_DEV', 'sheyenoh123@gmail.com');

// Where form emails go in production (real business inbox)
define('FORM_EMAIL_PROD', 'sheyenoh123@gmail.com');

/**
 * Returns the recipient email for form submissions based on environment.
 */
function get_form_recipient_email() {
    return (FORM_ENVIRONMENT === 'prod') ? FORM_EMAIL_PROD : FORM_EMAIL_DEV;
}
