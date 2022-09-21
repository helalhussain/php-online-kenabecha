-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 28, 2021 at 07:52 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlinekenabecha`
--

-- --------------------------------------------------------

--
-- Table structure for table `report_ad`
--

CREATE TABLE `report_ad` (
  `report_no` int(100) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `reason` varchar(50) NOT NULL,
  `description` varchar(360) NOT NULL,
  `ad_no` int(100) NOT NULL,
  `date` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `report_ad`
--

INSERT INTO `report_ad` (`report_no`, `user_id`, `user_email`, `reason`, `description`, `ad_no`, `date`) VALUES
(3, '24', 'helal12@gmail.com', 'Duplicate', 'This id is fake', 104, NULL),
(5, '1', 'rimurr@gmail.com', 'Duplicate', 'This is my first', 108, '11:08:am 13-08-2021'),
(6, '24', 'helal12@gmail.com', 'Duplicate', 'helal is fake customer. he fraud me with his fake prouct.', 141, '08:09:am 20-09-2021'),
(7, '18', 'rimubd@gmail.com', 'Duplicate', 'This is fake', 134, '05:09:pm 28-09-2021');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `report_ad`
--
ALTER TABLE `report_ad`
  ADD PRIMARY KEY (`report_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `report_ad`
--
ALTER TABLE `report_ad`
  MODIFY `report_no` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
