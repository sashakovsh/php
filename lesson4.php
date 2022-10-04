<?php

    // 1 задание

    $array = [4, 5, 1, 4, 7, 8, 15, 6, 71, 45, 2];

    $result = array_map(function (int $number) {
        return $number % 2 == 0? $number . ' четное' : $number . ' нечетное';
    }, $array);

    print_r($result);

    // 2 задание

    function arrayRes (array $arr): array {
        return [
            'max' => max($arr),
            'min' => min($arr),
            'avg' => array_sum($arr) / count($arr)
        ];
    }

    print_r(arrayRes($array));

    // 3 задание

    $box = [
        [
            0 => 'Тетрадь',
            1 => 'Книга',
            2 => 'Настольная игра',
            3 => [
                'Настольная игра',
                'Настольная игра',
            ],
            4 => [
                [
                    'Ноутбук',
                    'Зарядное устройство'
                ],
                [
                    'Компьютерная мышь',
                    'Набор проводов',
                    [
                        'Фотография',
                        'Картина'
                    ]
                ],
                [
                    'Инструкция',
                    [
                        'Ключ'
                    ]
                ]
            ]
        ],
        [
            0 => 'Пакет кошачьего корма',
            1 => [
                'Музыкальный плеер',
                'Книга'
            ]
        ]
    ];

    function stuffFinder (string $key, array $array): bool {
        foreach ($array as $value) {
           if (is_array($value)) {
               if (stuffFinder($key, $value)) {
                    return true;
               }
           } else {
               if ($key === $value) {
                   return true;
               }
           }
        }
        return false;
    }

    var_dump(stuffFinder('Настольная игра', $box));