<?php
    if(isset($_GET['id'])){
        $id     = $_GET['id'];
        $sql_cr =  "SELECT
                        cr.pickup_id,
                        cr.car_rental_company_id,
                        cr.discount_id,
                        cr.car_title,
                        cr.transmission,
                        cr.price,
                        cr.year,
                        cr.freeDelivery,
                        cr.conditionApply,
                        cr.packageDetails,
                        crc.description,
                        cr.id,
                        crg.car_rental_id,
                        crc.company_name,
                        g.imagePath,
                        d.discount_percent,
                        cr.car_rental_company_description,
                        pp.pickup_place
                    FROM
                        tbl_car_rental cr,
                        tbl_gallery g,
                        tbl_car_rental_gallery crg,
                        tbl_discount d,
                        tbl_carrental_company crc,
                        tbl_pickuppoint pp

                    WHERE cr.id = crg.car_rental_id
                    AND   cr.pickup_id = pp.id
                    AND   cr.car_rental_company_id = crc.id
                    AND   crg.gallery_id = g.id
                    AND   d.id = cr.discount_id
                    AND   cr.id = '$id' "; 
        $query_cr = mysqli_query($dbc,$sql_cr);

        // Fetch Car Rental Company 
        $sql_crc    = "SELECT * FROM tbl_carrental_company";
        $query_crc  = mysqli_query($dbc,$sql_crc);
        
        // Fetch Car Rental Company 
        $sql_pickuppoint    = "SELECT * FROM tbl_pickuppoint";
        $query_pickuppoint  = mysqli_query($dbc,$sql_pickuppoint);

        // Fetch Discount
        $sql_discount   = "SELECT * FROM tbl_discount";
        $query_discount = mysqli_query($dbc,$sql_discount);
    
    }else{
        echo "<meta http-equiv='refresh' content='0;url=../../../404-dashboard.php'>";
    }

    if(isset($_POST['btn-save-car'])){
        // Get Form Values
        @$carTitle       = $_POST['txt-carTitle'];
        @$carCompany     = $_POST['sltcarRentalCompany'];
        @$pickUp         = $_POST['sltPickup'];
        @$transmission   = $_POST['sltTransmission'];
        @$price          = $_POST['txt-price'];
        @$year           = $_POST['txt-year'];
        @$delivery       = $_POST['txt-delivery'];
        @$discount       = $_POST['txt-discount'];
        
        @$carRentalCompanyDesc = $_POST['txt-CarCompanyDescription'];
        @$conditionApply       = $_POST['txt-ConditionApply'];

 
        // echo "Car Company -> " .$carCompany;
        // echo "</br>";
        // echo "Pick up point -> ".$pickUp;
        // echo "</br>";
        // echo "Discount -> ".$discount;
        // echo "</br>";


        @$packageDetails       = $_POST['txt-PackageDetails'];

        // Update Car Rental
        $sql_updatecr = "UPDATE tbl_car_rental
                         SET    car_title                       = '$carTitle',
                                car_rental_company_id           = '$carCompany',
                                pickup_id                       = '$pickUp',
                                transmission                    = '$transmission',
                                price                           = '$price',
                                year                            = '$year',
                                freeDelivery                    = '$delivery',
                                car_rental_company_description  = '$carRentalCompanyDesc',
                                conditionApply                  = '$conditionApply',
                                discount_id                     = '$discount',
                                packageDetails                  = '$packageDetails'
                        WHERE   id                              = '$id'";
        $query_updatecr = mysqli_query($dbc,$sql_updatecr);

        // Fetch Gallery ID for this car rental
        $sql_gid = "SELECT * FROM tbl_car_rental_gallery crg,tbl_gallery g WHERE car_rental_id = '$id' AND g.id = crg.gallery_id";
        $query_gid = mysqli_query($dbc,$sql_gid);

        if($query_gid){
            while($row_gid = mysqli_fetch_array($query_gid)){
                $getGalleryID = $row_gid['gallery_id'];
                $getImagePath  = $row_gid['imagePath'];
            }
        }

        // Update Gallery
        @$getImage     = $_FILES['uploadImgUpdate']['name'];
        // echo $getImage;
        $target       = "../../uploadImages/".basename($getImage);
        $sql_updateg  = "UPDATE tbl_gallery
                            SET imagePath = '$getImage'
                            WHERE id = '$getGalleryID'";
        $query_updateg = mysqli_query($dbc,$sql_updateg);
        if($query_updateg){
            if(@move_uploaded_file($_FILES['uploadImgUpdate']['tmp_name'], $target)) {
            }else{
                //Replace existing
                // echo $getImagePath;
                $sql_updateExisting  = "UPDATE tbl_gallery
                            SET imagePath = '$getImagePath'
                            WHERE id = '$getGalleryID'";
                $query_updateExisting = mysqli_query($dbc,$sql_updateExisting);
            }
        }
        echo "
            <script>
                $(document).ready(function(){
                $('#alertBox').show();
                });
            </script>
        ";
        echo "<meta http-equiv='refresh' content='3;url=list-of-carrental.php'>";

    }
       

?>