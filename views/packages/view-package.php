<?php require('../../common/header.php');?>
<?php require('../../Action/action-display-package.php');?>
<?php require('../../Action/action-add-to-cart.php');?>
<div class="container">
    <div class="row justify-content-center" >
      <h1 class="text-center trending"> Packages <img src="<?= $border; ?>" class="img-border"/></h1>
    </div>
  </div>
</div>

<div class="container">
  <div class="row border">
     
     <div class="col-md-6 border">
        <form method="POST" action= "<?= $_SERVER['PHP_SELF']; ?>" autocomplete="off">
         <?php
            if(@$query_fetch){
                while($row_fetch = mysqli_fetch_array($query_fetch)){
                  ?>
                    <input type="hidden" name="txt-itemID" value="<?= $id; ?>"/>
                    <input type="hidden" name="txt-orderCategory" value="package"/>

                    <div class="panel panel-teal text-white bg-teal-back">
                        <h1 class="text-center trending text-white"> <?= $row_fetch['packageTitle']; ?> </h1>
                    </div>
                    <h3 class="text-center text-danger"> Price: Rs.<?= $row_fetch["price"];?></h3>
                    <input type="hidden" name="dateFrom" id="dateFrom" value="<?= $row_fetch["dateFrom"]; ?>"/>
                    <input type="hidden" name="dateTo" id="dateTo" value="<?= $row_fetch["dateTo"]; ?>"/>
                    <p class="text-center">
                        <span class="badge badge-warning">Discount <?= $row_fetch["discount_percent"]; ?>% off</span>
                    </p>
                  <?php
                    $packageType = $row_fetch['package_type'];
                    if($packageType == 'Car Rent'){
                      ?>
                      <input type="hidden" id="package_type" name="package_type" value="<?= $row_fetch['package_type']; ?>"/>
                      <p class="text-danger text-center"> Please call +230 123-4560 for availability</p>
                       <?php
                          if($query_days){
                            while($row_days = mysqli_fetch_array($query_days)){
                              ?>
                              <!-- <input type="radio" name="days" value="<?= $row_days["days"]; ?>"/> <?= $row_days["days"]." days";?><br> -->
                              <?php
                            }
                          }
                        ?>     
                        <h2><b>Total: </b></h2>
                        <input type="text" name="totalPriceCar" class="form-control price-input input-width-2" readonly value="<?= $row_fetch["price"]; ?>"/> 
                        <br>
                      <?php
                    }else if($packageType == 'Hotel'){
                      ?>
                        <input type="hidden" id="package_type" name="package_type" value="<?= $row_fetch['package_type']; ?>"/>
                        <input type="text" class="form-control packageDate input-width-2" id="txt-getDate" name="txt-getDate" data-validation="required"  value="" placeholder="Select Date..">
                        <br>
                        <h5>Room Type</h5>
                        <?php
                          if($query_room){
                            while($row_room = mysqli_fetch_array($query_room)){
                              ?>
                              <input type="radio" name="room_type" value="<?= $row_room["id"]; ?>" data-price = "<?= $row_room["price"]; ?>" required/> <?= $row_room["room_type"]; ?>
                              <?php
                            }
                          }
                        ?>
                        <br><br>
                        <h5>Occupacy</h5>
                        <?php
                          if($query_occupacy){
                              while($row_occupacy = mysqli_fetch_array($query_occupacy)){
                               ?>
                               <input type="radio" name="occupacy" value="<?= $row_occupacy["id"]; ?>" data-price = "<?= $row_occupacy["occupacy_value"]; ?>" required/> <?= $row_occupacy["occupacy"]; ?>
                               <br>
                               <?php
                              }
                          }
                        ?>
                        <br>
                        <h5>Meal Type</h5>
                        <?php
                          if($query_meal){
                            while($row_meal = mysqli_fetch_array($query_meal)){
                              ?>
                              <input type="radio" name="meal" value="<?= $row_meal["id"]; ?>"  data-price = "<?= $row_meal["price"]; ?>" required/> <?= $row_meal["meal_type"]; ?>
                              <br>
                              <?php
                            }
                          }
                        ?>
                    <br>
                    <h2><b>Total: </b></h2>
                    <input type="hidden"  id="curr_price_hotel" value="<?= $row_fetch["price"]; ?>" class="form-control price-input" readonly/> 
                    <input type="text" name="totalPriceHotel"  id="new_hotel_price" class="form-control price-input input-width-2" readonly value="Rs. 0"/> 
                    <br> 
                      <?php
                    }else if($packageType == 'Travel'){
                      ?>
                    <input type="hidden" id="package_type" name="package_type" value="<?= $row_fetch['package_type']; ?>"/>
                    <div class="airline-box text-center border">
                      <h3 class="text-white">Airline : </h3>
                      <h5 class="text-white"><?=$row_fetch["airline"];  ?></h5>
                    </div>
                    <div class="text-center">
                      <img src="<?= $row_fetch["image_path"]; ?>" class="img-fluid"  style="height:150px;"/>
                    </div>

                    <!-- Display Form for Travel -->
                    <div class="row">
                        <div class="col-md-6 mb-3">
                          <label for="txt-fullName">Full Name</label>
                          <input type="text" class="form-control" id="txt-fullName" name="txt-fullName" data-validation="length required custom" data-validation-regexp="^([a-zA-Z ]+)$" data-validation-length="min3">
                        </div>
                        
                        <div class="col-md-6 mb-3">
                          <label for="txt-mobileNumber">Mobile Number</label>
                          <input type="tel" class="form-control" id="txt-mobileNumber" name="txt-mobileNumber" data-validation="required custom"  data-validation-regexp="^([0-9]+)$" placeholder="Mobile No. (+ 230)" maxLength ="8"/>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                          <label for="txt-departureDate">Departure Date </label>
                          <input type="text" class="form-control" name="txt-departureDate" id="txt-departureDate" data-validation="required" value="<?= $row_fetch["dateFrom"]; ?>" readonly>
                        </div>
                        
                        <div class="col-md-6 mb-3">
                          <label for="txt-returnDate">Return Date </label>
                          <input type="text" class="form-control" id="txt-returnDate" name="txt-returnDate" data-validation="required" value="<?= $row_fetch["dateTo"]; ?>" readonly>
                        </div>
                    </div>

                    <div class="row">
                          <div class="col-md-4 mb-3">
                            <label for="sltAdult">Adult (18+)</label>
                            <select data-validation="required" class="custom-select d-block w-100 pax" id="sltAdult" name="sltAdult" data-paxAdult = "Adult" >
                              <option value="">Choose...</option>
                                <?php
                                    for($i=0;$i<=11; $i++){
                                      ?>
                                      <option value="<?= $i;?>"><?= $i; ?></option>
                                      <?php
                                    }
                                ?>
                            </select>
                            <input type="hidden" value="" id="paxAdult" />
                          </div>
                         
                          <div class="col-md-4 mb-3">
                            <label for="sltTeen">Teen (< 18)</label>
                            <select data-validation="required" class="custom-select d-block w-100 pax" id="sltTeen" name="sltTeen" data-paxTeen = "Teen" >
                              <option value="">Choose...</option>
                                <?php
                                    for($i=0;$i<=11; $i++){
                                      ?>
                                      <option value="<?= $i;?>"><?= $i; ?></option>
                                      <?php
                                    }
                                ?>
                            </select>
                            <input type="hidden" value="" id="paxTeen" />
                          </div>


                          <div class="col-md-4 mb-3">
                            <label for="sltChild">Child ( < 12)</label>
                            <select data-validation="required" class="custom-select d-block w-100 pax" id="sltChild" name="sltChild" data-paxChild = "Child" >
                              <option value="">Choose...</option>
                                <?php
                                    for($i=0;$i<=11; $i++){
                                      ?>
                                      <option value="<?= $i;?>"><?= $i; ?></option>
                                      <?php
                                    }
                                ?>
                            </select>
                            <input type="hidden" value="" id="paxChild" />
                          </div>


                          <div class="col-md-4 mb-3">
                            <label for="sltInfant">Infant ( < 2)</label>
                            <select data-validation="required" class="custom-select d-block w-100 pax" id="sltInfant" name="sltInfant" data-paxInfant = "Infant">
                              <option value="">Choose...</option>
                                <?php
                                    for($i=0;$i<=11; $i++){
                                      ?>
                                      <option value="<?= $i;?>"><?= $i; ?></option>
                                      <?php
                                    }
                                ?>
                            </select>
                            <input type="hidden" value="" id="paxInfant" />
                          </div>

                        
                        </div>

                        <h2><b>Total: </b></h2>
                        <input type="hidden"  id="curr_price_travel" value="<?= $row_fetch["price"]; ?>" class="form-control price-input" readonly/> 
                        <input type="text" name="totalPriceTravel"  id="new_price_travel" class="form-control price-input input-width-2" readonly value="Rs. 0"/> 
                        <br>
                      <?php
                    
                  
                  }
                    ?>
                  <?php
                    if(isset($_SESSION['login-user'])){
                      ?>
                        <button class="float-left btn-book btn-lg" name="btn-book-item">Book Now</button>
                      <?php
                    }else{
                      ?>
                        <button class="float-left btn-book btn-lg" disabled>Book Now </button>
                        <br>
                        <span class="badge badge-danger">This action is blocked. Please login to proceed.</span>
                      <?php
                    }
              ?>
              </form>
     </div>


     <div class="col-md-6">
                          
        <?php
            if($query_gallery_details){
        ?>
        <div class="slider">
                <?php
                    while($row_image = mysqli_fetch_array($query_gallery_details)){
                ?>
                        <img src="<?= "../../dashboard/uploadImages/".$row_image['imagePath']?>" class="img-fluid" />
                <?php
                }
                ?>
        </div>
        <?php
          }
        ?>
        <br>
        <h3>Purchase Include</h3>
        <br>
        <?= $row_fetch["purchaseInclude"];?>
        <h3>Package Details</h3>
        <br>
        <?= $row_fetch["packageDetails"];?>

     <div>

    <?php
        }
    }
    ?>

    </div>
</div>

</div>
</div>
<!-- Custom JS Package Page -->
<?php
  $custom_package	        = 'http://localhost:'.$_SERVER['SERVER_PORT'].'/OnlineTravelTours/Asset/js/pages/custom-package.js';
?>
<script src="<?= $custom_package; ?>"></script>
<?php require('../../common/footer.php');?>

  <script type="text/javascript">
    $(document).ready(function(){
      $('.slider').slick({
            prevArrow: false,
           nextArrow: false,
           autoplay:true,
           autoplaySpeed:1500
      });
    
      $(".packageDate").flatpickr({
        altFormat: "F j, Y",
        dateFormat: "d/m/Y",
        minDate: $("#dateFrom").val(),
        maxDate:$("#dateTo").val()
      });

    });
    
  </script>
	

 




