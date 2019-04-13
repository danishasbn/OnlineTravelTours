<?php
    if(isset($_GET['id'])){
        $getID = $_GET['id'];
        
        // Fetch Hotel Details
        $sql_hotel = "SELECT *
                      FROM  tbl_hotel, tbl_discount
                      WHERE tbl_hotel.discount_id = tbl_discount.id
                      AND   tbl_hotel.id = $getID";
        $query_hotel = mysqli_query($dbc, $sql_hotel);

        // Fetch Image Gallery
        $sql_hotelGallery = "SELECT *
                             FROM   tbl_gallery, tbl_hotel, tbl_hotel_gallery
                             WHERE  tbl_hotel_gallery.hotel_id = $getID
                             AND    tbl_hotel.id               = $getID
                             AND    tbl_hotel.id               = tbl_hotel_gallery.hotel_id
                             AND    tbl_gallery.id             = tbl_hotel_gallery.gallery_id";
        $query_hotelGallery = mysqli_query($dbc,$sql_hotelGallery);
        
        // Fetch Discount
        $sql_discount   = "SELECT * FROM tbl_discount";
        $query_discount = mysqli_query($dbc,$sql_discount);
    }else{
        echo "<meta http-equiv='refresh' content='0;url=../../../404-dashboard.php'>";
    }

    if(isset($_POST['btn-update-hotel'])){
        // Get Hotel ID
        @$id     = $_GET['id'];

        // Get Form Values
        @$hotelTitle         = $_POST['txt-hotelName'];
        @$hotelPrice         = $_POST['txt-hotelPrice'];
        @$dateFrom           = $_POST['txt-dateFrom'];
        @$dateTo             = $_POST['txt-dateTo'];
        @$purchaseInclude    = $_POST['txt-purchaseInclude'];
        @$packageDetails     = $_POST['txt-PackageDetails'];
        @$discount           = $_POST['txt-discount'];

        // Update Table Hotel
        $sql_update_hotel = "UPDATE tbl_hotel 
                             SET    hotelName       = '$hotelTitle',
                                    price           = '$hotelPrice',
                                    dateFrom        = '$dateFrom',
                                    dateTo          = '$dateTo',
                                    discount_id     = '$discount',
                                    purchaseInclude = '$purchaseInclude',
                                    packageDetails  = '$packageDetails'                                    
                            WHERE   id              = $id";
        $query_update_hotel = mysqli_query($dbc,$sql_update_hotel);
        if($query_update_hotel){
            // echo "Success";
        }else{
            echo "Failed".mysqli_error($dbc);
        }


    }
?>