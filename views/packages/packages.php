<?php require('../../common/header.php');?>
<?php require('../../Action/action-display-package.php');?>

<div class="container">
    <div class="row justify-content-center">
      <h1 class="text-center trending"> Packages <img src="<?= $border; ?>" class="img-border"/></h1>
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
                  <h2 class="package-title"><?= $row['packageTitle'] ?></h2>
                  <a class="info" href="view-package.php?id=<?= $row['packageID'];?>">View Details</a>
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
<?php require('../../common/footer.php');?>
