-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2022 at 06:53 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_tugas_biodata`
--
CREATE DATABASE IF NOT EXISTS `db_tugas_biodata` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `db_tugas_biodata`;

-- --------------------------------------------------------

--
-- Table structure for table `biodata`
--

CREATE TABLE `biodata` (
  `id_biodata` int(11) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `asal_sekolah` varchar(150) NOT NULL,
  `golongan_darah` enum('A','B','AB','O') NOT NULL,
  `daerah_asal` varchar(150) NOT NULL,
  `alamat_domisili` text NOT NULL,
  `agama` enum('Islam','Kristen','Hindu','Buddha','Konghucu') NOT NULL,
  `program_studi` varchar(100) NOT NULL,
  `hobbi` varchar(50) NOT NULL,
  `motto_hidup` text NOT NULL,
  `keahlian_khusus` varchar(50) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `pengalaman` text NOT NULL,
  `pass_foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `biodata`
--

INSERT INTO `biodata` (`id_biodata`, `nama_lengkap`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `asal_sekolah`, `golongan_darah`, `daerah_asal`, `alamat_domisili`, `agama`, `program_studi`, `hobbi`, `motto_hidup`, `keahlian_khusus`, `no_hp`, `pengalaman`, `pass_foto`) VALUES
(111, 'Agus Kurniadin Khaer', 'Cilacap', '2001-04-02', 'L', 'SMKN 3 Banjar', 'B', 'Kota Banjar, Jawa Barat', 'Gedung PT. Lauwba Techno Indonesia, Jl. Karangploso Sitimulyo, Karang Ploso, Sitimulyo, Kec. Piyungan, Kabupaten Bantul, Daerah Istimewa Yogyakarta 55792', 'Islam', 'Teknik Informatika', 'Bermain Game', 'Tuntutlah ilmu sampai ke negeri amerika', 'Mobile Trainer/Developer', '+628999533158', 'PKL di startup CV Access Media (periode 2) dan STIMK Tasikmalaya (periode 1)', '123123agus.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `biodata`
--
ALTER TABLE `biodata`
  ADD PRIMARY KEY (`id_biodata`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `biodata`
--
ALTER TABLE `biodata`
  MODIFY `id_biodata` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
