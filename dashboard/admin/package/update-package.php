<?php require('../../../common/dashboard-common/header.php'); ?>
<?php require('../../../Action/action-update-package.php'); ?>

<main class="col bg-faded py-3">
   <h3 class="text-left heading-3"> >> Create new  <small> <em> Package </em></small> <<</h3>
   <br>
   <div class='alert alert-success text-center alert-box' id="alertBox">
        This package was updated sucessfully to Paradise Chaser..!
       <br>
       Message: Success :)
    </div>
    <form method="post" action="<?= $_SERVER['PHP_SELF'].'?id='.$_GET['id']; ?>" autocomplete="off" enctype="multipart/form-data">
        <div class="container">
            <div class="row">
                <?php
                    if(@$query_package){
                        while($row_package = mysqli_fetch_array($query_package)){
                ?>
                <div class="col-md-6">
                <label for="txt-packageType">Package Type </label>
                    <select class="form-control input-width-2" name="txt-packageType" id="txt-packageType">
                        <option disabled>-----Your Selection-----</option>
                        <?php
                            if($row_package['package_type_id'] == '0'){
                        ?>
                        <option selected>Null</option>
                        <?php
                            }else{
                        ?>
                        <option selected value="<?= $row_package['package_type_id']?>"><?= $row_package['package_type']?>
                        </option>
                        <?php
                            }
                        ?>
                        <option disabled>-----Package Type-----</option>
                        <?php
                        if($query_packageType){
                                while($row_package_type = mysqli_fetch_array($query_packageType)){
                        ?>
                        <option disabled value="<?= $row_package_type['id']?>"><?= $row_package_type['package_type']?>
                        </option>
                        <?php
                                }
                            }
                        ?>
                    </select>



                    <div class="travel-section">
                        <strong><h5 class="text-info">Travel Section </h5></strong>
                        <strong><label>Departing From SSR Airport</label></strong>
                        <br>
                        <label for="txt-airline">Airline *</label>
                        <select class="form-control input-width-2" name="txt-airline" id="txt-airline">
                            <option disabled>-----Your Selection-----</option>
                            <?php
                                if($row_package['airline_id'] == '0'){
                            ?>
                            <option selected>Null</option>
                            <?php
                                }else{
                            ?>
                            <option selected value="<?= $row_package['airline_id']?>"><?= $row_package['airline']?>
                            </option>
                            <?php
                                }
                            ?>
                            <option disabled>-----Airline-----</option>
                            <?php
                            if($query_airline){
                                    while($row_airline = mysqli_fetch_array($query_airline)){
                            ?>
                            <option value="<?= $row_airline['id']?>"><?= $row_airline['airline']?>
                            </option>
                            <?php
                                    }
                                }
                            ?>
                        </select>
                        <label for="txt-country">Country *</label>
                        <select class="form-control input-width-2" name="txt-country" id="txt-country">
                            <option disabled>-----Your Selection-----</option>
                            <?php
                                if($row_package['country_id'] == '0'){
                            ?>
                            <option selected>Null</option>
                            <?php
                                }else{
                            ?>
                            <option selected value="<?= $row_package['country_id']?>"><?= $row_package['country_name']?>
                            </option>
                            <?php
                                }
                            ?>
                            <option disabled>-----Country-----</option>
                            <?php
                            if($query_country){
                                    while($row_country = mysqli_fetch_array($query_country)){
                            ?>
                            <option value="<?= $row_country['id']?>"><?= $row_country['country_name']?>
                            </option>
                            <?php
                                    }
                                }
                            ?>
                        </select>
                        <label for="txt-country">Terms and Conditions *</label>
                        <textarea class="form-control" rows="10" name="txt-terms-and-conditions" id="txt-terms-and-conditions" data-validation="required"><?= $row_package['terms'];?></textarea>
                    </div>

                    

                    <label for="txt-packageTitle">Package Title *</label>
                    <input type="text" class="form-control" id="txt-packageTitle" name="txt-packageTitle" data-validation="length required custom" data-validation-regexp="^([a-zA-Z ]+)$" data-validation-length="min4" value="<?= $row_package['packageTitle']; ?>">

                    <label for="txt-price">Price per day *</label>
                    <input type="text" class="form-control input-width-2" placeholder="Rs." id="txt-price" name="txt-price" data-validation="number" data-validation-allowing="float" value="<?= $row_package['price'];?>">

                    <br>
                    <h5>Date of Availability *</h5>
                    <label for="txt-dateFrom">Date From *</label>
                    <input type="text" class="form-control availabilityDate input-width-2" id="txt-dateFrom" name="txt-dateFrom" data-validation="required" placeholder="Select Date From.."  value="<?= $row_package['dateFrom'];?>">

                    <label for="txt-dateTo">Date To *</label>
                    <input type="text" class="form-control availabilityDate input-width-2" id="txt-dateTo" name="txt-dateTo" data-validation="required"  placeholder="Select Date To.." value="<?= $row_package['dateTo'];?>">

                    <label for="txt-discount">Discount (%)</label>
                        <select class="form-control input-width-2" name="txt-discount" id="txt-discount">
                            <option disabled>-----Your Selection-----</option>
                            <?php
                                if($row_package['discount_id'] == '0'){
                            ?>
                            <option selected>Null</option>
                            <?php
                                }else{
                            ?>
                            <option selected value="<?= $row_package['discount_id']?>"><?= $row_package['discount_percent']?>
                            </option>
                            <?php
                                }
                            ?>
                            <option disabled>-----Discount-----</option>
                            <?php
                            if($query_discount){
                                    while($row_discount = mysqli_fetch_array($query_discount)){
                            ?>
                            <option value="<?= $row_discount['id']?>"><?= $row_discount['discount_percent']?>
                            </option>
                            <?php
                                    }
                                }
                            ?>
                        </select>
                    
                    <br>
                     <img src="<?= "../../uploadImages/".$row_package['cover_image']; ?>" alt="your cover image" class="img-fluid" />
                     <a href="update-cover-image.php?id=<?= $row_package['packageID'];?>">Update Cover Image</a>
                    <br>
                      <img src="<?= $imageFormat; ?>" alt="your image" class="img-fluid" /> <a
                        href="view-package-gallery.php?id=<?= $row_package['packageID']; ?>">View Gallery</a>
                    <br>
                </div>
                <div class="col-md-6">
                    <label for="txt-purchaseInclude">Purchase Include *</label>
                    <textarea class="form-control" rows="10" id="txt-purchaseInclude" name="txt-purchaseInclude" data-validation="required"><?= $row_package['purchaseInclude']; ?></textarea>

                    <label for="txt-PackageDetails">Package Details *</label>
                    <textarea class="form-control" rows="10" name="txt-PackageDetails" id="txt-PackageDetails" data-validation="required"><?= $row_package['packageDetails']; ?></textarea>
                    <br>
                    <br>
                    
                    <?php
                        }
                    }
                    ?>
                    <button class="btn-save" type="submit" name="btn-update-package" id="btn-update-package">Save Changes<span><img src="<?= $upload; ?>" class="icon"/></span></button>
                    <br>
                    <br>
                </div>
            </div>
        </div>
    </form>    
</main>
<!-- Custom JS Travel Package -->
<?php
  $custom_travel	        = 'http://localhost:'.$_SERVER['SERVER_PORT'].'/OnlineTravelTours/Asset/js/pages/custom-update-travel.js';
?>
<script src="<?= $custom_travel; ?>"></script>
<?php require('../../../common/dashboard-common/footer.php'); ?>