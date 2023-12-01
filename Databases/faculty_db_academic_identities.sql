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
-- Table structure for table `faculty_db_academic_identities`
--

CREATE TABLE `faculty_db_academic_identities` (
  `sno` int(11) NOT NULL,
  `orcid` varchar(100) NOT NULL,
  `scopus` varchar(100) NOT NULL,
  `researcher` varchar(100) NOT NULL,
  `google_scholar` varchar(100) NOT NULL,
  `id` varchar(30) NOT NULL,
  `UpdateTime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faculty_db_academic_identities`
--

INSERT INTO `faculty_db_academic_identities` (`sno`, `orcid`, `scopus`, `researcher`, `google_scholar`, `id`, `UpdateTime`) VALUES
(3, 'http://orcid.com', 'http://scopus.com', 'http://researcher.com', 'http://google.com', '1234', '0000-00-00 00:00:00'),
(6, 'http://dcs.sd', 'http://dcs.sd', 'http://dcs.sd', 'http://dcs.sd', 'IIITDMK65699c30405f4', '2023-12-01 14:20:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `faculty_db_academic_identities`
--
ALTER TABLE `faculty_db_academic_identities`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `faculty_db_academic_identities`
--
ALTER TABLE `faculty_db_academic_identities`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
