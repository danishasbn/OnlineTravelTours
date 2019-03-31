<?php
    // List of icons
    require('common/icons.php');
    require('common/nav-links.php');
    require('common/database/dbconnect.php');
    include('Action/action-login.php');
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <?php
        // list of links
        require('common/head.php');
    ?>
    <style type="text/css">
        body{
            background: url(Asset/images/404.jpeg) no-repeat center center fixed; 
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
            color:#fff;
            font-size:20px;            
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }        
        h1{
            font-size:100px;
        }
        a{
            color:#339C95;
            text-decoration:none !important;
        }
        a:hover{
            color:#fff;
            transition:0.3s;
        }
    </style>
</head>
<body>
        <h1>Suspended</h1>
        <br>
        <p>Sorry Your account has been removed from Paradise Chaser !</p>
        <br>
        <a href="<?= $homepage; ?>"><img src="Asset/images/icons/title-tab-icon.png" class="icon"/> Go back to Paradise Chaser Homepage.</a> 
</body>
</html>