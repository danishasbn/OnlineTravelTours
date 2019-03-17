<?php
    session_start();
    $error_msg =  "";

    // Array of Errors
    $errors = array();

    // Count errors and store in array
    if(count($errors) != 0){
        echo "YAYYYYYY";
    }

    if(isset($_POST['btn-login'])){

        $inputEmail     = $_POST['inputEmail'];
        $inputPassword  = $_POST['inputPassword'];
        $hashPassword   = md5($inputPassword);

        // Check if Fields are Empty
        if(empty($inputEmail) || empty($inputPassword)){
            echo  "<div class='alert alert-danger text-center'>
                    Please Fill in the Required* Fields !
                    </div>";
            $errors[$error_msg] ='border:1px solid #ff0000';
            $error_msg='border:1px solid #ff0000';
        }

        // Check if Field values corresponds with DB
        $sql = "SELECT *
                FROM    tbl_user 
                WHERE   email       = '$inputEmail'
                AND     password    = '$hashPassword'
                AND     role_type   = 'Customer' ";
        $query = mysqli_query($dbc,$sql);
        if($query){
            while($row = mysqli_fetch_array($query)){
                $sessionEmail = $row['email'];
                $sessionFname = $row['firstname'];
                $_SESSION['login-user'] = $sessionEmail;
                $_SESSION['login-user-fname'] = $sessionFname;
                echo "<meta http-equiv='refresh' content='0;url=index.php'>";
            }
        }else{
            echo
            "<div class='alert alert-danger text-center'>
                Email or Password is Incorrect!
            </div>";
        }
    }

?>