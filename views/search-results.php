<?php require('../common/header.php');?>
<?php require('../Action/action-search.php');?>

<div class="container">

    <div class="row justify-content-center">
        <h2 class="text-teal">Search Results</h2>
    </div>

    <div class="row">
        <h5 style="width:100%;" class="text-teal alert alert-success">Car Rental</h5>
    </div>

    <div class="row">
        <?php
        if($query){
            while($row = mysqli_fetch_array($query)){
            ?>
                <div class="card card-Packages col-md-4" data-aos="fade-up">
                <div class="hovereffect">
                    <img class="card-img-top img-responsive" src="<?= "../dashboard/uploadImages/".$row['imagePath']?>" alt="Card image cap">
                    <div class="overlay">
                    <h2 class="package-title"><?= $row['car_title'] ?></h2>
                    <a class="info" href="../views/car-rental/view-carrental.php?id=<?= $row['carID'];?>">View Details</a>
                    </div>
                    <div class="card-body">
                        <?php
                        if(empty($row['freeDelivery'])){
                            ?>
                            <p class="card-text text-left"><span class="badge badge-warning">No Delivery </span> - Pickup @ showroom</p>
                            <?php
                        }else{
                            ?>
                            <p class="card-text text-left"><span class="badge badge-success"> <?= $row['freeDelivery']; ?></span></p>
                        <?php
                        }
                        ?>
                    <p class="card-text text-left"><span class="badge badge-info">Discount <?= $row['discount_percent']; ?> % off</span></p>
                    <p class="card-text text-left">As From. <span class="badge badge-danger"> <?=  "Rs." .$row['price']?> </span> per day</p>
                    </div>
                </div>
                </div>
            <?php
            }
        }
        ?>
    </div>

    <div class="row">
        <h5 style="width:100%;" class="text-teal alert alert-success">Hotel</h5>
    </div>
    
    <div class="row">
     <?php

      if($queryH){
        while($row = mysqli_fetch_array($queryH)){
          ?>          
            <div class="card card-Packages col-md-4" data-aos="fade-up">
              <div class="hovereffect">            
                <img class="card-img-top img-responsive" src="<?= "../dashboard/uploadImages/".$row['cover_image']?>" alt="Card image cap">
                <div class="overlay">
                  <h2 class="package-title"><?= $row['hotelName'] ?></h2>
                  <a class="info" href="../views/hotel/view-hotel.php?id=<?= $row['hotelID'];?>">View Details</a>
                </div>
                <div class="card-body">
                  <p class="card-text text-left"><span class="badge badge-info">Discount <?= $row['discount_percent']; ?> % off</span></p>
                  <p class="card-text text-left">As From. <span class="badge badge-danger"> <?=  "Rs." .$row['price']?> </span> per day</p>
                </div>
              </div>
            </div>
          <?php
        }
      }
    ?>
    </div>

    <div class="row">
        <h5 style="width:100%;" class="text-teal alert alert-success">Packages</h5>
    </div>

    <div class="row">
        <?php

      if($queryP){
        while($row = mysqli_fetch_array($queryP)){
          ?>          
            <div class="card card-Packages col-md-4" data-aos="fade-up">
              <div class="hovereffect">            
                <img class="card-img-top img-responsive" src="<?= "../dashboard/uploadImages/".$row['cover_image']?>" alt="Card image cap">
                <div class="overlay">
                  <h2 class="package-title"><?= $row['packageTitle'] ?></h2>
                  <a class="info" href="../views/packages/view-package.php?id=<?= $row['packageID'];?>">View Details</a>
                </div>
                <div class="card-body">
                  <?php
                    if( $row['discount_percent'] == '0'){
                      ?>
                        <p class="card-text text-left"><span class="badge badge-warning">No Discount</span></p>
                      <?php
                    }else{
                      ?>
                      <p class="card-text text-left"><span class="badge badge-info">Discount <?= $row['discount_percent']; ?> % off</span></p>
                      <?php
                    }
                  ?>
                  <p class="card-text text-left">Price: <span class="badge badge-danger"> <?=  "Rs." .$row['price']?> </span></p>
                </div>
              </div>
            </div>
          <?php
        }
      }
    ?>
    </div>

    
  
</div>


<?php require('../common/footer.php');?>
