-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2022 at 03:20 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_industri`
--

-- --------------------------------------------------------

--
-- Table structure for table `arske`
--

CREATE TABLE `arske` (
  `id` int(5) NOT NULL,
  `nosurat` varchar(25) NOT NULL,
  `noklasi` varchar(25) NOT NULL,
  `ringkasan` text NOT NULL,
  `pengelolah` varchar(25) NOT NULL,
  `tglsurat` date NOT NULL,
  `kepada` varchar(25) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `surat` varchar(25) NOT NULL,
  `lamp1` varchar(25) NOT NULL,
  `lamp2` varchar(25) NOT NULL,
  `lamp3` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `arske`
--

INSERT INTO `arske` (`id`, `nosurat`, `noklasi`, `ringkasan`, `pengelolah`, `tglsurat`, `kepada`, `keterangan`, `surat`, `lamp1`, `lamp2`, `lamp3`) VALUES
(13, 'K01/11/VIA/Kelurahan	', '601', 'Surat Peringatan', 'Sekertaris', '2021-03-25', 'Lurah Rewarangga', 'Peringatan', 'KHS_1.jpg', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `arsma`
--

CREATE TABLE `arsma` (
  `id` int(11) NOT NULL,
  `nosurat` varchar(50) NOT NULL,
  `noklasi` varchar(50) NOT NULL,
  `tglsurat` date NOT NULL,
  `tglteri` date NOT NULL,
  `perihal` varchar(50) NOT NULL,
  `isi` text NOT NULL,
  `disposisi` text NOT NULL,
  `instansi` varchar(25) NOT NULL,
  `gbr_surat` varchar(25) NOT NULL,
  `lamp1` varchar(25) NOT NULL,
  `lamp2` varchar(25) NOT NULL,
  `lamp3` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `arsma`
--

INSERT INTO `arsma` (`id`, `nosurat`, `noklasi`, `tglsurat`, `tglteri`, `perihal`, `isi`, `disposisi`, `instansi`, `gbr_surat`, `lamp1`, `lamp2`, `lamp3`) VALUES
(57, '11/VIA/Kelurahan', '101', '2020-08-11', '2020-08-10', 'Undangan Rapat', 'Undangan Menhadiri Pertemuan', 'sekertaris', 'Kec. Ende Timur', 'KHS_1.jpg', 'IMG-20200807-WA00042.jpg', 'IMG-20200807-WA00022.jpg', 'IMG-20200807-WA0004.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bantu`
--

CREATE TABLE `tbl_bantu` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nik` varchar(60) NOT NULL,
  `nm_usaha` varchar(50) NOT NULL,
  `nm_bantuan` varchar(70) NOT NULL,
  `jenis_bantuan` text NOT NULL,
  `total` varchar(30) NOT NULL,
  `tgl` varchar(50) NOT NULL,
  `thn_anggaran` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_bantu`
--

INSERT INTO `tbl_bantu` (`id`, `nama`, `nik`, `nm_usaha`, `nm_bantuan`, `jenis_bantuan`, `total`, `tgl`, `thn_anggaran`) VALUES
(2, 'Andika', '5308196010970001', 'asdads', 'adad', 'Programing', '500000', '2021-12-07', '2021'),
(3, 'Andika', '5308196010970002', 'Tenun', 'Bantuan Pemerintah', 'Benang, alat tenun', '10000000000', '2021-12-05', '2021'),
(4, 'Andika', '5308196010970001', 'Jualan Baju', 'Bantuan Pemerintah', 'Programing', '10000000000', '2021-12-21', '2021'),
(5, 'Andika', '5308196010970001', 'Tenun', 'Bantuan Pemerintah', 'Benang, alat tenun', '10000000000', '2021-12-16', '2022'),
(6, 'Andika', '5308196010970001', 'Tenun', 'Bantuan Pemerintah', 'sada', '500000', '2022-12-23', '2022');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_fkm`
--

CREATE TABLE `tbl_fkm` (
  `id` bigint(20) NOT NULL,
  `nm_kec` varchar(50) NOT NULL,
  `kd_kec` varchar(50) NOT NULL,
  `nm_kel` varchar(50) NOT NULL,
  `kd_kel` varchar(50) NOT NULL,
  `nm_sentra` varchar(50) NOT NULL,
  `bn_sentra` varchar(50) NOT NULL,
  `nm_usaha` varchar(50) NOT NULL,
  `pemilik` varchar(50) NOT NULL,
  `alamat_usaha` varchar(50) NOT NULL,
  `hp` varchar(15) NOT NULL,
  `nm_klbi` varchar(50) NOT NULL,
  `kd_klbi` varchar(50) NOT NULL,
  `npwp` varchar(50) NOT NULL,
  `no_iut` varchar(50) NOT NULL,
  `thn_iut` varchar(5) NOT NULL,
  `no_amdal` varchar(50) NOT NULL,
  `thn_amdal` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_fkm`
--

INSERT INTO `tbl_fkm` (`id`, `nm_kec`, `kd_kec`, `nm_kel`, `kd_kel`, `nm_sentra`, `bn_sentra`, `nm_usaha`, `pemilik`, `alamat_usaha`, `hp`, `nm_klbi`, `kd_klbi`, `npwp`, `no_iut`, `thn_iut`, `no_amdal`, `thn_amdal`) VALUES
(5, 'Kecamatan Ende Selatan', '86.10.77', 'Kelurahan Kota Ratu', '86.10.75.122', 'Usaha', 'Jualan', 'Jualan Minyak Tanah', 'Andi', 'Jln. Sam Ratulangi', '0812334211', 'KLBI 1', 'KLBI001', '1111', '2222', '3333', '4444', '5555'),
(6, 'Kecamatan Ende Timur', '86.10.75', 'Kelurahan Kota Ratu', '86.10.75.122', 'Usaha', 'Jualan', 'Diskotik', 'Bapak Markus', 'Jln Sam Ratulangi', '082357528129', 'KLBI 1', 'KLBI001', '11', '11', '11', '11', '11');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kec`
--

CREATE TABLE `tbl_kec` (
  `kode` varchar(20) NOT NULL,
  `kecamatan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_kec`
--

INSERT INTO `tbl_kec` (`kode`, `kecamatan`) VALUES
('86.10.75', 'Kecamatan Ende Timur'),
('86.10.76', 'Kecamatan Ende Tengah'),
('86.10.77', 'Kecamatan Ende Selatan');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kel`
--

CREATE TABLE `tbl_kel` (
  `kode` varchar(20) NOT NULL,
  `kecamatan` varchar(50) NOT NULL,
  `kelurahan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_kel`
--

INSERT INTO `tbl_kel` (`kode`, `kecamatan`, `kelurahan`) VALUES
('86.10.75.122', 'Kecamatan Ende Selatan', 'Kelurahan Kota Ratu'),
('86.10.75.22.1', 'Kecamatan Ende Tengah', 'Kelurahan Potulando');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_klbi`
--

CREATE TABLE `tbl_klbi` (
  `kode` varchar(25) NOT NULL,
  `nama` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_klbi`
--

INSERT INTO `tbl_klbi` (`kode`, `nama`) VALUES
('KLBI001', 'KLBI 1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sentra`
--

CREATE TABLE `tbl_sentra` (
  `kode` varchar(25) NOT NULL,
  `nm_sentra` varchar(50) NOT NULL,
  `bentuk` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_sentra`
--

INSERT INTO `tbl_sentra` (`kode`, `nm_sentra`, `bentuk`) VALUES
('10.10.22', 'Usaha', 'Jualan'),
('86.10.772', 'Usaha 2', 'Jualan 22');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_usaha`
--

CREATE TABLE `tbl_usaha` (
  `id` int(11) NOT NULL,
  `nm_usaha` varchar(30) NOT NULL,
  `pemilik` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `hp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_usaha`
--

INSERT INTO `tbl_usaha` (`id`, `nm_usaha`, `pemilik`, `alamat`, `hp`) VALUES
(1, 'Jualan Minyak Tanah', 'Andi', 'Jln. Sam Ratulangi', '0812334211'),
(2, 'Diskotik', 'Bapak Markus', 'Jln Sam Ratulangi', '082357528129');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(1, 'Andi', 'yohanesardinus@gmail.com', 'Logo_Golang_Basic_2.jpg', '$2y$10$UWHfrxur3PVtweVFKbrQmu7ANstY6ohk9H7cMLf.RYEGMGE3SuIcG', 1, 1, 1577927356),
(7, 'andi', 'andi@gmail.com', 'default.jpg', '$2y$10$ne.audl7q3mC5ZneUac8ZeEOp1KApajLgmDkIzbrgc79kypQZzW0y', 2, 1, 1616982876);

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(3, 2, 2),
(17, 1, 2),
(20, 2, 21),
(21, 2, 4),
(22, 1, 21),
(27, 1, 20),
(28, 1, 8),
(30, 1, 3),
(31, 1, 5),
(33, 1, 6),
(36, 1, 7),
(37, 1, 9);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `name`, `menu`) VALUES
(1, 'Administrator', 'Admin'),
(2, 'Data Kecamatan', 'Kecamatan'),
(3, 'Data Kelurahan', 'Kelurahan'),
(4, 'Manajemen Arsip', 'Arsip'),
(5, 'Data Sentra IKM', 'Sentra'),
(6, 'Data Usaha', 'Usaha'),
(7, 'Data KBLI', 'Klbi'),
(8, 'Layanan Data Umum FKM', 'Layanan'),
(9, 'Data Penerima Bantuan', 'Bantuan'),
(20, 'Setting Menu', 'Menu'),
(21, 'Setting Account', 'User');

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
(1, 'administrator'),
(2, 'member');

-- --------------------------------------------------------

--
-- Table structure for table `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'admin', 'fas fa-fw fa-tachometer-alt', 1),
(2, 21, 'My Profile', 'user', 'fas fa-fw fa-user', 1),
(3, 21, 'Edit Profile', 'user/edit', 'fas fa-fw fa-user-edit', 1),
(4, 20, 'Menu Management', 'menu', 'fas fa-fw fa-folder', 0),
(5, 20, 'Submenu Management', 'menu/submenu', 'fas fa-fw fa-folder-open', 0),
(9, 20, 'Management Role Access', 'admin/role', 'fa fa-fw fa-user-tie', 0),
(10, 4, 'Arsip Surat Masuk', 'arsip', 'fas fa-fw fa-folder', 1),
(11, 4, 'Arsip Surat Keluar', 'arsip/suratkel', 'fas fa-fw fa-folder', 1),
(12, 20, 'Management Pengguna', 'menu/tampiluser', 'fas fa-fw fa-users', 1),
(13, 2, 'Master Kecamatan', 'kecamatan', 'fas fa-fw fa-folder', 1),
(14, 2, 'Tambah Kecamatan', 'kecamatan/tambah', 'fas fa-fw fa-plus', 1),
(15, 3, 'Master Kelurahan', 'kelurahan', 'fas fa-fw fa-folder', 1),
(16, 3, 'Tambah Kelurahan', 'kelurahan/tambah', 'fas fa-fw fa-plus', 1),
(17, 5, 'Master Sentra IKM', 'sentra', 'fas fa-fw fa-folder', 1),
(18, 5, 'Tambah Sentra IKM', 'sentra/tambah', 'fas fa-fw fa-plus', 1),
(19, 6, 'Master Usaha', 'usaha', 'fas fa-fw fa-folder', 1),
(20, 6, 'Tambah Usaha', 'usaha/tambah', 'fas fa-fw fa-plus', 1),
(21, 8, 'Form Input Data', 'layanan', 'fas fa-fw fa-folder-open', 1),
(22, 7, 'Master KBLI', 'klbi', 'fas fa-fw fa-folder', 1),
(23, 7, 'Tambah KBLI', 'klbi/tambah', 'fas fa-fw fa-plus', 1),
(24, 9, 'Master Data', 'bantuan', 'fas fa-fw fa-folder', 1),
(25, 9, 'Tambah Data', 'bantuan/cek', 'fas fa-fw fa-plus', 1),
(26, 8, 'Master Data FKM', 'layanan/master', 'fas fa-fw fa-folder', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `arske`
--
ALTER TABLE `arske`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `arsma`
--
ALTER TABLE `arsma`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_bantu`
--
ALTER TABLE `tbl_bantu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_fkm`
--
ALTER TABLE `tbl_fkm`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_kec`
--
ALTER TABLE `tbl_kec`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `tbl_kel`
--
ALTER TABLE `tbl_kel`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `tbl_klbi`
--
ALTER TABLE `tbl_klbi`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `tbl_sentra`
--
ALTER TABLE `tbl_sentra`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `tbl_usaha`
--
ALTER TABLE `tbl_usaha`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `arske`
--
ALTER TABLE `arske`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `arsma`
--
ALTER TABLE `arsma`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `tbl_bantu`
--
ALTER TABLE `tbl_bantu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_fkm`
--
ALTER TABLE `tbl_fkm`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_usaha`
--
ALTER TABLE `tbl_usaha`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
