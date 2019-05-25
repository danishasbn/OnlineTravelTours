<?php require('../../common/header.php');?>
<?php require('../../Action/action-booking-selection.php');?>

<div class="container">
  <div class="row justify-content-center">
    <div class="dropdown drp-selection">
        <button class="btn  btn-lg  btn-info dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Choose your payment option
        </button>
        <form method="post" action= "<?= $_SERVER['PHP_SELF']; ?>" autocomplete="off">
          <div class="dropdown-menu menu-selection" name="slt-bookingSelection" aria-labelledby="dropdownMenuButton">
          <?php
            // Car Rental
            if(isset($_GET['carRentalID'])){
              $carRentalBookingID = $_GET['carRentalID'];
              ?>
               <a class="dropdown-item"  href="booking-selection.php?carRentalID=<?= $carRentalBookingID; ?>&option1=Internet Banking"> Internet Banking </a>
               <a class="dropdown-item"  href="booking-selection.php?carRentalID=<?= $carRentalBookingID; ?>&option2=Pay at Showroom"> Pay at Showroom </a>
              <?php
              // Hotel
            }else if(isset($_GET['hotelID'])){
              $hotelBookingID = $_GET['hotelID'];
              ?>
              <a class="dropdown-item"  href="booking-selection.php?hotelID=<?= $hotelBookingID; ?>&option1=Internet Banking" > Internet Banking </a>
               <a class="dropdown-item"  href="booking-selection.php?hotelID=<?= $hotelBookingID; ?>&option2=Pay at Showroom" > Pay at Showroom </a>
              <?php
            }
          
          ?>

          </div>
        </form>
    </div>
  </div>
  <div class="row justify-content-center">
    <img src="../../Asset/images/paymentoptions.png" class="payment-image img-fluid"/>
  </div>
</div>


<?php require('../../common/footer.php');?>
