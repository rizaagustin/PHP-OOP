<?php

$array = [
    "firstName" => "Riza",
    "middleName" => "Agustin",
    "lastName"=>"test"
];

// merubah array menjadi object stdClass
$object = (object)$array;
var_dump($object);

echo "First Name $object->firstName" . PHP_EOL;


// mengubah kembali stdclas menjadi array
$array_lagi = (array)$object;
var_dump($array_lagi);

require_once "Person.php";
$person = new Person("Riza","Jakarta");
var_dump($person);

// semua properti menjadi array
$arrayPerson = (array) $person;
var_dump($arrayPerson);