<?php

class AnimalCategory {
    public $name;
    public $icon;

    public function __construct($name, $icon) {

        $this -> setName($name);
        $this -> setIcon($icon);

    }

    public function getName() {
        return $this -> name;
    }
    // aggiungo eccezione qui
    public function setName($name) {
        if (strlen($name) < 1){
            throw new Exception("AnimalCategory's name can't be an empty string");

        }
        $this -> name = $name;
    }

    public function getIcon() {
        return $this -> icon;
    }
    public function setIcon($icon) {
        $this -> icon = $icon;
    }

}