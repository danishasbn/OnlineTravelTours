<?php
//Get Project folder full path
$fullPath         =  realpath($_SERVER['DOCUMENT_ROOT']);
$titleTabIcon     = 'http://localhost:'.$_SERVER['SERVER_PORT'].'/OnlineTravelTours/Asset/images/icons/title-tab-icon.png';
$dbconnect        = 'http://localhost:'.$_SERVER['SERVER_PORT'].'/OnlineTravelTours/database/dbconnect.php';
$imagePath        = 'http://localhost:'.$_SERVER['SERVER_PORT'].'/OnlineTravelTours/Asset/images/logo/paradise-chaser-logo.png';
$bootstrapCssPath = 'http://localhost:'.$_SERVER['SERVER_PORT'].'/OnlineTravelTours/Asset/css/bootstrap.min.css';
$AppCssPath       = 'http://localhost:'.$_SERVER['SERVER_PORT'].'/OnlineTravelTours/Asset/css/app.css';
$FontAwesomePath  = 'http://localhost:'.$_SERVER['SERVER_PORT'].'/OnlineTravelTours/Asset/css/fontawesome.css';
$AOSPath          = 'http://localhost:'.$_SERVER['SERVER_PORT'].'/OnlineTravelTours/Asset/css/aos.css';
$homepage         = 'http://localhost:'.$_SERVER['SERVER_PORT'].'/OnlineTravelTours/index.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
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
  <!-- Font Awesome -->
  <link href="<?= $FontAwesomePath; ?>" rel="stylesheet" type="text/css"/>
  <!-- AOS Css -->
  <link href="<?= $AOSPath; ?>" rel="stylesheet" type="text/css"/>
</head>
<body>
  <!-- Main Container -->
  <div class="container-fluid">
    <div class="row">
      <header class="paradise-header">
        <!-- Paradise Chaser Logo -->
        <nav class="navbar">
          <a class="navbar-brand" href="#">
            <img src="<?= $imagePath; ?>" class="paradise-logo" alt="paradise-chaser logo">
          </a>
          <a class="nav navbar-nav navbar-logo mx-auto">
              <form class="form-inline">
                <input class="form-control mr-sm-2 txt-search" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-search" type="submit">Search</button>
              </form>
          </a>
        </nav>
      </header>
    </div>
