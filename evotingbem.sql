-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 02 Jan 2021 pada 15.14
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `evotingbem`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`) VALUES
(15, 'admin', 'maspandiofficial@gmail.com', '$2y$10$dSz8xQ2NPyxCgxxqxUTojOz3axg4NIRknItIQb7W/dfA3Asg0gnyC');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kandidat`
--

CREATE TABLE `kandidat` (
  `id` int(11) NOT NULL,
  `no_urut` varchar(11) NOT NULL,
  `ketua` varchar(128) NOT NULL,
  `wakil` varchar(128) NOT NULL,
  `semester` varchar(25) NOT NULL,
  `visi` text NOT NULL,
  `misi` text NOT NULL,
  `proker` text NOT NULL,
  `periode` varchar(11) NOT NULL,
  `prestasi` text NOT NULL,
  `suara` int(4) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kandidat`
--

INSERT INTO `kandidat` (`id`, `no_urut`, `ketua`, `wakil`, `semester`, `visi`, `misi`, `proker`, `periode`, `prestasi`, `suara`, `gambar`) VALUES
(66, '01', 'Saka Dwi Zakimoko', 'Said Rais', 'VI / VI', 'Mewujudkan BEM FKM Undip sebagai lembaga yang sinergis, positif dan partisipatif sehingga mampu mengukir karya untuk Undip dan Indonesia', '1. Membangun sistem kerja BEM FKM yang solid, profesional, dan mandiri 2. Menjaga dan meningkatkan sinergisitas kemitraan dan kerjasama BEM dengan stakeholder baik di internal ataupun eksternal UKM STIKES 3. Meningkatkan pelayanan mahasiswa yang aspiratif, representatif, integratif dan solutif untuk mendorong peningkatan kreatifitas dan prestasi mahasiswa', '1. Speaking Box 2. Batik Day', '2020/2021', '1. sertifikat kemenkes \r\n2. menjuarai kepedulian kesehatan provinsi jambi', 15, 'male-1354358_1280.jpg'),
(67, '02', 'Devi Orlanda', 'Dwi Nona', 'VI / VI', 'Aksi Nyata dari BEM untuk Indonesia', ' 1. Membangun internal organisasi yang bersifat solid, aktif, professional dan menyenangkan 2. Meningkatkan citra organisasi dengan mengoptimalkan peran sosial media', '1. React (Response and Act) 2. Open Forum', '2020/2021', '1. Sertifikat MTA', 32, 'male-1354358_12801.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemilih`
--

CREATE TABLE `pemilih` (
  `id` int(11) NOT NULL,
  `gid` varchar(25) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `status` varchar(11) NOT NULL,
  `periode` varchar(11) NOT NULL,
  `prodi` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pemilih`
--

INSERT INTO `pemilih` (`id`, `gid`, `nama`, `status`, `periode`, `prodi`) VALUES
(88, '1213201004', 'AKADRA GOYMI', 'Mahasiswa', '2020/2021', 'Kesehatan Masyarakat'),
(89, '1313201001', 'AGUNG DWI ANDREANTO', 'Mahasiswa', '2020/2021', 'Kesehatan Masyarakat'),
(90, '1313201021', 'FARADILLA SAPUTRI HANDAYANI', 'Mahasiswa', '2020/2021', 'Kesehatan Masyarakat'),
(91, '1313201056', 'RINANDA', 'Mahasiswa', '2020/2021', 'Kesehatan Masyarakat'),
(92, '1313201071', 'YOMET ZAKALORI', 'Mahasiswa', '2020/2021', 'Kesehatan Masyarakat'),
(93, '1313201072', 'YUDI HARTANTO', 'Mahasiswa', '2020/2021', 'Kesehatan Masyarakat'),
(94, '1413201003', 'ALI ZAMI', 'Mahasiswa', '2020/2021', 'Kesehatan Masyarakat'),
(95, '1413201023', 'FEVI WAHYUNI', 'Mahasiswa', '2020/2021', 'Kesehatan Masyarakat'),
(96, '1413201035', 'IRWAN', 'Mahasiswa', '2020/2021', 'Kesehatan Masyarakat'),
(97, '1413201068', 'SEPTY DINDA PUTRI', 'Mahasiswa', '2020/2021', 'Kesehatan Masyarakat'),
(98, '11100961402', 'ADHI WICAKSONO', 'Mahasiswa', '2020/2021', 'Farmasi'),
(100, '11100961403', 'SAHRIANI', 'Mahasiswa', '2020/2021', 'Farmasi'),
(101, '1248201022', 'FIRLY BRAMA SAPUTRA', 'Mahasiswa', '2020/2021', 'Farmasi'),
(102, '1348201002', 'AHMAD SUKRON', 'Mahasiswa', '2020/2021', 'Farmasi'),
(103, '1348201008', 'ANGGI PRATAMA', 'Mahasiswa', '2020/2021', 'Farmasi'),
(104, '1348201031', 'HAZRUL IQBAL', 'Mahasiswa', '2020/2021', 'Farmasi'),
(105, '1348201047', 'MASHITO PUTRI', 'Mahasiswa', '2020/2021', 'Farmasi'),
(106, '1348201050', 'MIFTAHUL JANNAH', 'Mahasiswa', '2020/2021', 'Farmasi'),
(107, '1348201054', 'MUHAMMAD RIFKI', 'Mahasiswa', '2020/2021', 'Farmasi'),
(108, '1110096140292', 'HARFENTY', 'Mahasiswa', '2020/2021', 'Farmasi'),
(109, '1814901003', 'EVA LAMTIURMA LUMBAN TORUAN', 'Mahasiswa', '2020/2021', 'Profesi NERS'),
(110, '1814901004', 'INGGA HAFACENTA', 'Mahasiswa', '2020/2021', 'Profesi NERS'),
(111, '1814901005', 'GHEA PRIMASIWI', 'Mahasiswa', '2020/2021', 'Profesi NERS'),
(112, '1814901006', 'WINDA KALPATARIA', 'Mahasiswa', '2020/2021', 'Profesi NERS'),
(113, '1814901007', 'RIKA SAFITRI', 'Mahasiswa', '2020/2021', 'Profesi NERS'),
(114, '1814901008', 'EVASARI', 'Mahasiswa', '2020/2021', 'Profesi NERS'),
(115, '1814901009', 'TETI ISFRUENI', 'Mahasiswa', '2020/2021', 'Profesi NERS'),
(116, '1814901010', 'ENIATY AVE RIA SIALLAGAN', 'Mahasiswa', '2020/2021', 'Profesi NERS'),
(117, '1814901011', 'ANDRI SETIAWAN', 'Mahasiswa', '2020/2021', 'Profesi NERS'),
(118, '1814901013', 'LUKSIANA SARI PUTRI', 'Mahasiswa', '2020/2021', 'Profesi NERS'),
(119, '11100961301102', 'LILI ROSITA', 'Mahasiswa', '2020/2021', 'Ilmu Keperawatan'),
(120, '11100961301120', 'NOVITASARI', 'Mahasiswa', '2020/2021', 'Ilmu Keperawatan'),
(121, '1214201026', 'ERLINA MARTINA HAPSARI', 'Mahasiswa', '2020/2021', 'Ilmu Keperawatan'),
(122, '1214201043', 'IRJA FATURRAHMAN', 'Mahasiswa', '2020/2021', 'Ilmu Keperawatan'),
(123, '1214201053', 'MEZI SYAFRI', 'Mahasiswa', '2020/2021', 'Ilmu Keperawatan'),
(124, '1214201118', 'RYSIE OKTAPIANA', 'Mahasiswa', '2020/2021', 'Ilmu Keperawatan'),
(125, '1314201001', 'AMBO INTANG', 'Mahasiswa', '2020/2021', 'Ilmu Keperawatan'),
(126, '1314201002', 'AMOR RAKASIWI', 'Mahasiswa', '2020/2021', 'Ilmu Keperawatan'),
(127, '1314201023', 'JULIAN SUHENDRA', 'Mahasiswa', '2020/2021', 'Ilmu Keperawatan'),
(128, '1314201028', 'M YALSIN ASTONTIO', 'Mahasiswa', '2020/2021', 'Ilmu Keperawatan'),
(129, '2000100119530610001', 'H. Subakir , SKM, M.Kes', 'Dosen', '2020/2021', 'Kesehatan Masyarakat'),
(130, '2003032019670316009', 'H. Parman, S.Pdi, M.Pd', 'Dosen', '2020/2021', 'Kesehatan Masyarakat'),
(131, '2000100119611227002', 'Drs. Hamdani, M.Pd', 'Dosen', '2020/2021', 'Kesehatan Masyarakat'),
(132, '2005091019810724016', 'Putri Sahara Harahap, SKM, M.KKK', 'Dosen', '2020/2021', 'Ilmu Keperawatan'),
(133, '2011061019841021033', 'Ratna Sari Dewi, SKM, M.PH', 'Dosen', '2020/2021', 'Farmasi'),
(135, '8040160107', 'Victor Parsaulian', 'Mahasiswa', '2020/2021', 'Farmasi'),
(136, '8040160106', 'Ahmad Alfandi', 'Mahasiswa', '2020/2021', 'Farmasi'),
(138, '1234', 'asa', 'Mahasiswa', '2020/2021', 'Farmasi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemilihan`
--

CREATE TABLE `pemilihan` (
  `id` int(11) NOT NULL,
  `pemilih_id` int(11) NOT NULL,
  `pilihan` enum('0','1') NOT NULL,
  `tanggal` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pemilihan`
--

INSERT INTO `pemilihan` (`id`, `pemilih_id`, `pilihan`, `tanggal`) VALUES
(41, 88, '1', '2020-02-21'),
(42, 89, '1', '2020-02-21'),
(43, 90, '1', '2020-02-21'),
(44, 91, '1', '2020-02-21'),
(45, 92, '1', '2020-02-21'),
(46, 93, '1', '2020-02-21'),
(47, 94, '1', '2020-02-21'),
(48, 95, '1', '2020-02-21'),
(49, 96, '1', '2020-02-21'),
(50, 97, '1', '2020-02-21'),
(51, 98, '1', '2020-02-21'),
(53, 100, '1', '2020-02-21'),
(54, 101, '1', '2020-02-21'),
(55, 102, '1', '2020-02-21'),
(56, 103, '1', '2020-02-21'),
(57, 104, '1', '2020-02-21'),
(58, 105, '1', '2020-02-21'),
(59, 106, '1', '2020-02-21'),
(60, 107, '1', '2020-02-21'),
(61, 108, '1', '2020-02-23'),
(62, 109, '1', '2020-02-23'),
(63, 110, '1', '2020-02-23'),
(64, 111, '1', '2020-02-23'),
(65, 112, '1', '2020-02-23'),
(66, 113, '1', '2020-02-23'),
(67, 114, '1', '2020-02-23'),
(68, 115, '1', '2020-02-23'),
(69, 116, '1', '2020-02-23'),
(70, 117, '1', '2020-02-23'),
(71, 118, '1', '2020-02-23'),
(72, 119, '1', '2020-02-23'),
(73, 120, '1', '2020-02-23'),
(74, 121, '1', '2020-02-23'),
(75, 122, '1', '2020-02-23'),
(76, 123, '1', '2020-02-23'),
(77, 124, '1', '2020-02-23'),
(78, 125, '1', '2020-02-23'),
(79, 126, '1', '2020-02-23'),
(80, 127, '1', '2020-02-23'),
(81, 128, '1', '2020-02-23'),
(82, 129, '1', '2020-02-23'),
(83, 130, '1', '2020-02-23'),
(84, 131, '1', '2020-02-23'),
(85, 132, '1', '2020-02-23'),
(86, 133, '1', '2020-02-23'),
(88, 135, '1', '2020-02-24'),
(89, 136, '1', '2020-02-25'),
(91, 138, '0', '2020-03-02');

-- --------------------------------------------------------

--
-- Struktur dari tabel `peraturan`
--

CREATE TABLE `peraturan` (
  `id` int(11) NOT NULL,
  `judul` varchar(128) NOT NULL,
  `isi` text NOT NULL,
  `tahun` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `peraturan`
--

INSERT INTO `peraturan` (`id`, `judul`, `isi`, `tahun`) VALUES
(24, 'BAB I  TEMPAT DAN WAKTU KEGIATAN', '1. Pemilihan Mahasiswa dilaksanakan Lobby Gedung B Fakultas Farmasi STIKES Harapan Ibu Jambi\r\n2. Pemungutan suara dilaksanakan pada hari Jum’at, 11 April 2018 pukul 00-17.00 WIB.\r\n3. Penghitungan suara dilaksanakan pada hari Jum’at, 11 April 2018 pukul 00 WIB- selesai.', '2020/2021'),
(25, 'BAB II PERATURAN KAMPANYE', '1. Menghasut atau mengadu domba antar kelompok atau perorangan mahasiswa;\r\n2. Mengancam, menganjurkan atau melakukan tindak kekerasan kepada mahasiswa;\r\n3. Menghina suku, agama, ras, golongan;', '2020/2021'),
(26, 'BAB III  TATA CARA PEMUNGUTAN SUARA', '1. Pemberian hak pilih tidak boleh diwakilkan kepada orang lain\r\n2. Calon pemilih menyerahkan kartu identitas sebagaimana mahasiswa (KTM yang berfoto jelas/KRS dan membawa identitas asli lain yang memiliki foto yang jelas), kemudian akan mendapat surat suara seiring dengan pengembalian Kartu identitas oleh panitia.\r\n3. Pemilih masuk bilik suara untuk mencoblos, apabila bilik suara masih penuh maka mengantri terlebih dahulu di tempat yang disediakan panitia.\r\n4. Pemilih memasukkan sendiri kertas suara yang telah dicoblos pada kotak suara yang sesuai fungsinya, kotak suara Presiden dan Wakil Presiden', '2020/2021'),
(27, 'BAB IV  PEMILIH', '1. Pemberian hak pilih tidak boleh diwakilkan.\r\n2. Pemilih yang akan menggunakan hak suaranya diwajibkan mendatangi TPS yang telah di sediakan oleh Komisi Pemilihan Mahasiswa (KPM) 2015.\r\n3. Pemilih yang telah memberikan hak suaranya, nama pemilih dicoret dari daftar pemilih dan diberi tinta pada bagian kelingking kirinya (sampai batas kuku).', '2020/2021'),
(28, 'Tata Cara Voting', '1. menyerahkan nim anda', '2020/2021');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kandidat`
--
ALTER TABLE `kandidat`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pemilih`
--
ALTER TABLE `pemilih`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pemilihan`
--
ALTER TABLE `pemilihan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pemilih_id` (`pemilih_id`);

--
-- Indeks untuk tabel `peraturan`
--
ALTER TABLE `peraturan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `kandidat`
--
ALTER TABLE `kandidat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT untuk tabel `pemilih`
--
ALTER TABLE `pemilih`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=139;

--
-- AUTO_INCREMENT untuk tabel `pemilihan`
--
ALTER TABLE `pemilihan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT untuk tabel `peraturan`
--
ALTER TABLE `peraturan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `pemilihan`
--
ALTER TABLE `pemilihan`
  ADD CONSTRAINT `pemilihan_ibfk_1` FOREIGN KEY (`pemilih_id`) REFERENCES `pemilih` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
