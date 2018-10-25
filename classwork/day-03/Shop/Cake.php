<?php 

namespace Shop; 

include_once 'iDescribe.php';

class Cake implements iDescribe 
{
    private $flavour; 
    private $secretIngredient; 

    public function __construct ($flavour="chocolate",$secretIngredient="ginger") 
    { 
        $this->flavour = $flavour; 
        $this->secretIngredient = $secretIngredient; 
    }

    public function getFlavour() { 
        return $this->flavour; 
    }

    public function getSecretIngredient() { 
        return $this->secretIngredient; 
    }

    public function about() { 
        return "A $this->flavour cake, with a hint of $this->secretIngredient."; 
    }
}