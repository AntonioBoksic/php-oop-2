<?php

class Product {
    public $image;
    public $name;
    public $price;
    public $animalCategory;

    public function __construct($image, $name, $price, AnimalCategory $animalCategory) {

        $this -> image = $image;
        $this -> setName($name);
        $this -> price = $price;
        $this -> animalCategory = $animalCategory;

    }

    public function getName() {
        return $this -> name;
    }

    public function setName($name) {
        $this -> name = $name;
    }

    // mancano tutte le altre funzioni

};