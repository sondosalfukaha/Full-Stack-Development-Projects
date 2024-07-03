-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2024 at 12:01 AM
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
-- Database: `mobile-adminsite`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendedcours`
--

CREATE TABLE `attendedcours` (
  `userid` int(11) NOT NULL,
  `courseid` int(11) NOT NULL,
  `coursename` varchar(200) NOT NULL,
  `payment` varchar(200) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `attendedcours`
--

INSERT INTO `attendedcours` (`userid`, `courseid`, `coursename`, `payment`, `id`) VALUES
(1, 1, 'sondos', 'online', 1),
(2, 2, 'a', 'online', 2),
(101, 1111, 'Bootstrap bootcamp', 'online', 3),
(11113688, 11113688, 'Bootstrap', 'cash', 4),
(11113699, 111136655, 'data structure', 'online', 6);

-- --------------------------------------------------------

--
-- Table structure for table `attendedevent`
--

CREATE TABLE `attendedevent` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `eventid` int(200) NOT NULL,
  `eventname` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `attendedevent`
--

INSERT INTO `attendedevent` (`id`, `userid`, `eventid`, `eventname`) VALUES
(1, 1, 1, 'a'),
(2, 789, 766, 'bcdes');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `feedback` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `userid`, `feedback`) VALUES
(3, 101, 'good');

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `experience` varchar(200) NOT NULL,
  `picture` varchar(200) NOT NULL,
  `cv` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`id`, `title`, `experience`, `picture`, `cv`) VALUES
(4, 'Web developer', 'CMP Certification', '1695751377469.jpeg', 'SondosAlfukahaCV.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `newevent`
--

CREATE TABLE `newevent` (
  `id` int(200) NOT NULL,
  `date` date NOT NULL,
  `title` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `newevent`
--

INSERT INTO `newevent` (`id`, `date`, `title`) VALUES
(1, '2024-06-09', 'jj');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `new` longtext NOT NULL,
  `dexcription` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `new`, `dexcription`, `image`) VALUES
(3, 'Offical', 'Offical', '387698517_834210288191267_4508879464852156415_n.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `newsoonsection`
--

CREATE TABLE `newsoonsection` (
  `id` int(11) NOT NULL,
  `title` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `newsoonsection`
--

INSERT INTO `newsoonsection` (`id`, `title`) VALUES
(5, 'Orang');

-- --------------------------------------------------------

--
-- Table structure for table `policyandprivacy`
--

CREATE TABLE `policyandprivacy` (
  `id` int(11) NOT NULL,
  `text` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `policyandprivacy`
--

INSERT INTO `policyandprivacy` (`id`, `text`) VALUES
(2, 'Sondos Re..');

-- --------------------------------------------------------

--
-- Table structure for table `trainingcourses`
--

CREATE TABLE `trainingcourses` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `title` varchar(200) NOT NULL,
  `description` varchar(200) NOT NULL,
  `picture` varchar(200) NOT NULL,
  `price` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `trainingcourses`
--

INSERT INTO `trainingcourses` (`id`, `date`, `title`, `description`, `picture`, `price`) VALUES
(5, '2024-06-12', 'Bootstrap Course', 'Learn how to style your app using bootstrap', 'Bootstrap Certification.png', '15$'),
(6, '2024-06-04', 'title', 'des', '387698517_834210288191267_4508879464852156415_n.jpg', '500$');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `name` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `username` varchar(500) NOT NULL,
  `phone_number` int(255) NOT NULL,
  `data_of_birth` date NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `email`, `username`, `phone_number`, `data_of_birth`, `id`) VALUES
('Sondos', 'sondos@gmail.com', 'so123', 123456789, '2002-12-30', 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendedcours`
--
ALTER TABLE `attendedcours`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendedevent`
--
ALTER TABLE `attendedevent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newevent`
--
ALTER TABLE `newevent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsoonsection`
--
ALTER TABLE `newsoonsection`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `policyandprivacy`
--
ALTER TABLE `policyandprivacy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trainingcourses`
--
ALTER TABLE `trainingcourses`
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
-- AUTO_INCREMENT for table `attendedcours`
--
ALTER TABLE `attendedcours`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `attendedevent`
--
ALTER TABLE `attendedevent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `newevent`
--
ALTER TABLE `newevent`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `newsoonsection`
--
ALTER TABLE `newsoonsection`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `policyandprivacy`
--
ALTER TABLE `policyandprivacy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `trainingcourses`
--
ALTER TABLE `trainingcourses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
