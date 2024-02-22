<?php

// properties and methods 

class Student
{
    public $name;
    public $roll;

    function getName() : string 
    {
        return $this->name;
    }

    function getRoll() : ?int // (?) this sign is means optional
    {
        return $this->roll;
    }

    function display()
    {
        echo "Name is: " . $this->getName().'<br><br>';
        echo "Roll is: " . $this->getRoll().'<br><br>';
    }
}

echo "============ <br><br>";
echo "This Keyword <br><br>";
echo "============ <br><br>";

$student = new Student();

$student->name = "Tarek";

$student->roll = 321654;

$std = new Student();

$std->name = "Naeem";
$std->roll = 123456;
$std->display();