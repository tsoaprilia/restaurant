-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2020 at 07:48 AM
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
-- Table structure for table `mainn`
--

CREATE TABLE `mainn` (
  `id_MAINCOURSES` int(50) NOT NULL,
  `Makanan` varchar(50) NOT NULL,
  `Harga` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mainn`
--

INSERT INTO `mainn` (`id_MAINCOURSES`, `Makanan`, `Harga`) VALUES
(5, 'Pollo Al Horno', 80000),
(6, 'Lasagne', 30000),
(7, 'Lenguado', 120000),
(8, 'Bacalao Frito', 70000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mainn`
--
ALTER TABLE `mainn`
  ADD PRIMARY KEY (`id_MAINCOURSES`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mainn`
--
ALTER TABLE `mainn`
  MODIFY `id_MAINCOURSES` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
