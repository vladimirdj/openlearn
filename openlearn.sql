-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 09, 2017 at 03:01 AM
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
('Ramy Kamil', '59fda3768bccb', 'contact.sdey@gmail.co', '$2y$10$I2z9mlcitttir8x1oXqvb.508kSVXm0vHVPszyvp4CdBUabBl96pS', '', '', '/var/www/html/open-learning/profile_pictures/picture3.jpg', 'I am a very good boy, you know. very foo'),
('Thomas Jaguar', '59fe0aee0db8d', 'thomas@jaguar.com', '$2y$10$jku1ACArNqamrymluV.NbeZAsPP5c8m5AY7t.1X2RqHw41z.iiEHS', 'https://www.jaguar.com', 'https://twitter.com/jaguar', '/var/www/html/open-learning/profile_pictures/person2.jpg', 'I am the CEO of Jaguar Corp.\r\n\r\nI love passionate people, right? You are passionate too I hope.'),
('Subhadeep Dey', '5a00cf67b3274', 'contact.sdey@gmail.com', '$2y$10$poNKw/x0tFNg8Te6Zw0s2uWj5HliRniERiZrV66gvt7ZSq48T1Ryi', 'https://www.sddey.com', 'https://twitter.com/SDey_96', '/var/www/html/open-learning/profile_pictures/DSC02346 2926895607.jpg', 'Technology enthusiast and a passionate programmer, who loves to teach everybody!'),
('Satyam Tiwari', '5a00d2598fd59', 'huh@hml.com', '$2y$10$QY8J2kosclSXl/omaQpY6OaPO8AL/BCPO.KR1p625nHVvjcK0osV2', 'https://www.google.co.in', 'https://ff.com', '/var/www/html/open-learning/profile_pictures/image32124837974.jpg', 'I am a decent guy. And love music, okay?'),
('Ramanujan Tiwari', '5a00d2b49c6fe', 'contact.sdey@gmail.comm', '$2y$10$r0Nq0/qTL2AdiBn4mChsjOD9btJ9mix.TCflWhT8kO.ifvPdB9/yS', '', '', '/var/www/html/open-learning/profile_pictures/internet1478529562.svg', 'Life is boring, so is you. Understand?'),
('Jammanun', '5a00d2f5efe04', 'jamanu@ul.com', '$2y$10$Hndmu0p6tfZZ5WX6nsadHunVzWiMKSL5JInMoQ9MsbNC6WEQmMxMq', 'http://www.hoo.com', '', '/var/www/html/open-learning/profile_pictures/budget-pc-main-img924667044.png', 'Ksdsdn sdmsnd msdn smdsdcvvvvv');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `message_id` varchar(20) NOT NULL,
  `student_name` varchar(40) NOT NULL,
  `student_email` varchar(70) NOT NULL,
  `student_message` varchar(400) NOT NULL,
  `message_date` datetime NOT NULL,
  `instructor_id` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`message_id`, `student_name`, `student_email`, `student_message`, `message_date`, `instructor_id`) VALUES
('59fde67ba646b', 'dfdf dfdf ', 'ff@i.com', 'dfkndf df df df', '2017-11-04 21:40:35', '59fda3768bccb'),
('59fdea82d493e', 'Suhka Isn', 'sukha@y.com', 'sdshd hrrt rthrr', '2017-11-04 21:57:46', '59fda3768bccb'),
('59ff5647b5027', 'Hi there', 'iams@i.com', 'Hi ther esdsjd sd sd', '2017-11-05 23:49:51', '59fe0aee0db8d'),
('59ff5ccd5c2f2', 'ddff', 'dfd@m.com', 'ddfdf f df', '2017-11-06 00:17:41', '59fe0aee0db8d'),
('59ff5d33b6d56', 'dfddf', 'sdsd@i.com', 'dfdf dfdfdf df df', '2017-11-06 00:19:23', '59fe0aee0db8d'),
('59ff5e49f11e5', 'Shi rhr', 'dfdf@i.co', 'qsdsdsddfdf', '2017-11-06 00:24:01', '59fda3768bccb'),
('5a01bf386b55b', 'Shyamlal Dwivedi', 'shyamlal@di.com', 'Hello, bhai I have a doubt in something. Please help me out. Hi, can you please help meout?\r\n\r\nI need to take admission in IIT.', '2017-11-07 19:42:08', '59fe0aee0db8d'),
('5a01bf5f7d5cb', 'Satyam Tiwari', 'say@i.com', 'Hey, please will you be available for a walk?', '2017-11-07 19:42:47', '59fe0aee0db8d'),
('5a01c7a5b0cfe', 'Subhadeep Dey', 'contact.sdey@gmail.com', 'How are you doing?', '2017-11-07 20:18:05', '59fe0aee0db8d');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `instructor`
--
ALTER TABLE `instructor`
  ADD PRIMARY KEY (`id`,`email`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`message_id`),
  ADD KEY `FK_MESSAGE` (`instructor_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `FK_MESSAGE` FOREIGN KEY (`instructor_id`) REFERENCES `instructor` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
