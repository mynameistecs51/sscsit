-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2014 at 05:18 PM
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
-- Table structure for table `paper`
--

CREATE TABLE IF NOT EXISTS `paper` (
`paper_id` int(11) NOT NULL,
  `paper_sex` enum('male','female') NOT NULL,
  `paper_inputName1` char(100) NOT NULL,
  `paper_sex2` enum('male','female') NOT NULL,
  `paper_inputName2` char(100) NOT NULL,
  `paper_inputProjectName_TH` char(100) NOT NULL,
  `paper_inputProjectName_EN` char(100) NOT NULL,
  `paper_group` int(9) NOT NULL,
  `paper_fileProject` text NOT NULL,
  `paper_filePictureProject` text NOT NULL,
  `paper_date` datetime NOT NULL,
  `paper_user` int(10) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `paper`
--

INSERT INTO `paper` (`paper_id`, `paper_sex`, `paper_inputName1`, `paper_sex2`, `paper_inputName2`, `paper_inputProjectName_TH`, `paper_inputProjectName_EN`, `paper_group`, `paper_fileProject`, `paper_filePictureProject`, `paper_date`, `paper_user`) VALUES
(3, 'female', 'te', 'female', 'te te', 'ทดสอบ', 'test 1', 1, 'test 1', 'test 1', '2014-12-16 17:26:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `paper_group`
--

CREATE TABLE IF NOT EXISTS `paper_group` (
`group_id` int(11) NOT NULL,
  `group_name` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `paper_group`
--

INSERT INTO `paper_group` (`group_id`, `group_name`) VALUES
(1, 'โปรแกรมเพื่อความบันเทิง'),
(2, 'โปรแกรมส่งเสริมการเรียนรู้'),
(3, 'โปรแกรมเพื่อความบันเทิง'),
(4, 'โปรแกรมส่งเสริมการเรียนรู้'),
(5, 'โปรแกรมช่วยเหลือคนพิการและผู้สูงอายุ'),
(6, 'โปรแกรมเพื่องานพัฒนาด้านวิทยาศาสตร์และเทคโนโลยี'),
(7, 'โปรแกรมเพื่อประยุกต์ใช้งานสำหรับลินุกซ์');

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
  `user_status` enum('subper_admin','admin','user') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `paper`
--
ALTER TABLE `paper`
 ADD PRIMARY KEY (`paper_id`);

--
-- Indexes for table `paper_group`
--
ALTER TABLE `paper_group`
 ADD PRIMARY KEY (`group_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`user_facebook_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `paper`
--
ALTER TABLE `paper`
MODIFY `paper_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `paper_group`
--
ALTER TABLE `paper_group`
MODIFY `group_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
