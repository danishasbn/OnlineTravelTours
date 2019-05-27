<?php require('../common/header.php');?>
<?php require('../Action/action-shopping-cart.php');?>
<?php require('../Action/action-proceed-to-checkout.php');?>
<?php require('../Action/action-delete-cart.php');?>
 <style>
  .btn-info{
    border-radius:5px !important;
  }
  .btn-info:hover{
    cursor:pointer;
    transition:0.3s;
  }
 </style>
<div class="container">
  <div class="row justify-content-center" >
    <h1 class="text-center trending">Shopping Cart <img src="<?= $shoppingCart; ?>" class="img-fluid"/> </h1>
  </div>
  <hr>
  <h5 class="text-center text-teal alert alert-success"> Car Rental</h5>
  <form method="post" action= "<?= $_SERVER['PHP_SELF']; ?>" autocomplete="off">
    <div class="row">
        <?php
        if(@$qry_displayCar){
          ?>
              <table id="list-of-cars" class="table table-striped table-responsive table-bordered" style="width:100%">
              <thead>
                <th>Order No.</th>
                <th>Car Title</th>
                <th>No. of days</th>
                <th>Total Price</th>
                <th>Action</th>
              </thead>
              <tbody>
          <?php
          while($row_displayCar = mysqli_fetch_array($qry_displayCar)){
            ?>
            <tr>
              <td><?= "#CR".$row_displayCar["orderID"]; ?></td>
              <td><?= $row_displayCar["car_title"]; ?></td>
              <td><?= $row_displayCar["no_of_days"]; ?></td>
              <td><?= $row_displayCar["total_price"]; ?></td>
              <td>
                <a href="shopping-cart.php?delCar=<?= $row_displayCar["orderID"];  ?>"> <span data-balloon="Remove" data-balloon-pos="up"><img src="<?= $remove; ?>" class="icon" /></span></a> </td>
            </tr>
            <?php
          }
          ?>
            <tr>
            <td>
              <button class=" btn-info"  name="btn-checkout-carrental">Proceed to checkout </button></td>
            </tr>
            </tbody>
            </table>
              <input type="hidden" id="fieldCarRental" name="fieldCarRental" />
          <?php
        }

        ?>
    </div>
    <?php
        if(@$qryCarSum){
          while($rowCarSum = mysqli_fetch_array($qryCarSum)){
              // echo " <p class='text-danger'>" .$rowCarSum['FinalCarTotal']. "</p>";
              ?>
              
              <input type="hidden" name="txt-total-carrental" value="<?= $rowCarSum['FinalCarTotal']; ?>"/>
              <?php
          }
        }

        if(@$qryCarOrder){
           while($rowCarOrder = mysqli_fetch_array($qryCarOrder)){
              ?>
              <input type="hidden" name="txt-carOrderID[]" value="<?= $rowCarOrder['orderID']; ?> " />
              <?php
          }
        }
    ?>
  
    <hr>
    <h5 class="text-center text-teal alert alert-success"> Hotel</h5>
      <div class="row">
        <?php
        if(@$qry_displayHotel){
          ?>
              <table id="list-of-hotels" class="table table-striped table-responsive table-bordered" style="width:100%">
              <thead>
                <th>Order No.</th>
                <th>Hotel Name</th>
                <th>Meal Type</th>
                <th>Occupacy</th>
                <th>Room Type</th>
                <th>Total Price</th>
                <th>Action</th>
              </thead>
              <tbody>
          <?php
          while($row_displayHotel = mysqli_fetch_array($qry_displayHotel)){
            ?>
            <tr>
              <td><?= "#H".$row_displayHotel["orderID"]; ?></td>
              <td><?= $row_displayHotel["hotelName"]; ?></td>
              <td><?= $row_displayHotel["meal_type"]; ?></td>
              <td><?= $row_displayHotel["occupacy"]; ?></td>
              <td><?= $row_displayHotel["room_type"]; ?></td>
              <td><?= $row_displayHotel["total_price"]; ?></td>            
              <td>
                <a href="shopping-cart.php?delHotel=<?= $row_displayHotel["orderID"];  ?>"> <span data-balloon="Remove" data-balloon-pos="up"><img src="<?= $remove; ?>" class="icon" /></span></a>
              </td>
            </tr>
            <?php
          }
          ?>  <tr>
                  <td><button class=" btn-info" name="btn-checkout-hotel">Proceed to checkout</button></td>
              </tr>
              </tbody>
              </table>
              <input type="hidden" id="fieldHotel" name="fieldHotel" />
              
          <?php
        
        }
        ?>
    </div>
    <?php
        if(@$qryHotelSum){
          while($rowHotelSum = mysqli_fetch_array($qryHotelSum)){
              // echo " <p class='text-danger'>" . $rowHotelSum['FinalHotelTotal'] . "</p>";
              ?>
              <input type="hidden" name="txt-total-hotel" value="<?= $rowHotelSum['FinalHotelTotal']; ?>"/>
              <?php
          }
        }
        
        if(@$qryHotelOrder){
          while($rowHotelOrder = mysqli_fetch_array($qryHotelOrder)){
            ?>
            <input type="hidden" name="txt-hotelOrderID[]" value="<?= $rowHotelOrder['orderID']; ?> " />
            <?php
        }
      }

    ?>    
    <hr>
    <h5 class="text-center text-teal alert alert-success"> Packages </h5>
    <br>
    <h6 class="text-center text-teal alert alert-warning"> Hotel Packages</h6>
        <div class="row">
          <?php
          if(@$qry_displayPackagesHotel){
            ?>
                <table id="list-of-packages-hotel" class="table table-striped table-responsive table-bordered" style="width:100%">
                <thead>
                  <th>Order No.</th>
                  <th>Package Name</th>
                  <th>Package Type</th>
                  <th>Meal Type</th>
                  <th>Occupacy</th>
                  <th>Room Type</th>
                  <th>Total Price</th>
                  <th>Action</th>
                </thead>
                <tbody>
            <?php
            while($row_displayPackageHotel = mysqli_fetch_array($qry_displayPackagesHotel)){
              ?>
              <tr>
                <td><?= "#PH".$row_displayPackageHotel["orderID"]; ?></td>
                <td><?= $row_displayPackageHotel["packageTitle"]; ?></td>
                <td><?= $row_displayPackageHotel["package_type"]; ?></td>
                <td><?= $row_displayPackageHotel["meal_type"]; ?></td>
                <td><?= $row_displayPackageHotel["occupacy"]; ?></td>
                <td><?= $row_displayPackageHotel["room_type"]; ?></td>
                <td><?= $row_displayPackageHotel["total_price"]; ?></td>
                <td>
                  <a href="shopping-cart.php?delPackage=<?= $row_displayPackageHotel["orderID"];  ?>"> <span data-balloon="Remove" data-balloon-pos="up"><img src="<?= $remove; ?>" class="icon" /></span></a>
                </td>
              </tr>
              <?php
            }
            ?>  <tr>
              <td><button class="btn-info" name="btn-checkout-packageHotel">Proceed to checkout</button></td>
            </tr>
                </tbody>
                </table>
                <input type="hidden" id="fieldPackageHotel" name="fieldPackageHotel" />
            <?php
          }

          ?>
      </div>
      <?php            
        if(@$qryPackageHotelSum){
          while($rowPackageHotelSum = mysqli_fetch_array($qryPackageHotelSum)){
              // echo " <p class='text-danger'>" . $rowPackageHotelSum['FinalPackageHotelTotal']."</p>";
              ?>
              <input type="hidden" name="txt-total-packageHotel" value="<?= $rowPackageHotelSum['FinalPackageHotelTotal']; ?>"/>
              <?php
          }
          
        }
        if(@$qryPackageOrder){
          while($rowPackageHotelOrder = mysqli_fetch_array($qryPackageOrder)){
            ?>
            <input type="hidden" name="txt-packagehotelOrderID[]" value="<?= $rowPackageHotelOrder['orderID']; ?> " />
            <?php
        }
      }
      ?>      
      <br><br>
      <h6 class="text-center text-teal alert alert-warning"> Car Packages</h6>

    <div class="row">
        <?php
        if(@$qry_displayPackagesCar){
          ?>
              <table id="list-of-packages-car" class="table table-striped table-responsive table-bordered" style="width:100%">
              <thead>
                <th>Order No.</th>
                <th>Package Name</th>
                <th>Package Type</th>
                <th>Total Price</th>
                <th>Action</th>
              </thead>
              <tbody>
          <?php
          while($row_displayPackageCar = mysqli_fetch_array($qry_displayPackagesCar)){
            ?>
            <tr>
              <td><?= "#PC".$row_displayPackageCar["orderID"]; ?></td>
              <td><?= $row_displayPackageCar["packageTitle"]; ?></td>
              <td><?= $row_displayPackageCar["package_type"]; ?></td>
              <td><?= $row_displayPackageCar["total_price"]; ?></td>
              <td>
                <a href="shopping-cart.php?delPackage=<?= $row_displayPackageCar["orderID"];  ?>"> <span data-balloon="Remove" data-balloon-pos="up"><img src="<?= $remove; ?>" class="icon" /></span></a>
              </td>
            </tr>
            <?php
          }
          ?>  
              </tbody>
              </table>
                <input type="hidden" id="fieldPackageCarRental" name="fieldPackageCarRental" />
          <?php
        }
      ?>
    </div>
    <?php
        if(@$qryPackageCarSum){
          while($rowPackageCarSum = mysqli_fetch_array($qryPackageCarSum)){
              // echo " <p class='text-danger'>" . $rowPackageCarSum['FinalPackageCarTotal'] . "</p>";
              ?>
              <input type="hidden" name="txt-total-packageCar" value="<?= $rowPackageCarSum['FinalPackageCarTotal']; ?>"/>
              <?php
          }
        }

      if(@$qryPackageOrderC){
          while($rowPackageCarOrder = mysqli_fetch_array($qryPackageOrderC)){
            ?>
            <input type="hidden" name="txt-packagecarOrderID[]" value="<?= $rowPackageCarOrder['orderID']; ?> " />
            <?php
        }

      }
    ?>
    <button name="btn-checkout-packageCar" class="btn-info">Proceed to checkout</button>
    <br>

    <h6 class="text-center text-teal alert alert-warning"> Travel Packages</h6>
    <div class="row">
        <?php
        if(@$qry_displayPackagesTravel){
          ?>
              <table id="list-of-packages-travel" class="table table-striped table-responsive table-bordered" style="width:100%">
              <thead>
                <th>Order No.</th>
                <th>Package Name</th>
                <th>Package Type</th>
                <th>Departure Date</th>
                <th>Return Date</th>
                <th>No of Adult(s)</th>
                <th>No of Teen(s)</th>
                <th>No of Child / Children</th>
                <th>No of Infant(s)</th>
                <th class="text-danger">Total PAX</th>
                <th>Total Price</th>
                <th>Action</th>
              </thead>
              <tbody>
          <?php
          while($row_displayPackageTravel = mysqli_fetch_array($qry_displayPackagesTravel)){
            ?>
            <tr>
              <td><?= "#PT".$row_displayPackageTravel["orderID"]; ?></td>
              <td><?= $row_displayPackageTravel["packageTitle"]; ?></td>
              <td><?= $row_displayPackageTravel["package_type"]; ?></td>
              <td><?= $row_displayPackageTravel["departure_date"]; ?></td>
              <td><?= $row_displayPackageTravel["return_date"]; ?></td>
              <td><?= $row_displayPackageTravel["pax_adult"]; ?></td>
              <td><?= $row_displayPackageTravel["pax_teen"]; ?></td>
              <td><?= $row_displayPackageTravel["pax_child"]; ?></td>
              <td><?= $row_displayPackageTravel["pax_infant"]; ?></td>
              <td><?= $row_displayPackageTravel["pax_adult"] + $row_displayPackageTravel["pax_teen"] + $row_displayPackageTravel["pax_child"] + $row_displayPackageTravel["pax_infant"];; ?></td>            
              <td><?= $row_displayPackageTravel["total_price"]; ?></td>

              <td>
                <a href="shopping-cart.php?delPackage=<?= $row_displayPackageTravel["orderID"];  ?>"> <span data-balloon="Remove" data-balloon-pos="up"><img src="<?= $remove; ?>" class="icon" /></span></a>
              </td>
            </tr>
            <?php
          }
          ?>  
              </tbody>
              </table>
              <input type="hidden" id="fieldPackageTravel" name="fieldPackageTravel" />
          <?php
        }
        ?>
    </div>
    <?php
      if(@$qryPackageTravelSum){
        while($rowPackageTravelSum = mysqli_fetch_array($qryPackageTravelSum)){
            // echo " <p class='text-danger'>" . $rowPackageTravelSum['FinalPackageTravelTotal'] . "</p>";
            ?>
            <input type="hidden" name="txt-total-packageTravel" value="<?= $rowPackageTravelSum['FinalPackageTravelTotal']; ?>"/>
            <?php
        }
      }
      if(@$qryPackageOrderT){
          while($rowPackageTravelOrder = mysqli_fetch_array($qryPackageOrderT)){
            ?>
            <input type="hidden" name="txt-packagetravelOrderID[]" value="<?= $rowPackageTravelOrder['orderID']; ?> " />
            <?php
        }

      }      
    ?>
    <button name="btn-checkout-packageTravel" class="btn-info">Proceed to checkout</button>
    <br>
  </form>
</div>
 <script>
    function rand() {
        var min = 1;
        var max = 9999999999;
        var num = Math.floor(Math.random() * (max - min + 1)) + min;
        var timeNow = new Date().getTime();
        document.getElementById('fieldCarRental').value = "#" + num ;
        document.getElementById('fieldHotel').value = "#" + num ;
        document.getElementById('fieldPackageHotel').value = "#" + num ;
        document.getElementById('fieldPackageCarRental').value = "#" + num ;
        document.getElementById('fieldPackageTravel').value = "#" + num ;
      }
      window.onload = rand;
</script>
<script>    
    $(document).ready(function() {
        $('#list-of-cars').DataTable({
             responsive: true
        });
        $('#list-of-hotels').DataTable({
             responsive: true
        });
        $('#list-of-packages-hotel').DataTable({
             responsive: true
        });
        $('#list-of-packages-car').DataTable({
             responsive: true
        });
        $('#list-of-packages-travel').DataTable({
             responsive: true
        });
    } );
</script>
<!-- Custom JS Shopping cart -->
<?php
  $custom_shoppingCart	= 'http://localhost:'.$_SERVER['SERVER_PORT'].'/OnlineTravelTours/Asset/js/pages/custom-shopping-cart.js';
?>
<script src="<?= $custom_shoppingCart; ?>"></script>
<?php require('../common/footer.php');?>
