<?php
class Manager{
    
    var string $name;
    var string $title;

    public function __construct(string $name = "",string $title = "Manager"){
        $this->name = $name;
        $this->title=$title;
    }
    
    // void = mengartikan bahwa funtion tidak mengembalikan nilai
    function sayHello(string $name): void{
        echo "Hi $name, My manager name is $this->name" . PHP_EOL;     
    }
}

class VicePresident extends Manager{
    public function __construct(string $name = ""){
        //tidak wajib tapi direkomendasikan
        parent::__construct($name,"VP"); 
    }
    // overriding
    function sayHello(string $name): void{
        echo "Hi $name, My VP name is $this->name" . PHP_EOL;     
    }  
}