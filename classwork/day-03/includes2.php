<?php 

class App { 
    public function run(){
        $data = $this->getData(); 
        $this->printOutput($data); 
    }

    public function getData() { 
        return ['tweet1','tweet2']; 
    }

    public function printOutput($data) { 
        echo '<body>';
        include 'views/tweet.php'; 
        include 'views/tweet.php'; 
        echo '</body>'; 
    }
}

$app = new App(); 
$app->run(); 