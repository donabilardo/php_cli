<?php
require_once __DIR__ . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

use App\Main;

$result = new Main();
$result->run(__DIR__ . '/config.ini');




