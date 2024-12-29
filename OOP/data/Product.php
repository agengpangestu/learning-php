<?php

class Product
{

    // visibility
    protected string $name;
    protected int $price; // jika menggunakan protected, turunan class dapat mengakses ini

    public function __construct(string $name, int $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    // dapat di akses karena public --
    public function getName(): string
    {
        return $this->name;
    }

    public function getPrice(): int
    {
        return $this->price;
    }
    // --
}

class ProductDummy extends Product
{
    public function info()
    {
        echo "name $this->name" . PHP_EOL;
        echo "price $this->price" . PHP_EOL;
    }
}