<?php

function readFunction(string $address): string
{

//    $path = __DIR__ . "/user.txt";
//  пытаемся открыть файл
    echo $address;
    $file = fopen($address, "rb");

    if (file_exists($address) && is_readable($address)) {
        $content = ''; //в эту переменную получаем данные из читаемого файла
        while (!feof($file)) { //    читаем файл пока не закончится
            //$content .= fgets($file); //    читаем по 100 байт
            echo fgets($file); //выводим сразу строку без накопления в переменную $content
        }
        fclose($file); // закрываем файл
        return $content;
    } else {
        return hadleError("Файл не существует или нет прав на чтение");
    }
}


function addFunction(string $address): string
{

    if (file_exists($address) && is_readable($address)) {
        $fileHandler = fopen($address, "a");
        $name = readline("Имя пользователя: ");
        $date = readline("Дата рождения: ");
        $res = $name . ", " . $date . "\r\n";
        fwrite($fileHandler, $res);
        fclose($fileHandler);

        return hadleError("Запись $name, " . "$date была добавлена в файл \r\n");

    } else {
        return "Файл не существует или нет прав на чтение \r\n";
    }
}

function clearFunction(string $address): string
{
    if (file_exists($address) && is_readable($address)) {
        $file = fopen($address, "w");
        fwrite($file, "");
        fclose($file);
        return "Файл успешно очищен";
    } else {
        return hadleError("Не удалось очистить файл");
    }
}


