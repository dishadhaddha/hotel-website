-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 18, 2018 at 09:24 PM
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
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `name` varchar(50) NOT NULL,
  `roomid` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `userid` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`name`, `roomid`, `contact`, `category`, `email`, `userid`) VALUES
('Prachi Dalal', '101', '8080666864', 'STANDARD', 'prachidalal3@gmail.com', '5bc89e58cb136'),
('Mahima Dalal', '102', '8080773864', 'STANDARD', 'mahidalal@gmail.com', '5bc89e84cdac4'),
('Manan Sharma', '301', '9999754123', 'DELUXE', 'manan@gmail.com', '5bc89ecbc8317'),
('Manvi Sharma', '401', '8099754145', 'DELUXE', 'manvi@gmail.com', '5bc89ee4bc260'),
('Yash Jain', '501', '999567147', 'EXECUTIVE', 'yash@gmail.com', '5bc89f2acbe39'),
('Neha Sharma', '502', '7977123789', 'EXECUTIVE', 'neha@gmail.com', '5bc89f448afcb'),
('Akriti Sharma', '601', '7977789147', 'EXECUTIVE', 'akriti@gmail.com', '5bc89f767b5b8'),
('Shivani Desai', '602', '7899410297', 'EXECUTIVE', 'shivani@gmail.com', '5bc8a00b1c6c7'),
('Grishma Desai', '201', '899741562', 'STANDARD', 'grishma@gmail.com', '5bc8a0ab57ff8'),
('Ankit Shah', '701', '855123789', 'PRESIDENTIAL', 'ankit@yahoo.com ', '5bc8a0ce55c44'),
('Ankita Bani', '702', '855123789', 'PRESIDENTIAL', 'ankita@gmail.com', '5bc8a12d3732c'),
('Rrutuma Lavana', '801', '9224852799', 'PRESIDENTIAL', 'rrutum@gmail.com', '5bc8a142a8619'),
('Sampruti Sheikh', '901', '8024889799', 'ROYAL', 'sampruti@gmail.com', '5bc8a15f5cec6'),
('Piyush Sancheti', '1001', '8080844474', 'IMPERIAL', 'piyush@gmail.com', '5bc8a1f3991f3'),
('Disha Dhaddha', '101', '9323167455', 'STANDARD', 'disha@anc.com', '5bc8dadd4e7a0'),
('Ena Dhaddha', '501', '9874056891', 'EXECUTIVE', 'ena@gmail.com', '5bc8dccf85971');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
