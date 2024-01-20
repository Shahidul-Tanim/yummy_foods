<?php
session_start();

include_once "../database/env.php";

$email = $_REQUEST['email'];
$password = $_REQUEST['password'];




// *VALIDATION
$errors= [];
// *EMAIL
if(empty($email)){
    $errors['email'] = "enter your email";
}
// *PASSWORD
if(empty($password)){
    $errors['password'] = "enter your password";
}
if(count($errors) > 0){
    $_SESSION['errors'] = $errors;
    header('Location:../backend/login.php');

    // *VALIDATION ENDS
    
}else{
    // *EMAIL CHECK

$query = "SELECT * FROM users WHERE email ='$email'";
$res = mysqli_query($conn,$query);

// *EMAIL NOT FOUND
if($res->num_rows == 0){
    $errors['email'] = "your email is inncorrect";
    $_SESSION['errors'] = $errors;
    header("Location: ../backend/login.php");
}else{
    $dbUser = mysqli_fetch_assoc($res);
    $isPasswordTrue = password_verify($password,$dbUser['password']);

    // *IF PASSWORD INNCORRECT
    if(!$isPasswordTrue){
        $errors['password'] = "your password is inncorrect";
        $_SESSION['errors'] = $errors;
        header("Location: ../backend/login.php");
    }else{

        // *REDIRECT TO DASHBOARD

        $_SESSION['auth'] = $dbUser;

        header("Location: ../backend/dashboard.php");
    }
}
}


