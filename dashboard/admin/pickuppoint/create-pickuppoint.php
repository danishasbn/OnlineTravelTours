<?php require('../../../common/dashboard-common/header.php'); ?>
<?php require('../../../Action/action-create-pickuppoint.php'); ?>

<main class="col bg-faded py-3">
    <h3 class="text-left"> >> Create new <small> <em> Pickup Point </em></small> <<</h3> 
    <br>
    <div class='alert alert-success text-center alert-box' id="alertBox">
        A New Location was added to Paradise Chaser..!
        <br>
        Message: Success :)
    </div>
    <div class='alert alert-warning text-center alert-box' id="alertBoxError">
        This Value already exist..!
        <br>
        Message: Warning :(
    </div>
    <div class='alert alert-info text-center alert-box' id="alertBoxUpdate">
        Location has been sucessfully updated
        <br>
        Message: Success :D
    </div>
    <form method="post" action="<?=$_SERVER['PHP_SELF'];?>" autocomplete="off" id="formPickuppoint">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <label for="txt-pickuppoint">Pick up point</label>
                    <?php
                        if(@$query_check){
                            while($row_check = mysqli_fetch_array($query_check)){
                    ?>
                        <input type="text" class="form-control" id="txt-pickuppoint" name="txt-pickuppoint" data-validation-regexp="^([a-zA-Z ]+)$" data-validation="required custom length" data-validation-length="min2" maxlength ="200" value="<?= $row_check['pickup_place']; ?>">
                        <input type="hidden" name="curr_id" value="<?= $row_check['id'];?>" />
                        <input type="hidden" name="curr_val" value="<?= $row_check['pickup_place'];?>" />
                        <br>
                        <button class="btn-save" name="btn-update-pickuppoint"> <span><img src="<?= $save;?>" class="icon"/></span> Update</button>
                        <button class="btn-save" id="cancel-update"> <span><img src="<?= $logout;?>" class="icon"/></span> Cancel</button>
                        <br>
                    <?php                    
                            }
                        }else{
                            ?>
                            <input type="text" class="form-control" id="txt-pickuppoint" name="txt-pickuppoint" data-validation-regexp="^([a-zA-Z ]+)$" data-validation="required custom length" 
                            data-validation-length="min2" maxlength ="100"/>
                            <?php
                        }
                    ?>
                    <br>
                    <button class="btn-save" name="btn-add-pickuppoint" id="btn-add-pickuppoint"> <span><img src="<?= $plusWhite;?>" class="icon"/> </span> Add</button>
                </div>
                <div class="col-md-6">
                    <table id="pickuppointList" class="table table-striped table-bordered" style="width:100%">
                        <thead>                
                            <tr>
                                <th>Discount Percent</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                           <?php
                                if($query_fetch){
                                    while($rowFetch = mysqli_fetch_array($query_fetch)){
                                    ?>
                                    <tr>
                                        <td><?= $rowFetch['pickup_place'];?> </td>
                                         <td>
                                            <a href="create-pickuppoint.php?id=<?= $rowFetch['id'];?>&value=<?= $rowFetch['pickup_place']; ?>"> <span data-balloon="Edit" data-balloon-pos="up"><img src="<?= $edit; ?>" class="icon" /></span></a> |
                                            <a href="create-pickuppoint.php?del=<?= $rowFetch['id'];?>"> <span data-balloon="Remove" data-balloon-pos="up"><img src="<?= $remove; ?>" class="icon" /></span></a> 
                                        </td>
                                    </tr>
                                    <?php
                                    }
                                }
                           ?>
                        </tbody>       
                    </table>
                </div>
            </div>
        </div>
    </form>
    <script>    
    $(document).ready(function() {
        $('#pickuppointList').DataTable({
             responsive: true
        });
    } );
</script>
</main>
<?php require('../../../common/dashboard-common/footer.php'); ?>