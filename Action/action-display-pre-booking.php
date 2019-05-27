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
        
    }else if(isset($_GET['packageHotelID'])){
        $id = $_GET['packageHotelID'];
        $sql_Booking_PackageH  = "SELECT * 
                            FROM tbl_booking_package bp,
                                 tbl_booking_package_cart bpc,
                                 tbl_cart c,
                                 tbl_orderpackage op,
                                 tbl_package p,
                                 tbl_meal_type mt,
                                 tbl_room_type rt,
                                 tbl_occupacy o

                            WHERE bp.id = '$id'
                            AND bp.id = bpc.booking_package_id
                            AND c.user = '$user'
                            AND c.id = bpc.cart_id
                            AND op.id = bpc.booking_id
                            AND p.id = op.package_id
                            AND op.meal_type_id = mt.id
                            AND op.occupacy_id = o.id
                            AND op.room_type_id = rt.id
        
        ";
        $qry_Booking_PackageH  = mysqli_query($dbc,$sql_Booking_PackageH);
        $sql_BookingHeading_PackageH = "SELECT * 
                            FROM tbl_booking_package bp,
                                 tbl_booking_package_cart bpc,
                                 tbl_cart c,
                                 tbl_orderpackage op,
                                 tbl_package p,
                                 tbl_meal_type mt,
                                 tbl_room_type rt,
                                 tbl_occupacy o

                            WHERE bp.id = '$id'
                            AND bp.id = bpc.booking_package_id
                            AND c.user = '$user'
                            AND c.id = bpc.cart_id
                            AND op.id = bpc.booking_id
                            AND p.id = op.package_id
                            AND op.meal_type_id = mt.id
                            AND op.occupacy_id = o.id
                            AND op.room_type_id = rt.id

        
        ";
        $qry_BookingHeading_PackageH  = mysqli_query($dbc,$sql_BookingHeading_PackageH);
        
    }else if(isset($_GET['packageCarID'])){
        $id = $_GET['packageCarID'];
        $sql_Booking_PackageC  = "SELECT * 
                            FROM tbl_booking_package bp,
                                 tbl_booking_package_cart bpc,
                                 tbl_cart c,
                                 tbl_orderpackage op,
                                 tbl_package p

                            WHERE bp.id = '$id'
                            AND bp.id = bpc.booking_package_id
                            AND c.user = '$user'
                            AND c.id = bpc.cart_id
                            AND op.id = bpc.booking_id
                            AND p.id = op.package_id
        
        ";
        $qry_Booking_PackageC  = mysqli_query($dbc,$sql_Booking_PackageC);
        $sql_BookingHeading_PackageC = "SELECT * 
                            FROM tbl_booking_package bp,
                                 tbl_booking_package_cart bpc,
                                 tbl_cart c,
                                 tbl_orderpackage op,
                                 tbl_package p

                            WHERE bp.id = '$id'
                            AND bp.id = bpc.booking_package_id
                            AND c.user = '$user'
                            AND c.id = bpc.cart_id
                            AND op.id = bpc.booking_id
                            AND p.id = op.package_id

        
        ";
        $qry_BookingHeading_PackageC  = mysqli_query($dbc,$sql_BookingHeading_PackageC);
        
    }else if(isset($_GET['packageTravelID'])){
        $id = $_GET['packageTravelID'];
        $sql_Booking_PackageT  = "SELECT * 
                            FROM tbl_booking_package bp,
                                 tbl_booking_package_cart bpc,
                                 tbl_cart c,
                                 tbl_orderpackage op,
                                 tbl_package p

                            WHERE bp.id = '$id'
                            AND bp.id = bpc.booking_package_id
                            AND c.user = '$user'
                            AND c.id = bpc.cart_id
                            AND op.id = bpc.booking_id
                            AND p.id = op.package_id
        
        ";
        $qry_Booking_PackageT  = mysqli_query($dbc,$sql_Booking_PackageT);
        $sql_BookingHeading_PackageT = "SELECT * 
                            FROM tbl_booking_package bp,
                                 tbl_booking_package_cart bpc,
                                 tbl_cart c,
                                 tbl_orderpackage op,
                                 tbl_package p

                            WHERE bp.id = '$id'
                            AND bp.id = bpc.booking_package_id
                            AND c.user = '$user'
                            AND c.id = bpc.cart_id
                            AND op.id = bpc.booking_id
                            AND p.id = op.package_id

        
        ";
        $qry_BookingHeading_PackageT  = mysqli_query($dbc,$sql_BookingHeading_PackageT);
        
    }
    
?>