<?php 

include_once 'Equipment.php'; 

class Oven extends Equipment { 
    public function bake($flavour="chocolate", $secretIngredient="ginger") {
        return new Cake($flavour, $secretIngredient); 
    }
}