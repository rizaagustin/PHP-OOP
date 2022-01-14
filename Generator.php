<?php

function getGenap(int $max): Iterator
{
    $array = [];

    for ($i=1; $i <= $max ; $i++) { 
        if ($i % 2 == 0) {
            $array[] = $i;
        }
    }

    // array iterator manual
    return new ArrayIterator($array);
}

foreach (getGenap(100) as $value) {
    echo "Genap : $value" . PHP_EOL; 
}


function getGanjil(int $max): Iterator
{


    for ($i=1; $i <= $max ; $i++) { 
        if ($i % 2 == 0) {
            // yield cara mudah tidak perlu mebuat iterator
            yield $i;
        }
    }

    // array iterator manual
}

foreach (getGanjil(100) as $value) {
    echo "Ganjil : $value" . PHP_EOL; 
}