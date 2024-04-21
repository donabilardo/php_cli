<?php

namespace System;

class ParseConfig
{

    public function parseConfig(string $path): array|string
    {
        if (file_exists($path) && is_readable($path)) {       //если файл конфига существует и доступен для записи
            return parse_ini_file($path, true);  //возвращаем массив
        } else {
            return "Ошибка чтения конфига";                                     //иначе возвращаем ложь
        }

    }

}



