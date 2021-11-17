<?php
require_once "Person.php";

class Students extends Person{
    public string $studentId;

    public function __construct($name, $nationality, $studentId)
    {
        $this->studentId = $studentId;
        parent::__construct($name, $nationality, $studentId);
    }
}