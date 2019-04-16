<?php require('../../../common/dashboard-common/header.php'); ?>
<?php require('../../../Action/action-create-discount.php'); ?>

<main class="col bg-faded py-3">
    <h3 class="text-left"> >> Create new <small> <em> Discount </em></small> <<</h3> 
    <br>
    <div class='alert alert-success text-center alert-box' id="alertBox">
        A New Discount was added to Paradise Chaser..!
        <br>
        Message: Success :)
    </div>
    <div class='alert alert-warning text-center alert-box' id="alertBoxError">
        This Value already exist..!
        <br>
        Message: Warning :(
    </div>
    <div class='alert alert-info text-center alert-box' id="alertBoxUpdate">
        Discount Percent has been sucessfully updated
        <br>
        Message: Success :D
    </div>
    <form method="post" action="<?=$_SERVER['PHP_SELF'];?>" autocomplete="off" id="formDiscount">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <label for="txt-discountPercent">Discount Percent %</label>
                    <?php
                        if(@$query_check){
                            while($row_check = mysqli_fetch_array($query_check)){
                    ?>
                        <input type="text" class="form-control input-width-2" placeholder = "%" id="txt-discountPercent" name="txt-discountPercent" data-validation="required custom number length" data-validation-length="min2" maxlength ="3" value="<?= $row_check['discount_percent']; ?>">
                        <input type="hidden" name="curr_id" value="<?= $row_check['id'];?>" />
                        <input type="hidden" name="curr_val" value="<?= $row_check['discount_percent'];?>" />
                        <br>
                        <button class="btn-save" name="btn-update-discount"> <span><img src="<?= $save;?>" class="icon"/></span> Update</button>
                        <button class="btn-save" id="cancel-update"> <span><img src="<?= $logout;?>" class="icon"/></span> Cancel</button>
                        <br>
                    <?php                    
                            }
                        }else{
                            ?>
                            <input type="text" class="form-control input-width-2" placeholder = "%" id="txt-discountPercent" name="txt-discountPercent" data-validation="required custom number length" 
                            data-validation-length="min2" maxlength ="3"/>
                            <?php
                        }
                    ?>
                    <br>
                    <button class="btn-save" name="btn-add-discount" id="btn-add-discount"> <span><img src="<?= $plusWhite;?>" class="icon"/> </span> Add</button>
                </div>
                <div class="col-md-6">
                    <table id="discountList" class="table table-striped table-bordered" style="width:100%">
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
                                        <td><?= $rowFetch['discount_percent'];?> %</td>
                                         <td>
                                            <a href="create-discount.php?id=<?= $rowFetch['id'];?>&value=<?= $rowFetch['discount_percent']; ?>"> <span data-balloon="Edit" data-balloon-pos="up"><img src="<?= $edit; ?>" class="icon" /></span></a> |
                                            <a href="create-discount.php?del=<?= $rowFetch['id'];?>"> <span data-balloon="Remove" data-balloon-pos="up"><img src="<?= $remove; ?>" class="icon" /></span></a> 
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
        $('#discountList').DataTable({
             responsive: true
        });
    } );
</script>
</main>
<?php require('../../../common/dashboard-common/footer.php'); ?>