<?php
     1 задание
    $array1 = [1, 325, 63, 236, 23, 67, 2, 236, 7, 12];
    $array2 = [45, 235, 124, 743, 23, 13, 74, 3, 8, 9];
    $result = [];

    for ($i = 0; $i < count($array1); $i++) {
        $result[] = $array1[$i] * $array2[$i];
    }

    print_r($result);

    // 2-3 задание

    $wishes = ['счастья', 'здоровья', 'пюре', 'хлеба', 'тепла', 'гороха', 'веселья'];
    $epithets = ['бесконечного', 'долгого', 'вкусного', 'теплого', 'свежего', 'сказочного', 'вечного'];
    $totalWish = [];

    while(count($totalWish) < 3) {
        $wishIdx = array_rand($wishes, 1);
        $epithetsIdx = array_rand($epithets, 1);
        $totalWish[] = $epithets[$epithetsIdx] . " " . $wishes[$wishIdx];
        unset($wishes[$wishIdx]);
        unset($epithets[$epithetsIdx]);
    }
    $lastWish = array_pop($totalWish);

    $sex = readline("Введите пол поздравляемого: М или Ж? ");
    $name = readline("Введите имя поздравляемого ");
    if ($sex == 'М' || $sex == 'м') {
        print_r("Дорогой $name, желаю тебе " . implode(', ', $totalWish) . " и " . $lastWish);
    } elseif ($sex == 'Ж' || $sex == 'ж') {
        print_r("Дорогая $name, желаю тебе " . implode(', ', $totalWish) . " и " . $lastWish);
    } else (
        print_r("Дорогой(-ая) $name, желаю тебе " . implode(', ', $totalWish) . " и " . $lastWish)
    );

    // 4 задание

    $students = [
        'ИТ20' => [
            'Иванов Иван' => 5,
            'Кириллов Кирилл' => 3,
            'Иванов Егор' => 5,
            'Петров Кирилл' => 3,
            'Сергеев Александр' => 5
        ],
        'БАП20' => [
            'Антонов Антон' => 4,
            'Петров Петр' => 3,
            'Иванов Виктор' => 5,
            'Иванов Кирилл' => 2,
            'Иванова Анна' => 5,
        ]
    ];

    $expelled = [];

    foreach ($students as $studentsGroup => $groups) {
        $avgGrade[$studentsGroup] = array_sum($groups) / count($groups);
        foreach ($groups as $studentName => $studentGrade) {
            if($studentGrade < 3) {
                $expelled[$studentsGroup][] = $studentName;
            }
        }
    }

    print_r(array_keys($avgGrade, max($avgGrade)));
    print_r($expelled);