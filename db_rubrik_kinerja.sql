/*
SQLyog Ultimate v12.4.3 (64 bit)
MySQL - 10.1.32-MariaDB : Database - db_rubrik_kinerja
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_rubrik_kinerja` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `db_rubrik_kinerja`;

/*Table structure for table `tbl_anak_rubrik` */

DROP TABLE IF EXISTS `tbl_anak_rubrik`;

CREATE TABLE `tbl_anak_rubrik` (
  `id_anak_rubrik` int(11) NOT NULL AUTO_INCREMENT,
  `id_rubrik` char(15) DEFAULT NULL,
  `jabatan` varchar(50) DEFAULT NULL,
  `point` float DEFAULT NULL,
  PRIMARY KEY (`id_anak_rubrik`),
  KEY `id_rubrik` (`id_rubrik`),
  CONSTRAINT `tbl_anak_rubrik_ibfk_1` FOREIGN KEY (`id_rubrik`) REFERENCES `tbl_rubrik` (`id_rubrik`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_anak_rubrik` */

insert  into `tbl_anak_rubrik`(`id_anak_rubrik`,`id_rubrik`,`jabatan`,`point`) values 
(26,'RB-0001','Ketua',10),
(27,'RB-0001','Sekertaris',5),
(28,'RB-0001','Anggota',3),
(29,'RB-002','Ketua',10),
(30,'RB-002','Anggota',5),
(31,'RB-003','Ketua',15),
(32,'RB-003','Wakil Ketua',10);

/*Table structure for table `tbl_rubrik` */

DROP TABLE IF EXISTS `tbl_rubrik`;

CREATE TABLE `tbl_rubrik` (
  `id_rubrik` char(16) NOT NULL,
  `deskripsi` varchar(50) DEFAULT NULL,
  `jenis_pegawai` varchar(50) DEFAULT NULL,
  `katagori` varchar(50) DEFAULT NULL,
  `tahun` char(9) DEFAULT NULL,
  `status` varchar(12) DEFAULT NULL,
  `satuan` char(3) DEFAULT NULL,
  PRIMARY KEY (`id_rubrik`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tbl_rubrik` */

insert  into `tbl_rubrik`(`id_rubrik`,`deskripsi`,`jenis_pegawai`,`katagori`,`tahun`,`status`,`satuan`) values 
('RB-0001','Pembina UKM','Dosen',NULL,NULL,NULL,NULL),
('RB-002','Pengurus PKL','Dosen',NULL,NULL,NULL,NULL),
('RB-003','Kunjungan Tahunan','Dosen',NULL,NULL,NULL,NULL);

/* Trigger structure for table `tbl_rubrik` */

DELIMITER $$

/*!50003 DROP TRIGGER*//*!50032 IF EXISTS */ /*!50003 `tr_delete_rubrik` */$$

/*!50003 CREATE */ /*!50017 DEFINER = 'root'@'localhost' */ /*!50003 TRIGGER `tr_delete_rubrik` BEFORE DELETE ON `tbl_rubrik` FOR EACH ROW BEGIN
    delete from tbl_anak_rubrik where id_rubrik = old.id_rubrik;
    END */$$


DELIMITER ;

/*Table structure for table `vw_data1` */

DROP TABLE IF EXISTS `vw_data1`;

/*!50001 DROP VIEW IF EXISTS `vw_data1` */;
/*!50001 DROP TABLE IF EXISTS `vw_data1` */;

/*!50001 CREATE TABLE  `vw_data1`(
 `deskripsi` varchar(50) ,
 `jenis_pegawai` varchar(50) ,
 `status` varchar(12) ,
 `id_rubrik` char(16) ,
 `katagori` varchar(50) ,
 `tahun` char(9) ,
 `satuan` char(3) 
)*/;

/*Table structure for table `vw_rubrik` */

DROP TABLE IF EXISTS `vw_rubrik`;

/*!50001 DROP VIEW IF EXISTS `vw_rubrik` */;
/*!50001 DROP TABLE IF EXISTS `vw_rubrik` */;

/*!50001 CREATE TABLE  `vw_rubrik`(
 `id_rubrik` char(16) ,
 `katagori` varchar(50) ,
 `tahun` char(9) ,
 `satuan` char(3) ,
 `jabatan` varchar(50) ,
 `point` float 
)*/;

/*Table structure for table `vw_select_rubrik` */

DROP TABLE IF EXISTS `vw_select_rubrik`;

/*!50001 DROP VIEW IF EXISTS `vw_select_rubrik` */;
/*!50001 DROP TABLE IF EXISTS `vw_select_rubrik` */;

/*!50001 CREATE TABLE  `vw_select_rubrik`(
 `id_anak_rubrik` int(11) ,
 `id_rubrik` char(16) ,
 `deskripsi` varchar(50) 
)*/;

/*View structure for view vw_data1 */

/*!50001 DROP TABLE IF EXISTS `vw_data1` */;
/*!50001 DROP VIEW IF EXISTS `vw_data1` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_data1` AS (select `ibu`.`deskripsi` AS `deskripsi`,`ibu`.`jenis_pegawai` AS `jenis_pegawai`,`ibu`.`status` AS `status`,`ibu`.`id_rubrik` AS `id_rubrik`,`ibu`.`katagori` AS `katagori`,`ibu`.`tahun` AS `tahun`,`ibu`.`satuan` AS `satuan` from `tbl_rubrik` `ibu`) */;

/*View structure for view vw_rubrik */

/*!50001 DROP TABLE IF EXISTS `vw_rubrik` */;
/*!50001 DROP VIEW IF EXISTS `vw_rubrik` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_rubrik` AS (select `ibu`.`id_rubrik` AS `id_rubrik`,`ibu`.`katagori` AS `katagori`,`ibu`.`tahun` AS `tahun`,`ibu`.`satuan` AS `satuan`,`anak`.`jabatan` AS `jabatan`,`anak`.`point` AS `point` from (`tbl_rubrik` `ibu` join `tbl_anak_rubrik` `anak` on((`anak`.`id_rubrik` = `ibu`.`id_rubrik`)))) */;

/*View structure for view vw_select_rubrik */

/*!50001 DROP TABLE IF EXISTS `vw_select_rubrik` */;
/*!50001 DROP VIEW IF EXISTS `vw_select_rubrik` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_select_rubrik` AS (select `anak`.`id_anak_rubrik` AS `id_anak_rubrik`,`ibu`.`id_rubrik` AS `id_rubrik`,`ibu`.`deskripsi` AS `deskripsi` from (`tbl_anak_rubrik` `anak` join `tbl_rubrik` `ibu` on((`anak`.`id_rubrik` = `ibu`.`id_rubrik`))) group by `ibu`.`id_rubrik`) */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
