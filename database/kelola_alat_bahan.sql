-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2020 at 09:16 AM
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
-- Table structure for table `kelola_alat_bahan`
--

CREATE TABLE `kelola_alat_bahan` (
  `no` int(100) NOT NULL,
  `id` varchar(5) NOT NULL,
  `nama_alat_dan_bahan` varchar(100) NOT NULL,
  `jumlah` int(100) NOT NULL,
  `kondisi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelola_alat_bahan`
--

INSERT INTO `kelola_alat_bahan` (`no`, `id`, `nama_alat_dan_bahan`, `jumlah`, `kondisi`) VALUES
(0, 'JS01', 'Jangka Sorong', 15, 'Baik'),
(0, 'MB05', 'Monitor', 2, 'Baik'),
(0, 'MK07', 'Mikroskop', 10, 'Baik'),
(0, 'MK09', 'Mikrometer', 8, 'Baik');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kelola_alat_bahan`
--
ALTER TABLE `kelola_alat_bahan`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
