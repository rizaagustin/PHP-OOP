<?php
require_once "data/Manager.php";

$manager = new Manager();
$manager->name = "Riza";
$manager->sayHello("Eki");

//overriding mengambil yg di class president bukan di class parent
$vp = new VicePresident();
$vp->name = "Riza";
$vp->sayHello("Ekio");