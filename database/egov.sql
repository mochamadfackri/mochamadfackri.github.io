-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2021 at 03:49 AM
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
-- Database: `egov`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `nm_admin` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `username`, `password`, `nm_admin`, `status`) VALUES
(1, 'admin', '12345', 'administrtor', 'Aktif');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_aplikasi`
--

CREATE TABLE `tbl_aplikasi` (
  `id_apl` int(11) NOT NULL,
  `tgl_surat` date NOT NULL,
  `nm_surat` varchar(100) NOT NULL,
  `asal` varchar(200) NOT NULL,
  `no_surat` varchar(100) NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `berkas` text NOT NULL,
  `tgl_terima` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_aplikasi`
--

INSERT INTO `tbl_aplikasi` (`id_apl`, `tgl_surat`, `nm_surat`, `asal`, `no_surat`, `jenis`, `berkas`, `tgl_terima`) VALUES
(12, '2021-03-03', 'Permohonan Aktifasi VPN', ' SMP Negeri 4 Kota Cirebon', '800//SMP.04/20133', 'Surat Masuk', 'Permohonan_Aktifitasi_VPN.pdf', '2021-03-08'),
(13, '2021-08-19', 'Usulan Email Dinas untuk Pegawai', 'Dinas Kependudukan dan Pencatatan Sipil', '810/683-sekrt', 'Surat Masuk', '601_USULAN_EMAIL_DINAS_UNTUK_PEGAWAI.pdf', '2021-10-25'),
(14, '2021-01-13', 'Pengajuan Aplikasi Survei Kepuasan Masyarakat', ' Dinas Penanaman Modal dan Pelayanan Terpadu Satu Pintu', '503/017.1-DIPL', 'Surat Masuk', '588_PELATIHAN_PEMANFAATAN_APLIKASI_CANVA_DALAM_PEMBELAJARAN1.pdf', '2021-11-04'),
(15, '2021-11-20', 'Permohonan Website Kelurahan se-Kecamatan Harjamukti', 'Kecamatan Harjamukti', '555.4/29-Sekre', 'Surat Masuk', '588_PELATIHAN_PEMANFAATAN_APLIKASI_CANVA_DALAM_PEMBELAJARAN2.pdf', '2021-11-03'),
(16, '2021-01-20', 'Permohonan Pelatihan Berbasis IT', 'Kecamatan Harjamukti', '563/28-Sekre', 'Surat Keluar', 'Permohonan_Pelatihan_Berbasis_IT.pdf', '2021-01-22');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kelola`
--

CREATE TABLE `tbl_kelola` (
  `id_kelola` int(11) NOT NULL,
  `tgl_surat` date NOT NULL,
  `nm_surat` varchar(100) NOT NULL,
  `asal` varchar(200) NOT NULL,
  `no_surat` varchar(100) NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `berkas` text NOT NULL,
  `tgl_terima` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kelola`
--

INSERT INTO `tbl_kelola` (`id_kelola`, `tgl_surat`, `nm_surat`, `asal`, `no_surat`, `jenis`, `berkas`, `tgl_terima`) VALUES
(2, '2021-03-01', 'Permohonan Bimtek Sedulur', ' Kecamatan Pekalipan', ' 471/63-Kec.Pkp', 'Surat Masuk', 'Permohonan_Bimtek_Sedulur.pdf', '2021-03-01');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pusat`
--

CREATE TABLE `tbl_pusat` (
  `id_pusat` int(11) NOT NULL,
  `tgl_surat` date NOT NULL,
  `nm_surat` varchar(100) NOT NULL,
  `asal` varchar(200) NOT NULL,
  `no_surat` varchar(100) NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `berkas` text NOT NULL,
  `tgl_terima` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pusat`
--

INSERT INTO `tbl_pusat` (`id_pusat`, `tgl_surat`, `nm_surat`, `asal`, `no_surat`, `jenis`, `berkas`, `tgl_terima`) VALUES
(4, '2021-08-16', 'Pelatihan Aplikasi Canva', ' SMP Negeri 18 Kota Cirebon', '420/051/SMPN18', 'Surat Masuk', '588_PELATIHAN_PEMANFAATAN_APLIKASI_CANVA_DALAM_PEMBELAJARAN.pdf', '2021-10-21'),
(5, '2021-08-24', 'Permohonan Pembuatan Email Dinas Pribadi', 'Dinas Pangan, Pertanian, Kelautan dan Perikanan', ' 873/715/Sekre', 'Surat Masuk', 'PEMBUATAN_EMAIL_PRIBADI_DINAS_SECARA_KOLEKTIF.pdf', '2021-11-15'),
(6, '2021-08-20', 'Undangan Lokakarya Program Kota Tanpa Kumuh (KOTAKU) Kota Cirebon', 'Sekretariat Daerah', '005/1329-DPRKP', '~ Masukkan Jenis Surat ~', 'SETDA_Undangan_Lokakarya_Program_Kota_Tanpa_Kumuh_(KOTAKU).pdf', '2021-11-15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tbl_aplikasi`
--
ALTER TABLE `tbl_aplikasi`
  ADD PRIMARY KEY (`id_apl`);

--
-- Indexes for table `tbl_kelola`
--
ALTER TABLE `tbl_kelola`
  ADD PRIMARY KEY (`id_kelola`);

--
-- Indexes for table `tbl_pusat`
--
ALTER TABLE `tbl_pusat`
  ADD PRIMARY KEY (`id_pusat`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_aplikasi`
--
ALTER TABLE `tbl_aplikasi`
  MODIFY `id_apl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbl_kelola`
--
ALTER TABLE `tbl_kelola`
  MODIFY `id_kelola` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_pusat`
--
ALTER TABLE `tbl_pusat`
  MODIFY `id_pusat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
