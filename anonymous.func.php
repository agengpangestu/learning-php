<?php

$test = function (string $name) {
    echo "Hi, $name" . PHP_EOL;
};

// arrow function

$testOne = fn() => "Test ooi" . PHP_EOL;

echo $test("Pain Tendo");
echo $testOne();

// calling callback

function testing(string $name, callable $filter)
{
    $theName = call_user_func($filter, $name);
    echo "hi, $theName" . PHP_EOL;
}

testing("ageng p", "strtoupper");
testing("test", function (string $name): string {
    return strtoupper($name);
});
testing("test jiga", fn($name) => strtoupper($name));