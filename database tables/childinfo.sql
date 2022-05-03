-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2022 at 02:37 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `xamp_wordpress`
--

-- --------------------------------------------------------

--
-- Table structure for table `childinfo`
--

CREATE TABLE `childinfo` (
  `childid` int(11) NOT NULL,
  `childname` varchar(50) NOT NULL,
  `childage` int(50) NOT NULL,
  `childgender` varchar(50) NOT NULL,
  `parentid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `childinfo`
--

INSERT INTO `childinfo` (`childid`, `childname`, `childage`, `childgender`, `parentid`) VALUES
(1, 'lio mel', 21, 'female', 1),
(2, 'lio mel', 21, 'female', 2),
(3, 'lio mel', 21, 'female', 3),
(4, 'lio mel', 21, 'female', 4),
(5, 'lio mel', 21, 'female', 5),
(6, 'lio mel', 21, 'female', 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `childinfo`
--
ALTER TABLE `childinfo`
  ADD PRIMARY KEY (`childid`),
  ADD KEY `parentid` (`parentid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `childinfo`
--
ALTER TABLE `childinfo`
  MODIFY `childid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `childinfo`
--
ALTER TABLE `childinfo`
  ADD CONSTRAINT `childinfo_ibfk_1` FOREIGN KEY (`parentid`) REFERENCES `parentinfo` (`parentid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
