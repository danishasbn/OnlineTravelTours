<?php
    if(isset($_GET['id'])){
        $id = $_GET['id'];
    }

    // Fetch Input Data
    if(isset($_POST['btn-book-item'])){
        echo "testtt";
        $orderCategory   = $_POST['txt-orderCategory'];
        $getItemID       = $_POST['txt-itemID'];
        if($orderCategory == 'car rental'){
            $days            = $_POST['days'];
            $totalPrice      = $_POST['totalPrice'];
                // Insert into tbl_order car rental
                $sql_insertOrder = "INSERT INTO tbl_orderCarRental(car_rental_id,no_of_days,total_price,order_category)VALUES('$getItemID', '$days', '$totalPrice','$orderCategory')";
                $qry_insertOrder = mysqli_query($dbc,$sql_insertOrder);
                
                // Get Last Inserted ID
                if($qry_insertOrder){
                // echo "Success";
                $last_id = mysqli_insert_id($dbc);
                }else{
                    echo "Failed". mysqli_error($dbc);
                }

                // Fetch Cart ID for logged in user
                $sessionUser = $_SESSION['login-user'];
                $sql_cart   = "SELECT * FROM tbl_cart WHERE user = '$sessionUser'";
                $query_cart = mysqli_query($dbc,$sql_cart);
                if($query_cart){
                    while($row_cart = mysqli_fetch_array($query_cart)){
                        $getCartID = $row_cart['id'];
                        // echo $getCartID;
                    }
                }

                // Insert into tbl_cart_order
                $sql_insertCO = "INSERT INTO tbl_cart_order(cart_id, order_id) VALUES ('$getCartID', '$last_id')";
                $qry_insertCO = mysqli_query($dbc,$sql_insertCO);

                if($qry_insertCO){
                    echo "<meta http-equiv='refresh' content='3;url=../shopping-cart.php'>";
                }
            }
            
            if($orderCategory == 'hotel'){
                $roomType   = $_POST['room_type'];
                $occupacy   = $_POST['occupacy'];
                $mealType   = $_POST['meal'];

                // Insert into tbl_order car rental
                // $sql_insertOrder = "INSERT INTO tbl_orderhotel(hotel_id,room_type_id,occupacy_id, meal_type_id, check_in, check_out,total_price, order_category)
                //                     VALUES('$getItemID',,'$orderCategory')";
                // $qry_insertOrder = mysqli_query($dbc,$sql_insertOrder);
            }
            
            // if($orderCategory == 'package'){
            //     echo "package";
            // }
    }

?>