<pre>
<?php 

$truthy = 1; 
$truthy = 'foo'; 
$truthy = '1'; 

var_dump("1", 1); 

if ($truthy == 1) { 
    echo "true"; 
} else { 
    echo "false"; 
}