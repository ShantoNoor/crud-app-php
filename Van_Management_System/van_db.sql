-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2023 at 09:26 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `van_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `van_info`
--

CREATE TABLE `van_info` (
  `id` int(10) NOT NULL,
  `license_number` varchar(100) NOT NULL,
  `current_location` varchar(100) NOT NULL,
  `current_load` int(10) NOT NULL,
  `max_capacity` int(10) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `van_info`
--

INSERT INTO `van_info` (`id`, `license_number`, `current_location`, `current_load`, `max_capacity`, `status`) VALUES
(16, 'Khulna-Metro-Kha-9807670', 'Nobinbug', 0, 6, 'Free'),
(19, 'Dhaka-Metro-Ka-986838', 'Gobra', 3, 4, 'On a Trip');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `van_info`
--
ALTER TABLE `van_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `van_info`
--
ALTER TABLE `van_info`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
