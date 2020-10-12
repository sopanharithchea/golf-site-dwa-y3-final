-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2020 at 10:05 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `goftsite`
--

-- --------------------------------------------------------

--
-- Table structure for table `careers`
--

CREATE TABLE `careers` (
  `id` int(11) NOT NULL,
  `sector` varchar(100) NOT NULL,
  `position` varchar(100) NOT NULL,
  `open_post` int(11) NOT NULL,
  `location` varchar(200) NOT NULL,
  `deadline` varchar(100) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `active` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `careers`
--

INSERT INTO `careers` (`id`, `sector`, `position`, `open_post`, `location`, `deadline`, `description`, `updated_at`, `created_at`, `active`) VALUES
(1, 'Marketing Communications', 'Events Officer', 1, 'Phnom Penh', 'October 31, 2020', 'Degree in Communication- Willing to travel', '2020-10-12 00:40:43', '2020-10-12 00:40:43', 1),
(2, 'Database/Data Engineering/Data Analytics', 'Junior Data Analyst', 1, 'Phnom Penh', 'October 20, 2020', 'Bachelor’s degree in statistics, mathematics, economics, computer science, engineering', '2020-10-12 00:42:37', '2020-10-12 00:42:37', 1),
(3, 'Database/Data Engineering/Data Analytics', 'Senior Data Engineer', 1, 'Phnom Penh', 'October 31, 2020', '3 years of working experience working in a data engineering', '2020-10-12 00:43:15', '2020-10-12 00:43:15', 1),
(4, 'Programmers/Information Technology', 'Junior Application Developer', 1, 'Phnom Penh', 'October 31, 2020', 'Fresh graduate up to 1 year of relevant working experience', '2020-10-12 00:43:56', '2020-10-12 00:43:56', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `careers`
--
ALTER TABLE `careers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `careers`
--
ALTER TABLE `careers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
