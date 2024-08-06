-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 06, 2024 at 06:12 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `std`
--

-- --------------------------------------------------------

--
-- Table structure for table `ress`
--

CREATE TABLE `ress` (
  `rno` varchar(30) DEFAULT NULL,
  `nm` varchar(30) DEFAULT NULL,
  `br` varchar(30) DEFAULT NULL,
  `g1` varchar(30) DEFAULT NULL,
  `g2` varchar(30) DEFAULT NULL,
  `g3` varchar(30) DEFAULT NULL,
  `g4` varchar(30) DEFAULT NULL,
  `g5` varchar(30) DEFAULT NULL,
  `s1` varchar(30) DEFAULT NULL,
  `s2` varchar(30) DEFAULT NULL,
  `s3` varchar(30) DEFAULT NULL,
  `s4` varchar(30) DEFAULT NULL,
  `s5` varchar(30) DEFAULT NULL,
  `p1` varchar(30) DEFAULT NULL,
  `p2` varchar(30) DEFAULT NULL,
  `p3` varchar(30) DEFAULT NULL,
  `p4` varchar(30) DEFAULT NULL,
  `p5` varchar(30) DEFAULT NULL,
  `gen` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ress`
--

INSERT INTO `ress` (`rno`, `nm`, `br`, `g1`, `g2`, `g3`, `g4`, `g5`, `s1`, `s2`, `s3`, `s4`, `s5`, `p1`, `p2`, `p3`, `p4`, `p5`, `gen`) VALUES
('21991A4225', 'Ganapathi', 'CSE', 'A', 'B', 'C', 'D', 'A', 'English', 'm1', 'chemistry', 'c language', 'workshop', '80', '75', '70', '85', '90', 'male'),
('21991A4226', 'Guna Sekhar', 'ECE', 'B', 'A', 'D', 'C', 'B', 'English', 'm1', 'chemistry', 'c language', 'workshop', '78', '82', '68', '74', '81', 'male'),
('21991A4227', 'Lokesh', 'MECH', 'C', 'C', 'B', 'A', 'D', 'English', 'm1', 'chemistry', 'c language', 'workshop', '85', '79', '88', '92', '77', 'male'),
('21991A4228', 'Laxmi', 'EEE', 'D', 'B', 'A', 'B', 'C', 'English', 'm1', 'chemistry', 'c language', 'workshop', '65', '80', '75', '68', '90', 'female'),
('21991A4229', 'Anandh', 'CSM', 'A', 'D', 'C', 'A', 'B', 'English', 'm1', 'chemistry', 'c language', 'workshop', '92', '78', '85', '89', '76', 'male');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
