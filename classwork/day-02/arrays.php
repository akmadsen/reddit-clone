<pre>
<?php 

$empty = []; 
$array = [1,2,3,4,'B','E',true]; 
$letters = ['a','b','c']; 
$mixed = [1,'b',true,'d']; 

// No echo, only var_dump!
// echo $array

var_dump($empty); 
echo "\n"; 
var_dump($array); 
echo "\n"; 
var_dump($letters); 
echo "\n"; 
var_dump($mixed); 
echo "\n"; 
echo $mixed[0]; 
echo "\n"; 
echo $mixed[1]; 
echo "\n"; 
echo $mixed[2]; // string value of bool(true) is "1"
echo "\n"; 
echo $mixed[3]; 
echo "\n\n"; 

// Appending thins to an array 
array_push($array, 'e','f'); 
var_dump($array); 
echo "\n"; 

// Can set indices specifically... (doesn't have to be sequential)
// $array[9] = 'q'; 
$array[count($array)] = 'q'; 
$array[] = 'r'; // empty brackets is shorthand for end of arr
var_dump($array); 
echo "\n"; 
// echo $array[222]; // Accessing out of range spits out err 

// This checking pattern (isset) is a frequent pattern you see
if(isset($array[222])) { 
    echo $array[222]; 
} else { 
    echo '222 is not there'; 
}

echo "\n\n"; 

// echo $var; 
if(isset($var)) { 
    echo $var; 
} else {
    echo '$var not there'; 
}

echo "\n\n"; 

// Can overwrite elements in an array 
$array[2] = "banana"; 
var_dump($array); 

// Sorted Array 
sort($array); 
echo "\n\nSorted Array\n";
var_dump($array); 

// Custom Sorted Array 

function compare($a,$b) { 
    return strtolower($a) <=> strtolower($b); 
}
usort($array, 'compare'); 
echo "\n\nCustom Sorted Array\n";
var_dump($array); 