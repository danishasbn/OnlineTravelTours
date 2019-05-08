<?php
    if(isset($_GET['id'])){
        $id = $_GET['id'];
    }

    // Fetch Input Data
    if(isset($_POST['btn-book-item'])){
        $orderCategory   = $_POST['txt-orderCategory'];
        $getItemID       = $_POST['txt-itemID'];
        @$packageType     = $_POST['package_type'];

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
                echo "
                        <script>
                            $(document).ready(function(){
                            Swal.fire({
                                position: 'top-end',
                                type: 'success',
                                title: 'Sucessfully Submitted',
                                showConfirmButton: false,
                                timer: 1500
                            })
                        });
                        </script>
                ";
                echo "<meta http-equiv='refresh' content='3;url=../shopping-cart.php'>";
                }else{
                    echo "Failed". mysqli_error($dbc);
                    echo "<meta http-equiv='refresh' content='0;url=../500.php'>";
                }
            }
            
            if($orderCategory == 'hotel'){
                $roomType   = $_POST['room_type'];
                $occupacy   = $_POST['occupacy'];
                $mealType   = $_POST['meal'];
                $checkIn    = $_POST['checkin'];
                $checkOut   = $_POST['checkout'];
                $nights     = $_POST['nights'];
                $totalPrice = $_POST['totalPrice'];

                // Insert into tbl_order hotel
                $sql_insertOrder = "INSERT INTO tbl_orderhotel(hotel_id,room_type_id,occupacy_id, meal_type_id, check_in, check_out,total_price, order_category, nights)
                                    VALUES('$getItemID','$roomType','$occupacy','$mealType','$checkIn', '$checkOut', '$totalPrice', '$orderCategory', '$nights')";
                $qry_insertOrder = mysqli_query($dbc,$sql_insertOrder);
                
                // Get Last Inserted ID
                if($qry_insertOrder){
                // echo "Success";
                $last_id = mysqli_insert_id($dbc);
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
                echo "
                        <script>
                            $(document).ready(function(){
                            Swal.fire({
                                position: 'top-end',
                                type: 'success',
                                title: 'Sucessfully Submitted',
                                showConfirmButton: false,
                                timer: 1500
                            })
                        });
                        </script>
                ";                
                echo "<meta http-equiv='refresh' content='3;url=../shopping-cart.php'>";
                }else{
                    echo "Failed". mysqli_error($dbc);
                    echo "<meta http-equiv='refresh' content='0;url=../500.php'>";
                }
                
            }
            
            if($orderCategory == 'package'){
                if($packageType == 'Hotel'){

                    $packageType    = $_POST['package_type'];
                    $getDate        = $_POST['txt-getDate'];
                    $mealType       = $_POST['meal'];
                    $occupacy       = $_POST['occupacy'];
                    $roomType       = $_POST['room_type'];
                    $totalPrice     = $_POST['totalPriceHotel'];

                    // Fetch package type id
                    $sqlPackageTypeID = "SELECT * FROM tbl_package_type WHERE package_type = '$packageType'";
                    $qryPackageTypeID = mysqli_query($dbc,$sqlPackageTypeID);

                    if($qryPackageTypeID){
                        while($rowPackageTypeID = mysqli_fetch_array($qryPackageTypeID)){
                            $packageTypeID = $rowPackageTypeID['id'];
                        }
                    }
                   
                    // Insert into tbl_order package - Hotel
                    $sql_insertOrder = "INSERT INTO tbl_orderpackage(package_type_id,total_price,checkin,package_id,order_category,room_type_id,meal_type_id,occupacy_id)
                                        VALUES('$packageTypeID','$totalPrice','$getDate', '$getItemID', '$orderCategory', '$roomType', '$mealType', '$occupacy' )";
                    $qry_insertOrder = mysqli_query($dbc,$sql_insertOrder);
                    
                    // Get Last Inserted ID
                    if($qry_insertOrder){
                    // echo "Success";
                    $last_id = mysqli_insert_id($dbc);
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
                    echo "
                            <script>
                                $(document).ready(function(){
                                Swal.fire({
                                    position: 'top-end',
                                    type: 'success',
                                    title: 'Sucessfully Submitted',
                                    showConfirmButton: false,
                                    timer: 1500
                                })
                            });
                            </script>
                    ";                    
                    echo "<meta http-equiv='refresh' content='3;url=../shopping-cart.php'>";
                    }else{
                        echo "Failed". mysqli_error($dbc);
                        echo "<meta http-equiv='refresh' content='0;url=../500.php'>";
                    }
                    
                }else if($packageType == 'Car Rent'){
                    $packageType    = $_POST['package_type'];
                    $totalPrice     = $_POST['totalPriceCar'];

                    // Fetch package type id
                    $sqlPackageTypeID = "SELECT * FROM tbl_package_type WHERE package_type = '$packageType'";
                    $qryPackageTypeID = mysqli_query($dbc,$sqlPackageTypeID);

                    if($qryPackageTypeID){
                        while($rowPackageTypeID = mysqli_fetch_array($qryPackageTypeID)){
                            $packageTypeID = $rowPackageTypeID['id'];
                        }
                    }
                   
                    // Insert into tbl_order package - Hotel
                    $sql_insertOrder = "INSERT INTO tbl_orderpackage(package_type_id,total_price,checkin,package_id,order_category,room_type_id,meal_type_id,occupacy_id)
                                        VALUES('$packageTypeID','$totalPrice','', '$getItemID', '$orderCategory', '', '', '' )";
                    $qry_insertOrder = mysqli_query($dbc,$sql_insertOrder);
                    
                    // Get Last Inserted ID
                    if($qry_insertOrder){
                    // echo "Success";
                    $last_id = mysqli_insert_id($dbc);
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
                    echo "
                            <script>
                                $(document).ready(function(){
                                Swal.fire({
                                    position: 'top-end',
                                    type: 'success',
                                    title: 'Sucessfully Submitted',
                                    showConfirmButton: false,
                                    timer: 1500
                                })
                            });
                            </script>
                    ";
                    echo "<meta http-equiv='refresh' content='3;url=../shopping-cart.php'>";
                    }else{
                        echo "Failed". mysqli_error($dbc);
                        echo "<meta http-equiv='refresh' content='0;url=../500.php'>";
                    }
                    
                }

            
            }
    }

?>