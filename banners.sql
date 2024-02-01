-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 01, 2024 at 08:18 AM
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
-- Database: `yummy_foods`
--

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` int(11) NOT NULL,
  `heading` varchar(256) NOT NULL,
  `details` mediumtext DEFAULT NULL,
  `button_title` varchar(256) DEFAULT NULL,
  `button_url` varchar(256) DEFAULT NULL,
  `video_url` varchar(256) DEFAULT NULL,
  `featured_img` varchar(256) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `heading`, `details`, `button_title`, `button_url`, `video_url`, `featured_img`, `status`) VALUES
(2, 'Consequat Voluptate', 'Voluptatum temporibu', 'Fugiat eveniet pari', 'Est voluptatum dolor', 'Dolores dolor cum fa', '65b90e360fb97bannerImg74379c69c48e9ccc1cd75ecd21b82c33.jpg', 0),
(3, 'Ducimus aut quas au', 'Et est quis providen', 'Illum quod nulla co', 'Aliqua Quo dolor ut', 'https://www.youtube.com/watch?v=biJxttaumc0', '65b9134790cdebannerImgOSC-Spring-Welcome-Back-Website-Banner-Food-Drink-01.jpg', 0),
(5, 'welcome to paradise ', 'Indulging in flavors that make life delicious\r\n', 'Today is your Day', '', 'https://www.youtube.com/watch?v=SmMWEoi5GVw', '65bb430844390bannerImgfood.jpg', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
