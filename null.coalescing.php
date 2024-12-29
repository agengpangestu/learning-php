<?php

$data = [
    "id" => 100,
    "name" => "Astaga",
    "naga" => "ikan laut"
    // "naga" => null
];

if (isset($data["naga"])) {
    $naga = $data['naga'];
} else {
    $naga = "nothing here";
}

$naga = $data["naga"] ?? "Nothing";

echo $naga . PHP_EOL;