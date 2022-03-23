-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2022 at 05:55 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `capstone`
--

-- --------------------------------------------------------

--
-- Table structure for table `users_account`
--

CREATE TABLE `users_account` (
  `users_id` int(11) NOT NULL,
  `users_username` varchar(255) NOT NULL,
  `users_password` varchar(255) NOT NULL,
  `users_lastname` varchar(255) NOT NULL,
  `users_firstname` varchar(255) NOT NULL,
  `users_middlename` varchar(255) NOT NULL,
  `users_contact` varchar(255) NOT NULL,
  `users_email` varchar(255) NOT NULL,
  `users_roles` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_account`
--

INSERT INTO `users_account` (`users_id`, `users_username`, `users_password`, `users_lastname`, `users_firstname`, `users_middlename`, `users_contact`, `users_email`, `users_roles`) VALUES
(6, 'raymart123', 'c1c2b5b9d337b912c1ea7a84131e8ef3', 'Gahopo', 'Raymart', 'Tomagan', '09075647938', 'raymart.gahopo@gmail.com', 'Admin'),
(7, 'robert123', 'c1c2b5b9d337b912c1ea7a84131e8ef3', 'Vitalicia', 'Robert', 'Umbao', '09123456789', 'robert.vitalicia@gmail.com', 'Doctor'),
(8, 'jona123', 'c1c2b5b9d337b912c1ea7a84131e8ef3', 'Sugabo', 'Jona', 'Umbao', '09123456789', 'jona.sugabo@gmail.com', 'Sales Staff'),
(9, 'marl123', 'c1c2b5b9d337b912c1ea7a84131e8ef3', 'Umbao', 'Marl', 'Vitalicia', '09123456789', 'marl.umbao@gmail.com', 'Inventory Clerk');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users_account`
--
ALTER TABLE `users_account`
  ADD PRIMARY KEY (`users_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users_account`
--
ALTER TABLE `users_account`
  MODIFY `users_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
