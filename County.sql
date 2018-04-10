-- phpMyAdmin SQL Dump
-- version 4.7.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 10, 2018 at 01:51 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `County`
--

-- --------------------------------------------------------

--
-- Table structure for table `ansvariga`
--

CREATE TABLE `ansvariga` (
  `id` int(10) UNSIGNED NOT NULL,
  `namn` varchar(16) COLLATE utf8mb4_bin NOT NULL,
  `efternamn` varchar(16) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `ansvariga`
--

INSERT INTO `ansvariga` (`id`, `namn`, `efternamn`) VALUES
(1, 'Alexander', 'Mattsson'),
(2, 'Samuel', 'Burvall'),
(3, 'Jens', 'Andreasson'),
(4, 'Elias', 'Edlund'),
(5, 'Anton', 'Degerfeldt');

-- --------------------------------------------------------

--
-- Table structure for table `billboard`
--

CREATE TABLE `billboard` (
  `id` int(11) UNSIGNED NOT NULL,
  `sammantrade` date NOT NULL,
  `uppsattning` date NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `organ` varchar(40) COLLATE utf8mb4_bin NOT NULL,
  `stub` text COLLATE utf8mb4_bin NOT NULL,
  `forfaringsplats` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `dokument` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `ansvarig` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ansvariga`
--
ALTER TABLE `ansvariga`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `billboard`
--
ALTER TABLE `billboard`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ansvariga`
--
ALTER TABLE `ansvariga`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `billboard`
--
ALTER TABLE `billboard`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
