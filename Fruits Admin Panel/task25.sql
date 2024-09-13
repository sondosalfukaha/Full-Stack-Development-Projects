-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2024 at 01:24 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `task25`
--

-- --------------------------------------------------------

--
-- Table structure for table `discountedfruits`
--

CREATE TABLE `discountedfruits` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `imagePath` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `discountedfruits`
--

INSERT INTO `discountedfruits` (`id`, `name`, `price`, `imagePath`) VALUES
(3, 'Orange', 10, 'orange.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `greenfruits`
--

CREATE TABLE `greenfruits` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `imagePath` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `greenfruits`
--

INSERT INTO `greenfruits` (`id`, `name`, `price`, `imagePath`) VALUES
(1, 'Mango123', 10, 'orange.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `newfruits`
--

CREATE TABLE `newfruits` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `imagePath` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `newfruits`
--

INSERT INTO `newfruits` (`id`, `name`, `price`, `imagePath`) VALUES
(1, '20s', 10, 'orange.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `phonenumber` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `order1` varchar(255) NOT NULL,
  `visaorcash` varchar(255) NOT NULL,
  `totalprice` int(11) NOT NULL,
  `qrt` varchar(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `username`, `phonenumber`, `location`, `order1`, `visaorcash`, `totalprice`, `qrt`) VALUES
(1, 'sondos1', '1233', 'Madaba', 'Orange', 'Visa', 100, '0');

-- --------------------------------------------------------

--
-- Table structure for table `summerfruits`
--

CREATE TABLE `summerfruits` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `imagePath` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `summerfruits`
--

INSERT INTO `summerfruits` (`id`, `name`, `price`, `imagePath`) VALUES
(1, 'Apple2', 10, 'orange.jpeg'),
(2, 'Orange2', 102, 'Bootstrap Certification.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fullname` varchar(300) NOT NULL,
  `email` varchar(300) NOT NULL,
  `username` varchar(300) NOT NULL,
  `phonenumber` int(255) NOT NULL,
  `Payment` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `email`, `username`, `phonenumber`, `Payment`) VALUES
(3, 'Sondos Alfukaha', 'sondosaied0@gmail.com', 'sond123', 798037948, 'visa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `discountedfruits`
--
ALTER TABLE `discountedfruits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `greenfruits`
--
ALTER TABLE `greenfruits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newfruits`
--
ALTER TABLE `newfruits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `summerfruits`
--
ALTER TABLE `summerfruits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `discountedfruits`
--
ALTER TABLE `discountedfruits`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `greenfruits`
--
ALTER TABLE `greenfruits`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `newfruits`
--
ALTER TABLE `newfruits`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `summerfruits`
--
ALTER TABLE `summerfruits`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
