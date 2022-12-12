-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2022 at 05:33 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Database: `sunny_spot_holiday`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `staffID` bigint(20) NOT NULL,
  `userName` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` int(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `mobile` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cabin`
--

CREATE TABLE `cabin` (
  `cabinID` bigint(20) NOT NULL,
  `cabinType` varchar(150) NOT NULL,
  `cabinDescription` varchar(255) NOT NULL,
  `pricePerNight` bigint(10) NOT NULL,
  `pricePerWeek` decimal(10,2) NOT NULL,
  `photo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cabin`
--

INSERT INTO `cabin` (`cabinID`, `cabinType`, `cabinDescription`, `pricePerNight`, `pricePerWeek`, `photo`) VALUES
(1, 'test cabin 3', 'test cabin with invalid data', 52, '625.00', 'insertCabin1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `cabininclusion`
--

CREATE TABLE `cabininclusion` (
  `cabinIncID` bigint(20) NOT NULL,
  `incID` bigint(20) NOT NULL,
  `cabinID` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `inclusion`
--

CREATE TABLE `inclusion` (
  `incID` bigint(20) NOT NULL,
  `incName` varchar(50) NOT NULL,
  `incDetails` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE `log` (
  `logID` bigint(20) NOT NULL,
  `staffID` bigint(20) NOT NULL,
  `loginDateTime` timestamp NOT NULL DEFAULT current_timestamp(),
  `logoutDateTime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`staffID`);

--
-- Indexes for table `cabin`
--
ALTER TABLE `cabin`
  ADD PRIMARY KEY (`cabinID`);

--
-- Indexes for table `cabininclusion`
--
ALTER TABLE `cabininclusion`
  ADD PRIMARY KEY (`cabinIncID`),
  ADD KEY `incID` (`incID`),
  ADD KEY `cabinID` (`cabinID`);

--
-- Indexes for table `inclusion`
--
ALTER TABLE `inclusion`
  ADD PRIMARY KEY (`incID`);

--
-- Indexes for table `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`logID`),
  ADD KEY `staffID` (`staffID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cabin`
--
ALTER TABLE `cabin`
  MODIFY `cabinID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cabininclusion`
--
ALTER TABLE `cabininclusion`
  MODIFY `cabinIncID` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
  MODIFY `logID` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cabininclusion`
--
ALTER TABLE `cabininclusion`
  ADD CONSTRAINT `cabininclusion_ibfk_1` FOREIGN KEY (`incID`) REFERENCES `inclusion` (`incID`),
  ADD CONSTRAINT `cabininclusion_ibfk_2` FOREIGN KEY (`cabinID`) REFERENCES `cabin` (`cabinID`);

--
-- Constraints for table `log`
--
ALTER TABLE `log`
  ADD CONSTRAINT `log_ibfk_1` FOREIGN KEY (`staffID`) REFERENCES `admin` (`staffID`);
COMMIT;
