<?php 

include_once 'iDescribe.php';

class Person implements iDescribe {
    protected $firstName; 
    protected $lastName; 
    protected $age; 
    protected $job; 

    public function __construct($firstName, $lastName, $age, $job) {
        $this->firstName = $firstName; 
        $this->lastName = $lastName; 
        $this->age = $age; 
        $this->job = $job; 
    }

    public function eat($cake) { 
        $cakeInfo = strtolower($cake->about()); 

        $result = "Yum. ";
        $result .= "Teddy, you should try some of this cake. ";
        $result .= "It is $cakeInfo.";
        return $result; 
    }

    public function about() { 
        return "Hi, I'm $this->firstName $this->lastName. I am $this->age years old, and I am $this->job."; 
    }
}
