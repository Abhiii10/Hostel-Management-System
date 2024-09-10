-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 05, 2024 at 06:05 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `23140737`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(300) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `updation_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`, `reg_date`, `updation_date`) VALUES
(12, 'abhi', 'apple@gmail.com', 'iphone', '2024-03-04 06:49:04', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `adminlog`
--

CREATE TABLE `adminlog` (
  `id` int(11) NOT NULL,
  `adminid` int(11) NOT NULL,
  `ip` varbinary(16) NOT NULL,
  `logintime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `course_code` varchar(255) NOT NULL,
  `course_sn` varchar(255) NOT NULL,
  `course_fn` varchar(255) NOT NULL,
  `posting_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `course_code`, `course_sn`, `course_fn`, `posting_date`) VALUES
(11, 'NP101', 'BIT', 'Bachelor in Information Technology', '2024-03-05 15:03:29'),
(12, 'NP102', 'MIT', 'Master in Information Technology', '2024-03-05 15:04:10'),
(18, 'NP103', 'BCA', 'Bachelor in Computer Application', '2024-03-05 16:19:12'),
(19, 'NP104', 'MCA', 'Master in Comuter Application', '2024-03-05 16:19:49'),
(20, 'NP105', 'B.Sc.CSIT', 'Bachelor of Science in Computer Science and Information Technology', '2024-03-05 16:20:44'),
(21, 'NP107', 'BBA', 'Bachelor of Business Administration ', '2024-03-05 16:21:26');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `roomno` int(11) NOT NULL,
  `seater` int(11) NOT NULL,
  `feespm` int(11) NOT NULL,
  `foodstatus` int(11) NOT NULL,
  `stayfrom` date NOT NULL,
  `duration` int(11) NOT NULL,
  `course` varchar(500) NOT NULL,
  `regno` varchar(255) NOT NULL,
  `firstName` varchar(500) NOT NULL,
  `middleName` varchar(500) NOT NULL,
  `lastName` varchar(500) NOT NULL,
  `gender` varchar(250) NOT NULL,
  `contactno` bigint(11) NOT NULL,
  `emailid` varchar(500) NOT NULL,
  `egycontactno` bigint(11) NOT NULL,
  `guardianName` varchar(500) NOT NULL,
  `guardianRelation` varchar(500) NOT NULL,
  `guardianContactno` bigint(11) NOT NULL,
  `corresAddress` varchar(500) NOT NULL,
  `corresCIty` varchar(500) NOT NULL,
  `corresState` varchar(500) NOT NULL,
  `corresPincode` int(11) NOT NULL,
  `pmntAddress` varchar(500) NOT NULL,
  `pmntCity` varchar(500) NOT NULL,
  `pmnatetState` varchar(500) NOT NULL,
  `pmntPincode` int(11) NOT NULL,
  `postingDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `updationDate` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `roomno`, `seater`, `feespm`, `foodstatus`, `stayfrom`, `duration`, `course`, `regno`, `firstName`, `middleName`, `lastName`, `gender`, `contactno`, `emailid`, `egycontactno`, `guardianName`, `guardianRelation`, `guardianContactno`, `corresAddress`, `corresCIty`, `corresState`, `corresPincode`, `pmntAddress`, `pmntCity`, `pmnatetState`, `pmntPincode`, `postingDate`, `updationDate`) VALUES
(21, 201, 5, 10000, 1, '2024-03-04', 9, 'Please Select...', '1025', 'Ram', 'k', 'Adhikari', 'Male', 6555555555, 'admin@mail.com', 9864026723, 'kjbkjbkasc', 'jbkjbsjbs', 555, 'Jadibuti', 'Sarlahi', '', 5566, '455', 'Sarlahi', '', 555, '2024-03-05 12:30:05', ''),
(22, 102, 3, 100000, 1, '2024-03-05', 0, 'Please Select...', 's', 'fss', 'ds', 'sd', 'male', 9845555566, 'd@gmail.com', 9864026723, 'kjbkjbkasc', 'jbkjbsjbs', 0, 'ff', 'f', '', 7845, 'ff', 'f', '', 7845, '2024-03-05 13:25:20', ''),
(23, 102, 1, 100000, 1, '2024-03-01', 12, 'bca', '9864026723', 'abhishek', 'k', 'Paudel', 'male', 9845555566, 'paudelabhi2057@gmail.com', 9864026723, 'kjbkjbkasc', 'jbkjbsjbs', 0, 'Jadibuti', 'Sarlahi', '', 7845, 'Jadibuti', 'Sarlahi', '', 7845, '2024-03-05 13:28:46', '');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` int(11) NOT NULL,
  `seater` int(11) NOT NULL,
  `room_no` int(11) NOT NULL,
  `fees` int(11) NOT NULL,
  `posting_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `seater`, `room_no`, `fees`, `posting_date`) VALUES
(1, 5, 201, 10000, '2024-03-05 08:50:30'),
(10, 3, 102, 10000, '2024-03-05 13:23:50'),
(11, 2, 101, 5, '2024-03-05 13:25:56'),
(12, 1, 106, 54555, '2024-03-05 13:27:25'),
(13, 1, 105, 1000, '2024-03-05 13:40:12'),
(14, 5, 110, 1100, '2024-03-05 13:48:24');

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `id` int(11) NOT NULL,
  `State` varchar(150) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `State`) VALUES
(1, 'Koshi'),
(8, 'Sudurpashchim'),
(7, 'Karnali'),
(6, 'Karnali'),
(5, 'Lumbini'),
(4, 'Gandaki'),
(3, 'Bagmati\r\n'),
(2, 'Madhesh');

-- --------------------------------------------------------

--
-- Table structure for table `userlog`
--

CREATE TABLE `userlog` (
  `id` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `userEmail` varchar(255) NOT NULL,
  `userIp` varbinary(16) NOT NULL,
  `city` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `loginTime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `userlog`
--

INSERT INTO `userlog` (`id`, `userId`, `userEmail`, `userIp`, `city`, `country`, `loginTime`) VALUES
(29, 556, 'paudelabhi2057@gmail.com', 0x3a3a31, '', '', '2024-03-04 07:05:13'),
(30, 556, 'paudelabhi2057@gmail.com', 0x3a3a31, '', '', '2024-03-04 07:12:07'),
(31, 556, 'paudelabhi2057@gmail.com', 0x3a3a31, '', '', '2024-03-04 08:11:08'),
(32, 556, 'paudelabhi2057@gmail.com', 0x3a3a31, '', '', '2024-03-04 08:17:24'),
(33, 559, 'admin@mail.com', 0x3a3a31, '', '', '2024-03-04 10:01:13'),
(34, 559, 'admin@mail.com', 0x3a3a31, '', '', '2024-03-04 10:01:28'),
(35, 556, 'paudelabhi2057@gmail.com', 0x3a3a31, '', '', '2024-03-04 11:48:27'),
(36, 559, 'admin@mail.com', 0x3a3a31, '', '', '2024-03-04 12:40:46'),
(37, 559, 'admin@mail.com', 0x3a3a31, '', '', '2024-03-04 13:41:40'),
(38, 559, 'admin@mail.com', 0x3a3a31, '', '', '2024-03-04 13:50:26'),
(39, 559, 'admin@mail.com', 0x3a3a31, '', '', '2024-03-04 13:58:10'),
(40, 559, 'admin@mail.com', 0x3a3a31, '', '', '2024-03-04 13:58:24'),
(41, 559, 'admin@mail.com', 0x3a3a31, '', '', '2024-03-04 14:03:14'),
(42, 559, 'admin@mail.com', 0x3a3a31, '', '', '2024-03-04 17:25:34'),
(43, 559, 'admin@mail.com', 0x3a3a31, '', '', '2024-03-05 02:43:23'),
(44, 559, 'admin@mail.com', 0x3a3a31, '', '', '2024-03-05 04:12:56'),
(45, 559, 'admin@mail.com', 0x3a3a31, '', '', '2024-03-05 06:07:19'),
(46, 559, 'admin@mail.com', 0x3a3a31, '', '', '2024-03-05 06:31:25'),
(47, 559, 'admin@mail.com', 0x3a3a31, '', '', '2024-03-05 06:37:41'),
(48, 559, 'admin@mail.com', 0x3a3a31, '', '', '2024-03-05 07:01:33'),
(49, 559, 'admin@mail.com', 0x3a3a31, '', '', '2024-03-05 08:07:50'),
(50, 559, 'admin@mail.com', 0x3a3a31, '', '', '2024-03-05 08:34:44'),
(51, 559, 'admin@mail.com', 0x3a3a31, '', '', '2024-03-05 13:04:44'),
(52, 559, 'admin@mail.com', 0x3a3a31, '', '', '2024-03-05 13:08:37'),
(53, 559, 'admin@mail.com', 0x3a3a31, '', '', '2024-03-05 13:09:24'),
(54, 559, 'admin@mail.com', 0x3a3a31, '', '', '2024-03-05 13:11:25'),
(55, 559, 'admin@mail.com', 0x3a3a31, '', '', '2024-03-05 13:23:10'),
(56, 561, 'paudelabhi2057@gmail.com', 0x3a3a31, '', '', '2024-03-05 13:30:00'),
(57, 559, 'admin@mail.com', 0x3a3a31, '', '', '2024-03-05 13:39:33'),
(58, 559, 'admin@mail.com', 0x3a3a31, '', '', '2024-03-05 13:49:39'),
(59, 559, 'admin@mail.com', 0x3a3a31, '', '', '2024-03-05 14:02:37'),
(60, 559, 'admin@mail.com', 0x3a3a31, '', '', '2024-03-05 14:07:30'),
(61, 559, 'admin@mail.com', 0x3a3a31, '', '', '2024-03-05 14:13:49'),
(62, 559, 'admin@mail.com', 0x3a3a31, '', '', '2024-03-05 15:06:23'),
(63, 559, 'admin@mail.com', 0x3a3a31, '', '', '2024-03-05 15:33:32'),
(64, 559, 'admin@mail.com', 0x3a3a31, '', '', '2024-03-05 15:33:58'),
(65, 559, 'admin@mail.com', 0x3a3a31, '', '', '2024-03-05 15:36:29'),
(66, 559, 'admin@mail.com', 0x3a3a31, '', '', '2024-03-05 15:44:55'),
(67, 559, 'admin@mail.com', 0x3a3a31, '', '', '2024-03-05 16:47:34'),
(68, 559, 'admin@mail.com', 0x3a3a31, '', '', '2024-03-05 16:53:02'),
(69, 559, 'admin@mail.com', 0x3a3a31, '', '', '2024-03-05 16:53:37'),
(70, 559, 'admin@mail.com', 0x3a3a31, '', '', '2024-03-05 16:55:15');

-- --------------------------------------------------------

--
-- Table structure for table `userregistration`
--

CREATE TABLE `userregistration` (
  `id` int(11) NOT NULL,
  `regNo` varchar(255) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `middleName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `contactNo` bigint(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `regDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `updationDate` varchar(45) NOT NULL,
  `passUdateDate` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `userregistration`
--

INSERT INTO `userregistration` (`id`, `regNo`, `firstName`, `middleName`, `lastName`, `gender`, `contactNo`, `email`, `password`, `regDate`, `updationDate`, `passUdateDate`) VALUES
(558, 'A101', 'Anil', 'Kumar', 'Adhikari', 'Male', 9845555566, 'anil@gmail.com', '71b9b5bc1094ee6eaeae8253e787d654', '2024-03-04 10:00:14', '', ''),
(559, '1025', 'Ram', 'k', 'Adhikari', 'Male', 6555555555, 'admin@mail.com', '0b3f45b266a97d7029dde7c2ba372093', '2024-03-04 10:00:49', '04-03-2024 04:05:01', '05-03-2024 10:38:25'),
(561, '101', 'Anil', 'k', 'abhi', 'Male', 9864, 'paudelabhi2057@gmail.com', '202cb962ac59075b964b07152d234b70', '2024-03-05 13:29:17', '', ''),
(562, '10128', 'Anil', 'k', 'Paudel', 'Male', 998, 'paudel@gmail.com', 'c647f23604314d5aa5bb53ad3def9303', '2024-03-05 15:40:41', '', ''),
(563, '10128', 'Anil', 'k', 'Paudel', 'Male', 998, 'paudel@gmail.com', 'c647f23604314d5aa5bb53ad3def9303', '2024-03-05 15:41:51', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userlog`
--
ALTER TABLE `userlog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userregistration`
--
ALTER TABLE `userregistration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `userlog`
--
ALTER TABLE `userlog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `userregistration`
--
ALTER TABLE `userregistration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=564;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
