-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2018 at 08:10 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `timetable`
--
CREATE DATABASE IF NOT EXISTS `timetable` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `timetable`;

-- --------------------------------------------------------

--
-- Table structure for table `detailstemp`
--

CREATE TABLE `detailstemp` (
  `week` varchar(20) NOT NULL,
  `time1` text NOT NULL,
  `time2` text NOT NULL,
  `time3` text NOT NULL,
  `time4` text NOT NULL,
  `time5` text NOT NULL,
  `time6` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detailstemp`
--

INSERT INTO `detailstemp` (`week`, `time1`, `time2`, `time3`, `time4`, `time5`, `time6`) VALUES
('Monday', 'Unit Test', 'Maths', 'Maths', 'Maths', 'WE.WE.WE.WE', 'WE.WE.WE.WE'),
('Tuesday', 'Maths', 'Maths', 'HS', 'HS', 'WE.WE.WE.WE', 'WE.WE.WE.WE'),
('Wednesday', 'Maths', 'Maths', 'Maths', 'Maths', 'WE.WE.WE.WE', 'WE.WE.WE.WE'),
('Thursday', 'Maths', 'Maths', 'WE.WE.WE.WE', 'WE.WE.WE.WE', 'WE.WE.WE.WE', 'WE.WE.WE.WE'),
('Friday', 'Maths', 'Maths', 'Maths', 'Maths', 'UE', 'UE'),
('Saturday', 'Maths', 'Maths', 'Maths', 'Maths', 'Maths', 'Maths');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `week` varchar(20) NOT NULL,
  `time1` text NOT NULL,
  `time2` text NOT NULL,
  `time3` text NOT NULL,
  `time4` text NOT NULL,
  `time5` text NOT NULL,
  `time6` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`week`, `time1`, `time2`, `time3`, `time4`, `time5`, `time6`) VALUES
('Monday', '', 'PDS', 'PDS', 'PDS', 'SMP.SMP.SMP.SMP', 'SMP.SMP.SMP.SMP'),
('Tuesday', 'PDS', 'PDS', 'PDS', 'PDS', 'SMP.SMP.SMP.SMP', 'SMP.SMP.SMP.SMP'),
('Wednesday', 'PDS', 'PDS', 'PDS', 'PDS', 'SMP.SMP.SMP.SMP', 'SMP.SMP.SMP.SMP'),
('Thursday', 'PDS', 'PDS', 'SMP.SMP.SMP.SMP', 'SMP.SMP.SMP.SMP', 'SMP.SMP.SMP.SMP', 'SMP.SMP.SMP.SMP'),
('Friday', 'PDS', 'PDS', 'PDS', 'PDS', 'PDS', 'PDS'),
('Saturday', 'PDS', 'PDS', 'PDS', 'PDS', 'PDS', 'PDS');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `week` varchar(20) NOT NULL,
  `time1` text NOT NULL,
  `time2` text NOT NULL,
  `time3` text NOT NULL,
  `time4` text NOT NULL,
  `time5` text NOT NULL,
  `time6` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`week`, `time1`, `time2`, `time3`, `time4`, `time5`, `time6`) VALUES
('Monday', '', 'MA244', 'MA244', 'MA244', '404A.404A.404A.404A', '404A.404A.404A.404A'),
('Tuesday', 'MA244', 'MA244', 'MA244', 'MA244', '404A.404A.404A.404A', '404A.404A.404A.404A'),
('Wednesday', 'MA244', 'MA244', 'MA244', 'MA244', '404A.404A.404A.404A', '404A.404A.404A.404A'),
('Thursday', 'MA244', 'MA244', '404A.404A.404A.404A', '404A.404A.404A.404A', '404A.404A.404A.404A', '404A.404A.404A.404A'),
('Friday', 'MA244', 'MA244', 'MA244', 'MA244', 'MA244', 'MA244'),
('Saturday', 'MA244', 'MA244', 'MA244', 'MA244', 'MA244', 'MA244');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detailstemp`
--
ALTER TABLE `detailstemp`
  ADD PRIMARY KEY (`week`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`week`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`week`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
