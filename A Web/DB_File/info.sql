-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql307.byetcluster.com
-- Generation Time: Jan 10, 2022 at 05:33 AM
-- Server version: 5.7.36-39
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
-- Database: `epiz_30222320_call`
--

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `Last name` varchar(20) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Middle name` varchar(20) NOT NULL,
  `Contact` bigint(12) DEFAULT NULL,
  `DoB` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`Last name`, `Name`, `Middle name`, `Contact`, `DoB`) VALUES
('Prajapati', 'Henil', 'vinodbhai', 9081807209, '2003-02-15'),
('Prajapati', 'Vinod', 'Shambhubhai', 7621963435, '1974-01-10'),
('Prajapati', 'Roshni', 'VINODBHAI', 7359891774, '1998-07-04'),
('Prajapati', 'Meenaben', 'Vinodbhai', 9687398018, '1970-12-11'),
('Prajapati', 'Vinod', 'Shambhubhai', 9979628978, '1974-01-10'),
('pipaliya', 'Raj', 'shantibhai', 9574422598, '2003-06-11'),
('Dubey', 'Prashant', 'Kumar', 8980725901, '2002-07-10'),
('Patil', 'Harshal', 'Ganesh', 7767951442, '2002-09-03'),
('ji', 'prem', 'ji', 7487064939, '2003-02-10'),
('Kahar', 'Dixita', 'Nileshbhai', 9327387698, '2003-08-15'),
('Trr', 'Df', 'Ffd', 1335567789, '2021-12-20'),
('kahar', 'dixita', 'nileshbhai', 9327387698, '2003-08-15');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
