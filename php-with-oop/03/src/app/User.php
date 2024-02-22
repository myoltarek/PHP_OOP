<?php

namespace App;

/**
 * User
 */

class User
{
    public static $instanceOfNumber = 0;
    private static $instance = null;

    private function __construct()
    {
        self::$instanceOfNumber += 1;
    }
    public function display(){
        echo 'This is user class <br>';
    }

    public static function get()
    {
        if (self::$instance == null) {
            self::$instance = new self;
        }
        return self::$instance;
    }
}