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
-- Table structure for table `faculty_db_courses_taught`
--

CREATE TABLE `faculty_db_courses_taught` (
  `sno` int(11) NOT NULL,
  `course_id` varchar(15) NOT NULL,
  `course_name` varchar(50) NOT NULL,
  `course_type` varchar(15) NOT NULL,
  `id` varchar(30) NOT NULL,
  `UpdateTime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faculty_db_courses_taught`
--

INSERT INTO `faculty_db_courses_taught` (`sno`, `course_id`, `course_name`, `course_type`, `id`, `UpdateTime`) VALUES
(1, 'DBMS01', 'DataBase Management Syste', 'Theory', '1234', '2023-12-01 13:57:19'),
(2, 'AI01', 'Artificial Intelligence', 'Practical', '1234', '2023-12-01 13:57:19'),
(3, 'OS', 'operating Systems', 'Theory', '1234', '2023-12-01 13:57:19'),
(4, 'ADSA', 'Data Structures and Algorithms', 'Algorithmic', '1234', '2023-12-01 13:57:19'),
(5, 'UML11A', 'UML Diagrams', 'Diagram', 'IIITDMK65699c30405f4', '2023-12-01 14:18:25'),
(6, 'DS', 'Data Science', 'Theoretical', 'IIITDMK65699c30405f4', '2023-12-01 14:18:25'),
(7, 'ML', 'Machine Learning', 'Theretical', 'IIITDMK65699c30405f4', '2023-12-01 14:18:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `faculty_db_courses_taught`
--
ALTER TABLE `faculty_db_courses_taught`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `faculty_db_courses_taught`
--
ALTER TABLE `faculty_db_courses_taught`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
