<?php

include "../../database/env.php";

$id = $_REQUEST['status_id'];


$allData = "SELECT status FROM banners WHERE id= $id";
$resData = mysqli_query($conn,$allData);
$fetchData = mysqli_fetch_assoc($resData);

if($fetchData['status'] == 1){
    $query = "UPDATE banners SET status = 0";
    $res = mysqli_query($conn,$query);
}else{

    $query = "UPDATE banners SET status = 0";
    $res = mysqli_query($conn,$query);

    $query = "UPDATE banners SET status = 1 WHERE id= $id";
    $res = mysqli_query($conn,$query);
}
header("Location: ../../backend/allBanners.php");

