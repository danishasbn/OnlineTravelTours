<?php require('../../common/header.php');?>
<?php require('../../Action/action-display-hotel.php');?>

<div class="container">
    <div class="row justify-content-center">
      <h1 class="text-center trending"> Hotel <img src="<?= $border; ?>" class="img-border"/></h1>
    </div>
  </div>
</div>

<div class="container">
  <div class="row car-rental-wrapper">
    <?php

      if($query){
        while($row = mysqli_fetch_array($query)){
          ?>          
            <div class="card card-Packages col-md-4" data-aos="fade-up">
              <div class="hovereffect">            
                <img class="card-img-top img-responsive" src="<?= "../../dashboard/uploadImages/".$row['cover_image']?>" alt="Card image cap">
                <div class="overlay">
                  <h2 class="package-title"><?= $row['hotelName'] ?></h2>
                  <a class="info" href="view-hotel.php?id=<?= $row['hotelID'];?>">View Details</a>
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
</div>
<?php require('../../common/footer.php');?>
