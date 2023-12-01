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
-- Table structure for table `faculty_db_education_data`
--

CREATE TABLE `faculty_db_education_data` (
  `sno` int(11) NOT NULL,
  `program` varchar(30) NOT NULL,
  `stream` varchar(50) NOT NULL,
  `university_name` varchar(100) NOT NULL,
  `year_of_passout` varchar(4) NOT NULL,
  `id` varchar(30) NOT NULL,
  `UpdateTime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faculty_db_education_data`
--

INSERT INTO `faculty_db_education_data` (`sno`, `program`, `stream`, `university_name`, `year_of_passout`, `id`, `UpdateTime`) VALUES
(1, 'Bachelor of Technology', 'Computer Science and Engineeri', 'Rayalaseema University College of Engineering', '2024', '1234', '2023-12-01 13:58:34'),
(2, 'Master of technology', 'Computer Science', 'IIITDM, Kurnool', '2026', '1234', '2023-12-01 13:58:34'),
(3, 'B.Tech', 'CSE', 'RUCE', '2024', '', '2023-12-01 13:58:34'),
(4, 'M.Tech', 'CS', 'IIIITDM, Kurnool', '2026', '', '2023-12-01 13:58:34'),
(5, 'Ph.D', 'Computers', 'IIT Madras', '2029', '', '2023-12-01 13:58:34'),
(6, 'bachelors', 'ECE', 'RUK', '2023', '1234', '2023-12-01 13:58:34'),
(7, 'Masters', 'Communication Engineering', 'Indian Institute of Information Technology Design and Manufacturing, Kurnool', '2028', '1234', '2023-12-01 13:58:34'),
(8, 'Doctor of Philosophy', 'Research', 'IIT Bombay', '2030', '1234', '2023-12-01 13:58:34'),
(9, 'demo', 'demo', 'demo', 'demo', '1234', '2023-12-01 13:58:34'),
(10, 'PHD', 'CS', 'IIITDMK', '2026', '1234', '2023-12-01 13:58:34'),
(11, 'Btech', 'cse', 'ruk', '2026', 'IIITDMK656', '2023-12-01 13:58:34'),
(12, 'Btech', 'CSE', 'IITB', '2025', 'IIITDMK65699c30405f4', '2023-12-01 14:14:16'),
(13, 'MTech', 'CS', 'IITB', '2027', 'IIITDMK65699c30405f4', '2023-12-01 14:14:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `faculty_db_education_data`
--
ALTER TABLE `faculty_db_education_data`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `faculty_db_education_data`
--
ALTER TABLE `faculty_db_education_data`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
