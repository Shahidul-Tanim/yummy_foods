-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2024 at 02:28 PM
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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(60) NOT NULL,
  `lname` varchar(60) DEFAULT NULL,
  `email` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `profile_img` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `password`, `profile_img`) VALUES
(1, 'Jeremy', 'Guy', 'qeron@mailinator.com', 'Pa$$w0rd!', ''),
(2, 'shahidul ', 'tanim', 'shahidultanim7@gmail.com', '$2y$10$Vn/dE6hKBjHOwjTlbraooOilZMJIkK/0KL9SjYSLDVp.BzifIK2mS', ''),
(3, 'Thane', 'Horton', 'lawocu@mailinator.com', '$2y$10$MkVQHYgkvqHdUM8YJoYBS.yU0VrScMekIRWHvjbID0ePDdX0NXNxu', ''),
(4, 'Amir', 'Olsen', 'huby@mailinator.com', '$2y$10$WrqEdWiIrLaBAvfRiWATxeAEJfp2FxKXB.73j4vcug1NYHIVHb/qu', ''),
(5, 'Quin', 'Walsh', 'tufub@mailinator.com', '$2y$10$bKFPykg9m3ija7EJuUAnvuoHuler1pq8YD6uBBKYNBOdwS6MB0qAC', ''),
(6, 'Lara', 'Pacheco', 'busu@mailinator.com', '$2y$10$ESxwXQ6xq9gFb7JiA6Z5WuQlkjyhbValgvo8b5UCTw91Wk6oBrBhq', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
