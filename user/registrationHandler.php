<?php

require_once('../helpers/init.php');

// abebe();

// print "<pre>";
// print_r($_POST);

// print the post variable 

$fname = '';
$lname = '';
$email = '';
$password = '';

// Grab values
if(isset($_POST['fname'])){
    $fname = $_POST['fname'];
}
if(isset($_POST['lname'])){
    $lname = $_POST['lname'];
}
if(isset($_POST['email'])){
    $email = $_POST['email'];
}
if(isset($_POST['password'])){
    $password = $_POST['password'];
}

// save proved check to save on db 

if(!empty($fname) && !empty($lname) && !empty($email) && !empty($password) ){

registerUser($fname,$lname,$email,$password);


}



?>