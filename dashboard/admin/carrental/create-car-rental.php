<?php require('../../../common/dashboard-common/header.php'); ?>
<?php require('../../../Action/action-create-car.php'); ?>

<main class="col bg-faded py-3">
   <h3 class="text-left"> >> Create new  <small> <em> Car Rental </em></small> <<</h3>
   <br>
   <div class='alert alert-success text-center alert-box' id="alertBox">
       A New Car Rental was added to Paradise Chaser..!
       <br>
       Message: Success :)
    </div>
    <form method="post" action="<?=$_SERVER['PHP_SELF'];?>" autocomplete="off" id="formCarRent" enctype="multipart/form-data">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <label for="txt-carTitle">Car Rental Title *</label>
                    <input type="text" class="form-control" id="txt-carTitle" name="txt-carTitle" data-validation="length required custom" data-validation-regexp="^([a-zA-Z ]+)$" data-validation-length="min4" value="<?php if(isset($carTitle)){echo $carTitle;} ?>">

                    <label for="">Upload Cover Image *</label>
                    <input type="hidden" name="size" value="1000000">
                    <input type="file" class="form-control" name="uploadImg" id="uploadImg" data-validation="required" onchange="readURL(this);" >
                    <br>
                    <img id="displaySingle" src="<?= $imageFormat; ?>" alt="your image" class="img-fluid"/>
                    <br>
   
                    <label for="sltcarRentalCompany">Car Rental Company *</label>
                    <select class="form-control input-width-3" name="sltcarRentalCompany" id="sltcarRentalCompany" data-validation="required">
                        <option selected disabled>Select Rental Company</option>
                         <?php
                            if($query_carRentCompany){
                                while($row = mysqli_fetch_array($query_carRentCompany)){
                                    ?>
                                        <option value="<?= $row['id']?>"><?= $row['company_name']?></option>
                                    <?php
                                }
                            }
                        ?>
                    </select>

                    <label for="sltPickup">Pick up Point *</label>
                    <select class="form-control input-width-2" name="sltPickup" id="sltPickup" data-validation="required">
                        <option selected disabled>Select pickup point</option>
                          <?php
                            if($query_pickup){
                                while($row = mysqli_fetch_array($query_pickup)){
                                    ?>
                                        <option value="<?= $row['id']?>"><?= $row['pickup_place']?></option>
                                    <?php
                                }
                            }
                        ?>
                    </select>

                    <label for="sltTransmission">Transmission *</label>
                    <select class="form-control input-width-2" name="sltTransmission" id="sltTransmission" data-validation="required">
                        <option selected disabled>Select Transmission</option>
                        <option value="Automatic">Automatic</option>
                        <option value="Manual">Manual</option>
                    </select>
                    

                    <label for="txt-price">Price per day *</label>
                    <input type="text" class="form-control input-width-2" placeholder="Rs." id="txt-price" name="txt-price" data-validation="number" data-validation-allowing="float">

                    <label for="txt-year">Year *</label>
                    <input type="text" class="form-control input-width-2" maxlength="4" id="txt-year" name="txt-year" data-validation="length required" data-validation-length="min4" maxlength="4">

                    <br>
                    <p>Free Delivery</p>
                    <input type="checkbox" value="Free Delivery" name="txt-delivery" id="txt-delivery">
                    <label for="txt-delivery"></label>
                    <br>
                    <br>
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
                    <br>
                    <br>
                    <button class="btn-save" type="submit" name="btn-save-car" id="btn-save-car">Create<span><img src="<?= $upload; ?>" class="icon"/></span></button>
                    <br>
                    <br>
                </div>
                <div class="col-md-6">
                    <label for="txt-CarCompanyDescription">Car Rental Company Description *</label>
                    <textarea class="form-control" rows="10" id="txt-CarCompanyDescription" name="txt-CarCompanyDescription" data-validation="required"></textarea>

                    <label for="txt-ConditionApply">Condition apply *</label>
                    <textarea class="form-control" rows="10" id="txt-ConditionApply" name="txt-ConditionApply" data-validation="required"></textarea>

                    <label for="txt-PackageDetails">Package Details *</label>
                    <textarea class="form-control" rows="10" name="txt-PackageDetails" id="txt-PackageDetails" data-validation="required"></textarea>
                </div>
            </div>
        </div>
    </form>    
</main>
<?php require('../../../common/dashboard-common/footer.php'); ?>