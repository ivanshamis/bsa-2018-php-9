<?php

namespace App\Helpers;

use Request;

class Helper {
    public static function setActive(string $route, string $class = 'active')
    {
        return (Request::url() == $route) ? $class : '';
    }
}