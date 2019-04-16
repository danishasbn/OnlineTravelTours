<?php
    // Fetch discount
    $sql_fetch        = "SELECT * FROM tbl_discount";
    $query_fetch      =  mysqli_query($dbc,$sql_fetch);

    //  Add Discount
    if(isset($_POST['btn-add-discount'])){
        $discountPercent = $_POST['txt-discountPercent'];
        $sql = "SELECT * FROM tbl_discount WHERE discount_percent = '$discountPercent'";
        if($result=mysqli_query($dbc,$sql)){
            if(mysqli_num_rows($result) > 0){
                echo "
                <script>
                    $(document).ready(function(){
                    $('#alertBoxError').show();
                    });
                </script>";
                echo "<meta http-equiv='refresh' content='3;url=create-discount.php'>";
            }else
                @$sql_discount    = "INSERT INTO tbl_discount(discount_percent)VALUES('$discountPercent')";
                @$query_discount  = mysqli_query($dbc,$sql_discount);
                if($query_discount){
                    echo "
                        <script>
                            $(document).ready(function(){
                            $('#alertBox').show();
                            });
                        </script>";
                    echo "<meta http-equiv='refresh' content='3;url=create-discount.php'>";
                }
            }else{
                echo "Query Failed.";
        }
    }
    //  Edit Discount
    if(isset($_GET['id'])){
        $id     = $_GET['id'];
        $val    = $_GET['value'];
        $sql_check        = "SELECT * FROM tbl_discount WHERE id = '$id'";
        $query_check      = mysqli_query($dbc,$sql_check);

        echo "<script>
            $(document).ready(function(){
                $('#btn-add-discount').hide();
            });
            </script>";
    }
    //  Update Discount
    if(isset($_POST['btn-update-discount'])){
        $currID     = $_POST['curr_id'];
        $currVal    = $_POST['curr_val'];

        $getVal     = $_POST['txt-discountPercent'];
        
        $sql_update = "SELECT * FROM tbl_discount WHERE discount_percent = '$getVal'";
        
        if($result_update=mysqli_query($dbc,$sql_update)){
            if(mysqli_num_rows($result_update) > 0){
                echo "
                <script>
                    $(document).ready(function(){
                    $('#alertBoxError').show();
                    });
                </script>";
                echo "<meta http-equiv='refresh' content='3;url=create-discount.php'>";
            }else{
                $sql_updateDiscount     = "UPDATE tbl_discount SET discount_percent = '$getVal' WHERE id = '$currID'";
                $query_updateDiscount   = mysqli_query($dbc,$sql_updateDiscount);
                if($query_updateDiscount){
                    echo "
                        <script>
                            $(document).ready(function(){
                            $('#alertBoxUpdate').show();
                            });
                        </script>";
                    echo "<meta http-equiv='refresh' content='3;url=create-discount.php'>";
                }
            }
        }
    }

    // Remove Discount
    if(isset($_GET['del'])){
        $getID =  $_GET['del'];
        echo '
        <div class="alert alert-warning alert-box" role="alert" id="alert-box">
            Are you sure you want to delete this car?
            <br>
            <br>
            <form method="post">
                <button name="btn-del-yes" class="btn-success">Yes</button>
                <button name="btn-del-no" class="btn-danger">No</button>
            </form>
        </div>';

        if(isset($_POST['btn-del-yes'])){
            $sql_del    = "DELETE FROM tbl_discount WHERE id = '$getID'";
            $query_del  = mysqli_query($dbc,$sql_del);
            if($query_del){
                echo "<script>
                        $('#alert-box').hide();
                      </script>";
                 echo "<div class='alert alert-success text-center alert-box'>
                            You have Successfully Removed this discount percent.
                            <br>
                            Message: Success :)
                        </div>";            
                echo "<meta http-equiv='refresh' content='3;url=create-discount.php'>";
            }
        }else if(isset($_POST['btn-del-no'])){
                echo "<meta http-equiv='refresh' content='0;url=create-discount.php'>";
        }
    }

?>