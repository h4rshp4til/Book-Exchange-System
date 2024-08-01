-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 31, 2018 at 12:10 AM
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
(1, '2018-03-31', 10, 101, 110, 'Y');

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
(11, 111, 'PathwaysToGreatness', '2017-06-07', 'Novels', 'English', '2000', 'HarperCollins', 'A.P.J.Abdul Kalam', 200, 145, 'PathwaysToGreatness.jpg', 'Available'),
(3, 103, 'HTML&CSS', '2017-09-19', 'The complete reference', 'English', '5', 'Mc Graw Hill', 'Thomas A.Powell', 500, 250, 'HTML&CSS.jpg', 'Available'),
(10, 110, 'DreamBig', '2018-03-06', 'Financial ', 'English', '2017', 'CNBC', 'Dr.Mukesh jindal ', 450, 225, 'DreamBig.jpg', 'Available'),
(1, 101, 'DBMS', '2018-03-12', 'Reference', 'English', '8', 'Nirali Publication', 'prateek Bhatiya', 600, 350, 'DBMS.png', 'Available'),
(4, 104, 'LetUsC++', '2016-12-20', 'Text Book', 'English', '2', 'BPB publication', 'Yashwant Kanetkar', 400, 200, 'LetUsC++.png', 'Available'),
(5, 105, 'PHP', '2016-02-09', 'Reference', 'English', 'Indian Edition', 'Mc Graw Hill', 'Steven Holzner', 700, 400, 'PHP.png', 'Available'),
(6, 106, '.NET4.5', '2017-08-01', 'Reference', 'English', '2', 'Apress', 'Alex Mackey', 650, 275, '.NET4.5.jpg', 'Available'),
(7, 107, 'Javablackbook', '2017-09-28', 'Reference', 'English', '5th', 'Nirali Publication', 'Steven Holzner', 450, 200, 'JavaBlackBook.jpg', 'Available'),
(8, 108, 'Networkingfundamentals', '2017-06-08', 'Complete Reference', 'English', '2', 'Wiley', 'prashant krishnamurthy', 475, 230, 'Networkingfundamentals.jpg', 'Available'),
(9, 109, 'ShellProgramming', '2016-10-30', 'programming', 'English', '4th', 'Mc Graw Hill', 'Patrick Wood', 350, 150, 'ShellProgramming.jpg', 'Available'),
(12, 112, 'Oneindiangirl', '2018-02-25', 'Novels', 'English', '1,2016', 'Rupa', 'Chetan Bhagat', 176, 73, 'Oneindiangirl.jpg', 'Available'),
(13, 113, 'Thegooglestory', '2017-03-14', 'Technology', 'English', 'Abridged,2005', 'Random house audio books', 'David A.Vise', 1224, 970, 'Thegooglestory.jpg', 'Available'),
(14, 114, 'Mygita', '2017-12-12', 'Cultural', 'English', '2015', 'Rupa', 'Devdutt Pattanaik', 295, 220, 'Mygita.jpg', 'Available'),
(15, 115, 'Anighttimestory', '2017-11-07', 'Story book', 'English', '2012', 'Cuento De Luz SL', 'Sonja Winner', 997, 850, 'Anighttimestory.jpg', 'Available');

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
('106', 'Aditi Jagtap', '12,surbhi colony,dhule', '9822662614', 'aditi@gmail.com', 'additi'),
('101', 'Rina Mali', '2,ram nagar,dhule', '9823654122', 'rina@gmail.com', 'rina12345'),
('102', 'pallavi sonwane', '12,prathamesh appartment,dhule', '9921563400', 'pallavi@gmail.com', 'pallavi'),
('103', 'Neha Patil', '4,umraou nagar,dhule', '9825631477', 'neha@gmail.con', 'neha12345'),
('104', 'Megha More', '10,Adhar nagar,deopur ', '9956238741', 'megha@gmail.com', 'megha345'),
('105', 'Sunny mohite', '32,Telephone colony,dhule', '7507905075', 'sunny@gmail.com', 'sunny12345'),
('107', 'Varsha patil', '15,forest colony,dhule', '8788988113', 'varsha@gmail.com', 'varsha12'),
('108', 'nikita ahire', '10 A,nutan colony,dhule', '9284565320', 'nikita@gmail.com', 'nikita'),
('109', 'Mohini pingle', '4,Bharat Nagar,deopur,dhule', '8484806598', 'mohini@gmail.com', 'mohini90'),
('110', 'Deepti More', 'oswal nagar,dhule', '9658473215', 'deepti@gmail.com', 'deepti00'),
('111', 'Saurabh patil', 'Aadhar Nagar,deopur,dhule', '9172186548', 'saurabh@gmail.com', 'saurabh'),
('112', 'Nisha Pawar', 'shivaji nagar,dhule', '8564973248', 'nisha@gmail.com', 'nisha123'),
('113', 'Komal Rane', 'vaibhav nagar,dhule', '9921365478', 'komal@gmail.com', 'komal'),
('114', 'Priya Thakre', '6 b,krushi colony,dhule', '9455683210', 'priya@gmail.com', 'priya123'),
('115', 'Abhishek Sonwane', '30,Ram Nagar,dhule', '7083019995', 'Abhi@gmail.com', 'abhi12345');
