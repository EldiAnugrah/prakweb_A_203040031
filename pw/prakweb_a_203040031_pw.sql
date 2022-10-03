-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Okt 2022 pada 07.59
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prakweb_a_203040031_pw`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `id` int(4) NOT NULL,
  `judul_buku` varchar(55) NOT NULL,
  `pengarang_buku` varchar(50) NOT NULL,
  `jumlah_baca` int(11) NOT NULL,
  `rating_buku` int(1) NOT NULL,
  `img` varchar(15) NOT NULL,
  `genre` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`id`, `judul_buku`, `pengarang_buku`, `jumlah_baca`, `rating_buku`, `img`, `genre`) VALUES
(1, 'Naruto Shipuden ', 'Masashi Kishimoto', 13320, 4, 'naruto.jpg', 'Shonen'),
(2, 'One Piece', 'Eiichiro Oda', 69696, 4, 'onepiece.jpg', 'Shonen'),
(3, 'Overlord', 'Kugane Maruyama', 23448, 4, 'over.jpg', 'Isekai'),
(5, 'Tensura', 'Fuse', 84122, 4, 'tensura.jpg', 'Isekai'),
(6, 'Mushoku Tensei', 'Rifujin na Magonote', 45645, 4, 'mushoku.jpg', 'Isekai'),
(7, 'Database Desain ', 'Indrajani, S.kom., MM.', 13268, 4, 'database.jpg', 'Pendidikan'),
(9, 'Rekayasa Perangkat Lunak ', 'RogerS .Presman,ph.D.', 13257, 5, 'rpl.jpg', 'Pendidikan'),
(36, 'fsdff', 'sdfdsfd', 21, 2121, 'danmachi.jpg', '2121'),
(37, 'fsdff', '332', 32133, 23123, 'danmachi.jpg', '3231');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `buku`
--
ALTER TABLE `buku`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
