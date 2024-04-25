<?php

namespace System;

use Dialog\Message;

class ParseCommand
{
    function parseCommand(): string
    {
        $message = new Message();
        $functionName = $message->sayHelp();

        if (isset($_SERVER['argv'][1])) {
            $functionName = match ($_SERVER['argv'][1]) {
                "read" => "readFunction",
                "add" => "addFunction",
                "clear" => "clearFunction",
                "help" => $message->sayHelp(),
                "read_profile" => "readAllProfile",
                "search_profile" => "searchProfile",
                default => $message->sayHelp()
            };
        }

        return $functionName;
    }
}