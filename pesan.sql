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
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `urut` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `id_STARTERS` varchar(50) NOT NULL,
  `id_MAINCOURSES` varchar(50) NOT NULL,
  `id_DESSERTS` varchar(50) NOT NULL,
  `id_DRINKS` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`urut`, `nama`, `alamat`, `id_STARTERS`, `id_MAINCOURSES`, `id_DESSERTS`, `id_DRINKS`) VALUES
(6, 'ARES', 'Malang', '4', '7', '10', '14'),
(13, 'aprilia', 'malang', '3', '5', '11', '14'),
(15, 'apriliaana', 'malang', '1', '5', '11', '14'),
(16, 'bismo', 'malang', '3', '5', '11', '14'),
(19, 'Soke Bahtera', 'Malangkj', '2', '7', '12', '15'),
(23, 'safrina', 'Malang', '1', '8', '12', '16'),
(24, 'tso', 'Malangg', '3', '7', '-', '14'),
(25, 'Antares', 'INDONESIA', '1', '7', '11', '14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`urut`),
  ADD UNIQUE KEY `nama` (`nama`),
  ADD KEY `id_STARTERS` (`id_STARTERS`),
  ADD KEY `id_MAINCOURSES` (`id_MAINCOURSES`),
  ADD KEY `id_MAINCOURSES_2` (`id_MAINCOURSES`),
  ADD KEY `id_DRINKS` (`id_DRINKS`),
  ADD KEY `id_DESSERTS` (`id_DESSERTS`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `urut` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
