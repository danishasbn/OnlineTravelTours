<?php require('../../common/header.php');?>
<?php require('../../Action/action-display-hotel.php');?>
<?php require('../../Action/action-add-to-cart.php');?>

<div class="container">
    <div class="row justify-content-center" >
      <h1 class="text-center trending"> Hotel <img src="<?= $border; ?>" class="img-border"/></h1>
    </div>
  </div>
</div>

<div class="container">
  <div class="row border">
     
     <div class="col-md-6 border">
     <form method="POST" action= "<?= $_SERVER['PHP_SELF']; ?>" autocomplete="off">
        <?php
            if(@$query_fetch){
              while($row_fetch = mysqli_fetch_array(@$query_fetch)){
                ?>
                        <input type="hidden" name="txt-itemID" value="<?= $id; ?>"/>
                        <input type="hidden" name="txt-orderCategory" value="hotel"/>
                        
                        <div class="panel panel-teal text-white bg-teal-back">
                            <h1 class="text-center trending text-white"> <?= $row_fetch['hotelName']; ?></h1>
                        </div>
                        <h3 class="text-center text-danger"> As From Rs.<?= $row_fetch["price"];?></h3>
                        <input type="hidden" value="<?= $row_fetch["dateFrom"]; ?>" name="checkin" class="availability" id="checkin"/>
                        <input type="hidden" value="<?= $row_fetch["dateTo"]; ?>" name="checkout" class="availability" id="checkout"/>
                        
                        <p class="text-center">
                            <span class="badge badge-warning">Discount <?= $row_fetch["discount_percent"]; ?>% off</span>
                        </p>
                        
                        <div class="availability text-center">
                          Available: As From <span class="badge badge-info"><?= $row_fetch["dateFrom"]; ?></span> to <span class="badge badge-info"><?= $row_fetch["dateTo"]; ?></span> 
                          <br><br>
                          <input type="text" class="checkIn availability"  name="checkin" placeholder="Check-In" required/> 
                          <input type="text" class="checkOut availability" name="checkout"  placeholder="Check-Out" required/>    
                          <input type="hidden" name="nights" class="calculated" id="calculated" placeholder="Calculated" value=""/>
                        </div>
                        <br>
                      <h5>Room Type</h5>
                        <?php
                          if($query_room){
                            while($row_room = mysqli_fetch_array($query_room)){
                              ?>
                              <input type="radio" name="room_type" id="room_type" required data-price = "<?= $row_room["price"]; ?>" value="<?= $row_room["id"]; ?>"/> <?= $row_room["room_type"]; ?>
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
                               <input type="radio" name="occupacy" id="occupacy" required data-price = "<?= $row_occupacy["occupacy_value"]; ?>" value="<?= $row_occupacy["id"]; ?>"/> <?= $row_occupacy["occupacy"]; ?>
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
                              <input type="radio" name="meal" id="meal" data-price = "<?= $row_meal["price"]; ?> " value="<?= $row_meal["id"]; ?>" required/> <?= $row_meal["meal_type"]; ?>
                              <br>
                              <?php
                            }
                          }
                        ?>
                        <br>
                        <h2><b>Total: </b></h2>
                        <input type="hidden"  id="curr_price" value="<?= $row_fetch["price"]; ?>" class="form-control price-input" readonly/> 
                        <input type="text" name="totalPrice"  id="new_price" class="form-control price-input input-width-2" readonly value="Rs. 0"/> 
                        <br>
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
     <div class="col-md-6 border">
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
     <div>
     <br>
          <h3>Purchase Include</h3>
        <br>
        <?= $row_fetch["purchaseInclude"];?>
        <h3>Package Details</h3>
        <br>
        <?= $row_fetch["packageDetails"];?>
    <?php
        }
    }
    ?>
    </div>
</div>

</div>
</div>
<!-- Custom JS Hotel Page -->
<?php
  $custom_hotel	        = 'http://localhost:'.$_SERVER['SERVER_PORT'].'/OnlineTravelTours/Asset/js/pages/custom-hotel.js';
  $custom_availability	= 'http://localhost:'.$_SERVER['SERVER_PORT'].'/OnlineTravelTours/Asset/js/pages/custom-availability.js';
?>
<script src="<?= $custom_hotel; ?>"></script>
<script src="<?= $custom_availability; ?>"></script>

<?php require('../../common/footer.php');?>

<script type="text/javascript">
// Slider Script
$(document).ready(function(){
    $('.slider').slick({
          prevArrow: false,
          nextArrow: false,
          autoplay:true,
          autoplaySpeed:1500
    });
  });
</script>

  
	

 




