-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2021 at 03:29 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
  `app_time` varchar(100) NOT NULL,
  `app_purpose` varchar(255) NOT NULL,
  `app_remarks` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`app_id`, `app_name`, `app_email`, `app_contact`, `app_date`, `app_time`, `app_purpose`, `app_remarks`) VALUES
(273, 'Marliardo Umbao', 'mumbao222@gmail.com', '09454545454', '2021-12-12', '8:00am', 'Eye Check Up', 'ONGOING'),
(274, 'Theresa Umbao', 'theresaumbao70@gmail.com', '09462911445', '2021-12-13', '9:00am', 'Eye Check Up', 'ONGOING'),
(275, 'Marlon Umbao', 'marlon@gmail.com', '09454545454', '2021-12-05', '9:00am', 'Eye Check Up', 'ONGOING');

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
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

INSERT INTO `patients` (`pat_last`, `pat_first`, `pat_middle`, `pat_age`, `pat_sex`, `pat_address`, `pat_contact`, `pat_medhx`, `pat_date`) VALUES
('RAMOS', 'EDMAR', 'CUADRO', 2021, 'Female', '002 Lydia St.', '4242424', 'dadada', '2021-12-11'),
('', '', '', 0, 'Female', '', '', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `ID` int(255) NOT NULL,
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

INSERT INTO `product` (`ID`, `brand`, `model`, `category`, `dateofarrival`, `expdate`, `sellingprice`, `origprice`, `profit`, `supplier`, `qty`) VALUES
(5, 'Viseo Kids ', '1254', 'Frame', '2021-12-12', '2021-12-13', 1500, 100, 1400, 'Supplier', 6);

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `id` int(11) NOT NULL,
  `supply` varchar(255) NOT NULL,
  `contactperson` text NOT NULL,
  `contactno` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `note` text NOT NULL,
  `action` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`id`, `supply`, `contactperson`, `contactno`, `address`, `note`, `action`) VALUES
(1, 'Eye Glass', 'Trisha', '2147483647', 'bahay namin', 'masaya', 'nobela'),
(2, 'kape', 'jepoy', '2147483647', 'malabon', 'malungkot', 'drama'),
(3, 'tubig', 'popoy', '2147483647', 'bagumbong', 'seryoso', 'komedya'),
(11, 'sample', 'sample', '2147483647', 'QC', 'sample', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `users_id` int(100) NOT NULL,
  `users_last` varchar(100) NOT NULL,
  `users_first` varchar(100) NOT NULL,
  `users_mid` varchar(100) NOT NULL,
  `users_username` varchar(100) NOT NULL,
  `users_email` varchar(100) NOT NULL,
  `users_contact` varchar(100) NOT NULL,
  `users_password` varchar(100) NOT NULL,
  `user_role` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`users_id`, `users_last`, `users_first`, `users_mid`, `users_username`, `users_email`, `users_contact`, `users_password`, `user_role`) VALUES
(3, 'Umbao', 'Marliardo', '-', 'marl', 'mumbao222@gmail.com', '09454545454', 'marl222', 'Administrator');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`app_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `app_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=277;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `users_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
