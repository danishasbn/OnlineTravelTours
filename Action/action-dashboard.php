<?php
    $sessionUser = $_SESSION['login-admin'];
    if(isset($sessionUser)){
        
    }else{
        echo "<meta http-equiv='refresh' content='0;url=../404.php'>";
    }
?>