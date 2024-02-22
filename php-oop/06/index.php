<?php

// Constructor and Destructor

class Student
{
    public $name;

    function __construct($name)
    {
        $this->name = $name;
    }

    function display(){
        echo "Name is : ". $this->name;
    }

    function __destruct()
    {
        echo "<br> Work after all complete.";
    }
}

$obj = new Student('Tarek Hossen');

$obj->display();
