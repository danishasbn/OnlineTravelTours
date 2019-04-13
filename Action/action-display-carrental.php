<?php
    $sql    = "SELECT * 
               FROM  tbl_car_rental, tbl_gallery, tbl_car_rental_gallery
               WHERE tbl_car_rental.id = tbl_car_rental_gallery.car_rental_id
               AND   tbl_gallery.id    = tbl_car_rental_gallery.gallery_id";
    $query  = mysqli_query($dbc,$sql);
?>