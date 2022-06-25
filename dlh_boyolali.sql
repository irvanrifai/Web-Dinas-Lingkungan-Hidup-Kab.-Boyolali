-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Jun 2021 pada 23.42
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dlh_boyolali`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id` int(11) NOT NULL,
  `berita` varchar(125) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `deskripsi` varchar(225) NOT NULL,
  `link` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id`, `berita`, `judul`, `deskripsi`, `link`) VALUES
(2, '60b69447ab0f3.jpeg', 'Renovasi Patung Jaran Boyolali', 'Patung Kuda Boyolali pada tanggal 25 Desember 2017 mengalami renovasi pada bagian sekeliling pembatas jalan perlimaan', 'http://boyolali.go.id/news/penyekatan-pemudik-diperpanjang'),
(6, '60b687a81282c.png', 'Untuk Palestina dan Israel', 'Patung Boyolali pada tanggal 25 Desember 2017 mengalami renovasi pada bagian sekeliling pembatas jalan ', 'http://boyolali.go.id/news/penyekatan-pemudik'),
(7, '60b687b896556.jpg', 'Wisata dan Keindahan Kabupaten Boyolali', 'Patung Jaran Boyolali pada tanggal 25 Desember 2017 mengalami renovasi pada bagian sekeliling pembatas jalan perlimaan', 'http://www.youtube.com'),
(8, '60b687ca54a9d.png', 'Facebook diblokir dari wilayah NKRI karena 3 hal ini', 'Facebook merupakan sosial media yang kerap digunakan oleh khalayak umum hampir meliputi semua usia', 'http://www.youtube.com/'),
(9, '60b69428a197c.jpeg', 'Patung Kuda Boyolali', 'Facebook merupaka sosial media yang kerap digunakan oleh khalayak umum hampir meliputi semua usia', 'http://www.youtube.com/embed/t5UPhmFQALU');

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita_lain`
--

CREATE TABLE `berita_lain` (
  `id` int(11) NOT NULL,
  `judul` varchar(75) NOT NULL,
  `link` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `berita_lain`
--

INSERT INTO `berita_lain` (`id`, `judul`, `link`) VALUES
(5, 'Wisata dan Keindahan Kabupaten Boyolali', 'http://www.youtube.com/embed/eUytuZZP4u4'),
(6, 'Patung Kuda Boyolali', 'https://www.youtube.com/embed/RcImkiDXQMQ'),
(7, 'Facebook diblokir dari wilayah NKRI karena 3 hal ini', 'http://www.youtube.com/embed/t5UPhmFQALU');

-- --------------------------------------------------------

--
-- Struktur dari tabel `c_youtube`
--

CREATE TABLE `c_youtube` (
  `judul` int(11) NOT NULL,
  `link` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeri`
--

CREATE TABLE `galeri` (
  `id` int(11) NOT NULL,
  `galeri` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `galeri`
--

INSERT INTO `galeri` (`id`, `galeri`) VALUES
(6, 'jpg'),
(9, '60b68c795a2d1.jpeg'),
(10, '60b68c8cdb1c6.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jumbo_tron`
--

CREATE TABLE `jumbo_tron` (
  `id` int(11) NOT NULL,
  `jumbo_tron` varchar(150) NOT NULL,
  `judul` varchar(75) NOT NULL,
  `keterangan` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jumbo_tron`
--

INSERT INTO `jumbo_tron` (`id`, `jumbo_tron`, `judul`, `keterangan`) VALUES
(5, '60b68776dac08.jpg', 'Lingkungan yang asri dan indah Kabupaten Boyolali', 'Boyolali adalah Kabupaten yang berada di Provinsi Jawa Tengah dengan wilayah yang hijau');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kinerja_info_izin`
--

CREATE TABLE `kinerja_info_izin` (
  `id` int(11) NOT NULL,
  `info_izin` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kinerja_info_izin`
--

INSERT INTO `kinerja_info_izin` (`id`, `info_izin`) VALUES
(3, '60b688406f758.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kinerja_org_kepeg`
--

CREATE TABLE `kinerja_org_kepeg` (
  `id` int(11) NOT NULL,
  `org_kepeg` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kinerja_org_kepeg`
--

INSERT INTO `kinerja_org_kepeg` (`id`, `org_kepeg`) VALUES
(3, 'png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kinerja_renstra`
--

CREATE TABLE `kinerja_renstra` (
  `id` int(11) NOT NULL,
  `renstra` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kinerja_renstra`
--

INSERT INTO `kinerja_renstra` (`id`, `renstra`) VALUES
(2, 'pdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kinerja_sop_b3`
--

CREATE TABLE `kinerja_sop_b3` (
  `id` int(11) NOT NULL,
  `sop_b3` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kinerja_sop_b3`
--

INSERT INTO `kinerja_sop_b3` (`id`, `sop_b3`) VALUES
(2, 'jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kinerja_sop_pengaduan`
--

CREATE TABLE `kinerja_sop_pengaduan` (
  `id` int(11) NOT NULL,
  `sop_pengaduan` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kinerja_sop_pengaduan`
--

INSERT INTO `kinerja_sop_pengaduan` (`id`, `sop_pengaduan`) VALUES
(2, 'png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kinerja_std_pelayanan`
--

CREATE TABLE `kinerja_std_pelayanan` (
  `id` int(11) NOT NULL,
  `std_pelayanan` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kinerja_std_pelayanan`
--

INSERT INTO `kinerja_std_pelayanan` (`id`, `std_pelayanan`) VALUES
(8, 'png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelayanan_aduan`
--

CREATE TABLE `pelayanan_aduan` (
  `id` int(11) NOT NULL,
  `aduan` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pelayanan_aduan`
--

INSERT INTO `pelayanan_aduan` (`id`, `aduan`) VALUES
(3, 'png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelayanan_amdal`
--

CREATE TABLE `pelayanan_amdal` (
  `id` int(11) NOT NULL,
  `amdal` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pelayanan_amdal`
--

INSERT INTO `pelayanan_amdal` (`id`, `amdal`) VALUES
(2, '60b688785e6af.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelayanan_perizinan`
--

CREATE TABLE `pelayanan_perizinan` (
  `id` int(11) NOT NULL,
  `perizinan` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pelayanan_perizinan`
--

INSERT INTO `pelayanan_perizinan` (`id`, `perizinan`) VALUES
(2, 'pdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelayanan_pe_sampah`
--

CREATE TABLE `pelayanan_pe_sampah` (
  `id` int(11) NOT NULL,
  `pe_sampah` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pelayanan_pe_sampah`
--

INSERT INTO `pelayanan_pe_sampah` (`id`, `pe_sampah`) VALUES
(1, 'png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelayanan_sppl`
--

CREATE TABLE `pelayanan_sppl` (
  `id` int(11) NOT NULL,
  `sppl` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pelayanan_sppl`
--

INSERT INTO `pelayanan_sppl` (`id`, `sppl`) VALUES
(1, 'pdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelayanan_ukl_upll`
--

CREATE TABLE `pelayanan_ukl_upll` (
  `id` int(11) NOT NULL,
  `ukl_upll` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pelayanan_ukl_upll`
--

INSERT INTO `pelayanan_ukl_upll` (`id`, `ukl_upll`) VALUES
(2, '60b6885edb0fd.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profil_personil`
--

CREATE TABLE `profil_personil` (
  `id` int(11) NOT NULL,
  `personil` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `profil_personil`
--

INSERT INTO `profil_personil` (`id`, `personil`) VALUES
(2, 'jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profil_struktur`
--

CREATE TABLE `profil_struktur` (
  `id` int(11) NOT NULL,
  `struktur` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `profil_struktur`
--

INSERT INTO `profil_struktur` (`id`, `struktur`) VALUES
(12, 'pdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profil_tujuan`
--

CREATE TABLE `profil_tujuan` (
  `id` int(11) NOT NULL,
  `tujuan` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `profil_tujuan`
--

INSERT INTO `profil_tujuan` (`id`, `tujuan`) VALUES
(4, 'pdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profil_visi_misi`
--

CREATE TABLE `profil_visi_misi` (
  `id` int(11) NOT NULL,
  `visi_misi` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `profil_visi_misi`
--

INSERT INTO `profil_visi_misi` (`id`, `visi_misi`) VALUES
(4, 'png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `username` text NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`username`, `password`) VALUES
('admin', 'dlh@boyolali2021');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `berita_lain`
--
ALTER TABLE `berita_lain`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jumbo_tron`
--
ALTER TABLE `jumbo_tron`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kinerja_info_izin`
--
ALTER TABLE `kinerja_info_izin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kinerja_org_kepeg`
--
ALTER TABLE `kinerja_org_kepeg`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kinerja_renstra`
--
ALTER TABLE `kinerja_renstra`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kinerja_sop_b3`
--
ALTER TABLE `kinerja_sop_b3`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kinerja_sop_pengaduan`
--
ALTER TABLE `kinerja_sop_pengaduan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kinerja_std_pelayanan`
--
ALTER TABLE `kinerja_std_pelayanan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pelayanan_aduan`
--
ALTER TABLE `pelayanan_aduan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pelayanan_amdal`
--
ALTER TABLE `pelayanan_amdal`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pelayanan_perizinan`
--
ALTER TABLE `pelayanan_perizinan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pelayanan_pe_sampah`
--
ALTER TABLE `pelayanan_pe_sampah`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pelayanan_sppl`
--
ALTER TABLE `pelayanan_sppl`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pelayanan_ukl_upll`
--
ALTER TABLE `pelayanan_ukl_upll`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `profil_personil`
--
ALTER TABLE `profil_personil`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `profil_struktur`
--
ALTER TABLE `profil_struktur`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `profil_tujuan`
--
ALTER TABLE `profil_tujuan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `profil_visi_misi`
--
ALTER TABLE `profil_visi_misi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `berita_lain`
--
ALTER TABLE `berita_lain`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `jumbo_tron`
--
ALTER TABLE `jumbo_tron`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `kinerja_info_izin`
--
ALTER TABLE `kinerja_info_izin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `kinerja_org_kepeg`
--
ALTER TABLE `kinerja_org_kepeg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `kinerja_renstra`
--
ALTER TABLE `kinerja_renstra`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `kinerja_sop_b3`
--
ALTER TABLE `kinerja_sop_b3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `kinerja_sop_pengaduan`
--
ALTER TABLE `kinerja_sop_pengaduan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `kinerja_std_pelayanan`
--
ALTER TABLE `kinerja_std_pelayanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `pelayanan_aduan`
--
ALTER TABLE `pelayanan_aduan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `pelayanan_amdal`
--
ALTER TABLE `pelayanan_amdal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `pelayanan_perizinan`
--
ALTER TABLE `pelayanan_perizinan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `pelayanan_pe_sampah`
--
ALTER TABLE `pelayanan_pe_sampah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `pelayanan_sppl`
--
ALTER TABLE `pelayanan_sppl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `pelayanan_ukl_upll`
--
ALTER TABLE `pelayanan_ukl_upll`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `profil_personil`
--
ALTER TABLE `profil_personil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `profil_struktur`
--
ALTER TABLE `profil_struktur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `profil_tujuan`
--
ALTER TABLE `profil_tujuan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `profil_visi_misi`
--
ALTER TABLE `profil_visi_misi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
