<?php

for ($i = 0; $i <= 10; $i++) {
    if ($i % 2 != 0) {
        continue;
    }
    echo "Число $i четное" . PHP_EOL;
}