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
        }else{
                // Check if Field values corresponds with DB
                $sql = "SELECT *
                        FROM    tbl_user 
                        WHERE   email       = '$inputEmail'
                        AND     password    = '$hashPassword'";
                $query = mysqli_query($dbc,$sql);
                if($query){
                    while($row = mysqli_fetch_array($query)){
                        
                        //Get Values From Database
                        $sessionEmail = $row['email'];
                        $sessionFname = $row['firstname'];
                        $getPassword  = $row['password'];
                        $getroleType  = $row['role_type'];
                        $getStatus    = $row['status'];

                        if($getroleType == 'Admin'){
                            // Create Admin Session
                            $_SESSION['login-admin'] = $sessionEmail;
                            $_SESSION['login-admin-title'] = $sessionFname;
                        }else{                                
                            //  Create Customer Session
                            // Store Email in session login-user
                            $_SESSION['login-user'] = $sessionEmail;
                            // Store Firstname in session login-user-fname
                            $_SESSION['login-user-fname'] = $sessionFname;
                        }
                    }

                    if($inputEmail == @$sessionEmail && $hashPassword == $getPassword && $getroleType == 'Customer' && $getStatus == '1'){
                        echo "<meta http-equiv='refresh' content='0;url=index.php'>";
                    }else if($inputEmail == @$sessionEmail && $hashPassword == $getPassword && $getroleType == 'Admin'){
                        echo "<meta http-equiv='refresh' content='0;url=dashboard/dashboard.php'>";
                    }else if(@$getStatus == '0'){
                       echo "<meta http-equiv='refresh' content='0;url=suspend.php'>";
                       session_destroy();
                    }else{
                        echo
                            "<div class='alert alert-danger text-center'>
                                    Email or Password is Incorrect!
                            </div>";
                    }
                }
            }
        }

?>