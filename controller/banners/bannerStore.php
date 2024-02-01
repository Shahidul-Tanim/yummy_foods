<?php

include "../../database/env.php";

session_start();

$heading = $_REQUEST['heading'];
$details = $_REQUEST['details'];
$btn_title = $_REQUEST['btn_title'];
$btn_link = $_REQUEST['btn_link'];
$video_url = $_REQUEST['video_url'];
$btn = $_REQUEST['btn'];
$featured_img = $_FILES['featured_img'];

if(isset($btn)){

    $imgPath = uniqid() . 'bannerImg' . $featured_img['name'];
    $tmpName = $featured_img['tmp_name'];
    move_uploaded_file($tmpName, 'uploads/' . $imgPath);


    $query = "INSERT INTO banners(heading, details, button_title, button_url, video_url, featured_img) VALUES ('$heading', '$details', '$btn_title', '$btn_link', '$video_url', '$imgPath')";
    $res = mysqli_query($conn, $query);

    $_SESSION['success'] = 'store successfully completed';
    header("Location: ../../backend/allBanners.php");
}
