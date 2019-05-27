<?php

if (isset($_POST['btn-uploadPDF'])) {
    @$id = $_POST['getID'];
    
    $getImage     = $_FILES['upload-pdf']['name'];
    $target       = "../dashboard/admin/booking/pdf/".basename($getImage);

    $FileType = pathinfo($target,PATHINFO_EXTENSION);


    $sql = "UPDATE tbl_booking_car_rental 
            SET    booking_voucher = '$getImage',
                   payment_status  = 'Completed'
            WHERE  id = '$id'";
    $qry = mysqli_query($dbc,$sql);

    if($qry){
        echo "<meta http-equiv='refresh' content='3;url=list-of-bookings.php'>";
        if($FileType == "pdf"){
            if (move_uploaded_file($_FILES['upload-pdf']['tmp_name'], $target)) {
                // echo "Sucessfully uploaded";
            }else{
                // echo "Failed to upload image".mysqli_error($dbc);
            }
        }
    }else{
        echo "failed".mysqli_error($dbc);
    }  

}





?>