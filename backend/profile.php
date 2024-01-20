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
                                    <div class="card-header">Card Info</div>
                                    <div class="card-body">

                                        <div class="row">
                                            <div class="col-lg-6">

                                                <img src="https://api.dicebear.com/7.x/adventurer/svg?seed=<?= ucwords($_SESSION['auth']['fname'] )?? '' ?>" alt="">

                                            </div>
                                            <div class="col-lg-6">
                                                <input placeholder="First Name" type="text" class="from-control my-2">
                                                <input placeholder="last Name" type="text" class="from-control my-2">
                                                <input placeholder="Email" type="text" class="from-control my-2"> <br>
                                                <button class="btn btn-primary">Submit</button>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-5">

                                <div class="card">
                                    <div class="card-header">Password Update</div>
                                    <div class="card-body">

                                        <form action="">

                                            <input placeholder="Old Password" type="text" class="form-control my-2">
                                            <input placeholder="New Password" type="text" class="form-control my-2">
                                            <input placeholder="Confirm Password" type="text" class="form-control my-2">
                                            <button class="btn btn-warning">Update Password</button>
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
?>
