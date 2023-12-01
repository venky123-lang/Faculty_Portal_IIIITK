-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2023 at 09:57 AM
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
-- Table structure for table `faculty_db_research_scholars`
--

CREATE TABLE `faculty_db_research_scholars` (
  `sno` int(11) NOT NULL,
  `research_area` varchar(200) NOT NULL,
  `scholar_name` varchar(25) NOT NULL,
  `enrolled_in` varchar(15) NOT NULL,
  `passed_out` varchar(15) NOT NULL,
  `guide` varchar(25) NOT NULL,
  `id` varchar(30) NOT NULL,
  `UpdateTime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faculty_db_research_scholars`
--

INSERT INTO `faculty_db_research_scholars` (`sno`, `research_area`, `scholar_name`, `enrolled_in`, `passed_out`, `guide`, `id`, `UpdateTime`) VALUES
(1, 'An Approach to Improving Efficacy of Cryosurgery: Numerical and Experimental (using Gel Phantoms) Studies', 'venky', '11-02-2022', '15-09-2025', 'Supervisor', '1234', '2023-12-01 14:02:55'),
(2, 'An Approach to Improving Efficacy of Cryosurgery: Numerical and Experimental (using Gel Phantoms) Studies', 'venky', '11-02-2022', '15-09-2025', 'Supervisor', '1234', '2023-12-01 14:02:55'),
(3, 'Weather forecasting', 'venkat', '2023-11-07', '2023-11-30', 'venkata krishna', '1234', '2023-12-01 14:02:55'),
(4, 'ML', 'Venkata Krishna', '1222-11-11', '1211-02-22', 'Venky', 'IIITDMK65699c30405f4', '2023-12-01 14:18:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `faculty_db_research_scholars`
--
ALTER TABLE `faculty_db_research_scholars`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `faculty_db_research_scholars`
--
ALTER TABLE `faculty_db_research_scholars`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
