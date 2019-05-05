-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 05, 2019 at 12:38 AM
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

-- --------------------------------------------------------

--
-- Table structure for table `donor_primary_info`
--

CREATE TABLE `donor_primary_info` (
  `phone_number` int(11) NOT NULL,
  `blood_group` varchar(5) NOT NULL,
  `name` varchar(255) NOT NULL,
  `age` int(3) NOT NULL,
  `weight` int(3) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `location` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  `last_donation_date` varchar(30) NOT NULL,
  `user_type` varchar(25) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donor_primary_info`
--

INSERT INTO `donor_primary_info` (`phone_number`, `blood_group`, `name`, `age`, `weight`, `gender`, `location`, `comment`, `last_donation_date`, `user_type`, `pass`) VALUES
(12, 'A+', '', 0, 0, '', '', '', '2018-12-07', '', ''),
(77, 'B-', 'g', 0, 0, 'Male', 'ddd', '', '2018-10-22', '', ''),
(5522, 'A+', 'xdfg', 2, 2, 'Male', '2', '2', '', '', ''),
(425425, 'A+', 'Maksud', 5, 5, 'Male', '55', 'fd', '0000-00-00', 'donor', '001122'),
(4254254, 'A+', 'tauhid', 45, 5, 'Male', '55', 'ff', '0000-00-00', 'donor', '001122'),
(1614001300, 'AB+', 'Sadman Rownak', 22, 100, 'Male', 'New market,Satmatha,Bogura', '', '2018-10-26', '', ''),
(1701021448, 'B+', 'Tasnimul Hasan Tauhid', 19, 74, 'Male', 'Uposhohor', 'N/A', '2018-10-20', 'admin', '001122'),
(1701281402, 'O+', 'Tohura', 18, 52, 'Female', 'Rohomannogor Bogura', '29-09-18 free 29-12-18', '0000-00-00', '', ''),
(1719510050, 'B+', 'Alif ', 18, 68, 'Male', 'Natai para Bogra ', '', '2018-11-02', '', ''),
(1722535899, 'A+', 'Md. Moinul Hossan', 23, 105, 'Male', 'Bashundahra Ra, dhaka', '', '0000-00-00', 'donor', '01722535899'),
(1725088028, 'A+', 'Nafis Tahmid', 19, 100, '', 'Uposhohor', '', '2018-10-22', '', ''),
(1727178100, 'AB+', 'Shezan ', 18, 52, 'Male', 'Naruli Bogura ', '', '2018-12-10', '', ''),
(1737595767, 'O+', 'Almahmudur Rahman', 28, 63, 'Male', 'Dhaka', '', '0000-00-00', 'donor', 'MistyMahmud2018'),
(1746894149, 'A+', 'Shohel ', 28, 0, 'Male', 'Uposhor', '1mnth por blood deta parba', '2018-10-22', '', ''),
(1748709677, 'O+', 'Abdullah RCY', 23, 64, 'Male', 'Seujgari Bogura ', '', '0000-00-00', '', ''),
(1749423982, 'B+', 'Shahed Hassain', 40, 82, 'Male', 'Maltinogor ', 'best moment of my lyf', '2018-10-22', '', ''),
(1750730494, 'O+', 'Kobir', 20, 75, 'Male', 'Uposhor Bogra ', '16-10-18 free :- 16-01-19', '0000-00-00', '', ''),
(1755724222, 'A+', 'Asif Iqbal Anik ', 19, 61, 'Male', 'Naruli Bogura ', '', '0000-00-00', '', ''),
(1758445958, 'A+', 'Shafin ', 18, 56, 'Male', 'Fultola, cantonment ', '', '2018-11-02', '', ''),
(1758622204, 'O+', 'Bishoy', 19, 67, 'Male', 'Jelowshoritola Bogura', '03-09-18 free :-03-12-18', '0000-00-00', '', ''),
(1759992314, 'A+', 'Sakib Syed', 18, 67, '', 'Namazghar', '', '2018-10-20', '', ''),
(1777610833, 'A+', 'Shahriar ', 19, 56, 'Male', 'Naruli Bogura ', '', '2018-11-04', '', ''),
(1778572658, 'A+', 'Syed Rafe', 21, 85, 'Male', 'Sutrapur Bogura', '', '2018-11-02', '', ''),
(1864639154, 'B+', 'Jami', 20, 52, 'Male', 'Jaleswaritola ', '6 trikh ar por', '0000-00-00', '', ''),
(1917974820, 'O+', 'Mobin', 19, 100, 'Male', 'Doctors Unit 2 thonthonia ', '', '2018-10-24', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `request_id` int(3) NOT NULL,
  `blood_group` varchar(3) NOT NULL,
  `place` varchar(255) NOT NULL,
  `contact` int(11) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `requests`
--

INSERT INTO `requests` (`request_id`, `blood_group`, `place`, `contact`, `status`) VALUES
(1, 'A+', 'dsfg', 54120, 'New'),
(2, 'A+', 'dfdfas', 444, 'New'),
(3, 'A+', 'dfdfas', 444, 'New'),
(4, 'B+', 'Upashohor', 1702455622, 'New'),
(5, 'A+', 'Bogura', 17, 'New'),
(6, 'A+', 'dsfg', 17, 'New'),
(7, 'A+', 'gulshan', 987654321, 'New'),
(8, 'A+', 'bashundhara', 1714291522, 'New');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donor_primary_info`
--
ALTER TABLE `donor_primary_info`
  ADD PRIMARY KEY (`phone_number`),
  ADD UNIQUE KEY `phone_number` (`phone_number`);

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`request_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `request_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
