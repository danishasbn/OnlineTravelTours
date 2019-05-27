<?php
    @$user = $_SESSION['login-user'];

    $sqlGetUser = "SELECT * FROM tbl_user WHERE email = '$user'";
    $qryGetUser = mysqli_query($dbc,$sqlGetUser);
    if($qryGetUser){
        while($rowGetUser = mysqli_fetch_array($qryGetUser)){
            $email = $rowGetUser["email"];
            // echo $email;
        }
    }else{
        echo ":faild".mysqli_error($dbc);
        echo "<meta http-equiv='refresh' content='0;url=../../500.php'>";
    }

    if($user){
        // Car Rental
        // Update payment status
        if(isset($_GET['carRentalID']) && isset($_GET['option1'])){
            $getID = $_GET['carRentalID'];
            $option1    = $_GET['option1'];
        
            $sql_update = "UPDATE tbl_booking_car_rental SET payment_option = '$option1' WHERE id = '$getID'";
            $qry_update = mysqli_query($dbc,$sql_update);
            
            if($qry_update){
                echo "<meta http-equiv='refresh' content='0;url=$travelAnimation?option1&carRentalID=$getID'>";
            }else{
                echo "<meta http-equiv='refresh' content='0;url=../../500.php'>";
            }
        }

        // Update payment status
        if(isset($_GET['carRentalID']) && isset($_GET['option2'])){
            $getID = $_GET['carRentalID'];
            $option2    = $_GET['option2'];    
            $sql_update = "UPDATE tbl_booking_car_rental SET payment_option = '$option2' WHERE id = '$getID'";
            $qry_update = mysqli_query($dbc,$sql_update);
            if($qry_update){
                echo "<meta http-equiv='refresh' content='0;url=$travelAnimation?option2&carRentalID=$getID'>";
            }else{
                echo "<meta http-equiv='refresh' content='0;url=../../500.php'>";
            }
        }

        // Hotel
        // Update payment status
        if(isset($_GET['hotelID']) && isset($_GET['option1'])){
            $getID = $_GET['hotelID'];
            $option1    = $_GET['option1'];
        
            $sql_update = "UPDATE tbl_booking_hotel SET payment_option = '$option1' WHERE id = '$getID'";
            $qry_update = mysqli_query($dbc,$sql_update);
            
            if($qry_update){
                echo "<meta http-equiv='refresh' content='0;url=$travelAnimation?option1&hotelID=$getID'>";
            }else{
                echo "<meta http-equiv='refresh' content='0;url=../../500.php'>";
            }
        }
        // Update payment status
        if(isset($_GET['hotelID']) && isset($_GET['option2'])){
            $getID = $_GET['hotelID'];
            $option2    = $_GET['option2'];    
            $sql_update = "UPDATE tbl_booking_hotel SET payment_option = '$option2' WHERE id = '$getID'";
            $qry_update = mysqli_query($dbc,$sql_update);
            if($qry_update){
                echo "<meta http-equiv='refresh' content='0;url=$travelAnimation?option2&hotelID=$getID'>";
            }else{
                echo "<meta http-equiv='refresh' content='0;url=../../500.php'>";
            }
        }


        // Package -- Hotel
        // Update payment status
        if(isset($_GET['packageHotelID']) && isset($_GET['option1'])){
            $getID = $_GET['packageHotelID'];
            $option1    = $_GET['option1'];
        
            $sql_update = "UPDATE tbl_booking_package SET payment_option = '$option1' WHERE id = '$getID'";
            $qry_update = mysqli_query($dbc,$sql_update);
            
            if($qry_update){
                echo "<meta http-equiv='refresh' content='0;url=$travelAnimation?option1&packageHotelID=$getID'>";
            }else{
                echo "<meta http-equiv='refresh' content='0;url=../../500.php'>";
            }
        }
        // Update payment status
        if(isset($_GET['packageHotelID']) && isset($_GET['option2'])){
            $getID = $_GET['packageHotelID'];
            $option2    = $_GET['option2'];    
            $sql_update = "UPDATE tbl_booking_package SET payment_option = '$option2' WHERE id = '$getID'";
            $qry_update = mysqli_query($dbc,$sql_update);
            if($qry_update){
                echo "<meta http-equiv='refresh' content='0;url=$travelAnimation?option2&packageHotelID=$getID'>";
            }else{
                echo "<meta http-equiv='refresh' content='0;url=../../500.php'>";
            }
        }


        // Package -- Car Rental
        // Update payment status
        if(isset($_GET['packageCarID']) && isset($_GET['option1'])){
            $getID = $_GET['packageCarID'];
            $option1    = $_GET['option1'];
        
            $sql_update = "UPDATE tbl_booking_package SET payment_option = '$option1' WHERE id = '$getID'";
            $qry_update = mysqli_query($dbc,$sql_update);
            
            if($qry_update){
                echo "<meta http-equiv='refresh' content='0;url=$travelAnimation?option1&packageCarID=$getID'>";
            }else{
                echo "<meta http-equiv='refresh' content='0;url=../../500.php'>";
            }
        }
        // Update payment status
        if(isset($_GET['packageCarID']) && isset($_GET['option2'])){
            $getID = $_GET['packageCarID'];
            $option2    = $_GET['option2'];    
            $sql_update = "UPDATE tbl_booking_package SET payment_option = '$option2' WHERE id = '$getID'";
            $qry_update = mysqli_query($dbc,$sql_update);
            if($qry_update){
                echo "<meta http-equiv='refresh' content='0;url=$travelAnimation?option2&packageCarID=$getID'>";
            }else{
                echo "<meta http-equiv='refresh' content='0;url=../../500.php'>";
            }
        }



        // Package -- Travel
        // Update payment status
        if(isset($_GET['packageTravelID']) && isset($_GET['option1'])){
            $getID = $_GET['packageTravelID'];
            $option1    = $_GET['option1'];
        
            $sql_update = "UPDATE tbl_booking_package SET payment_option = '$option1' WHERE id = '$getID'";
            $qry_update = mysqli_query($dbc,$sql_update);
            
            if($qry_update){
                echo "<meta http-equiv='refresh' content='0;url=$travelAnimation?option1&packageTravelID=$getID'>";
            }else{
                echo "<meta http-equiv='refresh' content='0;url=../../500.php'>";
            }
        }
        // Update payment status
        if(isset($_GET['packageTravelID']) && isset($_GET['option2'])){
            $getID = $_GET['packageTravelID'];
            $option2    = $_GET['option2'];    
            $sql_update = "UPDATE tbl_booking_package SET payment_option = '$option2' WHERE id = '$getID'";
            $qry_update = mysqli_query($dbc,$sql_update);
            if($qry_update){
                echo "<meta http-equiv='refresh' content='0;url=$travelAnimation?option2&packageTravelID=$getID'>";
            }else{
                echo "<meta http-equiv='refresh' content='0;url=../../500.php'>";
            }
        }


















    }
    else{
        echo "<meta http-equiv='refresh' content='0;url=../../500.php'>";
    }
?>