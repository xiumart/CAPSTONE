-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2021 at 05:59 PM
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
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `app_id` int(11) NOT NULL,
  `app_name` varchar(255) NOT NULL,
  `app_email` varchar(150) NOT NULL,
  `app_contact` varchar(150) NOT NULL,
  `app_date` date NOT NULL,
  `app_time` time(4) NOT NULL,
  `app_purpose` varchar(255) NOT NULL,
  `app_remarks` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`app_id`, `app_name`, `app_email`, `app_contact`, `app_date`, `app_time`, `app_purpose`, `app_remarks`) VALUES
(1, 'Danver Omlang', 'danverjhon@gmail.com', '09560492266', '2021-11-10', '00:00:00.0000', 'Appointment test', ''),
(3, 'Danver Omlang', 'danverjhon@gmail.com', '09560492266', '2021-12-27', '00:00:00.0000', 'Appointment test 1', 'ONGOING'),
(6, 'Raymart Gahopo', 'raymart.gahopo@gmail.com', '09075647938', '2021-12-01', '00:00:00.0000', 'Check Up', 'ONGOING'),
(28, 'Marl Umbao', 'marl.umbao@gmail.com', '09123456789', '2021-12-16', '00:00:00.0000', 'Check Up', 'ONGOING'),
(171, 'sample', 'sample@gmail.com', '09123455678', '2021-12-18', '00:00:00.0000', 'tulog', 'ONGOING');

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `logs_id` int(150) NOT NULL,
  `log_user` varchar(150) NOT NULL,
  `log_activity` varchar(150) NOT NULL,
  `log_datentime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`logs_id`, `log_user`, `log_activity`, `log_datentime`) VALUES
(1, 'junjun', 'Login', '2021-12-15 12:48:59'),
(2, 'junjun', 'Logout', '2021-12-15 12:49:11'),
(3, 'mart123', 'Login', '2021-12-15 12:49:31');

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `pat_id` int(11) NOT NULL,
  `pat_last` varchar(255) NOT NULL,
  `pat_first` varchar(255) NOT NULL,
  `pat_middle` varchar(255) NOT NULL,
  `pat_age` int(255) NOT NULL,
  `pat_sex` varchar(100) NOT NULL,
  `pat_address` varchar(100) NOT NULL,
  `pat_contact` varchar(137) NOT NULL,
  `pat_medhx` varchar(255) NOT NULL,
  `pat_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`pat_id`, `pat_last`, `pat_first`, `pat_middle`, `pat_age`, `pat_sex`, `pat_address`, `pat_contact`, `pat_medhx`, `pat_date`) VALUES
(1, 'RAMOS', 'EDMAR', 'CUADRO', 2021, 'Female', '002 Lydia St.', '4242424', 'dadada', '2021-12-11'),
(3, 'vitalicia', 'john robert ', 'rosario', 2021, 'Male', '8 Humabon', '09123456789', 'sample', '2021-12-10');

-- --------------------------------------------------------

--
-- Table structure for table `pos`
--

CREATE TABLE `pos` (
  `id` int(255) NOT NULL,
  `Customer_name` varchar(1000) NOT NULL,
  `Date` varchar(1000) NOT NULL,
  `qty` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pos`
--

INSERT INTO `pos` (`id`, `Customer_name`, `Date`, `qty`) VALUES
(5, '', '', 0),
(5, '', '', 0),
(5, '', '', 0),
(5, 'Tricia Joy', '2021-12-13', 0),
(5, 'Tricia Joy', '2021-12-13', 0),
(5, 'Tricia Joy Altarejos', '2021-12-13', 9),
(5, 'Tricia Joy Altarejos', '2021-12-13', 9),
(5, 'Tricia Joy Altarejos', '2021-12-13', 0),
(5, 'Tricia Joy Altarejos', '2021-12-13', 9),
(7, 'Tricia Joy Altarejos', '2021-12-23', 89),
(5, 'Tricia Joy Altarejos', '2021-12-13', 100),
(5, 'Tricia Joy Altarejos', '2021-12-13', 100),
(5, 'Jonathan Altarejos', '2021-12-13', 9),
(7, '', '', 8),
(7, 'dfd', '2021-12-13', 9),
(5, 'Tricia Joy Altarejos', '2021-12-13', 9),
(5, 'Tricia Joy Altarejos', '2021-12-13', 8),
(5, 'Tricia Joy Altarejos', '2020-03-13', 4),
(5, 'Tricia Joy Altarejos', '2020-03-13', 4),
(0, 'Tricia Joy Altarejos', '2020-03-14', 8),
(0, 'Jonathan Altarejos', '2018-02-10', 100),
(0, 'Jonathan Altarejos', '2019-01-30', 95),
(5, 'Jonathan Altarejos', '2021-12-14', 88),
(7, 'dasd', '2021-12-14', 99),
(7, 'Tricia Joy Altarejos', '2015-02-12', 2),
(5, 'lala', '2017-02-14', 99),
(7, 'boom', '2021-12-14', 89),
(13, 'Tricia Joy Altarejos', '2021-12-23', 1),
(7, 'Roberto', '2021-12-22', 5);

-- --------------------------------------------------------

--
-- Stand-in structure for view `pos_reports`
-- (See below for the actual view)
--
CREATE TABLE `pos_reports` (
`Customer_name` varchar(1000)
,`Date` varchar(1000)
,`pro_id` int(255)
,`brand` varchar(255)
,`model` varchar(255)
,`category` varchar(255)
,`qty` int(255)
,`sellingprice` int(255)
,`total_origprice` bigint(66)
,`total_profit` bigint(66)
,`total_sell` bigint(66)
);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `pro_id` int(255) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `dateofarrival` date NOT NULL,
  `expdate` date NOT NULL,
  `sellingprice` int(255) NOT NULL,
  `origprice` int(255) NOT NULL,
  `profit` int(255) NOT NULL,
  `supplier` varchar(255) NOT NULL,
  `qty` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pro_id`, `brand`, `model`, `category`, `dateofarrival`, `expdate`, `sellingprice`, `origprice`, `profit`, `supplier`, `qty`) VALUES
(5, 'robert', 'robert', 'Lens', '2021-12-15', '2021-12-22', 1000, 1200, 200, 'Supplier', 0),
(7, 'EO', 'sample', 'Frame', '2021-12-17', '2021-12-24', 500, 800, 300, 'Supplier', 0),
(13, 'dfghj', 'dfgh', 'Frame', '2021-12-15', '2021-12-15', 23456, 34567, -11111, 'Supplier', 0),
(14, 'ANO', 'DAW', 'Lens', '2021-12-15', '2021-12-15', 12345, 3456, 8889, 'Supplier', 99);

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `supp_id` int(11) NOT NULL,
  `supp_supply` varchar(255) NOT NULL,
  `supp_contactperson` varchar(100) NOT NULL,
  `supp_contactno` varchar(100) NOT NULL,
  `supp_address` varchar(255) NOT NULL,
  `supp_note` varchar(100) NOT NULL,
  `action` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`supp_id`, `supp_supply`, `supp_contactperson`, `supp_contactno`, `supp_address`, `supp_note`, `action`) VALUES
(12, 'Roberto Boy Paos', 'Carlito Dimagiba', '09560492266', '1cc', 'haYPBESTY', ''),
(15, 'sample', 'sample', '09123456789', 'qc', 'sample', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `users_id` int(11) NOT NULL,
  `users_last` varchar(250) NOT NULL,
  `users_first` varchar(250) NOT NULL,
  `users_mid` varchar(250) NOT NULL,
  `users_email` varchar(250) NOT NULL,
  `users_username` varchar(250) NOT NULL,
  `users_contact` varchar(11) NOT NULL,
  `users_password` varchar(255) NOT NULL,
  `user_role` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`users_id`, `users_last`, `users_first`, `users_mid`, `users_email`, `users_username`, `users_contact`, `users_password`, `user_role`) VALUES
(7, 'Gahopo', 'Raymart', 'Tomagan', 'r.gahopo@gmail.com', 'mart123', '09123456789', 'admin', 'Administrator'),
(14, 'Altarejos      ', 'tricia02        ', 'Joy                  ', 'trishaaltarejos0200@gmail.com                ', 'trish02', '9284973948', 'sdsddasdasda', 'Administrator'),
(15, 'Vitalicia', 'John Robert', 'Umbao', 'umbao@gmail.com', 'junjun', '09070605043', 'admin123', 'Doctor');

-- --------------------------------------------------------

--
-- Structure for view `pos_reports`
--
DROP TABLE IF EXISTS `pos_reports`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `pos_reports`  AS  select `pos`.`Customer_name` AS `Customer_name`,`pos`.`Date` AS `Date`,`product`.`pro_id` AS `pro_id`,`product`.`brand` AS `brand`,`product`.`model` AS `model`,`product`.`category` AS `category`,`pos`.`qty` AS `qty`,`product`.`sellingprice` AS `sellingprice`,(`pos`.`qty` * `product`.`origprice`) AS `total_origprice`,(`pos`.`qty` * `product`.`profit`) AS `total_profit`,(`pos`.`qty` * `product`.`sellingprice`) AS `total_sell` from (`pos` join `product`) where (`product`.`pro_id` = `pos`.`id`) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`app_id`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`logs_id`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`pat_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`pro_id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`supp_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`users_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `app_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=172;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `logs_id` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `pat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `pro_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `supp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `users_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
