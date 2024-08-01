-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 16, 2018 at 11:33 PM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `book`
--

-- --------------------------------------------------------

--
-- Table structure for table `confirm`
--

CREATE TABLE IF NOT EXISTS `confirm` (
  `Confirmationno` int(3) NOT NULL,
  `Confirmationdate` date NOT NULL,
  `Uploadno` int(3) NOT NULL,
  `Touser` text NOT NULL,
  `Fromuser` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `confirm`
--


-- --------------------------------------------------------

--
-- Table structure for table `interest`
--

CREATE TABLE IF NOT EXISTS `interest` (
  `Interestno` int(3) NOT NULL,
  `Interestdate` date NOT NULL,
  `Uploadno` int(3) NOT NULL,
  `Userid` int(3) NOT NULL,
  `upuserid` int(11) NOT NULL,
  `deal` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `interest`
--

INSERT INTO `interest` (`Interestno`, `Interestdate`, `Uploadno`, `Userid`, `upuserid`, `deal`) VALUES
(1, '2018-03-16', 4, 101, 104, ''),
(2, '2018-03-16', 3, 101, 103, 'N');

-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

CREATE TABLE IF NOT EXISTS `upload` (
  `Uploadno` int(3) NOT NULL,
  `Userid` int(3) NOT NULL,
  `Title` text NOT NULL,
  `Uploaddate` date NOT NULL,
  `Category` text NOT NULL,
  `Language` text NOT NULL,
  `Edition` varchar(25) NOT NULL,
  `Publication` text NOT NULL,
  `Author` text NOT NULL,
  `Originalprice` int(5) NOT NULL,
  `Sellingprice` int(5) NOT NULL,
  `Bookimage` text NOT NULL,
  `Status` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `upload`
--

INSERT INTO `upload` (`Uploadno`, `Userid`, `Title`, `Uploaddate`, `Category`, `Language`, `Edition`, `Publication`, `Author`, `Originalprice`, `Sellingprice`, `Bookimage`, `Status`) VALUES
(3, 103, 'HTML&CSS', '2017-09-19', 'The complete reference', 'English', '5', 'Mc Graw Hill', 'Thomas A.Powell', 500, 250, 'HTML&CSS.jpg', 'Available'),
(1, 101, 'DBMS', '2018-03-12', 'Reference', 'English', '8', 'Nirali Publication', 'prateek Bhatiya', 600, 350, 'DBMS.png', 'Available'),
(4, 104, 'LetUsC++', '2016-12-20', 'Text Book', 'English', '2', 'BPB publication', 'Yashwant Kanetkar', 400, 200, 'LetUsC++.png', 'Available'),
(5, 105, 'PHP', '2016-02-09', 'Reference', 'English', 'Indian Edition', 'Mc Graw Hill', 'Steven Holzner', 700, 400, 'PHP.png', 'Available'),
(6, 106, '.NET4.5', '2017-08-01', 'Reference', 'English', '2', 'Apress', 'Alex Mackey', 650, 275, '.NET4.5.jpg', 'Available'),
(7, 107, 'Javablackbook', '2017-09-28', 'Reference', 'English', '5th', 'Nirali Publication', 'Steven Holzner', 450, 200, 'JavaBlackBook.jpg', 'Available'),
(8, 108, 'Networkingfundamentals', '2017-06-08', 'Complete Reference', 'English', '2', 'Wiley', 'prashant krishnamurthy', 475, 230, 'Networkingfundamentals.jpg', 'Available'),
(9, 109, 'ShellProgramming', '2016-10-30', 'programming', 'English', '4th', 'Mc Graw Hill', 'Patrick Wood', 350, 150, 'ShellProgramming.jpg', 'Available');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `Userid` text NOT NULL,
  `Username` text NOT NULL,
  `Address` text NOT NULL,
  `Contactno` text NOT NULL,
  `Emailid` text NOT NULL,
  `Password` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Userid`, `Username`, `Address`, `Contactno`, `Emailid`, `Password`) VALUES
('101', 'Rina Mali', '2,ram nagar,dhule', '9823654122', 'rina@gmail.com', 'rina12345'),
('102', 'pallavi sonwane', '12,prathamesh appartment,dhule', '9921563400', 'pallavi@gmail.com', 'pallavi'),
('103', 'Neha Patil', '4,umraou nagar,dhule', '9825631477', 'neha@gmail.con', 'neha12345'),
('104', 'Megha More', '10,Adhar nagar,deopur ', '9956238741', 'megha@gmail.com', 'megha345'),
('105', 'Sunny mohite', '32,Telephone colony,dhule', '7507905075', 'sunny@gmail.com', 'sunny12345');
