<?php require('../../../common/dashboard-common/header.php'); ?>
<?php require('../../../Action/action-approval.php'); ?>


<main class="col bg-faded py-3">
    <h3 class="text-left"> >> List of <small> <em> Approved Bookings </em></small> <<</h3> 
    <br>
    
<form method="post" action="<?=$_SERVER['PHP_SELF'];?>" autocomplete="off" >
<div class="panel text-center">
<table id="list-of-packages" class="table table-striped table-responsive table-bordered" style="width:100%">
<tr>
        <td>Pickup Date</td>
        <td><input type="text" /></td>
        
        <td>Return Date</td>
        <td><input type="text" /></td>
    </tr>
 
    <tr>
        <td>Time</td>
        <td><input type="text" /></td>

        <td>Location</td>
        <td><input type="text" /></td>
    </tr>
    <tr>
    <td>
        <button class="btn-save"> Update Info</button>
        </td>
    </tr>

</table>
</div>
</form>

<br>
<a href="#" class="btn-lg btn-danger float-right download" onclick="HTMLtoPDF()">Download PDF</a>

<div id="HTMLtoPDF">
    
    <h2 class="text-teal text-center">Booking Voucher</h2>
        <?php
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
            <th>Time and Location </th>
          </thead>
          <tbody>
          <?php
            if($qry_Booking){
              while($rowBooking = mysqli_fetch_array($qry_Booking)){
                if($rowBooking['order_category'] == 'car rental'){
                  ?>
                  <tr>
                    <td><?= $rowBooking['car_title']; ?></td>
                    <td>No. of days taken: <?= $rowBooking['no_of_days']; ?></td>
                    
                  </tr>
                  <?php
                }


                
                ?>
                <?php
              }
            }else{
              echo "failed".mysqli_error($dbc);
            }
          ?>
          </tbody>
        </table>
     </div>
     <br>

     

     </div>
  </div>

</div>

    





    <!-- <form method="post" action="<?=$_SERVER['PHP_SELF'];?>" autocomplete="off" class="text-center" >
        
        <button type="button" class="btn btn-save" data-toggle="modal" data-target="#exampleModal">
            Upload Voucher  <span><img src="<?= $upload;?>" class="icon" /></span>
        </button>

        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <input type="file" />
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-save" name="btn-uploadPDF"> Upload <span><img src="<?= $upload;?>" class="icon" /></span> </button>
            </div>
            </div>
        </div>
        </div>

    </form> -->
  
</main>
<?php require('../../../common/dashboard-common/footer.php'); ?>