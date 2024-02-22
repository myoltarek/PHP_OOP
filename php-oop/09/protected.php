<?php

class User{
    private   $name = 'Tarek';
    protected $roll = 936334;

    public function display() {
        echo "This name is: " .$this->name .'<br>';
        echo "This roll is: " .$this->roll .'<br>';
    }

    protected function test(){
        echo "hello";
    }
}

class Student extends User{
    
    public function set(){
        $this->name = 'Akash';
        $this->roll = 10;
        $this->test();
        echo "<br>";
    }
}

// $user  = new User;
// $user->display("naeem",123456);

$std = new Student;
$std->set();
$std->display();