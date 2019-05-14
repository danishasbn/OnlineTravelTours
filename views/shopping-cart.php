<?php require('../common/header.php');?>
<?php require('../Action/action-shopping-cart.php');?>

<div class="container">
  <div class="row justify-content-center" >
    <h1 class="text-center trending">Shopping Cart <img src="<?= $shoppingCart; ?>" class="img-fluid"/> </h1>
  </div>
  <hr>
  <span>****************************** Car Rental **************************</span>
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
          if($qryCarSum){
            while($rowCarSum = mysqli_fetch_array($qryCarSum)){
                echo " <p class='text-danger'>" . $rowCarSum['FinalCarTotal'] . "</p>";
            }
        }

        ?>  
            </tbody>
            </table>
        <?php
      }
      
      ?>
  </div>
  <button class="btn-danger">Proceed to checkout</button>

  
  <hr>
  <span>****************************** Hotel **************************</span>
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
        ?>  
            </tbody>
            </table>
        <?php
       
      }
      
        if($qryHotelSum){
          while($rowHotelSum = mysqli_fetch_array($qryHotelSum)){
              echo " <p class='text-danger'>" . $rowHotelSum['FinalHotelTotal'] . "</p>";
          }
        }
      ?>
   </div>
   <button class="btn-danger">Proceed to checkout</button>
  <hr>
  <span>****************************** Packages **************************</span>
  <br>
  <span>****************************** Hotel **************************</span>
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
                <a href="shopping-cart.php?delPH=<?= $row_displayPackageHotel["orderID"];  ?>"> <span data-balloon="Remove" data-balloon-pos="up"><img src="<?= $remove; ?>" class="icon" /></span></a>
              </td>
            </tr>
            <?php
          }
          ?>  
              </tbody>
              </table>
          <?php
        }
        
            if($qryPackageHotelSum){
              while($rowPackageHotelSum = mysqli_fetch_array($qryPackageHotelSum)){
                  echo " <p class='text-danger'>" . $rowPackageHotelSum['FinalPackageHotelTotal'] . "</p>";
              }
            }
        ?>
    </div>
    <button class="btn-danger">Proceed to checkout</button>
    <br><br>
    <span>****************************** Car **************************</span>

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
              <a href="shopping-cart.php?delPC=<?= $row_displayPackageCar["orderID"];  ?>"> <span data-balloon="Remove" data-balloon-pos="up"><img src="<?= $remove; ?>" class="icon" /></span></a>
            </td>
          </tr>
          <?php
        }
        ?>  
            </tbody>
            </table>
        <?php
      }

      if($qryPackageCarSum){
            while($rowPackageCarSum = mysqli_fetch_array($qryPackageCarSum)){
                echo " <p class='text-danger'>" . $rowPackageCarSum['FinalPackageCarTotal'] . "</p>";
            }
          }
      ?>
   </div>
   <button class="btn-danger">Proceed to checkout</button>
   <br>

  <span>****************************** Travel **************************</span>
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
              <a href="shopping-cart.php?delPT=<?= $row_displayPackageTravel["orderID"];  ?>"> <span data-balloon="Remove" data-balloon-pos="up"><img src="<?= $remove; ?>" class="icon" /></span></a>
            </td>
          </tr>
          <?php
        }
        ?>  
            </tbody>
            </table>
        <?php
      }
          if($qryPackageTravelSum){
            while($rowPackageTravelSum = mysqli_fetch_array($qryPackageTravelSum)){
                echo " <p class='text-danger'>" . $rowPackageTravelSum['FinalPackageTravelTotal'] . "</p>";
            }
          }
      ?>
  </div>
  <button class="btn-danger">Proceed to checkout</button>
  <br>
  </form>
</div>

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

<?php require('../common/footer.php');?>
