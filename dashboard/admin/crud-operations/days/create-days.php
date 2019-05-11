<?php require('../../../../common/dashboard-common/header.php'); ?>
<?php require('../../../../Action/action-crud-days.php'); ?>
<main class="col bg-faded py-3">
    <h3 class="text-left"> >> Create new <small> <em> Day </em></small> <<</h3>

    <h5>Days List</h5>
    <!--List of days-->
    <table id="tblday" class="table">
        <thead>
        <tr>
            <th>id</th>
            <th>day number</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
            <?php
                foreach($day->selectAllDays() as $days) {
                    ?>
                    <tr>
                        <td><?php echo $days['id']; ?></td>
                        <td><?php echo $days['days']; ?></td>
                        <td>
                            <a href="<?=$_SERVER['PHP_SELF']."?action=update&id=".$days['id']; ?>">
                                Update
                            </a> |
                            <a href="<?=$_SERVER['PHP_SELF']."?action=delete&id=".$days['id']; ?>">
                                Delete
                            </a>
                        </td>
                    </tr>
                    <?php
                }
            ?>
        </tbody>
    </table>

    <!--Form to add days value-->
    <form method="post" action="<?=$_SERVER['PHP_SELF']."?".$_SERVER['QUERY_STRING'];?>" autocomplete="off" if="frmdays">
        <div class="form-group">
            <label for="txtdays">Days</label>
            <input type="text" name="txtdays" id="txtdays" value="<?= @$cDay; ?>" required>
        </div>
        <span class="msg-error"><?php echo @$dayErrMsg ?></span><br />
        <button type="submit" id="btnsubday"" class="btn btn-primary"><?= @$state; ?> days</button>
    </form>
</main>
<?php require('../../../../common/dashboard-common/footer.php'); ?>