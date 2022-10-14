<?php

//session_start();

$controller = $_GET['controller'] ?? 'home';
$routes = require_once 'routes.php';

require_once $routes[$controller] ?? "view/404.php";