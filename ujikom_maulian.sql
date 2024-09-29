-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Sep 2024 pada 06.31
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ujikom_maulian`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `berobat`
--

CREATE TABLE `berobat` (
  `No_Transaksi` varchar(20) NOT NULL,
  `PasienKlinik_ID` varchar(11) NOT NULL,
  `Tanggal_Berobat` date NOT NULL,
  `Dokter_ID` int(11) NOT NULL,
  `Keluhan_Pasien` text NOT NULL,
  `Biaya_Adm` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `berobat`
--

INSERT INTO `berobat` (`No_Transaksi`, `PasienKlinik_ID`, `Tanggal_Berobat`, `Dokter_ID`, `Keluhan_Pasien`, `Biaya_Adm`) VALUES
('TR001', 'PS.001', '2024-09-29', 1, 'Telinga', 125000),
('TR002', 'PS.002', '2024-08-08', 2, 'Mata Merah', 250000),
('TR003', 'PS.003', '2024-09-15', 3, 'Sakit Kepala', 100000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `dokter`
--

CREATE TABLE `dokter` (
  `Dokter_ID` int(11) NOT NULL,
  `Nama_Dokter` varchar(100) NOT NULL,
  `Poli_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dokter`
--

INSERT INTO `dokter` (`Dokter_ID`, `Nama_Dokter`, `Poli_ID`) VALUES
(1, 'dr. Sri', 1),
(2, 'dr. Irvin', 2),
(3, 'dr. Ratna', 3),
(4, 'dr. Isma', 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pasien`
--

CREATE TABLE `pasien` (
  `PasienKlinik_ID` varchar(11) NOT NULL,
  `Nama_PasienKlinik` varchar(100) NOT NULL,
  `Tanggal_LahirPasien` date NOT NULL,
  `Jenis_KelaminPasien` varchar(20) NOT NULL,
  `Alamat_Pasien` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pasien`
--

INSERT INTO `pasien` (`PasienKlinik_ID`, `Nama_PasienKlinik`, `Tanggal_LahirPasien`, `Jenis_KelaminPasien`, `Alamat_Pasien`) VALUES
('PS.001', 'Rusdiana', '2003-09-10', 'Perempuan', 'Peunayong'),
('PS.002', 'Sri Handayani', '1993-07-18', 'Perempuan', 'Kuta Alam'),
('PS.003', 'Hadi Saputra', '1990-09-09', 'Laki-Laki', 'Keudah'),
('PS.004', 'Ridha Ansari', '1987-09-19', 'Laki-Laki', 'Lueng Bata');

-- --------------------------------------------------------

--
-- Struktur dari tabel `poli`
--

CREATE TABLE `poli` (
  `Poli_ID` int(11) NOT NULL,
  `Nama_Poli` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `poli`
--

INSERT INTO `poli` (`Poli_ID`, `Nama_Poli`) VALUES
(1, 'THT'),
(2, 'Mata'),
(3, 'Saraf'),
(4, 'Gigi');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `berobat`
--
ALTER TABLE `berobat`
  ADD PRIMARY KEY (`No_Transaksi`);

--
-- Indeks untuk tabel `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`Dokter_ID`);

--
-- Indeks untuk tabel `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`PasienKlinik_ID`);

--
-- Indeks untuk tabel `poli`
--
ALTER TABLE `poli`
  ADD PRIMARY KEY (`Poli_ID`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `dokter`
--
ALTER TABLE `dokter`
  MODIFY `Dokter_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `poli`
--
ALTER TABLE `poli`
  MODIFY `Poli_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
