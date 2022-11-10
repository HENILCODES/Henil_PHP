-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2022 at 05:22 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Name` text NOT NULL,
  `Password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Name`, `Password`) VALUES
('Henil', '@1510@henil');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `ID` bigint(20) NOT NULL,
  `User_Name` text NOT NULL,
  `Message` longblob NOT NULL DEFAULT '\'null\'',
  `file` varchar(500) NOT NULL,
  `Time_Stamps` text NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`ID`, `User_Name`, `Message`, `file`, `Time_Stamps`) VALUES
(1, 'Henil', 0x6869, '', '07:26 am'),
(2, 'Henil', 0x6865690d0a736b6a660d0a66670d0a66646c6b68670d0a0d0a, '', '07:30 am'),
(3, 'Henil', 0x68692065656a6820686920736620646b7368207368206b6820666a20766864666868686466682068642066682064666a68206b6a6664206b686a64662068206b646a2066676b6a64206b66686a686466206768646b66682064666b6820676864666a0d0a, '', '07:33 am'),
(4, 'Henil', 0x640d0a730d0a730d0a730d0a730d0a730d0a730d0a730d0a0d0a0d0a0d0a0d0a, '', '07:35 am'),
(5, 'Henil', 0x660d0a660d0a0d0a0d0a0d0a0d0a0d0a0d0a66, '', '07:35 am'),
(6, 'Henil', '', '', '07:35 am'),
(7, 'Henil', '', '', '07:37 am'),
(8, 'Henil', '', 'Photo_Uplod.jpg', '07:37 am'),
(9, 'Henil', 0x686520730d0a660d0a640d0a670d0a640d0a6664662064660d0a67, '', '07:38 am'),
(10, 'Henil', 0x48656e696c20452067666820646820642020627364200d0a, '', '07:38 am');

-- --------------------------------------------------------

--
-- Table structure for table `temp_user_detail`
--

CREATE TABLE `temp_user_detail` (
  `U_Id` int(11) NOT NULL,
  `U_Name` text NOT NULL,
  `U_Password` text NOT NULL,
  `U_Email` text NOT NULL,
  `Time_Stamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_detail`
--

CREATE TABLE `user_detail` (
  `U_Id` int(11) NOT NULL,
  `U_Name` text NOT NULL,
  `U_Password` text NOT NULL,
  `U_Email` text NOT NULL,
  `Time_Stamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_detail`
--

INSERT INTO `user_detail` (`U_Id`, `U_Name`, `U_Password`, `U_Email`, `Time_Stamp`) VALUES
(1, 'Henil', '123', 'prajapati@gmail.com', '2022-05-16 14:58:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `temp_user_detail`
--
ALTER TABLE `temp_user_detail`
  ADD PRIMARY KEY (`U_Id`);

--
-- Indexes for table `user_detail`
--
ALTER TABLE `user_detail`
  ADD UNIQUE KEY `U_Id` (`U_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `temp_user_detail`
--
ALTER TABLE `temp_user_detail`
  MODIFY `U_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_detail`
--
ALTER TABLE `user_detail`
  MODIFY `U_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
