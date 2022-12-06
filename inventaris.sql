-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Okt 2022 pada 07.48
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventaris`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL,
  `nama_penyerah` varchar(100) NOT NULL,
  `jabatan_penyerah` varchar(100) NOT NULL,
  `nama_penerima` varchar(100) NOT NULL,
  `jabatan_penerima` varchar(100) NOT NULL,
  `waktu` date NOT NULL,
  `id_inventaris` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id_berita`, `nama_penyerah`, `jabatan_penyerah`, `nama_penerima`, `jabatan_penerima`, `waktu`, `id_inventaris`) VALUES
(9, 'hehe', 'Kepala Sekolah', 'Yogo', 'Kepala Bengkel RPL', '2022-03-06', 42),
(11, 'Yogi', 'Kepala Sekolah', 'Yogo', 'Kepala Bengkel RPL', '2022-03-06', 49),
(12, 'hehee', 'Kepala Sekolah', 'Yogo', 'Kepala Bengkel RPL', '2022-03-06', 50),
(14, 'jepa', 'Kepala Sekolah', 'Yogo', 'Kepala Bengkel RPL', '2022-03-07', 57),
(15, 'jepa', 'Kepala Sekolah', 'Yogo', 'Kepala Bengkel RPL', '2022-03-07', 60),
(16, 'Yogi', 'Kepala Sekolah', 'Yogo', 'Kepala Bengkel RPL', '2022-03-08', 47),
(22, 'hola', 'Kepala Sekolah', 'Yogo', 'Kepala Bengkel RPL', '2022-03-09', 63),
(23, 'Yogi', 'Kepala Sekolah', 'Yogo', 'Kepala Bengkel RPL', '2022-10-12', 64),
(24, 'jepa', 'Kepala Sekolah', 'Yogo', 'Kepala Bengkel RPL', '2022-10-12', 66);

-- --------------------------------------------------------

--
-- Struktur dari tabel `dana`
--

CREATE TABLE `dana` (
  `id_dana` int(11) NOT NULL,
  `nama_dana` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `dana`
--

INSERT INTO `dana` (`id_dana`, `nama_dana`) VALUES
(1, 'Dana Bos'),
(2, 'Dana Komite');

-- --------------------------------------------------------

--
-- Struktur dari tabel `inventaris`
--

CREATE TABLE `inventaris` (
  `id_inventaris` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `kondisi` varchar(100) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `nomor` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `tanggal_register` date NOT NULL,
  `tahun_anggaran` int(11) NOT NULL,
  `id_dana` int(11) NOT NULL,
  `kode_inventaris` varchar(150) NOT NULL,
  `kode_jenis` varchar(100) NOT NULL,
  `id_ruang` int(11) NOT NULL,
  `id_level` int(11) NOT NULL,
  `kode_jurusan` int(11) NOT NULL,
  `berita` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `inventaris`
--

INSERT INTO `inventaris` (`id_inventaris`, `nama`, `kondisi`, `keterangan`, `nomor`, `jumlah`, `tanggal_register`, `tahun_anggaran`, `id_dana`, `kode_inventaris`, `kode_jenis`, `id_ruang`, `id_level`, `kode_jurusan`, `berita`) VALUES
(42, 'Meja', 'Baik', 'Terbuat dari kayu', 862, 100, '2022-02-23', 2022, 1, '111.A1.1.2022.862', 'A1', 1, 1, 111, 2),
(47, 'Kursi', 'Baik', 'Terbuat dari kayu', 342, 100, '2022-02-24', 2022, 1, '112.A1.1.2022.342', 'A1', 1, 1, 112, 2),
(49, 'Kursi', 'Baik', 'Terbuat dari kayu', 902, 12, '2022-02-25', 2022, 2, '111.A1.2.2022.902', 'A1', 1, 1, 111, 2),
(50, 'PC', 'Baik', 'TEKNOLOGI', 658, 100, '2022-03-01', 2022, 1, '111.A1.1.2022.658', 'A1', 1, 1, 111, 2),
(51, 'laptop', 'Baik', 'Terbuat dari besi', 477, 100, '2022-03-01', 2022, 1, '112.A1.1.2022.477', 'A1', 1, 1, 112, 1),
(57, 'mouse', 'Baik', 'TEKNOLOGI', 511, 100, '2022-03-03', 2022, 1, '111.A1.1.2022.511', 'A1', 1, 1, 111, 2),
(60, 'papan tulis', 'Baik', 'Terbuat dari kayu', 691, 2, '2022-03-06', 2022, 2, '113.A1.2.2022.691', 'A1', 1, 1, 113, 2),
(61, 'Keyboard', 'Rusak', 'TEKNOLOGI', 891, 52, '2022-03-08', 2022, 1, '111.A1.1.2022.891', 'A1', 1, 1, 111, 2),
(62, 'Proyektor', 'Baik', 'TEKNOLOGI', 842, 81, '2022-03-08', 2022, 2, '111.A2.2.2022.842', 'A2', 1, 1, 111, 1),
(63, 'headshet', 'Rusak', 'Terbuat dari kayu', 787, 100, '2022-03-09', 2022, 1, '111.A1.1.2022.787', 'A1', 1, 1, 111, 2),
(64, 'Kursi', 'Rusak', 'new', 888, 100, '2022-10-12', 2022, 2, '111.A2.2.2022.888', 'A2', 1, 1, 111, 2),
(65, 'KOMPUTER VSGA', 'Rusak', 'TEKNOLOGI', 114, 11, '2022-10-12', 2022, 1, '111.A2.1.2022.114', 'A2', 1, 1, 111, 1),
(66, 'LAPTOP VSGA', 'Rusak', 'TEKNOLOGI', 544, 11, '2022-10-12', 2022, 1, '111.A2.1.2022.544', 'A2', 1, 1, 111, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis`
--

CREATE TABLE `jenis` (
  `id_jenis` int(11) NOT NULL,
  `nama_jenis` varchar(100) NOT NULL,
  `kode_jenis` varchar(100) NOT NULL,
  `keterangan_jenis` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jenis`
--

INSERT INTO `jenis` (`id_jenis`, `nama_jenis`, `kode_jenis`, `keterangan_jenis`) VALUES
(1, 'Otomotif', 'A1', 'Alat Sepeda Motor'),
(12, 'Teknologi', 'A2', 'teknologi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jurusan`
--

CREATE TABLE `jurusan` (
  `id_jurusan` int(11) NOT NULL,
  `nama_jurusan` varchar(100) NOT NULL,
  `kode_jurusan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jurusan`
--

INSERT INTO `jurusan` (`id_jurusan`, `nama_jurusan`, `kode_jurusan`) VALUES
(1, 'Rekayasa Perangkat Lunak\r\n', 111),
(2, 'Otomasi Industri', 112),
(8, 'DPIB', 113);

-- --------------------------------------------------------

--
-- Struktur dari tabel `level`
--

CREATE TABLE `level` (
  `id_level` int(11) NOT NULL,
  `nama_level` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `level`
--

INSERT INTO `level` (`id_level`, `nama_level`) VALUES
(1, 'Administrator'),
(2, 'Manager'),
(3, 'Operator');

-- --------------------------------------------------------

--
-- Struktur dari tabel `log_activity`
--

CREATE TABLE `log_activity` (
  `id_log` int(11) NOT NULL,
  `aksi` varchar(100) NOT NULL,
  `waktu` datetime NOT NULL,
  `tabel` varchar(100) NOT NULL,
  `id_users` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `log_activity`
--

INSERT INTO `log_activity` (`id_log`, `aksi`, `waktu`, `tabel`, `id_users`) VALUES
(66, 'CREATE', '2022-03-03 22:16:48', 'Jurusan', 2),
(67, 'UPDATE', '2022-03-03 22:17:13', 'Jurusan', 2),
(68, 'UPDATE', '2022-03-03 22:17:47', 'Ruang', 2),
(69, 'CREATE', '2022-03-03 22:18:17', 'Ruang', 2),
(70, 'DELETE', '2022-03-03 16:19:00', 'Perbaikan', 2),
(71, 'CREATE', '2022-03-03 22:19:06', 'Perbaikan', 2),
(72, 'DELETE', '2022-03-03 16:22:10', 'Perbaikan', 2),
(73, 'CREATE', '2022-03-03 22:22:14', 'Perbaikan', 2),
(74, 'MENYETUJUI', '2022-03-03 22:22:26', 'Perbaikan', 2),
(75, 'DELETE', '2022-03-03 17:00:01', 'Perawatan', 9),
(76, 'CREATE', '2022-03-03 23:00:07', 'Perawatan', 9),
(77, 'DELETE', '2022-03-06 04:16:24', 'Perawatan', 9),
(78, 'DELETE', '2022-03-06 04:16:51', 'Perbaikan', 9),
(79, 'DELETE', '2022-03-06 04:16:56', 'Perbaikan', 9),
(80, 'DELETE', '2022-03-06 04:17:02', 'Perawatan', 9),
(81, 'DELETE', '2022-03-06 04:17:06', 'Perawatan', 9),
(82, 'DELETE', '2022-03-06 04:17:10', 'Perawatan', 9),
(83, 'DELETE', '2022-03-06 04:17:14', 'Perawatan', 9),
(84, 'CREATE', '2022-03-06 10:18:27', 'Perawatan', 9),
(85, 'CREATE', '2022-03-06 10:18:37', 'Perawatan', 9),
(86, 'CREATE', '2022-03-06 10:18:46', 'Perawatan', 9),
(87, 'CREATE', '2022-03-06 10:19:34', 'Perawatan', 9),
(88, 'CREATE', '2022-03-06 10:19:41', 'Perbaikan', 9),
(89, 'DELETE', '2022-03-06 04:39:24', 'Berita', 9),
(90, 'DELETE', '2022-03-06 04:39:31', 'Berita', 9),
(91, 'DELETE', '2022-03-06 04:39:38', 'Berita', 9),
(92, 'DELETE', '2022-03-06 04:39:45', 'Berita', 9),
(93, 'DELETE', '2022-03-06 04:43:09', 'Berita', 9),
(94, 'DELETE', '2022-03-06 04:43:58', 'Berita', 9),
(95, 'DELETE', '2022-03-06 04:44:03', 'Berita', 9),
(96, 'DELETE', '2022-03-06 04:44:08', 'Berita', 9),
(97, 'UPDATE', '2022-03-06 11:28:11', 'Berita', 9),
(100, 'MENYETUJUI', '2022-03-07 07:50:13', 'Perbaikan', 8),
(101, 'CREATE', '2022-03-07 07:51:13', 'Perawatan', 9),
(102, 'CREATE', '2022-03-07 07:51:20', 'Perbaikan', 9),
(103, 'CREATE', '2022-03-07 07:52:36', 'Jurusan', 2),
(104, 'UPDATE', '2022-03-07 07:52:44', 'Jurusan', 2),
(105, 'DELETE', '2022-03-07 01:52:52', 'Jurusan', 2),
(106, 'CREATE', '2022-03-07 07:53:15', 'Ruang', 2),
(107, 'UPDATE', '2022-03-07 07:53:21', 'Ruang', 2),
(108, 'DELETE', '2022-03-07 01:53:26', 'Ruang', 2),
(109, 'DELETE', '2022-03-07 01:53:34', 'Jenis', 2),
(110, 'CREATE', '2022-03-07 07:53:49', 'Jenis', 2),
(111, 'UPDATE', '2022-03-07 07:53:55', 'Jenis', 2),
(112, 'DELETE', '2022-03-07 01:54:00', 'Jenis', 2),
(113, 'CREATE', '2022-03-07 07:54:10', 'Dana', 2),
(114, 'UPDATE', '2022-03-07 07:54:17', 'Dana', 2),
(115, 'DELETE', '2022-03-07 01:54:21', 'Dana', 2),
(116, 'CREATE', '2022-03-07 07:54:33', 'Perawatan', 2),
(117, 'CREATE', '2022-03-07 07:55:11', 'Perbaikan', 2),
(118, 'MENYETUJUI', '2022-03-07 07:55:19', 'Perbaikan', 2),
(119, 'DELETE', '2022-03-07 13:41:54', 'Jenis', 2),
(120, 'CREATE', '2022-03-08 07:41:54', 'Inventaris', 2),
(121, 'CREATE', '2022-03-08 07:42:06', 'Jenis', 2),
(122, 'DELETE', '2022-03-08 02:26:24', 'Berita', 2),
(123, 'DELETE', '2022-03-08 02:26:39', 'Inventaris', 2),
(124, 'DELETE', '2022-03-08 02:29:43', 'Berita', 2),
(125, 'DELETE', '2022-03-08 02:29:53', 'Inventaris', 2),
(126, 'CREATE', '2022-03-08 08:31:13', 'Inventaris', 2),
(127, 'DELETE', '2022-03-08 02:33:35', 'Berita', 2),
(128, 'CREATE', '2022-03-08 08:53:39', 'Perawatan', 9),
(133, 'CREATE', '2022-03-09 13:11:35', 'Inventaris', 2),
(134, 'CREATE', '2022-03-09 13:12:26', 'Perbaikan', 2),
(135, 'MENYETUJUI', '2022-03-09 13:12:37', 'Perbaikan', 2),
(136, 'CREATE', '2022-10-12 10:25:43', 'Inventaris', 2),
(137, 'CREATE', '2022-10-12 10:32:49', 'Inventaris', 2),
(138, 'CREATE', '2022-10-12 10:41:07', 'Inventaris', 2),
(139, 'MENYETUJUI', '2022-10-12 10:43:33', 'Perbaikan', 2),
(140, 'CREATE', '2022-10-12 11:35:50', 'Perawatan', 9),
(141, 'CREATE', '2022-10-12 11:36:04', 'Perawatan', 9);

-- --------------------------------------------------------

--
-- Struktur dari tabel `operator`
--

CREATE TABLE `operator` (
  `id_operator` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `kode_jurusan` int(11) DEFAULT NULL,
  `id_level` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `operator`
--

INSERT INTO `operator` (`id_operator`, `username`, `email`, `password`, `nama`, `kode_jurusan`, `id_level`) VALUES
(9, 'operator', 'operator@gmail.com', '25f9e794323b453885f5181f1b624d0b', 'jepi', 112, 3),
(10, 'hehe', 'hehe@gmail.com', '25f9e794323b453885f5181f1b624d0b', 'Hehe', 111, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `perawatan`
--

CREATE TABLE `perawatan` (
  `id_perawatan` int(11) NOT NULL,
  `tanggal_perawatan` date NOT NULL,
  `id_inventaris` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `perawatan`
--

INSERT INTO `perawatan` (`id_perawatan`, `tanggal_perawatan`, `id_inventaris`) VALUES
(14, '2022-02-28', 47),
(19, '2022-03-01', 51),
(25, '2022-03-06', 42),
(26, '2022-03-06', 49),
(27, '2022-03-06', 50),
(28, '2022-03-07', 57),
(29, '2022-03-07', 60),
(30, '2022-03-08', 62),
(31, '2022-10-12', 66),
(32, '2022-10-12', 64);

-- --------------------------------------------------------

--
-- Struktur dari tabel `perbaikan`
--

CREATE TABLE `perbaikan` (
  `id_perbaikan` int(11) NOT NULL,
  `id_perawatan` int(11) NOT NULL,
  `tanggal_perbaikan` date NOT NULL,
  `tanggal_selesai` date DEFAULT NULL,
  `status` int(11) NOT NULL,
  `id_users` int(11) NOT NULL,
  `id_inventaris` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `perbaikan`
--

INSERT INTO `perbaikan` (`id_perbaikan`, `id_perawatan`, `tanggal_perbaikan`, `tanggal_selesai`, `status`, `id_users`, `id_inventaris`) VALUES
(19, 27, '2022-03-06', '2022-03-07', 3, 9, 50),
(20, 28, '2022-03-07', '2022-10-12', 3, 9, 57),
(21, 29, '2022-03-07', '2022-03-07', 3, 2, 60),
(22, 30, '2022-03-09', '2022-03-09', 3, 2, 62);

-- --------------------------------------------------------

--
-- Struktur dari tabel `ruang`
--

CREATE TABLE `ruang` (
  `id_ruang` int(11) NOT NULL,
  `nama_ruang` varchar(100) NOT NULL,
  `kode_ruang` varchar(100) NOT NULL,
  `keterangan_ruang` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `ruang`
--

INSERT INTO `ruang` (`id_ruang`, `nama_ruang`, `kode_ruang`, `keterangan_ruang`) VALUES
(1, 'Ruang 01', '1011', 'Penuh'),
(2, 'Ruang 02', '1012', 'Kurang'),
(5, 'RUANG 4', '1014', 'KOSONG');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id_users` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `kode_jurusan` int(11) DEFAULT NULL,
  `id_level` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_users`, `username`, `email`, `password`, `nama`, `kode_jurusan`, `id_level`) VALUES
(2, 'admin', 'admin@gmail.com', '25f9e794323b453885f5181f1b624d0b', 'jefa', 0, 1),
(8, 'komite', 'komite@gmail.com', '25f9e794323b453885f5181f1b624d0b', 'komite', 0, 2),
(9, 'operator', 'operator@gmail.com', '25f9e794323b453885f5181f1b624d0b', 'operator', 111, 3),
(10, 'hehe', 'hehe@gmail.com', '25f9e794323b453885f5181f1b624d0b', 'Hehe', NULL, 2);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`),
  ADD KEY `id_inventaris` (`id_inventaris`);

--
-- Indeks untuk tabel `dana`
--
ALTER TABLE `dana`
  ADD PRIMARY KEY (`id_dana`);

--
-- Indeks untuk tabel `inventaris`
--
ALTER TABLE `inventaris`
  ADD PRIMARY KEY (`id_inventaris`),
  ADD KEY `id_jenis` (`kode_jenis`),
  ADD KEY `id_ruang` (`id_ruang`),
  ADD KEY `id_manager` (`id_level`),
  ADD KEY `id_dana` (`id_dana`),
  ADD KEY `kode_jurusan` (`kode_jurusan`);

--
-- Indeks untuk tabel `jenis`
--
ALTER TABLE `jenis`
  ADD PRIMARY KEY (`id_jenis`),
  ADD UNIQUE KEY `kode_jenis` (`kode_jenis`);

--
-- Indeks untuk tabel `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id_jurusan`),
  ADD UNIQUE KEY `kode_jurusan` (`kode_jurusan`);

--
-- Indeks untuk tabel `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`id_level`);

--
-- Indeks untuk tabel `log_activity`
--
ALTER TABLE `log_activity`
  ADD PRIMARY KEY (`id_log`),
  ADD KEY `id_users` (`id_users`);

--
-- Indeks untuk tabel `operator`
--
ALTER TABLE `operator`
  ADD PRIMARY KEY (`id_operator`),
  ADD KEY `id_level` (`id_level`),
  ADD KEY `id_jurusan` (`kode_jurusan`);

--
-- Indeks untuk tabel `perawatan`
--
ALTER TABLE `perawatan`
  ADD PRIMARY KEY (`id_perawatan`),
  ADD KEY `id_inventaris` (`id_inventaris`);

--
-- Indeks untuk tabel `perbaikan`
--
ALTER TABLE `perbaikan`
  ADD PRIMARY KEY (`id_perbaikan`),
  ADD KEY `id_operator` (`id_users`),
  ADD KEY `id_inventaris` (`id_inventaris`),
  ADD KEY `id_perawatan` (`id_perawatan`);

--
-- Indeks untuk tabel `ruang`
--
ALTER TABLE `ruang`
  ADD PRIMARY KEY (`id_ruang`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_users`),
  ADD KEY `id_level` (`id_level`),
  ADD KEY `kode_jurusan` (`kode_jurusan`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `dana`
--
ALTER TABLE `dana`
  MODIFY `id_dana` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `inventaris`
--
ALTER TABLE `inventaris`
  MODIFY `id_inventaris` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT untuk tabel `jenis`
--
ALTER TABLE `jenis`
  MODIFY `id_jenis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id_jurusan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `level`
--
ALTER TABLE `level`
  MODIFY `id_level` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `log_activity`
--
ALTER TABLE `log_activity`
  MODIFY `id_log` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=142;

--
-- AUTO_INCREMENT untuk tabel `operator`
--
ALTER TABLE `operator`
  MODIFY `id_operator` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `perawatan`
--
ALTER TABLE `perawatan`
  MODIFY `id_perawatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT untuk tabel `perbaikan`
--
ALTER TABLE `perbaikan`
  MODIFY `id_perbaikan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `ruang`
--
ALTER TABLE `ruang`
  MODIFY `id_ruang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD CONSTRAINT `berita_ibfk_1` FOREIGN KEY (`id_inventaris`) REFERENCES `inventaris` (`id_inventaris`);

--
-- Ketidakleluasaan untuk tabel `inventaris`
--
ALTER TABLE `inventaris`
  ADD CONSTRAINT `inventaris_ibfk_2` FOREIGN KEY (`id_ruang`) REFERENCES `ruang` (`id_ruang`),
  ADD CONSTRAINT `inventaris_ibfk_4` FOREIGN KEY (`id_dana`) REFERENCES `dana` (`id_dana`),
  ADD CONSTRAINT `inventaris_ibfk_6` FOREIGN KEY (`id_level`) REFERENCES `level` (`id_level`),
  ADD CONSTRAINT `inventaris_ibfk_7` FOREIGN KEY (`kode_jenis`) REFERENCES `jenis` (`kode_jenis`),
  ADD CONSTRAINT `inventaris_ibfk_8` FOREIGN KEY (`kode_jurusan`) REFERENCES `jurusan` (`kode_jurusan`);

--
-- Ketidakleluasaan untuk tabel `log_activity`
--
ALTER TABLE `log_activity`
  ADD CONSTRAINT `log_activity_ibfk_1` FOREIGN KEY (`id_users`) REFERENCES `users` (`id_users`);

--
-- Ketidakleluasaan untuk tabel `operator`
--
ALTER TABLE `operator`
  ADD CONSTRAINT `operator_ibfk_1` FOREIGN KEY (`id_level`) REFERENCES `level` (`id_level`),
  ADD CONSTRAINT `operator_ibfk_2` FOREIGN KEY (`kode_jurusan`) REFERENCES `jurusan` (`kode_jurusan`);

--
-- Ketidakleluasaan untuk tabel `perawatan`
--
ALTER TABLE `perawatan`
  ADD CONSTRAINT `perawatan_ibfk_1` FOREIGN KEY (`id_inventaris`) REFERENCES `inventaris` (`id_inventaris`);

--
-- Ketidakleluasaan untuk tabel `perbaikan`
--
ALTER TABLE `perbaikan`
  ADD CONSTRAINT `perbaikan_ibfk_2` FOREIGN KEY (`id_perawatan`) REFERENCES `perawatan` (`id_perawatan`),
  ADD CONSTRAINT `perbaikan_ibfk_3` FOREIGN KEY (`id_inventaris`) REFERENCES `inventaris` (`id_inventaris`),
  ADD CONSTRAINT `perbaikan_ibfk_4` FOREIGN KEY (`id_users`) REFERENCES `users` (`id_users`);

--
-- Ketidakleluasaan untuk tabel `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`id_level`) REFERENCES `level` (`id_level`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
