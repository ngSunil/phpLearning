-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 24, 2023 at 12:20 PM
-- Server version: 10.3.38-MariaDB-0ubuntu0.20.04.1
-- PHP Version: 8.0.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(190) NOT NULL,
  `password` varchar(190) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `password`, `created_at`) VALUES
(8, 'adsddsfasdf', 'dsfasdf', '2023-03-24 05:37:57'),
(9, 'asdfsdf', 'sdfasdf', '2023-03-24 05:39:58'),
(10, 'asdfsdf', 'sdfasdf', '2023-03-24 05:40:24'),
(11, 'fsdfasf', '', '2023-03-24 05:42:15'),
(12, 'fsdfasf', 'dsfasdf', '2023-03-24 05:42:54'),
(13, 'fsdfasf', 'dsfasdf', '2023-03-24 05:43:30'),
(14, 'fsdfasf', 'dsfasdf', '2023-03-24 05:43:49'),
(15, '', '', '2023-03-24 05:44:18'),
(16, '', '', '2023-03-24 05:45:03'),
(17, 'sdasd', 'sdasdas', '2023-03-24 05:45:13'),
(18, 'sdasd', 'sdasdas', '2023-03-24 05:47:14'),
(19, 'sdasd', 'sdasdas', '2023-03-24 05:47:30'),
(20, 'sdasd', 'sdasdas', '2023-03-24 05:49:25'),
(21, '', '', '2023-03-24 05:51:18'),
(22, '', '', '2023-03-24 05:51:52'),
(23, 'martvalley7@gmail.com', '12345', '2023-03-24 06:09:44'),
(24, 'martvalley7@gmail.com', '12345678', '2023-03-24 06:12:10'),
(25, 'dfasdf@gmail.com', '123456', '2023-03-24 06:38:38'),
(26, 'admin@admin.com', '12345678', '2023-03-24 06:42:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
