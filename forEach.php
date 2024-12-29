<?php

$datas = [
    "id" => 1,
    "name" => "naga",
    "address" => "Mt. Shangchan",
    "status" => "single"
];

foreach ($datas as $data) {
    echo "it's data's $data" . PHP_EOL;
}

foreach ($datas as $key => $value) {
    echo "$key : $value" . PHP_EOL;
}