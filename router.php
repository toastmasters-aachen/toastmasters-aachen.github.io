<?php
/**
 * Neutral router for the blank starter website.
 */

$path = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?: '/';
$path = urldecode($path);
$path = rtrim($path, '/');
if ($path === '') {
    $path = '/';
}

$staticExtensions = ['css', 'js', 'png', 'jpg', 'jpeg', 'gif', 'svg', 'webp', 'avif', 'ico', 'woff', 'woff2', 'ttf', 'eot', 'map', 'xml', 'txt', 'pdf'];
$extension = strtolower(pathinfo($path, PATHINFO_EXTENSION));

if (in_array($extension, $staticExtensions, true)) {
    $filePath = __DIR__ . $path;
    if (is_file($filePath)) {
        $mimeTypes = [
            'css' => 'text/css',
            'js' => 'application/javascript',
            'png' => 'image/png',
            'jpg' => 'image/jpeg',
            'jpeg' => 'image/jpeg',
            'gif' => 'image/gif',
            'svg' => 'image/svg+xml',
            'webp' => 'image/webp',
            'avif' => 'image/avif',
            'ico' => 'image/x-icon',
            'woff' => 'font/woff',
            'woff2' => 'font/woff2',
            'ttf' => 'font/ttf',
            'eot' => 'application/vnd.ms-fontobject',
            'map' => 'application/json',
            'xml' => 'application/xml',
            'txt' => 'text/plain',
            'pdf' => 'application/pdf',
        ];
        header('Content-Type: ' . ($mimeTypes[$extension] ?? 'application/octet-stream'));
        readfile($filePath);
        exit;
    }

    http_response_code(404);
    exit;
}

define('ROOT_PATH', __DIR__);
require_once __DIR__ . '/config/config.php';

switch ($path) {
    case '/':
    case '/index.php':
        require __DIR__ . '/index.php';
        break;

    case '/home':
        require __DIR__ . '/pages/home.php';
        break;

    case '/ueber-toastmasters':
        require __DIR__ . '/pages/about-toastmasters.php';
        break;

    case '/ueber-uns':
        require __DIR__ . '/pages/about.php';
        break;

    case '/kontakt':
        require __DIR__ . '/pages/contact.php';
        break;

    case '/mitglied-werden':
        require __DIR__ . '/pages/membership.php';
        break;

    case '/datenschutz':
        require __DIR__ . '/pages/datenschutz.php';
        break;

    case '/impressum':
        require __DIR__ . '/pages/impressum.php';
        break;

    case '/flyer':
        require __DIR__ . '/pages/flyer.php';
        break;

    default:
        http_response_code(404);
        require __DIR__ . '/errors/404.php';
        break;
}
