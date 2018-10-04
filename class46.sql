-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 26, 2018 at 03:30 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.1.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `class46`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `biography` varchar(50) NOT NULL,
  `doy` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `photo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `fname`, `lname`, `email`, `biography`, `doy`, `gender`, `photo`) VALUES
(1, 'omar', 'Faruq', 'omar_baf@yahoo.com', 'fghbfgh', '2015', 'on', 'Desert.jpg'),
(2, 'omar', 'Faruq', 'omar_baf@yahoo.com', 'fghbfgh55555', '2015', 'on', 'Desert.jpg'),
(3, 'omar', 'Faruq', 'omar_baf@yahoo.com', 'omar_baf@yahoo.com.txt', '2015', 'on', 'Desert.jpg'),
(4, 'omar', 'gfh', 'fh@yah.com', 'fh@yah.com.txt', '2024', 'Male', 'Desert.jpg'),
(5, 'omar', 'Faruq', 'omar_baf@yahoo.com', 'omar_baf@yahoo.com.txt', '2015', 'Male', 'Desert.jpg'),
(6, 'Solaiman', 'Ahmed', 's.b@gmail.com', 's.b@gmail.com.txt', '2015', 'Male', 'Chrysanthemum.jpg'),
(7, 'omar', 'Faruq', 'omar_baf@yahoo.com', 'omar_baf@yahoo.com.txt', '2016', 'Male', 'Desert.jpg'),
(8, 'gfghgfh', 'fghfgh', 'fh@yah.com', 'fh@yah.com.txt', '2015', 'Male', 'Desert.jpg'),
(9, 'omar', 'Faruq', 'omar_baf@yahoo.com', 'omar_baf@yahoo.com.txt', '2016', 'Male', 'Desert.jpg'),
(10, 'Jahangir ', 'Alam', 'abc@gmail.com', 'abc@gmail.com.txt', '2015', 'Male', 'Chrysanthemum.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
