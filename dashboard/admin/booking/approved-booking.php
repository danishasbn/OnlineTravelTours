<?php require('../../../common/dashboard-common/header.php'); ?>
<?php require('../../../Action/action-approval.php'); ?>


<main class="col bg-faded py-3">
    <h3 class="text-left"> >> List of <small> <em> Approved Bookings </em></small> <<</h3> 
    <br>
    
<form method="post" action="<?=$_SERVER['PHP_SELF'];?>" autocomplete="off" >
<div class="panel text-center">

<?php
  if(isset($_GET['carRentalid'])){
    $id = $_GET['carRentalid'];
    $user = $_GET['user'];
    ?>
    <input type="hidden" name="getCarRentalID" value="<?= $id; ?>"/>
    <input type="hidden" name="getUser" value="<?= $user; ?>"/>
    <table id="list-of-packages" class="table table-striped table-responsive table-bordered" style="width:100%">
      <?php
       if($qry_B){
              while($rowBooking = mysqli_fetch_array($qry_B)){
                    $dateFrom       = $rowBooking['dateFrom'];
                    $dateTo         = $rowBooking['dateTo'];
                    ?>
                    <tr>
                        <td>Pickup Date</td>
                        <td>
                          <input type="text" class="form-control availabilityDate" id="txt-dateFrom" name="txt-dateFrom" data-validation="required"  value="<?= $dateFrom; ?>" placeholder="Select Date From..">
                        </td>
                        
                        <td>Return Date</td>
                        <td>
                          <input type="text" class="form-control availabilityDate" id="txt-dateTo" name="txt-dateTo" data-validation="required"  value="<?= $dateTo; ?>" placeholder="Select Date To..">
                        </td>
                    </tr>
                    <?php
              }
            }              
      ?>
      
      
          <tr>
              <td>Time</td>
              <td>
                <input type="text" class="form-control time"  name="txt-time" data-validation="required" >
              </td>
             
          </tr>
          <tr>
          <td>
              <button class="btn-save" name="btn-updateInfo-carRental"> Update Info</button>
              </td>
          </tr>
    </table>
    <?php
  }
?>

</div>
</form>

<br>
<a href="#" class="btn-lg btn-danger float-right download" onclick="HTMLtoPDF()">Download PDF</a>

<div id="HTMLtoPDF">
    
    <h2 class="text-teal text-center">Booking Voucher</h2>
        <?php
        if(isset($_GET['carRentalid'])){
           if($qry_BookingHeading){              
              while($rowBookingHeading = mysqli_fetch_array($qry_BookingHeading)){ 

                ?>
              <p class="font-weight-bold"> Dear <?= $rowBookingHeading['Fname'];?> <?= $rowBookingHeading['Lname'];?>, </p>
              <p> Thank you for your Booking from ParadiseChaser. </p>
                  <?php 
                $orderNo =  $rowBookingHeading['orderReference'];
                $total = $rowBookingHeading['total'];
                
              }
              ?>
              <h5>Your order: <span class="text-teal"> <?= $orderNo; ?> </span></h5>
              <h5>Paid Total:<span class="text-danger"> Rs.<?= $total; ?></span> </h5>
              <?php
            }else{
              echo "failed".mysqli_error($dbc);
            }
        }
           
          ?>

    <h5>Below is your booking informations </h5>
    <br>
     <div class="text-center">
        <table class="table table-striped table-responsive table-bordered" style="width:100%">
          <thead>
            <th>Item Name</th>
            <th>Item Description</th>
            <th>Pickup Date </th>
            <th>Return Date </th>            
            <th>Time</th>
            <th>Location</th>
          </thead>
          <tbody>
          <?php
          if(isset($_GET['carRentalid'])){
            if($qry_Booking){
              while($rowBooking = mysqli_fetch_array($qry_Booking)){
                if($rowBooking['order_category'] == 'car rental'){
                  ?>
                  <tr>
                    <td><?= $rowBooking['car_title']; ?></td>
                    <td>No. of days taken: <?= $rowBooking['no_of_days']; ?></td>
                    <td><?= $rowBooking['pickup_date']; ?></td>
                    <td><?= $rowBooking['return_date']; ?></td>
                    <td><?= $rowBooking['pickup_time']; ?></td>
                    <td><?= $rowBooking['pickup_place']; ?></td>
                    
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
          </tbody>
        </table>
     </div>
     <br>

     

     </div>
  </div>

</div>
  
</main>
<?php require('../../../common/dashboard-common/footer.php'); ?>