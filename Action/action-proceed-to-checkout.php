<?php

    @$user = $_SESSION['login-user'];

    $sqlGetCartID = "SELECT *, tbl_cart.id as cartID FROM tbl_cart WHERE user = '$user'";
    $qryGetCartID = mysqli_query($dbc,$sqlGetCartID);
    if($qryGetCartID){
        while($rowGetCartID = mysqli_fetch_array($qryGetCartID)){
            $cartID = $rowGetCartID["cartID"];
        }
    }else{
        echo ":faild".mysqli_error($dbc);
        echo "<meta http-equiv='refresh' content='0;url=../500.php'>";
    }
    

    if($user){

        // Checkout Car Rental
        if(isset($_POST['btn-checkout-carrental'])){
            // echo "check";
            $totalPrice     = $_POST['txt-total-carrental'];
            $orderReference = $_POST['fieldCarRental'];
            $todaysDate     = date('d/m/Y');
            
            // echo $todaysDate;
            // echo "</br>";

            // Insert Car Rental Booking
            $sqlCarBooking = "INSERT INTO tbl_booking_car_rental(orderReference,dateBooked,total,payment_option,payment_status,booking_voucher) VALUES('$orderReference','$todaysDate','$totalPrice','Pending','Pending','No Voucher') ";
            $qryCarBooking = mysqli_query($dbc,$sqlCarBooking);

            // Get Last Inserted ID
            if($qryCarBooking){
                $last_id = mysqli_insert_id($dbc);

                $orderID    = $_POST['txt-carOrderID'];
                for($i=0; $i <  count($orderID); $i++){
                    $getOrderId =  $orderID[$i];
                    // echo $getOrderId;
                    // echo "<br>";
                    // echo $cartID;
                    // echo "<br>";
                    // Insert into tbl_Booking_Car_Cart
                    $sql_bcc = "INSERT INTO tbl_booking_car_cart(booking_id,cart_id,booking_car_rental_id)VALUES('$getOrderId','$cartID','$last_id')";
                    $qry_bcc = mysqli_query($dbc,$sql_bcc);
                }
                echo "<meta http-equiv='refresh' content='0;url=booking/booking-selection.php?carRentalID=$last_id'>";

            }else{
                echo "Failed". mysqli_error($dbc);
            }
        

        }else{
            // echo "wrongg";
        }


        // Checkout Hotel
          if(isset($_POST['btn-checkout-hotel'])){
            // echo "check";
            $totalPrice     = $_POST['txt-total-hotel'];
            $orderReference = $_POST['fieldHotel'];
            $todaysDate     = date('d/m/Y');
            
            // echo $totalPrice;
            // echo "</br>";

            // Insert Hotel Booking
            $sqlHotelBooking = "INSERT INTO tbl_booking_hotel(orderReference,dateBooked,total,payment_option,payment_status,booking_voucher) VALUES('$orderReference','$todaysDate','$totalPrice','Pending','Pending','No Voucher') ";
            $qryHotelBooking = mysqli_query($dbc,$sqlHotelBooking);

            // Get Last Inserted ID
            if($qryHotelBooking){
                $last_id = mysqli_insert_id($dbc);

                $orderID    = $_POST['txt-hotelOrderID'];
                for($i=0; $i <  count($orderID); $i++){
                    $getOrderId =  $orderID[$i];
                    // Insert into tbl_Booking_Hotel_Cart
                    $sql_bhc = "INSERT INTO tbl_booking_hotel_cart(booking_id,cart_id,booking_hotel_id)VALUES('$getOrderId','$cartID','$last_id')";
                    $qry_bhc = mysqli_query($dbc,$sql_bhc);
                }
                echo "<meta http-equiv='refresh' content='0;url=booking/booking-selection.php?hotelID=$last_id'>";

            }else{
                echo "Failed". mysqli_error($dbc);
            }
        

        }else{
            // echo "wrongg";
        }



        // Checkout Package -- Hotel
        if(isset($_POST['btn-checkout-packageHotel'])){
            // echo "check";
            $totalPrice     = $_POST['txt-total-packageHotel'];
            $orderReference = $_POST['fieldPackageHotel'];
            $todaysDate     = date('d/m/Y');
      
            // Insert Package Booking
            $sqlPackageBooking = "INSERT INTO tbl_booking_package(orderReference,dateBooked,total,payment_option,payment_status,booking_voucher) VALUES('$orderReference','$todaysDate','$totalPrice','Pending','Pending','No Voucher') ";
            $qryPackageBooking = mysqli_query($dbc,$sqlPackageBooking);

            // Get Last Inserted ID
            if($qryPackageBooking){
                $last_id = mysqli_insert_id($dbc);

                $orderID    = $_POST['txt-packagehotelOrderID'];
                for($i=0; $i <  count($orderID); $i++){
                    $getOrderId =  $orderID[$i];                    
                    
                    // Insert into tbl_Booking_Package_Cart
                    $sql_bhc = "INSERT INTO tbl_booking_package_cart(booking_id,cart_id,booking_package_id)VALUES('$getOrderId','$cartID','$last_id')";
                    $qry_bhc = mysqli_query($dbc,$sql_bhc);
                }
                echo "<meta http-equiv='refresh' content='0;url=booking/booking-selection.php?packageHotelID=$last_id'>";

            }else{
                echo "Failed". mysqli_error($dbc);
            }
        

        }else{
            // echo "wrongg";
        }


        // Checkout Package -- Car
        if(isset($_POST['btn-checkout-packageCar'])){
            // echo "check";
            $totalPrice     = $_POST['txt-total-packageCar'];
            $orderReference = $_POST['fieldPackageCarRental'];
            $todaysDate     = date('d/m/Y');
            
      
            // Insert Package Booking
            $sqlPackageBooking = "INSERT INTO tbl_booking_package(orderReference,dateBooked,total,payment_option,payment_status,booking_voucher) VALUES('$orderReference','$todaysDate','$totalPrice','Pending','Pending','No Voucher') ";
            $qryPackageBooking = mysqli_query($dbc,$sqlPackageBooking);

            // Get Last Inserted ID
            if($qryPackageBooking){
                $last_id = mysqli_insert_id($dbc);

                $orderID    = $_POST['txt-packagecarOrderID'];
                for($i=0; $i <  count($orderID); $i++){
                    $getOrderId =  $orderID[$i];
                    
                    // Insert into tbl_Booking_Package_Cart
                    $sql_bhc = "INSERT INTO tbl_booking_package_cart(booking_id,cart_id,booking_package_id)VALUES('$getOrderId','$cartID','$last_id')";
                    $qry_bhc = mysqli_query($dbc,$sql_bhc);
                }
                echo "<meta http-equiv='refresh' content='0;url=booking/booking-selection.php?packageCarID=$last_id'>";

            }else{
                echo "Failed". mysqli_error($dbc);
            }
        

        }else{
            // echo "wrongg";
        }



        // Checkout Package -- Travel
        if(isset($_POST['btn-checkout-packageTravel'])){
            // echo "check";
            $totalPrice     = $_POST['txt-total-packageTravel'];
            $orderReference = $_POST['fieldPackageTravel'];
            $todaysDate     = date('d/m/Y');
            
      
            // Insert Package Booking
            $sqlPackageBooking = "INSERT INTO tbl_booking_package(orderReference,dateBooked,total,payment_option,payment_status,booking_voucher) VALUES('$orderReference','$todaysDate','$totalPrice','Pending','Pending','No Voucher') ";
            $qryPackageBooking = mysqli_query($dbc,$sqlPackageBooking);

            // Get Last Inserted ID
            if($qryPackageBooking){
                $last_id = mysqli_insert_id($dbc);

                $orderID    = $_POST['txt-packagetravelOrderID'];
                for($i=0; $i <  count($orderID); $i++){
                    $getOrderId =  $orderID[$i];
                    
                    // Insert into tbl_Booking_Package_Cart
                    $sql_bhc = "INSERT INTO tbl_booking_package_cart(booking_id,cart_id,booking_package_id)VALUES('$getOrderId','$cartID','$last_id')";
                    $qry_bhc = mysqli_query($dbc,$sql_bhc);
                }
                echo "<meta http-equiv='refresh' content='0;url=booking/booking-selection.php?packageTravelID=$last_id'>";

            }else{
                echo "Failed". mysqli_error($dbc);
            }
        

        }else{
            // echo "wrongg";
        }




















    }else{
        echo "<meta http-equiv='refresh' content='0;url=../404.php'>";
    }
    
?>