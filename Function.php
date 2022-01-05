<?php 
require_once "data/Person.php";

// $person = new Person();
// var_dump($person);
// $person->sayHello("Riza");

$riza = new Person();
$riza->name = "Riza";
$riza->sayHello("Budi");

$billy = new Person();
$billy->name = "Billy";
$billy->sayHello(null);