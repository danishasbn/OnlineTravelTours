<?php require('../../../common/dashboard-common/header.php'); ?>
<?php require('../../../Action/action-create-hotel.php'); ?>

<main class="col bg-faded py-3">
   <h3 class="text-left"> >> Create new  <small> <em> Hotel </em></small> <<</h3>
   <br>
   <div class='alert alert-success text-center alert-box' id="alertBox">
       A New Hotel was added to Paradise Chaser..!
       <br>
       Message: Success :)
    </div>
    <form method="post" action="<?=$_SERVER['PHP_SELF'];?>" autocomplete="off" id="formHotel" enctype="multipart/form-data">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <label for="txt-hotelName">Hotel Name *</label>
                    <input type="text" class="form-control" id="txt-hotelName" name="txt-hotelName" data-validation="required custom" data-validation-regexp="^([a-zA-Z ]+)$" value="">

                    <label for="txt-hotelPrice">Price (per person)*</label>
                    <input type="text" class="form-control input-width-2" id="txt-hotelPrice" name="txt-hotelPrice" placeholder="Rs." data-validation="number" data-validation-allowing="float" value="">
                    <br>
                    <h5>Date of Availability *</h5>
                    <label for="txt-dateFrom">Date From *</label>
                    <input type="text" class="form-control availabilityDate input-width-2" id="txt-dateFrom" name="txt-dateFrom" data-validation="required"  value="" placeholder="Select Date From..">

                    <label for="txt-dateTo">Date To *</label>
                    <input type="text" class="form-control availabilityDate input-width-2" id="txt-dateTo" name="txt-dateTo" data-validation="required"  value="" placeholder="Select Date To..">
                    
                    <label for="txt-purchaseInclude">Purchase Include *</label>
                    <textarea class="form-control" rows="10" id="txt-purchaseInclude" name="txt-purchaseInclude" data-validation="required"></textarea>

                    <label for="txt-PackageDetails">Package Details *</label>
                    <textarea class="form-control" rows="10" name="txt-PackageDetails" id="txt-PackageDetails" data-validation="required"></textarea>                    
                </div>

                <div class="col-md-6">
                    <label for="txt-discount">Discount</label>
                    <select class="form-control input-width-2" name="txt-discount" id="txt-discount" data-validation="required">
                        <option selected disabled>Select Discount</option>
                         <?php
                            if($query_discount){
                                while($row = mysqli_fetch_array($query_discount)){
                                    ?>
                                        <option value="<?= $row['id']?>"><?= $row['discount_percent']?></option>
                                    <?php
                                }
                            }
                        ?>
                    </select>

                    <label for="txt-uploadImages">Upload Images *</label>
                    <!-- Validate that file is an image of type JPG, GIF or PNG and not larger than 2 mega bytes -->
                    <input type="file" name="upload_file[]" id="upload_file" class="form-control" onchange="preview_image();" multiple/>
                    <br>
                    <div class="col">
                        <div id="image_preview" class="border"></div>
                    </div>
                    <br>
                    <button class="btn-save" type="submit" name="btn-save-hotel" id="btn-save-hotel">Create<span><img src="<?= $upload; ?>" class="icon"/></span></button>
                </div>

            </div>
        </div>
    </form>    
</main>
<?php require('../../../common/dashboard-common/footer.php'); ?>