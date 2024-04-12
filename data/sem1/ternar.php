<?php

$age = readline("Сколько вам лет?" . PHP_EOL);

//if ($age < 18) {
//    echo "Вам меньше 18 лет" . PHP_EOL;
//} else {
//    echo "Вам больше 18 лет" . PHP_EOL;
//}

$result = null;

($age < 18) ? $result = "Вам меньше 18 лет" . PHP_EOL : $result = "Вам больше 18 лет" . PHP_EOL;
echo $result;