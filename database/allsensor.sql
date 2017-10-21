-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 21 Okt 2017 pada 22.54
-- Versi Server: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `monsu`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `allsensor`
--

CREATE TABLE `allsensor` (
  `id_sensor` int(5) NOT NULL,
  `hardware` varchar(100) NOT NULL,
  `temp1` int(5) NOT NULL,
  `temp2` int(5) NOT NULL,
  `light1` varchar(25) NOT NULL DEFAULT 'OFF',
  `light2` varchar(25) NOT NULL DEFAULT 'OFF'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `allsensor`
--

INSERT INTO `allsensor` (`id_sensor`, `hardware`, `temp1`, `temp2`, `light1`, `light2`) VALUES
(1, '1', 1, 1, 'OFF', 'OFF');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `allsensor`
--
ALTER TABLE `allsensor`
  ADD PRIMARY KEY (`id_sensor`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `allsensor`
--
ALTER TABLE `allsensor`
  MODIFY `id_sensor` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
