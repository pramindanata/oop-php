<?php
require "classes/User.php";

use Classes\User;

if (User::validatePassword("wosawo")) {
    echo "Password is valid";
} else {
    echo "Password is not valid";
}

echo "<br />";
echo "Valid password length: ", User::$minPassLength;
