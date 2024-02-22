<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    '/' => '/home.php',
    '/accessories' => '/accessories.php',
    '/contact' => '/contact.php',
    '/contactValide' => '/contactValide.php',
    '/toys' => '/toys.php',
    '/food' => '/food.php',
    '/about' => '/about.php',
    '/login' => '/login.php',
    '/register' => '/register.php',
    '/logout' => '/logout.php',
];

if (array_key_exists($uri, $routes)) {
    require_once(__DIR__ . $routes[$uri]);
} else {
    require_once(__DIR__ . '/404.php');
}
