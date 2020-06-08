-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2019 at 11:49 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.0.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cardoor`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `blog_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `blog` varchar(500) NOT NULL,
  `date` varchar(20) NOT NULL,
  `cus_id` int(20) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`blog_id`, `title`, `blog`, `date`, `cus_id`, `name`) VALUES
(1, 'Compact SUVs Compete! Forester, RAV4 and More Try to Topple Tiguan', 'The Jeep Cherokee received a mild refresh for the 2019 model year, and we decided to pit it against the rest of this field instead of the Compass we tested in our previous comparison â€” we felt the Cherokee was a more comparable size than the Compass, and the Compass didnot exactly light up the competition last time. ', '23-Mar-2019', 210628, 'tan'),
(2, 'A Glass Roof (Carbon Fiber Optional)', 'The standard roof is a fixed panoramic dark-glass panel (with a sunshade included). A carbon-fiber roof is optional as part of one of three \"lightweight sports packages\" that shave a few pounds from the hefty SUV.', '23-Mar-2019', 210628, 'tan');

-- --------------------------------------------------------

--
-- Table structure for table `blog_comments`
--

CREATE TABLE `blog_comments` (
  `comment_id` int(11) NOT NULL,
  `blog_id` int(11) NOT NULL,
  `comment` varchar(150) NOT NULL,
  `date` varchar(20) NOT NULL,
  `cus_name` varchar(20) NOT NULL,
  `cus_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog_comments`
--

INSERT INTO `blog_comments` (`comment_id`, `blog_id`, `comment`, `date`, `cus_name`, `cus_id`) VALUES
(1, 1, 'Youll have to wait until March 27 to find out the results, so be sure to check back in with us then. In the meantime, heres the rundown on everything ', '23-Mar-2019', 'tan', 210628),
(2, 2, 'Standard individual sport seats create a backseat for two, though you can opt for the Cayenne-style bench. ', '23-Mar-2019', 'tan', 210628),
(3, 2, 'The sloping roof allows both a standard roof spoiler above the rear window and a standard adaptive spoiler below the window that rises 5.3 inches at s', '23-Mar-2019', 'tan', 210628);

-- --------------------------------------------------------

--
-- Table structure for table `booking_details`
--

CREATE TABLE `booking_details` (
  `booking_id` varchar(20) NOT NULL,
  `car_id` int(20) NOT NULL,
  `pick_date` varchar(20) NOT NULL,
  `return_date` varchar(20) NOT NULL,
  `total_day` int(5) NOT NULL,
  `total_bill` float(10,2) NOT NULL,
  `price` float(10,2) NOT NULL,
  `pickup_location` varchar(20) NOT NULL,
  `booking_date` varchar(20) NOT NULL,
  `cus_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking_details`
--

INSERT INTO `booking_details` (`booking_id`, `car_id`, `pick_date`, `return_date`, `total_day`, `total_bill`, `price`, `pickup_location`, `booking_date`, `cus_id`) VALUES
('211246', 578052, '03/27/2019', '03/27/2019', 1, 6000.00, 6000.00, 'Dhanmondi', '03/23/2019', 210628),
('219907', 578052, '03/31/2019', '03/31/2019', 1, 6000.00, 6000.00, 'Mohammodpur', '03/24/2019', 210628),
('222044', 873893, '03/23/2019', '03/23/2019', 1, 5000.00, 5000.00, 'Dhanmondi', '03/23/2019', 210628),
('341722', 578052, '03/23/2019', '03/23/2019', 1, 6000.00, 6000.00, 'Mohammodpur', '03/23/2019', 210628),
('475029', 873893, '03/25/2019', '03/25/2019', 1, 5000.00, 5000.00, 'Mohammodpur', '03/23/2019', 210628),
('616182', 578052, '03/25/2019', '03/25/2019', 1, 6000.00, 6000.00, 'Mohammodpur', '03/23/2019', 210628),
('625946', 873893, '03/27/2019', '03/28/2019', 2, 10000.00, 5000.00, 'Panthapath', '03/23/2019', 210628),
('690664', 578052, '03/24/2019', '03/24/2019', 1, 6000.00, 6000.00, 'Azimpur', '03/23/2019', 210628),
('751732', 873893, '03/30/2019', '03/30/2019', 1, 5000.00, 5000.00, 'Dhanmondi', '03/23/2019', 210628),
('776817', 873893, '03/27/2019', '03/27/2019', 1, 5000.00, 5000.00, 'Mohammodpur', '03/23/2019', 210628),
('783797', 873893, '03/26/2019', '03/26/2019', 1, 5000.00, 5000.00, 'Mohammodpur', '03/23/2019', 210628),
('785634', 873893, '03/24/2019', '03/24/2019', 1, 5000.00, 5000.00, 'Mohammodpur', '03/23/2019', 210628),
('823835', 873893, '03/31/2019', '03/31/2019', 1, 5000.00, 5000.00, 'Mohammodpur', '03/24/2019', 210628),
('844281', 578052, '03/26/2019', '03/26/2019', 1, 6000.00, 6000.00, 'Mohammodpur', '03/23/2019', 210628);

-- --------------------------------------------------------

--
-- Table structure for table `car_details`
--

CREATE TABLE `car_details` (
  `car_id` int(20) NOT NULL,
  `car_name` varchar(100) NOT NULL,
  `price` float(10,2) NOT NULL,
  `car_details` varchar(1000) NOT NULL,
  `class` varchar(20) NOT NULL,
  `fuel` varchar(20) NOT NULL,
  `door` varchar(20) NOT NULL,
  `gearbox` varchar(20) NOT NULL,
  `driver_name` varchar(50) NOT NULL,
  `driver_phone` int(15) NOT NULL,
  `img1` varchar(250) NOT NULL,
  `img2` varchar(250) NOT NULL,
  `img3` varchar(250) NOT NULL,
  `renter_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `car_details`
--

INSERT INTO `car_details` (`car_id`, `car_name`, `price`, `car_details`, `class`, `fuel`, `door`, `gearbox`, `driver_name`, `driver_phone`, `img1`, `img2`, `img3`, `renter_id`) VALUES
(873893, 'BMW X1', 5000.00, 'The new BMW X1 SUV is based on the UKL platform that allows it to shed 135Kgs. It also gets improved cabin space, thanks to the taller and wider body shell. The all-new BMW X1s wheelbase has been increased by 90mm, and also sports an 85-litre increase in boot space and a 37mm increase in rear knee room.', 'Supermini', 'Diesel', '4', 'Automatic', 'John Doe', 1683182338, '20190317192305_car-1.jpg', '20190317192305_car-2.jpg', '20190317192305_car-3.jpg', 0),
(578052, 'BMW 2-series', 6000.00, 'The BMW 2-series is quick, nimble, and engaging the way that some of our favorite Bimmers of yore were.', 'Compact', 'Petrol', '4', 'Automatic', 'Mr. X', 168988785, '20190322131326_arti-thumb-1.jpg', '20190322131326_arti-thumb-2.jpg', '20190322131326_car-6.jpg', 0),
(216472, 'sd', 465.00, 'jkh', 'Choose car class...', 'Choose fuel type...', 'Choose number of doo', 'Choose gearbox type.', 'jkhjk', 123, '20190324105313_car-6.jpg', '20190324105313_car-6.jpg', '20190324105313_car-6.jpg', 0),
(988580, 'jk', 45.00, 'khgj', 'Compact', 'Petrol', '1', 'Automatic', 'kjh', 456, '20190324105442_car-6.jpg', '20190324105442_car-6.jpg', '20190324105442_car-6.jpg', 15432);

-- --------------------------------------------------------

--
-- Table structure for table `renter_details`
--

CREATE TABLE `renter_details` (
  `renter_id` int(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `renter_details`
--

INSERT INTO `renter_details` (`renter_id`, `name`, `email`, `phone`, `password`) VALUES
(15432, 'X', 'x@g.com', '1823665656', '123');

-- --------------------------------------------------------

--
-- Table structure for table `sale_car_details`
--

CREATE TABLE `sale_car_details` (
  `car_id` int(20) NOT NULL,
  `car_name` varchar(100) NOT NULL,
  `price` float(10,2) NOT NULL,
  `car_details` varchar(1000) NOT NULL,
  `class` varchar(20) NOT NULL,
  `fuel` varchar(20) NOT NULL,
  `door` varchar(20) NOT NULL,
  `gearbox` varchar(20) NOT NULL,
  `kilo` int(50) NOT NULL,
  `reg_date` varchar(15) NOT NULL,
  `img1` varchar(250) NOT NULL,
  `img2` varchar(250) NOT NULL,
  `img3` varchar(250) NOT NULL,
  `renter_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sale_car_details`
--

INSERT INTO `sale_car_details` (`car_id`, `car_name`, `price`, `car_details`, `class`, `fuel`, `door`, `gearbox`, `kilo`, `reg_date`, `img1`, `img2`, `img3`, `renter_id`) VALUES
(220236, 'as', 5.00, 'j', 'Compact', 'Petrol', '1', 'Automatic', 45, '2019-03-05', '20190324105218_car-6.jpg', '20190324105218_car-4.jpg', '20190324105218_car-5.jpg', 15432),
(539824, 'ac', 5555.00, 'jh', 'Compact', 'Petrol', '1', 'Automatic', 4665, '2019-03-03', '20190324105033_car-1.jpg', '20190324105033_car-2.jpg', '20190324105033_car-4.jpg', 0),
(540005, 'Allion Car Sallon', 1000000.00, 'Looks like new', 'Sedan', 'CNG', '4', 'Manual', 5000, '2019-02-12', '20190324012341_car-6.jpg', '20190324012341_car-1.jpg', '20190324012341_car-4.jpg', 0),
(540304, 'sd', 565.00, 'khgk', 'Compact', 'Petrol', '1', 'Automatic', 565, '2019-03-10', '20190324104846_car-6.jpg', '20190324104846_car-6.jpg', '20190324104846_car-6.jpg', 0),
(590652, 'X Corolla 2006', 800000.00, 'X Corolla, House Car driven by owner, Model -2006, Registration 2013 , Serial -33, 1500CC, Color - White , inside Biscuite, CNG-60, Alloy with fresh Tyre, Super cool AC, TV Navigation back Camera, Papers up to date ok, Interior very very Fresh , Body no spot , Suspension & Shock-absorber very good, ', 'Compact', 'Petrol', '1', 'Automatic', 15000, '2018-04-16', '20190324001423_car-1.jpg', '20190324001423_car-1.jpg', '20190324001423_car-4.jpg', 0),
(642235, 'jkfh', 56565656.00, 'jksdbjkb', 'Compact', 'Petrol', '1', 'Automatic', 15000, '2019-03-20', '20190324104715_car-6.jpg', '20190324104715_car-6.jpg', '20190324104715_car-6.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `cus_id` int(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `address` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`cus_id`, `name`, `email`, `phone`, `address`, `password`) VALUES
(210628, 'tan', 'tanveershuvos@gmail.com', '1683182331', 'dhaka', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `blog_comments`
--
ALTER TABLE `blog_comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `booking_details`
--
ALTER TABLE `booking_details`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `sale_car_details`
--
ALTER TABLE `sale_car_details`
  ADD PRIMARY KEY (`car_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `blog_comments`
--
ALTER TABLE `blog_comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
