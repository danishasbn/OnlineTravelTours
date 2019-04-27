<?php require('../../../common/dashboard-common/header.php'); ?>
<?php require('../../../Action/action-list-of-customers.php');?>
<main class="col bg-faded py-3">
    <h2>List of Customers</h2>
    <br>
    <h5>Customer Details</h5>
    <br>
    
    <div class="container">
        <div class="row">
            <form method="post" action= "<?= $_SERVER['PHP_SELF']; ?>" autocomplete="off">
                <table id="list-of-customer" class="table table-striped table-responsive table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Email</th>
                                <th>Address</th>
                                <th>Gender</th>
                                <th>Country</th>
                                <th>Phone Number</th>
                                <th>Status</th>
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
                                $status     = $row['status'];            
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
                                    <?php
                                    if($status == '1'){
                                        echo "Active Customer";
                                    }else{
                                        echo "Inactive Customer";
                                    }
                                    ?>
                                </td>
                                <td>
                                    <?php
                                        if($status == '0'){
                                    ?>
                                    <button href="list-user.php?userid=<?= $id; ?>" type="button" class="btn-danger text-center" name="btn-block" id="btn-block" disabled>Blocked</button>
                                    <?php        
                                        }else{
                                            ?>
                                    <a href="list-user.php?userid=<?= $id; ?>" class="btn-block text-center" name="btn-block" id="btn-block">Block </a>
                                    <?php
                                        }
                                    ?>
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
        $('#list-of-customer').DataTable();
    } );
</script>

<?php require('../../../common/dashboard-common/footer.php'); ?>
