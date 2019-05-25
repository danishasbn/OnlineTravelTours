<?php require('../../common/header.php');?>
<?php require('../../Action/action-display-pre-booking.php');?>

<div class="container">
  <div class="row justify-content-center">
     <div class="pre-booking text-justify border">
    
        <div class="text-center pre-booking-img">
            <img src="../../Asset/images/logo/paradise-chaser-logo.png" class="img-fluid" />
        </div>
    <br>
	<a href="#" class="btn-lg btn-danger float-right download" onclick="HTMLtoPDF()">Download PDF</a>
<div id="HTMLtoPDF">
    
    <h2 class="text-teal text-center"> Payment by Internet Banking</h2>
    <h4 class="text-teal">Pre-Order Booking</h4>
    <p class="font-weight-bold"> Dear <?=  $_SESSION['login-user-fname']; ?>,</p>
    <p> Thank you for your Booking Request from ParadiseChaser. </p>
    
    
    <!-- CHANGE -->
          <?php
            if(isset($_GET['carRentalID'])){

                if($qry_BookingHeading_CarRental){              
                          while($rowBookingHeading = mysqli_fetch_array($qry_BookingHeading_CarRental)){              
                            $orderNo =  $rowBookingHeading['orderReference'];
                            $total = $rowBookingHeading['total'];
                          }
                          ?>
                          <h5>Your order: <span class="text-teal"> <?= $orderNo; ?> </span></h5>
                          <h5>Total:<span class="text-danger"> Rs.<?= $total; ?></span> </h5>
                          <?php
                        }else{
                          echo "failed".mysqli_error($dbc);
                        }


            }else if(isset($_GET['hotelID'])){
                 if($qry_BookingHeading_Hotel){              
                          while($rowBookingHeading = mysqli_fetch_array($qry_BookingHeading_Hotel)){
                            $orderNo =  $rowBookingHeading['orderReference'];
                            $total = $rowBookingHeading['total'];
                          }
                          ?>
                          <h5>Your order: <span class="text-teal"> <?= $orderNo; ?> </span></h5>
                          <h5>Total:<span class="text-danger"> Rs.<?= $total; ?></span> </h5>
                          <?php
                        }else{
                          echo "failed".mysqli_error($dbc);
                        }

            }
        
          ?>
    <!-- CHANGE -->




    <h5>Below is your booking informations </h5>
    <br>
     <div class="text-center">
        <table class="table table-striped table-responsive table-bordered" style="width:100%">
       
          <!-- CHANGE -->
          <?php

          if(isset($_GET['carRentalID'])){

            ?>

          <thead>
            <th>Car Name</th>
            <th>No of days</th>
            <th>Price (MUR)</th>
            <th>Pickup Place</th>
            <th>Pickup Date</th>
            <th>Return Date</th>
          </thead>
          <tbody>
            <?php

            if($qry_Booking_CarRental){
              while($rowBooking = mysqli_fetch_array($qry_Booking_CarRental)){
                if($rowBooking['order_category'] == 'car rental'){
                  ?>
                  <tr>
                    <td><?= $rowBooking['car_title']; ?></td>
                    <td><?= $rowBooking['no_of_days']; ?></td>
                    <td><?= $rowBooking['total']; ?></td>
                    <td> <span class="badge badge-success" >Will show up <br> after Payment <br> has been  effected </span></td>
                    <td> <span class="badge badge-success" >Will show up <br> after Payment <br> has been  effected </span></td>
                    <td> <span class="badge badge-success" >Will show up <br> after Payment <br> has been  effected </span></td>
                  </tr>
                  <?php
                }
               
                ?>
                <?php
              }
            }else{
              echo "failed".mysqli_error($dbc);
            }
          }else if(isset($_GET['hotelID'])){
            ?>
            <thead>
              <th>Hotel</th>
              <th>Price</th>
              <th>Check in </th>
              <th>Check out </th>
              <th>Room Type </th>
              <th>Occupacy </th>
              <th>Meal Type </th>
            </thead>
          <tbody>

            <?php
               if($qry_Booking_Hotel){
              while($rowBooking = mysqli_fetch_array($qry_Booking_Hotel)){
                if($rowBooking['order_category'] == 'hotel'){
                  ?>
                  <tr>
                    <td><?= $rowBooking['hotelName']; ?></td>
                    <td><?= $rowBooking['total']; ?></td>
                    <td><?= $rowBooking['check_in']; ?></td>
                    <td><?= $rowBooking['check_out']; ?></td>
                    <td><?= $rowBooking['room_type']; ?></td>
                    <td><?= $rowBooking['occupacy']; ?></td>
                    <td> <?= $rowBooking['meal_type']; ?></td>
                  </tr>
                  <?php
                }
                ?>
                <?php
              }
            }else{
              echo "failed".mysqli_error($dbc);
            }
          }
          ?>
          <!-- CHANGE -->



          </tbody>
        </table>
     </div>
     <br>

     <p> In order to receive your Booking Confirmation please finalize 100% of payment to ParadiseChaser Ltd. within 24 hours of placing the order.</p>
     <p>Please note that this particular offer can sell out at any time, and if you do remain interested, we would request you to finalize your payment sooner rather than later.</p>
     <p class="text-danger font-weight-bold text-center">VERY IMPORTANT: Please include the 'Order Number' as a reference when finalizing payment.</p>
     <div class="option1 border">
            <p class="font-weight-bold"> Option 1: </p>
            <p> Bank: Mauritius Commercial Bank (MCB)</p>
            <p> Account name: Paradise Chaser Ltd.</p>
            <p> Account number: 000123456789 </p>
     </div>
     <div class="option2 border">
            <p class="font-weight-bold"> Option 2: </p>
            <p> Bank: State Bank of Mauritius (SBM)</p>
            <p> Account name: Paradise Chaser Ltd.</p>
            <p> Account number: 98765432100082</p>
     </div>
     <p class="text-info text-center font-weight-bold" > Upon receipt of payment, you will automatically receive the Booking Confirmation to your email. </p>
     <p class="text-info text-center font-weight-bold" > ** PLEASE NOTE THIS IS NOT A BOOKING CONFIRMATION AND PAYMENT IS STILL PENDING ** </p>


     </div>
  </div>

</div>

</div>

	

<?php require('../../common/footer.php');?>
