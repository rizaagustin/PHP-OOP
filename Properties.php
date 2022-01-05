<?php
require_once "data/Person.php";

$person = new Person();
$person->name = "Riza";
$person->address = "Jakarta";
// $person->country= "Indonesia";
var_dump($person);

echo "Name : $person->name ". PHP_EOL;
echo "Address : $person->address ". PHP_EOL;
echo "Country : $person->country ". PHP_EOL;

$person2 = new Person();
$person2->name = "Arief";
$person2->address = "Jakarta";
$person2->country= "Thailand";
var_dump($person2); 

echo "Name : $person2->name ". PHP_EOL;
echo "Address : $person2->address ". PHP_EOL;
echo "Country : $person2->country ". PHP_EOL;

