-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 05, 2019 at 12:37 AM
-- Server version: 5.7.25
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bloodapp_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `donation_info`
--

CREATE TABLE `donation_info` (
  `donor_id` int(11) NOT NULL,
  `location` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donation_info`
--

INSERT INTO `donation_info` (`donor_id`, `location`) VALUES
(1701021448, 'SZRMC'),
(1701021448, 'SZRMC'),
(1701021448, 'SZRMC'),
(1701021448, ''),
(1701021448, ''),
(1701021448, ''),
(1701021448, 'fghjk'),
(0, ''),
(0, ''),
(0, ''),
(0, ''),
(1701021448, 'SZRMC'),
(1759992314, ''),
(12, '12'),
(1725088028, 'SZMC'),
(77, 'xxcxx'),
(1749423982, 'Ma Clinick'),
(1746894149, 'Medical'),
(1917974820, 'Doctors Unit 2 Thonthonia '),
(1917974820, 'Doctors Unit 2 Thonthonia '),
(1778572658, 'Medical Bogura'),
(1614001300, 'Medical Bogura'),
(1778572658, 'provati hospital'),
(1778572658, ''),
(1758445958, 'provati hospital'),
(1719510050, 'Sodash Hospital Bogura '),
(1777610833, 'Islimiya Hospital Bogura'),
(12, ''),
(1727178100, '1727178100');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
