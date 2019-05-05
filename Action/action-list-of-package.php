<?php
    // Fetch Package
    $sql_package      = "SELECT *, p.id as packageID
                       FROM  tbl_package p, tbl_discount d, tbl_package_type pt
                       WHERE p.discount_id = d.id
                       AND   p.package_type_id = pt.id";
    $query_package    = mysqli_query($dbc,$sql_package);

    if(isset($_GET['del'])){
        $getID =  $_GET['del'];
        // echo $getID;
        echo '
        <div class="alert alert-warning alert-box" role="alert" id="alert-box">
            Are you sure you want to delete this record?
            <br>
            <br>
            <form method="post">
                <button name="btn-del-yes" class="btn-success">Yes</button>
                <button name="btn-del-no" class="btn-danger">No</button>
            </form>
        </div>';

        if(isset($_POST['btn-del-yes'])){
            $sql_del    = "DELETE FROM tbl_package WHERE id = '$getID'";
            $query_del  = mysqli_query($dbc,$sql_del);
            if($query_del){
                echo "<script>
                        $('#alert-box').hide();
                      </script>";
                 echo "<div class='alert alert-success text-center alert-box'>
                            You have Successfully Removed this car.
                            <br>
                            Message: Success :)
                        </div>";            
                echo "<meta http-equiv='refresh' content='3;url=list-of-package.php'>";                    
            }
        }else if(isset($_POST['btn-del-no'])){
                echo "<meta http-equiv='refresh' content='0;url=list-of-package.php'>";
        }
    }
?>