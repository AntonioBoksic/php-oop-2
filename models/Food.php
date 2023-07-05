<?php
class Food extends Product {
    public $expirationDate;

    public function __construct($image, $name, $price, AnimalCategory $animalCategory, 
                                $expirationDate){

        parent :: __construct($image, $name, $price, $animalCategory);
        
        $this -> setExpirationDate($expirationDate);
        
    }

    public function getExpirationDate() {
        return $this -> expirationDate;
    }

    public function setExpirationDate($expirationDate) {
        $this -> expirationDate = $expirationDate;
    }
}