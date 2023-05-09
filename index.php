<?php

/*
 * Mehdi Jokar
 * 05/09/2023
 * 328/week6/index.php
 * Controller for week6 project
 *
 */



// Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);



// Require the autoload file
require_once ('vendor/autoload.php');

// Create an F3 (Fat-Free Framework) object
$f3 = Base::instance();

// Define a default route
$f3->route('GET /', function ($f3) {

    // Add data to F3 "hive"
    $f3->set('color', 'green');
    $f3->set('food', 'pho');
    $f3->set('title', 'Welcome to week 6!');
    $f3->set('temp', 67);

    // Add a radius variable to your controller
    // Template: Print the circumference of a circle
    // C = 2 * PI * radius
    // PHP has a pi() function
    // Round to 3 decimal places
    $f3->set('radius', 14);

    $fruits = array('banana', 'apple', 'kiwi');
    $f3->set('fruits', $fruits);

    $vegetables  = array('Broccoli', 'Spinach', 'Carrots', 'Bell peppers', 'Tomatoes');
    $f3->set('vegetables', $vegetables );


    // Define an associative array of cupcake flavors
    $cupcakes = array(
        "chocolate" => "Chocolate Cupcake",
        "vanilla" => "Vanilla Cupcake",
        "red_velvet" => "Red Velvet Cupcake",
        "lemon" => "Lemon Cupcake",
        "strawberry" => "Strawberry Cupcake"
    );
    $f3->set('cupcakes', $cupcakes );

    // Display a view page
    $view = new Template();
    echo $view->render('views/info.html');
});

// Run Fat-Free
$f3->run();