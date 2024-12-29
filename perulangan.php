<?php

$data = [];

for ($counting = 1; $counting < 100; $counting++) {
    echo "xie xie-$counting" . PHP_EOL;
}
for ($counting = 100; $counting > 1; $counting--):
    echo "xie xie-$counting" . PHP_EOL;
endfor;


// while

$a = 1;

while ($a <= 10) {
    echo "ningen-$a" . PHP_EOL;
    $a++;
}

while ($a <= 10):
    echo "ningen-$a" . PHP_EOL;
    $a++;
endwhile;

// do while

do {
    echo "ningen-$a" . PHP_EOL;
    $a++;
} while ($a <= 10);