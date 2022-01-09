<?php
class Programmer{

    public string $name;

    public function __construct(string $name){
        $this->name = $name;
    }

}

class BackendProgrammer extends Programmer{

}

class FrontendProgrammer extends Programmer{

}

class Company{
    public Programmer $programmer;
}

//polymorphism function argumen
function sayHelloProgrammer(Programmer $programmer){

    if($programmer instanceof BackendProgrammer){
        echo "Hello Backend Programmer $programmer->name" . PHP_EOL;
    }else if($programmer instanceof FrontendProgrammer){
        echo "Hello Fronten Programmer $programmer->name" . PHP_EOL;
    }else if($programmer instanceof Programmer){
        echo "Hello Programmer $programmer->name" . PHP_EOL;
    }
}