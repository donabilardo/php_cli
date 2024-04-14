<?php


if(file_exists(__DIR__ . '/user.txt') && is_readable(__DIR__ . '/user.txt')){
    $resource = fopen(__DIR__ . '/user.txt', 'r');
    while (!feof($resource)){
        echo fgets($resource);
    }
}


echo file_get_contents('user.txt');






