<?php
require './User.php';

use basic\User;

$user = new User();
$user->register();
$user->login('Eksa', 'uwu');
