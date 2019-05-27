<?php require('../../../common/dashboard-common/header.php'); ?>
<?php require('../../../Action/action-upload-pdf.php'); ?>
<main class="col bg-faded py-3">
    <h3 class="text-left"> >> Upload <small> <em> Booking Voucher </em></small> <<</h3> 
    <br>
    <form method="post" action="<?=$_SERVER['PHP_SELF'];?>" autocomplete="off" class="text-center" enctype="multipart/form-data">
        <?php
            if(isset($_GET['carRentalid'])){
                $getID = $_GET['carRentalid'];
                echo "<input type='hidden' name='getID' value='$getID' />";
            }
        ?>
        <button type="button" class="btn btn-save" data-toggle="modal" data-target="#exampleModal">
            Upload Voucher  <span><img src="<?= $upload;?>" class="icon" /></span>
        </button>

        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Upload Booking Voucher</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <input type="file" name="upload-pdf" />
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-save" name="btn-uploadPDF"> Upload <span><img src="<?= $upload;?>" class="icon" /></span> </button>
            </div>
            </div>
        </div>
        </div>

    </form> 
  
</main>
<?php require('../../../common/dashboard-common/footer.php'); ?>