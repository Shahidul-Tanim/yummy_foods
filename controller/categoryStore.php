<?php

include_once "../database/env.php";
session_start();

$category_title = $_REQUEST['category_title'];

// *VALIDATION

$errors =[];

if(empty($category_title)){
    $errors['title'] = 'Category Title is empty';
}
//  *VALIDATION ENDS
if(count($errors) > 0){
    $_SESSION['errors'] = $errors;
    header('Location:../backend/categories.php');
}else{
    $query = "INSERT INTO categories(category_title) VALUES ('$category_title')";
    $res =mysqli_query($conn,$query);
}
if($res){
    header("Location:..//backend/categories.php");
}