<?php

$age = readline("Сколько вам лет?" . PHP_EOL);

//if ($age < 18) {
//    echo "Вам меньше 18 лет" . PHP_EOL;
//} else {
//    echo "Вам больше 18 лет" . PHP_EOL;
//}

$result = null;

//после выражения ($a = 1) ставится ? если выражение истина то выполняется оно, иначе выполняется то что после :
//(ВЫРАЖЕНИЕ) ? ЕСЛИ ИСТИНА : ЕСЛИ ЛОЖЬ
($age < 18) ? $result = "Вам меньше 18 лет" . PHP_EOL : $result = "Вам больше 18 лет" . PHP_EOL;
echo $result;

//docker compose run --rm -it cli php sem1/ternar.php