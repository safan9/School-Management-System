-- phpMyAdmin SQL Dump
-- version 2.11.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 11, 2019 at 08:51 AM
-- Server version: 5.0.51
-- PHP Version: 5.2.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `pro_sms`
--

-- --------------------------------------------------------

--
-- Table structure for table `academin_year_mst`
--

CREATE TABLE `academin_year_mst` (
  `year_id` int(11) NOT NULL auto_increment,
  `year` varchar(15) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY  (`year_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `academin_year_mst`
--

INSERT INTO `academin_year_mst` (`year_id`, `year`, `start_date`, `end_date`, `status`) VALUES
(1, '2019/20', '2019-06-30', '2020-04-30', 'active'),
(2, '2020/21', '2020-06-05', '2021-04-30', 'inactive'),
(3, '2021/22', '2021-06-01', '2022-04-30', 'inactive'),
(4, '2022/23', '2022-06-05', '2023-04-30', 'inactive'),
(5, '2023/24', '2023-01-01', '2024-04-30', 'inactive'),
(6, '2024/25', '2024-04-01', '2025-03-30', 'inactive');

-- --------------------------------------------------------

--
-- Table structure for table `admin_gallery_mst`
--

CREATE TABLE `admin_gallery_mst` (
  `image_id` int(11) NOT NULL auto_increment,
  `image_name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY  (`image_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `admin_gallery_mst`
--

INSERT INTO `admin_gallery_mst` (`image_id`, `image_name`, `image`, `date`) VALUES
(3, 'slide-03', 'images/web/slide-03.jpg', '2019-04-09'),
(4, 'welcome', 'images/web/welcome.jpg', '2019-04-09'),
(6, 'counter-icon-03', 'images/web/counter-icon-03.png', '2019-04-09'),
(7, 'partner-04', 'images/web/partner-04.jpg', '2019-04-09');

-- --------------------------------------------------------

--
-- Table structure for table `admin_mst`
--

CREATE TABLE `admin_mst` (
  `admin_id` int(11) NOT NULL auto_increment,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `mname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `mobile_no` varchar(20) NOT NULL,
  `qualification` varchar(100) NOT NULL,
  `dob` date NOT NULL COMMENT 'Date of Birth',
  `doj` date NOT NULL COMMENT 'Date of Joining',
  PRIMARY KEY  (`admin_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin_mst`
--

INSERT INTO `admin_mst` (`admin_id`, `username`, `password`, `fname`, `mname`, `lname`, `gender`, `email`, `address`, `mobile_no`, `qualification`, `dob`, `doj`) VALUES
(1, 'Afridi', 'madrid@100', 'Afridi', 'Abid', 'Lakdawala', 'Male', 'afridi7@gmail.com', 'President Park', '9265664834', '12th Science, BCA', '1999-02-10', '2019-02-01');

-- --------------------------------------------------------

--
-- Table structure for table `attendance_mst`
--

CREATE TABLE `attendance_mst` (
  `attendance_id` int(11) NOT NULL auto_increment,
  `student_id` int(11) NOT NULL,
  `division_id` int(11) NOT NULL,
  `month_id` int(11) NOT NULL,
  `academic_year_id` int(11) NOT NULL,
  `entry_date` date NOT NULL,
  `present_days` int(11) NOT NULL,
  `absent_days` int(11) NOT NULL,
  PRIMARY KEY  (`attendance_id`),
  KEY `student_id` (`student_id`),
  KEY `division_id` (`division_id`),
  KEY `month_id` (`month_id`),
  KEY `academic_year_id` (`academic_year_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `attendance_mst`
--

INSERT INTO `attendance_mst` (`attendance_id`, `student_id`, `division_id`, `month_id`, `academic_year_id`, `entry_date`, `present_days`, `absent_days`) VALUES
(1, 17, 18, 3, 1, '2019-03-19', 29, 2),
(2, 27, 18, 3, 1, '2019-03-19', 25, 6),
(4, 27, 18, 1, 1, '2019-03-19', 28, 3),
(5, 17, 18, 2, 1, '2019-03-20', 28, 0),
(6, 17, 18, 4, 1, '2019-03-25', 25, 6),
(7, 17, 18, 1, 1, '2019-03-29', 28, 3),
(8, 16, 11, 1, 1, '2019-03-29', 28, 3),
(10, 16, 11, 3, 1, '2019-04-08', 29, 2),
(11, 16, 11, 8, 1, '2019-04-09', 31, 0),
(12, 22, 11, 8, 1, '2019-04-09', 30, 1),
(13, 28, 11, 8, 1, '2019-04-09', 29, 2),
(14, 25, 16, 1, 1, '2019-04-10', 30, 1);

-- --------------------------------------------------------

--
-- Table structure for table `cast_mst`
--

CREATE TABLE `cast_mst` (
  `cast_id` int(11) NOT NULL auto_increment,
  `cast_name` varchar(20) NOT NULL,
  PRIMARY KEY  (`cast_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `cast_mst`
--

INSERT INTO `cast_mst` (`cast_id`, `cast_name`) VALUES
(1, 'Muslim'),
(2, 'Hindu'),
(3, 'Shikh'),
(4, 'Christian');

-- --------------------------------------------------------

--
-- Table structure for table `city_mst`
--

CREATE TABLE `city_mst` (
  `city_id` int(11) NOT NULL auto_increment,
  `city_name` varchar(25) NOT NULL,
  PRIMARY KEY  (`city_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `city_mst`
--

INSERT INTO `city_mst` (`city_id`, `city_name`) VALUES
(1, 'Bharuch'),
(2, 'Surat'),
(3, 'Vadodara'),
(4, 'Ahmedabad');

-- --------------------------------------------------------

--
-- Table structure for table `class_mst`
--

CREATE TABLE `class_mst` (
  `class_id` int(11) NOT NULL auto_increment,
  `class_name` varchar(20) NOT NULL,
  PRIMARY KEY  (`class_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `class_mst`
--

INSERT INTO `class_mst` (`class_id`, `class_name`) VALUES
(1, 'Class One'),
(2, 'Class Two'),
(4, 'Class Three'),
(5, 'Class Four');

-- --------------------------------------------------------

--
-- Table structure for table `division_mst`
--

CREATE TABLE `division_mst` (
  `division_id` int(11) NOT NULL auto_increment,
  `division_name` varchar(20) NOT NULL,
  `room_no` int(11) NOT NULL,
  `staff_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  PRIMARY KEY  (`division_id`),
  KEY `class_id` (`class_id`),
  KEY `staff_id` (`staff_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `division_mst`
--

INSERT INTO `division_mst` (`division_id`, `division_name`, `room_no`, `staff_id`, `class_id`) VALUES
(8, 'Class One A', 10, 15, 1),
(11, 'Class Two B', 13, 9, 2),
(12, 'Class Three A', 14, 14, 4),
(16, 'Class One B', 15, 12, 1),
(18, 'Class Three B', 20, 13, 4),
(19, 'Class Two A', 155, 10, 2),
(20, 'class three b', 15, 19, 4);

-- --------------------------------------------------------

--
-- Table structure for table `fees_mst`
--

CREATE TABLE `fees_mst` (
  `fee_id` int(11) NOT NULL auto_increment,
  `student_id` int(11) NOT NULL,
  `division_id` int(11) NOT NULL,
  `academic_year_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `tuition_fee` int(11) NOT NULL,
  `exam_fee` int(11) NOT NULL,
  `lab_fee` int(11) NOT NULL,
  `sports_fee` int(11) NOT NULL,
  `total_fee` int(11) NOT NULL,
  PRIMARY KEY  (`fee_id`),
  KEY `student_id` (`student_id`),
  KEY `division_id` (`division_id`),
  KEY `academic_year_id` (`academic_year_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `fees_mst`
--

INSERT INTO `fees_mst` (`fee_id`, `student_id`, `division_id`, `academic_year_id`, `date`, `tuition_fee`, `exam_fee`, `lab_fee`, `sports_fee`, `total_fee`) VALUES
(2, 28, 11, 1, '2019-04-04', 150, 50, 20, 20, 240),
(3, 16, 11, 1, '2019-04-04', 150, 50, 20, 20, 240),
(4, 25, 16, 1, '2019-04-04', 100, 50, 20, 20, 190),
(6, 22, 11, 1, '2019-04-09', 150, 50, 20, 20, 240),
(7, 29, 11, 1, '2019-04-11', 150, 50, 20, 20, 240);

-- --------------------------------------------------------

--
-- Table structure for table `fee_structure_mst`
--

CREATE TABLE `fee_structure_mst` (
  `fs_id` int(11) NOT NULL auto_increment,
  `tuition_fee` int(11) NOT NULL,
  `exam_fee` int(11) NOT NULL,
  `lab_fee` int(11) NOT NULL,
  `sports_fee` int(11) NOT NULL,
  `total_fee` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  PRIMARY KEY  (`fs_id`),
  KEY `class_id` (`class_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `fee_structure_mst`
--

INSERT INTO `fee_structure_mst` (`fs_id`, `tuition_fee`, `exam_fee`, `lab_fee`, `sports_fee`, `total_fee`, `class_id`) VALUES
(2, 100, 50, 20, 20, 190, 1),
(3, 150, 50, 20, 20, 240, 2),
(4, 150, 50, 40, 20, 260, 4);

-- --------------------------------------------------------

--
-- Table structure for table `gallery_mst`
--

CREATE TABLE `gallery_mst` (
  `image_id` int(11) NOT NULL auto_increment,
  `image_name` varchar(255) NOT NULL,
  `student_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY  (`image_id`),
  KEY `student_id` (`student_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `gallery_mst`
--

INSERT INTO `gallery_mst` (`image_id`, `image_name`, `student_id`, `image`, `date`) VALUES
(9, 'events-06', 16, 'images/web/events-06.jpg', '2019-03-30'),
(11, 'events-05', 16, 'images/web/events-05.jpg', '2019-03-30'),
(14, 'events-01', 16, 'images/web/events-01.jpg', '2019-03-30'),
(15, 'up-event-01', 16, 'images/web/up-event-01.jpg', '2019-03-30'),
(16, 'up-event-02', 16, 'images/web/up-event-02.jpg', '2019-03-30'),
(17, 'recent-work-03', 16, 'images/web/recent-work-03.jpg', '2019-03-30'),
(18, 'recent-work-06', 16, 'images/web/recent-work-06.jpg', '2019-03-30'),
(20, 'courses-demo2-04', 22, 'images/web/courses-demo2-04.jpg', '2019-03-30'),
(21, 'slide-04', 22, 'images/web/slide-04.jpg', '2019-03-30'),
(22, 'courses-demo2-02', 22, 'images/web/courses-demo2-02.jpg', '2019-03-30');

-- --------------------------------------------------------

--
-- Table structure for table `homework_mst`
--

CREATE TABLE `homework_mst` (
  `homework_id` int(11) NOT NULL auto_increment,
  `homework` varchar(255) NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `staff_id` int(11) NOT NULL,
  PRIMARY KEY  (`homework_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `homework_mst`
--

INSERT INTO `homework_mst` (`homework_id`, `homework`, `file_name`, `date`, `staff_id`) VALUES
(3, 'homework/6 jQuery CSS.pdf', '6 jQuery CSS', '2019-04-09', 9),
(4, 'homework/5 jQuery HTML.pdf', '5 jQuery HTML', '2019-04-09', 9),
(6, 'homework/7 Traversing.pdf', '7 Traversing', '2019-04-09', 9),
(7, 'homework/php_tutorial.pdf', 'php_tutorial', '2019-04-09', 9),
(8, 'homework/PHPNotesForProfessionals.pdf', 'PHPNotesForProfessionals', '2019-04-09', 9);

-- --------------------------------------------------------

--
-- Table structure for table `month_mst`
--

CREATE TABLE `month_mst` (
  `month_id` int(11) NOT NULL auto_increment,
  `month_name` varchar(20) NOT NULL,
  PRIMARY KEY  (`month_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `month_mst`
--

INSERT INTO `month_mst` (`month_id`, `month_name`) VALUES
(1, 'January'),
(2, 'February'),
(3, 'March'),
(4, 'April'),
(5, 'May'),
(6, 'June'),
(7, 'July'),
(8, 'August'),
(9, 'September'),
(10, 'October'),
(11, 'November'),
(12, 'December');

-- --------------------------------------------------------

--
-- Table structure for table `notification_mst`
--

CREATE TABLE `notification_mst` (
  `notification_id` int(11) NOT NULL auto_increment,
  `message` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `from` varchar(20) NOT NULL COMMENT 'sender',
  `to` varchar(20) NOT NULL COMMENT 'receiver',
  PRIMARY KEY  (`notification_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Dumping data for table `notification_mst`
--

INSERT INTO `notification_mst` (`notification_id`, `message`, `date`, `from`, `to`) VALUES
(1, 'Hello', '2019-03-08', 'Admin[Afridi]', 'student'),
(2, 'Tomorrow will be holiday', '2019-03-08', 'Admin[Afridi]', 'staff'),
(3, 'Vamos Students', '2019-03-08', 'Admin[Afridi]', 'staff'),
(4, 'Hola	fellow teachers', '2019-03-08', 'Admin[Afridi]', 'staff'),
(5, 'Best of luck from exams', '2019-03-08', 'Admin[Afridi]', 'student'),
(6, 'Today afternoon is meeting', '2019-03-08', 'Admin[Afridi]', 'staff'),
(7, 'hello', '2019-03-08', 'Admin[Afridi]', 'student'),
(8, 'Salary is credited to your accounts', '2019-03-08', 'Admin[Afridi]', 'staff'),
(9, 'Exams result is on website', '2019-03-08', 'Admin[Afridi]', 'student'),
(10, 'Attendance is now online', '2019-03-08', 'Admin[Afridi]', 'student'),
(11, 'Please update marks of exams', '2019-03-08', 'Admin[Afridi]', 'staff'),
(12, 'Happy vacations', '2019-03-08', 'Admin[Afridi]', 'student'),
(14, 'hello teachers welcome to our school. we are glad to have such a talented teachers and we expect your hardwork and dedication towards our school. thank you.', '2019-03-09', 'Admin[Afridi]', 'staff'),
(15, 'Students, Your extra classes will be starting from tomorrow morning', '2019-03-09', 'Staff[Neymar Junior]', 'student'),
(16, 'Tomorrow you will have to submit tutorials', '2019-03-12', 'Staff[Georgina ]', 'student'),
(17, 'This is Test', '2019-03-12', 'Staff[Georgina]', 'student'),
(18, 'Tomorrow will be a seminar on IT Technology', '2019-03-13', 'Admin[Afridi]', 'staff'),
(19, 'On 5th september  we will celebrate teachers day.', '2019-03-13', 'Admin[Afridi]', 'student'),
(20, 'Hello fellow teachers', '2019-03-13', 'Admin[Afridi]', 'staff'),
(21, 'hello students', '2019-03-13', 'Staff[Georgina]', 'student'),
(22, 'inform all the students that we are giving the big holiday on the occasion of christmas and we are also conducting some interesting stage program.', '2019-03-24', 'Admin[Afridi]', 'staff'),
(23, 'Today is Project Internal exams. Best of luck', '2019-03-25', 'Staff[Cristiano]', 'student'),
(24, 'Hello students', '2019-03-25', 'Staff[Cristiano]', 'student'),
(25, 'Heeloo', '2019-03-25', 'Admin[Afridi]', 'staff'),
(26, 'hi students', '2019-03-25', 'Staff[Neymar]', 'student'),
(27, 'helloo', '2019-04-02', 'Staff[Cristiano]', 'student'),
(28, 'hello students i am new faculty to this school.', '2019-04-08', 'Staff[Cristiano]', 'student'),
(29, 'my name is cristiano ronaldo and i am your new teacher for sports.', '2019-04-08', 'Staff[Cristiano]', 'student'),
(30, 'At this weekend we have arranged a football match between Class four and class three. so arrange the players ASAP', '2019-04-08', 'Admin[Afridi]', 'student'),
(31, 'At this weekend we have arranged a football match', '2019-04-08', 'Admin[Afridi]', 'student'),
(32, 'Homework has been uploaded.Check the homework page on website.', '2019-04-09', 'Staff[Cristiano]', 'student');

-- --------------------------------------------------------

--
-- Table structure for table `result_mst`
--

CREATE TABLE `result_mst` (
  `result_id` int(11) NOT NULL auto_increment,
  `student_id` int(11) NOT NULL,
  `division_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `academic_year_id` int(11) NOT NULL,
  `entry_date` date NOT NULL,
  `marks` int(11) NOT NULL,
  PRIMARY KEY  (`result_id`),
  KEY `student_id` (`student_id`),
  KEY `division_id` (`division_id`),
  KEY `subject_id` (`subject_id`),
  KEY `academic_year_id` (`academic_year_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `result_mst`
--

INSERT INTO `result_mst` (`result_id`, `student_id`, `division_id`, `subject_id`, `academic_year_id`, `entry_date`, `marks`) VALUES
(4, 17, 18, 6, 1, '2019-03-16', 65),
(5, 17, 18, 7, 1, '2019-03-16', 35),
(6, 17, 18, 8, 1, '2019-03-16', 75),
(7, 16, 11, 9, 1, '2019-03-18', 45),
(8, 16, 11, 10, 1, '2019-03-18', 40),
(9, 16, 11, 11, 1, '2019-03-18', 24),
(17, 27, 18, 6, 1, '2019-03-29', 35),
(18, 27, 18, 7, 1, '2019-03-29', 27),
(19, 27, 18, 8, 1, '2019-03-29', 25),
(20, 22, 11, 9, 1, '2019-04-08', 40),
(21, 22, 11, 10, 1, '2019-04-08', 28),
(22, 22, 11, 11, 1, '2019-04-08', 35),
(23, 22, 11, 16, 1, '2019-04-08', 50),
(24, 25, 16, 1, 1, '2019-04-10', 40),
(25, 25, 16, 3, 1, '2019-04-10', 45),
(26, 25, 16, 4, 1, '2019-04-10', 65),
(27, 25, 16, 5, 1, '2019-04-10', 70),
(28, 25, 16, 15, 1, '2019-04-10', 85);

-- --------------------------------------------------------

--
-- Table structure for table `staff_mst`
--

CREATE TABLE `staff_mst` (
  `staff_id` int(11) NOT NULL auto_increment,
  `first_name` varchar(50) NOT NULL,
  `middle_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `designation` varchar(50) NOT NULL,
  `qualification` varchar(50) NOT NULL,
  `past_experience` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `mobile_no` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `salary` int(11) NOT NULL,
  `doj` date NOT NULL COMMENT 'Date of joining',
  `dob` date NOT NULL,
  `isactive` varchar(20) NOT NULL,
  `photo` varchar(50) NOT NULL,
  PRIMARY KEY  (`staff_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `staff_mst`
--

INSERT INTO `staff_mst` (`staff_id`, `first_name`, `middle_name`, `last_name`, `gender`, `designation`, `qualification`, `past_experience`, `address`, `mobile_no`, `email`, `password`, `salary`, `doj`, `dob`, `isactive`, `photo`) VALUES
(9, 'Cristiano', 'Ronaldo', 'Aviero', 'male', 'Assistant', 'Bca, 12th Commerce', '4 years in iqra', 'Bharuch', '9265664834', 'cristiano@gmail.com', 'cr712345', 90000, '2008-02-05', '1985-02-05', 'true', 'uploads/teachar-02.jpg'),
(10, 'Lionel', 'Andreas', 'Messi', 'male', 'Assistant Professor', 'MCA, BCA', '5 years in eTech', 'Barcelona', '7202054373', 'messi@gmail.com', '12345678', 50000, '2008-06-21', '1987-06-06', 'false', 'uploads/teachar-01.jpg'),
(11, 'Asensio', 'Alexis ', 'Marco', 'male', '4 years in BCA', 'MSC IT', '2 years Cuting tech', 'Palej', '9265664798', 'asensio@gmail.com', '', 20500, '2017-04-09', '1995-02-06', 'false', 'uploads/teachar-04.jpg'),
(12, 'Georgina', 'Geoamy', 'Rodriguez', 'female', 'Asst. Professor', 'MSC IT, BSC IT', '4 years in iqra', 'Aamod', '7365664892', 'geo@gmail.com', '12345678', 20000, '2017-08-03', '1995-09-05', 'true', 'uploads/teachar-03.jpg'),
(13, 'Neymar', 'Dasilva', 'Junior', 'male', 'Assistant Professor', 'MSC IT, BSC IT', '5 years in eTech', 'Surat', '9356489956', 'Njr@gmail.com', '12345678', 25000, '2015-05-19', '1991-02-05', 'true', 'uploads/teachar-05.jpg'),
(14, 'mbappe', 'kylian', 'lottin', 'male', 'Asst. Professor', 'BSC IT, MSC IT', '5 years in eTech', 'Kahan', '9568993654', 'ssh@gmail.com', '', 70000, '2017-05-04', '1997-02-05', 'false', 'uploads/teachar-03.jpg'),
(15, 'Buffon', 'gianluigi ', 'Andreas', 'male', 'Goalkeeper', '5 years PSG', '19 years juventus', 'Paris', '9265664834', 'buffon@gmail.com', '', 50000, '2018-09-08', '1985-05-19', 'false', 'uploads/teachar-01.jpg'),
(16, 'Maarkc', 'Andre', 'Terstegen', 'male', 'Teacher', 'MA ,B.ed', '5 years in eTech', 'Barcelona', '7202054373', 'stegen@gmail.com', '', 80000, '2014-02-16', '1998-03-04', 'false', 'uploads/teachar-08.jpg'),
(17, 'lieke ', 'martens ', 'holland', 'female', 'professor', 'MCA  BCA', '2 years Cuting tech', 'President Park', '9924018167', 'aav@gmail.com', '', 40000, '2018-09-08', '1997-03-05', 'false', 'uploads/latest-02.jpg'),
(18, 'Vinicius', 'Neymar', 'junior', 'male', 'Teacher', 'MSC IT, BCA', '12 years Cuting tech', 'Brazil', '8154846713', 'vini@gmail.com', '', 20000, '2018-08-20', '1998-05-28', 'false', 'uploads/teachar-02.jpg'),
(19, 'lukaku', 'romelu', 'silva ', 'male', 'Asst. Professor', 'Bca, 12th Commerce', '4 years in iqra', 'Belgium', '9256568947', 'luk@gmail.com', '', 80000, '2015-07-09', '1997-04-26', 'false', 'uploads/t-profile-01.jpg'),
(20, 'chris ', 'silva', 'smalling', 'male', 'Teacher', 'MCA, BCA', '4 years in iqra', 'London', '7202058697', 'chris@gmail.com', '', 90000, '2016-04-25', '1999-02-22', 'false', 'uploads/teachar-05.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `student_mst`
--

CREATE TABLE `student_mst` (
  `student_id` int(11) NOT NULL auto_increment,
  `fname` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `birth_place` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `city_id` int(11) NOT NULL,
  `dor` datetime NOT NULL COMMENT 'date of registration',
  `blood_group` varchar(10) NOT NULL,
  `mobile_no` varchar(20) NOT NULL,
  `nationality` varchar(25) NOT NULL,
  `cast_id` int(11) NOT NULL,
  `isactive` varchar(10) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `class_id` int(11) NOT NULL,
  `division_id` int(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY  (`student_id`),
  KEY `class_id` (`class_id`,`division_id`),
  KEY `division_id` (`division_id`),
  KEY `city_id` (`city_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `student_mst`
--

INSERT INTO `student_mst` (`student_id`, `fname`, `mname`, `lname`, `email`, `gender`, `dob`, `birth_place`, `address`, `city_id`, `dor`, `blood_group`, `mobile_no`, `nationality`, `cast_id`, `isactive`, `photo`, `class_id`, `division_id`, `password`) VALUES
(16, 'Jaden', 'cristiano', 'sancho', 'sancho@gmail.com', 'male', '1999-02-05', 'London', 'Fullham', 1, '2019-03-07 04:03:57', 'A', '7202054373', 'British', 1, 'true', 'uploads/latest-03.jpg', 2, 11, 'sancho123'),
(17, 'Christian', 'Dembele', 'pulisic', 'pulisic@gmail.com', 'male', '1999-02-10', 'Chicago', 'America', 1, '2019-03-07 04:03:32', 'B', '9265664834', 'American', 1, 'true', 'uploads/latest-03.jpg', 4, 18, 'christian123'),
(18, 'ousamane', 'mmmmm', 'Dembele', 'dembele@gmail.co', 'male', '1998-06-05', 'France', 'Barcelona', 1, '2019-03-07 04:03:33', 'B', '8154846173', 'french', 1, 'true', 'uploads/latest-03.jpg', 1, 8, 'bem12345'),
(19, 'adaaaa', 'martens', 'hegerberg', 'ada@gmail.com', 'Female', '1999-02-08', 'Sweden', 'Lyon ', 3, '2019-03-07 05:03:41', 'O', '7568948972', 'Swedish', 4, 'true', 'uploads/teachar-07.jpg', 4, 12, '12345678'),
(21, 'Ramos', 'sergio', 'garcia', 'ramos@gmail.com', 'male', '1999-12-08', 'spain', 'Madrid', 1, '2019-03-07 05:03:36', 'A', '9265664834', 'Spanish', 4, 'true', 'uploads/teachar-10.jpg', 1, 8, 'ramos123'),
(22, 'Dani', 'ronaldo', 'alves', 'dani@gmail.co', 'Male', '1999-09-04', 'Brazil', 'rio de jeneiro', 3, '2019-03-07 05:03:09', 'B', '854242756', 'Brazilian', 4, 'true', 'uploads/instractor-01.jpg', 2, 11, '12345678'),
(23, 'juaan', 'mataa', 'garcia', 'juan@gmail.com', 'Male', '1999-09-07', 'Spain', 'Manchester', 1, '2019-03-07 05:03:54', 'A', '9898656234', 'Spanish', 1, 'false', 'uploads/teachar-04.jpg', 4, 12, '12345678'),
(25, 'rahian', 'bruester', 'messi', 'brue@gmail.com', 'Male', '2000-06-08', 'London', 'Liverpool', 3, '2019-03-07 05:03:40', 'B', '8866559473', 'British', 4, 'false', 'uploads/teachar-05.jpg', 1, 16, 'brue1234'),
(27, 'Anthony', 'FFFFFFF', 'Martial', 'afridi74054@gmail.com', 'Male', '1998-01-01', 'France', 'Manchester United', 1, '2019-03-11 04:03:26', 'B', '9714794229', 'French', 4, 'true', 'uploads/instractor-01.jpg', 4, 18, '12345678'),
(28, 'Jackob', 'Roger', 'Peralta', 'jake@gmail.com', 'Male', '1998-01-01', 'Brooklyn', 'Newyork', 4, '2019-03-27 03:03:58', 'B', '9714794225', 'American', 4, 'false', 'uploads/teachar-04.jpg', 2, 11, '12345678'),
(29, 'Charles', 'William', 'Boyle', 'boyle@yahoo.com', 'Male', '1999-12-01', 'New York', 'Brooklyn', 4, '2019-03-27 03:03:29', 'A', '9714793232', 'American', 4, 'false', 'uploads/', 2, 11, 'jake12345');

-- --------------------------------------------------------

--
-- Table structure for table `study_material_mst`
--

CREATE TABLE `study_material_mst` (
  `study_mat_id` int(11) NOT NULL auto_increment,
  `file_name` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `staff_id` int(11) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY  (`study_mat_id`),
  KEY `subject_id` (`subject_id`),
  KEY `staff_id` (`staff_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `study_material_mst`
--

INSERT INTO `study_material_mst` (`study_mat_id`, `file_name`, `file`, `subject_id`, `staff_id`, `date`) VALUES
(1, 'Effect', 'material/Effect.php', 3, 9, '2019-04-11'),
(2, '2 Selecters', 'material/2 Selecters.pdf', 3, 9, '2019-04-11'),
(3, 'spanish-for-dummies', 'material/spanish-for-dummies.pdf', 6, 9, '2019-04-11');

-- --------------------------------------------------------

--
-- Table structure for table `subject_mst`
--

CREATE TABLE `subject_mst` (
  `subject_id` int(11) NOT NULL auto_increment,
  `subject_name` varchar(25) NOT NULL,
  `class_id` int(11) NOT NULL,
  `staff_id` int(11) NOT NULL,
  `syllabus_file` varchar(100) NOT NULL,
  PRIMARY KEY  (`subject_id`),
  KEY `class_id` (`class_id`),
  KEY `staff_id` (`staff_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `subject_mst`
--

INSERT INTO `subject_mst` (`subject_id`, `subject_name`, `class_id`, `staff_id`, `syllabus_file`) VALUES
(1, 'English', 1, 19, '1'),
(3, 'Maths', 1, 9, '1'),
(4, 'General Knowledge', 1, 15, '1'),
(5, 'Drawing', 1, 11, '1'),
(6, 'Maths', 4, 9, '1'),
(7, 'Hindi', 4, 20, '1'),
(8, 'Physical Education', 4, 14, '1'),
(9, 'Maths', 2, 11, '1'),
(10, 'English', 2, 19, '1'),
(11, 'History', 2, 15, '1'),
(15, 'Sports1', 1, 9, '1'),
(16, 'Sports2', 2, 9, '1');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `attendance_mst`
--
ALTER TABLE `attendance_mst`
  ADD CONSTRAINT `attendance_mst_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `student_mst` (`student_id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `attendance_mst_ibfk_2` FOREIGN KEY (`division_id`) REFERENCES `division_mst` (`division_id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `attendance_mst_ibfk_3` FOREIGN KEY (`month_id`) REFERENCES `month_mst` (`month_id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `attendance_mst_ibfk_4` FOREIGN KEY (`academic_year_id`) REFERENCES `academin_year_mst` (`year_id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `division_mst`
--
ALTER TABLE `division_mst`
  ADD CONSTRAINT `division_mst_ibfk_6` FOREIGN KEY (`staff_id`) REFERENCES `staff_mst` (`staff_id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `division_mst_ibfk_7` FOREIGN KEY (`class_id`) REFERENCES `class_mst` (`class_id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `fees_mst`
--
ALTER TABLE `fees_mst`
  ADD CONSTRAINT `fees_mst_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `student_mst` (`student_id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `fees_mst_ibfk_2` FOREIGN KEY (`division_id`) REFERENCES `division_mst` (`division_id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `fees_mst_ibfk_3` FOREIGN KEY (`academic_year_id`) REFERENCES `academin_year_mst` (`year_id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `fee_structure_mst`
--
ALTER TABLE `fee_structure_mst`
  ADD CONSTRAINT `fee_structure_mst_ibfk_1` FOREIGN KEY (`class_id`) REFERENCES `class_mst` (`class_id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `gallery_mst`
--
ALTER TABLE `gallery_mst`
  ADD CONSTRAINT `gallery_mst_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `student_mst` (`student_id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `result_mst`
--
ALTER TABLE `result_mst`
  ADD CONSTRAINT `result_mst_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `student_mst` (`student_id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `result_mst_ibfk_2` FOREIGN KEY (`division_id`) REFERENCES `division_mst` (`division_id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `result_mst_ibfk_3` FOREIGN KEY (`subject_id`) REFERENCES `subject_mst` (`subject_id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `result_mst_ibfk_4` FOREIGN KEY (`academic_year_id`) REFERENCES `academin_year_mst` (`year_id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `student_mst`
--
ALTER TABLE `student_mst`
  ADD CONSTRAINT `student_mst_ibfk_10` FOREIGN KEY (`class_id`) REFERENCES `class_mst` (`class_id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `student_mst_ibfk_11` FOREIGN KEY (`division_id`) REFERENCES `division_mst` (`division_id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `student_mst_ibfk_9` FOREIGN KEY (`city_id`) REFERENCES `city_mst` (`city_id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `study_material_mst`
--
ALTER TABLE `study_material_mst`
  ADD CONSTRAINT `study_material_mst_ibfk_1` FOREIGN KEY (`subject_id`) REFERENCES `subject_mst` (`subject_id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `study_material_mst_ibfk_2` FOREIGN KEY (`staff_id`) REFERENCES `staff_mst` (`staff_id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `subject_mst`
--
ALTER TABLE `subject_mst`
  ADD CONSTRAINT `subject_mst_ibfk_2` FOREIGN KEY (`class_id`) REFERENCES `class_mst` (`class_id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `subject_mst_ibfk_3` FOREIGN KEY (`staff_id`) REFERENCES `staff_mst` (`staff_id`) ON DELETE NO ACTION ON UPDATE CASCADE;
