-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 18 Jun 2020 pada 00.59
-- Versi Server: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ppic2`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_produk`
--

CREATE TABLE `data_produk` (
  `id_data` int(11) NOT NULL,
  `vendor` varchar(50) NOT NULL,
  `rel_id` int(11) NOT NULL,
  `kode_material` varchar(50) NOT NULL,
  `material` varchar(100) NOT NULL,
  `10_5C` int(11) NOT NULL,
  `11C` int(11) NOT NULL,
  `11_5C` int(11) NOT NULL,
  `12C` int(11) NOT NULL,
  `12_5C` int(11) NOT NULL,
  `13C` int(11) NOT NULL,
  `13_5C` int(11) NOT NULL,
  `1Y` int(11) NOT NULL,
  `1_5Y` int(11) NOT NULL,
  `2Y` int(11) NOT NULL,
  `2_5Y` int(11) NOT NULL,
  `3Y` int(11) NOT NULL,
  `total_produk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_produk`
--

INSERT INTO `data_produk` (`id_data`, `vendor`, `rel_id`, `kode_material`, `material`, `10_5C`, `11C`, `11_5C`, `12C`, `12_5C`, `13C`, `13_5C`, `1Y`, `1_5Y`, `2Y`, `2_5Y`, `3Y`, `total_produk`) VALUES
(1, 'JX', 1, 'AA7775-103', 'WMNS NIKE CITY TRAINER 2', 1110, 2404, 1572, 2704, 1530, 2838, 1548, 3023, 1950, 2783, 2520, 2475, 26457),
(22, 'JX', 1, 'AA7775-103', 'WMNS NIKE CITY TRAINER 2', 332, 234, 2221, 234, 543, 245, 654, 111, 232, 349, 333, 222, 5710),
(23, 'JX', 2, 'AA7775-103', 'WMNS NIKE CITY TRAINER 2', 4445, 33324, 1123, 3321, 2567, 43, 2334, 432, 332, 1123, 111, 222, 49377),
(24, 'JX', 3, 'AA7775-103', 'WMNS NIKE CITY TRAINER 2', 345, 667, 876, 999, 678, 643, 456, 8875, 789, 775, 346, 863, 16312),
(25, 'JX', 16, 'AA7775-103', 'WMNS NIKE CITY TRAINER 2', 6676, 5665, 7782, 6675, 3341, 2345, 756, 5412, 6456, 756, 4343, 997, 51204),
(26, 'JX', 2, 'AA7775-103', '111', 111, 111, 122, 222, 333, 111, 111, 11, 111, 111, 111, 111, 1576);

-- --------------------------------------------------------

--
-- Struktur dari tabel `g_total_produk`
--

CREATE TABLE `g_total_produk` (
  `id_G_total` int(11) NOT NULL,
  `rel_id` int(11) NOT NULL,
  `10_5C` int(11) NOT NULL,
  `11C` int(11) NOT NULL,
  `11_5C` int(11) NOT NULL,
  `12C` int(11) NOT NULL,
  `12_5C` int(11) NOT NULL,
  `13C` int(11) NOT NULL,
  `13_5C` int(11) NOT NULL,
  `1Y` int(11) NOT NULL,
  `1_5Y` int(11) NOT NULL,
  `2Y` int(11) NOT NULL,
  `2_5Y` int(11) NOT NULL,
  `3Y` int(11) NOT NULL,
  `result` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `g_total_produk`
--

INSERT INTO `g_total_produk` (`id_G_total`, `rel_id`, `10_5C`, `11C`, `11_5C`, `12C`, `12_5C`, `13C`, `13_5C`, `1Y`, `1_5Y`, `2Y`, `2_5Y`, `3Y`, `result`) VALUES
(1, 1, 1442, 2638, 3793, 2938, 2073, 3083, 2202, 3134, 2182, 3132, 2853, 2697, 32167),
(2, 2, 4556, 33435, 1245, 3543, 2900, 154, 2445, 443, 443, 1234, 222, 333, 50953),
(3, 3, 345, 667, 876, 999, 678, 643, 456, 8875, 789, 775, 346, 863, 16312),
(4, 16, 6676, 5665, 7782, 6675, 3341, 2345, 756, 5412, 6456, 756, 4343, 997, 51204),
(5, 17, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jumlah_total_stok_mold`
--

CREATE TABLE `jumlah_total_stok_mold` (
  `id_jumlah_stok` int(11) NOT NULL,
  `10_5C` int(11) NOT NULL,
  `11C` int(11) NOT NULL,
  `11_5C` int(11) NOT NULL,
  `12C` int(11) NOT NULL,
  `12_5C` int(11) NOT NULL,
  `13C` int(11) NOT NULL,
  `13_5C` int(11) NOT NULL,
  `1Y` int(11) NOT NULL,
  `1_5Y` int(11) NOT NULL,
  `2Y` int(11) NOT NULL,
  `2_5Y` int(11) NOT NULL,
  `3Y` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jumlah_total_stok_mold`
--

INSERT INTO `jumlah_total_stok_mold` (`id_jumlah_stok`, `10_5C`, `11C`, `11_5C`, `12C`, `12_5C`, `13C`, `13_5C`, `1Y`, `1_5Y`, `2Y`, `2_5Y`, `3Y`, `total`) VALUES
(1, 3, 3, 3, 3, 2, 3, 3, 3, 3, 3, 5, 4, 38);

-- --------------------------------------------------------

--
-- Struktur dari tabel `os_mold`
--

CREATE TABLE `os_mold` (
  `id_osMold` int(11) NOT NULL,
  `total_osMold` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `os_mold`
--

INSERT INTO `os_mold` (`id_osMold`, `total_osMold`) VALUES
(1, 218);

-- --------------------------------------------------------

--
-- Struktur dari tabel `rls`
--

CREATE TABLE `rls` (
  `id` int(11) NOT NULL,
  `rel` varchar(50) NOT NULL,
  `total_rel` double NOT NULL,
  `rls_10_5C` double NOT NULL,
  `rls_11C` double NOT NULL,
  `rls_11_5C` double NOT NULL,
  `rls_12C` double NOT NULL,
  `rls_12_5C` double NOT NULL,
  `rls_13C` double NOT NULL,
  `rls_13_5C` double NOT NULL,
  `rls_1Y` double NOT NULL,
  `rls_1_5Y` double NOT NULL,
  `rls_2Y` double NOT NULL,
  `rls_2_5Y` double NOT NULL,
  `rls_3Y` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `rls`
--

INSERT INTO `rls` (`id`, `rel`, `total_rel`, `rls_10_5C`, `rls_11C`, `rls_11_5C`, `rls_12C`, `rls_12_5C`, `rls_13C`, `rls_13_5C`, `rls_1Y`, `rls_1_5Y`, `rls_2Y`, `rls_2_5Y`, `rls_3Y`) VALUES
(1, '8/25', 5.5, 2.2, 4, 5.8, 4.5, 4.8, 4.7, 3.4, 4.8, 3.3, 4.8, 2.6, 3.1),
(2, '9/1', 5.5, 7, 51.1, 1.9, 5.4, 6.7, 0.2, 3.7, 0.7, 0.7, 1.9, 0.2, 0.4),
(3, '9/8', 5.5, 0.5, 1, 1.3, 1.5, 1.6, 1, 0.7, 13.6, 1.2, 1.2, 0.3, 1),
(16, '9/15', 5.5, 10.2, 8.7, 11.9, 10.2, 7.7, 3.6, 1.2, 8.3, 9.9, 1.2, 4, 1.1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `stok_mold`
--

CREATE TABLE `stok_mold` (
  `id_stok` int(11) NOT NULL,
  `nama_stok` varchar(50) NOT NULL,
  `S_10_5C` int(11) NOT NULL,
  `S_11C` int(11) NOT NULL,
  `S_11_5C` int(11) NOT NULL,
  `S_12C` int(11) NOT NULL,
  `S_12_5C` int(11) NOT NULL,
  `S_13C` int(11) NOT NULL,
  `S_13_5C` int(11) NOT NULL,
  `S_1Y` int(11) NOT NULL,
  `S_1_5Y` int(11) NOT NULL,
  `S_2Y` int(11) NOT NULL,
  `S_2_5Y` int(11) NOT NULL,
  `S_3Y` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `stok_mold`
--

INSERT INTO `stok_mold` (`id_stok`, `nama_stok`, `S_10_5C`, `S_11C`, `S_11_5C`, `S_12C`, `S_12_5C`, `S_13C`, `S_13_5C`, `S_1Y`, `S_1_5Y`, `S_2Y`, `S_2_5Y`, `S_3Y`, `total`) VALUES
(1, 'Stock  Mold A Set (OK) edit', 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 24),
(2, 'Open ke 1 (OK)', 0, 0, 0, 0, 0, 1, 0, 1, 1, 0, 1, 1, 5),
(4, 'Open ke 3 (OK)', 0, 1, 0, 1, 0, 0, 0, 0, 0, 0, 1, 1, 4),
(5, 'Open ke 4 (OK)			', 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 2),
(6, 'Open ke 5 (OK)', 0, 0, 1, 0, 0, 0, 1, 0, 0, 0, 1, 0, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `total_jumlah_rls`
--

CREATE TABLE `total_jumlah_rls` (
  `id_total_jumlah_rls` int(11) NOT NULL,
  `T_10_5C` double NOT NULL,
  `T_11C` double NOT NULL,
  `T_11_5C` double NOT NULL,
  `T_12C` double NOT NULL,
  `T_12_5C` double NOT NULL,
  `T_13C` double NOT NULL,
  `T_13_5C` double NOT NULL,
  `T_1Y` double NOT NULL,
  `T_1_5Y` double NOT NULL,
  `T_2Y` double NOT NULL,
  `T_2_5Y` double NOT NULL,
  `T_3Y` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `total_jumlah_rls`
--

INSERT INTO `total_jumlah_rls` (`id_total_jumlah_rls`, `T_10_5C`, `T_11C`, `T_11_5C`, `T_12C`, `T_12_5C`, `T_13C`, `T_13_5C`, `T_1Y`, `T_1_5Y`, `T_2Y`, `T_2_5Y`, `T_3Y`) VALUES
(1, 29.6, 64.7, 20.7, 21.3, 20, 9.4, 8.9, 27.4, 14.9, 8.9, 7, 5.5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_produk`
--
ALTER TABLE `data_produk`
  ADD PRIMARY KEY (`id_data`);

--
-- Indexes for table `g_total_produk`
--
ALTER TABLE `g_total_produk`
  ADD PRIMARY KEY (`id_G_total`);

--
-- Indexes for table `jumlah_total_stok_mold`
--
ALTER TABLE `jumlah_total_stok_mold`
  ADD PRIMARY KEY (`id_jumlah_stok`);

--
-- Indexes for table `os_mold`
--
ALTER TABLE `os_mold`
  ADD PRIMARY KEY (`id_osMold`);

--
-- Indexes for table `rls`
--
ALTER TABLE `rls`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stok_mold`
--
ALTER TABLE `stok_mold`
  ADD PRIMARY KEY (`id_stok`);

--
-- Indexes for table `total_jumlah_rls`
--
ALTER TABLE `total_jumlah_rls`
  ADD PRIMARY KEY (`id_total_jumlah_rls`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_produk`
--
ALTER TABLE `data_produk`
  MODIFY `id_data` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `g_total_produk`
--
ALTER TABLE `g_total_produk`
  MODIFY `id_G_total` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `jumlah_total_stok_mold`
--
ALTER TABLE `jumlah_total_stok_mold`
  MODIFY `id_jumlah_stok` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `os_mold`
--
ALTER TABLE `os_mold`
  MODIFY `id_osMold` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `rls`
--
ALTER TABLE `rls`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `stok_mold`
--
ALTER TABLE `stok_mold`
  MODIFY `id_stok` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `total_jumlah_rls`
--
ALTER TABLE `total_jumlah_rls`
  MODIFY `id_total_jumlah_rls` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
