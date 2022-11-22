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
-- Database: `senior_citizen_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `seniorcitizen_form`
--

CREATE TABLE `seniorcitizen_form` (
  `ID` int(11) NOT NULL,
  `barangay` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `middleName` varchar(255) NOT NULL,
  `birthDay` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `sex` varchar(255) NOT NULL,
  `civilStatus` varchar(255) NOT NULL,
  `scStatus` varchar(255) NOT NULL,
  `oscaIdNumber` int(11) NOT NULL,
  `dateIssued` varchar(255) NOT NULL,
  `remark` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seniorcitizen_form`
--

INSERT INTO `seniorcitizen_form` (`ID`, `barangay`, `lastName`, `firstName`, `middleName`, `birthDay`, `age`, `sex`, `civilStatus`, `scStatus`, `oscaIdNumber`, `dateIssued`, `remark`) VALUES
(1, 'Anas', 'De Santos', 'ewqewq', 'dsa', '02/04/2000', 22, 'Female', 'Single', 'Active', 3212, '10/28/2022', 'Indigent'),
(2, 'Agoho', 'Sales', 'Miguel', 'Diokno', '01/20/2001', 21, 'Male', 'Single', 'Active', 321321, '10/28/2022', 'Family Support'),
(3, 'Agoho', 'Cantre', 'Diego', 'Madrigal', '01/20/2001', 21, 'Male', 'Single', 'Active', 321321, '10/28/2022', 'Pension (SSS, GSIS)'),
(4, 'Anahawan', 'dsadsa', 'dsadsa', 'dsadas', '02/04/2000', 22, 'Male', 'Married', 'Active', 321321, '10/28/2022', 'Family Support'),
(5, 'Agoho', 'dsadsa', 'dsadsa', 'dsadsa', '02/04/2000', 22, 'Male', 'Married', 'Active', 321321, '10/28/2022', 'Property Income'),
(6, 'Agoho', 'dsadsa', 'dsadsadsadsa', 'dsadsadsa', '02/04/2000', 22, 'Male', 'Married', 'Active', 321321321, '10/28/2022', 'Social Pension'),
(7, 'Agoho', 'dsadsadsa', 'dsadsadsadsa', 'ewqewqeqw', '02/04/2000', 22, 'Male', 'Married', 'Active', 321321321, '10/28/2022', 'Property Income'),
(8, 'Agoho', 'dsad', 'dsa', 'dsa', '02/04/2000', 22, 'Male', 'Married', 'Active', 321, '10/28/2022', 'Social Pension'),
(9, 'Agoho', 'dsa', 'dsa', 'dsa', '02/04/2000', 22, 'Male', 'Married', 'Active', 321321, '10/28/2022', 'Social Pension'),
(12, 'Agoho', 'ewqewq', 'ewqewq', 'weweew', '01/11/2008', 14, 'Male', 'Married', 'Active', 321321321, '02/20/2000', 'Family Support'),
(13, 'Agoho', 'ewqewq', 'ewqeqw', 'ewqeqw', '01/02/2003', 19, 'Female', 'Married', 'Inactive', 321321, '02/02/2000', 'Family Support');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `seniorcitizen_form`
--
ALTER TABLE `seniorcitizen_form`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `seniorcitizen_form`
--
ALTER TABLE `seniorcitizen_form`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
