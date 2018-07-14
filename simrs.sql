-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2018 at 09:06 AM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `simrs`
--
CREATE DATABASE IF NOT EXISTS `simrs` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `simrs`;

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE IF NOT EXISTS `dokter` (
  `kd_dokter` int(11) NOT NULL AUTO_INCREMENT,
  `kd_poli` int(11) NOT NULL,
  `tgl_kunjungan` int(12) NOT NULL,
  `kd_user` int(11) NOT NULL,
  `nm_dokter` varchar(300) NOT NULL,
  `sip` enum('pagi','siang','malam','') NOT NULL,
  `tmpat_lhr` varchar(300) NOT NULL,
  `no_tlp` varchar(14) NOT NULL,
  `alamat` varchar(300) NOT NULL,
  PRIMARY KEY (`kd_dokter`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `dokter`
--

INSERT INTO `dokter` (`kd_dokter`, `kd_poli`, `tgl_kunjungan`, `kd_user`, `nm_dokter`, `sip`, `tmpat_lhr`, `no_tlp`, `alamat`) VALUES
(5, 2, 1410530415, 9, 'Maful Prayoga Arnandi', '', 'Banjarnegara', '0892112312', 'Punggelan, Banjarnegara'),
(6, 2, 1410530573, 9, 'Rasya P Arnandi', '', '', '886789678966', 'Banjarnegara'),
(7, 1, 2014, 10, 'Mama', '', '', '284924', 'Klapa'),
(8, 1, 1410613435, 9, 'Bapa', '', '', '323', 'Kalimanah'),
(9, 1, 1498903009, 11, 'sewa', '', '', '232', 'asas'),
(10, 1, 1498934901, 11, 'ss', '', '', '1', 'ss');

-- --------------------------------------------------------

--
-- Table structure for table `kunjungan`
--

CREATE TABLE IF NOT EXISTS `kunjungan` (
  `tgl_kunjungan` date NOT NULL,
  `no_pasien` int(11) NOT NULL,
  `kd_poli` int(11) NOT NULL,
  `jam_kunjungan` time NOT NULL,
  `kd_kunjungan` int(12) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`kd_kunjungan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `kunjungan`
--

INSERT INTO `kunjungan` (`tgl_kunjungan`, `no_pasien`, `kd_poli`, `jam_kunjungan`, `kd_kunjungan`) VALUES
('2014-02-19', 16, 2, '06:44:00', 6),
('2014-09-11', 19, 2, '01:37:00', 7),
('2014-09-11', 22, 1, '05:21:00', 8),
('2014-09-11', 18, 1, '05:05:00', 9),
('2014-09-11', 20, 2, '05:20:00', 10),
('2017-06-24', 23, 1, '05:16:00', 11),
('2017-07-01', 1, 1, '11:22:00', 12);

-- --------------------------------------------------------

--
-- Table structure for table `laboratorium`
--

CREATE TABLE IF NOT EXISTS `laboratorium` (
  `kd_lab` int(11) NOT NULL AUTO_INCREMENT,
  `no_rm` int(11) NOT NULL,
  `hasil_lab` varchar(300) NOT NULL,
  `ket` text NOT NULL,
  PRIMARY KEY (`kd_lab`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `laboratorium`
--

INSERT INTO `laboratorium` (`kd_lab`, `no_rm`, `hasil_lab`, `ket`) VALUES
(4, 6, 'Berhasil', 'Berhasil Uji Laborat'),
(5, 6, 'Gagal', 'Kekurangan Peralatan'),
(6, 6, 'Berhasil', 'Berhasil melakukan uji coba.'),
(7, 5, 'Berhasil Uji Coba', 'Pengujian kadar gula darah pada pasien');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `kd_user` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  PRIMARY KEY (`kd_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`kd_user`, `username`, `password`, `nama`, `alamat`) VALUES
(11, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'hoirul', 'antang');

-- --------------------------------------------------------

--
-- Table structure for table `obat`
--

CREATE TABLE IF NOT EXISTS `obat` (
  `kd_obat` int(11) NOT NULL AUTO_INCREMENT,
  `nm_obat` varchar(300) NOT NULL,
  `jml_obat` int(11) NOT NULL,
  `ukuran` int(11) NOT NULL,
  `harga` int(25) NOT NULL,
  PRIMARY KEY (`kd_obat`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `obat`
--

INSERT INTO `obat` (`kd_obat`, `nm_obat`, `jml_obat`, `ukuran`, `harga`) VALUES
(1, 'Paracetamol', 20, 2, 6000),
(2, 'Ampicilin', 20, 6, 2000),
(4, 'Antangin', 33, 3, 3),
(5, 'Mixagrip', 15, 0, 3000);

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE IF NOT EXISTS `pasien` (
  `no_pasien` int(11) NOT NULL AUTO_INCREMENT,
  `nm_pasien` varchar(300) NOT NULL,
  `j_kel` varchar(100) NOT NULL,
  `agama` varchar(100) NOT NULL,
  `alamat` varchar(300) NOT NULL,
  `tgl_lhr` date NOT NULL,
  `usia` int(3) NOT NULL,
  `no_tlp` varchar(14) NOT NULL,
  `nm_kk` varchar(300) NOT NULL,
  `hub_kel` varchar(100) NOT NULL,
  PRIMARY KEY (`no_pasien`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`no_pasien`, `nm_pasien`, `j_kel`, `agama`, `alamat`, `tgl_lhr`, `usia`, `no_tlp`, `nm_kk`, `hub_kel`) VALUES
(1, 'Hoirul', 'Pria', 'Islam', 'Antang', '1995-10-09', 21, '082394768545', 'Toyib', 'Anak Kandung'),
(2, 'Mayang', 'Wanita', 'Islam', 'Samata', '1996-02-21', 20, '083498576854', 'Anang', 'Anak Kandung'),
(3, 'Nugra', 'Pria', 'Islam', 'Flores', '1993-12-12', 24, '098456323458', 'Ado', 'Anak Kandung');

-- --------------------------------------------------------

--
-- Table structure for table `poliklinik`
--

CREATE TABLE IF NOT EXISTS `poliklinik` (
  `kd_poli` int(11) NOT NULL AUTO_INCREMENT,
  `nm_poli` varchar(300) NOT NULL,
  `lantai` int(11) NOT NULL,
  PRIMARY KEY (`kd_poli`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `poliklinik`
--

INSERT INTO `poliklinik` (`kd_poli`, `nm_poli`, `lantai`) VALUES
(1, 'Poli Perut', 4),
(2, 'Poli Hidung dan Tenggorokan', 1),
(4, 'Poli Telinga', 3);

-- --------------------------------------------------------

--
-- Table structure for table `rekam_medis`
--

CREATE TABLE IF NOT EXISTS `rekam_medis` (
  `no_rm` int(11) NOT NULL AUTO_INCREMENT,
  `kd_tindakan` int(11) NOT NULL,
  `kd_obat` int(11) NOT NULL,
  `kd_user` int(11) NOT NULL,
  `no_pasien` int(11) NOT NULL,
  `diagnosa` varchar(300) NOT NULL,
  `resep` varchar(300) NOT NULL,
  `keluhan` varchar(300) NOT NULL,
  `tgl_pemeriksaan` varchar(20) NOT NULL,
  `ket` text NOT NULL,
  PRIMARY KEY (`no_rm`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `rekam_medis`
--

INSERT INTO `rekam_medis` (`no_rm`, `kd_tindakan`, `kd_obat`, `kd_user`, `no_pasien`, `diagnosa`, `resep`, `keluhan`, `tgl_pemeriksaan`, `ket`) VALUES
(10, 5, 1, 11, 18, 'gejala', '2 kali sehari', 'Sakit Pinggang', '24-Jun-2017', 'Diberi Obat'),
(19, 5, 1, 11, 18, 'gejala', 'cvcv', 'cvcv', '24-Jun-2017', 'cvcv'),
(20, 5, 1, 11, 1, 'gejala', 'qwq', 'qw', '01-Jul-2017', 'wqw');

-- --------------------------------------------------------

--
-- Table structure for table `tindakan`
--

CREATE TABLE IF NOT EXISTS `tindakan` (
  `kd_tindakan` int(11) NOT NULL AUTO_INCREMENT,
  `nm_tindakan` varchar(300) NOT NULL,
  `ket` text NOT NULL,
  PRIMARY KEY (`kd_tindakan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tindakan`
--

INSERT INTO `tindakan` (`kd_tindakan`, `nm_tindakan`, `ket`) VALUES
(5, 'Rawat Inap', 'Di Rawat di Rumah Sakit'),
(7, 'Rawat Inap', 'UPT Puskesmas 1'),
(8, 'Rawat Jalan', 'Rawat Jalan dengan minum obat teratur');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
