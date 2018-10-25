<?php 

// Order these carefully - interpreted in sequence 
include_once './Shop/Cake.php';
include_once './Shop/Staff.php';
include_once './Shop/Shop.php'; 
include_once './Shop/DeliveryTruck.php'; 
include_once './Shop/Oven.php'; 
include_once './Shop/HealthInspector.php'; 

include_once './School/Student.php'; 

// Alias - for namespaced identifier
use School\Student as Student; 

function printBreak() { 
    echo "<br />"; 
    echo "<br />"; 
}

function main() { 
    $cake = new Cake(); 
    $bob = new Staff("Bob", "Belcher", 45, "Burger Store Owner"); 
    echo $bob->eat($cake); 

    printBreak(); 

    echo $bob->about(); 

    printBreak(); 

    $linda = new Staff("Linda", "Belcher", 45, "cook at my husband's burger store"); 
    echo $linda->about(); 

    printBreak(); 

    $hugo = new HealthInspector("Hugo", "Habercore", 49, "the local health inspector"); 
    echo $hugo->about(); 

    printBreak(); 

    $ovenmaster9000 = new Oven(); 

    $hazelnutCake = $ovenmaster9000->bake("hazelnut", "brown sugar"); 
    echo $hazelnutCake->about(); 

    printBreak(); 

    $fordRanger = new DeliveryTruck();
    echo $fordRanger->whatIsLoaded(); 
    
    printBreak(); 

    $fordRanger->load($hazelnutCake); 
    echo $fordRanger->whatIsLoaded(); 

    printBreak(); 
    printBreak(); 

    $cartman = new Student(); 
}

main(); 