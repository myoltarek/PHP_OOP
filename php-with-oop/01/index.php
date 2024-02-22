<?php

require "./vendor/autoload.php";

use App\Main;
use App\Model\User;


$obj = new Main;

$obj->display();

$user = new User;

$user->getUser();