<?php require('../../../common/dashboard-common/header.php'); ?>
<?php require('../../../Action/action-create-crc.php'); ?>

<main class="col bg-faded py-3">
    <h3 class="text-left"> >> Create new <small> <em> Car Rental Company </em></small> <<</h3> 
    <br>
    <div class='alert alert-success text-center alert-box' id="alertBox">
        A New Car Rental Company was added to Paradise Chaser..!
        <br>
        Message: Success :)
    </div>
    <div class='alert alert-warning text-center alert-box' id="alertBoxError">
        Company Name already exist..!
        <br>
        Message: Warning :(
    </div>
    <div class='alert alert-info text-center alert-box' id="alertBoxUpdate">
        Company has been sucessfully updated
        <br>
        Message: Success :D
    </div>
    <form method="post" action="<?=$_SERVER['PHP_SELF'];?>" autocomplete="off" id="formCRC">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 border">
                    <label for="txt-crcName">Car Rental Company</label>
                    <?php
                        if(@$query_check){
                            while($row_check = mysqli_fetch_array($query_check)){
                    ?>
                        <input type="text" class="form-control" id="txt-crcName" name="txt-crcName" data-validation="required custom length" data-validation="length required custom" data-validation-regexp="^([a-zA-Z ]+)$" data-validation-length="min3" maxlength ="200" value="<?= $row_check['company_name'];?>">
                        <br>
                        <label for="txt-crcDescription">Car Rental Company Description(s)</label>
                        <textarea class="form-control" id="txt-crcDescription" name="txt-crcDescription" data-validation="required" rows="10"><?= $row_check['description']; ?></textarea>
                        
                        <input type="hidden" name="curr_id" value="<?= $row_check['id'];?>" />
                        <input type="hidden" name="curr_val" value="<?= $row_check['company_name'];?>" />
                        <br>
                        <button class="btn-save" name="btn-update-crc"> <span><img src="<?= $save;?>" class="icon"/></span> Update</button>
                        <button class="btn-save" id="cancel-update"> <span><img src="<?= $logout;?>" class="icon"/></span> Cancel</button>
                        <br>
                    <?php                    
                            }
                        }else{
                            ?>
                                <input type="text" class="form-control" id="txt-crcName" name="txt-crcName" data-validation="required custom length" data-validation="length required custom" data-validation-regexp="^([a-zA-Z ]+)$" data-validation-length="min3" maxlength ="200">
                                <br>
                                <textarea class="form-control" id="txt-crcDescription" name="txt-crcDescription" data-validation="required" rows="10"></textarea>
                            <?php
                        }
                    ?>
                    <br>
                    <button class="btn-save" name="btn-add-crc" id="btn-add-crc"> <span><img src="<?= $plusWhite;?>" class="icon"/> </span> Add</button>
                </div>
                 <div class="col-md-6 border">
                    <table id="crcList" class="table table-striped table-bordered" style="width:100%">
                        <thead>                
                            <tr>
                                <th>Company Name</th>
                                <th>Description</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                if($query_fetch){
                                    while($rowFetch = mysqli_fetch_array($query_fetch)){
                                    ?>
                                    <tr>
                                        <td><?= $rowFetch['company_name'];?></td>
                                        <td><?= $rowFetch['description'];?></td>
                                            <td>
                                            <a href="create-crc.php?id=<?= $rowFetch['id'];?>&value=<?= $rowFetch['company_name']; ?>"> <span data-balloon="Edit" data-balloon-pos="up"><img src="<?= $edit; ?>" class="icon" /></span></a> |
                                            <a href="create-crc.php?del=<?= $rowFetch['id'];?>"> <span data-balloon="Remove" data-balloon-pos="up"><img src="<?= $remove; ?>" class="icon" /></span></a> 
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
        $('#crcList').DataTable({
             responsive: true
        });
    } );
</script>
</main>
<?php require('../../../common/dashboard-common/footer.php'); ?>