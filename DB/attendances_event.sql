-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 18 Mar 2022 pada 04.27
-- Versi Server: 10.1.19-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `attendances_event`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `user_id` int(10) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` text NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `event` varchar(255) NOT NULL,
  `level` enum('admin','user') NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`user_id`, `username`, `password`, `fullname`, `event`, `level`, `gambar`) VALUES
(2, 'rizkids', 'de744dafea42498c8531c672be1df9f3bc5ef20a', 'Rizki D.S', 'Rakernas', 'admin', '../admin/gambar_admin/avatar.png'),
(5, 'admin', 'd83dd0ef9c5eaf6c35b247e45b4d445705ab539d', 'Administrator', '', 'admin', '../admin/gambar_admin/administrator.jpg'),
(6, 'user1', 'b3daa77b4c04a9551b8781d03191fe098f325e67', 'User 1', '', 'user', '../admin/gambar_admin/user.jpg'),
(7, 'user2', 'a1881c06eec96db9901c7bbfe41c42a3f08e9cb4', 'User 2', '', 'user', '../admin/gambar_admin/avatar.png'),
(8, 'user3', '0b7f849446d3383546d15a480966084442cd2193', 'User 3', '', 'user', '../admin/gambar_admin/avatar2.png'),
(9, 'user4', '06e6eef6adf2e5f54ea6c43c376d6d36605f810e', 'User 4', '', 'user', '../admin/gambar_admin/avatar5.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `event`
--

CREATE TABLE `event` (
  `id` int(10) NOT NULL,
  `nama_event` varchar(255) NOT NULL,
  `tanggal` text NOT NULL,
  `lokasi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `event`
--

INSERT INTO `event` (`id`, `nama_event`, `tanggal`, `lokasi`) VALUES
(1, 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', '07:00 WIB - 21:00 WIB', 'Bandung, Jawa Barat');

-- --------------------------------------------------------

--
-- Struktur dari tabel `karyawan`
--

CREATE TABLE `karyawan` (
  `nik` varchar(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `departemen` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `karyawan`
--

INSERT INTO `karyawan` (`nik`, `nama`, `departemen`) VALUES
('K902207962', 'Rizki Dian Saputro', 'DIVISI KEUANGAN & T.I');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kehadiran`
--

CREATE TABLE `kehadiran` (
  `no` int(10) NOT NULL,
  `nik` varchar(10) CHARACTER SET latin1 NOT NULL,
  `tanggal` datetime NOT NULL,
  `event` varchar(255) CHARACTER SET latin1 NOT NULL,
  `status` enum('Tidak Hadir','Hadir') COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `kehadiran`
--

INSERT INTO `kehadiran` (`no`, `nik`, `tanggal`, `event`, `status`) VALUES
(1, 'K902207962', '2022-03-17 14:23:02', 'Comunication Gathering (Halal Bihalal) 2019', 'Hadir'),
(2, 'asad', '2022-03-17 15:46:58', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Hadir'),
(3, 'asd', '2022-03-17 15:47:04', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Hadir'),
(4, 'K902207962', '2022-03-17 16:38:23', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Hadir');

-- --------------------------------------------------------

--
-- Struktur dari tabel `materi_event`
--

CREATE TABLE `materi_event` (
  `materi_id` int(10) NOT NULL,
  `nama_event` varchar(255) NOT NULL,
  `judul_materi` varchar(255) NOT NULL,
  `materi_file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `materi_event`
--

INSERT INTO `materi_event` (`materi_id`, `nama_event`, `judul_materi`, `materi_file`) VALUES
(1, 'asd', 'asd', '../admin/materi_event/TSD EMPLOYEE.pdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `merchandise`
--

CREATE TABLE `merchandise` (
  `no` int(10) NOT NULL,
  `nik` varchar(10) CHARACTER SET latin1 NOT NULL,
  `tanggal` datetime NOT NULL,
  `event` varchar(255) CHARACTER SET latin1 NOT NULL,
  `status` enum('Belum Ambil','Sudah Ambil') COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `kehadiran`
--
ALTER TABLE `kehadiran`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `materi_event`
--
ALTER TABLE `materi_event`
  ADD PRIMARY KEY (`materi_id`);

--
-- Indexes for table `merchandise`
--
ALTER TABLE `merchandise`
  ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `kehadiran`
--
ALTER TABLE `kehadiran`
  MODIFY `no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `materi_event`
--
ALTER TABLE `materi_event`
  MODIFY `materi_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `merchandise`
--
ALTER TABLE `merchandise`
  MODIFY `no` int(10) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
