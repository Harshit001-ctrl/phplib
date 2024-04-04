-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2024 at 04:42 AM
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
(7, 'Harshit Yadav 111', '9518125798', 'Rewari', 'Haryana', 'harshitrao@gmail.com', 'all r godd'),
(10, 'Harshit Rao', '9518125798', 'Rewari', 'Haryana', 'harshitrao@gmail.com', ''),
(11, 'Harshit Rao', '9518125798', 'Rewari', 'Haryana', 'harshitrao@gmail.com', 'good hello'),
(13, 'user 121', '1231231231', 'Rewari', 'Haryana', 'user1@gmail.com', 'all r godd'),
(14, 'user 19898', '1231231231', 'Rewari', 'Haryana', 'user1@gmail.com', 'hjhlj'),
(15, 'Harshit Yadav 65', '9518125798', 'Rewari', 'Haryana', 'harshit6453@gmail.com', 'world'),
(16, 'billu boxer', '`1`1331131', 'merut', 'uo', 'harshit@gmail.com', 'sc'),
(17, 'Harshit Yadav', '1351873810', 'Rewari', 'Haryana', 'harshit@gmail.com', 'dksd'),
(18, 'user 12', '1231231231', 'Rewari', 'Haryana', 'user1@gmail.com', '');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `admission_id` int(13) NOT NULL,
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
(4, 4, 'ashu', '8901164933', 'bjsvbd@gmail.com', 'Haryana', 'Rewari', '09876543211', '123401', '11', 'ash1234010004.jpg', 'aadhaarfrontash1234010004.jpg', 'aadhaarbackash1234010004.jpg'),
(5, 5, 'kunal', '8901164944', 'bjsvbd@gmail.com', 'Haryana', 'Rewari', '098765433122', '123401', '4', 'kun1234010005.jpg', 'aadhaarfrontkun1234010005.png', 'aadhaarbackkun1234010005.jpg');

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `enquiry`
--
ALTER TABLE `enquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `admission_id` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
