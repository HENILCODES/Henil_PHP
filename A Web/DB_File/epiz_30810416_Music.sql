-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql203.byetcluster.com
-- Generation Time: Jun 10, 2022 at 10:44 AM
-- Server version: 10.3.27-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epiz_30810416_Music`
--

-- --------------------------------------------------------

--
-- Table structure for table `audio_detail`
--

CREATE TABLE `audio_detail` (
  `AID` int(11) NOT NULL,
  `USER_NAME` text NOT NULL,
  `AUDIO_NAME` text NOT NULL,
  `AUDIO_FILE` text NOT NULL,
  `AUDIO_LANGUAGE` text NOT NULL,
  `UPLOAD_DATE` text NOT NULL,
  `UPLOAD_TIME` text NOT NULL,
  `TIME_STAMP` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `audio_detail`
--

INSERT INTO `audio_detail` (`AID`, `USER_NAME`, `AUDIO_NAME`, `AUDIO_FILE`, `AUDIO_LANGUAGE`, `UPLOAD_DATE`, `UPLOAD_TIME`, `TIME_STAMP`) VALUES
(1, 'Henil Code', 'Pushpa | Oo Bolega Ya', '1653727073Oo Bolega Ya.mp3', 'Hindi', '28-May-2022', '2:07 pm', '2022-05-28 08:36:35'),
(2, 'Henil Code', 'Money Heist | Bella Ciao', '1653727207bela_song.mp3', 'English', '28-May-2022', '2:10 pm', '2022-05-28 08:38:50'),
(3, 'Henil Code', 'Master the Blaster | Vijay Master', '1653729190Master the Blaster.mp3', 'Other', '28-May-2022', '2:43 pm', '2022-05-28 09:11:53'),
(4, 'Henil Code', 'Oo Desh Mere | Bhuj', '1653749669Desh Mere Bhuj.mp3', 'Hindi', '28-May-2022', '8:24 pm', '2022-05-28 14:53:11'),
(5, 'Henil Code', 'Saiyaan Saiyaan Re | Saaho', '1653750088Saiyaan saho.mp3', 'Hindi', '28-May-2022', '8:31 pm', '2022-05-28 15:00:10'),
(6, 'Henil', 'Background Song | Scam 1992', '1653798367scam.mp3', 'Other', '29-May-2022', '9:56 am', '2022-05-29 04:24:44'),
(7, 'Henil', 'Teri Mitti | Keshri', '1653822736Teri Mitti.mp3', 'Hindi', '29-May-2022', '4:42 pm', '2022-05-29 11:10:57');

-- --------------------------------------------------------

--
-- Table structure for table `user_detail`
--

CREATE TABLE `user_detail` (
  `UID` bigint(20) NOT NULL,
  `USER` text NOT NULL,
  `PASSWORD` text NOT NULL,
  `EMAIL` text NOT NULL,
  `TIME_STAMP` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_detail`
--

INSERT INTO `user_detail` (`UID`, `USER`, `PASSWORD`, `EMAIL`, `TIME_STAMP`) VALUES
(1, 'Henil', '@henil@1110', 'prajapatihenil1515@gmail.com', '2022-05-28 08:34:52'),
(2, 'Henil Code', '@1510@henil', 'henilcode@gmail.com', '2022-05-28 08:35:23'),
(3, 'Surya', 'Nisa@122', 'suryavnshishivam.000@gmail.com', '2022-05-28 10:35:01'),
(4, 'Sir_premji', '0981234567@prem', 'tprateek640@gmail.com', '2022-05-28 10:35:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `audio_detail`
--
ALTER TABLE `audio_detail`
  ADD PRIMARY KEY (`AID`);

--
-- Indexes for table `user_detail`
--
ALTER TABLE `user_detail`
  ADD PRIMARY KEY (`UID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `audio_detail`
--
ALTER TABLE `audio_detail`
  MODIFY `AID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user_detail`
--
ALTER TABLE `user_detail`
  MODIFY `UID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
