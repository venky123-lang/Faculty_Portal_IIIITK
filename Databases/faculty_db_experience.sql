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
-- Table structure for table `faculty_db_experience`
--

CREATE TABLE `faculty_db_experience` (
  `sno` int(11) NOT NULL,
  `domain` varchar(100) NOT NULL,
  `institute` varchar(100) NOT NULL,
  `from_date` varchar(15) NOT NULL,
  `to_date` varchar(15) NOT NULL,
  `id` varchar(30) NOT NULL,
  `UpdateTime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faculty_db_experience`
--

INSERT INTO `faculty_db_experience` (`sno`, `domain`, `institute`, `from_date`, `to_date`, `id`, `UpdateTime`) VALUES
(1, 'Data Structures and Algorithms with C++', 'Rayalaseema Unniversity College of Engineering, Kurnool', '12-05-2022', '16-12-2023', '1234', '2023-12-01 14:00:02'),
(2, 'Data Structures and Algorithms with C++', 'Rayalaseema Unniversity College of Engineering, Kurnool', '12-05-2022', '16-12-2023', '1234', '2023-12-01 14:00:02'),
(3, 'cse', 'ruk', '12', '15', '1234', '2023-12-01 14:00:02'),
(4, 'Computers', 'IIITDMK', '12', '25', '1234', '2023-12-01 14:00:02'),
(5, 'Electronics', 'IITB', '12', '12', '1234', '2023-12-01 14:00:02'),
(6, 'Electricals', '21NITK', '23', '52', '1234', '2023-12-01 14:00:02'),
(7, 'Research', 'NITRKL', '2023-11-01', '2023-11-08', '1234', '2023-12-01 14:00:02'),
(8, 'hghjh', 'gjhgjhg', '2023-11-15', '2023-11-07', '1234', '2023-12-01 14:00:02'),
(9, 'Web Development', 'RUC', '2222-02-12', '24224-02-22', 'IIITDMK6569963e55e1f', '2023-12-01 14:04:04'),
(10, 'Web & ML', 'RUK', '0001-11-11', '0022-02-22', 'IIITDMK65699c30405f4', '2023-12-01 14:14:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `faculty_db_experience`
--
ALTER TABLE `faculty_db_experience`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `faculty_db_experience`
--
ALTER TABLE `faculty_db_experience`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
