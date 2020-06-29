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
-- Table structure for table `cms_log`
--

CREATE TABLE `cms_log` (
  `id_log` int(30) NOT NULL,
  `ip` varchar(30) DEFAULT NULL,
  `mac_address` varchar(255) DEFAULT NULL,
  `time` varchar(255) DEFAULT NULL,
  `kegiatan` text,
  `user` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `cms_log`
--

INSERT INTO `cms_log` (`id_log`, `ip`, `mac_address`, `time`, `kegiatan`, `user`) VALUES
(1, '::1', '', '2019-01-30 20:39:29', 'Login  by Jihan Ali Ahmad', 'superadmin'),
(2, '::1', '', '2019-11-05 17:45:51', 'Login  by Jihan Ali Ahmad', 'superadmin'),
(3, '::1', '', '2019-11-05 17:47:27', 'Menambah Purchasing Invoice dengan data sbb:<br />\r\n                    <ul><li><b>no_pi</b> dengan value <b>001/kalingga/11/2019</b></li><li><b>id_buyer</b> dengan value <b>1</b></li><li><b>tgl</b> dengan value <b>2019-11-05</b></li><li><b>tgl_pengiriman</b> dengan value <b>2020-02-01</b></li><li><b>fsc_cert</b> dengan value <b>34124</b></li><li><b>fsc_lisence</b> dengan value <b>524554</b></li><li><b>buyer_po_nr</b> dengan value <b>778</b></li><li><b>pembayaran</b> dengan value <b>2</b></li><li><b>id</b> dengan value <b>1</b></li></ul>', 'superadmin'),
(4, '::1', '', '2020-03-10 17:15:13', 'Login  by Jihan Ali Ahmad', 'superadmin'),
(5, '::1', '', '2020-03-12 09:55:56', 'Menambah menu dengan data sbb:<br />\r\n                    <ul><li><b>nama</b> dengan value <b>Instansi</b></li><li><b>deskripsi</b> dengan value <b>-</b></li><li><b>alias</b> dengan value <b>instansi</b></li><li><b>allowed_level</b> dengan value <b>1,2</b></li><li><b>url</b> dengan value <b>master/instansi</b></li><li><b>aktif</b> dengan value <b>1</b></li><li><b>urutan</b> dengan value <b>1</b></li><li><b>grup</b> dengan value <b>2</b></li></ul>', 'superadmin'),
(6, '::1', '', '2020-03-12 13:25:13', 'Login  by Jihan Ali Ahmad', 'superadmin'),
(7, '::1', '', '2020-03-12 13:39:55', 'Mengubah data instansi sbb:<br />\r\n                    <ul><li><b>id</b> dengan value <b>1</b></li><li><b>nama</b> dengan value <b>1</b></li><li><b>alamat</b> dengan value <b>kosong</b></li><li><b>kode</b> dengan value <b>kosong</b></li><li><b>provinsi</b> dengan value <b>kosong</b></li><li><b>email</b> dengan value <b>kosong</b></li><li><b>website</b> dengan value <b>kosong</b></li><li><b>telepon</b> dengan value <b>kosong</b></li><li><b>kementerian</b> dengan value <b>kosong</b></li><li><b>tahun_ajaran</b> dengan value <b>kosong</b></li><li><b>nama_fakultas</b> dengan value <b>kosong</b></li><li><b>nama_dekan</b> dengan value <b>kosong</b></li><li><b>alamat_fakultas</b> dengan value <b>kosong</b></li><li><b>telepon_fakultas</b> dengan value <b>kosong</b></li><li><b>nama_jurusan</b> dengan value <b>kosong</b></li><li><b>nama_kajur</b> dengan value <b>kosong</b></li><li><b>nama_kalab</b> dengan value <b>kosong</b></li><li><b>telepon_jurusan</b> dengan value <b>kosong</b></li><li><b>alamat_jurusan</b> dengan value <b>kosong</b></li><li><b>deskripsi_jurusan</b> dengan value <b>kosong</b></li><li><b>peta_jurusan</b> dengan value <b>kosong</b></li><li><b>zona_waktu</b> dengan value <b>kosong</b></li></ul>', 'superadmin'),
(8, '::1', '', '2020-03-12 13:40:20', 'Mengubah data instansi sbb:<br />\r\n                    <ul><li><b>id</b> dengan value <b>1</b></li><li><b>nama</b> dengan value <b>Universitas Negeri Semarang</b></li><li><b>alamat</b> dengan value <b>kosong</b></li><li><b>kode</b> dengan value <b>kosong</b></li><li><b>provinsi</b> dengan value <b>kosong</b></li><li><b>email</b> dengan value <b>kosong</b></li><li><b>website</b> dengan value <b>kosong</b></li><li><b>logo</b> dengan value <b>files/2020/03/ebcff3bcfaf285d80bf3e5144993191d.png</b></li><li><b>telepon</b> dengan value <b>kosong</b></li><li><b>kementerian</b> dengan value <b>kosong</b></li><li><b>tahun_ajaran</b> dengan value <b>kosong</b></li><li><b>nama_fakultas</b> dengan value <b>kosong</b></li><li><b>nama_dekan</b> dengan value <b>kosong</b></li><li><b>alamat_fakultas</b> dengan value <b>kosong</b></li><li><b>telepon_fakultas</b> dengan value <b>kosong</b></li><li><b>nama_jurusan</b> dengan value <b>kosong</b></li><li><b>nama_kajur</b> dengan value <b>kosong</b></li><li><b>nama_kalab</b> dengan value <b>kosong</b></li><li><b>telepon_jurusan</b> dengan value <b>kosong</b></li><li><b>alamat_jurusan</b> dengan value <b>kosong</b></li><li><b>deskripsi_jurusan</b> dengan value <b>kosong</b></li><li><b>zona_waktu</b> dengan value <b>kosong</b></li></ul>', 'superadmin'),
(9, '::1', '', '2020-03-12 13:40:52', 'Mengubah data instansi sbb:<br />\r\n                    <ul><li><b>id</b> dengan value <b>1</b></li><li><b>nama</b> dengan value <b>Universitas Negeri Semarang</b></li><li><b>alamat</b> dengan value <b>Kampus Sekaran, Gunungpati, Semarang</b></li><li><b>kode</b> dengan value <b>kosong</b></li><li><b>provinsi</b> dengan value <b>kosong</b></li><li><b>email</b> dengan value <b>kosong</b></li><li><b>website</b> dengan value <b>kosong</b></li><li><b>telepon</b> dengan value <b>kosong</b></li><li><b>kementerian</b> dengan value <b>kosong</b></li><li><b>tahun_ajaran</b> dengan value <b>kosong</b></li><li><b>nama_fakultas</b> dengan value <b>kosong</b></li><li><b>nama_dekan</b> dengan value <b>kosong</b></li><li><b>alamat_fakultas</b> dengan value <b>kosong</b></li><li><b>telepon_fakultas</b> dengan value <b>kosong</b></li><li><b>nama_jurusan</b> dengan value <b>kosong</b></li><li><b>nama_kajur</b> dengan value <b>kosong</b></li><li><b>nama_kalab</b> dengan value <b>kosong</b></li><li><b>telepon_jurusan</b> dengan value <b>kosong</b></li><li><b>alamat_jurusan</b> dengan value <b>kosong</b></li><li><b>deskripsi_jurusan</b> dengan value <b>kosong</b></li><li><b>peta_jurusan</b> dengan value <b>kosong</b></li><li><b>zona_waktu</b> dengan value <b>kosong</b></li></ul>', 'superadmin'),
(10, '::1', '', '2020-05-08 07:34:20', 'Login  by Jihan Ali Ahmad', 'superadmin'),
(11, '::1', '', '2020-05-08 07:47:34', 'Menambah Master nama_alat dengan data sbb:<br />\r\n                    <ul><li><b>kode</b> dengan value <b>MK01</b></li><li><b>nama_alat</b> dengan value <b>Mikroskop</b></li><li><b>keterangan</b> dengan value <b>-</b></li></ul>', 'superadmin'),
(12, '::1', '', '2020-05-08 07:47:56', 'Mengedit Master nama_alat dengan data sbb:<br />\r\n                    <ul><li><b>id</b> dengan value <b>1</b></li><li><b>kode</b> dengan value <b>MK01</b></li><li><b>nama_alat</b> dengan value <b>Mikroskop</b></li><li><b>keterangan</b> dengan value <b>lihat</b></li></ul>', 'superadmin'),
(13, '::1', '', '2020-05-08 09:37:33', 'Login  by Kholiq', 'kholiq'),
(14, '::1', '', '2020-05-08 09:39:40', 'Menambah Master nama_alat dengan data sbb:<br />\r\n                    <ul><li><b>kode</b> dengan value <b>MK02</b></li><li><b>nama_alat</b> dengan value <b>Mikroskop Besar</b></li><li><b>keterangan</b> dengan value <b>Mikroskop Besar</b></li></ul>', 'kholiq'),
(15, '::1', '', '2020-05-21 22:20:21', 'Login  by Kholiq', 'kholiq'),
(16, '::1', '', '2020-05-22 07:16:58', 'Login  by Kholiq', 'kholiq'),
(17, '::1', '', '2020-05-28 10:13:08', 'Logout SIONLAB by ', 'Tamu'),
(18, '::1', '', '2020-05-28 10:13:24', 'Login  by Kholiq', 'kholiq'),
(19, '::1', '', '2020-05-28 10:57:14', 'Mengedit menu dengan data sbb:<br />\r\n                    <ul><li><b>id</b> dengan value <b>130</b></li><li><b>nama</b> dengan value <b>Kategori No Induk</b></li><li><b>deskripsi</b> dengan value <b>-</b></li><li><b>allowed_level</b> dengan value <b>1,2</b></li><li><b>url</b> dengan value <b>master/kategori_no_induk</b></li><li><b>aktif</b> dengan value <b>1</b></li><li><b>urutan</b> dengan value <b>3</b></li><li><b>grup</b> dengan value <b>2</b></li></ul>', 'kholiq'),
(20, '::1', '', '2020-05-28 10:58:33', 'Mengedit menu dengan data sbb:<br />\r\n                    <ul><li><b>id</b> dengan value <b>131</b></li><li><b>nama</b> dengan value <b>Kategori Alat dan Bahan</b></li><li><b>deskripsi</b> dengan value <b>-</b></li><li><b>allowed_level</b> dengan value <b>1,2</b></li><li><b>url</b> dengan value <b>master/kategori_alat_bahan</b></li><li><b>aktif</b> dengan value <b>1</b></li><li><b>urutan</b> dengan value <b>4</b></li><li><b>grup</b> dengan value <b>2</b></li></ul>', 'kholiq'),
(21, '::1', '', '2020-05-28 10:59:12', 'Mengedit menu dengan data sbb:<br />\r\n                    <ul><li><b>id</b> dengan value <b>130</b></li><li><b>nama</b> dengan value <b>Kategori No Induk</b></li><li><b>deskripsi</b> dengan value <b>-</b></li><li><b>allowed_level</b> dengan value <b>1,2</b></li><li><b>url</b> dengan value <b>master/kategori_no_induk</b></li><li><b>aktif</b> dengan value <b>1</b></li><li><b>urutan</b> dengan value <b>3</b></li><li><b>grup</b> dengan value <b>2</b></li></ul>', 'kholiq'),
(22, '::1', '', '2020-05-28 15:17:23', 'Login  by Kholiq', 'kholiq'),
(23, '::1', '', '2020-05-28 19:45:51', 'Login  by Kholiq', 'kholiq'),
(24, '::1', '', '2020-05-28 20:30:36', 'Menambah Master nama_alat dengan data sbb:<br />\r\n                    <ul><li><b>kode</b> dengan value <b>MK07</b></li><li><b>nama_alat</b> dengan value <b>Mikrometer Sekrup</b></li><li><b>keterangan</b> dengan value <b>ada</b></li></ul>', 'kholiq'),
(25, '::1', '', '2020-05-28 20:31:08', 'Mengedit Master nama_alat dengan data sbb:<br />\r\n                    <ul><li><b>id</b> dengan value <b>3</b></li><li><b>kode</b> dengan value <b>MK07</b></li><li><b>nama_alat</b> dengan value <b>Mikrometer Sekrup</b></li><li><b>keterangan</b> dengan value <b>ada</b></li></ul>', 'kholiq'),
(26, '::1', '', '2020-05-29 06:24:02', 'Login  by Kholiq', 'kholiq'),
(27, '::1', '', '2020-06-04 20:07:28', 'Login  by Kholiq', 'kholiq'),
(28, '::1', '', '2020-06-05 14:31:11', 'Login  by Kholiq', 'kholiq'),
(29, '::1', '', '2020-06-11 19:22:56', 'Login  by Kholiq', 'kholiq'),
(30, '::1', '', '2020-06-11 20:58:35', 'Mengedit menu dengan data sbb:<br />\r\n                    <ul><li><b>id</b> dengan value <b>189</b></li><li><b>nama</b> dengan value <b>Kelola Alat Bahan</b></li><li><b>deskripsi</b> dengan value <b>-</b></li><li><b>allowed_level</b> dengan value <b>1,2,3,4,5,6</b></li><li><b>url</b> dengan value <b>kelola/kelola_alat_bahan</b></li><li><b>aktif</b> dengan value <b>1</b></li><li><b>urutan</b> dengan value <b>1</b></li><li><b>grup</b> dengan value <b>6</b></li></ul>', 'kholiq'),
(31, '::1', '', '2020-06-12 06:28:21', 'Login  by Kholiq', 'kholiq'),
(32, '::1', '', '2020-06-17 19:44:33', 'Login  by Kholiq', 'kholiq'),
(33, '::1', '', '2020-06-17 20:37:58', 'Menambah kelola kelola_alat_bahan dengan data sbb:<br />\r\n                    <ul><li><b>id</b> dengan value <b>MK09</b></li><li><b>nama_alat_dan_bahan</b> dengan value <b>Mikrometer</b></li><li><b>jumlah</b> dengan value <b>8</b></li><li><b>kondisi</b> dengan value <b>Baik</b></li></ul>', 'kholiq'),
(34, '::1', '', '2020-06-17 20:45:43', 'Menambah kelola kelola_alat_bahan dengan data sbb:<br />\r\n                    <ul><li><b>id</b> dengan value <b>JS01</b></li><li><b>nama_alat_dan_bahan</b> dengan value <b>Jangka Sorong</b></li><li><b>jumlah</b> dengan value <b>15</b></li><li><b>kondisi</b> dengan value <b>Baik</b></li></ul>', 'kholiq'),
(35, '::1', '', '2020-06-17 20:47:09', 'Mengedit kelola_alat_bahan dengan data sbb:<br />\r\n                    <ul><li><b>id</b> dengan value <b>JS01</b></li><li><b>nama_alat_dan_bahan</b> dengan value <b>Jangka Sorong</b></li><li><b>jumlah</b> dengan value <b>15</b></li><li><b>kondisi</b> dengan value <b>Baik</b></li></ul>', 'kholiq'),
(36, '::1', '', '2020-06-28 18:34:44', 'Login  by Kholiq', 'kholiq'),
(37, '::1', '', '2020-06-28 19:50:17', 'Menambah master kategori_alat_bahan dengan data sbb:<br />\r\n                    <ul><li><b>id</b> dengan value <b>JS01</b></li><li><b>nama_alat_dan_bahan</b> dengan value <b>Jangka Sorong</b></li><li><b>kategori</b> dengan value <b>Alat Praktikum Biologi</b></li></ul>', 'kholiq'),
(38, '::1', '', '2020-06-28 20:00:04', 'Menambah master kategori_alat_bahan dengan data sbb:<br />\r\n                    <ul><li><b>id</b> dengan value <b>JS01</b></li><li><b>nama_alat_dan_bahan</b> dengan value <b>Jangka Sorong</b></li><li><b>kategori</b> dengan value <b>Alat praktikum fisika</b></li></ul>', 'kholiq'),
(39, '::1', '', '2020-06-28 20:14:58', 'Mengedit kategori_alat_bahan dengan data sbb:<br />\r\n                    <ul><li><b>id</b> dengan value <b>JS01</b></li><li><b>nama_alat_dan_bahan</b> dengan value <b>Jangka Sorong</b></li><li><b>kategori</b> dengan value <b>Alat Praktikum Fisika</b></li></ul>', 'kholiq'),
(40, '::1', '', '2020-06-28 23:29:10', 'Menambah master kategori_no_induk dengan data sbb:<br />\r\n                    <ul><li><b>no_induk</b> dengan value <b>4611418099</b></li><li><b>nama_mahasiswa</b> dengan value <b>Joni</b></li><li><b>angkatan</b> dengan value <b>2017</b></li><li><b>program_studi</b> dengan value <b>Pendidikan Biologi</b></li><li><b>kategori_no_induk</b> dengan value <b>Mahasiswa Aktif</b></li></ul>', 'kholiq'),
(41, '::1', '', '2020-06-29 00:19:45', 'Mengedit kategori_no_induk dengan data sbb:<br />\r\n                    <ul><li><b>no_induk</b> dengan value <b>21474836477</b></li><li><b>nama_mahasiswa</b> dengan value <b>Joni</b></li><li><b>angkatan</b> dengan value <b>2017</b></li><li><b>program_studi</b> dengan value <b>Pendidikan Biologi</b></li><li><b>kategori_no_induk</b> dengan value <b>Mahasiswa Aktif</b></li></ul>', 'kholiq'),
(42, '::1', '', '2020-06-29 00:20:15', 'Mengedit kategori_no_induk dengan data sbb:<br />\r\n                    <ul><li><b>no_induk</b> dengan value <b>2147483647</b></li><li><b>nama_mahasiswa</b> dengan value <b>Joni</b></li><li><b>angkatan</b> dengan value <b>2017</b></li><li><b>program_studi</b> dengan value <b>Pendidikan Fisika</b></li><li><b>kategori_no_induk</b> dengan value <b>Mahasiswa Aktif</b></li></ul>', 'kholiq'),
(43, '::1', '', '2020-06-29 00:20:15', 'Mengedit kategori_no_induk dengan data sbb:<br />\r\n                    <ul><li><b>no_induk</b> dengan value <b>2147483647</b></li><li><b>nama_mahasiswa</b> dengan value <b>Joni</b></li><li><b>angkatan</b> dengan value <b>2017</b></li><li><b>program_studi</b> dengan value <b>Pendidikan Fisika</b></li><li><b>kategori_no_induk</b> dengan value <b>Mahasiswa Aktif</b></li></ul>', 'kholiq'),
(44, '::1', '', '2020-06-29 00:21:09', 'Menambah master kategori_no_induk dengan data sbb:<br />\r\n                    <ul><li><b>no_induk</b> dengan value <b>999</b></li><li><b>nama_mahasiswa</b> dengan value <b>Paijo</b></li><li><b>angkatan</b> dengan value <b>2017</b></li><li><b>program_studi</b> dengan value <b>Pendidikan Biologi</b></li><li><b>kategori_no_induk</b> dengan value <b>Mahasiswa Aktif</b></li></ul>', 'kholiq'),
(45, '::1', '', '2020-06-29 00:30:39', 'Menambah master kategori_no_induk dengan data sbb:<br />\r\n                    <ul><li><b>no_induk</b> dengan value <b>4611418099</b></li><li><b>nama_mahasiswa</b> dengan value <b>Joni</b></li><li><b>angkatan</b> dengan value <b>2017</b></li><li><b>program_studi</b> dengan value <b>Pendidikan Fisika</b></li><li><b>kategori_no_induk</b> dengan value <b>Mahasiswa Aktif</b></li></ul>', 'kholiq'),
(46, '::1', '', '2020-06-29 00:31:15', 'Menambah master kategori_no_induk dengan data sbb:<br />\r\n                    <ul><li><b>no_induk</b> dengan value <b>145</b></li><li><b>nama_mahasiswa</b> dengan value <b>Paijo</b></li><li><b>angkatan</b> dengan value <b>2017</b></li><li><b>program_studi</b> dengan value <b>Pendidikan Fisika</b></li><li><b>kategori_no_induk</b> dengan value <b>Mahasiswa Aktif</b></li></ul>', 'kholiq'),
(47, '::1', '', '2020-06-29 00:31:31', 'Mengedit kategori_no_induk dengan data sbb:<br />\r\n                    <ul><li><b>no_induk</b> dengan value <b>145</b></li><li><b>nama_mahasiswa</b> dengan value <b>Paijo</b></li><li><b>angkatan</b> dengan value <b>2017</b></li><li><b>program_studi</b> dengan value <b>Pendidikan Biologi</b></li><li><b>kategori_no_induk</b> dengan value <b>Mahasiswa Aktif</b></li></ul>', 'kholiq'),
(48, '::1', '', '2020-06-29 00:31:49', 'Mengedit kategori_no_induk dengan data sbb:<br />\r\n                    <ul><li><b>no_induk</b> dengan value <b>461141</b></li><li><b>nama_mahasiswa</b> dengan value <b>Joni</b></li><li><b>angkatan</b> dengan value <b>2017</b></li><li><b>program_studi</b> dengan value <b>Pendidikan Fisika</b></li><li><b>kategori_no_induk</b> dengan value <b>Mahasiswa Aktif</b></li></ul>', 'kholiq'),
(49, '::1', '', '2020-06-29 00:32:07', 'Mengedit kategori_no_induk dengan data sbb:<br />\r\n                    <ul><li><b>no_induk</b> dengan value <b>46114</b></li><li><b>nama_mahasiswa</b> dengan value <b>Joni</b></li><li><b>angkatan</b> dengan value <b>2017</b></li><li><b>program_studi</b> dengan value <b>Pendidikan Fisika</b></li><li><b>kategori_no_induk</b> dengan value <b>Mahasiswa Aktif</b></li></ul>', 'kholiq'),
(50, '::1', '', '2020-06-29 00:32:20', 'Mengedit kategori_no_induk dengan data sbb:<br />\r\n                    <ul><li><b>no_induk</b> dengan value <b>150</b></li><li><b>nama_mahasiswa</b> dengan value <b>Joni</b></li><li><b>angkatan</b> dengan value <b>2017</b></li><li><b>program_studi</b> dengan value <b>Pendidikan Fisika</b></li><li><b>kategori_no_induk</b> dengan value <b>Mahasiswa Aktif</b></li></ul>', 'kholiq'),
(51, '::1', '', '2020-06-29 00:32:35', 'Mengedit kategori_no_induk dengan data sbb:<br />\r\n                    <ul><li><b>no_induk</b> dengan value <b>150</b></li><li><b>nama_mahasiswa</b> dengan value <b>Paijo</b></li><li><b>angkatan</b> dengan value <b>2017</b></li><li><b>program_studi</b> dengan value <b>Pendidikan Biologi</b></li><li><b>kategori_no_induk</b> dengan value <b>Mahasiswa Aktif</b></li></ul>', 'kholiq'),
(52, '::1', '', '2020-06-29 00:39:23', 'Menambah master kategori_no_induk dengan data sbb:<br />\r\n                    <ul><li><b>no_induk</b> dengan value <b>1150</b></li><li><b>nama_mahasiswa</b> dengan value <b>Joni</b></li><li><b>angkatan</b> dengan value <b>2017</b></li><li><b>program_studi</b> dengan value <b>Pendidikan Fisika</b></li><li><b>kategori_no_induk</b> dengan value <b>Mahasiswa Aktif</b></li></ul>', 'kholiq'),
(53, '::1', '', '2020-06-29 08:05:54', 'Login  by Kholiq', 'kholiq'),
(54, '::1', '', '2020-06-29 08:07:54', 'Mengedit kategori_alat_bahan dengan data sbb:<br />\r\n                    <ul><li><b>id</b> dengan value <b>MK09</b></li><li><b>nama_alat_dan_bahan</b> dengan value <b>Mikrometer</b></li><li><b>kategori</b> dengan value <b>Alat Praktikum Fisika</b></li></ul>', 'kholiq'),
(55, '::1', '', '2020-06-29 08:08:24', 'Menambah master kategori_no_induk dengan data sbb:<br />\r\n                    <ul><li><b>no_induk</b> dengan value <b>151901</b></li><li><b>nama_mahasiswa</b> dengan value <b>Joni</b></li><li><b>angkatan</b> dengan value <b>2017</b></li><li><b>program_studi</b> dengan value <b>Pendidikan Fisika</b></li><li><b>kategori_no_induk</b> dengan value <b>Mahasiswa Aktif</b></li></ul>', 'kholiq'),
(56, '::1', '', '2020-06-29 08:08:48', 'Menambah master kategori_no_induk dengan data sbb:<br />\r\n                    <ul><li><b>no_induk</b> dengan value <b>151905</b></li><li><b>nama_mahasiswa</b> dengan value <b>Paijo</b></li><li><b>angkatan</b> dengan value <b>2017</b></li><li><b>program_studi</b> dengan value <b>Pendidikan Biologi</b></li><li><b>kategori_no_induk</b> dengan value <b>Mahasiswa Aktif</b></li></ul>', 'kholiq'),
(57, '::1', '', '2020-06-29 08:09:00', 'Mengedit kategori_no_induk dengan data sbb:<br />\r\n                    <ul><li><b>no_induk</b> dengan value <b>151905</b></li><li><b>nama_mahasiswa</b> dengan value <b>Paijo</b></li><li><b>angkatan</b> dengan value <b>2018</b></li><li><b>program_studi</b> dengan value <b>Pendidikan Biologi</b></li><li><b>kategori_no_induk</b> dengan value <b>Mahasiswa Aktif</b></li></ul>', 'kholiq'),
(58, '::1', '', '2020-06-29 08:09:08', 'Mengedit kategori_no_induk dengan data sbb:<br />\r\n                    <ul><li><b>no_induk</b> dengan value <b>151905</b></li><li><b>nama_mahasiswa</b> dengan value <b>Paijo</b></li><li><b>angkatan</b> dengan value <b>2017</b></li><li><b>program_studi</b> dengan value <b>Pendidikan Biologi</b></li><li><b>kategori_no_induk</b> dengan value <b>Mahasiswa Aktif</b></li></ul>', 'kholiq'),
(59, '::1', '', '2020-06-29 08:25:18', 'Logout SIALDI by Kholiq', 'kholiq'),
(60, '::1', '', '2020-06-29 08:30:17', 'Login  by Kholiq', 'kholiq'),
(61, '::1', '', '2020-06-29 08:42:29', 'Logout SIALDI by Kholiq', 'kholiq'),
(62, '::1', '', '2020-06-29 08:49:46', 'Login  by Kholiq', 'kholiq'),
(63, '::1', '', '2020-06-29 10:14:44', 'Logout SIALDI by Kholiq', 'kholiq'),
(64, '::1', '', '2020-06-29 10:15:27', 'Login  by Kholiq', 'kholiq'),
(65, '::1', '', '2020-06-29 11:07:19', 'Logout SIALDI by Kholiq', 'kholiq'),
(66, '::1', '', '2020-06-29 11:07:45', 'Login  by Kholiq', 'kholiq'),
(67, '::1', '', '2020-06-29 11:38:26', 'Logout SIALDI by Kholiq', 'kholiq'),
(68, '::1', '', '2020-06-29 12:06:45', 'Login  by Kholiq', 'kholiq');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cms_log`
--
ALTER TABLE `cms_log`
  ADD PRIMARY KEY (`id_log`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cms_log`
--
ALTER TABLE `cms_log`
  MODIFY `id_log` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
