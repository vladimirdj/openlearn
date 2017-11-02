-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 02, 2017 at 06:35 AM
-- Server version: 5.7.20-0ubuntu0.16.04.1
-- PHP Version: 7.0.22-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `openlearn`
--

-- --------------------------------------------------------

--
-- Table structure for table `instructor`
--

CREATE TABLE `instructor` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `website` varchar(255) DEFAULT NULL,
  `twitter` varchar(100) DEFAULT NULL,
  `picture` varchar(400) NOT NULL,
  `about` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `instructor`
--

INSERT INTO `instructor` (`name`, `email`, `password`, `website`, `twitter`, `picture`, `about`) VALUES
('Subhadeep Dey', 'ddsd@i.com', '$2y$10$ndRZspx4HORB99NC5JsS7u0NWFzTuS459VFky/0BZIUgxNFZJmEgm', 'http://www.sddey.com', 'https://twitter.com/SDey_96', '/var/www/html/open-learning/profile_pictures/895948369.', 'ssssssssssssssssssssss ffdff               ggggggggggggggg'),
('Subhadeep', 'dey@i.com', '$2y$10$sAeq1tFABVLU.hNAukmD9.OHT.aqYPl.SOD1C8iiWJhPSLm.Hp/9C', 'http://www.sddey.com', 'https://twitter.com/SDey_96', '', 'Hi there Hi there Hi there Hi there Hi there Hi there Hi there Hi there Hi there Hi there Hi there Hi there Hi there Hi there Hi there Hi there Hi there Hi there '),
('SUbhadeep Dey', 'ffdf@i.comm', '$2y$10$I4kwQ4bnTMbTDSMWwUj0fO5VNtQ4sl.kPNZBXYysYAMtxhz6C5R8q', 'http://www.sddey.com', 'https://twitter.com/SDey_96', '', 'hi there hi there hi there hi there hi there hi there hi there hi there hi there hi there hi there hi there hi there hi there hi there hi there hi there hi there hi there hi there hi there hi there hi there hi there hi there hi there hi there hi there hi '),
('Subhadeep Dey', 'sdey96@outlook.com', '$2y$10$JG0I3icAf2kxKjFe1OOxp.Tp03gUld5Jl0zicy3elztRCLYGVmK.y', 'http://www.sddey.com', 'https://twitter.com/SDey_96', '', 'I am a very good boy. What about you?'),
('sDsdsdsd', 'sdsd@i.commd', '$2y$10$AxwEMVQyaJ8pxee0k/1kcuXWC/8APb.7ehJU2iOEAhnvEuiAC3ziq', 'http://www.sddey.com', 'https://twitter.com/SDey_96', '', 'fffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffff');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `instructor`
--
ALTER TABLE `instructor`
  ADD PRIMARY KEY (`email`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
