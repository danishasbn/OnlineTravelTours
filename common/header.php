<?php
session_start();
// Nav Links
require('nav-links.php');
// List of icons
require('icons.php');
// Fetch Database connection
include('database/dbconnect.php');
?>
<!DOCTYPE html>
<!-- Insert this line of code to disable right click in your <html> tag below -->
<!-- oncontextmenu="return false" -->
<html lang="en" dir="ltr">
<head>
  <?php
  //head
  require('head.php');
  ?>
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
              <form method="get" action="<?= $searchPath; ?>">
                <div class="input-group">
                  <div class="input-group-prepend ">
                    <span class="input-group-text search-icon">
                      <img src="<?= $search; ?>" class="icon"/>
                    </span>
                  </div>
                  <input class="form-control txt-search" type="text" placeholder="Search" aria-label="Search" id="search_text" name="search_text">
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
              <?php
                if(isset($_SESSION['login-user'])){
                  ?>
                    <li><a class="nav-link"><img src="<?= $user; ?>" class="icon"/> <?= "Hi " . $_SESSION['login-user-fname'];?> </a></li>
                    <li><a href="<?= $myDataPath; ?>" class="nav-link"><img src="<?= $myData; ?>" class="icon"/> My Informations </a></li>
                    <li><a href="<?= $myShoppingCart; ?>" class="nav-link"><img src="<?= $shoppingCartWhite; ?>" class="icon"/> My Shopping Cart </a></li>
                    <li><a href="<?= $logoutPath; ?>" class="nav-link"><img src="<?= $logout; ?>" class="icon"/> Logout </a></li>
                  <?php
                }else{
                  ?>
                  <li><a href="<?= $registerPath;?>" class="nav-link"><img src="<?= $register; ?>" class="icon"/> Register </a></li>
                  <li><a href="<?= $loginPath; ?>" class="nav-link"><img src="<?= $login; ?>" class="icon"/> Login </a></li>
                  <?php
                }
              ?>
              
            </ul>
          </nav>
        </div>
      </header>
      <!-- End of Header -->

      <!-- Main Navigation Area -->
      <nav class="navbar navbar-expand-lg navbar-dark bg-teal">
        <div class="collapse navbar-collapse" id="toggleNav">
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0 teal-link">

            <li class="nav-item active">
              <a class="nav-link" href="<?= $homepage;?>"><img src="<?= $home; ?>" class="icon"/> <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= $Packages;?>">Packages</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= $hotelPackages;?>">Hotels</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= $carRental;?>">Car Rental</a>
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
