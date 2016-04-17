-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2015 at 06:27 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dmv_c`
--

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE IF NOT EXISTS `company` (
  `Company_Id` int(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Industary` varchar(255) NOT NULL,
  `Phone_Num` varchar(255) NOT NULL,
  PRIMARY KEY (`Company_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`Company_Id`, `Name`, `Industary`, `Phone_Num`) VALUES
(1, 'Gallup', 'Management Consulting', '(202) 368-3739'),
(2, 'EY', 'Accounting', '(202) 638-7394'),
(3, 'KeyLogic Systems', 'Information Technology and Services', '(202) 369-1836'),
(4, 'comScore, Inc.', 'Internet', '(443) 273-3738'),
(5, '2U', 'E-Learning', '(443) 283-7384'),
(6, 'Hobsons', 'Education Management', '(202) 363-2739'),
(9091332, 'Google', 'Computer Tech', '2024699782');

-- --------------------------------------------------------

--
-- Table structure for table `company_account`
--

CREATE TABLE IF NOT EXISTS `company_account` (
  `C_Aid` int(255) NOT NULL AUTO_INCREMENT,
  `Account` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  PRIMARY KEY (`C_Aid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `company_account`
--

INSERT INTO `company_account` (`C_Aid`, `Account`, `Password`) VALUES
(1, 'Gallup', '263292'),
(2, 'EY', '892744'),
(3, 'KeyLogic Systems', '294748'),
(4, 'comScore, Inc.', '492927'),
(5, '2U', '274946'),
(6, 'Hobsons', '829942'),
(9, 'Google@gmail.com', 'Google@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `position`
--

CREATE TABLE IF NOT EXISTS `position` (
  `Id` int(255) NOT NULL,
  `Title` varchar(255) NOT NULL,
  `Salary` varchar(255) NOT NULL,
  `Qualifications` varchar(255) NOT NULL,
  `Job_type` varchar(255) NOT NULL,
  `Date_posted` date NOT NULL,
  `Job_function` varchar(255) NOT NULL,
  `E_mail` varchar(255) NOT NULL,
  `Company_id` int(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `position`
--

INSERT INTO `position` (`Id`, `Title`, `Salary`, `Qualifications`, `Job_type`, `Date_posted`, `Job_function`, `E_mail`, `Company_id`) VALUES
(1, 'Recruiter', '3000', 'College degree', 'full time', '2015-09-25', 'finance', 'robert6389@gmail.com', 1),
(2, 'Business Analyst ', '6000', 'Excellent research, analytical, communication and writing skills', 'full time', '2015-10-27', 'analyst', 'maggiesun@sldhd.com', 2),
(3, 'Research Associate', '5000', 'Data entry and database management', 'part time', '2015-08-21', 'research', 'sdhsidcb73@gmail.com', 3),
(4, 'Computer Scientist', '7000', 'GS-14 LEVEL', 'full time', '2015-11-28', 'information technology', 'jammies_sg@gmail.com', 4),
(5, 'Professional Sales', '5000', 'outstanding telecommunication skills', 'intern', '2015-05-12', 'sales', 'shuwis_729@gmail.com', 5),
(6, 'Field Retail Merchandising Representative', '3500', 'Reliable transportation to our client’s location at assigned times', 'part time', '2015-12-01', 'customer service', 'suqssjkkm@gmail.com', 6);

-- --------------------------------------------------------

--
-- Table structure for table `position_location`
--

CREATE TABLE IF NOT EXISTS `position_location` (
  `L_gid` varchar(255) NOT NULL,
  `State` varchar(255) NOT NULL,
  `City` varchar(255) NOT NULL,
  `Zipcode` varchar(255) NOT NULL,
  PRIMARY KEY (`L_gid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `position_location`
--

INSERT INTO `position_location` (`L_gid`, `State`, `City`, `Zipcode`) VALUES
('1', 'VA', 'Arlington', '22201'),
('2', 'DC', 'Washington DC', '22033'),
('3', 'VA', 'Richmond', '20102'),
('4', 'MD', 'Baltimore', '22150'),
('5', 'DC', 'Washington DC', '22118'),
('6', 'MD', 'Annapolis', '22947');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `Stu_Id` int(255) NOT NULL,
  `Last_Name` varchar(255) DEFAULT NULL,
  `First_Name` varchar(255) DEFAULT NULL,
  `Middle_Name` varchar(255) DEFAULT NULL,
  `Gender` varchar(255) DEFAULT NULL,
  `Langauges` varchar(255) NOT NULL,
  `Experiences` varchar(255) DEFAULT NULL,
  `Education` varchar(255) NOT NULL,
  PRIMARY KEY (`Stu_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`Stu_Id`, `Last_Name`, `First_Name`, `Middle_Name`, `Gender`, `Langauges`, `Experiences`, `Education`) VALUES
(0, '', '', '', '', '', '', ''),
(1, 'Abrams', 'Lacy', 'Stella', 'Female', 'Chinse', 'NA', 'Master'),
(2, 'Fagan', 'Herbert', 'Alexander', 'Male', 'English', '3 years', 'PHD '),
(3, 'Daigle', 'Will', 'George', 'Male', 'German', '1 year', 'Bachelor'),
(4, 'Machado', 'Quincy', 'Valerie', 'Female', 'Korean', 'NA', 'Master'),
(5, 'Raines', 'Young', 'Danny', 'Male', 'French', '1.5 year', 'Senior'),
(6, 'Wagner', 'Eddie', 'Joshua', 'Male', 'Arabic', '2 year', 'Junior'),
(123, '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `student_account`
--

CREATE TABLE IF NOT EXISTS `student_account` (
  `S_Aid` int(255) NOT NULL AUTO_INCREMENT,
  `Account` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  PRIMARY KEY (`S_Aid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `student_account`
--

INSERT INTO `student_account` (`S_Aid`, `Account`, `Password`) VALUES
(1, 'Lacy', '219347'),
(2, 'Herbert', '274848'),
(3, 'Will', '748492'),
(4, 'Quincy', '249473'),
(5, 'Young', '374592'),
(6, 'Eddie', '748492'),
(9, 'jiaqichen@gwmail.edu', 'jiaqichen@gwmail.edu');

-- --------------------------------------------------------

--
-- Table structure for table `student_contact`
--

CREATE TABLE IF NOT EXISTS `student_contact` (
  `Stu_cid` int(255) NOT NULL,
  `E_mail` varchar(255) NOT NULL DEFAULT '',
  `Phone_Num` varchar(255) NOT NULL DEFAULT '',
  `Twitter` varchar(255) NOT NULL,
  `Facebk` varchar(255) NOT NULL,
  PRIMARY KEY (`Stu_cid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student_contact`
--

INSERT INTO `student_contact` (`Stu_cid`, `E_mail`, `Phone_Num`, `Twitter`, `Facebk`) VALUES
(1, 'LacyAbrams@hotmail', '(202) 373-2836', '@khsgqj', 'LacyAbrams'),
(2, 'HerbertFagan@gmail.com', '(202) 829-2396', '@ensamu', 'HerbertFagan'),
(3, 'WillDaigle@gmail.com', '(443) 280-8399', '@sjoawi73', 'WillDaigle'),
(4, 'QuincyMachado@gmail.com', '(443) 826-8632', '@sandy2973', 'QuincyMachado'),
(5, 'YoungRaines@gmail.com', '(202) 283-2823', '@shiwusun', 'YoungRaines'),
(6, 'EddieWagner@gmail.com', '(443) 237-2836', '@southmore', 'EddieWagner');

-- --------------------------------------------------------

--
-- Table structure for table `student_location`
--

CREATE TABLE IF NOT EXISTS `student_location` (
  `S_gid` varchar(255) NOT NULL,
  `State` varchar(255) NOT NULL,
  `City` varchar(255) NOT NULL,
  `Zipcode` varchar(255) NOT NULL,
  PRIMARY KEY (`S_gid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `student_location`
--

INSERT INTO `student_location` (`S_gid`, `State`, `City`, `Zipcode`) VALUES
('1', 'VA', 'Alexandria', '22040'),
('2', 'MD', 'Silver Spring', '22037'),
('3', 'VA', 'Winchester', '22218'),
('4', 'DC', 'Washington DC', '22283'),
('5', 'MD', 'Rockville', '22038'),
('6', 'VA', 'Hampton', '22082');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
