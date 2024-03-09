-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2023 at 05:04 PM
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
-- Database: `dataset`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_aset`
--

CREATE TABLE `tb_aset` (
  `id` varchar(200) NOT NULL,
  `nama_aset` varchar(200) NOT NULL,
  `jenis_aset` varchar(200) NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `foto` varchar(1200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_aset`
--

INSERT INTO `tb_aset` (`id`, `nama_aset`, `jenis_aset`, `tanggal_masuk`, `foto`) VALUES
('12345', 'Lemari', 'Perkakas', '2023-02-10', 'lemari.jpg'),
('123456', 'Kursi', 'Perkakas', '2023-02-08', 'kursi.jpg'),
('1234567', 'Mobil', 'Kendaraan', '2023-03-10', 'mangga2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_asettanah`
--

CREATE TABLE `tb_asettanah` (
  `id` int(11) NOT NULL,
  `namatanah` varchar(100) NOT NULL,
  `statustanah` varchar(20) NOT NULL,
  `luas` varchar(50) NOT NULL,
  `nomorsertifikat` varchar(200) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_asettanah`
--

INSERT INTO `tb_asettanah` (`id`, `namatanah`, `statustanah`, `luas`, `nomorsertifikat`, `alamat`, `foto`) VALUES
(3, 'Tanah Wakaf 2', 'Hak Milik', '20000 hektar', '000000', 'Klaten', 'photo_2023-02-23_22-03-58.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_asettidakbergerak`
--

CREATE TABLE `tb_asettidakbergerak` (
  `id` varchar(100) NOT NULL,
  `nama_aset` varchar(200) NOT NULL,
  `jenis_aset` varchar(200) NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `foto` varchar(1200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_asettidakbergerak`
--

INSERT INTO `tb_asettidakbergerak` (`id`, `nama_aset`, `jenis_aset`, `tanggal_masuk`, `foto`) VALUES
('1', 'kasja', 'Perkakas', '2023-02-13', 'IMG_3228.jpg'),
('1233', 'Lemari', 'Perkakas', '2023-03-10', 'lemari.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_asetuang`
--

CREATE TABLE `tb_asetuang` (
  `id` int(11) NOT NULL,
  `nominal` varchar(100) NOT NULL,
  `ket_kebutuhan` varchar(250) NOT NULL,
  `status` enum('Pinjaman','Sumbangan') NOT NULL,
  `keterangan` enum('Berhasil','BelumBerhasil') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_asetuang`
--

INSERT INTO `tb_asetuang` (`id`, `nominal`, `ket_kebutuhan`, `status`, `keterangan`) VALUES
(1, '100000', 'Uang Keluar', 'Sumbangan', 'Berhasil'),
(2, '200000', 'Uang Keluar', 'Pinjaman', 'Berhasil'),
(4, '200000', 'Uang', 'Sumbangan', 'Berhasil');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_aset`
--
ALTER TABLE `tb_aset`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_asettanah`
--
ALTER TABLE `tb_asettanah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_asettidakbergerak`
--
ALTER TABLE `tb_asettidakbergerak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_asetuang`
--
ALTER TABLE `tb_asetuang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_asettanah`
--
ALTER TABLE `tb_asettanah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_asetuang`
--
ALTER TABLE `tb_asetuang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
