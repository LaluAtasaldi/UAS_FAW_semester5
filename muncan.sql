-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 04, 2019 at 02:09 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `muncan`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_pariwisata`
--

CREATE TABLE `tb_pariwisata` (
  `id_pariwisata` int(5) NOT NULL,
  `nama_wisata` varchar(30) NOT NULL,
  `daerah` varchar(30) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pariwisata`
--

INSERT INTO `tb_pariwisata` (`id_pariwisata`, `nama_wisata`, `daerah`, `gambar`, `keterangan`) VALUES
(1, 'Wisata Air Embung Muncan', 'Muncan IV', '50851681_2020564274678156_5942320895941935104_o.jpg', ''),
(2, 'Wisata Air Embung Lauk Muncan', 'Muncan II', '50568764_2011790955555488_7562144846438203392_o.jpg', ''),
(3, 'Masjid Al-Istiqomah I', 'Muncan II', '27655237_1584285354972719_1607562075644556042_n.jpg', ''),
(4, 'Wisata Malam Air Embung Muncan', 'Muncan II', '27710301_1585537901514131_7648449909204994741_o.jpg', ''),
(5, 'Hiburan Live Musik', 'Muncan II', '40588355_1830230523711533_1209572986529513472_o.jpg', ''),
(6, 'Wisata Sawah', 'Muncan I', '51056072_2552662828083531_7972572440935006208_o.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_perkebunan`
--

CREATE TABLE `tb_perkebunan` (
  `id_perkebunan` int(5) NOT NULL,
  `pemilik` varchar(30) NOT NULL,
  `daerah` varchar(20) NOT NULL,
  `luas` varchar(10) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_perkebunan`
--

INSERT INTO `tb_perkebunan` (`id_perkebunan`, `pemilik`, `daerah`, `luas`, `gambar`, `keterangan`) VALUES
(1, 'Haji Ali', 'Montong Batu II', '120 m', '111.jpg', 'ditanami kayu jati'),
(2, 'H. Dahlan', 'Muncan III', '50 m2', '1854427_eec1080c-688b-4102-8bb2-272ee5d62796.jpg', 'bukit'),
(4, 'H Dahlan', 'Muncan I', '59 m2', '11.jpg', ''),
(5, 'Ruslan', 'Muncan IV', '320 m2', '485095_10151315614992503_2041753684_n1.jpg', ''),
(6, 'Muh Todi', 'Muncan I', '200 m2', '485095_10151315614992503_2041753684_n.jpg', 'milik'),
(7, 'Bukir', 'Montong Tanggak', '80 m2', '485095_10151315614992503_2041753684_n.jpg', 'ditanami pohon pisang'),
(8, 'dai', 'Lingkung', '134 m2', '49756004_1260856787385536_925362085586534400_o.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pertanian`
--

CREATE TABLE `tb_pertanian` (
  `id_pertanian` int(5) NOT NULL,
  `pemilik` varchar(30) NOT NULL,
  `luas` varchar(10) NOT NULL,
  `daerah` varchar(30) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pertanian`
--

INSERT INTO `tb_pertanian` (`id_pertanian`, `pemilik`, `luas`, `daerah`, `gambar`, `keterangan`) VALUES
(1, 'Kofih', '302 m2', 'Muncan IV', '1854427_eec1080c-688b-4102-8bb2-272ee5d627961.jpg', 'ditanami padi'),
(2, 'Muridin', '128 m2', 'Lingkung', 'F-SIAP-SIAP-PANEN.jpg', 'Ditanami padi');

-- --------------------------------------------------------

--
-- Table structure for table `tb_perternakan`
--

CREATE TABLE `tb_perternakan` (
  `id_perternakan` int(5) NOT NULL,
  `pemilik` varchar(30) NOT NULL,
  `jenis_hewan` varchar(30) NOT NULL,
  `jumlah` int(10) NOT NULL,
  `daerah` varchar(30) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_perternakan`
--

INSERT INTO `tb_perternakan` (`id_perternakan`, `pemilik`, `jenis_hewan`, `jumlah`, `daerah`, `keterangan`) VALUES
(1, 'Hiak', 'Sapi', 23, 'Muncan I', ''),
(2, 'Akang', 'Kuda', 30, 'Lingkung', 'jual beli');

-- --------------------------------------------------------

--
-- Table structure for table `tb_produkdekor`
--

CREATE TABLE `tb_produkdekor` (
  `id_dekor` int(5) NOT NULL,
  `nama_dekor` varchar(50) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `harga` int(12) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_produkdekor`
--

INSERT INTO `tb_produkdekor` (`id_dekor`, `nama_dekor`, `gambar`, `harga`, `keterangan`) VALUES
(1, 'Pariasi Biru', 'Jellyfish.jpg', 1000000, '3 kali 5 meter'),
(4, 'biasa saja', 'Chrysanthemum.jpg', 600000, 'biasa'),
(5, 'anak muda', 'Tulips.jpg', 9000000, 'indah sekali'),
(6, 'Red Flower', 'Koala.jpg', 500000, '5 kali 2 meter'),
(7, 'gggg', 'Koala.jpg', 70, 'hsshshs'),
(8, 'Baru', 'Tulips.jpg', 10010101, 'tes'),
(9, 'erna style', 'Hydrangeas.jpg', 12000000, 'limitid'),
(10, 'Unggu Glow', '1854427_eec1080c-688b-4102-8bb2-272ee5d62796.jpg', 700000, 'DjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjlllllllaaaalllllllllllllADJFSFJWEJFKKJSHFV'),
(11, 'HJAI', '3096181_xperia_z_ultra-wallpaper-1920x1080.jpg', 40000000, ''),
(12, 'MUAND', '24993480_1529165653818023_5696551826023323972_n.jpg', 378220, ''),
(13, 'KILAAUH', '3a87d7a587087f02f23be1b13fd48e91.jpg', 2147483647, ''),
(14, 'HAAGDH', '25151906_1529140810487174_9003116010451356125_n.jpg', 6633311, 'LAMAA SEKALI');

-- --------------------------------------------------------

--
-- Table structure for table `tb_produkmebel`
--

CREATE TABLE `tb_produkmebel` (
  `id_mebel` int(10) NOT NULL,
  `nama_mebel` varchar(50) NOT NULL,
  `jenis_mebel` varchar(50) NOT NULL,
  `harga_mebel` int(9) NOT NULL,
  `nama_penjual` varchar(50) NOT NULL,
  `gambar_mebel` varchar(50) NOT NULL,
  `keterangan_mebel` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_produkmebel`
--

INSERT INTO `tb_produkmebel` (`id_mebel`, `nama_mebel`, `jenis_mebel`, `harga_mebel`, `nama_penjual`, `gambar_mebel`, `keterangan_mebel`) VALUES
(1, 'Lemari Gandeng 3', 'Lemari', 3000000, 'Lalu Eman', 'Chrysanthemum.jpg', 'Kayu Mahoni'),
(2, 'Lemari gandeng ', 'Lemari', 2500000, 'Lalu Hadi', 'Desert.jpg', 'Kayu Jadi'),
(3, 'Lemari Biasa', 'Lemari', 2000000, 'Lalu Hadi', 'Hydrangeas.jpg', 'Kayu Jati'),
(4, 'Meja SD', 'Meja', 400000, 'Lalu Jaya', 'Jellyfish.jpg', 'Kayu Jati'),
(5, 'Kursi Tamu', 'Kursi', 200000, 'Lalu Jaya', 'Koala.jpg', 'Kayu Jati'),
(6, 'Lemari 2 pintu', 'Lemari', 2300000, 'H badrun', '1854427_eec1080c-688b-4102-8bb2-272ee5d62796.jpg', 'tinggi  2 meter lebar 4 meter kayu jati'),
(7, 'Kursi enam kali', 'Kurso', 2147483647, 'Rodi belek dose', 'imagesaa.jpg', 'Demen nelpon sampe soboh'),
(8, 'Kursi makan', 'Kursi', 300000, 'Nuridin', '12.jpg', 'kayu mahoni'),
(9, 'Kursi tamu', 'kursi', 400000, 'Nuridin', 'Alam-Semesta.png', 'kayu jati'),
(10, 'Muja makan', 'meja', 600000, 'Nuridin', '8207308de98300025433c182d7c409ab.jpg', 'kayu jati'),
(11, 'Meja hias', 'meja', 600000, 'Nuridin', '3096181_xperia_z_ultra-wallpaper-1920x1080.jpg', 'triplek '),
(12, 'ANIS MINTA TAMBAH', 'COERSS', 70000000, 'jO', '485095_10151315614992503_2041753684_n.jpg', 'KAYU ARI');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_pariwisata`
--
ALTER TABLE `tb_pariwisata`
  ADD PRIMARY KEY (`id_pariwisata`);

--
-- Indexes for table `tb_perkebunan`
--
ALTER TABLE `tb_perkebunan`
  ADD PRIMARY KEY (`id_perkebunan`);

--
-- Indexes for table `tb_pertanian`
--
ALTER TABLE `tb_pertanian`
  ADD PRIMARY KEY (`id_pertanian`);

--
-- Indexes for table `tb_perternakan`
--
ALTER TABLE `tb_perternakan`
  ADD PRIMARY KEY (`id_perternakan`);

--
-- Indexes for table `tb_produkdekor`
--
ALTER TABLE `tb_produkdekor`
  ADD PRIMARY KEY (`id_dekor`);

--
-- Indexes for table `tb_produkmebel`
--
ALTER TABLE `tb_produkmebel`
  ADD PRIMARY KEY (`id_mebel`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_pariwisata`
--
ALTER TABLE `tb_pariwisata`
  MODIFY `id_pariwisata` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tb_perkebunan`
--
ALTER TABLE `tb_perkebunan`
  MODIFY `id_perkebunan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tb_pertanian`
--
ALTER TABLE `tb_pertanian`
  MODIFY `id_pertanian` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_perternakan`
--
ALTER TABLE `tb_perternakan`
  MODIFY `id_perternakan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_produkdekor`
--
ALTER TABLE `tb_produkdekor`
  MODIFY `id_dekor` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `tb_produkmebel`
--
ALTER TABLE `tb_produkmebel`
  MODIFY `id_mebel` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
