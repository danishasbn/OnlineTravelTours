<?php require('../../../../common/dashboard-common/header.php'); ?>
<?php require('../../../../Action/action-crud-gallery.php'); ?>

<main class="col bg-faded py-3">
    <h3 class="text-left"> >> Create new <small> <em> Image Gallery </em></small> <<</h3>
    
    <!--Upload Gallery Img-->
    <form method="post" action="<?=$_SERVER['PHP_SELF']?>" enctype="multipart/form-data">
        Select image:
        <input type="file" name="fgalimg" id="fgalimg">
        <input type="submit" value="Upload" class="btn btn-primary" name="btnUpload" id="btnUpload">
    </form>

    <table class="table">
        <thead>
            <tr>
                <th>id</th>
                <th>Image</th>
            </tr>
        </thead>
        <tbody>
        <?php
            foreach($gallery->allImg() as $photo) {
                ?>
                <tr>
                    <td><?php echo $photo['id']; ?></td>
                    <td><img src="<?='/OnlineTravelTours/dashboard/uploadImages/'.$photo['imagePath'];?>"  height="100" width="100" /></td>
                    <td>
                        <a href="<?=$_SERVER['PHP_SELF']."?action=delete&id=".$photo['id']; ?>">
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