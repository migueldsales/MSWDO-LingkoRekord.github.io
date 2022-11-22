-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2022 at 07:22 PM
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
-- Database: `socialservices_db`
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
(1, '1', 'Agoho', 'Gabriel', 'John Harold', 'Verdad', '01/13/2001', '21 Years Old', 'Male', 'Single', 'No Grade Completed', 'Tricycle Driver', '2', 'Youth and Students', 'No', '-', '-', '-', '-', '-', '-', '11/04/2022', 'CIP');

-- --------------------------------------------------------

--
-- Table structure for table `kkc_kalipi_form`
--

CREATE TABLE `kkc_kalipi_form` (
  `ID` int(11) NOT NULL,
  `Barangay` varchar(255) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `FirstName` varchar(255) NOT NULL,
  `MiddleName` varchar(255) NOT NULL,
  `DateOfBirth` varchar(255) NOT NULL,
  `Age` varchar(255) NOT NULL,
  `Sex` varchar(255) NOT NULL,
  `CivilStatus` varchar(255) NOT NULL,
  `NumOfDependents` varchar(255) NOT NULL,
  `EducationalAttainment` varchar(255) NOT NULL,
  `Occupation` varchar(255) NOT NULL,
  `SkillInterest` varchar(255) NOT NULL,
  `WithID` varchar(255) NOT NULL,
  `SAPNational` varchar(255) NOT NULL,
  `SAPLGU` varchar(255) NOT NULL,
  `SLP` varchar(255) NOT NULL,
  `FourPS` varchar(255) NOT NULL,
  `kkcStatus` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `move_form`
--

CREATE TABLE `move_form` (
  `ID` int(11) NOT NULL,
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
  `SkillInterest` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `move_form`
--

INSERT INTO `move_form` (`ID`, `Barangay`, `LastName`, `FirstName`, `MiddleName`, `DateOfBirth`, `Age`, `Sex`, `CivilStatus`, `EducationalAttainment`, `Occupation`, `SkillInterest`) VALUES
(1, 'Anahawan', 'Gabriel', 'John Harold', 'Verdad', '01/13/2001', '21 Years Old', 'Male', 'Widowed', 'No Grade Completed', 'dsadsa', 'dsadsadas');

-- --------------------------------------------------------

--
-- Table structure for table `pwd_form`
--

CREATE TABLE `pwd_form` (
  `ID` int(11) NOT NULL,
  `Barangay` varchar(255) NOT NULL,
  `ID_Number` varchar(255) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `FirstName` varchar(255) NOT NULL,
  `MiddleName` varchar(255) NOT NULL,
  `DateOfBirth` varchar(255) NOT NULL,
  `Age` varchar(255) NOT NULL,
  `Sex` varchar(255) NOT NULL,
  `CivilStatus` varchar(255) NOT NULL,
  `TypeOfDisability` varchar(255) NOT NULL,
  `CauseOfDisability` varchar(255) NOT NULL,
  `pwdStatus` varchar(255) NOT NULL,
  `DateIssued` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pwd_form`
--

INSERT INTO `pwd_form` (`ID`, `Barangay`, `ID_Number`, `LastName`, `FirstName`, `MiddleName`, `DateOfBirth`, `Age`, `Sex`, `CivilStatus`, `TypeOfDisability`, `CauseOfDisability`, `pwdStatus`, `DateIssued`) VALUES
(1, 'Anahawan', '1', 'Gabriel', 'John Harold', 'Verdad', '01/13/2001', '21 Years Old', 'Male', 'Single', 'Visually Impaired', 'Katarata', 'Active', '11/05/2022'),
(3, 'Agoho', '2', 'dsaasd', 'dsa', 'dsa', '01/20/2001', '21 Years Old', 'Male', 'Single', 'Attention Deficit Disorder', 'dsadas', 'Active', '01/20/2022');

-- --------------------------------------------------------

--
-- Table structure for table `pya_form`
--

CREATE TABLE `pya_form` (
  `ID` int(11) NOT NULL,
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
  `SkillInterest` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pya_form`
--

INSERT INTO `pya_form` (`ID`, `Barangay`, `LastName`, `FirstName`, `MiddleName`, `DateOfBirth`, `Age`, `Sex`, `CivilStatus`, `EducationalAttainment`, `Occupation`, `SkillInterest`) VALUES
(1, 'Anahawan', 'Gabriel', 'John Harold', 'Verdad', '01/13/2001', '21 Years Old', 'Male', 'Single', 'College Undergraduate', 'dsa', 'dsa');

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
  `age` varchar(255) NOT NULL,
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
(1, 'Agoho', 'Gabriel', 'John Harold', 'Verdad', '01/13/2001', '21 years old', 'Male', 'Single', 'Active', 123123, '11/04/2022', 'Indigent');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `indigent_form`
--
ALTER TABLE `indigent_form`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `kkc_kalipi_form`
--
ALTER TABLE `kkc_kalipi_form`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `move_form`
--
ALTER TABLE `move_form`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `pwd_form`
--
ALTER TABLE `pwd_form`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `pya_form`
--
ALTER TABLE `pya_form`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `seniorcitizen_form`
--
ALTER TABLE `seniorcitizen_form`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `indigent_form`
--
ALTER TABLE `indigent_form`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kkc_kalipi_form`
--
ALTER TABLE `kkc_kalipi_form`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `move_form`
--
ALTER TABLE `move_form`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pwd_form`
--
ALTER TABLE `pwd_form`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pya_form`
--
ALTER TABLE `pya_form`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `seniorcitizen_form`
--
ALTER TABLE `seniorcitizen_form`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
