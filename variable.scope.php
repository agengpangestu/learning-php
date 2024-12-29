<?php

$test = "it's testing"; // it's global scope

function testing()
{
    global $test; // after declare global, we can access variable $test
    echo "try access test $test" . PHP_EOL;
}

testing();

// local scope
function testTwo()
{
    global $test_two; // after declare global, we can access variable $test
    $test_two = "Hi";
}
testTwo();
echo "$test_two" . PHP_EOL; // can't access variable $test_two

// accessing global scope
var_dump($GLOBALS["test_two"]);