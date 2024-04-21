<?php

namespace Dialog;

class SayHelp
{
    public function hadleHelp(): string
    {
        $help = "Программа работы с файловым хранилищем \r\n";
        $help .= "Порядок вызова: \r\n";
        $help .= "docker compose run --rm -it cli php app.php -" . "\033[31m" . " команда" . " \033[97m \r\n";
        $help .= "read - Прочитать все записи \r\n";
        $help .= "add - Добавить запись \r\n";
        $help .= "clear - Очистить записи \r\n";
        $help .= "profile - Работа с профилем \r\n";
        $help .= "help - Справка \r\n";
        return $help;
    }
}