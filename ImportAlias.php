<?php
require_once "data/Conflict.php";
require_once "data/Helper.php";

use Data\One\Conflict as Conflict1; // 1 file 1 namespace Data\two tidak bisa dipanggil
use Data\Two\Conflict as Conflict2; // 1 file 1 namespace Data\two tidak bisa dipanggil
use Function Helper\HelpMe as help; // pemanggilan function
use const Helper\APPLICATION as APP; // pemanggilan constant

$conflict1 = new Conflict1();
$conflict2 = new Conflict2(); // 1 file hanya 1 namespace

help();

echo APP . PHP_EOL;