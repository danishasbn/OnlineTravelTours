<?php

    $sql= "SELECT *, p.id as packageID 
            FROM tbl_package p, tbl_discount d, tbl_package_type pt, tbl_country c, tbl_airlines a
            WHERE d.id = p.discount_id 
            AND   c.id = p.country_id
            AND   a.id = p.airline_id
            AND   pt.id = p.package_type_id ";
    $query  = mysqli_query($dbc,$sql);

    $sql_gallery = "SELECT * 
                  FROM  tbl_package p, tbl_gallery g, tbl_package_gallery pg
                  WHERE p.id = pg.package_id
                  AND   g.id = pg.gallery_id";
    $query_gallery  = mysqli_query($dbc,$sql_gallery);

    // Fetch days
    $sql_days   = "SELECT * FROM tbl_days";
    $query_days =  mysqli_query($dbc,$sql_days);

    // Fetch room
    $sql_room   = "SELECT * FROM tbl_room_type";
    $query_room = mysqli_query($dbc,$sql_room);
    
    // Fetch meal
    $sql_meal   = "SELECT * FROM tbl_meal_type";
    $query_meal = mysqli_query($dbc,$sql_meal);

    // Fetch occupacy
    $sql_occupacy   = "SELECT * FROM tbl_occupacy";
    $query_occupacy =  mysqli_query($dbc,$sql_occupacy);

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql_fetch = "SELECT *, p.id as packageID 
                FROM tbl_package p, tbl_discount d, tbl_package_type pt, tbl_country c, tbl_airlines a
                WHERE d.id = p.discount_id
                AND   c.id = p.country_id
                AND   a.id = p.airline_id
                AND   pt.id = p.package_type_id
                AND   p.id = '$id'";
        $query_fetch = mysqli_query($dbc, $sql_fetch);

        $sql_gallery_details = "SELECT * 
                  FROM  tbl_package p, tbl_gallery g, tbl_package_gallery pg
                  WHERE p.id = pg.package_id
                  AND   g.id = pg.gallery_id
                  AND   p.id = '$id'";

        $query_gallery_details  = mysqli_query($dbc,$sql_gallery_details);
    }
?>

