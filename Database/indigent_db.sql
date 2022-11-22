-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 01, 2022 at 06:22 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `indigent_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `indigent_form`
--

CREATE TABLE `indigent_form` (
  `ID` int(11) NOT NULL,
  `SWD_ID` varchar(255) NOT NULL,
  `Barangay` varchar(255) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `FirstName` varchar(255) NOT NULL,
  `MiddleName` varchar(255) NOT NULL,
  `DateOfBirth` varchar(255) NOT NULL,
  `Age` varchar(255) NOT NULL,
  `Sex` varchar(255) NOT NULL,
  `CivilStatus` varchar(255) NOT NULL,
  `EducationalAttainment` varchar(255) NOT NULL,
  `Occupation` varchar(255) NOT NULL,
  `NumOfDependents` varchar(255) NOT NULL,
  `MemberOfSecGroup` varchar(255) NOT NULL,
  `SapRecipient` varchar(255) NOT NULL,
  `Aics1Amount` varchar(255) NOT NULL,
  `Aics1Date` varchar(255) NOT NULL,
  `Aics2Amount` varchar(255) NOT NULL,
  `Aics2Date` varchar(255) NOT NULL,
  `Aics3Amount` varchar(255) NOT NULL,
  `Aics3Date` varchar(255) NOT NULL,
  `DateGiven` varchar(255) NOT NULL,
  `TypeOfServiceRendered` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `indigent_form`
--

INSERT INTO `indigent_form` (`ID`, `SWD_ID`, `Barangay`, `LastName`, `FirstName`, `MiddleName`, `DateOfBirth`, `Age`, `Sex`, `CivilStatus`, `EducationalAttainment`, `Occupation`, `NumOfDependents`, `MemberOfSecGroup`, `SapRecipient`, `Aics1Amount`, `Aics1Date`, `Aics2Amount`, `Aics2Date`, `Aics3Amount`, `Aics3Date`, `DateGiven`, `TypeOfServiceRendered`) VALUES
(2, '1', 'Agoho', 'qwe', 'qwe', 'qwe', '01/13/2001', '21 Years Old', 'Male', 'Single', 'No Grade Completed', 'qweqwe', '2', 'Children', 'No', '-', '-', '-', '-', '-', '-', '10/20/2022', 'CIP'),
(3, '2', 'Anahawan', 'qwe', 'qwe', 'ewq', '01/20/2000', '22 Years Old', 'Male', 'Single', 'No Grade Completed', 'ewqewq', '2', 'Artisanal Fisherfolks', 'Yes', '-', '-', '-', '-', '-', '-', '10/20/2022', 'CIP'),
(4, '3', 'Agoho', 'qqqq', 'qqq', 'qqqq', '01/20/2003', '19 Years Old', 'Male', 'Married', 'No Grade Completed', 'qwewq', '3', 'Children', 'Yes', '-', '-', '-', '-', '-', '-', '-', 'CIP');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `indigent_form`
--
ALTER TABLE `indigent_form`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `indigent_form`
--
ALTER TABLE `indigent_form`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
