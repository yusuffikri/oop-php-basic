<?php

class Fruit {
    // Property
    private $name;
    private $color;

    // Methods
    function introduction (){
        return $this->name . " - " . $this->color;
    }

    // Setter
    function set_name($name){
        $this->name = $name;
    }

    // Getter
    function get_name(){
        return $this->name;
    }

    // Setter
    function set_color($color){
        $this->color = $color;
    }

    // Getter
    function get_color(){
        return $this->color;
    }
}

// Object
$apple = new Fruit();
$apple->set_name("Apel");
$apple->set_color("Merah");
echo $apple->get_name();
echo $apple->get_color();


// $apple->name = "Apel";
// $apple->color = "Merah";
// echo $apple->colors();



?>