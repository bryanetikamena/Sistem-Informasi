-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2023 at 01:09 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `si_promosi_kenaikan_jabatan`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `id_admin` varchar(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(12) NOT NULL,
  `kontak` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `id_admin`, `nama`, `jenis_kelamin`, `kontak`) VALUES
(1, 'Ad0001', 'Erika Laras', 'Perempuan', '081244602237'),
(3, 'Ad0002', 'Melati Permatasari', 'Perempuan', '085254387762'),
(4, 'Ad0003', 'Leonardo Lim', 'Laki-laki', '087712470938'),
(5, 'Ad0004', 'Ariham Abdullah', 'Laki-laki', '081244890273'),
(6, 'Ad0005', 'Bryan ', 'Laki-laki', '081312503942'),
(7, 'Ad0006', 'Decky Abyansyah', 'Laki-laki', '082246098823'),
(8, 'Ad0007', 'Ella Amelia ', 'Perempuan', '081240549281'),
(9, 'Ad0008', 'Martin Agustino', 'Laki-laki', '085293841206');

-- --------------------------------------------------------

--
-- Table structure for table `bobot_kriterias`
--

CREATE TABLE `bobot_kriterias` (
  `id` int(11) NOT NULL,
  `id_bobot_kriteria` varchar(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `bobot` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bobot_kriterias`
--

INSERT INTO `bobot_kriterias` (`id`, `id_bobot_kriteria`, `nama`, `bobot`) VALUES
(1, 'BK0001', 'Tanggung Jawab', 0.25),
(2, 'BK0002', 'Disiplin', 0.2),
(3, 'BK0003', 'Loyalitas', 0.2),
(4, 'BK0004', 'Keahlian', 0.15),
(5, 'BK0005', 'Kerja Sama', 0.1),
(6, 'BK0006', 'Pengetahuan', 0.1);

-- --------------------------------------------------------

--
-- Table structure for table `karyawans`
--

CREATE TABLE `karyawans` (
  `id` int(11) NOT NULL,
  `id_karyawan` varchar(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `kontak` varchar(15) NOT NULL,
  `jabatan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `karyawans`
--

INSERT INTO `karyawans` (`id`, `id_karyawan`, `nama`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `alamat`, `kontak`, `jabatan`) VALUES
(1, 'Kr0001', 'Adi Mulyanto', 'Batu', '2001-09-23', 'Laki-laki', 'Malang', '081324082886', 'Staff Gudang'),
(2, 'Kr0002', 'Sri Yuliati', 'Malang', '1998-04-27', 'Perempuan', 'Malang', '081245098826', 'Staff Administrasi'),
(3, 'Kr0003', 'Arum Sekar ', 'Jember', '2002-03-09', 'Perempuan', 'Malang', '0852-1379836', 'Staff Pemasaran'),
(4, 'Kr0004', 'Eko Setiawan', 'Malang', '2003-12-13', 'Laki-laki', 'Malang', '085255601925', 'Staff Pemasaran'),
(5, 'Kr0005', 'Irwanto', 'Mojokerto', '2000-08-27', 'Laki-laki', 'Malang', '087762985148', 'Staff Gudang'),
(6, 'Kr0006', 'Marissa', 'Malang', '2001-11-12', 'Perempuan', 'Malang', '08128877802', 'Staff Administrasi');

-- --------------------------------------------------------

--
-- Table structure for table `kriteria_disiplins`
--

CREATE TABLE `kriteria_disiplins` (
  `id` int(11) NOT NULL,
  `id_kriteria_disiplin` varchar(11) NOT NULL,
  `id_karyawan` varchar(11) NOT NULL,
  `id_bobot_kriteria` varchar(11) NOT NULL,
  `poin_penilaian` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kriteria_disiplins`
--

INSERT INTO `kriteria_disiplins` (`id`, `id_kriteria_disiplin`, `id_karyawan`, `id_bobot_kriteria`, `poin_penilaian`) VALUES
(1, 'KD0001', 'Kr0001', 'BK0002', 90),
(6, 'KD0002', 'Kr0002', 'BK0002', 100);

-- --------------------------------------------------------

--
-- Table structure for table `kriteria_keahlians`
--

CREATE TABLE `kriteria_keahlians` (
  `id` int(11) NOT NULL,
  `id_kriteria_keahlian` varchar(11) NOT NULL,
  `id_karyawan` varchar(11) NOT NULL,
  `id_bobot_kriteria` varchar(11) NOT NULL,
  `poin_penilaian` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kriteria_keahlians`
--

INSERT INTO `kriteria_keahlians` (`id`, `id_kriteria_keahlian`, `id_karyawan`, `id_bobot_kriteria`, `poin_penilaian`) VALUES
(1, 'KK0001', 'Kr0001', 'BK0004', 95),
(4, 'KK0002', 'Kr0002', 'BK0004', 100);

-- --------------------------------------------------------

--
-- Table structure for table `kriteria_kerja_samas`
--

CREATE TABLE `kriteria_kerja_samas` (
  `id` int(11) NOT NULL,
  `id_kriteria_kerja_sama` varchar(11) NOT NULL,
  `id_karyawan` varchar(11) NOT NULL,
  `id_bobot_kriteria` varchar(11) NOT NULL,
  `poin_penilaian` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kriteria_kerja_samas`
--

INSERT INTO `kriteria_kerja_samas` (`id`, `id_kriteria_kerja_sama`, `id_karyawan`, `id_bobot_kriteria`, `poin_penilaian`) VALUES
(3, 'KKS0001', 'Kr0001', 'BK0005', 100),
(5, 'KKS0002', 'Kr0002', 'BK0005', 100);

-- --------------------------------------------------------

--
-- Table structure for table `kriteria_loyalitas`
--

CREATE TABLE `kriteria_loyalitas` (
  `id` int(11) NOT NULL,
  `id_kriteria_loyalitas` varchar(11) NOT NULL,
  `id_karyawan` varchar(11) NOT NULL,
  `id_bobot_kriteria` varchar(11) NOT NULL,
  `poin_penilaian` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kriteria_loyalitas`
--

INSERT INTO `kriteria_loyalitas` (`id`, `id_kriteria_loyalitas`, `id_karyawan`, `id_bobot_kriteria`, `poin_penilaian`) VALUES
(1, 'KL0001', 'Kr0001', 'BK0003', 88),
(4, 'KL0002', 'Kr0002', 'BK0003', 100);

-- --------------------------------------------------------

--
-- Table structure for table `kriteria_pengetahuans`
--

CREATE TABLE `kriteria_pengetahuans` (
  `id` int(11) NOT NULL,
  `id_kriteria_pengetahuan` varchar(11) NOT NULL,
  `id_karyawan` varchar(11) NOT NULL,
  `id_bobot_kriteria` varchar(11) NOT NULL,
  `poin_penilaian` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kriteria_pengetahuans`
--

INSERT INTO `kriteria_pengetahuans` (`id`, `id_kriteria_pengetahuan`, `id_karyawan`, `id_bobot_kriteria`, `poin_penilaian`) VALUES
(1, 'KP0001', 'Kr0001', 'BK0006', 80),
(4, 'KP0002', 'Kr0002', 'BK0006', 100);

-- --------------------------------------------------------

--
-- Table structure for table `kriteria_tanggung_jawabs`
--

CREATE TABLE `kriteria_tanggung_jawabs` (
  `id` int(11) NOT NULL,
  `id_kriteria_tanggung_jawab` varchar(11) NOT NULL,
  `id_karyawan` varchar(11) NOT NULL,
  `id_bobot_kriteria` varchar(11) NOT NULL,
  `poin_penilaian` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kriteria_tanggung_jawabs`
--

INSERT INTO `kriteria_tanggung_jawabs` (`id`, `id_kriteria_tanggung_jawab`, `id_karyawan`, `id_bobot_kriteria`, `poin_penilaian`) VALUES
(1, 'KTJ0001', 'Kr0001', 'BK0001', 88),
(4, 'KTJ0002', 'Kr0002', 'BK0001', 100);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `penilaians`
--

CREATE TABLE `penilaians` (
  `id` int(11) NOT NULL,
  `id_penilaian` varchar(11) NOT NULL,
  `id_karyawan` varchar(11) DEFAULT NULL,
  `id_kriteria_tanggung_jawab` varchar(11) DEFAULT NULL,
  `id_kriteria_disiplin` varchar(11) DEFAULT NULL,
  `id_kriteria_loyalitas` varchar(11) DEFAULT NULL,
  `id_kriteria_keahlian` varchar(11) DEFAULT NULL,
  `id_kriteria_kerja_sama` varchar(11) DEFAULT NULL,
  `id_kriteria_pengetahuan` varchar(11) DEFAULT NULL,
  `normalisasi_tanggung_jawab` float DEFAULT NULL,
  `normalisasi_disiplin` float DEFAULT NULL,
  `normalisasi_loyalitas` float DEFAULT NULL,
  `normalisasi_keahlian` float DEFAULT NULL,
  `normalisasi_kerja_sama` float DEFAULT NULL,
  `normalisasi_pengetahuan` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `penilaians`
--

INSERT INTO `penilaians` (`id`, `id_penilaian`, `id_karyawan`, `id_kriteria_tanggung_jawab`, `id_kriteria_disiplin`, `id_kriteria_loyalitas`, `id_kriteria_keahlian`, `id_kriteria_kerja_sama`, `id_kriteria_pengetahuan`, `normalisasi_tanggung_jawab`, `normalisasi_disiplin`, `normalisasi_loyalitas`, `normalisasi_keahlian`, `normalisasi_kerja_sama`, `normalisasi_pengetahuan`) VALUES
(1, 'Pn0001', 'Kr0001', 'KTJ0001', 'KD0001', 'KL0001', 'KK0001', 'KKS0001', 'KP0001', 22, 18, 17.6, 13.2, 10, 8),
(8, 'Pn0002', 'Kr0002', 'KTJ0002', 'KD0002', 'KL0002', 'KK0002', 'KKS0002', 'KP0002', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `peringkats`
--

CREATE TABLE `peringkats` (
  `id` int(11) NOT NULL,
  `id_peringkat` varchar(11) NOT NULL,
  `id_karyawan` varchar(11) NOT NULL,
  `id_penilaian` varchar(11) NOT NULL,
  `nilai` float NOT NULL,
  `peringkat` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `peringkats`
--

INSERT INTO `peringkats` (`id`, `id_peringkat`, `id_karyawan`, `id_penilaian`, `nilai`, `peringkat`) VALUES
(1, 'Pr0001', 'Kr0001', 'Pn0001', 0.888, 2),
(2, 'Pr0002', 'Kr0002', 'Pn0002', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `id_admin` varchar(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `id_admin`, `email`, `password`, `username`) VALUES
(1, 'Ad0001', 'erika@gmail.com', '$2y$10$.O5w4VCa0npzZJXzeYIxl.LqLA8zXv.7F3XH3ZrZ4JnChgXF89VMe', 'Erika'),
(2, 'Ad0002', 'melati@gmail.com', '$2y$10$nhcCdsqDLrmbROUBpd3MwOuyPR94zTuRusdFVfk21CbS.665j10Fq', 'Melati'),
(3, 'Ad0003', 'leonardo@gmail.com', '$2y$10$CAItYoJOCNS8uXNsksiB4ODsFW0CHfmWCZAI0DRe3PL4U3QMVItty', 'Leonardo'),
(4, 'Ad0004', 'ariham@gmail.com', '$2y$10$4lgN2YYzab6Hx2LKCbXqsuWr8i9t2I3q4EqgzEypTkz2sjYUNotq2', 'Ari'),
(20, 'Ad0005', 'bryan@gmail.com', '$2y$10$p9LVadHYvzqJ80QQdWRrx.OkQMJcFYPvCp.hPkJiZqY513U12Hgma', 'Bryan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id_admin`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `bobot_kriterias`
--
ALTER TABLE `bobot_kriterias`
  ADD PRIMARY KEY (`id_bobot_kriteria`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `karyawans`
--
ALTER TABLE `karyawans`
  ADD PRIMARY KEY (`id_karyawan`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `kriteria_disiplins`
--
ALTER TABLE `kriteria_disiplins`
  ADD PRIMARY KEY (`id_kriteria_disiplin`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `id_karyawan` (`id_karyawan`),
  ADD KEY `id_bobot_kriteria` (`id_bobot_kriteria`);

--
-- Indexes for table `kriteria_keahlians`
--
ALTER TABLE `kriteria_keahlians`
  ADD PRIMARY KEY (`id_kriteria_keahlian`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `id_bobot_kriteria` (`id_bobot_kriteria`),
  ADD KEY `id_karyawan` (`id_karyawan`);

--
-- Indexes for table `kriteria_kerja_samas`
--
ALTER TABLE `kriteria_kerja_samas`
  ADD PRIMARY KEY (`id_kriteria_kerja_sama`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `id_karyawan` (`id_karyawan`),
  ADD KEY `id_bobot_kriteria` (`id_bobot_kriteria`);

--
-- Indexes for table `kriteria_loyalitas`
--
ALTER TABLE `kriteria_loyalitas`
  ADD PRIMARY KEY (`id_kriteria_loyalitas`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `id_karyawan` (`id_karyawan`),
  ADD KEY `id_bobot_kriteria` (`id_bobot_kriteria`);

--
-- Indexes for table `kriteria_pengetahuans`
--
ALTER TABLE `kriteria_pengetahuans`
  ADD PRIMARY KEY (`id_kriteria_pengetahuan`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `id_karyawan` (`id_karyawan`),
  ADD KEY `id_bobot_kriteria` (`id_bobot_kriteria`);

--
-- Indexes for table `kriteria_tanggung_jawabs`
--
ALTER TABLE `kriteria_tanggung_jawabs`
  ADD PRIMARY KEY (`id_kriteria_tanggung_jawab`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `id_karyawan` (`id_karyawan`),
  ADD KEY `id_bobot_kriteria` (`id_bobot_kriteria`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penilaians`
--
ALTER TABLE `penilaians`
  ADD PRIMARY KEY (`id_penilaian`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `id_karyawan` (`id_karyawan`),
  ADD KEY `id_kriteria_tanggung_jawab` (`id_kriteria_tanggung_jawab`),
  ADD KEY `id_kriteria_disiplin` (`id_kriteria_disiplin`),
  ADD KEY `id_kriteria_loyalitas` (`id_kriteria_loyalitas`),
  ADD KEY `id_kriteria_keahlian` (`id_kriteria_keahlian`),
  ADD KEY `id_kriteria_pengetahuan` (`id_kriteria_pengetahuan`),
  ADD KEY `id_kriteria_kerja_sama` (`id_kriteria_kerja_sama`);

--
-- Indexes for table `peringkats`
--
ALTER TABLE `peringkats`
  ADD PRIMARY KEY (`id_peringkat`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `id_karyawan` (`id_karyawan`),
  ADD KEY `id_penilaian` (`id_penilaian`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_admin` (`id_admin`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `bobot_kriterias`
--
ALTER TABLE `bobot_kriterias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `karyawans`
--
ALTER TABLE `karyawans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `kriteria_disiplins`
--
ALTER TABLE `kriteria_disiplins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `kriteria_keahlians`
--
ALTER TABLE `kriteria_keahlians`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kriteria_kerja_samas`
--
ALTER TABLE `kriteria_kerja_samas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kriteria_loyalitas`
--
ALTER TABLE `kriteria_loyalitas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kriteria_pengetahuans`
--
ALTER TABLE `kriteria_pengetahuans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kriteria_tanggung_jawabs`
--
ALTER TABLE `kriteria_tanggung_jawabs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `penilaians`
--
ALTER TABLE `penilaians`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `peringkats`
--
ALTER TABLE `peringkats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kriteria_disiplins`
--
ALTER TABLE `kriteria_disiplins`
  ADD CONSTRAINT `kriteria_disiplins_ibfk_1` FOREIGN KEY (`id_karyawan`) REFERENCES `karyawans` (`id_karyawan`),
  ADD CONSTRAINT `kriteria_disiplins_ibfk_2` FOREIGN KEY (`id_bobot_kriteria`) REFERENCES `bobot_kriterias` (`id_bobot_kriteria`);

--
-- Constraints for table `kriteria_keahlians`
--
ALTER TABLE `kriteria_keahlians`
  ADD CONSTRAINT `kriteria_keahlians_ibfk_1` FOREIGN KEY (`id_karyawan`) REFERENCES `karyawans` (`id_karyawan`),
  ADD CONSTRAINT `kriteria_keahlians_ibfk_2` FOREIGN KEY (`id_bobot_kriteria`) REFERENCES `bobot_kriterias` (`id_bobot_kriteria`);

--
-- Constraints for table `kriteria_kerja_samas`
--
ALTER TABLE `kriteria_kerja_samas`
  ADD CONSTRAINT `kriteria_kerja_samas_ibfk_1` FOREIGN KEY (`id_bobot_kriteria`) REFERENCES `bobot_kriterias` (`id_bobot_kriteria`),
  ADD CONSTRAINT `kriteria_kerja_samas_ibfk_2` FOREIGN KEY (`id_karyawan`) REFERENCES `karyawans` (`id_karyawan`);

--
-- Constraints for table `kriteria_loyalitas`
--
ALTER TABLE `kriteria_loyalitas`
  ADD CONSTRAINT `kriteria_loyalitas_ibfk_1` FOREIGN KEY (`id_bobot_kriteria`) REFERENCES `bobot_kriterias` (`id_bobot_kriteria`),
  ADD CONSTRAINT `kriteria_loyalitas_ibfk_2` FOREIGN KEY (`id_karyawan`) REFERENCES `karyawans` (`id_karyawan`);

--
-- Constraints for table `kriteria_pengetahuans`
--
ALTER TABLE `kriteria_pengetahuans`
  ADD CONSTRAINT `kriteria_pengetahuans_ibfk_2` FOREIGN KEY (`id_bobot_kriteria`) REFERENCES `bobot_kriterias` (`id_bobot_kriteria`),
  ADD CONSTRAINT `kriteria_pengetahuans_ibfk_3` FOREIGN KEY (`id_karyawan`) REFERENCES `karyawans` (`id_karyawan`);

--
-- Constraints for table `kriteria_tanggung_jawabs`
--
ALTER TABLE `kriteria_tanggung_jawabs`
  ADD CONSTRAINT `kriteria_tanggung_jawabs_ibfk_1` FOREIGN KEY (`id_bobot_kriteria`) REFERENCES `bobot_kriterias` (`id_bobot_kriteria`),
  ADD CONSTRAINT `kriteria_tanggung_jawabs_ibfk_2` FOREIGN KEY (`id_karyawan`) REFERENCES `karyawans` (`id_karyawan`);

--
-- Constraints for table `penilaians`
--
ALTER TABLE `penilaians`
  ADD CONSTRAINT `penilaians_ibfk_1` FOREIGN KEY (`id_kriteria_tanggung_jawab`) REFERENCES `kriteria_tanggung_jawabs` (`id_kriteria_tanggung_jawab`),
  ADD CONSTRAINT `penilaians_ibfk_3` FOREIGN KEY (`id_kriteria_loyalitas`) REFERENCES `kriteria_loyalitas` (`id_kriteria_loyalitas`),
  ADD CONSTRAINT `penilaians_ibfk_5` FOREIGN KEY (`id_kriteria_kerja_sama`) REFERENCES `kriteria_kerja_samas` (`id_kriteria_kerja_sama`),
  ADD CONSTRAINT `penilaians_ibfk_6` FOREIGN KEY (`id_kriteria_disiplin`) REFERENCES `kriteria_disiplins` (`id_kriteria_disiplin`),
  ADD CONSTRAINT `penilaians_ibfk_7` FOREIGN KEY (`id_kriteria_keahlian`) REFERENCES `kriteria_keahlians` (`id_kriteria_keahlian`),
  ADD CONSTRAINT `penilaians_ibfk_8` FOREIGN KEY (`id_kriteria_pengetahuan`) REFERENCES `kriteria_pengetahuans` (`id_kriteria_pengetahuan`),
  ADD CONSTRAINT `penilaians_ibfk_9` FOREIGN KEY (`id_karyawan`) REFERENCES `karyawans` (`id_karyawan`);

--
-- Constraints for table `peringkats`
--
ALTER TABLE `peringkats`
  ADD CONSTRAINT `peringkats_ibfk_2` FOREIGN KEY (`id_karyawan`) REFERENCES `karyawans` (`id_karyawan`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `admins` (`id_admin`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
