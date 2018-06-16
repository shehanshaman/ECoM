-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 14, 2018 at 05:50 PM
-- Server version: 10.1.31-MariaDB
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
-- Database: `id5778277_mainserverdatabase`
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
(2502, 'admin1', 'ab196aa83e870bd5f5e4d7182f8c2995eab08f1f', 'Full', '0000-00-00 00:00:00', 0),
(2503, 'user01', 'ab196aa83e870bd5f5e4d7182f8c2995eab08f1f', 'Default', '0000-00-00 00:00:00', 0),
(2504, 'user01', 'ab196aa83e870bd5f5e4d7182f8c2995eab08f1f', 'Default', '0000-00-00 00:00:00', 0),
(2505, 'user4', 'ab196aa83e870bd5f5e4d7182f8c2995eab08f1f', 'Default', '0000-00-00 00:00:00', 0),
(3502, 'user1', '2ded90af4621435a12946af0691e8b015c07b41e', 'Default', '0000-00-00 00:00:00', 0),
(3503, '520', '0b6a63765cf0acb1022fc7c84ed8dcb104f221ed', 'Default', '0000-00-00 00:00:00', 0),
(3504, 'prabath', '5826131fb54db2a5f828ba9870248109925ebaa2', 'Full', '2018-06-14 17:44:08', 0);

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
(0, '2018-03-25', '06:00:00', 344),
(0, '2018-05-13', '05:10:18', 4),
(0, '2018-05-13', '05:10:18', 4),
(0, '2018-05-13', '05:10:18', 4),
(0, '2018-05-13', '05:10:18', 4),
(0, '2018-05-13', '05:10:18', 4),
(0, '2018-05-13', '05:10:18', 4),
(0, '2018-05-13', '05:10:18', 4),
(0, '2018-05-13', '05:10:18', 4),
(0, '2018-05-13', '05:10:18', 4),
(0, '0000-00-00', '00:00:00', 0),
(0, '2018-05-13', '05:10:18', 4),
(0, '2018-05-14', '06:10:18', 3),
(0, '2018-05-15', '07:10:18', 2),
(0, '2018-05-16', '08:10:18', 4),
(0, '2018-05-17', '09:10:18', 3),
(0, '2018-05-18', '10:10:18', 6),
(0, '2018-05-19', '11:10:18', 4),
(0, '2018-05-20', '12:10:18', 2),
(0, '2018-05-21', '13:10:18', 1),
(0, '2018-05-22', '14:10:18', 1),
(0, '2018-05-23', '15:10:18', 3),
(0, '2018-05-23', '16:10:18', 2),
(0, '2018-05-25', '17:10:18', 2),
(0, '0000-00-00', '00:00:00', 0),
(0, '2018-05-26', '05:10:18', 4),
(0, '2018-05-27', '06:10:18', 3),
(0, '2018-05-28', '07:10:18', 2),
(0, '2018-05-29', '08:10:18', 4),
(0, '2018-05-30', '09:10:18', 3),
(0, '2018-05-31', '10:10:18', 6),
(0, '2018-06-01', '11:10:18', 4),
(0, '2018-06-02', '12:10:18', 2),
(0, '2018-06-03', '13:10:18', 1),
(0, '2018-06-04', '14:10:18', 1),
(0, '2018-06-05', '15:10:18', 3),
(0, '2018-06-06', '16:10:18', 2),
(0, '2018-06-07', '17:10:18', 2),
(0, '0000-00-00', '00:00:00', 0),
(0, '2018-06-08', '11:10:18', 4),
(0, '2018-06-09', '12:10:18', 2),
(0, '2018-06-10', '13:10:18', 1),
(0, '2018-06-11', '14:10:18', 1),
(0, '2018-06-12', '15:10:18', 3),
(0, '0000-00-00', '00:00:00', 0),
(0, '2018-06-13', '17:10:18', 2),
(0, '2018-06-14', '17:10:18', 0),
(0, '2018-06-14', '18:10:18', 0),
(0, '2018-06-14', '19:10:18', 0),
(0, '2018-06-14', '20:10:18', 0),
(0, '2018-06-14', '21:10:18', 0),
(0, '2018-06-14', '22:10:18', 0),
(0, '2018-06-14', '23:10:18', 0),
(0, '2018-06-14', '00:10:18', 0),
(0, '2018-06-14', '01:10:18', 0),
(0, '2018-06-14', '02:10:18', 0),
(0, '2018-06-14', '03:10:18', 0),
(0, '0000-00-00', '00:00:00', 0),
(0, '2018-06-14', '17:10:18', 0),
(0, '2018-06-14', '18:10:18', 1),
(0, '2018-06-14', '19:10:18', 1),
(0, '2018-06-14', '20:10:18', 1),
(0, '2018-06-14', '21:10:18', 1),
(0, '2018-06-14', '22:10:18', 1),
(0, '2018-06-14', '23:10:18', 1),
(0, '2018-06-14', '00:10:18', 1),
(0, '2018-06-14', '01:10:18', 1),
(0, '2018-06-14', '02:10:18', 1),
(0, '2018-06-14', '03:10:18', 1);

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
(59, 0, 1.13, 0, 28.25, 540, 2, '2018-06-13', 0),
(60, 0, 1.13, 0, 28.25, 540, 2, '2018-06-13', 0),
(61, 12, 11, 0, 690, 30, 101, '2018-06-13', 0),
(62, 0, 1.13, 0, 28.25, 540, 2, '2018-06-13', 0),
(63, 12, 11, 0, 690, 30, 101, '2018-06-13', 0),
(64, 0, 1.13, 0, 28.25, 540, 2, '2018-06-13', 0),
(65, 12, 11, 0, 690, 30, 101, '2018-06-13', 0),
(66, 0, 1.13, 0, 28.25, 540, 2, '2018-06-13', 0),
(67, 12, 11, 0, 690, 30, 101, '2018-06-13', 0),
(68, 0, 1.13, 0, 28.25, 540, 2, '2018-06-13', 0),
(69, 12, 11, 0, 690, 30, 101, '2018-06-13', 0),
(70, 0, 1.13, 0, 28.25, 540, 2, '2018-06-14', 0),
(71, 12, 11, 0, 690, 30, 101, '2018-06-14', 0),
(72, 0, 1.13, 0, 28.25, 540, 2, '2018-06-14', 0),
(73, 12, 11, 0, 690, 30, 101, '2018-06-14', 0);

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
  `meter_id` int(20) NOT NULL,
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
(5, 'shehan', 'shaman', '100 kellanniya kellaniya', '0819100921', '0783402401', '9501220191v', 'shehanshaman@outlook.com', 101, '', '30', '34', '08197', 'Merchant', 0),
(15, 'Gihan', 'Chamara', '94/6 A,Mawilmada Road Kandy', '812210097', '717455776', '953060108V', 'kggcbgunarathne@gmail.com', 2, 'chamara123', '15', '1', '1', 'Domestic', 0),
(54, 'gihn', 'js', 'skksk wksk ws', '6325', '575', '545', '343ws', 1, '54', '30', '35', '46', 'hu', 1),
(78, 'sarath', 'wimalasiri', '45 kunasale kandy', '081221882', '07123456', '134567', 'fdvdv', 9876, '', '60', '1', '678', 'Merchant', 0),
(100000002, 'samanthi', 'Rathnayake', '92 colombo road kandy', '011234574', '071234532', '9535673224V', 'dileep@bestjobslk.com', 5678, '', '15', '123', '123454245', 'Domestic', 0),
(100000021, 'sarath', 'wimalasiri', '45 kunasale kandy', '081221882', '07123456', '134567', 'fdvdv', 9876, '', '60', '1', '678', 'Merchant', 0),
(100000029, 'viky', 'kasun', '12 galle road colombo', '0812210028', '0712290121', '96401209v', 'kasun@gmail.com', 998812342, '', '30', '56', '332019', 'Domestic', 0),
(100000030, 'kaveesha', 'dilshani', '12 colombo nugegoda', '0819923323', '07123456', '953061234v', 'kggcbgunarathne@gmail.com', 2147483647, '', '15', '23', '32', 'Domestic', 0),
(100000031, 'kaveesha', 'dilshani', '12 colombo nugegoda', '0819923323', '07123456', '953061234v', 'kggcbgunarathne@gmail.com', 2147483647, '', '15', '23', '32', 'Domestic', 0),
(100000037, 'kumara', 'silva', '123 baulana baulana', '0812344321', '0712345678', '681234567v', 'kumara@gmail.com', 9000, '', '60', '450', '12302', 'Merchant', 0),
(100000038, 'niluksha', 'perera', '89 galle galle', '378392', '73932823', '28932923', 'cxbxcnxb', 19191919, '', '30', '23', '32', 'Industry', 0),
(100000041, 'shehan', 'gdbd', 'svsed dsefs ceecvs', '25252', '235252', '12344', 'dfefesf', 1200000000, '', '15', '325252', '252525', 'Domestic', 0),
(100000042, 'Geeth', 'wimalasiri', '23 gampola gampola', '0717455776', '0712290121', '940841437v', 'geethpriyanka1994@gmail.com', 1212121212, '', '15', '56', '4557755', 'Domestic', 0),
(100000046, 'Dasuni', 'Pamoda', '43 Thihagoda Matara', '0812210028', '0766340244', '940841437v', 'dasuni@gmail.com', 1233254031, '', '15', '435', '5327', 'Domestic', 0),
(100000048, 'Dasuni', 'Pamoda', '96/6 Gall Kandy', '07163823', '0283784', '94754983V', 'KGGCBGUNARATHNE@GMAIL.COM', 123455665, '9076', '15', '1', '48743', 'Domestic', 0),
(100000049, 'prabath', 'bandara', '74 rhfsbsj bcsj', '39832084', '8248020', '32082034', 'kggcbgunarathne@gmail.com', 1230320, 'C0P4xv0y5HsDMnUnY5F0ow==', '15', '2', '3440', 'Merchant', 0),
(100000050, 'Prabhath', 'Bandara', '186 diulgaskotuwa Galewela', '0660000000', '0768417354', '942682054v', 'okprabhath@gmail.com', 1369852147, 'jyd3obsoo7PwoQn/y/CTgA==', '15', '6559', '4565', 'Domestic', 0),
(100000051, 'Geeth', 'Wimalasiri', '23 Rahimmalaya Gampola', '0602828392', '0786956423', '940841437v', 'bandarasandali69@gmail.com', 1000000123, '4ybIRMOuABFEPXD3BiofTw==', '15', '654321', '123654', 'Domestic', 0),
(100000052, 'Geeth', 'Wimalasiri', '23 Rahimmalaya Gampola', '0602828392', '0786956423', '940841437v', 'bandarasandali69@gmail.com', 1000000123, 'E7icRtjvcbFAkQz3cO8vtA==', '15', '654321', '123654', 'Domestic', 0),
(100000053, 'Prabhath', 'Bandara', '186 diulgaskotuwa Galewela', '0660000000', '0768417354', '942682054v', 'okprabhath@gmail.com', 1369852148, 'dFA+wLfxIHX/3KoQhLt72Q==', '15', '6555', '45678', 'Domestic', 0),
(100000054, 'shehan', 'Pamoda', '12 Thihagoda Matara', '0112948011', '0712290121', '940841437v', 'kggcbgunarathne@gmail.com', 12345678, '0fOVfbvFQu73/LKsGwq5XQ==', '15', '23', '4557755', 'Domestic', 0),
(100000055, 'shehan', 'Pamoda', '12 Thihagoda Matara', '0112948011', '0712290121', '940841437v', 'kggcbgunarathne@gmail.com', 12345678, 'IXfOXiPQrbNKUs7q9oLaRQ==', '15', '23', '4557755', 'Domestic', 0),
(100000056, 'shehan', 'Pamoda', '12 Thihagoda Matara', '0112948011', '0712290121', '940841437v', 'kggcbgunarathne@gmail.com', 12345678, 'Qkb2S+cG2xH5WNbuLgNi5w==', '15', '23', '4557755', 'Domestic', 0),
(100000057, 'shehan', 'gihan', '94 sds sacc', '0112948011', '0766340244', '940841437v', 'kggcbgunarathne@gmail.com', 12345678, '73LEjtay/GlFRi2uPOvafg==', '30', '23', '4557755', 'Merchant', 0),
(100000058, 'hg', 'HG', 'HG HG G', 'G', 'H', '65', 'shehanshaman@outlook.com', 45, '72fl9yIrVZYl90AzQO1xRQ==', '15', 'HG', 'H', 'Domestic', 0),
(100000059, 'hg', 'HG', 'HG HG G', 'G', 'H', '65', 'shehanshaman@outlook.com', 45, 'L3FwEdWYQJSs35sdvvhAnw==', '15', 'HG', 'H', 'Domestic', 0),
(100000060, 'shehan', 'Chamara', '12 Thihagoda kandy', '0112948011', '0712290121', '940841437v', 'mssmperera@gmail.com', 1111122222, 'M0mGgzAFvY4srIvM94SVUQ==', '15', '23', '4557755', 'Domestic', 0);

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
(5, '1', 'hi', '2018-02-23 10:12:55'),
(6, '451', 'Not set the work', '2018-06-07 18:52:51');

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
(46, '101', -720, -2160, '2018-06-14', 3),
(45, '2', -568.25, -1704.75, '2018-06-14', 3),
(44, '101', -720, -1440, '2018-06-14', 2),
(43, '2', -568.25, -1136.5, '2018-06-14', 2),
(42, '101', -720, -720, '2018-06-13', 1),
(41, '2', -568.25, -568.25, '2018-06-13', 1);

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
(15, '101', '2018-03-08 00:00:00'),
(16, '5', '2018-06-07 08:49:25'),
(17, '451', '2018-06-07 08:57:11'),
(18, '3000', '2018-06-07 16:38:05'),
(29, '1233254032', '2018-06-11 11:10:30'),
(28, '1233254031', '2018-06-11 10:16:21'),
(32, '1212121212', '2018-06-14 08:10:09'),
(31, '', '2018-06-14 07:41:33');

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
  `bill_type` tinyint(4) NOT NULL,
  `Pro_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `meter_tb`
--

INSERT INTO `meter_tb` (`meter_id`, `meter_type`, `client_id`, `start_date`, `location_lat`, `location_lng`, `password`, `connectivity`, `bill_id`, `bill_type`, `Pro_id`) VALUES
(1, 'domestric', 54, '2017-12-13 00:00:00', 7.25, 80.59, '123', 0, 45, 0, NULL),
(2, 'domestric', 15, '2018-06-01 00:00:00', 0, 0, '9999', 0, 122, 0, 0),
(23, 'Industry', 100000023, '0000-00-00 00:00:00', 1.143456, 1.345567, '', 1, 0, 0, NULL),
(45, 'Domestic', 100000058, '0000-00-00 00:00:00', 0, 0, '9999', 0, 0, 0, 0),
(101, 'domestric', 5, '2018-01-01 00:00:00', 6.934445, 79.844238, '123', 0, 48, 1, NULL),
(451, 'domestic', 1, '2018-02-06 00:00:00', 7.289582, 80.632653, 'Gihan123', 0, 1, 1, NULL),
(1001, 'domestric', 78, '2017-11-15 00:00:00', 6.93359, 80.426965, '123', 0, 100, 1, NULL),
(1200, 'Domestic', 100000024, '0000-00-00 00:00:00', 0, 0, '', 0, 0, 0, NULL),
(5672, 'domestic', 10000002, '2018-02-06 00:00:00', 1.2345, 0, 'Gihan123', 1, 1, 0, NULL),
(12001, 'Domestic', 100000025, '0000-00-00 00:00:00', 4.122111, 0.132211, '', 1, 0, 0, NULL),
(321005, 'domestic', 1000005, '2018-02-06 00:00:00', 1.2345, 0, 'Gihan123', 1, 0, 0, NULL),
(361006, 'domestic', 1000006, '2018-02-06 00:00:00', 1.2345, 0, 'Gihan123', 1, 1, 0, NULL),
(431001, 'domestic', 100000001, '2018-02-06 00:00:00', 6.973601, 79.872317, 'Gihan123', 0, 1, 0, NULL),
(451003, 'domestic', 1000003, '2018-02-06 00:00:00', 1.2345, 0, 'Gihan123', 1, 1, 0, NULL),
(471004, 'domestic', 1000004, '2018-02-06 00:00:00', 1.2345, 0, 'Gihan123', 1, 1, 0, NULL),
(1230320, 'Merchant', 100000049, '0000-00-00 00:00:00', 0, 0, '9999', 0, 0, 0, 0),
(12345678, 'Domestic', 100000054, '0000-00-00 00:00:00', 0, 0, '9999', 0, 0, 0, 0),
(123455665, 'Domestic', 100000048, '0000-00-00 00:00:00', 0, 0, '9999', 0, 0, 0, 0),
(1000000123, 'Domestic', 100000051, '0000-00-00 00:00:00', 0, 0, '9999', 0, 0, 0, 0),
(1111122222, 'Domestic', 100000060, '0000-00-00 00:00:00', 0, 0, '9999', 0, 0, 0, 0),
(1200000000, 'Domestic', 100000041, '0000-00-00 00:00:00', 2, 3, '9999', 1, 0, 0, NULL),
(1212121212, 'Domestic', 100000042, '0000-00-00 00:00:00', 7.257296, 80.602152, '9999', 1, 0, 0, 0),
(1231231231, 'Domestic', 100100, '2018-05-04 00:00:00', 2, 3, '1111', 1, 1, 1, 0),
(1233254031, 'Domestic', 100000046, '0000-00-00 00:00:00', 4.122111, 0.132211, '9999', 1, 0, 0, NULL),
(1233254032, 'Industry', 100000047, '0000-00-00 00:00:00', 7.257296, 80.602152, '9999', 1, 0, 0, 0),
(1369852147, 'Domestic', 100000050, '0000-00-00 00:00:00', 0, 0, '9999', 0, 0, 0, 0),
(1369852148, 'Domestic', 100000053, '0000-00-00 00:00:00', 0, 0, '9999', 0, 0, 0, 0);

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
(43535, 43534),
(9000, 5),
(19191919, 1),
(456456456, 4),
(456456456, 4),
(1200000000, 3),
(1212121212, 1),
(1212121212, 9999),
(1212121212, 1),
(0, 0),
(0, 0),
(0, 0),
(1233254031, 0),
(1233254032, 0),
(123455665, 0),
(1230320, 0),
(1369852147, 0),
(1000000123, 0),
(1000000123, 0),
(1369852148, 0),
(12345678, 0),
(12345678, 0),
(12345678, 0),
(12345678, 0),
(45, 0),
(45, 0),
(1111122222, 0);

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
(2, '2018-02-01 09:00:00', 0.02, 10),
(2, '2018-02-01 09:00:00', 0.5, 11),
(2, '2018-02-01 09:00:00', 0.1, 12),
(2, '2018-02-01 09:00:00', 0.01, 13),
(2, '2018-02-01 09:00:00', 0.5, 14),
(101, '2018-06-13 21:03:05', 12, 47),
(101, '2018-06-13 16:03:05', 1, 48),
(101, '2018-06-13 16:03:11', 10, 49);

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
-- AUTO_INCREMENT for table `admin_tb`
--
ALTER TABLE `admin_tb`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3505;

--
-- AUTO_INCREMENT for table `bill_tb`
--
ALTER TABLE `bill_tb`
  MODIFY `bill_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `client_tb`
--
ALTER TABLE `client_tb`
  MODIFY `client_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100000061;

--
-- AUTO_INCREMENT for table `current_balance_tb`
--
ALTER TABLE `current_balance_tb`
  MODIFY `balance_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `disconnect_tb`
--
ALTER TABLE `disconnect_tb`
  MODIFY `disconnect_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `reading_tb`
--
ALTER TABLE `reading_tb`
  MODIFY `reading_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
