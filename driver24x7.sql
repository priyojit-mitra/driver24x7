-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2017 at 01:17 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `driver24x7`
--

-- --------------------------------------------------------

--
-- Table structure for table `driver_details`
--

CREATE TABLE `driver_details` (
  `dname` varchar(30) NOT NULL,
  `darea` varchar(30) NOT NULL,
  `dmobile` varchar(10) NOT NULL,
  `dlicence` varchar(30) NOT NULL,
  `dyear` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `driver_details`
--

INSERT INTO `driver_details` (`dname`, `darea`, `dmobile`, `dlicence`, `dyear`) VALUES
('Manoj Pandya', 'DELHI', '8563214189', 'DL10234T0', 16),
('Shobhit Agarwal', 'MUMBAI', '7890025648', 'MH78U800', 7),
('Rahul Verma', 'CHENNAI', '9235121416', 'TN1000AK', 5),
('Suresh Majhi', 'CHENNAI', '9879586514', 'TN876AW3R', 9),
('Kunal Sen', 'KOLKATA', '8548989632', 'WB8990K', 12);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `driver_details`
--
ALTER TABLE `driver_details`
  ADD PRIMARY KEY (`dlicence`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
