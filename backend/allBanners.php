<?php

include_once "./backendLayouts/header.php";
include "../database/env.php";

$query = "SELECT * FROM banners";
$res = mysqli_query($conn, $query);
$fetchData = mysqli_fetch_all($res,1);

// echo "<pre>";
// print_r($fetchData);
// echo "</pre>";

?>

<section>
    <container>
        <div class="row justify-content-center">
            <div class="col-lg-10">

                <div class="card">
                    <div class="card-header">All Banners</div>

                    <div class="card-body table-responsive">
                        <table class="table table-hover table-striped">

                            <tr>

                                <td>id</td>
                                <td>heading</td>
                                <td>featured_img</td>
                                <td>details</td>
                                <td>button_title</td>
                                <td>button_url</td>
                                <td>video_url</td>
                                <td>status</td>
                                <td>action</td>

                            </tr>

                            <?php
                            
                            foreach($fetchData as $key => $data){
                                ?>
                                
                            <tr>

                                <td><?= ++$key?></td>
                                <td><?= $data ['heading']?></td>
                                <td>
                                    <img width="100" src="../controller/banners/uploads/<?= $data['featured_img']?>" alt="">
                                </td>
                                <td><?= $data['details']?></td>
                                <td><?= $data['button_title']?></td>
                                <td><?= $data['button_url']?></td>
                                <td><?= $data['video_url']?></td>
                                <td>
                                    <a href="../controller/banners/status.php?status_id=<?=$data['id']?>"><i class="<?= $data ['status'] == 1 ? 'fa-solid' : 'fa-regular'?> fa-lightbulb"></i></a>
                                </td>
                                <td>
                                    <div class="btn-group">
                                        <a href=""class="btn btn-primary btn-sm">Edit</a>
                                        <a href=""class="btn btn-danger btn-sm">Delete</a>
                                    </div>
                                </td>

                            </tr>
                                
                                <?php
                            }
        
                            ?>

                        </table>
                    </div> 

                </div>

            </div>
        </div>
    </container>
</section>

<?php
include_once "./backendLayouts/footer.php";
?>