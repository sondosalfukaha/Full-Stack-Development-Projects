-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2024 at 02:32 AM
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
-- Database: `task21`
--

-- --------------------------------------------------------

--
-- Table structure for table `class1`
--

CREATE TABLE `class1` (
  `Title` varchar(500) NOT NULL,
  `Description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `class1`
--

INSERT INTO `class1` (`Title`, `Description`) VALUES
('First Training Class', 'Bring your best self, your best friends—and we’ll bring our bestbeats.');

-- --------------------------------------------------------

--
-- Table structure for table `class1image`
--

CREATE TABLE `class1image` (
  `Class1Image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `class1image`
--

INSERT INTO `class1image` (`Class1Image`) VALUES
('Our Classes 1.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `class2`
--

CREATE TABLE `class2` (
  `Title` varchar(500) NOT NULL,
  `Description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `class2`
--

INSERT INTO `class2` (`Title`, `Description`) VALUES
('Second Training Class\r\n', 'Our newest signature class combines dancing and sculpting for a\r\nfull-body, all-natural high.');

-- --------------------------------------------------------

--
-- Table structure for table `class2image`
--

CREATE TABLE `class2image` (
  `Class2Image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `class2image`
--

INSERT INTO `class2image` (`Class2Image`) VALUES
('Our Classes 2.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `class3`
--

CREATE TABLE `class3` (
  `Title` varchar(500) NOT NULL,
  `Description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `class3`
--

INSERT INTO `class3` (`Title`, `Description`) VALUES
('Third Training Class', 'One weight is all it takes. Delete distraction and zero in on results\r\nwith a next-generation HIIT weight training class that strips your\r\ntraining to the core.');

-- --------------------------------------------------------

--
-- Table structure for table `class3image`
--

CREATE TABLE `class3image` (
  `Class3Image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `class3image`
--

INSERT INTO `class3image` (`Class3Image`) VALUES
('Our  Classes 3.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `class4`
--

CREATE TABLE `class4` (
  `Title` varchar(500) NOT NULL,
  `Description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `class4`
--

INSERT INTO `class4` (`Title`, `Description`) VALUES
('Fourth Training Class', 'Run smart, hurt less,and burn more in oursignature Running experience.!!');

-- --------------------------------------------------------

--
-- Table structure for table `class4image`
--

CREATE TABLE `class4image` (
  `Class4Image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `class4image`
--

INSERT INTO `class4image` (`Class4Image`) VALUES
('Our  Classes 4.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `description`
--

CREATE TABLE `description` (
  `Description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `description`
--

INSERT INTO `description` (`Description`) VALUES
('easy with our gym'),
('easy with our gym');

-- --------------------------------------------------------

--
-- Table structure for table `email`
--

CREATE TABLE `email` (
  `Email` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `email`
--

INSERT INTO `email` (`Email`) VALUES
('AAA@gmail.com'),
('AAA@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `favicon`
--

CREATE TABLE `favicon` (
  `Favicon` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `favicon`
--

INSERT INTO `favicon` (`Favicon`) VALUES
('line-dec.png');

-- --------------------------------------------------------

--
-- Table structure for table `gps`
--

CREATE TABLE `gps` (
  `GPS` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gps`
--

INSERT INTO `gps` (`GPS`) VALUES
('<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3384.6076270494104!2d35.83716532559077!3d31.97153982401053!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151ca17ed1965e8d%3A0xd93a3913affa5945!2z2YXYrNmF2Lkg2KfZhNmF2YTZgyDYp9mE2K3Ys9mK2YYg2YTZhNij2LnZhdin2YQ!5e0!3m2!1sar!2sjo!4v1711406320064!5m2!1sar!2sjo\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>');

-- --------------------------------------------------------

--
-- Table structure for table `icon`
--

CREATE TABLE `icon` (
  `Icon` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `icon`
--

INSERT INTO `icon` (`Icon`) VALUES
('features-first-icon.png');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `Location` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`Location`) VALUES
('Clever Mind POB ICT Amman-Jordan -King Hussein Business Park ZINC -23'),
('Clever Mind POB ICT Amman-Jordan -King Hussein Business Park ZINC -23'),
('Clever Mind POB ICT Amman-Jordan -King Hussein Business Park ZINC -23');

-- --------------------------------------------------------

--
-- Table structure for table `logo`
--

CREATE TABLE `logo` (
  `Logo` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `logo`
--

INSERT INTO `logo` (`Logo`) VALUES
('features-first-icon.png');

-- --------------------------------------------------------

--
-- Table structure for table `number`
--

CREATE TABLE `number` (
  `Number` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `number`
--

INSERT INTO `number` (`Number`) VALUES
('0779-123-123');

-- --------------------------------------------------------

--
-- Table structure for table `section1`
--

CREATE TABLE `section1` (
  `Title` varchar(500) NOT NULL,
  `Description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `section1`
--

INSERT INTO `section1` (`Title`, `Description`) VALUES
('Basic Fitness', 'We Have The greatest Gym Ever !');

-- --------------------------------------------------------

--
-- Table structure for table `section2`
--

CREATE TABLE `section2` (
  `Title` varchar(500) NOT NULL,
  `Description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `section2`
--

INSERT INTO `section2` (`Title`, `Description`) VALUES
('Advanced Muscle Course', 'We Are The Professionals!');

-- --------------------------------------------------------

--
-- Table structure for table `section3`
--

CREATE TABLE `section3` (
  `Title` varchar(500) NOT NULL,
  `Description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `section3`
--

INSERT INTO `section3` (`Title`, `Description`) VALUES
('New Gym Training', 'New Advanced Training With US');

-- --------------------------------------------------------

--
-- Table structure for table `section4`
--

CREATE TABLE `section4` (
  `Title` varchar(500) NOT NULL,
  `Description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `section4`
--

INSERT INTO `section4` (`Title`, `Description`) VALUES
('Yoga Training', 'Let\'s Become More Healthy');

-- --------------------------------------------------------

--
-- Table structure for table `section5`
--

CREATE TABLE `section5` (
  `Title` varchar(500) NOT NULL,
  `Description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `section5`
--

INSERT INTO `section5` (`Title`, `Description`) VALUES
('Basic Muscle Course', 'For All Ages !');

-- --------------------------------------------------------

--
-- Table structure for table `section6`
--

CREATE TABLE `section6` (
  `Title` varchar(500) NOT NULL,
  `Description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `section6`
--

INSERT INTO `section6` (`Title`, `Description`) VALUES
('Body Building Course', 'Build a Great Body!');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `Slider` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`Slider`) VALUES
('Slider.mp4');

-- --------------------------------------------------------

--
-- Table structure for table `social`
--

CREATE TABLE `social` (
  `Instagram` varchar(500) NOT NULL,
  `Twitter` varchar(500) NOT NULL,
  `Facebook` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `social`
--

INSERT INTO `social` (`Instagram`, `Twitter`, `Facebook`) VALUES
('sondos', 'sss', 'abc');

-- --------------------------------------------------------

--
-- Table structure for table `title`
--

CREATE TABLE `title` (
  `Title` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `title`
--

INSERT INTO `title` (`Title`) VALUES
('work harder, get stronger!');

-- --------------------------------------------------------

--
-- Table structure for table `wname`
--

CREATE TABLE `wname` (
  `WName` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `wname`
--

INSERT INTO `wname` (`WName`) VALUES
('GYM Stu');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
