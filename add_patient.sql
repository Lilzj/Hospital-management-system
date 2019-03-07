-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 08, 2018 at 12:21 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `add_patient`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_patient`
--

CREATE TABLE IF NOT EXISTS `add_patient` (
`patient_id` int(10) NOT NULL,
  `first_name` varchar(20) DEFAULT NULL,
  `last_name` varchar(20) DEFAULT NULL,
  `age` int(3) DEFAULT NULL,
  `occupation` varchar(20) DEFAULT NULL,
  `gender` varchar(12) DEFAULT NULL,
  `address` varchar(150) DEFAULT NULL,
  `adm_date` date DEFAULT NULL,
  `adm_time` time(6) DEFAULT NULL,
  `marital_status` varchar(15) DEFAULT NULL,
  `phone_no` bigint(11) DEFAULT NULL,
  `symptoms` varchar(50) DEFAULT NULL,
  `diagnosis` varchar(100) DEFAULT NULL,
  `photo` varchar(150) NOT NULL,
  `mail` varchar(150) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_patient`
--

INSERT INTO `add_patient` (`patient_id`, `first_name`, `last_name`, `age`, `occupation`, `gender`, `address`, `adm_date`, `adm_time`, `marital_status`, `phone_no`, `symptoms`, `diagnosis`, `photo`, `mail`) VALUES
(1, 'Odion', 'Osahenmwinda', 19, 'student', 'male', '2, Osa str. Benin City, Edo state.', '2018-06-07', '11:45:00.000000', 'single', 8154271035, 'Vomitting and lost of apetite', 'high fever and typhod fever', '', 'joshuagbogodor@gmail.com'),
(3, 'Ifeanyi', 'Oruma', 20, 'student', 'male', 'GRA Nsukka', '2018-06-05', '09:45:00.000000', 'single', 12345678, 'headache and loss of apetite', 'hupertritis', 'IMG_20180109_130322-1.jpg', ''),
(6, 'Joshua', 'Gbogodor', 21, 'student', 'male', 'unn', '2018-06-05', '00:00:00.000000', 'single', 8012345678, 'headache', 'yellow fever', '', ''),
(7, 'Francis', 'Gbogodor', 34, 'student', 'male', 'clkbkjcbkv,', '2018-06-06', '00:00:00.000000', 'single', 8012345678, 'idgkifufdkgjs', 'oihlhogf', 'â€ª+234 815 427 1035â€¬ 20180104_082233.jpg', ''),
(8, 'Samuel', 'Ameh', 20, 'student', 'Male', 'Ogun state', '2018-06-01', '15:45:00.000000', 'single', 8035629541, 'vomitting and hottness of the body', '', 'IMG_20160928_125733.jpg', ''),
(9, 'Joshua', 'Gbogodor', 23, 'student', 'Male', 'enugu', '2018-07-02', '11:30:00.000000', 'single', 8012345678, 'headache and vomitting', '', 'â€ª+234 815 427 1035â€¬ 20180104_082233.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE IF NOT EXISTS `admin_login` (
  `admin_id` varchar(5) NOT NULL,
  `admin_pass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`admin_id`, `admin_pass`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE IF NOT EXISTS `appointment` (
`id` int(2) NOT NULL,
  `patient_name` varchar(20) DEFAULT NULL,
  `doctor_name` varchar(20) DEFAULT NULL,
  `app_date` date DEFAULT NULL,
  `app_time` time(6) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  `creation_date` date DEFAULT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `patient_name`, `doctor_name`, `app_date`, `app_time`, `description`, `creation_date`, `status`) VALUES
(8, '2', '1', '2018-06-07', '18:45:00.000000', 'treatment for cancer', '2018-06-07', '<b>APPROVED</b>'),
(9, '1', '1', '0000-00-00', '00:00:00.000000', 'Appointment for high fever treatment', '2018-06-07', '<b>APPROVED</b>'),
(10, '3', '1', '2018-06-16', '13:00:00.000000', 'Appointment for the treatment of stroke', '2018-06-07', '<b>DECLINE</b>'),
(11, '3', '4', '2018-06-12', '14:25:00.000000', 'appointment for cancer treatment', '2018-06-08', '<b>APPROVED</b>'),
(12, '2', '3', '2018-06-10', '09:30:00.000000', 'Appointment for treatment of cancer of the skin', '2018-06-08', '<b>APPROVED</b>'),
(13, '3', '3', '2018-06-14', '14:45:00.000000', 'Appointment for traetment of cancer', '2018-06-22', '<b>DECLINE</b>'),
(14, '1', '5', '2018-06-05', '14:30:00.000000', 'for cancer treatment', '2018-06-26', '<b>APPROVED</b>'),
(15, '8', '5', '2018-06-30', '13:30:00.000000', 'Appointment for malaria treatment', '2018-06-28', '<b>APPROVED</b>');

-- --------------------------------------------------------

--
-- Table structure for table `doctor_reg`
--

CREATE TABLE IF NOT EXISTS `doctor_reg` (
`doctor_id` int(11) NOT NULL,
  `first_name` varchar(20) DEFAULT NULL,
  `last_name` varchar(20) DEFAULT NULL,
  `age` int(3) DEFAULT NULL,
  `specialization` varchar(20) DEFAULT NULL,
  `gender` varchar(7) DEFAULT NULL,
  `address` varchar(30) DEFAULT NULL,
  `state` varchar(11) DEFAULT NULL,
  `city` varchar(11) DEFAULT NULL,
  `marital_status` varchar(10) DEFAULT NULL,
  `phone_no` bigint(11) DEFAULT NULL,
  `joining_date` date DEFAULT NULL,
  `username` varchar(10) DEFAULT NULL,
  `password` varchar(9) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `photo` varchar(150) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor_reg`
--

INSERT INTO `doctor_reg` (`doctor_id`, `first_name`, `last_name`, `age`, `specialization`, `gender`, `address`, `state`, `city`, `marital_status`, `phone_no`, `joining_date`, `username`, `password`, `email`, `photo`) VALUES
(1, 'Joshua', 'Gbogodor', 26, 'Optostretoscope', 'Male', '21, Akenbor str upper sokponba', 'Edo', 'Upper Sokpo', 'single', 7062164266, '2018-02-13', 'joshi', 'joshi', 'joshua@yahoo.com', ''),
(3, 'Francis', 'Chukwuemeka', 30, 'programmer', 'Male', 'plot 4 Abeokuta Ibadan Express', 'Ogun', 'Abeokuta', 'married', 12345678, '2018-01-04', 'belox', 'belox', 'joshua@yahoo.com', ''),
(4, 'Paul', 'Uwabo', 28, 'Brain specialist', 'Male', 'Nsukka, Enugu State', 'Enugu', 'Nsukka', 'single', 8012345678, '2016-11-10', 'paulo', 'uwa', 'joshua@yahoo.com', ''),
(5, 'Omo', 'Gbogodor', 32, 'Cancer', 'Male', 'Benin city', 'Edo', 'upper', 'single', 8012345678, '2018-06-12', 'omo', 'omo', 'joshua@yahoo.com', ''),
(6, 'victor', 'Iyang', 35, 'Optostretoscope', 'Male', 'Obimo Nsukka', 'Enugu', 'Nsukka', 'married', 12345678, '2018-06-03', 'vic', 'vic', 'joshua@gmail.com', '');

-- --------------------------------------------------------

--
-- Table structure for table `nurse_reg`
--

CREATE TABLE IF NOT EXISTS `nurse_reg` (
`nurse_id` int(5) NOT NULL,
  `first_name` varchar(20) DEFAULT NULL,
  `last_name` varchar(20) DEFAULT NULL,
  `age` int(3) DEFAULT NULL,
  `qualification` varchar(20) DEFAULT NULL,
  `gender` varchar(7) DEFAULT NULL,
  `address` varchar(30) DEFAULT NULL,
  `joining_date` date DEFAULT NULL,
  `state` varchar(10) DEFAULT NULL,
  `marital_status` varchar(10) DEFAULT NULL,
  `phone_no` bigint(11) DEFAULT NULL,
  `city` varchar(10) DEFAULT NULL,
  `username` varchar(10) DEFAULT NULL,
  `password` varchar(9) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `photo` varchar(150) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nurse_reg`
--

INSERT INTO `nurse_reg` (`nurse_id`, `first_name`, `last_name`, `age`, `qualification`, `gender`, `address`, `joining_date`, `state`, `marital_status`, `phone_no`, `city`, `username`, `password`, `email`, `photo`) VALUES
(1, 'Esther', 'Chukwuemeka', 21, 'SSCE', 'Female', '21 Zik-Avenue Enugu', '2018-05-20', 'Enugu', 'single', 8154271035, 'Enugu', 'esti', 'esti', 'esther@gmail.com', ''),
(2, 'Mirabel', 'Chimuanya', 19, 'SSCE', 'Male', 'Obimo, Nsukka', '2018-06-05', 'Enugu', 'single', 8012345678, 'Nsukka', 'mimi', 'mimi', 'joshuagbogodor@gmail.com', ''),
(3, 'MaryJane', 'Chukwu', 22, 'SSCE', 'Female', 'Ibagwa', '2018-06-01', 'Anambra', 'single', 8012345678, 'Awka', 'mary', 'mary', 'esther@gmail.com', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_patient`
--
ALTER TABLE `add_patient`
 ADD PRIMARY KEY (`patient_id`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `app_time` (`app_time`), ADD KEY `status` (`status`), ADD KEY `status_2` (`status`);

--
-- Indexes for table `doctor_reg`
--
ALTER TABLE `doctor_reg`
 ADD PRIMARY KEY (`doctor_id`), ADD KEY `gender` (`gender`);

--
-- Indexes for table `nurse_reg`
--
ALTER TABLE `nurse_reg`
 ADD PRIMARY KEY (`nurse_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_patient`
--
ALTER TABLE `add_patient`
MODIFY `patient_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
MODIFY `id` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `doctor_reg`
--
ALTER TABLE `doctor_reg`
MODIFY `doctor_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `nurse_reg`
--
ALTER TABLE `nurse_reg`
MODIFY `nurse_id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
