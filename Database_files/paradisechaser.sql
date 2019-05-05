-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2019 at 10:30 AM
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

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cart_order`
--

CREATE TABLE `tbl_cart_order` (
  `cart_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

-- --------------------------------------------------------

--
-- Table structure for table `tbl_car_rental_gallery`
--

CREATE TABLE `tbl_car_rental_gallery` (
  `gallery_id` int(11) NOT NULL,
  `car_rental_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(28, '30');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gallery`
--

CREATE TABLE `tbl_gallery` (
  `id` int(11) NOT NULL,
  `imagePath` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

-- --------------------------------------------------------

--
-- Table structure for table `tbl_hotel_gallery`
--

CREATE TABLE `tbl_hotel_gallery` (
  `hotel_id` int(11) NOT NULL,
  `gallery_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(1, 'Half-Board', 200),
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

-- --------------------------------------------------------

--
-- Table structure for table `tbl_package`
--

CREATE TABLE `tbl_package` (
  `id` int(11) NOT NULL,
  `packageTitle` varchar(200) NOT NULL,
  `price` float NOT NULL,
  `discount_id` int(11) NOT NULL,
  `purchaseInclude` varchar(200) NOT NULL,
  `packageDetails` varchar(200) NOT NULL,
  `dateFrom` varchar(100) NOT NULL,
  `dateTo` varchar(100) NOT NULL,
  `cover_image` varchar(200) NOT NULL,
  `package_type_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_package_gallery`
--

CREATE TABLE `tbl_package_gallery` (
  `package_id` int(11) NOT NULL,
  `gallery_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_car_rental`
--
ALTER TABLE `tbl_car_rental`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tbl_days`
--
ALTER TABLE `tbl_days`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_discount`
--
ALTER TABLE `tbl_discount`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT for table `tbl_hotel`
--
ALTER TABLE `tbl_hotel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_orderhotel`
--
ALTER TABLE `tbl_orderhotel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_package`
--
ALTER TABLE `tbl_package`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

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
