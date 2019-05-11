<?php
    // Fetch Discount
    $sql_discount   = "SELECT * FROM tbl_discount";
    $query_discount = mysqli_query($dbc,$sql_discount);

    // Fetch Package Type
    $sql_package_type   = "SELECT * FROM tbl_package_type";
    $query_package_type = mysqli_query($dbc,$sql_package_type);

    // Fetch Country
    $sql_country   = "SELECT * FROM tbl_country";
    $query_country = mysqli_query($dbc,$sql_country);


    if(isset($_POST['btn-save-package'])){
        $package            = $_POST['txt-packageTitle'];
        $price              = $_POST['txt-price'];
        $dateFrom           = $_POST['txt-dateFrom'];
        $dateTo             = $_POST['txt-dateTo'];
        $discount           = $_POST['txt-discount'];
        $packageType        = $_POST['txt-packageType'];
        $purchaseInclude    = $_POST['txt-purchaseInclude'];
        $packageDetails     = $_POST['txt-PackageDetails'];
        $getImage           = $_FILES['uploadImg']['name'];

        // Insert into table package
        $sql_package      = "INSERT INTO tbl_package(packageTitle, price,dateFrom, dateTo, purchaseInclude, packageDetails, discount_id, cover_image, package_type_id) VALUES ('$package', '$price', '$dateFrom', '$dateTo', '$purchaseInclude', '$packageDetails', '$discount', '$getImage', '$packageType')";
        $query_package    = mysqli_query($dbc,$sql_package);

        $target       = "../../uploadImages/".basename($getImage);
        $moveFile     = move_uploaded_file($_FILES['uploadImg']['tmp_name'], $target);

        // Get Last Inserted ID
        if($query_package){
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
                // Insert into Package + Gallery
                // Get Last ID
                $sql_packageGallery   = "INSERT INTO tbl_package_gallery(gallery_id,package_id) VALUES ('$last_gallery_id','$last_id')";
                $query_packageGallery = mysqli_query($dbc,$sql_packageGallery);
                if($query_packageGallery){
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
                echo "<meta http-equiv='refresh' content='3;url=list-of-package.php'>";
            }
        }
    }
?>