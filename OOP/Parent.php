<?php

require_once "data/Shape.php";

use Data\{Shape, Rectangle};

$sahpe = new Shape();
echo $sahpe->getCorner() . PHP_EOL;

$rectangle = new Rectangle();
echo $rectangle->getCorner() . PHP_EOL;
echo $rectangle->getParentCorner() . PHP_EOL;