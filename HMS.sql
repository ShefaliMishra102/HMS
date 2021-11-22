-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 10, 2021 at 12:16 PM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `hostel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(30) NOT NULL,
  `mobile` varchar(13) NOT NULL,
  `email` varchar(30) NOT NULL,
  `Gender` varchar(30) NOT NULL,
  `dob` date NOT NULL,
  `address` varchar(300) NOT NULL,
  `password` varchar(30) NOT NULL,
  `photo` varchar(300) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1001004 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `Name`, `mobile`, `email`, `Gender`, `dob`, `address`, `password`, `photo`) VALUES
(1001001, 'Shefali Mishra', '7896541323', 'sm@gmail.com', 'Female', '1998-06-05', 'tulsi vihar colony', 'admin123', 'Admin_image/19204.jpg'),
(1001002, 'Alka Maurya', '8965897453', 'maurya12@gmail.com', 'Female', '1997-05-11', 'Mirzapur', 'admin@123', 'Admin_image/19204.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `attendence`
--

CREATE TABLE IF NOT EXISTS `attendence` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `hostel_name` varchar(100) NOT NULL,
  `stud_id` int(11) NOT NULL,
  `stud_name` varchar(100) NOT NULL,
  `today_date` date NOT NULL,
  `Is_Absence` varchar(10) NOT NULL,
  `Is_leave` varchar(10) NOT NULL,
  `remark` varchar(100) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=109 ;

--
-- Dumping data for table `attendence`
--

INSERT INTO `attendence` (`ID`, `hostel_name`, `stud_id`, `stud_name`, `today_date`, `Is_Absence`, `Is_leave`, `remark`) VALUES
(101, 'Girls Hostel', 6000101, 'Muskhan Singh', '2021-10-08', 'No', 'No', ''),
(102, 'Girls Hostel', 6000101, 'Muskhan Singh', '2021-10-10', 'No', 'No', ''),
(103, 'Girls Hostel', 6000102, 'Shriti Kasera', '2021-10-10', 'No', 'No', ''),
(104, 'Girls Hostel', 6000106, 'Ankita Yadav', '2021-10-10', 'No', 'No', ''),
(105, 'Girls Hostel', 6000107, 'Sweta Tripathi', '2021-10-10', 'Yes', 'Yes', 'Home'),
(106, 'Girls Hostel', 6000106, 'Ankita Yadav', '2021-10-10', 'Yes', 'Yes', 'Conference'),
(107, 'Boys Hostel', 6000103, 'Atul Singh', '2021-10-09', 'No', 'No', ''),
(108, 'Boys Hostel', 6000103, 'Atul Singh', '2021-10-10', 'Yes', 'Yes', 'Home');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE IF NOT EXISTS `contact_us` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `c_mobile` varchar(13) NOT NULL,
  `c_email` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2000105 ;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`ID`, `fname`, `lname`, `c_mobile`, `c_email`, `subject`, `time`) VALUES
(2000101, 'Atul ', 'Rai', '8921570361', 'raiatual777@gmail.com', 'Room are available in the hostel', '2021-10-08 21:17:53'),
(2000102, 'Suraj ', 'Singh', '8382825555', 'singhsuraj55@gmail.com', 'Rooms avilabel hai ki nahi, and Mess me khane ka k', '2021-10-10 13:32:52'),
(2000103, 'Anvi', 'Mishra', '9580000213', 'mishraanvi23@gmail.com', 'For Hostel fees structure', '2021-10-10 13:40:02'),
(2000104, 'Prisha', 'Singh', '9812345670', 'singhprisha21@gmail.com', 'For Mess Releted query', '2021-10-10 13:45:02');

-- --------------------------------------------------------

--
-- Table structure for table `cost`
--

CREATE TABLE IF NOT EXISTS `cost` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `hostel_name` varchar(30) NOT NULL,
  `cost_type` varchar(50) NOT NULL,
  `description` varchar(100) NOT NULL,
  `cost_amount` decimal(10,2) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1800105 ;

--
-- Dumping data for table `cost`
--

INSERT INTO `cost` (`ID`, `hostel_name`, `cost_type`, `description`, `cost_amount`, `time`) VALUES
(1800101, 'Girls Hostel', 'Electric Bill', 'Per Month', '30000.00', '2021-10-09 17:57:12'),
(1800102, 'Girls Hostel', 'Mess Bill ', 'Per Month', '42000.00', '2021-10-09 17:58:40'),
(1800103, 'Boys Hostel', 'Electric Bill', 'Per Month', '35000.00', '2021-10-09 18:02:44'),
(1800104, 'Boys Hostel', 'Mess Bill ', 'Per Month', '48000.00', '2021-10-09 18:04:02');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `hostel_name` varchar(20) NOT NULL,
  `emp_type` varchar(50) NOT NULL,
  `e_name` varchar(30) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `e_mobile` varchar(15) NOT NULL,
  `e_gender` varchar(15) NOT NULL,
  `e_dob` date NOT NULL,
  `e_category` varchar(20) NOT NULL,
  `join_start` date NOT NULL,
  `blood` varchar(10) NOT NULL,
  `nationality` varchar(10) NOT NULL,
  `f_name` varchar(30) NOT NULL,
  `m_name` varchar(30) NOT NULL,
  `street` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `state` varchar(30) NOT NULL,
  `country` varchar(30) NOT NULL,
  `pin` varchar(10) NOT NULL,
  `photo` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7001007 ;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`ID`, `hostel_name`, `emp_type`, `e_name`, `email_id`, `e_mobile`, `e_gender`, `e_dob`, `e_category`, `join_start`, `blood`, `nationality`, `f_name`, `m_name`, `street`, `city`, `state`, `country`, `pin`, `photo`, `password`, `time`) VALUES
(7001001, 'Girls Hostel', 'Worden', 'Vandita Pandey', 'vandita65@gmail.com', '9867458923', 'Female', '1983-08-19', 'General', '2018-05-01', 'B+', 'Indian', 'Ajay Pandey', 'Hemlata Pandey', '145,lakhana nagar', 'Lucknow', 'UP', 'India', '451120', 'Employee_image/E5.jpg', 'Today@1234', '2021-10-10 17:17:21'),
(7001002, 'Boys Hostel', 'Worden', 'K K Verma', 'varma88@gmail.com', '8967589458', 'Male', '1984-06-17', 'General', '2020-09-01', 'B-', 'Indian', 'Shiv Verma', 'Shanti Verma', '596, IT Chahuraya', 'Lucknow', 'UP', 'India', '451120', 'Employee_image/sb6.jfif', 'Today@1234', '2021-10-10 16:58:08'),
(7001003, 'Girls Hostel', 'Suprintendent', 'Gayatri Keshari', 'keshari@gmail.com', '8994758578', 'Female', '1987-03-01', 'General', '2021-03-01', 'O+', 'Indian', 'Prem Kishor Keshari', 'Meena Keshari', 'Ravindra nagar', 'Sultanpur', 'UP', 'India', '452136', 'Employee_image/h..jfif', 'Today@1234', '2021-10-10 17:30:10'),
(7001004, 'Girls Hostel', 'Office Staff', 'Manisha Pal', 'mpal@gmail.com', '8974586722', 'Female', '1992-11-25', 'OBC', '2021-06-03', 'AB+', 'Indian', 'Jaidev Pal', 'Rupa devi', '567, Govind Vihar', 'Saharnpur', 'Up', 'India', '256256', 'Employee_image/E6 (1).jfif', 'Today@1234', '2021-10-10 17:32:49'),
(7001005, 'Boys Hostel', 'Suprintendent', 'Omkar Agarwal', 'agrom@gmail.com', '8975586004', 'Male', '1997-09-20', 'General', '2021-01-03', 'B+', 'Indian', 'Dhruv Agrwal', 'Komal Agrawal', '245, Jogitara', 'Ayodhya', 'Up', 'India', '224010', 'Employee_image/e2 (1).jpg', 'Today@1234', '2021-10-10 17:39:57'),
(7001006, 'Boys Hostel', 'Mess Supervisor', 'Virendra Bajpai', 'bajpai@gmail.com', '9865974859', 'Male', '1995-09-17', 'OBC', '2021-09-07', 'A-', 'Indian', 'Shyam Lal Baipai', 'Suman Baipai', '67, Akhabarpur', 'Akhabarpur', 'Up', 'India', '224877', 'Employee_image/e4.jpg', 'Today@1234', '2021-10-10 17:43:05');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `comp` varchar(30) NOT NULL,
  `stud_id` int(11) NOT NULL,
  `f_name` varchar(50) NOT NULL,
  `hos` varchar(30) NOT NULL,
  `f_rn` varchar(20) NOT NULL,
  `f_bn` varchar(20) NOT NULL,
  `f_id` varchar(50) NOT NULL,
  `f_mobile` varchar(15) NOT NULL,
  `topic` varchar(30) NOT NULL,
  `query` varchar(300) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1600103 ;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`ID`, `comp`, `stud_id`, `f_name`, `hos`, `f_rn`, `f_bn`, `f_id`, `f_mobile`, `topic`, `query`, `time`) VALUES
(1600101, 'General Feedback', 6000101, 'Muskhan Singh', 'Girls Hostel', '101', 'Ganga Block', 'muskhans@gmail.com', '9685321475', 'For Hostel Site', 'Site are awasome', '2021-10-08 21:15:20'),
(1600102, 'Complaint', 6000103, 'Atul Singh', 'Boys Hostel', '105', 'LuvKhush', 'singhatul21@gmail.com', '9912345678', 'Mess Related Complain', 'Food made with a bad quality product', '2021-10-10 17:02:10');

-- --------------------------------------------------------

--
-- Table structure for table `hostel_bill`
--

CREATE TABLE IF NOT EXISTS `hostel_bill` (
  `application` int(11) NOT NULL AUTO_INCREMENT,
  `stud_id` int(11) NOT NULL,
  `payment` varchar(20) NOT NULL,
  `hostel_name` varchar(30) NOT NULL,
  `course` varchar(20) NOT NULL,
  `s_name` varchar(30) NOT NULL,
  `f_name` varchar(30) NOT NULL,
  `m_name` varchar(30) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `category` varchar(30) NOT NULL,
  `transaction` varchar(20) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `h_photo` varchar(300) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`application`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1300105 ;

--
-- Dumping data for table `hostel_bill`
--

INSERT INTO `hostel_bill` (`application`, `stud_id`, `payment`, `hostel_name`, `course`, `s_name`, `f_name`, `m_name`, `contact`, `email_id`, `address`, `category`, `transaction`, `amount`, `h_photo`, `time`) VALUES
(1300101, 6000101, 'Cash', 'Girls Hostel', 'MCA', 'Muskhan Singh', 'Vinod Kumar Singh', 'Sunita Singh', '9685321475', 'muskhans@gmail.com', '69, samayaghat Varanasi UP India 250004', 'General', '3883', '16000.00', 'Hostel_image/s2.jpg', '2021-10-08 20:58:36'),
(1300102, 6000102, 'Online', 'Girls Hostel', 'MBA', 'Shriti Kasera', 'Amit Kumar ', 'Suman Kasera', '9987654320', 'kaserashriti@gmail.com', '67Lanka Varanasi UP India 231001', 'General', '11553', '17000.00', 'Hostel_image/s4.jpg', '2021-10-10 11:54:36'),
(1300103, 6000103, 'Online', 'Boys Hostel', 'BBA', 'Atul Singh', 'Amit Kumar ', 'Sunita Singh', '9912345678', 'singhatul21@gmail.com', '98Mariha Mirzapur UP India 231001', 'OBC', '1070', '18000.00', 'Hostel_image/sb5.jfif', '2021-10-10 11:55:56'),
(1300104, 6000104, 'Online', 'Boys Hostel', 'MBA', 'Ashutosh Maurya', 'Mahesh Maurya', 'Kanchan Maurya', '9936123456', 'mauryaashutosh1@gmail.com', '23Naka Faizabad UP India 221003', 'OBC', '13070', '18000.00', 'Hostel_image/sb7.jfif', '2021-10-10 11:57:41');

-- --------------------------------------------------------

--
-- Table structure for table `meal`
--

CREATE TABLE IF NOT EXISTS `meal` (
  `Day` varchar(15) NOT NULL,
  `breakfast` varchar(50) NOT NULL,
  `lunch` varchar(100) NOT NULL,
  `snack` varchar(50) NOT NULL,
  `dinner` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `meal`
--

INSERT INTO `meal` (`Day`, `breakfast`, `lunch`, `snack`, `dinner`) VALUES
('Monday', 'Ghughari, Halwa, Chai', 'Dal, Chawal, Sabji, Roti, Salad', 'Pakudi,Chai', 'Dal, Chawal, Sabji, Roti, Salad, Pickal'),
('Tuesday', 'Sabji, Paratha, Chai', 'Dal, Chawal, Sabji, Roti, Salad', 'Pohe,Chai', 'Dal, Chawal, Rajama, Roti, Salad'),
('Wednesday', 'Sandwich, Chai', 'Dal, Chawal, Kadi, Roti, Salad', 'Cutlet, Chai', 'Dal, Chawal, Sabji, Roti, Salad'),
('Thusday', 'Idli, Sambhar, Chai', 'Dal, Chawal, Sabji, Roti, Salad', 'Manchurian, Chai', 'Chole, Bhature, Gulab Jamun, Salad'),
('Friday', 'Pudi, Sabji, Chai', 'Dal, Chawal, Sabji, Roti, Salad', 'Samose, Chai', 'Dal, Chawal, Sabji, Roti, Salad'),
('Saturday', 'Noodle, Chai', 'Dal, Chawal, Kadi, Roti, Salad', 'Rusk, Chai', 'Dal, Chawal, Sabji, Roti, Salad'),
('Sunday', 'Aloo Paratha, Chai', 'Dal, Chawal, Kofte, Roti, Salad', 'Bread Pakode, Chai', 'Kachodi, Sabji, Fried Rice, Kheer');

-- --------------------------------------------------------

--
-- Table structure for table `mess_bill`
--

CREATE TABLE IF NOT EXISTS `mess_bill` (
  `application` int(11) NOT NULL AUTO_INCREMENT,
  `stud_id` int(11) NOT NULL,
  `payment` varchar(20) NOT NULL,
  `hostel_name` varchar(50) NOT NULL,
  `meal` varchar(30) NOT NULL,
  `s_name` varchar(30) NOT NULL,
  `f_name` varchar(30) NOT NULL,
  `m_name` varchar(30) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `category` varchar(30) NOT NULL,
  `transaction` varchar(30) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `m_photo` varchar(300) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`application`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1400105 ;

--
-- Dumping data for table `mess_bill`
--

INSERT INTO `mess_bill` (`application`, `stud_id`, `payment`, `hostel_name`, `meal`, `s_name`, `f_name`, `m_name`, `contact`, `email_id`, `address`, `category`, `transaction`, `amount`, `m_photo`, `time`) VALUES
(1400101, 6000101, 'Cash', 'Girls Hostel', '', 'Muskhan Singh', 'Vinod Kumar Singh', 'Sunita Singh', '9685321475', 'muskhans@gmail.com', '69, samayaghat Varanasi UP India 250004', 'General', '3266', '3500.00', 'Mess_image/s2.jpg', '2021-10-08 21:00:26'),
(1400102, 6000102, 'Online', 'Girls Hostel', '', 'Shriti Kasera', 'Amit Kumar ', 'Suman Kasera', '9987654320', 'kaserashriti@gmail.com', '67Lanka Varanasi UP India 231001', 'General', '15059', '3500.00', 'Mess_image/s4.jpg', '2021-10-10 11:55:15'),
(1400103, 6000103, 'Online', 'Boys Hostel', '', 'Atul Singh', 'Amit Kumar ', 'Sunita Singh', '9912345678', 'singhatul21@gmail.com', '98Mariha Mirzapur UP India 231001', 'OBC', '9481', '3000.00', 'Mess_image/sb5.jfif', '2021-10-10 11:56:20'),
(1400104, 6000104, 'Online', 'Boys Hostel', '', 'Ashutosh Maurya', 'Mahesh Maurya', 'Kanchan Maurya', '9936123456', 'mauryaashutosh1@gmail.com', '23Naka Faizabad UP India 221003', 'OBC', '31068', '3000.00', 'Mess_image/sb7.jfif', '2021-10-10 11:58:04');

-- --------------------------------------------------------

--
-- Table structure for table `notice_board`
--

CREATE TABLE IF NOT EXISTS `notice_board` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `notice_title` varchar(50) NOT NULL,
  `notice_description` varchar(200) NOT NULL,
  `notice_photo` varchar(30) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5000124 ;

--
-- Dumping data for table `notice_board`
--

INSERT INTO `notice_board` (`ID`, `notice_title`, `notice_description`, `notice_photo`, `time`) VALUES
(5000119, 'Important', 'Health Camp', 'notice_image/n5.jpg', '2021-10-05 20:02:34'),
(5000118, 'Other', 'Warden Birthday Celebration', 'notice_image/n4.jpg', '2021-10-05 20:01:27'),
(5000117, 'Holiday', 'Winter Vacation Holiday Notice ', 'notice_image/n3.png', '2021-10-05 19:59:34'),
(5000116, 'Function/Event', 'Diwali Party on 04/11/2021', 'notice_image/n2.jpg', '2021-10-05 19:58:50'),
(5000115, 'Important', 'For Hostel Commities ', 'notice_image/n1.jpg', '2021-10-05 19:54:22'),
(5000120, 'Function/Event', 'Dussehra Party on 15/10/2021', 'notice_image/n6.jpg', '2021-10-05 20:03:57'),
(5000121, 'Holiday', 'Diwali Holiday', 'notice_image/n8.jpg', '2021-10-05 20:45:08'),
(5000122, 'Other', 'Picnic ', 'notice_image/n9.png', '2021-10-05 20:46:33'),
(5000123, 'Important', 'Mess Notice', 'notice_image/n4.jpg', '2021-10-05 20:48:56');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE IF NOT EXISTS `room` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `stud_id` int(11) NOT NULL,
  `stud_name` varchar(30) NOT NULL,
  `stud_f_name` varchar(50) NOT NULL,
  `stud_contact` varchar(15) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `hostel_name` varchar(50) NOT NULL,
  `block_name` varchar(30) NOT NULL,
  `room_number` varchar(20) NOT NULL,
  `stud_photo` varchar(30) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1500105 ;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`ID`, `stud_id`, `stud_name`, `stud_f_name`, `stud_contact`, `email_id`, `hostel_name`, `block_name`, `room_number`, `stud_photo`, `time`) VALUES
(1500101, 6000101, 'Muskhan Singh', 'Vinod Kumar Singh', '9685321475', 'muskhans@gmail.com', 'Girls Hostel', 'Ganga Block', '101', '', '2021-10-08 21:11:29'),
(1500102, 6000102, 'Shriti Kasera', 'Amit Kumar ', '9987654320', 'kaserashriti@gmail.com', 'Girls Hostel', 'Yamuna', '203', '', '2021-10-10 11:52:51'),
(1500103, 6000106, 'Ankita Yadav', 'Anil Yadav', '9800001230', 'yadavankita08@gmail.com', 'Girls Hostel', 'Ganga', '109', '', '2021-10-10 11:53:18'),
(1500104, 6000103, 'Atul Singh', 'Amit Kumar ', '9912345678', 'singhatul21@gmail.com', 'Boys Hostel', 'LuvKhush', '105', '', '2021-10-10 16:59:58');

-- --------------------------------------------------------

--
-- Table structure for table `salery`
--

CREATE TABLE IF NOT EXISTS `salery` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `emp_id` int(11) NOT NULL,
  `emp_hos` varchar(50) NOT NULL,
  `emp_type` varchar(50) NOT NULL,
  `emp_name` varchar(30) NOT NULL,
  `salary` decimal(10,2) NOT NULL,
  `s_month` varchar(20) NOT NULL,
  `s_year` year(4) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2100103 ;

--
-- Dumping data for table `salery`
--

INSERT INTO `salery` (`ID`, `emp_id`, `emp_hos`, `emp_type`, `emp_name`, `salary`, `s_month`, `s_year`, `time`) VALUES
(2100101, 7001001, 'Girls Hostel', 'Worden', 'Vandita Pandey', '45000.00', 'Oct', 2021, '2021-10-10 17:45:40'),
(2100102, 7001002, 'Boys Hostel', 'Worden', 'K K Verma', '45000.00', 'Oct', 2021, '2021-10-10 17:45:48');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `ID` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `hos` varchar(15) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `dob` date NOT NULL,
  `category` varchar(15) NOT NULL,
  `course` varchar(30) NOT NULL,
  `blood` varchar(5) NOT NULL,
  `nationality` varchar(15) NOT NULL,
  `f_name` varchar(30) NOT NULL,
  `f_mobile` varchar(15) NOT NULL,
  `f_email` varchar(30) NOT NULL,
  `f_occupation` varchar(30) NOT NULL,
  `m_name` varchar(30) NOT NULL,
  `m_mobile` varchar(15) NOT NULL,
  `m_email` varchar(30) NOT NULL,
  `m_occupation` varchar(30) NOT NULL,
  `street` varchar(20) NOT NULL,
  `city` varchar(30) NOT NULL,
  `state` varchar(30) NOT NULL,
  `country` varchar(30) NOT NULL,
  `pin` varchar(10) NOT NULL,
  `g_name` varchar(30) NOT NULL,
  `g_mobile` varchar(15) NOT NULL,
  `g_email` varchar(50) NOT NULL,
  `g_occupation` varchar(30) NOT NULL,
  `g_relation` varchar(30) NOT NULL,
  `g_address` varchar(100) NOT NULL,
  `password` varchar(20) NOT NULL,
  `photo` varchar(300) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6000109 ;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`ID`, `hos`, `name`, `email_id`, `mobile`, `gender`, `dob`, `category`, `course`, `blood`, `nationality`, `f_name`, `f_mobile`, `f_email`, `f_occupation`, `m_name`, `m_mobile`, `m_email`, `m_occupation`, `street`, `city`, `state`, `country`, `pin`, `g_name`, `g_mobile`, `g_email`, `g_occupation`, `g_relation`, `g_address`, `password`, `photo`, `time`) VALUES
(6000101, 'Girls Hostel', 'Muskhan Singh', 'muskhans@gmail.com', '9685321475', 'Female', '1997-10-21', 'General', 'MCA', 'AB+', 'Indian', 'Vinod Kumar Singh', '9865748956', 'vinodsingh45@gmail.com', 'Employee', 'Sunita Singh', '8965742390', '', 'House Wife', '69, samayaghat', 'Varanasi', 'UP', 'India', '250004', '', '', '', '', '', '', 'Today@1234', 'Student_Reg_image/s2.jpg', '2021-10-08 20:56:35'),
(6000102, 'Girls Hostel', 'Shriti Kasera', 'kaserashriti@gmail.com', '9987654320', 'Female', '1998-05-01', 'General', 'MBA', 'A+', 'Indian', 'Amit Kumar ', '9812345670', 'kumaramit@gmail.com', 'Business', 'Suman Kasera', '9987654321', 'sumankasera01@gmail.com', 'House Wife', '67Lanka', 'Varanasi', 'UP', 'India', '231001', '', '', '', '', '', '', 'Today@1234', 'Student_Reg_image/s4.jpg', '2021-10-08 21:35:07'),
(6000103, 'Boys Hostel', 'Atul Singh', 'singhatul21@gmail.com', '9912345678', 'Male', '1998-11-21', 'OBC', 'BBA', 'A+', 'Indian', 'Amit Kumar ', '9888821213', 'singhamit@gmail.com', 'business', 'Sunita Singh', '9876543210', 'singhsunita@gmail.com', 'House Wife', '98Mariha', 'Mirzapur', 'UP', 'India', '231001', '', '', '', '', '', '', 'Today@1234', 'Student_Reg_image/sb5.jfif', '2021-10-08 22:07:30'),
(6000104, 'Boys Hostel', 'Ashutosh Maurya', 'mauryaashutosh1@gmail.com', '9936123456', 'Male', '1998-12-12', 'OBC', 'MBA', 'A+', 'Indian', 'Mahesh Maurya', '9812345670', 'mauryamahes01@gmail.com', 'Employee', 'Kanchan Maurya', '9876543208', 'mauryakanchan09@gmail.com', 'House Wife', '23Naka', 'Faizabad', 'UP', 'India', '221003', '', '', '', '', '', '', 'Today@1234', 'Student_Reg_image/sb7.jfif', '2021-10-08 22:40:50'),
(6000105, 'Boys Hostel', 'Akash Mishra', 'mishraakash01@gmail.com', '9199234566', 'Female', '1997-03-01', 'General', 'BCA', 'B+', 'Indian', 'Dinesh Mishra', '9812345671', 'mishradinesh12@gmail.com', 'Employee', 'Shavitri Mishra', '9936123456', '', 'House Wife', '12Baliya', 'Baliya', 'UP', 'India', '3200011', 'Ramesh Mishra', '9580973219', 'mishraramesh21@gmail.com', 'Teacher', 'Uncle', 'Devkali', 'Today@1234', 'Student_Reg_image/sb8.jfif', '2021-10-09 22:23:18'),
(6000106, 'Girls Hostel', 'Ankita Yadav', 'yadavankita08@gmail.com', '9800001230', 'Female', '2001-02-09', 'OBC', 'BBA', 'AB+', 'Indian', 'Anil Yadav', '9876543210', 'yadavanil09@gmail.com', 'Business', 'Nisha Yadav', '9877771230', '', 'House Wife', '45Jaunpur', 'Jaunpur', 'UP', 'Indian', '2410012', '', '', '', '', '', '', 'Today@1234', 'Student_Reg_image/s5.jfif', '2021-10-09 22:45:05'),
(6000107, 'Girls Hostel', 'Sweta Tripathi', 'tripathisweta09@gmail.com', '9500007777', 'Female', '1999-04-09', 'General', 'MBA', 'O+', 'Indian', 'Ashok Tripathi', '9923456710', 'tripathiashok04@gmail.com', 'Business', 'Pushpa Tripathi', '8858333320', '', 'House Wife', '78Mirzapur', 'Mirzapur', 'UP', 'Indian', '2310001', '', '', '', '', '', '', 'Today@1234', 'Student_Reg_image/s3.jpg', '2021-10-09 23:13:58'),
(6000108, 'Girls Hostel', 'Shalini Singh', 'singhshalini23@gmail.com', '9856333312', 'Female', '1999-12-07', 'OBC', 'BBA', 'B-', 'Indian', 'Omkar Singh', '9234718880', 'singhomkar08@gmail.com', 'Business', 'Savitri Singh', '9936000055', 'singhsavitri01@gmail.com', 'House Wife', '23Allahpur', 'Prayagraj', 'UP', 'India', '241001', '', '', '', '', '', '', 'Today@1234', 'Student_Reg_image/s5.jpg', '2021-10-09 23:46:23');

-- --------------------------------------------------------

--
-- Table structure for table `timechart`
--

CREATE TABLE IF NOT EXISTS `timechart` (
  `time_in` time NOT NULL,
  `time_out` time NOT NULL,
  `description` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `timechart`
--

INSERT INTO `timechart` (`time_in`, `time_out`, `description`) VALUES
('08:00:00', '10:00:00', 'Breakfast Timing'),
('12:00:00', '15:00:00', 'Lunch Timing'),
('17:00:00', '19:00:00', 'Snack Timing'),
('20:00:00', '23:00:00', 'Dinner Timing'),
('05:00:00', '19:00:00', 'Hostel Opening and Closing Time');

-- --------------------------------------------------------

--
-- Table structure for table `visitors`
--

CREATE TABLE IF NOT EXISTS `visitors` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `s_name` varchar(30) NOT NULL,
  `s_contact` varchar(15) NOT NULL,
  `entry_date` date NOT NULL,
  `entry_timing` time NOT NULL,
  `relationship` varchar(30) NOT NULL,
  `address` varchar(100) NOT NULL,
  `exit_date` date NOT NULL,
  `exit_timing` time NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1200104 ;

--
-- Dumping data for table `visitors`
--

INSERT INTO `visitors` (`ID`, `name`, `email_id`, `contact`, `gender`, `s_name`, `s_contact`, `entry_date`, `entry_timing`, `relationship`, `address`, `exit_date`, `exit_timing`) VALUES
(1200103, 'Pankaj Tripathi', 'tripathipankaj97@gmail.com', '9877777777', 'Male', 'Sweta Tripathi', '9500007777', '2021-10-06', '14:20:00', 'Uncle', 'Lucknew', '0000-00-00', '00:00:00'),
(1200102, 'Seema Mishra', 'mishraseema21@gmail.com', '9834567777', 'Female', 'Akash Mishra', '9199234566', '2021-09-17', '14:54:00', 'Aunty', 'Devkali', '0000-00-00', '00:00:00'),
(1200101, 'Suraj Singh', 'singhshalini23@gmail.com', '9580999920', 'Male', 'Shalini Singh', '9856333312', '2021-10-05', '12:43:00', 'Brother', 'Mirzapur', '2021-10-06', '08:41:00');
