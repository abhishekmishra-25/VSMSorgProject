-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vsms_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin_tb`
--

CREATE TABLE `adminlogin_tb` (
  `a_login_id` int(11) NOT NULL,
  `a_name` varchar(60) COLLATE utf8_bin NOT NULL,
  `a_email` varchar(60) COLLATE utf8_bin NOT NULL,
  `a_password` varchar(60) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;


-- --------------------------------------------------------

INSERT INTO `adminlogin_tb`(`a_login_id`, `a_name`, `a_email`, `a_password`) VALUES ('[1]','[admin]','[admin@gmail.com]','[6357]');
--
-- Table structure for table `assets_tb`
--

CREATE TABLE `assets_tb` (
  `pid` int(11) NOT NULL,
  `pname` varchar(60) COLLATE utf8_bin NOT NULL,
  `pdop` date NOT NULL,
  `pava` int(11) NOT NULL,
  `ptotal` int(11) NOT NULL,
  `poriginalcost` int(11) NOT NULL,
  `psellingcost` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;




-- --------------------------------------------------------

--
-- Table structure for table `assignwork_tb`
--

CREATE TABLE `assignwork_tb` (
  `rno` int(11) NOT NULL,
  `request_id` int(11) NOT NULL,
  `Vehicle_type` text COLLATE utf8_bin NOT NULL,
  `Owner_name` text COLLATE utf8_bin NOT NULL,
  `Owner_contact` varchar(60) COLLATE utf8_bin NOT NULL,
  `requester_add1` text COLLATE utf8_bin NOT NULL,
  `address` text COLLATE utf8_bin NOT NULL,
  `Request_type` varchar(60) COLLATE utf8_bin NOT NULL,
  `City` varchar(60) COLLATE utf8_bin NOT NULL,
  `Services` int(11) NOT NULL,
  `Owner_Email` varchar(60) COLLATE utf8_bin NOT NULL,
  `Vehicle_no` bigint(11) NOT NULL,
  `assign_date` varchar(60) COLLATE utf8_bin NOT NULL,
  `assign_mech` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;



--
-- Table structure for table `customer_tb`
--

CREATE TABLE `customer_tb` (
  `custid` int(11) NOT NULL,
  `custname` varchar(60) COLLATE utf8_bin NOT NULL,
  `custadd` varchar(60) COLLATE utf8_bin NOT NULL,
  `cpname` varchar(60) COLLATE utf8_bin NOT NULL,
  `cpquantity` int(11) NOT NULL,
  `cpeach` int(11) NOT NULL,
  `cptotal` int(11) NOT NULL,
  `cpdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;



--
-- Table structure for table `requesterlogin_tb`
--

CREATE TABLE `requesterlogin_tb` (
  `r_login_id` int(11) NOT NULL,
  `r_name` varchar(60) COLLATE utf8_bin NOT NULL,
  `r_email` varchar(60) COLLATE utf8_bin NOT NULL,
  `r_password` varchar(60) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;



--
-- Table structure for table `submitrequest_tb`
--

CREATE TABLE vsms_db.submitrequest_tb (
    request_id INT NOT NULL AUTO_INCREMENT,
    Vehicle_type VARCHAR(60) NOT NULL,
    Owner_name VARCHAR(60) NOT NULL,
    Owner_contact VARCHAR(15) NOT NULL,
    address VARCHAR(255) NOT NULL,
    Request_type VARCHAR(60) NOT NULL,
    City VARCHAR(60) NOT NULL,
    Services VARCHAR(100) NOT NULL,
    Owner_Email VARCHAR(100) NOT NULL,
    Vehicle_no VARCHAR(20) NOT NULL,
    Request_Date DATETIME NOT NULL,
    PRIMARY KEY (request_id)
) ENGINE=InnoDB;



--
-- Table structure for table `mechanics_tb`
--

CREATE TABLE `mechanics_tb` (
  `empid` int(11) NOT NULL,
  `empName` varchar(60) COLLATE utf8_bin NOT NULL,
  `empCity` varchar(60) COLLATE utf8_bin NOT NULL,
  `empMobile` bigint(11) NOT NULL,
  `empEmail` varchar(60) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- contact-messages
CREATE TABLE `vsms_db`.`contact_messages` (`id` INT(11) NOT NULL AUTO_INCREMENT ,
 `name` VARCHAR(60) NOT NULL , `email` TEXT NOT NULL ,
  `message` TEXT NOT NULL , `created_at` DATETIME NOT NULL ,
   PRIMARY KEY (`id`)) ENGINE = InnoDB;



--
-- Indexes for table `adminlogin_tb`
--
ALTER TABLE `adminlogin_tb`
  ADD PRIMARY KEY (`a_login_id`);

--
-- Indexes for table `assets_tb`
--
ALTER TABLE `assets_tb`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `assignwork_tb`
--
ALTER TABLE `assignwork_tb`
  ADD PRIMARY KEY (`rno`);

--
-- Indexes for table `customer_tb`
--
ALTER TABLE `customer_tb`
  ADD PRIMARY KEY (`custid`);

--
-- Indexes for table `requesterlogin_tb`
--
ALTER TABLE `requesterlogin_tb`
  ADD PRIMARY KEY (`r_login_id`);

--
-- Indexes for table `submitrequest_tb`
--
ALTER TABLE `submitrequest_tb`
  ADD PRIMARY KEY (`request_id`);

--
-- Indexes for table `mechanics_tb`
--
ALTER TABLE `mechanics_tb`
  ADD PRIMARY KEY (`empid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlogin_tb`
--
ALTER TABLE `adminlogin_tb`
  MODIFY `a_login_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `assets_tb`
--
ALTER TABLE `assets_tb`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `assignwork_tb`
--
ALTER TABLE `assignwork_tb`
  MODIFY `rno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `customer_tb`
--
ALTER TABLE `customer_tb`
  MODIFY `custid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `requesterlogin_tb`
--
ALTER TABLE `requesterlogin_tb`
  MODIFY `r_login_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `submitrequest_tb`
--
ALTER TABLE `submitrequest_tb`
  MODIFY `request_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `mechanics_tb`
--
ALTER TABLE `mechanics_tb`
  MODIFY `empid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
