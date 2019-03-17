<?php
    $error_msg   = "";
    $warning_fname_msg = "";
    $warning_lname_msg = "";
    $warning_address_msg = "";
    $warning_email_msg = "";
    $warning_phone_msg = "";
    $warning_password_msg = "";
    $success_msg = "";

    // Array of Errors
    $errors = array();

    // Count errors and store in array
    if(count($errors) != 0){
        echo "YAYYYYYY";
    }

    if(isset($_POST['btn-register'])){
        // Get Form Field Value        
        $firstname          = $_POST['inputFname'];
        $lastname           = $_POST['inputLname'];
        $gender             = $_POST['gender'];
        $inputAddress       = $_POST['inputAddress'];
        $inputPhone         = $_POST['inputPhone'];
        $country            = $_POST['inputCountry'];
        $inputEmail         = $_POST['inputEmail'];
        $password           = $_POST['inputPassword'];
        $CPassword          = $_POST['inputCPassword'];
        $roleType           = $_POST['role-type'];
        $status             = $_POST['status'];
        
         // Form Validation using PHP
        if(empty($firstname) || empty($lastname) || empty($gender) || empty($inputAddress) || empty($inputPhone) || empty($inputEmail) || empty($password) || empty($CPassword) ){                        
            echo  "<div class='alert alert-danger text-center'>
                    Please Fill in the Required* Fields !
                    </div>";
            $errors[$error_msg] ='border:1px solid #ff0000';                    
            $error_msg='border:1px solid #ff0000';
        }
        else{
            //First Name Validation
            if(!preg_match("/^[a-zA-Z ]*$/",$firstname)) {
                echo "<div class='alert alert-warning text-center'>
                        Only letters and white space allowed !
                        </div>";
                $errors[$warning_fname_msg] ='border:1px solid #ff7b00';
                $warning_fname_msg ='border:1px solid #ff7b00';
            }
             else if(strlen($firstname) < 3){
                echo "<div class='alert alert-warning text-center'>
                        Please enter a valid First Name !
                        </div>";
                $errors[$warning_fname_msg] ='border:1px solid #ff7b00';
                $warning_fname_msg ='border:1px solid #ff7b00';
            } 
             // Last Name Validation        
            else if (!preg_match("/^[a-zA-Z ]*$/",$lastname)) {
                    echo "<div class='alert alert-warning text-center'>
                            Only letters and white space allowed !
                            </div>";
                    $errors[$warning_lname_msg] ='border:1px solid #ff7b00';
                    $warning_lname_msg ='border:1px solid #ff7b00';
            }
            else if(strlen($lastname) < 3){
                echo "<div class='alert alert-warning text-center'>
                        Please enter a valid Last Name !
                        </div>";
                $errors[$warning_lname_msg] ='border:1px solid #ff7b00';
                $warning_lname_msg ='border:1px solid #ff7b00';
            }

            // Address Validation
            else if (!preg_match("/^[a-zA-Z-0-9 ]*$/",$inputAddress)) {
                    echo "<div class='alert alert-warning text-center'>
                            Only letters/Numbers and white space allowed !
                            </div>";
                    $errors[$warning_address_msg] ='border:1px solid #ff7b00';
                    $warning_address_msg ='border:1px solid #ff7b00';
            }

            // Phone Validation
            else if (!preg_match("/^[0-9]*$/",$inputPhone)) {  
                    echo "<div class='alert alert-warning text-center'>
                            Invalid Phone Number !
                            </div>";
                    $errors[$warning_phone_msg]='border:1px solid #ff7b00';
                    $warning_phone_msg='border:1px solid #ff7b00';
            }

            // Email Validation
            else if (!filter_var($inputEmail, FILTER_VALIDATE_EMAIL)) {
                    echo "<div class='alert alert-warning text-center'>
                            Invalid email address !
                            </div>";
                    $errors[$warning_email_msg]='border:1px solid #ff7b00';
                    $warning_email_msg='border:1px solid #ff7b00';
            }            
            // Password Validation
            else if (strlen($password) <= '8') {
                echo "<div class='alert alert-warning text-center'>
                    Your Password Must Contain At Least 8 Characters !
                    </div>";
                $errors[$warning_password_msg] ='border:1px solid #ff7b00';
                $warning_password_msg ='border:1px solid #ff7b00';
            }
            
            else if(!preg_match("#[0-9]+#",$password)) {
                echo "<div class='alert alert-warning text-center'>
                        Your Password Must Contain At Least a Number !
                        </div>";
                $errors[$warning_password_msg]='border:1px solid #ff7b00';
                $warning_password_msg='border:1px solid #ff7b00';
            }
            else if(!preg_match("#[A-Z]+#",$password)) {
                        echo "<div class='alert alert-warning text-center'>
                        Your Password Must Contain At Least an Uppercase Letter !
                        </div>";
                $errors[$warning_password_msg]='border:1px solid #ff7b00';
                $warning_password_msg='border:1px solid #ff7b00';
            }
            else if(!preg_match("#[a-z]+#",$password)) {
                        echo "<div class='alert alert-warning text-center'>
                        Your Password Must Contain At Least 1 Lowercase Letter !
                        </div>";
                $errors[$warning_password_msg]='border:1px solid #ff7b00';
                $warning_password_msg='border:1px solid #ff7b00';
            }

            else if($password != $CPassword){
                    echo "<div class='alert alert-danger text-center'>
                        Password & Confirmed Password do not match !
                    </div>";
                $errors[$warning_password_msg]='border:1px solid #ff7b00';
                $warning_password_msg='border:1px solid #ff7b00';
            }
            else{
            // Check if Email already exist
            $sql    = "SELECT * FROM tbl_user";
            $query  = mysqli_query($dbc, $sql);

            if($query){
                while($row=mysqli_fetch_array($query)){
                    $email = $row['email'];
                }
                if($email == $inputEmail){
                    echo "<div class='alert alert-warning text-center'>
                            Email Already Exist !
                            </div>";
                    $errors[$warning_email_msg] ='border:1px solid #ff7b00';
                    $warning_email_msg ='border:1px solid #ff7b00';
                }
                else{
                    // Insert Form Data into Database
                    $hashPassword = md5($password);
                    $sql = "INSERT INTO tbl_user(firstname,lastname,email,password,address,gender,country,phone,role_type,status) VALUES('$firstname','$lastname','$inputEmail', '$hashPassword', '$inputAddress' , '$gender' ,'$country', '$inputPhone', '$roleType' , '$status') ";
                    $query = mysqli_query($dbc,$sql);

                    echo "<div class='alert alert-success text-center'>
                            Thank You !!! <br> 
                            You have been succesfully registered to Paradise Chaser ! 
                            <br> Please Login using your credentials ...
                        </div>";
                    echo "<meta http-equiv='refresh' content='5; url=login.php'>";
                    }
                }
            }         
        }
    }
?>