<pre>
<?php 

class Cake { 
    public $type; 

    public function describe() { 
        return "I'm a $this->type cake."; 
    }
}

class ChocolateCake extends Cake { 
    public $type = "chocolate"; 
}

$cake = new Cake(); 
echo $cake->describe()."\n"; 

$chocCake = new ChocolateCake(); 
echo $chocCake->describe()."\n"; 



class DatabaseTable { 
    public function save($data='') {}
    public function fetch(){}
}

class CakeTable extends DatabaseTable { 
    public $name = 'cakes'; 
}

$myTable = new CakeTable(); 
$myTable->save('data');
