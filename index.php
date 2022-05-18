<?php

// Turn on error reporting
error_reporting(E_ALL);
ini_set('display_errors', TRUE);

// require per class
require ('pet.php');

// create an object
$pet = new Pet();

// call the eat method
$pet->eat();
