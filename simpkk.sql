-- MySQL dump 10.13  Distrib 8.0.26, for Win64 (x86_64)
--
-- Host: localhost    Database: simpkk
-- ------------------------------------------------------
-- Server version	5.7.34-log

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `data_penduduk`
--

DROP TABLE IF EXISTS `data_penduduk`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `data_penduduk` (
  `id_biodata` int(20) NOT NULL AUTO_INCREMENT,
  `NIK` varchar(50) DEFAULT NULL,
  `no_kk` varchar(50) DEFAULT NULL,
  `Nama_Lengkap` varchar(200) DEFAULT NULL,
  `alamat` varchar(200) DEFAULT NULL,
  `dusun` varchar(50) DEFAULT NULL,
  `Nomor_Paspor` varchar(30) DEFAULT NULL,
  `Tgl_Akh_Paspor` date DEFAULT NULL,
  `Jenis_Kelamin` varchar(20) CHARACTER SET sjis DEFAULT NULL,
  `Tempat_Lahir` varchar(200) DEFAULT NULL,
  `Tgl_Lahir` date DEFAULT NULL,
  `Akta_Lahir` enum('Ada','Tidak Ada') DEFAULT NULL,
  `No_Akta_Lahir` varchar(30) DEFAULT NULL,
  `Gol_Darah` varchar(5) DEFAULT NULL,
  `Agama` varchar(20) DEFAULT NULL,
  `Status_Perkawinan` varchar(50) DEFAULT NULL,
  `Akta_Perkawinan` varchar(30) DEFAULT NULL,
  `No_Akta_Perkawinan` varchar(30) DEFAULT NULL,
  `Tgl_Perkawinan` date DEFAULT NULL,
  `Akta_Cerai` enum('Ada','Tidak Ada') DEFAULT NULL,
  `tgl_Perceraian` date DEFAULT NULL,
  `No_Akta_Perceraian` varchar(30) DEFAULT NULL,
  `Stat_Hub_Keluarga` varchar(100) DEFAULT NULL,
  `Kelainan_Fisik_Mental` enum('Ada','Tidak Ada') DEFAULT NULL,
  `Penyandang_Cacat` varchar(100) DEFAULT NULL,
  `Pendidikan_Terakhir` varchar(50) DEFAULT NULL,
  `Pekerjaan` varchar(100) DEFAULT NULL,
  `Kewarganegaraan` varchar(150) DEFAULT NULL,
  `Nama_Lengkap_Ibu` varchar(100) DEFAULT NULL,
  `Nama_Lengkap_Ayah` varchar(200) DEFAULT NULL,
  `no_rumah` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `tiperumah` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `suku` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `usaha` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `telp_hp` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
  `penyakit` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `penghasilan` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `keterangan_biodata` text CHARACTER SET utf8,
  `status_hidup` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
  `sektor_pekerjaan` varchar(200) CHARACTER SET utf8 DEFAULT NULL,
  `lat` double DEFAULT NULL,
  `lng` double DEFAULT NULL,
  `foto` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `last_update` date DEFAULT NULL,
  `jab_des` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_biodata`) USING BTREE,
  KEY `NIK` (`NIK`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=1857 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `data_penduduk`
--

LOCK TABLES `data_penduduk` WRITE;
/*!40000 ALTER TABLE `data_penduduk` DISABLE KEYS */;
INSERT INTO `data_penduduk` VALUES (1,'7501044411540001','7501042208130002','Amina Ismail','Desa Dunggala','Buhiya','-',NULL,'Perempuan','Gorontalo','1954-11-04','Tidak Ada','-','-','Islam','Kawin','-','-',NULL,'',NULL,'-','Kepala Keluarga','','-','Tidak Tamat SD','IRT','Indonesia','Karsum Maladika','Ismail Paputungan','01','-','Gorontalo','-','-','-','0','-','Hidup','-',0.631211927279462,122.869122080803,'aminah ismail.jpeg','2019-07-29','-'),(2,'7501045807790002','7501042208130002','Hawaria Yusuf','Desa Dunggala','Buhiya','-',NULL,'Perempuan','Gorontalo','1979-07-18','Tidak Ada','-','-','Islam','Belum Kawin','-','-',NULL,'',NULL,'-','Anak','','-','Tamat SD','Lainnya','Indonesia','Amina Ismail','Aripin Yusuf','01','Permanen','Gorontalo','-','-','-','Dibawah Rp. 500.000','-','Hidup','-',0.631211927279462,122.869122080803,'aminah ismail.jpeg','2019-07-29','-'),(3,'7501041112740002','7501042402076289','Ucin Ishak','Desa Dunggala','Buhiya','-',NULL,'Laki-laki','Gorontalo','1974-12-11','Tidak Ada','-','-','Islam','Kawin','-','-',NULL,'',NULL,'-','Kepala Keluarga','','-','Tamat SD','Petani','Indonesia','Sopyan Ibrahim','Kasim Ishak','02','-','Gorontalo','-','-','-','Rp.2.000.000 - Rp.3.000.000','-','Hidup','-',0.631248134903708,122.868902139664,'ucin ishak.jpeg','2019-07-29','-'),(4,'7501046303730001','7501042402076289','Rusni Djamula','Desa Dunggala','Buhiya','-',NULL,'Perempuan','Gorontalo','1973-03-23','Tidak Ada','-','-','Islam','Kawin','-','-',NULL,'',NULL,'-','Istri','','-','Tamat SD','IRT','Indonesia','Yuli Nayola','Sukman Djamula','02','-','Gorontalo','-','-','-','0','-','Hidup','-',0.631248134903708,122.868902139664,'ucin ishak.jpeg','2019-07-29','-'),(5,'7501040108980001','7501042402076289','Taufik Ishak','Desa Dunggala','Buhiya','-',NULL,'Laki-laki','Gorontalo','1998-08-01','Tidak Ada','-','-','Islam','Belum Kawin','-','-',NULL,'',NULL,'-','Anak','','-','Tamat SLTA','Lainnya','Indonesia','Rusni Djamula','Ucin Ishak','02','-','Gorontalo','-','-','-','Rp.1.000.000 - Rp.2.000.000','-','Hidup','-',0.631248134903708,122.868902139664,'ucin ishak.jpeg','2019-07-29','-'),(6,'7501045806680002','7501041201110006','Olis Ishak','Desa Dunggala','Buhiya','-',NULL,'Perempuan','Dunggala','1968-06-18','Tidak Ada','-','-','Islam','Belum Kawin','-','-',NULL,'',NULL,'-','Kepala Keluarga','','-','Tamat SD','IRT','Indonesia','Sopyan Ibrahim','Kasim Ishak','03','-','Gorontalo','-','-','-','0','-','Hidup','-',0.631409057675031,122.869122080802,'olisn ishak.jpeg','2019-07-29','-'),(7,'7501045806680002','7501041201110006','Santi Ahmad','Desa Dunggala','Buhiya','-',NULL,'Perempuan','Kab. Gorontalo','1995-05-24','Tidak Ada','-','-','Islam','Belum Kawin','-','-',NULL,'',NULL,'-','Anak','','-','Tamat SLTP','Lainnya','Indonesia','Olis Ishak','Andi Ahmad','03','Permanen','Gorontalo','-','-','-','0','-','Hidup','-',0.631409057675031,122.869122080802,'olisn ishak.jpeg','2019-07-29','-'),(8,'7501044206000001','7501041201110006','Fatma Ahmad','Desa Dunggala','Buhiya','-',NULL,'Perempuan','Gorontalo','2000-06-02','Tidak Ada','-','-','Islam','Belum Kawin','-','-',NULL,'',NULL,'-','Anak','','-','Tamat SLTP','Pelajar','Indonesia','Olis Ishak','Andi Ahmad','03','Semi Permanen','Gorontalo','-','-','-','0','-','Hidup','-',0.631409057675031,122.869122080802,'olisn ishak.jpeg','2019-07-29','-'),(9,'7501042011010001','7501041201110006','Abd Halim Ahmad','Desa Dunggala','Buhiya','-',NULL,'Laki-laki','Gorontalo','2001-11-20','Tidak Ada','-','-','Islam','Belum Kawin','-','-',NULL,'',NULL,'-','Anak','','-','Sedang SD','Pelajar','Indonesia','Olis Ishak','Andi Ahmad','03','-','Gorontalo','-','-','-','0','-','Hidup','-',0.631409057675031,122.869122080802,'olisn ishak.jpeg','2019-07-29','-'),(10,'7501046706060001','7501041201110006','Sinta Ahmad','Desa Dunggala','Buhiya','-',NULL,'Perempuan','Tibawa','2006-06-27','Tidak Ada','-','-','Islam','Belum Kawin','-','-',NULL,'',NULL,'-','Anak','','-','Sedang SLTP','Pelajar','Indonesia','Olis Ishak','Andi Ahmad','03','-','Gorontalo','-','-','-','0','-','Hidup','-',0.631409057675031,122.869122080802,'olisn ishak.jpeg','2019-07-29','-'),(11,'7306050107900050','7501041511170001','Muh. Ridwanto','Desa Dunggala','Buhiya','-',NULL,'Laki-laki','Palu','1990-07-01','Tidak Ada','-','-','Islam','Kawin','-','-',NULL,'',NULL,'-','Kepala Keluarga','','-','Tamat SLTA','Karyawan Swasta','Indonesia','Rudiah ','Mapanto Daeng','03','-','Gorontalo','-','-','-','Rp.2.000.000 - Rp.3.000.000','-','Hidup','-',0.631409057675031,122.869122080802,'olisn ishak.jpeg','2019-07-29','-'),(12,'7501044512890001','7501041511170001','Serlin Ahmad','Desa Dunggala','Buhiya','-',NULL,'Perempuan','Gorontalo','1989-12-05','Tidak Ada','-','-','Islam','Kawin','-','-',NULL,'',NULL,'-','Istri','','-','Tamat SLTA','Karyawan Swasta','Indonesia','Olis Ishak','Andi Ahmad','03','-','Gorontalo','-','-','-','Rp.1.000.000 - Rp.2.000.000','-','Hidup','-',0.631409057675031,122.869122080802,'olisn ishak.jpeg','2019-07-29','-'),(13,'7501046802940002','7501041906120004','Iin Ahmad','Desa Dunggala','Buhiya','-',NULL,'Perempuan','Gorontalo','1994-02-28','Tidak Ada','-','-','Islam','Kawin','-','-',NULL,'',NULL,'-','Kepala Keluarga','','-','Tamat SLTA','IRT','Indonesia','Olis Ishak','Andi Ahmad','03','-','Gorontalo','-','-','-','0','-','Hidup','-',0.631409057675031,122.869122080802,'olisn ishak.jpeg','2019-07-29','-'),(14,'7501044512110002','7501041906120004','Fauziyah Bilondatu','Desa Dunggala','Buhiya','-',NULL,'Perempuan','Kab. Gorontalo','2011-12-05','Ada','7501-LU-19062012-0044','-','Islam','Belum Kawin','-','-',NULL,'',NULL,'-','Anak','','-','Sedang SD','Pelajar','Indonesia','Iin Ahmad','Syaiful Bilondatu','03','-','Gorontalo','-','-','-','0','-','Hidup','-',0.631409057675031,122.869122080802,'olisn ishak.jpeg','2019-07-29','-'),(15,'7501045305680001','7501040906150002','Ulfa Isima','Desa Dunggala','Buhiya','-',NULL,'Perempuan','Gorontalo','1968-05-13','Tidak Ada','-','-','Islam','Janda','-','-',NULL,'',NULL,'-','Kepala Keluarga','','-','Tamat SD','IRT','Indonesia','Fatma Mohune','Haris Isima','04','-','Gorontalo','-','-','-','0','-','Hidup','-',0.631871710614862,122.868758641481,'safrin uno.jpg','2019-07-29','-'),(16,'7501042411040002','7501040906150002','Fit Mohamad Salim Uno','Desa Dunggala','Buhiya','-',NULL,'Laki-laki','Tibawa','2004-11-24','Ada','4920/1920/II/04/2005','-','Islam','Belum Kawin','-','-',NULL,'',NULL,'-','Anak','','-','Sedang SLTA','Pelajar','Indonesia','Ulfa Isima','Sukiman Uno','04','Permanen','Gorontalo','-','-','-','0','-','Hidup','-',0.631871710614862,122.868758641481,'safrin uno.jpg','2019-07-29','-'),(17,'7501011107870002','7501042110160001','Miftahol Arifin','Desa Dunggala','Buhiya','-',NULL,'Laki-laki','Pamekasan','1987-11-07','Tidak Ada','-','-','Islam','Kawin','-','-',NULL,'',NULL,'-','Kepala Keluarga','','-','Tamat SLTA','Polri','Indonesia','Suriah','Mad Dahri','04','-','Gorontalo','-','-','-','Rp.3.000.000 - Rp.5.000.000','-','Hidup','-',0.631871710614862,122.868758641481,'safrin uno.jpg','2019-07-29','-'),(18,'7501045203920001','7501042110160001','Lusiyanti Uno, Skm','Desa Dunggala','Buhiya','-',NULL,'Perempuan','Tibawa','1992-12-03','Ada','530/1920/II/06/1999','-','Islam','Kawin','-','-',NULL,'',NULL,'-','Istri','','-','Tamat S1','IRT','Indonesia','Ulfa Isima','Sukiman Uno','04','-','Gorontalo','-','-','-','0','-','Hidup','-',0.631871710614862,122.868758641481,'safrin uno.jpg','2019-07-29','-'),(19,'7501044503170001','7501042110160001','Anindita Kanzia Azzahra','Desa Dunggala','Buhiya','-',NULL,'Perempuan','Gorontalo','2017-05-03','Ada','7501-LU-23052017-0006','-','Islam','Belum Kawin','-','-',NULL,'',NULL,'-','Anak','','-','Belum Sekolah','Belum Bekerja','Indonesia','Lusianti Uno','Miftahol Arifin','04','Permanen','Gorontalo','-','-','-','0','-','Hidup','-',0.631871710614862,122.868758641481,'safrin uno.jpg','2019-07-29','-'),(20,'7501041610870001','7501042105130005','Sarfin Uno','Desa Dunggala','Buhiya','-',NULL,'Laki-laki','Tibawa','1987-10-16','Tidak Ada','-','-','Islam','Kawin','-','-',NULL,'',NULL,'-','Kepala Keluarga','','-','Tamat SLTA','Polri','Indonesia','Ulfa Isima','Sukiman Uno','04','-','Gorontalo','-','-','-','Rp.3.000.000 - Rp.5.000.000','-','Hidup','-',0.631871710614862,122.868758641481,'safrin uno.jpg','2019-07-29','-');
/*!40000 ALTER TABLE `data_penduduk` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kegiatans`
--

DROP TABLE IF EXISTS `kegiatans`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `kegiatans` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tanggal` date NOT NULL,
  `detail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kegiatans`
--

LOCK TABLES `kegiatans` WRITE;
/*!40000 ALTER TABLE `kegiatans` DISABLE KEYS */;
INSERT INTO `kegiatans` VALUES (2,'1988-03-25','Expedita adipisci facere quibusdam qui. Amet qui officia vel error voluptatibus quisquam.','2021-10-13 06:22:50','2021-10-13 06:22:50'),(3,'1981-01-03','Voluptates a vitae et sit. Error sunt reprehenderit et et ut.','2021-10-13 06:22:50','2021-10-13 06:22:50'),(4,'1997-06-14','Quibusdam dolores in quo est. Id dolorem totam eveniet accusantium. Error voluptas eum non nostrum.','2021-10-13 06:22:50','2021-10-13 06:22:50'),(5,'1988-01-22','Eos illum quia sit quod sunt et qui. Provident quidem iure et quo.','2021-10-13 06:22:50','2021-10-13 06:22:50'),(8,'1976-03-30','Quia saepe omnis enim autem architecto sint et quod. Laboriosam qui necessitatibus qui aperiam.','2021-10-13 06:22:50','2021-10-13 06:22:50'),(9,'1970-07-21','Ea ut dolorem libero rerum pariatur. Hic qui deleniti quisquam voluptates dignissimos.','2021-10-13 06:22:50','2021-10-13 06:22:50'),(10,'1981-07-26','Distinctio blanditiis eos odio non. A ut quia unde accusamus cumque.','2021-10-13 06:22:50','2021-10-13 06:22:50');
/*!40000 ALTER TABLE `kegiatans` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2019_12_14_000001_create_personal_access_tokens_table',1),(5,'2021_10_12_014331_create_permission_tables',2),(6,'2021_10_13_133418_create_kegiatans_table',3),(7,'2021_10_13_140013_create_kegiatans_table',4),(9,'2021_10_14_002827_create_wartas_table',5),(10,'2021_10_14_233640_create_prokers_table',6);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `model_has_permissions`
--

DROP TABLE IF EXISTS `model_has_permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) unsigned NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `model_has_permissions`
--

LOCK TABLES `model_has_permissions` WRITE;
/*!40000 ALTER TABLE `model_has_permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `model_has_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `model_has_roles`
--

DROP TABLE IF EXISTS `model_has_roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) unsigned NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `model_has_roles`
--

LOCK TABLES `model_has_roles` WRITE;
/*!40000 ALTER TABLE `model_has_roles` DISABLE KEYS */;
INSERT INTO `model_has_roles` VALUES (2,'App\\Models\\User',1),(1,'App\\Models\\User',2),(3,'App\\Models\\User',3),(4,'App\\Models\\User',4),(2,'App\\Models\\User',5),(2,'App\\Models\\User',14),(2,'App\\Models\\User',15);
/*!40000 ALTER TABLE `model_has_roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permissions`
--

DROP TABLE IF EXISTS `permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `permissions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permissions`
--

LOCK TABLES `permissions` WRITE;
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;
INSERT INTO `permissions` VALUES (1,'show users','web','2021-10-11 17:56:22','2021-10-11 17:56:22'),(2,'create user','web','2021-10-11 18:42:43','2021-10-11 18:42:43'),(3,'delete user','web','2021-10-11 18:42:47','2021-10-11 18:42:47'),(4,'edit user','web','2021-10-11 18:42:52','2021-10-11 18:42:52');
/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `prokers`
--

DROP TABLE IF EXISTS `prokers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `prokers` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tujuan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sasaran` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pj` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `program_pokok` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `prokers`
--

LOCK TABLES `prokers` WRITE;
/*!40000 ALTER TABLE `prokers` DISABLE KEYS */;
INSERT INTO `prokers` VALUES (1,'Sosialisasi Tata Cara/Etika Berpakaian Yang Baik dan Sopan\n','Menumbuhkan kesadaran untuk memelihara dan melindungi tubuh dan jiwa sebaik mungkin\n','Pengurus TP.PKK Desa dan Ketua-Ketua Dasa Wisma\n','Pokja III TP.PKK Desa\n','PROGRAM SANDANG',NULL,NULL),(2,'rtt','rtr','rt','rt','Pengembangan Kehidupan Berkoperasi','2021-10-14 17:25:36','2021-10-14 17:25:36'),(3,'Al Iqbal Bin Salim','fgsd','kl.','dcsd','Kesehatan','2021-10-14 20:37:46','2021-10-14 20:37:46'),(4,'hdfgd','kdfgnkn','dfkgndkfg`','dfgm`','Gotong Royong','2021-10-14 20:38:43','2021-10-14 20:38:43'),(5,'sgsd','dfogksdfl','fglhms','fglhm','Penghayatan dan Pengamalan Pancasila','2021-10-14 20:41:22','2021-10-14 20:41:22'),(6,'rhtyhtbbbbbbbbb','ghjfgbbbbbb','hjghjkbbbbb','hjkhjklbbbbbb','Perencanaan Sehat','2021-10-14 20:43:41','2021-10-15 02:02:10'),(7,'fgdg','fgd','dfgdf','dfgd','Perumahan dan Tata Laksana Rumah Tangga','2021-10-14 20:51:49','2021-10-14 20:51:49'),(8,'hjgfhjgdddddd','hjgdddd','ghjgdddd','ghjjgddd','Kelestarian Lingkungan Hidup','2021-10-14 20:52:32','2021-10-15 02:04:03'),(9,'jkjaaaaaaaaa','kl.jkaaaaa',';klaaaaa',';/ljaaaa','Perencanaan Sehat','2021-10-14 20:54:39','2021-10-15 02:01:31'),(10,'ccccbb','cb','cb','cb','Pendidikan dan Ketrampilan','2021-10-15 02:03:13','2021-10-15 02:03:34'),(11,'nnn','n','n','n','Kelestarian Lingkungan Hidup','2021-10-15 02:04:52','2021-10-15 02:04:52'),(12,'dd','d','d','dd','Pengembangan Kehidupan Berkoperasi','2021-10-15 02:05:33','2021-10-15 02:05:33'),(13,'sdfs','sdfs','dfs',';/lj','Perencanaan Sehat','2021-10-15 02:09:06','2021-10-15 02:09:06'),(14,'888888','ghj','jkh','jkh','Kelestarian Lingkungan Hidup','2021-10-15 02:11:53','2021-10-15 02:11:53'),(15,'jkl','gjgh','sdfsd','ghjg','Pendidikan dan Ketrampilan','2021-10-15 02:12:52','2021-10-15 02:12:52'),(16,'vbcv','fgh','fgh','fghf','Kesehatan','2021-10-15 02:14:57','2021-10-15 02:14:57'),(17,'fghfg','gfh','hfg','fghj','Pengembangan Kehidupan Berkoperasi','2021-10-15 02:15:17','2021-10-15 02:15:17'),(18,'sdfs','sdf','fgh','dg','Kelestarian Lingkungan Hidup','2021-10-15 02:18:17','2021-10-15 02:18:17');
/*!40000 ALTER TABLE `prokers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `role_has_permissions`
--

DROP TABLE IF EXISTS `role_has_permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) unsigned NOT NULL,
  `role_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `role_has_permissions_role_id_foreign` (`role_id`),
  CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `role_has_permissions`
--

LOCK TABLES `role_has_permissions` WRITE;
/*!40000 ALTER TABLE `role_has_permissions` DISABLE KEYS */;
INSERT INTO `role_has_permissions` VALUES (1,1),(2,1),(3,1),(4,1);
/*!40000 ALTER TABLE `role_has_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `roles` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'super-admin','web','2021-10-11 17:54:32','2021-10-11 17:54:32'),(2,'member','web','2021-10-11 17:55:04','2021-10-11 17:55:04'),(3,'ketua','web','2021-10-11 17:55:24','2021-10-11 17:55:24'),(4,'sekretaris','web','2021-10-11 17:55:33','2021-10-11 17:55:33');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Iqbal Salim','iqbalbinsalim@gmail.com',NULL,'$2y$10$8f4Rlm5sLbjC.MrHbBRTBulKPxqbtXbV7377TaJgf2BIvTJj6xihe',NULL,'2021-10-11 00:01:36','2021-10-11 00:01:36'),(2,'Admin','admin@gmail.com',NULL,'$2y$10$joeNH3pIExXV4mGQ0L290.ofsgDRTPliyqiL15x7UPWBglcj0pcmq',NULL,'2021-10-11 18:03:52','2021-10-11 18:03:52'),(3,'Ketua','ketua@gmail.com',NULL,'$2y$10$5.61MaLprQnZaiyYFsmhZucq0OIluxY9M3yGzvv4vmafxFFICbzMm',NULL,'2021-10-11 18:04:22','2021-10-11 18:04:22'),(4,'Sekretaris','sek@gmail.com',NULL,'$2y$10$50mrd89x/rIBqLZ18pF1AeskCfsrzbr18wchWUN8UQBpPMFnLkTl2',NULL,'2021-10-11 18:05:03','2021-10-11 18:05:03'),(5,'Fahri','fahri@gmail.com',NULL,'$2y$10$3.Y20H1iQGKtgBYckaFABudNb66SMOe16Btsfp8EneqmiqoT0ZOXe',NULL,'2021-10-11 18:05:41','2021-10-11 18:05:41'),(14,'John','john@gmail.com',NULL,'$2y$10$l27fhAvqhaeeISkawW2h8.eQhRQST9LqjxoqfEl11eXcB.bZ5d3PS',NULL,'2021-10-12 22:22:57','2021-10-12 22:22:57'),(15,'Due','due@gmail.com',NULL,'$2y$10$TTjg2dm2veJyZJ7Ziqr6iuJ0etYtQJKD4F69G4Vu7oAP8DVk3uv/m',NULL,'2021-10-12 22:23:31','2021-10-12 22:23:31');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wartas`
--

DROP TABLE IF EXISTS `wartas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `wartas` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `penulis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wartas`
--

LOCK TABLES `wartas` WRITE;
/*!40000 ALTER TABLE `wartas` DISABLE KEYS */;
INSERT INTO `wartas` VALUES (3,'Quod dolorem aut voluptas quod.','Commodi et quibusdam voluptatibus soluta fugit vel. Voluptas quo accusantium ut eveniet libero. Ut modi animi assumenda inventore quis a. Voluptatem ea voluptas sequi impedit qui velit. Voluptatem architecto ut numquam sunt. Illo consequatur laboriosam omnis neque. Vel iusto quia dolor illo consectetur error est. Aut error commodi ratione dolores sit. Vero eos mollitia et magni quia ullam quia ipsam. Dolorem ullam consequatur omnis excepturi voluptatem est numquam rem. Quis illum unde suscipit accusantium aut. Officia neque molestiae modi minima. Cumque in sequi sapiente reprehenderit officia error voluptatem aut. Occaecati autem voluptatem perspiciatis nobis vero molestiae ad quis. Commodi dolores distinctio voluptate neque. Magni dignissimos blanditiis sint maxime id nostrum. Dolorem sed distinctio et praesentium. Maxime provident et quae libero aliquam.','Mr. Demarco Schumm I','Quis est rem.','2021-10-13 16:43:36','2021-10-13 16:43:36'),(4,'Dolorum deleniti non est ullam aperiam.','Vitae quidem quasi rerum rem totam. Officiis consequatur omnis velit ipsam. Consequatur fugiat et eos quis quo et nisi. Doloremque id ullam adipisci quasi excepturi possimus totam. Quidem omnis accusamus non quo sit. Autem aliquam excepturi vel aliquam amet. Sed aut et illo id. Ut beatae optio suscipit numquam aut veritatis eveniet. Incidunt quas tempora excepturi nam perferendis vel. Et atque dolores ut non ea quia vitae. Et eligendi enim ullam placeat possimus qui suscipit. Ea exercitationem dolor in ipsa dignissimos. Et saepe aut architecto aut accusamus libero consequatur. Aperiam corrupti aliquam non optio dolor repellat totam. Et ipsum minima temporibus iste dolore quisquam. Mollitia quidem nesciunt ut praesentium reprehenderit sit. Exercitationem delectus nihil aut aliquam vel voluptate corporis. Ullam quas autem exercitationem quia voluptas iusto laboriosam et. Praesentium vel dolor non laudantium.','Shyann Huels','Tempora aut ut.','2021-10-13 16:43:36','2021-10-13 16:43:36'),(6,'hjh','A maecenas mattis commodo netus accumsan magna. Luctus aliquet purus magnis per a nunc sodales. Curae pede netus curabitur pellentesque rhoncus. In sollicitudin faucibus nisi. Vulputate penatibus natoque rhoncus dictumst iaculis pulvinar. Mauris etiam cras nisi.\n\nMi scelerisque nisl risus semper. Convallis etiam libero sed. Ex habitant curabitur libero. Pede dolor ex sapien placerat. Efficitur egestas et dictumst potenti hendrerit quisque phasellus. Montes aliquet felis luctus ornare sem habitasse. Morbi euismod curae risus accumsan praesent. Proin himenaeos fermentum luctus vel gravida.\n\nTaciti aptent magnis cras maecenas morbi donec. Velit pretium himenaeos congue sociosqu odio semper. Torquent nec est ut lacus. Elit dapibus sollicitudin tellus.\n\nJusto eros nascetur vel pretium lorem aliquet maecenas. Justo libero duis ornare quis penatibus lacus. Augue integer nascetur vitae elit luctus mattis. Magna libero dis amet mus bibendum litora cras. Laoreet maecenas nullam phasellus mi class ex.\n\nA integer sollicitudin ac erat orci. Hendrerit dignissim convallis phasellus ac habitant. Nam volutpat sed magnis fames quis mollis nascetur. Vitae tristique aenean faucibus magna praesent habitant. Ad suspendisse sagittis ante litora et dictum. Class nullam quis natoque purus feugiat. Nibh hac nisi sodales. Consequat ultricies hac magnis aliquam.\n\nNetus penatibus natoque rhoncus vivamus. Laoreet dignissim hendrerit primis vivamus. Netus pellentesque gravida nisl sapien malesuada ac. Vel ad sapien consectetur ridiculus purus. Id proin porta si. Tellus sit tristique purus viverra. Natoque hac euismod cursus ultrices. Nascetur consequat diam vehicula maximus laoreet dui vel.\n\nPer lacus nascetur porta commodo suscipit lorem. Dis volutpat orci viverra malesuada eget. Penatibus sed pellentesque donec id mi. Rutrum si sodales accumsan. Fames maecenas adipiscing etiam. Quis id metus elit maximus dolor hac primis. Magnis ridiculus vehicula ex id nostra nec. Sollicitudin ultricies dictumst diam facilisi magna fringilla posuere.','jhh','images/wLiFrYu83I78YZBRxp4uP3IXyE34bUPG8ZBx3xQQ.jpg','2021-10-13 18:43:39','2021-10-13 23:18:09'),(8,'Quam unde iusto sit modi sed.','Nulla explicabo dolorem natus nostrum ut autem. Ducimus aut sit quia ipsam. Rem voluptate necessitatibus rerum voluptate quidem. Quaerat expedita ut culpa accusantium. Sapiente et exercitationem corporis eius quos libero non. Officia autem eligendi ipsa voluptatem aut excepturi adipisci. Non tempora natus aperiam dicta ut explicabo. Inventore tenetur voluptatem dolores quod. Saepe repellendus doloribus sit minus quisquam. Optio esse suscipit omnis repellat. Quae eveniet sit et. Fugit vel cumque harum nihil consectetur nisi ut. Quam rerum nesciunt dolorem vel ea perspiciatis maiores. Suscipit sed delectus laboriosam dignissimos ut ratione fugit. Dignissimos exercitationem ratione soluta iure ratione. Aut distinctio provident qui. Architecto praesentium fugiat et quos laudantium sed a aliquam. Delectus molestiae fugit ipsam distinctio repellendus in. Qui dignissimos ipsa omnis dolor. Quod non voluptatum aut molestias neque. Modi necessitatibus fugiat voluptates in id autem.','Elisha Runolfsson','images/Bh3bNCEfnnKtFH09Mw2z46NjQrtwkXBJtbL97xsf.jpg','2021-10-13 19:27:16','2021-10-13 23:18:54');
/*!40000 ALTER TABLE `wartas` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-10-15 21:45:14
