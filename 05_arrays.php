<?php

// Create array

$fruits = ['Apple', 'Banana', 'Mongo', 'Berries'];


// Print the whole array
echo '<pre>';
var_dump($fruits);
echo '</pre>';

// Get element by index

echo $fruits [1]. '<br>';

// Set element by index

$fruits [3] = 'ovacado';

echo '<pre>';
var_dump($fruits);
echo '</pre>';

// Check if array has element at index 2

isset($fruits[2]); //true
 
// Append element

$fruits [] = 'Watermelon';

echo '<pre>';
var_dump($fruits);
echo '</pre>';

// Print the length of the array

echo count($fruits). '<br>';

// Add element at the end of the array

array_push($fruits, 'fooo');
echo '<pre>';
var_dump($fruits);
echo '<pre>';

// Remove element from the end of the array

array_pop($fruits);

echo '<pre>';
var_dump($fruits);
echo '<pre>';

// Add element at the beginning of the array

array_unshift($fruits, 'fsfsf');

echo '<pre>';
var_dump($fruits);
echo '<pre>';
// Remove element from the beginning of the array

array_shift($fruits);
echo '<pre>';
var_dump($fruits);
echo '<pre>';

// Split the string into an array

$string = "banana, orange, mongo";

echo '<pre>';
var_dump(explode(',', $string));
echo '<pre>';

// Combine array elements into string

echo implode('$', $fruits). '<br>';

// Check if element exist in the array

echo '<pre>';
var_dump(in_array('Mongo', $fruits));
echo '<pre>';

// Search element index in the array

echo '<pre>';
var_dump(array_search('Mongo', $fruits));
echo '<pre>';

// Merge two arrays

$vegetables = ['sukumawiki', 'cucumber'];

echo '<pre>';
var_dump(array_merge($fruits, $vegetables));
echo '<pre>';


// Sorting of array (Reverse order also)

sort($fruits);
 echo '<pre>';
 var_dump($fruits);
 echo '<pre>';


// https://www.php.net/manual/en/ref.array.php

// ============================================
// Associative arrays
// ============================================

// Create an associative array

$person = [
    'fname' => 'Peter',
    'sname' => 'Tepela',
    'age' => 21,
    'hobbies' => ['soccer', 'basketball', 'swimming'],
];
echo '<pre>';
print_r($person);
echo '<pre>';

// Get element by key

echo $person['fname']. '<br>';

// Set element by key

$person['company'] = 'Qwetu inc,';
echo '<pre>';
print_r($person);
echo '<pre>';


// Null coalescing assignment operator. Since PHP 7.4

if(!isset($person['address'])){
    $person['address'] = '000 newel road';
}

echo '<pre>';
print_r($person);
echo '<pre>';


// Check if array has specific key
 
 
// Print the keys of the array
echo '<pre>';
print_r(array_keys($person));
echo '<pre>';
// Print the values of the array
echo '<pre>';
print_r(array_values($person));
echo '<pre>';
// Sorting associative arrays by values, by keys
ksort($person);
echo '<pre>';
print_r(($person));
echo '<pre>';
// Two dimensional arrays

$todos = [
    [
        'title' => 'todo title 1',
        'comleted' => true,
    ],
    [
        'title' => 'todo title 2',
        'comleted' => false,
    ],
];
echo '<pre>';
print_r(($todos));
echo '<pre>';