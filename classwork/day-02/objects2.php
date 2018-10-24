<pre> 
<?php

class Cake { 
    private $type; 
    private $secretIngredient; 

    public function __construct($type='chocolate',$secret='ginger')
    { 
        $this->type = $type; 
        $this->secretIngredient = $secret; 
    }

    public function describeTaste() { 
        return "Yummy {$this->type}!"; 
    }

    public function recipe() { 
        return $this->secretIngredient; 
    }
}

$cake = new Cake(); 
$vCake = new Cake('vanilla'); 
$cCake = new Cake('carrot', 'ginseng');

echo $cake->describeTaste()."\n"; 
echo $cake->recipe()."\n"; 

echo $vCake->describeTaste()."\n"; 
echo $vCake->recipe()."\n"; 

echo $cCake->describeTaste()."\n"; 
echo $cCake->recipe()."\n"; 