<?php

class Manager
{
    var string $name;
    var string $title;

    public function __construct(string $name = "", string $title = "Manager") {
        $this->name = $name;
        $this->title = $title;
    }

    function testSay(string $name): void // tidak mengembalikan value
    {
        echo "Hi $name, it's Manager $this->name" . PHP_EOL;
    }
}

// inheritence
class VicePresident extends Manager
{
    // overriding parent constructor 
    public function __construct(string $name = "")
    {
        // tidak wajib, tapi direkomendasikan
        parent::__construct($name, "Vice President"); // calling parent construct
    }

    // function overriding (timpa function di parent class)
    function testSay(string $name): void // tidak mengembalikan value (tidak menggunakan return)
    {
        echo "Hi $name, it's Vice President $this->name" . PHP_EOL;
    }
    
    // accessing parent function using 'parent keyword'
    function getParentFunc(string $name)
    {
        return parent::testSay($name);
    }
}