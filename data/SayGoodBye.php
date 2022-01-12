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

trait CanRun
{
    public abstract function run(): void;
}

trait ALL{
    use SaygoodBye, SayHello, HasName, CanRun;
}

class Person 
{
    // // semua function, properties dimiliki oleh class person
    // use SaygoodBye, SayHello, HasName, CanRun{
    //     // hello as private;
    //     // goodbye as private;
    // }
    
    use ALL;
    public function run(): void
    {
        echo "Person $this->name is running" . PHP_EOL;
    }

    public function goodBye(?string $name): void
    {
        echo "Good bye in Person" . PHP_EOL;
    }

    public function hello(?string $name): void
    {
        echo "Hello in Person" . PHP_EOL;
    }
}