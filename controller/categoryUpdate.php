<?php

include_once "../database/env.php";
// *DATA COLLECT
$id = $_REQUEST['id'];
$category_title = $_REQUEST['category_title'];

// *UPDATE
$query = "UPDATE categories SET category_title='$category_title' WHERE id = '$id'";
$res = mysqli_query($conn,$query);
// *REDIRECTION
if($res){
    header("Location:../backend/categories.php");
}