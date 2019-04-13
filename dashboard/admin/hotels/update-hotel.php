<?php require('../../../common/dashboard-common/header.php'); ?>
<?php require('../../../Action/action-update-hotel.php'); ?>

<main class="col bg-faded py-3">
   <h3 class="text-left"> >> Update <small> <em> Hotel </em></small> <<</h3>
   <br>
   <div class='alert alert-success text-center alert-box' id="alertBox">
       This Hotel has been updated..!
       <br>
       Message: Success :)
    </div>
    <form method="post" action= "<?= $_SERVER['PHP_SELF'].'?id='.$_GET['id']; ?>" autocomplete="off" enctype="multipart/form-data">
        <div class="container">
            <div class="row">
            <?php
                if($query_hotel){
                    while($row_hotel = mysqli_fetch_array($query_hotel)){
                ?>
                <div class="col-md-6">
                    <label for="txt-hotelName">Hotel Name *</label>
                    <input type="text" class="form-control" id="txt-hotelName" name="txt-hotelName" data-validation="required custom" data-validation-regexp="^([a-zA-Z ]+)$" value="<?= $row_hotel['hotelName'];?>">

                    <label for="txt-hotelPrice">Price (per person)*</label>
                    <input type="text" class="form-control input-width-2" id="txt-hotelPrice" name="txt-hotelPrice" placeholder="Rs." data-validation="number" data-validation-allowing="float" value="<?= $row_hotel['price'];?>">
                    <br>
                    <h5>Date of Availability *</h5>
                    <label for="txt-dateFrom">Date From *</label>
                    <input type="text" class="form-control availabilityDate input-width-2" id="txt-dateFrom" name="txt-dateFrom" data-validation="required"  value="<?= $row_hotel['dateFrom'];?>" placeholder="Select Date From..">

                    <label for="txt-dateTo">Date To *</label>
                    <input type="text" class="form-control availabilityDate input-width-2" id="txt-dateTo" name="txt-dateTo" data-validation="required"  value="<?= $row_hotel['dateTo'];?>" placeholder="Select Date To..">
                    
                    <label for="txt-purchaseInclude">Purchase Include *</label>
                    <textarea class="form-control" rows="10" id="txt-purchaseInclude" name="txt-purchaseInclude" data-validation="required"><?= $row_hotel['purchaseInclude'];?></textarea>

                    <label for="txt-PackageDetails">Package Details *</label>
                    <textarea class="form-control" rows="10" name="txt-PackageDetails" id="txt-PackageDetails" data-validation="required"><?= $row_hotel['packageDetails'];?></textarea>                    
                </div>

                <div class="col-md-6">
                    <label for="txt-discount">Discount</label>
                    <select class="form-control input-width-2" name="txt-discount" id="txt-discount">
                      <option disabled>-----Your Selection-----</option>
                        <?php
                            if($row_hotel['discount_id'] == '0'){
                            ?>
                                <option selected >Null</option>        
                            <?php
                            }else{
                                ?>
                                <option  selected value="<?= $row_hotel['id']?>"><?= $row_hotel['discount_percent']?></option>
                            <?php
                            }
                        ?>
                        <option disabled>-----Discount-----</option>
                         <?php
                            if($query_discount){
                                while($row_discount = mysqli_fetch_array($query_discount)){
                                    ?>
                                        <option value="<?= $row_discount['id']?>"><?= $row_discount['discount_percent']?></option>
                                    <?php
                                }
                            }
                         ?>
                    </select>
                <?php
                        }   
                    }
                ?>
                    <br>
                    <div class="d-flex">
                        <?php
                            if($query_hotelGallery){
                                while($row_hotelGallery=mysqli_fetch_array($query_hotelGallery)){
                                    ?>
                                    <img src="<?= "../../uploadImages/".$row_hotelGallery['imagePath']; ?>" class="img-fluid" />
                                    <?php                                    
                                }
                            }
                        ?>
                    </div>
                    <br>

                    <p class="text-info">Click here to change picture</p>
                    <input type="checkbox" id="changePhoto" name="changePhoto" class="changePhoto"> 
                    <label for="changePhoto" name="changePhoto" class="changePhoto"></label>

                    <div id="uploadImagePanel">
                        <label for="txt-uploadImages">Upload Images *</label>
                        <!-- Validate that file is an image of type JPG, GIF or PNG and not larger than 2 mega bytes -->
                        <input type="file" name="upload_file[]" id="upload_file" class="form-control" onchange="preview_image();" multiple/>
                        <br>
                        <div class="col">
                            <div id="image_preview" class="border"></div>
                        </div>                       
                    </div>

                    <br>
                    <button class="btn-save" type="submit" name="btn-update-hotel" id="btn-update-hotel">Save Changes<span><img src="<?= $upload; ?>" class="icon"/></span></button>
                </div>

            </div>
        </div>
    </form>    
</main>
<?php require('../../../common/dashboard-common/footer.php'); ?>