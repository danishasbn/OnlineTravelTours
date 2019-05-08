<?php require('../../common/header.php');?>
<?php require('../../Action/action-display-carrental.php');?>
<?php require('../../Action/action-add-to-cart.php');?>

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
  <div class="row border">
     <div class="col-md-4">
        <form method="POST" action= "<?= $_SERVER['PHP_SELF']; ?>" autocomplete="off">
          <?php
            if(@$query_fetch){
                while($row_fetch = mysqli_fetch_array($query_fetch)){
                    ?>
                        <div class="panel panel-teal text-white bg-teal-back">
                            <h1 class="text-center trending text-white"> <?= $row_fetch['car_title']; ?> by <?= $row_fetch["companyName"];?></h1>
                            <h5 class="text-center"> <?= "Discount ".$row_fetch['discount_percent']. "% off"; ?> </h5>
                        </div>
                        <br>
                        <h5 class="text-center"> <?= "Price as from <span class='text-danger'> Rs. ".$row_fetch['price']. ".00";  ?> </h5>
                        <input type="hidden" name="txt-itemID" value="<?= $id; ?>"/>
                        <input type="hidden" name="txt-orderCategory" value="car rental"/>
                        <br>
                        <?php
                          if($query_days){
                            ?>
                              <div class="panel-teal">
                              <?php
                                while($row_days = mysqli_fetch_array($query_days)){
                              ?>                          
                                <input type="radio" name="days" value="<?= $row_days["days"]; ?>" required/> <?= $row_days["days"]." days";?>
                                <br>
                              <?php
                              }
                              ?>
                              </div>
                            <?php
                          }
                        ?>
                                                  
                        <br>
                        Available: As From <span class="badge badge-warning"><?= $row_fetch["dateFrom"]; ?></span> to <span class="badge badge-warning"><?= $row_fetch["dateTo"]; ?></span> 
                        <h2><b>Total: </b></h2>
                        <input type="hidden"  id="curr_price" value="<?= $row_fetch["price"]; ?>" class="form-control price-input" readonly/> 
                        <input type="text" name="totalPrice"  id="new_price" class="form-control price-input input-width-3" readonly value="Rs. 0"/> 
                        <br>
                        <?php
                          if(isset($_SESSION['login-user'])){
                            ?>
                              <button class="float-left btn-book btn-lg" name="btn-book-item">Book Now</button>
                            <?php
                          }else{
                            ?>
                              <button class="float-left btn-book btn-lg" disabled>Book Now </button>
                              <span class="badge badge-danger">This action is blocked. Please login to proceed.</span>
                            <?php
                          }
                        ?>
                        <br>
                        <br>
                        <br>

        </form>
     </div>

     <div class="col-md-4">
        <img src="<?= "../../dashboard/uploadImages/".$row_fetch['imagePath']?>" class="img-fluid card-img-top img-responsive" />        
    </div>
    

    <div class="col-md-4">
      <div>            
            <br>
            <h5> Purchase Include </h5>
            <br>
            <?= $row_fetch['conditionApply']; ?>
            <br>
            <br>
            <h5> Car rental company Description </h5>
            <?= $row_fetch['companyDescription']; ?>
            <br>
            <br>
       </div>
        <div>
            <h5> Package Details </h5>
            <br>
            <?= $row_fetch['packageDetails']; ?>
            <br>
            <br>
        </div>
                    <?php
                }
            }
        ?>
     </div>
  </div>
</div>

<!-- Custom JS Car Rental Page -->
<?php
  $custom_Carrental	= 'http://localhost:'.$_SERVER['SERVER_PORT'].'/OnlineTravelTours/Asset/js/pages/custom-carrental.js';
?>
<script src="<?= $custom_Carrental; ?>"></script>
<?php require('../../common/footer.php');?>
