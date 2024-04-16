<?php

//function readProfilesDirectory()
//{
//    return transliterate("Привет");
//}



function readAllProfile(array $config): string
{
    $result = "";
    $profileDirectoryAddress = $config['profiles']['address'];
    if (!is_dir($profileDirectoryAddress)) {
        mkdir($profileDirectoryAddress);
    }
    $ls_dir = scandir($profileDirectoryAddress);
    if (count($ls_dir) === 2) {
        return $result = "Директория с профилями пуста \r\n";
    } else {
        array_diff_key($ls_dir);
        $ls_dir = array_splice($ls_dir, 2,);
        foreach ($ls_dir as $value) {
            $result .= $value . PHP_EOL;
        }

    }

    return $result;
}



