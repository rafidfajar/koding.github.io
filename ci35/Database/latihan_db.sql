-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2022 at 02:32 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `latihan_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `barang_id` varchar(4) NOT NULL,
  `nama_barang` varchar(20) NOT NULL,
  `harga` double NOT NULL,
  `qty` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`barang_id`, `nama_barang`, `harga`, `qty`) VALUES
('B001', 'sepatuu', 900000, 2),
('B002', 'tas', 50000, 1),
('B003', 'jaket', 100000, 3),
('B004', 'celana', 70000, 3);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` varchar(4) NOT NULL,
  `nama_customer` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `telpon` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `nama_customer`, `alamat`, `telpon`) VALUES
('A001', 'monkey', 'kalibata', '08138252'),
('A002', 'tigor', 'medan', '08577971083');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_transaksi`
--

CREATE TABLE `tbl_transaksi` (
  `no_faktur` varchar(13) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `kode_customer` varchar(10) DEFAULT NULL,
  `nama_customer` varchar(50) DEFAULT NULL,
  `kode_barang` varchar(10) DEFAULT NULL,
  `nama_barang` varchar(50) DEFAULT NULL,
  `harga` double DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `total_bayar` double DEFAULT NULL,
  `pajak` double DEFAULT NULL,
  `grand_total` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_transaksi`
--

INSERT INTO `tbl_transaksi` (`no_faktur`, `tanggal`, `kode_customer`, `nama_customer`, `kode_barang`, `nama_barang`, `harga`, `qty`, `total_bayar`, `pajak`, `grand_total`) VALUES
('FK0001', '2022-12-02 03:25:20', 'A001', 'monkey', 'B001', 'sepatuu', 900000, 1, 900000, 99000, 999000),
('FK0002', '2022-12-02 03:35:17', 'A001', 'monkey', 'B002', 'tas', 50000, 2, 100000, 11000, 111000),
('FK0003', '2022-12-02 03:35:37', 'A001', 'monkey', 'B003', 'jaket', 100000, 3, 300000, 33000, 333000),
('FK0004', '2022-12-02 03:51:32', 'A001', 'monkey', 'B002', 'tas', 50000, 4, 200000, 22000, 222000),
('FK0005', '2022-12-02 03:52:53', 'A002', 'tigor', 'B004', 'celana', 70000, 4, 280000, 30800, 310800),
('FK0006', '2022-12-09 03:32:41', 'A001', 'monkey', 'B004', 'celana', 70000, 3, 210000, 23100, 233100);

-- --------------------------------------------------------

--
-- Table structure for table `tb_gambar`
--

CREATE TABLE `tb_gambar` (
  `id` int(11) NOT NULL,
  `deskripsi` varchar(100) DEFAULT NULL,
  `nama_file` varchar(100) DEFAULT NULL,
  `ukuran_file` double DEFAULT NULL,
  `tipe_file` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_gambar`
--

INSERT INTO `tb_gambar` (`id`, `deskripsi`, `nama_file`, `ukuran_file`, `tipe_file`) VALUES
(1, 'rahut kuu', 'tot.jpg', 44.84, 'image/jpeg'),
(2, 'gambar', '3.jpg', 2.63, 'image/jpeg'),
(3, 'gambar', '31.jpg', 2.63, 'image/jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`barang_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  ADD PRIMARY KEY (`no_faktur`);

--
-- Indexes for table `tb_gambar`
--
ALTER TABLE `tb_gambar`
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_gambar`
--
ALTER TABLE `tb_gambar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
