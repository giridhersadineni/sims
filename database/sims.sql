-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2018 at 07:33 AM
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
-- Table structure for table `avengers`
--

CREATE TABLE `avengers` (
  `eid` int(20) NOT NULL,
  `firstname` varchar(120) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `fathername` varchar(100) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `age` varchar(10) NOT NULL,
  `qualification` varchar(150) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `doj` varchar(20) NOT NULL,
  `contactno` varchar(15) NOT NULL,
  `alternateno` varchar(20) NOT NULL,
  `aadharno` int(25) NOT NULL,
  `pannumber` varchar(30) NOT NULL,
  `address` varchar(600) NOT NULL,
  `addressline2` varchar(50) NOT NULL,
  `emailid` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `etype` varchar(50) NOT NULL,
  `branchid` varchar(50) NOT NULL,
  `mandal` varchar(30) NOT NULL,
  `district` varchar(50) NOT NULL,
  `pincode` int(20) NOT NULL,
  `state` varchar(30) NOT NULL,
  `resume` varchar(200) NOT NULL,
  `pphoto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `avengers`
--

INSERT INTO `avengers` (`eid`, `firstname`, `lastname`, `fathername`, `dob`, `age`, `qualification`, `designation`, `doj`, `contactno`, `alternateno`, `aadharno`, `pannumber`, `address`, `addressline2`, `emailid`, `password`, `etype`, `branchid`, `mandal`, `district`, `pincode`, `state`, `resume`, `pphoto`) VALUES
(1, 'RAJESH', 'KORABOINA', 'RAJESH', '2018-07-02', '22', 'qualification', 'designation', '2018-03-18', '8686962607', '08686962607', 123456789, '506001', '3-6-86/2', 'gudibandal', 'rajesh.koraboina@gmail.com', '1245686', '', '', 'WARANGAL', 'WARANGAL', 506001, 'TELANGANA', '', ''),
(2, 'RAJESH', 'KORABOINA', 'RAJESH', '2018-07-02', '22', 'qualification', 'designation', '2018-03-18', '8686962607', '08686962607', 123456789, '506001', '3-6-86/2', 'gudibandal', 'rajesh.koraboina@gmail.com', '1245686', '', 'branchid', 'WARANGAL', 'WARANGAL', 506001, 'TELANGANA', '', ''),
(3, 'koraboina', 'rakesh', 'sambaiah', '2012-02-01', '30', 'qualification', 'designation', '20006-02-05', '8686962607', '84282335886', 2147483647, '84282335886', '3-6-86/2', 'gudibandal', 'rakesh@gmail.com', '123456', '', 'branchid', 'WARANGAL', 'WARANGAL', 506001, 'TELANGANA', '', ''),
(4, 'rajesh5', 'kora', 'kanakaya', '12222-02-05', '26', 'qualification', 'designation', '2018-07-16', '8989582582', '9949025119', 2147483647, '506001', 'gudibandal', 'gudibandal', 'rakesh@gmail.com', '1245686', '', 'b1', 'WARANGAL', 'WARANGAL', 506001, 'TELANGANA', '', '');

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
(15, 'back-end developer', 'full syllabus'),
(16, 'front-end developer', 'total'),
(17, 'web development cour', 'full time course\r\nshort course \r\nwith live projcet'),
(19, 'django', 'python prgm'),
(20, 'django', 'python prgm'),
(21, 'database', 'sql,php');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `eid` int(20) NOT NULL,
  `firstname` varchar(120) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `fathername` varchar(100) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `age` varchar(10) NOT NULL,
  `qualification` varchar(150) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `doj` varchar(20) NOT NULL,
  `contactno` varchar(15) NOT NULL,
  `alternateno` varchar(20) NOT NULL,
  `aadharno` int(25) NOT NULL,
  `pannumber` varchar(30) NOT NULL,
  `address` varchar(600) NOT NULL,
  `addressline2` varchar(50) NOT NULL,
  `emailid` varchar(50) NOT NULL,
  `branchid` varchar(50) NOT NULL,
  `mandal` varchar(30) NOT NULL,
  `district` varchar(50) NOT NULL,
  `pincode` int(20) NOT NULL,
  `state` varchar(30) NOT NULL,
  `resume` varchar(200) NOT NULL,
  `pphoto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`eid`, `firstname`, `lastname`, `fathername`, `dob`, `age`, `qualification`, `designation`, `doj`, `contactno`, `alternateno`, `aadharno`, `pannumber`, `address`, `addressline2`, `emailid`, `branchid`, `mandal`, `district`, `pincode`, `state`, `resume`, `pphoto`) VALUES
(1, 'RAJESH', 'KORABOINA', 'RAJESH', '2018-07-13', '23', 'Intermediate', '', '2018-07-20', '8686962607', '9949025119', 2147483647, '', '3-6-86/2', '', 'rajesh.koraboina@gmail.com', '', 'WARANGAL', 'WARANGAL', 506001, 'TELANGANA', '', ''),
(2, 'shoharani', 'KORABOINA', 'kannaya', '2018-07-27', '44', 'SSC', '', '2018-07-26', '8686962607', '78945622258', 2147483647, '1234569', 'gudibandal', '', 'shobharani.koraboina@gmail.com', '', 'WARANGAL', 'WARANGAL', 506001, 'Andhra Pradesh', '', ''),
(3, 'raghu', 'meat', 'allaya', '2018-07-11', '12', 'Intermediate', '', '2018-07-19', '8989582582', '08686962607', 2147483647, '506001', 'gudibandal', 'gudibandal', 'rakesh@gmail.com', '', 'WARANGAL', 'WARANGAL', 506001, 'TELANGANA', '', ''),
(4, 'raghu', 'meat', 'allaya', '2018-07-11', '12', 'Intermediate', '', '2018-07-19', '8686962607', '9949025119', 2147483647, '506001', '3-6-86/2', 'gudibandal', 'rajesh.koraboina@gmail.com', '', 'WARANGAL', 'WARANGAL', 506001, 'TELANGANA', '', ''),
(5, 'jeevan', 'samanthula', 'prabhas', '2018-07-25', '26', 'B.Tech', 'desgination', '2018-07-13', '8989582582', '9949025119', 2147483647, '012345679', 'gudibandal', 'gudibandal', 'jeevan@gmail.com', '', 'WARANGAL', 'WARANGAL', 506001, 'TELANGANA', '', ''),
(6, 'name', 'person', 'father', '2018-07-26', '23', 'SSC', 'designation', '2018-07-30', '8989582582', '08686962607', 3322111, '2221111', '3-6-86/2', 'gudibandal', 'rajesh.koraboina@gmail.com', '', 'WARANGAL', 'WARANGAL', 506001, 'TELANGANA', 'Rajesh.K ofr.pdf', ''),
(7, 'rakesh', 'koushal', 'rajeshkoushal', '2010-02-06', '22', 'SSC', 'designation', '2222-02-22', '778945845522', '84282335886', 1233444555, '4222113334', 'gudibandal', 'gudibandal', 'rakesh@gmail.com', '', 'WARANGAL', 'WARANGAL', 506001, 'TELANGANA', 'MICA_2017-12-EN.pdf', ''),
(8, 'RAJESH', 'KORABOINA', 'kannaiah', '2018-07-12', '58', 'SSC', 'designation', '2018-07-26', '8989582582', '9949025119', 123456789, '123456799', 'gudibandal', 'gudibandal', 'rajesh.koraboina19@gmail.com', '', 'hnk', 'WARANGAL', 506001, 'TELANGANA', 'sbi advt.pdf', ''),
(9, 'RAJESH', 'KORABOINA', 'kannaiah', '2018-07-12', '58', 'SSC', 'designation', '2018-07-26', '8989582582', '9949025119', 123466789, '12457896', 'gudibandal', 'gudibandal', 'rajesh.koraboina19@gmail.com', '', 'hnk', 'WARANGAL', 506001, 'TELANGANA', 'Rajesh.K ofr.pdf', 'New Doc 13.jpg'),
(10, 'thanish', 'kumar', 'ravi', '2018-07-06', '32', 'SSC', 'designation', '2018-07-21', '778945845522', '08686962607', 2147483647, '08686962607', '3-6-86/2', 'gudibandal', 'thanish@gmail.com', '', 'warangal', 'WARANGAL', 506001, 'Andhra Pradesh', 'Rajesh.K ofr.pdf', ''),
(11, 'thanish', 'kumar', 'ravi', '2018-07-06', '32', 'SSC', 'designation', '2018-07-21', '778945845522', '08686962607', 2147483647, '08686962607', '3-6-86/2', 'gudibandal', 'thanish@gmail.com', '', 'warangal', 'WARANGAL', 506001, 'Andhra Pradesh', 'Rajesh.K ofr.pdf', ''),
(12, 'RAJESH', 'KORABOINA', 'kannaiah', '2018-07-12', '58', 'SSC', 'designation', '2018-07-26', '9949025119', '9949025119', 2147483647, '9949025119', '3-6-86/2', 'gudibandal', 'rajesh.koraboina@gmail.com', '', 'WARANGAL', 'WARANGAL', 506001, 'Andhra Pradesh', 'rajesh grup2.pdf', 'New Doc 17.jpg'),
(13, 'thanish', 'kumar', 'ravi', '2018-07-06', '32', 'SSC', 'designation', '2018-07-21', '778945845522', '08686962607', 2147483647, '08686962607', '3-6-86/2', 'gudibandal', 'thanish@gmail.com', '', 'warangal', 'WARANGAL', 506001, 'Andhra Pradesh', 'Rajesh.K ofr.pdf', ''),
(14, 'thanish', 'kumar', 'ravi', '2018-07-06', '32', 'SSC', 'designation', '2018-07-21', '778945845522', '08686962607', 2147483647, '08686962607', '3-6-86/2', 'gudibandal', 'thanish@gmail.com', '', 'warangal', 'WARANGAL', 506001, 'Andhra Pradesh', 'Rajesh.K ofr.pdf', ''),
(15, 'RAJESH', 'KORABOINA', 'kannaiah', '2018-07-12', '58', 'SSC', 'designation', '2018-07-26', '9949025119', '9949025119', 2147483647, '9949025119', '3-6-86/2', 'gudibandal', 'rajesh.koraboina@gmail.com', '', 'WARANGAL', 'WARANGAL', 506001, 'Andhra Pradesh', 'rajesh grup2.pdf', 'New Doc 17.jpg'),
(16, 'exmple', 'test', 'exampe', '0012-12-12', '22', 'SSC', '--Select--', '2222-02-22', '1212626', '626261651', 2147483647, '165165165', '3-6-86/2', 'gudi', 'rajesh.koraboina@gmail.com', '', 'WARANGAL', 'WARANGAL', 506001, 'TELANGANA', '', ''),
(17, 'exmple', 'test', 'exampe', '0012-12-12', '22', 'SSC', '--Select--', '2222-02-22', '1212626', '626261651', 2147483647, '165165165', '3-6-86/2', 'gudi', 'rajesh.koraboina@gmail.com', '', 'WARANGAL', 'WARANGAL', 506001, 'TELANGANA', '', 'New Doc 13.jpg'),
(18, 'raju', 'kora', 'kana', '2105-12-12', '25', 'SSC', 'designation', '2015-02-22', '1245', '12152', 1222, '1222', '3-6-86/2', 'warmg', 'rajesh.koraboina@gmail.com', '', 'WARANGAL', 'WARANGAL', 5016111, 'TELANGANA', '', '12112323_1660801097493316_5190'),
(19, 'raju', 'kora', 'kana', '2105-12-12', '25', 'SSC', 'designation', '2015-02-22', '1245', '12152', 1222, '1222', '3-6-86/2', 'warmg', 'rajesh.koraboina@gmail.com', '', 'WARANGAL', 'WARANGAL', 5016111, 'TELANGANA', '', '12112323_1660801097493316_5190'),
(59, 'RAJESH', 'KORABOINA', 'kannaiah', '2018-07-18', '33', 'SSC', 'designation', '2018-07-13', '8686962607', '8686962607', 34566666, '506001', '3-6-86/2', 'gudibandal', 'rajesh.koraboina@gmail.com', '', 'WARANGAL', 'WARANGAL', 506001, 'TELANGANA', '', 'non.jpg'),
(60, 'RAJESH', 'KORABOINA', 'kannaiah', '2018-07-18', '33', 'SSC', 'designation', '2018-07-13', '8686962607', '8686962607', 34566666, '506001', '3-6-86/2', 'gudibandal', 'rajesh.koraboina@gmail.com', '', 'WARANGAL', 'WARANGAL', 506001, 'TELANGANA', '', 'non.jpg'),
(61, 'RAJESH', 'KORABOINA', 'kannaiah', '2018-07-18', '33', 'SSC', 'designation', '2018-07-13', '8686962607', '8686962607', 34566666, '506001', '3-6-86/2', 'gudibandal', 'rajesh.koraboina@gmail.com', '', 'WARANGAL', 'WARANGAL', 506001, 'TELANGANA', '', 'non.jpg'),
(76, 'RAJESH3', 'KORABOINA', 'kannaiah', '2018-07-05', '', 'SSC', 'designation', '2018-07-05', '8989582582', '8686962607', 0, '506001', 'gudibandal', 'gudibandal', 'rakesh@gmail.com', '', 'WARANGAL', 'WARANGAL', 506001, 'Andhra Pradesh', '', ''),
(77, 'RAJESH3', 'KORABOINA', 'kannaiah', '2018-07-05', '', 'SSC', 'designation', '2018-07-05', '8989582582', '8686962607', 0, '506001', 'gudibandal', 'gudibandal', 'rakesh@gmail.com', '', 'WARANGAL', 'WARANGAL', 506001, 'Andhra Pradesh', '', ''),
(78, 'RAJESH3', 'KORABOINA', 'kannaiah', '2018-07-05', '', 'SSC', 'designation', '2018-07-05', '8989582582', '8686962607', 0, '506001', 'gudibandal', 'gudibandal', 'rakesh@gmail.com', '', 'WARANGAL', 'WARANGAL', 506001, 'Andhra Pradesh', '', ''),
(79, 'RAJESH3', 'KORABOINA', 'kannaiah', '2018-07-05', '', 'SSC', 'designation', '2018-07-05', '8989582582', '8686962607', 0, '506001', 'gudibandal', 'gudibandal', 'rakesh@gmail.com', '', 'WARANGAL', 'WARANGAL', 506001, 'Andhra Pradesh', '', ''),
(80, 'RAJESH3', 'KORABOINA', 'kannaiah', '2018-07-05', '', 'SSC', 'designation', '2018-07-05', '8989582582', '8686962607', 0, '506001', 'gudibandal', 'gudibandal', 'rakesh@gmail.com', '', 'WARANGAL', 'WARANGAL', 506001, 'Andhra Pradesh', '', ''),
(81, 'RAJESH3', 'KORABOINA', 'kannaiah', '2018-07-05', '', 'SSC', 'designation', '2018-07-05', '8989582582', '8686962607', 0, '506001', 'gudibandal', 'gudibandal', 'rakesh@gmail.com', '', 'WARANGAL', 'WARANGAL', 506001, 'Andhra Pradesh', '', ''),
(82, 'RAJESH3', 'KORABOINA', 'kannaiah', '2018-07-05', '', 'SSC', 'designation', '2018-07-05', '8989582582', '8686962607', 0, '506001', 'gudibandal', 'gudibandal', 'rakesh@gmail.com', '', 'WARANGAL', 'WARANGAL', 506001, 'Andhra Pradesh', '', ''),
(83, 'RAJESH3', 'KORABOINA', 'kannaiah', '2018-07-05', '', 'SSC', 'designation', '2018-07-05', '8989582582', '8686962607', 0, '506001', 'gudibandal', 'gudibandal', 'rakesh@gmail.com', '', 'WARANGAL', 'WARANGAL', 506001, 'Andhra Pradesh', '', ''),
(84, 'RAJESH', 'KORABOINA', 'RAJESH', '2018-07-05', '', 'SSC', 'designation', '2018-07-27', '8989582582', '8686962607', 0, '506001', 'gudibandal', 'gudibandal', 'rakesh@gmail.com', '', 'WARANGAL', 'WARANGAL', 506001, 'Andhra Pradesh', '', ''),
(85, 'RAJESH', 'KORABOINA', 'RAJESH', '2018-07-05', '', 'SSC', 'designation', '2018-07-27', '8989582582', '8686962607', 0, '506001', 'gudibandal', 'gudibandal', 'rakesh@gmail.com', '', 'WARANGAL', 'WARANGAL', 506001, 'Andhra Pradesh', '', ''),
(86, 'RAJESH28', 'KORABOINA', 'kannaiah', '2018-07-04', '', 'SSC', 'designation', '2018-07-19', '8989582582', '08686962607', 0, '506001', 'gudibandal', 'gudibandal', 'rakesh@gmail.com', '', 'WARANGAL', 'WARANGAL', 506001, 'TELANGANA', '', ''),
(105, 'RAJESH', 'KORABOINA', 'RAJESH', '2018-07-12', '22', 'qualification', 'designation', '2018-07-20', '8686962607', '08686962607', 0, '506001', '3-6-86/2', 'gudibandal', 'rajesh.koraboina@gmail.com', '', 'WARANGAL', 'WARANGAL', 506001, 'TELANGANA', '', ''),
(106, 'RAJESH', 'KORABOINA', 'RAJESH', '2018-07-12', '22', 'qualification', 'designation', '2018-07-20', '8686962607', '08686962607', 0, '506001', '3-6-86/2', 'gudibandal', 'rajesh.koraboina@gmail.com', '', 'WARANGAL', 'WARANGAL', 506001, 'TELANGANA', '', ''),
(107, 'RAJESH', 'KORABOINA', 'RAJESH', '', '', '--Select--', '--Select--', '', '8686962607', '', 0, '506001', '3-6-86/2', 'gudibandal', 'rajesh.koraboina@gmail.com', '', 'WARANGAL', '', 0, '', '', ''),
(108, 'RAJESH', 'KORABOINA', 'RAJESH', '', '', '--Select--', '--Select--', '', '8686962607', '', 0, '506001', '3-6-86/2', 'gudibandal', 'rajesh.koraboina@gmail.com', '', 'WARANGAL', '', 0, '', '', '');

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
  `imgname` varchar(50) NOT NULL,
  `addressline1` varchar(50) NOT NULL,
  `addressline2` varchar(50) NOT NULL,
  `alternateno` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `mandal` varchar(20) NOT NULL,
  `district` varchar(25) NOT NULL,
  `pincode` int(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `forwardon` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enquiries`
--

INSERT INTO `enquiries` (`enquiryid`, `firstname`, `lastname`, `fathername`, `student`, `contactdetails`, `college`, `qualification`, `courseinterested`, `doj`, `courseids`, `attendedby`, `type`, `branchid`, `remarks`, `imgname`, `addressline1`, `addressline2`, `alternateno`, `email`, `mandal`, `district`, `pincode`, `state`, `forwardon`) VALUES
(4, 'rakesh', 'koushal', 'srinivas', '1', '8989582582', 'kits', 'btech', '', '2018-07-02', '', 'rajesh', '', '1505', '35', 'rakesh4.jpg', '3-6-86', ' gudibandal', '84282335886', 'rakesh@gmail.com', 'WARANGAL', 'WARANGAL', 506001, 'TELANGANA', '0'),
(10, 'rakesh', 'koushal', 'srinivas', '1', '8989582582', 'kits', 'btech', '', '2018-07-02', '', 'rajesh', '', '1505', '35', 'rakesh10.jpg', '3-6-86', ' gudibandal', '84282335886', 'rakesh@gmail.com', 'WARANGAL', 'WARANGAL', 506001, 'TELANGANA', '0'),
(11, 'KORABOINA', 'KORABOINA', 'RAJESH', 'yes', '8686962607', ' gudibandal', 'Inter', '', '2018-07-09', '', 'RAJESH', '', '0123', '60', 'KORABOINA11.jpg', '3-6-86/2', '3-6-86/2', '84282335886', 'shobhrani@gmail.com', 'WARANGAL', 'WARANGAL', 506001, 'TELANGANA', '0'),
(19, 'raghava', 'kori', 'kannu', 'yes', '8686962607', 'ganapathi', 'hardware', '2018-08-08', '0123', '', 'admin', '', '1505', '90%', '', '3-6-86/2,', '3-6-86/2, gudibandal', '9949025119', 'rajesh.koraboina@gmail.com', 'WARANGAL', 'WARANGAL', 506001, 'Andhra Pradesh', '0'),
(21, 'pulli', 'raj', 'karthik', 'yes', '8686962607', 'gnapp', 'diploma', '', '2018-08-16', '0123', 'admin', '', '1505', '50', '', '3-6-86/2', '3-6-86/2, gudibandal', '9949025119', 'rajesh.koraboina@gmail.com', 'WARANGAL', 'WARANGAL', 506001, 'Andhra Pradesh', '0'),
(22, 'rashu', 'KORABOINA', 'RAJESH', 'yes', '8686962607', 'gnapp', 'btech', '', '2018-08-17', '123456789', 'RAJESH', '', '1505', '60', '', '3-6-86/2,', '3-6-86/2, gudibandal', '08686962607', 'rajesh.koraboina@gmail.com', 'WARANGAL', 'WARANGAL', 506001, 'Andhra Pradesh', '2018'),
(23, 'brama', 'KORABOINA', 'rama', 'yes', '8686962607', 'gnapp', 'diploma', '', '2018-08-16', '0123568', 'cashier', '', '1505', '35', '', '3-6-86', '3-6-86/2', '9949025119', 'rajesh.koraboina19@gmail.com', 'WARANGAL', 'WARANGAL', 506001, 'TELANGANA', '2018'),
(29, 'raju', 'esay', 'name', 'yes', '855559568985', 'gnppt', 'degree', '', '2018-08-17', '0123568', 'cashier', '', 'SUBEDARI', '56656', '', '3-6-86/2,', '3-6-86/2, gudibandal', '858545856566', 'rajesh.koraboina@gmail.com', 'WARANGAL', 'WARANGAL', 506001, 'Andhra Pradesh', '2018-08-15'),
(30, 'rajeshkoraboina', 'raju', 'koraboina', 'yes', '8686962607', 'ganapathi', 'diploma', '', '2015-02-05', '12345679', 'RAJESH', '', 'skillverse', 'when i should i meet you on office for more details..', '', '3-6-86', '3-6-86/2, gudibandal', '89982255', 'rajesh.koraboina@gmail.com', 'WARANGAL', 'WARANGAL', 506001, 'Andhra Pradesh', '2016-12-05'),
(31, 'rajeshk', 'dasari', 'srinivas', 'yes', '8686962607', 'vdge', 'ug', '', '2018-08-17', '899985', 'RAJESH', '', '2', 'something', '', '3-6-86/2', 'gudi', '9949025119', 'rajesh.koraboina@gmail.com', 'hnk', 'WARANGAL', 506001, 'TELANGANA', '2018-08-16'),
(32, 'RAJESH', 'KORABOINA', 'RAJESH', 'yes', '8686962607', 'gnpt', 'btech', '', '2018-08-21', '', 'admin', '', '1', 'dxa', '', '3-6-86/2', '3-6-86/2, gudibandal', '08686962607', 'rajesh.koraboina@gmail.com', 'WARANGAL', 'WARANGAL', 506001, 'Andhra Pradesh', ''),
(33, 'RAJESH', 'KORABOINA', 'RAJESH', 'yes', '8686962607', 'gnpt', 'btech', '', '2018-08-21', '', 'admin', '', '1', 'dxa', '', '3-6-86/2', '3-6-86/2, gudibandal', '08686962607', 'rajesh.koraboina@gmail.com', 'WARANGAL', 'WARANGAL', 506001, 'Andhra Pradesh', '2018-08-06'),
(34, 'RAJESH', 'KORABOINA', 'RAJESH', 'yes', '8686962607', 'gudi', 'diploma', '', '2018-08-09', '', 'RAJESH', '', '2', 'hyfnkn', '', '3-6-86', '3-6-86/2, gudibandal', '9949025119', 'rajesh.koraboina@gmail.com', 'WARANGAL', 'WARANGAL', 506001, 'Andhra Pradesh', '2018-08-16');

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `id` int(50) NOT NULL,
  `invoiceno` varchar(50) NOT NULL,
  `invoicename` varchar(50) NOT NULL,
  `coursename` varchar(50) NOT NULL,
  `date` varchar(55) NOT NULL,
  `duedate` varchar(50) NOT NULL,
  `total` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(50) NOT NULL,
  `password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('rajesh', 'rajesh123'),
('rajesh@gmail.com', 'rajesh123'),
('\0', '\0'),
('\0', '\0');

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
(2, 'SUBEDARI', '2-5-746 Opp Arts & Science College \r\nSubedari\r\nHanamkonda', '9989443422', 'RAJU NIMMALA', 'rajnimmala@gmail.com'),
(3, 'skillverse', 'gudibandal', '8989582582', 'admin', 'skillverse@gmail.com'),
(4, 'SUBEDARI', '2-5-746 Opp Arts & Science College, \r\nHanamkonda,\r\nWarangal, 506001', '9989443422', 'RAJU NIMMALA', 'raj.nimmala@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `m_courses`
--

CREATE TABLE `m_courses` (
  `cid` int(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `branchid` varchar(20) NOT NULL,
  `category` varchar(50) NOT NULL,
  `categoryid` int(11) NOT NULL,
  `type` varchar(50) NOT NULL,
  `description` varchar(400) NOT NULL,
  `syllabus` varchar(600) NOT NULL,
  `duration` varchar(30) NOT NULL,
  `fee` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_courses`
--

INSERT INTO `m_courses` (`cid`, `name`, `branchid`, `category`, `categoryid`, `type`, `description`, `syllabus`, `duration`, `fee`) VALUES
(4, 'C++,C language', '012345', 'Development', 17, 'beginner level', 'full syallbus', 'all', '6 months', 1000),
(5, 'python', '012345', 'web developer', 15, 'full', 'ready to start', 'full', '6 months', 2500),
(6, 'html,css,js', '012345', 'front-end development', 16, 'student', 'nothing', 'full', '6 months', 750),
(7, 'html,css,js', '012345', 'front-end development', 17, 'full model ', 'nothing', 'full syallbus', '6 months', 2500);

-- --------------------------------------------------------

--
-- Table structure for table `m_coursetype`
--

CREATE TABLE `m_coursetype` (
  `cid` int(100) NOT NULL,
  `coursetype` varchar(200) NOT NULL,
  `description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_coursetype`
--

INSERT INTO `m_coursetype` (`cid`, `coursetype`, `description`) VALUES
(1, 'summer course', '3 months');

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
  `emailid` varchar(30) NOT NULL,
  `college` varchar(50) NOT NULL,
  `course` varchar(50) NOT NULL,
  `branchid` varchar(20) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `addressline1` varchar(400) NOT NULL,
  `addressline2` varchar(100) NOT NULL,
  `mandal` varchar(60) NOT NULL,
  `city` varchar(60) NOT NULL,
  `state` varchar(50) NOT NULL,
  `pincode` int(6) NOT NULL,
  `ppfilename` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
-- Indexes for table `avengers`
--
ALTER TABLE `avengers`
  ADD PRIMARY KEY (`eid`);

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
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `m_coursetype`
--
ALTER TABLE `m_coursetype`
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
-- AUTO_INCREMENT for table `avengers`
--
ALTER TABLE `avengers`
  MODIFY `eid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `city_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1624;

--
-- AUTO_INCREMENT for table `coursecategory`
--
ALTER TABLE `coursecategory`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `eid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT for table `enquiries`
--
ALTER TABLE `enquiries`
  MODIFY `enquiryid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `m_branch`
--
ALTER TABLE `m_branch`
  MODIFY `bid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `m_courses`
--
ALTER TABLE `m_courses`
  MODIFY `cid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `m_coursetype`
--
ALTER TABLE `m_coursetype`
  MODIFY `cid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
  MODIFY `sid` int(20) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
