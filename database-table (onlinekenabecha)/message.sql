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
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `m_id` int(100) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `from_email` varchar(100) DEFAULT NULL,
  `post_id` int(100) NOT NULL,
  `seller_id` varchar(100) DEFAULT NULL,
  `message` varchar(360) NOT NULL,
  `date` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`m_id`, `user_id`, `from_email`, `post_id`, `seller_id`, `message`, `date`) VALUES
(31, '18', 'rimubd@gmail.com', 137, '24', 'Hello ', '07:09:am 26-09-2021'),
(32, '24', 'helal12@gmail.com', 137, '18', 'Thanks', '07:09:am 26-09-2021'),
(33, '24', 'helal12@gmail.com', 137, '18', 'Thanks rimu', '10:09:am 26-09-2021'),
(34, '18', 'rimubd@gmail.com', 137, '24', 'Thanks Helal', '10:09:am 26-09-2021'),
(35, '82', 'arif@gmail.com', 137, '24', 'I want buy your product', '10:09:am 26-09-2021'),
(36, '18', 'onlinekenabecha@gmail.com', 0, '18', 'Hello rimu your id is unblocked', '06:09:pm 27-09-2021'),
(42, '24', 'helal12@gmail.com', 137, '18', 'Hellow rimu how', '04:09:pm 28-09-2021'),
(43, '11', 'onlinekenabecha@gmail.com', 0, '18', 'dddddddddd', '04:09:pm 28-09-2021'),
(44, '18', 'rimubd@gmail.com', 0, '11', 'Thanks onlinekenabecha', '06:09:pm 28-09-2021');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`m_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `m_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
