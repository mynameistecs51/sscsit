-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
<<<<<<< HEAD
-- Host: localhost
-- Generation Time: Dec 24, 2014 at 07:16 AM
-- Server version: 5.6.21
-- PHP Version: 5.5.19
=======
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2014 at 03:54 PM
-- Server version: 5.5.39
-- PHP Version: 5.4.31
>>>>>>> a04a35c3a00eb3bee1927feaea5015c6d87a32ca

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
-- Table structure for table `check_paper`
--

CREATE TABLE IF NOT EXISTS `check_paper` (
`check_id` int(11) NOT NULL,
  `user_facebook_id` char(255) NOT NULL,
  `paper_id` int(11) NOT NULL,
  `check_status` enum('ผ่าน','ผ่านแบบมีเงื่อนไข','ไม่ผ่าน') NOT NULL,
<<<<<<< HEAD
  `check_comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
=======
  `check_commetn` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
>>>>>>> a04a35c3a00eb3bee1927feaea5015c6d87a32ca

-- --------------------------------------------------------

--
-- Table structure for table `committee`
--

CREATE TABLE IF NOT EXISTS `committee` (
`comm_id` int(11) NOT NULL,
  `user_facebook_id` char(255) NOT NULL,
  `paper_id` int(11) NOT NULL
<<<<<<< HEAD
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
=======
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;
>>>>>>> a04a35c3a00eb3bee1927feaea5015c6d87a32ca

--
-- Dumping data for table `committee`
--

INSERT INTO `committee` (`comm_id`, `user_facebook_id`, `paper_id`) VALUES
(1, '02', 10),
(2, '02', 11),
(5, '03', 10);

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
  `user_facebook_id` char(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `paper`
--

INSERT INTO `paper` (`paper_id`, `paper_sex`, `paper_inputName1`, `paper_sex2`, `paper_inputName2`, `paper_inputProjectName_TH`, `paper_inputProjectName_EN`, `paper_group`, `paper_fileProject`, `paper_filePictureProject`, `paper_date`, `user_facebook_id`) VALUES
(10, 'male', 'ss', 'male', 'ss', 'ทดสอบ', 'test 1', 1, 'test_1.docx', 'null', '2014-12-18 10:53:00', '01'),
(11, 'male', 'ไชยวัฒน์', 'male', 'หอมแสง', 'โครงงาน', 'project', 2, 'project_.doc', 'null', '2014-12-19 13:13:00', '01'),
(13, 'male', 'tete', 'male', 'tete', 'โครงงานสัมนาทางวิชาการของนักศึกษา', 'student symposium', 2, 'student_symposium.doc', 'null', '2014-12-20 22:32:00', '01');

-- --------------------------------------------------------

--
-- Table structure for table `paper_group`
--

CREATE TABLE IF NOT EXISTS `paper_group` (
`group_id` int(11) NOT NULL,
  `group_name` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `paper_group`
--

INSERT INTO `paper_group` (`group_id`, `group_name`) VALUES
(1, 'โปรแกรมเพื่อความบันเทิง'),
(2, 'โปรแกรมส่งเสริมการเรียนรู้'),
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
  `user_name` char(255) NOT NULL,
  `user_first_name` varchar(100) NOT NULL,
  `user_last_name` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_gender` enum('male','female') NOT NULL,
  `user_status` enum('subper_admin','admin','committee','user') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_facebook_id`, `user_fb_name`, `user_name`, `user_first_name`, `user_last_name`, `user_email`, `user_gender`, `user_status`) VALUES
('01', 'te', '', 'te', 'te', 'te@hotmail.com', 'male', 'admin'),
('02', 'ch', '', 'ch', 'ch', 'ch@hotmail.com', 'male', 'committee'),
('03', 'chaiwat', '', 'chaiwat', 'chaiwat', 'chaiwat@exam.com', 'male', 'committee'),
('04', 'tete_subper', 'tete_subper', 'tete_subper', 'tete_subper', 'tete@example.com', 'male', 'subper_admin'),
('05', 'homsang', 'homsang', 'homsang', 'homsang', 'homsang@example.com', 'male', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `check_paper`
--
ALTER TABLE `check_paper`
 ADD PRIMARY KEY (`check_id`);

--
-- Indexes for table `committee`
--
ALTER TABLE `committee`
 ADD PRIMARY KEY (`comm_id`);

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
-- AUTO_INCREMENT for table `check_paper`
--
ALTER TABLE `check_paper`
MODIFY `check_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `committee`
--
ALTER TABLE `committee`
MODIFY `comm_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `paper`
--
ALTER TABLE `paper`
MODIFY `paper_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `paper_group`
--
ALTER TABLE `paper_group`
MODIFY `group_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
