<?php

    $sql= "SELECT *, p.id as packageID 
            FROM tbl_package p, tbl_discount d 
            WHERE d.id = p.discount_id";
    $query  = mysqli_query($dbc,$sql);


    $sql_gallery = "SELECT * 
                  FROM  tbl_package p, tbl_gallery g, tbl_package_gallery pg
                  WHERE p.id = pg.package_id
                  AND   g.id = pg.gallery_id";
    $query_gallery  = mysqli_query($dbc,$sql_gallery);
?>