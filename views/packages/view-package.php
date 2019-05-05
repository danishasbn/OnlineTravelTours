<?php require('../../common/header.php');?>
<?php require('../../Action/action-display-package.php');?>
<div class="container">
    <div class="row justify-content-center" >
      <h1 class="text-center trending"> Packages <img src="<?= $border; ?>" class="img-border"/></h1>
    </div>
  </div>
</div>

<div class="container">
  <div class="row border">
     
     <div class="col-md-6 border">
        <?php
            if($query_fetch){
                while($row_fetch = mysqli_fetch_array($query_fetch)){
                  ?>
                    <div class="panel panel-teal text-white bg-teal-back">
                        <h1 class="text-center"> <?= $row_fetch['packageTitle']; ?> </h1>
                    </div>
                    <h3 class="text-center text-danger"> As From Rs.<?= $row_fetch["price"];?></h3>
                    Available: As From <span class="badge badge-info"><?= $row_fetch["dateFrom"]; ?></span> to <span class="badge badge-info"><?= $row_fetch["dateTo"]; ?></span> 
                    <br><br>
                    <p class="text-center">
                        <span class="badge badge-warning">Discount <?= $row_fetch["discount_percent"]; ?>% off</span>
                    </p>

                  <?php
                    $packageType = $row_fetch['package_type'];
                    if($packageType == 'Car Rent'){
                      ?>
                       <?php
                          if($query_days){
                            while($row_days = mysqli_fetch_array($query_days)){
                              ?>
                              <input type="radio" name="days" value="<?= $row_days["days"]; ?>"/> <?= $row_days["days"]." days";?><br>
                              <?php
                            }
                          }
                        ?>                      
                      <?php
                    }else if($packageType == 'Hotel'){
                      ?>
                        <h5>Room Type</h5>
                        <?php
                          if($query_room){
                            while($row_room = mysqli_fetch_array($query_room)){
                              ?>
                              <input type="radio" name="room_type"/> <?= $row_room["room_type"]; ?>
                              <?php
                            }
                          }
                        ?>
                        <br><br>
                        <h5>Occupacy</h5>
                        <?php
                          if($query_occupacy){
                              while($row_occupacy = mysqli_fetch_array($query_occupacy)){
                               ?>
                               <input type="radio" name="occupacy"/> <?= $row_occupacy["occupacy"]; ?>
                               <br>
                               <?php
                              }
                          }
                        ?>
                        <br>
                        <h5>Meal Type</h5>
                        <?php
                          if($query_meal){
                            while($row_meal = mysqli_fetch_array($query_meal)){
                              ?>
                              <input type="radio" name="meal"/> <?= $row_meal["meal_type"]; ?>
                              <br>
                              <?php
                            }
                          }
                        ?>
                      <?php
                    }
                    ?>

                    <button class="btn-book btn-lg">Book Now </button>
     </div>


     <div class="col-md-6">
                          
        <?php
            if($query_gallery_details){
        ?>
        <div class="slider">
                <?php
                    while($row_image = mysqli_fetch_array($query_gallery_details)){
                ?>
                        <img src="<?= "../../dashboard/uploadImages/".$row_image['imagePath']?>" class="img-fluid" />
                <?php
                }
                ?>
        </div>
        <?php
        }
        ?>
        <br>
        <h3>Purchase Include</h3>
        <br>
        <?= $row_fetch["purchaseInclude"];?>
        <h3>Package Details</h3>
        <br>
        <?= $row_fetch["packageDetails"];?>

     <div>

    <?php
        }
    }
    ?>

    </div>
</div>

</div>
</div>
<?php require('../../common/footer.php');?>

  <script type="text/javascript">
    $(document).ready(function(){
      $('.slider').slick({
            prevArrow: false,
           nextArrow: false,
           autoplay:true,
           autoplaySpeed:1500
      });
    });
  </script>
	

 




