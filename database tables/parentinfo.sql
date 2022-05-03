-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2022 at 02:36 AM
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
-- Table structure for table `parentinfo`
--

CREATE TABLE `parentinfo` (
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `arivaldate` date NOT NULL,
  `status` varchar(50) NOT NULL,
  `parentid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `parentinfo`
--

INSERT INTO `parentinfo` (`firstname`, `lastname`, `address`, `phone`, `country`, `arivaldate`, `status`, `parentid`) VALUES
('Alex', 'Lux', '206 cedar Heights Dr.', '805-390-9643', 'United States', '2022-05-02', 'SIV', 1),
('Alex', 'Lux', '206 cedar Heights Dr.', '805-390-9643', 'United States', '2022-05-02', 'SIV', 2),
('Alex', 'Lux', '206 cedar Heights Dr.', '805-390-9643', 'United States', '2022-05-02', 'SIV', 3),
('Alex', 'Lux', '206 cedar Heights Dr.', '805-390-9643', 'United States', '2022-05-02', 'SIV', 4),
('Alex', 'Lux', '206 cedar Heights Dr.', '805-390-9643', 'United States', '2022-05-02', 'SIV', 5),
('Alex', 'Lux', '206 cedar Heights Dr.', '805-390-9643', 'United States', '2022-05-02', 'SIV', 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `parentinfo`
--
ALTER TABLE `parentinfo`
  ADD PRIMARY KEY (`parentid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `parentinfo`
--
ALTER TABLE `parentinfo`
  MODIFY `parentid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
