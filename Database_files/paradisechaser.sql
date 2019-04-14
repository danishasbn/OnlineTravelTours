-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2019 at 08:33 AM
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
(1, 'ABC Car Rental co ltd', ''),
(2, 'First Car Rental', ''),
(3, 'Europ Car Mauritius', '');

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
  `car_rental_company_description` varchar(200) NOT NULL,
  `conditionApply` varchar(200) NOT NULL,
  `packageDetails` varchar(200) NOT NULL
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
(1, '0%'),
(2, '20%'),
(3, '30%'),
(4, '40%');

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
  `discount_id` int(11) NOT NULL
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
(1, 'Rose-Hill'),
(2, 'Vacoas Phoenix');

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
(5, 'admin', 'admin', 'paradisechaser2019@gmail.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', '', '', '', 0, 'Admin', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_carrental_company`
--
ALTER TABLE `tbl_carrental_company`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_car_rental`
--
ALTER TABLE `tbl_car_rental`
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
-- Indexes for table `tbl_pickuppoint`
--
ALTER TABLE `tbl_pickuppoint`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_car_rental`
--
ALTER TABLE `tbl_car_rental`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `tbl_discount`
--
ALTER TABLE `tbl_discount`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `tbl_hotel`
--
ALTER TABLE `tbl_hotel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_pickuppoint`
--
ALTER TABLE `tbl_pickuppoint`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
