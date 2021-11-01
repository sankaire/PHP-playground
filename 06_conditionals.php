<?php

$age = 20;
$salary = 300000;

// Sample if

if($age === 20){
    echo 'Thas is not Peter'. '<br>';
}

// Without circle braces

if($age === 21)
    echo 'thats is It';

// Sample if-else

if($age > 20){
    echo '1';
} else {
    echo '2'. '<br>';
}

// Difference between == and ===

$age == 20; //true
$age == '20'; //true

$age === 20; //true
$age === '20';//false


// if AND
 
if($age === 20 && $salary === 300000){
    echo 'Wow!'. '<br>';
}

// if OR

if ($age == '20' || $salary === 300000){
    echo 'do something'. '<br>';
}

// Ternary if
 
echo $age < 22 ? 'Young' : 'Old';
 
// Short ternary
 
$myAge = $age ?: 21;

echo '<pre>';
print_r($myAge);
echo '<pre>';
// Null coalescing operator 
// isset($name) ? $name : 'Peter';
 
$myName = $name ?? 'Peter Tepela';

echo $myName. '<br>';
 
// switch

$userRole = 'Admin'; //editor, User, admin

switch($userRole){
    case 'Admin':
        echo ucfirst('admin');
        break;
    case 'Editor':
        echo 'editor';
        break;
    case 'User':
        echo 'user';
        break;
    default:
    echo 'None';
}