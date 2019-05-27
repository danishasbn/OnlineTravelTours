<?php
    if(isset($_GET['carRentalid'])){
        $id = $_GET['carRentalid'];
        $user = $_GET['user'];

        $sql_B  = "SELECT * , u.firstname as Fname, u.lastname as Lname
                         FROM   tbl_booking_car_rental bcr, 
                                tbl_booking_car_cart bcc,
                                tbl_cart c,
                                tbl_ordercarrental ocr,
                                tbl_car_rental cr,
                                tbl_user u

                         WHERE bcr.id = '$id'
                         AND bcr.id = bcc.booking_car_rental_id
                         AND c.user = '$user'
                         AND c.id = bcc.cart_id
                         AND ocr.id = bcc.booking_id
                         AND cr.id = ocr.car_rental_id
                         AND u.email = '$user'
        
        ";
        $qry_B  = mysqli_query($dbc,$sql_B);

        $sql_Booking  = "SELECT * , u.firstname as Fname, u.lastname as Lname
                         FROM   tbl_booking_car_rental bcr, 
                                tbl_booking_car_cart bcc,
                                tbl_cart c,
                                tbl_ordercarrental ocr,
                                tbl_car_rental cr,
                                tbl_user u,
                                tbl_pickuppoint p

                         WHERE bcr.id = '$id'
                         AND bcr.id = bcc.booking_car_rental_id
                         AND c.user = '$user'
                         AND c.id = bcc.cart_id
                         AND ocr.id = bcc.booking_id
                         AND cr.id = ocr.car_rental_id
                         AND p.id = cr.pickup_id
                         AND u.email = '$user'
        
        ";
        $qry_Booking  = mysqli_query($dbc,$sql_Booking);
        $sql_BookingHeading  = "SELECT * , u.firstname as Fname, u.lastname as Lname
                                FROM tbl_booking_car_rental bcr, 
                                        tbl_booking_car_cart bcc,
                                        tbl_cart c,
                                        tbl_ordercarrental ocr,
                                        tbl_car_rental cr,
                                        tbl_user u

                                WHERE bcr.id = '$id'
                                AND bcr.id = bcc.booking_car_rental_id
                                AND c.user = '$user'
                                AND c.id = bcc.cart_id
                                AND ocr.id = bcc.booking_id
                                AND cr.id = ocr.car_rental_id
                                AND u.email = '$user'
            
        ";
        $qry_BookingHeading  = mysqli_query($dbc,$sql_BookingHeading);

      
        
    }
    if(isset($_POST['btn-updateInfo-carRental'])){
        $pickupDate = $_POST['txt-dateFrom'];
        $returnDate = $_POST['txt-dateTo'];
        $time       = $_POST['txt-time'];
        $id         = $_POST['getCarRentalID'];
        $user       = $_POST['getUser'];

        $sql_update = "UPDATE tbl_booking_car_rental bcr 
                       SET bcr.pickup_time = '$time'
                       , bcr.pickup_date = '$pickupDate' 
                       , bcr.return_date = '$returnDate' 
                       WHERE bcr.id = '$id'";
        $qry_update = mysqli_query($dbc,$sql_update);

        if($qry_update){
            echo "<meta http-equiv='refresh' content='3;url=approved-booking.php?carRentalid=$id&user=$user'>";
        }else{
            echo "f".mysqli_error($dbc);
        }


    }

?>