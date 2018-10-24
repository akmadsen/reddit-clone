<?php 

// echo / print 
// parentheses not required 
// not "technically" functions, moreso lang constructs 

// functions always of the form: 
// signature(arg1...) { 
//  return <value>    
// }

// Most of the functions inside of PHP are string functions 
// because we *gasp* mostly deal with strings 

// date(<format-string>);
$returnValue = date('Y-m-d H:i:s');
echo $returnValue . '<br />';
echo date('Y-m-d');   
echo '<br />'; 
echo strtoupper('something'); // Whenever working with a string
                              // ask your self if someone else 
                              // did the work first
echo '<br />'; 
echo time(); // Timestamps often helpful for their simplicity
echo '<br />'; 
echo date('Y-M-d');   
echo '<br />'; 
echo number_format(2.99999999999, 2); 
echo '<br />'; 
echo round (2.77777777777, 2); // round turns to the nearest int
echo '<br />'; 
echo rand(-1000,1000); 
echo '<br />'; 
// echo rand(3, 'apple'); 