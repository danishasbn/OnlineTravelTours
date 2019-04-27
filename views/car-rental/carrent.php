<?php require('../../common/header.php');?>
<?php require('../../Action/action-display-carrental.php');?>

<div class="container">
    <div class="row justify-content-center" >
      <h1 class="text-center trending"> Car <img src="<?= $border; ?>" class="img-border"/></h1>
    </div>
    <div class="row justify-content-center dashboard-circle">
      <img src="../../Asset/images/car-rental/dashboard-small-2.png" alt="" class="dashboard-img img-fluid">
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
                <img class="card-img-top img-responsive" src="<?= "../../dashboard/uploadImages/".$row['imagePath']?>" alt="Card image cap">
                <div class="overlay">
                  <h2 class="package-title"><?= $row['car_title'] ?></h2>
                  <a class="info" href="view-carrental.php?id=<?= $row['carID'];?>">View Details</a>
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
</div>
<?php require('../../common/footer.php');?>
