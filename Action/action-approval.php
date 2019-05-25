<?php
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $user = $_GET['user'];
        $sql_Booking  = "SELECT * , u.firstname as Fname, u.lastname as Lname
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

?>