<?php
function main(string $configFilePath): string
{
    $config = readConfig($configFilePath); // передаем путь конфига функции, которая обрабатывает конфиг
    if (!$config) {
        return handleError("Невозможно прочитать конфиг приложения");
    }

    $storageFileAddress = $config['storage']['address'];
    $functionName = parseCommand();

    if (function_exists($functionName)) {
        $result = $functionName($storageFileAddress);
    } else {
        $result = hadleError("Функции не существует");
    }
    return $result;
}

function readConfig(string $configAddress): array|false
{
    return parse_ini_file($configAddress, true);
}

function parseCommand(): string
{
    $functionName = "helpFunction";

    if (isset($_SERVER['argv'][1])) {
        $functionName = match ($_SERVER['argv'][1]) {
            "read" => "readFunction",
            "add" => "addFunction",
            "clear" => "clearFunction",
            "help" => "helpFunction",
            default => "helpFunction"
        };
    }

    return $functionName;
}


function helpFunction(): string
{
    return hadleHelp();
}