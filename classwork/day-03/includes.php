<?php 

// Order these carefully - interpreted in sequence 
include_once './includes-classes/Cake.php';
include_once './includes-classes/Person.php';
include_once './includes-classes/Equipment.php';  
include_once './includes-classes/Staff.php';
include_once './includes-classes/Shop.php'; 
include_once './includes-classes/DeliveryTruck.php'; 
include_once './includes-classes/Oven.php'; 
include_once './includes-classes/HealthInspector.php'; 

function main() { 
    $cake = new Cake(); 
    $bob = new Person("Bob", "Belcher", 45, "Burger Store Owner"); 
    echo $bob->eat($cake); 
    echo "<br />"; 
    echo "<br />"; 
    echo $bob->about(); 

    echo "<br />"; 
    echo "<br />"; 
    
    $linda = new Staff("Linda", "Belcher", 45, "Cook at my husband's burger store"); 
    echo $linda->about(); 

    echo "<br />"; 
    echo "<br />"; 

    $hugo = new HealthInspector("Hugo", "Habercore", 49, "the local health inspector"); 
    echo $hugo->about(); 
}

main(); 