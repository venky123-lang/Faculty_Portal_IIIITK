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
-- Table structure for table `faculty_db_dissertation`
--

CREATE TABLE `faculty_db_dissertation` (
  `sno` int(11) NOT NULL,
  `dissertation_description` varchar(250) NOT NULL,
  `role` varchar(25) NOT NULL,
  `duration` varchar(25) NOT NULL,
  `id` varchar(30) NOT NULL,
  `UpdateTime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faculty_db_dissertation`
--

INSERT INTO `faculty_db_dissertation` (`sno`, `dissertation_description`, `role`, `duration`, `id`, `UpdateTime`) VALUES
(1, ' Sumanta Kar (213BM2026), \"PREPARATION AND CHARACTERIZATION OF POROUS CHITOSAN-ORGANICALLY MODIFIED MONTMORILLONITE-HYDROXYAPATITE (CS-OM-HA) COMPOSIT', 'co-Supervisor', '2020-24', '1234', '2023-12-01 13:57:56'),
(2, ' Sumanta Kar (213BM2026), \"PREPARATION AND CHARACTERIZATION OF POROUS CHITOSAN-ORGANICALLY MODIFIED MONTMORILLONITE-HYDROXYAPATITE (CS-OM-HA) COMPOSITES FOR BIOMEDICAL APPLICATIONS\" - M.Tech. ', 'co-Supervisor', '2020-24', '1234', '2023-12-01 13:57:56'),
(3, 'REPARATION AND CHARACTERIZATION OF POROUS CHITOSAN-ORGANICALLY MODIFIED MONTMORILLONITE-HYDROXYAPATITE ', 'Supervisor', '2020-2024', '1234', '2023-12-01 13:57:56'),
(4, 'Developed a Election polling software', 'Co-Supervisor', '2024-2026', '1234', '2023-12-01 13:57:56'),
(5, 'Written a Book to RU', 'Writer', '5months', 'IIITDMK65699c30405f4', '2023-12-01 14:19:47'),
(6, 'Create a Semester exam paper for Btech CSE Students', 'Creator', '2months', 'IIITDMK65699c30405f4', '2023-12-01 14:19:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `faculty_db_dissertation`
--
ALTER TABLE `faculty_db_dissertation`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `faculty_db_dissertation`
--
ALTER TABLE `faculty_db_dissertation`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
