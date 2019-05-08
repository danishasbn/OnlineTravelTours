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
              <th>Total Price</th>
              <th>No. of days</th>
              <th>Action</th>
            </thead>
            <tbody>
        <?php
        while($row_displayCar = mysqli_fetch_array($qry_displayCar)){
          ?>
          <tr>
            <td><?= "#019397".$row_displayCar["orderID"]."50896"; ?></td>
            <td><?= $row_displayCar["car_title"]; ?></td>
            <td><?= $row_displayCar["total_price"]; ?></td>
            <td><?= $row_displayCar["no_of_days"]; ?></td>
            <td>
              <a href="#"> <span data-balloon="Remove" data-balloon-pos="up"><img src="<?= $remove; ?>" class="icon" /></span></a> </td>
          
          </tr>
          <?php
        }
        ?>  
            </tbody>
            </table>
        <?php
      }
      ?>
  </div>
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
            <td><?= "#019397".$row_displayHotel["orderID"]."50896"; ?></td>
            <td><?= $row_displayHotel["hotelName"]; ?></td>
            <td><?= $row_displayHotel["meal_type"]; ?></td>
            <td><?= $row_displayHotel["occupacy"]; ?></td>
            <td><?= $row_displayHotel["room_type"]; ?></td>
            <td><?= $row_displayHotel["total_price"]; ?></td>            
            <td>
              <a href="#"> <span data-balloon="Remove" data-balloon-pos="up"><img src="<?= $remove; ?>" class="icon" /></span></a>
            </td>
          </tr>
          <?php
        }
        ?>  
            </tbody>
            </table>
        <?php
      }
      ?>
  </div>
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
            <td><?= "#019397".$row_displayPackageHotel["orderID"]."50896"; ?></td>
            <td><?= $row_displayPackageHotel["packageTitle"]; ?></td>
            <td><?= $row_displayPackageHotel["package_type"]; ?></td>
            <td><?= $row_displayPackageHotel["meal_type"]; ?></td>
            <td><?= $row_displayPackageHotel["occupacy"]; ?></td>
            <td><?= $row_displayPackageHotel["room_type"]; ?></td>
            <td><?= $row_displayPackageHotel["total_price"]; ?></td>
          
          
            <td>
              <a href="#"> <span data-balloon="Remove" data-balloon-pos="up"><img src="<?= $remove; ?>" class="icon" /></span></a>
            </td>
          </tr>
          <?php
        }
        ?>  
            </tbody>
            </table>
        <?php
      }
      ?>
  </div>
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
            <td><?= "#019397".$row_displayPackageCar["orderID"]."50896"; ?></td>
            <td><?= $row_displayPackageCar["packageTitle"]; ?></td>
            <td><?= $row_displayPackageCar["package_type"]; ?></td>
            <td><?= $row_displayPackageCar["total_price"]; ?></td>
            
            <td>
              <a href="#"> <span data-balloon="Remove" data-balloon-pos="up"><img src="<?= $remove; ?>" class="icon" /></span></a>
            </td>
          </tr>
          <?php
        }
        ?>  
            </tbody>
            </table>
        <?php
      }
      ?>
  </div>
  <br>
  <button class="btn-danger">Proceed to checkout</button>
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
    } );
</script>

<?php require('../common/footer.php');?>
