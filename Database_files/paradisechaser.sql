-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2019 at 08:08 PM
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
-- Table structure for table `tbl_airlines`
--

CREATE TABLE `tbl_airlines` (
  `id` int(11) NOT NULL,
  `airline` varchar(200) NOT NULL,
  `image_path` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_airlines`
--

INSERT INTO `tbl_airlines` (`id`, `airline`, `image_path`) VALUES
(1, 'Turkish Airline', 'http://www.stickpng.com/assets/images/587b50f844060909aa603a7e.png'),
(2, 'Air France', 'http://pluspng.com/img-png/air-france-logo-png-air-france-logo-1016.png'),
(3, 'Air Mauritius', 'https://logos-download.com/wp-content/uploads/2016/03/Air_Mauritius_logo.png'),
(4, 'Air Madagascar', 'https://www.airlinelogofinder.com/logos/converted/jpeg/air-madagascar.jpg'),
(5, 'Air Austral', 'https://upload.wikimedia.org/wikipedia/en/thumb/4/45/Air_Austral_logo_%282015%29.svg/1200px-Air_Austral_logo_%282015%29.svg.png'),
(6, 'Emirates airlines', 'https://upload.wikimedia.org/wikipedia/commons/thumb/d/d0/Emirates_logo.svg/967px-Emirates_logo.svg.png'),
(7, 'Qatar Airways', 'https://upload.wikimedia.org/wikipedia/commons/c/c2/Qatar_Airways_Logo.png'),
(8, 'null', 'null');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_booking_car_cart`
--

CREATE TABLE `tbl_booking_car_cart` (
  `id` int(11) NOT NULL,
  `booking_id` int(11) NOT NULL,
  `cart_id` int(11) NOT NULL,
  `booking_car_rental_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_booking_car_rental`
--

CREATE TABLE `tbl_booking_car_rental` (
  `id` int(11) NOT NULL,
  `orderReference` varchar(200) NOT NULL,
  `dateBooked` varchar(200) NOT NULL,
  `total` varchar(200) NOT NULL,
  `payment_option` varchar(200) NOT NULL,
  `payment_status` varchar(200) NOT NULL,
  `booking_voucher` varchar(200) NOT NULL,
  `pickup_place_id` int(11) NOT NULL,
  `time` varchar(200) NOT NULL,
  `pickup_date` varchar(200) NOT NULL,
  `return_date` varchar(200) NOT NULL,
  `pdf` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_booking_hotel`
--

CREATE TABLE `tbl_booking_hotel` (
  `id` int(11) NOT NULL,
  `orderReference` varchar(200) NOT NULL,
  `dateBooked` varchar(200) NOT NULL,
  `total` int(11) NOT NULL,
  `payment_option` varchar(200) NOT NULL,
  `payment_status` varchar(200) NOT NULL,
  `booking_voucher` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_booking_hotel_cart`
--

CREATE TABLE `tbl_booking_hotel_cart` (
  `id` int(11) NOT NULL,
  `booking_id` int(11) NOT NULL,
  `cart_id` int(11) NOT NULL,
  `booking_hotel_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_booking_package`
--

CREATE TABLE `tbl_booking_package` (
  `id` int(11) NOT NULL,
  `orderReference` varchar(200) NOT NULL,
  `dateBooked` varchar(200) NOT NULL,
  `total` int(11) NOT NULL,
  `payment_option` varchar(200) NOT NULL,
  `payment_status` varchar(200) NOT NULL,
  `booking_voucher` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_booking_package_cart`
--

CREATE TABLE `tbl_booking_package_cart` (
  `id` int(11) NOT NULL,
  `booking_id` int(11) NOT NULL,
  `cart_id` int(11) NOT NULL,
  `booking_package_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `id` int(11) NOT NULL,
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
-- Table structure for table `tbl_country`
--

CREATE TABLE `tbl_country` (
  `id` int(11) NOT NULL,
  `country_code` varchar(10) NOT NULL,
  `country_name` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_country`
--

INSERT INTO `tbl_country` (`id`, `country_code`, `country_name`) VALUES
(1, 'AF', 'Afghanistan'),
(2, 'AL', 'Albania'),
(3, 'DZ', 'Algeria'),
(4, 'DS', 'American Samoa'),
(5, 'AD', 'Andorra'),
(6, 'AO', 'Angola'),
(7, 'AI', 'Anguilla'),
(8, 'AQ', 'Antarctica'),
(9, 'AG', 'Antigua and Barbuda'),
(10, 'AR', 'Argentina'),
(11, 'AM', 'Armenia'),
(12, 'AW', 'Aruba'),
(13, 'AU', 'Australia'),
(14, 'AT', 'Austria'),
(15, 'AZ', 'Azerbaijan'),
(16, 'BS', 'Bahamas'),
(17, 'BH', 'Bahrain'),
(18, 'BD', 'Bangladesh'),
(19, 'BB', 'Barbados'),
(20, 'BY', 'Belarus'),
(21, 'BE', 'Belgium'),
(22, 'BZ', 'Belize'),
(23, 'BJ', 'Benin'),
(24, 'BM', 'Bermuda'),
(25, 'BT', 'Bhutan'),
(26, 'BO', 'Bolivia'),
(27, 'BA', 'Bosnia and Herzegovina'),
(28, 'BW', 'Botswana'),
(29, 'BV', 'Bouvet Island'),
(30, 'BR', 'Brazil'),
(31, 'IO', 'British Indian Ocean Territory'),
(32, 'BN', 'Brunei Darussalam'),
(33, 'BG', 'Bulgaria'),
(34, 'BF', 'Burkina Faso'),
(35, 'BI', 'Burundi'),
(36, 'KH', 'Cambodia'),
(37, 'CM', 'Cameroon'),
(38, 'CA', 'Canada'),
(39, 'CV', 'Cape Verde'),
(40, 'KY', 'Cayman Islands'),
(41, 'CF', 'Central African Republic'),
(42, 'TD', 'Chad'),
(43, 'CL', 'Chile'),
(44, 'CN', 'China'),
(45, 'CX', 'Christmas Island'),
(46, 'CC', 'Cocos (Keeling) Islands'),
(47, 'CO', 'Colombia'),
(48, 'KM', 'Comoros'),
(49, 'CG', 'Congo'),
(50, 'CK', 'Cook Islands'),
(51, 'CR', 'Costa Rica'),
(52, 'HR', 'Croatia (Hrvatska)'),
(53, 'CU', 'Cuba'),
(54, 'CY', 'Cyprus'),
(55, 'CZ', 'Czech Republic'),
(56, 'DK', 'Denmark'),
(57, 'DJ', 'Djibouti'),
(58, 'DM', 'Dominica'),
(59, 'DO', 'Dominican Republic'),
(60, 'TP', 'East Timor'),
(61, 'EC', 'Ecuador'),
(62, 'EG', 'Egypt'),
(63, 'SV', 'El Salvador'),
(64, 'GQ', 'Equatorial Guinea'),
(65, 'ER', 'Eritrea'),
(66, 'EE', 'Estonia'),
(67, 'ET', 'Ethiopia'),
(68, 'FK', 'Falkland Islands (Malvinas)'),
(69, 'FO', 'Faroe Islands'),
(70, 'FJ', 'Fiji'),
(71, 'FI', 'Finland'),
(72, 'FR', 'France'),
(73, 'FX', 'France, Metropolitan'),
(74, 'GF', 'French Guiana'),
(75, 'PF', 'French Polynesia'),
(76, 'TF', 'French Southern Territories'),
(77, 'GA', 'Gabon'),
(78, 'GM', 'Gambia'),
(79, 'GE', 'Georgia'),
(80, 'DE', 'Germany'),
(81, 'GH', 'Ghana'),
(82, 'GI', 'Gibraltar'),
(83, 'GK', 'Guernsey'),
(84, 'GR', 'Greece'),
(85, 'GL', 'Greenland'),
(86, 'GD', 'Grenada'),
(87, 'GP', 'Guadeloupe'),
(88, 'GU', 'Guam'),
(89, 'GT', 'Guatemala'),
(90, 'GN', 'Guinea'),
(91, 'GW', 'Guinea-Bissau'),
(92, 'GY', 'Guyana'),
(93, 'HT', 'Haiti'),
(94, 'HM', 'Heard and Mc Donald Islands'),
(95, 'HN', 'Honduras'),
(96, 'HK', 'Hong Kong'),
(97, 'HU', 'Hungary'),
(98, 'IS', 'Iceland'),
(99, 'IN', 'India'),
(100, 'IM', 'Isle of Man'),
(101, 'ID', 'Indonesia'),
(102, 'IR', 'Iran (Islamic Republic of)'),
(103, 'IQ', 'Iraq'),
(104, 'IE', 'Ireland'),
(105, 'IL', 'Israel'),
(106, 'IT', 'Italy'),
(107, 'CI', 'Ivory Coast'),
(108, 'JE', 'Jersey'),
(109, 'JM', 'Jamaica'),
(110, 'JP', 'Japan'),
(111, 'JO', 'Jordan'),
(112, 'KZ', 'Kazakhstan'),
(113, 'KE', 'Kenya'),
(114, 'KI', 'Kiribati'),
(115, 'KP', 'Korea, Democratic People\'s Republic of'),
(116, 'KR', 'Korea, Republic of'),
(117, 'XK', 'Kosovo'),
(118, 'KW', 'Kuwait'),
(119, 'KG', 'Kyrgyzstan'),
(120, 'LA', 'Lao People\'s Democratic Republic'),
(121, 'LV', 'Latvia'),
(122, 'LB', 'Lebanon'),
(123, 'LS', 'Lesotho'),
(124, 'LR', 'Liberia'),
(125, 'LY', 'Libyan Arab Jamahiriya'),
(126, 'LI', 'Liechtenstein'),
(127, 'LT', 'Lithuania'),
(128, 'LU', 'Luxembourg'),
(129, 'MO', 'Macau'),
(130, 'MK', 'Macedonia'),
(131, 'MG', 'Madagascar'),
(132, 'MW', 'Malawi'),
(133, 'MY', 'Malaysia'),
(134, 'MV', 'Maldives'),
(135, 'ML', 'Mali'),
(136, 'MT', 'Malta'),
(137, 'MH', 'Marshall Islands'),
(138, 'MQ', 'Martinique'),
(139, 'MR', 'Mauritania'),
(140, 'MU', 'Mauritius'),
(141, 'TY', 'Mayotte'),
(142, 'MX', 'Mexico'),
(143, 'FM', 'Micronesia, Federated States of'),
(144, 'MD', 'Moldova, Republic of'),
(145, 'MC', 'Monaco'),
(146, 'MN', 'Mongolia'),
(147, 'ME', 'Montenegro'),
(148, 'MS', 'Montserrat'),
(149, 'MA', 'Morocco'),
(150, 'MZ', 'Mozambique'),
(151, 'MM', 'Myanmar'),
(152, 'NA', 'Namibia'),
(153, 'NR', 'Nauru'),
(154, 'NP', 'Nepal'),
(155, 'NL', 'Netherlands'),
(156, 'AN', 'Netherlands Antilles'),
(157, 'NC', 'New Caledonia'),
(158, 'NZ', 'New Zealand'),
(159, 'NI', 'Nicaragua'),
(160, 'NE', 'Niger'),
(161, 'NG', 'Nigeria'),
(162, 'NU', 'Niue'),
(163, 'NF', 'Norfolk Island'),
(164, 'MP', 'Northern Mariana Islands'),
(165, 'NO', 'Norway'),
(166, 'OM', 'Oman'),
(167, 'PK', 'Pakistan'),
(168, 'PW', 'Palau'),
(169, 'PS', 'Palestine'),
(170, 'PA', 'Panama'),
(171, 'PG', 'Papua New Guinea'),
(172, 'PY', 'Paraguay'),
(173, 'PE', 'Peru'),
(174, 'PH', 'Philippines'),
(175, 'PN', 'Pitcairn'),
(176, 'PL', 'Poland'),
(177, 'PT', 'Portugal'),
(178, 'PR', 'Puerto Rico'),
(179, 'QA', 'Qatar'),
(180, 'RE', 'Reunion'),
(181, 'RO', 'Romania'),
(182, 'RU', 'Russian Federation'),
(183, 'RW', 'Rwanda'),
(184, 'KN', 'Saint Kitts and Nevis'),
(185, 'LC', 'Saint Lucia'),
(186, 'VC', 'Saint Vincent and the Grenadines'),
(187, 'WS', 'Samoa'),
(188, 'SM', 'San Marino'),
(189, 'ST', 'Sao Tome and Principe'),
(190, 'SA', 'Saudi Arabia'),
(191, 'SN', 'Senegal'),
(192, 'RS', 'Serbia'),
(193, 'SC', 'Seychelles'),
(194, 'SL', 'Sierra Leone'),
(195, 'SG', 'Singapore'),
(196, 'SK', 'Slovakia'),
(197, 'SI', 'Slovenia'),
(198, 'SB', 'Solomon Islands'),
(199, 'SO', 'Somalia'),
(200, 'ZA', 'South Africa'),
(201, 'GS', 'South Georgia South Sandwich Islands'),
(202, 'SS', 'South Sudan'),
(203, 'ES', 'Spain'),
(204, 'LK', 'Sri Lanka'),
(205, 'SH', 'St. Helena'),
(206, 'PM', 'St. Pierre and Miquelon'),
(207, 'SD', 'Sudan'),
(208, 'SR', 'Suriname'),
(209, 'SJ', 'Svalbard and Jan Mayen Islands'),
(210, 'SZ', 'Swaziland'),
(211, 'SE', 'Sweden'),
(212, 'CH', 'Switzerland'),
(213, 'SY', 'Syrian Arab Republic'),
(214, 'TW', 'Taiwan'),
(215, 'TJ', 'Tajikistan'),
(216, 'TZ', 'Tanzania, United Republic of'),
(217, 'TH', 'Thailand'),
(218, 'TG', 'Togo'),
(219, 'TK', 'Tokelau'),
(220, 'TO', 'Tonga'),
(221, 'TT', 'Trinidad and Tobago'),
(222, 'TN', 'Tunisia'),
(223, 'TR', 'Turkey'),
(224, 'TM', 'Turkmenistan'),
(225, 'TC', 'Turks and Caicos Islands'),
(226, 'TV', 'Tuvalu'),
(227, 'UG', 'Uganda'),
(228, 'UA', 'Ukraine'),
(229, 'AE', 'United Arab Emirates'),
(230, 'GB', 'United Kingdom'),
(231, 'US', 'United States'),
(232, 'UM', 'United States minor outlying islands'),
(233, 'UY', 'Uruguay'),
(234, 'UZ', 'Uzbekistan'),
(235, 'VU', 'Vanuatu'),
(236, 'VA', 'Vatican City State'),
(237, 'VE', 'Venezuela'),
(238, 'VN', 'Vietnam'),
(239, 'VG', 'Virgin Islands (British)'),
(240, 'VI', 'Virgin Islands (U.S.)'),
(241, 'WF', 'Wallis and Futuna Islands'),
(242, 'EH', 'Western Sahara'),
(243, 'YE', 'Yemen'),
(244, 'ZR', 'Zaire'),
(245, 'ZM', 'Zambia'),
(246, 'ZW', 'Zimbabwe'),
(247, 'null', 'null');

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
(123, 'FordRaptor.jpg'),
(124, 'Dream Winter Large.jpg'),
(125, 'Amsterdam.jpeg'),
(126, 'All Images Size to be - 1024x681.jpg'),
(127, 'Amsterdam.jpeg'),
(128, 'Dream Winter Large.jpg');

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
  `occupacy_id` int(11) NOT NULL,
  `full_name` varchar(200) NOT NULL,
  `mobile_number` int(11) NOT NULL,
  `departure_date` varchar(200) NOT NULL,
  `return_date` varchar(200) NOT NULL,
  `pax_adult` int(11) NOT NULL,
  `pax_teen` int(11) NOT NULL,
  `pax_child` int(11) NOT NULL,
  `pax_infant` int(11) NOT NULL
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
  `purchaseInclude` text NOT NULL,
  `packageDetails` text NOT NULL,
  `dateFrom` varchar(100) NOT NULL,
  `dateTo` varchar(100) NOT NULL,
  `cover_image` varchar(200) NOT NULL,
  `package_type_id` int(11) NOT NULL,
  `country_id` int(11) NOT NULL,
  `terms` text NOT NULL,
  `airline_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_package`
--

INSERT INTO `tbl_package` (`id`, `packageTitle`, `price`, `discount_id`, `purchaseInclude`, `packageDetails`, `dateFrom`, `dateTo`, `cover_image`, `package_type_id`, `country_id`, `terms`, `airline_id`) VALUES
(1, 'Special Day package at Inn At Woodhaven May Offer ', 1200, 27, 'Duration: 7 Hours\r\nIncludes: Day Use Room\r\nSpa Discount: 20% on all spa treatment \r\nFree access to swimming pool\r\nFood & Beverages: \r\n3-Course Lunch \r\nTea Time: 15:00\r\nDrinks that are not included in this offer are payable directly at the Hotel \r\nArrival / Departure: \r\nArrival Time: 10:00\r\nDeparture Time: 17:00\r\nLocation: Pereybere\r\nConditions: \r\nReservation: Must be done and confirmed 48 Hours in advance of arrival\r\nRoom Maximum occupancy: 2 Adults\r\nPrice is per Day Use Room\r\npolicies of hotel must be followed, if not, hotel has right to ask you to leave, no refund will be given\r\nComplaints: If customer is to file a complaint, it is valid if filed with merchant prior to Check-out\r\nMauritian ID card or Resident permit must be shown by all guests upon check-in at the hotel\r\nFailure to do so will entitle the Hotel to ch', 'Food & Beverages: \r\n3-Course Lunch \r\nTea Time: 15:00\r\nDrinks that are not included in this offer are payable directly at the Hotel \r\nFree activities\r\nLand: Social game, darts, carome\r\nWater: Swimming Pool\r\nFree secured parking', '06/05/2019', '31/05/2019', 'Inn At Woodhaven-2.jpeg', 1, 247, '', 8),
(2, 'Ford Raptor Three days Booking only', 5000, 28, 'description', 'description', '06/05/2019', '31/05/2019', 'FordRaptor.jpg', 2, 247, '', 8),
(3, 'Numquam lorem archit', 115, 28, 'Consequatur commodo ', 'Ut dolor eaque id ut', '01/06/2019', '10/10/2019', 'Dream Winter Large.jpg', 3, 2, 'test', 1),
(4, 'Special Offer Amsterdam', 20000, 28, 'tergdfgfgbdd', 'bdfgfdgfd', '12/05/2019', '17/09/2019', 'Amsterdam.jpeg', 3, 155, 'testetesttweretre', 5),
(5, 'dfgfdggfd', 3434540, 28, 'dfgfdg', 'gdfgdf', '13/05/2019', '08/06/2019', 'All Images Size to be - 1024x681.jpg', 3, 14, 'fdgsfgdfgdfgergergerg', 7);

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
(2, 123),
(3, 124),
(4, 125),
(5, 126),
(5, 127),
(5, 128);

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
  `status` tinyint(1) NOT NULL,
  `desactivate_account` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `firstname`, `lastname`, `email`, `password`, `address`, `gender`, `country`, `phone`, `role_type`, `status`, `desactivate_account`) VALUES
(1, 'Tom', 'Nasha', 'cypiza@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 'Sunt qui consectetur amet dele', 'Female', 'Mauritius', 12345, 'Customer', 1, 0),
(2, 'Justine', 'Cummings', 'siramavyfo@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 'Sunt qui consectetur amet dele', 'Female', 'Mauritius', 11111111, 'Customer', 1, 0),
(3, 'Mercedes', 'Simpson', 'nysymeb@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 'Sunt qui consectetur amet dele', 'Female', 'Mauritius', 51234567, 'Customer', 0, 0),
(5, 'admin', 'admin', 'paradisechaser2019@gmail.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', '', '', '', 0, 'Admin', 1, 0),
(6, 'Tarik', 'Nunez', 'zazu@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 'Recusandae Qui minima irure ut rerum voluptatem aut nulla laborum', 'Male', 'Mauritius', 11111111, 'Customer', 1, 0),
(7, 'Ulysses', 'Wilder', 'pekaki@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 'Non aspernatur in at officiis ad cupidatat quae et illo dolor nulla consectetur architecto similique veniam', 'Female', 'Mauritius', 23432423, 'Customer', 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_airlines`
--
ALTER TABLE `tbl_airlines`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_booking_car_cart`
--
ALTER TABLE `tbl_booking_car_cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_booking_car_rental`
--
ALTER TABLE `tbl_booking_car_rental`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_booking_hotel`
--
ALTER TABLE `tbl_booking_hotel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_booking_hotel_cart`
--
ALTER TABLE `tbl_booking_hotel_cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_booking_package`
--
ALTER TABLE `tbl_booking_package`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_booking_package_cart`
--
ALTER TABLE `tbl_booking_package_cart`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `tbl_cart_order`
--
ALTER TABLE `tbl_cart_order`
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
-- Indexes for table `tbl_country`
--
ALTER TABLE `tbl_country`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `tbl_airlines`
--
ALTER TABLE `tbl_airlines`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_booking_car_cart`
--
ALTER TABLE `tbl_booking_car_cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `tbl_booking_car_rental`
--
ALTER TABLE `tbl_booking_car_rental`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `tbl_booking_hotel`
--
ALTER TABLE `tbl_booking_hotel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_booking_hotel_cart`
--
ALTER TABLE `tbl_booking_hotel_cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_booking_package`
--
ALTER TABLE `tbl_booking_package`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_booking_package_cart`
--
ALTER TABLE `tbl_booking_package_cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

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
-- AUTO_INCREMENT for table `tbl_cart_order`
--
ALTER TABLE `tbl_cart_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `tbl_car_rental`
--
ALTER TABLE `tbl_car_rental`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tbl_country`
--
ALTER TABLE `tbl_country`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=248;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `tbl_orderhotel`
--
ALTER TABLE `tbl_orderhotel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_orderpackage`
--
ALTER TABLE `tbl_orderpackage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_package`
--
ALTER TABLE `tbl_package`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
