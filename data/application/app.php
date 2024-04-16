<?php

//require_once('src/main.function.php');
//require_once('src/template.function.php');
//require_once('src/file.function.php');
//require_once('src/profiles.php');
//require_once('src/lib/translite.php');

require_once ('vendor/autoload.php');

$result = main(__DIR__ . '/config.ini');

echo $result;


//docker compose run --rm -it cli php application/app.php

//composer dump-autoload