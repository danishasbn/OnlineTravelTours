<?php require('../../../../common/dashboard-common/header.php'); ?>
<?php require('../../../../Action/action-crud-mealType.php'); ?>

<main class="col bg-faded py-3">
    <h3 class="text-left"> >> Create new <small> <em> Meal Type </em></small> <<</h3>

    <!-- Add/Update meal type -->
    <form method = "post" action="<?=$_SERVER['PHP_SELF']."?".$_SERVER['QUERY_STRING'];?>">
        <div class="form-group">
            <label for="txtmt">Meal Type</label>
            <input type="text" name="txtmt" id="txtmt" value="<?= @$cMt; ?>" required>
        </div>
        <div class="form-group">
            <label for="txtprice">Price</label>
            <input type="text" name="txtprice" id="txtprice" value="<?= @$cprice; ?>" required>
        </div>
        <span class="msg-error"><?php echo @$priceErrMsg ?></span><br />
        <button type="submit" id="btnsubmt" class="btn btn-primary"><?= @$state; ?> meal type</button>
    </form>

    <h5>Meal type list</h5>
    <!--Room type list-->
    <table class="table">
        <thead>
        <tr>
            <th>id</th>
            <th>Meal Type</th>
            <th>Price</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach($mt->selectAllMealtype() as $mt) {
            ?>
            <tr>
                <td><?php echo $mt['id']; ?></td>
                <td><?php echo $mt['meal_type']; ?></td>
                <td><?php echo $mt['price']; ?></td>
                <td>
                    <a href="<?=$_SERVER['PHP_SELF']."?action=update&id=".$mt['id']; ?>">
                        Update
                    </a> |
                    <a href="<?=$_SERVER['PHP_SELF']."?action=delete&id=".$mt['id']; ?>">
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