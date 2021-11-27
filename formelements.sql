-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Jun 30, 2020 at 01:56 PM
-- Server version: 5.7.24
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db`
--

-- --------------------------------------------------------

--
-- Table structure for table `formelements`
--

CREATE TABLE `formelements` (
  `formId` int(11) DEFAULT NULL,
  `label` varchar(45) DEFAULT NULL,
  `fieldType` varchar(45) DEFAULT NULL,
  `id` int(11) NOT NULL,
  `size` varchar(45) DEFAULT NULL,
  `max` varchar(45) DEFAULT NULL,
  `min` varchar(45) DEFAULT NULL,
  `width` varchar(45) DEFAULT NULL,
  `height` varchar(45) DEFAULT NULL,
  `maxlength` varchar(45) DEFAULT NULL,
  `step` varchar(45) DEFAULT NULL,
  `dmax` date DEFAULT NULL,
  `dmin` date DEFAULT NULL,
  `pattern` varchar(45) DEFAULT NULL,
  `dtmin` datetime DEFAULT NULL,
  `dtmax` datetime DEFAULT NULL,
  `tmin` time DEFAULT NULL,
  `tmax` time DEFAULT NULL,
  `namech` varchar(45) DEFAULT NULL,
  `namera` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `formelements`
--
ALTER TABLE `formelements`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `formelements`
--
ALTER TABLE `formelements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
