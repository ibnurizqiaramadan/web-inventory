-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2025 at 03:47 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventory`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `telepon` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `username`, `password`, `nama`, `telepon`, `foto`) VALUES
(12, 'a', '0cc175b9c0f1b6a831c399e269772661', 'admin', '0812838281', '18122024220950Miracle-.jpg'),
(20, 'evry', 'd2530831c53e0a3fa7b0ffb68a010cc0', 'Evry', '08121314151617', '11012025214727pngwing.com.png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_ajuan`
--

CREATE TABLE `tb_ajuan` (
  `no_ajuan` int(11) NOT NULL,
  `tanggal` varchar(255) NOT NULL,
  `kode_brg` varchar(11) NOT NULL,
  `nama_brg` varchar(255) NOT NULL,
  `stok` int(11) NOT NULL,
  `jml_ajuan` int(11) NOT NULL,
  `petugas` varchar(255) NOT NULL,
  `val` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_ajuan`
--

INSERT INTO `tb_ajuan` (`no_ajuan`, `tanggal`, `kode_brg`, `nama_brg`, `stok`, `jml_ajuan`, `petugas`, `val`) VALUES
(1000, '2025-01-12', '800', 'NAVIGATIONAL ECHO SOUNDER', 2500, 200, 'andi', 0),
(1002, '2025-01-12', '800', 'NAVIGATIONAL ECHO SOUNDER', 5000, 500, 'andi', 0),
(1004, '2025-01-12', '800', 'NAVIGATIONAL ECHO SOUNDER', 4450, 50, 'andi', 0),
(20182324, '2025-01-12', '800', 'NAVIGATIONAL ECHO SOUNDER', 5500, 2000, 'andi', 0),
(20182325, '2025-01-12', '800', 'NAVIGATIONAL ECHO SOUNDER', 4500, 500, 'andi', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_barang`
--

CREATE TABLE `tb_barang` (
  `kode_brg` int(11) NOT NULL,
  `nama_brg` varchar(255) NOT NULL,
  `stok` int(11) NOT NULL,
  `rak` varchar(255) NOT NULL,
  `supplier` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_barang`
--

INSERT INTO `tb_barang` (`kode_brg`, `nama_brg`, `stok`, `rak`, `supplier`) VALUES
(800, 'NAVIGATIONAL ECHO SOUNDER', 4450, 'RAK-001', 'PT Furuno Electric Indonesia');

-- --------------------------------------------------------

--
-- Table structure for table `tb_barang_in`
--

CREATE TABLE `tb_barang_in` (
  `id_brg_in` int(11) NOT NULL,
  `tanggal` varchar(255) NOT NULL,
  `noinv` varchar(11) NOT NULL,
  `supplier` varchar(255) NOT NULL,
  `kode_brg` varchar(11) NOT NULL,
  `nama_brg` varchar(255) NOT NULL,
  `stok` int(11) NOT NULL,
  `jml_masuk` int(11) NOT NULL,
  `jam` varchar(255) NOT NULL,
  `petugas` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_barang_in`
--

INSERT INTO `tb_barang_in` (`id_brg_in`, `tanggal`, `noinv`, `supplier`, `kode_brg`, `nama_brg`, `stok`, `jml_masuk`, `jam`, `petugas`) VALUES
(11, '2024-12-19', '637800', 'PT Furuno Electric Indonesia', '800', 'NAVIGATIONAL ECHO SOUNDER', 100, 200, '06:11 am', 'andi'),
(12, '2025-01-12', '637801', 'PT Furuno Electric Indonesia', '800', 'NAVIGATIONAL ECHO SOUNDER', 300, 500, '04:12 am', 'andi'),
(14, '2025-01-12', '637801-1736', 'PT Furuno Electric Indonesia', '800', 'NAVIGATIONAL ECHO SOUNDER', 1300, 500, '04:18 am', 'andi'),
(15, '2025-01-12', '637802', 'PT Furuno Electric Indonesia', '800', 'NAVIGATIONAL ECHO SOUNDER', 1200, 1500, '04:21 am', 'andi'),
(16, '2025-01-12', '313131', 'PT Furuno Electric Indonesia', '800', 'NAVIGATIONAL ECHO SOUNDER', -2500, 10000, '08:59 am', 'andi');

-- --------------------------------------------------------

--
-- Table structure for table `tb_barang_out`
--

CREATE TABLE `tb_barang_out` (
  `no_brg_out` int(11) NOT NULL,
  `no_ajuan` int(11) NOT NULL,
  `tanggal_ajuan` varchar(255) NOT NULL,
  `tanggal_out` varchar(255) NOT NULL,
  `petugas` varchar(255) NOT NULL,
  `kode_brg` varchar(11) NOT NULL,
  `nama_brg` varchar(255) NOT NULL,
  `stok` int(11) NOT NULL,
  `jml_ajuan` int(11) NOT NULL,
  `jml_keluar` int(11) NOT NULL,
  `admin` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_barang_out`
--

INSERT INTO `tb_barang_out` (`no_brg_out`, `no_ajuan`, `tanggal_ajuan`, `tanggal_out`, `petugas`, `kode_brg`, `nama_brg`, `stok`, `jml_ajuan`, `jml_keluar`, `admin`) VALUES
(2013, 20182325, '2025-01-12', '2025-01-12', 'andi', '800', 'NAVIGATIONAL ECHO SOUNDER', 5000, 500, 500, 'admin'),
(3131, 20182324, '2025-01-12', '2025-01-12', 'andi', '800', 'NAVIGATIONAL ECHO SOUNDER', 7500, 2000, 2000, 'admin'),
(100022, 1003, '2025-01-12', '2025-01-12', 'andi', '800', 'NAVIGATIONAL ECHO SOUNDER', 2500, 5000, 5000, 'admin'),
(100023, 1002, '2025-01-12', '2025-01-12', 'andi', '800', 'NAVIGATIONAL ECHO SOUNDER', 5500, 500, 500, 'admin'),
(100024, 1004, '2025-01-12', '2025-01-12', 'andi', '800', 'NAVIGATIONAL ECHO SOUNDER', 4500, 50, 50, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tb_petugas`
--

CREATE TABLE `tb_petugas` (
  `id_petugas` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `telepon` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_petugas`
--

INSERT INTO `tb_petugas` (`id_petugas`, `username`, `password`, `nama`, `telepon`) VALUES
(18, 'andi', '0cc175b9c0f1b6a831c399e269772661', 'andi', '12312341415');

-- --------------------------------------------------------

--
-- Table structure for table `tb_rak`
--

CREATE TABLE `tb_rak` (
  `id_rak` int(11) NOT NULL,
  `nama_rak` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_rak`
--

INSERT INTO `tb_rak` (`id_rak`, `nama_rak`) VALUES
(1, 'RAK-001');

-- --------------------------------------------------------

--
-- Table structure for table `tb_sup`
--

CREATE TABLE `tb_sup` (
  `id_sup` int(11) NOT NULL,
  `nama_sup` varchar(255) NOT NULL,
  `kontak_sup` varchar(255) NOT NULL,
  `alamat_sup` text NOT NULL,
  `telepon_sup` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_sup`
--

INSERT INTO `tb_sup` (`id_sup`, `nama_sup`, `kontak_sup`, `alamat_sup`, `telepon_sup`) VALUES
(1, 'PT Furuno Electric Indonesia', 'fid@furuno.id', 'Menara Ravindo, Jl. Kebon Sirih No.14 Kav.75, Kb. Sirih, Kec. Menteng, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10340', '(021) 3903540');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tb_ajuan`
--
ALTER TABLE `tb_ajuan`
  ADD PRIMARY KEY (`no_ajuan`);

--
-- Indexes for table `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`kode_brg`);

--
-- Indexes for table `tb_barang_in`
--
ALTER TABLE `tb_barang_in`
  ADD PRIMARY KEY (`id_brg_in`);

--
-- Indexes for table `tb_barang_out`
--
ALTER TABLE `tb_barang_out`
  ADD PRIMARY KEY (`no_brg_out`);

--
-- Indexes for table `tb_petugas`
--
ALTER TABLE `tb_petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indexes for table `tb_rak`
--
ALTER TABLE `tb_rak`
  ADD PRIMARY KEY (`id_rak`);

--
-- Indexes for table `tb_sup`
--
ALTER TABLE `tb_sup`
  ADD PRIMARY KEY (`id_sup`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tb_ajuan`
--
ALTER TABLE `tb_ajuan`
  MODIFY `no_ajuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20182326;

--
-- AUTO_INCREMENT for table `tb_barang_in`
--
ALTER TABLE `tb_barang_in`
  MODIFY `id_brg_in` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tb_petugas`
--
ALTER TABLE `tb_petugas`
  MODIFY `id_petugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tb_rak`
--
ALTER TABLE `tb_rak`
  MODIFY `id_rak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_sup`
--
ALTER TABLE `tb_sup`
  MODIFY `id_sup` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
