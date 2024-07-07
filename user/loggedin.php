<?php

require_once("../helpers/init.php");


print "<pre>";
print_r($_POST);

// print the post variable 

$email = '';
$password = '';
$loggedinUser = array();

// grab values 
if(isset($_POST['email'])){
    $email = $_POST['email'];
}
if(isset($_POST['password'])){
    $password = $_POST['password'];
}

if(!empty($email) && !empty($password)){
    $loggedinUser = loginUser($email, $password);

}

if(!empty($loggedinUser)){
    echo "NOT Logged in";
}
else{
    print_r($loggedinUser);

}