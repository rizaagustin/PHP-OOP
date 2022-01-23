<?php

require_once "data/Student.php";

$student1 = new Student();
$student1->id = "1";
$student1->name = "Riza";
$student1->value=100;
$student1->setSample("tes");

var_dump($student1);
// cara 1
// echo $student1("!222",1,true,"Riza"). PHP_EOL;