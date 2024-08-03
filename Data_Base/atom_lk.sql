-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 03, 2024 at 02:30 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `atom.lk`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands_tb`
--

CREATE TABLE `brands_tb` (
  `brand_id` int(3) NOT NULL,
  `brand_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `brands_tb`
--

INSERT INTO `brands_tb` (`brand_id`, `brand_name`) VALUES
(1, 'Samsung'),
(2, 'apple'),
(3, 'xiaomi'),
(4, 'Huawei');

-- --------------------------------------------------------

--
-- Table structure for table `categories_tb`
--

CREATE TABLE `categories_tb` (
  `category_id` int(3) NOT NULL,
  `category_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories_tb`
--

INSERT INTO `categories_tb` (`category_id`, `category_name`) VALUES
(1, 'Mobile Phones'),
(2, 'Tablets'),
(3, 'Laptops'),
(4, 'Computers');

-- --------------------------------------------------------

--
-- Table structure for table `products_tb`
--

CREATE TABLE `products_tb` (
  `product_id` int(11) NOT NULL,
  `product_title` varchar(50) NOT NULL,
  `product_detail` varchar(250) NOT NULL,
  `product_keyword` varchar(250) NOT NULL,
  `category_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `product_image1` varchar(255) NOT NULL,
  `product_image2` varchar(255) NOT NULL,
  `product_image3` varchar(255) NOT NULL,
  `product_price` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products_tb`
--

INSERT INTO `products_tb` (`product_id`, `product_title`, `product_detail`, `product_keyword`, `category_id`, `brand_id`, `product_image1`, `product_image2`, `product_image3`, `product_price`, `date`, `status`) VALUES
(2, 'Iphone 13', 'Iphone 13 pro', 'ipone ifone ipohne smart phone', 1, 2, '10057216_8d6ad931_iPhone13.png', '6999d09d_0a785af5_iPhone_13_Green_PDP_Position-4_Design__SEA.jpg', '00dbf0b9_560e99a6_iPhone_13_Green_PDP_Position-3_Camera__SEA.jpg', '189900', '2024-07-10 14:36:50', 'true'),
(3, 'samsung s22', 'Samsung S22 Brand New', 'samsung smsung semsung saamsung seemsing', 1, 1, 'maxresdefault.jpg', 'Samsung-Galaxy-S22-Ultra-5G-256GB-12GB-RAM-S908E-6-80-Dynamic-AMOLED-Display-5000-mAh-Fast-Wireless-Charging-GSM-Unlocked-International-Version-Phant_2b6cde4a-45b9-4a2a-9c6c-7f9fa89e97e0.38772a751be3f21523f62daf1d.webp', 'screenshot-2022-03-01-at-184650.png', '22499', '2024-07-10 14:40:30', 'true'),
(4, 'Xiaomi Redmi note 12', 'Redmi note 12 8gb 128gb brandnew sealed pack', 'redmi mi xiomi xiami note12 note 12 not12 not 12 radmi redmy', 1, 3, 'xiaomi-redmi-note-12-pro-plus.jpg', 'Global-Version-Xiaomi-Redmi-Note-12-Pro-Plus-5G-200MP-Camera-OIS-120W-Fast-Charger-120Hz.webp', 'xiaomi-redmi-note-12-pro-plus.jpg', '74999/=', '2024-07-28 14:03:39', 'true'),
(5, 'Apple ipad pro 2022', 'apple Ipad pro 512GB 2022 brandnew sealed pack ', 'ipod ipad pro ipadpro ipopro ipo ipa ip i ', 2, 2, 'ipad1.jpeg', 'ipad2.jpeg', 'ipad_3.jpg', '345999/=', '2024-07-28 14:07:06', 'true'),
(6, 'Macbook pro 2020 ', 'Macbook pro 2020 core i9 6th Genaration on board nvidia Graphic card', 'mac macbook pro macpro mackbookpro macbok macpro mackpro macbk macboook ', 3, 2, 'mac3.jpg', 'mac2.webp', 'mac1.png', '745000/=', '2024-07-28 14:11:00', 'true'),
(7, 'Macbook pro 2020 ', 'Macbook pro 2020 core i9 6th Genaration on board nvidia Graphic card', 'mac macbook pro macpro mackbookpro macbok macpro mackpro macbk macboook ', 3, 2, 'mac3.jpg', 'mac2.webp', 'mac1.png', '745000/=', '2024-07-30 15:47:30', 'true'),
(8, 'Macbook pro 2020 ', 'Macbook pro 2020 core i9 6th Genaration on board nvidia Graphic card', 'mac macbook pro macpro mackbookpro macbok macpro mackpro macbk macboook ', 3, 2, 'mac3.jpg', 'mac2.webp', 'mac1.png', '745000/=', '2024-07-31 13:47:19', 'true');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands_tb`
--
ALTER TABLE `brands_tb`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `categories_tb`
--
ALTER TABLE `categories_tb`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `products_tb`
--
ALTER TABLE `products_tb`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands_tb`
--
ALTER TABLE `brands_tb`
  MODIFY `brand_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `categories_tb`
--
ALTER TABLE `categories_tb`
  MODIFY `category_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products_tb`
--
ALTER TABLE `products_tb`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
