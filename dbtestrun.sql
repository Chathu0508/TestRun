-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2023 at 06:19 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbtestrun`
--

-- --------------------------------------------------------

--
-- Table structure for table `dailytasks`
--

CREATE TABLE `dailytasks` (
  `id` int(11) NOT NULL,
  `task_code` varchar(255) NOT NULL,
  `task` varchar(255) NOT NULL,
  `asignperson` varchar(255) NOT NULL,
  `em_code` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `employee_code` varchar(255) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `NIC_No` varchar(255) NOT NULL,
  `usertype` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `employee_code`, `name`, `NIC_No`, `usertype`, `email`, `username`, `password`, `status`) VALUES
(1, 'EMP0001', 'Chathuranga Karunarathne', '971290471V', 'Admin ', 'chathuranga0508@gmail.com', 'admin', 'admin@456', 'Active_Employee '),
(2, 'EMP0002', 'Sujith Rasika', '922310327V', 'It Executive', 'Sujith@gmail.com', 'Sujith', 'abc@123', 'Active_Employee ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
