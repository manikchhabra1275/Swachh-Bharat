-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 31, 2018 at 03:45 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbbharathacks`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbcontactus`
--

CREATE TABLE `tbcontactus` (
  `id` int(11) NOT NULL,
  `fname` varchar(300) NOT NULL,
  `lname` varchar(300) NOT NULL,
  `email` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbcontactus`
--

INSERT INTO `tbcontactus` (`id`, `fname`, `lname`, `email`) VALUES
(1, 'manik', 'chhabra', 'manikchhabra1275@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbemployee`
--

CREATE TABLE `tbemployee` (
  `id` int(11) NOT NULL,
  `fname` varchar(300) NOT NULL,
  `lname` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL,
  `email` varchar(300) NOT NULL,
  `image` varchar(300) NOT NULL,
  `secret_id` int(11) NOT NULL,
  `area_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbemployee`
--

INSERT INTO `tbemployee` (`id`, `fname`, `lname`, `password`, `email`, `image`, `secret_id`, `area_id`) VALUES
(1, 'xyz', 'cde', 'xyz', 'xyz@gmail.com', '', 123, 1),
(2, 'anu', 'anu', 'qwerty', 'anu@gmail.com', '', 123, 123);

-- --------------------------------------------------------

--
-- Table structure for table `tbmap`
--

CREATE TABLE `tbmap` (
  `id` int(11) NOT NULL,
  `email` varchar(300) NOT NULL,
  `complaint` text NOT NULL,
  `name` varchar(500) NOT NULL,
  `latitude` double NOT NULL,
  `longitude` double NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbmap`
--

INSERT INTO `tbmap` (`id`, `email`, `complaint`, `name`, `latitude`, `longitude`, `status`) VALUES
(1, 'ankul@gmail.com', 'dirty garbage', 'delhi', 28.7209016, 77.1407473, 1),
(2, 'manikchhabra1275@gmail.com', '\r\nGarbage found in my market', 'Noida', 28.5355, 77.391, 1),
(3, 'abc@gmail.com', 'Garbage Found', 'Gurugram', 28.4595, 77.0266, 1),
(4, 'xyz@yahoo.com', 'Garbage hasn\'t been picked Up.', 'Rohtak', 28.8955, 76.6066, 1),
(5, 'pqrs@outlook.com', 'Aggregated Waste Located', 'Sonipat', 29.0523, 76.9182, 1),
(9, 'ankul@gmail.com', 'Heavy Garbage', 'pitampura', 28.720970200000004, 77.1407424, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbuser`
--

CREATE TABLE `tbuser` (
  `id` int(11) NOT NULL,
  `fname` varchar(300) NOT NULL,
  `lname` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL,
  `email` varchar(300) NOT NULL,
  `image` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbuser`
--

INSERT INTO `tbuser` (`id`, `fname`, `lname`, `password`, `email`, `image`) VALUES
(1, 'manik', 'chhabra', 'manik', 'manikchhabra1275@gmail.com', ''),
(2, 'kunal', 'kalra', 'kunal', 'kunalkalra121@gmail.com', ''),
(3, 'abc', 'xyz', 'abc', 'abc@gmail.com', ''),
(5, 'kk', 'kka', 'kal', 'kal@gmail.com', ''),
(6, 'abc', 'abc', 'abcd', 'abc@gmail.com', ''),
(7, 'ankul', 'singh', 'qwerty', 'abc@gmail.com', ''),
(8, 'ankul', 'ssingh', 'qwerty', 'ankul@gmail.com', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbcontactus`
--
ALTER TABLE `tbcontactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbemployee`
--
ALTER TABLE `tbemployee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbmap`
--
ALTER TABLE `tbmap`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbuser`
--
ALTER TABLE `tbuser`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbcontactus`
--
ALTER TABLE `tbcontactus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbemployee`
--
ALTER TABLE `tbemployee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbmap`
--
ALTER TABLE `tbmap`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tbuser`
--
ALTER TABLE `tbuser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
