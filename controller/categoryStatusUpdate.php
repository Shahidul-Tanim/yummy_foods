<?php
include_once "../database/env.php";

// *COLLECT DATA

$id = $_REQUEST['id'];
$status = $_REQUEST['status'];

// *CONDITION

if($status == false){
    $query = "UPDATE categories SET status=true WHERE id = '$id'";
}elseif( $status == true){
    $query = "UPDATE categories SET status=false WHERE id = '$id'";
}
$res = mysqli_query($conn,$query);
// *REDIRECTION
if($res){
    header("Location:../backend/categories.php");
}