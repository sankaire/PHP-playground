<?php

// What is class and instance

class Person{
    //properties
    public $age;
    public $country;

    public function id($age){
        if($age < 18){
            echo 'You are not an adult!!';
        }
    }

}

$Peter = new Person;

$Peter -> $age = 21;
$Peter -> $country = 'Kenya';
$Peter -> id(18);


// Create Person class in Person.php



// Create instance of Person

// Using setter and getter