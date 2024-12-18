-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2024 at 01:17 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pakfixer`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_password` varchar(255) NOT NULL,
  `admin_status` int(11) NOT NULL,
  `admin_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`admin_id`, `admin_name`, `admin_email`, `admin_password`, `admin_status`, `admin_date`) VALUES
(20, 'Tesla', 'maniya@gmail.com', '$2y$10$slc6MZHXaLPAAszJNMFPDO/7I9G/72fbu5WkgpsGlmIZXxVtYqfEO', 0, '2024-11-12 04:01:15'),
(21, 'Tesla', 'jabirmemon53@gmail.com', '$2y$10$W70wGjyW9XngdqXFsqJnduZq.XmqpYVonBtfqQZnLzUiMUx/1yeZG', 0, '2024-11-12 04:01:40'),
(22, 'Tesla', 'jabirmehghmon53@gmail.com', '$2y$10$Lea1t3Ge/BSItj/ZhhoNpuNOkDSxBeBjXrmP.CblHeNN/itRzWFoy', 0, '2024-11-12 04:02:48'),
(23, 'Tesla', 'jabirmccemon53@gmail.com', '$2y$10$C4RqiJTQG7mO3qHD0mWjpOSA6OEV6flOjMF.5YxiOC0oaXyD1LCVq', 0, '2024-11-12 04:05:11'),
(24, 'Tesla', 'jabirmeon53@gmail.com', '$2y$10$jMsjD5.0NlHIG8X8AfFG4e1VbAoGZLG4wA.rPw97VE2WMJdAtUb8K', 0, '2024-11-12 04:05:35'),
(25, 'Tesla', 'maniyafgf@gmail.com', '$2y$10$N675qaAKiv3NjFNLpBhHFeTnS25MGUq60KlHCfiFY.H5jbFCCsxZa', 0, '2024-11-12 04:06:19'),
(26, 'Tesla', 'jabirmemvbvon53@gmail.com', '$2y$10$Hqenu1pdXlKBss4HdVjvH.vIC0FBhqEifN5.1NUk4Riz6gBr9Y1CO', 0, '2024-11-12 04:18:01'),
(27, 'Tesla', 'salman@gmail.com', '$2y$10$ArfBVCt8NdYfsgutvuihn.NFn6mxQR/CTP64KJ/zGC.f8CK5qJasK', 0, '2024-11-12 04:19:38'),
(28, '', 'maniycvca@gmail.com', '331b184847bb1808123473d76c45540b', 0, '2024-11-12 04:25:36'),
(29, '', 'hanryjack56@hotmail.com', 'b857eed5c9405c1f2b98048aae506792', 0, '2024-11-12 04:26:08'),
(30, '', 'jabirmedfdmon53@gmail.com', '9c72446df124ddf214b698c1e2312371', 0, '2024-11-12 04:29:37'),
(31, '', 'maffdniya@gmail.com', '25d55ad283aa400af464c76d713c07ad', 0, '2024-11-12 04:36:40'),
(32, '', 'manfdiya@gmail.com', '1bbd886460827015e5d605ed44252251', 0, '2024-11-12 04:45:43'),
(33, 'ahmed', 'hacker@gmail.com', '25d55ad283aa400af464c76d713c07ad', 0, '2024-11-28 16:30:03');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `msg_id` int(11) NOT NULL,
  `msg_name` varchar(255) NOT NULL,
  `msg_number` varchar(255) NOT NULL,
  `msg_description` varchar(255) NOT NULL,
  `msg_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`msg_id`, `msg_name`, `msg_number`, `msg_description`, `msg_date`) VALUES
(1, 'Noman', '03163436817', 'hello i want to register this portal ', '2024-11-05 16:40:01');

-- --------------------------------------------------------

--
-- Table structure for table `skillcards`
--

CREATE TABLE `skillcards` (
  `skill_id` int(11) NOT NULL,
  `skill_name` varchar(255) NOT NULL,
  `skill_number` varchar(255) NOT NULL,
  `skill_wnumber` varchar(255) NOT NULL,
  `skill_location` varchar(255) NOT NULL,
  `skill_experience` varchar(255) NOT NULL,
  `skill_description` varchar(255) NOT NULL,
  `skill_img` varchar(255) NOT NULL,
  `skill_category` varchar(255) NOT NULL,
  `skill_docs` varchar(255) NOT NULL,
  `skill_likes` varchar(255) NOT NULL,
  `skill_views` varchar(255) NOT NULL,
  `skill_user_id` int(11) NOT NULL,
  `skill_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `skillcards`
--

INSERT INTO `skillcards` (`skill_id`, `skill_name`, `skill_number`, `skill_wnumber`, `skill_location`, `skill_experience`, `skill_description`, `skill_img`, `skill_category`, `skill_docs`, `skill_likes`, `skill_views`, `skill_user_id`, `skill_date`) VALUES
(6, 'Web Developer', 'sdfsdfsdfsdf', 'dsfdsf', 'sdfdsfdsfdsf', '2', 'dssdfsdfsdfdsfdsf', '', '', 'hhh.pdf', '0', '0', 33, '2024-12-04 16:22:53'),
(7, 'dfgdgfgf', 'sadasdasdsda', 'gfddddddfdd', 'dfdddgfdddddg', '2', 'dfgfgfgfdf', '', '', 'hhh.pdf', '0', '0', 33, '2024-12-10 16:43:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indexes for table `skillcards`
--
ALTER TABLE `skillcards`
  ADD PRIMARY KEY (`skill_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `skillcards`
--
ALTER TABLE `skillcards`
  MODIFY `skill_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
