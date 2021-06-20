-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 03, 2021 at 07:02 AM
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
-- Table structure for table `leaderboard`
--

CREATE TABLE `leaderboard` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `rollno` int(11) NOT NULL,
  `score` double DEFAULT 0,
  `count` int(10) NOT NULL,
  `count1` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `leaderboard`
--

INSERT INTO `leaderboard` (`id`, `name`, `rollno`, `score`, `count`, `count1`) VALUES
(8, 'Akriti Upadhyay', 205120007, 790, 0, 16),
(9, 'Khushboo', 205120041, 170, 0, 18),
(10, 'Saksham', 205119088, 20, 3, 2),
(11, 'ghdfzth', 32, 40, 0, 3),
(12, 'Shweta', 34, 40, 0, 3),
(13, 'sachin', 84, 190, 2, 6),
(14, 'dsg', 12, 40, 2, 3),
(15, 'dimple', 28, 0, 5, 1),
(16, 'arg', 21, 40, 2, 4),
(17, 'jgf', 23, 20, 1, 3),
(19, '11', 111, 60, 1, 4),
(20, 'Sneha', 14, 40, 6, 5),
(21, 'neha', 62, 40, 5, 3),
(23, 'sht', 42, 40, 0, 4),
(24, 'seg', 13, 240, 4, 15),
(25, 'dhn', 31, 120, 0, 6),
(27, 'wqf', 85, 56.253, 0, 3),
(28, 'kjg', 65, 0, 0, 1),
(29, 'AA', 98, 210, 0, 9),
(30, 'Akriti', 7, 140, 12, 14),
(35, 'hsr', 18, 88.5, 0, 5),
(36, 'HAILY', 43, 88.5, 0, 4),
(37, 'john', 48, 665.5, 0, 16),
(38, 'jack', 87, 107, 0, 15),
(39, 'ash', 89, 188.5, 0, 16),
(40, 'vinnie', 100, 0, 3, 16),
(41, 'oggy', 99, 75.5, 1, 16);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `leaderboard`
--
ALTER TABLE `leaderboard`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `rollno` (`rollno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `leaderboard`
--
ALTER TABLE `leaderboard`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
