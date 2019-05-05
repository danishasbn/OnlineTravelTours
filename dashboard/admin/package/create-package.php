<?php require('../../../common/dashboard-common/header.php'); ?>
<?php require('../../../Action/action-create-package.php'); ?>

<main class="col bg-faded py-3">
   <h3 class="text-left heading-3"> >> Create new  <small> <em> Package </em></small> <<</h3>
   <br>
   <div class='alert alert-success text-center alert-box' id="alertBox">
       A New Package was added to Paradise Chaser..!
       <br>
       Message: Success :)
    </div>
    <form method="post" action="<?=$_SERVER['PHP_SELF'];?>" autocomplete="off" id="formPackage" enctype="multipart/form-data">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <label for="txt-discount">Package Type</label>
                    <select class="form-control input-width-2" name="txt-packageType" id="txt-packageType" data-validation="required">
                        <option selected disabled>Select package type...</option>
                         <?php
                            if($query_package_type){
                                while($row_packageType = mysqli_fetch_array($query_package_type)){
                                    ?>
                                        <option value="<?= $row_packageType['id']?>"><?= $row_packageType['package_type']?></option>
                                    <?php
                                }
                            }
                        ?>
                    </select>

                    <label for="txt-packageTitle">Package Title *</label>
                    <input type="text" class="form-control" id="txt-packageTitle" name="txt-packageTitle" data-validation="length required custom" data-validation-regexp="^([a-zA-Z ]+)$" data-validation-length="min4" value="">

                    <label for="txt-price">Price per day *</label>
                    <input type="text" class="form-control input-width-2" placeholder="Rs." id="txt-price" name="txt-price" data-validation="number" data-validation-allowing="float">

                    <br>
                    <h5>Date of Availability *</h5>
                    <label for="txt-dateFrom">Date From *</label>
                    <input type="text" class="form-control availabilityDate input-width-2" id="txt-dateFrom" name="txt-dateFrom" data-validation="required"  value="" placeholder="Select Date From..">

                    <label for="txt-dateTo">Date To *</label>
                    <input type="text" class="form-control availabilityDate input-width-2" id="txt-dateTo" name="txt-dateTo" data-validation="required"  value="" placeholder="Select Date To..">

                    <label for="txt-discount">Discount (%)</label>
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
                    
                    <label for="">Upload Cover Image *</label>
                    <input type="hidden" name="size" value="1000000">
                    <input type="file" class="form-control" name="uploadImg" id="uploadImg" data-validation="required" onchange="readURL(this);" >
                    <br>
                    <img id="displaySingle" src="<?= $imageFormat; ?>" alt="your image" class="img-fluid"/>
                    <br>

                    <label for="txt-uploadImages">Upload Images *</label>
                    <!-- Validate that file is an image of type JPG, GIF or PNG and not larger than 2 mega bytes -->
                    <input type="file" name="upload_file[]" id="upload_file" class="form-control" onchange="preview_image();" multiple data-validation="required"/>
                    <br>
                    <div class="col">
                        <span><a href="" id="clearInput" class="decoration-none"><img src="<?= $remove;?>" class="icon"/> Remove all</a></span>
                        <div id="image_preview" class="border"></div>
                        <br>
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="txt-purchaseInclude">Purchase Include *</label>
                    <textarea class="form-control" rows="10" id="txt-purchaseInclude" name="txt-purchaseInclude" data-validation="required"></textarea>

                    <label for="txt-PackageDetails">Package Details *</label>
                    <textarea class="form-control" rows="10" name="txt-PackageDetails" id="txt-PackageDetails" data-validation="required"></textarea>
                    <br>
                    <br>
                    <button class="btn-save" type="submit" name="btn-save-package" id="btn-save-package">Create<span><img src="<?= $upload; ?>" class="icon"/></span></button>
                    <br>
                    <br>
                </div>
            </div>
        </div>
    </form>    
</main>
<?php require('../../../common/dashboard-common/footer.php'); ?>