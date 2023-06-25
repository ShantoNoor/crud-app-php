-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2023 at 09:34 AM
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
-- Database: `departmental_event`
--

-- --------------------------------------------------------

--
-- Table structure for table `departmental_event_tb`
--

CREATE TABLE `departmental_event_tb` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `place` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `time` varchar(50) NOT NULL,
  `current_participent` int(50) NOT NULL,
  `max_participent` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `departmental_event_tb`
--

INSERT INTO `departmental_event_tb` (`id`, `name`, `place`, `date`, `time`, `current_participent`, `max_participent`) VALUES
(4, 'DBMS Class', 'Dept. CSE', '2022-11-11', '11:15', 300, 300),
(5, 'Programming Contest', 'Dept. CSE', '2022-11-01', '11:00', 230, 300),
(6, 'DBMS Class', 'Dept. CSE', '2022-11-02', '13:15', 0, 300);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `departmental_event_tb`
--
ALTER TABLE `departmental_event_tb`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `departmental_event_tb`
--
ALTER TABLE `departmental_event_tb`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
