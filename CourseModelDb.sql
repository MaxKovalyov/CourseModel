-- MySQL dump 10.13  Distrib 8.0.25, for Win64 (x86_64)
--
-- Host: localhost    Database: coursemodel1
-- ------------------------------------------------------
-- Server version	8.0.25

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
-- Table structure for table `course`
--

DROP TABLE IF EXISTS `course`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `course` (
  `idCourse` int unsigned NOT NULL,
  `nameCourse` varchar(45) NOT NULL,
  `costCourse` float unsigned NOT NULL,
  PRIMARY KEY (`idCourse`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `course`
--

LOCK TABLES `course` WRITE;
/*!40000 ALTER TABLE `course` DISABLE KEYS */;
INSERT INTO `course` VALUES (1,'.Net',5000),(2,'Informatika',6000),(5,'Full-Stack',9999.99),(6,'Politika',1666),(10,'History',3000),(77,'Java',6000);
/*!40000 ALTER TABLE `course` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `professor`
--

DROP TABLE IF EXISTS `professor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `professor` (
  `idProfessor` int unsigned NOT NULL,
  `nameProfessor` varchar(45) NOT NULL,
  `addressProfessor` varchar(45) NOT NULL,
  `phoneProfessor` varchar(45) NOT NULL,
  `salaryProfessor` float unsigned NOT NULL,
  PRIMARY KEY (`idProfessor`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `professor`
--

LOCK TABLES `professor` WRITE;
/*!40000 ALTER TABLE `professor` DISABLE KEYS */;
INSERT INTO `professor` VALUES (5,'Volosovec Danil Pavlovich','Yakova 2','+543523',34500.5),(10,'Gromov Misha Kuzmich','Kirova 34','+7867765',40000),(15,'Uriy','Privet 2','+765532982332',26666),(20,'Petr','Yamino 3','+548234',32800);
/*!40000 ALTER TABLE `professor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `student` (
  `idStudent` int unsigned NOT NULL,
  `nameStudent` varchar(45) NOT NULL,
  `addressStudent` varchar(45) NOT NULL,
  `phoneStudent` varchar(45) NOT NULL,
  `emailStudent` varchar(45) NOT NULL,
  `performStudent` varchar(45) NOT NULL,
  PRIMARY KEY (`idStudent`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `student`
--

LOCK TABLES `student` WRITE;
/*!40000 ALTER TABLE `student` DISABLE KEYS */;
INSERT INTO `student` VALUES (6,'Kirill','Volkova 3','+6532213','kir@mail','3.4'),(10,'fds','fds','hgf','654@kh','3'),(25,'Vova','Vovalova 23','+754234','vova@gmail','4.7'),(54,'gfd','gdf','gfd','fd@gfd','3'),(55,'fds','fds','+786','gd@kjh','3'),(56,'hgf','kjh','+43','jhg@kjh','4'),(76,'fdbvgdf','gdf','gfd','fdes@vdf','5'),(99,'Poll','Plath 17','+38745','pll@fdsfds','5');
/*!40000 ALTER TABLE `student` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `studentsofcourses`
--

DROP TABLE IF EXISTS `studentsofcourses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `studentsofcourses` (
  `idCourse` int unsigned NOT NULL,
  `idStudent` int unsigned NOT NULL,
  `idProfessor` int unsigned NOT NULL,
  `noteStudent` float unsigned NOT NULL,
  PRIMARY KEY (`idCourse`,`idStudent`,`idProfessor`),
  KEY `fk_student_idx` (`idStudent`),
  KEY `fk_professor_idx` (`idProfessor`),
  CONSTRAINT `fk_course` FOREIGN KEY (`idCourse`) REFERENCES `course` (`idCourse`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_professor` FOREIGN KEY (`idProfessor`) REFERENCES `professor` (`idProfessor`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_student` FOREIGN KEY (`idStudent`) REFERENCES `student` (`idStudent`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `studentsofcourses`
--

LOCK TABLES `studentsofcourses` WRITE;
/*!40000 ALTER TABLE `studentsofcourses` DISABLE KEYS */;
INSERT INTO `studentsofcourses` VALUES (1,25,10,4.6),(1,54,10,3.3),(2,55,15,3.4),(2,56,20,4.3),(5,76,10,5),(6,76,20,4.1),(10,10,10,4.3),(10,10,20,4),(77,76,5,5),(77,99,5,3.6);
/*!40000 ALTER TABLE `studentsofcourses` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-07-10 13:16:42
