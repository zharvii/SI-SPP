-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Jun 2020 pada 15.18
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.1.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lsp`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(11) NOT NULL,
  `nama_kelas` varchar(10) NOT NULL,
  `jurusan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `nama_kelas`, `jurusan`) VALUES
(1, 'XII RPL 1', 'RPL'),
(2, 'XII RPL 2', 'RPL'),
(3, 'XII RPL 3', 'RPL'),
(4, 'XII TPM 1', 'TPM'),
(5, 'XII TPM 2', 'TPM'),
(6, 'XII TPM 3', 'TPM'),
(7, 'XII TITL 1', 'TITL'),
(8, 'XII TITL 2', 'TITL'),
(9, 'XII TITL 3', 'TITL'),
(10, 'XII LAS 1', 'LAS'),
(11, 'XII LAS 2', 'LAS'),
(12, 'XII LAS 3', 'LAS');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` int(11) NOT NULL,
  `id_petugas` int(11) NOT NULL,
  `nis` varchar(10) NOT NULL,
  `tgl_bayar` date NOT NULL,
  `bulan_dibayar` varchar(20) NOT NULL,
  `tahun_dibayar` varchar(4) NOT NULL,
  `id_spp` int(11) NOT NULL,
  `jumlah_bayar` int(11) NOT NULL,
  `no_pembayaran` varchar(20) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pembayaran`
--

INSERT INTO `pembayaran` (`id_pembayaran`, `id_petugas`, `nis`, `tgl_bayar`, `bulan_dibayar`, `tahun_dibayar`, `id_spp`, `jumlah_bayar`, `no_pembayaran`, `status`) VALUES
(1, 1, '2020060008', '2020-06-28', 'Januari', '2021', 4, 250000, '202006280001', 'Lunas'),
(2, 1, '2020060008', '2020-06-28', 'Februari', '2021', 4, 250000, '202006280001', 'Lunas'),
(3, 1, '2020060008', '2020-06-28', 'Maret', '2021', 4, 250000, '202006280001', 'Lunas'),
(4, 1, '2020060008', '2020-06-28', 'April', '2020', 4, 250000, '202006280002', 'Lunas'),
(5, 1, '2020060008', '2020-06-28', 'Mei', '2020', 4, 250000, '202006280002', 'Lunas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(200) NOT NULL,
  `nama_petugas` varchar(35) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `username`, `password`, `nama_petugas`, `level`) VALUES
(1, 'agus', '$2a$08$rNmCU8f4rdq5vo.FtaX9fupc/YUoiGYxZvJOAH3KXEWtu4pqQ3OKW\r\n', 'Mas Agus', 'Admin'),
(2, 'pras', '$2a$08$rNmCU8f4rdq5vo.FtaX9fupc/YUoiGYxZvJOAH3KXEWtu4pqQ3OKW\r\n', 'Mas Pras', 'Petugas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `nis` char(10) NOT NULL,
  `nisn` char(11) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `alamat` text NOT NULL,
  `no_tlp` varchar(13) NOT NULL,
  `id_spp` int(11) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `pin` int(11) NOT NULL,
  `kompetensi` varchar(100) NOT NULL,
  `tahun_masuk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`nis`, `nisn`, `nama`, `id_kelas`, `alamat`, `no_tlp`, `id_spp`, `tgl_lahir`, `pin`, `kompetensi`, `tahun_masuk`) VALUES
('2020060001', '0083232327', 'Rio Susanto', 1, 'JL.Panjang No.30', '085212121218', 4, '2014-11-18', 181114, 'RPL', 2017),
('2020060002', '0083232322', 'Budi Sudarso', 4, 'JL.Hidupmu No.8', '085212121435', 4, '2014-01-19', 140119, 'TPM', 2018),
('2020060003', '0083232989', 'Ferdinand ', 10, 'JL.Hudupmu No.7', '085212121889', 4, '2014-11-09', 91114, 'LAS', 2018),
('2020060004', '0083232981', 'Budi Budiman', 7, 'JL.Kenangan No.1', '085212121423', 4, '2015-01-09', 150109, 'TITL', 2017),
('2020060005', '2323323423', 'Budi doremi', 5, 'Jl.Panjang kenangan', '087253726379', 4, '2020-06-09', 90620, 'TPM', 2020),
('2020060006', '0083232329', 'Burhan Samsul', 2, 'JL.Mantap No.1', '085212121213', 4, '2020-06-23', 230620, 'RPL', 2020),
('2020060007', '0083232324', 'Syahrul Gunawan', 1, 'JL.Kegelapan No.4', '085212121219', 4, '2020-06-15', 150620, 'RPL', 2020),
('2020060008', '0012182188', 'Batman Bin Robin', 10, 'JL.Gotham No.13', '0121929199999', 4, '2020-06-21', 210620, 'LAS', 2020);

-- --------------------------------------------------------

--
-- Struktur dari tabel `spp`
--

CREATE TABLE `spp` (
  `id_spp` int(11) NOT NULL,
  `tahun` int(11) NOT NULL,
  `nominal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `spp`
--

INSERT INTO `spp` (`id_spp`, `tahun`, `nominal`) VALUES
(1, 2016, 190000),
(2, 2017, 200000),
(3, 2018, 220000),
(4, 2019, 250000),
(5, 2020, 300000);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `vw_hsitori`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `vw_hsitori` (
`tgl_bayar` date
,`no_pembayaran` varchar(20)
,`nis` varchar(10)
,`nama` varchar(35)
,`total` decimal(32,0)
,`nama_petugas` varchar(35)
);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `vw_pembayaran`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `vw_pembayaran` (
`id_pembayaran` int(11)
,`id_petugas` int(11)
,`nis` varchar(10)
,`tgl_bayar` date
,`bulan_dibayar` varchar(20)
,`tahun_dibayar` varchar(4)
,`id_spp` int(11)
,`jumlah_bayar` int(11)
,`no_pembayaran` varchar(20)
,`status` varchar(50)
,`nama_petugas` varchar(35)
,`nama` varchar(35)
,`kompetensi` varchar(100)
,`id_kelas` int(11)
,`tahun` int(11)
,`nominal` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `vw_siswa`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `vw_siswa` (
`nis` char(10)
,`nisn` char(11)
,`nama` varchar(35)
,`id_kelas` int(11)
,`alamat` text
,`no_tlp` varchar(13)
,`id_spp` int(11)
,`tgl_lahir` date
,`pin` int(11)
,`kompetensi` varchar(100)
,`tahun_masuk` int(11)
,`nama_kelas` varchar(10)
,`jurusan` varchar(50)
,`tahun` int(11)
,`nominal` int(11)
);

-- --------------------------------------------------------

--
-- Struktur untuk view `vw_hsitori`
--
DROP TABLE IF EXISTS `vw_hsitori`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_hsitori`  AS  select `pembayaran`.`tgl_bayar` AS `tgl_bayar`,`pembayaran`.`no_pembayaran` AS `no_pembayaran`,`pembayaran`.`nis` AS `nis`,`siswa`.`nama` AS `nama`,sum(`pembayaran`.`jumlah_bayar`) AS `total`,`petugas`.`nama_petugas` AS `nama_petugas` from ((`pembayaran` join `siswa` on((`pembayaran`.`nis` = `siswa`.`nis`))) join `petugas` on((`pembayaran`.`id_petugas` = `petugas`.`id_petugas`))) where (`pembayaran`.`status` = 'Lunas') group by `pembayaran`.`no_pembayaran` ;

-- --------------------------------------------------------

--
-- Struktur untuk view `vw_pembayaran`
--
DROP TABLE IF EXISTS `vw_pembayaran`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_pembayaran`  AS  select `pembayaran`.`id_pembayaran` AS `id_pembayaran`,`pembayaran`.`id_petugas` AS `id_petugas`,`pembayaran`.`nis` AS `nis`,`pembayaran`.`tgl_bayar` AS `tgl_bayar`,`pembayaran`.`bulan_dibayar` AS `bulan_dibayar`,`pembayaran`.`tahun_dibayar` AS `tahun_dibayar`,`pembayaran`.`id_spp` AS `id_spp`,`pembayaran`.`jumlah_bayar` AS `jumlah_bayar`,`pembayaran`.`no_pembayaran` AS `no_pembayaran`,`pembayaran`.`status` AS `status`,`petugas`.`nama_petugas` AS `nama_petugas`,`siswa`.`nama` AS `nama`,`siswa`.`kompetensi` AS `kompetensi`,`siswa`.`id_kelas` AS `id_kelas`,`spp`.`tahun` AS `tahun`,`spp`.`nominal` AS `nominal` from (((`pembayaran` join `petugas` on((`pembayaran`.`id_petugas` = `petugas`.`id_petugas`))) join `siswa` on((`pembayaran`.`nis` = `siswa`.`nis`))) join `spp` on((`pembayaran`.`id_spp` = `spp`.`id_spp`))) ;

-- --------------------------------------------------------

--
-- Struktur untuk view `vw_siswa`
--
DROP TABLE IF EXISTS `vw_siswa`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_siswa`  AS  select `siswa`.`nis` AS `nis`,`siswa`.`nisn` AS `nisn`,`siswa`.`nama` AS `nama`,`siswa`.`id_kelas` AS `id_kelas`,`siswa`.`alamat` AS `alamat`,`siswa`.`no_tlp` AS `no_tlp`,`siswa`.`id_spp` AS `id_spp`,`siswa`.`tgl_lahir` AS `tgl_lahir`,`siswa`.`pin` AS `pin`,`siswa`.`kompetensi` AS `kompetensi`,`siswa`.`tahun_masuk` AS `tahun_masuk`,`kelas`.`nama_kelas` AS `nama_kelas`,`kelas`.`jurusan` AS `jurusan`,`spp`.`tahun` AS `tahun`,`spp`.`nominal` AS `nominal` from ((`siswa` join `kelas` on((`siswa`.`id_kelas` = `kelas`.`id_kelas`))) join `spp` on((`siswa`.`id_spp` = `spp`.`id_spp`))) ;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indeks untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`),
  ADD KEY `id_petugas` (`id_petugas`,`nis`,`id_spp`),
  ADD KEY `nis` (`nis`),
  ADD KEY `id_spp` (`id_spp`);

--
-- Indeks untuk tabel `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`nis`),
  ADD KEY `id_kelas` (`id_kelas`,`id_spp`),
  ADD KEY `id_spp` (`id_spp`);

--
-- Indeks untuk tabel `spp`
--
ALTER TABLE `spp`
  ADD PRIMARY KEY (`id_spp`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id_petugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `spp`
--
ALTER TABLE `spp`
  MODIFY `id_spp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD CONSTRAINT `pembayaran_ibfk_1` FOREIGN KEY (`nis`) REFERENCES `siswa` (`nis`),
  ADD CONSTRAINT `pembayaran_ibfk_2` FOREIGN KEY (`id_petugas`) REFERENCES `petugas` (`id_petugas`),
  ADD CONSTRAINT `pembayaran_ibfk_3` FOREIGN KEY (`id_spp`) REFERENCES `spp` (`id_spp`);

--
-- Ketidakleluasaan untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD CONSTRAINT `siswa_ibfk_1` FOREIGN KEY (`id_spp`) REFERENCES `spp` (`id_spp`),
  ADD CONSTRAINT `siswa_ibfk_2` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
