<?php

    @$user = $_SESSION['login-user'];
    if(isset($_GET['carRentalID'])){
        $id = $_GET['carRentalID'];
        $sql_Booking_CarRental  = "SELECT * 
                            FROM tbl_booking_car_rental bcr, 
                                 tbl_booking_car_cart bcc,
                                 tbl_cart c,
                                 tbl_ordercarrental ocr,
                                 tbl_car_rental cr

                            WHERE bcr.id = '$id'
                            AND bcr.id = bcc.booking_car_rental_id
                            AND c.user = '$user'
                            AND c.id = bcc.cart_id
                            AND ocr.id = bcc.booking_id
                            AND cr.id = ocr.car_rental_id
        
        ";
        $qry_Booking_CarRental  = mysqli_query($dbc,$sql_Booking_CarRental);
        $sql_BookingHeading_CarRental  = "SELECT * 
                    FROM tbl_booking_car_rental bcr, 
                            tbl_booking_car_cart bcc,
                            tbl_cart c,
                            tbl_ordercarrental ocr,
                            tbl_car_rental cr
                         

                            WHERE bcr.id = '$id'
                            AND bcr.id = bcc.booking_car_rental_id
                            AND c.user = '$user'
                            AND c.id = bcc.cart_id
                            AND ocr.id = bcc.booking_id
                            AND cr.id = ocr.car_rental_id
              
        
        ";
        $qry_BookingHeading_CarRental  = mysqli_query($dbc,$sql_BookingHeading_CarRental);
        
    }else if(isset($_GET['hotelID'])){
        $id = $_GET['hotelID'];
        $sql_Booking_Hotel  = "SELECT * 
                            FROM tbl_booking_hotel bh, 
                                 tbl_booking_hotel_cart bhc,
                                 tbl_cart c,
                                 tbl_orderhotel oh,
                                 tbl_hotel h,
                                 tbl_meal_type mt,
                                 tbl_room_type rt,
                                 tbl_occupacy o

                            WHERE bh.id = '$id'
                            AND bh.id = bhc.booking_hotel_id
                            AND c.user = '$user'
                            AND c.id = bhc.cart_id
                            AND oh.id = bhc.booking_id
                            AND h.id = oh.hotel_id
                            AND oh.meal_type_id = mt.id
                            AND oh.occupacy_id = o.id
                            AND oh.room_type_id = rt.id
        
        ";
        $qry_Booking_Hotel  = mysqli_query($dbc,$sql_Booking_Hotel);
        $sql_BookingHeading_Hotel  = "SELECT * 
                            FROM tbl_booking_hotel bh, 
                                 tbl_booking_hotel_cart bhc,
                                 tbl_cart c,
                                 tbl_orderhotel oh,
                                 tbl_hotel h,
                                 tbl_meal_type mt,
                                 tbl_room_type rt,
                                 tbl_occupacy o                                 

                            WHERE bh.id = '$id'
                            AND bh.id = bhc.booking_hotel_id
                            AND c.user = '$user'
                            AND c.id = bhc.cart_id
                            AND oh.id = bhc.booking_id
                            AND h.id = oh.hotel_id
                            AND oh.meal_type_id = mt.id
                            AND oh.occupacy_id = o.id
                            AND oh.room_type_id = rt.id

        
        ";
        $qry_BookingHeading_Hotel  = mysqli_query($dbc,$sql_BookingHeading_Hotel);
        
    }
?>