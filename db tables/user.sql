-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 18, 2018 at 09:26 PM
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
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `roomid` varchar(20) NOT NULL,
  `checkin` date DEFAULT NULL,
  `checkout` date DEFAULT NULL,
  `userid` varchar(50) DEFAULT NULL,
  `identify` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`roomid`, `checkin`, `checkout`, `userid`, `identify`) VALUES
('1002', '2018-11-02', '2018-11-04', '5bc898d043079', '1015bc898d043079'),
('102', '2018-10-19', '2018-10-20', NULL, NULL),
('201', '2018-10-19', '2018-10-20', NULL, NULL),
('202', '2018-10-19', '2018-10-20', NULL, NULL),
('301', '2018-10-19', '2018-10-20', NULL, NULL),
('401', '2018-10-19', '2018-10-20', NULL, NULL),
('402', '2018-10-19', '2018-10-20', NULL, NULL),
('501', '2018-10-19', '2018-10-20', NULL, NULL),
('502', '2018-10-19', '2018-10-20', NULL, NULL),
('601', '2018-10-19', '2018-10-20', NULL, NULL),
('602', '2018-10-19', '2018-10-20', NULL, NULL),
('701', '2018-10-19', '2018-10-20', NULL, NULL),
('702', '2018-10-19', '2018-10-20', NULL, NULL),
('801', '2018-10-19', '2018-10-20', NULL, NULL),
('802', '2018-10-19', '2018-10-20', NULL, NULL),
('901', '2018-10-19', '2018-10-20', NULL, NULL),
('902', '2018-10-19', '2018-10-20', NULL, NULL),
('1001', '2018-10-19', '2018-10-20', NULL, NULL),
('1002', '2018-10-19', '2018-10-20', NULL, NULL),
('101', '2018-10-26', '2018-10-27', '5bc89e58cb136', '1015bc89e58cb136'),
('102', '2018-10-26', '2018-10-27', '5bc89e84cdac4', '1025bc89e84cdac4'),
('301', '2018-10-26', '2018-10-27', '5bc89ecbc8317', '3015bc89ecbc8317'),
('401', '2018-10-26', '2018-10-27', '5bc89ee4bc260', '4015bc89ee4bc260'),
('501', '2018-10-26', '2018-10-27', '5bc89f2acbe39', '5015bc89f2acbe39'),
('502', '2018-10-26', '2018-10-27', '5bc89f448afcb', '5025bc89f448afcb'),
('601', '2018-10-26', '2018-10-27', '5bc89f767b5b8', '6015bc89f767b5b8'),
('602', '2018-10-26', '2018-10-27', '5bc8a00b1c6c7', '6025bc8a00b1c6c7'),
('302', '2018-10-19', '2018-10-20', NULL, NULL),
('201', '2018-10-26', '2018-10-27', '5bc8a0ab57ff8', '2015bc8a0ab57ff8'),
('701', '2018-10-26', '2018-10-27', '5bc8a0ce55c44', '7015bc8a0ce55c44'),
('702', '2018-10-26', '2018-10-27', '5bc8a12d3732c', '7025bc8a12d3732c'),
('801', '2018-10-26', '2018-10-27', '5bc8a142a8619', '8015bc8a142a8619'),
('901', '2018-10-26', '2018-10-27', '5bc8a15f5cec6', '9015bc8a15f5cec6'),
('1001', '2018-10-26', '2018-10-27', '5bc8a1f3991f3', '10015bc8a1f3991f3'),
('1001', '2018-11-02', '2018-11-04', NULL, NULL),
('101', '2018-11-14', '2018-11-19', '5bc8dadd4e7a0', '1015bc8dadd4e7a0'),
('501', '2018-10-29', '2018-11-05', '5bc8dccf85971', '5015bc8dccf85971');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
