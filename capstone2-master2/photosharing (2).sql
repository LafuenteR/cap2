-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 14, 2017 at 07:31 PM
-- Server version: 10.1.24-MariaDB
-- PHP Version: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `photosharing`
--

-- --------------------------------------------------------

--
-- Table structure for table `favorite`
--

CREATE TABLE `favorite` (
  `user_id` int(255) NOT NULL,
  `photo_id` int(255) NOT NULL,
  `fav_like` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `favorite`
--

INSERT INTO `favorite` (`user_id`, `photo_id`, `fav_like`) VALUES
(8, 48, 16),
(8, 48, 20),
(8, 48, 21),
(8, 48, 23),
(8, 32, 25),
(8, 0, 26),
(8, 0, 27),
(8, 0, 28),
(8, 0, 29),
(8, 0, 30),
(8, 0, 31),
(8, 0, 32),
(8, 0, 33),
(9, 0, 34),
(9, 0, 35),
(9, 48, 36),
(9, 0, 37),
(9, 0, 38),
(9, 0, 39),
(9, 0, 40),
(9, 0, 41),
(9, 0, 42),
(9, 0, 43),
(9, 0, 44),
(9, 0, 45),
(9, 0, 46),
(9, 0, 47),
(9, 48, 48),
(11, 0, 49),
(11, 0, 50),
(11, 32, 51),
(11, 0, 52),
(11, 48, 53),
(11, 48, 54),
(8, 48, 55),
(8, 0, 56),
(8, 0, 57),
(8, 0, 58),
(8, 0, 59);

-- --------------------------------------------------------

--
-- Table structure for table `Follow`
--

CREATE TABLE `Follow` (
  `user_id` int(11) NOT NULL,
  `finollow_ko` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Follow`
--

INSERT INTO `Follow` (`user_id`, `finollow_ko`, `id`) VALUES
(10, 11, 6),
(10, 9, 7),
(10, 8, 9),
(12, 11, 12),
(13, 12, 13),
(11, 12, 15),
(8, 12, 25),
(12, 8, 26),
(8, 10, 28);

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `img_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `img_username` varchar(255) NOT NULL,
  `caption` varchar(255) NOT NULL,
  `time_stamp` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`img_id`, `user_id`, `img`, `img_username`, `caption`, `time_stamp`) VALUES
(32, 9, 'Photo on 2-3-16 at 1.42 PM.jpg', 'emman', 'Photo Booth', '2017-07-13 10:07:08'),
(33, 9, '2012-09-21 15.43.05.jpg', 'emman', '', '2017-07-13 10:22:36'),
(34, 9, '2012-10-05 14.56.40.jpg', 'emman', '', '2017-07-13 10:22:37'),
(35, 9, 'Photo on 2-3-16 at 12.30 PM.jpg', 'emman', '', '2017-07-13 10:22:38'),
(36, 8, 'logo.png', 'lafuenter', 'Apple :)', '2017-07-13 10:22:39'),
(41, 10, 'Screen Shot 2017-03-01 at 11.42.11 PM.png', 'darryl', '', '2017-07-13 10:22:41'),
(42, 11, 'FT_HD_Wall L@â™«BerT copy 8.jpg', 'nico', 'Natsu', '2017-07-13 10:22:42'),
(43, 12, 'L@mBerT TorrenTs - Hunter x Hunter.jpg', 'joan', '', '2017-07-13 10:22:43'),
(44, 11, 'efg.jpg', 'nico', 'HXH', '2017-07-13 10:22:44'),
(45, 9, '1.jpg', 'emman', 'White Walker', '2017-07-13 10:22:45'),
(46, 12, 'whitewalker (2).jpg', 'joan', 'GOT', '2017-07-13 10:22:46'),
(47, 10, '21_arena.jpg', 'darryl', 'YeY', '2017-07-13 10:22:47'),
(48, 8, 'Apo-Reef.jpg', 'lafuenter', 'Apo Reef', '2017-07-13 10:22:48'),
(54, 8, 'FT_HD_Wall L@â™«BerT copy 2.jpg', 'lafuenter', 'Dark Sky', '2017-07-14 12:55:04'),
(55, 8, 'FT_HD_Wall L@â™«BerT copy 16.jpg', 'lafuenter', 'Laxus', '2017-07-14 13:23:59'),
(57, 8, 'Photo on 2-3-16 at 1.41 PM (original).jpg', 'lafuenter', '', '2017-07-14 15:00:27');

-- --------------------------------------------------------

--
-- Table structure for table `profile_pic`
--

CREATE TABLE `profile_pic` (
  `prof_id` int(11) NOT NULL,
  `prof_user_id` int(11) NOT NULL,
  `img_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `user_id` int(11) NOT NULL,
  `img_id` int(11) NOT NULL,
  `report_id` int(11) NOT NULL,
  `reporter` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`user_id`, `img_id`, `report_id`, `reporter`) VALUES
(8, 43, 4, 'lafuenter'),
(8, 35, 5, 'lafuenter'),
(8, 42, 6, 'lafuenter'),
(10, 42, 7, 'darryl'),
(8, 41, 8, 'lafuenter'),
(9, 33, 9, 'emman'),
(9, 46, 10, 'emman');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `username`, `password`, `role`) VALUES
(8, 'Ruel Lafuente', 'lafuenter', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'admin'),
(9, 'Emman Marasigan ', 'emman', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'regular'),
(10, 'Darryl Amposta', 'darryl', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'regular'),
(11, 'Nico Salvador', 'nico', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'regular'),
(12, 'Joan Getigan', 'joan', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'regular'),
(13, 'shane lalo', 'shane', 'e5e9fa1ba31ecd1ae84f75caaa474f3a663f05f4', 'regular'),
(14, 'Kevin Chavez', 'kevin', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'regular'),
(15, 'Julie Cabria', 'Julie', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'regular');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `favorite`
--
ALTER TABLE `favorite`
  ADD PRIMARY KEY (`fav_like`);

--
-- Indexes for table `Follow`
--
ALTER TABLE `Follow`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`img_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `profile_pic`
--
ALTER TABLE `profile_pic`
  ADD PRIMARY KEY (`prof_id`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`report_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `favorite`
--
ALTER TABLE `favorite`
  MODIFY `fav_like` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
--
-- AUTO_INCREMENT for table `Follow`
--
ALTER TABLE `Follow`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `img_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
--
-- AUTO_INCREMENT for table `profile_pic`
--
ALTER TABLE `profile_pic`
  MODIFY `prof_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `report_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
