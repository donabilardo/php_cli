<?php


//      Функция fopen открывает файл, в передаваемых значениях:
//         1 - путь к файлу
//         2 - режим доступа


//      Функция fread читает файл, в передаваемых значениях:
//         1 - открытый fopen-ом файл или resource
//         2 - режим доступа


//      Функция fclose закрывает файл, в передаваемых значениях:
//         1 - открытый fopen-ом файл или resource


//      Функция feof() читает resource, до конца, в передаваемых значениях resource:
//         1 - открытый fopen-ом файл или resource


//      fwrite() пишет в файл


//  путь к фалу
$address = __DIR__ . "/user.txt";
$handler = fopen($address, "a");


if (file_exists($address) && is_readable($address)) {
    $name = readline("Имя пользователя: ");
    $date = readline("Дата рождения: ");
    $res = $name . ", " . $date . "\r\n";
    fwrite($handler, $res);
    fclose($handler);
    echo "Запись $name, " . "$date была добавлена в файл";

} else {
    echo "Файл не существует или нет прав на чтение";
}











