/*
SQLyog Ultimate v12.4.3 (64 bit)
MySQL - 10.1.32-MariaDB : Database - db_sistem_informasi_kepegawaian
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_sistem_informasi_kepegawaian` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `db_sistem_informasi_kepegawaian`;

/*Table structure for table `tbl_absensi` */

DROP TABLE IF EXISTS `tbl_absensi`;

CREATE TABLE `tbl_absensi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nip_dosen` varchar(255) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `waktu_keterlambatan` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `nip_dosen` (`nip_dosen`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tbl_absensi` */

/*Table structure for table `tbl_autentikasi` */

DROP TABLE IF EXISTS `tbl_autentikasi`;

CREATE TABLE `tbl_autentikasi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `NIP` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `hak_akses` varchar(25) DEFAULT NULL,
  `login_terakhir` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `NIP` (`NIP`),
  CONSTRAINT `tbl_autentikasi_ibfk_1` FOREIGN KEY (`NIP`) REFERENCES `tbl_pegawai` (`NIP`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_autentikasi` */

insert  into `tbl_autentikasi`(`id`,`NIP`,`username`,`password`,`hak_akses`,`login_terakhir`) values 
(1,'15312371','karyaTio','karya','Admin','2018-07-19'),
(2,'15312644','ragil','ragil','Dosen','2018-07-20'),
(3,'1535154','riski','riski','Dosen','2018-07-23');

/*Table structure for table `tbl_fakultas` */

DROP TABLE IF EXISTS `tbl_fakultas`;

CREATE TABLE `tbl_fakultas` (
  `kd_fakultas` varchar(20) NOT NULL,
  `nama_fakultas` varchar(100) DEFAULT NULL,
  `id_jabatan` int(11) DEFAULT NULL,
  PRIMARY KEY (`kd_fakultas`),
  KEY `id_jabatan` (`id_jabatan`),
  CONSTRAINT `tbl_fakultas_ibfk_1` FOREIGN KEY (`id_jabatan`) REFERENCES `tbl_jabatan_struktural` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tbl_fakultas` */

insert  into `tbl_fakultas`(`kd_fakultas`,`nama_fakultas`,`id_jabatan`) values 
('FA-001','Husludin',8),
('FA-002','ICT',NULL),
('FA-003','Musalamiah',NULL);

/*Table structure for table `tbl_fakultas_pegawai` */

DROP TABLE IF EXISTS `tbl_fakultas_pegawai`;

CREATE TABLE `tbl_fakultas_pegawai` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nip_pegawai` varchar(255) DEFAULT NULL,
  `kd_fakultas` varchar(20) DEFAULT NULL,
  `sejak_tanggal` date DEFAULT NULL,
  `surat_keputusan` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `kd_fakultas` (`kd_fakultas`),
  KEY `nip_pegawai` (`nip_pegawai`),
  CONSTRAINT `tbl_fakultas_pegawai_ibfk_1` FOREIGN KEY (`kd_fakultas`) REFERENCES `tbl_fakultas` (`kd_fakultas`),
  CONSTRAINT `tbl_fakultas_pegawai_ibfk_2` FOREIGN KEY (`nip_pegawai`) REFERENCES `tbl_pegawai` (`NIP`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_fakultas_pegawai` */

insert  into `tbl_fakultas_pegawai`(`id`,`nip_pegawai`,`kd_fakultas`,`sejak_tanggal`,`surat_keputusan`) values 
(1,'15312371','FA-003','2018-07-28',NULL),
(2,'15312377','FA-003','2018-07-24',NULL),
(3,'15312360','FA-002','2018-07-22',NULL),
(4,'15312644','FA-001','2018-07-29',NULL),
(5,'1535154','FA-002','2018-07-29',NULL);

/*Table structure for table `tbl_golongan` */

DROP TABLE IF EXISTS `tbl_golongan`;

CREATE TABLE `tbl_golongan` (
  `kd_golongan` varchar(10) NOT NULL,
  `nama_golongan` varchar(255) DEFAULT NULL,
  `deskripsi` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`kd_golongan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tbl_golongan` */

insert  into `tbl_golongan`(`kd_golongan`,`nama_golongan`,`deskripsi`) values 
('golA','Golongan A',NULL),
('golB','Golongan B',NULL),
('golC','Golongan C',NULL),
('golD','Golongan D',NULL),
('golE','Golongan E',NULL);

/*Table structure for table `tbl_golongan_pegawai` */

DROP TABLE IF EXISTS `tbl_golongan_pegawai`;

CREATE TABLE `tbl_golongan_pegawai` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nip` varchar(255) DEFAULT NULL,
  `kd_golongan` varchar(10) DEFAULT NULL,
  `tanggal_mulai` date DEFAULT NULL,
  `sk_file` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `kd_golongan` (`kd_golongan`),
  KEY `nip` (`nip`),
  CONSTRAINT `tbl_golongan_pegawai_ibfk_1` FOREIGN KEY (`kd_golongan`) REFERENCES `tbl_golongan` (`kd_golongan`),
  CONSTRAINT `tbl_golongan_pegawai_ibfk_2` FOREIGN KEY (`nip`) REFERENCES `tbl_pegawai` (`NIP`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_golongan_pegawai` */

insert  into `tbl_golongan_pegawai`(`id`,`nip`,`kd_golongan`,`tanggal_mulai`,`sk_file`) values 
(1,'15312371','golA','2018-07-26','Hallo.txt'),
(2,'15312644','golD','2018-08-04',NULL);

/*Table structure for table `tbl_jabatan_fungsional_akademik` */

DROP TABLE IF EXISTS `tbl_jabatan_fungsional_akademik`;

CREATE TABLE `tbl_jabatan_fungsional_akademik` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_jabatan` varchar(255) DEFAULT NULL,
  `deskripsi` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_jabatan_fungsional_akademik` */

insert  into `tbl_jabatan_fungsional_akademik`(`id`,`nama_jabatan`,`deskripsi`) values 
(1,'Tidak Ada',NULL),
(2,'Asisten ahli',NULL),
(3,'Lektor',NULL),
(4,'Lektor Kepala',NULL),
(5,'Guru Besar',NULL);

/*Table structure for table `tbl_jabatan_fungsional_akademik_pegawai` */

DROP TABLE IF EXISTS `tbl_jabatan_fungsional_akademik_pegawai`;

CREATE TABLE `tbl_jabatan_fungsional_akademik_pegawai` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nip_pegawai` varchar(255) DEFAULT NULL,
  `jabFa` int(11) DEFAULT NULL,
  `sejak_tanggal` date DEFAULT NULL,
  `surat_keputusan` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `nip_pegawai` (`nip_pegawai`),
  KEY `jabFa` (`jabFa`),
  CONSTRAINT `tbl_jabatan_fungsional_akademik_pegawai_ibfk_1` FOREIGN KEY (`nip_pegawai`) REFERENCES `tbl_pegawai` (`NIP`),
  CONSTRAINT `tbl_jabatan_fungsional_akademik_pegawai_ibfk_2` FOREIGN KEY (`jabFa`) REFERENCES `tbl_jabatan_fungsional_akademik` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_jabatan_fungsional_akademik_pegawai` */

insert  into `tbl_jabatan_fungsional_akademik_pegawai`(`id`,`nip_pegawai`,`jabFa`,`sejak_tanggal`,`surat_keputusan`) values 
(1,'15312360',1,NULL,NULL),
(2,'15312371',2,NULL,NULL),
(3,'15312644',3,NULL,NULL),
(4,'15312644',1,NULL,NULL);

/*Table structure for table `tbl_jabatan_struktural` */

DROP TABLE IF EXISTS `tbl_jabatan_struktural`;

CREATE TABLE `tbl_jabatan_struktural` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_jabatan` varchar(255) DEFAULT NULL,
  `status` enum('0','1') DEFAULT NULL,
  `milik_dosen` enum('0','1') DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_jabatan_struktural` */

insert  into `tbl_jabatan_struktural`(`id`,`nama_jabatan`,`status`,`milik_dosen`) values 
(1,'Dosen Biasa','0','1'),
(2,'Kaprodi Agama','0','1'),
(3,'Kepala Biro','1','1'),
(4,'Kepala Bagian','0','1'),
(5,'Kepala Bagian Keuangan Perencanaan','1','0'),
(6,'Kepala Bagian Kepegawaian','1','0'),
(7,'Pegawai Biasa','0','0'),
(8,'Pimpinan Fakultas Ushuluddin','0','1');

/*Table structure for table `tbl_jabatan_struktural_pegawai` */

DROP TABLE IF EXISTS `tbl_jabatan_struktural_pegawai`;

CREATE TABLE `tbl_jabatan_struktural_pegawai` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nip_pegawai` varchar(255) DEFAULT NULL,
  `jab_str` int(11) DEFAULT NULL,
  `sejak_tanggal` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `jab_str` (`jab_str`),
  KEY `nip_pegawai` (`nip_pegawai`),
  CONSTRAINT `tbl_jabatan_struktural_pegawai_ibfk_1` FOREIGN KEY (`jab_str`) REFERENCES `tbl_jabatan_struktural` (`id`),
  CONSTRAINT `tbl_jabatan_struktural_pegawai_ibfk_2` FOREIGN KEY (`nip_pegawai`) REFERENCES `tbl_pegawai` (`NIP`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_jabatan_struktural_pegawai` */

insert  into `tbl_jabatan_struktural_pegawai`(`id`,`nip_pegawai`,`jab_str`,`sejak_tanggal`) values 
(1,'15312371',8,'2018-07-28'),
(2,'15312377',7,'2018-07-17'),
(3,'15312360',5,'2018-07-11'),
(4,'15312644',2,'2018-07-25'),
(5,'1535154',4,'2018-07-23');

/*Table structure for table `tbl_jenis_cuti` */

DROP TABLE IF EXISTS `tbl_jenis_cuti`;

CREATE TABLE `tbl_jenis_cuti` (
  `kd_cuti` varchar(10) NOT NULL,
  `nama_cuti` varchar(255) DEFAULT NULL,
  `lama_cuti` int(11) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`kd_cuti`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tbl_jenis_cuti` */

insert  into `tbl_jenis_cuti`(`kd_cuti`,`nama_cuti`,`lama_cuti`,`keterangan`) values 
('kc001','Alasan Penting',20,'Penting'),
('kc002','Alasan Sakit',10,'Sakit');

/*Table structure for table `tbl_kegiatan` */

DROP TABLE IF EXISTS `tbl_kegiatan`;

CREATE TABLE `tbl_kegiatan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_sk` varchar(15) DEFAULT NULL,
  `nip_pegawai` varchar(11) DEFAULT NULL,
  `id_rubrik` varchar(16) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_sk` (`id_sk`),
  KEY `nip_pegawai` (`nip_pegawai`),
  CONSTRAINT `tbl_kegiatan_ibfk_1` FOREIGN KEY (`id_sk`) REFERENCES `tbl_sk_pegawai` (`id`),
  CONSTRAINT `tbl_kegiatan_ibfk_2` FOREIGN KEY (`nip_pegawai`) REFERENCES `tbl_pegawai` (`NIP`)
) ENGINE=InnoDB AUTO_INCREMENT=201 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_kegiatan` */

insert  into `tbl_kegiatan`(`id`,`id_sk`,`nip_pegawai`,`id_rubrik`) values 
(198,'SK-20180729001','1535154','27'),
(199,'SK-20180729001','15312371','26'),
(200,'SK-20180729001','15312644','28');

/*Table structure for table `tbl_notifikasi_pegawai` */

DROP TABLE IF EXISTS `tbl_notifikasi_pegawai`;

CREATE TABLE `tbl_notifikasi_pegawai` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nip` varchar(255) DEFAULT NULL,
  `message` text,
  `viewed` tinyint(1) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `judul_kecil` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_notifikasi_pegawai` */

insert  into `tbl_notifikasi_pegawai`(`id`,`nip`,`message`,`viewed`,`created_at`,`judul`,`judul_kecil`) values 
(31,'15312644','Permohonan Cuti anda dengan alasan Menemani Istri Melahirkan telah di Terima',0,'2018-07-29 22:53:47','Permohonan Cuti','Di Terima'),
(32,'15312644','Jabatan struktural anda di rubah dari Kaprodi Agama menjadi Dosen Biasa sejak tanggal 2018-07-25',0,'2018-07-30 00:06:51','Jabatan Struktural',''),
(33,'1535154','Jabatan struktural anda di rubah dari Dosen Biasa menjadi Kaprodi Agama sejak tanggal 2018-07-23',0,'2018-07-30 00:06:52','Jabatan Struktural',''),
(34,'1535154','Jabatan struktural anda di rubah dari Kaprodi Agama menjadi Kepala Bagian sejak tanggal 2018-07-23',0,'2018-07-30 00:31:47','Jabatan Struktural',''),
(35,'15312644','Jabatan struktural anda di rubah dari Dosen Biasa menjadi Kaprodi Agama sejak tanggal 2018-07-25',0,'2018-07-30 00:31:48','Jabatan Struktural',''),
(36,'1535154','Anda dipermutasikan dari fakultas Musalamiah ke fakultas ICT sejak tanggal 2018-07-29',0,'2018-07-30 00:32:27','Permutasi','ICT');

/*Table structure for table `tbl_pegawai` */

DROP TABLE IF EXISTS `tbl_pegawai`;

CREATE TABLE `tbl_pegawai` (
  `NIP` varchar(255) NOT NULL,
  `nomor_kartu_pegawai` varchar(15) DEFAULT NULL,
  `nama_pegawai` varchar(255) DEFAULT NULL,
  `no_ktp` int(11) DEFAULT NULL,
  `no_telepon` varchar(15) DEFAULT NULL,
  `no_telepon_rumah` varchar(15) DEFAULT NULL,
  `alamat_tinggal` varchar(255) DEFAULT NULL,
  `alamat_tetap` varchar(255) DEFAULT NULL,
  `jenis_kelamin` varchar(15) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `tempat_lahir` varchar(255) DEFAULT NULL,
  `agama` varchar(25) DEFAULT NULL,
  `status_aktif` varchar(255) DEFAULT NULL,
  `status_kepegawaian` varchar(15) DEFAULT NULL,
  `foto_profil` varchar(50) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`NIP`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tbl_pegawai` */

insert  into `tbl_pegawai`(`NIP`,`nomor_kartu_pegawai`,`nama_pegawai`,`no_ktp`,`no_telepon`,`no_telepon_rumah`,`alamat_tinggal`,`alamat_tetap`,`jenis_kelamin`,`tanggal_lahir`,`tempat_lahir`,`agama`,`status_aktif`,`status_kepegawaian`,`foto_profil`,`email`) values 
('15312360','15351523','Ariana',1532415,'15351184','156851352','fdasfdsafsdf',NULL,'Wanita','2018-07-19','Tj.karang','Islam','Rajin Badai','0',NULL,NULL),
('15312371','12312312','Tio Saputra',123512,'135185312','08451235871',NULL,NULL,'Pria','2018-07-17','lampung','Islam','Aktif','1','ragil_super3.png','karya.tiosaputra@gmail.com'),
('15312377','12538513','Jefri Samuel',2147483647,'1115413','12311684138','Jl. Warnet Click',NULL,'Pria','2018-07-19','Rumah Sakit','Kristen','Sedang PKL','0',NULL,NULL),
('15312644','123123','Ragil Satrio Wicaksono',123512,'135185312','08451235871','',NULL,'Pria','2018-07-17','lampung','Islam','Aktif','1','ragil_super4.png','ragilsatrio20@gmail.com'),
('1535154','22323','Rizki Yulidar',15318125,'1355815','082307299224','Jl. Melati',NULL,'Pria','2018-07-09','Way Halim','Islam','Sedang Berlibur','1',NULL,'');

/*Table structure for table `tbl_pendidikan` */

DROP TABLE IF EXISTS `tbl_pendidikan`;

CREATE TABLE `tbl_pendidikan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nip_pegawai` varchar(255) DEFAULT NULL,
  `jenjang_pendidikan` varchar(3) DEFAULT NULL,
  `gelar` char(6) DEFAULT NULL,
  `nama_pendidikan` varchar(50) DEFAULT NULL,
  `tahun_angkatan` char(4) DEFAULT NULL,
  `tahun_lulus` char(4) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `nip_pegawai` (`nip_pegawai`),
  CONSTRAINT `tbl_pendidikan_ibfk_1` FOREIGN KEY (`nip_pegawai`) REFERENCES `tbl_pegawai` (`NIP`)
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_pendidikan` */

insert  into `tbl_pendidikan`(`id`,`nip_pegawai`,`jenjang_pendidikan`,`gelar`,`nama_pendidikan`,`tahun_angkatan`,`tahun_lulus`) values 
(52,'15312644','SD','SD','SD ABC','1997','2013'),
(53,'15312644','SMK','SMK','SMK DEF','2014','2015');

/*Table structure for table `tbl_permohonan_cuti` */

DROP TABLE IF EXISTS `tbl_permohonan_cuti`;

CREATE TABLE `tbl_permohonan_cuti` (
  `id` varchar(255) NOT NULL,
  `nip_dosen` varchar(255) DEFAULT NULL,
  `kd_jenis` varchar(255) DEFAULT NULL,
  `tgl_pengajuan` date DEFAULT NULL,
  `tgl_mulai` date DEFAULT NULL,
  `tgl_akhir` date DEFAULT NULL,
  `alasan` varchar(255) DEFAULT NULL,
  `id_status` int(11) DEFAULT NULL,
  `pesan` varchar(255) DEFAULT NULL,
  `upload_filesakit` varchar(255) DEFAULT NULL,
  `link_qrcode` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `nip_dosen` (`nip_dosen`),
  KEY `id_jenis` (`kd_jenis`),
  KEY `id_pengajuan` (`id_status`),
  CONSTRAINT `tbl_permohonan_cuti_ibfk_1` FOREIGN KEY (`nip_dosen`) REFERENCES `tbl_pegawai` (`NIP`),
  CONSTRAINT `tbl_permohonan_cuti_ibfk_2` FOREIGN KEY (`kd_jenis`) REFERENCES `tbl_jenis_cuti` (`kd_cuti`),
  CONSTRAINT `tbl_permohonan_cuti_ibfk_3` FOREIGN KEY (`id_status`) REFERENCES `tbl_status_pengajuan` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tbl_permohonan_cuti` */

insert  into `tbl_permohonan_cuti`(`id`,`nip_dosen`,`kd_jenis`,`tgl_pengajuan`,`tgl_mulai`,`tgl_akhir`,`alasan`,`id_status`,`pesan`,`upload_filesakit`,`link_qrcode`) values 
('SC-0002','15312644','kc001','2018-07-01','2018-07-31','2018-08-01','Menemani Istri Melahirkan',2,'Permohonan cuti telah divalidasi oleh pimpinan',NULL,'SC-0002.png'),
('SC-0003','15312644','kc001','2018-07-01','2018-07-31','2018-08-03','Ada Acara Keluarga',1,'Pengajuan Permohonan sedang di proses',NULL,'SC-0003.png');

/*Table structure for table `tbl_sk_pegawai` */

DROP TABLE IF EXISTS `tbl_sk_pegawai`;

CREATE TABLE `tbl_sk_pegawai` (
  `id` varchar(15) NOT NULL,
  `deskripsi` varchar(255) DEFAULT NULL,
  `sk_fileurl` varchar(255) DEFAULT NULL,
  `tgl_awal` date DEFAULT NULL,
  `tgl_akhir` date DEFAULT NULL,
  `maksud_perjalanan` varchar(255) DEFAULT NULL,
  `tempat_tujuan` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tbl_sk_pegawai` */

insert  into `tbl_sk_pegawai`(`id`,`deskripsi`,`sk_fileurl`,`tgl_awal`,`tgl_akhir`,`maksud_perjalanan`,`tempat_tujuan`) values 
('SK-20180729001','Pembinaan UKM 2018','SK-20180729001_upload.docx','2018-07-01','2018-07-31',NULL,NULL),
('ST-20180729002',NULL,'ST-20180729002_upload.docx','2018-07-01','2018-07-31','Maksud Dan Tujuan ','Jakarta');

/*Table structure for table `tbl_status_pengajuan` */

DROP TABLE IF EXISTS `tbl_status_pengajuan`;

CREATE TABLE `tbl_status_pengajuan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `status` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_status_pengajuan` */

insert  into `tbl_status_pengajuan`(`id`,`status`) values 
(1,'Pending'),
(2,'Acc Cuti'),
(3,'Di tolak');

/*Table structure for table `tbl_surat_tugas` */

DROP TABLE IF EXISTS `tbl_surat_tugas`;

CREATE TABLE `tbl_surat_tugas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_sk` varchar(15) DEFAULT NULL,
  `nip_pegawai` varchar(255) DEFAULT NULL,
  `id_rubrik` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_sk` (`id_sk`),
  KEY `nip_pegawai` (`nip_pegawai`),
  CONSTRAINT `tbl_surat_tugas_ibfk_1` FOREIGN KEY (`id_sk`) REFERENCES `tbl_sk_pegawai` (`id`),
  CONSTRAINT `tbl_surat_tugas_ibfk_2` FOREIGN KEY (`nip_pegawai`) REFERENCES `tbl_pegawai` (`NIP`)
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_surat_tugas` */

insert  into `tbl_surat_tugas`(`id`,`id_sk`,`nip_pegawai`,`id_rubrik`) values 
(49,'ST-20180729002','15312371',26),
(50,'ST-20180729002','15312644',27),
(51,'ST-20180729002','1535154',28);

/*Table structure for table `tblh_golongan` */

DROP TABLE IF EXISTS `tblh_golongan`;

CREATE TABLE `tblh_golongan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nip` varchar(255) DEFAULT NULL,
  `kd_golongan` varchar(255) DEFAULT NULL,
  `tgl_mulai` date DEFAULT NULL,
  `tgl_akhir` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `tblh_golongan` */

insert  into `tblh_golongan`(`id`,`nip`,`kd_golongan`,`tgl_mulai`,`tgl_akhir`) values 
(1,'15312644','golE','2018-07-29','2018-08-03'),
(2,'15312644','golD','2018-08-04',NULL);

/* Trigger structure for table `tbl_fakultas_pegawai` */

DELIMITER $$

/*!50003 DROP TRIGGER*//*!50032 IF EXISTS */ /*!50003 `tr_notif_permutasi` */$$

/*!50003 CREATE */ /*!50017 DEFINER = 'root'@'::1' */ /*!50003 TRIGGER `tr_notif_permutasi` AFTER UPDATE ON `tbl_fakultas_pegawai` FOR EACH ROW BEGIN
	insert into tbl_notifikasi_pegawai values (NULL, old.nip_pegawai,
	
	concat('Anda dipermutasikan dari fakultas ',
		(select nama_fakultas from tbl_fakultas where kd_fakultas = old.kd_fakultas),
		' ke fakultas ',
		(select nama_fakultas from tbl_fakultas where kd_fakultas = new.kd_fakultas),
		' sejak tanggal ', new.sejak_tanggal
	), 0, now(), 'Permutasi', (SELECT nama_fakultas FROM tbl_fakultas WHERE kd_fakultas = new.kd_fakultas));
    END */$$


DELIMITER ;

/* Trigger structure for table `tbl_golongan_pegawai` */

DELIMITER $$

/*!50003 DROP TRIGGER*//*!50032 IF EXISTS */ /*!50003 `tr_insert_golonan` */$$

/*!50003 CREATE */ /*!50017 DEFINER = 'root'@'::1' */ /*!50003 TRIGGER `tr_insert_golonan` AFTER INSERT ON `tbl_golongan_pegawai` FOR EACH ROW BEGIN
	INSERT INTO tblh_golongan SET NIP = new.nip, kd_golongan = new.kd_golongan, tgl_mulai = new.tanggal_mulai;

    END */$$


DELIMITER ;

/* Trigger structure for table `tbl_golongan_pegawai` */

DELIMITER $$

/*!50003 DROP TRIGGER*//*!50032 IF EXISTS */ /*!50003 `tr_update_golongan` */$$

/*!50003 CREATE */ /*!50017 DEFINER = 'root'@'::1' */ /*!50003 TRIGGER `tr_update_golongan` BEFORE UPDATE ON `tbl_golongan_pegawai` FOR EACH ROW BEGIN
	IF (new.kd_golongan != '') THEN 
		UPDATE tblh_golongan SET tgl_akhir =DATE_SUB(new.tanggal_mulai, INTERVAL 1 DAY) WHERE nip = new.nip ORDER BY id DESC LIMIT 1;
		
		INSERT INTO tblh_golongan SET NIP= new.nip, 
		kd_golongan = new.kd_golongan, 
		tgl_mulai = new.tanggal_mulai;
	END IF; 
    END */$$


DELIMITER ;

/* Trigger structure for table `tbl_golongan_pegawai` */

DELIMITER $$

/*!50003 DROP TRIGGER*//*!50032 IF EXISTS */ /*!50003 `tr_notif_golongan` */$$

/*!50003 CREATE */ /*!50017 DEFINER = 'root'@'::1' */ /*!50003 TRIGGER `tr_notif_golongan` AFTER UPDATE ON `tbl_golongan_pegawai` FOR EACH ROW BEGIN
    
	INSERT INTO tbl_notifikasi_pegawai VALUES (NULL, old.nip,
	
	CONCAT('Anda dipermutasikan berpindah golongan dari ',
		(SELECT nama_golongan FROM tbl_golongan WHERE kd_golongan = old.kd_golongan),
		' ke golongan : ',
		(SELECT nama_golongan FROM tbl_golongan WHERE kd_golongan = new.kd_golongan),
		' sejak tanggal ', new.tanggal_mulai
	), 0, NOW(), 'Golongan', (SELECT nama_golongan FROM tbl_golongan WHERE kd_golongan = new.kd_golongan));
	
    END */$$


DELIMITER ;

/* Trigger structure for table `tbl_jabatan_struktural_pegawai` */

DELIMITER $$

/*!50003 DROP TRIGGER*//*!50032 IF EXISTS */ /*!50003 `tr_notif_jabatan_struktural` */$$

/*!50003 CREATE */ /*!50017 DEFINER = 'root'@'::1' */ /*!50003 TRIGGER `tr_notif_jabatan_struktural` AFTER UPDATE ON `tbl_jabatan_struktural_pegawai` FOR EACH ROW BEGIN
    
	INSERT INTO tbl_notifikasi_pegawai VALUES (NULL, old.nip_pegawai,
	
	CONCAT('Jabatan struktural anda di rubah dari ',
		(SELECT nama_jabatan FROM tbl_jabatan_struktural WHERE id = old.jab_str),
		' menjadi ',
		(SELECT nama_jabatan FROM tbl_jabatan_struktural WHERE id = new.jab_str),
		' sejak tanggal ', new.sejak_tanggal
	), 0, NOW(), 'Jabatan Struktural', '');
	
    END */$$


DELIMITER ;

/* Trigger structure for table `tbl_permohonan_cuti` */

DELIMITER $$

/*!50003 DROP TRIGGER*//*!50032 IF EXISTS */ /*!50003 `tr_notif_cuti` */$$

/*!50003 CREATE */ /*!50017 DEFINER = 'root'@'::1' */ /*!50003 TRIGGER `tr_notif_cuti` AFTER UPDATE ON `tbl_permohonan_cuti` FOR EACH ROW BEGIN
    
IF (new.id_status != 1) THEN
    insert into tbl_notifikasi_pegawai values(null, old.nip_dosen, 
	case 
		when (new.id_status = 2) then CONCAT('Permohonan Cuti anda dengan alasan ', old.alasan, ' telah di Terima')
		when (new.id_status = 3) then concat('Permohonan Cuti anda dengan alasan ', old.alasan, ' telah di Tolak')
	END,
		 0, 
		 now(),
		 'Permohonan Cuti',
	CASE 
		WHEN (new.id_status = 2) THEN CONCAT('Di Terima')
		WHEN (new.id_status = 3) THEN CONCAT('Di Tolak')
	END
		 );
end if;
	
	
    END */$$


DELIMITER ;

/* Trigger structure for table `tbl_sk_pegawai` */

DELIMITER $$

/*!50003 DROP TRIGGER*//*!50032 IF EXISTS */ /*!50003 `tr_before_delete_sk` */$$

/*!50003 CREATE */ /*!50017 DEFINER = 'root'@'localhost' */ /*!50003 TRIGGER `tr_before_delete_sk` BEFORE DELETE ON `tbl_sk_pegawai` FOR EACH ROW BEGIN
	delete from tbl_kegiatan where id_sk = old.id;
	DELETE FROM tbl_surat_tugas WHERE id_sk = old.id;
    END */$$


DELIMITER ;

/*Table structure for table `sk_view` */

DROP TABLE IF EXISTS `sk_view`;

/*!50001 DROP VIEW IF EXISTS `sk_view` */;
/*!50001 DROP TABLE IF EXISTS `sk_view` */;

/*!50001 CREATE TABLE  `sk_view`(
 `id` varchar(15) ,
 `deskripsi` varchar(50) ,
 `deskripsi_sk` varchar(255) ,
 `tgl_awal` date ,
 `tgl_akhir` date ,
 `id_rubrik` char(16) ,
 `sk_fileurl` varchar(255) ,
 `total` bigint(21) 
)*/;

/*Table structure for table `v_cetaksuratizin` */

DROP TABLE IF EXISTS `v_cetaksuratizin`;

/*!50001 DROP VIEW IF EXISTS `v_cetaksuratizin` */;
/*!50001 DROP TABLE IF EXISTS `v_cetaksuratizin` */;

/*!50001 CREATE TABLE  `v_cetaksuratizin`(
 `id` varchar(255) ,
 `Nama` varchar(255) ,
 `NIP` varchar(255) ,
 `Golongan` varchar(255) ,
 `Jabatan` varchar(255) ,
 `Lama` int(7) ,
 `Mulai_Cuti` date ,
 `BulanMulai` date ,
 `Akhir_Cuti` date ,
 `alasan` varchar(255) ,
 `jenis_cuti` varchar(255) ,
 `qrcode` varchar(255) ,
 `tgl` int(2) ,
 `tgl_mulai` int(2) ,
 `tgl_akhir` int(2) ,
 `bulan_pengajuan` varchar(9) ,
 `bulan_mulai` varchar(9) ,
 `bulan_akhir` varchar(9) ,
 `tahun_pengajuan` int(4) ,
 `tahun_mulai` int(4) ,
 `tahun_akhir` int(4) 
)*/;

/*Table structure for table `vw_anggota_sk` */

DROP TABLE IF EXISTS `vw_anggota_sk`;

/*!50001 DROP VIEW IF EXISTS `vw_anggota_sk` */;
/*!50001 DROP TABLE IF EXISTS `vw_anggota_sk` */;

/*!50001 CREATE TABLE  `vw_anggota_sk`(
 `id_k` int(11) ,
 `id_sk` varchar(15) ,
 `nip_pegawai` varchar(11) ,
 `nama_pegawai` varchar(255) ,
 `id_rubrik` varchar(16) ,
 `deskripsi` varchar(50) ,
 `tgl_awal` date ,
 `tgl_akhir` date ,
 `sk_fileurl` varchar(255) ,
 `deskripsi_rubrik` varchar(50) 
)*/;

/*Table structure for table `vw_anggota_surat_tugas` */

DROP TABLE IF EXISTS `vw_anggota_surat_tugas`;

/*!50001 DROP VIEW IF EXISTS `vw_anggota_surat_tugas` */;
/*!50001 DROP TABLE IF EXISTS `vw_anggota_surat_tugas` */;

/*!50001 CREATE TABLE  `vw_anggota_surat_tugas`(
 `id` int(11) ,
 `id_sk` varchar(15) ,
 `nip_pegawai` varchar(255) ,
 `nama_pegawai` varchar(255) ,
 `id_rubrik` int(11) ,
 `deskripsi` varchar(50) ,
 `tgl_awal` date ,
 `tgl_akhir` date ,
 `maksud_perjalanan` varchar(255) ,
 `tempat_tujuan` varchar(255) ,
 `sk_fileurl` varchar(255) ,
 `deskripsi_rubrik` varchar(50) 
)*/;

/*Table structure for table `vw_fakultas_dosen` */

DROP TABLE IF EXISTS `vw_fakultas_dosen`;

/*!50001 DROP VIEW IF EXISTS `vw_fakultas_dosen` */;
/*!50001 DROP TABLE IF EXISTS `vw_fakultas_dosen` */;

/*!50001 CREATE TABLE  `vw_fakultas_dosen`(
 `NIP` varchar(255) ,
 `nama_pegawai` varchar(255) ,
 `kd_fakultas` varchar(20) ,
 `nama_fakultas` varchar(100) ,
 `sejak_tanggal` date 
)*/;

/*Table structure for table `vw_fakultas_pegawai` */

DROP TABLE IF EXISTS `vw_fakultas_pegawai`;

/*!50001 DROP VIEW IF EXISTS `vw_fakultas_pegawai` */;
/*!50001 DROP TABLE IF EXISTS `vw_fakultas_pegawai` */;

/*!50001 CREATE TABLE  `vw_fakultas_pegawai`(
 `NIP` varchar(255) ,
 `nama_pegawai` varchar(255) ,
 `kd_fakultas` varchar(20) ,
 `nama_fakultas` varchar(100) ,
 `sejak_tanggal` date 
)*/;

/*Table structure for table `vw_history_golongan` */

DROP TABLE IF EXISTS `vw_history_golongan`;

/*!50001 DROP VIEW IF EXISTS `vw_history_golongan` */;
/*!50001 DROP TABLE IF EXISTS `vw_history_golongan` */;

/*!50001 CREATE TABLE  `vw_history_golongan`(
 `id` int(11) ,
 `nip` varchar(255) ,
 `kd_golongan` varchar(255) ,
 `tgl_mulai` date ,
 `tgl_akhir` date 
)*/;

/*Table structure for table `vw_jabatan_pegawai` */

DROP TABLE IF EXISTS `vw_jabatan_pegawai`;

/*!50001 DROP VIEW IF EXISTS `vw_jabatan_pegawai` */;
/*!50001 DROP TABLE IF EXISTS `vw_jabatan_pegawai` */;

/*!50001 CREATE TABLE  `vw_jabatan_pegawai`(
 `NIP` varchar(255) ,
 `nama_pegawai` varchar(255) ,
 `id` int(11) ,
 `nama_jabatan` varchar(255) 
)*/;

/*Table structure for table `vw_jabatan_struktural_dosen` */

DROP TABLE IF EXISTS `vw_jabatan_struktural_dosen`;

/*!50001 DROP VIEW IF EXISTS `vw_jabatan_struktural_dosen` */;
/*!50001 DROP TABLE IF EXISTS `vw_jabatan_struktural_dosen` */;

/*!50001 CREATE TABLE  `vw_jabatan_struktural_dosen`(
 `NIP` varchar(255) ,
 `nama_pegawai` varchar(255) ,
 `id` int(11) ,
 `nama_jabatan` varchar(255) ,
 `status` enum('0','1') ,
 `sejak_tanggal` date 
)*/;

/*Table structure for table `vw_jabatan_struktural_pegawai` */

DROP TABLE IF EXISTS `vw_jabatan_struktural_pegawai`;

/*!50001 DROP VIEW IF EXISTS `vw_jabatan_struktural_pegawai` */;
/*!50001 DROP TABLE IF EXISTS `vw_jabatan_struktural_pegawai` */;

/*!50001 CREATE TABLE  `vw_jabatan_struktural_pegawai`(
 `NIP` varchar(255) ,
 `nama_pegawai` varchar(255) ,
 `id` int(11) ,
 `nama_jabatan` varchar(255) ,
 `status` enum('0','1') ,
 `sejak_tanggal` date 
)*/;

/*Table structure for table `vw_pimpinan_fakultas` */

DROP TABLE IF EXISTS `vw_pimpinan_fakultas`;

/*!50001 DROP VIEW IF EXISTS `vw_pimpinan_fakultas` */;
/*!50001 DROP TABLE IF EXISTS `vw_pimpinan_fakultas` */;

/*!50001 CREATE TABLE  `vw_pimpinan_fakultas`(
 `NIP` varchar(255) ,
 `nama_pegawai` varchar(255) ,
 `email` varchar(255) ,
 `id` int(11) ,
 `nama_jabatan` varchar(255) ,
 `kd_fakultas` varchar(20) ,
 `nama_fakultas` varchar(100) 
)*/;

/*Table structure for table `vw_profil_biodata` */

DROP TABLE IF EXISTS `vw_profil_biodata`;

/*!50001 DROP VIEW IF EXISTS `vw_profil_biodata` */;
/*!50001 DROP TABLE IF EXISTS `vw_profil_biodata` */;

/*!50001 CREATE TABLE  `vw_profil_biodata`(
 `NIP` varchar(255) ,
 `foto_profil` varchar(50) ,
 `nama_pegawai` varchar(255) ,
 `no_ktp` int(11) ,
 `tanggal_lahir` date ,
 `tempat_lahir` varchar(255) ,
 `jenis_kelamin` varchar(15) ,
 `agama` varchar(25) ,
 `alamat_tetap` varchar(255) ,
 `alamat_tinggal` varchar(255) ,
 `no_telepon` varchar(15) ,
 `no_telepon_rumah` varchar(15) ,
 `kd_golongan` varchar(10) ,
 `nama_golongan` varchar(255) ,
 `status_aktif` varchar(255) ,
 `nomor_kartu_pegawai` varchar(15) ,
 `status_kepegawaian` varchar(15) ,
 `kd_fakultas` varchar(20) ,
 `email` varchar(255) 
)*/;

/*Table structure for table `vw_surat_tugas` */

DROP TABLE IF EXISTS `vw_surat_tugas`;

/*!50001 DROP VIEW IF EXISTS `vw_surat_tugas` */;
/*!50001 DROP TABLE IF EXISTS `vw_surat_tugas` */;

/*!50001 CREATE TABLE  `vw_surat_tugas`(
 `id` varchar(15) ,
 `deskripsi` varchar(50) ,
 `tgl_awal` date ,
 `tgl_akhir` date ,
 `id_rubrik` char(16) ,
 `maksud_perjalanan_dinas` varchar(255) ,
 `tempat_tujuan` varchar(255) ,
 `sk_fileurl` varchar(255) ,
 `total` bigint(21) 
)*/;

/*Table structure for table `vw_surat_tugas_pegawai` */

DROP TABLE IF EXISTS `vw_surat_tugas_pegawai`;

/*!50001 DROP VIEW IF EXISTS `vw_surat_tugas_pegawai` */;
/*!50001 DROP TABLE IF EXISTS `vw_surat_tugas_pegawai` */;

/*!50001 CREATE TABLE  `vw_surat_tugas_pegawai`(
 `id` int(11) ,
 `id_sk` varchar(15) ,
 `nip_pegawai` varchar(255) ,
 `nama_pegawai` varchar(255) ,
 `id_rubrik` int(11) ,
 `deskripsi` varchar(50) ,
 `tgl_awal` date ,
 `tgl_akhir` date 
)*/;

/*View structure for view sk_view */

/*!50001 DROP TABLE IF EXISTS `sk_view` */;
/*!50001 DROP VIEW IF EXISTS `sk_view` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `sk_view` AS (select `s`.`id` AS `id`,`ibu`.`deskripsi` AS `deskripsi`,`s`.`deskripsi` AS `deskripsi_sk`,`s`.`tgl_awal` AS `tgl_awal`,`s`.`tgl_akhir` AS `tgl_akhir`,`ibu`.`id_rubrik` AS `id_rubrik`,`s`.`sk_fileurl` AS `sk_fileurl`,count(`k`.`nip_pegawai`) AS `total` from (((`db_sistem_informasi_kepegawaian`.`tbl_sk_pegawai` `s` join `db_sistem_informasi_kepegawaian`.`tbl_kegiatan` `k` on((`k`.`id_sk` = `s`.`id`))) join `db_rubrik_kinerja`.`tbl_anak_rubrik` `anak` on((`anak`.`id_anak_rubrik` = `k`.`id_rubrik`))) join `db_rubrik_kinerja`.`tbl_rubrik` `ibu` on((`ibu`.`id_rubrik` = `anak`.`id_rubrik`))) group by `s`.`id`) */;

/*View structure for view v_cetaksuratizin */

/*!50001 DROP TABLE IF EXISTS `v_cetaksuratizin` */;
/*!50001 DROP VIEW IF EXISTS `v_cetaksuratizin` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_cetaksuratizin` AS (select `c`.`id` AS `id`,`p`.`nama_pegawai` AS `Nama`,`c`.`nip_dosen` AS `NIP`,`g`.`nama_golongan` AS `Golongan`,`j`.`nama_jabatan` AS `Jabatan`,(to_days(`c`.`tgl_akhir`) - to_days(`c`.`tgl_mulai`)) AS `Lama`,`c`.`tgl_mulai` AS `Mulai_Cuti`,`c`.`tgl_mulai` AS `BulanMulai`,`c`.`tgl_akhir` AS `Akhir_Cuti`,`c`.`alasan` AS `alasan`,`jc`.`nama_cuti` AS `jenis_cuti`,`c`.`link_qrcode` AS `qrcode`,dayofmonth(`c`.`tgl_pengajuan`) AS `tgl`,dayofmonth(`c`.`tgl_mulai`) AS `tgl_mulai`,dayofmonth(`c`.`tgl_akhir`) AS `tgl_akhir`,monthname(str_to_date(month(`c`.`tgl_pengajuan`),'%m')) AS `bulan_pengajuan`,monthname(str_to_date(month(`c`.`tgl_mulai`),'%m')) AS `bulan_mulai`,monthname(str_to_date(month(`c`.`tgl_akhir`),'%m')) AS `bulan_akhir`,year(`c`.`tgl_pengajuan`) AS `tahun_pengajuan`,year(`c`.`tgl_mulai`) AS `tahun_mulai`,year(`c`.`tgl_akhir`) AS `tahun_akhir` from ((((((`tbl_permohonan_cuti` `c` join `tbl_pegawai` `p` on((`p`.`NIP` = `c`.`nip_dosen`))) join `tbl_jabatan_fungsional_akademik_pegawai` `jabp` on((`jabp`.`nip_pegawai` = `p`.`NIP`))) join `tbl_jabatan_fungsional_akademik` `j` on((`j`.`id` = `jabp`.`jabFa`))) join `tbl_golongan_pegawai` `gp` on((`gp`.`nip` = `p`.`NIP`))) join `tbl_golongan` `g` on((`g`.`kd_golongan` = `gp`.`kd_golongan`))) join `tbl_jenis_cuti` `jc` on((`c`.`kd_jenis` = `jc`.`kd_cuti`)))) */;

/*View structure for view vw_anggota_sk */

/*!50001 DROP TABLE IF EXISTS `vw_anggota_sk` */;
/*!50001 DROP VIEW IF EXISTS `vw_anggota_sk` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_anggota_sk` AS (select `k`.`id` AS `id_k`,`sk`.`id` AS `id_sk`,`k`.`nip_pegawai` AS `nip_pegawai`,`p`.`nama_pegawai` AS `nama_pegawai`,`k`.`id_rubrik` AS `id_rubrik`,`anak_rubrik`.`jabatan` AS `deskripsi`,`sk`.`tgl_awal` AS `tgl_awal`,`sk`.`tgl_akhir` AS `tgl_akhir`,`sk`.`sk_fileurl` AS `sk_fileurl`,`ibu`.`deskripsi` AS `deskripsi_rubrik` from ((((`db_sistem_informasi_kepegawaian`.`tbl_kegiatan` `k` join `db_sistem_informasi_kepegawaian`.`tbl_pegawai` `p` on((`p`.`NIP` = `k`.`nip_pegawai`))) join `db_rubrik_kinerja`.`tbl_anak_rubrik` `anak_rubrik` on((`anak_rubrik`.`id_anak_rubrik` = `k`.`id_rubrik`))) join `db_rubrik_kinerja`.`tbl_rubrik` `ibu` on((`ibu`.`id_rubrik` = `anak_rubrik`.`id_rubrik`))) join `db_sistem_informasi_kepegawaian`.`tbl_sk_pegawai` `sk` on((`sk`.`id` = `k`.`id_sk`)))) */;

/*View structure for view vw_anggota_surat_tugas */

/*!50001 DROP TABLE IF EXISTS `vw_anggota_surat_tugas` */;
/*!50001 DROP VIEW IF EXISTS `vw_anggota_surat_tugas` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`::1` SQL SECURITY DEFINER VIEW `vw_anggota_surat_tugas` AS (select `t`.`id` AS `id`,`t`.`id_sk` AS `id_sk`,`t`.`nip_pegawai` AS `nip_pegawai`,`p`.`nama_pegawai` AS `nama_pegawai`,`t`.`id_rubrik` AS `id_rubrik`,`anak`.`jabatan` AS `deskripsi`,`sk`.`tgl_awal` AS `tgl_awal`,`sk`.`tgl_akhir` AS `tgl_akhir`,`sk`.`maksud_perjalanan` AS `maksud_perjalanan`,`sk`.`tempat_tujuan` AS `tempat_tujuan`,`sk`.`sk_fileurl` AS `sk_fileurl`,`ibu`.`deskripsi` AS `deskripsi_rubrik` from ((((`db_sistem_informasi_kepegawaian`.`tbl_surat_tugas` `t` join `db_sistem_informasi_kepegawaian`.`tbl_pegawai` `p` on((`p`.`NIP` = `t`.`nip_pegawai`))) join `db_rubrik_kinerja`.`tbl_anak_rubrik` `anak` on((`anak`.`id_anak_rubrik` = `t`.`id_rubrik`))) join `db_sistem_informasi_kepegawaian`.`tbl_sk_pegawai` `sk` on((`sk`.`id` = `t`.`id_sk`))) join `db_rubrik_kinerja`.`tbl_rubrik` `ibu` on((`ibu`.`id_rubrik` = `anak`.`id_rubrik`)))) */;

/*View structure for view vw_fakultas_dosen */

/*!50001 DROP TABLE IF EXISTS `vw_fakultas_dosen` */;
/*!50001 DROP VIEW IF EXISTS `vw_fakultas_dosen` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`::1` SQL SECURITY DEFINER VIEW `vw_fakultas_dosen` AS (select `p`.`NIP` AS `NIP`,`p`.`nama_pegawai` AS `nama_pegawai`,`f`.`kd_fakultas` AS `kd_fakultas`,`f`.`nama_fakultas` AS `nama_fakultas`,`pf`.`sejak_tanggal` AS `sejak_tanggal` from ((`tbl_pegawai` `p` join `tbl_fakultas_pegawai` `pf` on((`pf`.`nip_pegawai` = `p`.`NIP`))) join `tbl_fakultas` `f` on((`f`.`kd_fakultas` = `pf`.`kd_fakultas`))) where (`p`.`status_kepegawaian` = '1')) */;

/*View structure for view vw_fakultas_pegawai */

/*!50001 DROP TABLE IF EXISTS `vw_fakultas_pegawai` */;
/*!50001 DROP VIEW IF EXISTS `vw_fakultas_pegawai` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`::1` SQL SECURITY DEFINER VIEW `vw_fakultas_pegawai` AS (select `p`.`NIP` AS `NIP`,`p`.`nama_pegawai` AS `nama_pegawai`,`f`.`kd_fakultas` AS `kd_fakultas`,`f`.`nama_fakultas` AS `nama_fakultas`,`pf`.`sejak_tanggal` AS `sejak_tanggal` from ((`tbl_pegawai` `p` join `tbl_fakultas_pegawai` `pf` on((`pf`.`nip_pegawai` = `p`.`NIP`))) join `tbl_fakultas` `f` on((`f`.`kd_fakultas` = `pf`.`kd_fakultas`))) where (`p`.`status_kepegawaian` = '0')) */;

/*View structure for view vw_history_golongan */

/*!50001 DROP TABLE IF EXISTS `vw_history_golongan` */;
/*!50001 DROP VIEW IF EXISTS `vw_history_golongan` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`::1` SQL SECURITY DEFINER VIEW `vw_history_golongan` AS (select `tblh_golongan`.`id` AS `id`,`tblh_golongan`.`nip` AS `nip`,`tblh_golongan`.`kd_golongan` AS `kd_golongan`,`tblh_golongan`.`tgl_mulai` AS `tgl_mulai`,`tblh_golongan`.`tgl_akhir` AS `tgl_akhir` from `tblh_golongan` where (`tblh_golongan`.`tgl_mulai` <> (select max(`g`.`tgl_mulai`) from `tblh_golongan` `g`)) order by `tblh_golongan`.`id`) */;

/*View structure for view vw_jabatan_pegawai */

/*!50001 DROP TABLE IF EXISTS `vw_jabatan_pegawai` */;
/*!50001 DROP VIEW IF EXISTS `vw_jabatan_pegawai` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`::1` SQL SECURITY DEFINER VIEW `vw_jabatan_pegawai` AS (select `p`.`NIP` AS `NIP`,`p`.`nama_pegawai` AS `nama_pegawai`,`jabfa`.`id` AS `id`,`jabfa`.`nama_jabatan` AS `nama_jabatan` from ((`tbl_pegawai` `p` join `tbl_jabatan_fungsional_akademik_pegawai` `jabfp` on((`jabfp`.`nip_pegawai` = `p`.`NIP`))) join `tbl_jabatan_fungsional_akademik` `jabfa` on((`jabfa`.`id` = `jabfp`.`jabFa`)))) */;

/*View structure for view vw_jabatan_struktural_dosen */

/*!50001 DROP TABLE IF EXISTS `vw_jabatan_struktural_dosen` */;
/*!50001 DROP VIEW IF EXISTS `vw_jabatan_struktural_dosen` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`::1` SQL SECURITY DEFINER VIEW `vw_jabatan_struktural_dosen` AS (select `p`.`NIP` AS `NIP`,`p`.`nama_pegawai` AS `nama_pegawai`,`j`.`id` AS `id`,`j`.`nama_jabatan` AS `nama_jabatan`,`j`.`status` AS `status`,`jp`.`sejak_tanggal` AS `sejak_tanggal` from ((`tbl_pegawai` `p` join `tbl_jabatan_struktural_pegawai` `jp` on((`jp`.`nip_pegawai` = `p`.`NIP`))) join `tbl_jabatan_struktural` `j` on((`j`.`id` = `jp`.`jab_str`))) where ((`j`.`milik_dosen` = '1') and (`p`.`status_kepegawaian` = '1'))) */;

/*View structure for view vw_jabatan_struktural_pegawai */

/*!50001 DROP TABLE IF EXISTS `vw_jabatan_struktural_pegawai` */;
/*!50001 DROP VIEW IF EXISTS `vw_jabatan_struktural_pegawai` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`::1` SQL SECURITY DEFINER VIEW `vw_jabatan_struktural_pegawai` AS (select `p`.`NIP` AS `NIP`,`p`.`nama_pegawai` AS `nama_pegawai`,`j`.`id` AS `id`,`j`.`nama_jabatan` AS `nama_jabatan`,`j`.`status` AS `status`,`jp`.`sejak_tanggal` AS `sejak_tanggal` from ((`tbl_pegawai` `p` join `tbl_jabatan_struktural_pegawai` `jp` on((`jp`.`nip_pegawai` = `p`.`NIP`))) join `tbl_jabatan_struktural` `j` on((`j`.`id` = `jp`.`jab_str`))) where ((`j`.`milik_dosen` = '0') and (`p`.`status_kepegawaian` = '0'))) */;

/*View structure for view vw_pimpinan_fakultas */

/*!50001 DROP TABLE IF EXISTS `vw_pimpinan_fakultas` */;
/*!50001 DROP VIEW IF EXISTS `vw_pimpinan_fakultas` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`::1` SQL SECURITY DEFINER VIEW `vw_pimpinan_fakultas` AS (select `p`.`NIP` AS `NIP`,`p`.`nama_pegawai` AS `nama_pegawai`,`p`.`email` AS `email`,`js`.`id` AS `id`,`js`.`nama_jabatan` AS `nama_jabatan`,`f`.`kd_fakultas` AS `kd_fakultas`,`f`.`nama_fakultas` AS `nama_fakultas` from (((`tbl_pegawai` `p` join `tbl_jabatan_struktural_pegawai` `jsp` on((`jsp`.`nip_pegawai` = `p`.`NIP`))) join `tbl_jabatan_struktural` `js` on((`js`.`id` = `jsp`.`jab_str`))) join `tbl_fakultas` `f` on((`f`.`id_jabatan` = `js`.`id`)))) */;

/*View structure for view vw_profil_biodata */

/*!50001 DROP TABLE IF EXISTS `vw_profil_biodata` */;
/*!50001 DROP VIEW IF EXISTS `vw_profil_biodata` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`::1` SQL SECURITY DEFINER VIEW `vw_profil_biodata` AS (select `p`.`NIP` AS `NIP`,`p`.`foto_profil` AS `foto_profil`,`p`.`nama_pegawai` AS `nama_pegawai`,`p`.`no_ktp` AS `no_ktp`,`p`.`tanggal_lahir` AS `tanggal_lahir`,`p`.`tempat_lahir` AS `tempat_lahir`,`p`.`jenis_kelamin` AS `jenis_kelamin`,`p`.`agama` AS `agama`,`p`.`alamat_tetap` AS `alamat_tetap`,`p`.`alamat_tinggal` AS `alamat_tinggal`,`p`.`no_telepon` AS `no_telepon`,`p`.`no_telepon_rumah` AS `no_telepon_rumah`,`g`.`kd_golongan` AS `kd_golongan`,`g`.`nama_golongan` AS `nama_golongan`,`p`.`status_aktif` AS `status_aktif`,`p`.`nomor_kartu_pegawai` AS `nomor_kartu_pegawai`,`p`.`status_kepegawaian` AS `status_kepegawaian`,`f`.`kd_fakultas` AS `kd_fakultas`,`p`.`email` AS `email` from ((((`tbl_pegawai` `p` join `tbl_golongan_pegawai` `golp` on((`golp`.`nip` = `p`.`NIP`))) join `tbl_golongan` `g` on((`g`.`kd_golongan` = `golp`.`kd_golongan`))) join `tbl_fakultas_pegawai` `fp` on((`fp`.`nip_pegawai` = `p`.`NIP`))) join `tbl_fakultas` `f` on((`f`.`kd_fakultas` = `fp`.`kd_fakultas`)))) */;

/*View structure for view vw_surat_tugas */

/*!50001 DROP TABLE IF EXISTS `vw_surat_tugas` */;
/*!50001 DROP VIEW IF EXISTS `vw_surat_tugas` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`::1` SQL SECURITY DEFINER VIEW `vw_surat_tugas` AS (select `t`.`id_sk` AS `id`,`ibu`.`deskripsi` AS `deskripsi`,`sk`.`tgl_awal` AS `tgl_awal`,`sk`.`tgl_akhir` AS `tgl_akhir`,`ibu`.`id_rubrik` AS `id_rubrik`,`sk`.`maksud_perjalanan` AS `maksud_perjalanan_dinas`,`sk`.`tempat_tujuan` AS `tempat_tujuan`,`sk`.`sk_fileurl` AS `sk_fileurl`,count(`t`.`nip_pegawai`) AS `total` from (((`db_sistem_informasi_kepegawaian`.`tbl_surat_tugas` `t` join `db_sistem_informasi_kepegawaian`.`tbl_sk_pegawai` `sk` on((`t`.`id_sk` = `sk`.`id`))) join `db_rubrik_kinerja`.`tbl_anak_rubrik` `anak` on((`anak`.`id_anak_rubrik` = `t`.`id_rubrik`))) join `db_rubrik_kinerja`.`tbl_rubrik` `ibu` on((`ibu`.`id_rubrik` = `anak`.`id_rubrik`))) group by `sk`.`id`) */;

/*View structure for view vw_surat_tugas_pegawai */

/*!50001 DROP TABLE IF EXISTS `vw_surat_tugas_pegawai` */;
/*!50001 DROP VIEW IF EXISTS `vw_surat_tugas_pegawai` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_surat_tugas_pegawai` AS (select `st`.`id` AS `id`,`st`.`id_sk` AS `id_sk`,`st`.`nip_pegawai` AS `nip_pegawai`,`p`.`nama_pegawai` AS `nama_pegawai`,`st`.`id_rubrik` AS `id_rubrik`,`ar`.`jabatan` AS `deskripsi`,`sp`.`tgl_awal` AS `tgl_awal`,`sp`.`tgl_akhir` AS `tgl_akhir` from (((`db_sistem_informasi_kepegawaian`.`tbl_surat_tugas` `st` join `db_sistem_informasi_kepegawaian`.`tbl_sk_pegawai` `sp` on((`sp`.`id` = `st`.`id_sk`))) join `db_sistem_informasi_kepegawaian`.`tbl_pegawai` `p` on((`p`.`NIP` = `st`.`nip_pegawai`))) join `db_rubrik_kinerja`.`tbl_anak_rubrik` `ar` on((`ar`.`id_anak_rubrik` = `st`.`id_rubrik`)))) */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
