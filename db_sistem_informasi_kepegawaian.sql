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
  KEY `nip_dosen` (`nip_dosen`),
  CONSTRAINT `tbl_absensi_ibfk_1` FOREIGN KEY (`id`) REFERENCES `tbl_pegawai` (`jab_fa`)
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
  PRIMARY KEY (`kd_fakultas`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tbl_fakultas` */

insert  into `tbl_fakultas`(`kd_fakultas`,`nama_fakultas`) values 
('FA-001','Husludin'),
('FA-002','ICT'),
('FA-003','Musalamiah');

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
(1,'15312371','FA-002','2018-07-22',NULL),
(2,'15312377','FA-001','2018-07-22',NULL),
(3,'15312360','FA-002','2018-07-22',NULL),
(4,'15312644','FA-002','2018-07-15',NULL),
(5,'1535154','FA-003','2018-07-16',NULL);

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
('golA','Pembina A',NULL),
('golB','Pengatur B',NULL),
('golC','Juru C',NULL),
('golD','Juru TIngkat',NULL),
('golE','Pembina Madya',NULL);

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

/*Table structure for table `tbl_jabatan_struktural` */

DROP TABLE IF EXISTS `tbl_jabatan_struktural`;

CREATE TABLE `tbl_jabatan_struktural` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_jabatan` varchar(255) DEFAULT NULL,
  `status` enum('0','1') DEFAULT NULL,
  `milik_dosen` enum('0','1') DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_jabatan_struktural` */

insert  into `tbl_jabatan_struktural`(`id`,`nama_jabatan`,`status`,`milik_dosen`) values 
(1,'Dosen Biasa','0','1'),
(2,'Kaprodi Agama','0','1'),
(3,'Kepala Biro','1','1'),
(4,'Kepala Bagian','0','1'),
(5,'Kepala Bagian Keuangan Perencanaan','1','0'),
(6,'Kepala Bagian Kepegawaian','1','0'),
(7,'Pegawai Biasa','0','0');

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
(1,'15312371',1,'2018-07-22'),
(2,'15312377',7,'2018-07-17'),
(3,'15312360',5,'2018-07-11'),
(4,'15312644',3,'2018-07-25'),
(5,'1535154',1,'2018-07-23');

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
) ENGINE=InnoDB AUTO_INCREMENT=181 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_kegiatan` */

insert  into `tbl_kegiatan`(`id`,`id_sk`,`nip_pegawai`,`id_rubrik`) values 
(175,'SK-20180724002','1535154','26'),
(178,'SK-20180724001','15312644','27'),
(179,'SK-20180724001','1535154','26'),
(180,'SK-20180724001','15312371','28');

/*Table structure for table `tbl_pegawai` */

DROP TABLE IF EXISTS `tbl_pegawai`;

CREATE TABLE `tbl_pegawai` (
  `NIP` varchar(255) NOT NULL,
  `nomor_kartu_pegawai` varchar(15) DEFAULT NULL,
  `nama_pegawai` varchar(255) DEFAULT NULL,
  `no_ktp` int(11) DEFAULT NULL,
  `no_telepon` varchar(15) DEFAULT NULL,
  `no_telepon_rumah` varchar(15) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `jenis_kelamin` varchar(15) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `tempat_lahir` varchar(255) DEFAULT NULL,
  `agama` varchar(25) DEFAULT NULL,
  `status_aktif` varchar(255) DEFAULT NULL,
  `kd_golongan` varchar(10) DEFAULT NULL,
  `jab_fa` int(11) DEFAULT NULL,
  `status_kepegawaian` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`NIP`),
  KEY `jab_fa` (`jab_fa`),
  KEY `kd_golongan` (`kd_golongan`),
  CONSTRAINT `tbl_pegawai_ibfk_1` FOREIGN KEY (`jab_fa`) REFERENCES `tbl_jabatan_fungsional_akademik` (`id`),
  CONSTRAINT `tbl_pegawai_ibfk_5` FOREIGN KEY (`kd_golongan`) REFERENCES `tbl_golongan` (`kd_golongan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tbl_pegawai` */

insert  into `tbl_pegawai`(`NIP`,`nomor_kartu_pegawai`,`nama_pegawai`,`no_ktp`,`no_telepon`,`no_telepon_rumah`,`alamat`,`jenis_kelamin`,`tanggal_lahir`,`tempat_lahir`,`agama`,`status_aktif`,`kd_golongan`,`jab_fa`,`status_kepegawaian`) values 
('15312360','15351523','Ariana',1532415,'15351184','156851352','fdasfdsafsdf','Wanita','2018-07-19','Tj.karang','Islam','Rajin Badai','golC',3,'0'),
('15312371','12312312','Tio Saputra',10235125,'0008075676','082307299224','bar','Pria','2018-07-19','lampun','Islam','libut','golA',3,'1'),
('15312377','12538513','Jefri Samuel',2147483647,'1115413','12311684138','Jl. Warnet Click','Pria','2018-07-19','Rumah Sakit','Kristen','Sedang PKL','golE',1,'0'),
('15312644','123123','Ragil Satrio Wicak Wicak',1542153,'135185312','08451235871','Jl Cemara 2 Way Halim','Pria','2018-07-17','lampung','Islam','libur','golB',3,'1'),
('1535154','22323','Riski Yulidar',15318125,'1355815','082307299224','Jl. Melati','Pria','2018-07-09','Way Halim','Islam','Sedang Berlibur','golA',4,'1');

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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_pendidikan` */

insert  into `tbl_pendidikan`(`id`,`nip_pegawai`,`jenjang_pendidikan`,`gelar`,`nama_pendidikan`,`tahun_angkatan`,`tahun_lulus`) values 
(1,'15312644','S1','S.Kom','Universitas Teknokrat Indonesia','2015','2019');

/*Table structure for table `tbl_permohonan_cuti` */

DROP TABLE IF EXISTS `tbl_permohonan_cuti`;

CREATE TABLE `tbl_permohonan_cuti` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nip_dosen` varchar(255) DEFAULT NULL,
  `kd_jenis` varchar(255) DEFAULT NULL,
  `tgl_pengajuan` date DEFAULT NULL,
  `tgl_mulai` date DEFAULT NULL,
  `tgl_akhir` date DEFAULT NULL,
  `alasan` varchar(255) DEFAULT NULL,
  `id_status` int(11) DEFAULT NULL,
  `pesan` varchar(255) DEFAULT NULL,
  `upload_link` varchar(255) DEFAULT NULL,
  `upload_file` varchar(255) DEFAULT NULL,
  `upload_filesakit` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `nip_dosen` (`nip_dosen`),
  KEY `id_jenis` (`kd_jenis`),
  KEY `id_pengajuan` (`id_status`),
  CONSTRAINT `tbl_permohonan_cuti_ibfk_1` FOREIGN KEY (`nip_dosen`) REFERENCES `tbl_pegawai` (`NIP`),
  CONSTRAINT `tbl_permohonan_cuti_ibfk_2` FOREIGN KEY (`kd_jenis`) REFERENCES `tbl_jenis_cuti` (`kd_cuti`),
  CONSTRAINT `tbl_permohonan_cuti_ibfk_3` FOREIGN KEY (`id_status`) REFERENCES `tbl_status_pengajuan` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_permohonan_cuti` */

insert  into `tbl_permohonan_cuti`(`id`,`nip_dosen`,`kd_jenis`,`tgl_pengajuan`,`tgl_mulai`,`tgl_akhir`,`alasan`,`id_status`,`pesan`,`upload_link`,`upload_file`,`upload_filesakit`) values 
(9,'15312644','kc002','2018-07-01','2018-07-02','2018-07-31','Ragi bikin kesel, rizki rese',3,'Pengajuan Permohonan sedang di proses',NULL,NULL,NULL),
(10,'15312644','kc001','2018-07-01','2018-07-01','2018-07-31','Saya sedang sakit hati',2,'Pengajuan Permohonan sedang di proses',NULL,NULL,NULL),
(11,'15312644','kc002','2018-07-01','2018-07-02','2018-07-31','Sakit Flu ',2,'Pengajuan Permohonan sedang di proses',NULL,NULL,NULL);

/*Table structure for table `tbl_sk_pegawai` */

DROP TABLE IF EXISTS `tbl_sk_pegawai`;

CREATE TABLE `tbl_sk_pegawai` (
  `id` varchar(15) NOT NULL,
  `deskripsi` varchar(255) DEFAULT NULL,
  `sk_fileurl` varchar(30) DEFAULT NULL,
  `tgl_awal` date DEFAULT NULL,
  `tgl_akhir` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tbl_sk_pegawai` */

insert  into `tbl_sk_pegawai`(`id`,`deskripsi`,`sk_fileurl`,`tgl_awal`,`tgl_akhir`) values 
('SK-20180724001','Inserting SK Member','','2018-07-01','2018-07-31'),
('SK-20180724002','Pembinaan UKM','','2018-07-01','2018-07-31'),
('ST-20180724001',NULL,'','2018-06-03','2018-07-31');

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
  `maksud_perjalanan_dinas` varchar(255) DEFAULT NULL,
  `tempat_tujuan` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_sk` (`id_sk`),
  KEY `nip_pegawai` (`nip_pegawai`),
  CONSTRAINT `tbl_surat_tugas_ibfk_1` FOREIGN KEY (`id_sk`) REFERENCES `tbl_sk_pegawai` (`id`),
  CONSTRAINT `tbl_surat_tugas_ibfk_2` FOREIGN KEY (`nip_pegawai`) REFERENCES `tbl_pegawai` (`NIP`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_surat_tugas` */

/*Table structure for table `tbl_users` */

DROP TABLE IF EXISTS `tbl_users`;

CREATE TABLE `tbl_users` (
  `id` varchar(11) NOT NULL,
  `username` varchar(25) DEFAULT NULL,
  `password` varchar(25) DEFAULT NULL,
  `email` varchar(25) DEFAULT NULL,
  `level_id` varchar(11) DEFAULT NULL,
  `last_login` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tbl_users` */

insert  into `tbl_users`(`id`,`username`,`password`,`email`,`level_id`,`last_login`) values 
('1','198811022011012005','123','a@gmail.com','1',NULL),
('10','198412152009121005','123','k','1',NULL),
('11','197004032014111001','123','mk','1',NULL),
('12','197211102000122002','123','k','1',NULL),
('2','197005191989031001','123','b@gmail.com','2',NULL),
('4','196803032002122001','123','d@gmail.com','2',NULL),
('5','196503191998031001','123','e@gmail.com','2',NULL),
('6','196006161991031003','123','f@gmail.com','3',NULL),
('7','197907162009011014','123','a','1',NULL),
('8','196212171987031005','123','i','1',NULL),
('9','196208221988031002','123','n','1',NULL),
('d01','195608101987031001','123','Dekan1@gmail.com','dekan',NULL),
('super_admin','admin_ganteng','123','p','Super_Admin',NULL);

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
 `total` bigint(21) 
)*/;

/*Table structure for table `v_cetaksuratizin` */

DROP TABLE IF EXISTS `v_cetaksuratizin`;

/*!50001 DROP VIEW IF EXISTS `v_cetaksuratizin` */;
/*!50001 DROP TABLE IF EXISTS `v_cetaksuratizin` */;

/*!50001 CREATE TABLE  `v_cetaksuratizin`(
 `id` int(11) ,
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
 `tgl_akhir` date 
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
 `deskripsi` varchar(50) 
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

/*Table structure for table `vw_profil_biodata` */

DROP TABLE IF EXISTS `vw_profil_biodata`;

/*!50001 DROP VIEW IF EXISTS `vw_profil_biodata` */;
/*!50001 DROP TABLE IF EXISTS `vw_profil_biodata` */;

/*!50001 CREATE TABLE  `vw_profil_biodata`(
 `NIP` varchar(255) ,
 `nama_pegawai` varchar(255) ,
 `no_ktp` int(11) ,
 `tanggal_lahir` date ,
 `tempat_lahir` varchar(255) ,
 `jenis_kelamin` varchar(15) ,
 `agama` varchar(25) ,
 `alamat` varchar(255) ,
 `no_telepon` varchar(15) ,
 `no_telepon_rumah` varchar(15) ,
 `kd_golongan` varchar(10) ,
 `nama_golongan` varchar(255) ,
 `status_aktif` varchar(255) ,
 `nomor_kartu_pegawai` varchar(15) ,
 `status_kepegawaian` varchar(15) 
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
 `total` bigint(21) 
)*/;

/*View structure for view sk_view */

/*!50001 DROP TABLE IF EXISTS `sk_view` */;
/*!50001 DROP VIEW IF EXISTS `sk_view` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `sk_view` AS (select `s`.`id` AS `id`,`ibu`.`deskripsi` AS `deskripsi`,`s`.`deskripsi` AS `deskripsi_sk`,`s`.`tgl_awal` AS `tgl_awal`,`s`.`tgl_akhir` AS `tgl_akhir`,`ibu`.`id_rubrik` AS `id_rubrik`,count(`k`.`nip_pegawai`) AS `total` from (((`db_sistem_informasi_kepegawaian`.`tbl_sk_pegawai` `s` join `db_sistem_informasi_kepegawaian`.`tbl_kegiatan` `k` on((`k`.`id_sk` = `s`.`id`))) join `db_rubrik_kinerja`.`tbl_anak_rubrik` `anak` on((`anak`.`id_anak_rubrik` = `k`.`id_rubrik`))) join `db_rubrik_kinerja`.`tbl_rubrik` `ibu` on((`ibu`.`id_rubrik` = `anak`.`id_rubrik`))) group by `s`.`id`) */;

/*View structure for view v_cetaksuratizin */

/*!50001 DROP TABLE IF EXISTS `v_cetaksuratizin` */;
/*!50001 DROP VIEW IF EXISTS `v_cetaksuratizin` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_cetaksuratizin` AS (select `c`.`id` AS `id`,`p`.`nama_pegawai` AS `Nama`,`c`.`nip_dosen` AS `NIP`,`g`.`nama_golongan` AS `Golongan`,`j`.`nama_jabatan` AS `Jabatan`,(to_days(`c`.`tgl_akhir`) - to_days(`c`.`tgl_mulai`)) AS `Lama`,`c`.`tgl_mulai` AS `Mulai_Cuti`,`c`.`tgl_mulai` AS `BulanMulai`,`c`.`tgl_akhir` AS `Akhir_Cuti`,`c`.`alasan` AS `alasan`,`jc`.`nama_cuti` AS `jenis_cuti`,dayofmonth(`c`.`tgl_pengajuan`) AS `tgl`,dayofmonth(`c`.`tgl_mulai`) AS `tgl_mulai`,dayofmonth(`c`.`tgl_akhir`) AS `tgl_akhir`,monthname(str_to_date(month(`c`.`tgl_pengajuan`),'%m')) AS `bulan_pengajuan`,monthname(str_to_date(month(`c`.`tgl_mulai`),'%m')) AS `bulan_mulai`,monthname(str_to_date(month(`c`.`tgl_akhir`),'%m')) AS `bulan_akhir`,year(`c`.`tgl_pengajuan`) AS `tahun_pengajuan`,year(`c`.`tgl_mulai`) AS `tahun_mulai`,year(`c`.`tgl_akhir`) AS `tahun_akhir` from ((((`tbl_permohonan_cuti` `c` join `tbl_pegawai` `p` on((`p`.`NIP` = `c`.`nip_dosen`))) join `tbl_jabatan_fungsional_akademik` `j` on((`j`.`id` = `p`.`jab_fa`))) join `tbl_golongan` `g` on((`g`.`kd_golongan` = `p`.`kd_golongan`))) join `tbl_jenis_cuti` `jc` on((`c`.`kd_jenis` = `jc`.`kd_cuti`)))) */;

/*View structure for view vw_anggota_sk */

/*!50001 DROP TABLE IF EXISTS `vw_anggota_sk` */;
/*!50001 DROP VIEW IF EXISTS `vw_anggota_sk` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_anggota_sk` AS (select `k`.`id` AS `id_k`,`sk`.`id` AS `id_sk`,`k`.`nip_pegawai` AS `nip_pegawai`,`p`.`nama_pegawai` AS `nama_pegawai`,`k`.`id_rubrik` AS `id_rubrik`,`anak_rubrik`.`jabatan` AS `deskripsi`,`sk`.`tgl_awal` AS `tgl_awal`,`sk`.`tgl_akhir` AS `tgl_akhir` from (((`db_sistem_informasi_kepegawaian`.`tbl_kegiatan` `k` join `db_sistem_informasi_kepegawaian`.`tbl_pegawai` `p` on((`p`.`NIP` = `k`.`nip_pegawai`))) join `db_rubrik_kinerja`.`tbl_anak_rubrik` `anak_rubrik` on((`anak_rubrik`.`id_anak_rubrik` = `k`.`id_rubrik`))) join `db_sistem_informasi_kepegawaian`.`tbl_sk_pegawai` `sk` on((`sk`.`id` = `k`.`id_sk`)))) */;

/*View structure for view vw_anggota_surat_tugas */

/*!50001 DROP TABLE IF EXISTS `vw_anggota_surat_tugas` */;
/*!50001 DROP VIEW IF EXISTS `vw_anggota_surat_tugas` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`::1` SQL SECURITY DEFINER VIEW `vw_anggota_surat_tugas` AS (select `t`.`id` AS `id`,`t`.`id_sk` AS `id_sk`,`t`.`nip_pegawai` AS `nip_pegawai`,`p`.`nama_pegawai` AS `nama_pegawai`,`t`.`id_rubrik` AS `id_rubrik`,`anak`.`jabatan` AS `deskripsi` from ((`db_sistem_informasi_kepegawaian`.`tbl_surat_tugas` `t` join `db_sistem_informasi_kepegawaian`.`tbl_pegawai` `p` on((`p`.`NIP` = `t`.`nip_pegawai`))) join `db_rubrik_kinerja`.`tbl_anak_rubrik` `anak` on((`anak`.`id_anak_rubrik` = `t`.`id_rubrik`)))) */;

/*View structure for view vw_fakultas_dosen */

/*!50001 DROP TABLE IF EXISTS `vw_fakultas_dosen` */;
/*!50001 DROP VIEW IF EXISTS `vw_fakultas_dosen` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`::1` SQL SECURITY DEFINER VIEW `vw_fakultas_dosen` AS (select `p`.`NIP` AS `NIP`,`p`.`nama_pegawai` AS `nama_pegawai`,`f`.`kd_fakultas` AS `kd_fakultas`,`f`.`nama_fakultas` AS `nama_fakultas`,`pf`.`sejak_tanggal` AS `sejak_tanggal` from ((`tbl_pegawai` `p` join `tbl_fakultas_pegawai` `pf` on((`pf`.`nip_pegawai` = `p`.`NIP`))) join `tbl_fakultas` `f` on((`f`.`kd_fakultas` = `pf`.`kd_fakultas`))) where (`p`.`status_kepegawaian` = '1')) */;

/*View structure for view vw_fakultas_pegawai */

/*!50001 DROP TABLE IF EXISTS `vw_fakultas_pegawai` */;
/*!50001 DROP VIEW IF EXISTS `vw_fakultas_pegawai` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`::1` SQL SECURITY DEFINER VIEW `vw_fakultas_pegawai` AS (select `p`.`NIP` AS `NIP`,`p`.`nama_pegawai` AS `nama_pegawai`,`f`.`kd_fakultas` AS `kd_fakultas`,`f`.`nama_fakultas` AS `nama_fakultas`,`pf`.`sejak_tanggal` AS `sejak_tanggal` from ((`tbl_pegawai` `p` join `tbl_fakultas_pegawai` `pf` on((`pf`.`nip_pegawai` = `p`.`NIP`))) join `tbl_fakultas` `f` on((`f`.`kd_fakultas` = `pf`.`kd_fakultas`))) where (`p`.`status_kepegawaian` = '0')) */;

/*View structure for view vw_jabatan_pegawai */

/*!50001 DROP TABLE IF EXISTS `vw_jabatan_pegawai` */;
/*!50001 DROP VIEW IF EXISTS `vw_jabatan_pegawai` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`::1` SQL SECURITY DEFINER VIEW `vw_jabatan_pegawai` AS (select `p`.`NIP` AS `NIP`,`p`.`nama_pegawai` AS `nama_pegawai`,`jabfa`.`id` AS `id`,`jabfa`.`nama_jabatan` AS `nama_jabatan` from (`tbl_pegawai` `p` join `tbl_jabatan_fungsional_akademik` `jabfa` on((`jabfa`.`id` = `p`.`jab_fa`)))) */;

/*View structure for view vw_jabatan_struktural_dosen */

/*!50001 DROP TABLE IF EXISTS `vw_jabatan_struktural_dosen` */;
/*!50001 DROP VIEW IF EXISTS `vw_jabatan_struktural_dosen` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`::1` SQL SECURITY DEFINER VIEW `vw_jabatan_struktural_dosen` AS (select `p`.`NIP` AS `NIP`,`p`.`nama_pegawai` AS `nama_pegawai`,`j`.`id` AS `id`,`j`.`nama_jabatan` AS `nama_jabatan`,`j`.`status` AS `status`,`jp`.`sejak_tanggal` AS `sejak_tanggal` from ((`tbl_pegawai` `p` join `tbl_jabatan_struktural_pegawai` `jp` on((`jp`.`nip_pegawai` = `p`.`NIP`))) join `tbl_jabatan_struktural` `j` on((`j`.`id` = `jp`.`jab_str`))) where ((`j`.`milik_dosen` = '1') and (`p`.`status_kepegawaian` = '1'))) */;

/*View structure for view vw_jabatan_struktural_pegawai */

/*!50001 DROP TABLE IF EXISTS `vw_jabatan_struktural_pegawai` */;
/*!50001 DROP VIEW IF EXISTS `vw_jabatan_struktural_pegawai` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`::1` SQL SECURITY DEFINER VIEW `vw_jabatan_struktural_pegawai` AS (select `p`.`NIP` AS `NIP`,`p`.`nama_pegawai` AS `nama_pegawai`,`j`.`id` AS `id`,`j`.`nama_jabatan` AS `nama_jabatan`,`j`.`status` AS `status`,`jp`.`sejak_tanggal` AS `sejak_tanggal` from ((`tbl_pegawai` `p` join `tbl_jabatan_struktural_pegawai` `jp` on((`jp`.`nip_pegawai` = `p`.`NIP`))) join `tbl_jabatan_struktural` `j` on((`j`.`id` = `jp`.`jab_str`))) where ((`j`.`milik_dosen` = '0') and (`p`.`status_kepegawaian` = '0'))) */;

/*View structure for view vw_profil_biodata */

/*!50001 DROP TABLE IF EXISTS `vw_profil_biodata` */;
/*!50001 DROP VIEW IF EXISTS `vw_profil_biodata` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`::1` SQL SECURITY DEFINER VIEW `vw_profil_biodata` AS (select `p`.`NIP` AS `NIP`,`p`.`nama_pegawai` AS `nama_pegawai`,`p`.`no_ktp` AS `no_ktp`,`p`.`tanggal_lahir` AS `tanggal_lahir`,`p`.`tempat_lahir` AS `tempat_lahir`,`p`.`jenis_kelamin` AS `jenis_kelamin`,`p`.`agama` AS `agama`,`p`.`alamat` AS `alamat`,`p`.`no_telepon` AS `no_telepon`,`p`.`no_telepon_rumah` AS `no_telepon_rumah`,`g`.`kd_golongan` AS `kd_golongan`,`g`.`nama_golongan` AS `nama_golongan`,`p`.`status_aktif` AS `status_aktif`,`p`.`nomor_kartu_pegawai` AS `nomor_kartu_pegawai`,`p`.`status_kepegawaian` AS `status_kepegawaian` from (`tbl_pegawai` `p` join `tbl_golongan` `g` on((`g`.`kd_golongan` = `p`.`kd_golongan`)))) */;

/*View structure for view vw_surat_tugas */

/*!50001 DROP TABLE IF EXISTS `vw_surat_tugas` */;
/*!50001 DROP VIEW IF EXISTS `vw_surat_tugas` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`::1` SQL SECURITY DEFINER VIEW `vw_surat_tugas` AS (select `t`.`id_sk` AS `id`,`ibu`.`deskripsi` AS `deskripsi`,`sk`.`tgl_awal` AS `tgl_awal`,`sk`.`tgl_akhir` AS `tgl_akhir`,`ibu`.`id_rubrik` AS `id_rubrik`,`t`.`maksud_perjalanan_dinas` AS `maksud_perjalanan_dinas`,`t`.`tempat_tujuan` AS `tempat_tujuan`,count(`t`.`nip_pegawai`) AS `total` from (((`db_sistem_informasi_kepegawaian`.`tbl_surat_tugas` `t` join `db_sistem_informasi_kepegawaian`.`tbl_sk_pegawai` `sk` on((`t`.`id_sk` = `sk`.`id`))) join `db_rubrik_kinerja`.`tbl_anak_rubrik` `anak` on((`anak`.`id_anak_rubrik` = `t`.`id_rubrik`))) join `db_rubrik_kinerja`.`tbl_rubrik` `ibu` on((`ibu`.`id_rubrik` = `anak`.`id_rubrik`))) group by `sk`.`id`) */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
