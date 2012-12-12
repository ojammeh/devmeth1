-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 04, 2012 at 10:09 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `eassignment`
--

-- --------------------------------------------------------

--
-- Table structure for table `assignments`
--

CREATE TABLE IF NOT EXISTS `assignments` (
  `assignment_id` int(11) NOT NULL AUTO_INCREMENT,
  `assignment_name` varchar(50) NOT NULL,
  `lecturer_id` int(8) NOT NULL,
  `desc` varchar(100) DEFAULT NULL,
  `upload_date` datetime NOT NULL,
  `due_date` datetime NOT NULL,
  `file_content` longblob,
  `file_name` varchar(30) DEFAULT NULL,
  `file_type` varchar(30) DEFAULT NULL,
  `file_size` int(15) DEFAULT NULL,
  `course_id` int(10) NOT NULL,
  PRIMARY KEY (`assignment_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `assignments`
--

INSERT INTO `assignments` (`assignment_id`, `assignment_name`, `lecturer_id`, `desc`, `upload_date`, `due_date`, `file_content`, `file_name`, `file_type`, `file_size`, `course_id`) VALUES
(1, 'Practical 1', 1, 'ok', '2012-12-03 00:08:00', '2012-12-20 00:08:00', '', '', '', 0, 1),
(2, '1500 words report on cloud syster', 1, 'ok', '2012-12-03 00:13:00', '2012-12-18 00:13:00', '', '', '', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE IF NOT EXISTS `courses` (
  `course_id` int(11) NOT NULL AUTO_INCREMENT,
  `course_name` varchar(30) NOT NULL,
  `remarks` varchar(70) DEFAULT NULL,
  PRIMARY KEY (`course_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`course_id`, `course_name`, `remarks`) VALUES
(1, 'Dev Meth', 'ok'),
(2, 'Advance Database', 'ok');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `roleID` int(11) NOT NULL AUTO_INCREMENT,
  `role_name` varchar(15) NOT NULL,
  PRIMARY KEY (`roleID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`roleID`, `role_name`) VALUES
(1, 'Lecturer'),
(2, 'Student'),
(3, 'Ext Examiner'),
(4, 'Miti Board');

-- --------------------------------------------------------

--
-- Table structure for table `submit_assignments`
--

CREATE TABLE IF NOT EXISTS `submit_assignments` (
  `submit_id` int(11) NOT NULL AUTO_INCREMENT,
  `assignment_id` int(10) NOT NULL,
  `student_id` int(10) NOT NULL,
  `date_submit` datetime NOT NULL,
  `file_content` longblob,
  `file_name` varchar(50) DEFAULT NULL,
  `file_size` int(15) DEFAULT NULL,
  `file_type` varchar(20) DEFAULT NULL,
  `comment` varchar(70) DEFAULT NULL,
  `desc` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`submit_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `submit_assignments`
--

INSERT INTO `submit_assignments` (`submit_id`, `assignment_id`, `student_id`, `date_submit`, `file_content`, `file_name`, `file_size`, `file_type`, `comment`, `desc`) VALUES
(1, 1, 2, '2012-12-03 00:11:00', '', 'Test file name', 1225, '', 'none its, ok', 'ok desc');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `userID` int(10) NOT NULL AUTO_INCREMENT,
  `user_no` char(10) DEFAULT NULL,
  `first_name` varchar(15) NOT NULL,
  `last_name` varchar(15) NOT NULL,
  `password` varchar(60) NOT NULL,
  `user_role` int(11) NOT NULL,
  `user_email` varchar(30) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`userID`),
  UNIQUE KEY `user_email` (`user_email`),
  UNIQUE KEY `user_no` (`user_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `user_no`, `first_name`, `last_name`, `password`, `user_role`, `user_email`, `status`) VALUES
(1, '21135240', 'Ousman', 'Jammeh', 'jammeh', 1, 'ous.jammeh@gmail.com', 1),
(2, '21135200', 'Nvunda', 'Smith', 'test', 2, 'ous.jammeh@hotmail.com', 1);
