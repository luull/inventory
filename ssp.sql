-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 02 Jul 2020 pada 14.53
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.3.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ssp`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `id_barang` varchar(21) NOT NULL,
  `nama_barang` varchar(51) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `jml_masuk` int(21) NOT NULL,
  `id_suplier` varchar(21) NOT NULL,
  `kondisi` varchar(21) NOT NULL,
  `lokasi` varchar(51) NOT NULL,
  `sumber_dana` varchar(31) NOT NULL,
  `spesifikasi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id_barang`, `nama_barang`, `tgl_masuk`, `jml_masuk`, `id_suplier`, `kondisi`, `lokasi`, `sumber_dana`, `spesifikasi`) VALUES
('B001', 'Bola Voli', '2019-02-28', 57, '1', 'Baru', 'Cibinong', 'Eks.', 'Bola voli berjumlah 45'),
('B002', 'Buku Ujian Nasional', '2019-02-28', 100, '2', 'Baru', 'Jonggol', 'Eks.', 'Buku Teropong Untuk Ujian Nasional Kelas 12 SMK Fatahillah'),
('B003', 'Basket', '2019-04-14', 5, '1', 'Baru', 'Gudang', 'Eks', 'Bagus'),
('B004', 'Proyektor', '2019-02-28', 43, '2', 'Baru', 'Cileungsi', 'Eks.', 'Proyektor Fuji A98DB'),
('B005', 'Laptop HP 14 AU', '2019-02-28', 21, '2', 'Baru', 'Cibubur', 'Eks.', 'Laptop HP 14 AU. Fasilitas ini diperuntukan untuk kegiatan pembelajaran siswa'),
('B007', 'Novel Habis Terang Terbitlah Gelap', '2019-02-28', 23, '1', 'Baru', 'Ciukuy', 'Eks.', 'Novel ciptaan AR Kartono untuk perpustakaan'),
('B008', 'Router', '2019-02-28', 24, '2', 'Baru', 'Bogor', 'Eks', 'Router TP-Link untuk keperluan pembelajaran jurusan TKJ'),
('B009', 'Buku Produktif RPL', '2019-02-28', 18, '2', 'Baru', 'Jonggol', 'Eks', 'Buku untuk pelajaran produktif RPL'),
('B010', 'Mouse USB Logitech', '2019-02-28', 26, '1', 'Baru', 'Bogor', 'Eks.', 'Mouse untuk fasilitas siswa'),
('B019', 'Bola Futsal', '2019-04-15', 33, '1', 'Baru', 'Gudang', 'Eks.', 'Bola Futsal Berjumlah 33 dengan suplier PT. Sumber Alfaria Trijaya, Tbk'),
('Z001', '123', '2019-02-28', 123, '1', '123', '123', '123', '123123123 123'),
('Z002', '123', '2019-02-28', 123, '2', '123', '123', '123', '123123'),
('Z003', '123', '2019-02-28', 123, '2', '123', '123', '123', '123123'),
('Z004', '123', '2019-02-28', 123, '1', '123', '123', '123', '123123'),
('Z005', '123', '2019-02-28', 123, '1', '123', '123', '123', '123123123123'),
('Z006', '123', '2019-02-28', 123, '2', '123', '123', '123', '123'),
('Z007', '123', '2019-02-28', 123, '2', '123', '123', '123', '123'),
('Z008', '123', '2019-02-28', 123, '3', '123', '123', '123', '123'),
('Z009', '123', '2019-02-28', 123, '1', '123', '123', '123', '123'),
('Z010', '123', '2019-02-28', 123, '2', '123', '123', '123', '123');

--
-- Trigger `barang`
--
DELIMITER $$
CREATE TRIGGER `insert_barang_to_stok` AFTER INSERT ON `barang` FOR EACH ROW BEGIN
INSERT INTO stok SET id_barang = new.id_barang, nama_barang = new.nama_barang, jml_masuk = new.jml_masuk, total_barang = new.jml_masuk;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pinjam_barang`
--

CREATE TABLE `pinjam_barang` (
  `id_pinjam` varchar(21) NOT NULL,
  `peminjam` varchar(51) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `id_barang` varchar(21) NOT NULL,
  `jml_barang` int(11) NOT NULL,
  `tgl_kembali` date NOT NULL,
  `kondisi` varchar(21) NOT NULL,
  `lokasi` varchar(51) NOT NULL,
  `status` varchar(21) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Trigger `pinjam_barang`
--
DELIMITER $$
CREATE TRIGGER `insert_pinjam_barang_to_stok` AFTER INSERT ON `pinjam_barang` FOR EACH ROW BEGIN
UPDATE stok SET jml_keluar = stok.jml_keluar + new.jml_barang, total_barang = stok.total_barang - new.jml_barang where stok.id_barang = new.id_barang;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `update_pinjam_barang_to_stok` BEFORE UPDATE ON `pinjam_barang` FOR EACH ROW BEGIN
UPDATE stok SET jml_keluar = jml_keluar - old.jml_barang, total_barang = stok.total_barang + old.jml_barang WHERE stok.id_barang = old.id_barang;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `stok`
--

CREATE TABLE `stok` (
  `id_barang` varchar(21) NOT NULL,
  `nama_barang` varchar(51) NOT NULL,
  `jml_masuk` int(11) NOT NULL,
  `jml_keluar` int(11) NOT NULL,
  `total_barang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `stok`
--

INSERT INTO `stok` (`id_barang`, `nama_barang`, `jml_masuk`, `jml_keluar`, `total_barang`) VALUES
('B001', 'Bola Voli', 57, 0, 57),
('B002', 'Buku Ujian Nasional', 100, 0, 100),
('B004', 'Proyektor', 43, 0, 43),
('B005', 'Laptop HP 14 AU', 21, 0, 21),
('B007', 'Novel Habis Terang Terbitlah Gelap', 23, 0, 23),
('B008', 'Router', 24, 0, 24),
('B009', 'Buku Produktif RPL', 18, 0, 18),
('B010', 'Mouse USB Logitech', 26, 0, 26),
('Z001', '123', 123, 0, 123),
('Z002', '123', 123, 0, 123),
('Z003', '123', 123, 0, 123),
('Z004', '123', 123, 0, 123),
('Z005', '123', 123, 0, 123),
('Z006', '123', 123, 0, 123),
('Z007', '123', 123, 0, 123),
('Z008', '123', 123, 0, 123),
('Z009', '123', 123, 0, 123),
('Z010', '123', 123, 0, 123),
('B003', 'Basket', 5, 0, 5),
('B019', 'Bola Futsal', 33, 0, 33);

--
-- Trigger `stok`
--
DELIMITER $$
CREATE TRIGGER `update_stok_ke_barang` BEFORE UPDATE ON `stok` FOR EACH ROW BEGIN
UPDATE barang SET barang.jml_masuk = new.jml_masuk where barang.id_barang = new.id_barang;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `suplier`
--

CREATE TABLE `suplier` (
  `id_suplier` varchar(21) NOT NULL,
  `nama_suplier` varchar(51) NOT NULL,
  `alamat_suplier` text NOT NULL,
  `telp_suplier` varchar(21) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `suplier`
--

INSERT INTO `suplier` (`id_suplier`, `nama_suplier`, `alamat_suplier`, `telp_suplier`) VALUES
('1', 'PT. Sumber Alfaria Trijaya, Tbk', 'Jln. alfa KM.43', '+62 81212897389'),
('2', 'CV. Airlangga Sentosa Jaya', 'Jln Kampung Durian Runtuh', '+628181818'),
('3', 'PT Suplier Indonesia', 'Ciukuy KM.91', '+628123123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(51) NOT NULL,
  `username` varchar(31) NOT NULL,
  `password` text NOT NULL,
  `level` varchar(21) NOT NULL,
  `status` varchar(21) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama`, `username`, `password`, `level`, `status`) VALUES
(2, 'Audeta Sandy Bima Satria', 'audeta35', '818cdc41eb59fe04453ad042d2c1e7ce', 'administrator', 'aktif'),
(3, 'asd', 'asd', '7815696ecbf1c96e6894b779456d330e', 'peminjam', 'blokir'),
(4, 'asdasd', 'asdasd', 'a8f5f167f44f4964e6c998dee827110c', 'manajemen', 'aktif'),
(5, 'administrator', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'administrator', 'aktif');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`),
  ADD KEY `id_suplier` (`id_suplier`);

--
-- Indeks untuk tabel `pinjam_barang`
--
ALTER TABLE `pinjam_barang`
  ADD PRIMARY KEY (`id_pinjam`),
  ADD KEY `no_act_pinjam_barang` (`id_barang`);

--
-- Indeks untuk tabel `stok`
--
ALTER TABLE `stok`
  ADD KEY `id_barang` (`id_barang`);

--
-- Indeks untuk tabel `suplier`
--
ALTER TABLE `suplier`
  ADD PRIMARY KEY (`id_suplier`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD CONSTRAINT `barang_ibfk_1` FOREIGN KEY (`id_suplier`) REFERENCES `suplier` (`id_suplier`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pinjam_barang`
--
ALTER TABLE `pinjam_barang`
  ADD CONSTRAINT `no_act_pinjam_barang` FOREIGN KEY (`id_barang`) REFERENCES `stok` (`id_barang`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `stok`
--
ALTER TABLE `stok`
  ADD CONSTRAINT `Constraint_cascade_stok` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id_barang`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
