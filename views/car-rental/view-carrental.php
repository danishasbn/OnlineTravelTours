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
  <div class="row border">
     <div class="col-md-4">
        <?php
            if($query_fetch){
                while($row_fetch = mysqli_fetch_array($query_fetch)){
                    ?>
                        <div class="panel panel-teal text-white bg-teal-back">
                            <h1 class="text-left"> <?= $row_fetch['car_title']; ?> </h1>
                        </div>
                        <div class="panel panel-teal">
                            <input type="radio"/> 3 Days
                            <br>
                            <input type="radio"/> 3 Days
                            <br>
                            <input type="radio"/> 3 Days
                            <br>
                            <input type="radio"/> 3 Days
                            <br>
                            <button class="btn-book btn-lg">Book Now </button>
                        </div>
                        
     </div>
     <div class="col-md-4">
                        <img src="<?= "../../dashboard/uploadImages/".$row_fetch['imagePath']?>" class="img-fluid" />
                        <div>
                            Purchase Include
                            <br>
                            <?= $row_fetch['conditionApply']; ?>
                        </div>
                        <div>
                            Package Details
                            <br>
                            <?= $row_fetch['packageDetails']; ?>
                        </div>

                    <?php
                }
            }
        ?>
     </div>
  </div>
</div>
<?php require('../../common/footer.php');?>
