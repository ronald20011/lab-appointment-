-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2024 at 06:00 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lab`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `fname` varchar(100) COLLATE armscii8_bin NOT NULL,
  `email` varchar(100) COLLATE armscii8_bin NOT NULL,
  `tno` varchar(100) COLLATE armscii8_bin NOT NULL,
  `date` date NOT NULL,
  `test` varchar(100) COLLATE armscii8_bin NOT NULL,
  `additional` varchar(100) COLLATE armscii8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`fname`, `email`, `tno`, `date`, `test`, `additional`) VALUES
('God', 'God@gmail.com', '07777777', '2024-03-25', 'Blood Test', 'blood'),
('suje', 'admin@gmail.com', '55', '0200-02-25', 'Blood Test', 'dd'),
('ro', 'ronaldantony52@gmail.com', '012', '2024-03-18', 'Blood Test', 'rr'),
('rohan', 'ronaldantony@gmail.com', '0767729230', '2024-03-19', 'Blood Test', 'hi'),
('suje', 'vithurshan.s17@gmail.com', '44', '2024-03-28', 'Blood Test', 'w');

-- --------------------------------------------------------

--
-- Table structure for table `email`
--

CREATE TABLE `email` (
  `email` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` int(11) NOT NULL,
  `name` varchar(100) COLLATE armscii8_bin NOT NULL,
  `email` varchar(100) COLLATE armscii8_bin NOT NULL,
  `credit_cart` varchar(16) COLLATE armscii8_bin NOT NULL,
  `expiry_date` varchar(7) COLLATE armscii8_bin NOT NULL,
  `cvv` varchar(3) COLLATE armscii8_bin NOT NULL,
  `payment_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE armscii8_bin NOT NULL,
  `age` int(11) NOT NULL,
  `address` varchar(100) COLLATE armscii8_bin NOT NULL,
  `email` varchar(100) COLLATE armscii8_bin NOT NULL,
  `password` varchar(100) COLLATE armscii8_bin NOT NULL,
  `test` varchar(100) COLLATE armscii8_bin NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `name`, `age`, `address`, `email`, `password`, `test`, `date`) VALUES
(1, 'ronald', 22, 'jaffna', 'ronaldantony52@gmail.com', 'hi', 'Test2', '2024-03-16'),
(2, 'kajeeban', 22, 'sky', 'kajivirat@gmail.com', 'kaji', 'blood', '2024-03-29'),
(3, 'admin', 22, 'sky', 'admin@gmail.com', 'ad', 'blood', '2024-03-04'),
(4, 'Vithu', 55, '22', 'v@gmail.com', 'v', 'blood', '2024-04-06'),
(5, 'rohanoo', 45, 'colombo', 'hi@gmail.com', 'ammaamma', 'blood', '2024-03-28'),
(6, 'sujee', 25, 'jaffna', 'sujee@gmail.com', 'sujee', 'Urine', '2024-03-21'),
(7, 'jesus', 33, 'sky', 'jesus@gmail.com', 'je', 'blood', '2024-03-25'),
(8, 'test', 55, 'ss', 'suba@gmail.com', 'suba', 'blood', '2024-03-11'),
(9, 'akka', 55, 'se', 'akka@gmail.com', 'akka', 'blood', '2024-03-29'),
(10, 'amm', 88, 'amm', 'amm@gmail.com', 'amm', 'blood', '2024-03-22'),
(12, 's', 55, 's', 's@gmail.com', 'g', 'blood', '2024-03-29'),
(13, 'admino', 12, 'sky', 'admin25@gmail.com', 'admin', 'Urine', '2024-03-23'),
(15, 'dmino', 12, 'sky', 'add@gmail.com', 'dd', 'Urine', '2024-03-23'),
(16, 'dmi', 12, 'sky', 'ad@gmail.com', 'dd', 'Urine', '2024-03-23'),
(17, 'God', 33, 'sky', 'God@gmail.com', 'god', 'Urine', '2024-03-23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
