<?php
/*
 * Kayley Young
 * January 2024
 * https://kyoung38.greenriverdev.com/328/diner/
 * This is my CONTROLLER for the Diner app
 */
// Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//require the autoload file
require_once ('vendor/autoload.php');

//Instantiate Fat-Free framework (f3)
$f3 = Base::instance();

//Define a default route-invoking route method
$f3->route('GET /', function() {
    echo "My Diner";
});
// Run Fat-Free
$f3->run();


