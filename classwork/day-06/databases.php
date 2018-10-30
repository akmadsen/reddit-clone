<pre> 
<?php 

class Tweet { }

// How to Connect with DB
$db = new mysqli('127.0.0.1', 'root','', 'sait_twitter');

// sql injection attack 
$id='1 or 1=1';   

$result = $db->query('SELECT * FROM tweets WHERE id='.$id); 

// To check errors: 
// var_dump($db->error); 

// Can iterate over result, getting an associative array of items
$tweets = []; 
foreach($result as $row) {
    $tweet = new Tweet(); 
    $tweet->content = $row['content']; 
    $tweet->date = $row['date'];
    $tweets[] = $tweet; 
    var_dump($row); 
}

var_dump($tweets); 

var_dump($result); 