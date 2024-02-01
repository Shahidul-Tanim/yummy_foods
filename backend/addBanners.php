<?php
include_once "./backendLayouts/header.php";
?>

    <section>
        <div class="container">

            <div class="row justify-content-center">

              <div class="col-lg-10">

               <div class="card">
                   <div class="card-header">Banner Info</div>
                   <div class="card-body">

                       <form action="../controller/banners/bannerStore.php" method="POST" enctype="multipart/form-data">

                           <div class="row">
                               <div class="col-lg-6">
                                   <label class="d-block" for="profileInput">
                                       <img style="max-width: 100%;" class="profileImage" src="<?= "https://media.istockphoto.com/id/1409329028/vector/no-picture-available-placeholder-thumbnail-icon-illustration-design.jpg?s=612x612&w=0&k=20&c=_zOuJu755g2eEUioiOUdz_mHKJQJn-tDgIAhQzyeKUQ=" ?>" alt="">
                                   </label>
                                   <input name="featured_img" class="d-none" type="file" id="profileInput">
                    
                                   <span class="text-danger">
                                   <?= $_SESSION['errors']['profileImage'] ?? ''?>
                                   </span>

                               </div>
                               <div class="col-lg-6">
                                  <input type="text" class="form-control my-3" name="heading" placeholder="Enter Banner Title">
                                  <textarea name="details" class="form-control my-3" placeholder="Enter Banner Detail"></textarea>
                                  <input type="text" class="form-control my-3" name="btn_title" placeholder="Enter Banner Button Title">
                                  <input type="text" class="form-control my-3" name="btn_link" placeholder="Enter Banner Button Link">
                                  <input type="text" class="form-control my-3" name="video_url" placeholder="Enter Banner Video URL">
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
