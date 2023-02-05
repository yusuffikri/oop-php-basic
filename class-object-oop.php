<?php

class Fruit {
    // Property
    public $name;
    public $color;

    // Methods
    function colors (){
        return $this->name . " - " . $this->color;
    }
}

// Object
$apple = new Fruit();
$apple->name = "Apel";
$apple->color = "Merah";

echo $apple->colors();


?>