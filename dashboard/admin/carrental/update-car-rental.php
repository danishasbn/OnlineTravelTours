<?php require('../../../common/dashboard-common/header.php'); ?>
<?php require('../../../Action/action-update-car-rental.php');?>
<main class="col bg-faded py-3">
   <h3 class="text-left"> >> Update  <small> <em> Car Rental </em></small> <<</h3>    
   <br>
    <div class='alert alert-success text-center alert-box' id="alertBox">
        This car has been updated sucessfully.
       <br>
       Message: Success :)
    </div>
    <div class="container">
        <form method="post" action= "<?= $_SERVER['PHP_SELF'].'?id='.$_GET['id']; ?>" autocomplete="off" enctype="multipart/form-data">
            <div class="row">
                <?php
                    if($query_cr){
                        while($row = mysqli_fetch_array($query_cr)){ 
                ?>
                <div class="col-md-6">
                    <label for="txt-carTitle">Car Rental Title *</label>
                    <input type="text" class="form-control" id="txt-carTitle" name="txt-carTitle" data-validation="length required custom" data-validation-regexp="^([a-zA-Z ]+)$" data-validation-length="min4" value="<?= $row['car_title'];?>">
                    
                    <img src="<?= '../../uploadImages/'.$row['imagePath']?>" class="img-fluid">

                    <p class="text-info">Click here to change picture</p>
                    <input type="checkbox" id="changePhoto" name="changePhoto" class="changePhoto"> 
                    <label for="changePhoto" name="changePhoto" class="changePhoto"></label>
                    

                    <div id="uploadImagePanel">
                        <label for="uploadImgUpdate">Upload Cover Image *</label>
                        <input type="hidden" name="size" value="1000000">
                        <input type="file" class="form-control" name="uploadImgUpdate" id="uploadImgUpdate" data-validation="required"  onchange="readURL(this);">
                        <br>
                        <img id="displayUpload" src="<?= $imageFormat; ?>" alt="your image" class="img-fluid"/>
                    </div>
                    
                    <br>
                    <label for="sltcarRentalCompany">Car Rental Company *</label>
                    <select class="form-control input-width-3" name="sltcarRentalCompany" id="sltcarRentalCompany" data-validation="required">      
                        <option disabled>-----Your Selection-----</option>
                        <option  selected value="<?= $row['pickup_id']?>"><?= $row['company_name']?></option>
                        <option disabled>-----Car Rental Company-----</option>
                         <?php
                            if($query_crc){
                                while($row_crc = mysqli_fetch_array($query_crc)){
                                    ?>
                                        <option value="<?= $row_crc['pickup_id']?>"><?= $row_crc['company_name']?></option>
                                    <?php
                                }
                            }
                         ?>
                    </select>

                    <label for="sltPickup">Pick up Point *</label>
                    <select class="form-control input-width-2" name="sltPickup" id="sltPickup" data-validation="required">
                      <option disabled>-----Your Selection-----</option>
                        <option  selected value="<?= $row['pickup_id']?>"><?= $row['pickup_place']?></option>
                        <option disabled>-----Pick up Point-----</option>
                         <?php
                            if($query_pickuppoint){
                                while($row_pickuppoint = mysqli_fetch_array($query_pickuppoint)){
                                    ?>
                                        <option value="<?= $row_pickuppoint['pickup_id']?>"><?= $row_pickuppoint['pickup_place']?></option>
                                    <?php
                                }
                            }
                         ?>
                    </select>

                    <label for="sltTransmission">Transmission *</label>
                    <select class="form-control input-width-2" name="sltTransmission" id="sltTransmission" data-validation="required">
                      <option disabled>-----Your Selection-----</option>
                        <option  selected value="<?= $row['transmission']?>"><?= $row['transmission']?></option>
                        <option disabled>-----Transmission-----</option>
                        <option value="Automatic">Automatic</option>
                        <option value="Manual">Manual</option>
                    </select>

                    <label for="txt-price">Price per day *</label>
                    <input type="text" class="form-control input-width-2" placeholder="Rs." id="txt-price" name="txt-price" data-validation="number" data-validation-allowing="float" value="<?= $row['price'].".00"; ?>">
 
                    <label for="txt-year">Year *</label>
                    <input type="text" class="form-control input-width-2" maxlength="4" id="txt-year" name="txt-year" data-validation="length required" data-validation-length="min4" maxlength="4" value="<?= $row['year']?>">

                    <br>
                    <p>Free Delivery</p>
                    <?php
                        if($row['freeDelivery'] == 'Free Delivery'){
                            ?>
                                <input type="checkbox" value="Free Delivery" name="txt-delivery" id="txt-delivery" checked>
                            <?php
                        }else{
                            ?>
                                <input type="checkbox" value="Free Delivery" name="txt-delivery" id="txt-delivery">
                            <?php
                        }   
                    ?>
                    <label for="txt-delivery"></label>
                    <br>
                    <br>
                    <label for="txt-discount">Discount</label>
                    <select class="form-control input-width-2" name="txt-discount" id="txt-discount">
                        <option disabled>-----Your Selection-----</option>
                        <?php
                            if($row['discount_id'] == '0'){
                        ?>
                        <option selected>Null</option>
                        <?php
                            }else{
                        ?>
                        <option selected value="<?= $row['discount_id']?>"><?= $row['discount_percent']?>
                        </option>
                        <?php
                            }
                        ?>
                        <option disabled>-----Discount-----</option>
                        <?php
                           if($query_discount){
                                while($row_discount = mysqli_fetch_array($query_discount)){
                        ?>
                        <option value="<?= $row_discount['discount_id']?>"><?= $row_discount['discount_percent']?>
                        </option>
                        <?php
                                }
                            }
                        ?>
                    </select>
                    <br>
                    <br>
                    <button class="btn-save" type="submit" name="btn-save-car" id="btn-save-car">Save Changes <span><img src="<?= $upload; ?>" class="icon"/></span></button>
                    <br>
                    <br>
                </div>
                <div class="col-md-6">
                    <label for="txt-CarCompanyDescription">Car Rental Company Description *</label>
                    <textarea class="form-control" rows="10" id="txt-CarCompanyDescription" name="txt-CarCompanyDescription" data-validation="required"><?= $row['car_rental_company_description']; ?></textarea>

                    <label for="txt-ConditionApply">Condition apply *</label>
                    <textarea class="form-control" rows="10" id="txt-ConditionApply" name="txt-ConditionApply" data-validation="required"><?= $row['conditionApply']; ?></textarea>

                    <label for="txt-PackageDetails">Package Details *</label>
                    <textarea class="form-control" rows="10" name="txt-PackageDetails" id="txt-PackageDetails" data-validation="required"><?= $row['packageDetails']; ?></textarea>
                </div>

                <?php
                 }
                }
                else{
                    echo "failed".mysqli_error($dbc);
                }
                ?>

            </div>
        </form>
        </div>
    </div>
</main>
<?php require('../../../common/dashboard-common/footer.php'); ?>
