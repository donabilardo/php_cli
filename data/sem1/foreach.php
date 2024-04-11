<?php

$students = [
    [
        'name' => 'Ivan',
        'age' => 21
    ],
    [
        'name' => 'Petya',
        'age' => 33
    ],
    [
        'name' => 'Vasya',
        'age' => 26
    ],
];

$ages = null;

foreach ($students as $key => $value) {
    echo "ID = $key," . " имя студента: $value[name], " . "Возраст: $value[age]" . PHP_EOL;
    $ages += $value['age'];
}

echo "Средний возраст студентов: " . $ages / count($students);