<?php

if (isset($_POST['btn-uploadPDF'])) {
    @$id = $_POST['getID'];
    $folder_path = 'pdf/';

    $filename = basename($_FILES['upload-pdf']['name']);
    $newname = $folder_path . $filename;

    echo $filename;

    if ($_FILES['upload-pdf']['type'] == "application/pdf"){
        if (move_uploaded_file($_FILES['upload-pdf']['tmp_name'], $newname)){
            $filesql = "UPDATE tbl_booking_car_rental SET pdf = $filename WHERE id = $id";
            $fileresult = mysqli_query($dbc,$filesql);
        }else{
            echo "<p>Upload Failed.</p>";
        }

        if (isset($fileresult)){
            echo 'Success';
        } else{
            echo 'fail';
        }
    }
    else {
        echo "<p>Class notes must be uploaded in PDF format.</p>";
    }

}
?>