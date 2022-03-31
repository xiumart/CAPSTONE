-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2022 at 12:14 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

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
  `feedbackdate` datetime NOT NULL DEFAULT current_timestamp()
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
(38, 'OWNDAYS ', 'OR2041S-8S', 'Eyewear for Adults', '0000-00-00', '0000-00-00', 1999, 999, 1000, 'Supplier', 10, '1647501295_OWNDAYS OR2041S-8S.jpg', 'SPECIFICATIONS			\r\nBRAND: OWNDAYS\r\nP/No. OR2041S-8S		\r\nMATERIAL: Resin\r\nSIZE: 49?19?142?39'),
(39, 'OWNDAYS ', 'OR2042S-8S', 'Eyewear for Adults', '2022-03-17', '0000-00-00', 1999, 999, 1000, 'Supplier', 10, '1647501419_OWNDAYS OR2042S-8S.jpg', 'SPECIFICATIONS\r\n\r\nBRAND: OWNDAYS\r\nP/No.: OR2042S-8S \r\nMATERIAL: Resin\r\nSIZE: 54?16?142?28\r\n'),
(40, 'OWNDAYS ', 'OR2027N-8A ', 'Eyewear for Adults', '2022-03-17', '0000-00-00', 1999, 999, 1000, 'Supplier', 10, '1647501506_OWNDAYS OR2027N-8A.jpg', 'SPECIFICATIONS\r\n								\r\nBRAND: OWNDAYS 											P/No. OR2027N-8A												MATERIAL: Resin												SIZE: 51?19?143?43\r\n'),
(41, 'LILLYBELL', 'LB1008B-9S ', 'Eyewear for Adults', '2022-03-17', '0000-00-00', 1999, 999, 1000, 'Supplier', 10, '1647501668_Lillybell LB1008B-9S.jpg', 'SPECIFICATIONS\r\nBRAND: LILLYBELL\r\nP/No.LB1008B-9S\r\nMATERIAL: Stainless\r\nSIZE 56?19?145?50.4\r\n'),
(42, 'FUWA CELLU ', 'FC2015T-9S ', 'Eyewear for Adults', '2022-03-17', '0000-00-00', 1999, 999, 1000, 'Supplier', 10, '1647501730_FUWA CELLU FC2015T-9S.jpg', 'SPECIFICATIONS\r\n\r\nBRAND FUWA CELLU\r\nP/No. FC2015T-9S \r\nMATERIAL Resin \r\nSIZE 51?18?140?41\r\n'),
(43, 'GRAPH BELLE', 'GB2024D-9S ', 'Eyewear for Adults', '2022-03-17', '0000-00-00', 1999, 999, 1000, 'Supplier', 10, '1647501797_Graph Belle GB2024D-9S.jpg', 'SPECIFICATIONS \r\n\r\nBRAND GRAPH BELLE\r\nP/No. GB2024D-9S \r\nMATERIAL Plastic \r\nSIZE 52?18?140?42.7\r\n'),
(44, 'AIR FIT', 'AF1025G-9A ', 'Eyewear for Adults', '2022-03-17', '0000-00-00', 1999, 999, 1000, 'Supplier', 10, '1647501885_Air Fit AF1025G-9A.jpg', 'SPECIFICATIONS\r\n \r\nBRAND AIR FIT \r\nP/No. AF1025G-9A \r\nMATERIAL Titanium / Stainless\r\nSIZE 50?20?145?46\r\n'),
(45, 'GRAPH BELLE', 'GB2026B-9S ', 'Eyewear for Adults', '2022-03-17', '0000-00-00', 1999, 999, 1000, 'Supplier', 10, '1647502003_Graph Belle GB2026B-9S.jpg', 'SPECIFICATIONS\r\n\r\nBRAND GRAPH BELLE \r\nP/No. GB2026B-9S \r\nMATERIAL Resin / Stainless \r\nSIZE 51?21?140?45\r\n'),
(46, 'JOHN DILLINGER', 'JD2017-T ', 'Eyewear for Adults', '2022-03-17', '0000-00-00', 1999, 999, 1000, 'Supplier', 10, '1647502080_John Dillinger JD2017-T.jpg', 'SPECIFICATIONS\r\n\r\nBRAND JOHN DILLINGER \r\nP/No. JD2017-T\r\nMATERIAL Metal / Resin \r\nSIZE 51?18?145?39 \r\n'),
(47, 'AIR ULTEM', 'AU2055T-9S ', 'Eyewear for Adults', '2022-03-17', '0000-00-00', 1999, 999, 1000, 'Supplier', 10, '1647502148_AIR Ultem AU2055T-9S.jpg', 'SPECIFICATIONS\r\n \r\nBRAND AIR ULTEM \r\nP/No. AU2055T-9S \r\nMATERIAL Resin \r\nSIZE 53?16?145?32\r\n'),
(48, 'OWNDAYS ', 'SUN2058J-9S ', 'Sunglasses', '2022-03-17', '0000-00-00', 1999, 999, 1000, 'Supplier', 10, '1647502268_OWNDAYS SUN2058J-9S.jpg', 'SPECIFICATIONS \r\n\r\nBRAND OWNDAYS SUNGLASSES\r\nP/No. SUN2058J-9S\r\nMATERIAL Plastic \r\nSIZE 64?16?100?51\r\n'),
(49, 'OWNDAYS ', 'SUN2064B-9S ', 'Sunglasses', '2022-03-17', '0000-00-00', 1999, 999, 1000, 'Supplier', 10, '1647502863_OWNDAYS SUN2064B-9S.jpg', 'SPECIFICATIONS \r\n\r\nBRAND OWNDAYS SUNGLASSES\r\nP/No. SUN2064B-9S \r\nMATERIAL Plastic \r\nSIZE 58?18?142?46.8\r\n'),
(50, 'JUNNI', 'JU3005N-0S ', 'Sunglasses', '2022-03-17', '0000-00-00', 1999, 999, 1000, 'Supplier', 10, '1647502922_Junni JU3005N-0S.jpg', 'SPECIFICATIONS\r\n\r\nBRAND Junni \r\nP/No.JU3005N-0S\r\nMATERIAL Resin\r\nSIZE48?16?130?35.8\r\n'),
(51, 'NICHE', 'NC1019B-9A ', 'Sunglasses', '2022-03-17', '0000-00-00', 1999, 999, 1000, 'Supplier', 10, '1647503242_NICHE NC1019B-9A.jpg', 'SPECIFICATIONS\r\n\r\nBRAND NICHE\r\nP/No.NC1019B-9A\r\nMATERIAL Metal\r\nSIZE51?20?140?47\r\n'),
(52, 'OWNDAYS ', 'SUN2063B-9S ', 'Sunglasses', '2022-03-17', '0000-00-00', 1999, 999, 1000, 'Supplier', 10, '1647503788_OWNDAYS SUN2063B-9S.jpg', 'SPECIFICATIONS\r\n \r\nBRAND OWNDAYS SUNGLASSES \r\nP/No. SUN2063B-9S \r\nMATERIAL Plastic / Stainless \r\nSIZE 52?20?140?42\r\n'),
(53, 'OWNDAYS ', 'SUN2083B-0S ', 'Sunglasses', '2022-03-17', '0000-00-00', 1999, 999, 1000, 'Supplier', 10, '1647503831_OWNDAYS SUN2083B-0S.jpg', 'SPECIFICATIONS \r\n\r\nBRAND OWNDAYS \r\nP/No. SUN2083B-0S \r\nMATERIAL Plastic / Stainless \r\nSIZE 52?20?140?48\r\n'),
(54, 'OWNDAYS ', 'SUN2082N-0S ', 'Sunglasses', '2022-03-17', '0000-00-00', 1999, 999, 1000, 'Supplier', 10, '1647503891_OWNDAYS SUN2082N-0S.jpg', 'SPECIFICATIONS\r\n\r\nBRAND OWNDAYS\r\nP/No. SUN2082N-0S\r\nMATERIAL Resin\r\nSIZE56?19?140?39.7\r\n'),
(55, 'OWNDAYS ', 'SUN2080B-0S', 'Sunglasses', '2022-03-17', '0000-00-00', 1999, 999, 1000, 'Supplier', 10, '1647503952_OWNDAYS SUN2080B-0S.jpg', 'SPECIFICATIONS\r\n\r\nBRAND OWNDAYS\r\nP/No. SUN2080B-0S\r\nMATERIAL Plastic\r\nSIZE54?19?145?43.6    \r\n'),
(56, 'NICHE', 'NC2008B-0S', 'Sunglasses', '2022-03-17', '0000-00-00', 1999, 999, 1000, 'Supplier', 10, '1647504007_NICHE NC2008B-0S.jpg', 'SPECIFICATIONS\r\n\r\nBRAND+NICHE\r\nP/No.NC2008B-0S\r\nMATERIAL Plastic\r\nSIZE52?19?140?43.5\r\n'),
(57, 'OWNDAYS ', 'SUN1058B-0S ', 'Sunglasses', '2022-03-17', '0000-00-00', 1999, 999, 1000, 'Supplier', 10, '1647504073_OWNDAYS SUN1058B-0S.jpg', 'SPECIFICATIONS\r\n\r\nBRAND OWNDAYS\r\nP/No.SUN1058B-0S\r\nMATERIAL Stainless\r\nSIZE53?20?140?52\r\n'),
(58, 'OWNDAYS ', 'COLLECTION KMTY2005Y-1S GIYU TOMIOKA', 'Seen Wear', '2022-03-17', '0000-00-00', 1999, 999, 1000, 'Supplier', 10, '1647504221_COLLECTION KMTY2005Y-1S GIYU TOMIOKA.jpg', 'SPECIFICATIONS\r\nMaterials Lens: Acrylic (demo lens) Frame: Acetate, Alloy \r\nSize Lens Width: Approx. 53mm Nose Bridge Length: Approx. 17mm Temple Length: Approx. 140mm\r\n'),
(59, 'OWNDAYS ', 'COLLECTION KMTY2001Y-1S TANJIRO KAMADO', 'Seen Wear', '2022-03-17', '0000-00-00', 1999, 999, 1000, 'Supplier', 10, '1647504293_COLLECTION KMTY2001Y-1S TANJIRO KAMADO.jpg', 'SPECIFICATIONS\r\nMaterials Lens: Acrylic (demo lens) Frame: Acetate, Alloy \r\nSize Lens Width: Approx. 48mm Nose Bridge Length: Approx. 20mm Temple Length: Approx. 140mm\r\n'),
(60, 'OWNDAYS ', 'GDM1001T-9A ', 'Seen Wear', '2022-03-17', '0000-00-00', 1999, 999, 1000, 'Supplier', 10, '1647504382_GUNDAM X OWNDAYS GDM1001T-9A.jpg', 'SPECIFICATIONS\r\n\r\nBRAND OWNDAYS\r\nP/No. GDM1001T-9A\r\nMATERIAL Stainless\r\nSIZE55?16?138?33\r\n'),
(61, 'OWNDAYS ', 'Graph Bell GB1026B-9A', 'Seen Wear', '2022-03-17', '0000-00-00', 1999, 999, 1000, 'Supplier', 10, '1647504437_Graph Belle GB1026B-9A.jpg', 'SPECIFICATIONS \r\n\r\nBRAND GRAPH BELLE \r\nP/No. GB1026B-9A\r\nMATERIAL Titanium / Stainless \r\nSIZE 51?20?145?45\r\n'),
(62, 'OWNDAYS ', 'Graph Belle GB1021F-8A ', 'Seen Wear', '2022-03-17', '0000-00-00', 1999, 999, 1000, 'Supplier', 10, '1647504523_Graph Belle GB1021F-8A.jpg', 'SPECIFICATIONS \r\nBRAND GRAPH BELLE \r\nP/No. GB1021F-8A \r\nMATERIAL Resin / Stainless \r\nSIZE 50?18?142?41\r\n'),
(63, 'LILLYBELL', 'LB1010G-0S ', 'Seen Wear', '2022-03-17', '0000-00-00', 1999, 999, 1000, 'Supplier', 10, '1647504650_Lillybell LB1010G-0S.jpg', 'SPECIFICATIONS \r\n\r\nBRAND lillybell \r\nP/No. LB1010G-0S \r\nMATERIAL Plastic / Stainless \r\nSIZE 53?19?140?48.3\r\n'),
(64, 'OWNDAYS ', 'OR1038T-9S ', 'Seen Wear', '2022-03-17', '0000-00-00', 1999, 999, 1000, 'Supplier', 10, '1647504975_OWNDAYS OR1038T-9S.jpg', 'SPECIFICATIONS\r\n\r\nBRANDOWNDAYS\r\nP/No.OR1038T-9S\r\nMATERIAL Metal\r\nSIZE53?16?138?32\r\n'),
(65, 'OWNDAYS ', 'OR1035T-9S ', 'Seen Wear', '2022-03-17', '0000-00-00', 1999, 999, 1000, 'Supplier', 10, '1647505023_OWNDAYS OR1035T-9S.jpg', 'SPECIFICATIONS\r\n\r\nBRANDOWNDAYS\r\nP/No. OR1035T-9S\r\nMATERIAL Metal\r\nSIZE55?17?140?32\r\n'),
(66, 'NICHE', 'NC3014J-0S ', 'Seen Wear', '2022-03-17', '0000-00-00', 1999, 999, 1000, 'Supplier', 10, '1647505074_NICHE NC3014J-0S.jpg', 'SPECIFICATIONS\r\n\r\nBRAND+NICHE\r\nP/No.NC3014J-0S\r\nMATERIAL Plastic\r\nSIZE53?19?142?46.7\r\n'),
(67, 'JOHN DILLINGER', 'JD1009Y-8A ', 'Seen Wear', '2022-03-17', '0000-00-00', 1999, 999, 1000, 'Supplier', 10, '1647505132_John Dillinger JD1009Y-8A.jpg', 'SPECIFICATIONS \r\n\r\nBRAND JOHN DILLINGER \r\nP/No. JD1009Y-8A \r\nMATERIAL Titanium \r\nSIZE 49?20?145?42.7\r\n'),
(68, 'Ray-Ban Junior', 'RY1530/3821_48 ', 'Eyewear for Kids', '2022-03-17', '0000-00-00', 1999, 999, 1000, 'Supplier', 10, '1647505225_Ray-Ban Junior RY1530-3821-48.jpg', 'DETAIL\r\nBrand: Ray-Ban Junior\r\nGender: Unisex\r\nFrame Shape: Rectangle\r\nFrame Color: Red\r\nLens Color: Clear\r\nFrame Material: Acetate\r\nFrame Style: Full-Rim\r\n'),
(69, 'Ray-Ban Junior', 'RY9065V/3743_48 ', 'Eyewear for Kids', '2022-03-17', '0000-00-00', 1999, 999, 1000, 'Supplier', 10, '1647505407_Ray-Ban Junior RY9065V-3743-48.jpg', 'DETAIL\r\nBrand: Ray-Ban Junior\r\nGender: Unisex\r\nFrame Shape: Round\r\nFrame Color: Gloss Blue\r\nLens Color: Clear\r\nFrame Material: Injected\r\nFrame Style: Full-Rim\r\n'),
(70, 'Ray-Ban Junior', 'RY1052/4056_47 ', 'Eyewear for Kids', '2022-03-17', '0000-00-00', 1999, 999, 1000, 'Supplier', 10, '1647505517_Ray-Ban Junior RY1052-4056-47 .jpg', 'DETAIL\r\nBrand: Ray-Ban Junior\r\nGender: Unisex\r\nFrame Shape: Square\r\nFrame Color: Purple-Silver\r\nTemple Color: Brown\r\nLens Color: Clear\r\nFrame Material: Metal\r\nFrame Style: Full-Rim\r\n'),
(71, 'Ray-Ban Junior', 'RY1562/3747_46 ', 'Eyewear for Kids', '2022-03-17', '0000-00-00', 1999, 999, 1000, 'Supplier', 10, '1647505766_Ray-Ban Junior RY1562-3747-46 .jpg', 'DETAIL\r\nBrand: Ray-Ban Junior\r\nGender: Unisex\r\nFrame Shape: Square\r\nFrame Color: Red\r\nTemple Color: Grey\r\nLens Color: Clear\r\nFrame Material:\r\nFrame Style: Full-Rim\r\n'),
(72, 'Ray-Ban Junior', 'RY1531/3749_46 ', 'Eyewear for Kids', '2022-03-17', '0000-00-00', 1999, 999, 1000, 'Supplier', 10, '1647505886_Ray-Ban Junior RY1531-3749-46 .jpg', 'DETAIL\r\nBrand: Ray-Ban Junior\r\nGender: Unisex\r\nFrame Shape: Square\r\nFrame Color: Black\r\nTemple Color: Dark Purple\r\nLens Color: Clear\r\nFrame Material: Acetate\r\nFrame Style: Full-Rim\r\n'),
(73, 'TONY MORGAN LONDON KIDS', 'TM SR1701/C3/43 ', 'Eyewear for Kids', '2022-03-17', '0000-00-00', 1999, 999, 1000, 'Supplier', 10, '1647505964_Tony Morgan London Kids TM SR1701-C3-43 .jpg', 'Brand: Tony Morgan London Kids\r\nGender: Unisex \r\nSize: 43 Frame \r\nColour: Brown \r\nFrameShape:  Oval \r\nFrame Style: Full Rim Frame\r\nMaterial: Acetate Lens\r\nMaterial: Customisable\r\n'),
(74, 'TONY MORGAN LONDON KIDS', 'TM SR1701/C5/43 ', 'Eyewear for Kids', '2022-03-17', '0000-00-00', 1999, 999, 1000, 'Supplier', 10, '1647506195_Tony Morgan London Kids TM SR1701-C5-43 .jpg', 'DETAIL Brand: Tony Morgan London Kids \r\nGender: Unisex \r\nSize: 43 Frame \r\nColour: Blue \r\nFrame Shape:  Oval\r\nFrame Style: Full Rim \r\nFrame Material: Acetate \r\nLens Material: Customisable\r\n'),
(75, 'TONY MORGAN LONDON KIDS', 'TM A1663/C5 ', 'Eyewear for Kids', '2022-03-17', '0000-00-00', 1999, 999, 1000, 'Supplier', 10, '1647506456_Tony Morgan London Kids TM A1663-C5 .jpg', 'DETAIL\r\nBrand: Tony Morgan London Kids \r\nGender: Unisex\r\nSize: 48 \r\nFrame Colour: Pink\r\nFrame Shape:  Square \r\nFrame Style: Full Rim \r\nFrame Material: Acetate\r\nLens Material: Customisable\r\n'),
(76, 'Ray-Ban Junior', 'RY1566D/3712_50 ', 'Eyewear for Kids', '2022-03-17', '0000-00-00', 1999, 999, 1000, 'Supplier', 10, '1647506548_Ray-Ban Junior (Kids) RY1566D-3712-50 .jpg', 'DETAIL\r\nBrand: Ray-Ban Junior\r\nGender: Unisex\r\nFrame Colour: Blue-Red\r\nLens Colour: Clear \r\nFrame Shape: Oval \r\nFrame Style: Full Rim\r\nFrame Material: Acetate\r\n'),
(77, 'Ray-Ban Junior', 'RY1053/4066_45 ', 'Eyewear for Kids', '2022-03-17', '0000-00-00', 1999, 999, 1000, 'Supplier', 10, '1647506624_Ray-Ban Junior RY1053-406645 .jpg', 'DETAIL \r\nBrand: Ray-Ban Junior\r\nGender: Unisex\r\nFrame Colour: Red \r\nLens Colour: Clear \r\nFrame Shape: Round \r\nFrame Style: Full-Rim \r\nFrame Material: Meta\r\n'),
(78, '', 'SQUARE FLORAL ', 'Eyewear for Kids', '2022-03-17', '0000-00-00', 1999, 999, 1000, 'Supplier', 10, '1647506785_Square Floral Eyeglasses.jpg', 'DESCRIPTION: \r\nSize: Small | 49 ?17-135\r\nColor: Floral\r\nWeight: Lightweight (15g)\r\nMaterial: plastic\r\nShape: Square\r\nRim: Full-Rim\r\nAnti-Scratch lens coating\r\n'),
(79, '', 'LITTLE BRISTOL', 'Eyewear for Kids', '2022-03-17', '0000-00-00', 1999, 999, 1000, 'Supplier', 10, '1647506850_Little Bristol.jpg', 'DESCRIPTION:\r\nSize: Small | 50 ?17-135\r\nColor: Black\r\nWeight: 19g\r\nMaterial: acetate\r\nShape: Rectangle\r\nRim: Full-Rim\r\nOther features: Spring hinge\r\nAnti-Scratch lens coating\r\n'),
(80, '', 'SQUARE BLACK TORTOISE', 'Eyewear for Kids', '2022-03-17', '0000-00-00', 1999, 999, 1000, 'Supplier', 10, '1647506897_Square Black Tortoise.jpg', 'DESCRIPTION:\r\nSize: Medium | 50 ?19-135\r\nColor: Black Tortoise\r\nWeight: Lightweight (15g)\r\nMaterial: acetate\r\nShape: Square\r\nRim: Full-Rim\r\nOther features: Spring hinge\r\nAnti-Scratch lens coating\r\n'),
(81, '', 'LITTLE MORNING', 'Eyewear for Kids', '2022-03-17', '0000-00-00', 1999, 999, 1000, 'Supplier', 10, '1647506954_Little Morning.jpg', 'Size: Small | 47 ?18-133\r\nColor: Clear\r\nWeight: Lightweight (10g)\r\nMaterial: plastic\r\nShape: Round\r\nRim: Full-Rim\r\nAnti-Scratch lens coating\r\n'),
(82, '', 'LITTLE JOHN', 'Eyewear for Kids', '2022-03-17', '0000-00-00', 1999, 999, 1000, 'Supplier', 10, '1647507001_Little John.jpg', 'DESCRIPTION:\r\nSize: X-Small | 49 ?16-127\r\nColor: Black\r\nWeight: 21g\r\nMaterial: acetate\r\nShape: Rectangle\r\nRim: Full-Rim\r\nOther features: Spring hinge\r\nAnti-Scratch lens coating\r\n'),
(83, '', 'ST. MICHEL', 'Eyewear for Kids', '2022-03-17', '0000-00-00', 1999, 999, 1000, 'Supplier', 10, '1647507046_St Michel.jpg', 'Size: Small | 48 ?19-140\r\nColor: Rose Gold\r\nWeight: Lightweight (15g)\r\nMaterial: metal\r\nShape: Round\r\nRim: Full-Rim\r\nAnti-Scratch lens coating\r\n'),
(84, '', 'THINKER', 'Eyewear for Kids', '2022-03-17', '0000-00-00', 1999, 999, 1000, 'Supplier', 10, '1647507087_Thinker.jpg', 'Size: X-Small | 48 ?17-125\r\nColor: Clear Pink\r\nWeight: Lightweight (15g)\r\nMaterial: acetate\r\nShape: Cat Eye\r\nRim: Full-Rim\r\nOther features: Spring hinge\r\nAnti-Scratch lens coating\r\n'),
(85, '', 'BOTANIST', 'Eyewear for Kids', '2021-03-17', '0000-00-00', 1999, 999, 1000, 'Supplier', 10, '1647507144_Botanist.jpg', 'Size: Medium | 52 ?18-145\r\nColor: Ivory Tortoise\r\nWeight: 16g\r\nMaterial: acetate\r\nShape: Rectangle\r\nRim: Full-Rim\r\nAnti-Scratch lens coating\r\n'),
(86, '', 'ISABELLA', 'Sunglasses', '2022-03-17', '0000-00-00', 1999, 999, 1000, 'Supplier', 10, '1647507223_Isabella.jpg', 'Size: Large | 58 ?16-145\r\nColor: Black Sunglasses\r\nWeight: 23g\r\nMaterial: acetate\r\nShape: Square\r\nAnti-Scratch lens coating\r\n'),
(87, '', 'HANOI', 'Sunglasses', '2022-03-17', '0000-00-00', 1999, 999, 1000, 'Supplier', 10, '1647507269_Hanoi.jpg', 'Size: Medium | 51 ?20-140\r\nColor: Black Sunglasses\r\nWeight: 25g\r\nMaterial: acetate\r\nShape: Square\r\nAnti-Scratch lens coating\r\n'),
(88, '', 'LISA', 'Sunglasses', '2022-03-17', '0000-00-00', 1999, 999, 1000, 'Supplier', 10, '1647507340_Lisa.jpg', 'Size: Large | 54 ?21-148\r\nColor: Black Sunglasses\r\nWeight: 26g\r\nMaterial: acetate-metal\r\nShape: Square\r\nOther features: Spring hinge\r\nAnti-Scratch lens coating\r\n'),
(89, '', 'CORTEZ', 'Sunglasses', '2022-03-17', '0000-00-00', 1999, 999, 1000, 'Supplier', 10, '1647507546_Cortez.jpg', 'Size: Large | 56 ?17-147\r\nColor: Black Sunglasses\r\nWeight: Lightweight (14g)\r\nMaterial: plastic\r\nShape: Rectangle\r\nAnti-Scratch lens coating\r\n'),
(90, '', 'GRAYTON', 'Sunglasses', '2022-03-17', '0000-00-00', 1999, 999, 1000, 'Supplier', 10, '1647507588_Grayton.jpg', 'Size: Medium | 56 ?19-145\r\nColor: Clear Blue Sunglasses\r\nWeight: 24g\r\nMaterial: acetate\r\nShape: Rectangle\r\nAnti-Scratch lens coating\r\n'),
(91, '', 'LOS ANGELES', 'Sunglasses', '2022-03-17', '0000-00-00', 1999, 999, 1000, 'Supplier', 10, '1647507634_Los Angeles.jpg', 'Size: Large | 52 ?21-145\r\nColor: Clear Green Sunglasses\r\nWeight: 32g\r\nMaterial: acetate\r\nShape: Square\r\nAnti-Scratch lens coating\r\n'),
(92, '', 'CINEMATIC', 'Sunglasses', '2022-03-17', '0000-00-00', 1999, 999, 1000, 'Supplier', 10, '1647507680_Cinematic.jpg', 'Size: Large | 54 ?18-145\r\nColor: Ivory Tortoise Sunglasses\r\nWeight: 22g\r\nMaterial: acetate\r\nShape: Cat Eye\r\nAnti-Scratch lens coating\r\n'),
(93, '', 'SAFARI', 'Sunglasses', '2022-03-17', '0000-00-00', 1999, 999, 1000, 'Supplier', 10, '1647507839_Safari.jpg', 'Size: Medium | 50 ?21-145\r\nColor: Tortoise Sunglasses\r\nWeight: 17g\r\nMaterial: acetate\r\nShape: Round\r\nAnti-Scratch lens coating\r\n'),
(94, '', 'SUN ULTRAVIOLET', 'Sunglasses', '2022-03-17', '0000-00-00', 1999, 999, 1000, 'Supplier', 10, '1647507884_Sun Ultraviolet.jpg', 'Size: Large | 54 ?18-140\r\nColor: Brown Striped Sunglasses\r\nWeight: 16g\r\nMaterial: acetate-metal\r\nShape: Square\r\nAnti-Scratch lens coating\r\n'),
(95, '', 'MULTI- PURPOSE CHAIN 22-INCHES METAL GOLD', 'Accessories', '2022-03-13', '0000-00-00', 100, 50, 50, 'Supplier', 20, '1647508460_Multi-Purpose Chain 22-inches Metal Gold.jpg', 'Lens Material: \r\nBalafilcon A (Silicone Hydrogel)\r\nProduct Category:\r\nChain\r\nLength:\r\n27 inches\r\nBox Content:\r\nMulti-Purpose Chain\r\nMaterial: Metal\r\n'),
(96, '', 'UV SANITIZER', 'Accessories', '2022-03-19', '0000-00-00', 800, 500, 300, 'Supplier', 5, '1647508909_UV Sanitizer.jpg', 'With the safe start up mechanism and a preset-timer, the UV-C sanitizer only operates when the box is closed, keeping your eyes safe. The box easily accommodates most daily accessories like smartphones, rings and jewelries, face masks and small apparel, personal care tools, money, spectacles/sunglasses or small accessories like earphones.'),
(97, 'TITAN', 'LENS SOLUTION', 'Accessories', '2021-03-03', '2023-03-03', 300, 200, 100, 'Supplier', 20, '1647509029_Lens Solution.jpg', 'Sku: LS06A\r\nBrand: Titan\r\nLens Material: Balafilcon A (Silicone Hydrogel)\r\nProduct Category: Lens Cleaning Solution\r\nSize: 50 ML\r\n'),
(98, 'TITAN', 'UNIVERSAL ANTI FOG CLOTH', 'Accessories', '2022-03-03', '2023-03-03', 200, 100, 100, 'Supplier', 10, '1647509108_Universal Anti Fog Cloth.jpg', 'Universal Fog-Free cloth can be applied with any lens coating (except Anti Fog Lenses) to activate the anti-fog property of the lens'),
(99, 'BAUSCH & LOMB RENU', 'Advance Solution', 'Accessories', '2022-03-03', '2023-03-03', 400, 200, 200, 'Supplier', 5, '1647509224_Renu Advance Solution.jpg', 'Bausch & Lomb Renu Advance Solution 355 ml'),
(100, 'BAUSCH & LOMB RENU', 'Biotrue', 'Accessories', '2022-03-03', '2023-03-03', 400, 200, 200, 'Supplier', 5, '1647509282_Biotrue.jpg', 'Bausch & Lomb Biotrue 60ml'),
(101, 'ALCON', 'Opti-Free Contact Lens Solution ', 'Accessories', '2022-03-03', '2023-02-03', 300, 200, 100, 'Supplier', 5, '1647509348_Opti-Fresh Replenish.jpg', 'Alcon Opti-Free Contact Lens Solution 120 ml'),
(102, 'ALCON', 'Opti-Free Puremoist', 'Accessories', '2022-03-03', '2024-06-03', 250, 150, 100, 'Supplier', 5, '1647509423_Opti-Free Puremoist.jpg', 'Opti Free Puremoist 4 OZ 120ml'),
(103, '', 'Clip-Ons', 'Accessories', '2022-04-03', '0000-00-00', 320, 200, 120, 'Supplier', 5, '1647509504_Clip-Ons.jpg', 'Rim: Rimless\r\nFront Shape: Rectangle\r\nMaterial: Polycarbonate\r\nLens Height: 40 mm\r\n\r\nLens Width: 58 mm\r\nBridge Width: 15 mm\r\nBridge Color: Black\r\nSize: Large\r\nLens Color: Black\r\n'),
(104, 'COOPER VISION', 'My Day Daily Disposable', 'Contact Lenses', '2022-03-17', '2022-04-17', 800, 500, 300, 'Supplier', 5, '1647509704_MyDay Daily Disposable.jpg', 'Type: Daily disposable lenses.\r\nPackaging: 30 Lenses per box.\r\nContent: Provides the eyes with 54% of available water content.\r\nManufacturer: CooperVision\r\nBenefits: Created with Smart Silicone, which helps maximize oxygen delivery to the cornea for superior comfort.\r\n'),
(105, 'AIR OPTIX', 'Hydraglyde', 'Contact Lenses', '2022-04-03', '2022-05-03', 800, 500, 300, 'Supplier', 5, '1647509913_Air Optix Hydraglyde.jpg', 'AIR OPTIX HYDRAGLYDE\r\nType: Monthly disposable\r\nPackaging: 6 lenses per box\r\nContent: 67% lotrafilcon B & 33% water\r\nManufacturer: AIR OPTIX\r\n'),
(106, 'BAUSCH & LOMB RENU', 'SofLens 59', 'Contact Lenses', '2022-04-03', '2022-05-03', 800, 500, 300, 'Supplier', 5, '1647509984_Softlens 59.jpg', 'SOFTLENS 59\r\nType: Monthly disposable\r\nPackaging: 6 lenses per box\r\nContent: 41% Polymer (hilafilcon A) & 59% water\r\nManufacturer: Bausch & Lomb\r\n'),
(107, 'BURBERRY', 'BE1313Q ', 'Seen Wear', '2022-03-17', '0000-00-00', 1999, 999, 1000, 'Supplier', 10, '1647510343_BE1313Q.jpg', 'Frame Lens Width: 53 millimeter \r\nFrame Bridge: 16 millimeter \r\nFrame Temple: 140 millimeter \r\nGender: Women \r\nFrame Material: Metal \r\nFrame Shape: Square \r\nColor:Black Light Gold \r\nBrand: Burberry \r\nPrice: $174.30 \r\nPrescription Type: Single Vision, Progressive, Non-Prescription Select Your Lenses: Standard, Bronze, Silver, Gold, Platinum,  Diamond \r\nLens Adds On: None, Photochromic Gray,Photochromic Brown,  Photochromic Dark Gray, Photochromic Dark Brown, Photochromic  Mirror Gray, Photochromic Mirror Brown \r\nPair Protect: No pair protect, pair protect \r\nEnter Prescription: Right (OD) {Sphere, Cylinder, Axis} Left (OD)  {Sphere, Cylinder, Axis} PD \r\n'),
(108, 'DOLCE & GABBANA', 'DG1323 ', 'Seen Wear', '2022-03-17', '0000-00-00', 1999, 999, 1000, 'Supplier', 10, '1647510403_DG1323 .jpg', 'Frame Lens Width: 57 millimeter \r\nFrame Bridge: 16 millimeter \r\nFrame Temple: 140 millimeter \r\nGender: Women \r\nFrame Material: Metal \r\nFrame Shape: Square \r\nColor: Pink Gold Bordeaux \r\nBrand: Dolce & Gabbana \r\nPrice: $230.30 \r\nPrescription Type: Single Vision, Progressive, Non-Prescription Select Your Lenses: Standard, Bronze, Silver, Gold, Platinum,  Diamond \r\nLens Adds On: None, Photochromic Gray,Photochromic Brown,  Photochromic Dark Gray, Photochromic Dark Brown, Photochromic  Mirror Gray, Photochromic Mirror Brown \r\nPair Protect: No pair protect, pair protect \r\nEnter Prescription: Right (OD) {Sphere, Cylinder, Axis} Left (OD)  {Sphere, Cylinder, Axis} PD \r\n'),
(109, 'GUCCI', 'GG0329O ', 'Seen Wear', '2022-03-17', '0000-00-00', 1999, 999, 1000, 'Supplier', 10, '1647510450_GG0329O .jpg', 'Frame Lens Width: 53 millimeter \r\nFrame Bridge: 18 millimeter \r\nFrame Temple: 145 millimeter \r\nGender: Women \r\nFrame Material: Acetate \r\nFrame Shape: Round \r\nColor: Shiny Blue \r\nBrand: Gucci \r\nPrice: $230.30 \r\nPrescription Type: Single Vision, Progressive, Non-Prescription Select Your Lenses: Standard, Bronze, Silver, Gold,  Platinum,Diamond \r\nLens Adds On: None, Photochromic Gray,Photochromic Brown,  Photochromic Dark Gray, Photochromic Dark Brown, Photochromic  Mirror Gray, Photochromic Mirror Brown \r\nPair Protect: No pair protect, pair protect \r\nEnter Prescription: Right (OD) {Sphere, Cylinder, Axis} Left (OD)  {Sphere, Cylinder, Axis} PD \r\n'),
(110, 'HERITAGE', 'HEOF0008 ', 'Seen Wear', '2022-03-17', '0000-00-00', 1999, 999, 1000, 'Supplier', 10, '1647510496_HEOF0008 .jpg', 'Frame Lens Width: 51 millimeter \r\nFrame Bridge: 21 millimeter \r\nFrame Temple: 140 millimeter \r\nGender: Women \r\nFrame Material: Stainless Steel \r\nFrame Shape: Round \r\nColor: Havana \r\nBrand: Heritage \r\nPrice: $97.30 \r\nPrescription Type: Single Vision, Progressive, Non-Prescription Select Your Lenses: Standard, Bronze, Silver, Gold, Platinum,  Diamond \r\nLens Adds On: None, Photochromic Gray,Photochromic Brown,  Photochromic Dark Gray, Photochromic Dark Brown, Photochromic  Mirror Gray, Photochromic Mirror Brown \r\nPair Protect: No pair protect, pair protect \r\nEnter Prescription: Right (OD) {Sphere, Cylinder, Axis} Left (OD)  {Sphere, Cylinder, Axis} PD \r\n'),
(111, 'HUGO BOSS', 'B0976 ', 'Seen Wear', '2022-03-17', '0000-00-00', 1999, 999, 1000, 'Supplier', 10, '1647510632_B0976 .jpg', 'Frame Lens Width: 60 millimeter \r\nFrame Bridge: 17 millimeter \r\nFrame Temple: 150 millimeter \r\nGender: Men \r\nFrame Material: Metal \r\nFrame Shape: Rectangle \r\nColor: Matte Black \r\nBrand: Hugo Boss \r\nPrice: $188.30 \r\nPrescription Type: Single Vision, Progressive, Non-Prescription Select Your Lenses: Standard, Bronze, Silver, Gold,  Platinum,Diamond \r\nLens Adds On: None, Photochromic Gray,Photochromic Brown,  Photochromic Dark Gray, Photochromic Dark Brown, Photochromic  Mirror Gray, Photochromic Mirror Brown \r\nPair Protect: No pair protect, pair protect \r\nEnter Prescription: Right (OD) {Sphere, Cylinder, Axis} Left (OD)  {Sphere, Cylinder, Axis} PD \r\n'),
(112, 'KATE SPADE', 'Sharla ', 'Seen Wear', '2022-03-17', '0000-00-00', 1999, 999, 1000, 'Supplier', 10, '1647510712_Sharla .jpg', 'Frame Lens Width: 53 millimeter \r\nFrame Bridge: 14 millimeter \r\nFrame Temple:135 millimeter \r\nGender: Women \r\nFrame Material: Acetate \r\nFrame Shape: Rectangle \r\nColor: Blue Tortoise Fade \r\nBrand: Kate Spade \r\nPrice: $146.30 \r\nPrescription Type: Single Vision, Progressive, Non-Prescription Select Your Lenses: Standard, Bronze, Silver, Gold,  Platinum,Diamond \r\nLens Adds On: None, Photochromic Gray,Photochromic Brown,  Photochromic Dark Gray, Photochromic Dark Brown, Photochromic  Mirror Gray, Photochromic Mirror Brown \r\nPair Protect: No pair protect, pair protect \r\nEnter Prescription: Right (OD) {Sphere, Cylinder, Axis} Left (OD)  {Sphere, Cylinder, Axis} PD \r\n'),
(113, 'MARC JACOBS', 'Marc 391 ', 'Seen Wear', '2022-03-17', '0000-00-00', 1999, 999, 1000, 'Supplier', 10, '1647510771_MARC 391 .jpg', 'Frame Lens Width: 58 millimeter \r\nFrame Bridge: 16 millimeter \r\nFrame Temple: 145 millimeter \r\nGender: Men \r\nFrame Material: Stainless Steel \r\nFrame Shape: Square \r\nColor: Ruthenium \r\nBrand: Marc Jacobs \r\nPrice: $146.30 \r\nPrescription Type: Single Vision, Progressive, Non-Prescription Select Your Lenses: Standard, Bronze, Silver, Gold,  Platinum,Diamond \r\nLens Adds On: None, Photochromic Gray,Photochromic Brown,  Photochromic Dark Gray, Photochromic Dark Brown, Photochromic  Mirror Gray, Photochromic Mirror Brown \r\nPair Protect: No pair protect, pair protect \r\nEnter Prescription: Right (OD) {Sphere, Cylinder, Axis} Left (OD)  {Sphere, Cylinder, Axis} PD \r\n'),
(114, 'OAKLEY', 'OX8163 Centerboard ', 'Seen Wear', '2022-03-17', '0000-00-00', 1999, 999, 1000, 'Supplier', 5, '1647510841_OX8163 Centerboard .jpg', 'Frame Lens Width: 55 millimeter \r\nFrame Bridge: 17 millimeter \r\nFrame Temple: 141 millimeter \r\nGender: Men \r\nFrame Material: Plastic \r\nFrame Shape: Square \r\nColor: Polished Clear \r\nBrand: Oakley \r\nPrice: $209 \r\nPrescription Type: Single Vision, Progressive, Non-Prescription Select Your Lenses: Standard, Bronze, Silver, Gold,  Platinum,Diamond \r\nLens Adds On: None, Photochromic Gray,Photochromic Brown,  Photochromic Dark Gray, Photochromic Dark Brown, Photochromic  Mirror Gray, Photochromic Mirror Brown \r\nPair Protect: No pair protect, pair protect \r\nEnter Prescription: Right (OD) {Sphere, Cylinder, Axis} Left (OD)  {Sphere, Cylinder, Axis} PD \r\n'),
(115, 'PRADE', 'PS 08GV ', 'Seen Wear', '2022-03-17', '0000-00-00', 1999, 999, 1000, 'Supplier', 5, '1647510889_PS 08GV .jpg', 'Frame Lens Width: 54 millimeter \r\nFrame Bridge: 18 millimeter \r\nFrame Temple: 145 millimeter \r\nGender: Men \r\nFrame Material: Plastic \r\nFrame Shape: Square \r\nColor: Black Rubber \r\nBrand: Prada \r\nPrice: $230.30 \r\nPrescription Type: Single Vision, Progressive, Non-Prescription Select Your Lenses: Standard, Bronze, Silver, Gold,  Platinum,Diamond \r\nLens Adds On: None, Photochromic Gray,Photochromic Brown,  Photochromic Dark Gray, Photochromic Dark Brown, Photochromic  Mirror Gray, Photochromic Mirror Brown \r\nPair Protect: No pair protect, pair protect \r\nEnter Prescription: Right (OD) {Sphere, Cylinder, Axis} Left (OD)  {Sphere, Cylinder, Axis} PD \r\n'),
(116, 'Ray-Ban', 'RX6285 ', 'Seen Wear', '2022-03-17', '0000-00-00', 1999, 999, 1000, 'Supplier', 5, '1647510940_RX6285 .jpg', 'Frame Lens Width: 53 millimeter \r\nFrame Bridge: 18 millimeter \r\nFrame Temple: 140 millimeter \r\nGender: Men \r\nFrame Material: Metal \r\nFrame Shape: Rectangle \r\nColor: Gunmetal \r\nBrand: Ray-Ban \r\nPrice: $209 \r\nPrescription Type: Single Vision, Progressive, Non-Prescription Select Your Lenses: Standard, Bronze, Silver, Gold,  Platinum,Diamond \r\nLens Adds On: None, Photochromic Gray,Photochromic Brown,  Photochromic Dark Gray, Photochromic Dark Brown, Photochromic  Mirror Gray, Photochromic Mirror Brown \r\nPair Protect: No pair protect, pair protect \r\nEnter Prescription: Right (OD) {Sphere, Cylinder, Axis} Left (OD)  {Sphere, Cylinder, Axis} PD \r\n'),
(117, 'ACUVUE', 'OASYS with Transitions ', 'Contact Lenses', '2022-03-17', '0000-00-00', 800, 500, 300, 'Supplier', 6, '1647511102_OASYS with Transitions .jpg', 'Handling Tint: No \r\nReplacement Frequency: Biweekly lenses Diameter: 14 millimeter \r\nMaterial: Senofilcon A \r\nMaterial Type: Silicone Hydrogel Type: Soft \r\nOrientation Marking Available: Yes Oxygen Permeability (Dk/t): 121 Water Content: 38% \r\nQuantity: 25 \r\nProducer: Johnson & Johnson \r\nPrice: $184.99 \r\nBrand: ACUVUE\r\n'),
(118, 'AIR OPTIX', 'HydraGlyde® Multifocal ', 'Contact Lenses', '2022-03-17', '0000-00-00', 800, 500, 300, 'Supplier', 5, '1647511160_Air Optix® plus  HydraGlyde Multifocal.jpg', 'Handling Tint: Yes \r\nReplacement Frequency: Monthly lenses \r\nDiameter: 14.2 millimeter \r\nMaterial: Lotrafilcon B \r\nMaterial Type: Silicone Hydrogel \r\nType: Soft \r\nOrientation Marking Available: No \r\nOxygen Permeability (Dk/t): 138 \r\nWater Content: 33% \r\nQuantity: 6 \r\nProducer: Alcon \r\nPrice: $80.49 \r\nBrand: Air Optix\r\n'),
(119, 'BIOFINITY', 'XR Toric', 'Contact Lenses', '2022-03-17', '0000-00-00', 800, 500, 300, 'Supplier', 5, '1647511219_Biofinity® XR toric .jpg', 'Handling Tint: Yes \r\nReplacement Frequency: Monthly lenses \r\nDiameter: 14.5 millimeter \r\nMaterial: Comfilcon A \r\nMaterial Type: Silicone Hydrogel \r\nType: Soft \r\nOrientation Marking Available: No \r\nOxygen Permeability (Dk/t): 116 \r\nWater Content: 48% \r\nQuantity: 6 \r\nProducer: CooperVision \r\nPrice: $124.80 \r\nBrand: Biofinity\r\n'),
(120, 'CLARITI', '1day Multifocal 90 Pack ', 'Contact Lenses', '2022-03-17', '0000-00-00', 800, 500, 300, 'Supplier', 5, '1647511281_Clariti 1day Multifocal 90 Pack .jpg', 'Handling Tint: no \r\nReplacement Frequency: Daily lenses \r\nDiameter: 14.1 millimeter \r\nMaterial: Somofilcon A \r\nMaterial Type: Silicone Hydrogel \r\nType: Soft \r\nOrientation Marking Available: No \r\nOxygen Permeability (Dk/t): 86 \r\nWater Content: 56% \r\nQuantity: 90 \r\nProducer: CooperVision \r\nPrice: $87.49 \r\nBrand: clariti\r\n'),
(121, 'DAILIES', 'TOTAL 1® Multifocal ', 'Contact Lenses', '2022-03-17', '0000-00-00', 800, 500, 300, 'Supplier', 5, '1647511326_DAILIES TOTAL 1® Multifocal .jpg', 'Handling Tint: Yes \r\nReplacement Frequency: Daily lenses \r\nDiameter: 14 millimeter \r\nMaterial: Delefilcon A \r\nMaterial Type: Silicone Hydrogel \r\nType: Soft \r\nOrientation Marking Available: No \r\nOxygen Permeability (Dk/t): 156 \r\nWater Content: 69% \r\nQuantity: 90 \r\nProducer: Alcon \r\nPrice: $115.99 \r\nBrand: DAILIES\r\n'),
(122, 'iWear ', 'Harmony 90pk ', 'Contact Lenses', '2022-03-17', '0000-00-00', 800, 500, 300, 'Supplier', 5, '1647511372_iWear Harmony 90pk .jpg', 'Handling Tint: No \r\nReplacement Frequency: Daily lenses \r\nDiameter: 14.2 millimeter \r\nMaterial: Stenfilcon A \r\nMaterial Type: Silicone Hydrogel \r\nType: Soft \r\nOrientation Marking Available: No \r\nOxygen Permeability (Dk/t): 100 Dk/t (at -3.00D) Water Content: 54% \r\nQuantity: 90 \r\nProducer: CooperVision \r\nPrice: $79.99 \r\nBrand: iWear\r\n'),
(123, 'MY DAY', 'Daily Lenses', 'Contact Lenses', '2022-03-17', '0000-00-00', 800, 500, 300, 'Supplier', 5, '1647511507_MyDay®.jpg', 'Handling Tint: Yes \r\nReplacement Frequency: Daily lenses \r\nDiameter: 14.2 millimeter \r\nMaterial: Stenfilcon A \r\nMaterial Type: Silicone Hydrogel \r\nType: Soft \r\nOrientation Marking Available: No \r\nOxygen Permeability (Dk/t): 100 \r\nWater Content: 54% \r\nQuantity: 90 \r\nProducer: CooperVision \r\nPrice: $66.66 \r\nBrand: MyDay\r\n'),
(124, 'BIOMEDICS', '55 Premier 6 Pack ', 'Contact Lenses', '2022-03-17', '0000-00-00', 800, 500, 300, 'Supplier', 5, '1647511576_Biomedics 55 Premier 6 Pack .jpg', 'Handling Tint: Yes \r\nReplacement Frequency: Biweekly lenses \r\nDiameter: 14.2 millimeter \r\nMaterial: Ocufilcon D \r\nMaterial Type: Silicone Hydrogel \r\nType: Soft \r\nOrientation Marking Available: No \r\nOxygen Permeability (Dk/t): 28.1 \r\nWater Content: 55% \r\nQuantity: 6 \r\nProducer \r\nCooperVision \r\nPrice: $28.49 \r\nBrand: Biomedics\r\n'),
(125, 'BAUSCH & LOMB ULTRA', 'Ultra Multifocal For Astigmatism  6pk ', 'Contact Lenses', '2022-03-17', '0000-00-00', 800, 500, 300, 'Supplier', 5, '1647511688_Ultra Multifocal For Astigmatism  6pk .jpg', 'Handling Tint: yes \r\nReplacement Frequency: Monthly lenses \r\nDiameter: 14.5 millimeter \r\nMaterial: Samfilcon A \r\nMaterial Type: Silicone Hydrogel \r\nType: Soft \r\nOrientation Marking Available: No \r\nOxygen Permeability (Dk/t): 32 \r\nWater Content: 46% \r\nQuantity: 6 \r\nProducer: Bausch & Lomb \r\nPrice: $139.99 \r\nBrand: Bausch + Lomb ULTRA \r\n'),
(126, 'MIRU', 'Miru 1 Month', 'Contact Lenses', '2022-03-17', '0000-00-00', 800, 500, 300, 'Supplier', 5, '1647511774_Miru 1month  .jpg', 'Handling Tint: No \r\nReplacement Frequency: Monthly lenses Diameter: 14 millimeter \r\nMaterial: Asmofilcon A \r\nMaterial Type: Silicone Hydrogel Type: Soft \r\nOrientation Marking Available: No Oxygen Permeability (Dk/t): 161 Water Content: 40% \r\nQuantity: 6 \r\nProducer: Menicon \r\nPrice: $49.99 \r\nBrand: Miru\r\n'),
(127, 'AIR OPTIX', 'Night & Day Aqua', 'Contact Lenses', '2022-03-17', '0000-00-00', 800, 500, 300, 'Supplier', 5, '1647511994_IR OPTIX NIGHT & DAY AQUA.jpg', 'AIR OPTIX NIGHT & DAY AQUA Contact Lenses \r\nclear vision and comfortable contact lens wear at any hour of the day.\r\n'),
(128, 'CIBA VISION', 'Fresh Look Colorblends', 'Contact Lenses', '2022-03-17', '0000-00-00', 800, 500, 300, 'Supplier', 5, '1647512137_Freshlook Colorblends .jpg', 'Freshlook Colorblends spherical contact lenses are  indicated for the correction of near- and farsightedness  in non-diseased eyes that may have a refractive  astigmatism of up to 2.0 diopters.'),
(129, 'CIBA VISION', 'Dailies Total Breatable One-Day Contact Lenses', 'Contact Lenses', '2022-03-17', '0000-00-00', 800, 500, 300, 'Supplier', 5, '1647512231_Eye-bar Optometrists & Opticians .jpg', 'Eye-bar Optometrists & Opticians carries a number of 1-Day  disposable contact lenses brands and can offer same day  contact lens fitting and dispensing in most prescriptions'),
(130, 'MAXI EYES', '2 Tone Natural Series', 'Contact Lenses', '2022-03-17', '0000-00-00', 800, 500, 300, 'Supplier', 5, '1647512369_Maxi Eyes 2 Tone Natural Series .jpg', 'Maxi Eyes Double Tone contact lenses make your eyes bigger  and give them a vibrant colorful look with natural brilliance. The 3 layer system of this lens comes with an outer circle for  bigger eyes, a highlight layer for beautiful colors and a comfort  layer for a pleasant wearing experience. \r\nBoost your look with Maxi Eyes Colors Double Tone Color  Contact Lenses. \r\nMaterial: HEMA + MAA Copolymer \r\nType: Brown, Grey, Maroon \r\nDK: 20 \r\nWater Content: 55% \r\nBase Curve: 8.6mm \r\nDiameter: 14.0mm \r\nQuantity per Box: 2 Lenses/Box\r\n'),
(131, 'GEOLICA', 'Color Lady Series', 'Contact Lenses', '2022-03-17', '2022-04-17', 800, 500, 300, 'Supplier', 5, '1647512548_Geolica Color Lady Series .jpg', 'Geolica Color Lady Series (Light Brown, Pearl Gray) \r\nGeolica Color Lady generate an impressive look with  attractive colors. This GEO colored cosmetic lens naturally  change your eye color and give a good impression to anyone. \r\nLife Span : 3 months \r\nB.C : 8.6 mm \r\nDiameter : 14.20 mm \r\nWater Content : 42%\r\n'),
(132, 'AIR OPTIX', 'Color Series Power', 'Contact Lenses', '2022-03-17', '0000-00-00', 800, 500, 300, 'Supplier', 5, '1647512618_Air Optix Color Series Power .jpg', 'Air Optix Color Series Power (Grey, Brown, Pure Hazel, Honey) '),
(133, 'ALCON', 'Fresh Look Colorblends Series', 'Contact Lenses', '2022-03-17', '0000-00-00', 800, 500, 300, 'Supplier', 10, '1647513235_FreshLook COLORBLENDS Series .jpg', 'FreshLook COLORBLENDS Series (Grey, Brown, Pure Hazel,  Green)'),
(134, 'MAXI', 'Secret Garden Series', 'Contact Lenses', '2022-03-17', '0000-00-00', 800, 500, 300, 'Supplier', 10, '1647513327_Maxi Eyes Secret Garden Series .jpg', 'Maxi Eyes Secret Garden contact lens that enhance your  natural eye color that gives you subtle to vibrant look, perfect  from day-to-night. They are available in Swan Lake, Nymph  Fairy Blue, Pixie, Glacial, Stardust, & Caspian Rain. These  lenses are designed to be worn for one month or up to 30  times over a longer period for occasional wear, as long as they  are properly cleaned and handled. \r\nMaterial: HEMA Copolymer \r\nDK: 9.5 x 10-11 cm2 \r\nWater Content: 38% \r\nBase Curve: 8.6mm \r\nDiameter: 14.2 mm \r\nLens Color: Swan Lake, Nymph Fairy Blue, Pixie, Glacia l, Stardust, Caspian Rain \r\nUsage: Monthly Disposable Lens \r\nQuantity per Box: 2 Lenses/Box\r\n'),
(135, 'ALCON', 'Fresh Look One-Day', 'Contact Lenses', '2022-03-17', '0000-00-00', 800, 500, 300, 'Supplier', 10, '1647513435_FreshLook One-Day .jpg', 'FreshLook One-Day \r\nWearing Type : Daily Disposables \r\nPower Range : 0.00 to -6.00 in .25 D steps and -6.00 to -8.00  in .50 D steps \r\nBase Curve(s) : 8.6mm \r\nDiameter(s) : 13.8mm \r\nLens Material : Nelfilcon A\r\n');

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
(7, 'raymart', 'Login', '2022-03-15 07:26:14', 'Doctor'),
(8, 'Jona', 'Login', '2022-03-17 02:47:18', 'Doctor');

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
  MODIFY `pro_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=136;

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
  MODIFY `logs_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
