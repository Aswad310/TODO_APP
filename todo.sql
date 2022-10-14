-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 14, 2022 at 05:39 PM
-- Server version: 8.0.30-0ubuntu0.20.04.2
-- PHP Version: 8.0.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `todo`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_todo`
--

CREATE TABLE `tbl_todo` (
  `id` int NOT NULL,
  `todo` text NOT NULL,
  `user_id` int NOT NULL,
  `status` varchar(45) NOT NULL DEFAULT 'Ongoing',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_todo`
--

INSERT INTO `tbl_todo` (`id`, `todo`, `user_id`, `status`, `created_at`, `updated_at`) VALUES
(3, 'Drink Water', 1, 'Done', '2022-10-01 12:28:16', '2022-10-01 12:28:37'),
(7, 'Haircut', 43, 'Done', '2022-10-03 11:28:24', '2022-10-03 16:03:59'),
(73, 'Stand-up at 6:30 PM', 52, 'Done', '2022-10-06 09:08:42', '2022-10-11 16:19:25'),
(74, 'Meeting with Sir. Atif', 52, 'Done', '2022-10-06 09:09:17', '2022-10-11 16:11:05'),
(113, 'Jumma & Asar Prayers', 32, 'Done', '2022-10-14 07:49:47', '2022-10-14 09:44:05'),
(114, 'Magrib & Esha Prayers', 32, 'Ongoing', '2022-10-14 07:49:55', NULL),
(115, 'Lunch ', 32, 'Ongoing', '2022-10-14 07:49:59', NULL),
(116, 'Standup', 32, 'Ongoing', '2022-10-14 07:52:42', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` int NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` tinyint NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `username`, `password`, `status`, `created_at`, `updated_at`) VALUES
(8, 'batool', '827ccb0eea8a706c4c34a16891f84e7b', 1, '2022-10-01 16:21:17', NULL),
(10, 'vegit', '827ccb0eea8a706c4c34a16891f84e7b', 1, '2022-10-01 16:28:30', NULL),
(11, 'wiron', '827ccb0eea8a706c4c34a16891f84e7b', 1, '2022-10-01 16:30:09', NULL),
(22, 'tuba', '64916f5722ccdeb1700d515035faf2f4', 1, '2022-10-02 12:36:44', NULL),
(24, 'atif123', '979d472a84804b9f647bc185a877a8b5', 1, '2022-10-02 12:48:53', NULL),
(26, 'Aswad Ali', '202cb962ac59075b964b07152d234b70', 1, '2022-10-02 12:59:36', NULL),
(28, 'ayesha', '202cb962ac59075b964b07152d234b70', 1, '2022-10-02 13:00:58', NULL),
(31, 'abad', '202cb962ac59075b964b07152d234b70', 1, '2022-10-02 14:30:08', NULL),
(32, 'aswad310', '827ccb0eea8a706c4c34a16891f84e7b', 1, '2022-10-02 14:48:36', NULL),
(34, 'fada', '8d3656ee225b8ac3ffdf65df14f42ab2', 0, '2022-10-03 09:53:09', '2022-10-06 09:51:36'),
(36, 'dadd', '9dd1cbdaec89487b1ba9583f8aa26198', 1, '2022-10-03 09:56:55', NULL),
(38, 'wotuc', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 1, '2022-10-03 10:02:04', NULL),
(39, 'fomubexu', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 1, '2022-10-03 10:03:05', NULL),
(40, 'salman', '827ccb0eea8a706c4c34a16891f84e7b', 1, '2022-10-03 10:03:50', NULL),
(43, 'abad310', '827ccb0eea8a706c4c34a16891f84e7b', 1, '2022-10-03 10:08:52', NULL),
(44, 'xomema', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 1, '2022-10-03 10:18:00', NULL),
(45, 'qexelufy', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 1, '2022-10-03 10:20:29', NULL),
(46, 'lopehi', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 1, '2022-10-03 10:21:17', NULL),
(47, 'zesivese', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 1, '2022-10-03 10:22:21', NULL),
(48, 'nyxefetynu', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 1, '2022-10-03 10:26:41', NULL),
(49, 'syfisiq', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 1, '2022-10-03 10:28:03', NULL),
(50, 'lagerubolu', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 1, '2022-10-03 10:28:29', NULL),
(51, 'viwur', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 1, '2022-10-03 10:28:41', NULL),
(52, 'maaz', '827ccb0eea8a706c4c34a16891f84e7b', 1, '2022-10-03 12:32:55', NULL),
(53, 'salman320', '827ccb0eea8a706c4c34a16891f84e7b', 1, '2022-10-04 15:17:48', NULL),
(54, 'afridi320', '827ccb0eea8a706c4c34a16891f84e7b', 1, '2022-10-05 13:03:25', NULL),
(55, 'munaza72', '827ccb0eea8a706c4c34a16891f84e7b', 1, '2022-10-08 12:47:41', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_todo`
--
ALTER TABLE `tbl_todo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username_UNIQUE` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_todo`
--
ALTER TABLE `tbl_todo`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
