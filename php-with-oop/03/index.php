<?php

require "./vendor/autoload.php";

use App\Main;
use App\User;

// $main = new Main();
// $main2 = new Main();
// $main3 = new Main();
// $main4 = new Main();
// $main->display();

// echo Main::$numberOfInstance;

//////////////

// $user = new User;
// $user->display();

$user = User::get();
$user->display();
$user->display();
$user->display();
$user->display();
$user->display();

echo User::$instanceOfNumber;

