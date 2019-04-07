<?php
    // Fetch Car Rental
    $sql_carrent    = "SELECT *, cr.id as car_rental_id
                       FROM tbl_car_rental cr, 
                            tbl_car_rental_gallery crg, 
                            tbl_gallery g, 
                            tbl_pickuppoint pp, 
                            tbl_carrental_company crc,
                            tbl_discount d
                       WHERE cr.id                    = crg.car_rental_id
                       AND   g.id                     = crg.gallery_id
                       AND   cr.pickup_id             = pp.id
                       AND   cr.discount_id           = d.id
                       AND   cr.car_rental_company_id = crc.id";
       
    $query_carrent  = mysqli_query($dbc,$sql_carrent);

    // Remove Car Rental
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
            $sql_del    = "DELETE FROM tbl_car_rental WHERE id = '$getID'";
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
                echo "<meta http-equiv='refresh' content='3;url=list-of-carrental.php'>";
            }
        }else if(isset($_POST['btn-del-no'])){
                echo "<meta http-equiv='refresh' content='0;url=list-of-carrental.php'>";
        }
    }
?>