<?php

include_once "../database/env.php";
session_start();

// *Data Collect
$title = $_REQUEST['title'];
$category = $_REQUEST['category'];
$detail = $_REQUEST['detail'];
$price = $_REQUEST['price'];
$foodImage= $_FILES['food_img'];
$extension = pathinfo($foodImage['name'])['extension'] ?? null;
$acceptedTypes =['jpg',['jpeg','png']];

// echo "<pre>";
// print_r($errors);
// echo "</pre>";

// *IMAGE VALIDATION
$errors = [];

if($foodImage['size'] == 0){
    $errors['food_img'] = "Select an Image";
}else if(!in_array($extension,$acceptedTypes)){
    $errors['food_img'] = "Select an image with an extension of jpg,jpeg or png";
}

// *IF NO ERRORS FOUND
if(count($errors) > 0){
    $_SESSION['errors'] = $errors;
    header("Location: ../backend/addFood.php");
}

// *SERVER IMAGE UPLOADS
else{
    $path = "../uploads/food";

    if(!file_exists($path)){
        mkdir($path);
    }

    // *IMAGE NAME

    $imageName = "menu-" . uniqid() . ".$extension";

    // *UPLOAD FILE
    $upload = move_uploaded_file($foodImage['tmp_name'], "$path/$imageName");

    if($upload){
        $query = "INSERT INTO foods(category, title, detail, price, food_image) VALUES ('$category','$title','$detail','$price','$imageName')";
        $res = mysqli_query($conn,$query);

        $res && header("Location: ../backend/addFood.php");
    }
}

