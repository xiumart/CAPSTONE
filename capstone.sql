-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2022 at 08:04 AM
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
-- Table structure for table `client_inquiries`
--

CREATE TABLE `client_inquiries` (
  `inquiries_id` int(200) NOT NULL,
  `inquiries_name` varchar(100) NOT NULL,
  `inquiries_email` varchar(100) NOT NULL,
  `inquiries_subject` varchar(100) NOT NULL,
  `inquiries_message` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `client_inquiries`
--

INSERT INTO `client_inquiries` (`inquiries_id`, `inquiries_name`, `inquiries_email`, `inquiries_subject`, `inquiries_message`) VALUES
(1, 'marl', 'marl@gmail.com', 'Wow', 'Just wow');

-- --------------------------------------------------------

--
-- Table structure for table `client_logs`
--

CREATE TABLE `client_logs` (
  `log_id` int(200) NOT NULL,
  `log_userid` varchar(100) NOT NULL,
  `log_username` varchar(100) NOT NULL,
  `log_activity` varchar(100) NOT NULL,
  `log_date` varchar(100) NOT NULL,
  `log_time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `client_logs`
--

INSERT INTO `client_logs` (`log_id`, `log_userid`, `log_username`, `log_activity`, `log_date`, `log_time`) VALUES
(1, '6224e8434ad52', 'testname', 'signup', '03-06-2022', '05:58:43pm'),
(2, '6224e8afe639a', 'testname', 'signup', '03-06-2022', '06:00:31pm'),
(3, '6224e931181ae', 'marl1', 'signup', '03-06-2022', '06:02:41pm'),
(4, '', 'admin', 'Login', '03-06-2022', '06:03:09pm'),
(5, '', 'admin', 'Login', '03-06-2022', '06:13:00pm'),
(6, '62259131b6d58', 'mart123', 'signup', '03-07-2022', '05:59:29am'),
(7, '62259ad092521', 'mart123', 'signup', '03-07-2022', '06:40:32am'),
(8, '62259bc7e2263', 'admin2', 'signup', '03-07-2022', '06:44:39am'),
(9, '62259bd359b4b', 'mart123', 'signup', '03-07-2022', '06:44:51am');

-- --------------------------------------------------------

--
-- Table structure for table `client_user`
--

CREATE TABLE `client_user` (
  `client_id` varchar(100) NOT NULL,
  `client_username` varchar(100) NOT NULL,
  `client_password` varchar(100) NOT NULL,
  `client_secquest` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `client_user`
--

INSERT INTO `client_user` (`client_id`, `client_username`, `client_password`, `client_secquest`) VALUES
('2200', 'admin', '21232f297a57a5a743894a0e4a801fc3', ''),
('6224d0ce6050e', 'marl', '34175d1c1a904c5b9c8029f76dd9f742', ''),
('6224e8434ad52', 'testname', '098f6bcd4621d373cade4e832627b4f6', ''),
('6224e8afe639a', 'testname', '098f6bcd4621d373cade4e832627b4f6', ''),
('6224e931181ae', 'marl1', '34175d1c1a904c5b9c8029f76dd9f742', '');

-- --------------------------------------------------------

--
-- Table structure for table `client_user_info`
--

CREATE TABLE `client_user_info` (
  `client_info_id` int(255) NOT NULL,
  `client_id` varchar(1000) NOT NULL,
  `client_fname` varchar(100) NOT NULL,
  `client_lname` varchar(100) NOT NULL,
  `client_mname` varchar(100) NOT NULL,
  `client_bday` varchar(100) NOT NULL,
  `client_age` int(100) NOT NULL,
  `client_contact` varchar(100) NOT NULL,
  `client_email` varchar(100) NOT NULL,
  `client_address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `client_user_info`
--

INSERT INTO `client_user_info` (`client_info_id`, `client_id`, `client_fname`, `client_lname`, `client_mname`, `client_bday`, `client_age`, `client_contact`, `client_email`, `client_address`) VALUES
(1, '6224d0ce6050e', '', '', '', '', 0, '', 'marl@gmail.com', ''),
(2, '6224e8434ad52', '', '', '', '', 0, '', 'testemail@gmail.com', ''),
(3, '6224e8afe639a', '', '', '', '', 0, '', 'testemail@gmail.com', ''),
(4, '6224e931181ae', '', '', '', '', 0, '', 'marl@gmail.com', '');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `con_id` int(11) NOT NULL,
  `con_name` varchar(255) NOT NULL,
  `con_email` varchar(255) NOT NULL,
  `con_subj` varchar(255) NOT NULL,
  `cont_mess` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`con_id`, `con_name`, `con_email`, `con_subj`, `cont_mess`) VALUES
(1, 'Danver Omlang', 'danverjhon@gmail.com', 'Feedback', 'Great Service');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feed_id` int(11) NOT NULL,
  `feed_subj` varchar(20) NOT NULL,
  `feed_comments` text NOT NULL,
  `feedbackdate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feed_id`, `feed_subj`, `feed_comments`, `feedbackdate`) VALUES
(1, 'no website sessions', 'session must be on the website $_SESSION[\'data\'];', '2022-03-06 19:33:48'),
(2, 'website folder', 'the website folder is messy please organized the folders and create a parent and child pages', '2022-03-06 20:22:07'),
(3, 'the design is good', 'your website is good in design but the codes must be lessen', '2022-03-06 20:23:01'),
(4, 'pogi', 'ka', '2022-03-06 21:22:06'),
(5, 'Services', 'Their service is good and they approach the customer well.', '2022-03-07 10:39:36'),
(6, 'Product', 'Their product is well package and affordable price.', '2022-03-07 10:41:26'),
(7, 'Services', 'They give so much professionalism and care to the customers.', '2022-03-07 10:44:21');

-- --------------------------------------------------------

--
-- Table structure for table `loginlogs`
--

CREATE TABLE `loginlogs` (
  `id` int(11) NOT NULL,
  `IpAddress` varbinary(16) NOT NULL,
  `TryTime` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `pat_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
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
  `up_date` datetime(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `pat_date` datetime(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6),
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `image` longblob
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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`app_id`);

--
-- Indexes for table `client_inquiries`
--
ALTER TABLE `client_inquiries`
  ADD PRIMARY KEY (`inquiries_id`);

--
-- Indexes for table `client_logs`
--
ALTER TABLE `client_logs`
  ADD PRIMARY KEY (`log_id`);

--
-- Indexes for table `client_user`
--
ALTER TABLE `client_user`
  ADD PRIMARY KEY (`client_id`);

--
-- Indexes for table `client_user_info`
--
ALTER TABLE `client_user_info`
  ADD PRIMARY KEY (`client_info_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`con_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feed_id`);

--
-- Indexes for table `loginlogs`
--
ALTER TABLE `loginlogs`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `app_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=172;

--
-- AUTO_INCREMENT for table `client_inquiries`
--
ALTER TABLE `client_inquiries`
  MODIFY `inquiries_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `client_logs`
--
ALTER TABLE `client_logs`
  MODIFY `log_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `client_user_info`
--
ALTER TABLE `client_user_info`
  MODIFY `client_info_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `con_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feed_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `loginlogs`
--
ALTER TABLE `loginlogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `patients_history`
--
ALTER TABLE `patients_history`
  MODIFY `ID` int(200) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `patient_records`
--
ALTER TABLE `patient_records`
  MODIFY `ID` int(200) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `pro_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
