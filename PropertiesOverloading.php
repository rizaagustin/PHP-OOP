<?php

class Zero
{
    private array $properties = [];

    // public string $firstName = "Riza";

    // karena tidak ada properties firstname maka memanggil function ini
    public function __get($name)
    {
        return $this->properties[$name];
    }

    // karena set middleName tidak ada propetiesnya maka memanggil function ini
    public function __set($name, $value)
    {
        return $this->properties[$name] = $value;
    }

    // di eksekusi ketika mengecek isset() atau empty() properties yang tidak tersedia
    public function __isset($name): bool
    {
        // echo "isset name $name" . PHP_EOL;
        // return false;

        return isset($this->properties[$name]);

    }

    // di eksekusi ketika mengecek unset() atau empty() properties yang tidak tersedia
    public function __unset($name)
    {
        // echo "unset name $name" . PHP_EOL;
        unset($this->properties[$name]);
    }

    //$arguments=otomatis berupa array
    public function __call($name, $arguments)
    {
        $join = join(",", $arguments);
        echo "Call function $name with arguments $join" . PHP_EOL;
    }

    public static function __callStatic($name, $arguments)
    {
        $join = join(",", $arguments);
        echo "Call static function $name with arguments $join" . PHP_EOL;
    }

}

$zero = new Zero();
$zero->firstName = "Riza";
$zero->middleName = "AKA";
$zero->lastName = "Agustin";

echo "First Name: $zero->firstName" . PHP_EOL;
echo "Middle Name: $zero->middleName" . PHP_EOL;
echo "Last Name: $zero->lastName" . PHP_EOL;

// apabila function yg dibuat maka yg di akses function __call
$zero->sayHello("Riza","Agustin");

//function static call apabila functionnya tidak ada
Zero::sayHello("Riza","Agustin");