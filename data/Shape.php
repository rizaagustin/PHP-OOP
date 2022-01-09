<?php 

namespace Data;

class Shape {
    public function getCorner(){
        return -1;
    }
}

class Rectangel extends Shape{
    public function getCorner(){
        return 4;
    }

    public function getParentCorner(){
        return parent::getCorner();
    }
}