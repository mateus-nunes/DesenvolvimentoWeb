<?php

use App\Classes\User;
use App\Controllers\HomeController;

require_once __DIR__ . "/../vendor/autoload.php";

echo "URI: " .  $_SERVER['REQUEST_URI'];

echo "<br>";
$user = new User();
$hc = new HomeController();

