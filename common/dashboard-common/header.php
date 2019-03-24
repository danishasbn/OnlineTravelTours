<?php
session_start();
// Nav Links
require($_SERVER['DOCUMENT_ROOT'].'/OnlineTravelTours/common/nav-links.php');
// List of icons
require($_SERVER['DOCUMENT_ROOT'].'/OnlineTravelTours/common/icons.php');
// Database Connection 
require($_SERVER['DOCUMENT_ROOT'].'/OnlineTravelTours/common/database/dbconnect.php');
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <?php require( $_SERVER['DOCUMENT_ROOT'].'/OnlineTravelTours/common/head.php'); ?>
</head>
<body>
  <!-- Paradise Chaser Logo -->
  <nav class="navbar navbar-expand-lg navbar-dark teal-color">
    <a class="navbar-brand" href="<?=$dashboard;?>">
      <img src="<?= $imagePath; ?>" class="paradise-logo" alt="paradise-chaser logo">
    </a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#toggleNav">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="toggleNav">
      <div class="col-8"></div>
      <!-- Contact-Address-Email-Login information -->
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#" class="nav-link"><img src="<?= $user; ?>" class="icon"/> Hi <?= $_SESSION['login-admin-title'];?> </a></li>
        <li><a href="<?= $logoutPath; ?>" class="nav-link"><img src="<?= $user; ?>" class="icon"/> Log out </a></li>
      </ul>
    </nav>
  </div>
</nav>

<div class="container-fluid h-100">
  <div class="row h-100">
    <aside class="col-12 col-md-2 p-0">
      <nav class="navbar navbar-expand flex-md-column flex-row align-items-start py-2">
        <div class="collapse navbar-collapse">
          <ul class="flex-md-column flex-row navbar-nav w-100 justify-content-between dash-list" >
          
            <li class="nav-item  nav-dash pl-0 dropdown">
              <a class="nav-link nav-dash pl-0 nav-dash" href="<?= $dashboard; ?>"
                id="dashDrop">
                <img src="<?= $dash;?>" class="icon">
                <span class="d-none d-md-inline">Dashboard</span> 
              </a>
            </li>

            <li class="nav-item  nav-dash pl-0 dropdown">

              <a class="nav-link nav-dash pl-0 nav-dash dropdown-toggle" href="<?= $dashboard; ?>"
                id="userDrop" data-toggle="dropdown">
                <img src="<?= $userDash;?>" class="icon">
                <span class="d-none d-md-inline">User</span> 
                <!-- <span class="badge badge-primary">2</span> -->
              </a>

              <div class="dropdown-menu" aria-labelledby="userDrop">
                <a class="dropdown-item" href="<?=$listUser;?>">List of Users 
                <!-- <span class="badge badge-danger">2</span></a> -->
                <div class="dropdown-divider"></div>

                <a class="dropdown-item" href="<?=$blockedUser;?>">Blocked Users</a>
              </div>
            </li>
            <li class="nav-item  nav-dash pl-0 dropdown">

              <a class="nav-link nav-dash pl-0 nav-dash dropdown-toggle" href="<?= $dashboard; ?>"
                id="packageDrop" data-toggle="dropdown">
                <img src="<?= $package;?>" class="icon">
                <span class="d-none d-md-inline">Package</span> 
                <!-- <span class="badge badge-primary">2</span> -->
              </a>

              <div class="dropdown-menu" aria-labelledby="packageDrop">
                <a class="dropdown-item" href="#">Create New Package</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">List of Packages</a>
              </div>
            </li>

            <li class="nav-item  nav-dash pl-0 dropdown">
            
              <a class="nav-link nav-dash pl-0 nav-dash dropdown-toggle" href="<?= $dashboard; ?>"
                id="carrentDrop" data-toggle="dropdown">
                <img src="<?= $car;?>" class="icon">
                <span class="d-none d-md-inline">Car Rental</span> 
                <!-- <span class="badge badge-primary">2</span> -->
              </a>

              <div class="dropdown-menu" aria-labelledby="carrentDrop">
                <a class="dropdown-item" href="<?= $createCar; ?>">Create New Car</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">List of Cars</a>
              </div>
            </li>

            <li class="nav-item  nav-dash pl-0 dropdown">
              <a class="nav-link nav-dash pl-0 nav-dash dropdown-toggle" href="<?= $dashboard; ?>"
                id="hotelDrop" data-toggle="dropdown">
                <img src="<?= $hotel;?>" class="icon">
                <span class="d-none d-md-inline">Hotel</span> 
                <!-- <span class="badge badge-primary">2</span> -->
              </a>

              <div class="dropdown-menu" aria-labelledby="hotelDrop">
                <a class="dropdown-item" href="#">Create New Hotel</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">List of Hotels</a>
              </div>
            </li>

          </ul>
        </div>
      </nav>
    </aside>
