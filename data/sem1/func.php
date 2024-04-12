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


// у необязательных передаваемых параметров функции, можно задавать значение по умолчанию
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


//Из функции нельзя получить доступ ко внешней переменной (если не задавать global)
//Но можно передать значение по ссылке используя амперсанд &value
$external_value = 100;


//В передаваемых значениях можно указывать ожидаемый тип, так же можно указать ожидаемый тип возврата функции
function mult(int $one, int &$two): float
{
    return $one * $two;
}

echo "Изначальное значение переменной: $external_value" . PHP_EOL;
echo "Результат выполнения функции с переданным значением по ссылке: " . mult(2, $external_value) .PHP_EOL;
echo "Изначальное значение переменной: $external_value" . PHP_EOL;