<?php

namespace App;

use Dialog\{Message};
use System\{ParseConfig, ParseCommand};
use File\Test;


class Main
{

    private string $result;

    protected function printResult(string $result): void
    {
        echo $result;
    }

    public function run(string $path_config)
    {


        $message = new Message(); //создаём объект который выводит сообщения
        $config = new ParseConfig(); //создаём объект который парсит файл конфига
        $command = new ParseCommand(); //создаём объект который парсит команды
        $test = new Test();


        $config_file = $config->parseConfig($path_config);          //вызываем метод обьекта для парсинга ini
        if (!$config_file) {
            $this->result = "Не могу прочитать файл";

        }

        define('storage', $config_file['storage']['address']);      //файл со списком пользователей
        define('profile_catalog', $config_file['user_profile_catalog']['address']);     //путь до каталога с профилями

        $function_name = $command->parseCommand();


        return $this->printResult($this->result);
    }


}


