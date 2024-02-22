<?php

// properties and methods 

class Vehicle
{
    public $name  = 'R5';
    public $color = 'Black';
    public $price;

    function set(string $name,string $color,int $price = 2000) : void
    {
        $this->name  = $name;
        $this->color = $color;
        $this->price = $price;
    }

    function display() : void
    {
        echo "Name is: ". $this->name ."<br>";
        echo "Color is: ". $this->color ."<br>";
        echo "Price is: ". $this->price ."<br><br>";
    }
    function getName()
    {
        return $this->name."<br><br>";
    } 
}
echo "properties and methods <br><br>";
$vehicle = new Vehicle();

// $vehicle->name = "Car";
// $vehicle->color = "Red";

$vehicle->display();

$vehicle->set('Royal','Black');
$vehicle->display();

$vehicle->set('Motor','Red', 3000);
$vehicle->display();

echo "Work with return type :<br>";

echo $vehicle->getName();

echo "New Object :<br>";

$obj = new Vehicle();

$obj->display();
