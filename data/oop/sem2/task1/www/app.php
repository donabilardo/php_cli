<?php

require_once '/data/oop/sem2/task1/vendor/autoload.php';

use App\Employee;

$oleg = new Employee("Oleg", 25, 3000);
$maria = new Employee("Maria", 44, 2900);


echo $oleg->getName();
echo $maria->getAge();