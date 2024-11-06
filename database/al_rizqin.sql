-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2018 at 05:49 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `al_rizqin`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(5) NOT NULL,
  `password` varchar(8) NOT NULL,
  `last_signin` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`, `last_signin`) VALUES
('admin', 'admin', '2018-04-17 13:16:45');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE IF NOT EXISTS `booking` (
`orderID` int(100) NOT NULL,
  `vendorID` int(100) NOT NULL,
  `vname` varchar(100) NOT NULL,
  `vcontact` varchar(11) NOT NULL,
  `section` varchar(100) NOT NULL,
  `pcategory` varchar(100) NOT NULL,
  `rent` decimal(15,2) NOT NULL,
  `status` varchar(15) NOT NULL,
  `quantity` int(100) NOT NULL,
  `total` decimal(15,2) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`orderID`, `vendorID`, `vname`, `vcontact`, `section`, `pcategory`, `rent`, `status`, `quantity`, `total`, `date`) VALUES
(2, 2, 'Shahril', '1234567', 'Cloth Section: Rail', 'Option 1', '40.00', 'Approved', 5, '200.00', '2018-04-26'),
(3, 2, 'Shahril', '1234567', 'Food Section: Cube', 'Level 1 - 4', '28.00', 'Accepted', 4, '112.00', '2018-04-26'),
(6, 4, 'Mai', '987654321', 'Cloth Section: Rail', 'Option 2', '30.00', 'Pending', 1, '30.00', '2018-04-26');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
`contactID` int(100) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `feedback` varchar(200) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
`productID` int(100) NOT NULL,
  `section` varchar(100) NOT NULL,
  `pcategory` varchar(100) NOT NULL,
  `rent` double(15,2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`productID`, `section`, `pcategory`, `rent`) VALUES
(1, 'Non-Food Section: Cube', 'Level 1 & 5', 10.00),
(2, 'Non-Food Section: Cube', 'Level 2 - 4', 20.00),
(3, 'Food Section: Cube', 'Level 1 - 4', 28.00),
(4, 'Food Section: Chiller', 'Level 1 - 4', 40.00),
(5, 'Food Section: Chiller', 'Level 5', 35.00),
(6, 'Food Section: Freezer', '', 20.00),
(7, 'Cloth Section: Rail', 'Option 1', 40.00),
(8, 'Cloth Section: Rail', 'Option 2', 30.00),
(9, 'Cloth Section: Scarf Rail', '', 15.00);

-- --------------------------------------------------------

--
-- Table structure for table `vendor`
--

CREATE TABLE IF NOT EXISTS `vendor` (
`vendorID` int(100) NOT NULL,
  `vname` varchar(100) NOT NULL,
  `vicnumber` varchar(9) NOT NULL,
  `vhome` varchar(100) NOT NULL,
  `vsocial` varchar(100) NOT NULL,
  `vcontact` int(11) NOT NULL,
  `password` varchar(100) NOT NULL,
  `last_login` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vendor`
--

INSERT INTO `vendor` (`vendorID`, `vname`, `vicnumber`, `vhome`, `vsocial`, `vcontact`, `password`, `last_login`) VALUES
(2, 'Shahril', '01-082691', 'Tutong', 'Shahril3001.SR@gmail.com', 1234567, '1234', '2018-04-26 10:59:32'),
(4, 'Mai', '123456789', 'Simpang 1', '@mai_handsome', 987654321, 'Password', '2018-04-26 11:18:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
 ADD PRIMARY KEY (`orderID`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
 ADD PRIMARY KEY (`contactID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
 ADD PRIMARY KEY (`productID`);

--
-- Indexes for table `vendor`
--
ALTER TABLE `vendor`
 ADD PRIMARY KEY (`vendorID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
MODIFY `orderID` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
MODIFY `contactID` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
MODIFY `productID` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `vendor`
--
ALTER TABLE `vendor`
MODIFY `vendorID` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
