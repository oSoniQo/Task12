<?php
$arr = [
    'Московская область' => [
        'Москва',
        'Зеленоград',
        'Клин'
    ],
    'Ленинградская область' => [
        'Санкт-Петербург',
        'Всеволожск',
        'Павловск'
    ],
    'Рязанская область' => [
        'Ряжск',
        'Скопин',
        'Касимов'
    ]
  ];
foreach ($arr as $key => $value) {
    echo''. $key .': '. implode(', ',$value) . PHP_EOL;
}