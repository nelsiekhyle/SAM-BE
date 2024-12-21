-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2024 at 12:04 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `corememories`
--

-- --------------------------------------------------------

--
-- Table structure for table `islandcontents`
--

CREATE TABLE `islandcontents` (
  `islandContentID` int(4) NOT NULL,
  `islandOfPersonalityID` int(4) NOT NULL,
  `image` varchar(50) DEFAULT NULL,
  `content` varchar(300) NOT NULL,
  `color` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `islandcontents`
--

INSERT INTO `islandcontents` (`islandContentID`, `islandOfPersonalityID`, `image`, `content`, `color`) VALUES
(1, 1, 'img/Friend1.jpg', 'Me and my high school friends.\r\n', '#C4D199'),
(2, 1, 'img/Friend2.jpg', 'Me and Rigelle', '#C4D199'),
(3, 1, 'img/Friend3.jpg', 'Adventures Together\r\n', '#C4D199'),
(4, 1, 'img/Friend4.jpg', 'Happy Moments', '#C4D199'),
(5, 1, 'img/Friend5.jpg', 'Get Together', '#C4D199'),
(6, 1, 'img/Friend6.jpg', 'Celebrating Birthday', '#C4D199'),
(7, 1, 'img/Friend7.jpg', 'Me, Sam and Rigelle', '#C4D199'),
(8, 2, 'img/Passion1.jpg', 'RTPACT Performance', '#82C293'),
(9, 2, 'img/Passion2.jpg', 'Women\'s Month Performance', '#82C293'),
(10, 2, 'img/Passion3.jpg', 'Photoshoot', '#82C293'),
(11, 2, 'img/Passion4.jpg', 'Buwan ng Wika Performance', '#82C293'),
(12, 3, 'img/Adventure1.jpg', 'Exploring the Beauty of Puerto Galera', '#655C9E'),
(13, 3, 'img/Adventure2.jpg', 'Ocean Tour', '#655C9E'),
(14, 3, 'img/Adventure3.jpg', 'Puerto Galera Falls', '#655C9E'),
(15, 3, 'img/Adventure4.jpg', 'Rock Cave', '#655C9E'),
(16, 4, 'img/Family1.jpg', 'Me and my Dad', '#FF85A5'),
(17, 4, 'img/Family2.jpg', 'Me and my Mom', '#FF85A5'),
(18, 4, 'img/Family3.jpg', 'New Year Celebration Part 1', '#FF85A5'),
(19, 4, 'img/Family4.jpg', 'New Year Celebration Part 2', '#FF85A5'),
(20, 4, 'img/Family5.jpg', 'Family Picture 1', '#FF85A5'),
(21, 4, 'img/Family6.jpg', 'Family Picture 2', '#FF85A5');

-- --------------------------------------------------------

--
-- Table structure for table `islandsofpersonality`
--

CREATE TABLE `islandsofpersonality` (
  `islandOfPersonalityID` int(4) NOT NULL,
  `name` varchar(40) NOT NULL,
  `shortDescription` varchar(300) DEFAULT NULL,
  `longDescription` varchar(900) DEFAULT NULL,
  `color` varchar(10) DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `islandsofpersonality`
--

INSERT INTO `islandsofpersonality` (`islandOfPersonalityID`, `name`, `shortDescription`, `longDescription`, `color`, `image`, `status`) VALUES
(1, 'Friendship Island', NULL, NULL, '#C4D199', NULL, NULL),
(2, 'Passion Island', NULL, NULL, '#82C293', NULL, NULL),
(3, 'Adventure Island', NULL, NULL, '#655C9E', NULL, NULL),
(4, 'Family Island', NULL, NULL, '#FF85A5', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `islandcontents`
--
ALTER TABLE `islandcontents`
  ADD PRIMARY KEY (`islandContentID`);

--
-- Indexes for table `islandsofpersonality`
--
ALTER TABLE `islandsofpersonality`
  ADD PRIMARY KEY (`islandOfPersonalityID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `islandcontents`
--
ALTER TABLE `islandcontents`
  MODIFY `islandContentID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `islandsofpersonality`
--
ALTER TABLE `islandsofpersonality`
  MODIFY `islandOfPersonalityID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
