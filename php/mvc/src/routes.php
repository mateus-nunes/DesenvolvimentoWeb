<?php

use App\Controllers\HomeController;

require_once(__DIR__ . "../../vendor/autoload.php");
require_once __DIR__ . '/router.php';


// ##################################################
// ##################################################
// ##################################################

// Static GET
// In the URL -> http://localhost
// The output -> Index
get( '/', function () {
  $home = new HomeController();
  $home->index();
});

get('/user', function(){
  die("Usuário");
});

get( '/user/$id', function ($id) {
  die("Usuário de id = " . $id);
});