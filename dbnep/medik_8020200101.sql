-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Nov 2022 pada 06.21
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medik_8020200101`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pasiens`
--

CREATE TABLE `pasiens` (
  `id` bigint(11) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `no_pasien` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `umur` int(3) DEFAULT NULL,
  `jenis_kelamin` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pasiens`
--

INSERT INTO `pasiens` (`id`, `foto`, `no_pasien`, `nama`, `umur`, `jenis_kelamin`, `created_at`, `updated_at`) VALUES
(3, '', '1003', 'yanto', 21, 'laki-laki', '2022-10-24 08:50:43', '2022-10-24 08:50:47'),
(4, '', '1004', 'jennie', 24, 'perempuan', '2022-10-24 08:51:09', '2022-10-24 08:51:15'),
(5, 'public/La5xGpYLckEbDc2cyfTbQzOgInnCjQ78N0WQR5fa.png', '1005', 'patrick', 29, 'laki-laki', '2022-11-10 13:58:19', '2022-11-10 14:07:42'),
(6, 'public/UFXWof26lh9DhZYZOz13QwOmaBajThWxPKZ7x95i.jpg', '1006', 'Bob', 30, 'laki-laki', '2022-11-10 14:04:46', '2022-11-13 05:20:26');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pasiens`
--
ALTER TABLE `pasiens`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pasiens`
--
ALTER TABLE `pasiens`
  MODIFY `id` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
