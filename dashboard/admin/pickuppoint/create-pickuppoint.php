<?php require('../../../common/dashboard-common/header.php'); ?>
<?php require('../../../Action/action-create-pickuppoint.php'); ?>

<main class="col bg-faded py-3">
    <h3 class="text-left"> >> Create new <small> <em> Pick up point </em></small> <<</h3> 
    <br>
    <div class='alert alert-success text-center alert-box' id="alertBox">
        A New Hotel was added to Paradise Chaser..!
        <br>
        Message: Success :)
    </div>
    <form method="post" action="<?=$_SERVER['PHP_SELF'];?>" autocomplete="off" id="formDiscount">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 border">
                    <label for="txt-hotelName">Pick up point</label>
                    <input type="text" class="form-control input-width-2" id="txt-hotelName" name="txt-hotelName" data-validation="required custom number length" data-validation-length="min2" maxlength ="3">
                    <a href="" class="decoration-none" name="btn-add-discount"><span class="text-teal font-weight-bold"><img src="<?= $plus;?>"/> Add </span></a>
                </div>
            </div>
        </div>
    </form>
</main>
<?php require('../../../common/dashboard-common/footer.php'); ?>