<?php

require_once __DIR__ . "/app/config/autoload.php";

$route = isset($_GET['route']) ? $_GET['route'] : 'home';

switch ($route) {
    case 'register':
        require_once __DIR__ . "/app/views/register_view.php";
        break;
    case 'login':
        require_once __DIR__ . "/app/views/login_view.php";
        break;
    case 'analysis':
        require_once __DIR__ . "/app/views/analysis.php";
        break;
    default:
        require_once __DIR__ . "/app/views/home_view.php";
        break;
}
