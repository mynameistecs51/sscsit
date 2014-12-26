-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 26, 2014 at 04:54 PM
-- Server version: 5.5.39
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sscsit`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_facebook_id` char(255) NOT NULL,
  `user_fb_name` char(255) NOT NULL,
  `user_first_name` varchar(100) NOT NULL,
  `user_last_name` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_gender` enum('male','female') NOT NULL,
  `user_status` enum('subper_admin','admin','committee','user') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_facebook_id`, `user_fb_name`, `user_first_name`, `user_last_name`, `user_email`, `user_gender`, `user_status`) VALUES
('01', 'te', 'te', 'te', 'te@hotmail.com', 'male', 'admin'),
('02', 'ch', 'ch', 'ch', 'ch@hotmail.com', 'male', 'committee'),
('03', 'chaiwat', 'chaiwat', 'chaiwat', 'chaiwat@exam.com', 'male', 'committee'),
('04', 'tete_subper', 'tete_subper', 'tete_subper', 'tete@example.com', 'male', 'subper_admin'),
('05', 'homsang', 'homsang', 'homsang', 'homsang@example.com', 'male', 'user'),
('895214977163448', 'เต้ ไชยวัฒน์', 'ไชยวัฒน์', 'หอมแสง', 'mynameistecs51@gmail.com', 'male', 'subper_admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`user_facebook_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
