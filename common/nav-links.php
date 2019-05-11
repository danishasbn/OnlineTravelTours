<?php
//Get Project folder full path
$fullPath                 =  realpath($_SERVER['DOCUMENT_ROOT']);
//Home Page Nav-Links
$homepage                 = 'http://localhost:'.$_SERVER['SERVER_PORT'].'/OnlineTravelTours/index.php';
$Packages                 = 'http://localhost:'.$_SERVER['SERVER_PORT'].'/OnlineTravelTours/views/packages/packages.php';
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
$myShoppingCart           = 'http://localhost:'.$_SERVER['SERVER_PORT'].'/OnlineTravelTours/views/shopping-cart.php';

// Dashboard Nav-Links

// User
$dashboard                = 'http://localhost:'.$_SERVER['SERVER_PORT'].'/OnlineTravelTours/dashboard/dashboard.php';
$listUser                 = 'http://localhost:'.$_SERVER['SERVER_PORT'].'/OnlineTravelTours/dashboard/admin/user/list-user.php';
$blockedUser              = 'http://localhost:'.$_SERVER['SERVER_PORT'].'/OnlineTravelTours/dashboard/admin/user/blocked-user.php';

// Car
$createCar                = 'http://localhost:'.$_SERVER['SERVER_PORT'].'/OnlineTravelTours/dashboard/admin/carrental/create-car-rental.php';
$listCar                  = 'http://localhost:'.$_SERVER['SERVER_PORT'].'/OnlineTravelTours/dashboard/admin/carrental/list-of-carrental.php';

// Hotel
$createHotel              = 'http://localhost:'.$_SERVER['SERVER_PORT'].'/OnlineTravelTours/dashboard/admin/hotels/create-hotel.php';
$listHotel                = 'http://localhost:'.$_SERVER['SERVER_PORT'].'/OnlineTravelTours/dashboard/admin/hotels/list-of-hotels.php';

// Package
$createPackage            = 'http://localhost:'.$_SERVER['SERVER_PORT'].'/OnlineTravelTours/dashboard/admin/package/create-package.php';
$listPackage              = 'http://localhost:'.$_SERVER['SERVER_PORT'].'/OnlineTravelTours/dashboard/admin/package/list-of-package.php';

// Discount 
$createDiscount           = 'http://localhost:'.$_SERVER['SERVER_PORT'].'/OnlineTravelTours/dashboard/admin/discount/create-discount.php';

// Pickup Point
$createPickup             = 'http://localhost:'.$_SERVER['SERVER_PORT'].'/OnlineTravelTours/dashboard/admin/pickuppoint/create-pickuppoint.php';

// CRC
$createCRC                = 'http://localhost:'.$_SERVER['SERVER_PORT'].'/OnlineTravelTours/dashboard/admin/crc/create-crc.php';

// CRUD Settings
$createDays                = 'http://localhost:'.$_SERVER['SERVER_PORT'].'/OnlineTravelTours/dashboard/admin/crud-operations/days/create-days.php';
$createGallery             = 'http://localhost:'.$_SERVER['SERVER_PORT'].'/OnlineTravelTours/dashboard/admin/crud-operations/gallery/create-gallery.php';
$createOccupacy            = 'http://localhost:'.$_SERVER['SERVER_PORT'].'/OnlineTravelTours/dashboard/admin/crud-operations/occupacy/create-occupacy.php';
$createRoomType            = 'http://localhost:'.$_SERVER['SERVER_PORT'].'/OnlineTravelTours/dashboard/admin/crud-operations/roomType/create-roomType.php';
$createMealType            = 'http://localhost:'.$_SERVER['SERVER_PORT'].'/OnlineTravelTours/dashboard/admin/crud-operations/mealType/create-mealType.php';

?>
