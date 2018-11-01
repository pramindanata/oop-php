<?php
require_once __DIR__."/vendor/autoload.php";
require_once "config.php";

use App\Bootstrap;
use App\Controller\Controller;
use App\Controller\Home;

$bootstrap = new Bootstrap($_GET);
$controller = $bootstrap->createController();

if ($controller) {
    $controller->executeAction();
}