<?php
require_once "data/Programmer.php";

$company = new Company();
$company->programmer = new Programmer("Riza");
var_dump($company);
$company->programmer = new BackendProgrammer("Riza");
var_dump($company);
$company->programmer = new FrontendProgrammer("Riza");
var_dump($company);


//polymorphism function argumen
sayHelloProgrammer(new Programmer("Riza"));
sayHelloProgrammer(new BackendProgrammer("Riza"));
sayHelloProgrammer(new FrontendProgrammer("Riza"));