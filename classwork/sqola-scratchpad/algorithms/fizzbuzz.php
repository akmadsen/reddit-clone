<pre>
<?php
//Do not modify this portion.
$test_input = [27, 3, 5];

//Modify code only in the function to get the desired output.

// We know that strpos will return 1 if it contains it, 0 if they are identical
// and nothing otherwise. So let's wrap that! 
function numContains($haystack,$needle) { 
    $result = strpos((string)$haystack,(string)$needle); 
    return $result === 0 || $result === 1; 
}


function fizzBuzz($input){
    $first = $input[0]; 
    $second = $input[1]; 
    $third = $input[2]; 

    for($i=$first;$i>0;$i--){ 
        $fb = ""; 

        echo "FIZZ TEST: $i\n\n"; 
        echo "$i contains $second: ".strpos((string)$i,(string)$second)."\n"; 
        echo "$i contains $third: ".strpos((string)$i,(string)$third)."\n"; 


        if(numContains($i, $second) || numContains($i, $third)) { 
            $fb .= "FIZZ"; 
        }

        if ($i % $second === 0 || $i % $third === 0) {
            $fb .= "BUZZ"; 
        }
        
        if ($fb === "") { 
            echo $i; 
        } else { 
            echo $fb; 
        }
        
        if ($i !== 1) { 
            echo ", "; 
        }
    }
}

fizzBuzz($test_input); 