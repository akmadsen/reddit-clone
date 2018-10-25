<?php 

namespace TraitExperiments; 

include_once 'SayHello.php'; 

class TheWorldIsNotEnough { 
    use SayHello; 

    public function sayHello() { 
        return "Hello, Universe!"; 
    }
}