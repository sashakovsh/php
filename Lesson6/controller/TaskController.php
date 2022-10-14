<?php

require_once 'model/Task.php';
require_once 'model/User.php';
require_once 'model/TaskProvider.php';
session_start();

$username = null;
if (isset($_SESSION['user'])) {
    $username = $_SESSION['user']->getUsername();
} else {
    header("Location: /");
    die();
}
$taskProvider = new TaskProvider();

if (isset($_GET['action']) && $_GET['action'] === 'add') {
    $taskText = $_POST['task'];
    $taskProvider->addTask(new Task($taskText));
    header("Location: /?controller=todo");
    die();
}

if (isset($_GET['action']) && $_GET['action'] === 'done') {
    $key = $_GET['key'];
    $taskProvider->removeTask($key);
    header("Location: /?controller=todo");
    die();
}

$tasks = $taskProvider->getUndoneList();

include "view/todo.php";