-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 04, 2017 at 06:06 PM
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
  `id` varchar(400) NOT NULL,
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

INSERT INTO `instructor` (`name`, `id`, `email`, `password`, `website`, `twitter`, `picture`, `about`) VALUES
('Subhadeep Dey', '2feeefg', 'contact.sdey@gmail.com', 'df4eeeeee442', 'https://google.com', 'https://twitter.com', '/var/www/ff.jpg', 'I am a very good boy'),
('Subhadeep Dey', '59fda3768bccb', 'contact.sdey@gmail.co', '$2y$10$I2z9mlcitttir8x1oXqvb.508kSVXm0vHVPszyvp4CdBUabBl96pS', '', '', '/var/www/html/open-learning/profile_pictures/sidebar-21296047125.jpg', 'I am a very good boy, you know. very foo');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `message_id` int(11) NOT NULL,
  `student_name` varchar(40) NOT NULL,
  `student_email` varchar(70) NOT NULL,
  `student_message` varchar(400) NOT NULL,
  `message_date` datetime NOT NULL,
  `instructor_email` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `instructor`
--
ALTER TABLE `instructor`
  ADD PRIMARY KEY (`id`,`email`),
  ADD KEY `inst_index` (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`message_id`),
  ADD KEY `FK_MESSAGE` (`instructor_email`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `FK_MESSAGE` FOREIGN KEY (`instructor_email`) REFERENCES `instructor` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
