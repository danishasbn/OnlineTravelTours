<?php
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        // Hotel
        $sql    = "SELECT *, tbl_hotel.id as hotelID FROM tbl_hotel WHERE id = $id";
        $query  = mysqli_query($dbc,$sql);
        if($query){
            while($row = mysqli_fetch_array($query)){
                $hotelID    = $row['hotelID'];
                $hotelName  = $row['hotelName'];
            }
        }
        // Hotel + Gallery + Hotel Gallery
        $sql_gallery = "SELECT * 
                        FROM    tbl_gallery, tbl_hotel, tbl_hotel_gallery
                        WHERE   tbl_hotel.id    = tbl_hotel_gallery.hotel_id
                        AND     tbl_gallery.id  = tbl_hotel_gallery.gallery_id
                        AND     tbl_hotel.id    = $id";
        $query_gallery = mysqli_query($dbc,$sql_gallery);
    }
    // Upload Photo
    if(isset($_POST['btn-upload-photo'])){  
        $getHotelID = $_POST['hotelID'];      
        // echo $getHotelID;
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
                $sql_hotelGallery   = "INSERT INTO tbl_hotel_gallery(gallery_id,hotel_id) VALUES ('$last_gallery_id','$getHotelID')";
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
                echo "<meta http-equiv='refresh' content='3;url=view-hotel-gallery.php?id=$getHotelID'>";
            }
        }
    }
    // Remove Photo from gallery
    if(isset($_GET['del'])){
        $getID  =  $_GET['id'];
        $getDEL =  $_GET['del'];
        echo '
        <div class="alert alert-warning alert-box" role="alert" id="alert-box">
            Are you sure you want to delete this car?
            <br>
            <br>
            <form method="post">
                <button name="btn-del-yes" class="btn-success">Yes</button>
                <button name="btn-del-no" class="btn-danger">No</button>
            </form>
        </div>';

        if(isset($_POST['btn-del-yes'])){
            $sql_del    = "DELETE FROM tbl_gallery WHERE id = '$getDEL'";
            $query_del  = mysqli_query($dbc,$sql_del);
            if($query_del){
                echo "<script>
                        $('#alert-box').hide();
                      </script>";
                 echo "<div class='alert alert-success text-center alert-box'>
                            You have Successfully Removed this image.
                            <br>
                            Message: Success :)
                        </div>";            
                echo "<meta http-equiv='refresh' content='3;url=view-hotel-gallery.php?id=$getID'>";
            }
        }else if(isset($_POST['btn-del-no'])){
                echo "<meta http-equiv='refresh' content='0;url=view-hotel-gallery.php?id=$getID'>";
        }
    }
?>