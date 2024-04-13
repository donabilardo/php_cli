<?php
//    Задание 2
//    Написать функцию, которая принимает на вход число, а затем возвращает
//    булевский ответ – простое ли оно .
//    10 минут
//
//    Для всех i от 1 до 10 {
//        проверить, делится ли число i на какое - либо из чисел до него
//     если делится, то это i не подходит, берём следующее
//     если не делится, то i - простое число
//    }


//Функция может возвращать return-ом несколько значений
//нужно возвращать массив
//также можно указывать в передаваемых параметрах
//значение по умолчанию (string $a, string $b) и тип возвращаемого значения  : array
function multipleValue(string $a, string $b): array
{
    return [$a, $b];
}
//в $value содержится возвращаемый функцией multipleValue массив
$value = multipleValue('one','two');
print_r($value);

echo "Первое значение: $value[0]" . PHP_EOL;
echo "Второе значение: $value[1]" . PHP_EOL;