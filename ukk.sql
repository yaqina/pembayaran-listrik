/*
SQLyog Ultimate v12.08 (32 bit)
MySQL - 5.5.16 : Database - ukk
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`ukk` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `ukk`;

/*Table structure for table `admin` */

DROP TABLE IF EXISTS `admin`;

CREATE TABLE `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(111) DEFAULT NULL,
  `alamat` varchar(111) DEFAULT NULL,
  `uname` varchar(12) DEFAULT NULL,
  `pass` varchar(8) DEFAULT NULL,
  `status` varchar(111) DEFAULT NULL,
  `class` enum('user','admin') DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `admin` */

insert  into `admin`(`id`,`nama`,`alamat`,`uname`,`pass`,`status`,`class`) values (1,'aku','jl adoh','aku','aku','active','admin'),(2,'bruh','jl garing','bruh','bruh','active','user'),(3,'huh','jl sepur','huh','huh','active','user'),(4,'asd','hgjhg','123','123','deactive','user'),(5,NULL,NULL,'asd','asd','deactive','user'),(6,NULL,NULL,'qwe','qwe','deactive','user');

/*Table structure for table `events` */

DROP TABLE IF EXISTS `events`;

CREATE TABLE `events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `birth_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=latin1;

/*Data for the table `events` */

insert  into `events`(`id`,`name`,`birth_date`) values (1,'Uzumaki Naruto','1995-09-01'),(2,'Hyuga Hinata','1997-09-01'),(3,'Jiraiya','1971-04-13'),(4,'Hatake Kakashi','1980-04-13'),(5,'Gaara','1995-09-01'),(6,'Uchiha Itachi','1990-04-13'),(7,'Minato Namikaze','1971-01-07'),(8,'Hashirama Senju','1991-01-07'),(9,'Hiruzen Sarutobi','1961-01-07'),(10,'Uchiha Sasuke','1995-08-03'),(11,'Konohamaru','2002-12-08'),(12,'Orochimaru','1970-06-13'),(13,'Tsunade','1972-05-04'),(14,'Nara Shikamaru','1991-03-11'),(15,'Haruno Sakura','1992-03-15'),(16,'Sai','1995-03-03'),(17,'Ino','1985-08-18'),(18,'Guy','1985-10-06'),(19,'Yamato','1985-07-29'),(20,'Kishimoto Mashasi','1977-11-09'),(21,'J.K. Rowling','1977-05-22'),(22,'Tenten','1991-12-13'),(23,'Danzo','1960-02-05'),(43,'Kabuto','1988-02-05');

/*Table structure for table `pelanggan` */

DROP TABLE IF EXISTS `pelanggan`;

CREATE TABLE `pelanggan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(111) DEFAULT NULL,
  `alamat` varchar(111) DEFAULT NULL,
  `kd_tarif` char(10) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `kd_tarif` (`kd_tarif`),
  CONSTRAINT `pelanggan_ibfk_1` FOREIGN KEY (`kd_tarif`) REFERENCES `tarif` (`kode`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `pelanggan` */

insert  into `pelanggan`(`id`,`nama`,`alamat`,`kd_tarif`) values (1,'aku','1','1'),(2,'asd','as','123'),(3,'a','a',NULL),(4,'rehan','surabaya','1');

/*Table structure for table `pembayaran` */

DROP TABLE IF EXISTS `pembayaran`;

CREATE TABLE `pembayaran` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tgl_bayar` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `id_tagihan` int(11) DEFAULT NULL,
  `jumlah_tagihan` int(11) DEFAULT NULL,
  `biaya_denda` int(11) DEFAULT NULL,
  `biaya_admin` int(11) DEFAULT NULL,
  `status` varchar(111) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_tagihan` (`id_tagihan`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `pembayaran` */

insert  into `pembayaran`(`id`,`tgl_bayar`,`id_tagihan`,`jumlah_tagihan`,`biaya_denda`,`biaya_admin`,`status`) values (1,'2018-03-26 07:54:44',4,70010000,0,10000,'Sudah Bayar'),(2,'2018-03-26 07:59:43',4,70010000,0,10000,'Sudah Bayar'),(3,'2018-03-26 14:15:07',4,70010000,0,10000,'Sudah Bayar'),(4,'2018-03-26 14:16:01',1,85000,5000,10000,'Sudah Bayar'),(5,'2018-03-26 14:18:35',1,85000,5000,10000,'Sudah Bayar'),(6,'2018-03-27 10:38:46',1,85000,5000,10000,'Sudah Bayar');

/*Table structure for table `tagihan` */

DROP TABLE IF EXISTS `tagihan`;

CREATE TABLE `tagihan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tahun_tagih` int(11) DEFAULT NULL,
  `bulan_tagih` int(11) DEFAULT NULL,
  `pemakaian` varchar(111) DEFAULT NULL,
  `status` varchar(111) DEFAULT NULL,
  `id_pelanggan` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_pelanggan` (`id_pelanggan`),
  CONSTRAINT `tagihan_ibfk_1` FOREIGN KEY (`id_pelanggan`) REFERENCES `pelanggan` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

/*Data for the table `tagihan` */

insert  into `tagihan`(`id`,`tahun_tagih`,`bulan_tagih`,`pemakaian`,`status`,`id_pelanggan`) values (15,2017,1,'10000','Sudah Bayar',1),(16,2017,5,'10000','Sudah Bayar',1),(17,2017,3,'10000','Sudah Bayar',1),(18,2018,1,'10000','Sudah Bayar',2),(19,2018,3,'10000','Sudah Bayar',2),(20,2018,5,'10000','Sudah Bayar',2),(21,2019,1,'10000','Sudah Bayar',1),(22,2019,3,'10000','Sudah Bayar',1),(23,2019,5,'10000','Sudah Bayar',4),(24,2018,1,'10','Sudah Bayar',1);

/*Table structure for table `tarif` */

DROP TABLE IF EXISTS `tarif`;

CREATE TABLE `tarif` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kode` char(11) DEFAULT NULL,
  `daya` int(11) DEFAULT NULL,
  `tarif_perkwh` int(11) DEFAULT NULL,
  `beban` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `kode` (`kode`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `tarif` */

insert  into `tarif`(`id`,`kode`,`daya`,`tarif_perkwh`,`beban`) values (1,'1',100,7000,5000),(2,'123',200,14000,2000);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
