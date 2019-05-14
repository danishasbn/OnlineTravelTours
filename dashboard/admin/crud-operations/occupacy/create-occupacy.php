<?php require('../../../../common/dashboard-common/header.php'); ?>
<?php require('../../../../Action/action-crud-occupacy.php'); ?>

<main class="col bg-faded py-3">
    <h3 class="text-left"> >> Create new <small> <em> Occupacy </em></small> <<</h3>

    <!-- Add/Update occupacy -->
    <form method = "post" action="<?=$_SERVER['PHP_SELF']."?".$_SERVER['QUERY_STRING'];?>">
        <div class="form-group">
            <label for="txtoccupacy">Occupacy</label>
            <input type="text" name="txtoccupacy" id="txtoccupacy" value="<?= @$cOccupacy; ?>" required>
        </div>
        <div class="form-group">
            <label for="txtoccupacyval">Occupacy Value</label>
            <input type="text" name="txtoccupacyval" id="txtoccupacyval" value="<?= @$cOccupacyValue; ?>" required>
        </div>
        <span class="msg-error"><?php echo @$cOccupacyValErrMsg ?></span><br />
        <button type="submit" id="btnsubrt" class="btn btn-primary"><?= @$state; ?> Occupacy</button>
    </form>

    <h5>Occupacy list</h5>
    <!--Occupacy list-->
    <table class="table">
        <thead>
        <tr>
            <th>id</th>
            <th>Occupacy</th>
            <th>Occupacy Value</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach($occupacy->selectAllOccupacy() as $occupacy) {
            ?>
            <tr>
                <td><?php echo $occupacy['id']; ?></td>
                <td><?php echo $occupacy['occupacy']; ?></td>
                <td><?php echo $occupacy['occupacy_value']; ?></td>
                <td>
                    <a href="<?=$_SERVER['PHP_SELF']."?action=update&id=".$occupacy['id']; ?>">
                        Update
                    </a> |
                    <a href="<?=$_SERVER['PHP_SELF']."?action=delete&id=".$occupacy['id']; ?>">
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