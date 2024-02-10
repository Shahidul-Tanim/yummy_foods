-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2024 at 09:26 AM
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

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `category_title` varchar(100) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_title`, `status`) VALUES
(2, 'Starters', 1),
(3, 'Breakfast', 1),
(5, 'Lunch', 1),
(7, 'Dinner', 1);

-- --------------------------------------------------------

--
-- Table structure for table `foods`
--

CREATE TABLE `foods` (
  `id` int(11) NOT NULL,
  `category` varchar(260) NOT NULL,
  `title` varchar(260) NOT NULL,
  `detail` mediumtext NOT NULL,
  `price` float NOT NULL,
  `food_image` varchar(260) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `foods`
--

INSERT INTO `foods` (`id`, `category`, `title`, `detail`, `price`, `food_image`, `status`) VALUES
(1, 'Starters', 'Consequatur impedit', 'Aut ea fugiat quasi', 90, 'menu-65c70cf83fd22.jpg', 1),
(2, 'Starters', 'Est sint tempora lor', 'Delectus dicta sunt', 512, 'menu-65c7113d7c670.jpg', 1),
(3, 'Starters', 'Tempora elit magna ', 'Cupidatat esse duis', 548, 'menu-65c7114ea4906.jpg', 1),
(4, 'Starters', 'Soluta recusandae D', 'Modi anim aspernatur', 554, 'menu-65c7115fd25f4.jpg', 1),
(5, 'Starters', 'Nesciunt illum rat', 'Et facilis ratione n', 198, 'menu-65c7117a7b692.jpg', 1),
(6, 'Starters', 'Et voluptatum autem ', 'Neque aut voluptas s', 730, 'menu-65c71193e3b6b.jpg', 1),
(7, 'Breakfast', 'Amet ullamco non es', 'Minima incididunt ad', 734, 'menu-65c711a9c52a1.jpg', 1),
(8, 'Lunch', 'Dolore et et veniam', 'Corporis odit beatae', 853, 'menu-65c711b8b76b6.jpg', 1),
(10, 'Dinner', 'Quia porro exercitat', 'In aut irure et quia', 731, 'menu-65c730ac24c9b.jpg', 1),
(11, 'Dinner', 'Culpa quia incidunt', 'Molestias perspiciat', 377, 'menu-65c730b9925c1.jpg', 1),
(12, 'Dinner', 'Quidem corrupti qua', 'Deleniti incididunt ', 825, 'menu-65c730c439e5c.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(60) NOT NULL,
  `lname` varchar(60) DEFAULT NULL,
  `email` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `profile_img` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `password`, `profile_img`) VALUES
(2, 'shahidul ', 'tanim', 'shahidultanim7@gmail.com', '$2y$10$w1YlsG/Si.iB9mqnsdaUGeQaucobKotAPyK0FmqClB0t5StBBWcK2', 'user-65b52d380740d.jpg'),
(8, 'shahidul ', 'tanim', 'tanimmunna7@gmail.com', '$2y$10$VtWG.NecusNLUnkLkD4qIeGg7noG90a7vhXXM6tNDVsUvC94xTBeC', 'user-65b00165f136f.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `foods`
--
ALTER TABLE `foods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `foods`
--
ALTER TABLE `foods`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
