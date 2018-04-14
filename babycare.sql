-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2018 at 09:14 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `babycare`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_details`
--

CREATE TABLE `admin_details` (
  `id` int(3) UNSIGNED NOT NULL,
  `admin_name` varchar(50) DEFAULT NULL,
  `address` text NOT NULL,
  `phone` varchar(16) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `gender` varchar(10) NOT NULL,
  `password` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_details`
--

INSERT INTO `admin_details` (`id`, `admin_name`, `address`, `phone`, `email`, `gender`, `password`) VALUES
(1, 'Atik Islam', 'Some there', '1234567893', 'atik@gmail.com', 'male', '123456'),
(2, 'Md. Mushfiq', 'jhgf', '1963300976', 'rm@gmail.com', 'Male', '1234567');

-- --------------------------------------------------------

--
-- Table structure for table `children_details`
--

CREATE TABLE `children_details` (
  `children_id` int(10) UNSIGNED NOT NULL,
  `children_name` varchar(50) NOT NULL,
  `children_father_name` varchar(50) NOT NULL,
  `children_mother_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile_no` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `religion` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `age` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `children_details`
--

INSERT INTO `children_details` (`children_id`, `children_name`, `children_father_name`, `children_mother_name`, `email`, `mobile_no`, `address`, `religion`, `password`, `age`) VALUES
(1, 'Choto Kazi Islam', 'Mr. Kazi', 'Ms. Kazi', 'kazi@gmail.com', '1963300976', '226/A , Khilgaon .', 'Muslim', '123456', 2),
(2, 'Boro Kazi', 'Mr. Kazi', 'Ms. Kazi', 'kazi1@gmail.com', '1963300976', 'Mog bazer', 'Muslim', '123456', 8),
(3, 'watson', 'Mr. Kazi', 'Ms. Kazi', 'kaz3i@gmail.com', '1963300976', 'asdfghj', 'Muslim', '123456', 3),
(4, 'as', 'Mr. Kazi', 'Ms. Kazi', 'kaz2i@gmail.com', '1234567893', 'dfg', 'Muslim', '123456', 3),
(5, 'Dip', 'Mr. Dip', 'Ms. Dip', 'dip@gmail.com', '1671795782', 'kjhgf', 'Hindu', '123456', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_details`
--
ALTER TABLE `admin_details`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `children_details`
--
ALTER TABLE `children_details`
  ADD PRIMARY KEY (`children_id`),
  ADD UNIQUE KEY `children_id` (`children_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_details`
--
ALTER TABLE `admin_details`
  MODIFY `id` int(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `children_details`
--
ALTER TABLE `children_details`
  MODIFY `children_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
