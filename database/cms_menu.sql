-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2020 at 09:20 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sionlab`
--

-- --------------------------------------------------------

--
-- Table structure for table `cms_menu`
--

CREATE TABLE `cms_menu` (
  `id` int(11) NOT NULL,
  `alias` varchar(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `allowed_level` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `aktif` int(1) NOT NULL DEFAULT '1',
  `urutan` int(11) NOT NULL,
  `grup` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `cms_menu`
--

INSERT INTO `cms_menu` (`id`, `alias`, `nama`, `deskripsi`, `allowed_level`, `url`, `aktif`, `urutan`, `grup`) VALUES
(3, 'menu', 'Menu', 'Untuk memanajemen menu administrasi (back-end)', '+1+', 'cms/manage/menu', 1, 7, 1),
(89, 'reset_pass', 'Reset Password User', 'Reset Password User', '+1+', 'apl/reset', 1, 1, 3),
(35, 'semua', 'semua', 'untuk login semua', '+1+2+3+4+5+6+8+7+', 'cms/login/admin_page', 1, 1, 3),
(88, 'crud_user', 'Tambah,edit,delete user', 'tambah_edit_delete', '+1+2+3+4+', 'apl/crud', 1, 1, 3),
(102, 'log', 'Log System', 'Log System', '+1+2+', 'cms/catatan/catat', 1, 2, 1),
(136, 'satuan', 'Satuan', '-', '+1+2+', 'master/satuan', 1, 9, 2),
(104, 'status_pak', 'Home', 'Status Pengajuan PAK', '+1+2+3+4+5+6+', 'pak/dashboard/status_pak', 1, 1, 101),
(135, 'nama_bahan', 'Nama Bahan', '-', '+1+2+', 'master/master_bahan', 1, 8, 2),
(134, 'nama_alat', 'Nama Alat', '-', '+1+2+', 'master/nama_alat', 1, 7, 2),
(133, 'mata_kuliah', 'Mata Kuliah', '-', '+1+2+', 'master/mata_kuliah', 1, 6, 2),
(132, 'tipe_lab', 'Tipe Lab', '-', '+1+2+', 'master/tipe_lab', 1, 5, 2),
(131, 'kategori_alat_bahan', 'Kategori Alat dan Bahan', '-', '+1+2+', 'master/kategori_alat_bahan', 1, 4, 2),
(130, 'kategori_no_induk', 'Kategori No Induk', '-', '+1+2+', 'master/kategori_no_induk', 1, 3, 2),
(129, 'gambar_depan', 'Gambar Depan', '-', '+1+2+', 'master/gambar_depan', 0, 2, 2),
(128, 'instansi', 'Instansi', '-', '+1+2+', 'master/instansi', 1, 1, 2),
(137, 'periode_pengajuan', 'Periode Pengajuan', '-', '+1+2+3+4+5+6', 'pengajuan/periode_pengajuan', 1, 1, 5),
(15, 'pengajuan_alat', 'Pengajuan Alat', '-', '+1+2+3+4+5+6', 'pengajuan/pengajuan_alat', 1, 10, 5),
(5, 'pengajuan_bahan', 'Pengajuan Bahan', '-', '+1+2+3+4+5+6', 'pengajuan/pengajuan_bahan', 1, 1, 5),
(189, 'kelola_alat_bahan', 'Kelola Alat Bahan', '-', '+1+2+3+4+5+6+', 'kelola/kelola_alat_bahan', 1, 1, 6),
(140, 'peminjaman_lab', 'Peminjaman Laboratorium', '-', '+1+2+3+4+5+6', 'peminjaman/peminjaman_lab', 1, 10, 4),
(141, 'kelola_user', 'Kelola User', '-', '+1+2+', 'kelola/kelola_user', 1, 1, 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cms_menu`
--
ALTER TABLE `cms_menu`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cms_menu`
--
ALTER TABLE `cms_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=190;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
