<?php 
require_once('Route.php');

use Steampixel\Route;

Route::add('/', function(){
    echo "Hello World";
});
Route::run('/routeTest/');


?>