-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 06, 2022 at 03:44 PM
-- Server version: 8.0.13-4
-- PHP Version: 7.2.24-0ubuntu0.18.04.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fayJl43f3d`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `status`) VALUES
(1, 0),
(2, 0),
(3, 0),
(4, 0);

-- --------------------------------------------------------

--
-- Table structure for table `courses1`
--

CREATE TABLE `courses1` (
  `id` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `courses1`
--

INSERT INTO `courses1` (`id`, `status`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 0);

-- --------------------------------------------------------

--
-- Table structure for table `courses2`
--

CREATE TABLE `courses2` (
  `id` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `courses2`
--

INSERT INTO `courses2` (`id`, `status`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 0);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `Login_ID` int(10) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `role` enum('teacher','admin','student') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`Login_ID`, `Email`, `Password`, `role`) VALUES
(1, '200101120001@cutm.ac.in', '200101120001', 'student'),
(2, 'admin', 'admin', 'admin'),
(3, 'teacher', 'teacher', 'teacher'),
(4, 'student', 'student', 'student'),
(6, '200101120002@cutm.ac.in', '200101120002', 'student'),
(7, '200101120003@cutm.ac.in', '200101120003', 'student'),
(8, '200101120006@cutm.ac.in', '200101120006', 'student'),
(9, '200101120009@cutm.ac.in', '200101120009', 'student'),
(10, '200101120010@cutm.ac.in', '200101120010', 'admin'),
(11, '200101120012@cutm.ac.in', '200101120012', 'student'),
(12, 'ashish.dash@cutm.ac.in', 'ashish', 'admin'),
(13, '200101120013@cutm.ac.in', '200101120013', 'student'),
(14, '200101120014@cutm.ac.in', '200101120014', 'student'),
(15, '200101120015@cutm.ac.in', '200101120015', 'student'),
(123, '200101120049@cutm.ac.in', '200101120049', 'admin'),
(834, '200301130009@cutm.ac.in', '200301130009', 'admin'),
(1234, 'rkmishra@cutm.ac.in', '123456', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `nodemcu_ldr_table`
--

CREATE TABLE `nodemcu_ldr_table` (
  `No` int(10) NOT NULL,
  `id` varchar(100) NOT NULL,
  `Date` date NOT NULL,
  `Time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `nodemcu_ldr_table`
--

INSERT INTO `nodemcu_ldr_table` (`No`, `id`, `Date`, `Time`) VALUES
(80, 'E4BF472A', '2020-04-20', '01:45:48'),
(81, '996D20E5', '2020-04-20', '01:46:32'),
(82, 'E4BF472A', '2020-04-20', '01:47:37'),
(83, 'E4BF472A', '2020-04-20', '01:47:59'),
(84, 'E4BF472A', '2020-04-20', '01:54:00');

-- --------------------------------------------------------

--
-- Table structure for table `table_nodemcu_rfidrc522_mysql`
--

CREATE TABLE `table_nodemcu_rfidrc522_mysql` (
  `name` varchar(100) NOT NULL,
  `id` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `table_nodemcu_rfidrc522_mysql`
--

INSERT INTO `table_nodemcu_rfidrc522_mysql` (`name`, `id`, `gender`, `email`, `mobile`) VALUES
('Pitabas Pradhan', 'E4BF472A', 'Male', 'Pitabas Pradhan', '12345678');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `user_type` varchar(20) NOT NULL DEFAULT 'user',
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `user_type`, `image`) VALUES
(28, 'PITABAS PRADHAN', 'www.pitabas.pradhan934@gmail.com', '1813285c4f719bb77a340ba7b0d4ea20', 'user', 'IMG_20220609_132020.jpg'),
(29, 'pitabas pradhan', '200101120049@cutm.ac.in', '1813285c4f719bb77a340ba7b0d4ea20', 'user', 'pic-6.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses1`
--
ALTER TABLE `courses1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`Login_ID`);

--
-- Indexes for table `nodemcu_ldr_table`
--
ALTER TABLE `nodemcu_ldr_table`
  ADD PRIMARY KEY (`No`);

--
-- Indexes for table `table_nodemcu_rfidrc522_mysql`
--
ALTER TABLE `table_nodemcu_rfidrc522_mysql`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `Login_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1235;

--
-- AUTO_INCREMENT for table `nodemcu_ldr_table`
--
ALTER TABLE `nodemcu_ldr_table`
  MODIFY `No` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
