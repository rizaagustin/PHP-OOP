<?php

namespace Data\Traits;


trait SayGoodBye
{
    public string $name;
    function goodBye(?string $name): void
    {
        if (is_null($name)) 
        {
            echo "Good Bye" . PHP_EOL;
        }else{
            echo "Good Bye $name". PHP_EOL;
        }
    }
}

trait SayHello
{
    public string $name;

    function hello(?string $name): void
    {
        if (is_null($name)) 
        {
            echo "Hello " . PHP_EOL;
        }else{
            echo "Hello  $name". PHP_EOL;
        }
    }
}

trait HasName
{
    public string $name;
}

class Person 
{
    // semua function, properties dimiliki oleh class person
    use SaygoodBye, SayHello, HasName;
}