-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 15, 2022 at 12:21 PM
-- Server version: 5.7.37
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `demoappm_arya`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_detail_kelas`
--

CREATE TABLE `tb_detail_kelas` (
  `id_detail_kelas` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_detail_kelas`
--

INSERT INTO `tb_detail_kelas` (`id_detail_kelas`, `id_kelas`, `id_siswa`) VALUES
(98, 18, 3),
(99, 19, 4),
(100, 19, 3),
(101, 19, 3),
(102, 19, 3),
(103, 19, 3),
(104, 19, 3),
(105, 19, 3),
(106, 19, 3),
(107, 19, 3),
(108, 19, 5),
(109, 19, 5),
(110, 19, 5),
(111, 19, 5);

-- --------------------------------------------------------

--
-- Table structure for table `tb_guru`
--

CREATE TABLE `tb_guru` (
  `id_guru` int(11) NOT NULL,
  `fname` varchar(144) NOT NULL,
  `lname` varchar(144) NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `status` enum('T','H') NOT NULL,
  `email` varchar(144) NOT NULL,
  `password` varchar(144) NOT NULL,
  `roles` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_guru`
--

INSERT INTO `tb_guru` (`id_guru`, `fname`, `lname`, `jenis_kelamin`, `status`, `email`, `password`, `roles`) VALUES
(2, 'Master', 'User', 'L', 'T', 'usermaster@gmail.com', '12345678', '0'),
(5, 'Drs. ', 'Aswawarman Launu, MM ', 'L', 'T', 'mr.popoasu@gmail.com', '1234', '1'),
(6, 'Mutimun ', 'Muh. Ilyas, S.PdI ', 'P', 'T', 'MutimunMuh.IlyasS.PdI@smpbungku.com', '1234', '1'),
(7, 'Drs.', 'Samrah ', 'P', 'T', 'Drs.Samrah@smpbungku.com', '1234', '1'),
(8, 'Agun, ', 'S.Pd ', 'P', 'T', 'AgunS.Pd@smpbungku.com', '1234', '1'),
(9, 'Kartini, ', 'S.Pd ', 'P', 'T', 'KartiniS.Pd@smpbungku.com', '1234', '1'),
(10, 'Siti ', 'Nurmiati R, S.Pd', 'P', 'H', 'SitiNurmiati@smpbungku.com', '1234', '1'),
(11, 'Huraera', ' M Roe, SH', 'P', 'T', 'HuraeraMRoe@smpbungku.com', '1234', '1'),
(12, 'Hj. ', 'Mustika Ilyas, S.Ag', 'P', 'H', 'Hj.MustikaIlyas@smpbungku.com', '1234', '1'),
(13, 'Dra.Hj. ', 'Marhani Dollah', 'L', 'H', 'Dra.Hj.MarhaniDollah@smpbungku.com', '1234', '1'),
(14, 'Najamudin', ' A. Djamin, S.Pd', 'L', 'H', 'NajamudinA.Djamin@smpbungku.com', '1234', '1'),
(15, 'Minarti', ' MD, S.Ag', 'L', 'H', 'Minarti@smpbungku.com', '1234', '1'),
(16, 'Fitriani ', 'Laonu, S.Pd', 'L', 'H', 'FitrianiLaonu@smpbungku.com', '1234', '1'),
(17, 'Usman, ', 'S.Pd', 'L', 'H', 'Usman@smpbungku.com', '1234', '1'),
(18, 'Kurnia ', 'Yakub', 'L', 'H', 'KurniaYakub@smpbungku.com', '1234', '1'),
(19, 'Asniwati ', 'Daud, SE', 'P', 'H', 'AsniwatiDaud@smpbungku.com', '1234', '1'),
(20, 'Kisman', ' Yakub', 'L', 'H', 'KismanYakub@smpbungku.com', '1234', '1'),
(21, 'Rah', 'matia', 'P', 'H', 'Rahmatia@smpbungku.com', '1234', '1'),
(22, 'Hartati ', 'Umar A. Nggio, S.Pd ', 'P', 'H', 'HartatiUmarA.Nggio@smpbungku.com', '1234', '1'),
(23, 'Abd. ', 'Barry, S.Pd', 'L', 'H', 'Abd.Barry@smpbungku.com', '1234', '1'),
(24, 'Helmina', ' M. Mutalib, S.Pd ', 'P', 'H', 'HelminaM.Mutalib@smpbungku.com', '1234', '1'),
(25, 'Serli ', 'Sampe, S.Pd ', 'L', 'H', 'SerliSampe@smpbungku.com', '1234', '1'),
(26, 'Darlian', ', S.Pd ', 'L', 'H', 'Darlian@smpbungku.com', '1234', '1'),
(27, 'Herianto ', 'Naim', 'L', 'H', 'HeriantoNaim@smpbungku.com', '1234', '1'),
(28, 'Suriani', ', S.Pd', 'L', 'T', 'Suriani@smpbungku.com', '1234', '1'),
(29, 'Maryam ', 'Salangapa, S.Pd', 'L', 'H', 'MaryamSalangapa@smpbungku.com', '1234', '1'),
(30, 'Fitriah ', 'Aras Yusuf, S.Pd ', 'L', 'H', 'FitriahArasYusuf@smpbungku.com', '1234', '1'),
(31, 'Utami ', 'Cahyaningsih, S.Pd ', 'L', 'H', 'UtamiCahyaningsih@smpbungku.com', '1234', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kelas`
--

CREATE TABLE `tb_kelas` (
  `id_kelas` int(11) NOT NULL,
  `id_matkul` int(11) NOT NULL,
  `id_guru` int(11) NOT NULL,
  `keterangan_kelas` varchar(144) NOT NULL,
  `semester` enum('ganjil','genap') NOT NULL,
  `tahun` int(11) NOT NULL,
  `waktu_mulai` time NOT NULL,
  `waktu_selesai` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kelas`
--

INSERT INTO `tb_kelas` (`id_kelas`, `id_matkul`, `id_guru`, `keterangan_kelas`, `semester`, `tahun`, `waktu_mulai`, `waktu_selesai`) VALUES
(18, 5, 7, '8D', 'ganjil', 2022, '00:30:00', '13:30:00'),
(19, 1, 5, '7D', 'ganjil', 2022, '14:50:00', '08:08:00');

-- --------------------------------------------------------

--
-- Table structure for table `tb_matkul`
--

CREATE TABLE `tb_matkul` (
  `id_matkul` int(11) NOT NULL,
  `kode_matkul` varchar(144) NOT NULL,
  `nama_matkul` varchar(144) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_matkul`
--

INSERT INTO `tb_matkul` (`id_matkul`, `kode_matkul`, `nama_matkul`) VALUES
(1, '001', 'Bahasa Indonesia'),
(3, '002', 'Bahasa Inggris'),
(4, '003', 'Ilmu Pengetahuan Alam'),
(5, '004', 'Ilmu Pengetahuan Sosial'),
(7, '005', 'Matematika'),
(8, '006', 'Pendidikan Agama Islam '),
(9, '007', 'Pendidikan Kewarganegaraan '),
(10, '008', 'Prakarya Mulok'),
(11, '009', 'Pendidikan Jasmani'),
(13, '010', 'Seni Budaya'),
(14, '011', 'Pendidikan Pancasila dan Kewarganegaraan');

-- --------------------------------------------------------

--
-- Table structure for table `tb_nilai`
--

CREATE TABLE `tb_nilai` (
  `id_nilai` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `id_matkul` int(11) NOT NULL,
  `nilai_siswa` varchar(144) NOT NULL,
  `keterangan` varchar(144) NOT NULL,
  `keterangan_nilai` enum('UTS','UAS','Ulangan','Tugas') NOT NULL,
  `status` enum('0','1') NOT NULL,
  `key_size` varchar(144) NOT NULL,
  `pass_key` varchar(122) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_nilai`
--

INSERT INTO `tb_nilai` (`id_nilai`, `id_siswa`, `id_matkul`, `nilai_siswa`, `keterangan`, `keterangan_nilai`, `status`, `key_size`, `pass_key`) VALUES
(4, 3, 5, '80', 'LULUS', 'UTS', '0', '256', '33'),
(5, 4, 1, '90', 'LULUS', 'UTS', '0', '256', '1234'),
(6, 4, 1, '70', 'LULUS', 'UAS', '0', '256', '1234'),
(7, 4, 1, '100', 'LULUS', 'Tugas', '0', '256', '1234'),
(8, 4, 1, '80', 'LULUS', 'Ulangan', '0', '256', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `tb_siswa`
--

CREATE TABLE `tb_siswa` (
  `id_siswa` int(11) NOT NULL,
  `fname` varchar(144) NOT NULL,
  `lname` varchar(144) NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `email` varchar(144) NOT NULL,
  `password` varchar(144) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_siswa`
--

INSERT INTO `tb_siswa` (`id_siswa`, `fname`, `lname`, `jenis_kelamin`, `tanggal_lahir`, `email`, `password`) VALUES
(3, 'sura', 'Sura', 'L', '1999-11-16', 'aryasura@gmail.com', '12345'),
(4, 'Abd. ', 'Rahwan ', 'L', '2022-01-07', 'aspkho@gmail.com', '1234'),
(5, 'Abd.', 'Jamal ', 'L', '2022-01-12', 'Abd.Jamal@smpbungku.com', '1234'),
(6, 'Alfa', 'izin ', 'L', '2022-01-12', 'Alfaizin@smpbungku.com', '1234'),
(7, 'Annisa', ' Putri ', 'P', '2022-01-12', 'AnnisaPutri@smpbungku.com', '1234'),
(8, 'Ayatul ', 'Salsabila Nunu', 'P', '2022-01-12', 'AyatulSalsabilaNunu@smpbungku.com', '1234'),
(9, 'Dean ', 'Putrawan Hardi ', 'L', '2022-01-12', 'DeanPutrawanHardi@smpbungku.com', '1234'),
(10, 'De', 'nis', 'L', '2022-01-12', 'Denis@smpbungku.com', '1234'),
(11, 'Fadil ', 'Adytri', 'L', '2022-01-12', 'FadilAdytri@smpbungku.com', '1234'),
(12, 'Farhad ', 'Al-Fariziq', 'L', '2022-01-12', 'FarhadAlFariziq@smpbungku.com', '1234'),
(13, 'Hadisin ', 'Tahsya', 'P', '2022-01-20', 'HadisinTahsya@smpbungku.com', '1234'),
(14, 'Helvina ', 'Nurulhusna ', 'P', '2022-01-12', 'HelvinaNurulhusna@smpbungku.com', '1234'),
(15, 'Hidayat. ', ' S ', 'L', '2022-01-12', 'Hidayat.S@smpbungku.com', '1234'),
(16, 'Indar ', 'Permata Marzuki', 'L', '2022-01-12', 'IndarPermataMarzuki@smpbungku.com', '1234'),
(17, 'Irma', 'yanti ', 'P', '2022-01-12', 'Irmayanti@smpbungku.com', '1234'),
(18, 'Jul', 'fikar', 'L', '2022-01-12', 'Julfikar@smpbungku.com', '1234'),
(19, 'Lukman ', 'Herwansa', 'L', '2022-01-12', 'LukmanHerwansa@smpbungku.com', '1234'),
(20, 'Masn', 'a ', 'P', '2022-01-12', 'Masna@smpbungku.com', '1234'),
(21, 'Meina', '.', 'P', '2022-01-12', 'Meina@smpbungku.com', '1234'),
(22, 'Moh. ', 'Fauzan', 'L', '2022-01-12', 'Moh.Fauzan@smpbungku.com', '1234'),
(23, 'Moh. ', 'Nabil', 'L', '2022-01-12', 'Moh.Nabil@smpbungku.com', '1234'),
(24, 'Moh.', ' Rasya Aqqilla Hasan', 'L', '2022-01-12', 'Moh.RasyaAqqillaHasan@smpbungku.com', '1234'),
(25, 'Muh.', ' Alif M. Rundah ', 'L', '2022-01-12', 'Muh.AlifM.Rundah@smpbungku.com', '1234'),
(26, 'Nur ', 'Aisyah', 'P', '2022-01-12', 'NurAisyah@smpbungku.com', '1234'),
(27, 'Nur ', 'Annisa Ahmad ', 'P', '2022-01-12', 'NurAnnisaAhmad@smpbungku.com', '1234'),
(28, 'Radit ', 'Maulana ', 'L', '2022-01-12', 'RaditMaulana@smpbungku.com', '1234'),
(29, 'Siti ', 'Amina ', 'P', '2022-01-12', 'SitiAmina@smpbungku.com', '1234'),
(30, 'Siti ', 'Hajar Mooduto ', 'P', '2022-01-12', 'SitiHajarMooduto@smpbungku.com', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_detail_kelas`
--
ALTER TABLE `tb_detail_kelas`
  ADD PRIMARY KEY (`id_detail_kelas`),
  ADD KEY `id_kelas` (`id_kelas`),
  ADD KEY `id_siswa` (`id_siswa`);

--
-- Indexes for table `tb_guru`
--
ALTER TABLE `tb_guru`
  ADD PRIMARY KEY (`id_guru`);

--
-- Indexes for table `tb_kelas`
--
ALTER TABLE `tb_kelas`
  ADD PRIMARY KEY (`id_kelas`),
  ADD KEY `id_matkul` (`id_matkul`),
  ADD KEY `id_guru` (`id_guru`);

--
-- Indexes for table `tb_matkul`
--
ALTER TABLE `tb_matkul`
  ADD PRIMARY KEY (`id_matkul`);

--
-- Indexes for table `tb_nilai`
--
ALTER TABLE `tb_nilai`
  ADD PRIMARY KEY (`id_nilai`),
  ADD KEY `id_siswa` (`id_siswa`),
  ADD KEY `id_matkul` (`id_matkul`);

--
-- Indexes for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_detail_kelas`
--
ALTER TABLE `tb_detail_kelas`
  MODIFY `id_detail_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT for table `tb_guru`
--
ALTER TABLE `tb_guru`
  MODIFY `id_guru` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `tb_kelas`
--
ALTER TABLE `tb_kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tb_matkul`
--
ALTER TABLE `tb_matkul`
  MODIFY `id_matkul` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tb_nilai`
--
ALTER TABLE `tb_nilai`
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_detail_kelas`
--
ALTER TABLE `tb_detail_kelas`
  ADD CONSTRAINT `tb_detail_kelas_ibfk_1` FOREIGN KEY (`id_kelas`) REFERENCES `tb_kelas` (`id_kelas`),
  ADD CONSTRAINT `tb_detail_kelas_ibfk_2` FOREIGN KEY (`id_siswa`) REFERENCES `tb_siswa` (`id_siswa`);

--
-- Constraints for table `tb_kelas`
--
ALTER TABLE `tb_kelas`
  ADD CONSTRAINT `tb_kelas_ibfk_1` FOREIGN KEY (`id_matkul`) REFERENCES `tb_matkul` (`id_matkul`),
  ADD CONSTRAINT `tb_kelas_ibfk_3` FOREIGN KEY (`id_guru`) REFERENCES `tb_guru` (`id_guru`);

--
-- Constraints for table `tb_nilai`
--
ALTER TABLE `tb_nilai`
  ADD CONSTRAINT `tb_nilai_ibfk_1` FOREIGN KEY (`id_siswa`) REFERENCES `tb_siswa` (`id_siswa`),
  ADD CONSTRAINT `tb_nilai_ibfk_2` FOREIGN KEY (`id_matkul`) REFERENCES `tb_matkul` (`id_matkul`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
