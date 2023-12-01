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
-- Table structure for table `faculty_db_expertise`
--

CREATE TABLE `faculty_db_expertise` (
  `sno` int(11) NOT NULL,
  `expertise_info` varchar(200) NOT NULL,
  `id` varchar(30) NOT NULL,
  `UpdateTime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faculty_db_expertise`
--

INSERT INTO `faculty_db_expertise` (`sno`, `expertise_info`, `id`, `UpdateTime`) VALUES
(1, 'Developed so many applications in the domain web Development using HTML, CSS, JavaScript, MySQL, PHP', '1234', '2023-12-01 14:00:44'),
(2, 'Developed so many applications in the domain web Development using HTML, CSS, JavaScript, MySQL, PHP', '1234', '2023-12-01 14:00:44'),
(3, 'Demo Expertise Info Description', '1234', '2023-12-01 14:00:44'),
(4, 'Demo Expertise Info Description 1', '1234', '2023-12-01 14:00:44'),
(5, 'Developed so many web Applictions for so many number of Organizations and colleges', 'IIITDMK65699c30405f4', '2023-12-01 14:15:09'),
(6, 'Developed so many web Applictions for so many number of Organizations and colleges', 'IIITDMK65699c30405f4', '2023-12-01 14:15:09'),
(7, 'Developed so many web Applictions for so many number of Organizations and colleges', 'IIITDMK65699c30405f4', '2023-12-01 14:15:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `faculty_db_expertise`
--
ALTER TABLE `faculty_db_expertise`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `faculty_db_expertise`
--
ALTER TABLE `faculty_db_expertise`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
