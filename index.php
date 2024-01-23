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
$f3 = Base::instance();  //instance method

//Define a default route-invoking route method
    $f3->route('GET /', function() {
       // echo "My Diner";

        //display a view page
        $view = new Template();// template is a class from fat-free
        echo $view->render('views/home.html');
    });

//Define a breakfast route
    $f3->route('GET /breakfast', function() {
        //echo "My breakfast";

        //display a view page
        $view = new Template();// template is a class from fat-free
        echo $view->render('views/breakfast-menu.html');
    });
// Define a breakfast route
    $f3->route('GET|POST /order1', function($f3) {
        //echo "Order Form Part I";

        // If the form has been posted
        if($_SERVER['REQUEST_METHOD'] == 'POST') {

            // Validate the data
            $food = $_POST['food'];
            $meal = $_POST['meal'];

            // Put the data in the session array
            $f3->set('SESSION.food', $food);
            $f3->set('SESSION.meal', $meal);

            // Redirect to order2 route
            $f3->reroute('summary');

        }

        // Display a view page
        $view = new Template();
        echo $view->render('views/order-form-1.html');
    });

//define a order 2 form route
    $f3->route('GET|POST /order2', function($f3) {
        // echo "My Diner";
/*
        //if the form has been posted
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            //validate the data
            $food = $_POST['food'];
            $meal = $_POST['meal'];

            //put the data in the session array
            $f3->set('SESSION.food', $food);
            $f3->set('SESSION.meal', $meal);
            //redirect to order2 route
            $f3->reroute('order2');
        }
*/
        //display a view page
        $view = new Template();// template is a class from fat-free
        echo $view->render('views/order-form-2.html');
    });


//Define a summary route
    $f3->route('GET /summary', function() {
       // echo "Thank you for your order";

        //display a view page
        $view = new Template();// template is a class from fat-free
        echo $view->render('views/order-summary.html');
    });
// Run Fat-Free
$f3->run(); //instance method


