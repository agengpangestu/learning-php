<?php

goto acumalaka;
echo "katon: gokakyu" . PHP_EOL; // if use goto, skipped this line

acumalaka:
echo "suiton: seisuha" . PHP_EOL;

$count = 1;

while (true) {
    echo "running - $count" . PHP_EOL;
    $count++;

    if ($count > 100) {
        goto ningen;
    }
}

ningen:
echo "sorry, not running or stoped";