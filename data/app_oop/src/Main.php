<?php

namespace App;

use Dialog\{SayResult, SayError, SayHelp};
use System\{ParseConfig};


class Main
{

    private function printResult($result): void
    {
        echo $result;
    }

    public function run(string $path_config)
    {
        $error = new SayError();
        $help = new SayHelp();
        $result = new SayResult();
        $config = new ParseConfig();            //создаём объект который парсит файл конфига
        $config_file = $config->parseConfig($path_config);          //вызываем метод обьекта для парсинга ini
        define('storage', $config_file['storage']['address']);      //файл со списком пользователей
        define('profile_catalog', $config_file['user_profile_catalog']['address']);     //путь до каталога с профилями

//        return $result->sayResult(storage);
        return $this->printResult($result->sayResult("cxcxcxxcxc"));
    }


}


