-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2022 at 03:44 PM
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
  `app_user` varchar(255) NOT NULL,
  `app_name` varchar(255) NOT NULL,
  `app_email` varchar(150) NOT NULL,
  `app_contact` varchar(150) NOT NULL,
  `app_date` date NOT NULL,
  `app_time` varchar(255) NOT NULL,
  `app_purpose` varchar(255) NOT NULL,
  `app_remarks` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`app_id`, `app_user`, `app_name`, `app_email`, `app_contact`, `app_date`, `app_time`, `app_purpose`, `app_remarks`) VALUES
(1, '', 'Danver Omlang', 'danverjhon@gmail.com', '09560492266', '2021-11-10', '', 'Appointment test', ''),
(3, '', 'Danver Omlang', 'danverjhon@gmail.com', '09560492266', '2021-12-27', '', 'Appointment test 1', 'FINISH'),
(6, '', 'Raymart Gahopo', 'raymart.gahopo@gmail.com', '09075647938', '2021-12-01', '', 'Check Up', 'FINISH'),
(172, '', 'Danver Omlang', 'danverjhon@gmail.com', '09757298152', '2022-03-11', '12:02', 'Check ups', 'FINISH'),
(174, '', 'Danver Omlang', 'danverjhon@gmail.com', '0977879789', '2022-03-23', '01:52', 'Check ups', 'ONGOING'),
(175, '', 'Mark Anthony Asa', 'danverjhon@gmail.com', '09757298152', '2022-03-24', '01:52', 'Check ups', 'ONGOING'),
(178, 'Danver', 'Mark Anthony Asa', 'danverjhon@gmail.com', '09757298152', '2022-03-26', '14:50', 'Check ups', 'ONGOING'),
(179, 'Danver', 'Mark Anthony Asa', 'edmar.ramos623@gmail.com', '0977879789', '2022-03-18', '14:54', 'Hide', 'ONGOING'),
(180, 'Danver', 'Mark Anthony Asa', 'danverjhon@gmail.com', '09757298152', '0000-00-00', '', 'Check ups', 'ONGOING'),
(185, 'jona12', 'Jona Sugabo', 'zjhyn16@gmail.com', '09154919806', '2022-03-12', '14:00', 'Eye Check Up', 'ONGOING'),
(187, 'jojo', 'Jojo', 'zjhyn16@gmail.com', '09154919806', '2022-03-25', '14:30', 'Inquire lg', 'ONGOING'),
(188, 'raymart', 'Raymart Gahopo', 'raymart.gahopo@gmail.com', '09075647938', '2022-03-15', '12:00', 'Check Up', 'PENDING'),
(190, 'raymart', 'Raymart Gahopo', 'raymart.gahopo@gmail.com', '09075647938', '2022-03-14', '13:00', 'Check Up', 'ONGOING');

-- --------------------------------------------------------

--
-- Table structure for table `appointment_history`
--

CREATE TABLE `appointment_history` (
  `app_id` int(11) NOT NULL,
  `app_name` varchar(255) DEFAULT NULL,
  `app_email` varchar(150) DEFAULT NULL,
  `app_contact` varchar(150) DEFAULT NULL,
  `app_date` varchar(255) DEFAULT NULL,
  `app_time` varchar(255) DEFAULT NULL,
  `app_purpose` varchar(255) DEFAULT NULL,
  `app_remarks` varchar(255) DEFAULT NULL,
  `app_DateTime` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointment_history`
--

INSERT INTO `appointment_history` (`app_id`, `app_name`, `app_email`, `app_contact`, `app_date`, `app_time`, `app_purpose`, `app_remarks`, `app_DateTime`) VALUES
(1, 'Danver Omlang', 'danverjhon@gmail.com', '09560492266', '2021-11-10', '00:00:00', 'Appointment test', 'FINISH', '13-03-22 10:05:51'),
(3, 'Danver Omlang', 'danverjhon@gmail.com', '09560492266', '2021-12-27', '00:00:00', 'Appointment test 1', 'FINISH', '13-03-22 10:37 pm'),
(28, 'Marl Umbao', 'marl.umbao@gmail.com', '09123456789', '2021-12-16', '', 'Check Up', 'FINISH', '13-03-22 11:23 pm'),
(171, 'sample', 'sample@gmail.com', '09123455678', '2021-12-18', '', 'tulog', 'DENIED', '13-03-22 11:24 pm'),
(173, 'Mark Anthony Asa', 'edmar.ramos623@gmail.com', '0977879789', '2022-03-25', '13:51', 'Check ups', 'DENIED', '13-03-22 11:25 pm'),
(181, 'Mark Anthony Asa', 'danverjhon@gmail.com', '09757298152', '2022-03-26', '22:37', 'Check ups', 'DENIED', '13-03-22 11:50 pm'),
(182, 'Danver Omlang', 'danverjhon@gmail.com', '09757298152', '2022-03-26', '22:36', 'Check ups', 'DENIED', '13-03-22 11:50 pm'),
(183, 'Danver Omlang', 'edmar.ramos623@gmail.com', '09757298152', '2022-03-11', '22:35', 'Check ups', 'DENIED', '14-03-22 12:11 am'),
(184, 'Raymart', 'raymart.gahopo@gmail.com', '09075647938', '2022-03-11', '10:55', 'Check Up', 'DENIED', '14-03-22 9:07 am'),
(186, 'Jojo', 'zjhyn16@gmail.com', '09154919806', '2022-03-25', '14:30', 'Inquire lg', 'DENIED', '15-03-22 10:10 pm'),
(189, 'Raymart Gahopo', 'raymart.gahopo@gmail.com', '09075647938', '2022-03-15', '12:00', 'Dine in', 'DENIED', '15-03-22 10:28 pm');

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
  `log_date` date NOT NULL,
  `log_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `client_logs`
--

INSERT INTO `client_logs` (`log_id`, `log_userid`, `log_username`, `log_activity`, `log_date`, `log_time`) VALUES
(1, '6224e8434ad52', 'testname', 'signup', '0000-00-00', '00:00:00'),
(2, '6224e8afe639a', 'testname', 'signup', '0000-00-00', '00:00:00'),
(3, '6224e931181ae', 'marl1', 'signup', '0000-00-00', '00:00:00'),
(4, '', 'admin', 'Login', '0000-00-00', '00:00:00'),
(5, '', 'admin', 'Login', '0000-00-00', '00:00:00'),
(6, '62259131b6d58', 'mart123', 'signup', '0000-00-00', '00:00:00'),
(7, '62259ad092521', 'mart123', 'signup', '0000-00-00', '00:00:00'),
(8, '62259bc7e2263', 'admin2', 'signup', '0000-00-00', '00:00:00'),
(9, '62259bd359b4b', 'mart123', 'signup', '0000-00-00', '00:00:00'),
(10, '6225cbbf69e33', 'sample', 'signup', '0000-00-00', '00:00:00'),
(11, '', 'sample', 'Login', '0000-00-00', '00:00:00'),
(12, '6225d7ed0e8b2', 'gahopo', 'signup', '0000-00-00', '00:00:00'),
(13, '6227627424074', 'raymart', 'signup', '0000-00-00', '00:00:00'),
(14, '', 'raymart', 'Login', '0000-00-00', '00:00:00'),
(15, '', 'raymart', 'Login', '0000-00-00', '00:00:00'),
(16, '', 'raymart', 'Login', '0000-00-00', '00:00:00'),
(17, '', 'raymart', 'Login', '0000-00-00', '00:00:00'),
(18, '', 'raymart', 'Login', '0000-00-00', '00:00:00'),
(19, '', 'raymart', 'Login', '0000-00-00', '00:00:00'),
(20, '', 'raymart', 'Login', '0000-00-00', '00:00:00'),
(21, '', 'raymart', 'Login', '0000-00-00', '00:00:00'),
(22, '', 'raymart', 'Login', '0000-00-00', '00:00:00'),
(23, '', 'raymart', 'Login', '0000-00-00', '00:00:00'),
(24, '', 'raymart', 'Login', '0000-00-00', '05:00:18'),
(25, '', 'raymart', 'Login', '2022-08-03', '05:01:09'),
(26, '', 'raymart', 'Login', '2022-08-03', '00:00:00'),
(27, '', 'raymart', 'Login', '2022-09-03', '05:37:10'),
(28, '', 'raymart', 'Login', '2022-09-03', '05:56:56'),
(29, '', 'raymart', 'Login', '2022-09-03', '06:14:16'),
(30, '', 'raymart', 'Login', '2022-09-03', '06:16:34'),
(31, '', 'raymart', 'Login', '2022-09-03', '06:17:32'),
(32, '', 'raymart', 'Login', '2022-09-03', '06:18:09'),
(33, '', 'raymart', 'Login', '0000-00-00', '06:39:51'),
(34, '', 'raymart', 'Login', '0000-00-00', '06:49:04'),
(35, '', 'raymart', 'Login', '0000-00-00', '11:49:35'),
(36, '', 'raymart', 'Login', '0000-00-00', '04:42:59'),
(37, '', 'raymart', 'Login', '0000-00-00', '03:54:42'),
(38, '622a1b9b15daf', 'jona12', 'signup', '0000-00-00', '04:39:07'),
(39, '', 'jona12', 'Login', '0000-00-00', '04:39:16'),
(40, '', 'jona12', 'Login', '0000-00-00', '04:51:48'),
(41, '', 'jona12', 'Login', '0000-00-00', '01:16:58'),
(42, '622c92b29cc63', 'jojo', 'signup', '0000-00-00', '01:31:46'),
(43, '', 'jojo', 'Login', '0000-00-00', '01:33:15'),
(44, '', 'raymart', 'Login', '0000-00-00', '05:17:30'),
(45, '', 'raymart', 'Login', '0000-00-00', '05:50:43'),
(46, '', 'raymart', 'Login', '0000-00-00', '09:02:06'),
(47, '', 'raymart', 'Login', '0000-00-00', '02:42:49');

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
('6224e931181ae', 'marl1', '34175d1c1a904c5b9c8029f76dd9f742', ''),
('6227627424074', 'raymart', 'd734b6666edc4e351a617b74525c762f', ''),
('622a1b9b15daf', 'jona12', '827ccb0eea8a706c4c34a16891f84e7b', ''),
('622c92b29cc63', 'jojo', '827ccb0eea8a706c4c34a16891f84e7b', '');

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
(4, '6224e931181ae', '', '', '', '', 0, '', 'marl@gmail.com', ''),
(5, '6227627424074', '', '', '', '', 0, '', 'raymart.gahopo@gmail.com', ''),
(6, '622a1b9b15daf', '', '', '', '', 0, '', 'zjhyn16@gmail.com', ''),
(7, '622c92b29cc63', '', '', '', '', 0, '', 'zjhyn16@gmail.com', '');

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
(4, 'pogi', 'ka', '2022-03-06 21:22:06'),
(5, 'Services', 'Their service is good and they approach the customer well.', '2022-03-07 10:39:36'),
(6, 'Product', 'Their product is well package and affordable price.', '2022-03-07 10:41:26'),
(7, 'Services', 'They give so much professionalism and care to the customers.', '2022-03-07 10:44:21'),
(8, 'Inquiry for Contact ', 'Hello, may contact lens po ba kayong may grado. Thank you!', '2022-03-12 20:36:30');

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
-- Table structure for table `patient_distancerx`
--

CREATE TABLE `patient_distancerx` (
  `patient_no` int(255) NOT NULL,
  `patient_id` varchar(500) NOT NULL,
  `type` varchar(500) NOT NULL,
  `patient_name` varchar(500) NOT NULL,
  `patient_bday` date NOT NULL,
  `patient_contact` varchar(500) NOT NULL,
  `patient_email` varchar(500) NOT NULL,
  `patient_address` varchar(500) NOT NULL,
  `patient_medhx` varchar(1000) NOT NULL,
  `patient_bp` varchar(500) NOT NULL,
  `D_OD_SPH` varchar(500) NOT NULL,
  `D_OD_CYL` varchar(500) NOT NULL,
  `D_OD_AXIS` varchar(500) NOT NULL,
  `D_OD_VA` varchar(500) NOT NULL,
  `D_OD_ADD` varchar(500) NOT NULL,
  `D_OS_SPH` varchar(500) NOT NULL,
  `D_OS_CYL` varchar(500) NOT NULL,
  `D_OS_AXIS` varchar(500) NOT NULL,
  `D_OS_VA` varchar(500) NOT NULL,
  `D_OS_ADD` varchar(500) NOT NULL,
  `I_SPH` varchar(500) NOT NULL,
  `I_CYL` varchar(500) NOT NULL,
  `I_AXIS` varchar(500) NOT NULL,
  `I_PD` varchar(500) NOT NULL,
  `I_ADD` varchar(500) NOT NULL,
  `doctor` varchar(500) NOT NULL,
  `add_date` date NOT NULL,
  `status` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient_distancerx`
--

INSERT INTO `patient_distancerx` (`patient_no`, `patient_id`, `type`, `patient_name`, `patient_bday`, `patient_contact`, `patient_email`, `patient_address`, `patient_medhx`, `patient_bp`, `D_OD_SPH`, `D_OD_CYL`, `D_OD_AXIS`, `D_OD_VA`, `D_OD_ADD`, `D_OS_SPH`, `D_OS_CYL`, `D_OS_AXIS`, `D_OS_VA`, `D_OS_ADD`, `I_SPH`, `I_CYL`, `I_AXIS`, `I_PD`, `I_ADD`, `doctor`, `add_date`, `status`) VALUES
(1, '62306a189cd49', 'Distance', 'Altarejos, Tricia joy Magora', '2001-06-02', '09267736621', 'trishaaltarejos02001@gmail.com', 'Blk 1 lot 7 kalayaan b. Batasan hills Quezon city', 'test1', '75/100', '+1.2', '+1.2', '+1.2', '+1.2', '+1.2', '+1.2', '+1.2', '+1.2', '+1.2', '+1.2', '+1.2', '+1.2', '+1.2', '+1.2', '+1.2', 'Dr. Reese Vincent   Deborbon    ', '2022-03-15', 'Walk-in'),
(2, '6224e8434ad52', 'Contact Lens', 'test, test test', '1997-03-01', '09267736628', 'testemail@gmail.com', 'Quezon City', 'test', '75/100', '2', '2', '22', '2', '22', '2', '22', '2', '2', '2', '2', '22', '2', '2', '2', 'Dr. Raymart       Gahopo       ', '2022-03-15', 'Walk-in'),
(3, '6224e8434ad52', 'Distance', '', '1997-03-01', '09267736628', 'testemail@gmail.com', 'Quezon City', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Dr. Raymart       Gahopo       ', '2022-03-15', 'Remove'),
(4, '6224e8434ad52', 'Distance', 'test, test test', '1997-03-01', '09267736628', 'testemail@gmail.com', 'Quezon City', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Dr. Raymart       Gahopo       ', '2022-03-15', 'Remove'),
(5, '6224e8434ad52', 'Distance', 'test, test test', '2022-03-01', '09267736628', 'testemail@gmail.com', 'Quezon City', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Dr. Raymart       Gahopo       ', '2022-03-15', 'Remove');

-- --------------------------------------------------------

--
-- Table structure for table `patient_history`
--

CREATE TABLE `patient_history` (
  `patient_no` int(255) NOT NULL,
  `patient_id` varchar(500) NOT NULL,
  `type` varchar(200) NOT NULL,
  `patient_name` varchar(500) NOT NULL,
  `patient_bday` date NOT NULL,
  `patient_contact` varchar(500) NOT NULL,
  `patient_email` varchar(500) NOT NULL,
  `patient_address` varchar(500) NOT NULL,
  `patient_medhx` varchar(1000) NOT NULL,
  `patient_bp` varchar(500) NOT NULL,
  `D_OD_SPH` varchar(500) NOT NULL,
  `D_OD_CYL` varchar(500) NOT NULL,
  `D_OD_AXIS` varchar(500) NOT NULL,
  `D_OD_VA` varchar(500) NOT NULL,
  `D_OD_ADD` varchar(500) NOT NULL,
  `D_OS_SPH` varchar(500) NOT NULL,
  `D_OS_CYL` varchar(500) NOT NULL,
  `D_OS_AXIS` varchar(500) NOT NULL,
  `D_OS_VA` varchar(500) NOT NULL,
  `D_OS_ADD` varchar(500) NOT NULL,
  `I_SPH` varchar(500) NOT NULL,
  `I_CYL` varchar(500) NOT NULL,
  `I_AXIS` varchar(500) NOT NULL,
  `I_PD` varchar(500) NOT NULL,
  `I_ADD` varchar(500) NOT NULL,
  `doctor` varchar(500) NOT NULL,
  `date_up` date NOT NULL,
  `status` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient_history`
--

INSERT INTO `patient_history` (`patient_no`, `patient_id`, `type`, `patient_name`, `patient_bday`, `patient_contact`, `patient_email`, `patient_address`, `patient_medhx`, `patient_bp`, `D_OD_SPH`, `D_OD_CYL`, `D_OD_AXIS`, `D_OD_VA`, `D_OD_ADD`, `D_OS_SPH`, `D_OS_CYL`, `D_OS_AXIS`, `D_OS_VA`, `D_OS_ADD`, `I_SPH`, `I_CYL`, `I_AXIS`, `I_PD`, `I_ADD`, `doctor`, `date_up`, `status`) VALUES
(1, '62306a189cd49', 'Distance', 'Altarejos, Tricia joy Magora', '2000-06-02', '09267736628', 'trishaaltarejos0200@gmail.com', 'Blk 1 lot 7 kalayaan b. Batasan hills Quezon city', 'test', '75/100', '+1.25', '+1.25', '+1.25', '+1.25', '+1.25', '+1.25', '+1.25', '+1.25', '+1.25', '+1.25', '+1.25', '+1.25', '+1.25', '+1.25', '+1.25', 'Dr. Raymart       Gahopo       ', '2022-03-15', 'History'),
(2, '6224e8434ad52', 'Reading', 'test, test test', '1997-03-01', '09267736628', 'testemail@gmail.com', 'Quezon City', 'test', '75/100', '1', '1', '11', '1', '11', '1', '11', '1', '11', '1', '1', '11', '1', '1', '1', 'Dr. Reese Vincent   Deborbon    ', '2022-03-15', 'History'),
(3, '6224e8434ad52', 'Distance', 'test, test test', '2022-03-01', '09267736628', 'testemail@gmail.com', 'Quezon City', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Dr. Raymart       Gahopo       ', '2022-03-15', 'Remove'),
(4, '6224e8434ad52', 'Distance', 'test, test test', '2022-03-01', '09267736628', 'testemail@gmail.com', 'Quezon City', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Dr. Raymart       Gahopo       ', '2022-03-15', 'Remove'),
(5, '6224e8434ad52', 'Distance', 'test, test test', '2022-03-01', '09267736628', 'testemail@gmail.com', 'Quezon City', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Dr. Raymart       Gahopo       ', '2022-03-15', 'Remove'),
(6, '6224e8434ad52', 'Contact Lens', 'test, test test', '1997-03-01', '09267736628', 'testemail@gmail.com', 'Quezon City', 'test', '75/100', '2', '2', '22', '2', '22', '2', '22', '2', '2', '2', '2', '22', '2', '2', '2', 'Dr. Raymart       Gahopo       ', '2022-03-15', 'History');

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
(35, 'RNL', 'Soft Pro', 'Contact Lens Solution', '2022-03-10', '2025-03-10', 220, 200, 20, 'Supplier', 10, '1646923191_contactlense.jpg', 'Sample Remarks'),
(36, 'RNL', 'Boots', 'Accessories', '2022-03-10', '0000-00-00', 199, 150, 49, 'Supplier', 5, '1646924183_accessories.jpg', 'Blue&White'),
(37, 'RNL', 'VitaliciaGlass', 'Contact Lenses', '2022-03-12', '2023-07-20', 800, 1699, -899, 'Supplier', 1234, '1647089778_it.jpg', 'naspam');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `supp_id` int(255) NOT NULL,
  `supp_cname` varchar(255) CHARACTER SET latin1 NOT NULL,
  `supp_contactperson` varchar(255) CHARACTER SET latin1 NOT NULL,
  `supp_contact` varchar(255) CHARACTER SET latin1 NOT NULL,
  `supp_email` varchar(255) CHARACTER SET latin1 NOT NULL,
  `supp_desc` varchar(255) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`supp_id`, `supp_cname`, `supp_contactperson`, `supp_contact`, `supp_email`, `supp_desc`) VALUES
(1, 'TREBOR ', 'ROBERT ', '09128362732', 'john.robert.vitalicia@gmail.com ', 'drug dealer'),
(4, 'EO', 'Raymart', '09075647938', 'raymart.gahopo@gmail.com', 'Sample'),
(5, 'EA ', 'Gahopo  ', '09075647938', 'raymart.gahopo@gmail.com ', 'Sample');

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
(1, 'admin123', 'sample123', 'Gahopo       ', 'Raymart       ', 'Tomagan       ', '09075647938', 'raymart.gahopo@gmail.com ', 'Doctor'),
(3, 'reese', 'sample', 'Deborbon    ', 'Reese Vincent   ', 'Tabaosares    ', '09072635472', 'marl.umbao@gmail.com ', 'Sales Staff'),
(4, 'Jona', '1234', 'Sugabo  ', 'Jona  ', 'Bringino  ', '09154919806', 'sugabojonalyn@gmail.com ', 'Doctor'),
(5, 'raymart', 'RNLpass', 'Gahopo', 'Raymart', 'Tomagan', '09123455678', 'raymart.gahopo@gmail.com', 'Doctor');

-- --------------------------------------------------------

--
-- Table structure for table `users_logs`
--

CREATE TABLE `users_logs` (
  `logs_id` int(11) NOT NULL,
  `logs_username` varchar(255) NOT NULL,
  `logs_activity` varchar(255) NOT NULL,
  `logs_datentime` datetime NOT NULL,
  `logs_roles` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_logs`
--

INSERT INTO `users_logs` (`logs_id`, `logs_username`, `logs_activity`, `logs_datentime`, `logs_roles`) VALUES
(1, 'admin123', 'Login', '2022-03-14 03:13:42', 'Doctor'),
(2, 'admin123', 'Login', '2022-03-14 03:13:57', 'Doctor'),
(3, 'admin123', 'Login', '2022-03-14 03:15:57', 'Doctor'),
(4, 'admin123', 'Login', '2022-03-14 03:16:19', 'Doctor'),
(5, 'admin123', 'Login', '2022-03-14 03:19:43', 'Doctor'),
(6, 'Doctor', 'Logout', '2022-03-14 03:20:31', 'Doctor'),
(7, 'raymart', 'Login', '2022-03-15 07:26:14', 'Doctor');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`app_id`);

--
-- Indexes for table `appointment_history`
--
ALTER TABLE `appointment_history`
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
-- Indexes for table `patient_distancerx`
--
ALTER TABLE `patient_distancerx`
  ADD PRIMARY KEY (`patient_no`);

--
-- Indexes for table `patient_history`
--
ALTER TABLE `patient_history`
  ADD PRIMARY KEY (`patient_no`);

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
-- Indexes for table `users_account`
--
ALTER TABLE `users_account`
  ADD PRIMARY KEY (`users_id`);

--
-- Indexes for table `users_logs`
--
ALTER TABLE `users_logs`
  ADD PRIMARY KEY (`logs_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `app_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=191;

--
-- AUTO_INCREMENT for table `client_inquiries`
--
ALTER TABLE `client_inquiries`
  MODIFY `inquiries_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `client_logs`
--
ALTER TABLE `client_logs`
  MODIFY `log_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `client_user_info`
--
ALTER TABLE `client_user_info`
  MODIFY `client_info_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `con_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feed_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `loginlogs`
--
ALTER TABLE `loginlogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `patient_distancerx`
--
ALTER TABLE `patient_distancerx`
  MODIFY `patient_no` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `patient_history`
--
ALTER TABLE `patient_history`
  MODIFY `patient_no` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `pro_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `supp_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users_account`
--
ALTER TABLE `users_account`
  MODIFY `users_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users_logs`
--
ALTER TABLE `users_logs`
  MODIFY `logs_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
