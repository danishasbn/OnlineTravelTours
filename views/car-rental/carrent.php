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
  <div class="row">
    <?php
      if($query){
        while($row = mysqli_fetch_array($query)){
          ?>
          <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="<?= "../../dashboard/uploadImages/".$row['imagePath']?>" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title"><?= $row['car_title'] ?></h5>
              <ul class="card-text car-rental-text">              
                <li>Car Transmission: <?= $row['transmission']?></li>
              </ul>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>    

          <?php
        }
      }
    ?>
      
  </div>
</div>
<?php require('../../common/footer.php');?>
