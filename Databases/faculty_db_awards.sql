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
-- Table structure for table `faculty_db_awards`
--

CREATE TABLE `faculty_db_awards` (
  `sno` int(11) NOT NULL,
  `award_description` varchar(500) NOT NULL,
  `year` int(4) NOT NULL,
  `id` varchar(30) NOT NULL,
  `UpdateTime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faculty_db_awards`
--

INSERT INTO `faculty_db_awards` (`sno`, `award_description`, `year`, `id`, `UpdateTime`) VALUES
(1, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea omnis similique placeat cum. Delectus, autem. Veniam dolor facere quod eius assumenda, repellendus animi ipsa, nisi quisquam sed voluptatum laudantium ab suscipit sequi nostrum accusantium. In pariatur dicta consequuntur harum atque neque fugit, omnis, natus consequatur aut quis tenetur adipisci illum?', 2021, '1234', '2023-12-01 13:55:45'),
(2, ' Ea omnis similique placeat cum. Delectus, autem. Veniam dolor facere quod eius assumenda, repellendus animi ipsa, nisi quisquam sed voluptatum laudantium ab suscipit sequi nostrum accusantium. In pariatur dicta consequuntur harum atque neque fugit, omnis, natus consequatur aut quis tenetur adipisci illum?', 2025, '123', '2023-12-01 13:55:45'),
(3, 'Awarded asTop Performer of the batch in Intermediate Education with a Merit Memonto', 2020, '1234', '2023-12-01 13:55:45'),
(4, 'Awarded as a best Developer in the domain PHP', 2024, 'IIITDMK65699c30405f4', '2023-12-01 14:20:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `faculty_db_awards`
--
ALTER TABLE `faculty_db_awards`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `faculty_db_awards`
--
ALTER TABLE `faculty_db_awards`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
