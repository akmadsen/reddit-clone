<pre> 
<?php 

$list = ['a','b','c']; 

// Most common is actually foreach
// More common these days... 
foreach($list as $value) { 
    echo "$value\n"; 
} // note that blocks don't end in ; 

echo "$value\n"; // Will still be able to access value outside loop (fxn scope)

// Equivalent to foreach (oldschool)
for($i=0;$i<count($list);$i++) { 
    echo $list[$i]."\n";
}

$bob = [ 
    'name' => 'Bob', 
    'age' => 45
];

$linda = [
    'name' => 'Linda', 
    'age' => 43
];

$people = [$bob, $linda]; 

echo "\n"; 

foreach($people as $person) { 
    echo "\n";

    // Can loop over each property as this, but not common in practice
    // foreach ($person as $prop => $state) { 
    //     echo "$prop --- $state\n"; 
    // }

    echo $person['name'] 
        . ' is ' . $person['age'] 
        . ' years old.'; 
}