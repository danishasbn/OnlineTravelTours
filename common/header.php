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
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
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
      <!-- Header -->
      <header class="paradise-header">
        <!-- Paradise Chaser Logo -->
        <nav class="navbar navbar-expand-lg navbar-dark">
          <a class="navbar-brand" href="#">
            <img src="<?= $imagePath; ?>" class="paradise-logo" alt="paradise-chaser logo">
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#toggleNav">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="toggleNav">
            <div class="col-8">
              <!-- Search Form -->
              <form>
                <div class="input-group">
                  <div class="input-group-prepend ">
                    <span class="input-group-text search-icon">
                      <i class="fa fa-search teal" aria-hidden="true"></i>
                    </span>
                  </div>
                  <input class="form-control txt-search" type="text" placeholder="Search" aria-label="Search">
                  <button class="btn btn-find">Find</button>
                </div>
              </form>
              <!--/Search Form -->
            </div>
            <!-- Contact-Address-Email-Login information -->
            <ul class="nav navbar-nav navbar-right">
              <li><a class="nav-link"><i class="fas fa-phone"></i> +230-123-4560 </a></li>
              <li><a class="nav-link"><i class="fas fa-location-arrow"></i> Floreal Mauritius </a></li>
              <li><a class="nav-link"><i class="fas fa-envelope"></i> paradiseChaser@gmail.com </a></li>
              <li><a href="#" class="nav-link"><i class="fas fa-user"></i> Login </a></li>
            </ul>
          </nav>
        </div>
      </header>
      <!-- End of Header -->

      <h1 class="text-center trending"><img src="Asset/images/icons/border.png" class="img-border"/> Trending Offers <img src="Asset/images/icons/border.png" class="img-border"/></h1>

      <!-- Main Navigation Area -->
      <nav class="navbar navbar-expand-lg navbar-dark bg-teal">
        <div class="collapse navbar-collapse" id="toggleNav">
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0 teal-link">

            <li class="nav-item active">
              <a class="nav-link" href="#"><i class="fas fa-home"></i> <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Travel Packages</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Hotel in Mauritius</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Car Rental</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Activities in Mauritius</a>
            </li>
          </ul>
        </div>
      </nav>
      <!-- End of Main Navigation Area -->
    </div>


    <!-- Video background -->
    <div class="embed-responsive embed-responsive-16by9 video-background">

      <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
        <source src="Asset/video/ParadiseChaserVideo.mp4" type="video/mp4">
        </video>

        <div class="video-foot">
          <p class="text-center">
            We convert human ideologies and visual creations into productive assets
            for any organisation who believe that big will not beat small anymore but the fast beating the slow.
            Supported by our proprietary Creative
            Intelligence process, unique tools and global partners,
            we are able to convert data into visuals reaching the heart of everything we do to
            orchestrate experiences that deliver creativity with precision and purpose.
          </p>
        </div>

      </div>




      <div class="container">
        <div class="row">




        </div>
      </div>
