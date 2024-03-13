/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

INSERT INTO `produit` (`idproduit`, `nom`, `description`, `isactive`, `taille`, `nbingbase`, `NbIngOpt`, `prixuht`, `image`, `nboptmax`, `datearchiv`) VALUES
	(1, 'Marguerita', 'bonne pizz', 1, 0, 3, 2, 10.00, 'https://www.google.com', 3, NULL),
	(2, 'Reine', 'excelente pizz', 1, 0, 3, 2, 10.00, 'https://www.google.com', 3, NULL),
	(3, 'Napolitaine', 'special du chef', 1, 0, 3, 2, 10.00, 'https://www.google.com', 3, NULL),
	(4, '4 fromages', "le fromage, c\'est le fromage", 1, 0, 3, 2, 10.00, 'https://www.google.com', 3, NULL),
	(5, 'Calzone', 'spécialitée pizza yolo', 1, 0, 3, 2, 10.00, 'https://www.google.com', 3, NULL),
	(6, 'Sicilienne', 'si si la famille', 1, 0, 3, 2, 10.00, 'https://www.google.com', 3, NULL),
	(7, 'test', 'test', 1, 1, 1, 1, 1.00, 'test', 1, NULL);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
