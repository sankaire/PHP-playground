<?php

// What is a variable


// Variable types
/*
 interger
 string
 bolean
 float
 null
 object
 array
 resource
*/

// Declare variables

$name = 'Tepela';
$age = 21;
$isMale = true;
$height = 1.90;
$disease = null;

// Print the variables. Explain what is concatenation

echo $name. '<br>';
echo $age. '<br>';
echo $isMale. '<br>';
echo $height. '<br>';
echo $disease. '<br>';

// Print types of the variables 

echo gettype($name). '<br>';
echo gettype($age). '<br>';
echo gettype($isMale). '<br>';
echo gettype($height). '<br>';
echo gettype($disease). '<br>';

// Print the whole variable

var_dump($name, $age, $isMale, $height, $disease);

// Change the value of the variable

$isMale = false;
$name = 'Peter';

// Print type of the variable

echo $name. '<br>';
echo gettype($isMale). '<br>';

// Variable checking functions

echo is_string($name). '<br>';
echo is_int($age);
echo is_bool($isMale);
echo is_double($height);
echo is_null($disease);
// Check if variable is defined

isset($name); //true
isset($foo); //false

// Constants

define('PI', 3.14);
echo PI. '<br>';

// Using PHP built-in constants
echo SORT_ASC. '<br>';
echo PHP_INT_MAX. '<br>';