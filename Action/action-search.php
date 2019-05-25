<?php
    if(isset($_GET['search_text'])){
        $searchText = $_GET['search_text'];

        $sql = "SELECT * , tbl_car_rental.id as carID
               FROM  tbl_car_rental, tbl_gallery, tbl_car_rental_gallery, tbl_discount
               WHERE tbl_car_rental.id  = tbl_car_rental_gallery.car_rental_id
               AND   tbl_gallery.id     = tbl_car_rental_gallery.gallery_id
               AND   tbl_discount.id    = tbl_car_rental.discount_id               
               AND   tbl_car_rental.car_title     LIKE '%$searchText%'";

                
        $query = mysqli_query($dbc,$sql);
        
        $sqlH = "SELECT *, h.id as hotelID 
                 FROM tbl_hotel h, tbl_discount d 
                 WHERE d.id = h.discount_id
                 AND h.hotelName     LIKE '%$searchText%'";

        $queryH = mysqli_query($dbc,$sqlH);


        $sqlP = "SELECT *, p.id as packageID 
            FROM tbl_package p, tbl_discount d, tbl_package_type pt, tbl_country c, tbl_airlines a
            WHERE d.id = p.discount_id 
            AND   c.id = p.country_id
            AND   a.id = p.airline_id
            AND   pt.id = p.package_type_id 
            AND   p.packageTitle     LIKE '%$searchText%'";
        $queryP = mysqli_query($dbc,$sqlP);
   
    }
?>