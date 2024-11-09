-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2024 at 02:11 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `login` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`login`, `password`) VALUES
('admin', '0000');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `message` varchar(5000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `phone`, `message`) VALUES
(14, 'mr', 'mrmohamedtriki@gmail.com', '27813439', 'hello me');

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `id` int(11) NOT NULL,
  `report_text` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`id`, `report_text`) VALUES
(32, 'i am foull'),
(33, 'i have no life i am idiot'),
(35, 'i haveidjoiqvjlmidjfv'),
(36, 'jhbiuhiu'),
(37, 'hellodddddddddddd'),
(38, 'i have issue in pc'),
(39, 'eprogjpoqsrjgbl');

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `room_name` varchar(30) NOT NULL,
  `message` varchar(3000) NOT NULL,
  `etat` int(11) NOT NULL DEFAULT 0 COMMENT '0: en attente, 1: validée, 2: terminée',
  `checkInDate` date DEFAULT NULL,
  `checkOutDate` date DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `requests`
--

INSERT INTO `requests` (`id`, `name`, `email`, `phone`, `room_name`, `message`, `etat`, `checkInDate`, `checkOutDate`, `price`) VALUES
(18, 'Mohamed', 'mrmohamedtriki@gmail.com', '27813439', 'Celebrety Room', 'ekhflkdsf', 0, '2024-05-01', '2024-05-04', 1800.00),
(19, 'Mohamed', 'mrmohamedtriki@gmail.com', '27813439', 'Celebrety Room', 'ekhflkdsf', 0, '2024-05-01', '2024-05-04', 2250.00),
(20, 'Mohamed', 'mrmohamedtriki@gmail.com', '27813439', 'Celebrety Room', 'ekhflkdsf', 0, '2024-05-01', '2024-05-04', 2250.00),
(21, 'fathi', 'fathi@gmail.om', '27813439', 'Deluxe Room', 'tbh i love this hotel so much', 0, '2024-05-03', '2024-05-24', 13650.00),
(22, 'monji ', 'mrmohamedtriki@gmail.com', '27813439', 'Deluxe Room', 'jhvjh', 0, '2024-05-02', '2024-05-20', 11700.00),
(23, 'monji ', 'mrmohamedtriki@gmail.com', '27813439', 'Deluxe Room', 'jhvjh', 0, '2024-05-02', '2024-05-20', 11700.00),
(24, 'fathiya', 'mrmohamedtriki@gmail.com', '27813439', 'Normal Room', 'ena mhoahmed', 0, '2024-05-25', '2024-05-31', 2100.00),
(25, 'monji ', 'mrmohamedtriki@gmail.com', '27813439', 'AC Super Room', 'fdfd', 0, '2024-05-01', '2024-05-04', 1650.00),
(26, 'bilel', 'mrmohamedtriki@gmail.com', '27813439', 'Deluxe Room', 'hhhh', 0, '2024-05-10', '2024-05-02', 5200.00),
(27, 'Mohamedbenmorad', 'mrmohamedtriki@gmail.com', '27813439', 'Normal Room', 'howa isir meno !!', 0, '2024-05-10', '2024-05-07', 1050.00),
(28, '', '', '', 'no', '', 0, '2024-05-02', '2024-05-02', 0.00),
(29, 'mr', 'mrmohamedtriki@gmail.com', '27813439', 'Deluxe Room', 'hello', 1, '2024-05-02', '2024-05-04', 1300.00),
(30, 'madame', 'mrmohamedtriki@gmail.com', '27813439', 'Deluxe Room', 'hello', 1, '2024-05-09', '2024-05-10', 650.00),
(31, 'hliwi', 'bessemhliwi@gmail.com', '23119666', 'Celebrety Room', 'hliwi rahoo m3alem', 0, '2024-02-21', '2024-07-23', 91800.00),
(32, 'hliwi', 'mrmohamedtriki@gmail.com', '27813439', 'Celebrety Room', 'hdfhdsk', 0, '2024-01-03', '2024-07-25', 122400.00),
(33, 'kkk', 'mrmohamedtriki@gmail.com', '27813439', 'Celebrety Room', 'ddd', 0, '2024-05-14', '2024-05-30', 12000.00),
(34, 'kkk', 'mrmohamedtriki@gmail.com', '27813439', 'Celebrety Room', 'ddd', 0, '2024-05-14', '2024-05-30', 12000.00),
(35, 'hliwi', 'mrmohamedtriki@gmail.com', '27813439', 'Deluxe Room', 'd', 1, '2024-05-03', '2024-05-10', 4550.00),
(36, 'madamee', 'mrmohamedtriki@gmail.com', '27813439', 'Deluxe Room', 'hello', 1, '2024-05-02', '2024-05-10', 5200.00),
(37, 'jessem', 'mrmohamedtriki@gmail.com', '27813439', 'AC Normal Room', 'jgjqrdkflmgjlmrksd', 2, '2024-05-10', '2024-05-31', 9450.00);

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` int(10) NOT NULL,
  `title` varchar(200) NOT NULL,
  `description` varchar(50000) NOT NULL,
  `size` varchar(10) NOT NULL,
  `price` varchar(10) NOT NULL,
  `image1` varchar(20) NOT NULL,
  `image2` varchar(20) NOT NULL,
  `image3` varchar(20) NOT NULL,
  `image4` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `title`, `description`, `size`, `price`, `image1`, `image2`, `image3`, `image4`) VALUES
(3, 'AC Super Room', 'Guests enjoy our exclusive complimentary offerings that include Tea & Sherry Social Hour daily at 4pm in the lobby, the Mountain Sunrise hot breakfast buffet, wi-fi, outdoor year round heated swimming pool and FREE on-site parking.\r\n<br><br>\r\nTo insure a comfortable stay, guest amenities include:<br>\r\n1. Fireplaces (select Superior, Deluxe and Mini-Suite rooms only)<br>\r\n2. Mini Bar (Deluxe and Mini-suites only)<br>\r\n3. In-room Safes<br>\r\n4. High speed wireless Internet access<br>\r\n5. Robes<br>\r\n6. Mini Refrigerator<br>\r\n7. Room Service<br>\r\n8. Coffee Maker<br>\r\n9. Hairdryer<br>\r\n10. Ironing Accessories<br>\r\n11. Turn Down (upon request)', '46', '400', 'H9.jpg', 'H10.jpg', 'H11.jpg', 'H12.jpg'),
(4, 'AC Normal Room', 'Guests enjoy our exclusive complimentary offerings that include Tea & Sherry Social Hour daily at 4pm in the lobby, the Mountain Sunrise hot breakfast buffet, wi-fi, outdoor year round heated swimming pool and FREE on-site parking.\r\n<br><br>\r\nTo insure a comfortable stay, guest amenities include:<br>\r\n1. Fireplaces (select Superior, Deluxe and Mini-Suite rooms only)<br>\r\n2. Mini Bar (Deluxe and Mini-suites only)<br>\r\n3. In-room Safes<br>\r\n4. High speed wireless Internet access<br>\r\n5. Robes<br>\r\n6. Mini Refrigerator<br>\r\n7. Room Service<br>\r\n8. Coffee Maker<br>\r\n9. Hairdryer<br>\r\n10. Ironing Accessories<br>\r\n11. Turn Down (upon request)', '42', '300', 'H13.jpg', 'H14.jpg', 'H15.jpg', 'H16.jpg'),
(5, 'Celebrety Room', 'Guests enjoy our exclusive complimentary offerings that include Tea & Sherry Social Hour daily at 4pm in the lobby, the Mountain Sunrise hot breakfast buffet, wi-fi, outdoor year round heated swimming pool and FREE on-site parking.\r\n<br><br>\r\nTo insure a comfortable stay, guest amenities include:<br>\r\n1. Fireplaces (select Superior, Deluxe and Mini-Suite rooms only)<br>\r\n2. Mini Bar (Deluxe and Mini-suites only)<br>\r\n3. In-room Safes<br>\r\n4. High speed wireless Internet access<br>\r\n5. Robes<br>\r\n6. Mini Refrigerator<br>\r\n7. Room Service<br>\r\n8. Coffee Maker<br>\r\n9. Hairdryer<br>\r\n10. Ironing Accessories<br>\r\n11. Turn Down (upon request)', '44', '600', '2.jpg', '2.jpg', '3.jpg', '4.jpg'),
(6, ' Normal Room', 'Guests enjoy our exclusive complimentary offerings that include Tea & Sherry Social Hour daily at 4pm in the lobby, the Mountain Sunrise hot breakfast buffet, wi-fi, outdoor year round heated swimming pool and FREE on-site parking.\r\n<br><br>\r\nTo insure a comfortable stay, guest amenities include:<br>\r\n1. Fireplaces (select Superior, Deluxe and Mini-Suite rooms only)<br>\r\n2. Mini Bar (Deluxe and Mini-suites only)<br>\r\n3. In-room Safes<br>\r\n4. High speed wireless Internet access<br>\r\n5. Robes<br>\r\n6. Mini Refrigerator<br>\r\n7. Room Service<br>\r\n8. Coffee Maker<br>\r\n9. Hairdryer<br>\r\n10. Ironing Accessories<br>\r\n11. Turn Down (upon request)', '39', '200', '7.jpg', '8.jpg', '9.jpg', '10.jpg'),
(7, 'testi', 'dflkqdskjflkqsdf', '100', '333', '7.jpg', '8.jpg', '9.jpg', '5.jpg'),
(8, 'testiaaaaaaaaaaaa', 'dflkqdskjflkqsdfaaaaaaaaaaaa', '100', '333', '8.jpg', '9.jpg', '10.jpg', '5.jpg'),
(9, 'helloooooo', 'heloloooo', '206', '200', '7.jpg', '8.jpg', '9.jpg', '4.jpg'),
(10, 'uzehtoiehotg', 'zotaijheriog', '15', '54', '2.jpg', '8.jpg', '10.jpg', '5.jpg'),
(11, 'sdfjknklsef', 'kdjfnksjdf', '1', '110', '3.jpg', '9.jpg', '9.jpg', '10.jpg'),
(12, 'Deluxe Roomsuper', 'Guests enjoy our exclusive complimentary offerings that include Tea & Sherry Social Hour daily at 4pm in the lobby, the Mountain Sunrise hot breakfast buffet, wi-fi, outdoor year round heated swimming pool and FREE on-site parking.\r\n<br><br>\r\nTo insure a comfortable stay, guest amenities include:<br>\r\n1. Fireplaces (select Superior, Deluxe and Mini-Suite rooms only)<br>\r\n2. Mini Bar (Deluxe and Mini-suites only)<br>\r\n3. In-room Safes<br>\r\n4. High speed wireless Internet access<br>\r\n5. Robes<br>\r\n6. Mini Refrigerator<br>\r\n7. Room Service<br>\r\n8. Coffee Maker<br>\r\n9. Hairdryer<br>\r\n10. Ironing Accessories<br>\r\n11. Turn Down (upon request)', '44', '1000', '3.jpg', '4.jpg', '9.jpg', '10.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `saison`
--

CREATE TABLE `saison` (
  `id_sai` int(11) NOT NULL,
  `libelle_sai` varchar(20) DEFAULT NULL,
  `dat_deb_sai` date DEFAULT NULL,
  `dat_fin_sai` date DEFAULT NULL,
  `prix` decimal(10,2) DEFAULT 0.00
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `saison`
--

INSERT INTO `saison` (`id_sai`, `libelle_sai`, `dat_deb_sai`, `dat_fin_sai`, `prix`) VALUES
(5, 'Printemps', '2024-03-21', '2024-06-20', 150.00),
(6, 'Été', '2024-06-21', '2024-09-22', 200.00),
(7, 'Automne', '2024-09-23', '2024-12-20', 120.00),
(8, 'Hiver', '2024-12-21', '2025-03-20', 100.00);

-- --------------------------------------------------------

--
-- Table structure for table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `login` varchar(20) NOT NULL,
  `password` varchar(2000) NOT NULL,
  `cin` int(8) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `date_naiss` date NOT NULL,
  `email` varchar(50) NOT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `utilisateur`
--

INSERT INTO `utilisateur` (`login`, `password`, `cin`, `nom`, `date_naiss`, `email`, `image`) VALUES
('amoun', '$2y$10$THhBTxuCKXpWe', 11168506, 'amoun', '1999-02-02', 'ftour@lablabitarbouch.com', '9.jpg'),
('hhhj', '$2y$10$6YGEV1j9eE50CeLmBlIZb.ZT2gqC9HJ4lA0ddE788Qpk7mZELDTfa', 1334560, 'hhhj', '1999-05-01', 'mrmohamedtriki@gmail.com', '3.jpg'),
('med', '$2y$10$y1hnHpZBxKoTu', 1333044, 'med', '1999-05-06', 'mrmohamedtriki@gmail.com', NULL),
('baba', '$2y$10$GxYQ6v4PRS.Kj', 1333085, 'baba', '1999-04-29', 'mrmohamedtriki@gmail.com', '7.jpg'),
('hh', '$2y$10$WvLA.drmHT2mQ', 1333011, 'hh', '1999-05-03', 'mrmohamedtriki@gmail.com', NULL),
('gg', '$2y$10$UesPjW0x6LSzX', 1333033, 'gg', '1999-05-03', 'mrmohamedtriki@gmail.com', NULL),
('ooo', '$2y$10$kKh2HHXjzWJMd', 1333111, 'ooo', '1999-05-03', 'mrmohamedtriki@gmail.com', NULL),
('momo', '$2y$10$6IAzCpnrGbCgZ', 1330001, 'momo', '1999-05-10', 'mrmohamedtriki@gmail.com', NULL),
('tata', '$2y$10$flfigmyA4J.h3', 1333123, 'tata', '1966-05-07', 'mrmohamedtriki@gmail.com', NULL),
('koko', '$2y$10$AFcFWPBbecjaEOs.OB1Bl.WCdJ/Uaorgyg1UqfuurO5hDUGLMKgqu', 1333452, 'koko', '1999-04-30', 'mrmohamedtriki@gmail.com', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`login`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `saison`
--
ALTER TABLE `saison`
  ADD PRIMARY KEY (`id_sai`);

--
-- Indexes for table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD UNIQUE KEY `uc_login` (`login`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `saison`
--
ALTER TABLE `saison`
  MODIFY `id_sai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
