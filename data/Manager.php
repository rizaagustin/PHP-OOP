<?php
class Manager{
    
    var string $name;
    
    // void = mengartikan bahwa funtion tidak mengembalikan nilai
    function sayHello(string $name): void{
        echo "Hi $name, My manager name is $this->name" . PHP_EOL;     
    }
}

class VicePresident extends Manager{
    // overriding
    function sayHello(string $name): void{
        echo "Hi $name, My VP name is $this->name" . PHP_EOL;     
    }  
}