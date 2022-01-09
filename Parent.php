<?php
require_once "Data/Shape.php";

use Data\{Shape, Rectangel};

$shape = new Shape();
echo $shape->getCorner(). PHP_EOL;

$shape = new Rectangel();
echo $shape->getCorner(). PHP_EOL;
echo $shape->getParentCorner(). PHP_EOL;
