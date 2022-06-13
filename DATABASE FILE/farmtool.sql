-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2022 at 04:22 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `farmtool`
--

-- --------------------------------------------------------

--
-- Table structure for table `agent`
--

CREATE TABLE `agent` (
  `agent_id` varchar(20) NOT NULL,
  `agent_name` varchar(50) NOT NULL,
  `agent_mailid` varchar(50) NOT NULL,
  `agent_phone` varchar(15) NOT NULL,
  `agent_address` varchar(50) NOT NULL,
  `agent_gender` varchar(10) NOT NULL,
  `client_username` varchar(50) NOT NULL,
  `agent_availability` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `agent`
--

INSERT INTO `agent` (`agent_id`, `agent_name`, `agent_mailid`, `agent_phone`, `agent_address`, `agent_gender`, `client_username`, `agent_availability`) VALUES
('AG1', 'Bruno Den', 'bruno@gmail.com ', '9547863157', '1782  Vineyard Drive', 'Male', 'tom', 'yes'),
('AG10', 'Darteh', 'darth1@gmail.com', '1234567896', 'kurnool', 'Male', 'tom', 'yes'),
('AG12', 'Jaan', 'jaa1213@gmail.com', '5638201739', 'vizag', 'Male', 'bob', 'yes'),
('AG15', 'Alice', 'alice@gmail.com', '1234567532', 'chicago', 'Female', 'bob', 'yes'),
('AG2', 'Will Williams', 'will@gmail.com ', '9147523684', '4354  Hillcrest Drive', 'Male', 'harry', 'yes'),
('AG3', 'Steeve Rogers', 'steeve@gmail.com ', '9147523682', '1506  Skinner Hollow Road', 'Male', 'harry', 'yes'),
('AG4', 'Ivy', '04316015965 ', 'ivy@gmail.com', '4680  Wayside Lane', 'Female', 'jenny', 'yes'),
('AG5', 'Pamela C Benson', 'pamela@gmail.com ', '7584960123', 'Urkey Pen Road', 'Female', 'jenny', 'yes'),
('AG6', 'Billy Williams', 'billy@gmail.com ', '8421025476', '2898  Oxford Court', 'Male', 'tom', 'yes'),
('AG7', 'Nicolas', 'nicolas@gmail.com', '7541023695', 'Breezewood Court', 'Male', 'harry', 'yes'),
('AG8', 'Stephen Strange', 'stephen@gmail.com', '5215557850', 'Fairview Street12', 'Male', 'jenny', 'yes'),
('AG9', 'Darth', 'darth@gmail.com', '1234567890', 'kurnool', 'Female', 'bob', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `carttools`
--

CREATE TABLE `carttools` (
  `id` int(100) NOT NULL,
  `customer_username` varchar(50) NOT NULL,
  `tool_id` varchar(20) NOT NULL,
  `booking_date` date NOT NULL,
  `rent_start_date` date NOT NULL,
  `rent_end_date` date NOT NULL,
  `tool_return_date` date DEFAULT NULL,
  `fare` double NOT NULL,
  `charge_type` varchar(25) NOT NULL DEFAULT '''days''',
  `hours` double DEFAULT NULL,
  `no_of_days` int(50) DEFAULT NULL,
  `total_amount` double DEFAULT NULL,
  `return_status` varchar(10) NOT NULL,
  `agent_id` int(20) NOT NULL,
  `payment_type` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `carttools`
--

INSERT INTO `carttools` (`id`, `customer_username`, `tool_id`, `booking_date`, `rent_start_date`, `rent_end_date`, `tool_return_date`, `fare`, `charge_type`, `hours`, `no_of_days`, `total_amount`, `return_status`, `agent_id`, `payment_type`) VALUES
(1, 'lucas', 'iR03', '2022-04-16', '2022-04-16', '2022-04-17', NULL, 100, 'hr', NULL, NULL, NULL, '', 0, ''),
(2, 'lucas', 'ME25', '2022-04-19', '2022-04-19', '2022-04-21', NULL, 150, 'hr', NULL, NULL, NULL, '', 0, ''),
(3, 'lucas', 'ME21', '2022-04-20', '2022-04-20', '2022-04-21', NULL, 800, 'days', NULL, NULL, NULL, '', 0, ''),
(4, 'lucas', 'ME20', '2022-04-20', '2022-04-23', '2022-04-28', NULL, 400, 'hr', NULL, NULL, NULL, '', 0, ''),
(5, 'lucas', '', '2022-05-02', '2022-05-02', '2022-05-03', NULL, 0, 'days', NULL, NULL, NULL, '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `client_username` varchar(50) NOT NULL,
  `client_password` varchar(20) NOT NULL,
  `client_name` varchar(50) NOT NULL,
  `client_phone` varchar(15) NOT NULL,
  `client_email` varchar(25) NOT NULL,
  `client_address` varchar(50) CHARACTER SET utf8 COLLATE utf8_estonian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`client_username`, `client_password`, `client_name`, `client_phone`, `client_email`, `client_address`) VALUES
('bob', 'password', 'Bob', '489294892', 'bob@gmail.com', 'kfhefe'),
('harry', 'password', 'Harry Den', '9876543210', 'harryden@gmail.com', '2477  Harley Vincent Drive'),
('jenny', 'jenny', 'Jeniffer Washington', '7850000069', 'washjeni@gmail.com', '4139  Mesa Drive'),
('tom', 'password', 'Tommy Doee', '900696969', 'tom@gmail.com', '4645  Dawson Drive');

-- --------------------------------------------------------

--
-- Table structure for table `clienttools`
--

CREATE TABLE `clienttools` (
  `tool_id` varchar(20) NOT NULL,
  `client_username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `clienttools`
--

INSERT INTO `clienttools` (`tool_id`, `client_username`) VALUES
('DR03', 'bob'),
('DR04', 'bob'),
('DR05', 'bob'),
('DR06', 'bob'),
('DR07', 'bob'),
('DR08', 'bob'),
('DR09', 'bob'),
('DR10', 'bob'),
('ME15', 'bob'),
('CU10', 'harry'),
('MA11', 'harry'),
('MA12', 'harry'),
('ME024', 'harry'),
('ME1', 'harry'),
('ME13', 'harry'),
('ME14', 'harry'),
('ME20', 'harry'),
('ME21', 'harry'),
('ME22', 'harry'),
('ME23', 'harry'),
('ME24', 'harry'),
('ME25', 'harry'),
('ME3', 'harry'),
('ME7', 'harry'),
('ME8', 'harry'),
('ME9', 'harry'),
('ME98', 'harry'),
('CU04', 'jenny'),
('CU05', 'jenny'),
('CU06', 'jenny'),
('CU07', 'jenny'),
('CU08', 'jenny'),
('ME10', 'jenny'),
('ME2', 'jenny'),
('ME4', 'jenny'),
('ME5', 'jenny'),
('ME6', 'jenny'),
('IR01', 'tom'),
('IR02', 'tom'),
('iR03', 'tom'),
('IR04', 'tom'),
('IR05', 'tom'),
('IR06', 'tom'),
('IR07', 'tom'),
('IR08', 'tom'),
('IR09', 'tom'),
('MEC25', 'tom');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_username` varchar(50) NOT NULL,
  `customer_password` varchar(20) NOT NULL,
  `customer_name` varchar(50) NOT NULL,
  `customer_phone` varchar(15) NOT NULL,
  `customer_email` varchar(25) NOT NULL,
  `customer_address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_username`, `customer_password`, `customer_name`, `customer_phone`, `customer_email`, `customer_address`) VALUES
('antonio', 'password', 'Antonio M', '0785556580', 'antony@gmail.com', '2677  Burton Avenue'),
('christine', 'password', 'Christine', '8544444444', 'chr@gmail.com', '3701  Fairway Drive'),
('ethan', 'password', 'Ethan Hawk', '69741111110', 'thisisethan@gmail.com', '4554  Rowes Lane'),
('james', 'password', 'James Washington', '0258786969', 'james@gmail.com', '2316  Mayo Street'),
('lucas', 'password', 'Lucas Rhoades', '7003658500', 'lucas@gmail.com', '2737  Fowler Avenue');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `name` varchar(20) NOT NULL,
  `e_mail` varchar(30) NOT NULL,
  `message` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`name`, `e_mail`, `message`) VALUES
('Nikhil', 'nikhil@gmail.com', 'Hope this works.');

-- --------------------------------------------------------

--
-- Table structure for table `rentedtools`
--

CREATE TABLE `rentedtools` (
  `id` int(100) NOT NULL,
  `customer_username` varchar(50) NOT NULL,
  `tool_id` varchar(20) NOT NULL,
  `booking_date` date NOT NULL,
  `rent_start_date` date NOT NULL,
  `rent_end_date` date NOT NULL,
  `tool_return_date` date DEFAULT NULL,
  `fare` double NOT NULL,
  `charge_type` varchar(25) NOT NULL DEFAULT '''days''',
  `hours` double DEFAULT NULL,
  `no_of_days` int(50) DEFAULT NULL,
  `total_amount` double DEFAULT NULL,
  `return_status` varchar(10) NOT NULL,
  `agent_id` int(20) NOT NULL,
  `payment_type` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rentedtools`
--

INSERT INTO `rentedtools` (`id`, `customer_username`, `tool_id`, `booking_date`, `rent_start_date`, `rent_end_date`, `tool_return_date`, `fare`, `charge_type`, `hours`, `no_of_days`, `total_amount`, `return_status`, `agent_id`, `payment_type`) VALUES
(574681245, 'ethan', 'ME4', '2018-07-18', '2018-07-01', '2018-07-02', '2018-07-18', 11, 'hr', 22, 1, 5884, 'R', 0, ''),
(574681246, 'james', 'ME6', '2018-07-18', '2018-06-01', '2018-06-28', '2018-07-18', 15, 'hr', 16, 27, 5035, 'R', 0, ''),
(574681247, 'antonio', 'ME3', '2018-07-18', '2018-07-19', '2018-07-22', '2018-07-20', 13, 'hr', 18, 3, 5473, 'R', 0, ''),
(574681248, 'ethan', 'ME1', '2018-07-20', '2018-07-28', '2018-07-29', '2018-07-20', 10, 'hr', 21, 1, 690, 'R', 0, ''),
(574681249, 'james', 'ME1', '2018-07-23', '2018-07-24', '2018-07-25', '2018-07-23', 10, 'hr', 5, 1, 5000, 'R', 0, ''),
(574681250, 'lucas', 'ME3', '2018-07-23', '2018-07-23', '2018-07-24', '2018-07-23', 2600, 'days', NULL, 1, 2600, 'R', 0, ''),
(574681251, 'james', 'ME10', '2018-07-23', '2018-07-25', '2018-07-30', '2018-07-23', 10, 'hr', 16, 2, 600, 'R', 0, ''),
(574681252, 'christine', 'MA11', '2018-07-23', '2018-07-23', '2018-07-23', '2018-07-23', 13, 'hr', 20, 0, 2600, 'R', 0, ''),
(574681253, 'christine', 'ME6', '2018-07-23', '2018-07-23', '2018-08-03', '2018-07-23', 2600, 'days', NULL, 11, 28600, 'R', 0, ''),
(574681254, 'ethan', 'MA12', '2018-07-23', '2018-07-23', '2018-07-26', '2018-07-23', 3200, 'days', NULL, 3, 9600, 'R', 0, ''),
(574681255, 'christine', 'ME8', '2018-07-23', '2018-07-23', '2018-08-08', '2018-07-23', 2400, 'days', NULL, 16, 38400, 'R', 0, ''),
(574681257, 'james', 'ME7', '2018-08-11', '2018-08-13', '2018-08-17', NULL, 14, 'hr', NULL, NULL, NULL, 'NR', 0, ''),
(574681258, 'lucas', 'ME3', '2021-03-24', '2021-03-24', '2021-03-25', '2021-03-24', 2600, 'days', NULL, 1, 2600, 'R', 0, ''),
(574681259, 'lucas', 'ME5', '2021-03-24', '2021-03-24', '2021-03-26', '2021-03-24', 6100, 'days', NULL, 2, 12200, 'R', 0, ''),
(574681260, 'lucas', 'ME1', '2022-03-18', '2022-03-18', '2022-03-19', '2022-03-19', 260, 'days', NULL, 1, 260, 'R', 0, ''),
(574681261, 'lucas', 'ME1', '2022-03-18', '2022-03-18', '2022-03-19', '2022-03-18', 260, 'days', NULL, 1, 260, 'R', 0, ''),
(574681262, 'lucas', 'ME1', '2022-03-18', '2022-03-18', '2022-03-19', '0000-00-00', 260, 'days', NULL, 1, 260, 'R', 0, ''),
(574681263, 'lucas', 'MA12', '2022-03-18', '2022-03-19', '2022-03-19', '2022-03-19', 29, 'hr', 0, 0, 0, 'R', 0, ''),
(574681264, 'lucas', 'ME2', '2022-03-18', '2022-03-19', '2022-03-21', '2022-03-18', 290, 'days', NULL, 2, 580, 'R', 0, ''),
(574681265, 'lucas', 'ME14', '2022-03-19', '2022-03-19', '2022-03-19', '2022-03-19', 10, 'hr', 15, 0, 150, 'R', 0, ''),
(574681266, 'lucas', 'ME13', '2022-03-19', '2022-03-19', '2022-03-20', '2022-03-19', 24, 'hr', 22, 1, 528, 'R', 0, ''),
(574681267, 'lucas', 'ME4', '2022-03-19', '2022-03-19', '2022-03-22', '2022-03-19', 720, 'days', NULL, 3, 2160, 'R', 0, ''),
(574681268, 'lucas', 'ME10', '2022-03-28', '2022-03-28', '2022-03-29', '2022-03-28', 13, 'hr', 15, 1, 195, 'R', 0, ''),
(574681269, 'ethan', 'DR06', '2022-04-02', '2022-04-02', '2022-04-10', '2022-04-02', 60, 'hr', 60, 8, 3600, 'R', 0, ''),
(574681270, 'lucas', 'ME4', '2022-04-07', '2022-04-07', '2022-04-07', '2022-04-08', 520, 'days', NULL, 0, 200, 'R', 0, ''),
(574681271, 'ethan', 'ME5', '2022-04-07', '2022-04-07', '2022-04-08', '2022-04-07', 21, 'hr', 15, 1, 315, 'R', 0, ''),
(574681272, 'ethan', 'IR08', '2022-04-08', '2022-04-08', '2022-04-09', '2022-04-08', 70, 'hr', 20, 1, 1400, 'R', 0, ''),
(574681273, 'ethan', 'ME20', '2022-04-08', '2022-04-08', '2022-04-09', '2022-04-08', 350, 'hr', 15, 1, 5250, 'R', 0, ''),
(574681274, 'lucas', 'ME22', '2022-04-08', '2022-04-09', '2022-04-15', '2022-04-11', 700, 'days', NULL, 6, 4200, 'R', 0, ''),
(574681275, 'lucas', 'ME21', '2022-04-08', '2022-04-08', '2022-04-09', '2022-04-11', 0, '', 1, 1, 400, 'R', 0, ''),
(574681276, 'lucas', 'ME14', '2022-04-11', '2022-04-11', '2022-04-13', '2022-04-11', 50, 'days', NULL, 2, 100, 'R', 0, ''),
(574681277, 'lucas', 'IR02', '2022-04-11', '2022-04-12', '2022-04-13', '2022-04-11', 140, 'days', NULL, 1, 140, 'R', 0, ''),
(574681278, 'lucas', 'IR02', '2022-04-11', '2022-04-12', '2022-04-13', '2022-04-11', 140, 'days', NULL, 1, 140, 'R', 0, ''),
(574681279, 'lucas', 'IR02', '2022-04-11', '2022-04-12', '2022-04-13', '2022-04-11', 140, 'days', NULL, 1, 140, 'R', 0, ''),
(574681280, 'lucas', 'IR02', '2022-04-11', '2022-04-13', '2022-04-14', '2022-04-11', 140, 'days', NULL, 1, 140, 'R', 0, ''),
(574681281, 'lucas', 'IR02', '2022-04-11', '2022-04-13', '2022-04-14', '2022-04-11', 140, 'days', NULL, 1, 140, 'R', 0, ''),
(574681282, 'lucas', 'IR02', '2022-04-11', '2022-04-13', '2022-04-14', '2022-04-11', 140, 'days', NULL, 1, 140, 'R', 0, ''),
(574681283, 'lucas', 'IR02', '2022-04-11', '2022-04-13', '2022-04-14', '2022-04-11', 140, 'days', NULL, 1, 140, 'R', 0, ''),
(574681284, 'lucas', 'IR04', '2022-04-11', '2022-04-11', '2022-04-12', '2022-04-11', 50, 'hr', 12, 1, 600, 'R', 0, ''),
(574681285, 'ethan', '', '2022-04-11', '2022-04-11', '2022-04-12', NULL, 0, 'hr', NULL, NULL, NULL, 'NR', 0, ''),
(574681286, 'ethan', 'CU06', '2022-04-11', '2022-04-12', '2022-04-13', '2022-04-14', 70, 'hr', 21, 1, 1670, 'R', 0, ''),
(574681287, 'ethan', '', '2022-04-11', '2022-04-11', '2022-04-12', NULL, 0, 'hr', NULL, NULL, NULL, 'NR', 0, ''),
(574681288, 'ethan', '', '2022-04-11', '2022-04-11', '2022-04-12', NULL, 0, 'hr', NULL, NULL, NULL, 'NR', 0, ''),
(574681289, 'lucas', 'ME20', '2022-04-11', '2022-04-11', '2022-04-13', '2022-04-11', 950, 'days', NULL, 2, 1900, 'R', 0, ''),
(574681290, 'lucas', '', '2022-04-11', '2022-04-12', '2022-04-13', NULL, 0, 'days', NULL, NULL, NULL, 'NR', 0, ''),
(574681291, 'lucas', 'ME14', '2022-04-11', '2022-04-11', '2022-04-12', '2022-04-13', 50, 'days', NULL, 1, 250, 'R', 0, ''),
(574681292, 'ethan', 'ME25', '2022-04-13', '2022-04-13', '2022-04-14', '2022-04-13', 150, 'hr', 23, 1, 3450, 'R', 0, ''),
(574681293, 'lucas', 'ME25', '2022-04-13', '2022-04-13', '2022-04-14', '2022-04-14', 150, 'hr', 12, 1, 1800, 'R', 0, ''),
(574681294, '', '', '2022-04-14', '1970-01-01', '1970-01-01', NULL, 0, '', NULL, NULL, NULL, 'NR', 0, ''),
(574681295, 'ethan', '', '2022-04-14', '2022-04-14', '2022-04-15', NULL, 0, 'hr', NULL, NULL, NULL, 'NR', 0, ''),
(574681296, 'ethan', '', '2022-04-14', '2022-04-14', '2022-04-15', NULL, 0, 'hr', NULL, NULL, NULL, 'NR', 0, ''),
(574681297, 'ethan', '', '2022-04-14', '2022-04-14', '2022-04-15', NULL, 0, 'hr', NULL, NULL, NULL, 'NR', 0, ''),
(574681298, 'ethan', '', '2022-04-14', '2022-04-14', '2022-04-15', NULL, 0, 'hr', NULL, NULL, NULL, 'NR', 0, ''),
(574681299, 'ethan', '', '2022-04-14', '2022-04-14', '2022-04-15', NULL, 0, 'hr', NULL, NULL, NULL, 'NR', 0, ''),
(574681300, 'ethan', '', '2022-04-14', '2022-04-14', '2022-04-15', NULL, 0, 'hr', NULL, NULL, NULL, 'NR', 0, ''),
(574681301, 'ethan', '', '2022-04-14', '2022-04-14', '2022-04-15', NULL, 0, 'hr', NULL, NULL, NULL, 'NR', 0, ''),
(574681302, 'ethan', '', '2022-04-14', '2022-04-14', '2022-04-15', NULL, 0, 'hr', NULL, NULL, NULL, 'NR', 0, ''),
(574681303, 'ethan', '', '2022-04-14', '2022-04-14', '2022-04-15', NULL, 0, 'hr', NULL, NULL, NULL, 'NR', 0, ''),
(574681304, 'ethan', '', '2022-04-14', '2022-04-14', '2022-04-15', NULL, 0, 'hr', NULL, NULL, NULL, 'NR', 0, ''),
(574681305, 'ethan', '', '2022-04-14', '2022-04-14', '2022-04-15', NULL, 0, 'hr', NULL, NULL, NULL, 'NR', 0, ''),
(574681306, 'ethan', '', '2022-04-14', '2022-04-14', '2022-04-15', NULL, 0, 'hr', NULL, NULL, NULL, 'NR', 0, ''),
(574681307, 'ethan', '', '2022-04-14', '2022-04-14', '2022-04-15', NULL, 0, 'hr', NULL, NULL, NULL, 'NR', 0, ''),
(574681308, 'ethan', 'IR02', '2022-04-14', '2022-04-14', '2022-04-15', '2022-04-14', 70, 'hr', 10, 1, 700, 'R', 0, ''),
(574681309, 'ethan', 'DR06', '2022-04-14', '2022-04-14', '2022-04-15', '2022-04-14', 220, 'days', NULL, 1, 220, 'R', 0, ''),
(574681310, 'ethan', 'iR03', '2022-04-14', '2022-04-14', '2022-04-15', '2022-04-14', 100, 'hr', 12, 1, 1200, 'R', 0, ''),
(574681311, 'ethan', 'CU05', '2022-04-14', '2022-04-14', '2022-04-15', '2022-04-19', 60, 'hr', 12, 1, 1520, 'R', 0, ''),
(574681312, 'ethan', 'IR04', '2022-04-14', '2022-04-15', '2022-04-16', '2022-04-19', 140, 'days', NULL, 1, 740, 'R', 0, ''),
(574681313, 'ethan', 'ME22', '2022-04-14', '2022-04-14', '2022-04-15', '2022-04-14', 150, 'hr', 22, 1, 3300, 'R', 0, ''),
(574681314, 'lucas', 'ME24', '2022-04-14', '2022-04-14', '2022-04-15', '2022-04-15', 80, 'hr', 12, 1, 960, 'R', 0, ''),
(574681315, 'lucas', '', '2022-04-14', '1970-01-01', '1970-01-01', NULL, 0, '', NULL, NULL, NULL, 'NR', 0, ''),
(574681316, 'lucas', '', '2022-04-14', '1970-01-01', '1970-01-01', NULL, 0, '', NULL, NULL, NULL, 'NR', 0, ''),
(574681317, 'lucas', 'CU10', '2022-04-14', '2022-04-15', '2022-04-16', '2022-04-16', 275, 'days', NULL, 1, 275, 'R', 0, ''),
(574681318, 'lucas', '', '2022-04-14', '1970-01-01', '1970-01-01', NULL, 0, '', NULL, NULL, NULL, 'NR', 0, ''),
(574681319, 'lucas', '', '2022-04-14', '1970-01-01', '1970-01-01', NULL, 0, '', NULL, NULL, NULL, 'NR', 0, ''),
(574681320, 'lucas', '', '2022-04-14', '1970-01-01', '1970-01-01', NULL, 0, '', NULL, NULL, NULL, 'NR', 0, ''),
(574681321, 'lucas', '', '2022-04-14', '1970-01-01', '1970-01-01', NULL, 0, '', NULL, NULL, NULL, 'NR', 0, ''),
(574681322, 'lucas', '', '2022-04-14', '1970-01-01', '1970-01-01', NULL, 0, '', NULL, NULL, NULL, 'NR', 0, ''),
(574681323, 'lucas', '', '2022-04-14', '1970-01-01', '1970-01-01', NULL, 0, '', NULL, NULL, NULL, 'NR', 0, ''),
(574681324, 'lucas', '', '2022-04-14', '1970-01-01', '1970-01-01', NULL, 0, '', NULL, NULL, NULL, 'NR', 0, ''),
(574681325, 'lucas', '', '2022-04-14', '1970-01-01', '1970-01-01', NULL, 0, '', NULL, NULL, NULL, 'NR', 0, ''),
(574681326, 'lucas', '', '2022-04-14', '1970-01-01', '1970-01-01', NULL, 0, '', NULL, NULL, NULL, 'NR', 0, ''),
(574681327, 'lucas', '', '2022-04-14', '1970-01-01', '1970-01-01', NULL, 0, '', NULL, NULL, NULL, 'NR', 0, ''),
(574681328, 'lucas', 'ME4', '2022-04-15', '2022-04-15', '2022-04-16', '2022-04-16', 45, 'hr', 15, 1, 675, 'R', 0, ''),
(574681329, 'lucas', '', '2022-04-16', '2022-04-16', '2022-04-17', NULL, 0, 'hr', NULL, NULL, NULL, 'NR', 0, ''),
(574681330, 'lucas', '', '2022-04-16', '2022-04-16', '2022-04-17', NULL, 0, 'hr', NULL, NULL, NULL, 'NR', 0, ''),
(574681331, 'lucas', '', '2022-04-16', '2022-04-16', '2022-04-17', NULL, 0, 'hr', NULL, NULL, NULL, 'NR', 0, ''),
(574681332, 'lucas', '', '2022-04-16', '2022-04-16', '2022-04-17', NULL, 0, 'hr', NULL, NULL, NULL, 'NR', 0, ''),
(574681333, 'lucas', 'ME21', '2022-04-16', '2022-04-16', '2022-04-17', '2022-04-16', 150, 'hr', 18, 1, 2700, 'R', 0, ''),
(574681334, 'lucas', '', '2022-04-16', '2022-04-17', '2022-04-18', NULL, 0, 'days', NULL, NULL, NULL, 'NR', 0, ''),
(574681335, 'lucas', '', '2022-04-16', '2022-04-17', '2022-04-18', NULL, 0, 'days', NULL, NULL, NULL, 'NR', 0, ''),
(574681336, 'lucas', '', '2022-04-16', '2022-04-17', '2022-04-18', NULL, 0, 'days', NULL, NULL, NULL, 'NR', 0, ''),
(574681337, 'lucas', '', '2022-04-16', '2022-04-17', '2022-04-18', NULL, 0, 'days', NULL, NULL, NULL, 'NR', 0, ''),
(574681338, 'lucas', '', '2022-04-16', '2022-04-17', '2022-04-18', NULL, 0, 'days', NULL, NULL, NULL, 'NR', 0, ''),
(574681339, 'lucas', 'CU07', '2022-04-16', '2022-04-16', '2022-04-16', '2022-04-19', 100, 'hr', 10, 0, 1600, 'R', 0, ''),
(574681340, 'lucas', 'CU10', '2022-04-19', '2022-04-19', '2022-04-22', '2022-05-23', 275, 'days', NULL, 3, 7025, 'R', 0, ''),
(574681341, 'lucas', 'ME21', '2022-04-20', '2022-04-20', '2022-04-21', NULL, 800, 'days', NULL, NULL, NULL, 'NR', 0, ''),
(574681342, 'lucas', 'IR07', '2022-05-23', '2022-05-23', '2022-05-23', NULL, 15, 'hr', NULL, NULL, NULL, 'NR', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `tools`
--

CREATE TABLE `tools` (
  `tool_id` varchar(20) NOT NULL,
  `tool_name` varchar(50) NOT NULL,
  `tool_type` varchar(50) NOT NULL,
  `tool_img` varchar(50) DEFAULT 'NA',
  `tool_guide` varchar(250) NOT NULL,
  `userguide_price_per_hr` float NOT NULL,
  `non_userguide_price_per_hr` float NOT NULL,
  `userguide_price_per_day` float NOT NULL,
  `non_userguide_price_per_day` float NOT NULL,
  `tool_availability` varchar(10) NOT NULL,
  `tool_text` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tools`
--

INSERT INTO `tools` (`tool_id`, `tool_name`, `tool_type`, `tool_img`, `tool_guide`, `userguide_price_per_hr`, `non_userguide_price_per_hr`, `userguide_price_per_day`, `non_userguide_price_per_day`, `tool_availability`, `tool_text`) VALUES
('CU04', 'Machete', 'Cutting', 'assets/img/tools/Machete.jfif', '', 35, 24, 140, 130, 'yes', 'Used for removing dead plant residue from farms and gardens by scalping the above ground vegetation and leaving the root biomass in place.'),
('CU05', 'Cutlass', 'Cutting', 'assets/img/tools/Cutlass.jpg', '', 60, 50, 300, 250, 'yes', 'Used for pre-planting activities such as the cutting down and clearing of grasses, bushes, and trees.'),
('CU06', 'Slasher', 'Cutting', 'assets/img/tools/slasher.png', '', 70, 50, 300, 275, 'yes', 'An agriculture machine used for cutting unwanted grass'),
('CU07', 'Band Saw', 'Cutting', 'assets/img/tools/bandsaw-machine.jpg', '', 100, 80, 400, 350, 'yes', 'Band saw machine is  used to cut variety of material'),
('CU08', 'Broaching Machine', 'Cutting', 'assets/img/tools/broaching-machine.jpg', '', 60, 50, 300, 200, 'yes', 'Used to remove material from the surface of your workpieces. '),
('CU10', 'Darlac Billhook', 'Cutting', 'assets/img/tools/billhook.jfif', '', 100, 80, 275, 250, 'yes', 'Also known as Bush Knife.Widely used by foresters for cutting and splitting.'),
('DR03', 'Post Hole Digger', 'Drilling', 'assets/img/tools/Post hole digger.jpg', '', 50, 40, 200, 150, 'yes', 'Used for general purposes such as setting fence and sign posts or planting saplings. '),
('DR04', 'Tractor Mounting Rig', 'Drilling', 'assets/img/tools/tractor mounting rig.jpg', '', 60, 55, 250, 220, 'yes', 'Used in the application of construction Piling capable of drilling 1200 mm diameter up to 30 m depth'),
('DR05', 'Hand Ground Dill', 'Drilling', 'assets/img/tools/Hand Ground Drill.jpg', '', 65, 50, 170, 130, 'yes', 'Hand-powered earth augers are typically used to plant tree saplings or to set up posts for fences or other ends. '),
('DR06', 'Power Tiller', 'Drilling', 'assets/img/tools/Power Tiller.jpg', '', 70, 60, 220, 200, 'yes', 'Power Tiller helps in preparing the soil, sowing seeds, planting seeds, adding & spraying the fertilizers, herbicides & water '),
('DR07', 'Water Well Digger', 'Drilling', 'assets/img/tools/Water well Driller.jpg', '', 50, 35, 275, 225, 'yes', 'Used for drilling opencast and underground mines,to drill water wells, oil wells, or natural gas extraction wells'),
('DR08', 'Hydroponic vertical grow tower', 'Drilling', 'assets/img/tools/Hydroponicverticalgrowtower.jpg', '', 100, 80, 400, 350, 'yes', 'Utilize motorized pumps, water, and hydroponic nutrient solution to grow herbs, fruits and any other type of plant.'),
('DR09', 'CNC horizontal boring machine', 'Drilling', 'assets/img/tools/CNC.jpg', '', 60, 55, 450, 400, 'yes', 'Tool that drills holes in a horizontal direction, and there are three types including floor, table, and plane'),
('DR10', 'Digital Boring Head', 'Drilling', 'assets/img/tools/digital-boring-head.jpg', '', 50, 40, 100, 80, 'yes', 'Boring heads are specifically designed to enlarge an existing hole'),
('IR01', 'Sprlinker', 'Irrigation', 'assets/img/tools/Sprinkler.jfif', '', 60, 50, 150, 130, 'yes', 'Device used to irrigate (water) agricultural crops, lawns, landscapes'),
('IR02', 'Hoses', 'Irrigation', 'assets/img/tools/hoses.jfif', '', 70, 60, 140, 120, 'yes', 'Used to carry fluids through air and with clamps, spigots, flanges, and nozzles to control fluid flow'),
('iR03', 'Automatic Travelling Irrigator', 'Irrigation', 'assets/img/tools/AutomaticTravellingIrrigator.jpg', '', 100, 90, 500, 450, 'yes', 'Sprinklers fixed to a moving platform, ideal for applying water on small farms, pastures, sporting grounds and parks'),
('IR04', 'Lawn Water Sprinkler', 'Irrigation', 'assets/img/tools/LawnWaterSprinkler.jfif', '', 50, 40, 140, 120, 'yes', 'Used by mechanism through which water is distributed in a spray so that a residential lawn or garden is irrigated.'),
('IR05', 'Centre Pivot', 'Irrigation', 'assets/img/tools/CentrePivot.jfif', '', 30, 55, 170, 150, 'yes', 'A Method of crop irrigation in which equipment rotates around a pivot and crops are watered with sprinklers.'),
('IR06', 'Wheel Line Sprinkler', 'Irrigation', 'assets/img/tools/WheelLine Sprinkler.jpg', '', 35, 24, 500, 130, 'yes', 'A wheelmove system has impact sprinkler heads with levelers to keep the sprinklers in an upright position'),
('IR07', 'Tubing Hook', 'Irrigation', 'assets/img/tools/tubinghook.jpg', '', 15, 10, 50, 35, 'no', 'Used for hook stiffening and helps for insulation coverings'),
('IR08', 'Motorcycle Water Pump', 'Irrigation', 'assets/img/tools/WaterPump.jpg', '', 70, 60, 200, 180, 'yes', 'It built by a brushless dc motor and its main function is to circulate the coolant to cool the motorcycle\'s engine or batteries in electric motorcycle.'),
('IR09', 'Drip Irrigation Kit', 'Irrigation', 'assets/img/tools/dripirrigationkit.jpg', '', 80, 70, 290, 275, 'yes', 'It provides a smart and economical way to save water, promote plant growth, prevent fungus and diseases and provide many other benefits.'),
('MA12', 'Sprayer', 'Irrigation', 'assets/img/tools/sprayer.jpg', '', 39, 29, 610, 438, 'yes', 'A device used in agriculture used to spray liquids like water, insecticides, and pesticides in agriculture'),
('ME024', 'Hand Plough', 'Mechanical', 'assets/img/tools/HandPlough.jfif', '', 70, 50, 200, 150, 'yes', 'Easy to plough through hands and helps well in gardening'),
('ME1', 'Axe', 'Cutting', 'assets/img/tools/axe.jpg', '', 36, 26, 520, 260, 'yes', 'Hand tool used for chopping, splitting, chipping, and piercing'),
('ME10', 'Wheelbarrow', 'Mechanical', 'assets/img/tools/wheelbarrow.jpg', '', 15, 13, 300, 260, 'yes', 'A small object that easily used single-handed to transport the gardens gardening material'),
('ME13', 'Seed Driller', 'Drilling', 'assets/img/tools/SeedPlanter.jpg', '', 35, 24, 250, 200, 'yes', 'Used for digging big holes and for digging out big stones and stumps'),
('ME14', 'Gloves', 'Mechanical', 'assets/img/tools/gloves.jpg', '', 15, 10, 50, 40, 'yes', 'Help prevent bacteria and harmful chemicals from coming in contact with animals or worker\'s skin'),
('ME15', 'Plough', 'Machinery', 'assets/img/tools/plough.jpg', '', 15, 24, 250, 200, 'yes', 'a farm tool for loosening or turning the soil before sowing seed or planting.'),
('ME2', 'Hoe', 'Cutting', 'assets/img/tools/hoe.jpg', '', 22, 12, 290, 140, 'yes', 'Commonly used in gardening and horticulture to loosen soil and chop weeds'),
('ME20', 'Tractor', 'Machinery', 'assets/img/tools/Tractor.png', '', 400, 350, 950, 900, 'yes', 'Used to operate stationary or drawn machinery and implements.'),
('ME21', 'Tracked Tractor', 'Machinery', 'assets/img/tools/trackedtractor.jfif', '', 150, 120, 800, 750, 'no', 'Used as part of an Engineering vehicle once additional attachments have been added, such as a bulldozer blade, or a ripper.'),
('ME22', 'Riding Lawn Mower', 'Machinery', 'assets/img/tools/riding.jfif', '', 150, 130, 700, 650, 'yes', 'A machine utilizing one or more revolving blades to cut a grass surface to an even height.'),
('ME23', 'Baler', 'Machinery', 'assets/img/tools/baler.jfif', '', 170, 150, 600, 550, 'yes', 'Used to compress a cut and raked crop into compact bales that are easy to handle, transport, and store.'),
('ME24', 'Crop Sprayer', 'Machinery', 'assets/img/tools/cropsprayer.jfif', '', 80, 70, 450, 400, 'yes', 'Used to apply herbicides, pesticides, and fertilizers on agricultural crops.'),
('ME25', 'Combine Harvester', 'Machinery', 'assets/img/tools/combineharvester.jpeg', '', 150, 130, 600, 550, 'yes', 'Helps in reducing manpower, time and effort taken which consequently increases the overall productivity.'),
('ME3', 'Crowbar', 'Digging', 'assets/img/tools/crowbar.jpg', '', 39, 30, 690, 590, 'yes', 'Used for digging big holes and for digging out big stones and stumps'),
('ME4', 'Pitchfork', 'Mechanical', 'assets/img/tools/pitchfork.jpg', '', 45, 30, 720, 520, 'yes', 'Used to lift and pitch or throw loose material, such as hay, straw, manure, or leaves'),
('ME5', 'Rake', 'Mechanical', 'assets/img/tools/rake.jpg', '', 21, 13, 380, 260, 'yes', 'Used for scooping, scraping, gathering, or leveling materials, such as soil, mulch, or leaves'),
('ME6', 'Shears', 'Cutting', 'assets/img/tools/shears.jpg', '', 14, 12, 280, 240, 'yes', 'Used to prune hard branches of trees and shrubs, sometimes up to two centimetres thick'),
('ME7', 'Shovel', 'Drilling', 'assets/img/tools/shovel.jpg', '', 36, 26, 600, 460, 'yes', 'Helps with digging and transplanting soil, making shallow trenches, and in removing dirt or debris'),
('ME8', 'Sickle', 'Cutting', 'assets/img/tools/sickle.jpg', '', 20, 12, 290, 140, 'yes', 'Used for the harvesting of vegetables, cereal crops and cutting of the grass and other vegetative matters'),
('ME9', 'Spade', 'Digging', 'assets/img/tools/spade.jpg', '', 22, 15, 285, 140, 'yes', 'Used for digging comprising a blade – typically curved and more pointed'),
('ME98', 'Seeder', 'Machinery', 'assets/img/tools/TomatoPlantingEquipment.jpg', '', 50, 60, 200, 120, 'yes', 'Used for planting seeds');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agent`
--
ALTER TABLE `agent`
  ADD PRIMARY KEY (`agent_id`),
  ADD UNIQUE KEY `agent_mailid` (`agent_mailid`),
  ADD KEY `client_username` (`client_username`);

--
-- Indexes for table `carttools`
--
ALTER TABLE `carttools`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_username` (`customer_username`),
  ADD KEY `tool_id` (`tool_id`),
  ADD KEY `agent_id` (`agent_id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`client_username`);

--
-- Indexes for table `clienttools`
--
ALTER TABLE `clienttools`
  ADD PRIMARY KEY (`tool_id`),
  ADD KEY `client_username` (`client_username`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_username`);

--
-- Indexes for table `rentedtools`
--
ALTER TABLE `rentedtools`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_username` (`customer_username`),
  ADD KEY `tool_id` (`tool_id`),
  ADD KEY `agent_id` (`agent_id`);

--
-- Indexes for table `tools`
--
ALTER TABLE `tools`
  ADD PRIMARY KEY (`tool_id`),
  ADD UNIQUE KEY `tool_id` (`tool_id`),
  ADD KEY `tool_type` (`tool_type`),
  ADD KEY `tool_type_2` (`tool_type`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carttools`
--
ALTER TABLE `carttools`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `rentedtools`
--
ALTER TABLE `rentedtools`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=574681343;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `agent`
--
ALTER TABLE `agent`
  ADD CONSTRAINT `agent_ibfk_1` FOREIGN KEY (`client_username`) REFERENCES `clients` (`client_username`);

--
-- Constraints for table `clienttools`
--
ALTER TABLE `clienttools`
  ADD CONSTRAINT `clientcars_ibfk_1` FOREIGN KEY (`client_username`) REFERENCES `clients` (`client_username`),
  ADD CONSTRAINT `clientcars_ibfk_2` FOREIGN KEY (`tool_id`) REFERENCES `tools` (`tool_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
