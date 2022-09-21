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
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_first_name` varchar(50) NOT NULL,
  `user_last_nam` varchar(50) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_password` varchar(50) NOT NULL,
  `user_confirm_password` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `date_of_birth` varchar(100) NOT NULL,
  `phone_no` varchar(100) NOT NULL,
  `user_division` varchar(100) NOT NULL,
  `user_district` varchar(100) NOT NULL,
  `user_image` varchar(500) NOT NULL,
  `able` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_first_name`, `user_last_nam`, `user_email`, `user_password`, `user_confirm_password`, `gender`, `date_of_birth`, `phone_no`, `user_division`, `user_district`, `user_image`, `able`) VALUES
(1, 'rimu', 'akter', 'rimurr@gmail.com', '2021-05-04', 'female', 'female', '2021-08-05', '09833473626', 'Dhaka', 'Dhaka', 'image/pic1.jpg', 'able'),
(11, 'online', 'kenabecha', 'onlinekenabecha@gmail.com', '12345', '12345', 'Others', '11/11/2021', '01937438', 'Sylhet', 'Sylhet', '', 'able'),
(18, 'rimu', 'akter', 'rimubd@gmail.com', 'rimu', 'rimu', '', '2021-07-07', '45367777', 'Sylhet', 'rimu', 'image/ahamed.JPG', 'able'),
(24, 'Helal', 'Hussain', 'helal12@gmail.com', '1234', '1234', 'male', '2021-06-08', '01938376262', 'Sylhet', 'Sylhet', 'image/h3.jpg', 'able'),
(28, 'Nava', 'Chowdory', 'helalhuss@gmail.com', '123456', '123456', 'female', '2021-06-15', '', '', '', 'image/img3.jpg', 'able'),
(82, 'Arif', 'Hasan', 'arif@gmail.com', '12345', '12345', 'male', '2021-09-29', '0193948374', 'Sylhet', 'Sylhet', 'image/h3.jpg', 'able'),
(86, 'aaa', 'aaa', 'arifss@gmail.com', '12345', '12345', 'Male', '2021-09-24', '', '', '', '', 'able');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_email` (`user_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
