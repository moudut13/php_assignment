-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2021 at 01:22 AM
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
-- Database: `stc`
--

-- --------------------------------------------------------

--
-- Table structure for table `students_info`
--

CREATE TABLE `students_info` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `cell` varchar(20) NOT NULL,
  `username` varchar(30) NOT NULL,
  `location` varchar(50) NOT NULL,
  `age` varchar(15) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `dept` varchar(50) NOT NULL,
  `photo` varchar(256) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'Active',
  `create_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_time` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students_info`
--

INSERT INTO `students_info` (`id`, `name`, `email`, `cell`, `username`, `location`, `age`, `gender`, `dept`, `photo`, `status`, `create_time`, `update_time`) VALUES
(42, 'Md Moudut Ahmad Khondoker', 'moudutshuvo40@gmail.com', '01303967776', 'moudut13', 'Dhanmondi', '23', 'Male', 'EEE', '63e3f9477d524d4146f685125d0bcd9a.jpg', 'Active', '2021-03-27 00:11:22', NULL),
(43, 'Shuvo', 'Ahmed@gmail.com', '01788-385788', 'shuvo14', 'Mirpur', '12', 'Male', 'EEE', 'ef117531454851ac135555f1134c67a8.jfif', 'Active', '2021-03-27 00:12:43', NULL),
(44, 'Jenifa', 'Jenifa@gmail.com', '01573987787', 'Jenifa69', 'Banani', '34', 'Female', 'English', 'efcb9f5e372cc30c4d98a7ed0c7e7b2d.jpg', 'Active', '2021-03-27 00:14:45', NULL),
(46, 'Miss A', 'a@gmail.com', '01875793865', 'a56', 'Uttara', '89', 'Female', 'IT', 'dbb4a71b1af89796a41b5ed5a761846c.jpg', 'Active', '2021-03-27 00:16:21', NULL),
(47, 'Mr. B', 'b@gmail.com', '01875639373', 'b76', 'Mohammadpur', '12', 'Male', 'English', 'c4d4aa860b278a298eedfa9169f6df17.jpg', 'Active', '2021-03-27 00:17:00', NULL),
(48, 'Miss C', 'c@gmail.com', '01884373888', 'c56', 'Gualshan', '30', 'Male', 'English', '01be020a08f16e9639d5a7396ddb0e8c.webp', 'Active', '2021-03-27 00:18:06', NULL),
(49, 'Shuvo Khondoker', 'khondoker@gmail.com', '0176-4570150', 'khondoker13', 'Dhanmondi', '23', 'Male', 'EEE', 'c534e99e1dfb20a0e6e707090fa4aa3c.jpg', 'Active', '2021-03-27 00:20:10', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students_info`
--
ALTER TABLE `students_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students_info`
--
ALTER TABLE `students_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
