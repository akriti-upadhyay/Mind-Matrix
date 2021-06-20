-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 03, 2021 at 07:03 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id16641181_ctf`
--

-- --------------------------------------------------------

--
-- Table structure for table `Registration`
--

CREATE TABLE `Registration` (
  `id` int(50) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `rollno` int(50) NOT NULL,
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `institute_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Registration`
--

INSERT INTO `Registration` (`id`, `name`, `email`, `rollno`, `username`, `institute_name`, `password`) VALUES
(12, 'Akriti Upadhyay', 'akritiu1099@gmail.com', 205120007, 'akriti', 'nitt', '123'),
(13, 'Khushboo', 'khush@gmail.com', 205120041, 'khushi', 'nitt', '123'),
(14, 'Saksham', 'saksham@gmail.com', 205119088, 'saksham', 'nitt', '123'),
(42, 'Akriti Upadhyay', 'akr@yahoo.com', 32, 'name', 'nitt', '123'),
(43, 'hsr', 'wwf@gmail.com', 18, 'a', 'nitt', '123'),
(44, 'HAILY', 'hkf@gmail.com', 43, 'haily', 'nitt', '123'),
(45, 'john', 'john@gmail.com', 48, 'johny', 'nit', '123'),
(46, 'jack', 'jack@gmail.com', 87, 'jack', 'nit', '123'),
(47, 'ash', 'ash@gmail.com', 89, 'ash', 'nit', '123'),
(48, 'vinnie', 'vini@gmail.com', 100, 'vinnie', 'nitt', '123'),
(49, 'oggy', 'oggy@gmail.com', 99, 'oggy', 'nitt', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Registration`
--
ALTER TABLE `Registration`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Registration`
--
ALTER TABLE `Registration`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
