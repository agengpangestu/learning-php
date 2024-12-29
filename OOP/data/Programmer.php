<?php

class Programmer
{
    public string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }
}

class BackendProgrammer extends Programmer
{

}

class FrontendProgrammer extends Programmer
{

}

class Company
{
    public Programmer $programmer; // type dari parent class Programmer
}


// function argument polymorphism
function helloProgrammer(Programmer $programmer)
{
    // Type check & casts using 'instanceof'
    if ($programmer instanceof BackendProgrammer) {
        echo "Hello Backend Programmer $programmer->name" . PHP_EOL;
    } elseif ($programmer instanceof FrontendProgrammer) {
        echo "Hello Frontend Programmer $programmer->name" . PHP_EOL;
    } elseif ($programmer instanceof Programmer) {
        echo "Hello programmer $programmer->name" . PHP_EOL;
    }
}