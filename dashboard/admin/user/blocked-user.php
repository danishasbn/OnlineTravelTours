<?php require('../../../common/dashboard-common/header.php'); ?>
<?php require('../../../Action/action-blocked-customers.php');?>
<main class="col bg-faded py-3">
    <h2>List of Customers</h2>
    <br>
    <h5>Customer Details</h5>
    <br>
    
    <div class="container">
        <div class="row">
            <form method="post" action= "<?= $_SERVER['PHP_SELF']; ?>" autocomplete="off">
                <table id="list-of-blocked-customer" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Email</th>
                                <th>Address</th>
                                <th>Gender</th>
                                <th>Country</th>
                                <th>Phone Number</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php 
                            while($row = mysqli_fetch_array($query)){
                                $id         = $row['id'];
                                $fname      = $row['firstname'];
                                $lname      = $row['lastname'];
                                $email      = $row['email'];
                                $address    = $row['address'];
                                $gender     = $row['gender']; 
                                $phone      = $row['phone'];
                        ?>
                            <tr>
                                <td><?= $fname; ?></td>
                                <td><?= $lname; ?></td>
                                <td><?= $email;?></td>
                                <td><?= $address;?></td>
                                <td><?= $gender?></td>
                                <td>Mauritius</td>
                                <td><?=$phone;?></td>
                             
                                <td>
                                    <a href="blocked-user.php?userid=<?= $id; ?>" class="btn-block text-center" name="btn-unblock" id="btn-block">Unblock </a>                
                                </td>
                            </tr>
                            <?php
                                }
                            ?>
                        </tbody>
                    </table>
            </form>
        </div>
    </div>
</main>
<script>    
    $(document).ready(function() {
        $('#list-of-blocked-customer').DataTable();
    } );
</script>

<?php require('../../../common/dashboard-common/footer.php'); ?>
