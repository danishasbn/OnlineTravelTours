<?php
    // Fetch Hotel
    $sql_hotel      = "SELECT *, h.id as HotelID
                       FROM  tbl_hotel h, tbl_discount d
                       WHERE h.discount_id = d.id";
    $query_hotel  = mysqli_query($dbc,$sql_hotel);

    if(isset($_GET['del'])){
        $getID =  $_GET['del'];
        echo '
        <div class="alert alert-warning alert-box" role="alert" id="alert-box">
            Are you sure you want to delete this hotel?
            <br>
            <br>
            <form method="post">
                <button name="btn-del-yes" class="btn-success">Yes</button>
                <button name="btn-del-no" class="btn-danger">No</button>
            </form>
        </div>';

        if(isset($_POST['btn-del-yes'])){
            $sql_del    = "DELETE FROM tbl_hotel WHERE id = '$getID'";
            $query_del  = mysqli_query($dbc,$sql_del);
            if($query_del){
                echo "<script>
                        $('#alert-box').hide();
                      </script>";
                 echo "<div class='alert alert-success text-center alert-box'>
                            You have Successfully Removed this hotel.
                            <br>
                            Message: Success :)
                        </div>";            
                echo "<meta http-equiv='refresh' content='3;url=list-of-hotels.php'>";
            }
        }else if(isset($_POST['btn-del-no'])){
                echo "<meta http-equiv='refresh' content='0;url=list-of-hotels.php'>";
        }
    }
?>