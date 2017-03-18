-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2017 at 08:22 AM
-- Server version: 10.1.8-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tugas3`
--

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id_pg` int(11) NOT NULL,
  `hak_akses` varchar(8) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(25) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `devisi` varchar(20) NOT NULL,
  `jabatan` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `usia` int(2) NOT NULL,
  `hobi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id_pg`, `hak_akses`, `username`, `password`, `nama`, `devisi`, `jabatan`, `email`, `alamat`, `usia`, `hobi`) VALUES
(1, 'admin', 'adm1', 'adm123', 'ali udin', 'manajemen', 'sekertaris', 'alili@gmail.com', 'sapen', 29, 'memancing'),
(2, 'user', 'usr1', 'usr123', 'Erwin', 'komunikasi', 'bendahara', 'erwins@gmail.com', 'bantul', 27, 'piknik'),
(4, 'admin', 'adm2', 'adm1223', 'Rosa', 'Penyiaran', 'Produser', 'rosaya@gmail.com', 'Godean', 41, 'Bermusik'),
(5, 'user', 'usr2', 'usr122', 'Ryan', 'Komunikasi', 'Sales', 'ryankun@yahoo.com', 'Taman Siswa', 27, 'Nonton Film'),
(6, 'admin', 'adm3', 'adm333', 'Jane', 'Perencanaan', 'Sekertaris', 'jajane@rocketmail.com', 'Lempuyangan', 21, 'Chatting'),
(7, 'admin', 'admin2', 'adm4', 'Risha', 'Komunikasi', 'Ketua', 'Rishaciki@gmail.com', 'Berebes', 29, 'Memasak'),
(8, 'admin', 'adm5', 'ad555', 'Erika', 'Perencanaan', 'Ketua', '@erik.com', 'purwodadi', 29, 'Membaca'),
(9, 'user', 'usr21', '1234', 'sasa', 'Perencanaan', 'Anggaran', '@syas.com', 'sapen', 21, 'Membaca'),
(10, 'user', 'usr213', 'qq', 'sasaR', 'Komunikasi', 'Bendahara', 'sss197@gmail.com', 'Godean', 23, 'Baca');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_pg`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_pg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
