<?php

// Function which prints "Hello I am Zura"
function hello(){
    echo 'hello I am peter'. '<br>';
}

hello();
// Function with argument

function hello1($name){
    echo $name. ' '. 'sasa'. '<br>';
}

hello1('Peter Tepela');
// Create sum of two functions

function sum($num1, $num2){
    echo $num1 + $num2. '<br>';
}

sum(4, 10);

// Create function to sum all numbers using ...$nums

function sum2(...$nums){

    $sum = 0;

    foreach($nums as $n){
        $sum += $n;
    }
    return $sum;
}

sum2(1, 2, 3, 4, 5);
// Arrow functions
function sum3(...$nums){
    return array_reduce($nums, fn($curry, $n) => $curry + $n);
}

echo sum3(1, 2, 3, 4, 5, 6);
