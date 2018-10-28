<?php
require_once __DIR__."/vendor/autoload.php";

use Classes\Database;

session_start();

if (!isset($_POST["title"]) || !isset($_POST["content"])) {
    $_SESSION["msg"] = "All fields are required.";
    header("location: create.php");
    
    die();
}

$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
$title = $post["title"];
$content = $post["content"];

$database = new Database();
$database->query("INSERT INTO posts (title, body) VALUES(:title,:body)");
$database->bind(":title", $title);
$database->bind(":body", $content);
$database->execute();

$_SESSION["msg"] = "New post created.";
header("location: create.php");

die();
