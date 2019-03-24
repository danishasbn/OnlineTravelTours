<?php
    $sql = "SELECT * 
            FROM tbl_user 
            WHERE role_type = 'Customer'";
    $query = mysqli_query($dbc, $sql);

    if(isset($_GET['userid'])){
        echo '
            <div class="alert alert-warning alert-box" role="alert" id="alert-box">
                Are you sure you want to delete this customer from Paradise Chaser?
                <br>
                <br>
                <form method="post">
                    <button name="btn-block-yes" class="btn-success">Yes</button>
                    <button name="btn-block-no" class="btn-danger">No</button>
                </form>
             </div>
            ';

        if(isset($_POST['btn-block-yes'])){
            // Get User ID 
            $getUserID      = $_GET['userid'];
            $sql_update     = "UPDATE tbl_user 
                               SET status = '0' 
                               WHERE id = '$getUserID'";
            $query_update   = mysqli_query($dbc,$sql_update);
            if($query_update){
                echo "<script>
                        $('#alert-box').hide();
                      </script>";
               
                echo "<div class='alert alert-success text-center alert-box'>
                            This Customer has been blocked ! 
                        </div>";            
                echo "<meta http-equiv='refresh' content='3;url=list-user.php'>";
            }
        }else if(isset($_POST['btn-block-no'])){
                echo "<script>
                        $('#alert-box').hide();
                    </script>";
                echo "<div class='alert alert-success text-center alert-box'>
                        Action RolledBack :)
                    </div>";
                echo "<meta http-equiv='refresh' content='3;url=list-user.php'>";
        }
    }
?>