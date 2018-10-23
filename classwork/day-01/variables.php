<pre>
<?php 

$a = 2; 
$b = 2.4; 
$c = true; 
$d = "true"; 
$e = [1,2,"foo"]; 
$f = new stdClass(); 
$g = function() { 
    return "Hello, World!"; 
};
var_dump($a,$b,$c,$d,$e,$f,$g);

define('CONSTANT', 13); 
var_dump(CONSTANT); // Note that constants don't need $
define('CONSTANT', 13); 
