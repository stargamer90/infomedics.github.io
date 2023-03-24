-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2022 at 06:24 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `welfare_foundation`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(3) NOT NULL,
  `admin_name` varchar(30) NOT NULL,
  `admin_pass` varchar(30) NOT NULL,
  `admin_emailid` varchar(50) NOT NULL,
  `admin_contact` int(11) NOT NULL,
  `otp` int(5) NOT NULL,
  `otp_used` int(5) NOT NULL,
  `isActive` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_pass`, `admin_emailid`, `admin_contact`, `otp`, `otp_used`, `isActive`) VALUES
(1, 'Hailly', '123456', 'haillyv0@gmail.com', 9586416, 5678, 5678, 1);

-- --------------------------------------------------------

--
-- Table structure for table `area`
--

CREATE TABLE `area` (
  `area_id` int(20) NOT NULL,
  `area_name` varchar(50) NOT NULL,
  `area_pincode` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `area`
--

INSERT INTO `area` (`area_id`, `area_name`, `area_pincode`) VALUES
(1, 'vasna', 380007),
(2, 'vaniyavad', 8),
(3, 'swaminarayan park', 10);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(10) NOT NULL,
  `visitor_name` varchar(20) NOT NULL,
  `visitor_emailid` varchar(30) NOT NULL,
  `message` varchar(200) NOT NULL,
  `ngo_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `visitor_name`, `visitor_emailid`, `message`, `ngo_id`) VALUES
(0, 'Hailly Ved', 'haillyv0@gmail.com', 'hi', 1);

-- --------------------------------------------------------

--
-- Table structure for table `donation`
--

CREATE TABLE `donation` (
  `donation_id` int(5) NOT NULL,
  `amount` int(10) NOT NULL,
  `donor_id` int(5) NOT NULL,
  `ngo_id` int(5) NOT NULL,
  `donation_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donation`
--

INSERT INTO `donation` (`donation_id`, `amount`, `donor_id`, `ngo_id`, `donation_date`) VALUES
(1, 2500, 1, 1, '2022-01-06'),
(3, 3600, 2, 1, '2022-01-27');

-- --------------------------------------------------------

--
-- Table structure for table `donor`
--

CREATE TABLE `donor` (
  `donor_id` int(5) NOT NULL,
  `donor_firstname` varchar(20) NOT NULL,
  `donor_lastname` varchar(20) NOT NULL,
  `donor_password` varchar(15) NOT NULL,
  `donor_contact` int(10) NOT NULL,
  `area_id` int(5) NOT NULL,
  `otp` int(5) NOT NULL,
  `otp_used` int(5) NOT NULL,
  `donor_address` varchar(50) NOT NULL,
  `donor_emailid` varchar(20) NOT NULL,
  `isActive` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donor`
--

INSERT INTO `donor` (`donor_id`, `donor_firstname`, `donor_lastname`, `donor_password`, `donor_contact`, `area_id`, `otp`, `otp_used`, `donor_address`, `donor_emailid`, `isActive`) VALUES
(1, 'Nupur', 'Patel ', 'qqq', 98456789, 1, 553165, 1, '501,Riya Residency', 'haillyv0@gmail.com', 1),
(2, 'Dhruvi', 'Gajjar', '123456', 78899656, 2, 5678, 5678, 'gota ahmedabad', 'dhruvi@yahoo.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `event_id` int(5) NOT NULL,
  `event_name` varchar(20) NOT NULL,
  `event_description` varchar(50) NOT NULL,
  `venue` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL,
  `createddate` date NOT NULL,
  `ngo_id` int(10) NOT NULL,
  `donor_id` int(10) NOT NULL,
  `area_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`event_id`, `event_name`, `event_description`, `venue`, `image`, `createddate`, `ngo_id`, `donor_id`, `area_id`) VALUES
(13, 'Blood-donation camp', 'it is a blood donation camp for our camp', 'A/4 Nirma society', 'img1.jpg', '2022-02-21', 3, 1, 1),
(16, 'Birthday', 'Its our NGOs birthday', 'qqq', 'img7.jpg', '2022-02-23', 1, 1, 1),
(17, 'Birthday', 'xyz', 'A/4 Nirma socity ', 'img8.jpg', '2022-02-23', 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedback_id` int(5) NOT NULL,
  `feedback` varchar(100) NOT NULL,
  `donor_id` int(10) NOT NULL,
  `ngo_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedback_id`, `feedback`, `donor_id`, `ngo_id`) VALUES
(1, 'It is an nice ngo', 1, 1),
(2, 'They are having a great environment', 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `gallery_id` int(20) NOT NULL,
  `image_path` varchar(50) NOT NULL,
  `ngo_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`gallery_id`, `image_path`, `ngo_id`) VALUES
(24, 'img1.jpg', 1),
(25, 'img5.jpg', 1),
(26, 'img4.jpg', 1),
(27, 'img3.jpg', 1),
(29, 'img2.jpg', 1),
(30, 'img1.jpg', 1),
(31, 'img6.jpg', 1),
(32, 'img2.jpg', 1),
(33, '3.jpg', 1),
(34, '4.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ngo`
--

CREATE TABLE `ngo` (
  `ngo_id` int(5) NOT NULL,
  `ngo_name` varchar(20) NOT NULL,
  `ngo_description` varchar(200) NOT NULL,
  `ngo_address1` varchar(50) NOT NULL,
  `ngo_address2` varchar(50) NOT NULL,
  `ngo_contact` int(10) NOT NULL,
  `ngo_password` varchar(20) NOT NULL,
  `ngo_emailid` varchar(50) NOT NULL,
  `registration_id` varchar(30) NOT NULL,
  `area_id` int(5) NOT NULL,
  `otp` int(5) NOT NULL,
  `otp_used` int(5) NOT NULL,
  `isActive` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ngo`
--

INSERT INTO `ngo` (`ngo_id`, `ngo_name`, `ngo_description`, `ngo_address1`, `ngo_address2`, `ngo_contact`, `ngo_password`, `ngo_emailid`, `registration_id`, `area_id`, `otp`, `otp_used`, `isActive`) VALUES
(1, 'Child Care', 'Taking care of Children', 'Jyoti Laxmi', 'Paldi', 9878789, '123456', '19ceuod015@ddu.ac.in', '678954233456778', 1, 605759, 0, 1),
(2, 'blind association', 'We take care of Blind people', 'street 4', 'nr iim', 68644576, '123456', 'blindassociation@gmail.com', '6894809480-9302', 3, 0, 0, 1),
(3, 'andhjan mandal', 'We deal with deal with blind people', 'Jyoti Laxmi', 'nr iim', 68644576, '987645', 'andhjan@gmail.com', '6894809480-4502', 1, 0, 0, 1),
(4, 'andhjan mandal', 'We deal with deal with blind people', 'Jyoti Laxmi', 'nr iim', 68644576, '987645', 'andhjan@gmail.com', '6894809480-4502', 1, 23, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `post_id` int(5) NOT NULL,
  `post_amount` int(50) NOT NULL,
  `post_start` date NOT NULL,
  `post_end` date NOT NULL,
  `donor_id` int(5) NOT NULL,
  `ngo_id` int(5) NOT NULL,
  `area_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`post_id`, `post_amount`, `post_start`, `post_end`, `donor_id`, `ngo_id`, `area_id`) VALUES
(1, 25, '2022-02-24', '2022-02-26', 1, 1, 1),
(6, 260, '2022-02-21', '2022-02-22', 1, 1, 0),
(7, 260, '2022-02-05', '2022-07-05', 1, 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`area_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `donation`
--
ALTER TABLE `donation`
  ADD PRIMARY KEY (`donation_id`),
  ADD KEY `donor_id` (`donor_id`),
  ADD KEY `ngo_id` (`ngo_id`);

--
-- Indexes for table `donor`
--
ALTER TABLE `donor`
  ADD PRIMARY KEY (`donor_id`),
  ADD KEY `area_id` (`area_id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`event_id`),
  ADD KEY `ngo_id` (`ngo_id`),
  ADD KEY `area_id` (`area_id`),
  ADD KEY `donor_id` (`donor_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedback_id`),
  ADD KEY `donor_id` (`donor_id`),
  ADD KEY `ngo_id` (`ngo_id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`gallery_id`),
  ADD KEY `ngo_id` (`ngo_id`);

--
-- Indexes for table `ngo`
--
ALTER TABLE `ngo`
  ADD PRIMARY KEY (`ngo_id`),
  ADD KEY `area_id` (`area_id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`post_id`),
  ADD KEY `donor_id` (`donor_id`),
  ADD KEY `ngo_id` (`ngo_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `area`
--
ALTER TABLE `area`
  MODIFY `area_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `donation`
--
ALTER TABLE `donation`
  MODIFY `donation_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `donor`
--
ALTER TABLE `donor`
  MODIFY `donor_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `event_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedback_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `gallery_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `ngo`
--
ALTER TABLE `ngo`
  MODIFY `ngo_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `post_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `donation`
--
ALTER TABLE `donation`
  ADD CONSTRAINT `donation_ibfk_1` FOREIGN KEY (`donor_id`) REFERENCES `donor` (`donor_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `donation_ibfk_2` FOREIGN KEY (`ngo_id`) REFERENCES `ngo` (`ngo_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `donor`
--
ALTER TABLE `donor`
  ADD CONSTRAINT `donor_ibfk_1` FOREIGN KEY (`area_id`) REFERENCES `area` (`area_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `events`
--
ALTER TABLE `events`
  ADD CONSTRAINT `events_ibfk_1` FOREIGN KEY (`ngo_id`) REFERENCES `ngo` (`ngo_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `events_ibfk_2` FOREIGN KEY (`area_id`) REFERENCES `area` (`area_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `events_ibfk_3` FOREIGN KEY (`donor_id`) REFERENCES `donor` (`donor_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`donor_id`) REFERENCES `donor` (`donor_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `feedback_ibfk_2` FOREIGN KEY (`ngo_id`) REFERENCES `ngo` (`ngo_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `gallery`
--
ALTER TABLE `gallery`
  ADD CONSTRAINT `gallery_ibfk_1` FOREIGN KEY (`ngo_id`) REFERENCES `ngo` (`ngo_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `ngo`
--
ALTER TABLE `ngo`
  ADD CONSTRAINT `ngo_ibfk_1` FOREIGN KEY (`area_id`) REFERENCES `area` (`area_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `post_ibfk_1` FOREIGN KEY (`donor_id`) REFERENCES `donor` (`donor_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `post_ibfk_2` FOREIGN KEY (`ngo_id`) REFERENCES `ngo` (`ngo_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
