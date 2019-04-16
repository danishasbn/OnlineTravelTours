<?php
    // Fetch CRC
    $sql_fetch        = "SELECT * FROM tbl_carrental_company";
    $query_fetch      =  mysqli_query($dbc,$sql_fetch);

    //  Add CRC
    if(isset($_POST['btn-add-crc'])){
        $crcName = $_POST['txt-crcName'];
        $description = $_POST['txt-crcDescription'];

        $sql = "SELECT * FROM tbl_carrental_company WHERE company_name = '$crcName'";
        if($result=mysqli_query($dbc,$sql)){
            if(mysqli_num_rows($result) > 0){
                echo "
                <script>
                    $(document).ready(function(){
                    $('#alertBoxError').show();
                    });
                </script>";
                echo "<meta http-equiv='refresh' content='3;url=create-crc.php'>";
            }else
                @$sql_crc    = "INSERT INTO tbl_carrental_company(company_name,description)VALUES('$crcName','$description')";
                @$query_crc  = mysqli_query($dbc,$sql_crc);
                if($query_crc){
                    echo "
                        <script>
                            $(document).ready(function(){
                            $('#alertBox').show();
                            });
                        </script>";
                    echo "<meta http-equiv='refresh' content='3;url=create-crc.php'>";
                }
            }else{
                echo "Query Failed.";
        }
    }
    // //  Edit CRC
    if(isset($_GET['id'])){
        $id     = $_GET['id'];
        $val    = $_GET['value'];
        $sql_check        = "SELECT * FROM tbl_carrental_company WHERE id = '$id'";
        $query_check      = mysqli_query($dbc,$sql_check);

        echo "<script>
            $(document).ready(function(){
                $('#btn-add-crc').hide();
            });
            </script>";
    }
    // //  Update CRC
    if(isset($_POST['btn-update-crc'])){
        $currID     = $_POST['curr_id'];
        $currVal    = $_POST['curr_val'];

        $getVal     = $_POST['txt-crcName'];
        $getDesc    = $_POST['txt-crcDescription'];
        
        $sql_update = "SELECT * FROM tbl_carrental_company WHERE company_name = '$getVal'";
        
        if($result_update=mysqli_query($dbc,$sql_update)){
            if(mysqli_num_rows($result_update) > 0){
                echo "
                <script>
                    $(document).ready(function(){
                    $('#alertBoxError').show();
                    });
                </script>";
                
                $sql_updateCRC     = "UPDATE tbl_carrental_company SET  description = '$getDesc' WHERE id = '$currID'";
                $query_updateCRC   = mysqli_query($dbc,$sql_updateCRC);
                if($query_updateCRC){
                    echo "
                        <script>
                            $(document).ready(function(){
                            $('#alertBoxUpdate').show();
                            });
                        </script>";
                    echo "<meta http-equiv='refresh' content='3;url=create-crc.php'>";
                }
                echo "<meta http-equiv='refresh' content='3;url=create-crc.php'>";
            }else{
                $sql_updateCRC     = "UPDATE tbl_carrental_company SET company_name = '$getVal', description = '$getDesc' WHERE id = '$currID'";
                $query_updateCRC   = mysqli_query($dbc,$sql_updateCRC);
                if($query_updateCRC){
                    echo "
                        <script>
                            $(document).ready(function(){
                            $('#alertBoxUpdate').show();
                            });
                        </script>";
                    echo "<meta http-equiv='refresh' content='3;url=create-crc.php'>";
                }
            }
        }
    }

    // Remove Crc
    if(isset($_GET['del'])){
        $getID =  $_GET['del'];
        echo '
        <div class="alert alert-warning alert-box" role="alert" id="alert-box">
            Are you sure you want to delete this car rental company?
            <br>
            <br>
            <form method="post">
                <button name="btn-del-yes" class="btn-success">Yes</button>
                <button name="btn-del-no" class="btn-danger">No</button>
            </form>
        </div>';

        if(isset($_POST['btn-del-yes'])){
            $sql_del    = "DELETE FROM tbl_carrental_company WHERE id = '$getID'";
            $query_del  = mysqli_query($dbc,$sql_del);
            if($query_del){
                echo "<script>
                        $('#alert-box').hide();
                      </script>";
                 echo "<div class='alert alert-success text-center alert-box'>
                            You have Successfully Removed this car rental company from Paradise Chaser.
                            <br>
                            Message: Success :)
                        </div>";            
                echo "<meta http-equiv='refresh' content='3;url=create-crc.php'>";
            }
        }else if(isset($_POST['btn-del-no'])){
                echo "<meta http-equiv='refresh' content='0;url=create-crc.php'>";
        }
    }

?>