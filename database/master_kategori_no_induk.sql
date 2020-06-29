-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2020 at 03:10 AM
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
-- Table structure for table `master_kategori_no_induk`
--

CREATE TABLE `master_kategori_no_induk` (
  `no` int(100) NOT NULL,
  `no_induk` int(30) NOT NULL,
  `nama_mahasiswa` varchar(100) NOT NULL,
  `angkatan` int(30) NOT NULL,
  `program_studi` varchar(100) NOT NULL,
  `kategori_no_induk` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_kategori_no_induk`
--

INSERT INTO `master_kategori_no_induk` (`no`, `no_induk`, `nama_mahasiswa`, `angkatan`, `program_studi`, `kategori_no_induk`) VALUES
(0, 151901, 'Joni', 2017, 'Pendidikan Fisika', 'Mahasiswa Aktif'),
(0, 151905, 'Paijo', 2017, 'Pendidikan Biologi', 'Mahasiswa Aktif');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `master_kategori_no_induk`
--
ALTER TABLE `master_kategori_no_induk`
  ADD PRIMARY KEY (`no_induk`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
