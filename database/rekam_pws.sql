-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Sep 2021 pada 14.25
-- Versi server: 10.4.20-MariaDB
-- Versi PHP: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rekam_pws`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `helper`
--

CREATE TABLE `helper` (
  `id` int(25) NOT NULL,
  `tanggal` date NOT NULL,
  `kode_helper` varchar(250) NOT NULL,
  `nama1` varchar(250) NOT NULL,
  `jenis_unit1` varchar(250) NOT NULL,
  `hm1` varchar(250) NOT NULL,
  `jabatan1` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `helper`
--

INSERT INTO `helper` (`id`, `tanggal`, `kode_helper`, `nama1`, `jenis_unit1`, `hm1`, `jabatan1`) VALUES
(1, '2021-04-01', 'BD13', 'Robi Afrizal', 'Bulldozer DS-01', '69,4', 'Helper'),
(2, '2021-04-01', 'BD13', 'Deni Purwanto', 'Bulldozer DS-01', '77,5', 'helper'),
(3, '2021-04-01', 'DS.34', 'M. Tohari', 'Excavator PWS-01', '102,1', 'helper'),
(4, '2021-04-01', '-', 'Kisdianto ', 'Relief Gdr 01 dan Gdr 03', '103,4', 'helper'),
(5, '2021-04-01', 'DS.35', 'Rezi Pratama', 'Excavator PWS-02', '92,6', 'helper'),
(6, '2021-04-01', 'Exca.02', 'Yosep Ardiansa', 'Relief Exca.01 Dan Exca.02', '99,6', 'helper'),
(7, '2021-04-01', 'GD.10', 'Rudi Hartono', 'Grader 02 (GD.10)', '75,9', 'helper\r\n'),
(8, '2021-04-01', 'GD.10', 'Turiadi', 'Grader 02 (GD.10)', '72,3', 'helper'),
(9, '2021-04-01', 'GD.09', 'Prandi Jaya', 'Grader 01', '97,7', 'helper'),
(10, '2021-04-01', 'GD.011', 'Hairudin', 'Grader 03', '101,1', 'helper\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kegiatan`
--

CREATE TABLE `kegiatan` (
  `id` int(25) NOT NULL,
  `tanggal` text NOT NULL,
  `operator` varchar(222) NOT NULL,
  `helper` varchar(222) NOT NULL,
  `jenis_unit` varchar(239) NOT NULL,
  `dari_jam` varchar(222) NOT NULL,
  `sampai_jam` varchar(222) NOT NULL,
  `total` varchar(121) NOT NULL,
  `lokasi` varchar(240) NOT NULL,
  `jenis_aktifitas` varchar(250) NOT NULL,
  `aktivitas` varchar(240) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kegiatan`
--

INSERT INTO `kegiatan` (`id`, `tanggal`, `operator`, `helper`, `jenis_unit`, `dari_jam`, `sampai_jam`, `total`, `lokasi`, `jenis_aktifitas`, `aktivitas`) VALUES
(68, '2021-09-05', 'Adi Kristian', 'Deni Purwanto', 'DUMP TRUCK', '23', '24', '0', 'Musi', '1', 'Perbaikan Jalan Utama MHP Menara unit 9 Suban'),
(73, '2021-09-22', 'Iin Iryanti Putra Wira Jasmana', 'Hairudin', 'asda', '6207.7', '6212.5', '4.8', 'Sopa', '1', 'asdasd'),
(74, '2021-09-22', 'Gunawan', 'M. Tohari', 'asda', '6207.7', '6212.5', '4.8', 'Sopa', '1', 'o dnf'),
(75, '2021-09-24', 'April Putra', 'Kisdianto ', 'asda', '6207.7', '6212.5', '4.8', 'Musi', '1', 'adgsxcf'),
(76, '2021-09-24', 'Moh.Priyantoo', 'M. Toharii', 'asda', '6207.7', '6212.5', '4.8', 'Sopa', 'Hour Worked', 'menyanyi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `operator`
--

CREATE TABLE `operator` (
  `id` int(25) NOT NULL,
  `tanggal` date NOT NULL,
  `kode_operator` varchar(250) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `nama_helper` varchar(250) NOT NULL,
  `jenis_unit` varchar(250) NOT NULL,
  `hm` varchar(250) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `operator`
--

INSERT INTO `operator` (`id`, `tanggal`, `kode_operator`, `nama`, `nama_helper`, `jenis_unit`, `hm`, `role`) VALUES
(6, '2021-04-01', 'BD13', 'Moh.Priyanto', 'Robi Afrizal', 'Bulldozer DS-01', '69,4', 'p1'),
(8, '2021-04-01', 'BD13', 'Sugianto', 'Deni Purwanto', 'Bulldozer DS-01', '77,5', 'p2'),
(10, '2021-07-01', 'DS.34', 'Gunawan', 'M. Tohari', 'Excavator PWS-01', '102,1', 'p3'),
(12, '2021-04-01', 'DS.35', 'Naim Romdani', 'Rezi Pratama', 'Excavator PWS-02', '92,6', 'p1'),
(14, '2021-04-01', 'Exca.01', 'Sufernando Manullang', 'Yosep Ardiansa', 'Relief Exca.01 Dan Exca.02', '99,6', 'p2'),
(16, '2021-04-01', 'GD.10', 'April Putra', 'Rudi Hartono', 'Grader 02 (GD.10)', '75,9', 'p3'),
(18, '2021-04-01', 'GD.10', 'Hendra Prayitno', 'Turiadi', 'Grader 02 (GD.10)', '72,3', 'p1'),
(20, '2021-04-01', 'GD.09', 'Iin Iryanti Putra Wira Jasmana', 'Prandi Jaya', 'Grader 01', '97,7', 'p2'),
(22, '2021-04-01', 'GD.011', 'Adi Kristian', 'Hairudin', 'Grader 03', '101,1', 'p3'),
(24, '2021-04-01', '-', 'Krisdianto', 'Kisdianto ', 'Relief Gdr 01 dan Gdr 03', '103,4', 'p1'),
(27, '2021-09-04', 'da', 'Muhammad Avila Landry', 'Muhammad Avila Landry', 'Grader KOMATSU GD535', '1', 'p2'),
(28, '2021-09-26', '21321', 'marthinn', 'marthin', '3212', '12', 'p3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `unit`
--

CREATE TABLE `unit` (
  `id` int(25) NOT NULL,
  `kode_unit` varchar(250) NOT NULL,
  `jenis_unit` varchar(200) NOT NULL,
  `merek` varchar(210) NOT NULL,
  `seri` varchar(230) NOT NULL,
  `tanggal_pembuatan` varchar(250) NOT NULL,
  `keterangan` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `unit`
--

INSERT INTO `unit` (`id`, `kode_unit`, `jenis_unit`, `merek`, `seri`, `tanggal_pembuatan`, `keterangan`) VALUES
(59, 'DS-01', 'D85E-SS-2A', 'BULLDOZER KOMATSU', '6588', '2018', '              Musi'),
(60, 'EXCA-01', 'PC200-8MO', 'EXCAVATOR LOGGING SPEC', 'C21111', '2018', '              Musi'),
(61, 'EXCA-01', 'PC200-8MO', 'EXCAVATOR LOGGING SPEC', 'C21175', '2018', '              Jirak'),
(62, 'GD-01', 'GD535-5', 'MOTOR GRADER KOMATSU', 'K8418/1271', '2018', '              Jirak'),
(63, 'GD-02', 'GD535-5', 'MOTOR GRADER KOMATSU', 'K8503/1270', '2018', '              Jirak'),
(64, 'GD-03', 'GD535-5', 'MOTOR GRADER KOMATSU', 'J10041', '2018', '              Jirak'),
(65, 'GD-04', 'GD535-5', 'MOTOR GRADER KOMATSU', 'J10033', '2018', '              Musi'),
(66, 'GD-05', 'GD535-5', 'MOTOR GRADER KOMATSU', 'J10025', '2018', '              Sopa'),
(67, 'BHL-01', '3DX', 'BACKHOE LOADER JCB', 'H00175023', '2018', '              Jirak'),
(68, 'BHL-02', '3DXBA', 'BACKHOE LOADER JCB', 'H00174821', '2018', '          Musi    '),
(69, 'VB-01', 'SV525TF', 'VIBRATOR SAKAI SV525TF', '6 SV35-11575', '2018', '              Jirak'),
(70, 'VB-02', 'SV525TF', 'BACKHOE LOADER JCB', '6 SV35-11576', '2018', '              Jirak'),
(71, 'VB-03', 'SV525TF', 'VIBRATOR SAKAI SV525TF', '6 SV35-11574', '2018', '              Jirak'),
(72, 'VB-04', 'SV525TF', 'VIBRATOR SAKAI SV525TF', '6 SV35-11577', '2018', '              Musi'),
(73, 'VB-05', 'SV525TF', 'VIBRATOR SAKAI SV525TF', '6 SV35-11578', '2018', '              Sopa'),
(74, 'DT-01', 'DUMP TRUCK', 'MITSUBISHI FUSO FN52ML', '-', '2018', '              Jirak'),
(75, 'DT-02', 'DUMP TRUCK', 'MITSUBISHI FUSO FN52ML', '-', '2018', '              Musi'),
(76, 'DT-03', 'DUMP TRUCK', 'MITSUBISHI FUSO FN52ML', '-', '2018', '              Jirak'),
(77, 'DT-04', 'DUMP TRUCK', 'MITSUBISHI FUSO FN52ML', '-', '2018', '              Jirak'),
(78, 'asdasd', 'asda', 'sdsad', 'asdas', '2018', '              asdasd'),
(80, 'jladhf', 'jshdf', 'jsdhf', '/ujsdh', '2018', 'jdhsf              '),
(81, '3112', '3212', 'tesa', 'tesa', '2001', 'tesa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(222) NOT NULL,
  `password` varchar(222) NOT NULL,
  `nama` varchar(222) NOT NULL,
  `foto` varchar(222) NOT NULL,
  `role` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `nama`, `foto`, `role`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'ADMIN', 'cy.jpg', 'admin'),
(2, 'pimpinan', '90973652b88fe07d05a4304f0a945de8', 'PIMPINAN', 'PWS Logo.jpg', 'pimpinan'),
(3, 'pekerja1', '07f2c0b2f5c20493acadd992bb9b6a45', 'PEKERJA1', 'PWS Logo.jpg', 'pekerja1'),
(4, 'pekerja2', 'f1d424470eca44dd6441271882127c4e', 'PEKERJA2', 'PWS Logo.jpg', 'pekerja2'),
(7, 'marthin', '9e8387ae6a13bfc27b3389368134def3', 'MARTHIN', 'MyMotor.jpg', 'admin'),
(10, 'pekerja3', '2993cdecf608f97fbdbc5f8c5246eb1c', 'PEKERJA3', 'ilearning.jpg', 'pekerja3'),
(12, 'tes', '28b662d883b6d76fd96e4ddc5e9ba780', 'tes', 'default.png', 'admin'),
(13, 'nining', 'd844d7002741826f01a93f58e67effa1', 'NINING', 'nining.jpg', 'pimpinan');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `helper`
--
ALTER TABLE `helper`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `operator`
--
ALTER TABLE `operator`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `unit`
--
ALTER TABLE `unit`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `helper`
--
ALTER TABLE `helper`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT untuk tabel `operator`
--
ALTER TABLE `operator`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT untuk tabel `unit`
--
ALTER TABLE `unit`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
