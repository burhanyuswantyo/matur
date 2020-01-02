-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Jan 2020 pada 02.13
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `matur`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `kategori` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id`, `kategori`) VALUES
(1, 'Listrik'),
(2, 'AC'),
(3, 'Projector'),
(4, 'Komputer Kelas'),
(5, 'Parkir'),
(6, 'Lampu'),
(7, 'Kursi'),
(8, 'Laboratorium'),
(9, 'Fasilitas Lainnya'),
(10, 'Kantin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `keys`
--

CREATE TABLE `keys` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `key` varchar(40) NOT NULL,
  `level` int(2) NOT NULL,
  `ignore_limits` tinyint(1) NOT NULL DEFAULT 0,
  `is_private_key` tinyint(1) NOT NULL DEFAULT 0,
  `ip_addresses` text DEFAULT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `keys`
--

INSERT INTO `keys` (`id`, `user_id`, `key`, `level`, `ignore_limits`, `is_private_key`, `ip_addresses`, `date_created`) VALUES
(1, 1, 'yuswan123', 1, 0, 0, NULL, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporan`
--

CREATE TABLE `laporan` (
  `id` int(11) NOT NULL,
  `deskripsi` varchar(1024) NOT NULL,
  `gambar` varchar(128) NOT NULL,
  `date_created` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `kategori_id` int(11) NOT NULL,
  `status_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `laporan`
--

INSERT INTO `laporan` (`id`, `deskripsi`, `gambar`, `date_created`, `user_id`, `kategori_id`, `status_id`) VALUES
(1, 'AC rusak', 'rusak.jpg', 1574521921, 1, 1, 0),
(2, 'AC kurang dingin AC kurang dingin AC kurang dingin AC kurang dingin AC kurang dingin AC kurang dingin AC kurang dingin', 'dingin.jpg', 1574521921, 1, 1, 3),
(3, 'AC rusak', 'rusak.jpg', 1574521921, 1, 1, 2),
(4, 'AC kurang dingin', 'dingin.jpg', 1574521921, 1, 1, 1),
(5, 'AC kurang dingin', 'dingin.jpg', 1574521921, 1, 1, 4),
(6, 'AC rusak', 'rusak.jpg', 1574521921, 1, 1, 0),
(7, 'AC kurang dingin', 'dingin.jpg', 1574521921, 2, 1, 3),
(8, 'AC rusak', 'rusak.jpg', 1574521921, 1, 1, 2),
(10, 'AC kurang dingin', 'dingin.jpg', 1574521921, 2, 1, 4),
(15, 'AC kurang dingin', 'dingin.jpg', 1574521921, 1, 1, 4),
(16, 'AC rusak', 'rusak.jpg', 1574521921, 1, 1, 0),
(17, 'AC kurang dingin', 'dingin.jpg', 1574521921, 3, 1, 3),
(18, 'AC rusak', 'rusak.jpg', 1574521921, 4, 1, 2),
(19, 'AC kurang dingin', 'dingin.jpg', 1574521921, 1, 1, 1),
(20, 'AC kurang dingin', 'dingin.jpg', 1574521921, 1, 1, 4),
(21, 'AC rusak', 'rusak.jpg', 1574521921, 3, 1, 0),
(22, 'AC kurang dingin', 'dingin.jpg', 1574521921, 1, 1, 3),
(23, 'AC rusak', 'rusak.jpg', 1574521921, 1, 1, 2),
(24, 'AC kurang dingin', 'dingin.jpg', 1574521921, 1, 1, 1),
(25, 'AC kurang dingin', 'dingin.jpg', 1574521921, 1, 1, 4),
(26, 'AC rusak', 'rusak.jpg', 1574521921, 1, 1, 0),
(27, 'AC kurang dingin', 'dingin.jpg', 1574521921, 1, 1, 3),
(28, 'AC rusak', 'rusak.jpg', 1574521921, 1, 1, 2),
(29, 'AC kurang dingin', 'dingin.jpg', 1574521921, 1, 1, 1),
(30, 'AC kurang dingin', 'dingin.jpg', 1574521921, 1, 1, 4),
(31, 'AC rusak', 'rusak.jpg', 1574521921, 1, 1, 0),
(32, 'AC kurang dingin', 'dingin.jpg', 1574521921, 1, 1, 3),
(33, 'AC rusak', 'rusak.jpg', 1574521921, 1, 1, 2),
(34, 'AC kurang dingin', 'dingin.jpg', 1574521921, 1, 1, 1),
(35, 'AC kurang dingin', 'dingin.jpg', 1574521921, 1, 1, 4),
(36, 'AC rusak', 'rusak.jpg', 1574521921, 1, 1, 0),
(37, 'AC kurang dingin', 'dingin.jpg', 1574521921, 1, 1, 3),
(38, 'AC rusak', 'rusak.jpg', 1574521921, 1, 1, 2),
(39, 'AC kurang dingin', 'dingin.jpg', 1574521921, 1, 1, 1),
(40, 'AC kurang dingin', 'dingin.jpg', 1574521921, 1, 1, 4),
(41, 'AC rusak', 'rusak.jpg', 1574521921, 1, 1, 0),
(42, 'AC kurang dingin', 'dingin.jpg', 1574521921, 1, 1, 3),
(43, 'AC rusak', 'rusak.jpg', 1574521921, 1, 1, 2),
(44, 'AC kurang dingin', 'dingin.jpg', 1574521921, 1, 1, 1),
(45, 'AC kurang dingin', 'dingin.jpg', 1574521921, 1, 1, 4),
(46, 'AC rusak', 'rusak.jpg', 1574521921, 1, 1, 0),
(47, 'AC kurang dingin', 'dingin.jpg', 1574521921, 1, 1, 3),
(48, 'AC rusak', 'rusak.jpg', 1574521921, 1, 1, 2),
(49, 'AC kurang dingin', 'dingin.jpg', 1574521921, 1, 1, 1),
(50, 'AC kurang dingin', 'dingin.jpg', 1574521921, 1, 1, 4),
(51, 'AC rusak', 'rusak.jpg', 1574521921, 1, 1, 0),
(52, 'AC kurang dingin', 'dingin.jpg', 1574521921, 1, 1, 3),
(53, 'AC rusak', 'rusak.jpg', 1574521921, 1, 1, 2),
(54, 'AC kurang dingin', 'dingin.jpg', 1574521921, 1, 1, 1),
(55, 'AC kurang dingin', 'dingin.jpg', 1574521921, 1, 1, 4),
(56, 'AC rusak', 'rusak.jpg', 1574521921, 1, 1, 0),
(57, 'AC kurang dingin', 'dingin.jpg', 1574521921, 1, 1, 3),
(58, 'AC rusak', 'rusak.jpg', 1574521921, 1, 1, 2),
(59, 'AC kurang dingin', 'dingin.jpg', 1574521921, 1, 1, 1),
(60, 'AC kurang dingin', 'dingin.jpg', 1574521921, 1, 1, 4),
(61, 'AC rusak', 'rusak.jpg', 1574521921, 1, 1, 0),
(62, 'AC kurang dingin', 'dingin.jpg', 1574521921, 1, 1, 3),
(63, 'AC rusak', 'rusak.jpg', 1574521921, 1, 1, 2),
(64, 'AC kurang dingin', 'dingin.jpg', 1574521921, 1, 1, 1),
(65, 'AC kurang dingin', 'dingin.jpg', 1574521921, 1, 1, 4),
(66, 'AC kebakar woy', 'gambargambar.jpg', 1584521921, 3, 2, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `limits`
--

CREATE TABLE `limits` (
  `id` int(11) NOT NULL,
  `uri` varchar(255) NOT NULL,
  `count` int(10) NOT NULL,
  `hour_started` int(11) NOT NULL,
  `api_key` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `status`
--

CREATE TABLE `status` (
  `id` int(11) NOT NULL,
  `status` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `status`
--

INSERT INTO `status` (`id`, `status`, `icon`) VALUES
(0, 'Laporan Ditolak', 'ditolak.jpg'),
(1, 'Laporan Dikirim', 'dikirim.jpg'),
(2, 'Laporan Diterima', 'diterima.jpg'),
(3, 'Laporan Diproses', 'diproses.jpg'),
(4, 'Laporan Selesai', 'selesai.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nim` varchar(10) NOT NULL,
  `password` varchar(5) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `prodi` varchar(128) NOT NULL,
  `foto` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nim`, `password`, `nama`, `prodi`, `foto`) VALUES
(1, '17.12.0058', '14240', 'Burhan Yuswantyo', 'Sistem Informasi', 'profile.jpg'),
(2, '17.12.0039', '12345', 'Rizki Rahmawanto', 'Sistem Informasi', 'rizki.jpg'),
(3, '17.12.0054', '12345', 'Muhammad Reza Alamsyah', 'Sistem Informasi', 'reza.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `keys`
--
ALTER TABLE `keys`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `limits`
--
ALTER TABLE `limits`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `keys`
--
ALTER TABLE `keys`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `laporan`
--
ALTER TABLE `laporan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT untuk tabel `limits`
--
ALTER TABLE `limits`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `status`
--
ALTER TABLE `status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
