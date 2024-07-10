-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Jan 2024 pada 15.59
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
-- Database: `uas`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_rps`
--

CREATE TABLE `tb_rps` (
  `id_rps` int(10) NOT NULL,
  `nama_prodi` varchar(255) NOT NULL,
  `kode_matkul` varchar(255) NOT NULL,
  `nama_matkul` varchar(255) NOT NULL,
  `nama_dosen_penyusun` varchar(255) NOT NULL,
  `nik_dosen_penyusun` int(50) NOT NULL,
  `tgl_disusun` date NOT NULL,
  `tgl_berlaku` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_rps`
--

INSERT INTO `tb_rps` (`id_rps`, `nama_prodi`, `kode_matkul`, `nama_matkul`, `nama_dosen_penyusun`, `nik_dosen_penyusun`, `tgl_disusun`, `tgl_berlaku`) VALUES
(0, 'D3 Teknik Informatika', 'DT171', 'Perancangan Web 2', 'FIrman Asharudin, S.Kom, M.Kom', 2147483647, '2024-01-02', '2025-01-01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`email`, `password`) VALUES
('admin@gmail.com', 'admin'),
('pandu@gmail.com', 'pandu');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_rps`
--
ALTER TABLE `tb_rps`
  ADD PRIMARY KEY (`id_rps`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_rps`
--
ALTER TABLE `tb_rps`
  MODIFY `id_rps` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
