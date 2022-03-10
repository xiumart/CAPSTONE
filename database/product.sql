-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2022 at 07:03 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

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
  `qty` int(100) NOT NULL,
  `image` text NOT NULL,
  `remarks` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pro_id`, `brand`, `model`, `category`, `dateofarrival`, `expdate`, `sellingprice`, `origprice`, `profit`, `supplier`, `qty`, `image`, `remarks`) VALUES
(21, 'RNL', 'YORK', 'Reading Glasses', '2022-03-11', '2022-06-15', 155, 125, 30, 'Supplier', 50, '1646933692_sample1.png', 'Circle Frame'),
(22, 'RNL', 'Didj', 'Reading Glasses', '2022-03-05', '0000-00-00', 199, 150, 49, 'Supplier', 25, 'sample2.png', 'Original Frame'),
(24, '', '', 'Reading Glasses', '0000-00-00', '0000-00-00', 0, 0, 0, '', 0, 'sample4.png', ''),
(25, '', '', 'Reading Glasses', '0000-00-00', '0000-00-00', 0, 0, 0, '', 0, 'sample5.png', ''),
(26, '', '', 'Reading Glasses', '0000-00-00', '0000-00-00', 0, 0, 0, '', 0, 'sample6.png', ''),
(27, '', '', 'Reading Glasses', '0000-00-00', '0000-00-00', 0, 0, 0, '', 0, 'sample7.png', ''),
(28, '', '', 'Reading Glasses', '0000-00-00', '0000-00-00', 0, 0, 0, '', 0, 'sample8.png', ''),
(29, '', '', 'Reading Glasses', '0000-00-00', '0000-00-00', 0, 0, 0, '', 0, 'sample9.png', ''),
(30, '', '', 'Reading Glasses', '0000-00-00', '0000-00-00', 0, 0, 0, '', 0, 'sample10.png', ''),
(31, '', '', 'Reading Glasses', '0000-00-00', '0000-00-00', 0, 0, 0, '', 0, 'sample11.png', ''),
(32, '', '', 'Reading Glasses', '0000-00-00', '0000-00-00', 0, 0, 0, '', 0, 'sample12.png', ''),
(33, '', '', 'Reading Glasses', '0000-00-00', '0000-00-00', 0, 0, 0, '', 0, 'sample13.png', ''),
(34, '', '', 'Reading Glasses', '0000-00-00', '0000-00-00', 0, 0, 0, '', 0, 'sample14.png', ''),
(35, 'RNL', 'Soft Pro', 'Contact Lens Solution', '2022-03-10', '2025-03-10', 220, 200, 20, 'Supplier', 10, '1646923191_contactlense.jpg', 'Sample Remarks'),
(36, 'RNL', 'Boots', 'Accessories', '2022-03-10', '0000-00-00', 199, 150, 49, 'Supplier', 5, '1646924183_accessories.jpg', 'Blue&White');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`pro_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `pro_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
