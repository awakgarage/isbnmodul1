-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Jun 2024 pada 18.34
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `isbnmodul1`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `bukuID` int(11) NOT NULL,
  `judul` varchar(225) NOT NULL,
  `pengarang` varchar(255) NOT NULL,
  `penerjemah` varchar(255) NOT NULL,
  `edisi` varchar(255) NOT NULL,
  `seri` varchar(255) NOT NULL,
  `tahunTerbit` varchar(255) NOT NULL,
  `jumlahHalaman` varchar(255) NOT NULL,
  `tinggiBuku` varchar(255) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `jenis` varchar(255) NOT NULL,
  `media` varchar(255) NOT NULL,
  `filePdfBuku` varchar(255) NOT NULL,
  `lampiranPendukung` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `isbn` varchar(255) NOT NULL,
  `editor` varchar(255) NOT NULL,
  `tanggalPengajuan` date NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`bukuID`, `judul`, `pengarang`, `penerjemah`, `edisi`, `seri`, `tahunTerbit`, `jumlahHalaman`, `tinggiBuku`, `kategori`, `jenis`, `media`, `filePdfBuku`, `lampiranPendukung`, `keterangan`, `isbn`, `editor`, `tanggalPengajuan`, `status`) VALUES
(1, 'Buku1', 'Buku1', 'Buku1', 'Buku1', 'Buku1', '2020', '15', '17', 'Buku1', 'Buku1', 'Buku1', 'Buku1', 'Buku1', 'Buku1', '12121', 'Buku1', '2024-06-24', 'Selesai'),
(2, 'ada', 'ada', 'ada', 'ada', 'ada', 'ada', 'ada', 'ada', 'ada', 'ada', 'ada', 'ada', 'ada', 'ada', 'ada', 'ada', '2024-06-24', 'Proggres'),
(3, 'ada2', 'ada2', 'ada2', 'ada2', 'ada2', 'ada2', 'ada2', 'ada2', 'ada2', 'ada2', 'ada2', 'ada2', 'ada2', 'ada2', 'ada2', 'ada2', '2024-06-26', 'revisi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penulis`
--

CREATE TABLE `penulis` (
  `penulisID` int(11) NOT NULL,
  `namaLengkap` varchar(255) DEFAULT NULL,
  `nip` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `noHp` varchar(255) DEFAULT NULL,
  `userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `penulis`
--

INSERT INTO `penulis` (`penulisID`, `namaLengkap`, `nip`, `alamat`, `noHp`, `userid`) VALUES
(1, NULL, NULL, NULL, NULL, 1),
(2, NULL, NULL, NULL, NULL, 22),
(3, 'kakanana', '1212', 'JL. BAKAU NO.479 KEL.REJOSARI KEC.TENAYAN RAYA', NULL, 23);

-- --------------------------------------------------------

--
-- Struktur dari tabel `staffperpustakaan`
--

CREATE TABLE `staffperpustakaan` (
  `staffID` int(11) NOT NULL,
  `namaLengkap` varchar(255) NOT NULL,
  `nip` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `noHp` varchar(255) NOT NULL,
  `userID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `userid` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`userid`, `username`, `email`, `password`, `role`) VALUES
(19, 'baldi', 'baldi@gmail.com', '$2y$10$adcEBZnTEMGY4T2QpqKWle1qK0Bo5cbAvKCe38QMSpMfFurnNujM2', 'penulis'),
(20, 'nini', 'nini@gmail.com', '$2y$10$aAZRxbfUGMUWmD.NXsRDiOOKnlQ78vI9lfJiAH20hZxi/S4/zDs/2', 'penulis'),
(21, 'alex', 'tes@gmail.com', '$2y$10$aEESGERs8Ngzhip1qJHtvuKp3wzXLp9oBtGYQXcYAP4N/.i1XbODW', 'penulis'),
(22, 'admin', 'tes2@gmail.com', '$2y$10$2lmEVS8e4q/0cR330nRgD.NPvSFpLSa2dwg.mUBuVmugN5lXpjGx.', 'penulis'),
(23, 'kaka', 'tes5@gmail.com', '$2y$10$aJZgbHzJ1BRUJi9c/Z3h6.iGR51Ew8vmjScWC08ea45I/ZTCxAsA2', 'penulis');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`bukuID`);

--
-- Indeks untuk tabel `penulis`
--
ALTER TABLE `penulis`
  ADD PRIMARY KEY (`penulisID`);

--
-- Indeks untuk tabel `staffperpustakaan`
--
ALTER TABLE `staffperpustakaan`
  ADD PRIMARY KEY (`staffID`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `buku`
--
ALTER TABLE `buku`
  MODIFY `bukuID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `penulis`
--
ALTER TABLE `penulis`
  MODIFY `penulisID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `staffperpustakaan`
--
ALTER TABLE `staffperpustakaan`
  MODIFY `staffID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
