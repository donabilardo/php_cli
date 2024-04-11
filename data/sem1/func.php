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


function getAverageAge(array $array = []): float
{
    $ages = null;
    foreach ($array as $key => $value) {
        $ages += $value['age'];
    }
    $ages = $ages / count($array);
    return $ages;

}

echo "Средний возраст студентов: " . getAverageAge($students) . PHP_EOL;