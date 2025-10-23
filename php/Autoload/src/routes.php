<?php

use App\Controllers\HomeController;
use App\Controllers\UserController;

require_once __DIR__ . "/../vendor/autoload.php";
require_once __DIR__ . '/router.php';

// ##################################################
// ##################################################
// ##################################################

// Static GET
// In the URL -> http://localhost
// The output -> Index
get('/', function () {
  $home = new HomeController();
  $home->home();
});

get('/usuarios', function () {
  $usr = new UserController();
  $usr->lista();
});

// For GET or POST
// The 404.php which is inside the views folder will be called
// The 404.php has access to $_GET and $_POST
any('/404', 'views/404.php');
