-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2020 at 11:15 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `email`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `contact_number` varchar(13) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password1` varchar(255) DEFAULT NULL,
  `password2` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `fullname`, `address`, `contact_number`, `username`, `email`, `password1`, `password2`) VALUES
(1001, 'Wimple Uy', 'Davao City', '+639272938801', 'wimple12', 'wimple12@ymail.com', 'c20ad4d76fe97759aa27a0c99bff6710', 'c20ad4d76fe97759aa27a0c99bff6710'),
(1002, 'Gelyn Bete', 'Davao City', '+639272938801', 'Gelyn12', 'gelyn@ymail.com', 'c20ad4d76fe97759aa27a0c99bff6710', 'c20ad4d76fe97759aa27a0c99bff6710'),
(1003, 'Wimple Umaoeng', 'Davao City', '+639272938801', 'wimple12', 'wimple@gmail.com', 'c20ad4d76fe97759aa27a0c99bff6710', 'c20ad4d76fe97759aa27a0c99bff6710'),
(1004, 'Wimple Aira Umaoeng ', 'Davao City ', '+639272938801', 'wimple12', 'wimple@ymail.com', '287432197efc008f184f6e9ccc9fffa6', '287432197efc008f184f6e9ccc9fffa6');

-- --------------------------------------------------------

--
-- Table structure for table `sms_records`
--

CREATE TABLE `sms_records` (
  `sms_id` int(13) NOT NULL,
  `date_time` datetime DEFAULT NULL,
  `program` varchar(50) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `message` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sms_records`
--

INSERT INTO `sms_records` (`sms_id`, `date_time`, `program`, `username`, `email`, `message`) VALUES
(10033, '2020-10-16 18:32:00', 'BSIT', 'fe12', 'fyara@umindanao.edu.ph', 'HAHAHAHAHHA good evening! maam sorry namali kog send sa number wimple this.\r\n\r\n\r\n\r\nThis message cannot receive any reply.'),
(10134, '2020-10-19 17:08:00', 'All BSIT', 'wimple12', 'wimple1234@ymail.com', 'daghan koy giusab HUHUHUHU\r\n\r\n\r\n\r\n\r\nPlease do not reply to this conversation.');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) DEFAULT NULL,
  `middlename` varchar(50) DEFAULT NULL,
  `lastname` varchar(50) DEFAULT NULL,
  `school` varchar(50) DEFAULT NULL,
  `program` varchar(50) DEFAULT NULL,
  `yearlevel` varchar(50) DEFAULT NULL,
  `phonenumber` varchar(13) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `Password1` varchar(50) DEFAULT NULL,
  `Password2` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `firstname`, `middlename`, `lastname`, `school`, `program`, `yearlevel`, `phonenumber`, `username`, `email`, `Password1`, `Password2`) VALUES
(477043, 'Fe ', 'B.', 'Yara ', 'University of Mindanao', 'BSIT ', '3rd Year', '+639297601115', 'fe12', 'fyara@umindanao.edu.ph', 'c20ad4d76fe97759aa27a0c99bff6710', 'c20ad4d76fe97759aa27a0c99bff6710'),
(477044, 'Wimple', 'Gorre', 'Umaoeng', 'Ateneo De Davao ', 'BSIT', '2nd Year', '+639272938801', 'wimple12', 'wimple12@ymail.com', 'c20ad4d76fe97759aa27a0c99bff6710', 'c20ad4d76fe97759aa27a0c99bff6710'),
(477045, 'Nicole ', 'A. ', 'Larida ', 'University of Mindanao ', 'BSIT', '2nd Year', '+639058086143', 'nic12', 'nic@ymail.com', 'c20ad4d76fe97759aa27a0c99bff6710', 'c20ad4d76fe97759aa27a0c99bff6710'),
(477046, 'Klayn', 'Y', 'Aranas', 'Ateneo De Davao ', 'BSIT', '3rd year ', '+639168433234', 'klayn12', 'klayn@umindanao.edu.ph', 'c20ad4d76fe97759aa27a0c99bff6710', 'c20ad4d76fe97759aa27a0c99bff6710'),
(477047, 'Gelyn ', 'D. ', 'Bete ', 'University of Mindanao', 'BSIT', '3rd Year', '+639051530843', 'gelyn12', 'gelyn@gmail.com', 'c20ad4d76fe97759aa27a0c99bff6710', 'c20ad4d76fe97759aa27a0c99bff6710'),
(477069, 'James', 'V.', 'Vecina ', 'Ateneo De Davao ', 'Accounting ', '1st Year ', '+639272938801', 'James123', 'james@gmail.com', 'c20ad4d76fe97759aa27a0c99bff6710', 'c20ad4d76fe97759aa27a0c99bff6710'),
(477070, 'Wimple', 'Aira ', 'G.', 'Umaoeng', 'Pharmacist ', '3rd Year ', '+639272938801', 'wimple123', 'wimple12@ymail.com', 'c20ad4d76fe97759aa27a0c99bff6710', 'c20ad4d76fe97759aa27a0c99bff6710'),
(477071, 'Klayn ', 'Y. ', 'Aranas ', 'Ateneo De Davao ', 'Lawyer', '2nd Year ', '+639272938801', 'klayn123', 'klayn@ymail.com', 'c20ad4d76fe97759aa27a0c99bff6710', 'c20ad4d76fe97759aa27a0c99bff6710');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sms_records`
--
ALTER TABLE `sms_records`
  ADD PRIMARY KEY (`sms_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1005;

--
-- AUTO_INCREMENT for table `sms_records`
--
ALTER TABLE `sms_records`
  MODIFY `sms_id` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10135;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=477072;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
