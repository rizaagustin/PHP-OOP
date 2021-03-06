<?php

trait A 
{
    function doA():void
    {
        echo "a" . PHP_EOL;
    }
    function doB():void
    {
        echo "b" . PHP_EOL;
    }
}

trait B
{
    function doA():void
    {
        echo "A" . PHP_EOL;
    }
    function doB():void
    {
        echo "B" . PHP_EOL;        
    }
}

class sample
{
    
    use A,B{
        // Solusi menggunakan insteadof apabila function di salah satu trait ada yg sama
        A::doA insteadof B;
        B::doB insteadof A;
    }
}

$sample = new sample();
$sample->doA();
$sample->doB();