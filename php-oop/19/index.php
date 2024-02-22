<?php

trait User{
    public function get()
    {
        echo "Welcome to trait <br>";
    }
}
trait ShowStudent{
    public $name = "Tarek";

    public function showStudentName()
    {
        echo "Student Name Is: Tarek <br>";
    }

    private function displayName(){
        echo "The Name is : {$this->name}";
    }
}

class Student{
    use User,ShowStudent;

    public function display() {
        $this->showStudentName();
        $this->displayName();
    }
}

$std = new Student;
$std->get();
$std->display();