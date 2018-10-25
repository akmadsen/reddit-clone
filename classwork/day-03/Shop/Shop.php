<?php 

namespace Shop; 

include_once 'iDescribe.php'; 

class Shop {
    private $name;
    private $display; 

    public function __construct($name) { 
        $this->name = $name; 
        $this->display = []; 
    }

    public function addToDisplay($cake) { 
        array_push($this->display, $cake); 
    }

    public function describeDisplay() { 
        if (count($this->display) === 0) { 
            return "There is a sad, empty display.";
        }

        $result = "There is a:"; 

        foreach($this->display as $cake) { 
            $result .= "<br>".strtolower($cake->about()); 
        }

        return $result; 
    }

    public function about() { 
        return "You are at {$this->name}.";  
    }
}