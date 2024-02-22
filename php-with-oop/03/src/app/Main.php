<?php

namespace App;

use App\Model\User;

class Main
{
    public static $numberOfInstance = 0;

    public function __construct()
    {
        self::$numberOfInstance += 1;
    }

    public function display() : void {
        echo "Welcome to Main class <br>";
    }
}