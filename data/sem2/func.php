<?php
function func1(string $val): string
{
    return $val;
}



if(function_exists('func1')){
    echo func1("ФУНКЦИЯ СУЩЕСТВУЕТ");
}else{
    echo 'Функции func1 нет';
}
