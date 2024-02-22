<?php
namespace App\Model;

class Student extends User
{
    public $roll = 123;

    public function getRoll(){
        echo "Roll is: {$this->roll} <br>";
    }
}