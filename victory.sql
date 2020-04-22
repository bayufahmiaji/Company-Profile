-- MySQL dump 10.13  Distrib 8.0.17, for Win64 (x86_64)
--
-- Host: localhost    Database: victory
-- ------------------------------------------------------
-- Server version	8.0.17

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
-- Table structure for table `analysis`
--

DROP TABLE IF EXISTS `analysis`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `analysis` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_by` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `analysis`
--

LOCK TABLES `analysis` WRITE;
/*!40000 ALTER TABLE `analysis` DISABLE KEYS */;
INSERT INTO `analysis` VALUES (1,'Akibiat Virus Corona di ID','Bayu Fahmiaji','Sep 02, 2016 · Demikian tutorial tentang bagaimana cara membuat sebuah halaman web berbasis HTML dengan menggunakan aplikasi Notepad++, cara ini masih terbilang sederhana karena belum ada pengaturan layout atau tata letak seperti yang ada pada website atau blog pada umumnya.\r\nMembuat Tampilan Layout Website Sederhana Dengan HTML dan CSS. Membuat Tampilan Layout Website Sederhana Dengan HTML dan CSS – Layout atau susunan kerangka website adalah salah satu unsur pembuatan web yang harus paling di perhatikan. terutama untuk teman-teman yang ingin mengkhususkan diri di bagian web designer. karena tampilan website akan menggambarkan tingkat\r\nApr 21, 2015 · Cukup sampai disini tutorial cara membuat website sederhana dengan HTML 5, Pada tahap ini kita sudah membuat website meskipun sangat sederhana, simple dan terbilang cukup mudah, web sederhana ini hanya terdiri dari satu halaman web saja. Kita bisa menambahkan halaman lain dengan cara duplikat halaman web yang sudah dibuat dan isinya kita ganti …\r\nDalam tutorial ini kami mengajarkan membuat website berita secara profesional bukan dengan embel-embel gratisan. jadi kita membutuhkan hosting dan domain aktif untuk membuat website portal berita ini. jangan kuatir apabila anda belum memiliki hosting dan domain, silahkan beli hosting di jagowebosting.com layanan hosting yang sesuai untuk …\r\nSep 02, 2016 · Demikian tutorial tentang bagaimana cara membuat sebuah halaman web berbasis HTML dengan menggunakan aplikasi Notepad++, cara ini masih terbilang sederhana karena belum ada pengaturan layout atau tata letak seperti yang ada pada website atau blog pada umumnya.','IMG-20180408-WA0009.jpg','2020-03-12 21:23:56','2020-03-12 21:23:56');
/*!40000 ALTER TABLE `analysis` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `binars`
--

DROP TABLE IF EXISTS `binars`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `binars` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_by` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `binars`
--

LOCK TABLES `binars` WRITE;
/*!40000 ALTER TABLE `binars` DISABLE KEYS */;
INSERT INTO `binars` VALUES (1,'Tutorial no 1','Bayu Fahmiaji','ABCDEFG','InShot_20170914_222955231.mp4','2020-03-15 07:40:23','2020-03-29 10:51:16');
/*!40000 ALTER TABLE `binars` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2020_03_10_033447_create_news_table',1),(4,'2020_03_13_020444_add_image_to_news',2),(5,'2020_03_13_041758_create_analysis_table',3),(6,'2020_03_15_141734_create_binars_table',4),(7,'2020_03_15_235443_create_partner_table',5);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `news` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_by` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `news`
--

LOCK TABLES `news` WRITE;
/*!40000 ALTER TABLE `news` DISABLE KEYS */;
INSERT INTO `news` VALUES (1,'Corna','Bayu Fahmiaji','Aing Kasep','2020-03-12 20:32:01','2020-03-29 10:31:43','Untitled-1.png'),(2,'Cara membuat portal berita sederhana dengan HTML, PHP, CSS (bootsrap), dan Javascript','Bayu Fahmiaji','Apakabar semua.. semoga selalu sehat dan baik hatinya :D. Kali ini saya akan memberikan\r\n sedikit tutorial untuk membuat Portal Berita Sederhana. Komponen yang akan digunakan\r\n tetap sama, yaitu PHP, HTML, JavaScript, dan CSS yang kali ini saya gunakan dari Bootsrap.\r\n Seperti biasanya, hal-hal yang harus dipersiapkan adalah Server Apache, Mysql, Browser, dan Editor. Oke, tidak berlama-lama, kita akan memulai tahap pertama. Oia, sebelumnya, kira-kira\r\n hasil akhirnya akan tampak seperti ini:\r\n<br>\r\nHalo, saya Ny. Sandra Ovia, pemberi pinjaman pribadi uang, apakah Anda berutang? Anda membutuhkan dorongan keuangan? pinjaman untuk membangun bisnis baru, untuk memenuhi tagihan Anda, memperluas bisnis Anda di tahun ini dan juga untuk renovasi rumah Anda. Saya memberikan pinjaman kepada perusahaan lokal, internasional dan juga pada tingkat bunga yang sangat rendah, yaitu 2%. Anda dapat menghubungi kami melalui Email: (sandraovialoanfirm@gmail.com)\r\nAnda dipersilakan ke perusahaan pinjaman kami dan kami akan memberikan yang terbaik dari layanan kami.','2020-03-12 21:09:32','2020-03-12 21:09:32','re-flow.png');
/*!40000 ALTER TABLE `news` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `partner`
--

DROP TABLE IF EXISTS `partner`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `partner` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `manager` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `partner`
--

LOCK TABLES `partner` WRITE;
/*!40000 ALTER TABLE `partner` DISABLE KEYS */;
INSERT INTO `partner` VALUES (1,'Perusahaan','Bayu Fahmiaji Fadillah','handal dalam segala hal','https://www.instagram.com/vifbandung/','lamborghini.jpg','2020-03-15 19:09:37','2020-03-15 19:09:37');
/*!40000 ALTER TABLE `partner` ENABLE KEYS */;
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
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Bayu Fahmiaji','bayufahmiaji1@gmail.com','$2y$10$ydIYDpM1ftBSvxAXmVL2IOVF.fNVnhqQjqSpV0/oMtAkLNzW5T13a','admin','wEP3GNsdKVafI6E7Zzp5Vw3qs0BZBx8wFcDCEg3PJ8Eo1LIw6LegYHOzkW5T','2020-03-11 06:55:09','2020-03-11 06:55:09');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-04-22  7:18:52
