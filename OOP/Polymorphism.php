<?php

require_once "data/Programmer.php";

$company = new Company();
$company->programmer = new Programmer("Nagato");
var_dump($company);

// semua turunan
$company->programmer = new BackendProgrammer("Konan");
var_dump($company);

$company->programmer = new FrontendProgrammer("Naruto");
var_dump($company);

// func argument polymorphism
helloProgrammer(new Programmer("Kakashi"));
helloProgrammer(new BackendProgrammer("A"));
helloProgrammer(new FrontendProgrammer("Bee"));