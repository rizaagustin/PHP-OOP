<?php
class Person {
  var $name; //properties
  var $address;
  var $country = "Indonesia"; //default value

// hanya bisa di php 7.4 keatas saat ini kita pakai 7.2
//   var string $name; //properties
//   var ?string $address = null; // addres bole null atau nullable properties
//   var string $country;

    function sayHello(?string $name){
        if (is_null($name)) {
            echo "Hi, My Name is $this->name". PHP_EOL;
        }else{
            echo "Hi $name, My Name is $this->name". PHP_EOL;
        }
    }

}