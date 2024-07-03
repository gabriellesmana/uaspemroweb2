-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Jul 2024 pada 05.03
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `euro_data`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('211011400912', 'cerdas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `uefa_groups`
--

CREATE TABLE `uefa_groups` (
  `id` int(11) NOT NULL,
  `grup` varchar(50) NOT NULL,
  `negara` varchar(50) NOT NULL,
  `menang` int(50) NOT NULL,
  `kalah` int(50) NOT NULL,
  `point` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `uefa_groups`
--

INSERT INTO `uefa_groups` (`id`, `grup`, `negara`, `menang`, `kalah`, `point`) VALUES
(1, 'B', 'Negara B3', 1, 1, 1),
(2, 'B', 'Negara B3', 4, 3, 12),
(3, 'A', 'Negara A1', 12, 10, 36),
(4, 'A', 'Switzerland', 4, 1, 9),
(5, 'A', 'Scotland', 1, 1, 0),
(6, 'A', 'Hungary', 12, 3, 27),
(7, 'A', 'Scotland', 34, 21, 39);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `uefa_groups`
--
ALTER TABLE `uefa_groups`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `uefa_groups`
--
ALTER TABLE `uefa_groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
