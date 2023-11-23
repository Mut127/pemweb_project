-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Nov 2023 pada 02.12
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ppdb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` varchar(5) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
('DMS3A', 'Azama', 'H1D022082734');

-- --------------------------------------------------------

--
-- Struktur dari tabel `calon_siswa`
--

CREATE TABLE `calon_siswa` (
  `nisn` int(10) NOT NULL,
  `no_kk` varchar(16) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `agama` varchar(9) NOT NULL,
  `alamat` text NOT NULL,
  `nama_ayah` varchar(50) NOT NULL,
  `telepon_ayah` varchar(13) NOT NULL,
  `pekerjaan_ayah` varchar(20) NOT NULL,
  `nama_ibu` varchar(50) NOT NULL,
  `telepon_ibu` varchar(13) NOT NULL,
  `pekerjaan_ibu` varchar(20) NOT NULL,
  `asal_sekolah` varchar(100) NOT NULL,
  `nilai_ujian` varchar(3) NOT NULL,
  `pilihan_jurusan` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `calon_siswa`
--

INSERT INTO `calon_siswa` (`nisn`, `no_kk`, `nik`, `nama`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `agama`, `alamat`, `nama_ayah`, `telepon_ayah`, `pekerjaan_ayah`, `nama_ibu`, `telepon_ibu`, `pekerjaan_ibu`, `asal_sekolah`, `nilai_ujian`, `pilihan_jurusan`) VALUES
(1234567, '3302165804042024', '3302165814512349', 'Dwita Isma Aprilia', 'Banyumas', '2004-04-18', 'PEREMPUAN', 'Islam', 'Banyumas', 'Kuseri', '081254893748', 'Petani', 'Endang', '089868791298', 'Pedagang', 'SMP Negeri 03 Ajibarang', '40', 'ips'),
(1234567889, '1234578900000', '1234578900000', 'Muthia', 'Bekasi', '2023-11-02', 'LAKI-LAKI', 'Islam', 'Tasik', 'Hendri', '098764411', 'Buruh', 'Iis', '08976543211', 'Ibu Rumah Tangga', 'SMP Negeri 01 Cisayong', '40', 'IPA');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jurusan`
--

CREATE TABLE `jurusan` (
  `id_jurusan` varchar(5) NOT NULL,
  `id_kajur` varchar(5) NOT NULL,
  `nama_jurusan` varchar(10) NOT NULL,
  `kuota` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `jurusan`
--

INSERT INTO `jurusan` (`id_jurusan`, `id_kajur`, `nama_jurusan`, `kuota`) VALUES
('BH5', 'K4J11', 'BAHASA', 200),
('IP4', 'K4J12', 'IPA', 200),
('IP5', 'K4J13', 'IPS', 200),
('TKJ', 'K1J12', 'TKJ', 200);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kajur`
--

CREATE TABLE `kajur` (
  `id_kajur` varchar(5) NOT NULL,
  `nama_kajur` varchar(50) NOT NULL,
  `pengampu_jurusan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kajur`
--

INSERT INTO `kajur` (`id_kajur`, `nama_kajur`, `pengampu_jurusan`) VALUES
('K4J11', 'Elvi Mailanai S.Pd', 'BAHASA'),
('K4J12', 'Mirza Irawan S.Pd', 'IPA'),
('K4J13', 'Ariana S.Pd', 'IPS');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pilihan`
--

CREATE TABLE `pilihan` (
  `id_pilihan` varchar(5) NOT NULL,
  `nisn` int(10) NOT NULL,
  `id_jurusan` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pilihan`
--

INSERT INTO `pilihan` (`id_pilihan`, `nisn`, `id_jurusan`) VALUES
('H1', 748293647, 'IP5');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(3) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id`, `nama`, `username`, `password`) VALUES
(1, 'coba', 'admin', '12345');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`username`, `password`, `nama`, `status`) VALUES
('Dwita', 'a1ed9abf570068ec3afe938870c726b7', 'Dwita Isma', 'Admin'),
('Dwita', 'a1ed9abf570068ec3afe938870c726b7', 'Dwita Isma', 'Admin'),
('Dwita', 'a1ed9abf570068ec3afe938870c726b7', 'Dwita Isma', 'Admin'),
('rafly', '1451cb2fb5f15cef39c5c5d35367b765', 'Rafly Ramadhan', 'Pengunjung');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `calon_siswa`
--
ALTER TABLE `calon_siswa`
  ADD PRIMARY KEY (`nisn`);

--
-- Indeks untuk tabel `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id_jurusan`),
  ADD UNIQUE KEY `id_kajur` (`id_kajur`);

--
-- Indeks untuk tabel `kajur`
--
ALTER TABLE `kajur`
  ADD PRIMARY KEY (`id_kajur`);

--
-- Indeks untuk tabel `pilihan`
--
ALTER TABLE `pilihan`
  ADD PRIMARY KEY (`id_pilihan`),
  ADD UNIQUE KEY `nisn` (`nisn`),
  ADD UNIQUE KEY `id_jurusan` (`id_jurusan`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
