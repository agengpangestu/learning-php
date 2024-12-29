<?php


// function testSayingSomething()
// {
//     echo "apa lo?";
// }

// testSayingSomething();


$making = true;

if ($making) {
    function testSayingSomething()
    {
        echo "apa lo?" . PHP_EOL;
    }
}

testSayingSomething();

// with argument or parameter and default value

function akatsuki($name, $abilities = "Anonymous")
{
    echo "It's Akatsuki $name with jutsu $abilities" . PHP_EOL;
}

akatsuki("Yahiko Tendo", "Shinra tense");
akatsuki("Kisame", "Suiton");
akatsuki("Orochimaru");

// wiht type declaration

function sum(int $first, int $last)
{
    $total = $first + $last;
    echo "Total $first and $last = $total" . PHP_EOL;
}

sum("100", 200);
sum("400", "20");
sum(true, false);

function sumAll(...$values)
{
    $count = 0;
    foreach ($values as $value) {
        $count += $value;
    }

    echo "Total " . implode(",", $values) . "= $count" . PHP_EOL;
}

$test = [2, 5, 76, 8, 97, 5];
sumAll(1, 2, 4, 5, 1, 6, 7, 10, 8, 9, 9, 4, 0);
sumAll(...$test);


// return value

function minus(int $one, int $two): int
{
    $total = $one - $two;
    return $total;
}

$res = minus(10, 5);
var_dump($res);

function valueScore(int $value): string
{
    if ($value >= 90) {
        return "JEaaaaaajjj";
    } else if ($value >= 75) {
        return "watttt ?";
    } else if ($value >= 55) {
        return "nyeah";
    } else {
        return "Bad";
    }
    echo "nani!?" . PHP_EOL;
}

$score = valueScore(20);
var_dump($score);