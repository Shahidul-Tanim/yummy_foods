<?php

session_start();

include "../database/env.php";
// *GET DATA

$firstName = $_REQUEST['fname'];
$lastName = $_REQUEST['lname'];
$email = $_REQUEST['email'];
$password = $_REQUEST['password'];
$confirmPassword = $_REQUEST['confirmPassword'];

// *DATA VALIDATION
$errors =[];

// *NAME ERROR
if(empty($firstName)){
    $errors['name'] = 'First name is empty';
}
// *EMAIL ERROR
if(empty($email)){
    $errors['email'] = 'Email is requird';
}elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    $errors['email'] = 'Email address is invalid';
}
// *PASSWORD ERROR
if(empty($password)){
    $errors['password'] = 'Password is missing';
}elseif(strlen($password) < 8){
    $errors['password'] = 'Password must be at least 8 characters';
}
// *CONFIRM PASSWORD ERROR
if(empty($confirmPassword)){
    $errors['ConfirmPassword'] = 'Confirm Password is missing';
}elseif($password != $confirmPassword){
    $errors['ConfirmPassword'] = ' Password are not matching';
}

// *IF WE HAVE ERROR
if(count($errors) > 0){
    $_SESSION['old_data'] = $_REQUEST;
    $_SESSION['errors'] = $errors;
    header('Location:../backend/register.php');
}

// print_r($errors);