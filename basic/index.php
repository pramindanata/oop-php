<?php
require "./classes/User.php";
require "./classes/Post.php";
require "./classes/RaceCar.php";

use Classes\User;
use Classes\Post;
use Classes\RaceCar;

$user = new User("Eksa", "uwu");
$user->register();
$user->login();

$post = new Post();
$post->name = 'Robbery';

echo $post->name;

var_dump(isset($post->name));

echo "<br />";

$raceCar = new RaceCar();
$raceCar->turnOnEngine();
$raceCar->gas();
$raceCar->turnOnNitro();

echo $raceCar->hasRadio;
