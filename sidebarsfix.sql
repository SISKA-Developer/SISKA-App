-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Feb 2023 pada 11.43
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siska_app`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `sidebars`
--

CREATE TABLE `sidebars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `urlname` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `hashids` int(10) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `sidebars`
--

INSERT INTO `sidebars` (`id`, `name`, `urlname`, `url`, `icon`, `role`, `hashids`, `created_at`, `updated_at`) VALUES
(7, 'My Profile', 'j2ZoQkv', 'myprofile', '', 'mahasiswa', 347892345, NULL, NULL),
(8, 'Status', 'pYLkm0r', 'statusIndex', '', 'mahasiswa', 217946695, NULL, NULL),
(9, 'Jadwal Perkuliahan', 'XDq10y5', 'jadwalkuliahIndex', '', 'mahasiswa', 217089231, NULL, NULL),
(10, 'Pengkinian Data Induk Mahasiswa', 'n5lvxZE', 'datamahasiswaIndex', '', 'mahasiswa', 231708349, NULL, NULL),
(11, 'Status Keuangan', 'kRXrLmY', 'statuskeuanganIndex', '', 'mahasiswa', 217946690, NULL, NULL),
(12, 'Transkrip Nilai', 'jZqgx05', 'transkripnilaiIndex', '', 'mahasiswa', 672349845, NULL, NULL),
(13, 'Matakuliah', '595A4V8', 'MatakuliahIndex', '', 'kurikulum', 619332782, '2023-02-22 01:57:21', '2023-02-23 13:22:12'),
(14, 'Jadwal Matakuliah', '1wqgxmV', 'JadwalMatakuliahIndex', '', 'kurikulum', 289456204, '2023-02-22 01:57:21', '2023-02-24 13:25:51'),
(15, 'Tujuan dan Capaian', '3QLqokO', 'TujuanCapaianIndex', '', 'kurikulum', 534089123, '2023-02-22 01:57:21', '2023-02-23 13:21:23'),
(16, 'Evaluasi Pembelajaran', 'yL2KlW', 'evaluasipembelajaranIndex', '', 'evaluasi', 132445657, '2023-02-24 10:00:55', NULL),
(17, 'Evaluasi Pengelolaan Keuangan', 'RlXqWoK', 'evaluasipengelolaanIndex', '', 'evaluasi', 890763428, '2023-02-24 10:00:55', NULL),
(18, 'Evaluasi Sarana dan Prasarana', 'vgBmpm5', 'evaluasisaranaIndex', '', 'evaluasi', 435677898, '2023-02-24 10:00:55', NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `sidebars`
--
ALTER TABLE `sidebars`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `sidebars`
--
ALTER TABLE `sidebars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
