<?php 

class Person {
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
        return 'Yum.'; 
    }

    public function about() { 
        return "Hi, I'm $this->firstName $this->lastName. I am $this->age years old, and I am $this->job."; 
    }
}
