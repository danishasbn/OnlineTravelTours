<?php
    // Fetch Discount
    $sql_discount   = "SELECT * FROM tbl_discount";
    $query_discount = mysqli_query($dbc,$sql_discount);

    if(isset($_POST['btn-save-hotel'])){
        $hotel              = $_POST['txt-hotelName'];
        $price              = $_POST['txt-hotelPrice'];
        $dateFrom           = $_POST['txt-dateFrom'];
        $dateTo             = $_POST['txt-dateTo'];
        $discount           = $_POST['txt-discount'];
        $purchaseInclude    = $_POST['txt-purchaseInclude'];
        $packageDetails     = $_POST['txt-PackageDetails'];
        $getImage           = $_FILES['uploadImg']['name'];

        // Insert into table hotel
        $sql_hotel      = "INSERT INTO tbl_hotel(hotelName, price,dateFrom, dateTo, purchaseInclude, packageDetails, discount_id, cover_image) VALUES ('$hotel', '$price', '$dateFrom', '$dateTo', '$purchaseInclude', '$packageDetails', '$discount', '$getImage')";
        $query_hotel    = mysqli_query($dbc,$sql_hotel);

        $target         = "../../uploadImages/".basename($getImage);
        $moveFile     = move_uploaded_file($_FILES['uploadImg']['tmp_name'], $target);

        // Get Last Inserted ID
        if($query_hotel){
          // echo "Success";
          $last_id = mysqli_insert_id($dbc);
        }else{
          echo "Failed". mysqli_error($dbc);
        }

        // Insert into Gallery
        for($i=0; $i<count($_FILES["upload_file"]["name"]); $i++){
            $filetmp     = $_FILES["upload_file"]["tmp_name"][$i];
            $filename    = $_FILES["upload_file"]["name"][$i];
            $filepath    = "../../uploadImages/".$filename;
            move_uploaded_file($filetmp, $filepath);
            // echo $filename;
            $sql    = "INSERT INTO tbl_gallery(imagePath) VALUES ('$filename')";
            $query  = mysqli_query($dbc, $sql);
            if($query){
                $last_gallery_id = mysqli_insert_id($dbc);
                // Insert into Hotel + Gallery
                // Get Last ID
                $sql_hotelGallery   = "INSERT INTO tbl_hotel_gallery(gallery_id,hotel_id) VALUES ('$last_gallery_id','$last_id')";
                $query_hotelGallery = mysqli_query($dbc,$sql_hotelGallery);
                if($query_hotelGallery){
                    // echo "Success";
                }else{
                    echo "Failed";
                }
                echo "
                <script>
                    $(document).ready(function(){
                    $('#alertBox').show();
                    });
                </script>
                ";
                echo "<meta http-equiv='refresh' content='3;url=list-of-hotels.php'>";
            }
        }
    }
?>