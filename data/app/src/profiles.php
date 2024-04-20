<?php

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

function searchProfile(array $config): string
{

    $result = "";
    $result_arr = [];
    $profileDirectoryAddress = $config['profiles']['address'];
    $ls_dir = scandir($profileDirectoryAddress);
    $ls_dir = array_splice($ls_dir, 2,);
    if (count($ls_dir) === 2) {
        return $result = "Директория с профилями пуста \r\n";
    } elseif (!isset($_SERVER['argv'][2])) {
        return $result = "Не передан ИД профиля \r\n";
    } else {
        $id_user = $_SERVER['argv'][2];
        foreach ($ls_dir as $str) {
            if (stristr($str, $id_user)) {
                $result .= $str . "\r\n";
                $result_arr[] = $str;
                print_r($result_arr);
            }
        }

//        for ($i = 0; $i < count($result_arr); $i++) {
//            $resourse = fopen($profileDirectoryAddress . $result_arr[$i], 'r');
//            $data = fread($resourse, 100);
//            $data = json_decode($data);
//            print_r($data);
//        }
    }

    return $result;

}


