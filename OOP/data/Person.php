<?php

class Person
{
    // constant
    const AUTHOR = "Pain Tendo";

    // properties
    var string $name;
    var ?string $address = null; // this can null, added '?' for nullable
    var string $country = "Indonesia"; // default


    // construct
    function __construct(string $name, ?string $address)
    {
        $this->name = $name;
        $this->address = $address;
    }

    // function
    function testHello(?string $name)
    {
        if (is_null($name)) {
            echo "my name's $this->name" . PHP_EOL; // this, mengakses object saat ini
        } else {
            echo "Yo $name, this $this->name" . PHP_EOL;
        }
    }

    function info()
    {
        echo "Author: " . self::AUTHOR . PHP_EOL; // accessing constant using 'self'
    }

    // destructor
    function __destruct()
    {
        echo "OBject person $this->name is destroyed" . PHP_EOL;
    }
}