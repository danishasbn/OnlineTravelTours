<?php require('../../../common/dashboard-common/header.php'); ?>
<?php require('../../../Action/action-list-of-cars.php');?>

<img src="../../../Asset/images/car-rental/dashboard-small-2.png" alt="" class="img-fluid" style="margin:0 auto; height:50% !important; margin-top:50px; ">


<main class="col bg-faded py-3">
    <h3 class="text-left"> >> List  <small> <em> Car Rental </em></small> <<</h3>  
    <form method="post" action= "<?= $_SERVER['PHP_SELF']; ?>" autocomplete="off">
        <table id="list-of-cars" class="table table-striped table-responsive table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>Photo</th>
                    <th>Car Title</th>
                    <th>Transmission</th>
                    <th>Price</th>
                    <th>Year</th>
                    <th>Discount</th>

                    <th>Pick up point</th>
                    <th>Car Rental Company</th>
                    <th>Delivery</th>
                    <th>Car Rental Company Description</th>
                    <th>Conditions</th>
                    <th>Package Details</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            <?php 
                while($row = mysqli_fetch_array($query_carrent)){
                    $id             = $row['car_rental_id'];
                    $carTitle       = $row['car_title'];
                    $transmission   = $row['transmission'];
                    $price          = $row['price'];
                    $year           = $row['year'];
                    $freeDelivery   = $row['freeDelivery'];
                    
                    $discount       = $row['discount_percent'];
                    $pickuppoint    = $row['pickup_place'];
                    $carrentCompany = $row['company_name'];

                    $crcDescr       = $row['car_rental_company_description'];
                    $condition      = $row['conditionApply'];
                    $packageDetails = $row['packageDetails'];

                    $image          = $row['imagePath'];
            ?>
                <tr>
                    <td><img src="../../uploadImages/<?= $image; ?> "  class="imageDimension" /></td>
                    <td><?= $carTitle; ?></td>
                    <td><?= $transmission; ?></td>
                    <td><?= "Rs. ".$price; ?></td>
                    <td><?= $year; ?></td>
                    <td><?= $discount; ?></td>
                    <td><?= $pickuppoint; ?></td>
                    <td><?= $carrentCompany; ?></td>
                    <td><?= $freeDelivery; ?></td>   
                    <td><?= $crcDescr; ?></td>   
                    <td><?= $condition; ?></td>   
                    <td><?= $packageDetails; ?></td>
                    <td>
                        <a href="update-car-rental.php?id=<?= $id;?>"> <span data-balloon="Edit" data-balloon-pos="up"><img src="<?= $edit; ?>" class="icon" /></span></a> |
                        <a href="list-of-carrental.php?del=<?= $id;?>"> <span data-balloon="Remove" data-balloon-pos="up"><img src="<?= $remove; ?>" class="icon" /></span></a> 
                    </td> 
                </tr>
                <?php
                    }
                ?>
            </tbody>       
        </table>
    </form>
</main>
<script>    
    $(document).ready(function() {
        $('#list-of-cars').DataTable({
             responsive: true
        });
    } );
</script>

<?php require('../../../common/dashboard-common/footer.php'); ?>
