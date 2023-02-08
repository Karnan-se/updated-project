-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 08, 2023 at 06:23 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `visitor`
--

-- --------------------------------------------------------

--
-- Table structure for table `visitors`
--

CREATE TABLE `visitors` (
  `num` int(10) NOT NULL,
  `fname` varchar(30) DEFAULT NULL,
  `lname` varchar(30) DEFAULT NULL,
  `emailid` varchar(35) DEFAULT NULL,
  `companyname` varchar(30) DEFAULT NULL,
  `gender` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `visitors`
--

INSERT INTO `visitors` (`num`, `fname`, `lname`, `emailid`, `companyname`, `gender`, `password`) VALUES
(1, 'ramu', 'fjjfej', 'jnej@gga.ccc', 'student', NULL, '123'),
(2, 'karnan', 's', 'karnan.karnan.s@gmail.com', 'wish tree', NULL, NULL),
(3, 'jjhjh', 'karnan', 'hkarnan.kat@gmail.com', 'jajj', NULL, NULL),
(4, 'KAKAK', 'gg', 'karnan.karnan.s@gmail.com', 'jhvhjfff', NULL, NULL),
(5, 'kkjkfd', 'jejr', 'karnan.karnan.s@gmail.com', 'ettrj', NULL, NULL),
(6, 'kkjkfd', 'jejr', 'karnan.karnan.s@gmail.com', 'ettrj', NULL, NULL),
(7, 'karnan', 'k selvam', 'karnan.se@gmail.com', 'admin', NULL, '123'),
(25, 'kak', 'nqd', 'karnan.se@gmail.com', 'nnc', NULL, NULL),
(26, 'kak', 'nqd', 'karnan.se@gmail.com', 'nnc', NULL, NULL),
(27, 'kak', 'nqd', 'karnan.se@gmail.com', 'nnc', NULL, NULL),
(28, 'kak', 'nqd', 'karnan.se@gmail.com', 'nnc', NULL, NULL),
(32, '', '', '', '', 'class 1', NULL),
(33, '', '', '', '', 'class 1', NULL),
(34, '', '', '', '', 'class 1', NULL),
(35, '', '', '', '', 'class 1', NULL),
(36, '', '', '', '', 'class 1', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `visitors`
--
ALTER TABLE `visitors`
  ADD PRIMARY KEY (`num`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `visitors`
--
ALTER TABLE `visitors`
  MODIFY `num` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
