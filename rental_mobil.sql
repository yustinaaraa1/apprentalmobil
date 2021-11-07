-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 22, 2021 at 02:33 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rental_mobil`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(133) NOT NULL,
  `username` varchar(144) NOT NULL,
  `password` varchar(133) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id_customer` int(11) NOT NULL,
  `nama` varchar(133) NOT NULL,
  `username` varchar(133) NOT NULL,
  `alamat` varchar(133) NOT NULL,
  `gender` varchar(133) NOT NULL,
  `no_telepon` varchar(33) NOT NULL,
  `no_ktp` varchar(51) NOT NULL,
  `password` varchar(199) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id_customer`, `nama`, `username`, `alamat`, `gender`, `no_telepon`, `no_ktp`, `password`, `role_id`) VALUES
(10, 'Admin', 'a', 'admin', 'Laki-laki', '9845387954', '8974894739', '0cc175b9c0f1b6a831c399e269772661', 1),
(11, 'Narys', 'b', 'Watoone', 'Laki-laki', '98879889', '9459348938', '92eb5ffee6ae2fec3ad71c777531578f', 2),
(12, 'WATOONE', 'c', 'Watoone', 'perempuan', '98879889', '9459348938', '4a8a08f09d37b73795649038408b5f33', 1),
(13, 'Witihama', 'd', 'Narys', 'Laki-laki', '98879889', '84965186484878', '8277e0910d750195b448797616e091ad', 2);

-- --------------------------------------------------------

--
-- Table structure for table `mobil`
--

CREATE TABLE `mobil` (
  `id_mobil` int(11) NOT NULL,
  `kode_type` varchar(133) NOT NULL,
  `merk` varchar(133) NOT NULL,
  `no_plat` varchar(33) NOT NULL,
  `warna` varchar(33) NOT NULL,
  `tahun` varchar(4) NOT NULL,
  `status` varchar(51) NOT NULL,
  `gambar` varchar(311) NOT NULL,
  `harga` int(11) NOT NULL,
  `denda` int(11) NOT NULL,
  `ac` int(11) NOT NULL,
  `supir` int(11) NOT NULL,
  `mp3_player` int(11) NOT NULL,
  `central_lock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mobil`
--

INSERT INTO `mobil` (`id_mobil`, `kode_type`, `merk`, `no_plat`, `warna`, `tahun`, `status`, `gambar`, `harga`, `denda`, `ac`, `supir`, `mp3_player`, `central_lock`) VALUES
(1, 'SDN', 'Avansa Toyota', 'B1457 FOH', 'Hitam', '2014', '0', 'Avanza_Toyota.jpg', 400000, 300000, 1, 0, 0, 0),
(21, 'SDN', 'Inovva Kijangi', 'AB8968CD', 'Abu-Abu', '2021', '0', 'Inovva_Kijang.jpg', 0, 0, 0, 0, 0, 0),
(25, 'SDN', 'Toyota', 'Ab9484KW', 'Hitam', '2018', '0', 'product-6-720x480.jpg', 0, 0, 0, 0, 0, 0),
(26, 'SDN', 'Toyota', 'AB8968CD', 'Putih', '2018', '1', 'product-3-720x480.jpg', 300000, 100000, 1, 1, 1, 1),
(27, 'SDN', 'Inovva Kijang', 'Ab1996KW', 'Abu-Abu', '2021', '1', 'blog-3-720x480.jpg', 1, 1, 0, 0, 1, 1),
(28, 'MNV', 'Avansa', 'AB8968CD', 'Merah', '2021', '1', 'offer-1-720x480.jpg', 0, 0, 0, 0, 0, 0),
(29, 'MNV', 'kj', 'Ab9484KW', 'Merah', '2021', '1', 'Inovva_Kijang1.jpg', 1, 0, 1, 1, 1, 1),
(30, 'SDN', 'Toyota', 'Ab9484KW', 'Hitam', '2021', '1', 'comment-author-031.jpg', 7878787, 131, 1, 1, 1, 1),
(31, 'SDN', 'khjk', 'Ab9484KW', 'Abu-Abu', '2021', '1', '', 1, 131, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `rental`
--

CREATE TABLE `rental` (
  `id_rental` int(11) NOT NULL,
  `id_customer` int(11) NOT NULL,
  `tanggal_rental` date NOT NULL,
  `tanggal_kembali` date NOT NULL,
  `tanggal_pengembalian` date NOT NULL,
  `status_rental` varchar(51) NOT NULL,
  `status_pengembalian` varchar(51) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_rental` int(11) NOT NULL,
  `id_customer` int(11) NOT NULL,
  `id_mobil` int(11) NOT NULL,
  `tanggal_rental` date NOT NULL,
  `tanggal_kembali` date NOT NULL,
  `harga` varchar(119) NOT NULL,
  `denda` varchar(99) NOT NULL,
  `total_denda` varchar(119) NOT NULL,
  `tanggal_pengembalian` date NOT NULL,
  `status_pengembalian` varchar(51) NOT NULL,
  `status_rental` varchar(51) NOT NULL,
  `bukti_pembayaran` varchar(119) NOT NULL,
  `status_pembayaran` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_rental`, `id_customer`, `id_mobil`, `tanggal_rental`, `tanggal_kembali`, `harga`, `denda`, `total_denda`, `tanggal_pengembalian`, `status_pengembalian`, `status_rental`, `bukti_pembayaran`, `status_pembayaran`) VALUES
(19, 11, 1, '2021-09-01', '2021-09-03', '400000', '300000', '3300000', '2021-09-14', 'Kembali', 'Selesai', 'WhatsApp_Image_2021-07-22_at_18_03_392.jpeg', 1),
(20, 11, 21, '2021-09-13', '2021-09-15', '0', '0', '0', '2021-09-13', 'Kembali', 'Selesai', 'Narys7.jpeg', 1),
(22, 11, 25, '2021-09-25', '2021-09-20', '0', '0', '0', '0000-00-00', 'Belum_kambali', 'Belum_selesai', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `id_type` int(11) NOT NULL,
  `kode_type` varchar(99) NOT NULL,
  `nama_type` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`id_type`, `kode_type`, `nama_type`) VALUES
(1, 'SDN', 'Sedan'),
(2, 'MNV', 'Minivan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_customer`);

--
-- Indexes for table `mobil`
--
ALTER TABLE `mobil`
  ADD PRIMARY KEY (`id_mobil`);

--
-- Indexes for table `rental`
--
ALTER TABLE `rental`
  ADD PRIMARY KEY (`id_rental`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_rental`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`id_type`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id_customer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `mobil`
--
ALTER TABLE `mobil`
  MODIFY `id_mobil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `rental`
--
ALTER TABLE `rental`
  MODIFY `id_rental` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_rental` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
  MODIFY `id_type` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
