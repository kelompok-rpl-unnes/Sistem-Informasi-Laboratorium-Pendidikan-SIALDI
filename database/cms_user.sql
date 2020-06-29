-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2020 at 05:44 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `cms_user`
--

CREATE TABLE `cms_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `gambar` varchar(100) DEFAULT NULL,
  `email` varchar(11) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `jenis_kelamin` varchar(11) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `level` int(10) DEFAULT NULL,
  `bagian` int(11) DEFAULT '1',
  `no_hp` varchar(100) DEFAULT NULL,
  `last_login` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `cms_user`
--

INSERT INTO `cms_user` (`id`, `nama`, `gambar`, `email`, `username`, `jenis_kelamin`, `password`, `level`, `bagian`, `no_hp`, `last_login`) VALUES
(1, 'Bosque', NULL, NULL, 'bosque', NULL, '*F1378C253EEBE31F135CC41EF4A98D077EB98F5D', 1, 1, NULL, '2020-06-24 10:40:17'),
(7, 'Suparno Faizi', 'files/2016/09/15322f731347f50f18ceee0b7e5d346a.jpg', 'suparno@gma', 'parno', '1', '*12C50665D7EEFA1D0748A2F9BD9A6ED3E9EF3225', 6, 1, '0291-595628', '2017-01-20 13:28:02'),
(8, 'Anto Nugorho', 'files/2016/10/a9a1c61937e5c422841f2f95360dfda7.jpg', 'anto@gmail.', 'anto', '1', '*5CA5C9A49AD72547F8773B896774448FF4A7F344', 4, 1, '+628547267982', '2020-06-13 09:07:18'),
(10, 'juminten', 'files/2016/10/6f8c1070cf71eaca2fa5c544f6fb2bfa.png', 'jum@gmail.c', 'juminten', '2', '*649F42A41D12AB89B5A5B9FB80D9AE24FA0C4679', 5, 1, '0896969696969', '2020-06-13 09:09:18'),
(15, 'sukron', 'files/2020/06/77087f4de8843bfc012b89f8894a6591.jpeg', 'kelon@gmail', 'kelon', '1', '*BC6710D775DE60A259E4B866A0F53F1B600CF563', 3, 1, '0896969696966', '2020-06-13 09:12:35'),
(16, 'Entong Surentong', 'files/2020/06/e66921ad0423b71ab938f64b4cb2ecd7.png', 'tong@gmail.', 'entong', '1', '*015A67E7556BF796F621C347480C5E375B18EA76', 2, 1, '+6281343234', '2020-06-13 09:13:34'),
(17, 'Sedoyo Mawut', 'files/2020/06/fd8743de9ff2b65c9957c70eac588cb2.jpg', 'doy@gmail.c', 'sedoyo', '1', '*5127520E4D549FE7FD1F03F8EEB46D24A1852F67', 7, 1, '+628134323421', '2020-06-13 09:43:49'),
(18, 'Laili Majnun', 'files/2020/06/eeb122824fefae40ec416dd7b65d78c0.png', 'lai@gmail.c', 'laili', '2', '*B85643692B16A2645D75810F7779F6AD928C0E98', 8, 1, '0896966699', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cms_user`
--
ALTER TABLE `cms_user`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cms_user`
--
ALTER TABLE `cms_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
