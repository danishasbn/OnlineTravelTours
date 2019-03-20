<?php    
    $sessionUser = $_SESSION['login-user'];
    if(isset($sessionUser)){

        // Fetch Current User Data
        $sql = "SELECT * 
                FROM tbl_user
                WHERE email = '$sessionUser' ";
        $query = mysqli_query($dbc,$sql);
        if($query){
            while($row = mysqli_fetch_array($query)){
                $firstname     =  $row['firstname'];
                $lastname      =  $row['lastname'];
                $inputEmail    =  $row['email'];
                $inputPhone    =  $row['phone'];
                $inputPassword =  $row['password'];
                $inputAddress  =  $row['address'];
            }
        }

        // Update Current User Information
        if(isset($_POST['btn-save'])){
            
            // Fetch New Info
            $getFname = $_POST['inputFname'];
            $getLname = $_POST['inputLname'];
            $getEmail = $_POST['inputEmail'];
            $getPhone = $_POST['inputPhone'];

            if(empty($getFname) || empty($getLname) || empty($getEmail )|| empty($getPhone)){
                 echo "<div class='alert alert-warning text-center'>
                       Fields Cannot be Empty... Please Try Again !
                    </div>";
            }
            else if(!preg_match("/^[a-zA-Z ]*$/",$getFname) || !preg_match("/^[a-zA-Z ]*$/",$getLname)  ){
                echo "<div class='alert alert-warning text-center'>
                        Invalid Entry... Please Try Again!
                       </div>";
            }
            else if(!preg_match("/^[0-9]*$/",$getPhone) ){
                echo "<div class='alert alert-warning text-center'>
                        Invalid Phone Number... 
                       </div>";
            }
            else if(!filter_var($inputEmail, FILTER_VALIDATE_EMAIL)){
                echo "<div class='alert alert-warning text-center'>
                        Invalid Email Address...
                     </div>";
            }
            else{
                // Update User Info
                $sql_update = "UPDATE tbl_user
                               SET   firstname = '$getFname', lastname = '$getLname',email = '$getEmail',phone = '$getPhone'
                               WHERE email = '$sessionUser'";
                
                $query_update = mysqli_query($dbc, $sql_update);
                if($query_update){
                    echo "<div class='alert alert-success text-center'>
                            Account Info Updated Sucessfully ...
                        </div>";            
                    echo "<meta http-equiv='refresh' content='3;url=myData.php'>";
                }
            }
        }
        // Change Password
        if(isset($_POST['btn-change'])){

                $old_pass   = $_POST['inputOldPass'];
                $new_pass   = $_POST['inputNewPass'];
                $inputCpass = $_POST['inputCpass'];
                
                if(empty($old_pass) || empty($new_pass) || empty($inputCpass)){
                    echo "Fields cannot be empty";
                }else if($old_pass == $new_pass){
                    echo "Old password cannot be the same as New password!!!";
                }
                else{
                    //Encrypt Password   
                    $old_pass =md5($old_pass); 

                    //Validating New Password...!!!
                    if(strlen($new_pass) <=8 ){
                        echo "<div class='alert alert-warning text-center'>
                                Password should be at least 8 characters, too short password!!
                              </div>";     
                        echo "<meta http-equiv='refresh' content='3;url=myData.php'>";
                    }else if (strlen($new_pass) >25 ){
                        echo "<div class='alert alert-warning text-center'>
                                Password too long
                              </div>";                             
                        echo "<meta http-equiv='refresh' content='3;url=myData.php'>";
                    }else if( !preg_match("#[0-9]+#", $new_pass) ) {
                        echo "<div class='alert alert-warning text-center'>
                                    Password must include at least one number!
                                    </br>
                                    Password too long
                              </div>";                      
                        echo "<meta http-equiv='refresh' content='3;url=myData.php'>";
                    }else if( !preg_match("#[a-z]+#", $new_pass) ) {
                        echo "<div class='alert alert-warning text-center'>
                                Password must include at least one letter!
                                </br>
                                Password too long
                              </div>";                          
                        echo "<meta http-equiv='refresh' content='3;url=myData.php'>";
                    }else if( !preg_match("#[A-Z]+#", $new_pass) ) {
                        echo "<div class='alert alert-warning text-center'>
                                Password must include at least one UPPERCASE character! 
                              </div>";                          
                        echo "<meta http-equiv='refresh' content='3;url=myData.php'>";
                    }else if( !preg_match("#\W+#", $new_pass) ) {
                        echo "<div class='alert alert-warning text-center'>
                                Password must include at least one symbol!
                              </div>";                          
                        echo "<meta http-equiv='refresh' content='3;url=myData.php'>";
                    }else{
                        //Encrypt New Password
                        $new_pass   = md5($new_pass);
                        // Fecth Confirmed Password
                        $inputCpass = $_POST['inputCpass']; 
                        // Encrypt Confirmed Password
                        $inputCpass = md5($inputCpass);

                        $change_pwd=mysqli_query($dbc,"select * from tbl_user where email ='$sessionUser'");
                        $change_pwd1=mysqli_fetch_array($change_pwd);
                        $data_pwd=$change_pwd1['password'];

                    if($data_pwd==$old_pass){ //compare paswrd in db and in form
                        if($new_pass==$inputCpass){ // compare if both match
                            $update_pwd=mysqli_query($dbc,"update tbl_user set password='$new_pass' where email ='$sessionUser'");
                            echo "<div class='alert alert-success text-center'>
                                    Password Changed Successfully
                                    </br>
                                    Please wait while we are redirecting you to the homepage
                                 </div>";                              
                            @session_start();
                            @session_unset();
                            @session_destroy();
                            echo "<meta http-equiv='refresh' content='3;url=../../login.php'>";
                            exit();
                        }else{
                            echo "<div class='alert alert-success text-center'>
                                    Passwords do not match !
                                 </div>";                              
                            echo "<meta http-equiv='refresh' content='3;url=myData.php'>";
                        }
                    }else{
                        //If Old password <> to DB, Output error message 
                        echo "<div class='alert alert-warning text-center'>
                                Your old password is wrong !
                              </div>";  
                        echo "<meta http-equiv='refresh' content='3;url=myData.php'>";
                    }
                }
            }
        }

        // Change Billing Address
        if(isset($_POST['btn-billing'])){
            $getNewBilling = $_POST['inputNewAddress'];
            if(empty($getNewBilling)){
                 echo "<div class='alert alert-warning text-center'>
                            Please fill in the Billing Address field.
                        </div>";            
            }else if(!preg_match("/^[a-zA-Z-0-9 ]*$/",$getNewBilling)){
                 echo "<div class='alert alert-warning text-center'>
                        Invalid Address .... Please Try Again !
                      </div>";     
            }else{
                // Update Billing Address
                $sql_billing = "UPDATE tbl_user
                                SET address = '$getNewBilling'
                                WHERE email = '$sessionUser'";

                $query_billing = mysqli_query($dbc,$sql_billing);
                if($query_billing){
                    echo "<div class='alert alert-success text-center'>
                            Billing Address Updated Sucessfully ...
                         </div>";
                    echo "<meta http-equiv='refresh' content='3;url=myData.php'>";
                }
            }
        }
    }else{
        echo "<meta http-equiv='refresh' content='0;url=../../404.php'>";
    }
?>