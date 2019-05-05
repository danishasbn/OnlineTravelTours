<?php
    // Check if shopping cart is assigned to user otherwise create new
    $user = $_SESSION['login-user'];

    $sql    = "SELECT * FROM tbl_cart";
    $query  = mysqli_query($dbc,$sql);

    if($query){
        while($row = mysqli_fetch_array($query)){
            @$getUser = $row["user"];
        }
        if($user == @$getUser){
            // echo "already exist";
            // Display In shopping cart
            // Car Rental
            $sql_displayCar = "SELECT * , ocr.id as orderID
                                FROM tbl_cart c, tbl_orderCarRental ocr, tbl_cart_order co, tbl_car_rental cr
                                WHERE c.user    = '$user'
                                AND   c.id      = co.cart_id
                                AND   ocr.id    = co.order_id
                                AND   cr.id     = ocr.car_rental_id";
            $qry_displayCar = mysqli_query($dbc, $sql_displayCar);


            // Hotel

        }else{
            $sql_insert     = "INSERT INTO tbl_cart(user)VALUES('$user')";
            $query_insert   = mysqli_query($dbc,$sql_insert);
        }
    }




   

?>