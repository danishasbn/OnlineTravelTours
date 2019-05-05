<?php
    if(isset($_GET['id'])){
        $getID = $_GET['id'];
        // Fetch cover image for package
        $sql_package    = "SELECT * FROM tbl_package WHERE id = '$getID'";
        $query_package  = mysqli_query($dbc,$sql_package);
        
        // Fetch cover image for hotel
        $sql_hotel    = "SELECT * FROM tbl_hotel WHERE id = '$getID'";
        $query_hotel  = mysqli_query($dbc,$sql_hotel);
    }
    
    // Update Package Cover Image
    if(isset($_POST['btn-updatePackageCover'])){
        $getPackageID   = $_POST['getPackageID'];
        $getImage       = $_FILES['updatePackageCover']['name'];
        $target         = "../../uploadImages/".basename($getImage);
        $move           = move_uploaded_file($_FILES['updatePackageCover']['tmp_name'], $target);

        // echo $getPackageID;
        $sql_updateCoverPackage      = "UPDATE tbl_package SET cover_image = '$getImage' WHERE id = '$getPackageID' ";
        $query_updateCoverPackage    = mysqli_query($dbc, $sql_updateCoverPackage);

        if($query_updateCoverPackage){
            echo "
            <script>
                $(document).ready(function(){
                $('#alertBox').show();
                });
            </script>
             ";
            echo "<meta http-equiv='refresh' content='3;url=update-cover-image.php?id=$getPackageID'>";
        }
        
    }


    // Update Hotel Cover Image
    if(isset($_POST['btn-updateHotelCover'])){
        $getHotelID     = $_POST['getHotelID'];
        $getImage       = $_FILES['updateHotelCover']['name'];
        $target         = "../../uploadImages/".basename($getImage);
        $move           = move_uploaded_file($_FILES['updateHotelCover']['tmp_name'], $target);

        // echo $getPackageID;
        $sql_updateCoverHotel      = "UPDATE tbl_hotel SET cover_image = '$getImage' WHERE id = '$getHotelID' ";
        $query_updateCoverHotel    = mysqli_query($dbc, $sql_updateCoverHotel);

        if($query_updateCoverHotel){
            echo "
            <script>
                $(document).ready(function(){
                $('#alertBox').show();
                });
            </script>
             ";
            echo "<meta http-equiv='refresh' content='3;url=update-cover-image.php?id=$getHotelID'>";
        }
        
    }


?>