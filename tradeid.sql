-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2023 at 01:12 PM
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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `idadmin` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `idcompany` int(11) NOT NULL,
  `namaPerusahaan` varchar(255) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `kota` varchar(255) DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `deskripsiPendek` text DEFAULT NULL,
  `deskripsiPanjang` text DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `linkedin` varchar(255) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `iduser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`idcompany`, `namaPerusahaan`, `alamat`, `kota`, `gambar`, `deskripsiPendek`, `deskripsiPanjang`, `instagram`, `facebook`, `linkedin`, `website`, `iduser`) VALUES
(1, 'Toko Maju', 'Perum Citra surya mas BLOK D-12 RT 40 RW 10', 'Ambon', 'download1.png', 'sangat bagus', '<p>Bagus banget nget nget nget</p>\r\n', 'ytyt', 'facebook', 'tyt', 'i', 1);

-- --------------------------------------------------------

--
-- Table structure for table `databuyer`
--

CREATE TABLE `databuyer` (
  `iddatabuyer` int(11) NOT NULL,
  `namabuyer` varchar(655) NOT NULL,
  `email` varchar(255) NOT NULL,
  `alamat` varchar(655) NOT NULL,
  `negara` varchar(255) NOT NULL,
  `no_telp` int(16) NOT NULL,
  `deskripsiPermintaan` varchar(655) NOT NULL,
  `idkategori` int(11) NOT NULL,
  `idsubkategori_a` int(11) NOT NULL,
  `idsubkategori_b` int(11) NOT NULL,
  `tglawal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `idproduct` int(11) NOT NULL,
  `namaProduk` int(11) NOT NULL,
  `idsupplier` int(11) NOT NULL,
  `idkategori` int(11) NOT NULL,
  `idsubkategori_a` int(11) NOT NULL,
  `idsubkategori_b` int(11) NOT NULL,
  `deskripsiProduk` int(11) NOT NULL,
  `gambar` int(11) NOT NULL
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
(11, 12, 'Mango');

-- --------------------------------------------------------

--
-- Table structure for table `subkategori_b`
--

CREATE TABLE `subkategori_b` (
  `idsubkategori_b` int(11) NOT NULL,
  `idsubkategori_a` int(11) NOT NULL,
  `idkategori` int(11) NOT NULL,
  `namaSubKategori_b` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subkategori_b`
--

INSERT INTO `subkategori_b` (`idsubkategori_b`, `idsubkategori_a`, `idkategori`, `namaSubKategori_b`) VALUES
(1, 9, 12, 'Copra'),
(2, 4, 10, 'gourami'),
(3, 4, 10, 'Salmon');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `idsupplier` int(11) NOT NULL,
  `namaPerusahaan` varchar(255) NOT NULL,
  `deskripsiPerusahaan` text NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telp` varchar(255) NOT NULL,
  `iduser` int(11) NOT NULL,
  `verify` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`idsupplier`, `namaPerusahaan`, `deskripsiPerusahaan`, `nama`, `email`, `telp`, `iduser`, `verify`) VALUES
(4, 'Toko Maju Jaya', 'wqeewqe', 'udin sapii', 'arif13.aw@gmail.com', '081805404140', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `iduser` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `cSupplier` int(2) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `telp` varchar(255) DEFAULT NULL,
  `negara` varchar(255) DEFAULT NULL,
  `verify_token` varchar(255) DEFAULT NULL,
  `verify_ token_created` int(11) DEFAULT NULL,
  `status` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`iduser`, `username`, `email`, `password`, `cSupplier`, `nama`, `alamat`, `telp`, `negara`, `verify_token`, `verify_ token_created`, `status`) VALUES
(1, 'Polixyner', 'arif15.sw@gmail.com', '$2y$10$gM2HtlzBb55FBs3P9xnEMOiwn0twB3zsnu/fySJ8cSH8adDuXEiMC', 1, 'Arif Setyo Wibowo', 'Perum Citra surya mas BLOK D-12 RT 40 RW 10', '081805404140', 'Indonesia', NULL, NULL, NULL),
(2, 'arifsw__', 'bowo@gmail.com', '$2y$10$ua.RZRbGxl6HclYpYZk0YOxDfWJocbHhD9OW77r8hIGoqVBSmDHEC', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`idadmin`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`idcompany`);

--
-- Indexes for table `databuyer`
--
ALTER TABLE `databuyer`
  ADD PRIMARY KEY (`iddatabuyer`),
  ADD KEY `subkategori_b` (`idsubkategori_b`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`idkategori`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`idproduct`);

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
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`iduser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `idadmin` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `idcompany` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `databuyer`
--
ALTER TABLE `databuyer`
  MODIFY `iddatabuyer` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `idkategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `idproduct` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subkategori_a`
--
ALTER TABLE `subkategori_a`
  MODIFY `idsubkategori_a` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `subkategori_b`
--
ALTER TABLE `subkategori_b`
  MODIFY `idsubkategori_b` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `idsupplier` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `databuyer`
--
ALTER TABLE `databuyer`
  ADD CONSTRAINT `subkategori_b` FOREIGN KEY (`idsubkategori_b`) REFERENCES `subkategori_b` (`idsubkategori_b`);

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
