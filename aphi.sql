-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2019 at 10:39 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aphi`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `level` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `email`, `password`, `level`) VALUES
(1, 'admin', 'admin@gmail.com', '123', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `nama` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `alamat` text NOT NULL,
  `id_order` int(11) NOT NULL,
  `harga` double NOT NULL,
  `no_telpon` varchar(14) NOT NULL,
  `tgl_order` date NOT NULL,
  `status` tinyint(1) NOT NULL,
  `pembayaran` text NOT NULL,
  `informasi` text NOT NULL,
  `status_pesan` int(5) NOT NULL,
  `jenis` enum('padi','palawija','sayuran','buah','tanaman') NOT NULL,
  `penjual` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `nama`, `email`, `password`, `alamat`, `id_order`, `harga`, `no_telpon`, `tgl_order`, `status`, `pembayaran`, `informasi`, `status_pesan`, `jenis`, `penjual`) VALUES
(15, 'Faizal', 'faizal@gmail.com', '123', 'Indramayu', 39, 25000, '0987876754', '2019-03-02', 1, 'bukti-transfer-pembelian-rpp-k13.jpg', '<p>mantul</p>', 1, 'padi', 'Widiana Silvi'),
(17, 'Fikih Nur Ramadan', 'fikihnr@gmail.com', '123', 'Bangkir', 35, 12000, '08782782728', '2019-03-03', 1, 'POLINDRA9.png', '<p>ok</p>', 1, 'padi', 'Widiana Silvi'),
(20, 'Noufal Ibrahim', 'noufal@gmail.com', '123', 'Indramayu', 36, 4000, '129200', '2019-03-05', 0, '', '', 0, 'padi', 'Widiana Silvi'),
(29, 'hilya', 'hilya@gmail.com', '123', 'indramayu', 37, 16000, '087777', '2019-03-07', 0, 'bukti-transfer-pembelian-rpp-k137.jpg', '<p>ok</p>', 0, 'padi', 'Widiana Silvi'),
(32, 'Widi', 'widi@gmail.com', '123', 'bangkir', 21, 65000, '089123456789', '2019-04-10', 0, 'bukti-transfer-pembelian-rpp-k139.jpg', '<p>ok</p>', 0, 'padi', 'Muhammad Bimo Abditama');

-- --------------------------------------------------------

--
-- Table structure for table `pembeli`
--

CREATE TABLE `pembeli` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `no_telpon` int(30) NOT NULL,
  `level` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembeli`
--

INSERT INTO `pembeli` (`id`, `nama`, `email`, `password`, `alamat`, `no_telpon`, `level`) VALUES
(33, 'dicky', 'dicky@gmail.com', '123', 'indonesia', 123, 'pembeli'),
(34, 'kasno', 'kasno@gmail.com', '123', 'Bangkir', 8782788, 'pembeli'),
(37, 'Faizal', 'faizal@gmail.com', '123', 'Indramayu', 987876754, 'pembeli'),
(54, 'Widi', 'widi@gmail.com', '123', 'bangkir', 2147483647, 'pembeli');

-- --------------------------------------------------------

--
-- Table structure for table `penjual`
--

CREATE TABLE `penjual` (
  `id_penjual` int(11) NOT NULL,
  `id` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `bank` varchar(30) NOT NULL,
  `no_rek` varchar(30) NOT NULL,
  `atas_nama` varchar(50) NOT NULL,
  `foto_ktp` varchar(30) NOT NULL,
  `level` varchar(10) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penjual`
--

INSERT INTO `penjual` (`id_penjual`, `id`, `nama`, `password`, `email`, `alamat`, `bank`, `no_rek`, `atas_nama`, `foto_ktp`, `level`, `status`) VALUES
(2, 0, 'Muhammad Bimo Abditama', 'bimo', 'muh.abditama@gmail.com', 'Tukdana', 'BCA', '3242-353-25-646-0', 'Muhammad Bimo Abditama', 'KTP1.jpg', 'penjual', 1),
(3, 0, 'Widiana Silvi', '123', 'silvi@gmail.com', 'kebulen', 'BCA', '93000-181-8888', 'Widiana Silvi', 'KTP2.jpg', 'penjual', 1),
(15, 0, 'hilya', '123', 'hilya@gmail.com', 'indramayu', '', '', '', 'ktp_37.jpg', 'penjual', 0),
(17, 0, 'Widi', '123', 'widi@gmail.com', 'bangkir', '', '', '', 'ktp_39.jpg', 'penjual', 1);

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `foto` text NOT NULL,
  `harga_produk` varchar(200) NOT NULL,
  `jenis` enum('padi','palawija','sayuran','tanaman','buah') NOT NULL,
  `seller` varchar(30) NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `foto`, `harga_produk`, `jenis`, `seller`, `status`) VALUES
(21, 'Padi Rawa', 'padi_rawa1.png', '13000', 'padi', 'Muhammad Bimo Abditama', 1),
(22, 'Kentang', 'kentang.jpg', '8000', 'palawija', 'Muhammad Bimo Abditama', 1),
(23, 'Sawi Hijau', 'sawi-hijau_20180329_153512.jpg', '5000', 'sayuran', 'Muhammad Bimo Abditama', 1),
(24, 'Srikaya', '8-manfaat-mengonsumsi-buah-srikaya.jpg', '3000', 'buah', 'Muhammad Bimo Abditama', 1),
(25, 'Lidah Mertua', '157243_living.gif', '8000', 'tanaman', 'Muhammad Bimo Abditama', 1),
(26, 'padi gogo', 'padi_gogo1.JPG', '2000', 'padi', 'Muhammad Bimo Abditama', 1),
(27, 'padi ketan', 'padi_ketan_hitam1.jpg', '7000', 'padi', 'Muhammad Bimo Abditama', 1),
(28, 'kacang', 'kacang.jpg', '4000', 'palawija', 'Muhammad Bimo Abditama', 1),
(29, 'wortel', 'wortel.jpg', '5000', 'palawija', 'Muhammad Bimo Abditama', 1),
(30, 'cabe rawit', 'cabe_rawit.jpg', '10000', 'sayuran', 'Muhammad Bimo Abditama', 1),
(31, 'bawang merah', 'bawang_merah.jpg', '12000', 'sayuran', 'Muhammad Bimo Abditama', 1),
(35, 'Kol', 'kol.jpg', '6000', 'sayuran', 'Widiana Silvi', 1),
(36, 'Sawi Putih', 'sawi_putih.jpg', '2000', 'sayuran', 'Widiana Silvi', 1),
(37, 'Mangga', 'mango.jpg', '8000', 'buah', 'Widiana Silvi', 1),
(38, 'Manggis', 'whole-and-cut-mangosteen.jpg', '5000', 'buah', 'Widiana Silvi', 1),
(39, 'durian', 'durian.jpg', '25000', 'buah', 'Widiana Silvi', 1),
(40, 'Semangka', 'gambar-buah-semangka.jpg', '17000', 'buah', 'Widiana Silvi', 1),
(41, 'Kuping Gajah', 'kuping_gajah.jpg', '20000', 'tanaman', 'Widiana Silvi', 1),
(42, 'Rembosa', 'rembosa.jpg', '23000', 'tanaman', 'Widiana Silvi', 1),
(43, 'Pohon Taiwan', 'pohon_taiwan.jpg', '40000', 'tanaman', 'Widiana Silvi', 1),
(54, 'Padi Pulen', 'aphi15.png', '8000', 'padi', 'Widi', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_paket_umroh` (`id_order`);

--
-- Indexes for table `pembeli`
--
ALTER TABLE `pembeli`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penjual`
--
ALTER TABLE `penjual`
  ADD PRIMARY KEY (`id_penjual`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `pembeli`
--
ALTER TABLE `pembeli`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
--
-- AUTO_INCREMENT for table `penjual`
--
ALTER TABLE `penjual`
  MODIFY `id_penjual` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
