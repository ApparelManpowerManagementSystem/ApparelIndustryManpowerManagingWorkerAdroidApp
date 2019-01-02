-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 02, 2019 at 10:51 AM
-- Server version: 5.7.21
-- PHP Version: 7.2.4

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

DROP TABLE IF EXISTS `company`;
CREATE TABLE IF NOT EXISTS `company` (
  `comID` varchar(10) NOT NULL,
  `comName` varchar(45) DEFAULT NULL,
  `comPhone` varchar(45) DEFAULT NULL,
  `comAddress` varchar(200) DEFAULT NULL,
  `comEmail` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`comID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`comID`, `comName`, `comPhone`, `comAddress`, `comEmail`) VALUES
('C214748000', 'Pearson', '0712345432', 'colombo', 'per@gmail.com'),
('C214748360', 'Miami Garments', '07668972390', NULL, 'asithaindrajithk9@gmail.com'),
('C214748364', 'srinath', '07668972390', 'kandy', 'sri@gmail.com'),
('C766897236', 'Ocen Lanka', '0766897236', NULL, 'asithaindrajithk9@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `company_job`
--

DROP TABLE IF EXISTS `company_job`;
CREATE TABLE IF NOT EXISTS `company_job` (
  `jobID` int(11) NOT NULL AUTO_INCREMENT,
  `jobTitle` varchar(45) DEFAULT NULL,
  `jobType` varchar(45) DEFAULT NULL,
  `jobAmount` varchar(45) DEFAULT NULL,
  `jobPeriod` varchar(45) DEFAULT NULL,
  `jobPrice` varchar(45) DEFAULT NULL,
  `jobDate` varchar(45) DEFAULT NULL,
  `jobStatus` varchar(45) DEFAULT NULL,
  `comID` varchar(10) NOT NULL,
  `supID` varchar(45) NOT NULL,
  PRIMARY KEY (`jobID`),
  KEY `fk_company_job_company_personal_idx` (`comID`),
  KEY `fk_company_job_supplier_personal1_idx` (`supID`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `company_job`
--

INSERT INTO `company_job` (`jobID`, `jobTitle`, `jobType`, `jobAmount`, `jobPeriod`, `jobPrice`, `jobDate`, `jobStatus`, `comID`, `supID`) VALUES
(1, 'CPI Job', 'CPI', '202', '25', '25000', '2018-09-01', 'online', 'C214748364', 'S2147483647'),
(2, '1000 T-Shirts Cutting Job', 'cutting', '200', '9', '35000', '2018-09-04', 'offline', 'C214748000', 'S2147483647'),
(3, 'Ironing Job', 'Ironing', '200', '15', '35000', '2018-08-02', 'cancle', 'C214748364', 'S2147483647'),
(4, 'Mending Job', 'Mending', '500', '20', '30000', '2018-09-16', 'offline', 'C214748000', 'S2147483647'),
(5, 'CPI Job', 'CPI', '300', '30', '25000', '2018-09-01', 'online', 'C214748000', 'S2147483647'),
(7, 'CPI Job 2', 'CPI', '300', '3', '250000', '2018-09-01', 'online', 'C214748000', 'S2147483647'),
(8, '1000 T-Shirts Cutting Job two', 'cutting', '200', '9', '35000', '2018-09-04', 'offline', 'C214748000', 'S2147483647'),
(9, 'Ironing Job', 'Ironing', '20', '15', '35000', '2018-08-02', 'cancle', 'C214748000', 'S2147483647'),
(10, '1000 T-Shirts Cutting Job two', 'cutting', '200', '9', '3500', '2018-09-04', 'offline', 'C214748000', 'S2147483647'),
(11, 'Mending Job', 'Mending', '500', '20', '30000', '2018-09-16', 'offline', 'C214748000', 'S2147483647');

-- --------------------------------------------------------

--
-- Stand-in structure for view `graphview`
-- (See below for the actual view)
--
DROP VIEW IF EXISTS `graphview`;
CREATE TABLE IF NOT EXISTS `graphview` (
`jobType` varchar(45)
,`jobCount` bigint(21)
,`comName` varchar(45)
);

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

DROP TABLE IF EXISTS `invoice`;
CREATE TABLE IF NOT EXISTS `invoice` (
  `invoiceID` int(11) NOT NULL AUTO_INCREMENT,
  `jobID` int(11) DEFAULT NULL,
  `workerID` varchar(45) DEFAULT NULL,
  `price` varchar(100) DEFAULT '0',
  PRIMARY KEY (`invoiceID`),
  KEY `workerID` (`workerID`),
  KEY `jobID` (`jobID`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`invoiceID`, `jobID`, `workerID`, `price`) VALUES
(12, 180010, 'W12345', 'hddhso');

-- --------------------------------------------------------

--
-- Table structure for table `job_workers`
--

DROP TABLE IF EXISTS `job_workers`;
CREATE TABLE IF NOT EXISTS `job_workers` (
  `jobID` int(11) NOT NULL,
  `workerID` varchar(45) NOT NULL,
  `workerProgress` varchar(100) NOT NULL,
  PRIMARY KEY (`workerID`,`jobID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

DROP TABLE IF EXISTS `location`;
CREATE TABLE IF NOT EXISTS `location` (
  `locID` int(11) NOT NULL,
  `locName` varchar(45) DEFAULT NULL,
  `locStreet` varchar(45) DEFAULT NULL,
  `locVillage` varchar(45) DEFAULT NULL,
  `locCity` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`locID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`locID`, `locName`, `locStreet`, `locVillage`, `locCity`) VALUES
(2300, 'Ocen Lanka', 'Maya Aveneue', 'Hanvella Road', 'Ranala'),
(2301, 'Miami Garments', 'Railway Street', 'Old Road', 'Homagama'),
(2302, 'Mass Groups', 'No. 234', 'Highlevel Road', 'Maharagama'),
(2303, 'NSL Garments', 'No.123', 'Highlevel Road', 'Pannipitiya');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

DROP TABLE IF EXISTS `notification`;
CREATE TABLE IF NOT EXISTS `notification` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `notificationID` varchar(45) NOT NULL,
  `notification` varchar(200) DEFAULT NULL,
  `userType` int(10) DEFAULT NULL,
  `status` int(100) NOT NULL,
  `time` varchar(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;

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
(21, 'W123', ' left from the job', 1, 1, NULL),
(22, '', 'Miami published new Job', 2, 1, '0'),
(23, 'W1234', ' left from the job', 3, 1, '0');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

DROP TABLE IF EXISTS `supplier`;
CREATE TABLE IF NOT EXISTS `supplier` (
  `supID` varchar(45) NOT NULL,
  `supName` varchar(45) DEFAULT NULL,
  `supPhone` int(10) DEFAULT NULL,
  `supAddress` varchar(100) DEFAULT NULL,
  `supEmail` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`supID`)
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

DROP TABLE IF EXISTS `supplier_job`;
CREATE TABLE IF NOT EXISTS `supplier_job` (
  `jobID` int(11) NOT NULL AUTO_INCREMENT,
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
  `jobRatings` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`jobID`),
  KEY `supID` (`supID`),
  KEY `locationID` (`locationID`)
) ENGINE=InnoDB AUTO_INCREMENT=180034 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `supplier_job`
--

INSERT INTO `supplier_job` (`jobID`, `jobTitle`, `jobType`, `jobCount`, `workerCount`, `jobPeriod`, `jobStatus`, `jobStart`, `jobEnd`, `jobPublished`, `jobProgress`, `supID`, `locationID`, `comID`, `jobNature`, `workersJoined`, `jobRatings`) VALUES
(180000, 'CPI Job', 'CPI', 100, 15, '10', 'start', '2018-Sep-2', NULL, '2018-Aug-28', '78', 'S2147483647', 2300, 'C214748364', 'Full Time', 0, 0),
(180001, 'T-Shirts Cutting Job', 'Cutting', 1000, 0, '9', 'start', '2018-Sep-13', NULL, NULL, '35', 'S2147483647', 2300, 'C214748364', 'Full Time', 0, 0),
(180002, 'Ironin Job', 'Ironing', 400, 20, '20', 'pending', NULL, NULL, '2018-Sep-14', '0', 'S2147483647', 2300, 'C214748364', 'Full Time', 0, 0),
(180003, 'Mending Job', 'Mending', 500, 10, '16', 'online', NULL, NULL, '2018-sep-13', '0', 'S2147483647', 2300, 'C214748364', 'Full Time', 0, 0),
(180010, 'Cutting Job', 'Cutting', 400, 20, '20', 'done', '2018-Jul-1', '2018-jul-25', '2018-Jun-28', '100', 'S2147483647', 2302, 'C214748364', 'Full Time', 0, 0),
(180019, 'Ironing Job', 'Ironing', 200, 30, '', 'online', NULL, NULL, '', NULL, 'S2147483647', 2302, 'C214748364', 'Part Time', 0, 0),
(180023, 'Ironing Job', 'Ironing', 200, 20, '15', 'online', NULL, NULL, '18-09-15', NULL, 'S2147483647', 2302, 'C214748364', 'Full Time', 0, 0),
(180024, 'CPI Job', 'CPI', 202, 20, '11', 'offline', NULL, NULL, '18-09-15', NULL, 'S2147483647', 2302, 'C214748364', 'Full Time', 0, 0),
(180025, '1000 T-Shirts Cutting Job', 'Cutting', 200, 20, '9', 'online', NULL, NULL, '18-09-17', NULL, 'S2147483647', 2301, 'C214748364', 'Full Time', 0, 0),
(180026, 'Mending Job', 'Mending', 500, 20, '20', 'offline', NULL, NULL, '18-09-18', NULL, 'S2147483647', 2301, '', 'Full Time', 0, 0),
(180027, 'CPI Job', 'CPI', 400, 25, '20', 'offline', NULL, NULL, '18-09-22', NULL, 'S2147483647', 2301, 'W12345', 'Full Time', 0, 11),
(180028, 'CPI Job', 'CPI', 202, 25, '25', 'online', NULL, NULL, '18-09-22', NULL, 'S2147483647', 2302, 'C214748364', 'Full Time', 0, 0),
(180029, 'CPI Job', 'CPI', 202, 25, '25', 'pending', NULL, NULL, '18-09-22', NULL, 'S2147483647', 2301, 'C214748364', 'Full Time', 1, 12),
(180031, 'CPI Job', 'CPI', 202, 20, '25', 'online', NULL, NULL, '18-09-22', '10', 'S2147483647', 2301, 'C214748364', 'Full Time', -1, 12),
(180032, 'CPI Job', 'CPI', 202, 20, '25', 'pending', NULL, NULL, '18-09-22', NULL, 'S2147483647', 2301, 'C214748364', 'Full Time', 0, 11),
(180033, 'CPI Job', 'CPI', 202, 20, '25', 'pending', NULL, NULL, '18-09-22', NULL, 'S2147483647', 2301, 'C214748364', 'Full Time', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `uploadimages`
--

DROP TABLE IF EXISTS `uploadimages`;
CREATE TABLE IF NOT EXISTS `uploadimages` (
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

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `userID` varchar(20) NOT NULL,
  `userPassword` varchar(200) NOT NULL,
  `userType` int(10) NOT NULL,
  PRIMARY KEY (`userID`,`userPassword`)
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

DROP TABLE IF EXISTS `worker`;
CREATE TABLE IF NOT EXISTS `worker` (
  `workerID` varchar(45) NOT NULL,
  `workerName` varchar(45) DEFAULT NULL,
  `workerNIC` varchar(45) DEFAULT NULL,
  `workerPhone` varchar(45) DEFAULT NULL,
  `workerMaxWorkPeriod` varchar(45) DEFAULT NULL,
  `workerRank` int(10) DEFAULT '0',
  `workerEmail` varchar(45) DEFAULT NULL,
  `workerStatus` varchar(45) DEFAULT NULL,
  `workerImage` varchar(5000) DEFAULT NULL,
  PRIMARY KEY (`workerID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `worker`
--

INSERT INTO `worker` (`workerID`, `workerName`, `workerNIC`, `workerPhone`, `workerMaxWorkPeriod`, `workerRank`, `workerEmail`, `workerStatus`, `workerImage`) VALUES
('W12', 'Piyumal Rangajeewa', NULL, '12', NULL, 10, 'asithaindrajithk9@gmail.com', 'offline', ''),
('W123', 'Piyadasa Sirisena', NULL, '123', NULL, 8, 'asithaindrajithk9@gmail.com', 'offline', ''),
('W12345', 'Nimal Kariyawasam', '952611224V', '12345', NULL, 8, 'asithaindrajithk9@gmail.com', 'online', ''),
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

DROP TABLE IF EXISTS `worker_leaves`;
CREATE TABLE IF NOT EXISTS `worker_leaves` (
  `workerID` varchar(100) NOT NULL,
  `JobID` varchar(50) NOT NULL,
  `date` varchar(100) NOT NULL,
  `time` varchar(100) NOT NULL,
  KEY `workerID` (`workerID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `worker_pending`
--

DROP TABLE IF EXISTS `worker_pending`;
CREATE TABLE IF NOT EXISTS `worker_pending` (
  `jobID` int(11) NOT NULL,
  `workerID` varchar(45) NOT NULL,
  `isDone` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`jobID`,`workerID`),
  UNIQUE KEY `workerID` (`workerID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `worker_pending`
--

INSERT INTO `worker_pending` (`jobID`, `workerID`, `isDone`) VALUES
(180002, 'W772447479', 0),
(180002, 'W786578902', 0),
(180023, 'W12', 0),
(180023, 'W12345', 0),
(180028, 'W89897889', 0),
(180029, 'W123', 0);

-- --------------------------------------------------------

--
-- Structure for view `graphview`
--
DROP TABLE IF EXISTS `graphview`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `graphview`  AS  select `a`.`jobType` AS `jobType`,count(`a`.`jobType`) AS `jobCount`,`b`.`comName` AS `comName` from (`company_job` `a` join `company` `b`) where (`a`.`comID` = `b`.`comID`) group by `a`.`jobType`,`b`.`comName` ;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `invoice`
--
ALTER TABLE `invoice`
  ADD CONSTRAINT `invoice_ibfk_2` FOREIGN KEY (`workerID`) REFERENCES `worker` (`workerID`),
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

--
-- Constraints for table `worker_pending`
--
ALTER TABLE `worker_pending`
  ADD CONSTRAINT `worker_pending_ibfk_2` FOREIGN KEY (`workerID`) REFERENCES `worker` (`workerID`),
  ADD CONSTRAINT `worker_pending_ibfk_3` FOREIGN KEY (`jobID`) REFERENCES `supplier_job` (`jobID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
