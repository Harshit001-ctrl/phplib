-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2024 at 06:48 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lib`
--

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE `enquiry` (
  `id` int(11) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `mobileno` varchar(10) DEFAULT NULL,
  `city` varchar(30) DEFAULT NULL,
  `state` varchar(30) DEFAULT NULL,
  `gmail` varchar(30) DEFAULT NULL,
  `review` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `enquiry`
--

INSERT INTO `enquiry` (`id`, `name`, `mobileno`, `city`, `state`, `gmail`, `review`) VALUES
(17, 'Harshit Yadav', '9518125798', 'Rewari', 'Haryana', 'harshit@gmail.com', ''),
(21, 'billu boxer141414', '`1`1331131', 'merut', 'uo', 'harshit@gmail.com', ''),
(23, 'abgd', '8901164311', 'Rewari', 'Haryana', 'harshit@gmail.com', ';lkhgfdfghjkllkjhgf');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `admission_id` varchar(13) NOT NULL,
  `gsn` int(11) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `contact` varchar(20) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL,
  `state` varchar(20) DEFAULT NULL,
  `city` varchar(20) DEFAULT NULL,
  `aadharnumber` varchar(12) DEFAULT NULL,
  `pin` varchar(20) DEFAULT NULL,
  `study` varchar(20) DEFAULT NULL,
  `image` varchar(100) NOT NULL,
  `aadhaarfront` varchar(100) NOT NULL,
  `aadhaarback` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`admission_id`, `gsn`, `name`, `contact`, `email`, `state`, `city`, `aadharnumber`, `pin`, `study`, `image`, `aadhaarfront`, `aadhaarback`) VALUES
('har1234010001', 1, 'Harshit Yadav', '9518125798', 'harshityadav3080@gmail.com', 'Haryana', 'Rewari', '4565455465', '123401', '4', 'har1234010001.png', 'aadhaarfronthar1234010001.jpg', 'aadhaarbackhar1234010001.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `subscriber`
--

CREATE TABLE `subscriber` (
  `subid` int(11) NOT NULL,
  `admission_id` varchar(30) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `feereciveddate` date DEFAULT NULL,
  `amount` decimal(10,2) DEFAULT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subscriber`
--

INSERT INTO `subscriber` (`subid`, `admission_id`, `start_date`, `end_date`, `feereciveddate`, `amount`, `status`) VALUES
(1, 'kun1234010003', '2024-04-12', '2024-04-30', '0000-00-00', 600.00, 0),
(2, 'kun1234010003', '2024-04-11', '2024-04-16', '0000-00-00', 444.00, 0),
(3, 'kun1234010003', '2024-04-13', '2024-04-30', '0000-00-00', 600.00, 1),
(4, 'kun1234010003', '2024-04-17', '2024-04-30', '0000-00-00', 400.00, 1),
(5, 'kun1234010003', '2024-04-06', '2024-04-16', '0000-00-00', 1.00, 0),
(6, 'har1234010001', '2024-04-19', '2024-04-24', '0000-00-00', 600.00, 1),
(7, 'har1234010001', '2024-03-14', '2024-03-31', '0000-00-00', 600.00, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `userpassword` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `username`, `userpassword`) VALUES
(1, 'harshit', 'harshit');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `enquiry`
--
ALTER TABLE `enquiry`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `enquiry`
--
ALTER TABLE `enquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `subscriber`
--
ALTER TABLE `subscriber`
  MODIFY `subid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
