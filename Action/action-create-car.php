<?php     
  // Fetch Pickup Ponints
  $sql_pickup   = "SELECT * FROM tbl_pickuppoint";
  $query_pickup = mysqli_query($dbc,$sql_pickup);

  // Fetch Car Rental Company
  $sql_carRentCompany   = "SELECT * FROM tbl_carrental_company";
  $query_carRentCompany = mysqli_query($dbc, $sql_carRentCompany);

  // Fetch Discount
  $sql_discount   = "SELECT * FROM tbl_discount";
  $query_discount = mysqli_query($dbc,$sql_discount);

    if(isset($_POST['btn-save-car'])){
    
      // Get Form Values
        @$uploadImg      = $_POST['uploadImg'];

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
        @$packageDetails       = $_POST['txt-PackageDetails'];

        // Insert into Car Rental
        $sql_carRent    = "INSERT INTO tbl_car_rental
                          (car_title,car_rental_company_id,pickup_id,transmission,price,year,freeDelivery,discount_id,car_rental_company_description,conditionApply,packageDetails)
                          VALUES
                          ('$carTitle', '$carCompany' , '$pickUp' , '$transmission' , '$price', '$year' , '$delivery' , '$discount', '$carRentalCompanyDesc', '$conditionApply' , '$packageDetails');
        ";
        $query_carRent  = mysqli_query($dbc,$sql_carRent);
        if($query_carRent){
          // echo "Success";
          $last_id = mysqli_insert_id($dbc);
        }else{
          echo "Failed". mysqli_error($dbc);
        }

        // Insert into Gallery
        // Upload Image to page 
        // Get image name
        $getImage     = $_FILES['uploadImg']['name'];
        // image file directory
        $target       = "../../uploadImages/".basename($getImage);
        $sql_image    = "INSERT INTO tbl_gallery(imagePath) VALUES ('$getImage')";
        $query_image  = mysqli_query($dbc,$sql_image);

        if($query_image){
          if (move_uploaded_file($_FILES['uploadImg']['tmp_name'], $target)) {
            $last_gallery_id = mysqli_insert_id($dbc);
            echo "
              <script>
                $(document).ready(function(){
                  $('#alertBox').show();
                });
              </script>
            ";
            echo "<meta http-equiv='refresh' content='3;url=list-of-carrental.php'>";
          }else{
            echo "Failed to upload image";
          }
        }else{
          echo "failed".mysqli_error($dbc);
        }  

      // Insert into Car Rental + Gallery
      // Get Last ID
      $sql_carGallery   = "INSERT INTO tbl_car_rental_gallery(gallery_id,car_rental_id) VALUES ('$last_gallery_id','$last_id')";
      $query_carGallery = mysqli_query($dbc,$sql_carGallery);

      if($query_carGallery){
        // echo "Success";
      }else{
        echo "Failed";
      }
    }
?>