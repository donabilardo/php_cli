<?php

function readFunction(array $config): string
{

//    $path = __DIR__ . "/user.txt";
//  пытаемся открыть файл
//    echo $address;

    $address = $config['storage']['address'];
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


function addFunction(array $config): string
{
    $address = $config['storage']['address'];

    if (file_exists($address) && is_readable($address)) {
        $fileHandler = fopen($address, "a");
        $name = readline("Имя пользователя: ");
        $date = readline("Дата рождения: ");
        $res = $name . ", " . $date . "\r\n";


        //пишем в массив введеные данные и конвертируем в JSON
        $id_user = time(); //генерируем айд по временной метке
        $arr = [
            'id' => $id_user,
            'name' => $name,
            'birthday' => $date
        ];
        $arr = json_encode($arr, JSON_UNESCAPED_UNICODE);



        //если каталога для профилей нет, то создаем его
        $profileCatalog = $config['profiles']['address'];
        if (!is_dir($profileCatalog)) {
            mkdir($profileCatalog);
        }

        //создаем файл профиля и даем имя с учетом айди
        $filename = strtolower($profileCatalog .  $id_user . "_" . transliterate($name) . ".json");//имя пользователя в транслит скрипт в lib/translate.php
       $filename = str_replace(" ", "_", $filename);
        $resourse = fopen($filename, 'w');
        fwrite($resourse, $arr);
        fclose($resourse);

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


