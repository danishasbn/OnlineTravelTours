<?php require('../../common/header.php');?>
<?php require('../../Action/action-display-package.php');?>

<div class="container">
    <div class="row justify-content-center" >
      <h1 class="text-center trending"> Hotel <img src="<?= $border; ?>" class="img-border"/></h1>
    </div>
  </div>
</div>

<div class="container">
  <div class="row border">
     <div class="col-md-4">
        <?php
            if($query){
                while($row_fetch = mysqli_fetch_array($query)){
                    ?>
                        <div class="panel panel-teal text-white bg-teal-back">
                            <h1 class="text-left"> <?= $row_fetch['packageTitle']; ?> </h1>
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
                        <?php
                            if($query_gallery){
                                ?>


                                <?php
                                while($row_image = mysqli_fetch_array($query_gallery)){
                                    ?>
                                    <div class="col-md-4" style="border:1px solid red;"> 
                                        <img src="<?= "../../dashboard/uploadImages/".$row_image['imagePath']?>" class="img-fluid" />
                                        </div>
                                    <?php
                                }
                                ?>
                                <?php
                            }
                        ?>
                        <div>
                            Purchase Include
                            <br>
                            <?= $row_fetch['purchaseInclude']; ?>
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
