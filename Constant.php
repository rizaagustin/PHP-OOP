<?php 
require_once "data/Person.php";
// versi 1
define("APPLICATION", "BELAJAR OOP");
// versi 2 menuliskan constan
const APP_VERSION = "1.0.0";

echo APPLICATION . PHP_EOL;
echo APP_VERSION . PHP_EOL;

echo Person::AUTHOR . PHP_EOL; // pemanggilan constant

