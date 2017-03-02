-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2016 at 08:22 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `materialize`
--

-- --------------------------------------------------------

--
-- Table structure for table `follow`
--

CREATE TABLE `follow` (
  `id` int(10) UNSIGNED NOT NULL,
  `follower` int(10) UNSIGNED NOT NULL,
  `following` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `follow`
--

INSERT INTO `follow` (`id`, `follower`, `following`) VALUES
(5, 7, 7),
(6, 7, 6),
(7, 6, 7),
(8, 6, 6);

-- --------------------------------------------------------

--
-- Table structure for table `tweet`
--

CREATE TABLE `tweet` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `tweet` varchar(140) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tweet`
--

INSERT INTO `tweet` (`id`, `user_id`, `tweet`) VALUES
(2, 7, 'Yo bro'),
(5, 7, 'Mention @adi'),
(6, 7, 'Mention from adi to @budi'),
(7, 6, 'Hello Budi #sundul');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) UNSIGNED NOT NULL,
  `fullname` varchar(200) NOT NULL,
  `username` varchar(32) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fullname`, `username`, `email`, `password`) VALUES
(5, 'Deki Afandy', 'dq23', 'dqafandy@rocketmail.com', '$2y$10$YS.bVEjmZI9RuEaSxZCwEexgd4WbuhaMAPFhy20fndFijHeoxJ4ue'),
(6, 'adi', 'adi', 'adi@ub.ac.id', '$2y$10$nHkrulXIw/g5gvlXKNPd/.fxY1paCN78vVJ.4UmJ8uwpOWJ4j5DSO'),
(7, 'Budi', 'Budi', 'budi@ub.ac.id', '$2y$10$Pbq/t3nyfH6CZEKDDiKLYOaal8wHKgU5DBAkCcs18kmWiINZE6Kka'),
(8, 'Charlie', 'charlie', 'charlie@ub.ac.id', '$2y$10$GLsWcfpV/L/1QwT1qlAKGOkSvANdskKJlCCp6EWh4NqCCwCkUzKLy'),
(12, 'Rony', 'RonyH', 'rony.hendiartoo14@gmail.com', '$2y$10$fi.m17MetOcX8bVr9bDPzuzmN/8T1VSJCwF0KdtBEhpSF3W/I/Oem');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `follow`
--
ALTER TABLE `follow`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tweet`
--
ALTER TABLE `tweet`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `follow`
--
ALTER TABLE `follow`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tweet`
--
ALTER TABLE `tweet`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
