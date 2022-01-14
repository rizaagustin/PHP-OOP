<?php


// class Data
// {
//     var string $first = "first"; // var itu public
//     public string $second = "second";
//     private string $third = "third";
//     protected string $forth = "forth";
// }

// $data = new Data();

// foreach ($data as $property => $value) {
//     echo "$property : $value" . PHP_EOL;
// }

// ITERATOR
class Data implements IteratorAggregate
{
    var string $first = "first"; // var itu public
    public string $second = "second";
    private string $third = "third";
    protected string $forth = "forth";

    public function getIterator()
    {
        $array = [
            "first" => $this->first,
            "second" => $this->second,
            "third" => $this->third,
            "forth" => $this->forth,
        ];
        return new ArrayIterator($array);
    }
}

$data = new Data();

foreach ($data as $property => $value) {
    echo "$property : $value" . PHP_EOL;
}