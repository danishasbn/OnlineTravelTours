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
  <hr>
  <span>****************************** Packages **************************</span>
  <br>
  <button class="btn-danger">Proceed to checkout</button>
  </form>
</div>

<script>    
    $(document).ready(function() {
        $('#shopping-cart-list').DataTable({
             responsive: true
        });
    } );
</script>

<?php require('../common/footer.php');?>
