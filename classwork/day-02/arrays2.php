<pre>
<?php 

// Also has key-value pair arrays (Dictionaries C#, JS Objects)
// These are also called "Associative Arrays" 

// Numerically Indexed Array (better for managing groups)
$list = ['Bob', 'Linda', 'Tina', 'Jean', 'Louise']; 

// Associative array (better for managing 'things')
// Can be used to generate JSON and send to frontend
$bob = [
    'name' => 'Bob', 
    'age' => 45, 
    'job' => 'Burger Store Owner'
]; 

var_dump($list); 
echo "\n\n"; 
var_dump($bob); 
echo "\n\n"; 

// We can use JSON_PRETTY_PRINT for readability 
echo json_encode($bob, JSON_PRETTY_PRINT); 
echo "\n\n"; 

$bob['hairColor'] = 'black'; 
var_dump($bob); 
echo "\n\n"; 

// So... Arrays can be both associative AND numeric... DON'T, THO!
$bob[0] = 'wtf!?!!?'; 
var_dump($bob); 
echo "\n\n"; 

// can test for presence as well
if(!isset($bob['nothingHere'])) { 
    echo 'We successfully found nothing!';
}