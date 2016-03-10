-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 10 Mar 2016 pada 22.54
-- Versi Server: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_sipp`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`admin_id` int(11) NOT NULL,
  `NAMA_ADMIN` varchar(1024) DEFAULT NULL,
  `username` varchar(1024) DEFAULT NULL,
  `password` varchar(1024) DEFAULT NULL,
  `FOTO_ADMIN` varchar(1024) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`admin_id`, `NAMA_ADMIN`, `username`, `password`, `FOTO_ADMIN`) VALUES
(1, 'budi', 'buds', '21232f297a57a5a743894a0e4a801fc3', '01.JPG'),
(4, 'admin', 'admins', '2aefc34200a294a3cc7db81b43a81873', 'NZXT_black_logo.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikel`
--

CREATE TABLE IF NOT EXISTS `artikel` (
`ID_ARTIKEL` int(11) NOT NULL,
  `JUDUL_ART` varchar(1024) DEFAULT NULL,
  `ISI_ART` varchar(1024) DEFAULT NULL,
  `FOTO_ART` varchar(1024) DEFAULT NULL,
  `TANGGAL_POST` date DEFAULT NULL,
  `STATUS` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `artikel`
--

INSERT INTO `artikel` (`ID_ARTIKEL`, `JUDUL_ART`, `ISI_ART`, `FOTO_ART`, `TANGGAL_POST`, `STATUS`) VALUES
(2, 'TESTER JUDUL ARTIKEL', 'IPSUM LOREN ADUH ADUH IPSUM LOREN ADUH ADUH IPSUM LOREN ADUH ADUH IPSUM LOREN ADUH ADUH IPSUM LOREN ADUH ADUH ', '16637560387_c212bb0e76_o.jpg', '2016-03-11', 0),
(3, 'INI TEST LAGI COBAIN', 'ISI ARTIKEL INI TEST LAGI COBAIN ISI ARTIKEL INI TEST LAGI COBAIN ISI ARTIKEL INI TEST LAGI COBAIN ISI ARTIKEL INI TEST LAGI COBAIN', '12417620_1213054098709504_5236384491849683697_n.jpg', '2016-03-11', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasil`
--

CREATE TABLE IF NOT EXISTS `hasil` (
`ID_HASIL` int(11) NOT NULL,
  `ID_PESERTA` int(11) DEFAULT NULL,
  `NAMA_HASIL` varchar(1024) DEFAULT NULL,
  `NAMA_HASIL2` varchar(1024) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `hasil`
--

INSERT INTO `hasil` (`ID_HASIL`, `ID_PESERTA`, `NAMA_HASIL`, `NAMA_HASIL2`) VALUES
(1, 62, 'b Transkrip 2.pdf', 'b Transkrip 1.pdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `operator`
--

CREATE TABLE IF NOT EXISTS `operator` (
`id_opr` int(11) NOT NULL,
  `nama_opr` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `foto_opr` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `peserta`
--

CREATE TABLE IF NOT EXISTS `peserta` (
`ID_PESERTA` int(11) NOT NULL,
  `NAMA` varchar(1024) NOT NULL,
  `NO_ID` varchar(1024) NOT NULL,
  `JUDUL` varchar(1024) NOT NULL,
  `ASAL_INS` varchar(1024) DEFAULT NULL,
  `BIDANG` varchar(1024) DEFAULT NULL,
  `PEKERJAAN` varchar(1024) DEFAULT NULL,
  `ALAMAT` varchar(1024) DEFAULT NULL,
  `LOKASI_PT` varchar(1024) DEFAULT NULL,
  `PENANGGUNG_JAWAB` varchar(1024) DEFAULT NULL,
  `JENIS_KELAMIN` varchar(1024) DEFAULT NULL,
  `FOTO_PESERTA` varchar(1024) NOT NULL,
  `username` varchar(1024) NOT NULL,
  `password` varchar(1024) DEFAULT NULL,
  `NO_HP` varchar(15) DEFAULT NULL,
  `EMAIL` varchar(1024) NOT NULL,
  `STATUS` varchar(1024) DEFAULT NULL,
  `MASA_BERLAKU_AWAL` date DEFAULT NULL,
  `MASA_BERLAKU_AKHIR` date DEFAULT NULL,
  `TANGGAL_MODIFIKASI` date DEFAULT NULL,
  `TANGGAL_DAFTAR` date DEFAULT NULL,
  `TEMPAT_LAHIR` varchar(1024) DEFAULT NULL,
  `TANGGAL_LAHIR` date DEFAULT NULL,
  `code_reg` varchar(1024) DEFAULT NULL,
  `status_peserta` int(11) DEFAULT NULL,
  `STATUS_HASIL` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=70 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `peserta`
--

INSERT INTO `peserta` (`ID_PESERTA`, `NAMA`, `NO_ID`, `JUDUL`, `ASAL_INS`, `BIDANG`, `PEKERJAAN`, `ALAMAT`, `LOKASI_PT`, `PENANGGUNG_JAWAB`, `JENIS_KELAMIN`, `FOTO_PESERTA`, `username`, `password`, `NO_HP`, `EMAIL`, `STATUS`, `MASA_BERLAKU_AWAL`, `MASA_BERLAKU_AKHIR`, `TANGGAL_MODIFIKASI`, `TANGGAL_DAFTAR`, `TEMPAT_LAHIR`, `TANGGAL_LAHIR`, `code_reg`, `status_peserta`, `STATUS_HASIL`) VALUES
(62, 'Setyarini Lestari', 'A1H011054', 'Pengembangan Selada Keriting Merah', 'Universitas Jenderal Soedirman', 'Teknik Pertanian', 'Mahasiswa', 'Komp. Sekneg Kota Tangerang', 'Lab Pertanian Unsoed', 'Dosen', '2', 'testz.jpg', 'tya', 'd6a4740b2da6818f9d2da4fba80a72bf', '082136600107', 'tya@tya.tya', '1', '2016-03-11', '2016-06-10', '2016-03-03', NULL, 'Tangerang', '1993-12-11', '', 1, 0),
(66, '1', '1', '1', '', '', '', '', '', '', '', 'IMG_6857.JPG', '1', 'c4ca4238a0b923820dcc509a6f75849b', '', '11.@a.1', '0', NULL, NULL, '2016-03-05', NULL, '', '0000-00-00', NULL, 1, 0),
(68, '121', '121', '121', '', '', '', '', '', '', '', 'KTP.jpg', '121', '4c56ff4ce4aaf9573aa5dff913df997a', '', '11.@a.1', '0', NULL, NULL, '2016-03-05', NULL, '', '0000-00-00', NULL, 1, 0),
(69, 'Peserta', 'Peserta', 'Peserta', 'Peserta', 'Peserta', 'Peserta', 'PesertaPesertaPeserta', 'Peserta', 'Peserta', '1', 'Foto Post Card.jpg', 'pst', '67a063aecbd1fc4701ba184b92f695b0', '54152465', 'as@as.as', '0', NULL, NULL, '2016-03-10', NULL, 'Peserta', '2009-12-31', NULL, 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `proposal`
--

CREATE TABLE IF NOT EXISTS `proposal` (
`ID_PROPOSAL` int(11) NOT NULL,
  `ID_PESERTA` int(11) DEFAULT NULL,
  `NAMA_PROPOSAL` varchar(1024) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `proposal`
--

INSERT INTO `proposal` (`ID_PROPOSAL`, `ID_PESERTA`, `NAMA_PROPOSAL`) VALUES
(31, 69, 'a SLP LIPI.pdf'),
(32, 62, 'c Daftar Riwayat Hidup.pdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `syarat`
--

CREATE TABLE IF NOT EXISTS `syarat` (
`ID_SYARAT` int(11) NOT NULL,
  `ID_PESERTA` int(11) DEFAULT NULL,
  `SYARAT1` varchar(1024) DEFAULT NULL,
  `SYARAT2` varchar(1024) DEFAULT NULL,
  `SYARAT3` varchar(1024) DEFAULT NULL,
  `SYARAT4` varchar(1024) DEFAULT NULL,
  `SYARAT5` varchar(1024) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `syarat`
--

INSERT INTO `syarat` (`ID_SYARAT`, `ID_PESERTA`, `SYARAT1`, `SYARAT2`, `SYARAT3`, `SYARAT4`, `SYARAT5`) VALUES
(2, 62, 'Ijazahs.jpg.pdf', 'NZXT_black_logo.jpg', 'Application Form draft 1.pdf', NULL, NULL),
(3, 62, '383944_1.jpg', 'stormtrooper_sugar_skull_by_guardian_angel15-d8jdxzr.jpg', 'roglogo.png', NULL, NULL),
(4, 62, 'g KTP.pdf', 'b Ijazah.pdf', 'd Surat Keterangan Dokter.pdf', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `test`
--

CREATE TABLE IF NOT EXISTS `test` (
  `id` int(11) NOT NULL,
  `name` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
 ADD PRIMARY KEY (`ID_ARTIKEL`);

--
-- Indexes for table `hasil`
--
ALTER TABLE `hasil`
 ADD PRIMARY KEY (`ID_HASIL`), ADD KEY `FK_RELATIONSHIP_3` (`ID_PESERTA`);

--
-- Indexes for table `operator`
--
ALTER TABLE `operator`
 ADD PRIMARY KEY (`id_opr`);

--
-- Indexes for table `peserta`
--
ALTER TABLE `peserta`
 ADD PRIMARY KEY (`ID_PESERTA`);

--
-- Indexes for table `proposal`
--
ALTER TABLE `proposal`
 ADD PRIMARY KEY (`ID_PROPOSAL`), ADD KEY `FK_RELATIONSHIP_2` (`ID_PESERTA`);

--
-- Indexes for table `syarat`
--
ALTER TABLE `syarat`
 ADD PRIMARY KEY (`ID_SYARAT`), ADD KEY `FK_RELATIONSHIP_1` (`ID_PESERTA`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
MODIFY `ID_ARTIKEL` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `hasil`
--
ALTER TABLE `hasil`
MODIFY `ID_HASIL` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `operator`
--
ALTER TABLE `operator`
MODIFY `id_opr` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `peserta`
--
ALTER TABLE `peserta`
MODIFY `ID_PESERTA` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=70;
--
-- AUTO_INCREMENT for table `proposal`
--
ALTER TABLE `proposal`
MODIFY `ID_PROPOSAL` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `syarat`
--
ALTER TABLE `syarat`
MODIFY `ID_SYARAT` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `hasil`
--
ALTER TABLE `hasil`
ADD CONSTRAINT `FK_RELATIONSHIP_3` FOREIGN KEY (`ID_PESERTA`) REFERENCES `peserta` (`ID_PESERTA`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `proposal`
--
ALTER TABLE `proposal`
ADD CONSTRAINT `FK_RELATIONSHIP_2` FOREIGN KEY (`ID_PESERTA`) REFERENCES `peserta` (`ID_PESERTA`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `syarat`
--
ALTER TABLE `syarat`
ADD CONSTRAINT `FK_RELATIONSHIP_1` FOREIGN KEY (`ID_PESERTA`) REFERENCES `peserta` (`ID_PESERTA`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
