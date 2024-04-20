<?php

function parseConfig(string $path): array|false
{
    echo __DIR__ . PHP_EOL;

    if (file_exists($path) && is_readable($path)) {
        return parse_ini_file($path);
    } else {
        return "Ошибка";
    }

}


$a = parseConfig(__DIR__ . '/config.ini');
var_dump($a);
