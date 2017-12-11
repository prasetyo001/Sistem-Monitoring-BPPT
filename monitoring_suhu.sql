-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2017 at 09:24 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `monitoring_suhu`
--

-- --------------------------------------------------------

--
-- Table structure for table `room1`
--

CREATE TABLE `room1` (
  `id` int(255) NOT NULL,
  `kd_room` char(2) NOT NULL,
  `suhu` varchar(3) NOT NULL,
  `kelembapan` varchar(3) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room1`
--

INSERT INTO `room1` (`id`, `kd_room`, `suhu`, `kelembapan`, `time`) VALUES
(4, '4', '20', '56', '2017-10-19 07:04:41'),
(12, '5', '23', '59', '2017-10-19 07:04:41'),
(14, '3', '24', '65', '2017-10-20 16:52:53'),
(15, '2', '25', '67', '2017-11-07 05:12:18'),
(16, '1', '22', '60', '2017-11-08 08:34:03'),
(17, '2', '26', '80', '2017-11-08 08:36:07'),
(18, '1', '12', '90', '2017-11-08 08:49:22'),
(19, '1', '27', '87', '2017-11-08 16:06:56'),
(20, '2', '27', '88', '2017-11-08 16:06:56'),
(21, '3', '27', '89', '2017-11-08 16:06:56'),
(22, '4', '27', '90', '2017-11-08 16:06:56'),
(23, '5', '27', '100', '2017-11-08 16:06:56'),
(24, '1', '21', '55', '2017-11-08 17:17:15'),
(25, '2', '23', '57', '2017-11-08 17:17:15'),
(26, '3', '22', '54', '2017-11-08 17:17:15'),
(27, '4', '20', '58', '2017-11-08 17:17:15'),
(28, '5', '19', '59', '2017-11-08 17:17:15'),
(29, '1', '24', '60', '2017-11-13 04:36:08'),
(30, '1', '17', '40', '2017-11-14 07:12:45'),
(31, '1', '25', '70', '2017-11-14 07:15:18'),
(32, '1', '21', '56', '2017-11-14 07:26:44'),
(33, '1', '17', '67', '2017-11-14 07:27:11'),
(35, '2', '14', '40', '2017-11-14 08:00:36'),
(36, '5', '27', '60', '2017-11-14 08:00:36'),
(37, '2', '23', '59', '2017-12-05 06:35:08'),
(38, '2', '24', '59', '2017-12-05 06:35:08'),
(39, '2', '25', '60', '2017-12-05 06:35:08'),
(40, '2', '22', '67', '2017-12-05 06:35:08'),
(41, '2', '21', '58', '2017-12-05 06:35:08'),
(42, '2', '21', '70', '2017-12-05 07:14:22');

-- --------------------------------------------------------

--
-- Table structure for table `set_kelembaban`
--

CREATE TABLE `set_kelembaban` (
  `id` int(255) NOT NULL,
  `kelembabanA` varchar(3) NOT NULL,
  `kelembabanB` varchar(3) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `set_kelembaban`
--

INSERT INTO `set_kelembaban` (`id`, `kelembabanA`, `kelembabanB`, `time`) VALUES
(1, '69', '40', '2017-11-28 08:41:21');

-- --------------------------------------------------------

--
-- Table structure for table `set_suhu`
--

CREATE TABLE `set_suhu` (
  `id` int(255) NOT NULL,
  `suhuA` varchar(3) NOT NULL,
  `suhuB` varchar(3) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `set_suhu`
--

INSERT INTO `set_suhu` (`id`, `suhuA`, `suhuB`, `time`) VALUES
(1, '26', '16', '2017-12-04 05:22:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `room1`
--
ALTER TABLE `room1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `set_kelembaban`
--
ALTER TABLE `set_kelembaban`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `set_suhu`
--
ALTER TABLE `set_suhu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `room1`
--
ALTER TABLE `room1`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT for table `set_kelembaban`
--
ALTER TABLE `set_kelembaban`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `set_suhu`
--
ALTER TABLE `set_suhu`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
