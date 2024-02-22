<?php


class Foo{
    public $color;

    function display(){
        echo "hello world <br>";
    }

    function setColor( $color ) {
        $this->color = $color;
    }

    function getColor() {
        echo "Color is : {$this->color}";
    }
}
echo "Class <br><br>";

$obj = new Foo;

$obj->display();
$obj->color = 'Red';
$obj->getColor();