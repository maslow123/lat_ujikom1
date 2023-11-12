-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2023 at 09:36 AM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pel_ujikom1`
--

-- --------------------------------------------------------

--
-- Table structure for table `absen`
--

CREATE TABLE `absen` (
  `kd_absen` varchar(255) NOT NULL,
  `nm_bulan` varchar(255) DEFAULT NULL,
  `nis` varchar(255) DEFAULT NULL,
  `nm_siswa` varchar(255) DEFAULT NULL,
  `jml_hadir` int(11) DEFAULT NULL,
  `alfa` int(11) DEFAULT NULL,
  `izin` int(11) DEFAULT NULL,
  `sakit` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`, `nama`) VALUES
('admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `nip` varchar(255) NOT NULL,
  `nm_guru` varchar(255) DEFAULT NULL,
  `tmp_lahir_guru` varchar(255) DEFAULT NULL,
  `tgl_lahir_guru` date DEFAULT NULL,
  `kel_guru` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `telp` varchar(12) DEFAULT NULL,
  `kd_matpel` varchar(255) DEFAULT NULL,
  `nm_matpel` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`nip`, `nm_guru`, `tmp_lahir_guru`, `tgl_lahir_guru`, `kel_guru`, `alamat`, `telp`, `kd_matpel`, `nm_matpel`) VALUES
('T01', 'Asep Cahya Nugraha', 'Bandung', '2023-11-01', 'RPL', 'Kubang', '111111', 'JARKOM001', 'Jaringan Komputer');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `kd_kelas` varchar(255) NOT NULL,
  `nm_kelas` varchar(255) DEFAULT NULL,
  `jml_siswa` int(11) DEFAULT NULL,
  `thn_ajaran` int(11) DEFAULT NULL,
  `nip` varchar(255) DEFAULT NULL,
  `nm_guru` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`kd_kelas`, `nm_kelas`, `jml_siswa`, `thn_ajaran`, `nip`, `nm_guru`) VALUES
('RPL001', 'Rekayasa Perangkat Lunak 01', 20, 2023, 'T01', 'Asep Cahya Nugraha');

-- --------------------------------------------------------

--
-- Table structure for table `matpel`
--

CREATE TABLE `matpel` (
  `kd_matpel` varchar(255) NOT NULL,
  `nm_matpel` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `matpel`
--

INSERT INTO `matpel` (`kd_matpel`, `nm_matpel`) VALUES
('EL001', 'Elektronika\r\n'),
('JARKOM001', 'Jaringan Komputer');

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `kd_nilai` varchar(255) NOT NULL,
  `nis` varchar(255) DEFAULT NULL,
  `nm_siswa` varchar(255) DEFAULT NULL,
  `kd_matpel` varchar(255) DEFAULT NULL,
  `nm_matpel` varchar(255) DEFAULT NULL,
  `uts_sem_ganjil` int(11) DEFAULT NULL,
  `uas_sem_ganjil` int(11) DEFAULT NULL,
  `uts_sem_genap` int(11) DEFAULT NULL,
  `uas_sem_genap` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `nis` varchar(255) NOT NULL,
  `nm_siswa` varchar(255) DEFAULT NULL,
  `tmp_lahir` varchar(255) NOT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `jkel` char(1) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `telp` varchar(12) DEFAULT NULL,
  `nm_wali` varchar(255) DEFAULT NULL,
  `kd_kelas` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`nis`, `nm_siswa`, `tmp_lahir`, `tgl_lahir`, `jkel`, `alamat`, `telp`, `nm_wali`, `kd_kelas`, `username`, `password`) VALUES
('213123', 'asdjlasd', 'asdlkjasdl', '2023-11-12', 'P', 'asdasd', '123123', 'aasdasd', 'RPL001', 'asdasd', 'asdasdas'),
('S01', 'Fadhly', 'Jakarta', '2001-10-29', 'L', 'Bogor', '0878111111', 'Ibu', 'RPL001', 'fadhly', 'fadhly');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absen`
--
ALTER TABLE `absen`
  ADD PRIMARY KEY (`kd_absen`),
  ADD KEY `nis` (`nis`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`kd_kelas`),
  ADD KEY `nip` (`nip`);

--
-- Indexes for table `matpel`
--
ALTER TABLE `matpel`
  ADD PRIMARY KEY (`kd_matpel`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`kd_nilai`),
  ADD KEY `nis` (`nis`,`kd_matpel`),
  ADD KEY `kd_matpel` (`kd_matpel`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`nis`),
  ADD KEY `kd_kelas` (`kd_kelas`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `absen`
--
ALTER TABLE `absen`
  ADD CONSTRAINT `absen_ibfk_1` FOREIGN KEY (`nis`) REFERENCES `siswa` (`nis`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `kelas`
--
ALTER TABLE `kelas`
  ADD CONSTRAINT `kelas_ibfk_1` FOREIGN KEY (`nip`) REFERENCES `guru` (`nip`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `nilai`
--
ALTER TABLE `nilai`
  ADD CONSTRAINT `nilai_ibfk_1` FOREIGN KEY (`nis`) REFERENCES `siswa` (`nis`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `nilai_ibfk_2` FOREIGN KEY (`kd_matpel`) REFERENCES `matpel` (`kd_matpel`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `siswa`
--
ALTER TABLE `siswa`
  ADD CONSTRAINT `siswa_ibfk_1` FOREIGN KEY (`kd_kelas`) REFERENCES `kelas` (`kd_kelas`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
