-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 01, 2018 at 09:34 PM
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
  `employee_id` int(11) NOT NULL,
  `passport_id` varchar(30) NOT NULL,
  `service_id` int(11) NOT NULL,
  `price` varchar(30) NOT NULL,
  `currency` int(11) NOT NULL,
  `paid` varchar(30) NOT NULL,
  `remain_price` varchar(30) NOT NULL,
  `orginal_price` varchar(5) NOT NULL,
  `completed` int(11) NOT NULL DEFAULT '0',
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `completed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`c_id`, `c_name`, `c_age`, `c_phone`, `employee_id`, `passport_id`, `service_id`, `price`, `currency`, `paid`, `remain_price`, `orginal_price`, `completed`, `create_at`, `completed_at`) VALUES
(1, '??? ?????? ???????', '2018-11-30', '00905375280964', 2, '00905375280964', 1, '500', 1, '200', '300', '100', 1, '2018-11-01 19:26:25', '2018-11-01 20:27:53'),
(2, 'Abdulrahman mardini  ', '2018-11-30', '00905375280964', 2, '00905375280964', 1, '500', 1, '200', '300', '100', 1, '2018-11-01 19:26:50', '2018-11-01 20:27:45'),
(3, 'Husaen Mardini', '1995-02-12', '0906558777', 1, '78789777', 1, '300', 1, '100', '200', '100', 1, '2018-11-01 20:02:04', '2018-11-01 20:25:10');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `e_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`e_id`, `name`, `username`, `password`) VALUES
(1, 'Ahmad Dalati', 'admin', 'admin'),
(2, 'Abdulrahman Dalati', NULL, NULL),
(3, 'Mulham Janat', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ikamet`
--

CREATE TABLE `ikamet` (
  `id` int(11) NOT NULL,
  `person` varchar(255) NOT NULL,
  `sgk_no` varchar(255) NOT NULL,
  `passport_no` varchar(255) NOT NULL,
  `req_date` date NOT NULL,
  `place` text NOT NULL,
  `ready` int(11) NOT NULL,
  `got_it` int(11) NOT NULL,
  `renew_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ikamet`
--

INSERT INTO `ikamet` (`id`, `person`, `sgk_no`, `passport_no`, `req_date`, `place`, `ready`, `got_it`, `renew_date`) VALUES
(1, 'abood', '123456789', '123456789', '2018-10-31', 'sultan bely', 1, 0, '2018-12-29');

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
(1, 'Zamzam', '2018-10-28 21:00:21'),
(2, 'lsadaasdasd', '2018-10-29 11:18:01');

-- --------------------------------------------------------

--
-- Table structure for table `office_account`
--

CREATE TABLE `office_account` (
  `id` int(11) NOT NULL,
  `office_id` int(11) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `age` date NOT NULL,
  `phone` varchar(255) NOT NULL,
  `passport_id` varchar(255) NOT NULL,
  `service_id` int(11) NOT NULL,
  `price` varchar(255) NOT NULL,
  `currency_id` int(11) NOT NULL,
  `paid` int(11) NOT NULL,
  `remain_price` varchar(255) NOT NULL,
  `completed` int(11) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `completed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `office_account`
--

INSERT INTO `office_account` (`id`, `office_id`, `customer_name`, `age`, `phone`, `passport_id`, `service_id`, `price`, `currency_id`, `paid`, `remain_price`, `completed`, `create_at`, `completed_at`) VALUES
(1, 1, 'hamood', '2018-10-29', '56848454654', '5464984894', 2, '20', 1, 20, '0', 0, '2018-10-29 14:46:03', '2018-10-29 14:47:35'),
(3, 2, 'asdasdasda', '2018-10-29', '654654654', '654654654', 1, '30', 1, 30, '30', 0, '2018-10-29 14:48:17', '2018-10-29 14:48:17'),
(4, 2, 'asdasdasda', '2018-10-29', '654654654', '654654654', 1, '30', 1, 30, '30', 0, '2018-10-29 14:48:17', '2018-10-29 14:48:17'),
(5, 1, 'aboodma', '2018-10-31', '54848484', '545515454', 1, '300', 1, 300, '0', 0, '2018-10-31 19:27:47', '2018-10-31 19:27:47');

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
  ADD KEY `currency` (`currency`),
  ADD KEY `employee_id` (`employee_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`e_id`);

--
-- Indexes for table `ikamet`
--
ALTER TABLE `ikamet`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offices`
--
ALTER TABLE `offices`
  ADD PRIMARY KEY (`o_id`);

--
-- Indexes for table `office_account`
--
ALTER TABLE `office_account`
  ADD PRIMARY KEY (`id`),
  ADD KEY `office_id` (`office_id`),
  ADD KEY `currency_id` (`currency_id`),
  ADD KEY `service_id` (`service_id`);

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
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `e_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ikamet`
--
ALTER TABLE `ikamet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `offices`
--
ALTER TABLE `offices`
  MODIFY `o_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `office_account`
--
ALTER TABLE `office_account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
  ADD CONSTRAINT `customers_ibfk_2` FOREIGN KEY (`currency`) REFERENCES `currency` (`currency_id`),
  ADD CONSTRAINT `customers_ibfk_3` FOREIGN KEY (`employee_id`) REFERENCES `employee` (`e_id`);

--
-- Constraints for table `office_account`
--
ALTER TABLE `office_account`
  ADD CONSTRAINT `office_account_ibfk_1` FOREIGN KEY (`office_id`) REFERENCES `offices` (`o_id`),
  ADD CONSTRAINT `office_account_ibfk_2` FOREIGN KEY (`currency_id`) REFERENCES `currency` (`currency_id`),
  ADD CONSTRAINT `office_account_ibfk_3` FOREIGN KEY (`service_id`) REFERENCES `services` (`s_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
