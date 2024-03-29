-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 11, 2023 at 04:29 PM
-- Server version: 5.7.24
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `warung`
--

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `id_item` int(11) NOT NULL,
  `nama_barang` varchar(200) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `barcode` varchar(150) NOT NULL,
  `harga_jual` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`id_item`, `nama_barang`, `id_kategori`, `barcode`, `harga_jual`) VALUES
(3, 'mie', 2, '123', '400000');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(10) NOT NULL,
  `nama_kategori` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Minuman'),
(2, 'Makanan');

-- --------------------------------------------------------

--
-- Table structure for table `storage`
--

CREATE TABLE `storage` (
  `id_storage` int(11) NOT NULL,
  `id_inbound` int(11) NOT NULL,
  `nama_barang` varchar(200) NOT NULL,
  `harga_barang` int(20) NOT NULL,
  `id_user` int(11) NOT NULL,
  `qty` int(20) NOT NULL,
  `harga_beli` int(20) NOT NULL,
  `harga_jual` int(20) NOT NULL,
  `exp_date` date NOT NULL,
  `barcode` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tambah_inbound`
--

CREATE TABLE `tambah_inbound` (
  `id_inbound` int(11) NOT NULL,
  `faktur` varchar(100) NOT NULL,
  `nama_agen` varchar(250) NOT NULL,
  `total_harga` varchar(200) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tambah_inbound`
--

INSERT INTO `tambah_inbound` (`id_inbound`, `faktur`, `nama_agen`, `total_harga`, `tanggal`) VALUES
(1, 'SB202212051200JKT', 'Toko Sahabat', '5.000.000', '2022-12-05'),
(2, 'INB20221229194100201JKT', 'Indogrosir', '1.000.000', '2022-12-15'),
(4, 'INB20221231221300202JKT', 'asin', '400.000', '2022-12-31'),
(5, 'INB20221231221400203JKT', 'asong', '1.400.000', '2022-12-31'),
(6, 'INB20221231223200204JKT', 'asong', '2.400.000', '2022-12-31');

-- --------------------------------------------------------

--
-- Table structure for table `tb_ibound_detail`
--

CREATE TABLE `tb_ibound_detail` (
  `id` int(11) NOT NULL,
  `id_inbound` int(11) NOT NULL,
  `id_item` int(11) NOT NULL,
  `qty` int(200) NOT NULL,
  `harga` int(11) NOT NULL,
  `exp_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_ibound_detail`
--

INSERT INTO `tb_ibound_detail` (`id`, `id_inbound`, `id_item`, `qty`, `harga`, `exp_date`) VALUES
(1, 1, 3, 5, 200000, '2023-01-11'),
(2, 1, 3, 5, 200000, '2023-01-12'),
(3, 2, 3, 5, 200000, '2023-01-11'),
(4, 6, 3, 10, 20000, '2023-01-26');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `tgl_lahir` varchar(10) NOT NULL,
  `image` varchar(400) NOT NULL,
  `role_id` int(1) NOT NULL,
  `is_active` int(1) NOT NULL,
  `password` varchar(128) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `tgl_lahir`, `image`, `role_id`, `is_active`, `password`, `date_created`) VALUES
(1, 'Admin 01', 'admin@gmail.com', '', 'default.jpg', 1, 1, '$2y$10$BT2utrRBMOaxV3i/d4C7sOQZwmo5Zf8ckXFxUBD.EM6GVYtMTpsgy', 1671605026);

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'admin'),
(2, 'kasir');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`id_item`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `storage`
--
ALTER TABLE `storage`
  ADD PRIMARY KEY (`id_storage`),
  ADD KEY `id_inbound` (`id_inbound`);

--
-- Indexes for table `tambah_inbound`
--
ALTER TABLE `tambah_inbound`
  ADD PRIMARY KEY (`id_inbound`);

--
-- Indexes for table `tb_ibound_detail`
--
ALTER TABLE `tb_ibound_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `id_item` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tambah_inbound`
--
ALTER TABLE `tambah_inbound`
  MODIFY `id_inbound` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_ibound_detail`
--
ALTER TABLE `tb_ibound_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `item`
--
ALTER TABLE `item`
  ADD CONSTRAINT `item_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`);

--
-- Constraints for table `storage`
--
ALTER TABLE `storage`
  ADD CONSTRAINT `storage_ibfk_1` FOREIGN KEY (`id_inbound`) REFERENCES `tambah_inbound` (`id_inbound`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
