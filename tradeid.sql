-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2023 at 12:23 PM
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

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`idadmin`, `username`, `password`) VALUES
(1, 'admin', 123);

-- --------------------------------------------------------

--
-- Table structure for table `buyer`
--

CREATE TABLE `buyer` (
  `idbuyer` int(11) NOT NULL,
  `namaBuyer` text NOT NULL,
  `emailBuyer` text NOT NULL,
  `alamatBuyer` varchar(255) NOT NULL,
  `tglbuyer` date NOT NULL,
  `negaraBuyer` varchar(255) NOT NULL,
  `telpBuyer` varchar(255) NOT NULL,
  `produkBuyer` varchar(255) NOT NULL,
  `deskripsiBuyer` text NOT NULL,
  `idkategori` int(11) NOT NULL,
  `idsubkategori_a` int(11) NOT NULL,
  `idsubkategori_b` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buyer`
--

INSERT INTO `buyer` (`idbuyer`, `namaBuyer`, `emailBuyer`, `alamatBuyer`, `tglbuyer`, `negaraBuyer`, `telpBuyer`, `produkBuyer`, `deskripsiBuyer`, `idkategori`, `idsubkategori_a`, `idsubkategori_b`) VALUES
(2, 'ronald', 'arif13.aw@gmail.com', 'Perum Citra surya mas BLOK D-12 RT 40 RW 10', '2023-12-17', 'Indonesia', '081805404140', 'kepala', 'dsfsdfsdfsdf df sdf              ', 12, 9, 4);

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `idcompany` int(11) NOT NULL,
  `namaPerusahaan` varchar(255) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `kota` varchar(255) DEFAULT NULL,
  `gambarCompany` varchar(255) DEFAULT NULL,
  `deskripsiPendek` text DEFAULT NULL,
  `deskripsiPanjang` text DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `linkedin` varchar(255) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `idsupplier` int(11) NOT NULL,
  `idkategori` int(11) NOT NULL,
  `idsubkategori_a` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`idcompany`, `namaPerusahaan`, `alamat`, `kota`, `gambarCompany`, `deskripsiPendek`, `deskripsiPanjang`, `instagram`, `facebook`, `linkedin`, `website`, `idsupplier`, `idkategori`, `idsubkategori_a`) VALUES
(1, 'trade ID', 'Perum Citra surya mas BLOK D-12 RT 40 RW 10', 'Balikpapan', 'download1.png', 'sangat bag', '<p>Bagus banget</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>nget nget nget</p>\r\n', 'ytyt', 'facebook', 'tyrewrw', 'irtretii', 9, 10, 4),
(8, 'PT Indonesia', 'Perum Citra surya mas BLOK D-12 RT 40 RW 10', 'Banjarmasin', 'bd3375f84f74ddf4724b9d4c3774e786.png', NULL, NULL, 'ewe', NULL, 'ewe', 'wew', 4, 12, 9),
(9, 'PT Sejahtera', 'Jl. Amir mahmud IX', 'Surabaya', '80c6d495e251c6e1deb7e0af929b5c3a.png', 'ikan segar', '<p>kualitas mantap dan bagus</p>\r\n', NULL, NULL, NULL, NULL, 11, 10, 4),
(10, 'PT Makmur', 'Jual bunga hidup dan tidak', 'Surabaya', '8eb63762afbc539271e004686a6bd639.png', NULL, NULL, NULL, NULL, NULL, NULL, 12, 14, 16),
(11, 'PT Alda Sukses', 'Karang Tengah Nomor 4', 'Semarang', '7ff34a41c8995d8598b748a4e641fd13.png', NULL, NULL, NULL, NULL, NULL, NULL, 13, 13, 15),
(12, 'PT Bintang Abadi', 'Jl. Pahlawan Nomor 12', 'Yogyakarta', 'cedcb19029fb2228f0b92d0d7bec65be.png', 'Menyediakan makanan hewan peliharaan', '', NULL, NULL, NULL, NULL, 14, 15, 17),
(13, 'PT Baju Cantik', 'Tersedia Baju aesthetic', 'Madiun', '549ec8f16921270f8ceaea56b70d7204.png', NULL, NULL, NULL, NULL, NULL, NULL, 15, 16, 18),
(14, 'Last Choice Company', 'Kedungpring Street 23', 'Surabaya', '5faa79b5661ca3457e0188d084dad9d6.png', NULL, NULL, NULL, NULL, NULL, NULL, 20, 20, 26),
(15, 'Next Level Store', 'Balikpapan Street 23', 'Balikpapan', 'a149b317aaa6fd2e1231098eb2eda79d.png', NULL, NULL, NULL, NULL, NULL, NULL, 19, 19, 24),
(16, 'Terbang Jauh Company', 'Balongsari Street 225', 'Surabaya', '6891dc4785e077af86af1d029a63dd55.png', NULL, NULL, NULL, NULL, NULL, NULL, 18, 18, 22),
(17, 'Makmur Star Company', 'Tenggilis HIghway Street 42', 'Surabaya', 'f4c7fd151eb97373374edd676ea793e2.png', NULL, NULL, NULL, NULL, NULL, NULL, 17, 17, 20),
(20, 'Rumah Masak', 'Perum Citra surya mas BLOK D-12 RT 40 RW 10', 'Banjarmasin', '2b35f8a0959807b983254123be5775f0.png', NULL, NULL, NULL, NULL, NULL, NULL, 24, 12, 11);

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
-- Table structure for table `facility`
--

CREATE TABLE `facility` (
  `idfacility` int(11) NOT NULL,
  `idcompany` int(11) NOT NULL,
  `gambarFacility` text NOT NULL,
  `namaFacility` varchar(655) NOT NULL,
  `deskripsiFacility` varchar(655) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `facility`
--

INSERT INTO `facility` (`idfacility`, `idcompany`, `gambarFacility`, `namaFacility`, `deskripsiFacility`) VALUES
(3, 10, 'b1924a4be91ebcfb19049d59800bb386.png', 'Wooden Box', 'Wooden box included the lid'),
(4, 9, 'e59b9a656f05641b7f883be26ae7d501.png', 'Ice Box', 'The materials of ice box is styrofoam'),
(5, 11, '7a2f329bd3785992f26bf6d4a1339ee2.png', 'Jewelry Case', 'Jewelry case included price'),
(6, 13, 'ee535af2547abff67b596214c6adfd55.png', 'Box', 'Safe box ');

-- --------------------------------------------------------

--
-- Table structure for table `inquire`
--

CREATE TABLE `inquire` (
  `idinquire` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telp` varchar(255) NOT NULL,
  `negara` varchar(255) NOT NULL,
  `pesan` text NOT NULL,
  `idproduct` int(11) NOT NULL,
  `idcompany` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `tgl` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inquire`
--

INSERT INTO `inquire` (`idinquire`, `nama`, `email`, `telp`, `negara`, `pesan`, `idproduct`, `idcompany`, `iduser`, `tgl`) VALUES
(1, 'baru', 'arif13.aw@gmail.com', '081805404140', 'Malaysia', 'Saya Ingin Pesan Ini\r\n', 9, 1, 3, '2023-12-13'),
(2, 'baru', 'arif13.aw@gmail.com', '081805404140', 'Malaysia', 'saya beli bang\r\n', 12, 6, 3, '2023-12-15'),
(3, 'Lala kana', 'lalale@gmail.com', '081556605123', 'Philippines', 'Saya ingin membeli ikan', 14, 9, 5, '2023-12-15'),
(4, 'Lala kana', 'lalale@gmail.com', '081556605123', 'Philippines', 'Mau lele kak', 17, 9, 5, '2023-12-15'),
(5, 'Lala kana', 'lalale@gmail.com', '081556605123', 'Philippines', 'Saya ingin tuna', 16, 9, 5, '2023-12-15'),
(6, 'Hui Kaila', 'kailahui@gmail.com', '081672407658', 'Taiwan', 'How much?', 23, 11, 15, '2023-12-15'),
(7, 'Hui Kaila', 'kailahui@gmail.com', '081672407658', 'Taiwan', 'I want it', 34, 13, 15, '2023-12-15'),
(8, 'Hui Kaila', 'kailahui@gmail.com', '081672407658', 'Taiwan', 'saya menginginkan ini', 26, 11, 15, '2023-12-15'),
(9, 'Kuumar Khan', 'kuumarkhan14@gmail.com', '081805409632', 'India', 'I interested with your product, give me ur number so we can talk about the product', 42, 14, 34, '2023-12-15'),
(10, 'Kuumar Khan', 'kuumarkhan14@gmail.com', '081805409632', 'India', 'I interested with your product, give me ur number so we can talk about the product', 40, 14, 34, '2023-12-15'),
(11, 'Kuumar Khan', 'kuumarkhan14@gmail.com', '081805409632', 'India', 'I interested with your product, give me ur number so we can talk about the product', 38, 14, 34, '2023-12-15'),
(12, 'Kuumar Khan', 'kuumarkhan14@gmail.com', '081805409632', 'India', 'I interested with your product, give me ur number so we can talk about the product', 41, 14, 34, '2023-12-15'),
(13, 'Muhammad Dhiya Ulhaq', 'Ulhaq13@gmail.com', '013640683536', 'Malaysia', 'I interested with your product, give me ur number so we can talk about the product', 40, 14, 33, '2023-12-15'),
(14, 'Muhammad Dhiya Ulhaq', 'Ulhaq13@gmail.com', '013640683536', 'Malaysia', 'I interested with your product, give me ur number so we can talk about the product', 38, 14, 33, '2023-12-15'),
(15, 'Muhammad Dhiya Ulhaq', 'Ulhaq13@gmail.com', '013640683536', 'Malaysia', 'I interested with your product, give me ur number so we can talk about the product', 41, 14, 33, '2023-12-15'),
(16, 'Muhammad Dhiya Ulhaq', 'Ulhaq13@gmail.com', '013640683536', 'Malaysia', 'I interested with your product, give me ur number so we can talk about the product', 42, 14, 33, '2023-12-15'),
(17, 'Muhammad Dhiya Ulhaq', 'Ulhaq13@gmail.com', '013640683536', 'Malaysia', 'I interested with your product, give me ur number so we can talk about the product', 54, 17, 33, '2023-12-15'),
(18, 'Muhammad Dhiya Ulhaq', 'Ulhaq13@gmail.com', '013640683536', 'Malaysia', 'I interested with your product, give me ur number so we can talk about the product', 53, 17, 33, '2023-12-15'),
(19, 'Muhammad Dhiya Ulhaq', 'Ulhaq13@gmail.com', '013640683536', 'Malaysia', 'I interested with your product, give me ur number so we can talk about the product', 52, 17, 33, '2023-12-15'),
(20, 'Muhammad Dhiya Ulhaq', 'Ulhaq13@gmail.com', '013640683536', 'Malaysia', 'I interested with your product, give me ur number so we can talk about the product', 51, 17, 33, '2023-12-15'),
(21, 'Muhammad Dhiya Ulhaq', 'Ulhaq13@gmail.com', '013640683536', 'Malaysia', 'I interested with your product, give me ur number so we can talk about the product', 49, 16, 33, '2023-12-15'),
(22, 'Muhammad Dhiya Ulhaq', 'Ulhaq13@gmail.com', '013640683536', 'Malaysia', 'I interested with your product, give me ur number so we can talk about the product', 48, 16, 33, '2023-12-15'),
(23, 'Muhammad Dhiya Ulhaq', 'Ulhaq13@gmail.com', '013640683536', 'Malaysia', 'I interested with your product, give me ur number so we can talk about the product', 47, 16, 33, '2023-12-15'),
(24, 'Muhammad Dhiya Ulhaq', 'Ulhaq13@gmail.com', '013640683536', 'Malaysia', 'I interested with your product, give me ur number so we can talk about the product', 50, 16, 33, '2023-12-15'),
(26, 'Muhammad Dhiya Ulhaq', 'Ulhaq13@gmail.com', '013640683536', 'Malaysia', 'I interested with your product, give me ur number so we can talk about the product', 46, 15, 33, '2023-12-15'),
(27, 'Muhammad Dhiya Ulhaq', 'Ulhaq13@gmail.com', '013640683536', 'Malaysia', 'I interested with your product, give me ur number so we can talk about the product', 45, 15, 33, '2023-12-15'),
(28, 'Muhammad Dhiya Ulhaq', 'Ulhaq13@gmail.com', '013640683536', 'Malaysia', 'I interested with your product, give me ur number so we can talk about the product', 44, 15, 33, '2023-12-15'),
(29, 'Muhammad Dhiya Ulhaq', 'Ulhaq13@gmail.com', '013640683536', 'Malaysia', 'I interested with your product, give me ur number so we can talk about the product', 43, 15, 33, '2023-12-15'),
(30, 'Kuumar Khan', 'kuumarkhan14@gmail.com', '081805409632', 'India', 'I interested with your product, give me ur number so we can talk about the product', 54, 17, 34, '2023-12-15'),
(31, 'Kuumar Khan', 'kuumarkhan14@gmail.com', '081805409632', 'India', 'I interested with your product, give me ur number so we can talk about the product', 53, 17, 34, '2023-12-15'),
(32, 'Kuumar Khan', 'kuumarkhan14@gmail.com', '081805409632', 'India', 'I interested with your product, give me ur number so we can talk about the product', 52, 17, 34, '2023-12-15'),
(33, 'Kuumar Khan', 'kuumarkhan14@gmail.com', '081805409632', 'India', 'I interested with your product, give me ur number so we can talk about the product', 51, 17, 34, '2023-12-15'),
(34, 'Kuumar Khan', 'kuumarkhan14@gmail.com', '081805409632', 'India', 'I interested with your product, give me ur number so we can talk about the product', 50, 16, 34, '2023-12-15'),
(35, 'Kuumar Khan', 'kuumarkhan14@gmail.com', '081805409632', 'India', 'I interested with your product, give me ur number so we can talk about the product', 49, 16, 34, '2023-12-15'),
(36, 'Kuumar Khan', 'kuumarkhan14@gmail.com', '081805409632', 'India', 'I interested with your product, give me ur number so we can talk about the product', 48, 16, 34, '2023-12-15'),
(37, 'Kuumar Khan', 'kuumarkhan14@gmail.com', '081805409632', 'India', 'I interested with your product, give me ur number so we can talk about the product', 47, 16, 34, '2023-12-15'),
(38, 'Kuumar Khan', 'kuumarkhan14@gmail.com', '081805409632', 'India', 'I interested with your product, give me ur number so we can talk about the product', 43, 15, 34, '2023-12-15'),
(39, 'Kuumar Khan', 'kuumarkhan14@gmail.com', '081805409632', 'India', 'I interested with your product, give me ur number so we can talk about the product', 46, 15, 34, '2023-12-15'),
(40, 'Kuumar Khan', 'kuumarkhan14@gmail.com', '081805409632', 'India', 'I interested with your product, give me ur number so we can talk about the product', 45, 15, 34, '2023-12-15'),
(41, 'Kuumar Khan', 'kuumarkhan14@gmail.com', '081805409632', 'India', 'I interested with your product, give me ur number so we can talk about the product', 44, 15, 34, '2023-12-15');

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
(12, 'Farm Products - Grains, Fruits etc'),
(13, 'Gems & Jewellery'),
(14, 'Horticulture - Flowers, Plants & Related Products'),
(15, 'Pets & Pet Supplies'),
(16, 'Textiles, Garment, Fashion Accessories & Footwear'),
(17, 'Plastic Products'),
(18, 'Leather & Leather Products'),
(19, 'Fitness Equipment & Sports Goods'),
(20, 'Medical & HealthCare');

-- --------------------------------------------------------

--
-- Table structure for table `komen`
--

CREATE TABLE `komen` (
  `idkomen` int(11) NOT NULL,
  `idbalas` int(11) DEFAULT NULL,
  `idposting` int(11) NOT NULL,
  `pesankomen` text NOT NULL,
  `created_at_komen` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `komen`
--

INSERT INTO `komen` (`idkomen`, `idbalas`, `idposting`, `pesankomen`, `created_at_komen`) VALUES
(3, NULL, 1, 'test\r\n', '2023-12-17 07:42:55'),
(7, 3, 1, 'hayo', '2023-12-17 08:15:27');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `idmember` int(11) NOT NULL,
  `idcompany` int(11) NOT NULL,
  `tglstart` datetime NOT NULL,
  `tglakhir` datetime NOT NULL,
  `statusMember` int(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`idmember`, `idcompany`, `tglstart`, `tglakhir`, `statusMember`, `created_at`) VALUES
(1, 1, '2023-12-16 00:00:00', '2023-12-16 22:59:08', 0, '2023-12-16 06:21:15'),
(3, 1, '2023-12-19 05:36:31', '2023-12-21 05:37:01', 1, '2023-12-19 04:36:31'),
(5, 2, '2023-12-19 05:51:12', '2023-12-19 05:51:22', 1, '2023-12-19 04:51:12'),
(11, 20, '2023-12-20 11:43:21', '2024-06-20 11:43:21', 1, '2023-12-20 10:43:21');

-- --------------------------------------------------------

--
-- Table structure for table `pembelian`
--

CREATE TABLE `pembelian` (
  `idpembelian` int(11) NOT NULL,
  `idcompany` int(11) NOT NULL,
  `namaPembelian` varchar(255) NOT NULL,
  `emailPembelian` varchar(255) NOT NULL,
  `tglPembelian` date NOT NULL,
  `gambarPembelian` text DEFAULT NULL,
  `idpremium` int(11) NOT NULL,
  `statusPembelian` int(1) DEFAULT NULL,
  `statusAdmin` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pembelian`
--

INSERT INTO `pembelian` (`idpembelian`, `idcompany`, `namaPembelian`, `emailPembelian`, `tglPembelian`, `gambarPembelian`, `idpremium`, `statusPembelian`, `statusAdmin`) VALUES
(1, 1, 'Arif setyo wibowo', 'arif13.aw@gmail.com', '2023-12-16', '23f2887e2b546d63c0a88605509d8b29.jpg', 3, 1, 1),
(2, 18, 'udin sapii', 'arif13.aw@gmail.com', '2023-12-19', '', 1, 1, 1),
(3, 20, 'Nando Arifin', 'arif13.aw@gmail.com', '2023-12-20', 'fab9a6f4c1d5406202ec55d0bada1a5c.jpg', 2, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `posting`
--

CREATE TABLE `posting` (
  `idposting` int(11) NOT NULL,
  `idcompany` int(11) NOT NULL,
  `topic` text NOT NULL,
  `pesan` text NOT NULL,
  `created_at_posting` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posting`
--

INSERT INTO `posting` (`idposting`, `idcompany`, `topic`, `pesan`, `created_at_posting`) VALUES
(1, 1, 'test', 'Bagus', '2023-12-17 07:03:32');

-- --------------------------------------------------------

--
-- Table structure for table `premium`
--

CREATE TABLE `premium` (
  `idpremium` int(11) NOT NULL,
  `namaPremium` varchar(255) NOT NULL,
  `hargaPremium` varchar(255) NOT NULL,
  `waktuPremium` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `premium`
--

INSERT INTO `premium` (`idpremium`, `namaPremium`, `hargaPremium`, `waktuPremium`) VALUES
(1, 'Premium 1', '150000', 'Bulan'),
(2, 'Premium 2', '450000', '6 Bulan'),
(3, 'Premium 3', '700000', 'Tahun');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `idproduct` int(11) NOT NULL,
  `namaProduk` varchar(255) NOT NULL,
  `idcompany` int(11) NOT NULL,
  `idkategori` int(11) NOT NULL,
  `idsubkategori_a` int(11) NOT NULL,
  `idsubkategori_b` int(11) NOT NULL,
  `deskripsiProduk` text NOT NULL,
  `deskripsiPendek` text NOT NULL,
  `harga` varchar(255) NOT NULL,
  `gambar` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`idproduct`, `namaProduk`, `idcompany`, `idkategori`, `idsubkategori_a`, `idsubkategori_b`, `deskripsiProduk`, `deskripsiPendek`, `harga`, `gambar`) VALUES
(9, 'Test', 1, 18, 22, 23, '<p>Kelapa</p>\r\n', 'sadasd', '1500', '9021204e22c59cb20250d01d6480a09b.jpeg,145cf7e01b00a1a5b9e206760bc15374.jpg,e047d04814647bcd8597538601ed1465.jpg'),
(10, 'Coconut Husked', 1, 12, 9, 4, '<p><em>COconut or kelapa</em></p>\r\n', 'Deskripsi Pendek', '1250', '3c97e236f2b239f86acacd9d639443d0.jpg,a55ddad3adbd4b29cc64ef5581d97930.jpg,fafd65904652930b68f7f108fd7e2e13.jpg'),
(13, 'test', 8, 8, 7, 5, '<p>qwwe</p>\r\n', 'wqe', '21321', '5ae6aaffe436045c710797655af3aed0.jpg,04edb1f80aacc6556ddb19f63ef76fa1.jpg'),
(14, 'Ikan Gurame', 9, 10, 4, 2, '', 'Segar dan besar', '20000', 'ad3648754b2192dccb19cf395217935e.png'),
(15, 'Ikan Salmon', 9, 10, 4, 3, '', 'Salmon segar premiun', '80000', '46b9d3a0fe8bdac67f65319b03f37418.png'),
(16, 'Tuna', 9, 10, 4, 8, '', 'Tuna segar besar', '90000', 'ae77294b569f80c96a77a500c7f76adc.png'),
(17, 'Lele', 9, 10, 4, 7, '', 'Ikan lele enak segar', '30000', '75c597770e98295d48e4233d25200c90.png'),
(18, 'Sunflower', 10, 14, 16, 9, '', 'Sunflower segar', '30000', '39ca1e2645cbb7661aa6f1647d54c870.png'),
(19, 'Edelweis', 10, 14, 16, 9, '', 'Bunga 100 tahun', '50', 'a1f0affd8d88ed0ac59529382b9cb433.png'),
(20, 'White Rose', 10, 14, 16, 9, '', 'Kualitas Premium', '30', '241ae5b03a91bddb58d822587e724bb8.png'),
(21, 'Tulip', 10, 14, 16, 9, '', 'Tulip warna warni', '15', '06fdd451623f699acbc0478718162ba9.png'),
(22, 'Anggrek', 10, 14, 16, 9, '', 'Anggrek ungu hidup', '40', '0cd6593742dc938e88b6b79bfdb1f52b.png'),
(23, 'Gelang rantai', 11, 13, 15, 14, '', 'Gelang rantai lucu', '10', '3bbec198326669fb416c980be9184321.png'),
(24, 'Gelang serut', 11, 13, 15, 14, '', 'Gelang serut anti karat', '15', '9cdd39749e547c09ab92a943ba7f6bc9.png'),
(25, 'Gelang tali', 11, 13, 15, 14, '', 'Gelang tali lucu', '10', 'fddff8f61dcdd6d4d289b101cf84a4d8.png'),
(26, 'Gelang rantai sederhana', 11, 13, 15, 14, '', 'Gelang rantai pink sederhana', '8', 'df5d9d3a43408870c1d1e0f5a15cc41e.png'),
(27, 'Gelang rantai titanium', 11, 13, 15, 14, '', 'Anti karat', '30', '8f9376e4d8a74e6d506907887786c5eb.png'),
(28, 'Whiskas Dry Food', 12, 15, 17, 11, '', 'Dry food kitten', '12', '34054287bcc832a4481460272b1ceabf.png'),
(29, 'Whiskas Dry Food Adult ', 12, 15, 17, 11, '', 'Dry Food for adult cat', '15', 'c04fadc54460b7ae494a34eed7ea276e.png'),
(30, 'Royal Canin', 12, 15, 17, 11, '', 'Dry Food for Adult and kitten', '40', '0c3862f083c85e899ab24d021b390de9.png'),
(31, 'Me-O Treats', 12, 15, 17, 11, '', 'Makanan ringan untuk kucing', '8', '81e82be964f137c4b525ee441220b1d2.png'),
(32, 'Royal Canin Wet Food', 12, 15, 17, 11, '', 'Wet Food for adult cat', '30', 'f0db801e85c40d8f9bc1e28fec3f9fa1.png'),
(33, 'Rajut Cardigans', 13, 16, 18, 15, '', 'Blue Cardigans sejuk', '50', '50fade34eaf4c825a88a5b983ca21528.png'),
(34, 'Crop Cardigans', 13, 16, 18, 16, '', 'Random ', '30', 'b6b8b2d63c0a0839c733292ed735890e.png'),
(35, 'Cardigan Lengan Pendek', 13, 16, 18, 16, '', 'Warna Hijau', '35', '5b384cd1f1c91c7f7ac4380ecae8c049.jpeg'),
(36, 'Random Rajut Cardigan', 13, 16, 18, 15, '', 'Random', '25', 'e8d2b4b548d310f2815ee1d89c3b9af9.png'),
(37, 'Baggy Jeans', 13, 16, 19, 17, '', 'Premium Baggy Jeans', '70', '125e11a251e57869490f25cece2e2fc2.png'),
(38, '1ply Face Mask (only sell large quantities)', 14, 20, 26, 31, '<pre>\r\nWe provide 1ply masks for hospital or hygiene</pre>\r\n', 'We provide 1ply masks for hospital or hygiene', '100', '0fb939b4a6eb8751b56f5a01098a1db7.png'),
(40, 'KN95 face mask ', 14, 20, 26, 32, '<p>We provide KN95 face masks for hospital or hygiene</p>\r\n', 'We provide KN95 face masks for hospital or hygiene', '150', 'a58d3771bf2e1849004560dec7be437e.jpeg'),
(41, 'Disposable Protective Clothing', 14, 20, 27, 34, '<p>Disposable Protective Clothing</p>\r\n', 'Disposable Protective Clothing', '500', '8e5bfd5657560de53a1ab886ecea9d2a.jpeg'),
(42, 'Surgical Gown', 14, 20, 27, 33, '<p>Surgical Gown</p>\r\n', 'Surgical Gown', '300', 'cd1cbb28fcee419815d0f2af62dba7f1.jpeg'),
(43, 'Badminton shuttlecock', 15, 19, 24, 28, '<p>Badminton shuttlecock from Balikpapan, Indonesia</p>\r\n', 'badminton shuttlecock', '100', '6239eab7334f583aa9986596412e074f.jpeg'),
(44, 'Badminton Net', 15, 19, 24, 27, '<p>Badminton Net from Balikpapan,Indonesia</p>\r\n', 'Badminton Net', '100', '8b9e1495a75f913101727e9c6a3e48b8.jpeg'),
(45, 'Volley Ball', 15, 19, 25, 29, '<p>Volley Ball from balikpapan, Indonesia</p>\r\n', 'Volley Ball', '100', '47e122aa70665388023b5af4cc403227.jpeg'),
(46, 'VolleyBall Net', 15, 19, 25, 30, '<p>VolleyBall Net</p>\r\n', 'VolleyBall Net', '100', '8acba83571910511bf78740538bf99b3.jpeg'),
(47, 'Cow Leather', 16, 18, 22, 23, '<p>Cow Leather from Surabaya, Indonesia</p>\r\n', 'Cow Leather ', '1000', '51785a5c38909ea73a283f1e9aea4b12.jpeg'),
(48, 'Goat Leather', 16, 18, 22, 24, '<p>Goat Leather</p>\r\n', 'Goat Leather', '1000', '97fc8112b867f827f82828b37241ca99.jpeg'),
(49, 'Leather wallet', 16, 18, 23, 25, '<p>Leather wallet</p>\r\n', 'Leather wallet', '1000', 'bbc17be75165091a589a829c3aee8827.jpeg'),
(50, 'Leather Shoes', 16, 18, 23, 26, '<p>Leather Shoes</p>\r\n', 'Leather Shoes', '1000', '58344ac2abc4813df68f36a9cd2d63f8.jpeg'),
(51, 'Rectangular Bin', 17, 17, 20, 19, '<p>Rectangular Bin</p>\r\n', 'Rectangular Bin', '1000', 'c1abd65f58a0719d1cc614ee91db5595.jpeg'),
(52, 'Plastic Trigger', 17, 17, 20, 20, '<p>Plastic Trigger</p>\r\n', 'Plastic Trigger', '1000', '6080f9d0610d9f2d5bf20f0b98f55236.jpeg'),
(53, 'Recycled Plastic Pellets', 17, 17, 21, 21, '<p>Recycled Plastic Pellets</p>\r\n', 'Recycled Plastic Pellets', '1000', '97f2ab9779f9ec0fedbbcf9b3b684be2.jpeg'),
(54, 'Pvc Film Scrap', 17, 17, 21, 22, '<p>Pvc Film Scrap</p>\r\n', 'Pvc Film Scrap', '1000', '56b77385d11dc4778f4c1dc3303e7b6e.jpeg');

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
(11, 12, 'Mango'),
(14, 13, 'Necklaces'),
(15, 13, 'Bracelets'),
(16, 14, 'Flowers'),
(17, 15, 'Animal Food'),
(18, 16, ' Cardigans'),
(19, 16, 'Denim'),
(20, 17, 'Plastic Items'),
(21, 17, 'Recycled Plastic\r\n'),
(22, 18, 'Animal Leather'),
(23, 18, 'Leather Product'),
(24, 19, 'Badminton'),
(25, 19, 'Volleyball'),
(26, 20, 'Face Mask'),
(27, 20, 'Medical Clothing');

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
(2, 4, 10, 'Gurami'),
(3, 4, 10, 'Salmon'),
(4, 9, 12, 'Coconut Husked'),
(5, 7, 8, 'Batle Axe'),
(7, 4, 10, 'Lele'),
(8, 4, 10, 'Tuna'),
(9, 16, 14, 'Fresh Flowers'),
(10, 16, 14, 'Artificial flowers'),
(11, 17, 15, 'Cat food'),
(12, 17, 15, 'Dog Food'),
(13, 1, 10, 'Udang'),
(14, 15, 13, 'Gelang imitasi'),
(15, 18, 16, 'Rajut'),
(16, 18, 16, 'Crop Cardigan'),
(17, 19, 16, 'Celana'),
(18, 19, 16, 'Atasan'),
(19, 20, 17, 'Rectangular Bin\r\n'),
(20, 20, 17, 'Plastic Trigger\n'),
(21, 21, 17, 'Recycled Plastic Pellets\r\n'),
(22, 21, 17, 'Pvc Film Scrap\r\n'),
(23, 22, 18, 'Cow Leather'),
(24, 22, 18, 'Goat Leather'),
(25, 23, 18, 'Leather wallets'),
(26, 23, 18, 'Leather Shoes'),
(27, 24, 19, 'Badminton Net'),
(28, 24, 19, 'Badminton Shuttlecock'),
(29, 25, 19, 'Volley Ball'),
(30, 25, 19, 'VolleyBall Net'),
(31, 26, 20, '1ply Face Mask'),
(32, 26, 20, 'KN95 Face Mask'),
(33, 27, 20, 'Surgical Gown\r\n'),
(34, 27, 20, 'Disposable Protective Clothing');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `idsupplier` int(11) NOT NULL,
  `namaUsaha` varchar(255) NOT NULL,
  `deskripsiPerusahaan` text NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telp` varchar(255) NOT NULL,
  `iduser` int(11) NOT NULL,
  `verify` int(1) NOT NULL,
  `tgl` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`idsupplier`, `namaUsaha`, `deskripsiPerusahaan`, `nama`, `email`, `telp`, `iduser`, `verify`, `tgl`) VALUES
(4, 'Toko Maju Jaya', 'Terus Maju', 'udin sapii', 'arif13.aw@gmail.com', '081805404140', 2, 2, '2023-12-04'),
(9, 'TradeId', 'Perusahaan Induk', 'Arif setyo wibowo', 'arif13.aw@gmail.com', '081805404140', 1, 2, '2023-12-05'),
(10, 'pt baru', 'baru', 'ronald', 'arif13.aw@gmail.com', '081805404140', 3, 1, '2023-12-05'),
(11, 'PT Sejahtera', 'ikan segar dengan kualitas mantap', 'Salsabila Arifa', 'arifaa@gmail.com', '081556406233', 4, 2, '2023-12-15'),
(12, 'PT Makmur', 'Macam-macam bunga di sini!!', 'Hanun Nabila', 'hanunabila@gmail.com', '082226456222', 8, 2, '2023-12-15'),
(13, 'PT Alda Sukses', 'Pernak pernik lucu ada ', 'alda nurry', 'inialda@gmail.com', '081556406224', 6, 2, '2023-12-15'),
(14, 'PT Bintang Abadi', 'Makanan Hewan Tersedia ', 'Geralda Alda', 'geralda123@gmail.com', '081236850123', 9, 2, '2023-12-15'),
(15, 'PT Baju Cantik', 'Tersedia Baju cantik dan murah premium', 'Faiq Sina', 'faiqsina@gmail.com', '08224640622', 13, 2, '2023-12-15'),
(16, 'Sejahtera Bintang Company', 'Serve with heart', 'Sejahtera Bintang Company', 'SejahteraCompany1@gmail.com', '+6281805404291', 36, 2, '2023-12-15'),
(17, 'Makmur Star Company', 'Selling quality goods', 'MakmurStar', 'MakmurStar@gmail.com', '628364069537', 37, 2, '2023-12-15'),
(18, 'Terbang Jauh Company', 'Sell ​​the items you want', 'Faisal Habibi Wildan', 'FaisalHW@gmail.com', '081805404291', 38, 2, '2023-12-15'),
(19, 'Next Level Store', 'Bring the thing that you want', 'Aris Iwa Syahputra', 'ArisSiwaS@gmail.com', '081805404791', 39, 2, '2023-12-15'),
(20, 'Last Choice Company', 'Our Company Have the goods u want', 'Zidan Islamy', 'ZidanISme@gmail.com', '081235404291', 40, 2, '2023-12-15'),
(24, 'Rumah Masak', 'Perum Citra surya mas BLOK D-12 RT 40 RW 10', 'Nando Arifin', 'arif13.aw@gmail.com', '081805404140', 44, 2, '2023-12-20');

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
(2, 'arifsw__', 'arif13.aw@gmail.com', '$2y$10$ua.RZRbGxl6HclYpYZk0YOxDfWJocbHhD9OW77r8hIGoqVBSmDHEC', 1, 'Arif setyo wibowo', 'Perum Citra surya mas BLOK D-12 RT 40 RW 10', '081805404140', 'Indonesia', NULL, NULL, NULL),
(3, 'baru', 'arif13.aw@gmail.com', '$2y$10$FCcZs4k27GYpfVx5JAHWzOkg1W.mAOs/uk6Da7wkPrpY2p7b5VcHK', NULL, 'baru', 'coba', '081805404140', 'Indonesia', NULL, NULL, NULL),
(4, 'salsaarifa', 'arifaa@gmail.com', '$2y$10$sJkMQCELrIhhc8PFbv8BOOFpbaf0jm8WLauJhFIfkZEeXKWP4lNhu', 1, 'Salsabila Arifa', 'Jl. Amir Mahmud IX, Surabaya', '081556406233', 'Indonesia', NULL, NULL, NULL),
(5, 'lala', 'lalale@gmail.com', '$2y$10$TVGFzq.s.zs8YuJ2JCscm.sRDRMWm90mY8pDstklNJq3uEvmf3kY2', NULL, 'Lala kana', 'Jl. Imam Bonjol', '081556605123', 'Philippines', NULL, NULL, NULL),
(6, 'alda', 'inialda@gmail.com', '$2y$10$/VR1/sKYTSa8Rg1PJR.3jONP2kRexoUAE0eRQAWU2k5SRME9iLYsO', 1, 'alda nurry', 'Karangtengah, sidoarjo', '081556406224', 'Indonesia', NULL, NULL, NULL),
(7, 'leena', 'leenana@gmail.com', '$2y$10$eyjuS1nXdPxL/R9Gk4ljdel4GSw4J2jbPPTTlccsp8YhNQyFHb5Ma', NULL, 'Leena Ibi', 'Jl Wonosalam', '081444666002', 'Qatar', NULL, NULL, NULL),
(8, 'hanun', 'hanunabila@gmail.com', '$2y$10$IdU6IXRgno3/C0ss04mp4e2dGyQ0iUHH8LYzDM8I3wVWOw.1ztasi', 1, 'Hanun Nabila', 'Keputih', '082226456222', 'Indonesia', NULL, NULL, NULL),
(9, 'geralda', 'geralda123@gmail.com', '$2y$10$NXIwCYWkJQfhWACKS14Cbe3WwF/mFnJwba9rX1NgLvQa6oFinqMkC', 1, 'Geralda Alda', 'Jl. Pahlawan Nomor 12', '081236850123', 'Indonesia', NULL, NULL, NULL),
(10, 'bara_', 'baraso@gmail.com', '$2y$10$kEiyfT1KbL9oXB7fzNnvhuOFUq6dTAba2nOTxt0ZYdE5ksgeZWH0u', NULL, 'Bara Yadi', 'Jl. Garuda', '082368145992', 'Laos', NULL, NULL, NULL),
(11, 'tino', 'sayatino@gmail.com', '$2y$10$aWDy.hqXwSPGNaTN8.vUIeMrRd36XUh2cOJEikx5ob0VX/uK2DGeq', NULL, 'Adi Tino', 'Jalan Supriyadi Nomor 25', '081774678471', 'Malaysia', NULL, NULL, NULL),
(12, 'taylor', 'taylor52@gmail.com', '$2y$10$Ac6MDQu8mShc3mNHGo7TpejwOXXLuMCYSz6Z/BmU94r.yg/iE8Y4.', NULL, 'Taylor Saya', 'Guwanghamun Street', '08226590301', 'Bulgaria', NULL, NULL, NULL),
(13, 'Faiq', 'faiqsina@gmail.com', '$2y$10$3xRjTli5n0ju1MBPLEsVJuB26NWOY1xTWftTszz5wdPQ9q87OiC8C', 1, 'Faiq Sina', 'Jalan Kertajaya Nomor 38', '082246406224', 'Indonesia', NULL, NULL, NULL),
(14, 'Ahmad', 'ahmadilan@gmail.com', '$2y$10$.MYZht72pvYUX7jAEtezA.wHkkHd80XgasmR8RNJqvoaJhkCJNdXG', NULL, 'Ahmad Dilan', 'Jalan Delima Agung', '082165789290', 'Turkey', NULL, NULL, NULL),
(15, 'Kaicantik', 'kailahui@gmail.com', '$2y$10$Uxx.Y0GvExAhZ7AeHojPEOY/NKqVIZ23xXSH9poMfxRDd6wLYtWU6', NULL, 'Hui Kaila', 'Kuina street', '081672407658', 'Taiwan', NULL, NULL, NULL),
(16, 'sienala', 'sasienala@gmail.com', '$2y$10$14o9xIBxrBuZMU3pK6IQWezds3dNIu0ugkA0sUoEZJqCk/9epjToW', NULL, 'Sa Siena', 'Jalan Anggrek Indah Nomor 8', '081556444888', 'Indonesia', NULL, NULL, NULL),
(17, 'Bintara_12', 'nurbintara@gmail.com', '$2y$10$mOtb1dYXYwwf7WzLpNu99OMw/b23Xb.MTZhham0GbpPh.9tjkfP9.', NULL, 'Bintara Nura', 'Jalan Cut Nyak Nomor 2', '081782550211', 'Afghanistan', NULL, NULL, NULL),
(18, 'karin', 'karinda@gmail.com', '$2y$10$wRxh5WkyybQ7h60vQm9lOebvGXjeLMrxSG4O3SwNt94V4ZY5fnm8G', NULL, 'Anggun Karin', 'Jalan Ronggo Nomor 7', '0824679214', 'Malaysia', NULL, NULL, NULL),
(19, 'akmalsaleh', 'akmal21@gmail.com', '$2y$10$M9E7ujaxtv32rTpAmHs4y.lav/alYAiXvEu1Q/qysjrVJzwdtZUfC', NULL, 'Akmal Saleh', 'Jalan Rungkut Mananggal Nomor 31', '08156783575', 'Singapore', NULL, NULL, NULL),
(20, 'iniazana', 'azanaya@gmail.com', '$2y$10$vkVJI.EbGwn8hKEQaRNkxeSA/ZfoGkyzpknE8e4LjbKkHf/9NUNt.', NULL, 'Azana Naya', 'rose street', '08215724498', 'Switzerland', NULL, NULL, NULL),
(21, 'Buyers1', 'Buyers1@gmail.com', '$2y$10$YAxHNyyCwCEEghVdUIusPuW7MelyjOWI2LrMHoEQWaLsIutSnyKhm', NULL, 'Rizaldinho', 'Rio Jainero Road 189', '081805404291', 'Brazil', NULL, NULL, NULL),
(22, 'Kimbimbab', 'Buyers2@gmail.com', '$2y$10$teun1VwWPBIZvzBS6cPF9uzbnPAfUEhpjamc0LyaUQpImj/SW0woK', NULL, 'Kim bim bab', 'Shanghai Road 192', '13052842190', 'China', NULL, NULL, NULL),
(23, 'Ruskyboy', 'Buyers3@gmail.com', '$2y$10$.RyFssvuBvfhxou0.ZVZWOoUGIV/8.gQDVZyimAJLp59ko.7NxsAy', NULL, 'Vladimir Udin', 'Moskow Road 78', '08452281675 ', 'Russia', NULL, NULL, NULL),
(24, 'IsmailBoi', 'Buyers4@gmail.com', '$2y$10$YYNEA4OSiuZ1Oj3puAVYmuQVKJg3icWuGS4dxwwCy51GqySz0Uv.G', NULL, 'Ismail Rahmad', 'Durian Runtuh Village 124', '0378763955 ', 'Malaysia', NULL, NULL, NULL),
(25, 'palgopal', 'buyers5@gmail.com', '$2y$10$FEzXfcTcufaM6RD.K0/sMujf5/qOjr82rSSdsD08gUKFNUOaQC/mC', NULL, 'gopal singh', 'Boboiboy Village Road 122', '0320782487 ', 'Malaysia', NULL, NULL, NULL),
(26, 'ichigoW', 'ichigow6@gmail.com', '$2y$10$dvbHnfbbpa4tp4P/2EVKCu.GOFsn2VqC3RwqMzuJogcjgX0.32ewC', NULL, 'Ichigo Kurosaki', 'Tokyo street 231', '01364068730', 'Japan', NULL, NULL, NULL),
(27, 'uzumaki9', 'uzumaki7@gmail.com', '$2y$10$qLN/w6pdZd40RtycNiQ9Ru1/TpA7YPH.vblYi7jjOniQIQIZl6h8y', NULL, 'Naruto Uzumaki', 'Kyoto Street 230', '01364068122', 'Japan', NULL, NULL, NULL),
(28, 'phantai2', 'Phantai8@gmail.com', '$2y$10$UmsRXaUB7pFoIHmSJUuFmO7vTVKLlvBbtcElj3Y0VpOLhqJodM0fu', NULL, 'Nguyen Phantai', 'Hanoi Street 343', '081364068642', 'Vietnam', NULL, NULL, NULL),
(29, 'Soap07', 'Soap9@gmail.com', '$2y$10$weCchluxidspsiX4GKUcz.eXsSiyo7kg4eULIjhVnin0h3AMPAKiG', NULL, 'John MacTavish', 'Manchester Street 1', '03787636332', 'United Kingdom', NULL, NULL, NULL),
(30, 'Caprice007', 'Caprice10@gmail.com', '$2y$10$uduN0pNH/1wuzX0KhW5wU.2dVjr4OninA7toPvekb6mQJpDbrNS4O', NULL, 'John Price', 'London street 7', '0378763234', 'United Kingdom', NULL, NULL, NULL),
(31, 'yamazaki', 'yamazaki11@gmail.com', '$2y$10$hqJt5jBg3/iQXy2tW0r3yO9lDccFs45pzLj6OCGBMdfcN2HHJbtK.', NULL, 'Yamazaki Jonggun', 'Shibuya Street 404', '01364069532', 'Japan', NULL, NULL, NULL),
(32, 'Maguire', 'Maguire12@gmail.com', '$2y$10$WjpADpaY6jxg/ybHGkspP.0QV0SfEeqqS4RAbg39kAFv3xXLA6.9u', NULL, 'Harry Maguire', 'Manchester Street 5', '01364069537', 'United Kingdom', NULL, NULL, NULL),
(33, 'Ulhaqq', 'Ulhaq13@gmail.com', '$2y$10$cAuPP.W66VFir.ga8k1UtOjlySITnFFYRi0xdgiYtv8XJH5Fg.glu', NULL, 'Muhammad Dhiya Ulhaq', 'Negeri Sembilan Street 14', '013640683536', 'Malaysia', NULL, NULL, NULL),
(34, 'Kukhan', 'kuumarkhan14@gmail.com', '$2y$10$cqnKKN1IWgJFo6D9J4.1LepNfgOIDPjOMAyrx.g1vAOQCJyCgIvqy', NULL, 'Kuumar Khan', 'Mumbai Street 91', '081805409632', 'India', NULL, NULL, NULL),
(35, 'ArifSyah', 'ArifSyah@gmail.com', '$2y$10$nHyGVCWzz07jpSEEoU1GgeUFO5/6heGDixMQKvjlWl053eTlV03JS', NULL, 'Arif Syahputra', 'Bandar Seri Bengawan Street 422', '081805492412', 'Brunei', NULL, NULL, NULL),
(36, 'AhmadRafi', 'AhmadRafi1@gmail.com', '$2y$10$xstH8Zml2fjz0JvBFHzg..iLCQ6T.sOT7i9gtEHNiPWpiRsNDmwES', 1, 'Ahmad Rafi Aditya', 'Tenggilis Highway Street 101', '08143505404', 'Indonesia', NULL, NULL, NULL),
(37, 'DafaMaulana', 'DafaMaulana@gmail.com', '$2y$10$3pzxlfPgxsPMQ9Q6d0KbL.d1Nw6Oavu/ZsRcwvwgQPwibEz/jTu/m', 1, 'Dafa Maulana', 'Tenggilis HIghway Street 42', '081805404291', 'Indonesia', NULL, NULL, NULL),
(38, 'FaisalHW', 'FaisalHW@gmail.com', '$2y$10$aV0hPp2SE1yJhCSJ6vXqruWw9eQcbi4To00.ENlAKXuuZ93.BmnFS', 1, 'Faisal Habibi Wildan', 'Balongsari Street 225', '081205409632', 'Indonesia', NULL, NULL, NULL),
(39, 'ArisSiwaS', 'ArisSiwaS@gmail.com', '$2y$10$tOZ9etv8yIytuVXHuxy7xu2cGLTEQ3VgWOjFifZeups3UXBwtgqEC', 1, 'Aris Iwa Syahputra', 'Balikpapan Street 23', '081805404791', 'Indonesia', NULL, NULL, NULL),
(40, 'ZidanIs', 'ZidanISme@gmail.com', '$2y$10$GAGpt17r6ppByU3NjoZor.3Lzhx0CinY67dzLHe3OlbQch3W3.m4C', 1, 'Zidan Islamy', 'Kedungpring Street 23', '081235404291', 'Indonesia', NULL, NULL, NULL),
(41, 'test', 'arif13.aw@gmail.com', '$2y$10$R5wXSwOzS7JWubeatGNWEOTLD7XxKvfNo5fP/5RsJI3nSRLwgk7Ia', 1, 'dsa', 'Perum Citra surya mas BLOK D-12 RT 40 RW 10', '081805404140', 'Indonesia', NULL, NULL, NULL),
(42, 'saiful', 'arif13.aw@gmail.com', '$2y$10$q3YT.RN6.E6BKrV4GHGfvu9A6AnGasqlsZ.wu8KOFXviBEcgyk3Fe', 1, 'arif13.aw@gmail.com', 'Perum Citra surya mas BLOK D-12 RT 40 RW 10', '081805404140', 'Indonesia', NULL, NULL, NULL),
(43, 'rudi', 'arif13.aw@gmail.com', '$2y$10$bhseaOxWi8ShtKjToZkPKO130vSpFQW3BHDYS.5QHUkGFS2yu4n8C', 1, 'arif13.aw@gmail.com', 'Perum Citra surya mas BLOK D-12 RT 40 RW 10', '081805404140', 'Indonesia', NULL, NULL, NULL),
(44, 'nando', 'nando@gmail.com', '$2y$10$QDS8RSMRbaJ7E.mlAaFmhe1BqdrnjiIF/JAELG3ihTCfS2ANukph2', 1, 'Nando Arifin', 'Singapura', '028398123', 'Indonesia', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`idadmin`);

--
-- Indexes for table `buyer`
--
ALTER TABLE `buyer`
  ADD PRIMARY KEY (`idbuyer`);

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
-- Indexes for table `facility`
--
ALTER TABLE `facility`
  ADD PRIMARY KEY (`idfacility`);

--
-- Indexes for table `inquire`
--
ALTER TABLE `inquire`
  ADD PRIMARY KEY (`idinquire`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`idkategori`);

--
-- Indexes for table `komen`
--
ALTER TABLE `komen`
  ADD PRIMARY KEY (`idkomen`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`idmember`);

--
-- Indexes for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`idpembelian`);

--
-- Indexes for table `posting`
--
ALTER TABLE `posting`
  ADD PRIMARY KEY (`idposting`);

--
-- Indexes for table `premium`
--
ALTER TABLE `premium`
  ADD PRIMARY KEY (`idpremium`);

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
  MODIFY `idadmin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `buyer`
--
ALTER TABLE `buyer`
  MODIFY `idbuyer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `idcompany` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `databuyer`
--
ALTER TABLE `databuyer`
  MODIFY `iddatabuyer` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `facility`
--
ALTER TABLE `facility`
  MODIFY `idfacility` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `inquire`
--
ALTER TABLE `inquire`
  MODIFY `idinquire` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `idkategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `komen`
--
ALTER TABLE `komen`
  MODIFY `idkomen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `idmember` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `pembelian`
--
ALTER TABLE `pembelian`
  MODIFY `idpembelian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `posting`
--
ALTER TABLE `posting`
  MODIFY `idposting` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `premium`
--
ALTER TABLE `premium`
  MODIFY `idpremium` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `idproduct` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `subkategori_a`
--
ALTER TABLE `subkategori_a`
  MODIFY `idsubkategori_a` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `subkategori_b`
--
ALTER TABLE `subkategori_b`
  MODIFY `idsubkategori_b` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `idsupplier` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

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
