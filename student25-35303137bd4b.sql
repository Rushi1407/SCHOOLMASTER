-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: sdb-58.hosting.stackcp.net
-- Generation Time: Apr 05, 2023 at 12:08 PM
-- Server version: 10.4.28-MariaDB-log
-- PHP Version: 7.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student25-35303137bd4b`
--

-- --------------------------------------------------------

--
-- Table structure for table `parents`
--

CREATE TABLE `parents` (
  `parent_id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone_no` int(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `parents`
--

INSERT INTO `parents` (`parent_id`, `name`, `address`, `phone_no`, `email`) VALUES
(3, 'Rajesh vaddoriya', '16 Tumbling Hill Street ', 754656845, 'rajeshvaddoriya@gmail.com'),
(4, 'Sanjay Bhanderi', '189 Bradford Road, Stanningley', 2147483647, 'sanjayb@gmail.com'),
(5, 'Vijay Valand', '74, new street, Leeds', 848348455, 'vvaland@icloud.com'),
(6, 'Mahatma Gandhi', '78 Sabarmati road, dandy', 878465124, 'kasturba@gmail.com'),
(7, 'Elon musk', '56, California Street, USA', 984568651, 'virous@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_id` int(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `number1` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `medical_info` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `fname`, `lname`, `number1`, `email`, `address`, `medical_info`, `gender`, `dob`) VALUES
(8, 'Raj ', 'Bhanderi', 798456548, 'rajbhanderi@gmail.com', '189 Bradford Road, Stanningley', '', 'male', '16/06/2001'),
(9, 'jashtina', 'valand', 94568464, 'jashtinav7878@gmail.com', '28, Leeds road, manchester, UK', '', 'female', '18/09/2000'),
(10, 'monika', 'gandhi', 96748524, 'mona4675@gmail.com', '6, victoria street, London.', '', 'female', '31/2/2006'),
(11, 'Chintan', 'Gadiya', 362159847, 'chintangadi@gmail.com', '78, movie road, Loda, lasan.', '', 'Male', '21/8/2002'),
(12, 'Rushikesh', 'Vaddoriya', 2147483647, 'rushikeshvaddoriya@gmail.com', '189 Bradford Road, Stanningley', '', 'Male', '14/09/2002'),
(35, 'Jay', 'Patel', 5165, 'jayujayu@gmail.com', '27,apollo gala, Harjeet road, Jasmeet.', '', 'Male', '15/09/1970');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `teachers_id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone_no` int(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `salary` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`teachers_id`, `name`, `address`, `phone_no`, `course`, `salary`) VALUES
(3, 'Albert ainstyn', '12, Heathrow Road, London, UK ', 95175386, 'Artificial intelligence', 36000),
(4, 'Shahrukh khan', '56,Dalas, San Francisco, USA', 2147483647, 'Data science', 28300),
(5, 'Gigi hadid', '6 Lebron Road, Australia.', 525732433, 'Business studies', 29000),
(6, 'Hemlataa Malini', '89, Karachi Road, Surat, India', 96748512, 'Aeronautical engineering', 42000),
(7, 'Alexandra rondes', '157, max road, wells, united kingdom.', 956386455, 'Drawing introduction', 25999);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `parents`
--
ALTER TABLE `parents`
  ADD PRIMARY KEY (`parent_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`teachers_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `parents`
--
ALTER TABLE `parents`
  MODIFY `parent_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `student_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `teachers_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
