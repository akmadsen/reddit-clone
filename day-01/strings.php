<pre>
<?php 

$name = 'Bob';
$weather = 'nice';  
$a = 'Hello, ' . $name . '! \nToday\'s weather is "' . $weather . '"'; 
$b = "Hello, $name! \\nToday's weather is \"$weather\""; 

var_dump($a,$b); 