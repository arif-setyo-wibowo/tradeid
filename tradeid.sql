-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2023 at 03:59 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tradeid`
--

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `idkategori` int(11) NOT NULL,
  `namaKategori` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`idkategori`, `namaKategori`) VALUES
(8, 'Agri & Food Processing Machinery & Equipment'),
(10, 'Fish & Fish Products'),
(11, 'Processed Food & Beverages Products & By Products'),
(12, 'Farm Products - Grains, Fruits etc');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `idpengguna` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `subkategori_a`
--

CREATE TABLE `subkategori_a` (
  `idsubkategori_a` int(11) NOT NULL,
  `idkategori` int(11) NOT NULL,
  `namaSubKategori` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subkategori_a`
--

INSERT INTO `subkategori_a` (`idsubkategori_a`, `idkategori`, `namaSubKategori`) VALUES
(1, 10, 'Shrimp'),
(2, 8, 'Agriculture Bags'),
(4, 10, 'Fish'),
(5, 10, 'Fresh Crabs'),
(6, 10, ' Fresh Lobsters'),
(7, 8, 'Axe'),
(8, 8, 'Sugar Processing Plants'),
(9, 12, 'Coconut'),
(10, 12, 'Copra'),
(11, 12, 'Mango'),
(12, 12, 'De-husked Coconut');

-- --------------------------------------------------------

--
-- Table structure for table `subkategori_b`
--

CREATE TABLE `subkategori_b` (
  `idsubkategori_b` int(11) NOT NULL,
  `idsubkategori_a` int(11) NOT NULL,
  `namaSubKategori_b` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `idsupplier` int(11) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `namaPerusahaan` varchar(255) NOT NULL,
  `deskripsiPerusahaan` varchar(655) NOT NULL,
  `email` varchar(255) NOT NULL,
  `iduser` int(11) NOT NULL,
  `verify` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`idkategori`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`idpengguna`);

--
-- Indexes for table `subkategori_a`
--
ALTER TABLE `subkategori_a`
  ADD PRIMARY KEY (`idsubkategori_a`),
  ADD KEY `kategori` (`idkategori`);

--
-- Indexes for table `subkategori_b`
--
ALTER TABLE `subkategori_b`
  ADD PRIMARY KEY (`idsubkategori_b`),
  ADD KEY `subkategori_a` (`idsubkategori_a`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`idsupplier`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `idkategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `idpengguna` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subkategori_a`
--
ALTER TABLE `subkategori_a`
  MODIFY `idsubkategori_a` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `subkategori_b`
--
ALTER TABLE `subkategori_b`
  MODIFY `idsubkategori_b` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `idsupplier` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `subkategori_a`
--
ALTER TABLE `subkategori_a`
  ADD CONSTRAINT `kategori` FOREIGN KEY (`idkategori`) REFERENCES `kategori` (`idkategori`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `subkategori_b`
--
ALTER TABLE `subkategori_b`
  ADD CONSTRAINT `subkategori_a` FOREIGN KEY (`idsubkategori_a`) REFERENCES `subkategori_a` (`idsubkategori_a`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
