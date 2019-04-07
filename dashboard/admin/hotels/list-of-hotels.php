<?php require('../../../common/dashboard-common/header.php'); ?>
<?php require('../../../Action/action-list-of-hotels.php');?>

<!-- <img src="../../../Asset/images/car-rental/dashboard-small-2.png" alt="" class="img-fluid" style="margin:0 auto; height:50% !important; margin-top:50px; "> -->


<main class="col bg-faded py-3">
    <h3 class="text-left"> >> List  <small> <em> of Hotels </em></small> <<</h3>  
    <form method="post" action= "<?= $_SERVER['PHP_SELF']; ?>" autocomplete="off">
        <table id="list-of-hotels" class="table table-striped table-responsive table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>Hotel Name</th>
                    <th>Price</th>
                    <th>Date From</th>
                    <th>Date To</th>
                    <th>Purchase Include</th>
                    <th>Package Details</th>
                    <th>Discount Percent (%)</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    if($query_hotel){
                    while($row = mysqli_fetch_array($query_hotel)){
                        $id = $row['id'];
                        ?>
                    <tr>
                        <td><?= $row['hotelName']; ?></td>
                        <td><?= $row['price']; ?></td>
                        <td><?= $row['dateFrom']; ?></td>
                        <td><?= $row['dateTo']; ?></td>
                        <td><?= $row['purchaseInclude']; ?></td>
                        <td><?= $row['packageDetails']; ?></td>
                        <td><?= $row['discount_percent']; ?></td>
                        <td>
                            <a href="update-hotel.php?id=<?= $id;?>"> <span data-balloon="Edit" data-balloon-pos="up"><img src="<?= $edit; ?>" class="icon" /></span></a> |
                            <a href="list-of-hotels.php?del=<?= $id;?>"> <span data-balloon="Remove" data-balloon-pos="up"><img src="<?= $remove; ?>" class="icon" /></span></a> 
                        </td>
                    </tr>
                <?php
                    }
                }
                ?>

            
            </tbody>       
        </table>
    </form>
</main>
<script>    
    $(document).ready(function() {
        $('#list-of-hotels').DataTable({
             responsive: true
        });
    } );
</script>

<?php require('../../../common/dashboard-common/footer.php'); ?>
