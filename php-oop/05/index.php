<?php

// instanceof Operator

class A{
    public $name;
}
class B{
    public $name;
}

$a = new A;
$b = new B;

var_dump( $b instanceof B);