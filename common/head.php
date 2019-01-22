<?php
//Get Project folder full path
$fullPath         =  realpath($_SERVER['DOCUMENT_ROOT']);
$titleTabIcon     = 'http://localhost:'.$_SERVER['SERVER_PORT'].'/OnlineTravelTours/Asset/images/icons/title-tab-icon.png';
$dbconnect        = 'http://localhost:'.$_SERVER['SERVER_PORT'].'/OnlineTravelTours/database/dbconnect.php';
$imagePath        = 'http://localhost:'.$_SERVER['SERVER_PORT'].'/OnlineTravelTours/Asset/images/logo/paradise-chaser-logo.png';
$bootstrapCssPath = 'http://localhost:'.$_SERVER['SERVER_PORT'].'/OnlineTravelTours/Asset/css/bootstrap.min.css';
$AppCssPath       = 'http://localhost:'.$_SERVER['SERVER_PORT'].'/OnlineTravelTours/Asset/css/app.css';
$AOSPath          = 'http://localhost:'.$_SERVER['SERVER_PORT'].'/OnlineTravelTours/Asset/css/aos.css';
?>
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta charset="utf-8">
<!-- Allow application to be responsive on mobile devices -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Title tab  -->
<title>Paradise Chaser</title>
<!-- Title tab icon -->
<link href="<?= $titleTabIcon; ?>" rel="icon"/>
<!-- Bootstrap 4.0.0 Main CSS  -->
<link href="<?= $bootstrapCssPath; ?>" rel="stylesheet" type="text/css"/>
<!-- Custom Css -->
<link href="<?= $AppCssPath; ?>" rel="stylesheet" type="text/css"/>
<!-- AOS Css -->
<link href="<?= $AOSPath; ?>" rel="stylesheet" type="text/css"/>
