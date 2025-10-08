<?php

// echo "<h1>Hello world 💪</h1>";

$path = trim($_SERVER['REQUEST_URI'], '/');
$path = parse_url($path, PHP_URL_PATH);

switch ($path) {
    case 'dashboard':
        include 'public/views/dashboard.html';
        break;
    case 'login':
        include 'public/views/login.html';
        break;
    default:
    include 'public/views/404.html';
        break;
}
