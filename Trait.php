<?php

require_once "data/SayGoodBye.php";

use Data\Traits\{Person, SayHello, SayGoodBye};

$person = new Person();
$person->goodBye("Riza");
$person->Hello("Eki");

$person->name = "Billy";

var_dump($person);

$person->run();