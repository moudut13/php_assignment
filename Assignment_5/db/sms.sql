-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2021 at 02:56 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

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
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `cell` varchar(30) NOT NULL,
  `photo` varchar(300) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'Active',
  `create_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_time` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `name`, `username`, `email`, `cell`, `photo`, `status`, `create_time`, `update_time`) VALUES
(1, 'Shuvo Ahmed', 'moudut13', 'moudutshuvo900@gmail.com', '01303967776', '450ce207da62d919289919340cb9f3d4.jpg', 'Active', '2021-04-01 17:02:50', NULL),
(2, 'shuvo Khonodoker', 'shuvo1999', 'shuvo@gmail.com', '018787489', '', 'Inactive', '2021-04-01 18:16:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `cell` varchar(200) NOT NULL,
  `location` varchar(50) NOT NULL,
  `class` varchar(30) NOT NULL,
  `photo` varchar(300) NOT NULL,
  `status` varchar(30) NOT NULL DEFAULT 'Active',
  `create_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_time` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `username`, `email`, `cell`, `location`, `class`, `photo`, `status`, `create_time`, `update_time`) VALUES
(8, 'Shuvo ', 'moudut1319', 'moudutshuvo100@gmail.com', '01764570150', 'pearapur    ', '8', 'd5a0172808c797a00a0bd2a2b0ff5e0a.webp', 'Active', '2021-04-01 15:08:17', NULL),
(9, 'Shuvo Ahmed', 'admin', 'moudut33-4876@diu.edu.bd', '01303967776', 'ullapara', '10', 'b80673d5daffb76baeffe16f279ffbf4.jpg', 'Active', '2021-04-01 15:08:57', NULL),
(10, 'Mr  X', 'a112', 'x@gmail.com', '018889008', 'sirajganj', '7', 'e3e1c9f6f550042d4beb29b0a010a7b3.jpg', 'Active', '2021-04-01 15:27:30', NULL),
(11, 'Atik', 'atik1333', 'atik@gmail.com', '0187738398', 'bogra', '9', 'a06ddaefdb4a64b6cef95c2bd95b5a17.png', 'Active', '2021-04-01 15:28:18', NULL),
(12, 'Shuvo', 'gfksdh@gmail.com', 'moudutshuvo89@gmail.com', '0130396799090', 'dhaka', '10', '52bc37f809a9cffe89ddc2260badca44.jpeg', 'Active', '2021-04-01 15:29:10', NULL),
(13, 'Ahmed Khondoker', 'ahmed0580', 'admed@gmail.com', '0178789898', 'Dhanmondi32 ', '6', '6772ebb863e4b3bf9fe5c63b31c70a54.jpg', 'Active', '2021-04-01 15:29:56', NULL),
(14, 'Shuvo Ahmed', 'moudut1319', 'smshuvoahmed425@gmail.com', '01303967776', 'bogra', '6', 'e26e1ed93ff62df7f829e3a884ad78e1.jpg', 'Active', '2021-04-01 16:31:36', NULL),
(15, 'emu', 'emu900', 'emu44@gmail.com', '0178899898', 'Tarash', '6', 'cabca2d3bccb8154726c851f8e2cb45b.jpg', 'Active', '2021-04-03 09:39:07', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `trachers`
--

CREATE TABLE `trachers` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `cell` varchar(30) NOT NULL,
  `photo` varchar(300) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'Active',
  `create_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_time` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trachers`
--

INSERT INTO `trachers` (`id`, `name`, `username`, `email`, `cell`, `photo`, `status`, `create_time`, `update_time`) VALUES
(5, 'Shuvo Ahmed', 'moudut13', 'moudutshuvo@gmail.com', '01303967776', 'c24911430b73fc653a00290980d0cf37.webp', 'Inactive', '2021-04-01 16:35:17', NULL),
(6, 'Shuvo', 'admin34', 'moudutshuvo40@gmail.com', '01303967776', '793d8e9a279d4dc591d0155dba9b1e18.jpg', 'Inactive', '2021-04-01 17:31:17', NULL),
(7, 'Md Moudut Ahmad Khondoker', 'moudut13', 'vneuwdbllktmejvbrf8999@avxrja.com', '01303967776', '9b5f273b08e1596993b2a524e5728dd6.jpeg', 'Active', '2021-04-01 17:50:57', NULL),
(8, 'Md Moudut Ahmad', 'moudut131', 'moudut33-4876@diu.edu.bd', '01303967776', '880a9d1f90f2b78bc2332a18bdc24f48.jpg', 'Active', '2021-04-01 18:00:50', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trachers`
--
ALTER TABLE `trachers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `trachers`
--
ALTER TABLE `trachers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
