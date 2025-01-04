<?php

namespace Data\Traits;

trait SayGoodBye
{
    function goodBye(?string $name): void
    {
        if (is_null($name)) {
            echo "Good bye" . PHP_EOL;
        } else {
            echo "Good bye $name" . PHP_EOL;
        }
    }
}

trait SayHello
{
    function hello(?string $name): void
    {
        if (is_null($name)) {
            echo "Hello" . PHP_EOL;
        } else {
            echo "Hello $name" . PHP_EOL;
        }
    }
}

trait HasName
{
    public string $name;
}

trait CanRun
{
    public abstract function run(): void;
}


class ParentPerson
{

    public function goodBye(?string $name): void
    {
        echo "Good bye in person class" . PHP_EOL;
    }

    public function hello(?string $name): void
    {
        echo "Hello in person class" . PHP_EOL;
    }
}

// trait inheritence
trait All
{
    use SayGoodBye, SayHello, HasName, CanRun {
    // hello as private;
    // goodBye as private;
    }
}

class Person extends ParentPerson // parent ter override sama si trait
{
    // trait inheritence
    use All;
    // trait visibility override
    // use SayGoodBye, SayHello, HasName, CanRun {
    //     // hello as private;
    //     // goodBye as private;
    // }

    // trait overriding
    public function run(): void
    {
        echo "Person $this->name is running" . PHP_EOL;
    }

    // trait SayGoodBye dan SayHello ter override diisni
    // public function goodBye(?string $name): void
    // {
    //     echo "Good bye in person class" . PHP_EOL;
    // }

    // public function hello(?string $name): void
    // {
    //     echo "Hello in person class" . PHP_EOL;
    // }
}


// note: ParentClass = override by => Trait = override by => childClass