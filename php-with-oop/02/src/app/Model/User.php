<?php

namespace App\Model;

class User
{
    public $name    = 'Tarek';
    public $address = 'Dhaka';
    
    public function getUser()
    {
        echo "Name is : {$this->name} <br>";
        echo "Address is : {$this->address} <br>";
    }
}