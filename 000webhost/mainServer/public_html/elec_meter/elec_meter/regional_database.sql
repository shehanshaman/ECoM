-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2018 at 04:54 PM
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
-- Database: `regional_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_tb`
--

CREATE TABLE `admin_tb` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(15) NOT NULL,
  `password` varchar(50) NOT NULL,
  `user_type` varchar(10) NOT NULL,
  `last_login` datetime NOT NULL,
  `is_delete` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_tb`
--

INSERT INTO `admin_tb` (`id`, `name`, `password`, `user_type`, `last_login`, `is_delete`) VALUES
(2001, 'mainAdmin', 'admin', 'FullAccess', '2018-04-23 10:47:56', 0),
(2101, 'mainAdmin', 'admin', 'FullAccess', '2018-02-01 02:24:08', 0),
(2201, 'mainAdmin', 'admin', 'FullAccess', '2018-02-01 02:24:08', 0),
(2301, 'mainAdmin', 'admin', 'FullAccess', '2018-02-01 02:24:08', 0),
(2401, 'mainAdmin', 'admin', 'FullAccess', '2018-02-01 02:24:08', 0),
(2501, 'mainAdmin', 'admin', 'FullAccess', '2018-02-01 02:24:08', 0),
(2502, 'admin1', 'ab196aa83e870bd5f5e4d7182f8c2995eab08f1f', 'Full', '0000-00-00 00:00:00', 0),
(2503, 'user01', 'ab196aa83e870bd5f5e4d7182f8c2995eab08f1f', 'Default', '0000-00-00 00:00:00', 0),
(2504, 'user01', 'ab196aa83e870bd5f5e4d7182f8c2995eab08f1f', 'Default', '0000-00-00 00:00:00', 0),
(2505, 'user4', 'ab196aa83e870bd5f5e4d7182f8c2995eab08f1f', 'Default', '0000-00-00 00:00:00', 0),
(3001, 'mainAdmin', 'admin', 'FullAccess', '2018-02-01 02:24:08', 0),
(3101, 'mainAdmin', 'admin', 'FullAccess', '2018-02-01 02:24:08', 0),
(3201, 'mainAdmin', 'admin', 'FullAccess', '2018-02-01 02:24:08', 0),
(3301, 'mainAdmin', 'admin', 'FullAccess', '2018-02-01 02:24:08', 0),
(3401, 'mainAdmin', 'admin', 'FullAccess', '2018-02-01 02:24:08', 0),
(3501, 'mainAdmin', 'admin', 'FullAccess', '2018-02-01 02:24:08', 0),
(3502, 'user1', '2ded90af4621435a12946af0691e8b015c07b41e', 'Default', '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `all_reading_table`
--

CREATE TABLE `all_reading_table` (
  `province_id` int(10) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `unit` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `all_reading_table`
--

INSERT INTO `all_reading_table` (`province_id`, `date`, `time`, `unit`) VALUES
(0, '2018-02-01', '03:00:00', 0),
(0, '2018-02-08', '02:00:00', 2),
(0, '2018-02-08', '03:00:00', 4),
(0, '2018-02-08', '04:00:00', 6),
(0, '2018-02-08', '05:00:00', 2),
(1, '2018-02-21', '00:16:00', 23),
(2, '2018-02-20', '02:00:00', 12),
(1, '2018-02-21', '02:00:00', 500),
(2, '2018-02-01', '01:00:00', 5),
(0, '2018-02-02', '08:00:00', 10),
(2, '2018-02-03', '01:00:00', 5),
(4, '2018-02-05', '08:00:00', 10),
(6, '2018-02-06', '03:00:00', 7),
(3, '2018-02-07', '04:00:00', 8),
(6, '2018-02-08', '03:00:00', 7),
(3, '2018-02-09', '04:00:00', 8),
(6, '2018-02-21', '14:00:00', 7),
(3, '2018-02-20', '04:00:00', 8),
(6, '2018-02-21', '13:00:00', 7),
(3, '2018-01-30', '04:00:00', 8),
(6, '2018-02-10', '03:00:00', 7),
(3, '2018-01-29', '04:00:00', 8),
(6, '2018-02-11', '03:00:00', 7),
(3, '2018-01-28', '04:00:00', 8),
(6, '2018-02-12', '03:00:00', 7),
(3, '2018-01-27', '04:00:00', 8),
(6, '2018-02-13', '03:00:00', 7),
(3, '2018-01-26', '04:00:00', 8),
(6, '2018-02-14', '03:00:00', 7),
(3, '2018-01-25', '04:00:00', 8),
(6, '2018-02-15', '03:00:00', 7),
(3, '2018-01-24', '04:00:00', 8),
(6, '2018-02-16', '03:00:00', 7),
(3, '2018-01-23', '04:00:00', 8),
(6, '2018-02-17', '03:00:00', 7),
(3, '2018-01-22', '04:00:00', 8),
(6, '2018-02-18', '03:00:00', 7),
(3, '2018-01-21', '04:00:00', 8),
(6, '2018-02-19', '03:00:00', 7),
(3, '2018-02-21', '04:00:00', 8),
(1, '2018-02-22', '03:00:00', 3),
(2, '2018-02-22', '07:00:00', 6),
(1, '2018-02-22', '04:00:00', 3),
(2, '2018-02-22', '08:00:00', 4),
(1, '2018-02-22', '05:00:00', 5),
(2, '2018-02-22', '09:00:00', 8),
(1, '2018-02-22', '06:00:00', 9),
(2, '2018-02-22', '10:00:00', 2),
(1, '2018-02-22', '07:00:00', 1),
(2, '2018-02-22', '11:00:00', 1),
(2, '2018-02-23', '03:00:00', 12),
(0, '2018-04-23', '01:00:00', 1),
(0, '2018-04-23', '02:00:00', 2),
(0, '2018-04-23', '01:00:00', 1),
(0, '2018-04-23', '02:00:00', 2),
(0, '2018-04-23', '03:00:00', 3),
(0, '2018-04-23', '10:00:00', 1),
(0, '2018-04-23', '04:00:00', 3),
(0, '2018-04-23', '09:00:00', 5),
(0, '2018-04-23', '05:00:00', 2),
(0, '2018-04-23', '08:00:00', 3),
(0, '2018-04-23', '06:00:00', 5),
(0, '2018-04-23', '07:00:00', 2),
(0, '2018-04-22', '02:00:00', 49),
(0, '2018-04-21', '02:00:00', 34),
(0, '2018-04-22', '02:00:00', 49),
(0, '2018-04-21', '02:00:00', 34),
(0, '2018-04-22', '02:00:00', 49),
(0, '2018-04-21', '02:00:00', 34),
(0, '2018-04-22', '02:00:00', 49),
(0, '2018-04-21', '02:00:00', 34),
(0, '2018-04-22', '02:00:00', 49),
(0, '2018-04-21', '02:00:00', 34),
(0, '2018-04-22', '02:00:00', 49),
(0, '2018-04-21', '02:00:00', 34),
(0, '2018-04-22', '02:00:00', 49),
(0, '2018-04-21', '02:00:00', 34),
(0, '2018-04-22', '02:00:00', 49),
(0, '2018-04-21', '02:00:00', 34),
(0, '2018-04-22', '02:00:00', 49),
(0, '2018-04-21', '02:00:00', 34),
(0, '2018-04-22', '02:00:00', 49),
(0, '2018-04-21', '02:00:00', 34),
(0, '2018-04-22', '02:00:00', 49),
(0, '2018-04-21', '02:00:00', 34),
(0, '2018-04-22', '02:00:00', 49),
(0, '2018-04-21', '02:00:00', 34),
(0, '2018-04-20', '03:00:00', 456),
(0, '2018-04-19', '06:00:00', 634),
(0, '2018-04-18', '03:00:00', 456),
(0, '2018-04-19', '06:00:00', 634),
(0, '2018-04-17', '03:00:00', 446),
(0, '2018-04-04', '06:00:00', 123),
(0, '2018-04-16', '03:00:00', 436),
(0, '2018-04-05', '06:00:00', 345),
(0, '2018-04-15', '03:00:00', 426),
(0, '2018-04-06', '06:00:00', 456),
(0, '2018-04-14', '03:00:00', 456),
(0, '2018-04-07', '06:00:00', 156),
(0, '2018-04-13', '03:00:00', 476),
(0, '2018-04-08', '06:00:00', 543),
(0, '2018-04-12', '03:00:00', 423),
(0, '2018-04-09', '06:00:00', 345),
(0, '2018-04-11', '03:00:00', 345),
(0, '2018-04-10', '06:00:00', 123),
(0, '2018-04-03', '03:00:00', 156),
(0, '2018-03-29', '06:00:00', 894),
(0, '2018-04-02', '03:00:00', 756),
(0, '2018-03-28', '06:00:00', 454),
(0, '2018-04-01', '03:00:00', 856),
(0, '2018-03-27', '06:00:00', 124),
(0, '2018-03-31', '03:00:00', 356),
(0, '2018-03-26', '06:00:00', 764),
(0, '2018-03-30', '03:00:00', 836),
(0, '2018-03-25', '06:00:00', 344);

-- --------------------------------------------------------

--
-- Table structure for table `bill_tb`
--

CREATE TABLE `bill_tb` (
  `bill_id` int(100) NOT NULL,
  `peak` double NOT NULL,
  `day` double NOT NULL,
  `off_peak` double NOT NULL,
  `unit_charges` double NOT NULL,
  `fixed_charge` double NOT NULL,
  `meter_id` int(10) NOT NULL,
  `month` date NOT NULL,
  `paid_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bill_tb`
--

INSERT INTO `bill_tb` (`bill_id`, `peak`, `day`, `off_peak`, `unit_charges`, `fixed_charge`, `meter_id`, `month`, `paid_id`) VALUES
(36, 0, 1.6, 0.5, 63, 30, 1, '2018-02-21', 0),
(37, 0, 1.13, 0, 28.25, 540, 2, '2018-02-21', 0),
(38, 50, 30, 15, 55, 456, 1, '2018-01-10', 0),
(39, 88, 45, 15, 780, 450, 1, '2017-12-20', 0),
(40, 69, 45, 56, 500, 654, 1, '2017-12-21', 0),
(41, 5, 99, 65, 525, 252, 1, '2017-10-21', 0);

-- --------------------------------------------------------

--
-- Table structure for table `client_tb`
--

CREATE TABLE `client_tb` (
  `client_id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(10) NOT NULL,
  `last_name` varchar(10) NOT NULL,
  `address` varchar(50) NOT NULL,
  `home_phone` varchar(15) NOT NULL,
  `mobile_phone` varchar(15) NOT NULL,
  `NIC` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `meter_id` int(11) NOT NULL,
  `password` varchar(50) NOT NULL,
  `current` varchar(50) NOT NULL,
  `deed_no` varchar(50) NOT NULL,
  `tax_number` varchar(50) NOT NULL,
  `purpose` varchar(50) NOT NULL,
  `is_delete` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client_tb`
--

INSERT INTO `client_tb` (`client_id`, `first_name`, `last_name`, `address`, `home_phone`, `mobile_phone`, `NIC`, `email`, `meter_id`, `password`, `current`, `deed_no`, `tax_number`, `purpose`, `is_delete`) VALUES
(1, 'chamara', 'wadawdaw', '', 'wadawd', 'awdwad', 'seffess', 'fesfse', 1, 'chamara123', '', 'fsefs', 'adfwa', '', 1),
(2, 'chamara', 'wadawdaw', '', 'wadawd', 'awdwad', 'seffess', 'fesfse', 2, 'chamara123', '', 'fsefs', 'adfwa', '', 1),
(3, 'chamara', 'wadawdaw', '', 'wadawd', 'awdwad', 'seffess', 'fesfse', 2, 'chamara123', '', 'fsefs', 'adfwa', '', 1),
(4, 'chamara', 'wadawdaw', '', 'wadawd', 'awdwad', 'seffess', 'fesfse', 2, 'chamara123', '', 'fsefs', 'adfwa', '', 1),
(5, 'chamara', 'wadawdaw', '', 'wadawd', 'awdwad', 'seffess', 'fesfse', 2, 'chamara123', '', 'fsefs', 'adfwa', '', 1),
(6, 'chamara', 'wadawdaw', '', 'wadawd', 'awdwad', 'seffess', 'fesfse', 2, 'chamara123', '', 'fsefs', 'adfwa', '', 1),
(7, 'chamara', 'wadawdaw', '', 'wadawd', 'awdwad', 'seffess', 'fesfse', 2, 'chamara123', '', 'fsefs', 'adfwa', '', 1),
(8, 'chamara', 'wadawdaw', '', 'wadawd', 'awdwad', 'seffess', 'fesfse', 2, 'chamara123', '', 'fsefs', 'adfwa', '', 1),
(9, 'chamara', 'wadawdaw', '', 'wadawd', 'awdwad', 'seffess', 'fesfse', 2, 'chamara123', '', 'fsefs', 'adfwa', '', 1),
(10, 'chamara', 'wadawdaw', '', 'wadawd', 'awdwad', 'seffess', 'fesfse', 12345678, '', '30', 'fsefs', 'adfwa', 'Domestic', 1),
(11, 'chamara', 'wadawdaw', '', 'wadawd', 'awdwad', 'seffess', 'fesfse', 1111111, '', '30', 'fsefs', 'adfwa', 'Merchant', 1),
(12, 'chamara', 'sdfgh', 'class=\"form-control\"', 'wadawd', 'awdwad', 'seffess', 'fesfse', 122345, '', '15', 'fsefs', 'adfwa', 'Merchant', 1),
(31, 'Gihan', 'Chamara', '94/6 A,Mawilmada Road Kandy', '812210097', '717455776', '953060108V', 'kggcbgunarathne@gmail.com', 1, 'chamara123', '', '', '', '', 0),
(32, 'Hashan', 'Chamara', '94/6 A Mawilmada Road Kandy', '812211097', '717255776', '953160108V', 'gunarathne@gmail.com', 2, 'chamara123', '', '', '', '', 1),
(33, 'Nihan', 'Gunathilak', '94/6 A Mawilmada Road Kandy', '812211097', '717255776', '912360108V', 'gunarathne@gmail.com', 2, 'chamara123', '', '', '', '', 1),
(34, 'sunil', 'perera', '94/6 A Mawilmada Road Kandy', '812211097', '2147483647', '978960108V', 'gunarathne@gmail.com', 2, 'chamara123', '', '', '', '', 1),
(35, 'widura', 'ekanayake', '94/6 A Mawilmada Road Kandy', '812211097', '717256776', '9531634708V', 'gunarathne@gmail.com', 2, 'chamara123', '', '', '', '', 1),
(36, 'chamath', 'Siribaddan', '94/6 A Mawilmada Road Kandy', '812211097', '717235776', '953890108V', 'gunarathne@gmail.com', 2, 'chamara123', '', '', '', '', 0),
(37, 'dilshan', 'Morawaliya', '94/6 A Mawilmada Road Kandy', '812211097', '71726476', '9536808V', 'gunarathne@gmail.com', 2, 'chamara123', '', '', '', '', 0),
(38, 'sapumal', 'Narampanaw', '94/6 A Mawilmada Road Kandy', '812211097', '717345776', '951230108V', 'gunarathne@gmail.com', 2, 'chamara123', '', '', '', '', 0),
(54, 'gihn', 'js', 'skksk wksk ws', '6325', '575', '545', '343ws', 1, '54', '30', '35', '46', 'hu', 0),
(78, 'sarath', 'wimalasiri', '45 kunasale kandy', '081221882', '07123456', '134567', 'fdvdv', 9876, '', '60', '1', '678', 'Merchant', 0),
(101, 'Tharindu', 'weerarathn', '94/6 A Mawilmada Road Kandy', '812211097', '71255776', '953109808V', 'gunarathne@gmail.com', 2, 'chamara123', '', '', '', '', 0),
(100000002, 'samanthi', 'Rathnayake', '92 colombo road kandy', '011234574', '071234532', '9535673224V', 'dileep@bestjobslk.com', 5678, '', '15', '123', '123454245', 'Domestic', 0),
(100000003, 'gundu', 'dssds', 'csdsd dcscs cscsdc', '123456', '234567', '12678654', 'dssd', 1234098, '', '15', '2345', '34567', 'Domestic', 0),
(100000004, 'gundu', 'dssds', 'csdsd dcscs cscsdc', '123456', '234567', '12678654', 'dssd', 12340981, '', '15', '2345', '34567', 'Domestic', 0),
(100000005, 'gundu', 'dssds', 'csdsd dcscs cscsdc', '123456', '234567', '12678654', 'dssd', 12120981, '', '15', '2345', '34567', 'Domestic', 0),
(100000006, 'gundu', 'dssds', 'csdsd dcscs cscsdc', '123456', '234567', '12678654', 'dssd', 12981, '', '15', '2345', '34567', 'Domestic', 0),
(100000007, 'gundu', 'dssds', 'csdsd dcscs cscsdc', '123456', '234567', '12678654', 'dssd', 12923481, '', '15', '2345', '34567', 'Domestic', 0),
(100000008, 'gundu', 'dssds', 'csdsd dcscs cscsdc', '123456', '234567', '12678654', 'dssd', 12923481, '', '15', '2345', '34567', 'Domestic', 0),
(100000009, 'gundu', 'dssds', 'csdsd dcscs cscsdc', '123456', '234567', '12678654', 'dssd', 12923481, '', '15', '2345', '34567', 'Domestic', 0),
(100000010, 'gundu', 'dssds', 'csdsd dcscs cscsdc', '123456', '234567', '12678654', 'dssd', 12923481, '', '15', '2345', '34567', 'Domestic', 0),
(100000011, 'gundu', 'dssds', 'csdsd dcscs cscsdc', '123456', '234567', '12678654', 'dssd', 12903481, '', '15', '2345', '34567', 'Domestic', 0),
(100000012, 'gundu', 'dssds', 'csdsd dcscs cscsdc', '123456', '234567', '12678654', 'dssd', 12903481, '', '15', '2345', '34567', 'Domestic', 0),
(100000013, 'harshana', 'gihan', 'csc caca sacc', '23456', '567', '4345533', 'dscdsc', 6000400, '', '30', '4', '8765', 'Merchant', 0),
(100000014, 'harshana', 'gihan', 'csc caca sacc', '23456', '567', '4345533', 'dscdsc', 6010400, '', '30', '4', '8765', 'Merchant', 0),
(100000015, 'harshana', 'gihan', 'csc caca sacc', '23456', '567', '4345533', 'dscdsc', 6010410, '', '30', '4', '8765', 'Merchant', 0),
(100000016, 'harshana', 'gihan', 'csc caca sacc', '23456', '567', '4345533', 'dscdsc', 6110410, '', '30', '4', '8765', 'Merchant', 0),
(100000017, 'harshana', 'gihan', 'csc caca sacc', '23456', '567', '4345533', 'dscdsc', 6110410, '', '30', '4', '8765', 'Merchant', 0),
(100000018, 'gui', '', '  ', '', '', '', '', 455, '', '15', '', '', '', 0),
(100000019, '', '', '  ', '', '', '', '', 1000, '', '', '', '', '', 0),
(100000020, '', '', '  ', '', '', '', '', 1255, '', '', '', '', '', 0),
(100000021, 'sarath', 'wimalasiri', '45 kunasale kandy', '081221882', '07123456', '134567', 'fdvdv', 9876, '', '60', '1', '678', 'Merchant', 0),
(100000023, '', '', '  ', '', '', '', '', 23, '', '15', '', '', 'Industry', 0),
(100000024, '', '', '  ', '', '', '', '', 1200, '', '15', '', '', 'Domestic', 0),
(100000025, '', '', '  ', '', '', '', '', 12001, '', '15', '', '', 'Domestic', 0),
(100000026, '', '', '  ', '', '', '', '', 3000, '', '', '', '', '', 0),
(100000027, '', '', '  ', '', '', '96543V', '', 9000, '', '', '', '', '', 0),
(100000028, '', '', '  ', '', '', '23456', '', 1111, '', '', '', '', '', 0),
(100000029, 'viky', 'kasun', '12 galle road colombo', '0812210028', '0712290121', '96401209v', 'kasun@gmail.com', 998812342, '', '30', '56', '332019', 'Domestic', 0),
(100000030, 'kaveesha', 'dilshani', '12 colombo nugegoda', '0819923323', '07123456', '953061234v', 'kggcbgunarathne@gmail.com', 2147483647, '', '15', '23', '32', 'Domestic', 0),
(100000031, 'kaveesha', 'dilshani', '12 colombo nugegoda', '0819923323', '07123456', '953061234v', 'kggcbgunarathne@gmail.com', 2147483647, '', '15', '23', '32', 'Domestic', 0),
(100000032, 'chamara', 'cscs', '33fs vsdvsv sdcs', '2345', '4335345', '23r3r2f', 'fdvdv', 2, '', '30', '32', '443', 'Merchant', 0),
(100000033, 'chamara', 'cscs', '33fs vsdvsv sdcs', '2345', '4335345', '23r3r2f', 'fdvdv', 2, '', '30', '32', '443', 'Merchant', 0),
(100000034, 'chamara', 'cscs', '33fs vsdvsv sdcs', '2345', '4335345', '23r3r2f', 'fdvdv', 212334, '', '30', '32', '443', 'Merchant', 0),
(100000035, 'chamara', 'cscs', '33fs vsdvsv sdcs', '2345', '4335345', '23r3r2f', 'fdvdv', 212334, '', '30', '32', '443', 'Merchant', 0),
(100000036, 'ggf', 'vdvd', 'vdsv vdvx vdxvd', 'xdvxv', 'dxvd', '43543ggdf', 'gd', 43535, '', '30', '435', 'vxdv', 'Merchant', 0);

-- --------------------------------------------------------

--
-- Table structure for table `comment_tb`
--

CREATE TABLE `comment_tb` (
  `comment_id` int(11) NOT NULL,
  `meter_id` varchar(10) NOT NULL,
  `comment` varchar(100) NOT NULL,
  `set_time` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment_tb`
--

INSERT INTO `comment_tb` (`comment_id`, `meter_id`, `comment`, `set_time`) VALUES
(1, '1', 'not set now', '2018-02-17 00:00:00'),
(2, '1', 'almost complete', '2018-02-18 00:00:00'),
(4, '1', 'imeditaels', '2018-02-18 23:35:42'),
(3, '1', 'complete', '2018-02-18 20:01:30'),
(5, '1', 'hi', '2018-02-23 10:12:55');

-- --------------------------------------------------------

--
-- Table structure for table `current_balance_tb`
--

CREATE TABLE `current_balance_tb` (
  `balance_id` int(11) NOT NULL,
  `meter_id` varchar(10) NOT NULL,
  `amount` double NOT NULL,
  `balance` double NOT NULL,
  `date` date NOT NULL,
  `months_to_pay` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `current_balance_tb`
--

INSERT INTO `current_balance_tb` (`balance_id`, `meter_id`, `amount`, `balance`, `date`, `months_to_pay`) VALUES
(9, '5', 500, 0, '2018-01-10', 0),
(8, '4', 150, 0, '2018-01-04', 0),
(7, '2', -568.25, -568.25, '2018-02-21', 1),
(6, '1', -93, -93, '2018-02-21', 1),
(10, '6', 545, 0, '2018-01-16', 0),
(11, '6', 78, 0, '2018-02-08', 0),
(12, '5', 514, 0, '2017-12-14', 0),
(13, '8', 116, 0, '2017-12-18', 0),
(14, '5', 126, 0, '2017-11-15', 0);

-- --------------------------------------------------------

--
-- Table structure for table `disconnect_tb`
--

CREATE TABLE `disconnect_tb` (
  `disconnect_id` int(11) NOT NULL,
  `meter_id` varchar(10) NOT NULL,
  `lost_time` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `disconnect_tb`
--

INSERT INTO `disconnect_tb` (`disconnect_id`, `meter_id`, `lost_time`) VALUES
(1, '1', '2018-02-17 00:00:00'),
(2, '1001', '2018-02-17 00:04:00'),
(15, '101', '2018-03-08 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `meter_tb`
--

CREATE TABLE `meter_tb` (
  `meter_id` int(10) NOT NULL,
  `meter_type` varchar(10) NOT NULL,
  `client_id` int(11) NOT NULL,
  `start_date` datetime NOT NULL,
  `location_lat` double NOT NULL,
  `location_lng` double NOT NULL,
  `password` varchar(40) NOT NULL,
  `connectivity` tinyint(4) NOT NULL,
  `bill_id` int(11) NOT NULL,
  `bill_type` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `meter_tb`
--

INSERT INTO `meter_tb` (`meter_id`, `meter_type`, `client_id`, `start_date`, `location_lat`, `location_lng`, `password`, `connectivity`, `bill_id`, `bill_type`) VALUES
(451, 'domestic', 1, '2018-02-06 00:00:00', 7.289582, 80.632653, 'Gihan123', 0, 1, 1),
(5672, 'domestic', 10000002, '2018-02-06 00:00:00', 1.2345, 0, 'Gihan123', 1, 1, 0),
(431001, 'domestic', 100000001, '2018-02-06 00:00:00', 6.973601, 79.872317, 'Gihan123', 0, 1, 0),
(451003, 'domestic', 1000003, '2018-02-06 00:00:00', 1.2345, 0, 'Gihan123', 1, 1, 0),
(471004, 'domestic', 1000004, '2018-02-06 00:00:00', 1.2345, 0, 'Gihan123', 1, 1, 0),
(321005, 'domestic', 1000005, '2018-02-06 00:00:00', 1.2345, 0, 'Gihan123', 1, 0, 0),
(361006, 'domestic', 1000006, '2018-02-06 00:00:00', 1.2345, 0, 'Gihan123', 1, 1, 0),
(1, 'domestric', 54, '2017-12-13 00:00:00', 7.25, 80.59, '123', 0, 45, 0),
(9876, '', 100000021, '0000-00-00 00:00:00', 0, 0, '', 0, 0, 0),
(9876, '', 100000022, '0000-00-00 00:00:00', 0, 0, '', 0, 0, 0),
(23, 'Industry', 100000023, '0000-00-00 00:00:00', 1.143456, 1.345567, '', 1, 0, 0),
(1200, 'Domestic', 100000024, '0000-00-00 00:00:00', 0, 0, '', 0, 0, 0),
(12001, 'Domestic', 100000025, '0000-00-00 00:00:00', 0, 0, '', 0, 0, 0),
(3000, '', 100000026, '0000-00-00 00:00:00', 0, 0, '', 0, 0, 0),
(9000, '', 100000027, '0000-00-00 00:00:00', 0, 0, '96543V', 0, 0, 0),
(1111, '', 100000028, '0000-00-00 00:00:00', 1.1111, 2.111, 'gundu', 1, 0, 0),
(998812342, 'Domestic', 100000029, '0000-00-00 00:00:00', 1.143456, 1.345567, 'gundu', 1, 0, 0),
(2, '', 2, '0000-00-00 00:00:00', 0, 0, 'gundu', 0, 0, 0),
(2, '', 3, '0000-00-00 00:00:00', 0, 0, 'gundu', 0, 0, 0),
(2, '', 4, '0000-00-00 00:00:00', 0, 0, 'gundu', 0, 0, 0),
(2, '', 5, '0000-00-00 00:00:00', 0, 0, 'gundu', 0, 0, 0),
(2, '', 6, '0000-00-00 00:00:00', 0, 0, 'gundu', 0, 0, 0),
(2, '', 7, '0000-00-00 00:00:00', 0, 0, 'gundu', 0, 0, 0),
(2, '', 8, '0000-00-00 00:00:00', 0, 0, 'gundu', 0, 0, 0),
(2, '', 9, '0000-00-00 00:00:00', 0, 0, 'gundu', 0, 0, 0),
(2, '', 32, '0000-00-00 00:00:00', 0, 0, 'gundu', 0, 0, 0),
(2, '', 33, '0000-00-00 00:00:00', 0, 0, 'gundu', 0, 0, 0),
(2, '', 34, '0000-00-00 00:00:00', 0, 0, 'gundu', 0, 0, 0),
(2, '', 35, '0000-00-00 00:00:00', 0, 0, 'gundu', 0, 0, 0),
(2, '', 36, '0000-00-00 00:00:00', 0, 0, 'gundu', 0, 0, 0),
(2, '', 37, '0000-00-00 00:00:00', 0, 0, 'gundu', 0, 0, 0),
(2, '', 38, '0000-00-00 00:00:00', 0, 0, 'gundu', 0, 0, 0),
(2, '', 100000001, '0000-00-00 00:00:00', 0, 0, 'gundu', 0, 0, 0),
(2, 'Merchant', 100000032, '0000-00-00 00:00:00', 0, 0, 'gundu', 0, 0, 0),
(2, '', 2, '0000-00-00 00:00:00', 0, 0, 'gundu', 0, 0, 0),
(2, '', 3, '0000-00-00 00:00:00', 0, 0, 'gundu', 0, 0, 0),
(2, '', 4, '0000-00-00 00:00:00', 0, 0, 'gundu', 0, 0, 0),
(2, '', 5, '0000-00-00 00:00:00', 0, 0, 'gundu', 0, 0, 0),
(2, '', 6, '0000-00-00 00:00:00', 0, 0, 'gundu', 0, 0, 0),
(2, '', 7, '0000-00-00 00:00:00', 0, 0, 'gundu', 0, 0, 0),
(2, '', 8, '0000-00-00 00:00:00', 0, 0, 'gundu', 0, 0, 0),
(2, '', 9, '0000-00-00 00:00:00', 0, 0, 'gundu', 0, 0, 0),
(2, '', 32, '0000-00-00 00:00:00', 0, 0, 'gundu', 0, 0, 0),
(2, '', 33, '0000-00-00 00:00:00', 0, 0, 'gundu', 0, 0, 0),
(2, '', 34, '0000-00-00 00:00:00', 0, 0, 'gundu', 0, 0, 0),
(2, '', 35, '0000-00-00 00:00:00', 0, 0, 'gundu', 0, 0, 0),
(2, '', 36, '0000-00-00 00:00:00', 0, 0, 'gundu', 0, 0, 0),
(2, '', 37, '0000-00-00 00:00:00', 0, 0, 'gundu', 0, 0, 0),
(2, '', 38, '0000-00-00 00:00:00', 0, 0, 'gundu', 0, 0, 0),
(2, '', 100000001, '0000-00-00 00:00:00', 0, 0, 'gundu', 0, 0, 0),
(2, 'Merchant', 100000032, '0000-00-00 00:00:00', 0, 0, 'gundu', 0, 0, 0),
(2, 'Merchant', 100000033, '0000-00-00 00:00:00', 0, 0, 'gundu', 0, 0, 0),
(212334, 'Merchant', 100000034, '0000-00-00 00:00:00', 0, 0, 'gundu', 0, 0, 0),
(212334, 'Merchant', 100000034, '0000-00-00 00:00:00', 0, 0, 'gundu', 0, 0, 0),
(212334, 'Merchant', 100000035, '0000-00-00 00:00:00', 0, 0, 'gundu', 0, 0, 0),
(101, 'domestric', 5, '2018-01-01 00:00:00', 6.934445, 79.844238, '123', 0, 48, 1),
(1001, 'domestric', 78, '2017-11-15 00:00:00', 6.93359, 80.426965, '123', 0, 100, 1),
(43535, 'Merchant', 100000036, '0000-00-00 00:00:00', 0, 0, 'gundu', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `provincemap_tb`
--

CREATE TABLE `provincemap_tb` (
  `meter_id` int(11) NOT NULL,
  `province_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `provincemap_tb`
--

INSERT INTO `provincemap_tb` (`meter_id`, `province_id`) VALUES
(555555555, 1),
(555555555, 1),
(555555555, 1),
(555555555, 1),
(555555555, 1),
(555555555, 1),
(555555555, 1),
(555555555, 1),
(555555555, 1),
(555555555, 1),
(555555555, 1),
(555555555, 1),
(555555555, 1),
(555555555, 1),
(555555555, 1),
(555555555, 1),
(555555555, 1),
(555555555, 1),
(2, 0),
(2, 0),
(2, 0),
(2, 0),
(2, 0),
(2, 0),
(2, 0),
(2, 0),
(2, 0),
(2, 0),
(2, 0),
(2, 0),
(2, 0),
(2, 0),
(2, 0),
(2, 0),
(2, 0),
(2, 0),
(0, 0),
(212334, 1),
(43535, 43534);

-- --------------------------------------------------------

--
-- Table structure for table `reading_tb`
--

CREATE TABLE `reading_tb` (
  `meter_id` int(10) NOT NULL,
  `time` datetime NOT NULL,
  `usage` double NOT NULL,
  `reading_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reading_tb`
--

INSERT INTO `reading_tb` (`meter_id`, `time`, `usage`, `reading_id`) VALUES
(1, '2018-02-01 01:00:00', 0.1, 1),
(1, '2018-02-01 02:00:00', 0.1, 2),
(1, '2018-02-01 03:00:00', 0.1, 3),
(1, '2018-02-01 04:00:00', 0.1, 4),
(1, '2018-02-01 05:00:00', 0.1, 5),
(1, '2018-02-01 06:00:00', 0.1, 6),
(1, '2018-02-01 07:00:00', 0.9, 7),
(1, '2018-02-01 08:00:00', 0.1, 8),
(1, '2018-02-01 09:00:00', 0.5, 9),
(2, '2018-02-01 09:00:00', 0.02, 10),
(2, '2018-02-01 09:00:00', 0.5, 11),
(2, '2018-02-01 09:00:00', 0.1, 12),
(2, '2018-02-01 09:00:00', 0.01, 13),
(2, '2018-02-01 09:00:00', 0.5, 14),
(123, '2018-03-08 00:00:00', 34, 15),
(1223, '2018-03-08 00:00:00', 34, 16),
(1223, '2018-03-08 00:00:00', 34, 17),
(1223, '2018-03-08 00:00:00', 34, 18),
(1223, '2018-03-08 00:00:00', 34, 19),
(998812342, '2018-03-16 20:29:34', 1, 20),
(998812342, '2018-03-16 20:59:34', 15, 21),
(998812342, '2018-03-16 20:59:40', 15, 22),
(998812342, '2018-03-16 20:59:40', 45, 23),
(998812342, '2018-03-16 20:29:34', 1, 24),
(998812342, '2018-03-16 20:59:34', 15, 25),
(998812342, '2018-03-16 20:59:40', 15, 26),
(998812342, '2018-03-16 20:59:40', 45, 27),
(0, '2018-04-22 00:00:00', 4, 28),
(0, '2018-04-22 00:00:00', 4, 29),
(0, '2018-04-22 00:00:00', 3, 30),
(0, '2018-04-22 00:00:00', 3, 31),
(0, '2018-04-22 00:00:00', 4, 32),
(0, '2018-04-22 00:00:00', 4, 33),
(0, '2018-04-22 00:00:00', 4, 34),
(0, '2018-04-22 00:00:00', 4, 35),
(0, '2018-04-22 00:00:00', 4, 36),
(0, '2018-04-22 00:00:00', 4, 37),
(0, '2018-04-22 00:00:00', 4, 38),
(0, '2018-04-22 00:00:00', 4, 39),
(0, '2018-04-22 00:00:00', 4, 40),
(0, '2018-04-21 02:00:00', 5, 41),
(0, '2018-04-21 02:00:00', 5, 42),
(1, '2018-04-23 03:00:00', 7, 43),
(1, '2018-04-11 00:00:00', 2, 44),
(1, '2018-04-23 03:00:00', 7, 45),
(1, '2018-04-11 00:00:00', 2, 46);

-- --------------------------------------------------------

--
-- Table structure for table `region_unit`
--

CREATE TABLE `region_unit` (
  `province_id` int(10) NOT NULL,
  `unit` int(254) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `region_unit`
--

INSERT INTO `region_unit` (`province_id`, `unit`) VALUES
(1, 499),
(2, 599),
(3, 1499),
(8, 599),
(4, 2499),
(9, 4599),
(5, 1499),
(10, 1599),
(6, 499),
(11, 599),
(7, 99),
(12, 1509);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_tb`
--
ALTER TABLE `admin_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bill_tb`
--
ALTER TABLE `bill_tb`
  ADD PRIMARY KEY (`bill_id`);

--
-- Indexes for table `client_tb`
--
ALTER TABLE `client_tb`
  ADD PRIMARY KEY (`client_id`);

--
-- Indexes for table `current_balance_tb`
--
ALTER TABLE `current_balance_tb`
  ADD PRIMARY KEY (`balance_id`);

--
-- Indexes for table `reading_tb`
--
ALTER TABLE `reading_tb`
  ADD PRIMARY KEY (`reading_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_tb`
--
ALTER TABLE `admin_tb`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3503;
--
-- AUTO_INCREMENT for table `bill_tb`
--
ALTER TABLE `bill_tb`
  MODIFY `bill_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT for table `client_tb`
--
ALTER TABLE `client_tb`
  MODIFY `client_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100000037;
--
-- AUTO_INCREMENT for table `current_balance_tb`
--
ALTER TABLE `current_balance_tb`
  MODIFY `balance_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `reading_tb`
--
ALTER TABLE `reading_tb`
  MODIFY `reading_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
