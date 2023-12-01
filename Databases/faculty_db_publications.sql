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
-- Table structure for table `faculty_db_publications`
--

CREATE TABLE `faculty_db_publications` (
  `sno` int(11) NOT NULL,
  `description` varchar(450) NOT NULL,
  `type` varchar(15) NOT NULL,
  `id` varchar(30) NOT NULL,
  `UpdateTime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faculty_db_publications`
--

INSERT INTO `faculty_db_publications` (`sno`, `description`, `type`, `id`, `UpdateTime`) VALUES
(1, 'D. Bhor, T. K, M. G. S, B. K. Mishra, D. Kalita, A. Thirugnanam, and M. K. Baig, \"Responsive Transcutaneous Electrical Stimulation for Management of Diabetic Foot Neuropathy\", in 2023 IEEE 8th International Conference for Convergence in Technology (I', 'Workshop', '1234', '2023-12-01 14:02:18'),
(2, 'D. Bhor, T. K, M. G. S, B. K. Mishra, D. Kalita, A. Thirugnanam, and M. K. Baig, \"Responsive Transcutaneous Electrical Stimulation for Management of Diabetic Foot Neuropathy\", in 2023 IEEE 8th International Conference for Convergence in Technology (I2CT), pp.1-6, IEEE, April 2023, 10.1109/I2CT57861.', 'Workshop', '1234', '2023-12-01 14:02:18'),
(3, 'D. Bhor, T. K, M. G. S, B. K. Mishra, D. Kalita, A. Thirugnanam, and M. K. Baig, \"Responsive Transcutaneous Electrical Stimulation for Management of Diabetic Foot Neuropathy\", in 2023 IEEE 8th International Conference for Convergence in Technology (I2CT), pp.1-6, IEEE, April 2023, 10.1109/I2CT57861.2023.10126247 Lorem ipsum dolor, sit amet consectetur adipisicing elit. Explicabo, quos', 'Workshop', '1234', '2023-12-01 14:02:18'),
(4, 'Written a book named as \"How to Play Free fire ?\"', 'Game User manua', '1234', '2023-12-01 14:02:18'),
(5, 'Research paper on how to survive in this competitive techincal world?', 'Research Paper', '1234', '2023-12-01 14:02:18'),
(6, 'Published a research paper on PHP', 'Book', 'IIITDMK65699c30405f4', '2023-12-01 14:17:39'),
(7, 'Developed a User Manual for Faculty Developement Panel', 'User Manual', 'IIITDMK65699c30405f4', '2023-12-01 14:17:39'),
(8, 'Designed a UML Diagram for Alumni Portal', 'UML Diagram', 'IIITDMK65699c30405f4', '2023-12-01 14:17:39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `faculty_db_publications`
--
ALTER TABLE `faculty_db_publications`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `faculty_db_publications`
--
ALTER TABLE `faculty_db_publications`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
