<?php
require_once 'model/User.php';

session_start();
$username = null;

if (isset($_SESSION['user'])) {
    $username = $_SESSION['user']->getUsername();
}

require_once 'view/home.php';