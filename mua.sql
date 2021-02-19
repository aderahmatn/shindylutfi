-- -------------------------------------------------------------
-- TablePlus 3.12.2(358)
--
-- https://tableplus.com/
--
-- Database: mua
-- Generation Time: 2021-02-19 6:23:36.9150 PM
-- -------------------------------------------------------------


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


CREATE TABLE `bayar` (
  `id_bayar` varchar(20) NOT NULL,
  `id_transaksi` varchar(20) DEFAULT NULL,
  `id_bank` varchar(20) DEFAULT NULL,
  `tanggal_bayar` date DEFAULT NULL,
  `bukti_bayar` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_bayar`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

CREATE TABLE `customer` (
  `id_customer` varchar(20) NOT NULL,
  `nama_lengkap` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(32) DEFAULT NULL,
  `telepon` varchar(13) DEFAULT NULL,
  `alamat` text,
  `tanggal_daftar` date DEFAULT NULL,
  PRIMARY KEY (`id_customer`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

CREATE TABLE `detail_transaksi` (
  `id_detail_transaksi` varchar(20) NOT NULL,
  `id_transaksi` varchar(20) DEFAULT NULL,
  `id_user` varchar(20) DEFAULT NULL,
  `tanggal_acara` date DEFAULT NULL,
  `alamat_acara` text,
  `id_petugas` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_detail_transaksi`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

CREATE TABLE `kategori` (
  `id_kategori` varchar(200) NOT NULL,
  `nama_kategori` varchar(50) DEFAULT NULL,
  `deleted` int DEFAULT NULL,
  PRIMARY KEY (`id_kategori`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

CREATE TABLE `kontak` (
  `id_kontak` bigint unsigned NOT NULL AUTO_INCREMENT,
  `telepon` varchar(20) DEFAULT NULL,
  `email` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `instagram` varchar(20) DEFAULT NULL,
  `twitter` varchar(20) DEFAULT NULL,
  `youtube` varchar(20) DEFAULT NULL,
  `facebook` varchar(20) DEFAULT NULL,
  `alamat` text,
  PRIMARY KEY (`id_kontak`),
  UNIQUE KEY `id_kontak` (`id_kontak`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

CREATE TABLE `paket` (
  `id_paket` varchar(20) NOT NULL,
  `nama_paket` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `id_kategori` varchar(20) DEFAULT NULL,
  `deskripsi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `harga` int DEFAULT NULL,
  `foto` varchar(100) DEFAULT NULL,
  `deleted` int DEFAULT NULL,
  PRIMARY KEY (`id_paket`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

CREATE TABLE `petugas` (
  `id_petugas` varchar(20) NOT NULL,
  `nama_petugas` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `telepon` varchar(13) DEFAULT NULL,
  `alamat` text,
  PRIMARY KEY (`id_petugas`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

CREATE TABLE `portofolio` (
  `id_portofolio` varchar(20) NOT NULL,
  `image` varchar(50) DEFAULT NULL,
  `id_kategori` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_portofolio`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

CREATE TABLE `transaksi` (
  `id_transaksi` varchar(20) NOT NULL,
  `id_customer` varchar(20) DEFAULT NULL,
  `status_transaksi` varchar(20) DEFAULT NULL,
  `tanggal_transaksi` date DEFAULT NULL,
  `no_transaksi` varchar(20) DEFAULT NULL,
  `id_paket` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_transaksi`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

CREATE TABLE `user` (
  `id_user` varchar(20) NOT NULL,
  `nama_lengkap` varchar(50) DEFAULT NULL,
  `email` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `telepon` varchar(13) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `status_aktif` varchar(5) DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(32) DEFAULT NULL,
  `level` varchar(10) DEFAULT NULL,
  `tanggal_daftar` date DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

CREATE TABLE `utility` (
  `id_utility` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nama_website` text,
  `judul_hero` text,
  `sub_judul_hero` text,
  `image_hero` text,
  PRIMARY KEY (`id_utility`),
  UNIQUE KEY `id_utility` (`id_utility`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `bayar` (`id_bayar`, `id_transaksi`, `id_bank`, `tanggal_bayar`, `bukti_bayar`) VALUES
('byr-602ecc8a9c251', 'tr-602ecc660c198', 'bca', '2021-02-19', 'img-602ecc8a9862f.jpeg'),
('byr-602edf5fb2244', 'tr-602ed88d7f9ba', 'mandiri', '2021-02-11', 'img-602edf5fac2fd.jpg'),
('byr-602f999d32dd9', 'tr-602f9916d2c2a', 'mandiri', '2021-02-11', 'img-602f999d2b7e9.jpeg');

INSERT INTO `customer` (`id_customer`, `nama_lengkap`, `email`, `username`, `password`, `telepon`, `alamat`, `tanggal_daftar`) VALUES
('cs-602900d6e9279', 'ade rahmat nurdiyana', 'ade.rahmat@gmail.com', 'aderahmatn', '21232f297a57a5a743894a0e4a801fc3', '087776451664', 'cisereh tangerang', '2021-02-14'),
('cs-602ed87e94a3f', 'fuja triyanti', 'fuja.fufu@gmail.com', 'fuja', '21232f297a57a5a743894a0e4a801fc3', '0811127366178', 'cikupa tangerang', '2021-02-18'),
('cs-602f9b6bbe153', 'bJeGkSgIKq', 'lg2iaMqq4C@msms.com', 'koko', '21232f297a57a5a743894a0e4a801fc3', 'PN2x2ENFlJ', 'Ua58TxzIJ5', '2021-02-19');

INSERT INTO `detail_transaksi` (`id_detail_transaksi`, `id_transaksi`, `id_user`, `tanggal_acara`, `alamat_acara`, `id_petugas`) VALUES
('det-602ecc69e9874', 'tr-602ecc660c198', 'user-602ec669c6f55', '2021-03-23', 'ballroom hotel shangrila jakarta pusat', 'pg-321hdasb'),
('det-602ed8bc34e99', 'tr-602ed88d7f9ba', NULL, '2021-04-27', 'jln. wingko babat no.32 rt.002 rw.11 rajeg tangerang', NULL),
('det-602f9924b64ac', 'tr-602f9916d2c2a', 'user-602ec669c6f55', '2021-03-03', 'nusa dua beach hotel bali', 'petugas-602ed47f9c4b');

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`, `deleted`) VALUES
('kt-6023572325df2', 'Basic Makeup', '0'),
('kt-6023573a7e192', 'Special Occasion', '0'),
('kt-60235747c353b', 'Prewedding', '0'),
('kt-602357595bc65', 'Bridal Makeup', '0'),
('kt-6023576b43298', 'Fashion', '0'),
('kt-602f9b2a9e290', 'kkkkkkkkk', '0');

INSERT INTO `kontak` (`id_kontak`, `telepon`, `email`, `instagram`, `twitter`, `youtube`, `facebook`, `alamat`) VALUES
('1', '087776451664', 'shindy.lutfi@gmail.com', 'Shindylutfi_mua', 'Shindylutfi', 'Shindylutfi_mua', 'Shindy Lutfi', 'cisereh tangerang banten');

INSERT INTO `paket` (`id_paket`, `nama_paket`, `id_kategori`, `deskripsi`, `harga`, `foto`, `deleted`) VALUES
('pkt-602358254bcdf', 'Paket Wisuda', 'kt-6023572325df2', 'Kamu mau mendatangi acara penting? Acara Wisuda? atau sedang jadi brides maid temen kamu? \r\n\r\n book now Ladies!', '550000', 'img-602358254ad88.jpeg', '0'),
('pkt-60235907061d6', 'Paket Bridesmaids', 'kt-6023572325df2', 'Kamu mau mendatangi acara penting? Acara Wisuda? atau sedang jadi brides maid temen kamu? \r\n\r\n book now Ladies!', '550000', 'img-6023590704c12.jpeg', '0'),
('pkt-60235a01648d4', 'Paket Lamaran', 'kt-6023573a7e192', 'Aku bakal membuat kamu tampil cantik dan flawless di hari spesial kamu Ladies!! Apapun acara dan pestanya seperti  Lamaran, Tunangan, Sweet 17/Birthday Party, Mama/Sister of the Bride dan lainnya. Silahkan pilih paket yang kamu mau yaa..', '1200000', 'img-60235a0163953.jpeg', '0'),
('pkt-60235a520a83d', 'Paket Tunangan', 'kt-6023573a7e192', 'Aku bakal membuat kamu tampil cantik dan flawless di hari spesial kamu Ladies!! Apapun acara dan pestanya seperti  Lamaran, Tunangan, Sweet 17/Birthday Party, Mama/Sister of the Bride dan lainnya. Silahkan pilih paket yang kamu mau yaa..', '1200000', 'img-60235a52098cd.jpeg', '0'),
('pkt-60235a9fbfe84', 'Paket Prewedding', 'kt-60235747c353b', 'Aku bakal membuat kamu tampil cantik dan flawless di hari spesial kamu Ladies!! Apapun acara dan pestanya seperti  Lamaran, Tunangan, Sweet 17/Birthday Party, Mama/Sister of the Bride dan lainnya. Silahkan pilih paket yang kamu mau yaa..', '1000000', 'img-60235a9fbf216.jpeg', '0'),
('pkt-602f9dab17991', 'Paket Wedding', 'kt-6023573a7e192', 'makeup nikahan', '10000000', 'img-602f9dab16325.jpeg', '0');

INSERT INTO `petugas` (`id_petugas`, `nama_petugas`, `email`, `telepon`, `alamat`) VALUES
('petugas-602ed47f9c4b', 'rosalinda', 'rosalinda.1212@gmail.com', '08721366178', 'kawidaran '),
('pg-321hdasb', 'leni agustina', 'leni.agus@gmail.com', '087772163677', 'balaraja');

INSERT INTO `portofolio` (`id_portofolio`, `image`, `id_kategori`) VALUES
('por-60279557b33f2', 'img-602798cedcaf7.jpg', 'kt-6023572325df2'),
('por-602795ef8d535', 'img-60279557b1248.jpeg', 'kt-602357595bc65'),
('por-602798f393f65', 'img-602798f392905.jpeg', 'kt-6023573a7e192'),
('por-602799047844b', 'img-6027990477bc6.jpeg', 'kt-6023572325df2');

INSERT INTO `transaksi` (`id_transaksi`, `id_customer`, `status_transaksi`, `tanggal_transaksi`, `no_transaksi`, `id_paket`) VALUES
('tr-602ecc660c198', 'cs-602900d6e9279', 'pesanan diproses', '2021-02-18', 'nt-602ecc69e9116', 'pkt-602358254bcdf'),
('tr-602ed88d7f9ba', 'cs-602ed87e94a3f', 'menunggu konfirmasi', '2021-02-18', 'nt-602ed8bc346a0', 'pkt-60235a01648d4'),
('tr-602f9916d2c2a', 'cs-602900d6e9279', 'pesanan diproses', '2021-02-19', 'nt-602f9924ae5c9', 'pkt-60235a01648d4');

INSERT INTO `user` (`id_user`, `nama_lengkap`, `email`, `telepon`, `alamat`, `status_aktif`, `username`, `password`, `level`, `tanggal_daftar`) VALUES
('user-602ec641560ba', 'Shindy Lutfi', 'shindy.lutfi@gmail.com', '0899282712', 'rajeg tangerang', '1', 'shindylutfi', '21232f297a57a5a743894a0e4a801fc3', 'pemilik', '2021-02-18'),
('user-602ec669c6f55', 'Disa Anggara', 'disa.ang@gmail.com', '081112748291', 'bitung, tangerang', '1', 'disa', '21232f297a57a5a743894a0e4a801fc3', 'admin', '2021-02-18');

INSERT INTO `utility` (`id_utility`, `nama_website`, `judul_hero`, `sub_judul_hero`, `image_hero`) VALUES
('1', 'ShindyLutfi', 'Shindy Lutfi Makeup Artist Tangerang, Indonesia', 'Magical hands on your face for a mesmerizing result.', 'img-602f9c2fdd5d1.jpg');



/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;