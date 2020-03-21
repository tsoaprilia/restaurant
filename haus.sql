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
-- Table structure for table `haus`
--

CREATE TABLE `haus` (
  `id_DRINKS` int(50) NOT NULL,
  `Minuman` varchar(50) DEFAULT NULL,
  `Harga` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `haus`
--

INSERT INTO `haus` (`id_DRINKS`, `Minuman`, `Harga`) VALUES
(13, 'Choco Avocado', 30000),
(14, 'Ice Manggo Yakult', 30000),
(15, 'Hot Coffee', 30000),
(16, 'Taro Cheese', 30000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `haus`
--
ALTER TABLE `haus`
  ADD PRIMARY KEY (`id_DRINKS`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
