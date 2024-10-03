-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 02, 2024 at 05:19 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pendaftaran_beasiswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `daftar`
--

CREATE TABLE `daftar` (
  `id` int(11) NOT NULL,
  `nama` varchar(55) NOT NULL,
  `email` varchar(55) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `semester` int(11) NOT NULL,
  `last_ipk` float NOT NULL,
  `beasiswa` varchar(55) NOT NULL,
  `syarat_berkas` varchar(55) NOT NULL,
  `status_ajuan` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `daftar`
--

INSERT INTO `daftar` (`id`, `nama`, `email`, `no_hp`, `semester`, `last_ipk`, `beasiswa`, `syarat_berkas`, `status_ajuan`) VALUES
(37, 'Rahma Setiani', 'rahmasetiani200@gmail.com', '08156893103', 8, 3.8, 'non-akademik', 'petunjuk pengsisian APL-02.pdf', 0),
(38, 'Dinda Meilani', 'dinda@gmail.com', '08156893103', 4, 3.3, 'akademik', '6427.pdf', 0),
(39, 'Jessica Emarapenta', 'jessicaemarapenta@gmail.com', '08156893103', 4, 3.3, 'hafiz-quran', 'contoh jawaban soal praktik.pdf', 0),
(40, 'Hizkiya Sitorus', 'hizkiya@gmail.com', '08156893103', 4, 3.3, 'akademik', 'William Stallings, Lawrie Brown - Computer Security_ Pr', 0),
(41, 'Kanza Syahda', 'kanza@gmail.com', '08156893103', 5, 3.4, 'hafiz-quran', 'Rahma Setiani - Tugas - Kegiatan Proyek - Manpro 2 - Pr', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nama` varchar(55) NOT NULL,
  `email` varchar(55) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `email`, `password`) VALUES
(20, 'Rahma Setiani', 'rahmasetiani200@gmail.com', '$2y$10$HgoJSBxwdQHmv1WszOVlV.DycKIlKQ7PjN.moPbeJsC/TWnJFTIZ.'),
(21, 'Dinda Meilani', 'dinda@gmail.com', '$2y$10$PwX5R7cisRdDj2vpbUeWKOBmsnkb7jO.X/YMHo3lsiscEvDhfLX/2'),
(22, 'Kanza Syahda', 'kanza@gmail.com', '$2y$10$zSgXQXN5w1vh8dVGgV9Gvugr25YaTKyFtcKR7YkkDA2XIpg7rLuBa'),
(23, 'Shaka Bayu', 'shaka@gmail.com', '$2y$10$2PFADU2FOcLyA/h0O7XQ6ervzwYjN.1S/MAu6xss7RID9EA2LXOE2'),
(24, 'Andi Marfias', 'andi@gmail.com', '$2y$10$uHoFwFDOHavrjwAq2TJ25eqjJNQO18KOdwKFv/YB4WWbqb9i9Ocn.'),
(25, 'Jessica Emarapenta', 'jessicaemarapenta@gmail.com', '$2y$10$bNcYwvY6yXut.GKGpIX5bOdWB4E6E4u1lqsePSg6C19vrR0xYOHuK'),
(26, 'Hizkiya Sitorus', 'hizkiya@gmail.com', '$2y$10$3sOCWOtgCKgyioCLHiXFM.0bHccsY8Ruc9qeNxOFU1I17C6UZreHi'),
(27, 'Nurhasanah', 'nurhasanah@gmail.com', '$2y$10$WzVNSExY46weIwvZ8a15aeI0MaCzpTf3XvoT0r/zpMDVgtPpCs/4e'),
(28, 'Fania Arisatiani', 'fania@gmail.com', '$2y$10$r6LlrKHu.gVWKXB7w1QzjOcYRybqvUTir2zGixB4vvZbFYN8kEoou'),
(29, 'Amelia Kharisma', 'amel@gmail.com', '$2y$10$tZOzyTrbeSveqNpEx5yQ/OikyiL5Vw/RPOYm9ZF/Qh3EVT2bfRji.'),
(30, 'Nanda Dewi', 'nanda@gmail.com', '$2y$10$Kcg8ASrptXp5STNM/hufx.duN9wMwT3GxglIOSV.FcNVqgxgnz.py');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daftar`
--
ALTER TABLE `daftar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daftar`
--
ALTER TABLE `daftar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
