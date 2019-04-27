<?php
    $sql    = "SELECT * , tbl_car_rental.id as carID
               FROM  tbl_car_rental, tbl_gallery, tbl_car_rental_gallery, tbl_discount
               WHERE tbl_car_rental.id  = tbl_car_rental_gallery.car_rental_id
               AND   tbl_gallery.id     = tbl_car_rental_gallery.gallery_id
               AND   tbl_discount.id    = tbl_car_rental.discount_id";
    $query  = mysqli_query($dbc,$sql);


    if(isset($_GET['id'])){
        $id = $_GET['id']; 
        // Fetch Car Details
        $sql_carfetch    = "SELECT * 
                            FROM  tbl_car_rental, tbl_gallery, tbl_car_rental_gallery, tbl_discount
                            WHERE tbl_car_rental.id  = tbl_car_rental_gallery.car_rental_id
                            AND   tbl_gallery.id     = tbl_car_rental_gallery.gallery_id
                            AND   tbl_discount.id    = tbl_car_rental.discount_id
                            AND   tbl_car_rental.id  = $id";
        $query_fetch  = mysqli_query($dbc,$sql_carfetch);
    }
    
?>