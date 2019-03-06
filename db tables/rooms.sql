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
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `category` varchar(20) NOT NULL,
  `rent` varchar(12) NOT NULL,
  `roomid` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`category`, `rent`, `roomid`) VALUES
('IMPERIAL', '35000', '1001'),
('IMPERIAL', '35000', '1002'),
('STANDARD', '10000', '101'),
('STANDARD', '10000', '102'),
('STANDARD', '10000', '201'),
('STANDARD', '10000', '202'),
('DELUXE', '15000', '301'),
('DELUXE', '15000', '302'),
('DELUXE', '15000', '401'),
('DELUXE', '15000', '402'),
('EXECUTIVE', '20000', '501'),
('EXECUTIVE', '20000', '502'),
('EXECUTIVE', '20000', '601'),
('EXECUTIVE', '20000', '602'),
('PRESIDENTIAL', '25000', '701'),
('PRESIDENTIAL', '25000', '702'),
('PRESIDENTIAL', '25000', '801'),
('PRESIDENTIAL', '25000', '802'),
('ROYAL', '30000', '901'),
('ROYAL', '30000', '902');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`roomid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
