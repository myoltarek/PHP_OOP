<?php
    // Access Modifire Public, Private and Protected
    // Private access only same class
    // Protected access same class and chile class can access

    class User{
        private $name = 'Tarek';

        public function setName(string $name) : void {
            $this->name = $name;
        }

        function display(){
            echo "User name is: {$this->name}";
        }

        
    }

    $obj = new User;

    $obj->setName('Tarek hossen naeem');
    // echo $obj->name;

    $obj->display();