<?php
class Person{
    public $name;
    public $nationality;
    private $age;
    public static $counter = 0;

    //constructor
    public function __construct($name, $nationality)
    {
        $this->name = $name;
        $this->nationality = $nationality;
        self::$counter++;
    }
    public function setAge($age){
        $this->age = $age;
    }
    public function getAge($age){
       return $this->age;
    }
    public static function getCounter(){
        return self::$counter;
    }
}