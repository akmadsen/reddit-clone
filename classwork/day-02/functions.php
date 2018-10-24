<pre> 
<?php 

$a = 42; 
$b = 0; 

function doSomething($a) {  
    // $a = "Ha ha!\n"; 
    echo $a; // does not exist unless declared _inside_ fxn scope (or an arg)!
}

function returnSomething($a) { 
    return $a . "!!!!!!!!!!!!!!!!"; 
}

doSomething(132); 
echo $a; 

echo "\n"; 
echo returnSomething($b); 