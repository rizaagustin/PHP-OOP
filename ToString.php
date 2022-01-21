<?php

require_once "data/Student.php";

$student1 = new Student();
$student1->id = "1";
$student1->name = "Riza";
$student1->value=100;


// cara 1
echo $student1. PHP_EOL;

// cara 2
$string = (string) $student1;
echo $string . PHP_EOL;