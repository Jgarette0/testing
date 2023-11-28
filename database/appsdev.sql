-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2023 at 09:24 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `appsdev`
--

-- --------------------------------------------------------

--
-- Table structure for table `classrooms`
--

CREATE TABLE `classrooms` (
  `classroom_id` int(11) NOT NULL,
  `classroom_name` varchar(50) DEFAULT NULL,
  `classroom_status` enum('vacant','occupied') DEFAULT 'vacant'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `classrooms`
--

INSERT INTO `classrooms` (`classroom_id`, `classroom_name`, `classroom_status`) VALUES
(1, 'BSEntrep I', 'vacant'),
(2, 'BSIT I', 'vacant'),
(3, 'IT Department', 'vacant'),
(4, 'BPED I', 'vacant'),
(5, 'BEED I', 'vacant'),
(6, 'BSED I', 'vacant'),
(7, 'Computer Lab', 'vacant'),
(8, 'ABM II', 'vacant'),
(9, 'HUMMS II', 'vacant'),
(10, 'STEM II', 'vacant'),
(11, 'SHS II', 'vacant'),
(12, 'SHS I', 'vacant'),
(13, 'Music Department', 'vacant'),
(14, 'STEM I', 'vacant'),
(15, 'HUMMS I', 'vacant'),
(16, 'ABM I', 'vacant'),
(17, 'Lecture Room I', 'vacant'),
(18, 'Computer Laboratory', 'vacant'),
(19, 'TVL Room', 'vacant'),
(20, 'BSED', 'vacant'),
(21, 'BPED I', 'vacant'),
(22, 'BEED I', 'vacant'),
(23, 'BSEntrep', 'vacant');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `classrooms`
--
ALTER TABLE `classrooms`
  ADD PRIMARY KEY (`classroom_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `classrooms`
--
ALTER TABLE `classrooms`
  MODIFY `classroom_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
