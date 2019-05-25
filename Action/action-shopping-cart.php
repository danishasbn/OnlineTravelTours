<?php
    // Check if shopping cart is assigned to user otherwise create new
    @$user = $_SESSION['login-user'];

    if($user){
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
                $sql_displayHotel = "SELECT * , oh.id as orderID
                                    FROM tbl_cart c, tbl_orderhotel oh, tbl_cart_order co, tbl_hotel h, tbl_meal_type mt, tbl_occupacy occ, tbl_room_type rt
                                    WHERE c.user    = '$user'
                                    AND   c.id      = co.cart_id
                                    AND   oh.id     = co.order_id
                                    AND   h.id      = oh.hotel_id
                                    AND   mt.id     = oh.meal_type_id
                                    AND   occ.id    = oh.occupacy_id
                                    AND   rt.id     = oh.room_type_id";
                $qry_displayHotel = mysqli_query($dbc, $sql_displayHotel);
    
                // Packages - Hotel
                $sql_displayPackagesHotel = "SELECT *, op.id as orderID
                                        FROM tbl_cart c, 
                                             tbl_orderpackage op, 
                                             tbl_cart_order co, 
                                             tbl_package p, 
                                             tbl_package_type pt,
                                             tbl_meal_type mt,
                                             tbl_occupacy occ,
                                             tbl_room_type rt
                                             
                                        WHERE c.user  = '$user'
                                        AND   c.id    = co.cart_id
                                        AND   op.id   = co.order_id
                                        AND   p.id    = op.package_id
                                        AND   pt.id   = op.package_type_id
                                        AND   mt.id   = op.meal_type_id
                                        AND   occ.id  = op.occupacy_id
                                        AND   rt.id   = op.room_type_id
                                        AND   pt.id = '1'";
                $qry_displayPackagesHotel = mysqli_query($dbc,$sql_displayPackagesHotel);
                // Packages - Car Rent
                $sql_displayPackagesCar = "SELECT *, op.id as orderID
                                            FROM tbl_cart c, 
                                                tbl_orderpackage op, 
                                                tbl_cart_order co, 
                                                tbl_package p, 
                                                tbl_package_type pt
                                                
                                            WHERE c.user  = '$user'
                                            AND   c.id    = co.cart_id
                                            AND   op.id   = co.order_id
                                            AND   p.id    = op.package_id
                                            AND   pt.id   = op.package_type_id
                                            AND   pt.id = '2'";
    
                $qry_displayPackagesCar = mysqli_query($dbc,$sql_displayPackagesCar);
    
                // Packages - Travel
                $sql_displayPackagesTravel = "SELECT *, op.id as orderID
                                            FROM tbl_cart c, 
                                                tbl_orderpackage op, 
                                                tbl_cart_order co, 
                                                tbl_package p, 
                                                tbl_package_type pt
                                                
                                            WHERE c.user  = '$user'
                                            AND   c.id    = co.cart_id
                                            AND   op.id   = co.order_id
                                            AND   p.id    = op.package_id
                                            AND   pt.id   = op.package_type_id
                                            AND   pt.id = '3'";
    
                $qry_displayPackagesTravel = mysqli_query($dbc,$sql_displayPackagesTravel);
    
                $sqlCheck = "SELECT * FROM tbl_cart WHERE user = '$user'";
                $qryCheck = mysqli_query($dbc,$sqlCheck);
    
                if($qryCheck){
                    while($rowCheck = mysqli_fetch_array($qryCheck)){
                        $cartID = $rowCheck['id'];
                    }
                }
    
                // Get Sum of all data tables
    
                //Car Rental
                $getCarSum = "SELECT *, SUM(total_price) as FinalCarTotal , ocr.id as orderID
                              FROM tbl_ordercarrental ocr, tbl_cart_order co, tbl_cart c 
                              WHERE ocr.id = co.order_id 
                              AND c.id = co.cart_id 
                              AND co.cart_id = '$cartID'";
                $qryCarSum = mysqli_query($dbc,$getCarSum);

                //Car Rental - ORDER
                $getCarOrder = "SELECT *, ocr.id as orderID
                              FROM tbl_ordercarrental ocr, tbl_cart_order co, tbl_cart c 
                              WHERE ocr.id = co.order_id 
                              AND c.id = co.cart_id 
                              AND co.cart_id = '$cartID'";
                $qryCarOrder = mysqli_query($dbc,$getCarOrder);

                // Hotel
                $getHotelSum = "SELECT *, SUM(total_price) as FinalHotelTotal 
                              FROM tbl_orderhotel oh, tbl_cart_order co, tbl_cart c 
                              WHERE oh.id = co.order_id 
                              AND c.id = co.cart_id 
                              AND co.cart_id = '$cartID'";
                $qryHotelSum = mysqli_query($dbc,$getHotelSum);

                //Hotel - ORDER
                $getHotelOrder = "SELECT *, oh.id as orderID
                              FROM tbl_orderhotel oh, tbl_cart_order co, tbl_cart c 
                              WHERE oh.id = co.order_id 
                              AND c.id = co.cart_id 
                              AND co.cart_id = '$cartID'";
                $qryHotelOrder = mysqli_query($dbc,$getHotelOrder);
    
    
                // Package -- Hotel
                $getPackageHotelSum = "SELECT *, SUM(total_price) as FinalPackageHotelTotal 
                              FROM tbl_orderpackage op, tbl_cart_order co, tbl_cart c 
                              WHERE op.id = co.order_id 
                              AND  c.id = co.cart_id 
                              AND co.cart_id = '$cartID'
                              AND op.package_type_id = '1' ";
                $qryPackageHotelSum = mysqli_query($dbc,$getPackageHotelSum);

                // Package -- Car Rent
                $getPackageCarSum = "SELECT *, SUM(total_price) as FinalPackageCarTotal 
                              FROM tbl_orderpackage op, tbl_cart_order co, tbl_cart c 
                              WHERE op.id = co.order_id 
                              AND  c.id = co.cart_id 
                              AND co.cart_id = '$cartID'
                              AND op.package_type_id = '2' ";
                $qryPackageCarSum = mysqli_query($dbc,$getPackageCarSum);
                    
                // Package -- Travel
                $getPackageTravelSum = "SELECT *, SUM(total_price) as FinalPackageTravelTotal 
                              FROM tbl_orderpackage op, tbl_cart_order co, tbl_cart c 
                              WHERE op.id = co.order_id 
                              AND  c.id = co.cart_id 
                              AND co.cart_id = '$cartID'
                              AND op.package_type_id = '3' ";
                $qryPackageTravelSum = mysqli_query($dbc,$getPackageTravelSum);            
                
                //Package - ORDER
                $getPackageOrder = "SELECT *, op.id as orderID
                              FROM tbl_orderpackage op, tbl_cart_order co, tbl_cart c 
                              WHERE op.id = co.order_id 
                              AND c.id = co.cart_id 
                              AND co.cart_id = '$cartID'";
                $qryPackageOrder = mysqli_query($dbc,$getPackageOrder);
    
    
            }else{
                $sql_insert     = "INSERT INTO tbl_cart(user)VALUES('$user')";
                $query_insert   = mysqli_query($dbc,$sql_insert);
            }
        }else{
            echo "Failed". mysqli_error($dbc);
            echo "<meta http-equiv='refresh' content='0;url=../500.php'>";
        }        
    }else{
            echo "<meta http-equiv='refresh' content='0;url=../404.php'>";
    }

?>