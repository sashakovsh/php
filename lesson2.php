<?php
    $answer = 0;
    while ($answer == 0) {
        $answer = readline("Какой сейчас год? 1990, 2020, 2022 ");
        if ($answer == 2022) {
            echo "Браво!";
        } elseif ($answer == 1990 || $answer == 2020) {
            echo "Увы, но нет";
        } else {
            echo "Выбирать надо из предложенных варинтов \n";
            $answer = 0;
        }
    }

    $i = 0;
    $totalTime = 0;
    $totalGoals = 0;
    $goalsList = '';

    while ($totalGoals == 0 || $totalGoals < 0 || !is_integer($totalGoals)) {
        $totalGoals = (int)readline("Сколько у вас задач на сегодняшний день? ");
    };
    while ($i != $totalGoals) {
        $userGoal = readline("Опишите свою задачу ");
        $goalTime = (int)readline("Сколько минут потребуется на её выполнение? ");
        $goalsList .= $userGoal . " ($goalTime мин.)\n ";
        $totalTime += $goalTime;
        $i++;
    }
    echo "Список дел на сегодня: \n";
    echo $goalsList;
    echo "Всего на выполнение задач потребуется: $totalTime мин.";

    $userNumber = 0;

    while ($userNumber <= 0) {
        $userNumber = readline("Введите число (больше нуля) ");
    }
    if ($userNumber > 8) {
        $userNumber = $userNumber % 8;
    }
    switch ($userNumber) {
        case 1:
            echo "Числу соответствует большой палец";
            break;
        case 2:
        case 8:
            echo "Числу соответствует указательный палец";
            break;
        case 3:
        case 7:
            echo "Числу соответствует средний палец";
            break;
        case 4:
        case 6:
            echo "Числу соответствует безымянный палец";
            break;
        case 5:
            echo "Числу соответствует мизинец";
            break;
    }