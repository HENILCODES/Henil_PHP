-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql203.byetcluster.com
-- Generation Time: Jun 10, 2022 at 10:46 AM
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
-- Database: `epiz_30810416_User_Detail`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_table`
--

CREATE TABLE `user_table` (
  `UID` int(11) NOT NULL,
  `UNAME` text NOT NULL,
  `UPASSWORD` text NOT NULL,
  `UEMAIL` text NOT NULL,
  `STATUS` text NOT NULL DEFAULT 'PENDING',
  `TIMESTAMP` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_table`
--

INSERT INTO `user_table` (`UID`, `UNAME`, `UPASSWORD`, `UEMAIL`, `STATUS`, `TIMESTAMP`) VALUES
(1, 'henil code', '@1510@henil', 'henilcode@gmail.com', 'VERIFIED', '2022-06-08 13:31:32'),
(2, 'surya', 'Nisa@122', 'suryavnshishivam.000@gmail.com', 'VERIFIED', '2022-05-17 02:30:48'),
(3, 'sir_premji', '0981234567@prem', 'tprateek640@gmail.com', 'VERIFIED', '2022-05-18 05:24:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_table`
--
ALTER TABLE `user_table`
  ADD PRIMARY KEY (`UID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_table`
--
ALTER TABLE `user_table`
  MODIFY `UID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
