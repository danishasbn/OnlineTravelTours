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
    }
    else{
        echo "<meta http-equiv='refresh' content='0;url=../../404.php'>";
    }
?>