-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 03, 2022 at 12:25 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jobs`
--

-- --------------------------------------------------------

--
-- Table structure for table `candidate`
--

CREATE TABLE `candidate` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `apply` varchar(255) NOT NULL,
  `qual` varchar(255) NOT NULL,
  `year` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `candidate`
--

INSERT INTO `candidate` (`id`, `name`, `apply`, `qual`, `year`) VALUES
(1, 'Simanta Patowary', 'SDE', 'BTECH CSE ', '2023'),
(2, 'Simanta Patowary', 'SDE', 'BTECH CSE ', '2023'),
(3, 'Simanta Patowary', 'DGM', 'BTECH ME', '2021'),
(4, 'surajit chocrabarty', 'DGM', 'BTECH CSE ', '2023'),
(5, 'pranjit', 'SDE', 'BTECH ME', '2021');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` int(11) NOT NULL,
  `cname` varchar(200) NOT NULL,
  `position` varchar(200) NOT NULL,
  `jdesc` varchar(300) NOT NULL,
  `skills` varchar(200) NOT NULL,
  `ctc` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `cname`, `position`, `jdesc`, `skills`, `ctc`) VALUES
(1, 'google', 'Software Development Engineer ', 'hi', '  C,C++, java,MongoDB, Nodejs,Reactjs,Express, DSA.', '388lpa'),
(2, '1stop', 'Software Development Engineer (Frontend)', 'jhmmk', 'HTML,CSS. JAVASCRIPT, PHP', '3.6LPA'),
(3, 'Facebook', 'Software Development Engineer ', 'face book hello', '  C,C++, java,MongoDB, Nodejs,Reactjs,Express, DSA.', '235LPA'),
(4, 'google', 'Digital Mrketing', 'goooglyhhg ', ' English hindi etc', '12LPA'),
(5, 'Facebook', 'Digital Mrketing', 'Facebook', ' English hindi etc', '12LPA'),
(6, '1stop', 'Software Development Engineer ', 'er1stop', 'HTML,CSS. JAVASCRIPT, PHP', '12LPA'),
(7, 'Amazon', 'Digital Mrketing', 'amazon', ' English hindi etc', '12LPA'),
(8, '1stop', 'Digital Mrketing', 'objhfgrt guytrfr5t t6756767t tgtytr6 uyjtgyrt6y uitg6t  yt67ttyg jhfgt6r bntyr56fv nmrtrt gv67rty tyrr56 fy6rcv btyrfrt6ty tyftygc tyrfgh v nmfgyftfgy', ' English hindi etc', '3.6LPA');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(100) NOT NULL,
  `phone_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `phone_no`) VALUES
(1, 'Simanta Patowary', 'simantapatowary963@gmail.com', '123', 2147483647),
(2, 'surajit chocrabarty', 'himu123@gmail.com', '2345', 2147483647);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `candidate`
--
ALTER TABLE `candidate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `candidate`
--
ALTER TABLE `candidate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
