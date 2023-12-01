-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2023 at 09:55 AM
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
-- Database: `phpform`
--

-- --------------------------------------------------------

--
-- Table structure for table `faculty_db_continuing_education`
--

CREATE TABLE `faculty_db_continuing_education` (
  `sno` int(11) NOT NULL,
  `sector` varchar(100) NOT NULL,
  `dept` varchar(100) NOT NULL,
  `role` varchar(30) NOT NULL,
  `duration` varchar(20) NOT NULL,
  `status` varchar(15) NOT NULL,
  `type` varchar(15) NOT NULL,
  `id` varchar(30) NOT NULL,
  `UpdateTime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faculty_db_continuing_education`
--

INSERT INTO `faculty_db_continuing_education` (`sno`, `sector`, `dept`, `role`, `duration`, `status`, `type`, `id`, `UpdateTime`) VALUES
(1, 'Development of Drug Anlaysis', 'Computer Science and Engineering', 'Validator', '15 Months', 'Running', 'Sponsored', '1234', '2023-12-01 13:56:29'),
(2, 'Development of Drug Anlaysis', 'Computer Science and Engineering', 'Validator', '15 Months', 'Completed', 'Sponsored', '1234', '2023-12-01 13:56:29'),
(3, 'Ph.d - Risk Analysing of drinking Soft Drinks', 'Chemical', 'Analyst', '15 months', 'Processing', 'Sponsored', '1234', '2023-12-01 13:56:29'),
(4, 'Ph.D', 'CS', 'Developer', '2 years', 'Pursuing', 'Single', 'IIITDMK65699c30405f4', '2023-12-01 14:16:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `faculty_db_continuing_education`
--
ALTER TABLE `faculty_db_continuing_education`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `faculty_db_continuing_education`
--
ALTER TABLE `faculty_db_continuing_education`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
