-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2022 at 11:07 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sms`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `s_no` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(22) NOT NULL,
  `password` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`s_no`, `name`, `email`, `password`) VALUES
(1, 'Admin', 'admin@gmail.com', 'admin@123');

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

CREATE TABLE `marks` (
  `s_no` int(22) NOT NULL,
  `english` int(100) NOT NULL,
  `nepali` int(100) NOT NULL,
  `science` int(100) NOT NULL,
  `math` int(100) NOT NULL,
  `social` int(100) NOT NULL,
  `computer` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `marks`
--

INSERT INTO `marks` (`s_no`, `english`, `nepali`, `science`, `math`, `social`, `computer`) VALUES
(1, 82, 69, 54, 77, 94, 78),
(2, 87, 54, 89, 95, 67, 77),
(3, 67, 89, 90, 34, 56, 78),
(4, 79, 65, 85, 90, 80, 95),
(5, 70, 58, 85, 90, 65, 80),
(6, 56, 65, 30, 56, 20, 15);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `s_no` int(100) NOT NULL,
  `roll_no` int(20) NOT NULL,
  `name` varchar(10) NOT NULL,
  `class` int(10) NOT NULL,
  `phone` decimal(10,0) NOT NULL,
  `email` varchar(22) NOT NULL,
  `password` varchar(15) NOT NULL,
  `attendance` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`s_no`, `roll_no`, `name`, `class`, `phone`, `email`, `password`, `attendance`) VALUES
(1, 1, 'SOS', 1, '9812345677', 'sos@gmail.com', 'prasan', 0),
(2, 2, 'Anupama', 9, '9812330874', 'anu@gmail.com', 'anu', 5),
(3, 3, 'Bimala', 6, '9807777777', 'bimala@gmail.com', 'bimala', 4),
(4, 4, 'Ram', 10, '9812345678', 'ram@gmail.com', 'ram', 0),
(5, 5, 'Sitaa', 8, '9812300000', 'sita@gmail.com', 'sita', 0),
(6, 6, 'Anisha', 8, '9834455555', 'anisha@gmail.com', 'anisha', 6);

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `s_no` int(15) NOT NULL,
  `t_id` int(20) NOT NULL,
  `name` varchar(12) NOT NULL,
  `mobile` decimal(10,0) NOT NULL,
  `courses` varchar(19) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`s_no`, `t_id`, `name`, `mobile`, `courses`) VALUES
(1, 101, 'Sarita', '9800000022', 'DBMS'),
(2, 102, 'Juned', '9800000011', 'SL');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`s_no`);

--
-- Indexes for table `marks`
--
ALTER TABLE `marks`
  ADD PRIMARY KEY (`s_no`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`s_no`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`s_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `s_no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `marks`
--
ALTER TABLE `marks`
  MODIFY `s_no` int(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `s_no` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `s_no` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
