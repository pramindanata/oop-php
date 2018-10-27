<?php
require_once __DIR__."/vendor/autoload.php";

use Classes\Duck;
use Classes\User;
use Classes\People;

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

$people = new People();
$people->iterateObject();

foreach ($people as $key => $value) {
    echo "{$key} => {$value} <br />";
}
