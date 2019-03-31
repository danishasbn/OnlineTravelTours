<?php
    // Fetch Car Rental
    $sql_carrent    = "SELECT *, cr.id as car_rental_id
                       FROM tbl_car_rental cr, 
                            tbl_car_rental_gallery crg, 
                            tbl_gallery g, 
                            tbl_pickuppoint pp, 
                            tbl_carrental_company crc,
                            tbl_discount d
                       WHERE cr.id                    = crg.car_rental_id
                       AND   g.id                     = crg.gallery_id
                       AND   cr.pickup_id             = pp.id
                       AND   cr.discount_id           = d.id
                       AND   cr.car_rental_company_id = crc.id";
       
    $query_carrent  = mysqli_query($dbc,$sql_carrent);
?>