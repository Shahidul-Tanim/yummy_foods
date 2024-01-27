<?php
session_start();

include "../database/env.php";

// *GET DATA
$fname = $_REQUEST['fname'];
$lname = $_REQUEST['lname'];
$email = $_REQUEST['email'];
$profileImage = $_FILES['profileImage'];
$extension = null;
if($profileImage['size'] >0){
    $extension = pathinfo($profileImage['name'])['extension'];

}
$acceptedTypes = ['jpg','png'];
$userId = $_SESSION['auth']['id'];

// echo"<pre>";
// print_r($profileImage);
// echo"</pre>";
// exit();

$errors =[];

// *VALIDATION STARTS
if(empty($fname)){
    $errors['firstName'] = "First name is Empty";
}
if(empty($lname)){
    $errors['lastName'] = "Last name is Empty";
}
if(empty($email)){
    $errors['email'] = "Email is Empty";
}

// *IMAGE VALIDATION
// if($profileImage['size'] == 0){
//     $errors['profileImage'] = " Please Select an image";
// }elseif(!in_array($extension ,$acceptedTypes)){
//     $errors['profileImage'] = " Please Select an image with the extension of jpg or png";
// }
// *IMAGE VALIDATION ENDS

// *IF ERRORS FOUND
if(count($errors) > 0){
    // *REDIRECTION
    $_SESSION['errors'] = $errors;
    header("Location: ../backend/profile.php");
}

else{
    // *IF NO ERRORS FOUND

    // *IF UPLOADS FOLDER NOT FOUND
    $path = '../uploads';
   if(!file_exists($path)){
    mkdir($path);
   }

    // *FILE UPLOAD
    $fileName = null;
    if($profileImage['size'] > 0){

        // *CHECK FOR PREV FILE

        if(file_exists($path . "/" . $_SESSION['auth']['profile_img'])){
            unlink($path . "/" . $_SESSION['auth']['profile_img']);
        }

        $fileName = 'user-'. uniqid() . ".$extension";
        $from = $profileImage['tmp_name'];
        $to = $path . "/$fileName";

        $isUploaded = move_uploaded_file($from,$to);

        $query = "UPDATE users SET fname='$fname',lname='$lname',email='$email',profile_img='$fileName' WHERE id = '$userId'";
        $res = mysqli_query($conn, $query);

    }else{
        $query = "UPDATE users SET fname='$fname',lname='$lname',email='$email' WHERE id = '$userId'";
        $res = mysqli_query($conn, $query);

    }

    if($res){
        $_SESSION['auth']['fname'] = $fname;
        $_SESSION['auth']['lname'] = $lname;
        $_SESSION['auth']['email'] = $email;

        if($profileImage['size'] > 0){
            $_SESSION['auth']['profile_img'] = $fileName;
        }

        header("Location:../backend/profile.php");
    }
}

// print_r($errors);
