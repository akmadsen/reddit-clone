<pre> 
<?php 

$bob = [
    'name' => 'Bob', 
    'age' => 45 
];

$bobObject = (object)$bob; 

var_dump($bob); 
echo "\n"; 
var_dump($bobObject); 
echo "\n"; 

class Cake { 
    public $type = 'chocolate'; 
    private $secretIngredient = 'ginger'; 

    public function describeTaste() { 
        return 'Yummy!'; 
    }
}

// This $cake is an instance of Cake
$cake = new Cake(); 
var_dump($cake); 

echo $cake->describeTaste()."\n"; 
echo $cake->type."\n";
// echo $cake->secretIngredient; // Can't access privates   