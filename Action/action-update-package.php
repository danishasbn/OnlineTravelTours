<?php
    if(isset($_GET['id'])){
        $getID = $_GET['id'];
        
        // Fetch Package Details
        $sql_package = "SELECT *, tbl_package.id as packageID
                        FROM  tbl_package, tbl_discount, tbl_package_type, tbl_country, tbl_airlines
                        WHERE tbl_package.discount_id = tbl_discount.id
                        AND   tbl_package.package_type_id = tbl_package_type.id
                        AND   tbl_package.country_id = tbl_country.id
                        AND   tbl_package.airline_id = tbl_airlines.id
                        AND   tbl_package.id = $getID ";
        $query_package = mysqli_query($dbc, $sql_package);

        // Fetch Image Gallery
        $sql_packageGallery = "SELECT *
                             FROM   tbl_gallery, tbl_package, tbl_package_gallery
                             WHERE  tbl_package_gallery.package_id = $getID
                             AND    tbl_package.id               = $getID
                             AND    tbl_package.id               = tbl_package_gallery.package_id
                             AND    tbl_gallery.id               = tbl_package_gallery.gallery_id";
        $query_packageGallery = mysqli_query($dbc,$sql_packageGallery);
        
        // Fetch Discount
        $sql_discount   = "SELECT * FROM tbl_discount";
        $query_discount = mysqli_query($dbc,$sql_discount);

        // Fetch Country
        $sql_country   = "SELECT * FROM tbl_country";
        $query_country = mysqli_query($dbc,$sql_country);

        // Fetch Package Type
        $sql_packageType   = "SELECT * FROM tbl_package_type";
        $query_packageType = mysqli_query($dbc,$sql_packageType);
    
        // Fetch Airline
        $sql_airline   = "SELECT * FROM tbl_airlines";
        $query_airline = mysqli_query($dbc,$sql_airline);

    }else{
        echo "<meta http-equiv='refresh' content='0;url=../../../404-dashboard.php'>";
    }

    if(isset($_POST['btn-update-package'])){
        // Get Hotel ID
        @$id     = $_GET['id'];

        // Get Form Values
        @$packageTitle       = $_POST['txt-packageTitle'];
        @$price              = $_POST['txt-price'];
        @$dateFrom           = $_POST['txt-dateFrom'];
        @$dateTo             = $_POST['txt-dateTo'];
        @$purchaseInclude    = $_POST['txt-purchaseInclude'];
        @$packageDetails     = $_POST['txt-PackageDetails'];
        @$discount           = $_POST['txt-discount'];
        @$packageType        = $_POST['txt-packageType'];

        // Travel Section
        @$country        = $_POST['txt-country'];
        @$airline        = $_POST['txt-airline'];
        @$terms          = $_POST['txt-terms-and-conditions'];

        // echo $target;
        if($packageType == '3'){
            // Update Table Hotel
            $sql_update_price = "UPDATE tbl_package
                                 SET    packageTitle    = '$packageTitle',
                                        price           = '$price',
                                        dateFrom        = '$dateFrom',
                                        dateTo          = '$dateTo',
                                        discount_id     = '$discount',
                                        purchaseInclude = '$purchaseInclude',
                                        packageDetails  = '$packageDetails',
                                        package_type_id = '$packageType',
                                        country_id      = '$country',
                                        terms           = '$terms',
                                        airline_id      = '$airline'
                                WHERE   id              = '$id' ";
            $query_update_price = mysqli_query($dbc,$sql_update_price);
            if($query_update_price){
                // echo "Success";
            echo "
                <script>
                    $(document).ready(function(){
                    $('#alertBox').show();
                    });
                </script>
            ";
                echo "<meta http-equiv='refresh' content='3;url=update-package.php?id=$id'>";
            }else{
                echo "Failed".mysqli_error($dbc);
            }
        }else{
            // Update Table Hotel
            $sql_update_price = "UPDATE tbl_package
                                SET    packageTitle     = '$packageTitle',
                                        price           = '$price',
                                        dateFrom        = '$dateFrom',
                                        dateTo          = '$dateTo',
                                        discount_id     = '$discount',
                                        purchaseInclude = '$purchaseInclude',
                                        packageDetails  = '$packageDetails',
                                        package_type_id = '$packageType',
                                        country_id      = '247',
                                        terms           = '$terms',
                                        airline_id      = '8'
                                WHERE   id              = '$id' ";
            $query_update_price = mysqli_query($dbc,$sql_update_price);
            if($query_update_price){
                // echo "Success";
            echo "
                <script>
                    $(document).ready(function(){
                    $('#alertBox').show();
                    });
                </script>
            ";
                echo "<meta http-equiv='refresh' content='3;url=update-package.php?id=$id'>";
            }else{
                echo "Failed".mysqli_error($dbc);
            }
        }
    }
?>