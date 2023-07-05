<?php
class Toy extends Product {
    public $color;

    public function __construct($image, $name, $price, AnimalCategory $animalCategory, 
                                $color){

        parent :: __construct($image, $name, $price, $animalCategory);
        
        $this -> setColor($color);
        
    }

    public function getColor() {
        return $this -> color;
    }

    public function setColor($color) {
        $this -> color = $color;
    }
}