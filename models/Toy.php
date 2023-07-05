<?php

trait Shipping {
    public $shippingDays;

    public function getShippingDays() {
        return $this -> shippingDays;

    }

    public function setShippingDays($shippingDays) {
        $this -> shippingDays = $shippingDays;

    }
}
class Toy extends Product {

    use Shipping;

    public $color;

    public function __construct($image, $name, $price, AnimalCategory $animalCategory, 
                                $color,
                                $shippingDays    ){

        parent :: __construct($image, $name, $price, $animalCategory);
        
        $this -> setColor($color);

        $this -> setShippingDays($shippingDays); 
        
    }

    public function getColor() {
        return $this -> color;
    }

    public function setColor($color) {
        $this -> color = $color;
    }
}