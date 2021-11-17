<?php
require_once 'Person.php';
require_once 'Students.php';

// What is class and instance
$p = new Person('Peter', 'Kenya');
$p->setAge(21);

echo '<pre>';
var_dump($p);
echo '<pre>';

echo $p->getAge($age);


$p2 = new Person('Angie', 'Kenya');
$p2->setAge(20);

echo '<pre>';
var_dump($p2);
echo '<pre>';
echo Person::getCounter();

//create new student

$s = new Students('Sankaire', 'Tanzania', 'sasw123');
$s->setAge(24);

echo '<pre>';
var_dump($s);
echo '<pre>';
echo Person::getCounter();




// echo $p->name = 'Tepela';
// echo $p->nationality = 'Kenya';

// echo $p->name. '<br>';
// echo $p->nationality. '<br>';