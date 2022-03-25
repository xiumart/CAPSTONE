-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2022 at 11:49 AM
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
-- Table structure for table `sales_order`
--

CREATE TABLE `sales_order` (
  `transaction_id` int(11) NOT NULL,
  `order_no` varchar(100) NOT NULL,
  `product` varchar(100) NOT NULL,
  `qty` varchar(100) NOT NULL,
  `amount` varchar(100) NOT NULL,
  `profit` varchar(100) NOT NULL,
  `product_code` varchar(150) NOT NULL,
  `gen_name` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `price` varchar(100) NOT NULL,
  `discount` varchar(100) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales_order`
--

INSERT INTO `sales_order` (`transaction_id`, `order_no`, `product`, `qty`, `amount`, `profit`, `product_code`, `gen_name`, `name`, `price`, `discount`, `date`) VALUES
(315, 'RS-02262302', '58', '1', '1500', '500', 'Optic', 'Glasses', ' Makapal Malutong', '1500', '', '0000-00-00'),
(316, 'RS-02262302', '58', '1', '1500', '500', 'Optic', 'Glasses', ' Makapal Malutong', '1500', '', '0000-00-00'),
(317, 'RS-003239', '58', '1', '1500', '500', 'Optic', 'Glasses', ' Makapal Malutong', '1500', '', '0000-00-00'),
(318, 'RS-003239', '58', '1', '1500', '500', 'Optic', 'Glasses', ' Makapal Malutong', '1500', '', '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sales_order`
--
ALTER TABLE `sales_order`
  ADD PRIMARY KEY (`transaction_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sales_order`
--
ALTER TABLE `sales_order`
  MODIFY `transaction_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=319;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
