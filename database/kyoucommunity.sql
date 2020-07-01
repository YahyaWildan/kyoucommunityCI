-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2020 at 01:09 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kyoucommunity`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama_lengkap` varchar(200) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `no_hp` varchar(25) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `waktu_input_data` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_lengkap`, `username`, `password`, `no_hp`, `foto`, `waktu_input_data`) VALUES
(1, 'Arief', 'rif.id', 'rif123', '091', 'rif.jpg', '2020-03-29 01:36:32'),
(3, 'ywild', 'admin', 'admin123', '092', 'admin.jpg', '2020-03-29 01:42:13'),
(4, 'Luhung', 'Luhung', 'luhung123', '093', 'luhung.jpg', '2020-03-29 01:41:20');

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `id_anggota` int(11) NOT NULL,
  `nama_lengkap` varchar(200) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `tempat_lahir` varchar(200) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(25) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `waktu_input_data` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`id_anggota`, `nama_lengkap`, `username`, `email`, `password`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `no_hp`, `foto`, `waktu_input_data`) VALUES
(27, '', 'Meme', 'meme@gmail.com', '9c2f924fb2f7004e7979ab2027ca1d65', '', '0000-00-00', '', '', '', '2020-06-23 02:17:29'),
(28, '', 'yahya', 'yahya@gmail.com', '202cb962ac59075b964b07152d234b70', '', '0000-00-00', '', '', '', '2020-06-23 15:42:01'),
(29, 'Ywild', 'ya', 'ya@ya', '202cb962ac59075b964b07152d234b70', 'Batang', '2000-08-20', ' Batang    ', '123', 'assets/img/anggota/20-06-30_07-15-47pmScreenshot_2020-04-25_Calob_Castellon_(_calop_)_•_Foto_dan_video_Instagram.png', '2020-06-30 17:15:48'),
(30, 'maylinda', 'may', 'may@g', '202cb962ac59075b964b07152d234b70', 'rembang', '2000-06-12', ' rembang  ', '321', 'assets/img/anggota/default.png', '2020-06-30 17:20:41'),
(31, '', 'kuy', 'kuy@k', '202cb962ac59075b964b07152d234b70', '', '0000-00-00', '  ', '', 'assets/img/anggota/assets/img/anggota/default.png', '2020-06-30 17:21:48');

-- --------------------------------------------------------

--
-- Table structure for table `anggota_divisi`
--

CREATE TABLE `anggota_divisi` (
  `id_anggota_divisi` int(11) NOT NULL,
  `id_divisi` int(11) NOT NULL,
  `id_anggota` int(11) NOT NULL,
  `waktu_anggota_input` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(11) NOT NULL DEFAULT 0,
  `id_admin` int(11) DEFAULT NULL,
  `waktu_admin_konfirmasi` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anggota_divisi`
--

INSERT INTO `anggota_divisi` (`id_anggota_divisi`, `id_divisi`, `id_anggota`, `waktu_anggota_input`, `status`, `id_admin`, `waktu_admin_konfirmasi`) VALUES
(16, 6, 23, '2020-06-09 14:12:48', 1, 1, '2020-06-09 14:12:48'),
(24, 8, 23, '2020-06-09 15:42:36', 0, NULL, '2020-06-09 15:42:36'),
(25, 8, 26, '2020-06-15 15:51:36', 0, NULL, '2020-06-15 15:51:36');

-- --------------------------------------------------------

--
-- Table structure for table `divisi`
--

CREATE TABLE `divisi` (
  `id_divisi` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tempat` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` varchar(255) NOT NULL,
  `penyelenggara` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `foto` varchar(255) NOT NULL,
  `id_admin` int(11) NOT NULL,
  `waku_input_data` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `divisi`
--

INSERT INTO `divisi` (`id_divisi`, `nama`, `tempat`, `tanggal`, `waktu`, `penyelenggara`, `deskripsi`, `foto`, `id_admin`, `waku_input_data`) VALUES
(6, 'Pemprograman', 'KyouCommunity', '2020-05-05', 'Jam 13.00 sampai selesai', 'Ketua Divisi', 'akan mengadakan Sharing 3 kali sehari', '', 1, '2020-06-30 17:14:30'),
(8, 'Divisi Multimedia', 'Online', '2020-05-05', 'Jam 13.00 sampai selesai', 'Ketua Divisi', 'akan mengadakan shareing setiap hari rabu dan kamis', '', 2, '2020-06-30 17:15:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id_anggota`);

--
-- Indexes for table `anggota_divisi`
--
ALTER TABLE `anggota_divisi`
  ADD PRIMARY KEY (`id_anggota_divisi`),
  ADD KEY `id_acara` (`id_divisi`),
  ADD KEY `id_relawan` (`id_anggota`),
  ADD KEY `id_admin` (`id_admin`);

--
-- Indexes for table `divisi`
--
ALTER TABLE `divisi`
  ADD PRIMARY KEY (`id_divisi`),
  ADD KEY `id_admin` (`id_admin`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id_anggota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `anggota_divisi`
--
ALTER TABLE `anggota_divisi`
  MODIFY `id_anggota_divisi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `divisi`
--
ALTER TABLE `divisi`
  MODIFY `id_divisi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
