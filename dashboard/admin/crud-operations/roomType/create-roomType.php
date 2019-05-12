<?php require('../../../../common/dashboard-common/header.php'); ?>
<?php require('../../../../Action/action-crud-roomType.php'); ?>

<main class="col bg-faded py-3">
    <h3 class="text-left"> >> Create new <small> <em> Room Type </em></small> <<</h3>

    <!-- Add/Update room type -->
    <form method = "post" action="<?=$_SERVER['PHP_SELF']."?".$_SERVER['QUERY_STRING'];?>">
        <div class="form-group">
            <label for="txtrtype">Room Type</label>
            <input type="text" name="txtrtype" id="txtrtype" value="<?= @$cRt; ?>" required>
        </div>
        <div class="form-group">
            <label for="txtprice">Price</label>
            <input type="text" name="txtprice" id="txtprice" value="<?= @$cprice; ?>" required>
        </div>
        <span class="msg-error"><?php echo @$priceErrMsg ?></span><br />
        <button type="submit" id="btnsubrt" class="btn btn-primary"><?= @$state; ?> room type</button>
    </form>

    <h5>Room type list</h5>
    <!--Room type list-->
    <table class="table">
        <thead>
        <tr>
            <th>id</th>
            <th>Room Type</th>
            <th>Price</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach($rt->selectAllRoomtype() as $rt) {
            ?>
            <tr>
                <td><?php echo $rt['id']; ?></td>
                <td><?php echo $rt['room_type']; ?></td>
                <td><?php echo $rt['price']; ?></td>
                <td>
                    <a href="<?=$_SERVER['PHP_SELF']."?action=update&id=".$rt['id']; ?>">
                        Update
                    </a> |
                    <a href="<?=$_SERVER['PHP_SELF']."?action=delete&id=".$rt['id']; ?>">
                        Delete
                    </a>
                </td>
            </tr>
            <?php
        }
        ?>
        </tbody>
    </table>
</main>
<?php require('../../../../common/dashboard-common/footer.php'); ?>