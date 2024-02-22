<?php

class User
{
    public $name;
    public $address;

    public function __construct(string $name, string $address)
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

class Employee extends User
{
    public $id;

    public function __construct(string $name, string $address, int $id)
    {
        $this->id = $id;
        parent::__construct($name,$address);
    }

    public function getId() : int
    {
        return $this->id;
    }
}



$emp = new Employee('Tarek','Dhaka',10);
$emp->display();
echo "<br>";