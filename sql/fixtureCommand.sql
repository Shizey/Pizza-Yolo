/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

INSERT INTO `command` (`Id_Commande`, `nom`, `telephone`, `adresse`, `code_postale`, `ville`, `datecommande`, `etatcmd`, `typeembal`, `datearchiv`) VALUES
	(1, 'Xavier', 1234567890, 'Adresse1', 12345, 'Ville1', '2024-03-11 02:00:00', 'En attente', 'Emballage1', NULL),
	(2, 'Ludovic', 1234567890, 'Adresse2', 12345, 'Ville2', '2024-03-11 02:00:00', 'En attente', 'Emballage2', NULL),
	(3, 'Antoine', 1234567890, 'Adresse3', 12345, 'Ville3', '2024-03-14 02:00:00', 'En attente', 'Emballage3', NULL),
	(4, 'Adonis', 1234567890, 'Adresse4', 12345, 'Ville4', '2024-03-15 02:00:00', 'En attente', 'Emballage4', NULL),
	(5, 'Hugo', 1234567890, 'Adresse5', 12345, 'Ville5', '2024-03-16 02:00:00', 'En attente', 'Emballage5', NULL),
	(6, 'Remi', 1234567890, 'Adresse6', 12345, 'Ville6', '2024-03-16 10:00:00', 'En attente', 'Emballage6', NULL),
	(7, 'Owen', 1234567890, 'Adresse7', 12345, 'Ville7', '2024-03-13 01:00:00', 'En attente', 'Emballage7', NULL),
	(8, 'Noe', 1234567890, 'Adresse8', 12345, 'Ville8', '2024-03-13 02:00:00', 'En attente', 'Emballage8', NULL),
	(9, 'test', 120, 'test', 12, 'test', '2024-03-13 08:52:24', 'teste', 'test', NULL);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
