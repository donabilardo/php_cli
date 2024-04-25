<?php

namespace System;

class ParseConfig
{

    public function parseConfig(string $configAddress): array|string
    {
        if (!file_exists($configAddress) && !is_readable($configAddress)) {       //если файл конфига существует и доступен для записи
            return false;
        } else {
            $a = gettype(parse_ini_file($configAddress, true));
            return parse_ini_file($configAddress, true);  //возвращаем массив
        }
        //иначе возвращаем ложь

    }

}





