-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Des 2023 pada 16.52
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ppks`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikel`
--

CREATE TABLE `artikel` (
  `id_artikel` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `isi_artikel` text NOT NULL,
  `tanggal_dibuat` date NOT NULL DEFAULT current_timestamp(),
  `gambar` varchar(255) NOT NULL,
  `tanggal_diperbarui` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `judul`, `isi_artikel`, `tanggal_dibuat`, `gambar`, `tanggal_diperbarui`) VALUES
(1, 'Penyerahan Anugrah oleh Kementrian Pendidikan, Kebudayaan, Riset, dan Teknologi Kepada PPKS Politala', 'Baru-baru ini Satuan Tugas Pencegahan dan Penaganan Kekerasan Seksual Universitas Lambung Mangkurat dihadiahi kabar baik, hal ini termuat dalam Surat Undangan Puncak Peringatan Bulan Merdeka Belajar Tahun 2023. Dalam undangan tersebut tersurat bahwa Satuan Tugas Pencegahan dan Penanganan Kekerasan Seksual Universitas Lambung Mangkurat dinobatkan sebagai Penerima Anugerah Pendidikan Tinggi. Penganugerahan tersebut diterima oleh Rektor Universitas Lambung Mangkurat pada 29 Mei 2023 di Yogyakarta. “Terima kasih kepada seluruh civitas akademika ULM terutama TIM SATGAS PPKS yg telah berkerja dengan cermat dan terukur sehingga ULM di Berikan Penghargaan Anugrah Pendidikan Tinggi 2023. Bravo Ibu Dr. Lena Hanifah dan Tim PPKS ULM” ungkap Rektor Universitas Lambung Mangkurat.', '2023-11-14', '1.jpg', '2023-11-20'),
(2, 'Menggali Potensi Kreativitas: Strategi Peningkatan Kreativitas dalam Kehidupan Sehari-hari', 'Kreativitas bukanlah bakat yang hanya dimiliki oleh beberapa orang terpilih; sebaliknya, itu adalah kemampuan yang dapat ditingkatkan oleh siapa saja. Dalam artikel ini, kita akan membahas esensi kreativitas dan bagaimana kita dapat merangsangnya dalam kehidupan sehari-hari. Dengan mengeksplorasi tips praktis dan memahami kebiasaan kreatif tokoh-tokoh terkenal, pembaca akan diberikan pandangan yang mendalam tentang bagaimana menggali potensi kreativitas mereka sendiri.', '2023-11-14', 'bersama72.jpg', '2023-11-20'),
(5, 'Penemuan Tulang Dinosaurus di Politeknik Negeri Tanah Laut', 'Pada Tanggal 12 February Telah ditemukan Tulang <b>Dinosaurus</b> oleh seorang tukang yang sedang membangun gedung seorang diri', '2023-11-20', 'tidak ada bukti valid', '2023-11-26'),
(8, 'Kapal Laut', 'Perkenal nama saya budiono siregar, cita-cita kapal laut', '2023-11-21', 'gambar tidak ditemukan', '2023-11-21'),
(18, 'Manusia Setengah Kucing', '<p>Pada Tangal 21 February 2023 terdapat sebuah <b>TRAGEDI </b>yang sangat mengerikan yaitu kemunculan se ekor kucing <b>BERMATA TIGA</b></p>', '2023-11-26', 'nigga man', '2023-11-27');

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeri`
--

CREATE TABLE `galeri` (
  `id_galeri` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `tanggal_dibuat` date NOT NULL DEFAULT current_timestamp(),
  `tanggal_diperbarui` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `galeri`
--

INSERT INTO `galeri` (`id_galeri`, `judul`, `gambar`, `tanggal_dibuat`, `tanggal_diperbarui`) VALUES
(1, 'Photo Bersama Para Pegawai PKSS', 'bersama72.jpg', '2023-11-19', '2023-11-21'),
(2, 'Pegawai PPKS', '1.jpg', '2023-11-19', '2023-11-21'),
(3, 'photo bersama', '2.jpg', '2023-11-19', '2023-11-21'),
(4, 'pegawai ppks', '3.jpg', '2023-11-19', '2023-11-21'),
(5, 'rapat ppks', '4.jpg', '2023-11-19', '2023-11-21');

-- --------------------------------------------------------

--
-- Struktur dari tabel `materi`
--

CREATE TABLE `materi` (
  `id_materi` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nama_dokumen` varchar(255) NOT NULL,
  `path_dokumen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengaduan`
--

CREATE TABLE `pengaduan` (
  `id_pengaduan` int(11) NOT NULL,
  `siapa` varchar(128) NOT NULL,
  `korban` varchar(128) NOT NULL,
  `kejadian` varchar(128) NOT NULL,
  `lokasi` varchar(128) NOT NULL,
  `kapan` varchar(128) NOT NULL,
  `apa` varchar(128) NOT NULL,
  `masih` varchar(128) NOT NULL,
  `detail` varchar(128) NOT NULL,
  `tanggung` varchar(128) NOT NULL,
  `pelaku` varchar(128) NOT NULL,
  `kontak` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `info` varchar(128) NOT NULL,
  `pilih` varchar(128) NOT NULL,
  `kontakLain` varchar(128) NOT NULL,
  `sila` varchar(128) NOT NULL,
  `tanggal_dibuat` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `profil`
--

CREATE TABLE `profil` (
  `id_profil` int(11) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_handphone` varchar(12) NOT NULL,
  `email` varchar(255) NOT NULL,
  `tujuan` text NOT NULL,
  `visi` text NOT NULL,
  `misi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `profil`
--

INSERT INTO `profil` (`id_profil`, `alamat`, `no_handphone`, `email`, `tujuan`, `visi`, `misi`) VALUES
(1, 'Jalan Ahmad Yani Km. 6, Desa Panggung. Kabupaten Tanah Laut Kalimantan Selatan', '0821506462', 'mail@politala.ac.id', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odit rem non molestias facilis aspernatur qui sequi. Dolorum aliquam inventore doloremque a laborum mollitia! Culpa dolorum similique dolore necessitatibus. Libero, enim.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odit rem non molestias facilis aspernatur qui sequi. Dolorum aliquam inventore doloremque a laborum mollitia! Culpa dolorum similique dolore necessitatibus. Libero, enim.', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odit rem non molestias facilis aspernatur qui sequi. Dolorum aliquam inventore doloremque a laborum mollitia! Culpa dolorum similique dolore necessitatibus. Libero, enim.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odit rem non molestias facilis aspernatur qui sequi. Dolorum aliquam inventore doloremque a laborum mollitia! Culpa dolorum similique dolore necessitatibus. Libero, enim.', '<ol><li><span style=\"color: rgb(68, 68, 68); font-family: Raleway, sans-serif; text-align: justify; background-color: rgb(255, 255, 255);\">Meningkatkan pemenuhan perlindungan hak-hak mahasiswa untuk&nbsp;</span><span style=\"color: inherit; font-family: inherit; text-align: justify; background-color: rgb(255, 255, 255);\">terciptanya zona merdeka belajar.</span></li><li><span style=\"color: inherit; font-family: inherit; text-align: justify; background-color: rgb(255, 255, 255);\">Penghapusan segala bentuk tindak kekerasan terhadap mahasiswa/i</span></li><li><span style=\"color: inherit; font-family: inherit; text-align: justify; background-color: rgb(255, 255, 255);\">Peningkatan kemampuan kelembagaan dalam melaksanakan program&nbsp;<span style=\"color: inherit; font-family: inherit; font-weight: 600;\">sesuai amanah Kemendikbud No. 30 Tahun 2021 untuk menghapus&nbsp;</span><span style=\"color: inherit; font-family: inherit; font-weight: 600;\">segala bentuk kekerasan seksual di Universitas Lambung Mangkurat</span><br></span><br></li></ol>');

-- --------------------------------------------------------

--
-- Struktur dari tabel `program`
--

CREATE TABLE `program` (
  `id_program` int(11) NOT NULL,
  `urain` text NOT NULL,
  `penyelenggara` varchar(255) NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `waktu` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `program`
--

INSERT INTO `program` (`id_program`, `urain`, `penyelenggara`, `lokasi`, `waktu`) VALUES
(1, 'RAPAT KOORDINASI NASIONAL SATUAN TUGAS PENCEGAHAN DAN PENANGANAN KEKERASAN SEKSUAL', 'Kementerian Pendidikan dan Kebudayaan, Riset, Dan Teknologi', 'DKI JAKARTA', '2023-11-17'),
(2, 'Merdeka Talks Kekerasan Seksual Dalam Pacaran', 'Satgas PPKS ULM', 'Live Instagram @merdekabekisah.ulm at 7:00 PM', '2023-11-29');

-- --------------------------------------------------------

--
-- Struktur dari tabel `strukture`
--

CREATE TABLE `strukture` (
  `id_strukture` int(11) NOT NULL,
  `visi` text NOT NULL,
  `misi` text NOT NULL,
  `tugas` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `level` enum('admin','pegawai') NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(255) NOT NULL,
  `terakhir_aktif` timestamp NOT NULL DEFAULT current_timestamp(),
  `tanggal_dibuat` date NOT NULL DEFAULT current_timestamp(),
  `tanggal_dirubah` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `level`, `email`, `password`, `terakhir_aktif`, `tanggal_dibuat`, `tanggal_dirubah`) VALUES
(2, 'pendi', 'pegawai', 'pendiseroangpegawai@gmail', '2201301183', '2023-11-18 14:29:31', '2023-11-22', '2023-11-22'),
(5, 'nanda', 'pegawai', 'nurependi210203@gmail.com', 'buburkacang', '2023-11-19 00:45:59', '2023-11-22', '2023-11-22'),
(6, 'pendi Gaming', 'admin', 'nurefendi210203@gmail.com', 'sdasd', '2023-11-22 05:53:15', '2023-11-22', '2023-11-22');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indeks untuk tabel `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id_galeri`);

--
-- Indeks untuk tabel `materi`
--
ALTER TABLE `materi`
  ADD PRIMARY KEY (`id_materi`);

--
-- Indeks untuk tabel `pengaduan`
--
ALTER TABLE `pengaduan`
  ADD PRIMARY KEY (`id_pengaduan`);

--
-- Indeks untuk tabel `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`id_profil`);

--
-- Indeks untuk tabel `program`
--
ALTER TABLE `program`
  ADD PRIMARY KEY (`id_program`);

--
-- Indeks untuk tabel `strukture`
--
ALTER TABLE `strukture`
  ADD PRIMARY KEY (`id_strukture`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id_galeri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `materi`
--
ALTER TABLE `materi`
  MODIFY `id_materi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pengaduan`
--
ALTER TABLE `pengaduan`
  MODIFY `id_pengaduan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `profil`
--
ALTER TABLE `profil`
  MODIFY `id_profil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `program`
--
ALTER TABLE `program`
  MODIFY `id_program` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
