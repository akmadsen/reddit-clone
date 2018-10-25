<?php 

namespace Shop; 

include_once 'iDescribe.php'; 
include_once 'Cake.php'; 

class DeliveryTruck {
    private $contents =[]; 

    public function load($item) { 
        array_push($this->contents, $item); 
    }

    public function whatIsLoaded() { 
        if (count($this->contents) === 0) { 
            return "Nothing Loaded in this truck"; 
        }

        $result = ""; 

        foreach ($this->contents as $item) { 
            $result .= "{$item->about()}</br>"; 
            // $result .= "Something is loaded.</br>"; 
        }

        return $result; 
    }
 }