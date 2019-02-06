-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2018 at 05:40 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `new_quiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `category_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category_name`) VALUES
(1, 'PHP'),
(2, 'HTML'),
(3, 'JS'),
(4, 'Bootstrap');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `question` varchar(254) NOT NULL,
  `ans1` varchar(50) NOT NULL,
  `ans2` varchar(50) NOT NULL,
  `ans3` varchar(50) NOT NULL,
  `ans4` varchar(50) NOT NULL,
  `ans` int(2) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `question`, `ans1`, `ans2`, `ans3`, `ans4`, `ans`, `category_id`) VALUES
(1, 'what is 2+2 ?', '4', '3', '2', '1', 0, 1),
(2, 'Scripting language is?', 'PS', 'PHP', 'JAVA', 'C', 1, 1),
(3, 'varaible in php ', '$', '#', '@', '*', 0, 1),
(4, 'What is $$', 'varaible ', 'ref variable', 'nothing ', 'undefined', 1, 1),
(5, 'Create web page with', 'PHP', 'JAVA', 'CSS', 'HTML', 3, 2),
(6, 'HTML works on ', 'tag ', 'layout', 'nothing', 'not defined', 0, 2),
(7, 'Largest heading is', 'h6', 'h5', 'h4', 'h1', 3, 2),
(8, 'smallest heading ', 'h1', 'h4', 'h5', 'h6', 3, 2),
(9, 'MAgic function  use in??', 'HML', 'JAVASCRIPT', 'CSS', 'PHP', 3, 1),
(10, 'JS stands for??', 'Java standerd', 'Just Share', 'Java Script', 'None', 2, 3),
(11, 'Bootstrap is library of??', 'PHP', 'JS', 'HTM/CSS', 'Jquery', 2, 4);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `cpass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `fname`, `lname`, `email`, `pass`, `cpass`) VALUES
(1, 'vaibhav', 'gangrade', 'vivgangs@gmail.com', '1234', '1234'),
(2, 'surbhi', 'gangrade', 'sur@gmail.com', '1234', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `id` int(11) NOT NULL,
  `name` varchar(80) NOT NULL,
  `category` varchar(30) NOT NULL,
  `total_questions` int(11) NOT NULL,
  `right_ans` int(11) NOT NULL,
  `wrong_ans` int(11) NOT NULL,
  `not_attempt` int(11) NOT NULL,
  `percentage` int(11) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
