<?php

require_once "data/Student.php";

$student1 = new Student();
$student1->id = "1";
$student1->name = "Riza";
$student1->value=100;
$student1->setSample("tes");
var_dump($student1);

$student2 = clone $student1;
var_dump($student2);

// cara manual clone, akan kesulitan apabila propertiesnya banya;
// $student1 = new Student();
// $student1->id = "1";
// $student1->name = "Riza";
// $student1->value=100;
