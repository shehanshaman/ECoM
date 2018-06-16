-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 14, 2018 at 05:51 PM
-- Server version: 10.2.12-MariaDB
-- PHP Version: 7.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id5778277_provitial`
--

-- --------------------------------------------------------

--
-- Table structure for table `disconnect_tb`
--

CREATE TABLE `disconnect_tb` (
  `disconnect_id` int(11) NOT NULL,
  `meter_id` varchar(10) NOT NULL,
  `time` datetime NOT NULL,
  `isRepaired` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `meter_tb`
--

CREATE TABLE `meter_tb` (
  `meter_id` varchar(10) NOT NULL,
  `client_id` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `last_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `meter_tb`
--

INSERT INTO `meter_tb` (`meter_id`, `client_id`, `password`, `last_update`) VALUES
('1', '1', '1', '2018-05-02 00:00:00'),
('100', '1', '1234', '2018-03-01 00:00:00'),
('101', '2', '1234', '2018-03-02 00:00:00'),
('103', '3', '1234', '2018-03-03 00:00:00'),
('11', '12', '21', '2018-05-03 00:00:00'),
('111', '12', '21', '2018-05-03 00:00:00'),
('1111', '100000037', 'gundu', '0000-00-00 00:00:00'),
('1200000000', '100000041', '9999', '2018-05-03 00:00:00'),
('12112', '12', '345', '2018-05-03 00:00:00'),
('1212121212', '1111', '9999', '2018-06-01 00:00:00'),
('1511', '12', '21', '2018-05-03 00:00:00'),
('19951995', '1', '1', '2018-05-02 00:00:00'),
('2', '100000032', 'gundu', '0000-00-00 00:00:00'),
('212334', '100000034', 'gundu', '0000-00-00 00:00:00'),
('43535', '100000036', 'gundu', '0000-00-00 00:00:00'),
('45', '45', '45', '2018-05-03 00:00:00'),
('456456456', '100000040', 'gundu', '2018-05-03 00:00:00'),
('9000', '100000037', 'gundu', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `reading_tb`
--

CREATE TABLE `reading_tb` (
  `reading_id` int(11) NOT NULL,
  `meter_id` varchar(10) NOT NULL,
  `units` double NOT NULL,
  `time` datetime NOT NULL,
  `isUploaded` tinyint(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reading_tb`
--

INSERT INTO `reading_tb` (`reading_id`, `meter_id`, `units`, `time`, `isUploaded`) VALUES
(1, '100', 10, '2018-03-01 00:00:00', NULL),
(2, '100', 12, '2018-03-02 00:00:00', NULL),
(3, '102', 1, '2018-03-02 07:14:24', NULL),
(6, '101', 22, '2018-03-02 00:00:00', NULL),
(13, '101', 20.2, '2018-03-03 20:50:23', NULL),
(14, '101', 202, '2018-03-03 20:50:46', NULL),
(15, '101', 202, '2018-03-03 20:52:02', NULL),
(17, '101', 22, '2018-03-03 21:02:56', NULL),
(18, '101', 22, '2018-03-03 21:03:33', NULL),
(19, '101', 22, '2018-03-03 21:05:40', NULL),
(21, '101', 244, '2018-03-03 21:54:41', 0),
(23, '101', 3, '2018-03-03 22:32:42', 0),
(24, '102', 5, '2018-03-03 23:20:48', 0),
(25, '102', 45, '2018-03-03 23:50:48', 0),
(26, '102', 4, '2018-03-03 23:53:42', 0),
(27, '102', 7, '2018-03-03 23:57:55', 0),
(28, '102', 8, '2018-03-03 23:58:16', 0),
(29, '100', 5, '2018-03-03 23:28:28', 0),
(30, '100', 4, '2018-03-03 23:58:28', 0),
(39, '998812342', 1, '2018-03-16 20:29:34', 0),
(40, '998812342', 15, '2018-03-16 20:59:34', 0),
(41, '998812342', 15, '2018-03-16 20:59:40', 0),
(42, '998812342', 1, '2018-03-17 12:42:37', 0),
(43, '998812342', 15, '2018-03-17 13:12:37', 0),
(44, '998812342', 15, '2018-03-17 13:12:48', 0),
(45, '998812342', 15, '2018-03-17 13:21:25', 0),
(46, '998812342', 15, '2018-03-17 13:21:34', 0),
(47, '998812342', 15, '2018-03-17 13:21:40', 0),
(48, '998812342', 1, '2018-03-17 14:01:40', 0),
(49, '998812342', 15, '2018-03-17 14:31:40', 0),
(50, '998812342', 15, '2018-03-17 14:31:44', 0),
(51, '998812342', 15, '2018-03-17 14:32:50', 0),
(52, '998812342', 15, '2018-03-17 14:34:58', 0),
(53, '998812342', 15, '2018-03-17 14:41:19', 0),
(54, '998812342', 15, '2018-03-17 14:43:23', 0),
(55, '998812342', 15, '2018-03-17 14:44:30', 0),
(56, '998812342', 15, '2018-03-17 14:47:15', 0),
(57, '101', 12, '2018-06-13 14:15:13', 0),
(58, '101', 34, '2018-06-13 09:15:13', 0),
(59, '101', 35, '2018-06-13 09:15:31', 0),
(60, '101', 12, '2018-06-13 21:03:05', 0),
(61, '101', 1, '2018-06-13 16:03:05', 0),
(62, '101', 10, '2018-06-13 16:03:11', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `disconnect_tb`
--
ALTER TABLE `disconnect_tb`
  ADD PRIMARY KEY (`disconnect_id`);

--
-- Indexes for table `meter_tb`
--
ALTER TABLE `meter_tb`
  ADD PRIMARY KEY (`meter_id`);

--
-- Indexes for table `reading_tb`
--
ALTER TABLE `reading_tb`
  ADD PRIMARY KEY (`reading_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `disconnect_tb`
--
ALTER TABLE `disconnect_tb`
  MODIFY `disconnect_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reading_tb`
--
ALTER TABLE `reading_tb`
  MODIFY `reading_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
