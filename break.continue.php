<?php

// break
$counting = 1;
while (true) {
    echo "Ningendo-$counting" . PHP_EOL;
    $counting++;

    if ($counting >= 10) {
        break;
    }
}

// continue
for ($counter = 1; $counter <= 100; $counter++) {
    if ($counter % 2 == 0) {
        continue;
    }

    echo "Count : $counter" . PHP_EOL;
}