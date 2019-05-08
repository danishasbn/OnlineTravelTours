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
            background: url(Asset/images/500.jpeg) no-repeat center center fixed; 
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
        .wrapper{
            background:rgba(0, 0, 0, 0.8);
            padding:50px;
        }
    </style>
</head>
<body>
        <div class="text-left wrapper">
        <h1> 500 </h1>
        <br>
        <p class="text-danger">(Database or Server Error)</p>
        <br>
        <a href="<?= $homepage; ?>"><img src="Asset/images/icons/title-tab-icon.png" class="icon"/> Go back to Paradise Chaser Homepage.</a> 
</body>
</html>