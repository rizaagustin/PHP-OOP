<?php 

require_once "data/Manager.php";

$manager = new Manager();
$manager->name = "Riza";
$manager->sayHello("Budi");

$vp = new VicePresident();
$vp->name = "Adul";
$vp->sayHello("Budi");
