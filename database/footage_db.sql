-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2022 at 10:45 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `footage_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `video_id` varchar(255) NOT NULL,
  `is_active` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `title`, `video_id`, `is_active`, `created_at`, `updated_at`) VALUES
(1, '27 Best Beach Photography Ideas Easy To Try. 📷🌊', 'TwPhDkxgSIM', 1, '2022-06-14 01:53:44', '2022-06-14 02:09:19'),
(2, '9 Creative SHOT IDEAS - Cinematic Camera Movements &amp; Tips For Epic B-ROLL VIDEO', 'Ky3OGTLDVO0', 1, '2022-06-14 01:54:34', '2022-06-14 02:09:27'),
(3, 'NATURE - CINEMATIC NATURE B ROLL - filmed on iPhone 11 with Dji osmo mobile 3 gimbal', 'bkOIDtYXAx8', 1, '2022-06-14 02:02:58', '2022-06-14 02:09:36'),
(4, 'Aaley Mal ( ආලේ මල් ) - Kanchana Anuradhi Official Music Vide', 'HEm9KIjEVV4', 0, '2022-06-14 02:09:08', '2022-06-14 02:09:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
