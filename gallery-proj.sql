-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2023 at 09:44 AM
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
-- Database: `gallery-proj`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(50) DEFAULT NULL,
  `category_image` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `category_image`) VALUES
(6, 'Nature walk in forest', 'img_6431179c39637.jpg'),
(7, 'Desert Photography', 'img_643117f5aa709.jpg'),
(8, 'Seaside Photos', 'img_6431180da700a.jpg'),
(9, 'In the Mountains', 'img_643640961629d.jpg'),
(10, 'Space Photography', 'img_643640ade3538.jpg'),
(11, 'Farming ', 'img_643640f0d6e6d.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `contests`
--

CREATE TABLE `contests` (
  `contest_id` int(11) NOT NULL,
  `contest_name` varchar(50) DEFAULT NULL,
  `contest_deadline` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `contest_prize` varchar(50) NOT NULL,
  `contest_image` varchar(50) DEFAULT NULL,
  `contest_category` varchar(50) NOT NULL,
  `contest_author` varchar(50) NOT NULL,
  `contest_winner` varchar(50) NOT NULL,
  `contest_details` text DEFAULT NULL,
  `contest_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contests`
--

INSERT INTO `contests` (`contest_id`, `contest_name`, `contest_deadline`, `contest_prize`, `contest_image`, `contest_category`, `contest_author`, `contest_winner`, `contest_details`, `contest_status`) VALUES
(20, 'sdfsadfsadf', '2023-04-12 05:00:51', '9000', 'img_643105be985e7.jpg', 'Seaside', 'dfsfdsdv', 'chinky', 'sfdaddasffads', 0),
(25, 'In the wild', '2023-04-12 05:00:52', '2300', 'img_6435158becc2a.jpg', 'Desert Photography', 'author', 'bhavya', 'fdsfasfdasfdas', 0),
(26, 'Forest vibes', '2023-04-11 08:20:50', '2000', 'img_643515c6e7495.jpg', 'Nature walk in forest', 'test nssmne', 'Micky', 'test test', 1),
(27, 'this is test contest', '2023-04-19 08:53:00', '6000', 'img_643646c950552.jpg', 'Nature walk in forest', 'test auth', '', 'dasdfsfdafdas sdfsdfsdafssdaf\r\nsfda\r\n\r\nfdsa\r\nfsda\r\nfds\r\na\r\n', 0),
(28, 'testing contest', '2023-04-05 06:52:00', '600000', 'img_643647000daa8.jpg', 'Nature walk in forest', 'rasdfsad', '', 'ramnso ', 0),
(29, 'walk in desert', '2023-04-18 05:52:00', '3000', 'img_64364749d28ba.jpg', 'Desert Photography', 'john', '', 'this is test', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(100) DEFAULT NULL,
  `user_email` varchar(50) DEFAULT NULL,
  `phone_no` varchar(255) NOT NULL,
  `user_role` varchar(50) DEFAULT NULL,
  `user_image` varchar(50) DEFAULT NULL,
  `user_password` varchar(50) DEFAULT NULL,
  `user_created_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_email`, `phone_no`, `user_role`, `user_image`, `user_password`, `user_created_on`) VALUES
(41, 'ben tennyson', 'ben@mail.com', '1010101010,9818181818,3232321232', '0', 'img_642819d84dc2d.jpg', 'UGFzc3dvcmRAMQ==', '2001-04-22 20:17:36'),
(42, 'test name', 'test@mail.com', '2121212122', '1', 'img_642a65758394d.jpg', 'UGFzc3dvcmRAMQ==', '2003-04-23 02:04:45'),
(43, 'test name', 'test@mail.com', '2121212121', '0', 'img_642bfd0c3c938.jpg', 'UGFzc3dvcmRAMQ==', '2004-04-23 07:03:48'),
(59, 'john', 'test@mail.com', '', '1', NULL, 'UGFzc3dvcmRAMQ==', '2010-04-23 07:01:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `contests`
--
ALTER TABLE `contests`
  ADD PRIMARY KEY (`contest_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `contests`
--
ALTER TABLE `contests`
  MODIFY `contest_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
