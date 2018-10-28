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

if (!isset($_POST["title"]) || !isset($_POST["content"])) {
    $_SESSION["msg"] = "All fields are required.";
    header("location: edit.php");
    
    die();
}

$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
$title = $post["title"];
$content = $post["content"];

$database = new Database();
$database->query("UPDATE posts SET title = :title, body = :body WHERE id = {$_POST["id"]}");
$database->bind(":title", $title);
$database->bind(":body", $content);
$database->execute();

$_SESSION["msg"] = "Post updated.";
header("location: edit.php?id={$_POST['id']}");

die();
