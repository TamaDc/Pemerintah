-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 12 Sep 2018 pada 20.10
-- Versi Server: 5.5.32
-- Versi PHP: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `pemerintah`
--
CREATE DATABASE IF NOT EXISTS `pemerintah` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `pemerintah`;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_pegawai`
--

CREATE TABLE IF NOT EXISTS `data_pegawai` (
  `NIP` varchar(20) NOT NULL,
  `Nama` varchar(255) DEFAULT NULL,
  `Golongan` varchar(255) DEFAULT NULL,
  `skpd` varchar(255) DEFAULT NULL,
  `unit_kerja` varchar(255) DEFAULT NULL,
  `jabatan` varchar(255) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `loker` varchar(255) DEFAULT NULL,
  `pangkat` varchar(255) DEFAULT NULL,
  `periode` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`NIP`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_pegawai`
--

INSERT INTO `data_pegawai` (`NIP`, `Nama`, `Golongan`, `skpd`, `unit_kerja`, `jabatan`, `tanggal_lahir`, `loker`, `pangkat`, `periode`) VALUES
('196710231989032008', 'BUDI SUHARTO', 'III', 'PENDIDIKAN', 'SMP NEGERI 10', 'GURU DEWASA', '1967-10-23', 'SEMARANG', 'PENATA', 'A'),
('196710231989032009', 'HARTATI AGUSTIYANI', 'II', 'GURU DEWASA', 'BALAIKOTA SEMARANG', 'GURU DEWASA', '1967-10-23', 'SEMARANG', 'PENATA', 'A'),
('196710231993031001', 'UGHARI FAJAR DEWANGGA', 'III', 'HUKUM', 'KANTOR PDE', 'KASI TELEMATIKA', '1967-10-23', 'SEMARANG', 'PENATA', 'A'),
('196710231994012001', 'DIAH SUPRATININGTIAS', 'III', 'HUKUM', 'BAGIAN HUKUM SETDA', 'KASUBAG PERATURAN PERUNDANG-UNDANG', '1967-10-23', 'SEMARANG', 'PENATA', 'A'),
('196710232002121002', 'PHILIPUS CATUR HARI PRAYITNO', 'III', 'Pendidikan', 'SDN Karangroto 02 Genuk ', 'Guru SDN', '1962-10-28', 'SEMARANG', 'PENATA', 'B'),
('196711102005011008', 'JOHAN IMANUDIN', 'III', 'Pendidikan', 'SMA NEGERI 14', 'GURU MADYA TK 1', '1967-11-10', 'SEMARANG', 'Penata Muda', 'A'),
('196711111986031001', 'JUMADI', 'III', 'PEMERINTAHAN', 'KELURAHAN KEDUNGMUDU KEC TEMBALANG', 'KEPALA SEKSI KETNTRAMAN DAN KETERTIBAN UMUM', '1967-11-11', 'SEMARANG', 'Penata Muda', 'A'),
('196711121993022001', 'SITI KO''IDAH', 'III', 'Pendidikan', 'SDN SEKARAN  01 GUNUNG PATI KOTA SMG', 'GURU MUDA TK 1', '1967-11-12', 'SEMARANG', 'Penata Muda', 'A'),
('196802191998032001', 'MARIA LUCIA NOERITA SARIS', 'III', 'PENDIDIKAN', 'SDN TANJUNG MAS SEMARANG UTARA', 'GURU MADYA', '1968-02-19', 'SEMARANG', 'Penata Muda', 'B'),
('19818127219477', 'AGUS SANTOSO', 'II', 'POLISI', 'POLPP', 'KEPALA SATPOL PP', '1982-12-04', 'SEMARANG', 'PENATA', 'A');

-- --------------------------------------------------------

--
-- Struktur dari tabel `db_unit_kerja`
--

CREATE TABLE IF NOT EXISTS `db_unit_kerja` (
  `id_unit_kerja` int(10) NOT NULL AUTO_INCREMENT,
  `nama_unit_kerja` varchar(50) DEFAULT NULL,
  `esselon` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id_unit_kerja`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data untuk tabel `db_unit_kerja`
--

INSERT INTO `db_unit_kerja` (`id_unit_kerja`, `nama_unit_kerja`, `esselon`) VALUES
(1, 'Ur. Perencanaan &Keu', 'I.a'),
(2, 'Ur. Umum &Kepegawaia', 'II.a'),
(3, 'SubSeksi. Pengukuran &Pemetaan', 'III.a'),
(4, 'SubSeksi Tematik &Potensi Tanah', 'IV.a');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gaji`
--

CREATE TABLE IF NOT EXISTS `gaji` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Golongan` varchar(5) DEFAULT NULL,
  `nomer_sk` varchar(20) DEFAULT NULL,
  `tanggal_sk` date DEFAULT NULL,
  `masa_kerja_tahun` int(5) DEFAULT NULL,
  `masa_kerja_bulan` int(5) DEFAULT NULL,
  `gaji_pokok_lama` decimal(12,0) DEFAULT NULL,
  `tanggal_berlaku` date DEFAULT NULL,
  `NIP` varchar(22) DEFAULT NULL,
  `NIP_pejabat` varchar(255) DEFAULT NULL,
  `Nama` varchar(255) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `new_golongan` varchar(255) DEFAULT NULL,
  `new_nomer_sk` varchar(255) DEFAULT NULL,
  `new_tanggal_sk` date DEFAULT NULL,
  `new_masa_kerja_tahun` int(10) DEFAULT NULL,
  `new_masa_kerja_bulan` int(10) DEFAULT NULL,
  `gaji_pokok_baru` int(10) DEFAULT NULL,
  `new_tanggal_berlaku` date DEFAULT NULL,
  `periode` varchar(5) DEFAULT NULL,
  `new_periode` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data untuk tabel `gaji`
--

INSERT INTO `gaji` (`ID`, `Golongan`, `nomer_sk`, `tanggal_sk`, `masa_kerja_tahun`, `masa_kerja_bulan`, `gaji_pokok_lama`, `tanggal_berlaku`, `NIP`, `NIP_pejabat`, `Nama`, `tanggal_lahir`, `new_golongan`, `new_nomer_sk`, `new_tanggal_sk`, `new_masa_kerja_tahun`, `new_masa_kerja_bulan`, `gaji_pokok_baru`, `new_tanggal_berlaku`, `periode`, `new_periode`) VALUES
(0, 'III', '823.3/5/2010', '2010-03-26', 13, 2, '1996200', '2010-04-01', '196802191998032001', '196807051967051992', 'MARIA LUCIA NOERITA SARIS', '1968-02-19', 'I', '823.3/255.2012', '2013-10-27', 2, 1, 1207500, '2015-09-02', 'B', 'A'),
(1, 'III', '823.3/02218/2004', '2004-09-29', 6, 8, '868800', '2004-10-01', '196711121993022001', '196807051967051992', 'SITI KO''IDAHA', '1967-11-12', 'III', '823.3/255/2012', '2012-03-10', 10, 1, 2990000, '2012-10-01', 'A', 'B'),
(3, 'III', '823.3/3/2012', '2012-03-12', 15, 1, '2643400', '2012-04-01', '196711111986031001', '', 'JUMADI', '1967-11-11', 'II', '823.3/255.2012', '2014-10-28', 7, 10, 2332500, '2010-10-29', 'B', 'C'),
(4, 'III', '823.3/14/2010', '2010-11-09', 7, 10, '2037000', '2010-10-01', '196711102005011008', '', ' JOHAN IMANUDIN', '1967-11-10', 'I', '', '2018-01-01', 3, 2, 1623400, '2018-01-01', 'B', 'B'),
(5, 'III', '823.3/4/2006', '2006-03-14', 15, 1, '1197800', '2014-11-29', '196710231989032008', '196807081994081997', 'BUDI SUHARTO', '1967-10-23', 'III', '823.3/255.2012', '2013-11-29', 2, 10, 2869400, '2014-08-30', 'A', 'D'),
(6, 'III', '823.3/13/2005', '2005-02-17', 12, 1, '1171500', '2005-04-01', '196710231993031001', '', 'UGHARI FAJAR DEWANGGA', '1967-10-23', 'III', '823.3/255.2014', '2014-09-14', 8, 0, 3149100, '2015-10-29', 'C', 'D'),
(8, 'III', '823/0388', '2002-12-31', 6, 0, '547200', '1967-12-01', '196710232002121002', '196807081994081997', 'PHILIPUS CATUR HARI PRAYITNO', '1962-10-28', 'IV', '823.3/255.2012', '2009-10-29', 10, 1, 3385700, '2013-09-17', 'B', 'A'),
(16, 'III', '823.3/4/2006', '2006-03-14', 15, 1, '1197800', '2014-11-29', '196710231989032008', '196807081994081997', 'BUDI SUHARTO', '1967-10-23', 'III', '185/14', '2018-01-01', 4, 2, 2613800, '2018-01-01', 'A', 'A'),
(20, 'II', '185/14', '2018-01-01', 15, 1, '1197800', '2014-11-29', '196710231989032009', '196807081194081997', 'HARTATI AGUSTIYANI', '1967-10-23', 'II', '815/14', '2018-01-01', 3, 2, 2103300, '2018-01-01', 'A', 'B'),
(21, 'II', '815/15', '2018-01-01', 13, 2, '3245000', '2018-01-01', '19818127219477', '19921028927981624', 'AGUS SANTOSO', '1982-12-04', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'A', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jabatan`
--

CREATE TABLE IF NOT EXISTS `jabatan` (
  `kd_jabatan` int(10) NOT NULL AUTO_INCREMENT,
  `nama_jabatan` varchar(50) DEFAULT NULL,
  `level` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`kd_jabatan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `jabatan`
--

INSERT INTO `jabatan` (`kd_jabatan`, `nama_jabatan`, `level`) VALUES
(1, 'Kepala Urusan Perencanaan dan Keuangan', 'Kepala Urusan'),
(2, 'Bendahara Pemerintah', 'Bendahara');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pejabat`
--

CREATE TABLE IF NOT EXISTS `pejabat` (
  `NIP_pejabat` varchar(22) NOT NULL DEFAULT '',
  `tittle_pejabat` varchar(22) DEFAULT NULL,
  `Nama_pejabat` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`NIP_pejabat`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pejabat`
--

INSERT INTO `pejabat` (`NIP_pejabat`, `tittle_pejabat`, `Nama_pejabat`) VALUES
('196807051967051992', 'Gubernur', 'AGUSTIN HARAHAB');

-- --------------------------------------------------------

--
-- Struktur dari tabel `template`
--

CREATE TABLE IF NOT EXISTS `template` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) DEFAULT NULL,
  `kepada` varchar(255) DEFAULT NULL,
  `peraturan` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data untuk tabel `template`
--

INSERT INTO `template` (`id`, `judul`, `kepada`, `peraturan`) VALUES
(1, 'BADAN KEPEGAWAIAN PENDIDIKAN DAN PELATIHAN ', 'KEPALA BADAN PENGELOLAAN KEUANGAN DAN ASET DAERAH KOTA SEMARANG', 'Nomor 30 Tahun 2015'),
(2, 'BADAN PENDIDIKAN KOTA SEMARANG', 'KEPALA SEKOLAH', 'Nomor 21 Tahun 2009'),
(3, 'jff', 'mhgmg', 'mjg,g,g'),
(5, 'Badan Kepegawaian Daerah Kota Semarang', 'Kepala Badan', '21 tahun 2018');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(35) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'tama', '41a538fd3f4311476bf0152a741bbdc2'),
(2, 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(3, 'Tama_dc', '41a538fd3f4311476bf0152a741bbdc2');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
