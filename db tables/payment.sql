-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 18, 2018 at 09:25 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `userid` varchar(50) NOT NULL,
  `roomid` varchar(20) NOT NULL,
  `amount` int(11) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `billid` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`userid`, `roomid`, `amount`, `contact`, `billid`) VALUES
('5bc8a1f3991f3', '1001', 35000, '8080844474', 'bill10015bc8a1f3991f3'),
('5bc89e58cb136', '101', 10000, '8080666864', 'bill1015bc89e58cb136'),
('5bc8dadd4e7a0', '101', 10000, '9323167455', 'bill1015bc8dadd4e7a0'),
('5bc89e84cdac4', '102', 10000, '8080773864', 'bill1025bc89e84cdac4'),
('5bc8a0ab57ff8', '201', 10000, '899741562', 'bill2015bc8a0ab57ff8'),
('5bc89ecbc8317', '301', 15000, '9999754123', 'bill3015bc89ecbc8317'),
('5bc89ee4bc260', '401', 15000, '8099754145', 'bill4015bc89ee4bc260'),
('5bc89f2acbe39', '501', 20000, '999567147', 'bill5015bc89f2acbe39'),
('5bc8dccf85971', '501', 20000, '9874056891', 'bill5015bc8dccf85971'),
('5bc89f448afcb', '502', 20000, '7977123789', 'bill5025bc89f448afcb'),
('5bc89f767b5b8', '601', 20000, '7977789147', 'bill6015bc89f767b5b8'),
('5bc8a00b1c6c7', '602', 20000, '7899410297', 'bill6025bc8a00b1c6c7'),
('5bc8a0ce55c44', '701', 25000, '855123789', 'bill7015bc8a0ce55c44'),
('5bc8a12d3732c', '702', 25000, '855123789', 'bill7025bc8a12d3732c'),
('5bc8a142a8619', '801', 25000, '855123789', 'bill8015bc8a142a8619'),
('5bc8a15f5cec6', '901', 30000, '855123789', 'bill9015bc8a15f5cec6');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`billid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
