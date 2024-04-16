<?php

namespace App;

use Exception;

class Calculate
{
    public function add(...$args): float|int
    {
        return array_sum($args);
    }
}