-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 29, 2015 at 07:31 AM
-- Server version: 5.6.21
-- PHP Version: 5.5.19

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
-- Table structure for table `bank`
--

CREATE TABLE IF NOT EXISTS `bank` (
`bank_id` int(11) NOT NULL,
  `bank_code` char(3) NOT NULL,
  `bank_name` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bank`
--

INSERT INTO `bank` (`bank_id`, `bank_code`, `bank_name`) VALUES
(1, '001', 'ธนาคารแห่งประเทศไทย'),
(2, '002', 'ธนาคารกรุงเทพ จากัด (มหาชน)'),
(3, '004', 'ธนาคารกสิกรไทย จากัด (มหาชน)'),
(4, '005', 'ธนาคารเอบีเอ็น แอมโร เอ็น.วี.'),
(5, '006', 'ธนาคารกรุงไทย จากัด (มหาชน)'),
(6, '008', 'ธนาคารเจพี มอร์แกน เชส สาขากรุงเทพฯ'),
(7, '010', 'ธนาคารแห่งโตเกียว-มิตซูบิชิ จก. กรุงเทพฯ'),
(8, '011', 'ธนาคารทหารไทย จากัด (มหาชน)'),
(9, '014', 'ธนาคารไทยพาณิชย์ จากัด (มหาชน)'),
(10, '015', 'ธนาคารนครหลวงไทย จากัด (มหาชน)'),
(11, '017', 'ธนาคารซิตี้แบงค์'),
(12, '018', 'ธนาคารซูมิโตโม มิตซุย แบงกิ้ง คอร์ปอเรชั่น'),
(13, '020', 'ธนาคารสแตนดาร์ด ชาร์เตอร์ด (ไทย) จากัด'),
(14, '022', 'ธนาคารไทยธนาคาร จากัด (มหาชน)'),
(15, '024', 'ธนาคารยูไนเต็ด โอเวอร์ซีส์ (ไทย) จากัด (มหาชน)'),
(16, '025', 'ธนาคารกรุงศรีอยุธยา จากัด (มหาชน)'),
(17, '026', 'ธนาคารเมกะ สากลพาณิชย์ จากัด (มหาชน)'),
(18, '027', 'ธนาคารแห่งอเมริกา เนชั่นแนล แอสโซซิเอชั่น'),
(19, '028', 'ธนาคารคาลิยง'),
(20, '030', 'ธนาคารออมสิน'),
(21, '031', 'ธนาคารฮ่องกงและเซี่ยงไฮ้ จากัด'),
(22, '032', 'ธนาคารดอยซ์แบงก์'),
(23, '033', 'ธนาคารอาคารสงเคราะห์'),
(24, '034', 'ธนาคารเพื่อการเกษตรและสหกรณ์การเกษตร'),
(25, '039', 'ธนาคารมิซูโฮ คอร์เปอเรท สาขากรุงเทพฯ'),
(26, '065', 'ธนาคารธนชาต จากัด (มหาชน)'),
(27, '066', 'ธนาคารอิสลามแห่งประเทศไทย'),
(28, '067', 'ธนาคารทิสโก้ จากัด (มหาชน)'),
(29, '068', 'ธนาคารเอไอจี เพื่อรายย่อย จากัด (มหาชน)'),
(30, '069', 'ธนาคารเกียรตินาคิน จากัด (มหาชน)'),
(31, '070', 'ธนาคารสินเอเชีย จากัด (มหาชน)'),
(32, '071', 'ธนาคารไทยเครดิตเพื่อรายย่อย จากัด (มหาชน)'),
(33, '073', 'ธนาคารแลนด์ แอนด์ เฮ้าส์ จากัด (มหาชน)');

-- --------------------------------------------------------

--
-- Table structure for table `check_paper`
--

CREATE TABLE IF NOT EXISTS `check_paper` (
`check_id` int(11) NOT NULL,
  `user_facebook_id` char(255) NOT NULL,
  `paper_id` int(11) NOT NULL,
  `check_status` enum('accept','conditional_accept','reject') NOT NULL,
  `check_comment` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `check_paper`
--

INSERT INTO `check_paper` (`check_id`, `user_facebook_id`, `paper_id`, `check_status`, `check_comment`) VALUES
(2, '895214977163448', 10, 'accept', 'asdf'),
(4, '921251517908263', 13, 'conditional_accept', 'แก้ไขเล็กน้อย'),
(5, '895214977163448', 13, 'reject', 'แก้มาอีกเยอะเลย');

-- --------------------------------------------------------

--
-- Table structure for table `committee`
--

CREATE TABLE IF NOT EXISTS `committee` (
`comm_id` int(11) NOT NULL,
  `user_facebook_id` char(255) NOT NULL,
  `paper_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `committee`
--

INSERT INTO `committee` (`comm_id`, `user_facebook_id`, `paper_id`) VALUES
(9, '895214977163448', 10),
(10, '921251517908263', 10),
(15, '895214977163448', 13),
(16, '921251517908263', 13);

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
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `paper`
--

INSERT INTO `paper` (`paper_id`, `paper_sex`, `paper_inputName1`, `paper_sex2`, `paper_inputName2`, `paper_inputProjectName_TH`, `paper_inputProjectName_EN`, `paper_group`, `paper_fileProject`, `paper_filePictureProject`, `paper_date`, `user_facebook_id`) VALUES
(10, 'male', 'ss', 'male', 'ss', 'ทดสอบ', 'test 1', 1, 'test_1.docx', 'null', '2014-12-18 10:53:00', '01'),
(13, 'male', 'tete', 'male', 'tete', 'โครงงานสัมนาทางวิชาการของนักศึกษา', 'student symposium', 2, 'student_symposium.doc', 'null', '2014-12-20 22:32:00', '01'),
(17, 'male', 'ไชยวัฒน์', 'female', 'หอมแสง', 'โปรเจ็ค', 'project_test', 2, 'project_test1.docx', 'null', '2015-02-03 16:52:00', '895214977163448');

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
-- Table structure for table `payment`
--

CREATE TABLE IF NOT EXISTS `payment` (
`payment_id` int(11) NOT NULL,
  `user_facebook_id` char(255) NOT NULL,
  `bank_id` int(11) NOT NULL,
  `branch_bank` text NOT NULL,
  `amount` char(10) NOT NULL,
  `send_date` text NOT NULL,
  `payment_fileName` text NOT NULL,
  `status_payment` enum('wait','accep','reject') NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`payment_id`, `user_facebook_id`, `bank_id`, `branch_bank`, `amount`, `send_date`, `payment_fileName`, `status_payment`) VALUES
(5, '895214977163448', 1, 'udru', '2', '27-03-2015', '8952149771634481.jpg', 'wait');

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
  `user_status` enum('supper_admin','admin','committee','student_udru','student_paper','student_public','teacher_public','people_public') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_facebook_id`, `user_fb_name`, `user_first_name`, `user_last_name`, `user_email`, `user_gender`, `user_status`) VALUES
('01', 'te', 'te', 'te', 'te@hotmail.com', 'male', 'admin'),
('02', 'ch', 'ch', 'ch', 'ch@hotmail.com', 'male', 'people_public'),
('03', 'chaiwat', 'chaiwat', 'chaiwat', 'chaiwat@exam.com', 'male', 'supper_admin'),
('04', 'tete_subper', 'tete_subper', 'tete_subper', 'tete@example.com', 'male', 'people_public'),
('05', 'homsang', 'homsang', 'homsang', 'homsang@example.com', 'male', 'committee'),
('895214977163448', 'เต้ ไชยวัฒน์', 'ไชยวัฒน์', 'หอมแสง', 'mynameistecs51@gmail.com', 'male', 'admin'),
('921251517908263', 'ตาน้อย ตาน้อย', 'test', 'test', 'tanoi_chem@hotmail.com', 'female', 'teacher_public');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bank`
--
ALTER TABLE `bank`
 ADD PRIMARY KEY (`bank_id`);

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
-- Indexes for table `payment`
--
ALTER TABLE `payment`
 ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`user_facebook_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bank`
--
ALTER TABLE `bank`
MODIFY `bank_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `check_paper`
--
ALTER TABLE `check_paper`
MODIFY `check_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `committee`
--
ALTER TABLE `committee`
MODIFY `comm_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `paper`
--
ALTER TABLE `paper`
MODIFY `paper_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `paper_group`
--
ALTER TABLE `paper_group`
MODIFY `group_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
