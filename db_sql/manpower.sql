-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 06, 2019 at 07:14 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `manpower`
--

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `comID` varchar(10) NOT NULL,
  `comName` varchar(45) DEFAULT NULL,
  `comPhone` varchar(45) DEFAULT NULL,
  `comAddress` varchar(200) DEFAULT NULL,
  `comEmail` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`comID`, `comName`, `comPhone`, `comAddress`, `comEmail`) VALUES
('C214748000', 'Brandix', '0712345432', 'colombo', 'per@gmail.com'),
('C214748360', 'Miami Garments', '07668972390', NULL, 'asithaindrajithk9@gmail.com'),
('C214748364', 'Srinath', '07668972390', 'kandy', 'sri@gmail.com'),
('C766897236', 'Ocen Lanka', '0766897236', NULL, 'asithaindrajithk9@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `company_job`
--

CREATE TABLE `company_job` (
  `jobID` int(11) NOT NULL,
  `jobTitle` varchar(45) DEFAULT NULL,
  `jobType` varchar(45) DEFAULT NULL,
  `jobAmount` varchar(45) DEFAULT NULL,
  `jobPeriod` varchar(45) DEFAULT NULL,
  `jobPrice` int(45) DEFAULT NULL,
  `jobDate` varchar(45) DEFAULT NULL,
  `jobStatus` varchar(45) DEFAULT NULL,
  `comID` varchar(10) NOT NULL,
  `supID` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `company_job`
--

INSERT INTO `company_job` (`jobID`, `jobTitle`, `jobType`, `jobAmount`, `jobPeriod`, `jobPrice`, `jobDate`, `jobStatus`, `comID`, `supID`) VALUES
(1, 'CPI Job', 'CPI', '202', '25', 25000, '2018-09-01', 'online', 'C214748364', 'S2147483647'),
(2, '1000 T-Shirts Cutting Job', 'Cutting', '200', '9', 35000, '2018-09-04', 'offline', 'C214748000', 'S2147483647'),
(3, 'Ironing Job', 'Ironing', '200', '15', 35000, '2018-08-02', 'cancle', 'C214748364', 'S2147483647'),
(4, 'Mending Job', 'Mending', '500', '20', 30000, '2018-09-16', 'offline', 'C214748000', 'S2147483647'),
(5, 'CPI Job', 'CPI', '300', '30', 25000, '2018-09-01', 'online', 'C214748000', 'S2147483647'),
(7, 'CPI Job 2', 'CPI', '300', '3', 250000, '2018-09-01', 'online', 'C214748000', 'S2147483647'),
(8, '1000 T-Shirts Cutting Job two', 'Cutting', '200', '9', 120000, '2018-09-04', 'offline', 'C214748000', 'S2147483647'),
(9, 'Ironing Job', 'Ironing', '20', '15', 35000, '2018-08-02', 'cancle', 'C214748000', 'S2147483647'),
(10, '1000 T-Shirts Cutting Job two', 'Cutting', '200', '9', 3500, '2018-09-04', 'offline', 'C214748000', 'S2147483647'),
(11, 'Mending Job', 'Mending', '500', '20', 30000, '2018-09-16', 'rejected', 'C214748000', 'S2147483647'),
(12, '300 Shorts need Ironing', 'ironing', '300', '10', 12000, '2019-1-3', 'offline', 'C214748364', 'S2147483647');

-- --------------------------------------------------------

--
-- Stand-in structure for view `graphview`
-- (See below for the actual view)
--
CREATE TABLE `graphview` (
`jobType` varchar(45)
,`jobCount` bigint(21)
,`comName` varchar(45)
);

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `invoiceID` int(11) NOT NULL,
  `jobID` int(11) DEFAULT NULL,
  `userID` varchar(45) DEFAULT NULL,
  `price` varchar(100) DEFAULT '0',
  `isPaid` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`invoiceID`, `jobID`, `userID`, `price`, `isPaid`) VALUES
(12, 180033, 'W12345', '35000', 1),
(13, 180002, 'W786578902', '34000', 0);

-- --------------------------------------------------------

--
-- Table structure for table `job_workers`
--

CREATE TABLE `job_workers` (
  `jobID` int(11) NOT NULL,
  `workerID` varchar(45) NOT NULL,
  `workerProgress` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `locID` int(11) NOT NULL,
  `locName` varchar(45) DEFAULT NULL,
  `locStreet` varchar(45) DEFAULT NULL,
  `locVillage` varchar(45) DEFAULT NULL,
  `locCity` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`locID`, `locName`, `locStreet`, `locVillage`, `locCity`) VALUES
(2300, 'Ocen Lanka', 'Maya Aveneue', 'Hanvella Road', 'Ranala'),
(2301, 'Miami Garments', 'Railway Street', 'Old Road', 'Homagama'),
(2302, 'Mass Groups', 'No. 234', 'Highlevel Road', 'Maharagama'),
(2303, 'NSL Garments', 'No.123', 'Highlevel Road', 'Pannipitiya'),
(2304, 'Brandix', 'No.243/5', 'Pamunuwa', 'Maharagama'),
(2305, 'Haidramani', 'No.345/2', 'Kuliyapitiya', 'Waduraba');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `id` int(100) NOT NULL,
  `notificationID` varchar(45) NOT NULL,
  `notification` varchar(200) DEFAULT NULL,
  `userType` int(10) DEFAULT NULL,
  `status` int(100) NOT NULL,
  `time` varchar(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`id`, `notificationID`, `notification`, `userType`, `status`, `time`) VALUES
(1, 'W12345', 'You are left from the job', 3, 1, NULL),
(2, 'W12345', 'You are left from the job', 3, 1, NULL),
(3, 'W12345', 'You are left from the job', 3, 1, NULL),
(4, 'W12345', 'You are left from the job', 3, 1, NULL),
(5, 'W12345', 'You are left from the job', 3, 1, NULL),
(6, '', 'Worker leaft', 2, 1, NULL),
(7, '', 'Ocean lanka published new jobs', 2, 1, NULL),
(8, '', 'Miami company published new jobs', 2, 1, NULL),
(9, '', 'Ocean lanka published new jobs', 2, 1, NULL),
(10, '', 'Brandix published new jobs', 2, 1, NULL),
(11, '', 'Namal bandara worker left from the job', 2, 1, '2018'),
(14, 'W12345', ' left from the job', 3, 1, NULL),
(15, 'W89897889', ' left from the job', 3, 1, NULL),
(16, 'W89897889', ' left from the job', 3, 1, NULL),
(17, 'W89897889', ' left from the job', 3, 1, NULL),
(18, 'W89897889', ' left from the job', 3, 1, NULL),
(19, 'W123', ' left from the job', 3, 1, NULL),
(20, 'W123', ' left from the job', 3, 1, NULL),
(21, 'W123', 'A & S completed job on 2018-12-9', 1, 1, NULL),
(22, '', 'Miami published new Job', 2, 1, '0'),
(23, 'W1234', ' left from the job', 3, 1, '0'),
(24, 'W12345', ' left from the job', 3, 1, '0'),
(25, 'W12345', ' left from the job', 3, 1, '0'),
(26, 'W12345', ' left from the job', 3, 1, '0'),
(27, 'W12345', ' left from the job', 3, 1, '0'),
(28, 'W12345', ' left from the job', 3, 1, '0'),
(29, 'W12345', ' left from the job', 3, 1, '0'),
(30, 'W12345', ' left from the job', 3, 1, '0'),
(31, '', ' left from the job', 3, 1, '0'),
(32, 'W12345', 'W12345 leaved from the job', 2, 1, '0'),
(33, 'W12345', 'W12345 leaved from the job', 2, 1, '0'),
(34, 'W12345', 'W12345 leaved from the job', 2, 1, 'Jan,05,2019'),
(35, '$notificationID', '$notification', 0, 1, '$time'),
(36, 'W12345', 'W12345 leaved from the job', 2, 1, 'Jan,05,2019'),
(37, 'W123', ' left from the job', 3, 1, 'Jan,06,2019'),
(38, 'W123', ' left from the job', 3, 1, 'Jan,06,2019'),
(39, 'W123', ' left from the job', 3, 1, 'Jan,06,2019');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `supID` varchar(45) NOT NULL,
  `supName` varchar(45) DEFAULT NULL,
  `supPhone` int(10) DEFAULT NULL,
  `supAddress` varchar(100) DEFAULT NULL,
  `supEmail` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`supID`, `supName`, `supPhone`, `supAddress`, `supEmail`) VALUES
('S2147483647', 'Suminda', 2147483647, NULL, 'asithaindrajithk9@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `supplier_job`
--

CREATE TABLE `supplier_job` (
  `jobID` int(11) NOT NULL,
  `jobTitle` varchar(45) DEFAULT NULL,
  `jobType` varchar(45) DEFAULT NULL,
  `jobCount` int(11) DEFAULT NULL,
  `workerCount` int(11) NOT NULL,
  `jobPeriod` varchar(45) DEFAULT NULL,
  `jobStatus` varchar(45) DEFAULT 'offline',
  `jobStart` varchar(45) DEFAULT NULL,
  `jobEnd` varchar(45) DEFAULT NULL,
  `jobPublished` varchar(100) DEFAULT NULL,
  `jobProgress` varchar(45) DEFAULT NULL,
  `supID` varchar(45) NOT NULL,
  `locationID` int(11) NOT NULL,
  `comID` varchar(100) DEFAULT NULL,
  `jobNature` varchar(10) NOT NULL DEFAULT 'Full Time',
  `workersJoined` int(10) NOT NULL DEFAULT '0',
  `jobRatings` int(10) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `supplier_job`
--

INSERT INTO `supplier_job` (`jobID`, `jobTitle`, `jobType`, `jobCount`, `workerCount`, `jobPeriod`, `jobStatus`, `jobStart`, `jobEnd`, `jobPublished`, `jobProgress`, `supID`, `locationID`, `comID`, `jobNature`, `workersJoined`, `jobRatings`) VALUES
(180000, 'CPI Job', 'CPI', 100, 15, '10', 'start', '2018-Sep-2', NULL, '2018-Aug-28', '78', 'S2147483647', 2300, 'C214748364', 'Full Time', 0, 0),
(180001, 'T-Shirts Cutting Job', 'Cutting', 1000, 0, '9', 'start', '2018-Sep-13', NULL, NULL, '35', 'S2147483647', 2300, 'C214748364', 'Full Time', 0, 0),
(180002, 'Ironin Job', 'Ironing', 400, 20, '20', 'done', NULL, NULL, '2018-Sep-14', '0', 'S2147483647', 2300, 'C214748364', 'Full Time', 18, 0),
(180003, 'Mending Job', 'Mending', 500, 10, '16', 'online', NULL, NULL, '2018-sep-13', '0', 'S2147483647', 2300, 'C214748364', 'Full Time', 0, 0),
(180010, 'Cutting Job', 'Cutting', 400, 20, '20', 'done', '2018-Jul-1', '2018-jul-25', '2018-Jun-28', '100', 'S2147483647', 2302, 'C214748364', 'Full Time', 0, 0),
(180019, 'Ironing Job', 'Ironing', 200, 30, '', 'online', NULL, NULL, '', NULL, 'S2147483647', 2302, 'C214748364', 'Part Time', 0, 0),
(180023, 'Ironing Job', 'Ironing', 200, 20, '15', 'online', NULL, NULL, '18-09-15', NULL, 'S2147483647', 2302, 'C214748364', 'Full Time', 0, 0),
(180024, 'CPI Job', 'CPI', 202, 20, '11', 'offline', NULL, NULL, '18-09-15', NULL, 'S2147483647', 2302, 'C214748364', 'Full Time', 0, 0),
(180025, '1000 T-Shirts Cutting Job', 'Cutting', 200, 20, '9', 'online', NULL, NULL, '18-09-17', NULL, 'S2147483647', 2301, 'C214748364', 'Full Time', 0, 0),
(180026, 'Mending Job', 'Mending', 500, 20, '20', 'offline', NULL, NULL, '18-09-18', NULL, 'S2147483647', 2301, '', 'Full Time', 0, 0),
(180027, 'CPI Job', 'CPI', 400, 25, '20', 'offline', NULL, NULL, '18-09-22', NULL, 'S2147483647', 2301, 'W12345', 'Full Time', 1, 11),
(180028, 'CPI Job', 'CPI', 202, 25, '25', 'offline', NULL, NULL, '18-09-22', NULL, 'S2147483647', 2302, 'C214748364', 'Full Time', 0, 0),
(180029, 'CPI Job', 'CPI', 202, 25, '25', 'offline', NULL, NULL, '18-09-22', NULL, 'S2147483647', 2301, 'C214748364', 'Full Time', -1, 12),
(180031, 'CPI Job', 'CPI', 202, 20, '25', 'pending', NULL, NULL, '18-09-22', '10', 'S2147483647', 2301, 'C214748364', 'Full Time', -1, 12),
(180032, 'CPI Job', 'CPI', 232, 20, '25', 'online', NULL, NULL, '18-09-22', NULL, 'S2147483647', 2301, 'C214748364', 'Full Time', 1, 11),
(180033, 'CPI Job', 'CPI', 212, 20, '25', 'done', NULL, NULL, '18-09-22', '100', 'S2147483647', 2301, 'C214748364', 'Full Time', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `uploadimages`
--

CREATE TABLE `uploadimages` (
  `image` blob
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `uploadimages`
--

INSERT INTO `uploadimages` (`image`) VALUES
(0x75706c6f6164732f33353339313537395f3433353937313638333439363738345f333637373238363537343332353736305f6f2e6a7067),
(0x2e2e2f417373657374732f776f726b65722f33353431373734385f3433353937303437333439363930355f323430343436343430393034313639383831365f6f2e6a7067),
(0x2e2e2f417373657374732f776f726b65722f33353339313537395f3433353937313638333439363738345f333637373238363537343332353736305f6f2e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` varchar(20) NOT NULL,
  `userPassword` varchar(200) NOT NULL,
  `userType` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `userPassword`, `userType`) VALUES
('C214748364', 'd404559f602eab6fd602ac7680dacbfaadd13630335e951f097af3900e9de176b6db28512f2e000b9d04fba5133e8b1c6e8df59db3a8ab9d60be4b97cc9e81db', 1),
('C766897234', 'd404559f602eab6fd602ac7680dacbfaadd13630335e951f097af3900e9de176b6db28512f2e000b9d04fba5133e8b1c6e8df59db3a8ab9d60be4b97cc9e81db', 1),
('C766897236', 'd404559f602eab6fd602ac7680dacbfaadd13630335e951f097af3900e9de176b6db28512f2e000b9d04fba5133e8b1c6e8df59db3a8ab9d60be4b97cc9e81db', 1),
('S2147483647', 'd404559f602eab6fd602ac7680dacbfaadd13630335e951f097af3900e9de176b6db28512f2e000b9d04fba5133e8b1c6e8df59db3a8ab9d60be4b97cc9e81db', 2),
('W0', 'd404559f602eab6fd602ac7680dacbfaadd13630335e951f097af3900e9de176b6db28512f2e000b9d04fba5133e8b1c6e8df59db3a8ab9d60be4b97cc9e81db', 3),
('W12', 'd404559f602eab6fd602ac7680dacbfaadd13630335e951f097af3900e9de176b6db28512f2e000b9d04fba5133e8b1c6e8df59db3a8ab9d60be4b97cc9e81db', 3),
('W123', 'd404559f602eab6fd602ac7680dacbfaadd13630335e951f097af3900e9de176b6db28512f2e000b9d04fba5133e8b1c6e8df59db3a8ab9d60be4b97cc9e81db', 3),
('W1234', 'd404559f602eab6fd602ac7680dacbfaadd13630335e951f097af3900e9de176b6db28512f2e000b9d04fba5133e8b1c6e8df59db3a8ab9d60be4b97cc9e81db', 3),
('W12345', 'd404559f602eab6fd602ac7680dacbfaadd13630335e951f097af3900e9de176b6db28512f2e000b9d04fba5133e8b1c6e8df59db3a8ab9d60be4b97cc9e81db', 3),
('W1234567', 'd404559f602eab6fd602ac7680dacbfaadd13630335e951f097af3900e9de176b6db28512f2e000b9d04fba5133e8b1c6e8df59db3a8ab9d60be4b97cc9e81db', 3),
('W1234567890', 'd404559f602eab6fd602ac7680dacbfaadd13630335e951f097af3900e9de176b6db28512f2e000b9d04fba5133e8b1c6e8df59db3a8ab9d60be4b97cc9e81db', 3),
('W192', 'd404559f602eab6fd602ac7680dacbfaadd13630335e951f097af3900e9de176b6db28512f2e000b9d04fba5133e8b1c6e8df59db3a8ab9d60be4b97cc9e81db', 3),
('W20384039', 'd404559f602eab6fd602ac7680dacbfaadd13630335e951f097af3900e9de176b6db28512f2e000b9d04fba5133e8b1c6e8df59db3a8ab9d60be4b97cc9e81db', 3),
('W2147483647', 'd404559f602eab6fd602ac7680dacbfaadd13630335e951f097af3900e9de176b6db28512f2e000b9d04fba5133e8b1c6e8df59db3a8ab9d60be4b97cc9e81db', 3),
('W2980921', 'd404559f602eab6fd602ac7680dacbfaadd13630335e951f097af3900e9de176b6db28512f2e000b9d04fba5133e8b1c6e8df59db3a8ab9d60be4b97cc9e81db', 3),
('W343456', 'd404559f602eab6fd602ac7680dacbfaadd13630335e951f097af3900e9de176b6db28512f2e000b9d04fba5133e8b1c6e8df59db3a8ab9d60be4b97cc9e81db', 3),
('W3849038', 'd404559f602eab6fd602ac7680dacbfaadd13630335e951f097af3900e9de176b6db28512f2e000b9d04fba5133e8b1c6e8df59db3a8ab9d60be4b97cc9e81db', 3),
('W3904809', 'd404559f602eab6fd602ac7680dacbfaadd13630335e951f097af3900e9de176b6db28512f2e000b9d04fba5133e8b1c6e8df59db3a8ab9d60be4b97cc9e81db', 3),
('W39274', 'd404559f602eab6fd602ac7680dacbfaadd13630335e951f097af3900e9de176b6db28512f2e000b9d04fba5133e8b1c6e8df59db3a8ab9d60be4b97cc9e81db', 3),
('W3986434', 'd404559f602eab6fd602ac7680dacbfaadd13630335e951f097af3900e9de176b6db28512f2e000b9d04fba5133e8b1c6e8df59db3a8ab9d60be4b97cc9e81db', 3),
('W454567', 'd404559f602eab6fd602ac7680dacbfaadd13630335e951f097af3900e9de176b6db28512f2e000b9d04fba5133e8b1c6e8df59db3a8ab9d60be4b97cc9e81db', 3),
('W643298', 'd404559f602eab6fd602ac7680dacbfaadd13630335e951f097af3900e9de176b6db28512f2e000b9d04fba5133e8b1c6e8df59db3a8ab9d60be4b97cc9e81db', 3),
('W676789', 'd404559f602eab6fd602ac7680dacbfaadd13630335e951f097af3900e9de176b6db28512f2e000b9d04fba5133e8b1c6e8df59db3a8ab9d60be4b97cc9e81db', 3),
('W721927172', 'd404559f602eab6fd602ac7680dacbfaadd13630335e951f097af3900e9de176b6db28512f2e000b9d04fba5133e8b1c6e8df59db3a8ab9d60be4b97cc9e81db', 3),
('W766897136', 'd404559f602eab6fd602ac7680dacbfaadd13630335e951f097af3900e9de176b6db28512f2e000b9d04fba5133e8b1c6e8df59db3a8ab9d60be4b97cc9e81db', 3),
('W766897230', 'd404559f602eab6fd602ac7680dacbfaadd13630335e951f097af3900e9de176b6db28512f2e000b9d04fba5133e8b1c6e8df59db3a8ab9d60be4b97cc9e81db', 3),
('W767899009', 'd404559f602eab6fd602ac7680dacbfaadd13630335e951f097af3900e9de176b6db28512f2e000b9d04fba5133e8b1c6e8df59db3a8ab9d60be4b97cc9e81db', 3),
('W772447123', 'd404559f602eab6fd602ac7680dacbfaadd13630335e951f097af3900e9de176b6db28512f2e000b9d04fba5133e8b1c6e8df59db3a8ab9d60be4b97cc9e81db', 3),
('W772447479', 'd404559f602eab6fd602ac7680dacbfaadd13630335e951f097af3900e9de176b6db28512f2e000b9d04fba5133e8b1c6e8df59db3a8ab9d60be4b97cc9e81db', 3),
('W772447600', 'd404559f602eab6fd602ac7680dacbfaadd13630335e951f097af3900e9de176b6db28512f2e000b9d04fba5133e8b1c6e8df59db3a8ab9d60be4b97cc9e81db', 3),
('W772447656', 'd404559f602eab6fd602ac7680dacbfaadd13630335e951f097af3900e9de176b6db28512f2e000b9d04fba5133e8b1c6e8df59db3a8ab9d60be4b97cc9e81db', 3),
('W772447666', 'd404559f602eab6fd602ac7680dacbfaadd13630335e951f097af3900e9de176b6db28512f2e000b9d04fba5133e8b1c6e8df59db3a8ab9d60be4b97cc9e81db', 3),
('W772447689', 'd404559f602eab6fd602ac7680dacbfaadd13630335e951f097af3900e9de176b6db28512f2e000b9d04fba5133e8b1c6e8df59db3a8ab9d60be4b97cc9e81db', 3),
('W772447697', 'd404559f602eab6fd602ac7680dacbfaadd13630335e951f097af3900e9de176b6db28512f2e000b9d04fba5133e8b1c6e8df59db3a8ab9d60be4b97cc9e81db', 3),
('W772447699', 'd404559f602eab6fd602ac7680dacbfaadd13630335e951f097af3900e9de176b6db28512f2e000b9d04fba5133e8b1c6e8df59db3a8ab9d60be4b97cc9e81db', 3),
('W772447875', 'd404559f602eab6fd602ac7680dacbfaadd13630335e951f097af3900e9de176b6db28512f2e000b9d04fba5133e8b1c6e8df59db3a8ab9d60be4b97cc9e81db', 3),
('W786578902', 'd404559f602eab6fd602ac7680dacbfaadd13630335e951f097af3900e9de176b6db28512f2e000b9d04fba5133e8b1c6e8df59db3a8ab9d60be4b97cc9e81db', 3),
('W89897889', 'd404559f602eab6fd602ac7680dacbfaadd13630335e951f097af3900e9de176b6db28512f2e000b9d04fba5133e8b1c6e8df59db3a8ab9d60be4b97cc9e81db', 3),
('W9387493', 'd404559f602eab6fd602ac7680dacbfaadd13630335e951f097af3900e9de176b6db28512f2e000b9d04fba5133e8b1c6e8df59db3a8ab9d60be4b97cc9e81db', 3),
('W987654', 'd404559f602eab6fd602ac7680dacbfaadd13630335e951f097af3900e9de176b6db28512f2e000b9d04fba5133e8b1c6e8df59db3a8ab9d60be4b97cc9e81db', 3);

-- --------------------------------------------------------

--
-- Table structure for table `worker`
--

CREATE TABLE `worker` (
  `workerID` varchar(45) NOT NULL,
  `workerName` varchar(45) DEFAULT NULL,
  `workerNIC` varchar(45) DEFAULT NULL,
  `workerPhone` varchar(45) DEFAULT NULL,
  `workerMaxWorkPeriod` varchar(45) DEFAULT NULL,
  `workerRank` int(10) DEFAULT '0',
  `workerEmail` varchar(45) DEFAULT NULL,
  `workerStatus` varchar(45) DEFAULT NULL,
  `workerImage` varchar(5000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `worker`
--

INSERT INTO `worker` (`workerID`, `workerName`, `workerNIC`, `workerPhone`, `workerMaxWorkPeriod`, `workerRank`, `workerEmail`, `workerStatus`, `workerImage`) VALUES
('W12', 'Piyumal Rangajeewa', NULL, '12', NULL, 10, 'asithaindrajithk9@gmail.com', 'offline', ''),
('W123', 'Piyadasa Sirisena', NULL, '123', NULL, 8, 'asithaindrajithk9@gmail.com', 'online', ''),
('W12345', 'Nimal Kariyawasam', '952611224V', '12345', NULL, 8, 'asithaindrajithk9@gmail.com', 'offline', ''),
('W2147483647', 'Srinath Sekara', NULL, '07668972390', NULL, 2, 'asithaindrajithk9@gmail.com', 'offline', ''),
('W3986434', 'Piyal Bandara', NULL, '3986434', NULL, 0, 'asithaindrajithk9@gmail.com', 'offline', ''),
('W772447123', 'Nivedan Kanakaraja', NULL, '0772447123', NULL, 0, 'asithaindrajithk9@gmail.com', 'offline', ''),
('W772447479', 'Devis Imesha', NULL, '0772447479', NULL, 5, 'asithaindrajithk9@gmail.com', 'offline', ''),
('W772447875', 'Kumaraswami banadara', NULL, '0772447875', NULL, 6, 'asithaindrajithk9@gmail.com', 'offline', ''),
('W786578902', 'Pisiri Mangala', NULL, '0786578902', NULL, 7, 'kentsteinwall@gmail.com', NULL, '../Assests/worker/35417748_435970473496905_2404464409041698816_o.jpg'),
('W89897889', 'Diyon Malaka', '967856112V', '89897889', NULL, 0, 'asithaindrajithk9@gmail.com', 'offline', ''),
('W987654', 'Piyumal Botheju', NULL, '0987654', NULL, 0, 'asithaindrajithk9@gmail.com', 'offline', '');

-- --------------------------------------------------------

--
-- Table structure for table `worker_leaves`
--

CREATE TABLE `worker_leaves` (
  `id` int(11) NOT NULL,
  `workerID` varchar(100) NOT NULL,
  `JobID` varchar(50) NOT NULL,
  `date` varchar(100) NOT NULL,
  `time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `worker_leaves`
--

INSERT INTO `worker_leaves` (`id`, `workerID`, `JobID`, `date`, `time`) VALUES
(1, 'W12345', '180032', '2019-01-05', '08:34 pm'),
(2, 'W12345', '180032', '2019-01-05', '08:41 pm'),
(3, 'W12345', '180032', '2019-01-05', '08:42 pm'),
(4, 'W12345', '180032', '2019-01-05', '08:44 pm');

-- --------------------------------------------------------

--
-- Table structure for table `worker_pending`
--

CREATE TABLE `worker_pending` (
  `id` int(11) NOT NULL,
  `jobID` int(11) NOT NULL,
  `workerID` varchar(45) NOT NULL,
  `isDone` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `worker_pending`
--

INSERT INTO `worker_pending` (`id`, `jobID`, `workerID`, `isDone`) VALUES
(1, 180002, 'W772447479', 0),
(2, 180002, 'W786578902', 0),
(3, 180023, 'W12', 0),
(4, 180028, 'W89897889', 0),
(5, 180033, 'W12345', 1),
(6, 180032, 'W12345', 0);

-- --------------------------------------------------------

--
-- Structure for view `graphview`
--
DROP TABLE IF EXISTS `graphview`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `graphview`  AS  select `a`.`jobType` AS `jobType`,count(`a`.`jobType`) AS `jobCount`,`b`.`comName` AS `comName` from (`company_job` `a` join `company` `b`) where (`a`.`comID` = `b`.`comID`) group by `a`.`jobType`,`b`.`comName` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`comID`);

--
-- Indexes for table `company_job`
--
ALTER TABLE `company_job`
  ADD PRIMARY KEY (`jobID`),
  ADD KEY `fk_company_job_company_personal_idx` (`comID`),
  ADD KEY `fk_company_job_supplier_personal1_idx` (`supID`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`invoiceID`),
  ADD KEY `workerID` (`userID`),
  ADD KEY `jobID` (`jobID`);

--
-- Indexes for table `job_workers`
--
ALTER TABLE `job_workers`
  ADD PRIMARY KEY (`workerID`,`jobID`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`locID`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`supID`);

--
-- Indexes for table `supplier_job`
--
ALTER TABLE `supplier_job`
  ADD PRIMARY KEY (`jobID`),
  ADD KEY `supID` (`supID`),
  ADD KEY `locationID` (`locationID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`,`userPassword`);

--
-- Indexes for table `worker`
--
ALTER TABLE `worker`
  ADD PRIMARY KEY (`workerID`);

--
-- Indexes for table `worker_leaves`
--
ALTER TABLE `worker_leaves`
  ADD PRIMARY KEY (`id`),
  ADD KEY `workerID` (`workerID`);

--
-- Indexes for table `worker_pending`
--
ALTER TABLE `worker_pending`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `company_job`
--
ALTER TABLE `company_job`
  MODIFY `jobID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `invoiceID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `supplier_job`
--
ALTER TABLE `supplier_job`
  MODIFY `jobID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=180034;
--
-- AUTO_INCREMENT for table `worker_leaves`
--
ALTER TABLE `worker_leaves`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `worker_pending`
--
ALTER TABLE `worker_pending`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `invoice`
--
ALTER TABLE `invoice`
  ADD CONSTRAINT `invoice_ibfk_2` FOREIGN KEY (`userID`) REFERENCES `worker` (`workerID`),
  ADD CONSTRAINT `invoice_ibfk_3` FOREIGN KEY (`jobID`) REFERENCES `supplier_job` (`jobID`);

--
-- Constraints for table `supplier_job`
--
ALTER TABLE `supplier_job`
  ADD CONSTRAINT `supplier_job_ibfk_1` FOREIGN KEY (`supID`) REFERENCES `supplier` (`supID`),
  ADD CONSTRAINT `supplier_job_ibfk_2` FOREIGN KEY (`locationID`) REFERENCES `location` (`locID`);

--
-- Constraints for table `worker_leaves`
--
ALTER TABLE `worker_leaves`
  ADD CONSTRAINT `worker_leaves_ibfk_1` FOREIGN KEY (`workerID`) REFERENCES `worker` (`workerID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
