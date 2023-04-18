-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2023 at 02:52 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zulu`
--

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `image_url` text NOT NULL,
  `title` varchar(20) NOT NULL,
  `description` varchar(50) NOT NULL,
  `type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `image_url`, `title`, `description`, `type`) VALUES
(8, 'IMG-5f8954bd209a92.78214246.jpg', '', '', ''),
(9, 'IMG-5f8954caa02539.76436861.jpg', '', '', ''),
(10, 'IMG-643446827be318.32035650.png', '', '', ''),
(11, 'IMG-6434473e44d834.57721294.jpg', '', '', ''),
(12, 'IMG-643447ad0812f1.69520919.jpg', '', '', ''),
(13, 'IMG-643448788e37c1.95101781.jpg', '', '', ''),
(14, 'IMG-64356a060f1d42.65446062.jpg', '', '', ''),
(15, 'IMG-64356ad64cf422.01789614.jpg', '', '', ''),
(16, 'IMG-64356d1cb33b62.89569816.jpg', '', '', ''),
(17, 'IMG-64356d3259a477.68299542.jpg', '', '', ''),
(18, 'IMG-64356d7f6bd860.53055508.jpg', '', '', ''),
(19, 'IMG-6436d030899895.52808473.jpeg', '', '', ''),
(20, 'IMG-6436d07947f2c5.40712254.jpeg', '', '', ''),
(21, 'IMG-6436d0abef51d9.71784100.jpeg', '', '', ''),
(22, 'IMG-6436d1fb794e68.00874931.jpeg', '', '', ''),
(23, 'IMG-6436d26653c885.01104173.jpeg', '', '', ''),
(24, 'IMG-6436d32d418222.04630100.jpg', '', '', ''),
(25, 'IMG-6436d7dbe7cba4.99875627.jpg', 'asf', 'safasf', 'monochrome'),
(26, 'IMG-6436d87b835032.71308057.jpg', 'asf', '', 'monochrome'),
(27, 'IMG-6436d9b6988967.16632778.jpg', 'sf', 'scZSC', 'monochrome');

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id` int(11) NOT NULL,
  `email` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`id`, `email`) VALUES
(1, 'bhatanand360@gmail.c');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(2, 'kiran', 'kiranb@gmail.com', '$2y$10$BKb4Y6k5'),
(3, 'nihal', 'nihal@gmail.com', '$2y$10$MvroOiRk2B2OtNknXmyUbOX22cNQTINItzUkNrfTpYZnddyx5ONoy'),
(1, '_anand_bhat_', 'bhatanand360@gmail.com', 'qwert');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
