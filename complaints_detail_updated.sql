-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 23, 2024 at 08:16 AM
-- Server version: 8.0.35
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hod`
--

-- --------------------------------------------------------

--
-- Table structure for table `complaints_detail`
--

CREATE TABLE `complaints_detail` (
  `id` int NOT NULL,
  `problem_id` int NOT NULL,
  `faculty_id` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `faculty_name` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `department` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `faculty_contact` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `faculty_mail` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `block_venue` varchar(15) COLLATE utf8mb4_general_ci NOT NULL,
  `venue_name` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `type_of_problem` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `problem_description` varchar(400) COLLATE utf8mb4_general_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `date_of_reg` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `days_to_complete` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `status` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `feedback` varchar(250) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `complaints_detail`
--

INSERT INTO `complaints_detail` (`id`, `problem_id`, `faculty_id`, `faculty_name`, `department`, `faculty_contact`, `faculty_mail`, `block_venue`, `venue_name`, `type_of_problem`, `problem_description`, `image`, `date_of_reg`, `days_to_complete`, `status`, `feedback`) VALUES
(3, 1001, '1155002', 'Mr.Kalaiarasan Kumar', 'TIH', '455432245315', 'fdsfhfhdusfghdsgf@mail.com', 'RK Block', 'RK-310', 'ELECTRICAL', 'WIRES is bitten by mouse', '', '2024-08-23 05:04:36', '', '1', 'not completed'),
(4, 1002, '1155003', 'sri hari', 'CSE', '531312523', 'srihari.cse@mkce.ac.in', 'APJ-BLOCK', 'RK-019', 'ELECTRICAL', 'BULB NOT GLOWING', '', '2024-08-23 05:24:12', '2', '2', 'not completed'),
(5, 1003, '1141002', 'sakthi', 'CSE', '9585253525', 'sakthi.cse@mkce.ac.in', 'APJ-BLOCK', 'RK-018', 'civil', 'ceiling crack', '', '2024-08-23 05:27:19', '', '3', 'not completed'),
(6, 1008, '1141004', 'rahul', 'IT', '9585259075', 'rahul.it@mail.com', 'RK Block', 'RK-119', 'civil', 'broken tiles on the floor', '', '2024-08-23 05:44:40', '', '4', 'not completed'),
(7, 1005, '1141004', 'hari', 'AIML', '958352738', 'hari.aiml@mkce.ac.in', 'RK-BLOCK', 'RK-311', 'ELECTRICAL', 'wires are cut down ', '', '2024-08-23 05:52:07', '', '5', 'not completed'),
(8, 1006, '1141011', 'saran', 'ECE', '7582559075', 'saran.ece@mail.com', 'APJ-BLOCK', 'APJ 320', 'ELECTRICAL', 'PROJECTOR NOT WORKING', '', '2024-08-23 05:54:31', '', '6', 'not completed'),
(9, 1007, '1155006', 'bala', 'CSBS', '8593224531', 'bala@mail.com', 'RK Block', 'RK 020', 'ELECTRICAL', 'BULB NOT FIXED', '', '2024-08-23 05:56:31', '', '7', 'NOT COMPLETED'),
(10, 1004, '1141002', 'SMITH', 'TIH', '9583528987', 'rabin.tih@mkce.ac.in', 'APJ-BLOCK', 'APJ 318', 'ELECTRICAL', 'FANS SOUND PROBLEM', '', '2024-08-23 05:58:58', '', '8', 'NOT COMPLETED'),
(11, 1009, '1155009', 'KUMAR', 'CSE', '9585259554', 'kumar.cse@mkce.ac.in', 'APJ-BLOCK', 'APJ 018', 'ELECTRICAL', 'fans needed to be fixed', '', '2024-08-23 06:00:56', '', '9', 'not completed'),
(12, 1011, '1155004', 'sami', 'AIML', '9585253525', 'sami.aiml@mkce.ac.in', 'RK-BLOCK', 'RK-116', 'civil', 'thara polathu kadaku', '', '2024-08-23 06:10:10', '', '11', 'not completed'),
(13, 1012, '1141003', 'jeeva', 'EEE', '6582559075', 'jeeva.eee@mkce.ac.in', 'RK-BLOCK', 'RK-019', 'ELECTRICAL', 'bulb not glowing', '', '2024-08-23 06:14:14', '', '10', 'not completed'),
(14, 1013, '1155003', 'viswa', 'CSBS', '9585253523', 'viswa.csbs@mkce.ac.in', 'APJ-BLOCK', 'APJ 318', 'ELECTRICAL', 'wires not connected to power source', '', '2024-08-23 06:16:33', '', '12', 'rejected');

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
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
