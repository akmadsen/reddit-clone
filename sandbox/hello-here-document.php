<?php 
if($_POST['user']) { 
    print "Hello, "; 
    print $_POST['user']; 
    print "!"; 
} else { 
    print <<<_HTML_ 
    <form method="post" action="$_SERVER[PHP_SELF]"> 
    <label for="user">Your Name: <input type="text" name="user" id="user"></label>
    <br /> 
    <input type="submit" value="Submit">
    </form>
    _HTML_;
}