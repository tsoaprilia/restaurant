-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2020 at 07:47 AM
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
-- Table structure for table `dess`
--

CREATE TABLE `dess` (
  `id_DESSERTS` int(50) NOT NULL,
  `makanan` varchar(50) DEFAULT NULL,
  `harga` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dess`
--

INSERT INTO `dess` (`id_DESSERTS`, `makanan`, `harga`) VALUES
(9, 'Banana Split', 90000),
(10, 'Strawberry Heaven', 90000),
(11, 'Cookie Delight', 90000),
(12, ' Choco Budoir', 90000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dess`
--
ALTER TABLE `dess`
  ADD PRIMARY KEY (`id_DESSERTS`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
