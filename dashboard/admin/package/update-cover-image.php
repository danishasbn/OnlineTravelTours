<?php require('../../../common/dashboard-common/header.php'); ?>
<?php require('../../../Action/action-update-cover-image.php'); ?>


<main class="col bg-faded py-3">
    <h3 class="text-left"> >> <small> <em> Cover Image </em></small> <<</h3>  
    <br>
       <div class='alert alert-success text-center alert-box' id="alertBox">
        Photo has been uploaded successfully...!
       <br>
       Message: Success :)
    </div>
 
    <br>    
    <form method="post" action= "<?= $_SERVER['PHP_SELF']; ?>" autocomplete="off" enctype="multipart/form-data">
        <table id="package-gallery" class="table table-striped" style="width:100%">
          <thead>
            <th>Image Name</th>
            <th>Image</th>
            <th>Action</th>
          </thead>
          <tbody>
           <?php 
                if(@$query_package){
                    while($row = mysqli_fetch_array(@$query_package)){
                        ?>
                        <input type="hidden" name="getPackageID" value="<?= $row['id']; ?>"/>
                        <tr>
                            <td><?= $row['cover_image'];?></td>
                            <td><img src="../../uploadImages/<?= $row['cover_image'];?>" class="img-fluid" /></td>
                            <td>
                                <a href="" data-toggle="modal" data-target="#updatePackageCover" >   <span data-balloon="Edit" data-balloon-pos="up"><img src="<?= $edit; ?>" class="icon" /></span></a> |
                                <a href=""> <span data-balloon="Remove" data-balloon-pos="up"><img src="<?= $remove; ?>" class="icon" /></span></a> 
                            
                            </td>
                        </tr>
                        <?php
                    }
                }
           ?>
          </tbody>
        </table>
        <!-- Modal eDIT-->
        <div class="modal fade" id="updatePackageCover" tabindex="-1" role="dialog" aria-labelledby="updatePackageCover" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updatePackageCover">Update Cover Image -  - Package</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <input type="file" name="updatePackageCover" data-validation="required"/>
            </div>
            <div class="modal-footer">
                <button  name="btn-updatePackageCover" class="btn btn-save">Update</button>
            </div>
            </div>
        </div>
        </div>
    </form>
</main>

<?php require('../../../common/dashboard-common/footer.php'); ?>