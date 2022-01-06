<?php
require_once "data/Conflict.php";
require_once "data/Helper.php";

use Data\One\Conflict; // 1 file 1 namespace Data\two tidak bisa dipanggil
use Function Helper\HelpMe; // pemanggilan function
use const Helper\APPLICATION; // pemanggilan constant

$conflict1 = new Conflict();
$conflict2 = new Data\two\Conflict(); // 1 file hanya 1 namespace

helpMe();

echo APPLICATION . PHP_EOL;