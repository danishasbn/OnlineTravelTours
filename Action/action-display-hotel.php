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
        $sql_fetch = "SELECT *, h.id as hotelID 
                FROM tbl_hotel h, tbl_discount d 
                WHERE d.id = h.discount_id
                AND h.id = '$id'";
        $query_fetch = mysqli_query($dbc, $sql_fetch);

        $sql_gallery_details = "SELECT * 
                  FROM  tbl_hotel h, tbl_gallery g, tbl_hotel_gallery hg
                  WHERE h.id = hg.hotel_id
                  AND   g.id = hg.gallery_id
                  AND   h.id = '$id'";

        $query_gallery_details  = mysqli_query($dbc,$sql_gallery_details);
    }


?>