-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2018 at 11:53 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sims`
--

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `city_id` int(11) NOT NULL,
  `city_name` varchar(100) NOT NULL,
  `city_state` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `coursecategory`
--

CREATE TABLE `coursecategory` (
  `id` int(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coursecategory`
--

INSERT INTO `coursecategory` (`id`, `name`, `description`) VALUES
(7, 'k.rajesh', 'jyhnkkuuun');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `eid` int(20) NOT NULL,
  `name` varchar(120) NOT NULL,
  `fathername` varchar(100) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `age` varchar(10) NOT NULL,
  `qualification` varchar(150) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `doj` varchar(20) NOT NULL,
  `contactno` varchar(15) NOT NULL,
  `address` varchar(600) NOT NULL,
  `emailid` varchar(50) NOT NULL,
  `icedetail` varchar(100) NOT NULL,
  `etype` varchar(50) NOT NULL,
  `branchid` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `enquiries`
--

CREATE TABLE `enquiries` (
  `enquiryid` int(20) NOT NULL,
  `firstname` varchar(120) NOT NULL,
  `lastname` varchar(10) NOT NULL,
  `fathername` varchar(100) NOT NULL,
  `student` varchar(20) NOT NULL,
  `contactdetails` varchar(200) NOT NULL,
  `college` varchar(150) NOT NULL,
  `qualification` varchar(10) NOT NULL,
  `courseinterested` varchar(100) NOT NULL,
  `doj` varchar(50) NOT NULL,
  `courseids` varchar(100) NOT NULL,
  `attendedby` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `branchid` varchar(100) NOT NULL,
  `remarks` varchar(250) NOT NULL,
  `addressline1` varchar(50) NOT NULL,
  `addressline2` varchar(50) NOT NULL,
  `alternateno` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `mandal` varchar(20) NOT NULL,
  `district` varchar(25) NOT NULL,
  `pincode` int(20) NOT NULL,
  `state` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enquiries`
--

INSERT INTO `enquiries` (`enquiryid`, `firstname`, `lastname`, `fathername`, `student`, `contactdetails`, `college`, `qualification`, `courseinterested`, `doj`, `courseids`, `attendedby`, `type`, `branchid`, `remarks`, `addressline1`, `addressline2`, `alternateno`, `email`, `mandal`, `district`, `pincode`, `state`) VALUES
(1, 'RAJESH', 'KORABOINA', 'RAJESH', '1', '8686962607', 'gudibandal', 'ssc', '', '', '', 'admin', '', '0123', '50', '3-6-86/2,', ' gudibandal', '', 'rajesh.koraboina@gmail.com', 'WARANGAL', 'WARANGAL', 506001, 'Andhra Pradesh'),
(2, 'RAJESH', 'KORABOINA', 'RAJESH', '1', '8686962607', 'gudibandal', 'ssc', '', '', '', 'admin', '', '0123', '50', '3-6-86/2,', ' gudibandal', '08686962607', 'rajesh.koraboina@gmail.com', 'WARANGAL', 'WARANGAL', 506001, 'Andhra Pradesh'),
(3, 'koraboina', 'raja', 'kannaya', '1', '8686962607', 'ganapathi', 'btech', '', '', '', 'cashier', '', '123456', '60', '3-6-86/2,', 'gudi', '9949025119', 'rajesh.koraboina19@gmail.com', 'hnk', 'WARANGAL', 506001, 'TELANGANA'),
(4, 'rakesh', 'koushal', 'srinivas', '1', '8989582582', 'kits', 'btech', '', '2018-07-02', '', 'rajesh', '', '1505', '35', '3-6-86', ' gudibandal', '84282335886', 'rakesh@gmail.com', 'WARANGAL', 'WARANGAL', 506001, 'TELANGANA'),
(10, 'rakesh', 'koushal', 'srinivas', '1', '8989582582', 'kits', 'btech', '', '2018-07-02', '', 'rajesh', '', '1505', '35', '3-6-86', ' gudibandal', '84282335886', 'rakesh@gmail.com', 'WARANGAL', 'WARANGAL', 506001, 'TELANGANA');

-- --------------------------------------------------------

--
-- Table structure for table `m_branch`
--

CREATE TABLE `m_branch` (
  `bid` int(100) NOT NULL,
  `branchname` varchar(250) NOT NULL,
  `address` varchar(600) NOT NULL,
  `phoneno` varchar(15) NOT NULL,
  `adminname` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_branch`
--

INSERT INTO `m_branch` (`bid`, `branchname`, `address`, `phoneno`, `adminname`, `email`) VALUES
(1, 'wecdc ', '3-6-86/2', '8686962607', 'de cdev ', 'rajesh.koraboina@gmail.com'),
(2, 'SUBEDARI', '2-5-746 Opp Arts & Science College \r\nSubedari\r\nHanamkonda', '9989443422', 'RAJU NIMMALA', 'rajnimmala@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `m_courses`
--

CREATE TABLE `m_courses` (
  `cid` int(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `branchid` varchar(20) NOT NULL,
  `category` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `description` varchar(400) NOT NULL,
  `syllabus` varchar(600) NOT NULL,
  `duration` varchar(30) NOT NULL,
  `fee` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_courses`
--

INSERT INTO `m_courses` (`cid`, `name`, `branchid`, `category`, `type`, `description`, `syllabus`, `duration`, `fee`) VALUES
(1, 'k.rajesh', '1243566563', ' c vb', 'dv', 'zdvfdv ', 'v a vf afs ', 'f f f', 750);

-- --------------------------------------------------------

--
-- Table structure for table `m_roles`
--

CREATE TABLE `m_roles` (
  `rid` int(100) NOT NULL,
  `role` varchar(250) NOT NULL,
  `description` varchar(600) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `onlineenquiries`
--

CREATE TABLE `onlineenquiries` (
  `enquiryid` int(10) NOT NULL,
  `name` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `phone` varchar(60) NOT NULL,
  `student` varchar(1) NOT NULL,
  `subscribed` int(10) NOT NULL,
  `remarks` varchar(120) NOT NULL,
  `courseinterested` varchar(50) NOT NULL,
  `branchname` varchar(50) NOT NULL,
  `attendedby` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `onlineenquiries`
--

INSERT INTO `onlineenquiries` (`enquiryid`, `name`, `email`, `phone`, `student`, `subscribed`, `remarks`, `courseinterested`, `branchname`, `attendedby`) VALUES
(1, 'RAJESH KORABOINA', 'rajesh.koraboina@gmail.com', '08686962607', '1', 0, '508', 'DATABASES ORACLE', 'B1', 'Employee'),
(2, 'RAJESH KORABOINA', 'rajesh.koraboina@gmail.com', '08686962607', '1', 0, '508', 'DATABASES ORACLE', 'B1', 'Employee');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `StateID` int(11) NOT NULL,
  `CountryID` int(11) NOT NULL,
  `StateName` varchar(50) NOT NULL,
  `Notes` longtext,
  `ChangedBy` varchar(50) DEFAULT NULL,
  `ChangeDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Stand-in structure for view `states`
-- (See below for the actual view)
--
CREATE TABLE `states` (
`city_state` varchar(100)
);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `sid` int(20) NOT NULL,
  `firstname` varchar(60) NOT NULL,
  `lastname` varchar(60) NOT NULL,
  `fathername` varchar(100) NOT NULL,
  `fatherphone` varchar(15) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `phonealt` varchar(15) NOT NULL,
  `emailid` varchar(30) NOT NULL,
  `branchid` varchar(20) NOT NULL,
  `addressline1` varchar(400) NOT NULL,
  `addressline2` varchar(100) NOT NULL,
  `mandal` varchar(60) NOT NULL,
  `city` varchar(60) NOT NULL,
  `state` varchar(50) NOT NULL,
  `pincode` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`sid`, `firstname`, `lastname`, `fathername`, `fatherphone`, `phone`, `phonealt`, `emailid`, `branchid`, `addressline1`, `addressline2`, `mandal`, `city`, `state`, `pincode`) VALUES
(3, 'rajesh', 'koraboina', 'kannaiah', '8686962607', '45612345', '12346788222', '', '1243566563', '3-6-86/2', 'gudibandal', 'WARANGAL', 'WARANGAL', 'Andhra Pradesh', 506001),
(4, 'KORABOINA', 'rajesh', 'Kannaiah', '8686962608', '123456', '15051619', '', '012345', '3-6-86', 'gudi', 'hnk', 'WARANGAL', 'tg', 506004),
(5, 'KORABOINA', 'rajesh', 'Kannaiah', '8686962608', '123456', '15051619', '', '012345', '3-6-86', 'gudi', 'hnk', 'WARANGAL', 'tg', 506004),
(6, 'RAJESH', 'KORABOINA', 'kannaiah', '08686962607', '8686962607', '8686962607', 'rajesh.koraboina@gmail.com', '1243566563', '3-6-86/2', 'gudibandal', 'WARANGAL', 'WARANGAL', 'TELANGANA', 506001),
(7, 'RAJESH', 'KORABOINA', 'kannaiah', '08686962607', '8686962607', '8686962607', 'rajesh.koraboina@gmail.com', '1243566563', '3-6-86/2', 'gudibandal', 'WARANGAL', 'WARANGAL', 'TELANGANA', 506001),
(8, 'RAJESH', 'KORABOINA', 'kannaya', '8686962607', '8686962607', '8686962607', 'rajesh.koraboina@gmail.com', '1243566563', '3-6-86/2', 'gudibandal', 'WARANGAL', 'WARANGAL', 'TELANGANA', 506001),
(15, 'RAJESH', 'KORABOINA', 'exam', '8686962607', '8686962607', '8686962607', 'rajesh.koraboina@gmail.com', '1243566563', '3-6-86/2, gudibandal', 'gudibandal', 'WARANGAL', 'WARANGAL', 'Andhra Pradesh', 506001),
(16, 'RAJESH', 'KORABOINA', 'exmo', '8686962607', '8686962607', '8686962607', 'rajesh.koraboina@gmail.com', '124356', '3-6-86/2, gudibandal', 'gudibandal', 'WARANGAL', 'WARANGAL', 'Andhra Pradesh', 506001),
(17, '', '', '', '', '', '', '', '', '', '', '', '', '', 0);

-- --------------------------------------------------------

--
-- Structure for view `states`
--
DROP TABLE IF EXISTS `states`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `states`  AS  select distinct `cities`.`city_state` AS `city_state` from `cities` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`city_id`);

--
-- Indexes for table `coursecategory`
--
ALTER TABLE `coursecategory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`eid`);

--
-- Indexes for table `enquiries`
--
ALTER TABLE `enquiries`
  ADD PRIMARY KEY (`enquiryid`);

--
-- Indexes for table `m_branch`
--
ALTER TABLE `m_branch`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `m_courses`
--
ALTER TABLE `m_courses`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `m_roles`
--
ALTER TABLE `m_roles`
  ADD PRIMARY KEY (`rid`);

--
-- Indexes for table `onlineenquiries`
--
ALTER TABLE `onlineenquiries`
  ADD PRIMARY KEY (`enquiryid`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`StateID`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`sid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `city_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1624;

--
-- AUTO_INCREMENT for table `coursecategory`
--
ALTER TABLE `coursecategory`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `enquiries`
--
ALTER TABLE `enquiries`
  MODIFY `enquiryid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `m_branch`
--
ALTER TABLE `m_branch`
  MODIFY `bid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `m_courses`
--
ALTER TABLE `m_courses`
  MODIFY `cid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `onlineenquiries`
--
ALTER TABLE `onlineenquiries`
  MODIFY `enquiryid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `StateID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `sid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
