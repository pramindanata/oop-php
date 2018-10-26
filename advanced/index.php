<?php
require "classes/Duck.php";
require "classes/User.php";

use Classes\Duck;
use Classes\User;

if (User::validatePassword("wosawo")) {
    echo "Password is valid";
} else {
    echo "Password is not valid";
}

echo "<br />";
echo "Valid password length: ", User::$minPassLength;

echo "<br />";

$duck = new Duck();
$duck->name = 'Donald';
$duck->color = 'White';

$duck->describe();
$duck->makeSound();