<?php
    // Car Rental
    $sql = "SELECT *, bcr.id as BookingNo, u.id as UserID
            FROM  tbl_booking_car_rental bcr,
                  tbl_booking_car_cart bcc,
                  tbl_cart c,
                  tbl_user u
            WHERE bcc.cart_id =  c.id
            AND   c.user = u.email
            AND   bcr.id = bcc.booking_car_rental_id ";
    $qry = mysqli_query($dbc,$sql);
    
    @$user = $_SESSION['login-user'];
    $sqlUser = "SELECT *, bcr.id as BookingNo
            FROM  tbl_booking_car_rental bcr,
                  tbl_booking_car_cart bcc,
                  tbl_cart c
            WHERE bcc.cart_id =  c.id
            AND   c.user = '$user'
            AND   bcr.id = bcc.booking_car_rental_id ";
    $qryUser = mysqli_query($dbc,$sqlUser);
    

?>