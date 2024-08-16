-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2024 at 08:49 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pefcom_intern`
--

-- --------------------------------------------------------

--
-- Table structure for table `intern`
--

CREATE TABLE `intern` (
  `id` int(11) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `martricle` varchar(20) DEFAULT NULL,
  `gender` varchar(20) DEFAULT NULL,
  `shift` varchar(20) DEFAULT NULL,
  `dob` varchar(20) DEFAULT NULL,
  `school` varchar(50) DEFAULT NULL,
  `specialty` varchar(20) DEFAULT NULL,
  `region` varchar(20) DEFAULT NULL,
  `contact` varchar(20) DEFAULT NULL,
  `fee` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `intern`
--

INSERT INTO `intern` (`id`, `name`, `martricle`, `gender`, `shift`, `dob`, `school`, `specialty`, `region`, `contact`, `fee`) VALUES
(4, 'Promise Dev12', '353ut3535', 'Male', 'afternoon', '2024-08-11', 'iuget', 'swe', 'litoral', '653950853', '35000'),
(8, 'ui3', '12ne2', 'Female', 'afternoon', '2024-07-05', 'that', 'swe', 'litoral', '5783933', '33'),
(9, 'Promise Hustle', '12ne2', 'Male', 'yy', '', 'iuget', 'swe', 'lsw', '45', '45'),
(10, 'Gerald', '12ne2', 'Male', 'afternoon', '2024-07-20', 'iuget', 'swe', 'litoral', '6453', '899');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_name` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `intern`
--
ALTER TABLE `intern`
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
-- AUTO_INCREMENT for table `intern`
--
ALTER TABLE `intern`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
