<?php 

// Order these carefully - interpreted in sequence 
include_once './Shop/Cake.php';
include_once './Shop/Staff.php';
include_once './Shop/Shop.php'; 
include_once './Shop/DeliveryTruck.php'; 
include_once './Shop/Oven.php'; 
include_once './Shop/HealthInspector.php'; 

include_once './School/Student.php'; 

include_once './TraitExperiments/HelloWorld.php'; 
include_once './TraitExperiments/TheWorldIsNotEnough.php'; 

// Alias - for namespaced identifier

// Shop Aliases 
use Shop\Cake; 
use Shop\Staff; 
use Shop\Shop; 
use Shop\DeliveryTruck; 
use Shop\Oven; 
use Shop\HealthInspector; 

// School Aliases 
use School\Student as Student; 

// Trait Aliases 
use TraitExperiments\HelloWorld; 
use TraitExperiments\TheWorldIsNotEnough as Twine; 

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

    $hello = new HelloWorld(); 

    echo $hello->sayHello(); 

    printBreak(); 

    $twine = new Twine(); 
    echo $twine->sayHello(); 

    printBreak(); 
    printBreak(); 

    $shop = new Shop("Bob's Burgers"); 
    echo $shop->about(); 
    printBreak(); 
    echo $shop->describeDisplay(); 
    printBreak(); 

    $badCake = new Cake("dirt", "sludge");
    $burger = new Cake("beef", "catsup");  
    $shop->addToDisplay($hazelnutCake); 
    $shop->addToDisplay($badCake); 
    $shop->addToDisplay($burger); 
    echo $shop->describeDisplay(); 
}

main(); 