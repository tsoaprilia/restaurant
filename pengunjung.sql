-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2020 at 07:50 AM
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
-- Database: `registrasi`
--

-- --------------------------------------------------------

--
-- Table structure for table `pengunjung`
--

CREATE TABLE `pengunjung` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `tlp` int(50) NOT NULL,
  `kunci` varchar(50) NOT NULL,
  `curent` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengunjung`
--

INSERT INTO `pengunjung` (`id`, `nama`, `alamat`, `tlp`, `kunci`, `curent`) VALUES
(1, '', '', 0, '', '2020-02-22 08:55:02'),
(59, 'safrina', 'malang', 8123447, 'safrina1', '2020-02-24 02:40:35'),
(60, 'bahtera', 'malang', 2147483647, 'bahtera1', '2020-02-24 03:25:29'),
(61, 'weat', 'malang', 2147483647, 'weat1', '2020-02-24 03:32:26'),
(62, 'ratih', 'malang', 2147483647, 'weat1', '2020-02-24 03:50:36'),
(64, 'keysha', 'malang', 2147483647, 'weat1', '2020-02-24 03:51:46'),
(65, 'bismo', 'malang', 2147483647, 'weat1', '2020-02-24 03:56:37'),
(66, 'Soke Bahtera', 'Malang', 2147483647, 'aprilia', '2020-02-24 11:42:41'),
(67, 'Soke Bahterakuuu', 'Malang', 2147483647, 'aprilia', '2020-02-24 12:14:46'),
(68, 'tso', 'Malang', 2147483647, 'aprilia', '2020-02-24 12:17:29'),
(69, 'Antares', 'INDONESIA', 87678790, 'ANTARES', '2020-03-06 01:40:33'),
(70, 'moop', 'dunia', 8790678, '1234567', '2020-03-09 03:51:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pengunjung`
--
ALTER TABLE `pengunjung`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nama` (`nama`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pengunjung`
--
ALTER TABLE `pengunjung`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
