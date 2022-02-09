-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 09, 2022 at 05:28 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ksbnpapua`
--

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `gallerygambar` varchar(255) DEFAULT NULL,
  `idordergallery` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `gallerygambar`, `idordergallery`) VALUES
(28, '1643402350_d4266399ec78d02b372d.jpg', 12);

-- --------------------------------------------------------

--
-- Table structure for table `newsevents`
--

CREATE TABLE `newsevents` (
  `newsevents_id` int(11) NOT NULL,
  `judul` text DEFAULT NULL,
  `slug` text DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `kategori` enum('1','2') DEFAULT NULL,
  `keterangan` text DEFAULT NULL,
  `users_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `newsevents`
--

INSERT INTO `newsevents` (`newsevents_id`, `judul`, `slug`, `gambar`, `kategori`, `keterangan`, `users_id`) VALUES
(1, 'Budaya Indonesia Dipertahankan, Keutuhan Bangsa Terjaga', 'Budaya-Indonesia-Dipertahankan-Keutuhan-Bangsa-Terjaga', '1643021567_14d813a76a7d6f397524.jpg', '1', '<p style=\"text-align: justify; \"><span style=\"color: rgb(0, 0, 0); font-family: Roboto, sans-serif; font-size: 14px;\">JAKARTA – Pengembangan budaya Indonesia dinilai masih belum maksimal. Padahal, UU No. 5 Tahun 2017 tentang Pemajuan Kebudayaan sudah dikeluarkan pemerintah sejak April 2017.</span></p><p style=\"text-align: justify; border: 0px; font-family: Roboto, sans-serif; font-size: 14px; outline: 0px; -webkit-font-smoothing: antialiased; overflow-wrap: break-word; padding: 0px 0px 30px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: rgb(0, 0, 0);\"></p><p style=\"text-align: justify; border: 0px; font-family: Roboto, sans-serif; font-size: 14px; outline: 0px; -webkit-font-smoothing: antialiased; overflow-wrap: break-word; padding: 0px 0px 30px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: rgb(0, 0, 0);\">Pernyataan itu disampaikan Ketua Umum Komite Seni Budaya Nusantara (KSBN) Hendardji Soepandji saat menerima Dewan Anggota Pengawas RRI Hasto Kuncoro di Rumah Budaya KSBN, kawasan Mandor Hasan, Cipayung, Jakarta Timur, Sabtu (16/10).</p><p style=\"text-align: justify; border: 0px; font-family: Roboto, sans-serif; font-size: 14px; outline: 0px; -webkit-font-smoothing: antialiased; overflow-wrap: break-word; padding: 0px 0px 30px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: rgb(0, 0, 0);\">“Selama tiga tahun penerbitan UU No. 5 Tahun 2017 tentang Pemajuan Kebudayaa ini ternyata kurang mendapat respons yang memadai. Penekanan Bapak Presiden (Joko Widodo) cukup bagus, Tapi setelah itu kok kurang berkembang. Ini seperti teriakan di padang pasir, teriakan itu tidak terdengar,” ujar Hendardji.</p><p style=\"text-align: justify; border: 0px; font-family: Roboto, sans-serif; font-size: 14px; outline: 0px; -webkit-font-smoothing: antialiased; overflow-wrap: break-word; padding: 0px 0px 30px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: rgb(0, 0, 0);\">Hendardji menilai pengembangan kebudayaan itu sangat penting dilakukan karena itu menyangkut jati diri bangsa. Bahkan, implementasi Pancasila pun ada di dalam seni budaya.</p><p style=\"text-align: justify; border: 0px; font-family: Roboto, sans-serif; font-size: 14px; outline: 0px; -webkit-font-smoothing: antialiased; overflow-wrap: break-word; padding: 0px 0px 30px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: rgb(0, 0, 0);\">“Keutuhan bangsa itu akan terjaga kalau seni budaya dipertahankan. Hoaks itu ada karena budaya sopan santun kurang dibumikan di dalam kehidupan sehari-hari,” ujar mantan Danpuspomad tersebut.</p><p style=\"text-align: justify; border: 0px; font-family: Roboto, sans-serif; font-size: 14px; outline: 0px; -webkit-font-smoothing: antialiased; overflow-wrap: break-word; padding: 0px 0px 30px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: rgb(0, 0, 0);\">Karena itu, Hendardji mengajak pemerintah dan masyarakat Indonesia untuk terus menjaga budaya bangsa, termasuk budaya sopan santun. Sebab, budaya tersebut sangat penting untuk menunjukkan jati diri bangsa.</p><p style=\"text-align: justify; border: 0px; font-family: Roboto, sans-serif; font-size: 14px; outline: 0px; -webkit-font-smoothing: antialiased; overflow-wrap: break-word; padding: 0px 0px 30px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: rgb(0, 0, 0);\">“Satu contoh lagi, Bapak Presiden juga pernah mengatakan bahwa sarung akan menjadi pakaian tradisi. Tapi, mana sih sarung itu dipakai harian oleh masyarakat Indonesia,” tutur Hendardji.</p>', 1),
(2, 'KSBN Bangun Rumah Produksi Seni Budaya', 'KSBN-Bangun-Rumah-Produksi-Seni-Budaya', '1643021633_ff88e1b7a0e4c83eb886.jpg', '1', '<p style=\"text-align: justify; \">JAKARTA – Pengembangan budaya Indonesia dinilai masih belum maksimal. Padahal, UU No. 5 Tahun 2017 tentang Pemajuan Kebudayaan sudah dikeluarkan pemerintah sejak April 2017.</p><p style=\"text-align: justify; border: 0px; outline: 0px; -webkit-font-smoothing: antialiased; overflow-wrap: break-word; padding: 0px 0px 30px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px;\"></p><p style=\"text-align: justify; border: 0px; outline: 0px; -webkit-font-smoothing: antialiased; overflow-wrap: break-word; padding: 0px 0px 30px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px;\">Pernyataan itu disampaikan Ketua Umum Komite Seni Budaya Nusantara (KSBN) Hendardji Soepandji saat menerima Dewan Anggota Pengawas RRI Hasto Kuncoro di Rumah Budaya KSBN, kawasan Mandor Hasan, Cipayung, Jakarta Timur, Sabtu (16/10).</p><p style=\"text-align: justify; border: 0px; outline: 0px; -webkit-font-smoothing: antialiased; overflow-wrap: break-word; padding: 0px 0px 30px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px;\">“Selama tiga tahun penerbitan UU No. 5 Tahun 2017 tentang Pemajuan Kebudayaa ini ternyata kurang mendapat respons yang memadai. Penekanan Bapak Presiden (Joko Widodo) cukup bagus, Tapi setelah itu kok kurang berkembang. Ini seperti teriakan di padang pasir, teriakan itu tidak terdengar,” ujar Hendardji.</p><p style=\"text-align: justify; border: 0px; outline: 0px; -webkit-font-smoothing: antialiased; overflow-wrap: break-word; padding: 0px 0px 30px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px;\">Hendardji menilai pengembangan kebudayaan itu sangat penting dilakukan karena itu menyangkut jati diri bangsa. Bahkan, implementasi Pancasila pun ada di dalam seni budaya.</p><p style=\"text-align: justify; border: 0px; outline: 0px; -webkit-font-smoothing: antialiased; overflow-wrap: break-word; padding: 0px 0px 30px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px;\">“Keutuhan bangsa itu akan terjaga kalau seni budaya dipertahankan. Hoaks itu ada karena budaya sopan santun kurang dibumikan di dalam kehidupan sehari-hari,” ujar mantan Danpuspomad tersebut.</p><p style=\"text-align: justify; border: 0px; outline: 0px; -webkit-font-smoothing: antialiased; overflow-wrap: break-word; padding: 0px 0px 30px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px;\">Karena itu, Hendardji mengajak pemerintah dan masyarakat Indonesia untuk terus menjaga budaya bangsa, termasuk budaya sopan santun. Sebab, budaya tersebut sangat penting untuk menunjukkan jati diri bangsa.</p><p style=\"text-align: justify; border: 0px; outline: 0px; -webkit-font-smoothing: antialiased; overflow-wrap: break-word; padding: 0px 0px 30px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px;\">“Satu contoh lagi, Bapak Presiden juga pernah mengatakan bahwa sarung akan menjadi pakaian tradisi. Tapi, mana sih sarung itu dipakai harian oleh masyarakat Indonesia,” tutur Hendardji.</p>', 1),
(3, 'Wagub DKI Resmikan Rumah Budaya KSBN', 'Wagub-DKI-Resmikan-Rumah-Budaya-KSBN', '1643021679_cad01f4d8b49513db567.jpg', '2', '<p><div style=\"text-align: justify;\"><span style=\"color: rgb(0, 0, 0); font-family: Roboto, sans-serif; font-size: 14px;\">JAKARTA – Wakil Gubernur DKI Jakarta Ahmad Riza Patria membuka resmi Rumah Budaya KSBN di kawasan Mandor Hasan, Cipayung, Jakarta Timur, Minggu (13/9). Dia berharap rumah budaya ini bisa memberikan kontribusi positif bagi pengembangan seni budaya Indonesia.</span></div><span style=\"color: rgb(0, 0, 0); font-family: Roboto, sans-serif; font-size: 14px;\"><div style=\"text-align: justify;\">Dalam sambutannya, Wagub Ahmad Riza mengatakan, sebagai kota yang menyimpan banyak warisan sejarah, Jakarta memiliki aneka warisan lokal seni budaya. Mulai dari seni musik, tari, seni rupa, dan teater. Bahkan, aneka kuliner khas Jakarta pun menjadi daya tarik dan daya pikat destinasi wisata.</div></span><span style=\"color: rgb(0, 0, 0); font-family: Roboto, sans-serif; font-size: 14px;\"><div style=\"text-align: justify;\">“Saya berharap KSBN mampu memberikan kontribusi terhadap predikat Kota Jakarta sebagai barometer budaya di Indonesia. Selain itu, kebudayaan di Jakarta juga diharapkan dapat berkontribusi dalam membangun peradaban dunia,” ujar Ahmad Riza saat pembukaan Rumah Budaya KSBN yang ditandai pemotongan tumpeng dan pita bersama Ketua Umum KSBN Hendardji Soepandji dan Sekjen Enny Supriati Sardiyarso.</div></span><span style=\"color: rgb(0, 0, 0); font-family: Roboto, sans-serif; font-size: 14px;\"><div style=\"text-align: justify;\">Menurut Reza, ibu kota Jakarta tidak hanya menjadi pusat pertemuan seluruh aspek kehidupan berbangsa, tetapi telah melangkah menjadi salah satu Kota Peradaban Dunia tanpa kehilangan jati dirinya. “Yang luar biasa, Indonesia punya banyak seni budaya, dan keberagaman perbedaan itu menjadi keberkahan dan kekayaan tersendiri sebagai sebuah bangsa,” ujar Wagub Ariza.</div></span></p>', 1),
(4, 'testing ', 'testing', '1643030394_0ee04457dc7460f724a6.jpg', '2', '<p>tes</p>', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ordergallery`
--

CREATE TABLE `ordergallery` (
  `idordergallery` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `judulgallery` varchar(255) DEFAULT NULL,
  `gstatus` enum('1','2') DEFAULT NULL,
  `sluggallery` text DEFAULT NULL,
  `sampul` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ordergallery`
--

INSERT INTO `ordergallery` (`idordergallery`, `users_id`, `judulgallery`, `gstatus`, `sluggallery`, `sampul`) VALUES
(1, 1, 'Tari Bali di IFOT 2019 Maroko', '2', 'tari-bali-di-ifot-2019-maroko', 'default.jpg'),
(2, 1, 'KSBN – Cairo and Alexandria Ramadhan Festival 2018', '2', 'ksbn-cairo-and-alexandria-ramadhan-festival-2018', 'default.jpg'),
(3, 1, 'KSBN – Cairo and Alexandria Ramadhan Festival PART II 2018', '2', 'ksbn-cairo-and-alexandria-ramadhan-festival-part-ii-2018', 'default.jpg'),
(10, 1, 'phb - ktp babe gue', '2', 'phb-ktp-babe-gue', 'default.jpg'),
(12, 1, 'Maternal disaster', '1', 'maternal-disaster', 'default.jpg'),
(13, 1, 'TEMU KANGEN', '2', 'temu-kangen', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `profils`
--

CREATE TABLE `profils` (
  `id` int(11) NOT NULL,
  `profile` text DEFAULT NULL,
  `visi` text DEFAULT NULL,
  `misi` text DEFAULT NULL,
  `users_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `profils`
--

INSERT INTO `profils` (`id`, `profile`, `visi`, `misi`, `users_id`) VALUES
(1, '<p style=\"text-align: justify; \">\"Perkumpulan ini dibentuk untuk menjembatani antara kepentingan pemerintah dan kepentingan masyarakat dalam pembangunan berbasis budaya, serta menerjemahkan UU No. 5/2017 agar Indonesia memiliki ketahanan budaya dan mampu memberikan kontribusi di tengah peradaban dunia,\" ujarnya seusai melantik Ketua DPD KSBN Papua Klemen Tinal di Jayapura, Papua, akhir pekan lalu.</p><p><br></p><p>Hendardji juga sangat mengapresiasi Klemen yang siap memimpin KSBN Papua di tengah kesibukannya sebagai Wakil Gubernur Papua. Menurutnya, pembangunan nasional dan daerah akan berjalan baik apabila pemerintah serta masyarakat bersinergi dalam pembangunan.</p><p><br></p><p>\"Dalam meningkatkan daya saing global di kancah internasional, maka melalui Bapak Gubernur, Bupati, dan Wali Kota se-Papua, KSBN berharap agar nilai-nilai tradisi yang hidup di bumi cendrawasih terus tumbuh dan berkembang memaknai kehidupan di Papua sebagai bagian dari jati diri bangsa yang sesuai dengan UU No. 5/2017,\" ujarnya.</p>', '<ul><li style=\"text-align: justify;\">Menjadi Organisasi Seni Budaya Nusantara unggulan di forum Nasional dan Internasional.</li></ul>', '<ul><li style=\"text-align: justify;\">Menjadi wadah bagi Asosiasi / Komunitas seni dan budaya diseluruh provinsi di Indonesia.</li><li style=\"text-align: justify;\">Melestarikan dan mengembangkan Seni dan nilai-nilai budaya Nusantara secara bersama-sama.</li><li style=\"text-align: justify;\">Melestarikan seluruh seni budaya tradisional Nusantara baik di dalam maupun di luar negeri.</li><li style=\"text-align: justify;\">Mempertahankan warisan seni budaya tradisional Nusantara dari claim negara lain.</li><li style=\"text-align: justify;\">Melanjutkan industri seni budaya tradisional Nusantara yang memegang seni budaya Nusantara.</li></ul>', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `users_id` int(11) NOT NULL,
  `username` varchar(75) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`users_id`, `username`, `password`, `email`) VALUES
(1, 'Administrator', '$2y$10$V6/7ro7ycsZE7e6J4nC1.u4K/2oPYTEwhQyieW7vE4oEBcL8tIE.u', 'kasbnpapua@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `videogallery`
--

CREATE TABLE `videogallery` (
  `id` int(11) NOT NULL,
  `video` varchar(255) DEFAULT NULL,
  `idordergallery` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `videogallery`
--

INSERT INTO `videogallery` (`id`, `video`, `idordergallery`) VALUES
(1, 'https://www.youtube.com/embed/aF9jaSP_RDg', 1),
(2, 'https://www.youtube.com/embed/FZfFsiESFyM', 2),
(3, 'https://www.youtube.com/embed/EeXJg5WDLjg', 3),
(4, 'https://www.youtube.com/embed/NTyM7KvwhIw', 10),
(5, 'https://www.youtube.com/embed/eRThScCePWY', 13);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_gallery_ordergallery1_idx` (`idordergallery`);

--
-- Indexes for table `newsevents`
--
ALTER TABLE `newsevents`
  ADD PRIMARY KEY (`newsevents_id`),
  ADD KEY `fk_newsevents_users1_idx` (`users_id`);

--
-- Indexes for table `ordergallery`
--
ALTER TABLE `ordergallery`
  ADD PRIMARY KEY (`idordergallery`),
  ADD KEY `fk_ordergallery_users1_idx` (`users_id`);

--
-- Indexes for table `profils`
--
ALTER TABLE `profils`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_profiles_users_idx` (`users_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`users_id`);

--
-- Indexes for table `videogallery`
--
ALTER TABLE `videogallery`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_videogallery_ordergallery1_idx` (`idordergallery`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `newsevents`
--
ALTER TABLE `newsevents`
  MODIFY `newsevents_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ordergallery`
--
ALTER TABLE `ordergallery`
  MODIFY `idordergallery` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `profils`
--
ALTER TABLE `profils`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `users_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `videogallery`
--
ALTER TABLE `videogallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `gallery`
--
ALTER TABLE `gallery`
  ADD CONSTRAINT `fk_gallery_ordergallery1` FOREIGN KEY (`idordergallery`) REFERENCES `ordergallery` (`idordergallery`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `newsevents`
--
ALTER TABLE `newsevents`
  ADD CONSTRAINT `fk_newsevents_users1` FOREIGN KEY (`users_id`) REFERENCES `users` (`users_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `ordergallery`
--
ALTER TABLE `ordergallery`
  ADD CONSTRAINT `fk_ordergallery_users1` FOREIGN KEY (`users_id`) REFERENCES `users` (`users_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `profils`
--
ALTER TABLE `profils`
  ADD CONSTRAINT `fk_profiles_users` FOREIGN KEY (`users_id`) REFERENCES `users` (`users_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `videogallery`
--
ALTER TABLE `videogallery`
  ADD CONSTRAINT `fk_videogallery_ordergallery1` FOREIGN KEY (`idordergallery`) REFERENCES `ordergallery` (`idordergallery`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
