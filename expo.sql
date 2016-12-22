-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 22 Des 2016 pada 17.16
-- Versi Server: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `expo`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE IF NOT EXISTS `mahasiswa` (
  `nim` char(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `kontak` varchar(15) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama`, `email`, `kontak`, `alamat`, `jenis_kelamin`) VALUES
('14.11.8000', 'PURNAWIRADIN', 'don@gmail.com', '097987562321', 'Yogyakarta', 'Laki-Laki'),
('15.11.9000', 'DINI ANJARSARI', 'dini@gmail.com', '086324565231', 'Klaten', 'Perempuan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendaftara`
--

CREATE TABLE IF NOT EXISTS `pendaftara` (
  `id` int(11) NOT NULL,
  `nim` char(10) NOT NULL,
  `id_ukm` char(6) DEFAULT NULL,
  `id_ukm2` char(6) DEFAULT NULL,
  `id_ukm3` char(6) DEFAULT NULL,
  `alasan1` varchar(200) DEFAULT NULL,
  `alasan2` varchar(200) DEFAULT NULL,
  `alasan3` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `ukm`
--

CREATE TABLE IF NOT EXISTS `ukm` (
  `id_ukm` char(6) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ukm`
--

INSERT INTO `ukm` (`id_ukm`, `nama`, `email`, `contact`) VALUES
('BSO001', 'Futsal Amikom', 'futsal@amikom.ac.id', '098676545652'),
('BSO002', 'Kreta', 'kreta@amikom.ac.id', '098676545652'),
('BSO003', 'LPM Journal', 'lpm@amikom.ac.id', '087645327645'),
('BSO004', 'Onegai Shelter', 'Onegai@amikom.ac.id', '098765436234432'),
('BSO005', 'Amikom Overclocking Team', 'aoct@amikom.ac.id', '098765436234432'),
('COM001', 'Amikom Dota Community', 'dota@amikom.ac.id', '087645543245'),
('COM002', 'Amikom Badminton Community', 'asbc@amikom.ac.id', '098676545652'),
('COM003', 'Amikom Reptile Community', 'arc@amikom.ac.id', '098676545652'),
('COM004', 'PSHT', 'psht@amikom.ac.id', '097564323456'),
('COM005', 'Amikom Bloger Community', 'abc@amikom.ac.id', '087676435652'),
('UKM001', 'Komunitas Multimedia Amikom', 'koma@amikom.ac.id', '123432132432'),
('UKM002', 'Amikom Computer Club', 'amcc@amikom.ac.id', '098676545652'),
('UKM003', 'Amikom English Club', 'aec@amikom.ac.id', '067676545652'),
('UKM004', 'Taekwondo', 'Taekwondo@amikom.ac.id', '096754657364'),
('UKM005', 'Manggar', 'manggar@amikom.ac.id', '087456345234'),
('UKM006', 'UKI Jastis', 'uki@amikom.ac.id', '087987567453');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `nim` char(10) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`nim`, `password`) VALUES
('14.11.8000', 'wira'),
('15.11.9000', 'dini');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
 ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `pendaftara`
--
ALTER TABLE `pendaftara`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `id_ukm` (`id_ukm`,`id_ukm2`,`id_ukm3`), ADD KEY `nim` (`nim`), ADD KEY `id_ukm2` (`id_ukm2`), ADD KEY `id_ukm3` (`id_ukm3`);

--
-- Indexes for table `ukm`
--
ALTER TABLE `ukm`
 ADD PRIMARY KEY (`id_ukm`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD KEY `nim` (`nim`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `pendaftara`
--
ALTER TABLE `pendaftara`
ADD CONSTRAINT `pendaftara_ibfk_1` FOREIGN KEY (`nim`) REFERENCES `mahasiswa` (`nim`) ON UPDATE CASCADE,
ADD CONSTRAINT `pendaftara_ibfk_2` FOREIGN KEY (`id_ukm`) REFERENCES `ukm` (`id_ukm`) ON UPDATE CASCADE,
ADD CONSTRAINT `pendaftara_ibfk_3` FOREIGN KEY (`id_ukm2`) REFERENCES `ukm` (`id_ukm`) ON UPDATE CASCADE,
ADD CONSTRAINT `pendaftara_ibfk_4` FOREIGN KEY (`id_ukm3`) REFERENCES `ukm` (`id_ukm`) ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `user`
--
ALTER TABLE `user`
ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`nim`) REFERENCES `mahasiswa` (`nim`) ON DELETE NO ACTION ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
