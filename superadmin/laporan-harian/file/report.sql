-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2022 at 08:32 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `monitoring`
--

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `id` int(11) NOT NULL,
  `nama_petugas` varchar(100) NOT NULL,
  `kode_petugas` varchar(100) NOT NULL,
  `kode_kecamatan` varchar(10) NOT NULL,
  `kecamatan` varchar(100) NOT NULL,
  `kode_desa` varchar(10) NOT NULL,
  `desa` varchar(100) NOT NULL,
  `wilkerstat` varchar(100) NOT NULL,
  `tanggal` date NOT NULL DEFAULT current_timestamp(),
  `before_verif` int(10) NOT NULL,
  `after_verif` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`id`, `nama_petugas`, `kode_petugas`, `kode_kecamatan`, `kecamatan`, `kode_desa`, `desa`, `wilkerstat`, `tanggal`, `before_verif`, `after_verif`) VALUES
(1, 'citra', '0987652781', '', 'somba opu', '', 'pandang pandang', '73060400011000100', '2022-10-08', 100, 120),
(2, 'citra2', '90110', '', 'somba opu', '', 'padang padang', '12345678201001000', '2022-10-09', 76, 55),
(3, 'citra3', '08976524566', '', 'bontomarannu', '', 'desaku', '12345678201001000', '2022-10-09', 50, 40),
(4, 'dila', '76218469', '', 'bontomarannu', '', 'desaku', '328374982000', '2022-10-11', 98, 67);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
