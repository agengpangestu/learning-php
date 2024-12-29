<?php

namespace Data;

abstract class Animal
{
    public string $name;

    abstract public function run(): void;
}

class Cat extends Animal
{

    // di haruskan overriding function 
    public function run(): void
    {
        echo "Cat $this->name is running" . PHP_EOL;
    }
}

class Dog extends Animal
{

    // di haruskan overriding function 
    public function run(): void
    {
        echo "Dog $this->name is running" . PHP_EOL;
    }
}