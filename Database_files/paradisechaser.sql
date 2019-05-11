-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2019 at 10:33 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `paradisechaser`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_carrental_company`
--

CREATE TABLE `tbl_carrental_company` (
  `id` int(11) NOT NULL,
  `company_name` varchar(200) NOT NULL,
  `description` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_carrental_company`
--

INSERT INTO `tbl_carrental_company` (`id`, `company_name`, `description`) VALUES
(1, 'ABC Car Rental co ltd', 'DESC GOES HERE'),
(2, 'First Car Rental', 'DESC GOES HERE'),
(3, 'Europ Car Mauritius', 'DESC GOES HERE'),
(4, 'Company', 'DESC GOES HERE');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `id` int(11) NOT NULL,
  `user` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_cart`
--

INSERT INTO `tbl_cart` (`id`, `user`) VALUES
(14, 'zazu@mailinator.com'),
(15, 'cypiza@mailinator.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cart_order`
--

CREATE TABLE `tbl_cart_order` (
  `cart_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_cart_order`
--

INSERT INTO `tbl_cart_order` (`cart_id`, `order_id`) VALUES
(14, 14),
(14, 0),
(14, 2),
(14, 3),
(14, 4),
(15, 1),
(15, 2),
(15, 3),
(15, 4),
(15, 15),
(15, 5),
(15, 5),
(15, 16),
(15, 6);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_car_rental`
--

CREATE TABLE `tbl_car_rental` (
  `id` int(11) NOT NULL,
  `car_title` varchar(200) NOT NULL,
  `car_rental_company_id` int(11) NOT NULL,
  `pickup_id` int(11) NOT NULL,
  `transmission` varchar(100) NOT NULL,
  `price` float NOT NULL,
  `year` int(11) NOT NULL,
  `freeDelivery` varchar(50) NOT NULL,
  `discount_id` int(11) NOT NULL,
  `conditionApply` varchar(200) NOT NULL,
  `packageDetails` varchar(200) NOT NULL,
  `dateFrom` varchar(150) NOT NULL,
  `dateTo` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_car_rental`
--

INSERT INTO `tbl_car_rental` (`id`, `car_title`, `car_rental_company_id`, `pickup_id`, `transmission`, `price`, `year`, `freeDelivery`, `discount_id`, `conditionApply`, `packageDetails`, `dateFrom`, `dateTo`) VALUES
(20, 'Hyundai i20 White Pearl 2012 Manual ', 1, 3, 'Manual', 1000, 2012, 'Free Delivery', 27, 'A Minimum of 3 days of rental is required\r\nConditions:  \r\nMinimum age: 21 years old \r\nCar Availability: To confirm, please contact Paradise Chase before payment \r\nReservation: After payment, phone for', 'Fully Executive\r\nTransmission: Manual\r\nFuel: Petrol\r\nNumber of seats: 5 Pax\r\nStorage space: 5 \r\nNumber of doors: 4\r\nAir Condition\r\nRadio with CD, MP3 & USB, Bluetooth', '07/05/2019', '31/05/2019');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_car_rental_gallery`
--

CREATE TABLE `tbl_car_rental_gallery` (
  `gallery_id` int(11) NOT NULL,
  `car_rental_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_car_rental_gallery`
--

INSERT INTO `tbl_car_rental_gallery` (`gallery_id`, `car_rental_id`) VALUES
(115, 20);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_days`
--

CREATE TABLE `tbl_days` (
  `id` int(11) NOT NULL,
  `days` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_days`
--

INSERT INTO `tbl_days` (`id`, `days`) VALUES
(1, 3),
(2, 5),
(3, 6),
(4, 7),
(5, 8),
(6, 11);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_discount`
--

CREATE TABLE `tbl_discount` (
  `id` int(11) NOT NULL,
  `discount_percent` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_discount`
--

INSERT INTO `tbl_discount` (`id`, `discount_percent`) VALUES
(27, '20'),
(28, '30'),
(29, '0');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gallery`
--

CREATE TABLE `tbl_gallery` (
  `id` int(11) NOT NULL,
  `imagePath` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_gallery`
--

INSERT INTO `tbl_gallery` (`id`, `imagePath`) VALUES
(108, 'Hotel Indigo-Scottsdale-1.jpg'),
(109, 'Hotel Indigo-Scottsdale-3.jpg'),
(110, 'Hotel Indigo-Scottsdale-4.jpg'),
(111, 'Kingsley Inn And Suites-1.jpg'),
(112, 'Kingsley Inn And Suites-2.jpeg'),
(113, 'Kingsley Inn And Suites-3.jpeg'),
(114, 'Kingsley Inn And Suites-4.jpg'),
(115, 'Hyundai i20 White Pearl.jpg'),
(116, 'Inn At Woodhaven-4.jpeg'),
(117, 'Inn At Woodhaven-5.jpg'),
(118, 'Inn At Woodhaven-1.jpg'),
(119, 'Inn At Woodhaven-2.jpeg'),
(120, 'Inn At Woodhaven-3.jpeg'),
(121, 'Inn At Woodhaven-4.jpeg'),
(122, 'Inn At Woodhaven-5.jpg'),
(123, 'FordRaptor.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_hotel`
--

CREATE TABLE `tbl_hotel` (
  `id` int(11) NOT NULL,
  `hotelName` varchar(200) NOT NULL,
  `price` float NOT NULL,
  `dateFrom` varchar(100) NOT NULL,
  `dateTo` varchar(100) NOT NULL,
  `purchaseInclude` varchar(200) NOT NULL,
  `packageDetails` varchar(200) NOT NULL,
  `discount_id` int(11) NOT NULL,
  `cover_image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_hotel`
--

INSERT INTO `tbl_hotel` (`id`, `hotelName`, `price`, `dateFrom`, `dateTo`, `purchaseInclude`, `packageDetails`, `discount_id`, `cover_image`) VALUES
(2, 'Hotel Indigo Scottsdale', 1500, '09/05/2019', '31/05/2019', 'Arrival / Departure Times:\r\nCheck-In: 14:00 \r\nCheck-Out: 11:00\r\nConditions: \r\nPrice may vary between days, months and seasons (See Calendar for price for specific date)\r\nMauritian ID card or Resident ', 'Meal Plan: Half-Board, Full-Board or All-Inclusive\r\nMeals: Breakfast, Lunch & Dinner\r\nUnlimited Drinks: Local bottled spirits, beers, soft drinks, juices\r\nStarts at 14:00 on arrival date and ends at 1', 27, 'Hotel Indigo-Scottsdale-2.jpg'),
(3, 'Kingsley Inn And Suites', 1500, '10/05/2019', '22/08/2019', 'Free: Shuttle to the private Beach Club La Plage by Evaco Holidays\r\nPrivate Swimming Pool in Garden \r\nArrival / Departure Times:\r\nCheck-in: 14:00\r\nCheck-out: 11:00 \r\nConditions: \r\nPrice may vary betwe', 'Save 30%\r\nMeal Plan: Bed & Breakfast\r\nMeals: Continental Breakfast with fresh pastries served in room by Maid\r\nDrinks are not included and payable at Hotel\r\nFree: shuttle for the private Beach Club \'L', 28, 'Kingsley Inn And Suites-3.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_hotel_gallery`
--

CREATE TABLE `tbl_hotel_gallery` (
  `hotel_id` int(11) NOT NULL,
  `gallery_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_hotel_gallery`
--

INSERT INTO `tbl_hotel_gallery` (`hotel_id`, `gallery_id`) VALUES
(2, 108),
(2, 109),
(2, 110),
(3, 111),
(3, 112),
(3, 113),
(3, 114);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_meal_type`
--

CREATE TABLE `tbl_meal_type` (
  `id` int(11) NOT NULL,
  `meal_type` varchar(200) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_meal_type`
--

INSERT INTO `tbl_meal_type` (`id`, `meal_type`, `price`) VALUES
(1, 'Half-Board', 0),
(2, 'Full-Board', 500),
(3, 'All-Inclusive', 1000);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_occupacy`
--

CREATE TABLE `tbl_occupacy` (
  `id` int(11) NOT NULL,
  `occupacy` varchar(200) NOT NULL,
  `occupacy_value` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_occupacy`
--

INSERT INTO `tbl_occupacy` (`id`, `occupacy`, `occupacy_value`) VALUES
(1, '1 Adult', 1),
(2, '2 Adults', 2),
(3, '3 Adults', 3),
(4, '2 Adults + 1 Child (0-2)', 2),
(5, '2 Adults + 1 Child (3-11)', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ordercarrental`
--

CREATE TABLE `tbl_ordercarrental` (
  `id` int(11) NOT NULL,
  `car_rental_id` int(11) NOT NULL,
  `no_of_days` varchar(50) NOT NULL,
  `total_price` int(11) NOT NULL,
  `order_category` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_ordercarrental`
--

INSERT INTO `tbl_ordercarrental` (`id`, `car_rental_id`, `no_of_days`, `total_price`, `order_category`) VALUES
(14, 20, '5', 5000, 'car rental'),
(15, 20, '3', 3000, 'car rental'),
(16, 20, '11', 11000, 'car rental');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_orderhotel`
--

CREATE TABLE `tbl_orderhotel` (
  `id` int(11) NOT NULL,
  `hotel_id` int(11) NOT NULL,
  `room_type_id` int(11) NOT NULL,
  `occupacy_id` int(11) NOT NULL,
  `meal_type_id` int(11) NOT NULL,
  `check_in` varchar(200) NOT NULL,
  `check_out` varchar(200) NOT NULL,
  `nights` int(11) NOT NULL,
  `order_category` varchar(150) NOT NULL,
  `total_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_orderhotel`
--

INSERT INTO `tbl_orderhotel` (`id`, `hotel_id`, `room_type_id`, `occupacy_id`, `meal_type_id`, `check_in`, `check_out`, `nights`, `order_category`, `total_price`) VALUES
(1, 3, 1, 1, 1, '10-05-2019', '13-05-2019', 2, 'hotel', 5100),
(2, 3, 1, 1, 1, '10-05-2019', '13-05-2019', 2, 'hotel', 5100),
(3, 2, 2, 2, 1, '24-05-2019', '25-05-2019', 3, 'hotel', 5400),
(4, 2, 1, 1, 1, '09-05-2019', '22-05-2019', 13, 'hotel', 22100),
(5, 2, 2, 1, 2, '23-05-2019', '24-05-2019', 1, 'hotel', 3000);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_orderpackage`
--

CREATE TABLE `tbl_orderpackage` (
  `id` int(11) NOT NULL,
  `package_type_id` int(11) NOT NULL,
  `total_price` int(11) NOT NULL,
  `checkin` varchar(200) NOT NULL,
  `package_id` int(11) NOT NULL,
  `order_category` varchar(200) NOT NULL,
  `room_type_id` int(11) NOT NULL,
  `meal_type_id` int(11) NOT NULL,
  `occupacy_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_orderpackage`
--

INSERT INTO `tbl_orderpackage` (`id`, `package_type_id`, `total_price`, `checkin`, `package_id`, `order_category`, `room_type_id`, `meal_type_id`, `occupacy_id`) VALUES
(2, 1, 1200, '07/05/2019', 1, 'package', 1, 1, 1),
(3, 1, 6400, '22/05/2019', 1, 'package', 2, 3, 2),
(4, 2, 5000, '', 2, 'package', 0, 0, 0),
(5, 1, 6400, '18/05/2019', 1, 'package', 2, 3, 5),
(6, 2, 5000, '', 2, 'package', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_package`
--

CREATE TABLE `tbl_package` (
  `id` int(11) NOT NULL,
  `packageTitle` varchar(200) NOT NULL,
  `price` float NOT NULL,
  `discount_id` int(11) NOT NULL,
  `purchaseInclude` text NOT NULL,
  `packageDetails` text NOT NULL,
  `dateFrom` varchar(100) NOT NULL,
  `dateTo` varchar(100) NOT NULL,
  `cover_image` varchar(200) NOT NULL,
  `package_type_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_package`
--

INSERT INTO `tbl_package` (`id`, `packageTitle`, `price`, `discount_id`, `purchaseInclude`, `packageDetails`, `dateFrom`, `dateTo`, `cover_image`, `package_type_id`) VALUES
(1, 'Special Day package at Inn At Woodhaven May Offer ', 1200, 29, 'Duration: 7 Hours\r\nIncludes: Day Use Room\r\nSpa Discount: 20% on all spa treatment \r\nFree access to swimming pool\r\nFood & Beverages: \r\n3-Course Lunch \r\nTea Time: 15:00\r\nDrinks that are not included in this offer are payable directly at the Hotel \r\nArrival / Departure: \r\nArrival Time: 10:00\r\nDeparture Time: 17:00\r\nLocation: Pereybere\r\nConditions: \r\nReservation: Must be done and confirmed 48 Hours in advance of arrival\r\nRoom Maximum occupancy: 2 Adults\r\nPrice is per Day Use Room\r\npolicies of hotel must be followed, if not, hotel has right to ask you to leave, no refund will be given\r\nComplaints: If customer is to file a complaint, it is valid if filed with merchant prior to Check-out\r\nMauritian ID card or Resident permit must be shown by all guests upon check-in at the hotel\r\nFailure to do so will entitle the Hotel to ch', 'Food & Beverages: \r\n3-Course Lunch \r\nTea Time: 15:00\r\nDrinks that are not included in this offer are payable directly at the Hotel \r\nFree activities\r\nLand: Social game, darts, carome\r\nWater: Swimming Pool\r\nFree secured parking', '06/05/2019', '31/05/2019', 'Inn At Woodhaven-2.jpeg', 1),
(2, 'Ford Raptor Three days Booking only', 5000, 29, 'description', 'description', '06/05/2019', '31/05/2019', 'FordRaptor.jpg', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_package_gallery`
--

CREATE TABLE `tbl_package_gallery` (
  `package_id` int(11) NOT NULL,
  `gallery_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_package_gallery`
--

INSERT INTO `tbl_package_gallery` (`package_id`, `gallery_id`) VALUES
(1, 118),
(1, 119),
(1, 120),
(1, 121),
(1, 122),
(2, 123);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_package_type`
--

CREATE TABLE `tbl_package_type` (
  `id` int(11) NOT NULL,
  `package_type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_package_type`
--

INSERT INTO `tbl_package_type` (`id`, `package_type`) VALUES
(1, 'Hotel'),
(2, 'Car Rent'),
(3, 'Travel');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pickuppoint`
--

CREATE TABLE `tbl_pickuppoint` (
  `id` int(11) NOT NULL,
  `pickup_place` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pickuppoint`
--

INSERT INTO `tbl_pickuppoint` (`id`, `pickup_place`) VALUES
(1, 'Vacoas Phoenix'),
(3, 'Rose Hill'),
(4, 'Curepipe');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_room_type`
--

CREATE TABLE `tbl_room_type` (
  `id` int(11) NOT NULL,
  `room_type` varchar(200) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_room_type`
--

INSERT INTO `tbl_room_type` (`id`, `room_type`, `price`) VALUES
(1, 'Standard', 0),
(2, 'Deluxe', 1000),
(3, 'Family', 1200);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `country` varchar(50) NOT NULL,
  `phone` int(10) NOT NULL,
  `role_type` varchar(10) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `firstname`, `lastname`, `email`, `password`, `address`, `gender`, `country`, `phone`, `role_type`, `status`) VALUES
(1, 'Tom', 'Nasha', 'cypiza@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 'Sunt qui consectetur amet dele', 'Female', 'Mauritius', 12345, 'Customer', 1),
(2, 'Justine', 'Cummings', 'siramavyfo@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 'Sunt qui consectetur amet dele', 'Female', 'Mauritius', 11111111, 'Customer', 1),
(3, 'Mercedes', 'Simpson', 'nysymeb@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 'Sunt qui consectetur amet dele', 'Female', 'Mauritius', 51234567, 'Customer', 0),
(5, 'admin', 'admin', 'paradisechaser2019@gmail.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', '', '', '', 0, 'Admin', 1),
(6, 'Tarik', 'Nunez', 'zazu@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 'Recusandae Qui minima irure ut rerum voluptatem aut nulla laborum', 'Male', 'Mauritius', 11111111, 'Customer', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_carrental_company`
--
ALTER TABLE `tbl_carrental_company`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_car_rental`
--
ALTER TABLE `tbl_car_rental`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_car_rental_gallery`
--
ALTER TABLE `tbl_car_rental_gallery`
  ADD KEY `car_rental_id` (`car_rental_id`),
  ADD KEY `gallery_id` (`gallery_id`);

--
-- Indexes for table `tbl_days`
--
ALTER TABLE `tbl_days`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_discount`
--
ALTER TABLE `tbl_discount`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_hotel`
--
ALTER TABLE `tbl_hotel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_hotel_gallery`
--
ALTER TABLE `tbl_hotel_gallery`
  ADD KEY `hotel_id` (`hotel_id`),
  ADD KEY `gallery_id` (`gallery_id`);

--
-- Indexes for table `tbl_meal_type`
--
ALTER TABLE `tbl_meal_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_occupacy`
--
ALTER TABLE `tbl_occupacy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_ordercarrental`
--
ALTER TABLE `tbl_ordercarrental`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_orderhotel`
--
ALTER TABLE `tbl_orderhotel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_orderpackage`
--
ALTER TABLE `tbl_orderpackage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_package`
--
ALTER TABLE `tbl_package`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_package_gallery`
--
ALTER TABLE `tbl_package_gallery`
  ADD KEY `gallery_id` (`gallery_id`),
  ADD KEY `package_id` (`package_id`);

--
-- Indexes for table `tbl_package_type`
--
ALTER TABLE `tbl_package_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_pickuppoint`
--
ALTER TABLE `tbl_pickuppoint`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_room_type`
--
ALTER TABLE `tbl_room_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_carrental_company`
--
ALTER TABLE `tbl_carrental_company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_car_rental`
--
ALTER TABLE `tbl_car_rental`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tbl_days`
--
ALTER TABLE `tbl_days`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_discount`
--
ALTER TABLE `tbl_discount`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;

--
-- AUTO_INCREMENT for table `tbl_hotel`
--
ALTER TABLE `tbl_hotel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_meal_type`
--
ALTER TABLE `tbl_meal_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_occupacy`
--
ALTER TABLE `tbl_occupacy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_ordercarrental`
--
ALTER TABLE `tbl_ordercarrental`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbl_orderhotel`
--
ALTER TABLE `tbl_orderhotel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_orderpackage`
--
ALTER TABLE `tbl_orderpackage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_package`
--
ALTER TABLE `tbl_package`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_package_type`
--
ALTER TABLE `tbl_package_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_pickuppoint`
--
ALTER TABLE `tbl_pickuppoint`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_room_type`
--
ALTER TABLE `tbl_room_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_car_rental_gallery`
--
ALTER TABLE `tbl_car_rental_gallery`
  ADD CONSTRAINT `tbl_car_rental_gallery_ibfk_1` FOREIGN KEY (`car_rental_id`) REFERENCES `tbl_car_rental` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `tbl_car_rental_gallery_ibfk_2` FOREIGN KEY (`gallery_id`) REFERENCES `tbl_gallery` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `tbl_hotel_gallery`
--
ALTER TABLE `tbl_hotel_gallery`
  ADD CONSTRAINT `tbl_hotel_gallery_ibfk_1` FOREIGN KEY (`hotel_id`) REFERENCES `tbl_hotel` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `tbl_hotel_gallery_ibfk_2` FOREIGN KEY (`gallery_id`) REFERENCES `tbl_gallery` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `tbl_package_gallery`
--
ALTER TABLE `tbl_package_gallery`
  ADD CONSTRAINT `tbl_package_gallery_ibfk_1` FOREIGN KEY (`gallery_id`) REFERENCES `tbl_gallery` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `tbl_package_gallery_ibfk_2` FOREIGN KEY (`package_id`) REFERENCES `tbl_package` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
