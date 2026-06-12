<?php
// Global configuration for the blank starter website.

define('ENVIRONMENT', getenv('APP_ENV') ?: 'development');
define('DEBUG', ENVIRONMENT === 'development');

if (!defined('ROOT_PATH')) {
    define('ROOT_PATH', dirname(__DIR__));
}

if (DEBUG) {
    error_reporting(E_ALL);
    ini_set('display_errors', '1');
} else {
    error_reporting(0);
    ini_set('display_errors', '0');
}

$defaultSiteUrl = ENVIRONMENT === 'development'
    ? 'http://localhost:8000'
    : 'https://example.com';

define('SITE_URL', rtrim(getenv('SITE_URL') ?: $defaultSiteUrl, '/'));
define('SITE_NAME', getenv('SITE_NAME') ?: 'Toastmasters Aachen');
define('SITE_TAGLINE', getenv('SITE_TAGLINE') ?: 'Rhetorik & Führung e. V.');
define('CONTACT_EMAIL', getenv('CONTACT_EMAIL') ?: 'info@aachen-toastmasters.de');
define('LOCATION_SHORT', getenv('LOCATION_SHORT') ?: 'Digital Church, Aachen');
define('LOCATION_FULL', getenv('LOCATION_FULL') ?: 'Jülicher Straße 72a, 52070 Aachen');
define('DEFAULT_PAGE_TITLE', SITE_NAME);
define('DEFAULT_PAGE_DESCRIPTION', 'Diese Blanko-Website ist technisch vorbereitet und wartet auf eigene Inhalte.');
