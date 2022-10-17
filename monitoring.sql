-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2022 at 06:27 AM
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
-- Table structure for table `laporan_harian`
--

CREATE TABLE `laporan_harian` (
  `id` int(11) NOT NULL,
  `nama_folder` varchar(100) NOT NULL,
  `tanggal` varchar(20) NOT NULL,
  `size` int(11) NOT NULL,
  `ekstensi` varchar(20) NOT NULL,
  `berkas` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`, `role`) VALUES
(7, 'superadmin2', 'superadmin2@gmail.com', '$2y$10$CVYyZWkOs6Yu.OimB20cWO2NJU4XnQkOklkNWk3Q8k6Mfv1Hz31im', 'superadmin'),
(9, 'admin2', 'admin2@gmail.com', '$2y$10$1brk7yNhNHOCpM6FSXrKW.UU/i43oO0dITjcR6CB1DDX6Mq14Ojua', 'admin'),
(10, 'superadmin', 'superadmin@gmail.com', '$2y$10$qpo29Q2auT0uAdOSS2yQIuPMVcgE1vfZ01orUkeoahpzyPvodK08S', 'superadmin'),
(11, 'admin', 'admin@gmail.com', '$2y$10$oAv36nvlwp/MEpo3ivJk3OVSpPR9p.wqcHtMo9OoOcL04U/SGR9Ne', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `laporan_harian`
--
ALTER TABLE `laporan_harian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `laporan_harian`
--
ALTER TABLE `laporan_harian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
