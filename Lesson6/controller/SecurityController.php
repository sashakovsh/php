<?php

require_once 'model/UserProvider.php';
session_start();
$error = null;

if(isset($_GET['action']) && $_GET['action'] === 'logout') {
    unset($_SESSION['user']);
    header('Location: /');
    die();
}

if (isset($_POST['username'], $_POST['password'])) {
['username' => $username, 'password' => $password] = $_POST;
    $userProvider = new UserProvider();
    $user = $userProvider->getByUserNameAndPassword($username, $password);
    print_r($user);

    if($user === null) {
        $error = 'Введенные данные не верны';
    } else {
        $_SESSION['user'] = $user;
        header('Location: /');
        die();
    }
}

include 'view/signin.php';