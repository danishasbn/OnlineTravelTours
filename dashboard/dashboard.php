<?php require('../common/dashboard-common/header.php'); ?>
<?php include('../Action/action-dashboard.php') ?>

<style>
    .col-md-4 .col{
        padding:10px;
        width:50%;
        margin:0 auto;
        text-align:center;
    }
    .col-md-6 .col a{
        margin:0 auto;
    }
    .col-teal{
        height:80px;
        width:150px;
    }

    .container{
        background:url("../Asset/images/dashboard-back.jpeg");
    }
</style>

<main class="col bg-faded py-3">
    <h3 class="text-center"> Paradise Chaser Administrator Dashboard</h3>
    <br>
    
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="col"><a href="<?= $listOfBookings; ?>" class="btn-teal btn-lg btn-block col-teal"> Booking <br> <span><img src="<?= $booking; ?>"/> </span></a></div>
                <div class="col"><a href="<?= $listUser; ?>" class="btn-teal btn-lg btn-block col-teal"> User <br> <span><img src="<?= $userDash; ?>"/> </span></a></div>
                <div class="col"><a href="<?= $createPackage;?>" class="btn-teal btn-lg btn-block col-teal"> Package <br> <span><img src="<?= $package; ?>"/> </span></a></div>

            </div>

            
                        <div class="col-md-4">
                <div class="col"><a href="<?=  $createCar;?>" class="btn-teal btn-lg btn-block col-teal"> Car Rental <br> <span><img src="<?= $car; ?>" class="icon"/> </span></a></div>
                <div class="col"><a href="<?= $createHotel;?>" class="btn-teal btn-lg btn-block col-teal"> Hotel <br> <span><img src="<?= $hotel; ?>" class="icon"/> </span></a></div>
                <div class="col"><a href="<?= $createDiscount;?>" class="btn-teal btn-lg btn-block col-teal"> Discount <br> <span><img src="<?= $discount; ?>" class="icon"/> </span></a></div>

            </div>


                                    <div class="col-md-4">
                <div class="col"><a href="<?= $createPickup;?>" class="btn-teal btn-lg btn-block col-teal"> Pickup Point <br> <span><img src="<?= $pickup; ?>"/> </span></a></div>
                <div class="col"><a href="<?= $createCRC;?> " class="btn-teal btn-lg btn-block col-teal"> CRC <br> <span><img src="<?= $car; ?>" class="icon"/> </span></a></div>
                <div class="col"><a href="<?= $createDays; ?>" class="btn-teal btn-lg btn-block col-teal"> Days <br> <span><img src="<?= $calendar; ?>" class="icon"/> </span></a></div>

            </div>

            
            
        </div>



                <div class="row">
            <div class="col-md-4">
                <div class="col"><a href="<?= $createGallery;?>" class="btn-teal btn-lg btn-block col-teal"> Gallery <br> <span><img src="<?= $gallery; ?>" class="icon"/> </span></a></div>
                <div class="col"><a href="<?= $createOccupacy; ?>" class="btn-teal btn-lg btn-block col-teal"> Occupacy <br> <span><img src="<?= $group; ?>" class="icon"/> </span></a></div>
                <div class="col"><a href="#<?= $createRoomType ?>" class="btn-teal btn-lg btn-block col-teal"> Room Type <br> <span><img src="<?= $hotel; ?>" class="icon"/> </span></a></div>

            </div>

            
            <div class="col-md-4">
                <div class="col"><a href="<?= $createRoomType;?>" class="btn-teal btn-lg btn-block col-teal"> Meal Type <br> <span><img src="<?= $meal; ?>" class="icon"/> </span></a></div>
                <div class="col"><a href="<?= $createAirlines?>" class="btn-teal btn-lg btn-block col-teal"> Airline <br> <span><img src="<?= $flight; ?>" class="icon"/> </span></a></div>

            </div>
            
        </div>
    

    </div>




</main>


<?php require('../common/dashboard-common/footer.php'); ?>
