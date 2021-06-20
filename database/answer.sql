-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 03, 2021 at 07:01 AM
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
-- Table structure for table `answer`
--

CREATE TABLE `answer` (
  `id` int(11) NOT NULL,
  `ans` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `h1` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `h2` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `h3` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `answer`
--

INSERT INTO `answer` (`id`, `ans`, `h1`, `h2`, `h3`) VALUES
(1, 'CLOUD STORAGE', 'a', 'c', 'b'),
(2, 'SHELL SCRIPTING', 'b', '', ''),
(3, 'LIQUID COOLING', 'e', '', ''),
(4, 'OPERATING SYSTEM', '', '', ''),
(5, 'DIMENSIONS', '', '', ''),
(6, 'BUG FAIRY', '', '', ''),
(7, 'WEB CRAWLER', '', '', ''),
(8, 'SYSTEM INTEGRATION', '', '', ''),
(9, 'SEARCH PENGUIN', '', '', ''),
(10, 'NETIQUETTE', '', '', ''),
(11, 'Alw47s_Y0u_Sh0uld_S3e_S0urc3_C0d3', 'where did this page come from, think about it!', '', ''),
(12, '4in\'t 3in4ry fun', ' ', '', ''),
(13, 'iT w4s tRicKY', '', '', ''),
(14, 'N0t that s3cUrE, I GuEEs', '', '', ''),
(15, 'source_aint_secure', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answer`
--
ALTER TABLE `answer`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answer`
--
ALTER TABLE `answer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
