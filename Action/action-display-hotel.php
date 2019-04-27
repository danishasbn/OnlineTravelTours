<?php

    $sql= "SELECT *, h.id as hotelID 
            FROM tbl_hotel h, tbl_discount d 
            WHERE d.id = h.discount_id";
    
    $query  = mysqli_query($dbc,$sql);

    $sql_gallery = "SELECT * 
                  FROM  tbl_hotel h, tbl_gallery g, tbl_hotel_gallery hg
                  WHERE h.id = hg.hotel_id
                  AND   g.id = hg.gallery_id";

    $query_gallery  = mysqli_query($dbc,$sql_gallery);

?>