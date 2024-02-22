<?php

require "./vendor/autoload.php";

use App\Main;
use App\Model\User;
use App\Model\Student;

$user = new Student;

// $user->getUser();
// $user->getRoll();
$user = new User;
$main = new Main($user);
$main->hello();
