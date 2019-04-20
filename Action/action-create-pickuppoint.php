<?php
    // Fetch PickupPoint
    $sql_fetch        = "SELECT * FROM tbl_pickuppoint";
    $query_fetch      =  mysqli_query($dbc,$sql_fetch);

    //  Add PickupPoint
    if(isset($_POST['btn-add-pickuppoint'])){
        $pickuppoint = $_POST['txt-pickuppoint'];
        $sql = "SELECT * FROM tbl_pickuppoint WHERE pickup_place = '$pickuppoint'";
        if($result=mysqli_query($dbc,$sql)){
            if(mysqli_num_rows($result) > 0){
                echo "
                <script>
                    $(document).ready(function(){
                    $('#alertBoxError').show();
                    });
                </script>";
                echo "<meta http-equiv='refresh' content='3;url=create-pickuppoint.php'>";
            }else
                @$sql_pickuppoint    = "INSERT INTO tbl_pickuppoint(pickup_place)VALUES('$pickuppoint')";
                @$query_pickuppoint  = mysqli_query($dbc,$sql_pickuppoint);
                if($query_pickuppoint){
                    echo "
                        <script>
                            $(document).ready(function(){
                            $('#alertBox').show();
                            });
                        </script>";
                    echo "<meta http-equiv='refresh' content='3;url=create-pickuppoint.php'>";
                }
            }else{
                echo "Query Failed.";
        }
    }
    //  Edit PickupPoint
    if(isset($_GET['id'])){
        $id     = $_GET['id'];
        $val    = $_GET['value'];
        $sql_check        = "SELECT * FROM tbl_pickuppoint WHERE id = '$id'";
        $query_check      = mysqli_query($dbc,$sql_check);

        echo "<script>
            $(document).ready(function(){
                $('#btn-add-pickuppoint').hide();
            });
            </script>";
    }
    //  Update PickupPoint
    if(isset($_POST['btn-update-pickuppoint'])){
        $currID     = $_POST['curr_id'];
        $currVal    = $_POST['curr_val'];

        $getVal     = $_POST['txt-pickuppoint'];
        
        $sql_update = "SELECT * FROM tbl_pickuppoint WHERE pickup_place = '$getVal'";
        
        if($result_update=mysqli_query($dbc,$sql_update)){
            if(mysqli_num_rows($result_update) > 0){
                echo "
                <script>
                    $(document).ready(function(){
                    $('#alertBoxError').show();
                    });
                </script>";
                echo "<meta http-equiv='refresh' content='3;url=create-pickuppoint.php'>";
            }else{
                $sql_updatePickuppoint     = "UPDATE tbl_pickuppoint SET pickup_place = '$getVal' WHERE id = '$currID'";
                $query_updatePickuppoint   = mysqli_query($dbc,$sql_updatePickuppoint);
                if($query_updatePickuppoint){
                    echo "
                        <script>
                            $(document).ready(function(){
                            $('#alertBoxUpdate').show();
                            });
                        </script>";
                    echo "<meta http-equiv='refresh' content='3;url=create-pickuppoint.php'>";
                }
            }
        }
    }

    // Remove Pickup Point
    if(isset($_GET['del'])){
        $getID =  $_GET['del'];
        echo '
        <div class="alert alert-warning alert-box" role="alert" id="alert-box">
            Are you sure you want to delete this location?
            <br>
            <br>
            <form method="post">
                <button name="btn-del-yes" class="btn-success">Yes</button>
                <button name="btn-del-no" class="btn-danger">No</button>
            </form>
        </div>';

        if(isset($_POST['btn-del-yes'])){
            $sql_del    = "DELETE FROM tbl_pickuppoint WHERE id = '$getID'";
            $query_del  = mysqli_query($dbc,$sql_del);
            if($query_del){
                echo "<script>
                        $('#alert-box').hide();
                      </script>";
                 echo "<div class='alert alert-success text-center alert-box'>
                            You have Successfully Removed this Location.
                            <br>
                            Message: Success :)
                        </div>";            
                echo "<meta http-equiv='refresh' content='3;url=create-pickuppoint.php'>";
            }
        }else if(isset($_POST['btn-del-no'])){
                echo "<meta http-equiv='refresh' content='0;url=create-pickuppoint.php'>";
        }
    }

?>