<?php 

include_once 'Person.php'; 

class HealthInspector extends Person { 
    public function about() { 
        return "Hi, I'm $this->firstName $this->lastName. I am $this->age years old, and I am $this->job. And I am shutting this restaurant down.";
    }
}