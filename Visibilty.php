<?php
require_once "data/Product.php";

$product = new Product("Apple", 20000);
// echo $product->name . PHP_EOL; // error karena private
// echo $product->price . PHP_EOL; // error karena private

echo $product->getName() . PHP_EOL;
echo $product->getPrice() . PHP_EOL;

$dummy = new ProductDummy("Dummy",1000);
$dummy->info();