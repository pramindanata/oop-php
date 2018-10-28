<?php
require_once __DIR__."/vendor/autoload.php";

use Classes\Database;

session_start();

if (!isset($_POST['id'])) {
    header("location: 404.php");
    die();
}

$database = new Database();
$database->query("SELECT * FROM posts WHERE id={$_POST["id"]}");
$post = $database->resultSet()[0];

if (!isset($post)) {
    header("location: 404.php");
    die();
}

$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
$title = $post["title"];
$content = $post["content"];

$database = new Database();
$database->query("DELETE FROM posts WHERE id = {$post['id']}");
$database->execute();

$_SESSION["msg"] = "Post deleted.";
header("location: index.php");

die();
