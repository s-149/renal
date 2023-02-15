-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 15 Mei 2021 pada 03.39
-- Versi Server: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prosweal`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bobot_calon_karyawan`
--

CREATE TABLE `bobot_calon_karyawan` (
  `IdCalon` int(11) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `pendidikan_terakhir` varchar(50) NOT NULL,
  `keahlian` varchar(100) NOT NULL,
  `usia` varchar(30) NOT NULL,
  `pengalaman_kerja` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bobot_calon_karyawan`
--

INSERT INTO `bobot_calon_karyawan` (`IdCalon`, `nama`, `pendidikan_terakhir`, `keahlian`, `usia`, `pengalaman_kerja`) VALUES
(1, 'Abdullah Hasbi', '50', '70', '90', '70'),
(2, 'Rana Maulana', '70', '90', '70', '90'),
(3, 'Andre Raynaldi', '90', '90', '90', '70'),
(4, 'Naziya Syadiyah', '50', '70', '90', '90'),
(5, 'Nurfitriah', '90', '50', '90', '90'),
(6, 'Azizah Azali', '70', '70', '70', '70'),
(7, 'Muhammad Renaldi', '50', '50', '90', '70'),
(8, 'Neng Rohani', '50', '90', '90', '50'),
(9, 'Ferizal Apandi', '70', '90', '50', '90'),
(10, 'Dedi Mulyadi', '90', '50', '70', '50');

-- --------------------------------------------------------

--
-- Struktur dari tabel `calon_karyawan`
--

CREATE TABLE `calon_karyawan` (
  `IdCalon` int(11) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `pendidikan_terakhir` varchar(50) NOT NULL,
  `keahlian` varchar(100) NOT NULL,
  `usia` varchar(30) NOT NULL,
  `pengalaman_kerja` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `calon_karyawan`
--

INSERT INTO `calon_karyawan` (`IdCalon`, `nama`, `pendidikan_terakhir`, `keahlian`, `usia`, `pengalaman_kerja`) VALUES
(1, 'Abdullah Hasbi', 'sma', 'Administrasi', '22', '>1 Tahun'),
(2, 'Rana Maulana', 'D3', 'Teknologi Mesin', '29', '>2 Tahun'),
(3, 'Andre Raynaldi', 'S1', 'Teknologi Mesin', '23', '>1 tahun'),
(4, 'Naziya Syadiyah', 'sma', 'Administrasi', '23', '>2 tahun'),
(5, 'Nurfitriah', 'S1', 'netral', '27', '>2 tahun'),
(6, 'Azizah Azali', 'D3', 'Administrasi', '30', '>1 tahun'),
(7, 'Muhammad Renaldi', 'Sma', 'Netral', '26', '>1 Tahun'),
(8, 'Neng Rohani', 'Sma', 'Teknologi Mesin', '21', '<1 tahun'),
(9, 'Ferizal Apandi', 'D3', 'Teknologi Mesin', '35', '>2 Tahun'),
(10, 'Dedi Mulyadi', 'S1', 'Netral', '30', '<1 Tahun');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ranking`
--

CREATE TABLE `ranking` (
  `IdCalon` varchar(100) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `ranking` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ranking`
--

INSERT INTO `ranking` (`IdCalon`, `nama`, `ranking`) VALUES
('1', 'Abdullah Hasbi', '76'),
('10', 'Dedi Mulyadi', '70'),
('2', 'Rana Maulana', '91'),
('3', 'Andre Raynaldi', '93'),
('4', 'Naziya Syadiyah', '82'),
('5', 'Nurfitriah', '87'),
('6', 'Azizah Azali', '78'),
('7', 'Muhammad Renaldi', '69'),
('8', 'Neng Rohani', '76'),
('9', 'Ferizal Apandi', '88');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `IdUser` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`IdUser`, `username`, `password`) VALUES
(1, 'admin', 'admin123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bobot_calon_karyawan`
--
ALTER TABLE `bobot_calon_karyawan`
  ADD PRIMARY KEY (`IdCalon`);

--
-- Indexes for table `calon_karyawan`
--
ALTER TABLE `calon_karyawan`
  ADD PRIMARY KEY (`IdCalon`);

--
-- Indexes for table `ranking`
--
ALTER TABLE `ranking`
  ADD PRIMARY KEY (`IdCalon`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`IdUser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bobot_calon_karyawan`
--
ALTER TABLE `bobot_calon_karyawan`
  MODIFY `IdCalon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `calon_karyawan`
--
ALTER TABLE `calon_karyawan`
  MODIFY `IdCalon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `IdUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
