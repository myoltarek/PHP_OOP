<?php

// Inheritance

class Student
{
    public $name;

    function display(){
        echo "Name is : ". $this->name;
    }

}

class School extends Student {
    
}

$scl = new School;
$scl->name = 'Tarek';
$scl->display();
