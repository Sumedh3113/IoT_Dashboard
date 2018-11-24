-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2018 at 08:11 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sensordata`
--

-- --------------------------------------------------------

--
-- Table structure for table `final`
--

CREATE TABLE `final` (
  `date` date NOT NULL,
  `Lights` varchar(10) NOT NULL,
  `id` int(10) NOT NULL,
  `status` varchar(15) NOT NULL,
  `sequence` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `final`
--

INSERT INTO `final` (`date`, `Lights`, `id`, `status`, `sequence`) VALUES
('0000-00-00', '56', 0, '0', 1),
('0000-00-00', '45', 0, '0', 2),
('0000-00-00', '65', 0, '0', 3),
('0000-00-00', '76', 0, '0', 4),
('0000-00-00', '5', 0, '0', 5),
('0000-00-00', '7', 0, '0', 6),
('0000-00-00', '9', 0, '0', 7),
('0000-00-00', '75', 0, '0', 8),
('0000-00-00', '15', 0, '0', 9),
('0000-00-00', '30', 0, '0', 10),
('0000-00-00', '65', 0, '0', 11),
('0000-00-00', '55', 0, '0', 12),
('0000-00-00', '45', 0, '0', 13),
('2018-11-15', '65', 0, '0', 14),
('2018-11-14', '65', 0, '0', 15),
('2018-11-15', '52', 0, '0', 16),
('2018-11-14', '52', 0, '0', 17),
('2018-11-15', '65', 0, '0', 18),
('2018-11-16', '55', 0, '0', 19),
('2018-11-17', '47', 0, '0', 20),
('2018-11-18', '49', 0, '0', 21),
('2018-11-17', '42', 0, '0', 22),
('2018-11-17', '2', 0, '0', 23),
('2018-11-17', '20', 0, '0', 24),
('2018-11-18', '55', 0, '0', 25),
('2018-11-18', '60', 0, '0', 26),
('2018-11-18', '42', 0, '0', 27),
('2018-11-19', '4', 8, '0', 28),
('2018-11-19', '4', 8, '0', 29),
('2018-11-19', '4', 8, '0', 30),
('2018-11-19', '4', 8, '0', 31),
('2018-11-19', '4', 8, '6', 32),
('2018-11-19', '4', 8, '0', 33),
('2018-11-19', '4', 8, '0', 34),
('2018-11-19', '4', 8, '0', 35),
('2018-11-19', '22', 88, '6', 36),
('2018-11-19', '22', 88, '5', 37),
('0000-00-00', '0', 1, 'Active', 38),
('2018-11-23', '0', 1, 'inactive', 39),
('2018-11-23', '0', 1, 'Active', 40),
('2018-11-23', '0', 1, 'Inactive', 41),
('2018-11-23', '0', 1, 'Active', 42),
('2018-11-23', '0', 1, 'Active', 43),
('2018-11-23', '0', 1, 'Inactive', 44),
('2018-11-23', '58', 2, 'Active', 45),
('2018-11-23', '85', 2, 'Inactive', 46);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `final`
--
ALTER TABLE `final`
  ADD PRIMARY KEY (`sequence`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `final`
--
ALTER TABLE `final`
  MODIFY `sequence` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
