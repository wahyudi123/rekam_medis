-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2017 at 02:35 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rekam_medis`
--

-- --------------------------------------------------------

--
-- Table structure for table `rekam_medik`
--

CREATE TABLE IF NOT EXISTS `rekam_medik` (
  `kd_rm` int(11) NOT NULL,
  `kd_dokter` int(11) NOT NULL,
  `kd_pasien` int(11) NOT NULL,
  `keluhan` varchar(50) NOT NULL,
  `diagnosa` varchar(50) NOT NULL,
  `tindakan` varchar(50) NOT NULL,
  `tgl_berobat` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rekam_medik`
--

INSERT INTO `rekam_medik` (`kd_rm`, `kd_dokter`, `kd_pasien`, `keluhan`, `diagnosa`, `tindakan`, `tgl_berobat`) VALUES
(1, 1, 3, 'Sering Batuk-Batuk', 'Terjadi Flag Pada Paru-Paru', 'Operasi', '2017-04-19'),
(2, 3, 4, 'Sakit dada', 'ada Uler', 'Operasi Ya', '2017-01-01');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dokter`
--

CREATE TABLE IF NOT EXISTS `tbl_dokter` (
  `kd_dokter` int(11) NOT NULL,
  `nm_dokter` varchar(100) NOT NULL,
  `kd_spesialis` int(11) NOT NULL,
  `jns_kelamin` enum('p','w') NOT NULL,
  `alamat` text NOT NULL,
  `telepon` varchar(15) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_dokter`
--

INSERT INTO `tbl_dokter` (`kd_dokter`, `nm_dokter`, `kd_spesialis`, `jns_kelamin`, `alamat`, `telepon`) VALUES
(1, 'Wahyudi', 1, 'p', 'Jalan k', '08934793'),
(3, 'Kina', 1, 'w', 'Jalan b', '08932987');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pasien`
--

CREATE TABLE IF NOT EXISTS `tbl_pasien` (
  `kd_pasien` int(11) NOT NULL,
  `nm_pasien` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jns_kelamin` enum('p','w') NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pasien`
--

INSERT INTO `tbl_pasien` (`kd_pasien`, `nm_pasien`, `tgl_lahir`, `jns_kelamin`, `alamat`) VALUES
(3, 'Ina', '2017-04-28', 'w', 'Jakarta\r\n'),
(4, 'Ika', '1999-01-01', 'p', 'kl');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_spesialis`
--

CREATE TABLE IF NOT EXISTS `tbl_spesialis` (
  `kd_spesialis` int(11) NOT NULL,
  `nm_spesialis` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_spesialis`
--

INSERT INTO `tbl_spesialis` (`kd_spesialis`, `nm_spesialis`) VALUES
(1, 'Jantung'),
(3, 'Paru-paru'),
(4, 'Kulit');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE IF NOT EXISTS `tbl_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `level` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `username`, `password`, `level`) VALUES
(1, 'admin', 'admin', 'admin'),
(2, 'wahyudi', 'dokter', 'dokter'),
(3, 'ina', 'ina', 'pasien'),
(4, 'kina', 'dokter', 'dokter'),
(5, 'ika', 'pasien', 'pasien');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `rekam_medik`
--
ALTER TABLE `rekam_medik`
  ADD PRIMARY KEY (`kd_rm`);

--
-- Indexes for table `tbl_dokter`
--
ALTER TABLE `tbl_dokter`
  ADD PRIMARY KEY (`kd_dokter`);

--
-- Indexes for table `tbl_pasien`
--
ALTER TABLE `tbl_pasien`
  ADD PRIMARY KEY (`kd_pasien`);

--
-- Indexes for table `tbl_spesialis`
--
ALTER TABLE `tbl_spesialis`
  ADD PRIMARY KEY (`kd_spesialis`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `rekam_medik`
--
ALTER TABLE `rekam_medik`
  MODIFY `kd_rm` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_dokter`
--
ALTER TABLE `tbl_dokter`
  MODIFY `kd_dokter` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_pasien`
--
ALTER TABLE `tbl_pasien`
  MODIFY `kd_pasien` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_spesialis`
--
ALTER TABLE `tbl_spesialis`
  MODIFY `kd_spesialis` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
