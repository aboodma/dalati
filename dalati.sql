-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2018 at 08:01 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dalati`
--

-- --------------------------------------------------------

--
-- Table structure for table `currency`
--

CREATE TABLE `currency` (
  `currency_id` int(11) NOT NULL,
  `currency_name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `currency`
--

INSERT INTO `currency` (`currency_id`, `currency_name`) VALUES
(1, 'USD'),
(2, 'YTL');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `c_id` int(11) NOT NULL,
  `c_name` varchar(255) NOT NULL,
  `c_age` date NOT NULL,
  `c_phone` varchar(20) NOT NULL,
  `passport_id` varchar(30) NOT NULL,
  `service_id` int(11) NOT NULL,
  `price` varchar(30) NOT NULL,
  `currency` int(11) NOT NULL,
  `paid` varchar(30) NOT NULL,
  `remain_price` varchar(30) NOT NULL,
  `completed` int(11) NOT NULL DEFAULT '0',
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `completed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`c_id`, `c_name`, `c_age`, `c_phone`, `passport_id`, `service_id`, `price`, `currency`, `paid`, `remain_price`, `completed`, `create_at`, `completed_at`) VALUES
(1, 'Abdulrahman Mardini', '1995-12-21', '00905375280964', '54652558', 2, '500', 1, '200', '300', 0, '2018-10-27 21:00:00', '2018-10-27 22:36:59'),
(2, 'Abdulrahman Mardini', '1995-12-21', '0111222555', '54652558', 2, '500', 1, '200', '300', 0, '2018-10-27 21:00:00', '2018-10-27 22:44:09'),
(3, 'Abdulrahman Mardini', '1995-12-21', '00905375280964', '54652558', 1, '500', 2, '200', '300', 0, '2018-10-27 21:00:00', '2018-10-27 22:37:03'),
(4, 'Ahmad Dalati', '2018-10-28', '45545456464', '564654654654', 1, '500', 1, '5000', '5000', 0, '2018-10-28 11:04:03', '2018-10-28 11:04:03'),
(5, 'Ahmad Dalati', '2018-10-28', '5146548888', '564654654654', 1, '500', 1, '500', '0', 0, '2018-10-28 20:38:15', '2018-10-28 20:38:15');

-- --------------------------------------------------------

--
-- Table structure for table `offices`
--

CREATE TABLE `offices` (
  `o_id` int(11) NOT NULL,
  `o_name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `offices`
--

INSERT INTO `offices` (`o_id`, `o_name`, `create_at`) VALUES
(1, 'Zamzam', '2018-10-28 21:00:21');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `s_id` int(11) NOT NULL,
  `service_name` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`s_id`, `service_name`) VALUES
(1, 'إقامة'),
(2, 'تجديد جواز سفر');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `currency`
--
ALTER TABLE `currency`
  ADD PRIMARY KEY (`currency_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`c_id`),
  ADD KEY `service_id` (`service_id`),
  ADD KEY `currency` (`currency`);

--
-- Indexes for table `offices`
--
ALTER TABLE `offices`
  ADD PRIMARY KEY (`o_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`s_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `currency`
--
ALTER TABLE `currency`
  MODIFY `currency_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `offices`
--
ALTER TABLE `offices`
  MODIFY `o_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `customers`
--
ALTER TABLE `customers`
  ADD CONSTRAINT `customers_ibfk_1` FOREIGN KEY (`service_id`) REFERENCES `services` (`s_id`),
  ADD CONSTRAINT `customers_ibfk_2` FOREIGN KEY (`currency`) REFERENCES `currency` (`currency_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
