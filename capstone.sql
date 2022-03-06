-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 06, 2022 at 05:54 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.1.1

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
  `app_purpose` varchar(255) NOT NULL,
  `app_remarks` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`app_id`, `app_name`, `app_email`, `app_contact`, `app_date`, `app_purpose`, `app_remarks`) VALUES
(1, 'Danver Omlang', 'danverjhon@gmail.com', '09560492266', '2021-11-10', 'Appointment test', ''),
(3, 'Danver Omlang', 'danverjhon@gmail.com', '09560492266', '2021-12-27', 'Appointment test 1', 'ONGOING'),
(6, 'Raymart Gahopo', 'raymart.gahopo@gmail.com', '09075647938', '2021-12-01', 'Check Up', 'ONGOING'),
(28, 'Marl Umbao', 'marl.umbao@gmail.com', '09123456789', '2021-12-16', 'Check Up', 'ONGOING'),
(171, 'sample', 'sample@gmail.com', '09123455678', '2021-12-18', 'tulog', 'ONGOING');

-- --------------------------------------------------------

--
-- Table structure for table `collection`
--

CREATE TABLE `collection` (
  `transaction_id` int(11) NOT NULL,
  `date` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `invoice` varchar(100) NOT NULL,
  `amount` varchar(100) NOT NULL,
  `remarks` varchar(100) NOT NULL,
  `balance` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL,
  `customer_name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `membership_number` varchar(100) NOT NULL,
  `prod_name` varchar(550) NOT NULL,
  `expected_date` varchar(500) NOT NULL,
  `note` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `customer_name`, `address`, `contact`, `membership_number`, `prod_name`, `expected_date`, `note`) VALUES
(15, 'Danver Omlang', 'dsdsdds.com, sds', '09560492266', '2', 'Chicago Bulls Lens', '2022-02-19', 'Makalpal');

-- --------------------------------------------------------

--
-- Table structure for table `loginlogs`
--

CREATE TABLE `loginlogs` (
  `id` int(11) NOT NULL,
  `IpAddress` varbinary(16) NOT NULL,
  `TryTime` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loginlogs`
--

INSERT INTO `loginlogs` (`id`, `IpAddress`, `TryTime`) VALUES
(11, 0x3a3a31, 1646540960),
(12, 0x3a3a31, 1646540963),
(13, 0x3a3a31, 1646540965),
(14, 0x3a3a31, 1646541073),
(15, 0x3a3a31, 1646541075),
(16, 0x3a3a31, 1646541078),
(17, 0x3a3a31, 1646541208),
(18, 0x3a3a31, 1646541221),
(19, 0x3a3a31, 1646541246),
(20, 0x3a3a31, 1646541256),
(21, 0x3a3a31, 1646541413),
(22, 0x3a3a31, 1646541416),
(23, 0x3a3a31, 1646541420),
(24, 0x3a3a31, 1646541518),
(25, 0x3a3a31, 1646541521),
(26, 0x3a3a31, 1646541522),
(27, 0x3a3a31, 1646541563),
(28, 0x3a3a31, 1646541568),
(29, 0x3a3a31, 1646541612),
(30, 0x3a3a31, 1646541625),
(31, 0x3a3a31, 1646541695),
(32, 0x3a3a31, 1646541701),
(33, 0x3a3a31, 1646541703),
(34, 0x3a3a31, 1646542207),
(35, 0x3a3a31, 1646542211),
(36, 0x3a3a31, 1646542213);

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
(3, 'mart123', 'Login', '2021-12-15 12:49:31'),
(0, 'trish02', 'Login', '2021-12-15 01:43:55');

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
(3, 'vitalicia', 'john robert ', 'rosario', 2021, 'Male', '8 Humabon', '09123456789', 'sample', '2021-12-10'),
(4, 'RAMOS', 'EDMAR', 'CUADRO', 2021, 'Female', '002 Lydia St.', '4242424', 'dadada', '2021-12-11'),
(5, 'RAMOS', 'EDMAR', 'CUADRO', 2021, 'Female', '002 Lydia St.', '4242424', 'dadada', '2021-12-11');

-- --------------------------------------------------------

--
-- Table structure for table `patients_history`
--

CREATE TABLE `patients_history` (
  `ID` int(200) NOT NULL,
  `pat_last` varchar(500) NOT NULL,
  `pat_first` varchar(500) NOT NULL,
  `pat_middle` varchar(500) NOT NULL,
  `pat_age` int(100) NOT NULL,
  `pat_sex` varchar(500) NOT NULL,
  `pat_address` varchar(500) NOT NULL,
  `pat_medhx` varchar(500) NOT NULL,
  `pat_date` date NOT NULL,
  `old_od` text NOT NULL,
  `old_os` text NOT NULL,
  `old_od_add` text NOT NULL,
  `old_os_add` text NOT NULL,
  `distance_od_sph` text NOT NULL,
  `distance_os_sph` text NOT NULL,
  `distance_od_cyl` text NOT NULL,
  `distance_os_cyl` text NOT NULL,
  `distance_od_axis` text NOT NULL,
  `distance_os_axis` text NOT NULL,
  `distance_od_va` varchar(500) NOT NULL,
  `distance_os_va` varchar(500) NOT NULL,
  `distance_od_add` varchar(500) NOT NULL,
  `distance_os_add` varchar(500) NOT NULL,
  `lense_od_sph` varchar(500) NOT NULL,
  `lendse_os_sph` varchar(500) NOT NULL,
  `lense_od_cyl` varchar(500) NOT NULL,
  `lense_os_cyl` varchar(500) NOT NULL,
  `lense_od_axis` varchar(500) NOT NULL,
  `lense_os_axis` varchar(500) NOT NULL,
  `lense_mono_od` varchar(500) NOT NULL,
  `lense_pd_os` varchar(500) NOT NULL,
  `reading_od_sph` varchar(500) NOT NULL,
  `reading_os_sph` varchar(500) NOT NULL,
  `reading_od_cyl` varchar(500) NOT NULL,
  `reading_os_cyl` varchar(500) NOT NULL,
  `reading_od_axis` varchar(500) NOT NULL,
  `reading_os_axis` varchar(500) NOT NULL,
  `reading_seght_od` varchar(500) NOT NULL,
  `reading_seght_os` varchar(500) NOT NULL,
  `bp` varchar(500) NOT NULL,
  `Isihara.cyl` varchar(500) NOT NULL,
  `Isihara.axis` varchar(500) NOT NULL,
  `Isihara.pd` varchar(500) NOT NULL,
  `contact` text NOT NULL,
  `status` varchar(500) NOT NULL,
  `up_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patients_history`
--

INSERT INTO `patients_history` (`ID`, `pat_last`, `pat_first`, `pat_middle`, `pat_age`, `pat_sex`, `pat_address`, `pat_medhx`, `pat_date`, `old_od`, `old_os`, `old_od_add`, `old_os_add`, `distance_od_sph`, `distance_os_sph`, `distance_od_cyl`, `distance_os_cyl`, `distance_od_axis`, `distance_os_axis`, `distance_od_va`, `distance_os_va`, `distance_od_add`, `distance_os_add`, `lense_od_sph`, `lendse_os_sph`, `lense_od_cyl`, `lense_os_cyl`, `lense_od_axis`, `lense_os_axis`, `lense_mono_od`, `lense_pd_os`, `reading_od_sph`, `reading_os_sph`, `reading_od_cyl`, `reading_os_cyl`, `reading_od_axis`, `reading_os_axis`, `reading_seght_od`, `reading_seght_os`, `bp`, `Isihara.cyl`, `Isihara.axis`, `Isihara.pd`, `contact`, `status`, `up_date`) VALUES
(21, 'Altarejos1', 'Tricia Joy', 'Magora', 21, 'Female', '       Blk 1 Lot 7 Kalayaan B', 'Walang sakit', '0000-00-00', '+2.5', '+2.5', '+2.5', '+2.5', '+2.5', '+2.5', '+2.5', '+2.5', '+2.5', '  +2.5', '+2.5', '+2.5', '+2.5', '+2.5', '+2.5', '+2.5', '+2.5', '+2.5', '+2.5', '+2.5', '+2.5', '+2.5', '+2.5', '+2.5', '+2.5', '+2.5', '+2.5', '+2.5', '+2.5', '+2.5', '+2.5', '+2.5', '+2.5', '+2.5', '09987654321', 'UPDATED', '2022-02-17');

-- --------------------------------------------------------

--
-- Table structure for table `patient_records`
--

CREATE TABLE `patient_records` (
  `ID` int(200) NOT NULL,
  `pat_last` varchar(500) NOT NULL,
  `pat_first` varchar(500) NOT NULL,
  `pat_middle` varchar(500) NOT NULL,
  `pat_age` int(100) NOT NULL,
  `pat_sex` varchar(500) NOT NULL,
  `pat_address` varchar(500) NOT NULL,
  `pat_medhx` varchar(500) NOT NULL,
  `pat_date` date NOT NULL DEFAULT current_timestamp(),
  `old_od` text NOT NULL,
  `old_os` text NOT NULL,
  `old_od_add` text NOT NULL,
  `old_os_add` text NOT NULL,
  `distance_od_sph` text NOT NULL,
  `distance_os_sph` text NOT NULL,
  `distance_od_cyl` text NOT NULL,
  `distance_os_cyl` text NOT NULL,
  `distance_od_axis` text NOT NULL,
  `distance_os_axis` text NOT NULL,
  `distance_od_va` varchar(500) NOT NULL,
  `distance_os_va` varchar(500) NOT NULL,
  `distance_od_add` varchar(500) NOT NULL,
  `distance_os_add` varchar(500) NOT NULL,
  `lense_od_sph` varchar(500) NOT NULL,
  `lendse_os_sph` varchar(500) NOT NULL,
  `lense_od_cyl` varchar(500) NOT NULL,
  `lense_os_cyl` varchar(500) NOT NULL,
  `lense_od_axis` varchar(500) NOT NULL,
  `lense_os_axis` varchar(500) NOT NULL,
  `lense_mono_od` varchar(500) NOT NULL,
  `lense_pd_os` varchar(500) NOT NULL,
  `reading_od_sph` varchar(500) NOT NULL,
  `reading_os_sph` varchar(500) NOT NULL,
  `reading_od_cyl` varchar(500) NOT NULL,
  `reading_os_cyl` varchar(500) NOT NULL,
  `reading_od_axis` varchar(500) NOT NULL,
  `reading_os_axis` varchar(500) NOT NULL,
  `reading_seght_od` varchar(500) NOT NULL,
  `reading_seght_os` varchar(500) NOT NULL,
  `bp` varchar(500) NOT NULL,
  `Isihara.cyl` varchar(500) NOT NULL,
  `Isihara.axis` varchar(500) NOT NULL,
  `Isihara.pd` varchar(500) NOT NULL,
  `contact` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient_records`
--

INSERT INTO `patient_records` (`ID`, `pat_last`, `pat_first`, `pat_middle`, `pat_age`, `pat_sex`, `pat_address`, `pat_medhx`, `pat_date`, `old_od`, `old_os`, `old_od_add`, `old_os_add`, `distance_od_sph`, `distance_os_sph`, `distance_od_cyl`, `distance_os_cyl`, `distance_od_axis`, `distance_os_axis`, `distance_od_va`, `distance_os_va`, `distance_od_add`, `distance_os_add`, `lense_od_sph`, `lendse_os_sph`, `lense_od_cyl`, `lense_os_cyl`, `lense_od_axis`, `lense_os_axis`, `lense_mono_od`, `lense_pd_os`, `reading_od_sph`, `reading_os_sph`, `reading_od_cyl`, `reading_os_cyl`, `reading_od_axis`, `reading_os_axis`, `reading_seght_od`, `reading_seght_os`, `bp`, `Isihara.cyl`, `Isihara.axis`, `Isihara.pd`, `contact`) VALUES
(12, 'Altarejos1', 'Tricia Joy', 'Magora', 21, 'Female', '        Blk 1 Lot 7 Kalayaan B', 'Walang sakit', '0000-00-00', '+2.5', '+2.5', '+2.5', '+2.5', '+2.5', '+2.5', '+2.5', '+2.5', '+2.5', ' +2.5', '+2.5', '+2.5', '+2.5', '+2.5', '+2.5', '+2.5', '+2.5', '+2.5', '+2.5', '+2.5', '+2.5', '+2.5', '+2.5', '+2.5', '+2.5', '+2.5', '+2.5', '+2.5', '+2.5', '+2.5', '+2.5', '+2.5', '+2.5', '+2.5', '09987654321'),
(23, 'MAGORA', 'JOANNE', '', 13, 'Female', 'KALAYAAN B ST.', '', '2022-02-18', '', '', '', '', '', '', '', '', '', ' ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '091234467443');

-- --------------------------------------------------------

--
-- Table structure for table `pos`
--

CREATE TABLE `pos` (
  `id` int(255) NOT NULL,
  `category` varchar(1000) NOT NULL,
  `qty` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pos`
--

INSERT INTO `pos` (`id`, `category`, `qty`) VALUES
(5, '', 0),
(7, '', 0),
(11, '', 0),
(5, '', 0),
(5, '', 0),
(5, '', 0),
(7, '', 0),
(7, '', 0),
(5, '', 0),
(7, 'Sample', 0),
(5, 'EO', 0),
(7, 'robert', 8),
(7, 'robert', 8),
(5, 'robert', 7),
(5, 'robert', 10),
(5, 'robert', 7),
(7, 'Sample', 9),
(0, '', 0),
(0, '', 0),
(0, '', 0),
(0, '', 0);

-- --------------------------------------------------------

--
-- Stand-in structure for view `pos_reports`
-- (See below for the actual view)
--
CREATE TABLE `pos_reports` (
`pro_id` int(255)
,`category` varchar(255)
,`qty` int(255)
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
  `qty` int(100) NOT NULL,
  `image` longblob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pro_id`, `brand`, `model`, `category`, `dateofarrival`, `expdate`, `sellingprice`, `origprice`, `profit`, `supplier`, `qty`, `image`) VALUES
(5, 'robert', 'robert', 'Lens', '2021-12-15', '2021-12-22', 1000, 1200, 200, 'Supplier', 3, NULL),
(7, 'EO', 'sample', 'Frame', '2021-12-17', '2021-12-24', 500, 800, 300, 'Supplier', -8, NULL),
(13, 'Logitech', 'z300', 'Frame', '2000-01-12', '2020-07-15', 2000, 1300, 700, 'Roberto Boy Paos', 500, NULL),
(27, 'testing', 'tested', 'Frame', '2021-12-29', '2022-01-28', 2000, 100, 1900, 'Roberto Boy Paos', 123, 0x464b445737374a5849416b4f4469592e6a706567),
(39, 'DOta', 'QOP', 'Frame', '2022-02-03', '2022-02-26', 2000, 100, 1900, 'sample', 12, 0x313634353130363533375f313738323531392e6a7067),
(40, 'Tenz Glasses', 'akmjdawnidnwo', 'Frame', '2019-08-08', '2022-02-28', 1000, 100, 900, 'sample', 23, 0x313634353235323832355f313738323531392e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_code` varchar(200) NOT NULL,
  `gen_name` varchar(200) NOT NULL,
  `product_name` varchar(200) NOT NULL,
  `cost` varchar(100) NOT NULL,
  `o_price` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `profit` varchar(100) NOT NULL,
  `supplier` varchar(100) NOT NULL,
  `onhand_qty` int(10) NOT NULL,
  `qty` int(10) NOT NULL,
  `qty_sold` int(10) NOT NULL,
  `expiry_date` varchar(500) NOT NULL,
  `date_arrival` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_code`, `gen_name`, `product_name`, `cost`, `o_price`, `price`, `profit`, `supplier`, `onhand_qty`, `qty`, `qty_sold`, `expiry_date`, `date_arrival`) VALUES
(58, 'Optic', 'Glasses', ' Makapal Malutong', '', '1000', '1500', '500', 'Chicago Bulls Lens', 0, 996, 1000, '2022-02-18', '2022-02-18');

-- --------------------------------------------------------

--
-- Table structure for table `purchases`
--

CREATE TABLE `purchases` (
  `transaction_id` int(11) NOT NULL,
  `invoice_number` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `suplier` varchar(100) NOT NULL,
  `remarks` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `purchases_item`
--

CREATE TABLE `purchases_item` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `qty` int(11) NOT NULL,
  `cost` varchar(100) NOT NULL,
  `invoice` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `transaction_id` int(11) NOT NULL,
  `invoice_number` varchar(100) NOT NULL,
  `cashier` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `amount` varchar(100) NOT NULL,
  `profit` varchar(100) NOT NULL,
  `due_date` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `balance` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`transaction_id`, `invoice_number`, `cashier`, `date`, `type`, `amount`, `profit`, `due_date`, `name`, `balance`) VALUES
(142, 'RS-02262302', 'Admin', '02/18/22', 'cash', '3000', '1000', '4000', '', ''),
(143, 'RS-003239', 'Admin', '02/18/22', 'cash', '3000', '1000', '4000', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `sales_order`
--

CREATE TABLE `sales_order` (
  `transaction_id` int(11) NOT NULL,
  `invoice` varchar(100) NOT NULL,
  `product` varchar(100) NOT NULL,
  `qty` varchar(100) NOT NULL,
  `amount` varchar(100) NOT NULL,
  `profit` varchar(100) NOT NULL,
  `product_code` varchar(150) NOT NULL,
  `gen_name` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `price` varchar(100) NOT NULL,
  `discount` varchar(100) NOT NULL,
  `date` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales_order`
--

INSERT INTO `sales_order` (`transaction_id`, `invoice`, `product`, `qty`, `amount`, `profit`, `product_code`, `gen_name`, `name`, `price`, `discount`, `date`) VALUES
(315, 'RS-02262302', '58', '1', '1500', '500', 'Optic', 'Glasses', ' Makapal Malutong', '1500', '', '02/18/22'),
(316, 'RS-02262302', '58', '1', '1500', '500', 'Optic', 'Glasses', ' Makapal Malutong', '1500', '', '02/18/22'),
(317, 'RS-003239', '58', '1', '1500', '500', 'Optic', 'Glasses', ' Makapal Malutong', '1500', '', '02/18/22'),
(318, 'RS-003239', '58', '1', '1500', '500', 'Optic', 'Glasses', ' Makapal Malutong', '1500', '', '02/18/22');

-- --------------------------------------------------------

--
-- Table structure for table `supliers`
--

CREATE TABLE `supliers` (
  `suplier_id` int(11) NOT NULL,
  `suplier_name` varchar(100) NOT NULL,
  `suplier_address` varchar(100) NOT NULL,
  `suplier_contact` varchar(100) NOT NULL,
  `contact_person` varchar(100) NOT NULL,
  `note` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supliers`
--

INSERT INTO `supliers` (`suplier_id`, `suplier_name`, `suplier_address`, `suplier_contact`, `contact_person`, `note`) VALUES
(5, 'Chicago Bulls Lens', 'San Andres Bukid', '09456949490', 'Danver ', 'Hakdog');

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
-- Table structure for table `tmp_pos`
--

CREATE TABLE `tmp_pos` (
  `id` int(255) NOT NULL,
  `bname` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  `qty` int(255) NOT NULL,
  `amount` int(255) NOT NULL,
  `tamount` int(255) NOT NULL,
  `profit` int(255) NOT NULL,
  `tprofit` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `position` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `name`, `position`) VALUES
(1, 'admin', 'admin', 'Admin', 'admin'),
(2, 'cashier', 'cashier', 'Cashier Pharmacy', 'Cashier'),
(3, 'admin', 'admin123', 'Administrator', 'admin');

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
(1, '', '', '', '', '', '', 'admin', 'Administrator'),
(2, '', '', '', '', '', '', '12345', 'Doctor'),
(3, '', '', '', '', '', '', '', ''),
(4, 'Omlang', 'Danver', 'John', 'admin@gmail.com', '', '09560492266', 'admin', 'Doctor'),
(5, 'Gahopo', 'Raymart', 'Tomagan', 'raymart.gahopo@gmail.com', 'martmart', '09123456789', 'sample123', 'Doctor'),
(7, 'Gahopo', 'Raymart', 'Tomagan', 'r.gahopo@gmail.com', 'mart123', '09123456789', 'admin', 'Administrator'),
(14, 'Altarejos        ', 'tricia ', 'Magora        ', 'trishaaltarejos0200@gmail.com                  ', 'trish02', '9284973948', 'sdsddasdasda', 'Administrator');

-- --------------------------------------------------------

--
-- Table structure for table `users_account`
--

CREATE TABLE `users_account` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_account`
--

INSERT INTO `users_account` (`id`, `username`, `email`, `password`) VALUES
(1, 'admin', 'raymart.gahopo@gmail.com', '0192023a7bbd73250516f069df18b500');

-- --------------------------------------------------------

--
-- Structure for view `pos_reports`
--
DROP TABLE IF EXISTS `pos_reports`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `pos_reports`  AS SELECT `product`.`pro_id` AS `pro_id`, `product`.`category` AS `category`, `pos`.`qty` AS `qty`, `pos`.`qty`* `product`.`origprice` AS `total_origprice`, `pos`.`qty`* `product`.`profit` AS `total_profit`, `pos`.`qty`* `product`.`sellingprice` AS `total_sell` FROM (`pos` join `product`) WHERE `product`.`pro_id` = `pos`.`id` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`app_id`);

--
-- Indexes for table `collection`
--
ALTER TABLE `collection`
  ADD PRIMARY KEY (`transaction_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `loginlogs`
--
ALTER TABLE `loginlogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`pat_id`);

--
-- Indexes for table `patients_history`
--
ALTER TABLE `patients_history`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `patient_records`
--
ALTER TABLE `patient_records`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`pro_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `purchases`
--
ALTER TABLE `purchases`
  ADD PRIMARY KEY (`transaction_id`);

--
-- Indexes for table `purchases_item`
--
ALTER TABLE `purchases_item`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`transaction_id`);

--
-- Indexes for table `sales_order`
--
ALTER TABLE `sales_order`
  ADD PRIMARY KEY (`transaction_id`);

--
-- Indexes for table `supliers`
--
ALTER TABLE `supliers`
  ADD PRIMARY KEY (`suplier_id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`supp_id`);

--
-- Indexes for table `tmp_pos`
--
ALTER TABLE `tmp_pos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`users_id`);

--
-- Indexes for table `users_account`
--
ALTER TABLE `users_account`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `app_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=172;

--
-- AUTO_INCREMENT for table `collection`
--
ALTER TABLE `collection`
  MODIFY `transaction_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `loginlogs`
--
ALTER TABLE `loginlogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `pat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `pro_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `purchases`
--
ALTER TABLE `purchases`
  MODIFY `transaction_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `purchases_item`
--
ALTER TABLE `purchases_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `transaction_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=144;

--
-- AUTO_INCREMENT for table `sales_order`
--
ALTER TABLE `sales_order`
  MODIFY `transaction_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=319;

--
-- AUTO_INCREMENT for table `supliers`
--
ALTER TABLE `supliers`
  MODIFY `suplier_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `supp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tmp_pos`
--
ALTER TABLE `tmp_pos`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `users_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users_account`
--
ALTER TABLE `users_account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
