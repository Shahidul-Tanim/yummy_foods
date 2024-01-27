<?php
session_start();
include "../database/env.php";
// *GET DATA

$oldPsk = $_REQUEST['oldPsk'];
$psk = $_REQUEST['psk'];
$confirmPsk = $_REQUEST['confirmPsk'];
$dbPsk = $_SESSION['auth']['password'];
$isPasswordTrue = password_verify($oldPsk, $dbPsk);
$id = $_SESSION['auth']['id'];

$errors = [];

if(!$isPasswordTrue){
    $errors['oldPsk'] = 'Your Old Password Is Incorect';
    $_SESSION['errors'] = $errors;
    header("Location: ../backend/profile.php");
}else{

    if(empty($psk)){
        $errors['psk'] = 'New Password Requierd';
    }
    if($psk != $confirmPsk){
        $errors['confirmPsk'] = 'New Password And Confirm Password Did Not Match';
    }

    if(count($errors) > 0){

        $_SESSION['errors'] = $errors;
        header("Location: ../backend/profile.php");
    }else{
        // *PROCEED
        $encPassword = password_hash($psk, PASSWORD_BCRYPT);
        $query ="UPDATE users SET password='$encPassword' WHERE id='$id'";
        $res = mysqli_query($conn, $query);

        if($res){

            $_SESSION['auth']['password'] = $encPassword;
            header("Location:../backend/profile.php");
        }

        }
}