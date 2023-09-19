<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$routes = [
    '/' => 'controllers/index.php',
    '/secret' => 'controllers/secret.php',
    '/private' => 'controllers/private.php',
    '/about' => 'controllers/about.php'
];
$functions = new Functions();
$functions->routeToController($uri, $routes);
