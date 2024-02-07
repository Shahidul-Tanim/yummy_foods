<?php
include_once "../database/env.php";

$id = $_REQUEST['id'];

$query = "DELETE FROM `categories` WHERE id = '$id'";
$res = mysqli_query($conn,$query);
// *REDIRECTION
if($res){
    header("Location:../backend/categories.php");
}