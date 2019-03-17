<?php
//Get Project folder full path
$fullPath                 =  realpath($_SERVER['DOCUMENT_ROOT']);
//Home Page Nav-Links
$homepage                 = 'http://localhost:'.$_SERVER['SERVER_PORT'].'/OnlineTravelTours/index.php';
$travelPackages           = 'http://localhost:'.$_SERVER['SERVER_PORT'].'/OnlineTravelTours/views/travel/travel.php';
$hotelPackages            = 'http://localhost:'.$_SERVER['SERVER_PORT'].'/OnlineTravelTours/views/hotel/hotel.php';
$activityPackages         = 'http://localhost:'.$_SERVER['SERVER_PORT'].'/OnlineTravelTours/views/activity/activity.php';
$carRental                = 'http://localhost:'.$_SERVER['SERVER_PORT'].'/OnlineTravelTours/views/car-rental/carrent.php';
$about                    = 'http://localhost:'.$_SERVER['SERVER_PORT'].'/OnlineTravelTours/views/about-us.php';
$restaurantPackages       = 'http://localhost:'.$_SERVER['SERVER_PORT'].'/OnlineTravelTours/views/restaurant/restaurant.php';

// Database Connection
// $dbconnect                = 'http://localhost:'.$_SERVER['SERVER_PORT'].'/OnlineTravelTours/database/dbconnect.php';


// Login + Register + Logout Path 
$registerPath             = 'http://localhost:'.$_SERVER['SERVER_PORT'].'/OnlineTravelTours/register.php';
$loginPath                = 'http://localhost:'.$_SERVER['SERVER_PORT'].'/OnlineTravelTours/login.php';
$logoutPath               = 'http://localhost:'.$_SERVER['SERVER_PORT'].'/OnlineTravelTours/logout.php';
$myDataPath               = 'http://localhost:'.$_SERVER['SERVER_PORT'].'/OnlineTravelTours/views/user/myData.php';

// Dashboard Nav-Links

// User
$dashboard                = 'http://localhost:'.$_SERVER['SERVER_PORT'].'/OnlineTravelTours/dashboard/dashboard.php';
$createUser               = 'http://localhost:'.$_SERVER['SERVER_PORT'].'/OnlineTravelTours/dashboard/admin/user/create-user.php';
$listUser                 = 'http://localhost:'.$_SERVER['SERVER_PORT'].'/OnlineTravelTours/dashboard/admin/user/list-user.php';
$blockedUser              = 'http://localhost:'.$_SERVER['SERVER_PORT'].'/OnlineTravelTours/dashboard/admin/user/blocked-user.php';

// Package
// Booking
//Website Content
//Settings


?>
