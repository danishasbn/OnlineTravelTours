<?php
    $sql = "SELECT * FROM tbl_user WHERE role_type = 'Customer' AND status = '0'";
    $query = mysqli_query($dbc, $sql);
    if(isset($_GET['userid'])){
        $getUserId = $_GET['userid'];
        echo '
        <div class="alert alert-warning alert-box" role="alert" id="alert-box">
            Are you sure you want to unblock this customer?
            <br>
            <br>
            <form method="post">
                <button name="btn-block-yes" class="btn-success">Yes</button>
                <button name="btn-block-no" class="btn-danger">No</button>
            </form>
            </div>';

           if(isset($_POST['btn-block-yes'])){
            // Get User ID 
            $getUserID      = $_GET['userid'];
            $sql_update     = "UPDATE tbl_user 
                               SET status = '1' 
                               WHERE id = '$getUserID'";
            $query_update   = mysqli_query($dbc,$sql_update);
            if($query_update){
                echo "<script>
                        $('#alert-box').hide();
                      </script>";
               
                echo "<div class='alert alert-success text-center alert-box'>
                            This Customer has been unblocked ! 
                        </div>";            
                echo "<meta http-equiv='refresh' content='3;url=blocked-user.php'>";
            }
        }else if(isset($_POST['btn-block-no'])){
                echo "<script>
                        $('#alert-box').hide();
                    </script>";
                echo "<div class='alert alert-success text-center alert-box'>
                        Action RolledBack :)
                    </div>";
                echo "<meta http-equiv='refresh' content='3;url=blocked-user.php'>";
        }
    }

?>