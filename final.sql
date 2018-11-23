-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2018 at 08:56 AM
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
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `final`
--

INSERT INTO `final` (`date`, `Lights`, `id`, `status`) VALUES
('0000-00-00', '56', 0, 0),
('0000-00-00', '45', 0, 0),
('0000-00-00', '65', 0, 0),
('0000-00-00', '76', 0, 0),
('0000-00-00', '5', 0, 0),
('0000-00-00', '7', 0, 0),
('0000-00-00', '9', 0, 0),
('0000-00-00', '75', 0, 0),
('0000-00-00', '15', 0, 0),
('0000-00-00', '30', 0, 0),
('0000-00-00', '65', 0, 0),
('0000-00-00', '55', 0, 0),
('0000-00-00', '45', 0, 0),
('2018-11-15', '65', 0, 0),
('2018-11-14', '65', 0, 0),
('2018-11-15', '52', 0, 0),
('2018-11-14', '52', 0, 0),
('2018-11-15', '65', 0, 0),
('2018-11-16', '55', 0, 0),
('2018-11-17', '47', 0, 0),
('2018-11-18', '49', 0, 0),
('2018-11-17', '42', 0, 0),
('2018-11-17', '2', 0, 0),
('2018-11-17', '20', 0, 0),
('2018-11-18', '55', 0, 0),
('2018-11-18', '60', 0, 0),
('2018-11-18', '42', 0, 0),
('2018-11-19', '4', 8, 0),
('2018-11-19', '4', 8, 0),
('2018-11-19', '4', 8, 0),
('2018-11-19', '4', 8, 0),
('2018-11-19', '4', 8, 6),
('2018-11-19', '4', 8, 0),
('2018-11-19', '4', 8, 0),
('2018-11-19', '4', 8, 0),
('2018-11-19', '22', 88, 6),
('2018-11-19', '22', 88, 5);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
