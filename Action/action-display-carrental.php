<?php
    $sql    = "SELECT * , tbl_car_rental.id as carID
               FROM  tbl_car_rental, tbl_gallery, tbl_car_rental_gallery, tbl_discount
               WHERE tbl_car_rental.id  = tbl_car_rental_gallery.car_rental_id
               AND   tbl_gallery.id     = tbl_car_rental_gallery.gallery_id
               AND   tbl_discount.id    = tbl_car_rental.discount_id";
    $query  = mysqli_query($dbc,$sql);


    // Fetch No. of days
    $sql_days   = "SELECT * FROM tbl_days";
    $query_days = mysqli_query($dbc,$sql_days);
    


    if(isset($_GET['id'])){
        $id = $_GET['id']; 
        // Fetch Car Details
        $sql_carfetch    = "SELECT *, tbl_carrental_company.company_name as companyName, tbl_carrental_company.description as companyDescription
                            FROM  tbl_car_rental, tbl_gallery, tbl_car_rental_gallery, tbl_discount, tbl_carrental_company
                            WHERE tbl_car_rental.id          = tbl_car_rental_gallery.car_rental_id
                            AND   tbl_gallery.id             = tbl_car_rental_gallery.gallery_id
                            AND   tbl_discount.id            = tbl_car_rental.discount_id
                            AND   tbl_carrental_company.id   = tbl_car_rental.car_rental_company_id
                            AND   tbl_car_rental.id  = $id";
        $query_fetch  = mysqli_query($dbc,$sql_carfetch);
    }
    
?>