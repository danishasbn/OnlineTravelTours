<?php require('../../../common/dashboard-common/header.php'); ?>
<?php require('../../../Action/action-update-hotel-gallery.php'); ?>


<main class="col bg-faded py-3">
    <h3 class="text-left"> >> <?= @$hotelName;?> <small> <em> Photo Gallery </em></small> <<</h3>  
    <br>
       <div class='alert alert-success text-center alert-box' id="alertBox">
        Photo has been uploaded successfully...!
       <br>
       Message: Success :)
    </div>
    <br>
    <a class="addNew" data-toggle="modal" data-target="#addNewPhoto"><img src="<?= $plusTeal; ?>"/>  <span class="text-teal"> Add New Photo </span></a>
    
    <!-- Modal to add New photo -->
    <div class="modal fade" id="addNewPhoto" tabindex="-1" role="dialog" aria-labelledby="addNewPhotoLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="addNewPhotoLabel">Upload Image(s)</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form method="post" action= "<?= $_SERVER['PHP_SELF']; ?>" autocomplete="off" enctype="multipart/form-data">
                <input type="hidden" value="<?= $hotelID;?>" name="hotelID" />
                <label for="txt-uploadImages"></label>
                <!-- Validate that file is an image of type JPG, GIF or PNG and not larger than 2 mega bytes -->
                <input type="file" name="upload_file[]" id="upload_file" class="form-control" onchange="preview_image();" multiple/>
                <br>
                <div class="col">
                    <div id="image_preview" class="border"></div>
                    <span><a href="" id="clearInput" class="decoration-none"><img src="<?= $remove;?>" class="icon"/> Remove all</a></span>
                    <br>
                    <br>
                    <button class="btn-save" name="btn-upload-photo">Upload Photo</button>
                </div>
            </form>
        </div>
        </div>
    </div>
    </div>
    <br>
    <br>    
    <form method="post" action= "<?= $_SERVER['PHP_SELF']; ?>" autocomplete="off">
        <table id="hotel-gallery" class="table table-striped" style="width:100%">
          <thead>
            <th>Image Name</th>
            <th>Image</th>
            <th>Action</th>
          </thead>
          <tbody>
            <?php
                if(@$query_gallery){
                    while($row_gallery = mysqli_fetch_array($query_gallery)){
            ?>   
            <tr>
                <td><?= $row_gallery['imagePath']; ?></td>
                <td>
                    <span class='zoom exe3' > 
                        <img src="../../uploadImages/<?= $row_gallery['imagePath']; ?>" class="img-fluid" width = "250" height ="250"/>
                        <p class="zoom-activate-text">Click to view</p>
                    </span>
                </td>
                <td><a href="view-hotel-gallery.php?id=<?= $row_gallery['id'];?>&del=<?= $row_gallery['gallery_id'] ?>"> <span data-balloon="Remove" data-balloon-pos="up"><img src="<?= $remove; ?>" class="icon" /></span></a> </td>
            </tr>
            <?php
                }
            }
            ?>
          </tbody>
        </table>
    </form>
</main>
<script>    
    $(document).ready(function() {
        $('#hotel-gallery').DataTable({
             responsive: true
        });
    } );
</script>
<?php require('../../../common/dashboard-common/footer.php'); ?>