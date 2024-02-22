<?php
    //Multilevel Inheritance

class User{
    public $name = 'Naeem';
    function display(){
        echo "This is user class </br>";
    }
}

class SchoolUser extends User{
    function school(){
        echo "Welcome to our programming school. <br>";
    }
}

class Student extends SchoolUser{
    function name(){
        echo 'This is student name: Tarek </br>';
    }
}

$sUser = new Student;

$sUser->display();
$sUser->school();
$sUser->name();
echo $sUser->name;
