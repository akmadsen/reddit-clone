<pre> 
<?php 

class Tweet { }
class User { }

function getUser($userID) {
    $db = new mysqli('127.0.0.1', 'root','', 'sait_twitter');
    $userResult = $db->query("SELECT * FROM users where id=$userID"); 

    foreach ($userResult as $result) { 
        $user - new User(); 
        // Finish work here
    }

}

// How to Connect with DB
$db = new mysqli('127.0.0.1', 'root','', 'sait_twitter');

// sql injection attack 

$tweetResult = $db->query('SELECT * FROM tweets'); 

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