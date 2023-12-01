-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2023 at 09:56 AM
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
-- Table structure for table `faculty_db_projects`
--

CREATE TABLE `faculty_db_projects` (
  `sno` int(11) NOT NULL,
  `project_title` varchar(50) NOT NULL,
  `domain` varchar(30) NOT NULL,
  `role` varchar(20) NOT NULL,
  `duration` varchar(15) NOT NULL,
  `status` varchar(10) NOT NULL,
  `type` varchar(15) NOT NULL,
  `id` varchar(30) NOT NULL,
  `UpdateTime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faculty_db_projects`
--

INSERT INTO `faculty_db_projects` (`sno`, `project_title`, `domain`, `role`, `duration`, `status`, `type`, `id`, `UpdateTime`) VALUES
(1, 'Online Feedback System', 'Computer Science', 'Developer', '6 months', 'completed', 'Academic', '1234', '2023-12-01 14:01:50'),
(2, 'Alumni Relations', 'CS', 'Developer', '3 months', 'Running', 'Sponsored', '1234', '2023-12-01 14:01:50'),
(3, 'Digital Notes', 'PHP', 'Inspector', '2 months', 'Pending', 'Web Application', '1234', '2023-12-01 14:01:50'),
(4, 'Peoject Showcase', 'PHP', 'Guide', '01 Month', 'Completed', 'Deployed', '1234', '2023-12-01 14:01:50'),
(5, 'Garden Management System', 'PHP', 'Frontend Dev', '2 Months', 'Deployed', 'Virtual', '1234', '2023-12-01 14:01:50'),
(6, 'Feedback system', 'Web ', 'Developer', '5months', 'done', 'Sponsored', 'IIITDMK65699c30405f4', '2023-12-01 14:15:59'),
(7, 'Blood Donation Site', 'Web', 'Tester', '1month', 'Done', 'Deployed', 'IIITDMK65699c30405f4', '2023-12-01 14:15:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `faculty_db_projects`
--
ALTER TABLE `faculty_db_projects`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `faculty_db_projects`
--
ALTER TABLE `faculty_db_projects`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
