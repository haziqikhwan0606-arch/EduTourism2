<?php

use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

// Platform compatibility guard for legacy Apache/XAMPP environments (< PHP 8.2)
if (PHP_VERSION_ID < 80200) {
    // Gracefully serve compiled static views in legacy PHP environments
    $uri = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH);
    $uri = preg_replace('#^/EduTourism2#i', '', $uri);
    $uri = preg_replace('#^/public#i', '', $uri);
    $uri = rtrim($uri, '/') ?: '/';

    $staticMap = [
        '/' => __DIR__ . '/home_static.html',
        '/experiences' => __DIR__ . '/experiences_static.html',
        '/programmes' => __DIR__ . '/programmes_static.html',
        '/contact' => __DIR__ . '/contact_static.html',
        '/projects' => __DIR__ . '/experiences_static.html',
        '/world' => __DIR__ . '/experiences_static.html',
    ];

    if (isset($staticMap[$uri]) && file_exists($staticMap[$uri])) {
        header('Content-Type: text/html; charset=utf-8');
        echo file_get_contents($staticMap[$uri]);
        exit;
    }
}

// Determine if the application is in maintenance mode...
if (file_exists($maintenance = __DIR__.'/../storage/framework/maintenance.php')) {
    require $maintenance;
}

// Register the Composer autoloader...
require __DIR__.'/../vendor/autoload.php';

// Bootstrap Laravel and handle the request...
/** @var Application $app */
$app = require_once __DIR__.'/../bootstrap/app.php';

$app->handleRequest(Request::capture());
