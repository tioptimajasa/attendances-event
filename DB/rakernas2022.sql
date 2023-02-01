-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2022 at 10:10 AM
-- Server version: 10.1.19-MariaDB
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
-- Table structure for table `admin`
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
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user_id`, `username`, `password`, `fullname`, `event`, `level`, `gambar`) VALUES
(2, 'rizkids', 'de744dafea42498c8531c672be1df9f3bc5ef20a', 'Rizki D.S', 'Rakernas', 'admin', '../admin/gambar_admin/avatar.png'),
(5, 'admin', 'd83dd0ef9c5eaf6c35b247e45b4d445705ab539d', 'Administrator', '', 'admin', '../admin/gambar_admin/administrator.jpg'),
(6, 'user1', 'b3daa77b4c04a9551b8781d03191fe098f325e67', 'User 1', '', 'user', '../admin/gambar_admin/K772107962.jpg'),
(7, 'P80021', 'c4c014bfdfa4db48768a3344f7e7a6d7f6b655bd', 'Agus Priyabodo', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'user', '../admin/gambar_admin/P80021.jpg'),
(11, 'P78622', '5ce51942b7b33f008887cebb060cc9d6a7f2121d', 'Yul Afian', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'user', '../admin/gambar_admin/P78622.jpg'),
(12, 'P80064', '35cf8cbce06abe7c4a0bc34e2f68c753e1de3d01', 'I Wayan Sukerata', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'user', '../admin/gambar_admin/P80064.jpg'),
(13, 'P77267', '8b52ac521ba7cbc18fc03c1432844ff83a422760', 'Lucia Retna Widarti', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'user', '../admin/gambar_admin/P77267.jpg'),
(14, 'P78581', '02963f869ecc27cc3f8909a081f9297c7fde7808', 'Dodik Sugeng H', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'user', '../admin/gambar_admin/P78581.jpg'),
(15, 'P721900032', '349d1709414f4bfda7af3c61986b33c38f59d092', 'Novian Indra Jaya', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'user', '../admin/gambar_admin/P721900032.jpg'),
(16, 'P80906', '74a63570d53c546e68498a59a1b6be66f8066bd6', 'Andi Pangeran', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'user', '../admin/gambar_admin/P80906.jpg'),
(17, 'P841900002', 'd58f90cfe8ba0a13a6518f29fc38ed857c7da1c4', 'Damar Wicaksono', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'user', '../admin/gambar_admin/P841900002.jpg'),
(18, 'P861900044', '3b80b38a321d0b61e5e0fefd0961d1f27746622d', 'Sariffudin', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'user', '../admin/gambar_admin/P861900044.jpg'),
(19, 'P791900025', '05629b1d7a8e43ee874e3887689a7242b6ae7c21', 'Antonius Eka Wibowo', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'user', '../admin/gambar_admin/P791900025.jpg'),
(20, 'P741900033', '3ad0e442c95645bae45b2f7648f226ae5d3bdc5c', 'Uus Yuswandhika', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'user', '../admin/gambar_admin/P741900033.jpg'),
(21, 'P821900034', '78ceec7115901df09a5ac246e4ba235375ef1b80', 'Andri Prayogo', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'admin', '../admin/gambar_admin/P821900034.jpg'),
(22, 'K772107962', 'd6b4b117750cbb4d193fa37287b953bd32715c5b', 'Andy Wijaya', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'user', '../admin/gambar_admin/K772107962.jpg'),
(23, 'K862207962', 'aee1df4803e7cc32cde88b28d64152d79b31b25d', 'Mohammad Ruli Kusumaputra', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'user', '../admin/gambar_admin/K862207962.jpg'),
(24, 'P842000072', '75e253a4ac55ac536b5a07ff6947cc144a304013', ' Agus Sudrajat  ', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'user', '../admin/gambar_admin/P842000072.jpg'),
(25, 'P911900048', 'c27fe08c413c8eeeb41265e78805c652028d0251', ' Imam Setiawan ', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'user', '../admin/gambar_admin/P911900048.jpg'),
(26, 'P721900016', 'fe9a13b3dcab5c42ec13a3d13643d0f202128a37', ' Zulfahmi ', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'user', '../admin/gambar_admin/P721900016.jpg'),
(27, 'P802100079', '49f6e1775c05373a468a7d0de05faea867c6094e', ' Martupa Sinaga ', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'user', '../admin/gambar_admin/P802100079.jpg'),
(28, 'P721900028', 'ed744cd92961b5f9a1cdfd3d787eb3c7e5fc9f18', ' Yusransyah ', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'user', '../admin/gambar_admin/P721900028.jpg'),
(29, 'P862000064', 'a2583c39492aec5782590194a51b3d4ec33e88bc', ' Paskalis Kevin Lumi ', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'user', '../admin/gambar_admin/P862000064.jpg'),
(30, 'P811900022', '0d3d31046358c6adf0236ed146da37025c070f9d', ' Duhi Harto ', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'user', '../admin/gambar_admin/P811900022.jpg'),
(31, 'P782000065', 'c937fec04b2eec38b36924f53ce4a0ad29b0e407', ' Bobby Riskhana St ', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'user', '../admin/gambar_admin/P782000065.jpg'),
(32, 'P882000053', '04efcd24443378e70a0b81a9c5f93084482b6392', ' Muhammad Rizal Jayadiwangsa ', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'user', '../admin/gambar_admin/P882000053.jpg'),
(33, 'P771900014', 'c9a16bc1dc9629a134e01097d605273d5269af31', ' Achmad Sad Priyo Widodo ', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'user', '../admin/gambar_admin/P771900014.jpg'),
(34, 'K832107962', 'b1e9c11b7a14cfa66de546e3f295cac77e7c7389', ' Yuardi Hendrastiawan ', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'user', '../admin/gambar_admin/K832107962.jpg'),
(35, 'K982109238', 'c914f0e3f54848d8d63d9e95bc755046b421c86b', ' Theresia Yulinar Lumban Gaol ', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'user', '../admin/gambar_admin/K982109238.jpg'),
(36, 'K932107963', 'f2769db8b208749dab4d7156b6259b07abb11a35', ' Muhammad Sholeh ', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'user', '../admin/gambar_admin/K932107963.jpg'),
(37, 'K932109238', '4fcb857fd77cc0f5a3bacf08dda3e82268423c9c', ' Dessy Lina Rachmawati ', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'user', '../admin/gambar_admin/K932109238.jpg'),
(38, 'K942107962', '6acd521bbfeedd1f762f95a2075ccf19837ff97a', ' Phamella Patrycia Monangin ', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'user', '../admin/gambar_admin/K942107962.jpg'),
(39, 'K872207963', 'f3e0ae349927c1db051b4d7f98d6f92dfcddacfb', ' Aurapurify  ', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'user', '../admin/gambar_admin/K872207963.jpg'),
(40, 'K972207963', '8906d27ebcd6b927f66a2bf006cdaa149b028d2c', ' Anak Agung Istri Widya ', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'user', '../admin/gambar_admin/K972207963.jpg'),
(41, 'K912207963', '4fb55be0a29fa4356aa43080ee7b1a0793693e46', ' Pungki Miladi  ', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'user', '../admin/gambar_admin/K912207963.jpg'),
(42, 'K912107963', '38d3d11b91ce91cc6b15d7797f028f42d9fbfc89', ' Fitria Wijayanti ', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'user', '../admin/gambar_admin/K912107963.jpg'),
(43, 'K782009238', '05c5f67e9a34aba8eca0266a7bc738c3465370e6', 'Muliyadi', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'user', '../admin/gambar_admin/K782009238.jpg'),
(44, 'P802000051', '6f930406e1f573ae26c1c45f5ec45da61d4da5ed', 'Agus Savutra', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'user', '../admin/gambar_admin/P802000051.jpg'),
(45, 'P842100083', 'b30b9a82b2576072284ecf157eeb46887c7319fb', 'Fauzan Afriyanto', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'user', '../admin/gambar_admin/P842100083.jpg'),
(46, 'P801900038', 'ced06bb60bfd6a4aeb9490d15734c721459e0945', 'Reki Jaya Putra', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'user', '../admin/gambar_admin/P801900038.jpg'),
(47, 'P812000060', 'a1565d7d86d09ec2458319cdfa7629b367e1ae30', 'Yohanda Prayoga', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'user', '../admin/gambar_admin/P812000060.jpg'),
(48, 'K872207962', '8177db297ceda6936c8a521b8ec53d438647fc17', 'Jeldi Mandalika', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'user', '../admin/gambar_admin/K872207962.jpg'),
(49, 'K872107936', '759981c4f883e7a80348b7780c050c53b7205bf1', 'Yoga Anugrah', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'user', '../admin/gambar_admin/K872107936.jpg'),
(50, 'P672000062', '611772425f14dc291eacfae5df355da1796a8957', 'Firdiansyah', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'user', '../admin/gambar_admin/P672000062.jpg'),
(51, 'P772000061', '1eacd5018f33408e28978b14bc5141dcdfba6d09', 'Muh. Nurassalam. A', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'user', '../admin/gambar_admin/P772000061.jpg'),
(52, 'K822000007', '0e64ff6e26289b88966a0775770f8a8f41906f97', 'Rahmat Ali ', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'user', '../admin/gambar_admin/K822000007.jpg'),
(53, 'K812107962', '3123cf4196c50ef88990bd7e1f3d736303850c4b', 'Edo Widodo', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'user', '../admin/gambar_admin/K812107962.jpg'),
(54, 'K822010000', 'b2d112707eb7351b580ffb2eaaf54eb35cc9b2d5', 'Rico Ferdian Imam ', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'user', '../admin/gambar_admin/K822010000.jpg'),
(55, 'K862108999', '353c3e79a24794cdbe8677af971dce46611c412b', 'Muh. Noor', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'user', '../admin/gambar_admin/K862108999.jpg'),
(56, 'P891900039', '47c8ba18ed6dd7b958c92624d13b0743a2ecb4a6', 'Asrul', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'user', '../admin/gambar_admin/P891900039.jpg'),
(57, 'P932000054', 'defb738dc28d40611c3ddf716f3408abf79ed8ca', 'Juniarto Parlindungan Sinaga', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'admin', '../admin/gambar_admin/P932000054.jpg'),
(58, 'K992107962', '030210a3e381223bf2844f105ddce710044d2503', 'Kiranastari Asoka Sumantri', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'admin', '../admin/gambar_admin/K992107962.jpg'),
(59, 'K932000046', 'b620f10dd0685cf96a8e5c3d318bd0c8316b665d', 'Yuda Gunawan', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'admin', '../admin/gambar_admin/K932000046.jpg'),
(60, 'P881900005', '010111bf1f43ed31afebd7360d72a7ca41fd4a4b', 'Doddy Kurnia Putra', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'admin', '../admin/gambar_admin/P881900005.jpg'),
(61, 'K902107963', '3b9deb464a99f83b02f3be34b88d197827ab9ad4', 'Ari Wiguna', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'admin', '../admin/gambar_admin/K902107963.jpg'),
(62, 'P891900050', '3b7ff7b8088f0ef52f025c321483fef24777abaf', 'Zulfikar Rizki', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'admin', '../admin/gambar_admin/P891900050.jpg'),
(63, 'K932207962', 'ef6475c6c3953a128d7868bbf4eef2d8dd49361b', 'Hana Ragil Ayu Asmara', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'admin', '../admin/gambar_admin/K932207962.jpg'),
(64, 'P922100077', 'e39040a15f4aff8b246af2d01dee9406a81f27de', 'Syamsul Jauhari', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'admin', '../admin/gambar_admin/P922100077.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(10) NOT NULL,
  `nama_event` varchar(255) NOT NULL,
  `tanggal` text NOT NULL,
  `lokasi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `nama_event`, `tanggal`, `lokasi`) VALUES
(1, 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Senin s/d Rabu | 28 s/d 30 Maret 2022', 'Palace Hotel, Cipanas\r\nJl. Raya Cipanas KM 81 Cipanas, Kec. Cipanas,\r\nKabupaten Cianjur, Jawa Barat 43253');

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `nik` varchar(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `departemen` varchar(50) NOT NULL,
  `no` int(11) NOT NULL,
  `type_kamar` varchar(50) NOT NULL,
  `no_kamar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`nik`, `nama`, `departemen`, `no`, `type_kamar`, `no_kamar`) VALUES
('K772107962', 'Andy Wijaya', 'MANAGER Bisnis Rental & Usla', 13, 'Twin', 2127),
('K782009238', 'Muliyadi', 'Manager Area Banda Aceh', 34, 'Twin', 2310),
('K812107962', 'Edo Widodo', 'Manager Area Jakarta', 44, 'Twin', 2121),
('K822000007', 'Rahmat Ali ', 'Manager Area Gorontalo', 43, 'Twin', 2318),
('K822010000', 'Rico Ferdian Imam ', 'Manager Area Surabaya', 45, 'Twin', 2121),
('K832107962', ' Yuardi Hendrastiawan ', 'Regional Manager Surabaya', 25, 'Twin', 2208),
('K862108999', 'Muh. Noor', 'Manager Area Ampenan', 46, 'Twin', 2323),
('K862207962', 'Mohammad Ruli Kusumaputra', 'Asmen SPI', 14, 'Twin', 2128),
('K872107936', 'Yoga Anugrah', 'Manager Area Banjarmasin', 40, 'Twin', 2315),
('K872207962', 'Jeldi Mandalika', 'Manager Area Manado', 39, 'Twin', 2312),
('K872207963', ' Aurapurify  ', 'Marketing Eksekutif Makassar', 30, 'Twin', 2212),
('K902107963', 'Ari Wiguna', 'Staff Bisnis Rental & Usla', 52, 'Twin', 2326),
('K912107963', ' Fitria Wijayanti ', 'Marketing Eksekutif Surabaya', 33, 'Twin', 2309),
('K912207963', ' Pungki Miladi  ', 'Marketing Eksekutif Semarang', 32, 'Twin', 2309),
('K932000046', 'Yuda Gunawan', 'Staff Bisnis OJP', 50, 'Twin', 2325),
('K932107963', ' Muhammad Sholeh ', 'Marketing Eksekutif Pekanbaru', 27, 'Twin', 2209),
('K932109238', ' Dessy Lina Rachmawati ', 'Marketing Eksekutif Balikpapan', 28, 'Twin', 2211),
('K932207962', 'Hana Ragil Ayu Asmara', 'Sekretaris ', 54, 'Twin', 2330),
('K942107962', ' Phamella Patrycia Monangin ', 'Marketing Eksekutif Manado', 29, 'Twin', 2211),
('K972207963', ' Anak Agung Istri Widya ', 'Marketing Eksekutif Denpasar', 31, 'Twin', 2212),
('K982109238', ' Theresia Yulinar Lumban Gaol ', 'Marketing Eksekutif Medan', 26, 'Twin', 2209),
('K992107962', 'Kiranastari Asoka Sumantri', 'Staff Bisnis Rental & Usla', 49, 'Twin', 2323),
('P672000062', 'Firdiansyah', 'Manager Area Pontianak', 41, 'Twin', 2315),
('P721900016', ' Zulfahmi ', 'Regional Manager Pekanbaru', 17, 'Twin', 2138),
('P721900028', ' Yusransyah ', 'Regional Manager Balikpapan', 19, 'Twin', 2202),
('P721900032', 'Novian Indra Jaya', 'GM Outs & JP', 6, 'Queen Single', 2007),
('P741900033', 'Uus Yuswandhika', 'MANAGER SDM', 11, 'Twin', 2327),
('P771900014', ' Achmad Sad Priyo Widodo ', 'Regional Manager Semarang', 24, 'Twin', 2208),
('P772000061', 'Muh. Nurassalam. A', 'Manager Area Palu', 42, 'Twin', 2318),
('P77267', 'Lucia Retna Widarti', 'GM SDM & Log', 4, 'Queen Single', 2003),
('P782000065', ' Bobby Riskhana St ', 'Regional Manager Denpasar', 22, 'Twin', 2207),
('P78581', 'Dodik Sugeng H', 'GM Rental & USLA', 5, 'Queen Single', 2004),
('P78622', 'Yul Afian', 'Direktur ', 2, 'Suite', 2216),
('P791900025', 'Antonius Eka Wibowo', 'MANAGER Logistik', 10, 'Twin', 2327),
('P80021', 'Agus Priyabodo', 'Direktur Utama', 1, 'Suite', 2215),
('P80064', 'I Wayan Sukerata', 'GM Keuangan & TI', 3, 'Queen Single', 2136),
('P801900038', 'Reki Jaya Putra', 'Manager Area Jambi', 37, 'Twin', 2311),
('P802000051', 'Agus Savutra', 'Manager Area Padang', 35, 'Twin', 2310),
('P802100079', ' Martupa Sinaga ', 'Regional Manager Palembang', 18, 'Twin', 2202),
('P80906', 'Andi Pangeran', 'Kepala SPI', 7, 'Queen Single', 2326),
('P811900022', ' Duhi Harto ', 'Regional Manager Makassar', 21, 'Twin', 2205),
('P812000060', 'Yohanda Prayoga', 'Manager Area Lampung', 38, 'Twin', 2312),
('P821900034', 'Andri Prayogo', 'MANAGER TI', 12, 'Twin', 2127),
('P841900002', 'Damar Wicaksono', 'MANAGER Outs & JP', 8, 'Twin', 2119),
('P842000072', ' Agus Sudrajat  ', 'Regional Manager Jakarta', 15, 'Twin', 2128),
('P842100083', 'Fauzan Afriyanto', 'Manager Area Batam', 36, 'Twin', 2311),
('P861900044', 'Sariffudin', 'MANAGER Keuangan', 9, 'Twin', 2119),
('P862000064', ' Paskalis Kevin Lumi ', 'Regional Manager Manado', 20, 'Twin', 2205),
('P881900005', 'Doddy Kurnia Putra', 'Staff SDM', 51, 'Twin', 2325),
('P882000053', ' Muhammad Rizal Jayadiwangsa ', 'Regional Manager Bandung', 23, 'Twin', 2207),
('P891900039', 'Asrul', 'Manager Area Kendari', 47, 'Twin', 2323),
('P891900050', 'Zulfikar Rizki', 'Staff keuangan', 53, 'Twin', 2326),
('P911900048', ' Imam Setiawan ', 'Regional Manager Medan', 16, 'Twin', 2138),
('P922100077', 'Syamsul Jauhari', 'Staff Bisnis OJP', 55, 'Twin', 2330),
('P932000054', 'Juniarto Parlindungan Sinaga', 'Staff keuangan', 48, 'Twin', 2323);

-- --------------------------------------------------------

--
-- Table structure for table `kehadiran`
--

CREATE TABLE `kehadiran` (
  `no` int(10) NOT NULL,
  `nik` varchar(10) CHARACTER SET latin1 NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` time NOT NULL,
  `event` varchar(255) CHARACTER SET latin1 NOT NULL,
  `status` enum('Tidak Hadir','Hadir') COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `kehadiran`
--

INSERT INTO `kehadiran` (`no`, `nik`, `tanggal`, `waktu`, `event`, `status`) VALUES
(26, 'P842100083', '2022-03-28', '07:28:26', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Hadir'),
(27, 'P821900034', '2022-03-28', '13:58:07', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Hadir'),
(28, 'K772107962', '2022-03-28', '14:08:41', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Hadir'),
(29, 'P882000053', '2022-03-28', '14:40:33', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Hadir'),
(30, 'P841900002', '2022-03-28', '15:10:45', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Hadir'),
(31, 'P771900014', '2022-03-28', '15:21:00', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Hadir'),
(32, 'P80064', '2022-03-28', '15:37:37', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Hadir'),
(33, 'P802000051', '2022-03-28', '15:49:53', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Hadir'),
(34, 'K832107962', '2022-03-28', '16:21:27', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Hadir'),
(35, 'K992107962', '2022-03-28', '16:25:45', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Hadir'),
(36, 'P782000065', '2022-03-28', '16:37:35', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Hadir'),
(37, 'K932000046', '2022-03-28', '16:59:17', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Hadir'),
(38, 'K972207963', '2022-03-28', '17:11:00', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Hadir'),
(39, 'K912207963', '2022-03-28', '17:19:05', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Hadir'),
(40, 'P861900044', '2022-03-28', '17:22:44', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Hadir'),
(41, 'K822010000', '2022-03-28', '18:12:26', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Hadir'),
(42, 'K872107936', '2022-03-28', '18:15:00', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Hadir'),
(43, 'P721900032', '2022-03-28', '18:31:16', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Hadir'),
(44, 'P801900038', '2022-03-28', '19:38:35', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Hadir'),
(45, 'P812000060', '2022-03-28', '19:43:14', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Hadir'),
(46, 'P802100079', '2022-03-28', '20:48:12', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Hadir'),
(47, 'P672000062', '2022-03-28', '21:03:00', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Hadir'),
(48, 'K942107962', '2022-03-28', '22:07:32', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Hadir'),
(49, 'K932207962', '2022-03-28', '22:08:19', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Hadir'),
(50, 'K982109238', '2022-03-28', '22:09:33', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Hadir'),
(51, 'K872207963', '2022-03-28', '22:09:58', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Hadir'),
(52, 'K912107963', '2022-03-28', '22:10:03', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Hadir'),
(53, 'K932109238', '2022-03-28', '22:10:21', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Hadir'),
(54, 'K782009238', '2022-03-28', '22:11:27', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Hadir'),
(55, 'K812107962', '2022-03-28', '22:12:12', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Hadir'),
(56, 'K822000007', '2022-03-28', '22:12:32', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Hadir'),
(57, 'K862207962', '2022-03-28', '22:13:14', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Hadir'),
(58, 'K932107963', '2022-03-28', '22:13:50', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Hadir'),
(59, 'P862000064', '2022-03-28', '22:15:40', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Hadir'),
(60, 'P811900022', '2022-03-28', '22:15:55', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Hadir'),
(61, 'K902107963', '2022-03-28', '22:19:02', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Hadir'),
(62, 'P77267', '2022-03-28', '22:19:57', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Hadir'),
(63, 'P911900048', '2022-03-28', '22:21:20', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Hadir'),
(64, 'K872207962', '2022-03-28', '22:25:48', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Hadir'),
(65, 'P721900016', '2022-03-28', '22:27:30', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Hadir'),
(66, 'K862108999', '2022-03-28', '22:28:39', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Hadir'),
(67, 'P80906', '2022-03-28', '22:54:16', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Hadir'),
(68, 'P721900028', '2022-03-28', '22:54:52', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Hadir'),
(69, 'P842000072', '2022-03-28', '22:55:11', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Hadir'),
(70, 'P80021', '2022-03-28', '22:55:39', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Hadir'),
(71, 'P891900050', '2022-03-28', '22:56:03', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Hadir'),
(72, 'P78622', '2022-03-28', '22:56:19', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Hadir'),
(73, 'P741900033', '2022-03-28', '22:57:52', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Hadir'),
(74, 'P922100077', '2022-03-28', '22:58:03', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Hadir'),
(75, 'P881900005', '2022-03-28', '23:02:09', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Hadir'),
(76, 'P791900025', '2022-03-28', '23:03:24', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Hadir'),
(77, 'P78581', '2022-03-28', '23:11:14', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Hadir'),
(78, 'P932000054', '2022-03-28', '23:12:33', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Hadir'),
(79, 'P772000061', '2022-03-28', '23:13:23', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Hadir'),
(80, 'K862207962', '2022-03-29', '01:40:35', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Hadir'),
(81, 'P841900002', '2022-03-29', '06:04:36', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Hadir'),
(82, 'P721900032', '2022-03-29', '06:36:02', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Hadir'),
(83, 'P772000061', '2022-03-29', '07:02:29', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Hadir'),
(84, 'K992107962', '2022-03-29', '07:11:13', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Hadir'),
(85, 'P802100079', '2022-03-29', '07:14:35', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Hadir'),
(86, 'P911900048', '2022-03-29', '07:16:03', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Hadir'),
(87, 'p812000060', '2022-03-29', '07:16:08', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Hadir'),
(88, 'K872207962', '2022-03-29', '07:16:45', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Hadir'),
(89, 'P721900016', '2022-03-29', '07:16:51', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Hadir'),
(90, 'P801900038', '2022-03-29', '07:17:01', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Hadir'),
(91, 'K872107936', '2022-03-29', '07:17:33', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Hadir'),
(92, 'P672000062', '2022-03-29', '07:17:51', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Hadir'),
(93, 'P861900044', '2022-03-29', '07:18:06', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Hadir'),
(94, 'P842000072', '2022-03-29', '07:19:06', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Hadir'),
(95, 'P842100083', '2022-03-29', '07:19:16', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Hadir'),
(96, 'K812107962', '2022-03-29', '07:19:18', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Hadir'),
(97, 'K862108999', '2022-03-29', '07:19:50', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Hadir'),
(98, 'P862000064', '2022-03-29', '07:21:08', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Hadir'),
(99, 'K822000007', '2022-03-29', '07:21:08', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Hadir'),
(100, 'K772107962', '2022-03-29', '07:21:15', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Hadir'),
(101, 'K902107963', '2022-03-29', '07:21:44', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Hadir'),
(102, 'K972207963', '2022-03-29', '07:21:46', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Hadir'),
(103, 'K912107963', '2022-03-29', '07:22:15', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Hadir'),
(104, 'P922100077', '2022-03-29', '07:22:37', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Hadir'),
(105, 'P802000051', '2022-03-29', '07:22:50', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Hadir'),
(106, 'K782009238', '2022-03-29', '07:23:01', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Hadir'),
(107, 'K912207963', '2022-03-29', '07:23:32', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Hadir'),
(108, 'K982109238', '2022-03-29', '07:23:33', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Hadir'),
(109, 'K872207963', '2022-03-29', '07:24:40', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Hadir'),
(110, 'K942107962', '2022-03-29', '07:24:43', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Hadir'),
(111, 'P78622', '2022-03-29', '07:24:58', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Hadir'),
(112, 'K832107962', '2022-03-29', '07:25:29', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Hadir'),
(113, 'k932000046', '2022-03-29', '07:26:36', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Hadir'),
(114, 'P811900022', '2022-03-29', '07:27:16', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Hadir'),
(115, 'P782000065', '2022-03-29', '07:27:25', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Hadir'),
(116, 'K932107963', '2022-03-29', '07:27:41', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Hadir'),
(117, 'K932109238', '2022-03-29', '07:30:43', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Hadir'),
(118, 'K822010000', '2022-03-29', '07:30:49', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Hadir'),
(119, 'P771900014', '2022-03-29', '07:33:10', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Hadir'),
(120, 'P882000053', '2022-03-29', '07:33:18', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Hadir'),
(121, 'P791900025', '2022-03-29', '07:33:43', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Hadir'),
(122, 'P881900005', '2022-03-29', '07:34:03', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Hadir'),
(123, 'P932000054', '2022-03-29', '07:39:14', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Hadir'),
(124, 'P821900034', '2022-03-29', '07:39:25', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Hadir'),
(125, 'K932207962', '2022-03-29', '07:40:01', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Hadir'),
(126, 'P721900028', '2022-03-29', '07:40:22', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Hadir'),
(127, 'P80021', '2022-03-29', '07:40:43', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Hadir'),
(128, 'P80906', '2022-03-29', '07:40:55', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Hadir'),
(129, 'P80064', '2022-03-29', '07:41:07', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Hadir'),
(130, 'P891900050', '2022-03-29', '07:41:29', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Hadir'),
(131, 'P741900033', '2022-03-29', '07:42:37', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Hadir'),
(132, 'P78581', '2022-03-29', '07:43:19', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Hadir'),
(133, 'P77267', '2022-03-29', '07:44:00', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Hadir'),
(134, 'P841900002', '2022-03-30', '06:46:25', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Hadir'),
(135, 'K942107962', '2022-03-30', '06:51:06', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Hadir'),
(136, 'P802000051', '2022-03-30', '06:53:45', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Hadir'),
(137, 'K862108999', '2022-03-30', '06:54:18', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Hadir'),
(138, 'P721900016', '2022-03-30', '07:21:17', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Hadir'),
(139, 'P782000065', '2022-03-30', '07:21:18', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Hadir'),
(140, 'K932000046', '2022-03-30', '07:22:50', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Hadir'),
(141, 'P721900028', '2022-03-30', '07:25:11', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Hadir'),
(142, 'P802100079', '2022-03-30', '07:25:12', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Hadir'),
(143, 'P801900038', '2022-03-30', '07:25:22', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Hadir'),
(144, 'K902107963', '2022-03-30', '07:25:51', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Hadir'),
(145, 'P842000072', '2022-03-30', '07:26:02', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Hadir'),
(146, 'K862207962', '2022-03-30', '07:26:15', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Hadir'),
(147, 'K812107962', '2022-03-30', '07:26:26', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Hadir'),
(148, 'P842100083', '2022-03-30', '07:26:38', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Hadir'),
(149, 'P772000061', '2022-03-30', '07:26:48', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Hadir'),
(150, 'K872107936', '2022-03-30', '07:27:14', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Hadir'),
(151, 'P811900022', '2022-03-30', '07:27:32', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Hadir'),
(152, 'P791900025', '2022-03-30', '07:28:19', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Hadir'),
(153, 'K782009238', '2022-03-30', '07:28:28', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Hadir'),
(154, 'K872207962', '2022-03-30', '07:28:33', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Hadir'),
(155, 'K912207963', '2022-03-30', '07:28:37', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Hadir'),
(156, 'P741900033', '2022-03-30', '07:28:40', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Hadir'),
(157, 'K822000007', '2022-03-30', '07:28:41', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Hadir'),
(158, 'P812000060', '2022-03-30', '07:29:11', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Hadir'),
(159, 'K932107963', '2022-03-30', '07:29:40', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Hadir'),
(160, 'P862000064', '2022-03-30', '07:29:41', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Hadir'),
(161, 'K992107962', '2022-03-30', '07:29:59', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Hadir'),
(162, 'P882000053', '2022-03-30', '07:30:19', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Hadir'),
(163, 'P911900048', '2022-03-30', '07:30:55', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Hadir'),
(164, 'P771900014', '2022-03-30', '07:31:25', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Hadir'),
(165, 'K832107962', '2022-03-30', '07:32:03', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Hadir'),
(166, 'P78622', '2022-03-30', '07:32:19', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Hadir'),
(167, 'P77267', '2022-03-30', '07:32:37', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Hadir'),
(168, 'P821900034', '2022-03-30', '07:32:46', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Hadir'),
(169, 'K772107962', '2022-03-30', '07:33:03', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Hadir'),
(170, 'P80064', '2022-03-30', '07:33:15', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Hadir'),
(171, 'P78581', '2022-03-30', '07:33:20', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Hadir'),
(172, 'P922100077', '2022-03-30', '07:34:14', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Hadir'),
(173, 'K932109238', '2022-03-30', '07:34:28', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Hadir'),
(174, 'K912107963', '2022-03-30', '07:34:38', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Hadir'),
(175, 'K982109238', '2022-03-30', '07:34:51', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Hadir'),
(176, 'K872207963', '2022-03-30', '07:36:28', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Hadir'),
(177, 'P672000062', '2022-03-30', '07:37:25', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Hadir'),
(178, 'K972207963', '2022-03-30', '07:37:49', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Hadir'),
(179, 'K932207962', '2022-03-30', '07:40:12', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Hadir'),
(180, 'P721900032', '2022-03-30', '07:40:42', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Hadir'),
(181, 'P80021', '2022-03-30', '07:40:55', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Hadir'),
(182, 'P80906', '2022-03-30', '07:41:07', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Hadir'),
(183, 'P861900044', '2022-03-30', '07:41:22', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Hadir'),
(184, 'P881900005', '2022-03-30', '07:41:40', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Hadir'),
(185, 'P891900050', '2022-03-30', '07:41:57', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Hadir'),
(186, 'P932000054', '2022-03-30', '07:42:12', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Hadir'),
(187, 'K822010000', '2022-03-30', '08:10:04', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Hadir');

-- --------------------------------------------------------

--
-- Table structure for table `materi_event`
--

CREATE TABLE `materi_event` (
  `materi_id` int(10) NOT NULL,
  `nama_event` varchar(255) NOT NULL,
  `judul_materi` varchar(255) NOT NULL,
  `materi_file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `materi_event`
--

INSERT INTO `materi_event` (`materi_id`, `nama_event`, `judul_materi`, `materi_file`) VALUES
(3, 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Undangan Rakernas 2022', '../admin/materi_event/UNDANGAN RAKER REV RUNDOWN v4.pdf'),
(4, 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Presentasi ME', '../admin/materi_event/Presentasi ME.pptx'),
(5, 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Presentasi SPI', '../admin/materi_event/Rakernas 30 Maret 2022.pptx'),
(6, 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Presentasi RM Yuardi Hendrastiawan', '../admin/materi_event/REVISI - Materi Presentasi RM Yuardi Hendrastiawan.pdf'),
(7, 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Presentasi I Wayan Sukerata (GM Keuangan & TI)', '../admin/materi_event/Present Keuangan.pptx'),
(8, 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Presentasi GM Outsourcing', '../admin/materi_event/Materi Rakernas OJP 2022.pdf'),
(9, 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Presentasi Direktur', '../admin/materi_event/SPEECH DIREKTUR RAKERNAS 29 March 2022.pdf'),
(10, 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Presentasi Direktur Utama', '../admin/materi_event/Speech Direktur Utama Rakernas 2022.pdf'),
(12, 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Presentasi Komisaris Utama', '../admin/materi_event/Sambutan Komisaris.pdf'),
(13, 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Presentasi GM Rental dan Usla', '../admin/materi_event/GM Rental dan Usla.pdf'),
(14, 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Presentasi Divisi SDM & Logistik', '../admin/materi_event/Presentasi Divisi SDM & Logistik Tahun 2022.pptx'),
(15, 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Presentasi Divisi TI', '../admin/materi_event/Presentasi Div TI.pptx'),
(16, 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Presentasi Leadership', '../admin/materi_event/LEADERSHIP SESSION for PT. POJ.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `merchandise`
--

CREATE TABLE `merchandise` (
  `no` int(10) NOT NULL,
  `nik` varchar(10) CHARACTER SET latin1 NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` time NOT NULL,
  `event` varchar(255) CHARACTER SET latin1 NOT NULL,
  `status` enum('Belum Ambil','Sudah Ambil') COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `merchandise`
--

INSERT INTO `merchandise` (`no`, `nik`, `tanggal`, `waktu`, `event`, `status`) VALUES
(3, 'P881900005', '2022-03-28', '12:22:22', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Sudah Ambil'),
(4, 'P80064', '2022-03-28', '12:23:17', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Sudah Ambil'),
(5, 'P791900025', '2022-03-28', '12:23:35', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Sudah Ambil'),
(6, 'K872207963', '2022-03-28', '12:24:10', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Sudah Ambil'),
(7, 'K812107962', '2022-03-28', '12:24:43', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Sudah Ambil'),
(8, 'K902107963', '2022-03-28', '12:25:24', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Sudah Ambil'),
(9, 'P821900034', '2022-03-28', '12:25:47', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Sudah Ambil'),
(10, 'P842000072', '2022-03-28', '12:49:18', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Sudah Ambil'),
(11, 'P932000054', '2022-03-28', '12:49:42', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Sudah Ambil'),
(12, 'P891900050', '2022-03-28', '12:50:05', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Sudah Ambil'),
(13, 'P80906', '2022-03-28', '13:41:01', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Sudah Ambil'),
(14, 'P721900032', '2022-03-28', '13:48:35', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Sudah Ambil'),
(15, 'K932107963', '2022-03-28', '15:48:40', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Sudah Ambil'),
(16, 'P861900044', '2022-03-28', '17:23:17', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Sudah Ambil'),
(17, 'K822010000', '2022-03-28', '18:13:16', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Sudah Ambil'),
(18, 'K942107962', '2022-03-28', '22:07:59', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Sudah Ambil'),
(19, 'K982109238', '2022-03-28', '22:09:52', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Sudah Ambil'),
(20, 'K932109238', '2022-03-28', '22:10:50', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Sudah Ambil'),
(21, 'P862000064', '2022-03-28', '22:16:48', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Sudah Ambil'),
(22, 'P811900022', '2022-03-28', '22:17:15', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Sudah Ambil'),
(23, 'P882000053', '2022-03-28', '22:35:54', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Sudah Ambil'),
(24, 'P842100083', '2022-03-29', '17:47:34', 'Rakernas PT PESONNA OPTIMA JASA Tahun 2022', 'Sudah Ambil');

-- --------------------------------------------------------

--
-- Table structure for table `uang_saku`
--

CREATE TABLE `uang_saku` (
  `no` int(10) NOT NULL,
  `nik` varchar(10) NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` time NOT NULL,
  `event` varchar(255) NOT NULL,
  `status` enum('Belum Ambil','Sudah Ambil') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
-- Indexes for table `uang_saku`
--
ALTER TABLE `uang_saku`
  ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `kehadiran`
--
ALTER TABLE `kehadiran`
  MODIFY `no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=188;
--
-- AUTO_INCREMENT for table `materi_event`
--
ALTER TABLE `materi_event`
  MODIFY `materi_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `merchandise`
--
ALTER TABLE `merchandise`
  MODIFY `no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `uang_saku`
--
ALTER TABLE `uang_saku`
  MODIFY `no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
