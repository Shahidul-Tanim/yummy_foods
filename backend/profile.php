<?php
include_once "./backendLayouts/header.php";
?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Profile Page</h1>

                    <div class="wrapper mt-5">

                        <div class="row">

                            <div class="col-lg-7">

                                <div class="card">
                                    <div class="card-header">Profile Info</div>
                                    <div class="card-body">

                                        <form action="../controller/profileUpdate.php" method="POST" enctype="multipart/form-data">

                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <label class="d-block" for="profileInput">
                                                        <img style="max-width: 100%;" class="profileImage" src="<?= getProfileImage() ?>" alt="">
                                                    </label>
                                                    <input name="profileImage" class="d-none" type="file" id="profileInput">
                                                    
                                                    <span class="text-danger">
                                                    <?= $_SESSION['errors']['profileImage'] ?? ''?>
                                                    </span>

                                                </div>
                                                <div class="col-lg-6">
                                                    <input name="fname" value="<?= $_SESSION['auth']['fname']?>" placeholder="First Name" type="text" class="from-control my-2"> <br>
                                                    
                                                    <span class="text-danger">
                                                    <?= $_SESSION['errors']['firstName'] ?? ''?>
                                                    </span>

                                                    <input name="lname" value="<?= $_SESSION['auth']['lname']?>" placeholder="last Name" type="text" class="from-control my-2"> <br>
                                                    
                                                    <span class="text-danger">
                                                    <?= $_SESSION['errors']['lastName'] ?? ''?>
                                                    </span>

                                                    <input name="email" value="<?= $_SESSION['auth']['email']?>" placeholder="Email" type="text" class="from-control my-2"> <br>
                                                   
                                                    <span class="text-danger">
                                                    <?= $_SESSION['errors']['email'] ?? ''?>
                                                    </span>

                                                    <button type="submit" class="btn btn-info">Submit</button>
                                                </div>
                                            </div>

                                        </form>

                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-5">

                                <div class="card">
                                    <div class="card-header">Password Update</div>
                                    <div class="card-body">

                                        <form action="../controller/passwordUpdate.php" method="POST">

                                            <input name="oldPsk" placeholder="Old Password" type="text" class="form-control my-2">

                                            <span class="text-danger"><?= $_SESSION['errors']['oldPsk'] ?? ''?></span>

                                            <input name="psk" placeholder="New Password" type="text" class="form-control my-2">

                                            <span class="text-danger"><?= $_SESSION['errors']['psk'] ?? ''?></span>


                                            <input name="confirmPsk" placeholder="Confirm Password" type="text" class="form-control my-2">

                                            <span class="text-danger"><?= $_SESSION['errors']['confirmPsk'] ?? ''?></span>

                                            <button type="submit" class="btn btn-primary">Update Password</button>
                                        </form>

                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>


                </div>
                <!-- /.container-fluid -->

<?php
include_once "./backendLayouts/footer.php";

unset($_SESSION['errors']);
?>
<script>
    let profileInput = document.querySelector("#profileInput")
    let profileImage = document.querySelector(".profileImage")
    function updtePreviewImage (event){
       let url = URL.createObjectURL(event.target.files[0])
       profileImage.src = url;
    }

    profileInput.addEventListener('change',updtePreviewImage,)
</script>
