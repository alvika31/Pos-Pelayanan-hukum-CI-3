-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Jun 2022 pada 07.43
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `konsultasi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `jawab_konsultasi`
--

CREATE TABLE `jawab_konsultasi` (
  `id_jawab_konsultasi` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_konsultasi` int(11) NOT NULL,
  `isi_jawab` text NOT NULL,
  `show_jawab` int(2) NOT NULL,
  `tgl_jawab` varchar(100) NOT NULL,
  `jam_jawab` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jawab_konsultasi`
--

INSERT INTO `jawab_konsultasi` (`id_jawab_konsultasi`, `id_user`, `id_konsultasi`, `isi_jawab`, `show_jawab`, `tgl_jawab`, `jam_jawab`) VALUES
(10, 90, 10, '<p>Berdasarkan Kronologi yang suadari/i sampaikan menurut kami : Bahwa berdasarkan pasal 1576 KUHPerdata, jual beli tidak memutuskan sewa menyewa yang telah ada. Pasal 1576 KUHPerdata menyatakan; &ldquo;Dengan dijualnya barang yang disewa, suatu persewaan yang dibuat sebelumnya tidaklah diputuskan kecuali apabila ini telah diperjanjikan pada waktu menyewakan barang.&rdquo; Jadi, Pemohon perlu melihat kembali isi dari Perjanjian. Apabila dalam Perjanjian terdapat klausul bahwa &ldquo;Penjualan lahan kepada Pihak Ketiga sebelum jangka waktu sewa berakhir akan mengakhiri hubungan sewa menyewa Para Pihak&rdquo;, maka penyewaan lahan berakhir dengan dijualnya lahan tersebut. Akan tetapi, apabila pengaturan seperti itu tidak ada, maka Pemohon masih berhak atas Lahan yang disewakan. Dalam hal ini, Pemohon dapat mengajukan gugatan wanprestasi ke pengadilan dengan menggugat beberapa hal seperti: - Pemenuhan hak Pemohon untuk tetap menempati Lahan sampai berakhirnya Jangka Waktu Perjanjian. - Terkait Ganti Rugi, hal ini diatur dalam pasal 1246 KUHPerdata. Ganti rugi dapat berupa: a) Kerugian yang nyata-nyata diderita. Dalam hal ini, kerugian Pemohn adalah sebesar sisa biaya sewa sebagaimana telah diperjanjikan. b) Keuntungan yang seharusnya diperoleh. Dalam hal ini, Pemohon dapat menggugat ganti rugi atas keuntungan yang seharusnya didapatkan apabila tetap menggunakan Lahan. Demikian jawaban dari kami.</p>\r\n', 1, '2022-05-27', '08:58:24'),
(11, 90, 13, '<p>asddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd</p>\r\n\r\n<ul>\r\n	<li>ssdfsdf</li>\r\n	<li>ghjghj</li>\r\n	<li>&nbsp;</li>\r\n</ul>\r\n', 1, '2022-06-01', '10:10:30'),
(12, 91, 11, '<p>Halo, Pak H.L.M.Ilham...</p>\r\n\r\n<p>Mengenai Pembebasan lahan yang bapak sebutkan dalam pertanyaan,&nbsp;pada dasarnya terdapat beberapa cara untuk melakukan peralihan terhadap hak atas tanah, diantaranya&nbsp;dapat dilakukan melalui hibah, jual beli,&nbsp;dan juga tukar menukar, yang mana hal tersebut telah diatur dalam Pasal 37 ayat (1) Peraturan Pemerintah Nomor 24 Tahun 1997tentang Pendaftaran Tanah (PP 24/1997):&nbsp;&ldquo;Peralihan hak atas tanah dan hak milik atas satuan rumah susun melalui jual beli, tukar menukar, hibah, pemasukan dalam perusahaan dan perbuatan hukum pemindahan hak lainnya, kecuali pemindahan hak melalui lelang hanya dapat didaftarkan jika dibuktikan dengan akta yang dibuat oleh PPAT yang berwenang menurut ketentuan peraturan perundang-undangan yang&nbsp;berlaku&rdquo;.</p>\r\n\r\n<p>Jika prosesnya melalui&nbsp;Jual beli tanah dan bangunan, maka harus memenuhi syarat sahnya perjanjian sebagaimana diatur dalam Pasal 1320 KUHPerdata. Selain syarat sahnyaperjanjian, transaksi jual beli tanah dan bangunan harus dilakukan dihadapan pejabat yang berwenang yaitu Pejabat Pembuat Akta Tanah (&ldquo;PPAT&rdquo;). &nbsp;Dalam hal ini, transaksi atau jual beli tersebut juga harus memenuhi&nbsp;<strong>syarat materiil dan formil</strong>, sebagai berikut:</p>\r\n\r\n<ol>\r\n	<li>Syarat materiil, merupakan syarat yang&nbsp;menentukan sahnya jual beli tanah dan&nbsp;bangunan tersebut, yaitu:\r\n	<ul>\r\n		<li>Pembeli berhak membeli tanah yang bersangkutan Pembeli sebagai penerima hak harus memenuhi syarat untuk menjadi pemegang hak atas tanah yang akan dibelinya. Untuk menentukan berhak atau tidaknya si pembeli memperoleh hak atas tanah tersebut tergantung pada hak apa yang ada pada tanah tersebut, apakah hak milik, hak guna bangunan, hak guna usaha, atau hak pakai.&nbsp;</li>\r\n		<li>Penjual berhak menjual tanah dan bangunan yang bersangkutan Yang berhak menjual tanah dan bangunan yang bersangkutan adalah pemiliknya. Kalau&nbsp; pemilik sebidang tanah yang bersangkutanhanya satu orang, maka ia berhak menjual sendiri bidang tanah tersebut. Akan tetapi, bila pemilik tanah dua orang maka yang berhak menjual tanah itu ialah kedua orangitu secara bersama-sama. Tidak boleh&nbsp;seorang saja yang bertindak sebagai penjual.&nbsp;</li>\r\n		<li>Tanah yang bersangkutan boleh diperjualbelikan dan tidak sedang dalam sengketa. Mengenai hak atas tanah yang bisa diperjualbelikan/dialihkan telah&nbsp; ditentukan dalam UUPA yaitu, hak milik, hak guna bangunan, hak guna usaha, hak pakai. &nbsp;</li>\r\n	</ul>\r\n	</li>\r\n	<li>Syarat Formil,&nbsp;PPAT akan membuat AJB setelah semua persyaratan materiil terpenuhi. PPAT adalah pejabat umum yang diangkat oleh Kepala Badan Pertanahan Nasional (BPN)/Menteri Agraria danTata Ruang, yang mempunyai kewenangan untuk membuat AJB. Jual beli yang dilakukan tidak dihadapan PPAT tetap sah menurut ketentuan Pasal 5 UUPA. Namun, untuk menunjukkan adanya kepastian hukum&nbsp;dalamsetiap peralihan hak atas tanah, Pasal 37 ayat (1) Peraturan Pemerintah Nomor 24 Tahun 1997 tentang Pendaftaran Tanah yang merupakan&nbsp; aturan pelaksana dari UUPA, menentukanbahwa setiap perjanjian yang bermaksud&nbsp; mengalihkan hak atas tanah hanya dapat didaftarkan jika dibuktikan dengan akta yangd ibuat oleh PPAT yang berwenang. Selain itu, dalam praktik, sebelum AJB dibuat para pihak wajib menyerahkan surat-surat yang diperlukan kepada PPAT, yaitu: &nbsp;\r\n	<ul>\r\n		<li>Jika tanahnya sudah bersertifikat, sertifikat tanahnya yang asli dan tanda bukti biayapendaftarannya; Jika tanahnya belum bersertifikat makadibutuhkan surat keterangan bahwa tanahtersebut belum bersertifikat, surat-surat tanahyang ada yang memerlukan penguatan olehKepala Desa atau Camat dilengkapi dengansurat-surat yang membuktikan identitas penjual dan pembelinya yang diperlukanuntuk pensertifikatan tanahnya setelahselesai dilakukan jual beli;&nbsp;</li>\r\n		<li>PPAT juga akan melakukan pemeriksaanterhadap status kepemilikan sertifikat danakan memeriksa keaslian sertifikat ke Kantor Pertanahan. Penjual juga harus membayar pajak penghasilan (PPh) sedangkan pembeli diharuskan membayar Bea Perolehan Hak atas Tanah dan Bangunan (BPHTB).&nbsp;</li>\r\n		<li>Persetujuan suami/istri untuk bisa melakukanpenandatanganan AJB apabila tanah danbangunan tersebut adalah harta bersama. Selain itu, pada tahap pembuatan danpenandatanganan AJB, penjual, pembeli, saksi dan PPAT akan menandatangani AJB apabilapenjual dan pembeli telah menyetujui isi AJBtersebut. Kemudian diberikan salinan kepadapembeli dan penjual sebagai dokumen masing- masing.&nbsp;</li>\r\n	</ul>\r\n	</li>\r\n</ol>\r\n\r\n<p>Dalam hal tanah sudah bersertifikat, setelah&nbsp;penandatanganan AJB agar dilakukan proses balik nama sertifikat ke Kantor pertanahan.</p>\r\n\r\n<p>Akan tetapi jika menurut saudara dalam proses peralihan hak ditemukan adanya surat kuasa yang diduga palsu atau dokumen yang diduga dipalsukan sehingga masyarakat pemilik tanah tidak memperoleh haknya karena proses peralihan hak tersebut, maka masyarakat yang merasa dirugikan dapat menempuh upaya hukum&nbsp;sebagai berikut:</p>\r\n\r\n<ol>\r\n	<li>Mengajukan gugatan keperdataan atas Perbuatan Melawan Hukum.</li>\r\n	<li>Apabila saudara menduga benar telah ada perbuatan pemalsuan surat kuasa, maka saudara ataupun masyarakat ataupun sekelompok masyarakat tertentu dapat melaporkan perbuatan oknum dengan&nbsp;Tindak&nbsp;Pidana Pemalsuan kepada kepolisian setempat.</li>\r\n</ol>\r\n\r\n<p>Demikian, semoga dapat menjawab permasalahan saudara.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Terima kasih telah mempercayakan Kejaksaan Tinggi NTB.</p>\r\n\r\n<p>Salam.</p>\r\n', 1, '2022-06-01', '10:15:43'),
(13, 90, 14, '<p>aaaaa</p>\r\n', 1, '2022-06-05', '12:27:30'),
(14, 90, 15, '<p>aaaa</p>\r\n', 1, '2022-06-05', '12:29:14');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_konsultasi`
--

CREATE TABLE `kategori_konsultasi` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(100) NOT NULL,
  `deskripsi_kategori` varchar(250) NOT NULL,
  `icon_kategori` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kategori_konsultasi`
--

INSERT INTO `kategori_konsultasi` (`id_kategori`, `nama_kategori`, `deskripsi_kategori`, `icon_kategori`) VALUES
(6, 'Pidana', 'Masalah tentang pidana korupsi', 'handcuffs1.png'),
(7, 'Hukum Waris', 'Mengenai masalah hukum waris yang salah', 'mediator1.png'),
(8, 'Pernikahan & Penceraian', 'Masalah Mengenai Pernikahan dan penceraian', 'couple.png'),
(9, 'Buruh dan ketenagakerjaan', 'Masalah mengenai ketenagakerjaan', 'crowd.png'),
(10, 'Hutang Piutang', 'Mengenai Masalah Hutang Piutang', 'calculate.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `konsultasi`
--

CREATE TABLE `konsultasi` (
  `id_konsultasi` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `no_ktp` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `no_hp` varchar(100) NOT NULL,
  `status_konsultasi` int(2) NOT NULL,
  `upload_ktp` varchar(100) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `deskripsi_masalah` text NOT NULL,
  `privasi` int(2) NOT NULL,
  `tgl_isi` varchar(100) NOT NULL,
  `time_isi` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `konsultasi`
--

INSERT INTO `konsultasi` (`id_konsultasi`, `nama`, `no_ktp`, `alamat`, `email`, `no_hp`, `status_konsultasi`, `upload_ktp`, `id_kategori`, `judul`, `deskripsi_masalah`, `privasi`, `tgl_isi`, `time_isi`) VALUES
(10, 'Alvika prahasta', '232323', 'cikupa', 'alvikaajiandrianty@gmail.com', '08979382175', 1, '62836d5a5dba1.png', 6, 'PERJANJIAN SEWA MENYEWA', '<p>Saya merupakan penyewa sebidang lahan dan menyewa Lahan tersebut dari teman Saya untuk mendirikan sebuah usaha Warung Makan. Kami sepakat bahwa Jangka Waktu Sewa Menyewa berlangsung selama 5 (lima) tahun. Pada tahun ke 3, teman Saya menjual Lahan tersebut kepada pihak ketiga dan meminta Saya agar mencari tempat lain untuk disewa. Dan Sebagai ganti rugi, teman Saya akan mengembalikan biaya sewa Lahan sebesar Rp 10 juta, akan tetapi Saya merasa keberatan dengan biaya penggantian tersebut. Saya ingin bertanya terkait diperbolehkan atau tidaknya jika Saya meminta ganti rugi sewa lahan seharga nilai sewa yang berlaku saat ini karena Saya masih memiliki hak untuk menyewa lahan tersebut berdasarkan Perjanjian Sewa Menyewa?</p>\r\n', 1, '2022-05-27', '08:57:43'),
(11, 'Pipit Adrianty', '2323', 'aaa', 'alvikaajiandrianty@gmail.com', '08979382175', 1, 's25.jpg', 6, 'KONSULTASI HUKUM MENGENAI LANGKAH HUKUM JIKA PERJANJIAN PEMBAGIAN HARTA GONO-GINI DISOBEK-SOBEK ?', '<p>Orang tua saya sudah resmi bercerai sejak tahun lalu. Keduanya adalah PNS, namun bapak saya sudah pensiun. Ibu saya yang mengurus perceraiannya. Dalam dokumen perceraian juga dilampirkan surat kesepakatan yang ditanda tangani oleh keduanya di atas meterai. Dokumen tersebut berisi kesepakatan bahwa rumah dan tanah yang orang tua beli setelah menikah, atas nama ibu saya, akan diberikan ke anak-anak dan tidak boleh dijual selama kedua orang tua masih hidup. Namun setelah akta cerai keluar, bapak saya berubah pikiran dan menuntut harta gono-gini. Dia pun menyobek-nyobek akta cerainya. Apakah bapak saya dapat menggugat rumah dan tanah tersebut? Jalur hukum apa yang bisa saya tempuh ?</p>\r\n', 1, '2022-05-27', '13:26:49'),
(13, 'Kiku', '2323', 'asdasd', 'alvika@hsjjs.hsj', '08995', 0, 'WhatsApp_Image_2022-05-19_at_14_50_57.jpeg', 8, 'KONSULTASI HUKUM MENGENAI LANGKAH HUKUM JIKA PERJANJIAN PEMBAGIAN HARTA GONO-GINI DISOBEK-SOBEK ?', '<p>Orang tua saya sudah resmi bercerai sejak tahun lalu. Keduanya adalah PNS, namun bapak saya sudah pensiun. Ibu saya yang mengurus perceraiannya. Dalam dokumen perceraian juga dilampirkan surat kesepakatan yang ditanda tangani oleh keduanya di atas meterai. Dokumen tersebut berisi kesepakatan bahwa rumah dan tanah yang orang tua beli setelah menikah, atas nama ibu saya, akan diberikan ke anak-anak dan tidak boleh dijual selama kedua orang tua masih hidup. Namun setelah akta cerai keluar, bapak saya berubah pikiran dan menuntut harta gono-gini. Dia pun menyobek-nyobek akta cerainya. Apakah bapak saya dapat menggugat rumah dan tanah tersebut? Jalur hukum apa yang bisa saya tempuh ?</p>\r\n', 1, '2022-05-28', '13:07:27'),
(14, 'tes', '232323', 'te', 'aa@software-jasa.com', '08979382175', 1, 'd486f1f1-cae3-4e99-9a10-a4fd4609ae58-removebg-preview.png', 6, 'aaa', '<p>aaa</p>\r\n', 1, '2022-06-05', '12:27:04'),
(15, 'aa', '232323', 'aa', 'alvikaajiandrianty@gmail.com', '08979382175', 1, 'pexels-expect-best-323705.jpg', 7, 'aa', '<p>aa</p>\r\n', 1, '2022-06-05', '12:28:26');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `first_name`, `last_name`, `username`, `email`, `password`) VALUES
(90, 'alvika', 'prahasta', 'alvika', 'alvika@gmail.com', '2f06a87d2b049973067695328b013230'),
(91, 'galih', 'galih', 'galih', 'galih@gmail.com', '027dc74f0bbf09a61a36ec7f0d9e08ca');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `jawab_konsultasi`
--
ALTER TABLE `jawab_konsultasi`
  ADD PRIMARY KEY (`id_jawab_konsultasi`);

--
-- Indeks untuk tabel `kategori_konsultasi`
--
ALTER TABLE `kategori_konsultasi`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `konsultasi`
--
ALTER TABLE `konsultasi`
  ADD PRIMARY KEY (`id_konsultasi`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `jawab_konsultasi`
--
ALTER TABLE `jawab_konsultasi`
  MODIFY `id_jawab_konsultasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `kategori_konsultasi`
--
ALTER TABLE `kategori_konsultasi`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `konsultasi`
--
ALTER TABLE `konsultasi`
  MODIFY `id_konsultasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
