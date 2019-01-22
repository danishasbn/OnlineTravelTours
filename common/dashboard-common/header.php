<?php
// Nav Links
require($_SERVER['DOCUMENT_ROOT'].'/OnlineTravelTours/common/nav-links.php');
// List of icons
require($_SERVER['DOCUMENT_ROOT'].'/OnlineTravelTours/common/icons.php');
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
        <li><a href="#" class="nav-link"><img src="<?= $user; ?>" class="icon"/> User </a></li>
        <li><a href="#" class="nav-link"><img src="<?= $user; ?>" class="icon"/> Log out </a></li>
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

              <a class="nav-link nav-dash pl-0 nav-dash dropdown-toggle" href="<?= $dashboard; ?>"
                id="userDrop" data-toggle="dropdown">
                <img src="<?= $userDash;?>" class="icon">
                <span class="d-none d-md-inline">User</span> <span class="badge badge-primary">2</span>
              </a>

              <div class="dropdown-menu" aria-labelledby="userDrop">
                <a class="dropdown-item" href="<?=$createUser;?>">Create New User</a>
                <div class="dropdown-divider"></div>

                <a class="dropdown-item" href="<?=$listUser;?>">List of Users <span class="badge badge-danger">2</span></a>
                <div class="dropdown-divider"></div>

                <a class="dropdown-item" href="<?=$blockedUser;?>">Blocked Users</a>
              </div>
            </li>
            <li class="nav-item  nav-dash pl-0 dropdown">

              <a class="nav-link nav-dash pl-0 nav-dash dropdown-toggle" href="<?= $dashboard; ?>"
                id="packageDrop" data-toggle="dropdown">
                <img src="<?= $package;?>" class="icon">
                <span class="d-none d-md-inline">Package</span> <span class="badge badge-primary">2</span>
              </a>

              <div class="dropdown-menu" aria-labelledby="packageDrop">
                <a class="dropdown-item" href="#">Create New Package</a>
                <div class="dropdown-divider"></div>

                <a class="dropdown-item" href="#">Travel Packages</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Hotel Packages</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Activity Packages</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Restaurant Packages</a>
                <div class="dropdown-divider"></div>

              </div>
            </li>

            <li class="nav-item  nav-dash pl-0 dropdown">

              <a class="nav-link nav-dash pl-0 nav-dash dropdown-toggle" href="<?= $dashboard; ?>"
                id="bookingDrop" data-toggle="dropdown">
                <img src="<?= $booking;?>" class="icon">
                <span class="d-none d-md-inline">Booking</span> <span class="badge badge-primary">2</span>
              </a>

              <div class="dropdown-menu" aria-labelledby="bookingDrop">
                <a class="dropdown-item" href="#">Create New Booking</a>
                <div class="dropdown-divider"></div>

                <a class="dropdown-item" href="#">List of Bookings</a>
                <div class="dropdown-divider"></div>

                <a class="dropdown-item" href="#">Confirmed Bookings</a>
                <div class="dropdown-divider"></div>

                <a class="dropdown-item" href="#">Cancelled Bookings</a>
              </div>
            </li>

            <li class="nav-item  nav-dash pl-0 dropdown">

              <a class="nav-link nav-dash pl-0 nav-dash dropdown-toggle" href="<?= $dashboard; ?>"
                id="bookingDrop" data-toggle="dropdown">
                <img src="<?= $plus;?>" class="icon">
                <span class="d-none d-md-inline">Ad ons</span>
              </a>

              <div class="dropdown-menu" aria-labelledby="bookingDrop">
                <a class="dropdown-item" href="#">Create New Package Type</a>
                <div class="dropdown-divider"></div>

                <a class="dropdown-item" href="#">Create New Room Type</a>
                <div class="dropdown-divider"></div>

                <a class="dropdown-item" href="#">Create New Meal Type</a>
                <div class="dropdown-divider"></div>

                <a class="dropdown-item" href="#">Create New Occupant</a>
                <div class="dropdown-divider"></div>

                <a class="dropdown-item" href="#">Create New Discount</a>
                <div class="dropdown-divider"></div>

              </div>
            </li>

            <li class="nav-item  nav-dash pl-0 dropdown">

              <a class="nav-link nav-dash pl-0 nav-dash dropdown-toggle" href="<?= $dashboard; ?>"
                id="bookingDrop" data-toggle="dropdown">
                <img src="<?= $webContent;?>" class="icon">
                <span class="d-none d-md-inline">Website content</span> <span class="badge badge-primary">2</span>
              </a>

              <div class="dropdown-menu" aria-labelledby="bookingDrop">
                <a class="dropdown-item" href="#">About us</a>
                <div class="dropdown-divider"></div>

                <a class="dropdown-item" href="#">Contact information</a>
                <div class="dropdown-divider"></div>

                <a class="dropdown-item" href="#">Social Media</a>
                <div class="dropdown-divider"></div>

                <a class="dropdown-item" href="#">Cancelled Bookings</a>
                <div class="dropdown-divider"></div>

                <a class="dropdown-item" href="#">Review <span class="badge badge-danger">1</span></a>

              </div>
            </li>

            <li class="nav-item">
              <a class="nav-link nav-dash pl-0" href="<?= $dashboard; ?>"><img src="<?= $setting;?>" class="icon">  <span class="d-none d-md-inline">Settings</span></a>
            </li>



          </ul>
        </div>
      </nav>
    </aside>
