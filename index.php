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

// Require the autoload file
require_once ('vendor/autoload.php');



//test my order class
/*
$order = new Order("pizza", "breakfast");
var_dump($order);
*/

//test my DataLayer class

//var_dump( DataLayer::getMeals() );
//var_dump( DataLayer::getCondiments() );

//test validate class
//echo Validate::validMeal("food");


// Instantiate Fat-Free framework (F3)
$f3 = Base::instance(); //static method
$con = new Controller($f3);

//instantiate the DataLayer class
$dataLayer = new DataLayer();

//test DataLayer class
//echo "<pre>";
//var_dump($dataLayer->getOrders());
//echo "</pre>";

// Define a default route
$f3->route('GET /', function() {
    $GLOBALS['con']->home();
});

// Define a breakfast route
$f3->route('GET /breakfast', function() {
    $GLOBALS['con']->breakfast();
});

// Define a order form 1 route
$f3->route('GET|POST /order1', function($f3) {
   $GLOBALS['con']->order1();
});

// Define a order form 2 route
$f3->route('GET|POST /order2', function($f3) {
   $GLOBALS['con']->order2();
});

// Define an order summary route
$f3->route('GET /summary', function() {
  $GLOBALS['con']->summary();
});
// Define a view order route
$f3->route('GET /view-orders', function() {
    $GLOBALS['con']->view();
});
// Run Fat-Free
$f3->run(); //instance method