-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 10, 2023 at 08:09 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `enjay`
--
CREATE DATABASE IF NOT EXISTS `enjay` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `enjay`;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `names` text NOT NULL,
  `passwords` text NOT NULL,
  `emails` text NOT NULL,
  `contacts` bigint(20) NOT NULL,
  `sems` int(11) NOT NULL,
  `hobbys` text NOT NULL,
  `genders` text NOT NULL,
  `fav_colors` text NOT NULL,
  `intrests` int(11) NOT NULL,
  `dobs` date NOT NULL,
  `websites` text NOT NULL,
  `photos` text NOT NULL,
  `time_stamps` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `names`, `passwords`, `emails`, `contacts`, `sems`, `hobbys`, `genders`, `fav_colors`, `intrests`, `dobs`, `websites`, `photos`, `time_stamps`) VALUES
(39, 'raj', 'jhghjasd5d4f', 'henilcode@gmail.com', 8888888888, 2, 'Programming , Cricket , Football', 'Other', '#ad33ff', 39, '2023-01-25', 'https://google.com', 'Screenshot from 2022-11-25 14-09-39.png', '2022-12-29 03:14:44'),
(40, 'aman', 'maas546', 'prajapatihenil@gmail.com', 908180280, 6, 'Programming , Cricket , other', 'Male', '#227c72', 25, '2023-01-19', 'https://henil.rf.gd/Web_Chat', 'dog.jpg', '2022-12-29 03:27:17');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `password` text NOT NULL,
  `email` text NOT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `email`, `time_stamp`) VALUES
(1, 'Henil', '565', 'prajapatihenil1102@gmail.com', '2022-12-28 10:29:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Database: `flaskdb`
--
CREATE DATABASE IF NOT EXISTS `flaskdb` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `flaskdb`;

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `ID` bigint(20) NOT NULL,
  `SENDER` text NOT NULL,
  `MESSAGE` text NOT NULL DEFAULT ' ',
  `FILE` text NOT NULL,
  `T_FILE` text NOT NULL,
  `DATETIME` text NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`ID`, `SENDER`, `MESSAGE`, `FILE`, `T_FILE`, `DATETIME`) VALUES
(32, 'henil', 'hi', '', '', '2022-10-02 10:54:16'),
(33, 'heni', 's', '', '', '2022-10-02 11:24:59'),
(34, 'heni', 'j', '', '', '2022-10-02 11:25:55'),
(35, 'henil', 'msn', '', '', '2022-10-02 11:30:19'),
(36, 'henil', 's', '', '', '2022-10-02 11:30:22'),
(37, 'henil', 's', '', '', '2022-10-02 11:30:23'),
(38, 'henil', 's', '', '', '2022-10-02 11:34:00'),
(39, 'henil', 'n', '', '', '2022-10-02 12:25:09'),
(40, 'henil', 'd', '', '', '2022-10-03 13:30:06'),
(41, 'Henil', 'S', 'test.mdb', 'test.mdb', '2022-10-03 14:54:24'),
(42, 'Henil', 'S', 'test.mdb', 'test.mdb', '2022-10-03 14:55:01'),
(43, 'Henil', 'gd', '', '', '2022-10-03 15:15:19'),
(44, 'Henil', '.', '.gitignore', '.gitignore', '2022-10-03 15:16:06'),
(45, 'Henil', '.', '.gitignore', '.gitignore', '2022-10-03 15:16:36'),
(46, 'Henil', 'g', '', '', '2022-10-03 15:17:21'),
(47, 'Henil', ' ', 'html.html', 'html.html', '2022-10-03 15:17:30');

-- --------------------------------------------------------

--
-- Table structure for table `user_detail`
--

CREATE TABLE `user_detail` (
  `ID` bigint(20) NOT NULL,
  `USER_NAME` text NOT NULL,
  `USER_EMAIL` text NOT NULL,
  `USER_PASSWORD` text NOT NULL,
  `TIME_STAMP` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_detail`
--

INSERT INTO `user_detail` (`ID`, `USER_NAME`, `USER_EMAIL`, `USER_PASSWORD`, `TIME_STAMP`) VALUES
(1, 'Henil', 'he@hs', '123', '2022-10-01 23:42:03'),
(2, 'Henil1', 'he@hs', '123', '2022-10-01 23:43:07'),
(3, 'hari', 'hari@dk', '123', '2022-10-02 02:58:31'),
(4, 'heni', 'jsh@ejh', '5', '2022-10-02 05:53:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user_detail`
--
ALTER TABLE `user_detail`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `name` (`USER_NAME`) USING HASH;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `user_detail`
--
ALTER TABLE `user_detail`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Database: `music`
--
CREATE DATABASE IF NOT EXISTS `music` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `music`;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
(7, 'Henil', 'Teri Mitti | Keshri', '1653822736Teri Mitti.mp3', 'Hindi', '29-May-2022', '4:42 pm', '2022-05-29 11:10:57'),
(8, 'Henil', 'jgjkkg', '1666319852Naacho Naacho.mp3', 'Other', '21-Oct-2022', '8:07 am', '2022-10-21 02:37:32'),
(9, 'Henil', 'jhjkjhkjkj', '1666320426Naacho Naacho.mp3', 'Other', '21-Oct-2022', '8:17 am', '2022-10-21 02:47:06'),
(10, '', 'mkhk', '1666320713Naacho Naacho.mp3', 'Other', '21-Oct-2022', '8:21 am', '2022-10-21 02:51:53'),
(11, '', 'jhjh', '1666320780Naacho Naacho.mp3', 'Other', '21-Oct-2022', '8:23 am', '2022-10-21 02:53:00'),
(12, 'h', 'mkjxk', '1666325454Naacho Naacho.mp3', 'Other', '21-Oct-2022', '9:40 am', '2022-10-21 04:10:54');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_detail`
--

INSERT INTO `user_detail` (`UID`, `USER`, `PASSWORD`, `EMAIL`, `TIME_STAMP`) VALUES
(1, 'Henil', '@henil@1110', 'prajapatihenil1515@gmail.com', '2022-05-28 08:34:52'),
(2, 'Henil Code', '@1510@henil', 'henilcode@gmail.com', '2022-05-28 08:35:23'),
(3, 'Surya', 'Nisa@122', 'suryavnshishivam.000@gmail.com', '2022-05-28 10:35:01'),
(4, 'Sir_premji', '0981234567@prem', 'tprateek640@gmail.com', '2022-05-28 10:35:58'),
(5, 'h', '12', 'he@he', '2022-10-21 02:32:41'),
(6, 'j', '12', 'h@he', '2022-10-21 02:52:43');

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
  MODIFY `AID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user_detail`
--
ALTER TABLE `user_detail`
  MODIFY `UID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Database: `project`
--
CREATE DATABASE IF NOT EXISTS `project` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `project`;

-- --------------------------------------------------------

--
-- Table structure for table `musics`
--

CREATE TABLE `musics` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `language` text NOT NULL,
  `ti` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_music`
--

CREATE TABLE `user_music` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `music_id` int(11) NOT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `musics`
--
ALTER TABLE `musics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_music`
--
ALTER TABLE `user_music`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `music_id` (`music_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `musics`
--
ALTER TABLE `musics`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_music`
--
ALTER TABLE `user_music`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Database: `store`
--
CREATE DATABASE IF NOT EXISTS `store` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `store`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `password`) VALUES
(3, 'Henil', '123'),
(8, 'Kevin', 'kevin@123');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `email`, `password`) VALUES
(21, 'Kevin', 'kevin@gmail.com', 'kevin@gmail12'),
(25, 'pratiksha', 'pratiksha@gmail.com', 'pratiksha12'),
(31, 'henil', 'henilcode@gmail.com', '123'),
(32, 'Kelash', 'kelash@gmail.com', '12');

-- --------------------------------------------------------

--
-- Table structure for table `customer_products`
--

CREATE TABLE `customer_products` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer_products`
--

INSERT INTO `customer_products` (`id`, `customer_id`, `quantity`, `product_id`) VALUES
(132, 31, 5, 144),
(133, 31, 1, 132),
(134, 31, 1, 145),
(135, 31, 1, 136),
(136, 21, 5, 144),
(137, 25, 5, 144),
(138, 25, 1, 132),
(139, 32, 1, 133),
(140, 32, 1, 130),
(141, 21, 3, 142),
(142, 21, 4, 133);

-- --------------------------------------------------------

--
-- Table structure for table `document`
--

CREATE TABLE `document` (
  `id` int(11) NOT NULL,
  `number` text NOT NULL,
  `name` text NOT NULL,
  `customers_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `document`
--

INSERT INTO `document` (`id`, `number`, `name`, `customers_id`) VALUES
(33, '54545', 'Adhar Card', 31),
(35, 'UPC4264564', 'Voter Card', 25),
(36, '65656254546', 'Adhar Card', 32),
(37, 'UPC95614', 'Voter Card', 21);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `price` bigint(20) NOT NULL,
  `photo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `photo`) VALUES
(130, 'Smart Watch', 2590, '61y2VVWcGBL._SX522_.jpg'),
(131, 'Pendrive', 350, '61DjwgS4cbL._SX522_.jpg'),
(132, 'Gaming Mouce', 1000, '61CqLgubwoL._SX522_.jpg'),
(133, 'Apple Laptop ', 50000, 'lap.jpeg'),
(136, 'Multimedia Speaker with Aux Connectivity', 1090, '71L94y9-hKL._SL1500_.jpg'),
(138, 'bluetooth earbuds', 2500, '51HBom8xz7L._SX522_.jpg'),
(142, 'Medellin 38\" Acoustic Guitar', 5500, '71RkY055j7L._SX522_.jpg'),
(143, 'Alexa Speaker Smart Device', 3500, '61EXU8BuGZL._SX679_.jpg'),
(144, 'OnePlus Nord CE 2 Lite 5G 128 GB', 35000, '61ahn9N38zL._SL1500_.jpg'),
(145, 'USB Adapter', 500, '31XN0gWgsrL._SL1080_.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `product_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `name`, `product_id`, `customer_id`) VALUES
(134, 'Nice', 132, 31),
(135, 'Hi', 130, 31),
(138, 'Nic', 136, 31),
(139, 'ss', 136, 31),
(140, 'Hi', 130, 31),
(141, 'Nice', 144, 21),
(142, 'Buy this', 133, 21),
(143, 'Super', 132, 25),
(144, 'Wow', 145, 25),
(145, 'Si', 138, 25),
(146, 'Hm', 144, 25),
(147, 'Wow', 133, 25),
(148, 'K', 144, 32),
(149, 'Face', 133, 32),
(150, 'not by', 133, 32),
(151, 'Wow', 130, 32),
(152, 'Nice', 133, 31),
(153, 'nice', 144, 31),
(154, 'Nice', 142, 21);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_products`
--
ALTER TABLE `customer_products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`customer_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `document`
--
ALTER TABLE `document`
  ADD PRIMARY KEY (`id`),
  ADD KEY `adhar_id` (`customers_id`) USING BTREE;

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `customer_products`
--
ALTER TABLE `customer_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=143;

--
-- AUTO_INCREMENT for table `document`
--
ALTER TABLE `document`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=146;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=155;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `customer_products`
--
ALTER TABLE `customer_products`
  ADD CONSTRAINT `customer_products_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`),
  ADD CONSTRAINT `customer_products_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Constraints for table `document`
--
ALTER TABLE `document`
  ADD CONSTRAINT `document_ibfk_1` FOREIGN KEY (`customers_id`) REFERENCES `customers` (`id`);

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`),
  ADD CONSTRAINT `reviews_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);
--
-- Database: `temp`
--
CREATE DATABASE IF NOT EXISTS `temp` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `temp`;

-- --------------------------------------------------------

--
-- Table structure for table `temp`
--

CREATE TABLE `temp` (
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
--
-- Database: `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `test`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Name` text NOT NULL,
  `Password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Name`, `Password`) VALUES
('Henil', '@1510@henil'),
('Raj', '123456'),
('Shivam', '526599');

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

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
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `SPID` int(11) NOT NULL,
  `SNAME` varchar(15) NOT NULL,
  `DOB` date NOT NULL,
  `CITY` varchar(10) NOT NULL,
  `EMAIL` text NOT NULL,
  `CONTACT` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`SPID`, `SNAME`, `DOB`, `CITY`, `EMAIL`, `CONTACT`) VALUES
(1, 'henil prajapati', '2003-12-12', 'Vapi', 'prajapatihenil1102@gmail.com', 98558885),
(2, 'jay', '2022-12-17', 'valsad', 'prajapatihenil1102@gmail.com', 666666),
(3, 'henil prajapati', '2003-12-14', 'Vapi', 'prajapatihenil1102@gmail.com', 9999999999);

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

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
-- Database: `web_chat`
--
CREATE DATABASE IF NOT EXISTS `web_chat` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `web_chat`;

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `ID` bigint(20) NOT NULL,
  `User_Name` text NOT NULL,
  `Message` text NOT NULL DEFAULT 'NL',
  `file` varchar(500) NOT NULL,
  `File_Name` text NOT NULL,
  `Time_Stamps` text NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`ID`, `User_Name`, `Message`, `file`, `File_Name`, `Time_Stamps`) VALUES
(71, 'henil', 'anA=', '1669285344-', '', '24-Nov-2022 3:52 pm'),
(72, 'henil', 'aGk=', '1669285365-', '', '24-Nov-2022 3:52 pm'),
(73, 'henil', 'cw==', '1669974003-', '', '02-Dec-2022 3:10 pm'),
(74, 'henil', '', '1669974016-Screenshot from 2022-11-04 08-42-24.png', 'Screenshot from 2022-11-04 08-42-24.png', '02-Dec-2022 3:10 pm');

-- --------------------------------------------------------

--
-- Table structure for table `user_table`
--

CREATE TABLE `user_table` (
  `ID` bigint(20) NOT NULL,
  `UNAME` text NOT NULL,
  `UPASSWORD` text NOT NULL,
  `UEMAIL` text NOT NULL,
  `STATUS` text NOT NULL DEFAULT 'PENDING',
  `time_stamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_table`
--

INSERT INTO `user_table` (`ID`, `UNAME`, `UPASSWORD`, `UEMAIL`, `STATUS`, `time_stamp`) VALUES
(1, 'henil', '123', 'henil@heem.e', 'VERIFIED', '2022-10-21 02:22:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user_table`
--
ALTER TABLE `user_table`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `user_table`
--
ALTER TABLE `user_table`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
