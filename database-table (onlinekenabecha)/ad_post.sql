-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 28, 2021 at 07:51 PM
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
-- Table structure for table `ad_post`
--

CREATE TABLE `ad_post` (
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `phone_no` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `sub_category` varchar(100) NOT NULL,
  `user_division` varchar(100) NOT NULL,
  `user_district` varchar(100) NOT NULL,
  `condition` varchar(50) NOT NULL,
  `title` varchar(360) NOT NULL,
  `description` varchar(500) NOT NULL,
  `price` varchar(50) NOT NULL,
  `negotiable` varchar(50) DEFAULT NULL,
  `image_1` varchar(500) NOT NULL,
  `image_2` varchar(500) NOT NULL,
  `image_3` varchar(500) NOT NULL,
  `image_4` varchar(500) NOT NULL,
  `image_5` varchar(500) NOT NULL,
  `time` varchar(50) DEFAULT NULL,
  `able` varchar(50) DEFAULT 'able'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ad_post`
--

INSERT INTO `ad_post` (`post_id`, `user_id`, `user_email`, `phone_no`, `category`, `sub_category`, `user_division`, `user_district`, `condition`, `title`, `description`, `price`, `negotiable`, `image_1`, `image_2`, `image_3`, `image_4`, `image_5`, `time`, `able`) VALUES
(94, 1, 'rimurr@gmail.com', '', 'mobile', 'vivo J4', '', '', 'New', 'This is best phone', 'This is best phone This is best phone', '', '', 'image/ad_post/com11.jpg', 'image/ad_post/', 'image/ad_post/', 'image/ad_post/', 'image/ad_post/', NULL, 'able'),
(96, 1, 'rimurr@gmail.com', '', 'mobile', 'laptop', '', '', 'New', 'I want to sell a used laptop. this laptop is very firster device', 'I want to sell a used laptop. this laptop is very firster deviceI want to sell a used laptop. this laptop is very firster device', '', '', 'image/ad_post/cam1.jpg', 'image/ad_post/', 'image/ad_post/', 'image/ad_post/', 'image/ad_post/', '08:07:pm 26-07-2021', 'able'),
(97, 1, 'rimurr@gmail.com', '', 'mobile', 'Vivo j4', '', '', 'Used', 'This is a good phone', 'This is a good phone This is a good phone', '', '', 'image/ad_post/cam1.jpg', 'image/ad_post/', 'image/ad_post/', 'image/ad_post/', 'image/ad_post/', '08:07:am 27-07-2021', 'able'),
(98, 1, 'rimurr@gmail.com', '', 'mobile', 'Vivo J4', '', '', 'Used', 'This is best phone', 'This is best phone This is best phone', '', '', 'image/ad_post/animal2.jpg', 'image/ad_post/', 'image/ad_post/', 'image/ad_post/', 'image/ad_post/', '08:07:am 27-07-2021', 'able'),
(99, 1, 'rimurr@gmail.com', '', 'mobile', 'vivo 5s', '', '', 'Used', 'New phone new phone', 'New phone new phone New phone new phone New phone new phone', '200', '', 'image/ad_post/bg.jpg', 'image/ad_post/', 'image/ad_post/', 'image/ad_post/', 'image/ad_post/', '08:07:am 27-07-2021', 'able'),
(100, 1, 'rimurr@gmail.com', '', 'mobile', 'vivo 5s', '', '', 'Used', 'New phone new phone', 'New phone new phone New phone new phone New phone new phone', '', '', 'image/ad_post/bg.jpg', 'image/ad_post/', 'image/ad_post/', 'image/ad_post/', 'image/ad_post/', '08:07:am 27-07-2021', 'able'),
(104, 28, 'helalhuss@gmail.com', '0238243572', 'mobile', 'dfgdfg', '', '', 'Used', 'sffsdfsdg', 'sdfsfsdgsdg', '34667', '', 'image/ad_post/animal3.jpg', 'image/ad_post/', 'image/ad_post/', 'image/ad_post/', 'image/ad_post/', '11:07:am 27-07-2021', 'able'),
(107, 28, 'helalhuss@gmail.com', '0238243572', 'property', 'dfgdfg', 'sylhet', 'fdgg', 'Used', 'sffsdfsdg', 'sdfsfsdgsdg    rfg', '20100', 'negotiable', 'image/ad_post/h1.jpg', 'image/ad_post/h2.jpg', 'image/ad_post/h3.jpg', 'image/ad_post/h3.jpg', 'image/ad_post/h3.jpg', '07:07:pm 27-07-2021', 'able'),
(111, 24, 'helal12@gmail.com', '01932832432', 'Property', 'house', 'Chattogram', 'DC more', 'Used', 'house or rent', 'house for ret', '200000', 'negotiable', 'image/ad_post/images (18).jpg', 'image/ad_post/a623e0ac346dea68e59c279e05221b59.jpg', 'image/ad_post/', 'image/ad_post/', 'image/ad_post/', '11:08:am 13-08-2021', 'able'),
(112, 24, 'helal12@gmail.com', '67456', 'Electronic', 'new', 'Chattogram', 'mirpur', 'Used', 'xyzyy', 'xyz xfsdfsdfdsf', '2000', '', 'image/ad_post/h1.jpg', 'image/ad_post/', 'image/ad_post/', 'image/ad_post/', 'image/ad_post/', '11:08:am 13-08-2021', 'able'),
(113, 24, 'helal12@gmail.com', '67456', 'Electronic', 'laptop', 'Sylhet', 'upashohor', 'Used', 'HP Elitebook Core i5 4th Gen Business Class Ram 8GB Graphics 4GB', 'HP Elitebook Core i5 4th Gen Business Class Ram 8GB Graphics 4GBHP Elitebook Core i5 4th Gen Business Class Ram 8GB Graphics 4GB', '20000', 'negotiable', 'image/ad_post/81SdJG3OUjL._SL1500_.jpg', 'image/ad_post/A4GDK27VMnz6LtFDy9yzk.jpg', 'image/ad_post/cfaulkner_20210326_4491_0006.jpg', 'image/ad_post/photo-1541807084-5c52b6b3adef.jpg', 'image/ad_post/photo-1587831990711-23ca6441447b.jpg', '09:08:am 17-08-2021', 'able'),
(114, 24, 'helal12@gmail.com', '67456', 'Electronic', 'desktop', 'Dhaka', 'mirpur', 'Used', 'BRAND NEW PC CORE I3*SSD120GB*RAM 4GB', 'BRAND NEW PC CORE I3*SSD120GB*RAMBRAND NEW PC CORE I3*SSD120GB*RAM 4GB 4GB ', '12,500', 'negotiable', 'image/ad_post/best-desktop-computers-1-770x462.jpg', 'image/ad_post/desktop_pc.jpg', 'image/ad_post/giant_44917.jpg', 'image/ad_post/giant_74222.jpg', 'image/ad_post/giant_95763.jpg', '09:08:am 17-08-2021', 'able'),
(115, 24, 'helal12@gmail.com', '67456', 'Electronic', 'fridge', 'Borishal', 'motijill', 'Used', 'BRAND NEW walton fridge', 'BRAND NEW walton fridge Brand new walton fridge  ', '15000', 'negotiable', 'image/ad_post/12-24V-DC-Home-Appliances-Solar-Powered-Portable-Fridge-and-Freezer.jpg', 'image/ad_post/250px-A_Samsung_Refrigerator.jpg', 'image/ad_post/images (1).jpg', 'image/ad_post/modern-fridge-freezer-refrigerator-vector-23027543.jpg', 'image/ad_post/refrigerator-1540426.jpg', '09:08:am 17-08-2021', 'able'),
(116, 24, 'helal12@gmail.com', '67456', 'Electronic', 'desktop', 'Dhaka', 'mirpur', 'Used', 'BRAND NEW PC CORE I3*SSD120GB*RAM 4GB', 'BRAND NEW PC CORE I3*SSD120GB*RAMBRAND NEW PC CORE I3*SSD120GB*RAM 4GB 4GB ', '12,500', 'negotiable', 'image/ad_post/best-desktop-computers-1-770x462.jpg', 'image/ad_post/desktop_pc.jpg', 'image/ad_post/giant_44917.jpg', 'image/ad_post/giant_74222.jpg', 'image/ad_post/giant_95763.jpg', '09:08:am 17-08-2021', 'able'),
(117, 18, 'rimubd@gmail.com', '45367777', '', 'iphone 12', 'Dhaka', 'bonani', 'New', 'Apple iphone 12', 'Apple iphone 12 4s apple iphone 12', '100000', 'negotiable', 'image/ad_post/Screenshot_2020-04-11_at_11.37_0.jpg', 'image/ad_post/ptU7LZb3NZ8b6oetjsaKpF.jpg', 'image/ad_post/unnamed.jpg', 'image/ad_post/untitled-design-1.jpg', 'image/ad_post/unnamed.jpg', '10:08:am 17-08-2021', 'able'),
(118, 18, 'rimubd@gmail.com', '', 'Mobile', 'iphone 12', 'Dhaka', 'bonani', 'New', 'Apple iphone 12', 'Apple iphone 12 4s apple iphone 12', '100000', 'negotiable', 'image/ad_post/Screenshot_2020-04-11_at_11.37_0.jpg', 'image/ad_post/ptU7LZb3NZ8b6oetjsaKpF.jpg', 'image/ad_post/unnamed.jpg', 'image/ad_post/untitled-design-1.jpg', 'image/ad_post/unnamed.jpg', '10:08:am 17-08-2021', 'able'),
(119, 18, 'rimubd@gmail.com', '45367777', 'Fashion', 'mackup and watch', 'Chattogram', 'coxsbazar', 'Used', 'beauty mackup and watch', 'hauda beauty mackup and watch', '500', 'negotiable', 'image/ad_post/t10_2x_bride-emergency-kit.jpg', 'image/ad_post/unnamed (1).jpg', 'image/ad_post/istockphoto-471712723-1024x1024.jpg', 'image/ad_post/photo-1524592094714-0f0654e20314.jpg', 'image/ad_post/photo-1508057198894-247b23fe5ade.jpg', '10:08:am 17-08-2021', 'able'),
(120, 18, 'rimubd@gmail.com', '45367777', 'Fashion', 'ladies dress', 'Khulna', 'lokshanabond', 'New', 'pakistani jorjet dress', 'pakistani new original jorjet dress', '3000', 'negotiable', 'image/ad_post/18144467_0_ladies-dress1.jpg', 'image/ad_post/53678724_315269946011247_4875886396155363328_n.jpg', 'image/ad_post/images (14).jpg', 'image/ad_post/images (13).jpg', 'image/ad_post/ladies-dress-embroidery-fabric-500x500.jpg', '10:08:am 17-08-2021', 'able'),
(121, 18, 'rimubd@gmail.com', '45367777', 'Fashion', 'ladies shoes', 'Sylhet', 'golapgonj', 'New', 'brand new shoes', 'brand new shoes and hills', '6000', 'negotiable', 'image/ad_post/674e14b05f7cc4af8b49de82cc6005e4.jpg', 'image/ad_post/137230416_468149494179314_6662003701272568374_n.jpg', 'image/ad_post/images (15).jpg', 'image/ad_post/menios1ivb5.jpg', 'image/ad_post/download (3).jpg', '10:08:am 17-08-2021', 'able'),
(122, 18, 'rimubd@gmail.com', '45367777', 'Fashion', 'ladies dress', 'Khulna', 'lokshanabond', 'New', 'pakistani jorjet dress', 'pakistani new original jorjet dress', '3000', 'negotiable', 'image/ad_post/18144467_0_ladies-dress1.jpg', 'image/ad_post/53678724_315269946011247_4875886396155363328_n.jpg', 'image/ad_post/images (14).jpg', 'image/ad_post/images (13).jpg', 'image/ad_post/ladies-dress-embroidery-fabric-500x500.jpg', '10:08:am 17-08-2021', 'able'),
(123, 24, 'helal12@gmail.com', '67456', 'Vehicle', 'motocycle', 'Sylhet', 'south surma', 'Used', 'Yamaha FZS ', 'Yamaha FZS Yamaha FZS ', '60000', 'negotiable', 'image/ad_post/4-Used-Motorcycles-Wed-Buy-Right-Now-for-Under-2-500-gear-patrol-lead-feature.jpg', 'image/ad_post/gsx-r1000r.jpg', 'image/ad_post/images (5).jpg', 'image/ad_post/images (6).jpg', 'image/ad_post/Should-I-Sell-my-Motorcycle-Internationally-2016-Kawasaki-Ninja-650.jpg', '10:08:am 17-08-2021', 'able'),
(124, 24, 'helal12@gmail.com', '67456', 'Vehicle', 'car', 'Rangpur', 'balagonj', 'Used', 'Range Rover 25 Evouque 2013', 'Range Rover 25 Evouque 2013 Range Rover 25 Evouque 2013', '300000', 'negotiable', 'image/ad_post/2012-Honda-Accord-SE-sedan-front-three-quarter.jpg', 'image/ad_post/images (7).jpg', 'image/ad_post/images (8).jpg', 'image/ad_post/images (9).jpg', 'image/ad_post/images (10).jpg', '10:08:am 17-08-2021', 'able'),
(125, 24, 'helal12@gmail.com', '67456', 'Vehicle', 'bicycle', 'Rajshahi', 'beyanibazar', 'Used', 'bicycle sell', 'bicycle for sell no any prolem condition is good', '7000', 'negotiable', 'image/ad_post/0be749c28d1c6a3a7ff0fbcbd39614bd_large.jpg', 'image/ad_post/6461fea8ba84894d050b34df87321f3c_large.jpg', 'image/ad_post/b33b649771f7c5b801c98566408c61c3_large.jpg', 'image/ad_post/download (2).jpg', 'image/ad_post/images (11).jpg', '10:08:am 17-08-2021', 'able'),
(126, 24, 'helal12@gmail.com', '67456', 'Vehicle', 'car', 'Rangpur', 'balagonj', 'Used', 'Range Rover 25 Evouque 2013', 'Range Rover 25 Evouque 2013 Range Rover 25 Evouque 2013', '300000', 'negotiable', 'image/ad_post/2012-Honda-Accord-SE-sedan-front-three-quarter.jpg', 'image/ad_post/images (7).jpg', 'image/ad_post/images (8).jpg', 'image/ad_post/images (9).jpg', 'image/ad_post/images (10).jpg', '10:08:am 17-08-2021', 'able'),
(127, 28, 'helalhuss@gmail.com', '', 'Animal', 'cats and dogs', 'Dhaka', 'gulshan', 'Used', 'cats and dogs for sell', 'cats and dogs for sell', '6000', '', 'image/ad_post/10655.jpg', 'image/ad_post/images (4).jpg', 'image/ad_post/images (3).jpg', 'image/ad_post/in-kittens.jpg', 'image/ad_post/images (2).jpg', '10:08:am 17-08-2021', 'able'),
(128, 28, 'helalhuss@gmail.com', '', 'Living', 'designer sofa', 'Fymenshingh', 'tejgaw', 'New', 'designer new sofa', 'designer new sofa', '150000', 'negotiable', 'image/ad_post/istockphoto-1212526330-612x612.jpg', 'image/ad_post/images (12).jpg', 'image/ad_post/photo-1493663284031-b7e3aefcae8e.jpg', 'image/ad_post/Venus---Abstract-art-category---Light-Blue-sofa-background---black-frame-style.jpg', 'image/ad_post/', '10:08:am 17-08-2021', 'able'),
(129, 28, 'helalhuss@gmail.com', '', 'Living', 'designer table', 'Rangpur', 'moheshkali', 'New', 'designer new table for sell', 'designer new table set', '20000', 'negotiable', 'image/ad_post/39991e6de0a9a3a0606efaa0f570b08d.jpg', 'image/ad_post/dining-table-chair-500x500.jpg', 'image/ad_post/1120210310102548img.jpg', 'image/ad_post/Fashion-folding-dining-table-furniture-yemek-masasi-multifunctional-rectangle-dining-table-with-4-chairs.jpg_Q90.jpg_.jpg', 'image/ad_post/image1_1024x.jpg', '10:08:am 17-08-2021', 'able'),
(130, 24, 'helal12@gmail.com', '67456', 'Electronic', 'tv', 'Dhaka', 'bonani', 'Used', 'walton 24\' tv', 'walton 24\' tv ', '15000', 'negotiable', 'image/ad_post/download (7).jpg', 'image/ad_post/download (8).jpg', 'image/ad_post/images (18).jpg', 'image/ad_post/maxresdefault.jpg', 'image/ad_post/download (6).jpg', '11:08:am 17-08-2021', 'able'),
(131, 24, 'helal12@gmail.com', '67456', 'Electronic', 'headphone', 'Khulna', 'nowgha', 'Used', 'headphone for sell', 'headphone for sell', '1000', 'negotiable', 'image/ad_post/a623e0ac346dea68e59c279e05221b59.jpg', 'image/ad_post/download (9).jpg', 'image/ad_post/photo-1505740420928-5e560c06d30e.jpg', 'image/ad_post/image_2021-08-17_155259.png', 'image/ad_post/istockphoto-1134520463-612x612.jpg', '11:08:am 17-08-2021', 'able'),
(132, 24, 'helal12@gmail.com', '67456', 'Electronic', 'mouse', 'Sylhet', 'lokiphasha', 'Used', 'mouse for sell', 'mouse for sell', '1000', 'negotiable', 'image/ad_post/download (11).jpg', 'image/ad_post/134070781-computer-mouse-with-wire-on-a-white-background.jpg', 'image/ad_post/download (10).jpg', 'image/ad_post/134070781-computer-mouse-with-wire-on-a-white-background.jpg', 'image/ad_post/modern-computer-mouse-on-white-260nw-1090541303.jpg', '11:08:am 17-08-2021', 'able'),
(133, 24, 'helal12@gmail.com', '67456', 'Mobile', 'samsung', 'Dhaka', 'tejgaw', 'Used', 'samsung galaxy ', 'samsung galaxy', '10000', 'negotiable', 'image/ad_post/download.jpg', 'image/ad_post/762ade130d770b9e364fa3e77ccc2c32.jpg', 'image/ad_post/download (1).jpg', 'image/ad_post/download.jpg', 'image/ad_post/Galaxy-A52-16.jpg', '11:08:am 17-08-2021', 'able'),
(134, 24, 'helal12@gmail.com', '67456', 'Mobile', 'vivo', 'Khulna', 'telaghor', 'Used', 'vivo pro max', 'vivo pro max', '10000', 'negotiable', 'image/ad_post/F17 pro-navigation-blue-v2.png', 'image/ad_post/images (16).jpg', 'image/ad_post/images (17).jpg', 'image/ad_post/Galaxy-A71-1-540x304.jpg', 'image/ad_post/photo-1567581935884-3349723552ca.jpg', '12:08:pm 17-08-2021', 'able'),
(135, 24, 'helal12@gmail.com', '67456', 'Mobile', 'oppo', 'Sylhet', 'mirabazar', 'Used', 'oppo pro max', 'oppo pro max', '11000', 'negotiable', 'image/ad_post/download (4).jpg', 'image/ad_post/Oppo-A15.jpg', 'image/ad_post/F17 pro-navigation-blue-v2.png', 'image/ad_post/Oppo-A15.jpg', 'image/ad_post/photo-1511707171634-5f897ff02aa9.jpg', '12:08:pm 17-08-2021', 'able'),
(136, 24, 'helal12@gmail.com', '67456', 'Electronic', 'video game', 'Dhaka', 'gulshan', 'New', 'video game for sell', 'video game for sell', '25000', '', 'image/ad_post/download (13).jpg', 'image/ad_post/1577547899-9091.jpg', 'image/ad_post/download (12).jpg', 'image/ad_post/file-20200408-108521-bnsblv.jpg', 'image/ad_post/download (13).jpg', '12:08:pm 17-08-2021', 'able'),
(137, 24, 'helal12@gmail.com', '67456', 'Electronic', 'video camera', 'Sylhet', 'dhakadokkin', 'Used', 'video camera for sell', 'video camera for sell', '45000', 'negotiable', 'image/ad_post/download (14).jpg', 'image/ad_post/download (15).jpg', 'image/ad_post/download (16).jpg', 'image/ad_post/download (17).jpg', 'image/ad_post/photo-1589872307379-0ffdf9829123.jpg', '12:08:pm 17-08-2021', 'able'),
(138, 24, 'helal12@gmail.com', '67456', 'Mobile', 'nokia', 'Rangpur', 'hazipur', 'Used', 'nokia for sell', 'nokia for sell', '4500', 'negotiable', 'image/ad_post/download (19).jpg', 'image/ad_post/Nokia_3310_range.jpg', 'image/ad_post/1542200657_635_nokia_106_2018.jpg', 'image/ad_post/download (20).jpg', 'image/ad_post/download (18).jpg', '12:08:pm 17-08-2021', 'able'),
(139, 18, 'rimubd@gmail.com', '45367777', 'Mobile', 'Mobile', 'Sylhet', 'Mira Bazar', 'Used', 'This is Good Mobile', 'This', '200', 'negotiable', 'image/ad_post/download (5).jpg', 'image/ad_post/', 'image/ad_post/', 'image/ad_post/', 'image/ad_post/', '05:08:pm 17-08-2021', 'able'),
(140, 18, 'rimubd@gmail.com', '45367777', 'Mobile', 'Mobile', 'Sylhet', 'Mira Bazar', 'Used', 'This is Good Mobile', 'This', '200', 'negotiable', 'image/ad_post/download (5).jpg', 'image/ad_post/', 'image/ad_post/', 'image/ad_post/', 'image/ad_post/', '05:08:pm 17-08-2021', 'able'),
(141, 18, 'rimubd@gmail.com', '45367777', 'Mobile', 'Mobile', 'Dhaka', 'Mira Bazar', 'Used', 'This is Good Mobile', 'This', '200', '', 'image/ad_post/download (20).jpg', 'image/ad_post/', 'image/ad_post/', 'image/ad_post/', 'image/ad_post/', '05:08:pm 17-08-2021', 'able');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ad_post`
--
ALTER TABLE `ad_post`
  ADD PRIMARY KEY (`post_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ad_post`
--
ALTER TABLE `ad_post`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=142;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
