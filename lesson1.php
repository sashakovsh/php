/* 1 Задание
PS D:\php lessons> php -v
PHP 7.4.30 (cli) (built: Jun  7 2022 16:24:55) ( ZTS Visual C++ 2017 x64 )
Copyright (c) The PHP Group
Zend Engine v3.4.0, Copyright (c) Zend Technologies
*/

// 2-3 задание

<?php
    $name = readline("Как вас зовут? ");
    $firstGoal = readline("Какая задача стоит перед вами сегодня? ");
    $firstTime = readline("Сколько примерно времени эта задача займет? ");
    $secondGoal = readline("Какая еще задача стоит перед вами сегодня? ");
    $secondTime = readline("Сколько примерно времени эта задача займет? ");
    $thirdGoal = readline("Какая еще задача стоит перед вами сегодня? ");
    $thirdTime = readline("Сколько примерно времени эта задача займет? ");
    print (
            $name . ", сегодня у вас запланировано 3 приоритетных задачи на день\n"
            . $firstGoal . "(" . $firstTime . "ч)\n"
            . $secondGoal . "(" . $secondTime . "ч)\n"
            . $thirdGoal . "(" . $thirdTime . "ч)\n" .
            "Примерное время выполнения плана = " . ($firstTime + $secondTime + $thirdTime));
