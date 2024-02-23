<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    '/' => '/home.php',
    '/accessoires' => '/accessoires.php',
    '/contact' => '/contact.php',
    '/jouets' => '/jouets.php',
    '/alimentation' => '/alimentation.php',
    '/quisommesnous' => '/quisommesnous.php',
    '/login' => '/login.php',
];

if (array_key_exists($uri, $routes)) {
    require_once(__DIR__ . $routes[$uri]);
} else {
    require_once(__DIR__ . '/404.php');
}
