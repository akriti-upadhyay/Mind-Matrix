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
-- Table structure for table `session`
--

CREATE TABLE `session` (
  `id` int(11) NOT NULL,
  `sid` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `session`
--

INSERT INTO `session` (`id`, `sid`, `time`) VALUES
(26, 'jainsaksham1210', '2021-04-22 20:01:22'),
(27, 'asd', '2021-04-22 20:06:10'),
(28, 'asd', '2021-04-22 20:06:10'),
(29, 'asd', '2021-04-22 20:06:10'),
(30, 'asd', '2021-04-22 20:06:10'),
(31, '111111', '2021-04-22 20:14:39'),
(32, '111111', '2021-04-22 20:14:39'),
(33, '111111', '2021-04-22 20:20:59'),
(34, '111111', '2021-04-22 20:20:59'),
(35, 'asd', '2021-04-22 20:57:31'),
(36, 'asd', '2021-04-22 20:57:31'),
(37, 'asd', '2021-04-23 11:16:24'),
(38, 'asd', '2021-04-23 11:16:24'),
(39, 'asd', '2021-04-23 11:32:22'),
(40, 'asd', '2021-04-23 11:32:22'),
(41, '111111', '2021-04-23 11:47:35'),
(42, '111111', '2021-04-23 11:47:35'),
(43, '111111', '2021-04-23 13:00:00'),
(44, '111111', '2021-04-23 13:00:00'),
(45, '111111', '2021-04-23 13:19:09'),
(46, '111111', '2021-04-23 13:19:09'),
(47, 'asd', '2021-04-24 04:21:26'),
(48, 'asd', '2021-04-24 04:21:26'),
(49, 'asd', '2021-04-24 04:38:28'),
(50, 'asd', '2021-04-24 04:38:28'),
(51, 'asd', '2021-04-24 04:39:52'),
(52, 'asd', '2021-04-24 04:39:52'),
(53, 'akriti', '2021-04-24 05:16:54'),
(54, 'akriti', '2021-04-24 05:16:54'),
(55, 'khushi', '2021-04-24 05:20:02'),
(56, 'khushi', '2021-04-24 05:20:03'),
(57, 'saksham', '2021-04-24 05:21:18'),
(58, 'saksham', '2021-04-24 05:21:18'),
(59, 'akriti', '2021-04-24 05:30:31'),
(60, 'akriti', '2021-04-24 05:30:31'),
(61, 'akriti ', '2021-04-25 07:59:05'),
(62, 'akriti ', '2021-04-25 07:59:05'),
(63, 'khushi', '2021-04-27 13:50:54'),
(64, 'khushi', '2021-04-27 13:50:54'),
(65, 'khushi', '2021-04-27 13:53:16'),
(66, 'khushi', '2021-04-27 13:53:16'),
(67, 'khushi', '2021-04-27 13:54:30'),
(68, 'khushi', '2021-04-27 13:54:30'),
(69, 'khushi', '2021-04-27 13:56:08'),
(70, 'khushi', '2021-04-27 13:56:08'),
(71, 'khushi', '2021-04-27 14:03:08'),
(72, 'khushi', '2021-04-27 14:03:08'),
(73, 'khushi', '2021-04-27 14:27:31'),
(74, 'khushi', '2021-04-27 14:27:31'),
(75, 'khushi', '2021-04-27 14:28:15'),
(76, 'khushi', '2021-04-27 14:28:15'),
(77, 'khushi', '2021-04-27 14:40:55'),
(78, 'khushi', '2021-04-27 14:40:55'),
(79, 'khushi', '2021-04-27 14:41:31'),
(80, 'khushi', '2021-04-27 14:41:31'),
(81, 'khushi', '2021-04-27 14:50:36'),
(82, 'khushi', '2021-04-27 14:50:36'),
(83, 'khushi', '2021-04-27 16:19:45'),
(84, 'khushi', '2021-04-27 16:19:45'),
(85, 'khushi', '2021-04-27 16:27:12'),
(86, 'khushi', '2021-04-27 16:27:12'),
(87, 'khush', '2021-04-27 16:27:53'),
(88, 'khush', '2021-04-27 16:27:53'),
(89, 'khush', '2021-04-27 16:29:52'),
(90, 'khush', '2021-04-27 16:29:52'),
(91, 'saksham', '2021-04-27 16:51:07'),
(92, 'saksham', '2021-04-27 16:51:07'),
(93, 'khushi', '2021-04-27 17:07:46'),
(94, 'khushi', '2021-04-27 17:07:46'),
(95, 'saksham', '2021-04-27 17:15:44'),
(96, 'saksham', '2021-04-27 17:15:44'),
(97, 'khushi', '2021-04-28 07:16:07'),
(98, 'khushi', '2021-04-28 07:16:07'),
(99, 'akriti', '2021-04-28 10:59:03'),
(100, 'akriti', '2021-04-28 10:59:03'),
(101, 'shweta', '2021-04-28 12:03:32'),
(102, 'shweta', '2021-04-28 12:03:32'),
(103, 'sachin', '2021-04-28 13:06:15'),
(104, 'sachin', '2021-04-28 13:06:15'),
(105, 'khushi', '2021-04-28 13:12:47'),
(106, 'khushi', '2021-04-28 13:12:47'),
(107, 'sachin', '2021-04-28 13:29:01'),
(108, 'sachin', '2021-04-28 13:29:01'),
(109, 'asd', '2021-04-28 13:44:47'),
(110, 'asd', '2021-04-28 13:44:47'),
(111, 'asd', '2021-04-28 14:10:36'),
(112, 'asd', '2021-04-28 14:10:36'),
(113, 'dimps', '2021-04-28 14:11:30'),
(114, 'dimps', '2021-04-28 14:11:30'),
(115, 'dimps', '2021-04-28 14:19:55'),
(116, 'dimps', '2021-04-28 14:19:55'),
(117, 'khushi', '2021-04-28 14:20:37'),
(118, 'khushi', '2021-04-28 14:20:37'),
(119, 'sakshi', '2021-04-28 14:20:46'),
(120, 'sakshi', '2021-04-28 14:20:46'),
(121, 'khushi', '2021-04-28 14:36:58'),
(122, 'khushi', '2021-04-28 14:36:58'),
(123, 'khushi', '2021-04-28 14:37:46'),
(124, 'khushi', '2021-04-28 14:37:46'),
(125, 'khushi', '2021-04-28 14:37:57'),
(126, 'khushi', '2021-04-28 14:37:57'),
(127, 'dimps', '2021-04-28 14:39:29'),
(128, 'dimps', '2021-04-28 14:39:29'),
(129, 'khushi', '2021-04-28 14:40:36'),
(130, 'khushi', '2021-04-28 14:40:36'),
(131, 'sakshi', '2021-04-28 17:50:13'),
(132, 'sakshi', '2021-04-28 17:50:13'),
(133, 'sakshi', '2021-04-28 17:57:29'),
(134, 'sakshi', '2021-04-28 17:57:29'),
(135, 'kh', '2021-04-28 17:58:05'),
(136, 'kh', '2021-04-28 17:58:05'),
(137, 'khushi', '2021-04-28 18:05:16'),
(138, 'khushi', '2021-04-28 18:05:16'),
(139, 'riya', '2021-04-28 18:08:05'),
(140, 'riya', '2021-04-28 18:08:05'),
(141, '111', '2021-04-28 18:09:06'),
(142, '111', '2021-04-28 18:09:06'),
(143, 'khushi', '2021-04-28 19:31:41'),
(144, 'khushi', '2021-04-28 19:31:41'),
(145, 'khushi', '2021-04-28 19:33:44'),
(146, 'khushi', '2021-04-28 19:33:44'),
(147, 'khushi', '2021-04-29 05:40:55'),
(148, 'khushi', '2021-04-29 05:40:55'),
(149, 'dimps', '2021-04-29 05:45:27'),
(150, 'dimps', '2021-04-29 05:45:27'),
(151, 'snehA', '2021-04-29 06:11:02'),
(152, 'snehA', '2021-04-29 06:11:02'),
(153, 'neha', '2021-04-29 06:23:15'),
(154, 'neha', '2021-04-29 06:23:15'),
(155, 'khuh', '2021-04-29 10:40:55'),
(156, 'khuh', '2021-04-29 10:40:55'),
(157, 'khuh', '2021-04-29 10:50:28'),
(158, 'khuh', '2021-04-29 10:50:28'),
(159, 'khuh', '2021-04-29 11:16:58'),
(160, 'khuh', '2021-04-29 11:16:58'),
(161, 'new', '2021-04-29 12:27:36'),
(162, 'new', '2021-04-29 12:27:36'),
(163, 'new', '2021-04-29 12:34:24'),
(164, 'new', '2021-04-29 12:34:24'),
(165, 'khushi', '2021-04-29 16:55:54'),
(166, 'khushi', '2021-04-29 16:55:54'),
(167, 'khushh', '2021-04-29 17:37:39'),
(168, 'khushh', '2021-04-29 17:37:39'),
(169, 'khushH', '2021-04-29 17:38:35'),
(170, 'khushH', '2021-04-29 17:38:35'),
(171, 'khushh', '2021-04-29 17:38:57'),
(172, 'khushh', '2021-04-29 17:38:57'),
(173, 'sachin', '2021-04-29 17:41:47'),
(174, 'sachin', '2021-04-29 17:41:47'),
(175, 'khushi', '2021-04-29 17:43:00'),
(176, 'khushi', '2021-04-29 17:43:00'),
(177, 'sachin', '2021-04-29 18:05:55'),
(178, 'sachin', '2021-04-29 18:05:55'),
(179, 'emi', '2021-04-29 18:06:37'),
(180, 'emi', '2021-04-29 18:06:37'),
(181, 'khushi', '2021-04-30 10:45:04'),
(182, 'khushi', '2021-04-30 10:45:04'),
(183, 'sachin', '2021-04-30 10:46:39'),
(184, 'sachin', '2021-04-30 10:46:39'),
(185, 'ely', '2021-04-30 10:48:05'),
(186, 'ely', '2021-04-30 10:48:05'),
(187, 'sachin', '2021-04-30 10:58:41'),
(188, 'sachin', '2021-04-30 10:58:41'),
(189, 'akriti', '2021-05-01 03:08:40'),
(190, 'akriti', '2021-05-01 03:08:41'),
(191, 'khushi', '2021-05-02 12:39:33'),
(192, 'khushi', '2021-05-02 12:39:33'),
(193, 'khushi', '2021-05-02 12:39:39'),
(194, 'khushi', '2021-05-02 12:39:39'),
(195, 'khushi', '2021-05-02 12:40:29'),
(196, 'khushi', '2021-05-02 12:40:29'),
(197, 'khushi', '2021-05-02 12:41:02'),
(198, 'khushi', '2021-05-02 12:41:02'),
(199, 'khushi', '2021-05-02 12:43:52'),
(200, 'khushi', '2021-05-02 12:43:52'),
(201, 'akr', '2021-05-02 12:45:29'),
(202, 'akr', '2021-05-02 12:45:29'),
(203, 'khushi', '2021-05-02 12:45:33'),
(204, 'khushi', '2021-05-02 12:45:33'),
(205, 'khushi', '2021-05-02 12:46:43'),
(206, 'khushi', '2021-05-02 12:46:43'),
(207, 'akr', '2021-05-02 12:48:23'),
(208, 'akr', '2021-05-02 12:48:23'),
(209, 'aku', '2021-05-02 13:12:33'),
(210, 'aku', '2021-05-02 13:12:33'),
(211, 'khushi', '2021-05-02 14:28:42'),
(212, 'khushi', '2021-05-02 14:28:42'),
(213, 'akr ', '2021-05-02 14:29:20'),
(214, 'akr ', '2021-05-02 14:29:20'),
(215, 'f', '2021-05-02 14:42:21'),
(216, 'f', '2021-05-02 14:42:21'),
(217, 'akr ', '2021-05-02 14:42:29'),
(218, 'akr ', '2021-05-02 14:42:29'),
(219, 'akr ', '2021-05-02 14:42:52'),
(220, 'akr ', '2021-05-02 14:42:52'),
(221, 'khushi', '2021-05-02 14:45:39'),
(222, 'khushi', '2021-05-02 14:45:39'),
(223, 'akr ', '2021-05-02 14:57:00'),
(224, 'akr ', '2021-05-02 14:57:00'),
(225, 'akr ', '2021-05-02 15:48:44'),
(226, 'akr ', '2021-05-02 15:48:44'),
(227, 'akriti', '2021-05-02 16:46:56'),
(228, 'akriti', '2021-05-02 16:46:56'),
(229, 'akriti', '2021-05-02 16:47:20'),
(230, 'akriti', '2021-05-02 16:47:20'),
(231, 'akriti', '2021-05-02 16:48:41'),
(232, 'akriti', '2021-05-02 16:48:41'),
(233, 'a', '2021-05-02 17:42:24'),
(234, 'a', '2021-05-02 17:42:24'),
(235, 'haily', '2021-05-02 17:53:19'),
(236, 'haily', '2021-05-02 17:53:19'),
(237, 'johny', '2021-05-02 17:58:51'),
(238, 'johny', '2021-05-02 17:58:51'),
(239, 'jack', '2021-05-02 18:09:41'),
(240, 'jack', '2021-05-02 18:09:41'),
(241, 'ash', '2021-05-02 18:26:50'),
(242, 'ash', '2021-05-02 18:26:50'),
(243, 'vinnie', '2021-05-02 18:39:21'),
(244, 'vinnie', '2021-05-02 18:39:21'),
(245, 'oggy', '2021-05-03 06:56:03'),
(246, 'oggy', '2021-05-03 06:56:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `session`
--
ALTER TABLE `session`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `session`
--
ALTER TABLE `session`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=247;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
