<?php

namespace Dialog;
class SayError
{

    public function hadleError(string $errorText): string
    {
        return "\033[31m" . $errorText . " \r\n \033[97m";
    }
}