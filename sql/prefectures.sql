-- MySQL dump 10.13  Distrib 5.7.23, for osx10.9 (x86_64)
--
-- Host: localhost    Database: mamp
-- ------------------------------------------------------
-- Server version	5.7.23

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `t_prefectures`
--

DROP TABLE IF EXISTS `t_prefectures`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `t_prefectures` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name_kanji` varchar(20) DEFAULT NULL,
  `name_hiragana` varchar(20) DEFAULT NULL,
  `name_romanization` varchar(20) DEFAULT NULL,
  `population` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_prefectures`
--

LOCK TABLES `t_prefectures` WRITE;
/*!40000 ALTER TABLE `t_prefectures` DISABLE KEYS */;
INSERT INTO `t_prefectures` VALUES (1,'北海道','ほっかいどう','hokkaido',5285430),(2,'青森','あおもり','aomori',1262686),(3,'岩手','いわて','iwate',1240522),(4,'宮城','みやぎ','miyagi',2313215),(5,'秋田','あきた','akita',980694),(6,'山形','やまがた','yamagata',1089806),(7,'福島','ふくしま','fukushima',1865143),(8,'茨城','いばらき','ibaraki',2882943),(9,'栃木','とちぎ','tochigi',1952926),(10,'群馬','ぐんま','gunma',1949440),(11,'埼玉','さいたま','saitama',7322645),(12,'千葉','ちば','chiba',6268585),(13,'東京','とうきょう','tokyo',13843403),(14,'神奈川','かながわ','kanagawa',9179835),(15,'新潟','にいがた','niigata',2245057),(16,'富山','とやま','toyama',1050246),(17,'石川','いしかわ','ishikawa',1142965),(18,'福井','ふくい','fukui',773731),(19,'山梨','やまなし','yamanashi',818391),(20,'長野','ながの','nagano',2063403),(21,'岐阜','ぎふ','gifu',1999406),(22,'静岡','しずおか','shizuoka',3656487),(23,'愛知','あいち','aichi',7539185),(24,'三重','みえ','mie',1790376),(25,'滋賀','しが','shiga',1412881),(26,'京都','きょうと','kyoto',2591779),(27,'大阪','おおさか','osaka',8824566),(28,'兵庫','ひょうご','hyogo',5483450),(29,'奈良','なら','nara',1340070),(30,'和歌山','わやかま','wakayama',934051),(31,'鳥取','とっとり','tottori',560517),(32,'島根','しまね','shimane',679626),(33,'岡山','おかやま','okayama',1899739),(34,'広島','ひろしま','hiroshima',2819962),(35,'山口','やまぐち','yamaguchi',1368495),(36,'徳島','とくしま','tokushima',736475),(37,'香川','かがわ','kagawa',961900),(38,'愛媛','えひめ','ehime',1351510),(39,'高知','こうち','kochi',705880),(40,'福岡','ふくおか','fukuoka',5111494),(41,'佐賀','さが','saga',819110),(42,'長崎','ながさき','nagasaki',1339438),(43,'熊本','くまもと','kumamoto',1756442),(44,'大分','おおいた','oita',1142943),(45,'宮崎','みやざき','miyazaki',1079873),(46,'鹿児島','かごしま','kagoshima',1612800),(47,'沖縄','おきなわ','okinawa',1448101);
/*!40000 ALTER TABLE `t_prefectures` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-02-03 21:01:08
