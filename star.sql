-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2020 at 07:49 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `starters`
--

-- --------------------------------------------------------

--
-- Table structure for table `star`
--

CREATE TABLE `star` (
  `id_STARTERS` int(50) NOT NULL,
  `Makanan` varchar(50) NOT NULL,
  `Harga` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `star`
--

INSERT INTO `star` (`id_STARTERS`, `Makanan`, `Harga`) VALUES
(1, 'Tortilla Espanola', 45000),
(2, 'Olivas Rellenas', 60000),
(3, 'Gambas Al Ajillo', 50000),
(4, 'Verduras Con Olivada', 65000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `star`
--
ALTER TABLE `star`
  ADD PRIMARY KEY (`id_STARTERS`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `star`
--
ALTER TABLE `star`
  MODIFY `id_STARTERS` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
