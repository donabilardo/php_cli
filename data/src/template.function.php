<?php

function hadleError(string $errorText): string
{
    return "\033[31m" . $errorText . " \r\n \033[97m";
}

function hadleHelp(): string
{
    $help = "Программа работы с файловым хранилищем \r\n";
    $help .= "Порядок вызова: \r\n";
    $help .= "docker compose run --rm -it cli php app.php -" . "\033[31m" . " команда" . " \033[97m \r\n";

    $help .= "read - Прочитать все записи \r\n";
    $help .= "add - добавить запись \r\n";
    $help .= "clear - очистить записи \r\n";

    return $help;
}

