<?php

// while loops
 
// while(/*condition*/){
//     //excecution;
// };
 
// Loop with $counter
 
$counter = 0;
while($counter < 10){
    echo $counter. '<br>';
    if($counter === 5){
        break;
    }
    $counter++;
}
 
// do - while

do{
    echo $counter. '<br>';
    $counter ++;
} while($counter < 20);

// for loop

for($j = 0; $j < 10; $j++){
    echo $j. '<br>';
}
 
// foreach 

$fruits = ['Apple', 'Banana', 'Mongo', 'Berries'];

foreach($fruits as$i => $fruit){
    echo $i. $fruit. '<br>';
}
 
// Iterate Over associative array.

$person =[
    'fname' => 'Peter',
    'sname' => 'Tepela',
    'hobies' => [
        'soccer', 'swimming', 'coding',
    ],
];

foreach($person as $key => $value){

    if(is_array($value)){
        echo $key.' '.implode(',', $value). '<br>';
    }else{
        echo $key.' '.$value . '<br>';
    }
}