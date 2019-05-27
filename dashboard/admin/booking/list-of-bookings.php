<?php require('../../../common/dashboard-common/header.php'); ?>
<?php require('../../../Action/action-list-of-bookings.php'); ?>

<main class="col bg-faded py-3">
    <h3 class="text-left"> >> List of <small> <em> Customer Bookings </em></small> <<</h3> 
    
    <h5 class="text-center text-teal alert alert-success"> Car Rental </h5>
    <form method="post" action="<?=$_SERVER['PHP_SELF'];?>" autocomplete="off" >
        <table id="list-of-bookings" class="table table-striped table-responsive table-bordered" >
            <thead>
                <th>Booking No.</th>
                <th>Order Reference</th>
                <th>Date Booked</th>
                <th>Total Price</th>
                <th>Payment Option</th>
                <th>Payment Status</th>
                <th>Voucher</th>
                <th>Action</th>
            </thead>
            <tbody>
                <?php           
                    if($qry){
                        while($row = mysqli_fetch_array($qry)){
                            ?>
                                <tr>
                                    <td><?= $row['BookingNo'];?></td>
                                    <td><?= $row['orderReference'];?></td>
                                    <td><?= $row['dateBooked'];?></td>
                                    <td><?= $row['total'];?></td>
                                    <td><?= $row['payment_option'];?></td>
                                    <td><?= $row['payment_status'];?></td>
                                    <td><?= $row['booking_voucher'];?></td>
                                    <td>
                                        <a href="approved-booking.php?carRentalid=<?= $row['BookingNo'];?>&user=<?= $row['email'];?>" class="badge badge-success" > Approve </a> |
                                        <a href="upload-pdf.php?carRentalid=<?= $row['BookingNo'];?>&user=<?= $row['email'];?>" class="badge badge-warning"> Upload </a> |
                                        <a href="" class="badge badge-danger"> Cancelled </a> |
                                        <a href="" class="badge badge-info"> View Order</a> |
                                    </td>
                                
                                </tr>
                            <?php
                        }
                    }
                    else{
                        
                    }
                ?>
            </tbody>
        </table>
     
    </form>

<script>    
    $(document).ready(function() {
        $('#list-of-bookings').DataTable({
             responsive: true
        });
    } );
</script>

  
</main>
<?php require('../../../common/dashboard-common/footer.php'); ?>