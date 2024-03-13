/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

INSERT INTO `ingredient` (`idingredient`, `nomingre`, `frais`, `unite`, `stockmin`, `stockunite`, `prixuht_moyen`, `q_a_com`, `datearchiv`) VALUES
	(1, 'Farine', 0, 'kg', 10, 1, 1.00, 10, NULL),
	(2, 'Oeuf', 1, 'unite', 10, 1, 1.00, 10, NULL),
	(3, 'Beurre', 0, 'kg', 10, 6, 1.00, 10, NULL),
	(4, 'Levure', 0, 'kg', 10, 1, 1.00, 10, NULL),
	(5, 'Sel', 0, 'g', 10, 1, 1.00, 10, NULL),
	(6, 'Tomate', 0, 'kg', 10, 1, 1.00, 10, NULL),
	(7, 'Mozzarella', 0, 'kg', 10, 1, 1.00, 10, NULL),
	(8, 'Jambon', 0, 'kg', 10, 1, 1.00, 10, NULL),
	(9, 'Champignon', 0, 'g', 10, 1, 1.00, 10, NULL),
	(10, 'Anchois', 0, 'g', 10, 1, 1.00, 10, NULL),
	(11, 'Poivron', 0, 'g', 10, 1, 1.00, 10, NULL),
	(12, 'Oignon', 0, 'kg', 10, 1, 1.00, 10, NULL),
	(13, 'Ail', 0, 'g', 10, 1, 1.00, 10, NULL),
	(14, 'Basilic', 0, 'g', 10, 1, 1.00, 10, NULL),
	(15, 'Origan', 0, 'g', 10, 1, 1.00, 10, NULL),
	(16, 'Piment', 0, 'g', 10, 1, 1.00, 10, NULL),
	(17, 'Poulet', 0, 'kg', 10, 1, 1.00, 10, NULL),
	(18, 'Boeuf', 0, 'kg', 10, 1, 1.00, 10, NULL),
	(19, 'Saumon', 0, 'kg', 10, 1, 1.00, 10, NULL),
	(20, 'Gorgonzola', 1, 'g', 10, 1, 1.00, 10, NULL),
	(21, 'Olive', 0, 'g', 10, 1, 1.00, 10, NULL);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
