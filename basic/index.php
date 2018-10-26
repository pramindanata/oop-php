<?php
require "./classes/User.php";
require "./classes/Post.php";

use Classes\User;
use Classes\Post;

$user = new User("Eksa", "uwu");
$user->register();
$user->login();

$post = new Post();
$post->name = 'Robbery';

echo $post->name;

var_dump(isset($post->name));
