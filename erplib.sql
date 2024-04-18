-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2024 at 08:26 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `erplib`
--

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE `enquiry` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `mobile` varchar(13) NOT NULL,
  `email` text NOT NULL,
  `city` text NOT NULL,
  `state` text NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `enquiry`
--

INSERT INTO `enquiry` (`id`, `name`, `mobile`, `email`, `city`, `state`, `comment`) VALUES
(3, 'Sumit Yadav Kumar', '8901164933', 'zillionsoftech@gmail.com', 'Rewari', 'Haryana', 'dsaffsdfasd sdfsafsadfas');

-- --------------------------------------------------------

--
-- Table structure for table `seats`
--

CREATE TABLE `seats` (
  `seatid` int(11) NOT NULL,
  `admission_id` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `seats`
--

INSERT INTO `seats` (`seatid`, `admission_id`) VALUES
(4, NULL),
(5, NULL),
(6, NULL),
(7, NULL),
(8, NULL),
(9, NULL),
(10, NULL),
(11, NULL),
(12, NULL),
(13, NULL),
(14, NULL),
(15, NULL),
(16, NULL),
(17, NULL),
(18, NULL),
(19, NULL),
(20, NULL),
(21, NULL),
(22, NULL),
(23, NULL),
(24, NULL),
(25, NULL),
(26, NULL),
(27, NULL),
(28, NULL),
(29, NULL),
(30, NULL),
(31, NULL),
(32, NULL),
(33, NULL),
(34, NULL),
(35, NULL),
(1, 'kam1231100001'),
(2, 'nav1234010004'),
(3, 'yas1231100003');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `admission_id` varchar(30) NOT NULL,
  `gsn` int(11) DEFAULT NULL,
  `name` varchar(30) NOT NULL,
  `mobile` varchar(13) NOT NULL,
  `parentmobile` varchar(13) NOT NULL,
  `email` varchar(50) NOT NULL,
  `street` varchar(100) NOT NULL,
  `city` varchar(30) NOT NULL,
  `state` varchar(30) NOT NULL,
  `pin` varchar(30) NOT NULL,
  `aadhaar` varchar(30) NOT NULL,
  `exam` varchar(30) NOT NULL,
  `profile` varchar(100) NOT NULL,
  `aadhaarfront` varchar(100) NOT NULL,
  `aadhaarback` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`admission_id`, `gsn`, `name`, `mobile`, `parentmobile`, `email`, `street`, `city`, `state`, `pin`, `aadhaar`, `exam`, `profile`, `aadhaarfront`, `aadhaarback`) VALUES
('har1234010002', 2, 'Harshit', '8965326598', '8965326598', 'harshitrao84@gmail.com', 'Zillionsoftech Pvt. Ltd. Computer Institute Rewari Model Town', 'Rewari', 'Haryana', '123401', '123456789654', 'ssc', 'har1234010002.jpg', 'aadhaarfronthar1234010002.jpg', 'aadhaarbackhar1234010002.jpg'),
('kam1231100001', 1, 'Kamal Kumar', '8901164933', '8929322060', 'harshitrao84@gmail.com', 'New Adrash nagar Gali Number 1, New Adarsh Nagar, Rewari, Haryana, India', 'Rewari', 'Haryana', '123110', '123456789654', 'ssc', 'kam1231100001.jpeg', 'aadhaarfrontkam1231100001.jpg', 'aadhaarbackkam1231100001.png'),
('nav1234010004', 4, 'Naveen Saini', '9812702514', '9466276726', 'n.k1270250@gmail.com', 'Jarthal', 'Rewari', 'Haryana', '123401', '607820201852', 'RPF', 'nav1234010004.jpg', 'aadhaarfrontnav1234010004.jpeg', 'aadhaarbacknav1234010004.jpeg'),
('yas1231100003', 3, 'Yash', '8571042794', '8929322060', 'zillionsoftech@gmail.com', 'New Adrash nagar Gali Number 1, New Adarsh Nagar, Rewari, Haryana, India', 'Rewari', 'Haryana', '123110', '123456789654', 'ssc', 'yas1231100003.jpg', 'aadhaarfrontyas1231100003.jpg', 'aadhaarbackyas1231100003.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `subscriber`
--

CREATE TABLE `subscriber` (
  `subid` int(11) NOT NULL,
  `admission_id` varchar(30) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `feereceiveddate` date NOT NULL,
  `amount` decimal(10,0) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subscriber`
--

INSERT INTO `subscriber` (`subid`, `admission_id`, `start_date`, `end_date`, `feereceiveddate`, `amount`, `status`) VALUES
(5, 'kam1231100001', '2024-04-04', '2024-04-24', '2024-04-05', 600, 0),
(6, 'kam1231100001', '2024-04-04', '2024-04-24', '2024-04-05', 600, 0),
(7, 'kam1231100001', '2024-04-04', '2024-04-11', '2024-04-04', 700, 0),
(8, 'kam1231100001', '2024-04-04', '2024-04-18', '2024-04-11', 500, 1),
(9, 'har1234010002', '2024-04-11', '2024-04-30', '2024-04-11', 600, 1),
(10, 'yas1231100003', '2024-04-13', '2024-04-19', '2024-04-13', 500, 1),
(11, 'nav1234010004', '2024-04-06', '2024-05-06', '2024-04-08', 600, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userid` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `userpassword` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `username`, `userpassword`) VALUES
(1, 'harshit', '1234'),
(2, 'ashu', 'ashupw');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `enquiry`
--
ALTER TABLE `enquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seats`
--
ALTER TABLE `seats`
  ADD PRIMARY KEY (`seatid`),
  ADD KEY `fkstudent` (`admission_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`admission_id`);

--
-- Indexes for table `subscriber`
--
ALTER TABLE `subscriber`
  ADD PRIMARY KEY (`subid`),
  ADD KEY `fk` (`admission_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `enquiry`
--
ALTER TABLE `enquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `subscriber`
--
ALTER TABLE `subscriber`
  MODIFY `subid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `seats`
--
ALTER TABLE `seats`
  ADD CONSTRAINT `fkstudent` FOREIGN KEY (`admission_id`) REFERENCES `student` (`admission_id`);

--
-- Constraints for table `subscriber`
--
ALTER TABLE `subscriber`
  ADD CONSTRAINT `fk` FOREIGN KEY (`admission_id`) REFERENCES `student` (`admission_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
