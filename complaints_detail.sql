-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 20, 2024 at 08:43 AM
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
-- Database: `complaints`
--

-- --------------------------------------------------------

--
-- Table structure for table `complaints_detail`
--

CREATE TABLE `complaints_detail` (
  `id` int(11) NOT NULL,
  `faculty_id` varchar(10) NOT NULL,
  `faculty_name` varchar(100) NOT NULL,
  `department` varchar(10) NOT NULL,
  `faculty_contact` varchar(20) NOT NULL,
  `faculty_mail` varchar(50) NOT NULL,
  `block_venue` varchar(15) NOT NULL,
  `venue_name` varchar(30) NOT NULL,
  `type_of_problem` varchar(50) NOT NULL,
  `problem_description` varchar(400) NOT NULL,
  `image` varchar(255) NOT NULL,
  `date_of_reg` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `days_to_complete` varchar(100) NOT NULL,
  `status` varchar(200) NOT NULL,
  `feedback` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `complaints_detail`
--
ALTER TABLE `complaints_detail`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `complaints_detail`
--
ALTER TABLE `complaints_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
