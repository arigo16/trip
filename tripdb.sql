-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 28 Des 2017 pada 04.00
-- Versi Server: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tripdb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `jabatan_tb`
--

CREATE TABLE IF NOT EXISTS `jabatan_tb` (
  `id` int(11) NOT NULL,
  `nama_jabatan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jabatan_tb`
--

INSERT INTO `jabatan_tb` (`id`, `nama_jabatan`) VALUES
(1121, 'manajer'),
(1122, 'supervisor'),
(1123, 'staff'),
(1124, 'mekanik');

-- --------------------------------------------------------

--
-- Struktur dari tabel `karyawan_tb`
--

CREATE TABLE IF NOT EXISTS `karyawan_tb` (
  `nik` int(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jabatan` int(11) NOT NULL,
  `divisi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `karyawan_tb`
--

INSERT INTO `karyawan_tb` (`nik`, `nama`, `jabatan`, `divisi`) VALUES
(23456, 'Arigo', 1121, 'Technical Support'),
(23457, 'Dwi Budi Kurniawan', 1122, 'Bengkel'),
(23458, 'Nasrul Hidayah', 1123, 'Bengkel');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengajuan_tb`
--

CREATE TABLE IF NOT EXISTS `pengajuan_tb` (
`id` int(11) NOT NULL,
  `nik` int(20) NOT NULL,
  `tg_berangkat` date NOT NULL,
  `tg_pulang` date NOT NULL,
  `tujuan` varchar(255) NOT NULL,
  `u_saku` double NOT NULL,
  `u_hotel` double NOT NULL,
  `u_trans` double NOT NULL,
  `app_divhead` varchar(20) NOT NULL,
  `app_finance` varchar(20) NOT NULL,
  `CreatedDate` date DEFAULT NULL,
  `AppDateFin` date DEFAULT NULL,
  `AppDateDiv` date DEFAULT NULL,
  `AppFin` varchar(20) DEFAULT NULL,
  `AppDiv` varchar(20) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengajuan_tb`
--

INSERT INTO `pengajuan_tb` (`id`, `nik`, `tg_berangkat`, `tg_pulang`, `tujuan`, `u_saku`, `u_hotel`, `u_trans`, `app_divhead`, `app_finance`, `CreatedDate`, `AppDateFin`, `AppDateDiv`, `AppFin`, `AppDiv`) VALUES
(1, 23456, '2017-12-28', '2017-12-29', 'Jakarta', 150000, 500000, 300000, 'setuju', 'tidak setuju', '2017-12-28', '2017-12-28', '2017-12-28', 'kdr', 'tiar');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tunjangan_tb`
--

CREATE TABLE IF NOT EXISTS `tunjangan_tb` (
`id` int(11) NOT NULL,
  `jabatan_id` int(11) NOT NULL,
  `uang_saku` double NOT NULL,
  `bea_hotel` double NOT NULL,
  `transport` double NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tunjangan_tb`
--

INSERT INTO `tunjangan_tb` (`id`, `jabatan_id`, `uang_saku`, `bea_hotel`, `transport`) VALUES
(1, 1121, 150000, 500000, 300000),
(2, 1122, 100000, 300000, 150000),
(3, 1123, 70000, 200000, 100000),
(4, 1124, 70000, 200000, 100000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_tb`
--

CREATE TABLE IF NOT EXISTS `user_tb` (
`id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_tb`
--

INSERT INTO `user_tb` (`id`, `nama`, `username`, `password`, `level`) VALUES
(2, 'Administrator', 'admin', '827ccb0eea8a706c4c34a16891f84e7b', 'admin'),
(3, 'Tiar Agisti', 'tiar', '827ccb0eea8a706c4c34a16891f84e7b', 'divhead'),
(4, 'Kodirun', 'kdr', '827ccb0eea8a706c4c34a16891f84e7b', 'finance'),
(5, 'Arigo', '23456', '827ccb0eea8a706c4c34a16891f84e7b', 'karyawan'),
(6, 'Dwi Budi Kurniawan', '23457', '827ccb0eea8a706c4c34a16891f84e7b', 'karyawan'),
(7, 'Nasrul Hidayah', '23458', '827ccb0eea8a706c4c34a16891f84e7b', 'karyawan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jabatan_tb`
--
ALTER TABLE `jabatan_tb`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `karyawan_tb`
--
ALTER TABLE `karyawan_tb`
 ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `pengajuan_tb`
--
ALTER TABLE `pengajuan_tb`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tunjangan_tb`
--
ALTER TABLE `tunjangan_tb`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_tb`
--
ALTER TABLE `user_tb`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pengajuan_tb`
--
ALTER TABLE `pengajuan_tb`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tunjangan_tb`
--
ALTER TABLE `tunjangan_tb`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `user_tb`
--
ALTER TABLE `user_tb`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
