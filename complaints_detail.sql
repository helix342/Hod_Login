-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 11, 2024 at 04:52 PM
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

INSERT INTO `complaints_detail` (`id`, `faculty_id`, `faculty_name`, `department`, `faculty_contact`, `faculty_mail`, `block_venue`, `venue_name`, `type_of_problem`, `problem_description`, `image`, `date_of_reg`, `days_to_complete`, `status`, `feedback`) VALUES
(3, '1155002', 'Mr.Kalaiarasan Kumar', 'TIH', '455432245315', 'fdsfhfhdusfghdsgf@mail.com', 'RK Block', 'RK-310', 'ELECTRICAL', 'WIRES is bitten by mouse', 'image-3.jpg', '2024-09-11 05:52:19', '', '4', 'ggg'),
(5, '1141002', 'sakthi', 'CSE', '9585253525', 'sakthi.cse@mkce.ac.in', 'APJ-BLOCK', 'RK-018', 'civil', 'ceiling crack', 'image-5.jpg', '2024-09-11 05:53:26', '', '4', 'ssss'),
(6, '1141004', 'rahul', 'IT', '9585259075', 'rahul.it@mail.com', 'RK Block', 'RK-119', 'civil', 'broken tiles on the floor', 'image-6.jpg', '2024-09-11 05:53:32', '', '11', 'pudikkala\r\n'),
(7, '1141004', 'hari', 'AIML', '958352738', 'hari.aiml@mkce.ac.in', 'RK-BLOCK', 'RK-311', 'ELECTRICAL', 'wires are cut down ', 'image-7.jpg', '2024-09-11 05:53:36', '', '5', 'ohmygaad'),
(8, '1141011', 'saran', 'ECE', '7582559075', 'saran.ece@mail.com', 'APJ-BLOCK', 'APJ 320', 'ELECTRICAL', 'PROJECTOR NOT WORKING', 'image-8.png', '2024-09-11 07:38:01', '', '5', 'rejected'),
(9, '1155006', 'bala', 'CSBS', '8593224531', 'bala@mail.com', 'RK Block', 'RK 020', 'ELECTRICAL', 'BULB NOT FIXED', 'image-9.png', '2024-09-11 09:42:29', '', '4', 'NOT COMPLETED'),
(10, '1141002', 'SMITH', 'TIH', '9583528987', 'rabin.tih@mkce.ac.in', 'APJ-BLOCK', 'APJ 318', 'ELECTRICAL', 'FANS SOUND PROBLEM', 'image-10.jpg', '2024-09-11 07:09:43', '', '4', 'kjkj'),
(12, '1155004', 'sami', 'AIML', '9585253525', 'sami.aiml@mkce.ac.in', 'RK-BLOCK', 'RK-116', 'civil', 'thara polathu kadaku', 'image-12.jpg', '2024-09-11 09:43:06', '', '4', 'not gud\r\n'),
(13, '1141003', 'jeeva', 'EEE', '6582559075', 'jeeva.eee@mkce.ac.in', 'RK-BLOCK', 'RK-019', 'ELECTRICAL', 'bulb not glowing', 'image-13.jpg', '2024-09-11 09:45:50', '', '5', 'asdfghjhgfds'),
(14, '1155003', 'viswa', 'CSBS', '9585253523', 'viswa.csbs@mkce.ac.in', 'APJ-BLOCK', 'APJ 318', 'ELECTRICAL', 'wires not connected to power source', 'image-14.jpg', '2024-09-11 07:37:46', '', '4', 'dv'),
(15, '1155002', 'barani nayagi', 'AIML', '958352738', 'srihari.cse@mkce.ac.in', 'APJ-BLOCK', 'RK-018', 'civil', 'Building Crack', 'image-15.jpg', '2024-09-11 05:37:58', '1', '2', ''),
(16, '1155002', 'ff', 'AIML', '7582559075', 'rahul.it@mail.com', '', '', '', 'lizard biryani', 'image-16.jpg', '2024-09-11 05:38:03', '', '2', '');

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
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
