<?php
    include 'Task.php';
    include 'User.php';
    include 'TaskService.php';
    include 'Comment.php';

    $user1 = new User('Alex', 'alex@gmail.com');
    $task1 = new Task($user1, 'Сделать домашку', 5);

    TaskService::addComment($user1, $task1, 'Шел третий день, домашка так и не сделана');

    print_r($task1);