<?php

class User
{
    public $name;
    public $address;

    public function set(string $name, string $address)
    {
        $this->name = $name;
        $this->address = $address;
    }

    public function display()
    {
        echo "Name is: {$this->name} <br>";
        echo "Address is: {$this->address} <br>";
    }
}

class Employee extends User{
    public $id;

    public function set(string $name, string $address, int $id = null) : void
    {
        parent::set($name,$address);
        $this->id = $id;
    }

    public function display()
    {
        echo "Employee Information <br>";
        echo "Employee id is: {$this->id} <br>";
        Parent::display();
    }
}

class customer extends User{
    public function display()
    {
        echo "Customer Information <br>";
        Parent::display();
    }
}


$emp = new Employee;
$emp->set('Tarek','Dhaka',238);
$emp->display();
echo "<br>";
$cus = new customer;
$cus->set('Tarek Hossen','Dhaka Mirpur');
$cus->display();