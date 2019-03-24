<?php require('../../../common/dashboard-common/header.php'); ?>
<main class="col bg-faded py-3">
   <h2 class="text-center">Create New Car Rental</h2>

    <form method="post" action="<?=$_SERVER['PHP_SELF'];?>" autocomplete="off">
        <div class="container">
            <div class="row">
                
                <div class="col-md-6">
                    <label for="">Car Rental Title</label>
                    <input type="text" class="form-control">

                    <label for="">Price</label>
                    <input type="text" class="form-control">

                    <label for="">Type</label>
                    <input type="text" class="form-control">

                    <label for="">Make</label>
                    <input type="text" class="form-control">
                </div>
                
                <div class="col-md-6">
                    <label for="">Upload Image</label>
                    <input type="text" class="form-control">

                    <label for=""></label>
                    <input type="text" class="form-control">

                    <label for=""></label>
                    <input type="text" class="form-control">

                    <label for=""></label>
                    <input type="text" class="form-control">            
                
                </div>               
            </div>

        </div>
    </form>

</main>


<?php require('../../../common/dashboard-common/footer.php'); ?>
