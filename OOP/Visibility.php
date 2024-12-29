<?php

require_once "data/Product.php";

$product = new Product("naga", 200);

echo $product->getName() . PHP_EOL;
echo $product->getPrice() . PHP_EOL;

$dummy = new ProductDummy("Product Dummy", 400);
$dummy->info();