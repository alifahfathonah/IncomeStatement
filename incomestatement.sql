-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2021 at 08:34 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `incomestatement`
--

-- --------------------------------------------------------

--
-- Table structure for table `periode_laba_rugi`
--

CREATE TABLE `periode_laba_rugi` (
  `id` int(11) NOT NULL,
  `penjualan` int(64) NOT NULL DEFAULT 0,
  `retur_penjualan` int(64) NOT NULL DEFAULT 0,
  `potongan_harga` int(64) NOT NULL DEFAULT 0,
  `persediaan_barang_jadi_awal` int(64) NOT NULL DEFAULT 0,
  `harga_pokok_produksi` int(64) NOT NULL,
  `persediaan_barang_akhir` int(64) NOT NULL,
  `total_biaya_operasional` int(64) NOT NULL,
  `total_biaya_administrasi_umum` int(64) NOT NULL,
  `pendapatan_bunga` int(64) NOT NULL,
  `keuntungan_investasi` int(64) NOT NULL,
  `pendapatan_lain` int(64) NOT NULL,
  `beban_bunga` int(64) NOT NULL,
  `kerugian_penjualan` int(64) NOT NULL,
  `kerugian_lain` int(64) NOT NULL,
  `pajak` int(64) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `periode_laba_rugi`
--

INSERT INTO `periode_laba_rugi` (`id`, `penjualan`, `retur_penjualan`, `potongan_harga`, `persediaan_barang_jadi_awal`, `harga_pokok_produksi`, `persediaan_barang_akhir`, `total_biaya_operasional`, `total_biaya_administrasi_umum`, `pendapatan_bunga`, `keuntungan_investasi`, `pendapatan_lain`, `beban_bunga`, `kerugian_penjualan`, `kerugian_lain`, `pajak`, `created_at`) VALUES
(3, 100000000, 13000000, 2000000, 9700000, 1500000, 900000, 346900, 1345600, 1500000, 600000, 1200000, 8000000, 1200000, 0, 2000000, '2021-12-04 17:01:10'),
(5, 12050000, 500000, 300000, 1200000, 1500000, 1200000, 500000, 250000, 1345000, 560000, 1230000, 2300500, 204000, 13678, 1256700, '2021-12-20 07:11:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `periode_laba_rugi`
--
ALTER TABLE `periode_laba_rugi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `periode_laba_rugi`
--
ALTER TABLE `periode_laba_rugi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
