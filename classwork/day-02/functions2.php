<pre> 
<?php 

function returnSomething($value='') { 
    return $value . "!!!!!!"; 
}

function outputSomething($value='') { 
    echo $value; 
}

function main() { 
    $return = returnSomething('php is great'); 
    outputSomething($return); 
}

main(); 