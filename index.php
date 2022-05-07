<?php
// Include initialize.php
require_once './private/initialize.php';

$request = $_SERVER['REQUEST_URI'];

switch ($request) {
    case '/php_backend_base/index.php':
    case '/php_backend_base/':
        require pathView('home.php');
        break;

    default:
        http_response_code(404);
        require pathView('errors/404.php');
}