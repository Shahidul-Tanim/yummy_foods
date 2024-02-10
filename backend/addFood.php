<?php
include_once "./backendLayouts/header.php";
include_once "../database/env.php";

$query = "SELECT * FROM categories WHERE status=true";
$res = mysqli_query($conn,$query);
$categories = mysqli_fetch_all($res,1);

?>

    <section>
        <div class="container">

            <div class="row justify-content-center">

              <div class="col-lg-10">

               <div class="card">
                   <div class="card-header">Food Info</div>
                   <div class="card-body">

                       <form action="../controller/foodStore.php" method="POST" enctype="multipart/form-data">

                           <div class="row">
                               <div class="col-lg-6">
                                   <label class="d-block" for="profileInput">
                                       <img style="max-width: 100%;" class="profileImage" src="<?= "https://media.istockphoto.com/id/1409329028/vector/no-picture-available-placeholder-thumbnail-icon-illustration-design.jpg?s=612x612&w=0&k=20&c=_zOuJu755g2eEUioiOUdz_mHKJQJn-tDgIAhQzyeKUQ=" ?>" alt="">
                                   </label>
                                   <input name="food_img" class="d-none" type="file" id="profileInput">
                    
                                   <span class="text-danger">
                                     <?= $_SESSION['errors']['food_img'] ?? ''?>
                                   </span>

                               </div>
                               <div class="col-lg-6">
                                  <input type="text" class="form-control my-3" name="title" placeholder="Enter Food Name">
                                  <textarea name="detail" class="form-control my-3" placeholder="Enter Food Detail"></textarea>
                                  <input type="text" class="form-control my-3" name="price" placeholder="Food Price">
                                  <select name="category" class="form-control my-3">
                                    <option disabled selected>Select an category</option>

                                    <?php
                                    foreach( $categories as $category ){
                                        ?>
                                        
                                        <option value="<?= $category['category_title'] ?>"><?= ucwords($category['category_title'] )?></option>
                                        
                                        <?php
                                    }
                                    ?>

                                  </select>

                                  <button name="btn" type="submit" class="btn btn-info">Submit</button>
                               </div>
                           </div>

                       </form>

                   </div>
               </div>
              </div>

            </div>

        </div>
    </section>

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