<?php
//Get Project folder full path
$fullPath         =  realpath($_SERVER['DOCUMENT_ROOT']);
$titleTabIcon     = 'http://localhost:'.$_SERVER['SERVER_PORT'].'/OnlineTravelTours/Asset/images/icons/title-tab-icon.png';
$dbconnect        = 'http://localhost:'.$_SERVER['SERVER_PORT'].'/OnlineTravelTours/database/dbconnect.php';
$imagePath        = 'http://localhost:'.$_SERVER['SERVER_PORT'].'/OnlineTravelTours/Asset/images/logo/paradise-chaser-logo.png';
$bootstrapCssPath = 'http://localhost:'.$_SERVER['SERVER_PORT'].'/OnlineTravelTours/Asset/css/bootstrap.min.css';
$AppCssPath       = 'http://localhost:'.$_SERVER['SERVER_PORT'].'/OnlineTravelTours/Asset/css/app.css';
$AOSPath          = 'http://localhost:'.$_SERVER['SERVER_PORT'].'/OnlineTravelTours/Asset/css/aos.css';
$homepage         = 'http://localhost:'.$_SERVER['SERVER_PORT'].'/OnlineTravelTours/index.php';
$travelPackages   = 'http://localhost:'.$_SERVER['SERVER_PORT'].'/OnlineTravelTours/views/travel-packages/travel.php';
$hotelPackages    = 'http://localhost:'.$_SERVER['SERVER_PORT'].'/OnlineTravelTours/views/hotel-packages/hotel.php';
$activityPackages = 'http://localhost:'.$_SERVER['SERVER_PORT'].'/OnlineTravelTours/views/activities/activity.php';
$carRental        = 'http://localhost:'.$_SERVER['SERVER_PORT'].'/OnlineTravelTours/views/car-rental/carrent.php';
$about            = 'http://localhost:'.$_SERVER['SERVER_PORT'].'/OnlineTravelTours/views/about-us.php';
// List of icons
require('icons.php');
?>
<!DOCTYPE html>
<!-- Insert this line of code to disable right click in your <html> tag below -->
<!-- oncontextmenu="return false" -->
<html lang="en" dir="ltr">
<head>
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
</head>
<body>
  <!-- Main Container-Fluid-->
  <div class="container-fluid">
    <div class="row">
      <!-- Header -->
      <header class="paradise-header">
        <!-- Paradise Chaser Logo -->
        <nav class="navbar navbar-expand-lg navbar-dark">
          <a class="navbar-brand" href="<?= $homepage;?>">
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
                      <img src="<?= $search; ?>" class="icon"/>
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
              <li><a class="nav-link"><img src="<?= $phone;?>" class="icon"> +230-123-4560 </a></li>
              <li><a class="nav-link"><img src="<?= $address; ?>" class="icon"/> Floreal Mauritius </a></li>
              <li><a class="nav-link"><img src="<?= $email; ?>" class="icon"/> paradiseChaser@gmail.com </a></li>
              <li><a href="#" class="nav-link"><img src="<?= $user; ?>" class="icon"/> Login </a></li>
            </ul>
          </nav>
        </div>
      </header>
      <!-- End of Header -->

      <!-- Main Navigation Area -->
      <nav class="navbar navbar-expand-lg navbar-dark bg-teal " style="padding:0px;">
        <div class="collapse navbar-collapse" id="toggleNav">
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0 teal-link">

            <li class="nav-item active">
              <a class="nav-link" href="<?= $homepage;?>"><img src="<?= $home; ?>" class="icon"/> <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= $travelPackages;?>">Travel Packages</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= $hotelPackages;?>">Our Hotels</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= $carRental;?>">Car Rental</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= $activityPackages;?>">Our Activities</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= $about;?>">About us</a>
            </li>
          </ul>
        </div>
      </nav>
      <!-- End of Main Navigation Area -->
    </div>
  </div>
  <!-- End of Main Container-Fluid -->
