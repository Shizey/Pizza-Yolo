CREATE DATABASE IF NOT EXISTS `PizzaYolo` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE `PizzaYolo`;

CREATE TABLE IF NOT EXISTS `command` (
  `Id_Commande` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `telephone` int(11) NOT NULL,
  `adresse` varchar(50) DEFAULT NULL,
  `code_postale` int(11) DEFAULT NULL,
  `ville` varchar(50) DEFAULT NULL,
  `datecommande` datetime NOT NULL,
  `etatcmd` varchar(50) NOT NULL,
  `typeembal` varchar(50) NOT NULL,
  `datearchiv` date NOT NULL,
  PRIMARY KEY (`Id_Commande`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE IF NOT EXISTS `comporte` (
  `idingredient` int(11) NOT NULL,
  `idproduit` int(11) NOT NULL,
  `quant` int(11) NOT NULL,
  `type` varchar(50) NOT NULL,
  PRIMARY KEY (`idingredient`,`idproduit`),
  KEY `idproduit` (`idproduit`),
  CONSTRAINT `comporte_ibfk_1` FOREIGN KEY (`idingredient`) REFERENCES `ingredient` (`idingredient`),
  CONSTRAINT `comporte_ibfk_2` FOREIGN KEY (`idproduit`) REFERENCES `produit` (`idproduit`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE IF NOT EXISTS `contient` (
  `num_of` int(11) NOT NULL,
  `quant` int(11) NOT NULL,
  `Id_Commande` int(11) NOT NULL,
  PRIMARY KEY (`num_of`),
  KEY `Id_Commande` (`Id_Commande`),
  CONSTRAINT `contient_ibfk_1` FOREIGN KEY (`num_of`) REFERENCES `detail` (`num_of`),
  CONSTRAINT `contient_ibfk_2` FOREIGN KEY (`Id_Commande`) REFERENCES `command` (`Id_Commande`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE IF NOT EXISTS `detail` (
  `num_of` int(11) NOT NULL AUTO_INCREMENT,
  `nomprod` varchar(50) NOT NULL,
  `ingbase1` int(11) NOT NULL DEFAULT 0,
  `ingbase2` int(11) DEFAULT NULL,
  `ingbase3` int(11) DEFAULT NULL,
  `ingbase4` int(11) DEFAULT NULL,
  `ingopt1` int(11) DEFAULT NULL,
  `ingopt2` int(11) DEFAULT NULL,
  `ingopt3` int(11) DEFAULT NULL,
  `ingopt4` int(11) DEFAULT NULL,
  `datearchive` date DEFAULT NULL,
  `idproduit` int(11) NOT NULL,
  PRIMARY KEY (`num_of`),
  KEY `idproduit` (`idproduit`),
  KEY `IngBase1` (`ingbase1`),
  KEY `FK_detail_ingredient` (`ingbase2`),
  KEY `FK_detail_ingredient_2` (`ingbase3`),
  KEY `FK_detail_ingredient_7` (`ingbase4`),
  KEY `FK_detail_ingredient_3` (`ingopt1`),
  KEY `FK_detail_ingredient_4` (`ingopt2`),
  KEY `FK_detail_ingredient_5` (`ingopt3`),
  KEY `FK_detail_ingredient_6` (`ingopt4`),
  CONSTRAINT `FK_detail_ingredient` FOREIGN KEY (`ingbase2`) REFERENCES `ingredient` (`idingredient`),
  CONSTRAINT `FK_detail_ingredient_2` FOREIGN KEY (`ingbase3`) REFERENCES `ingredient` (`idingredient`),
  CONSTRAINT `FK_detail_ingredient_3` FOREIGN KEY (`ingopt1`) REFERENCES `ingredient` (`idingredient`),
  CONSTRAINT `FK_detail_ingredient_4` FOREIGN KEY (`ingopt2`) REFERENCES `ingredient` (`idingredient`),
  CONSTRAINT `FK_detail_ingredient_5` FOREIGN KEY (`ingopt3`) REFERENCES `ingredient` (`idingredient`),
  CONSTRAINT `FK_detail_ingredient_6` FOREIGN KEY (`ingopt4`) REFERENCES `ingredient` (`idingredient`),
  CONSTRAINT `FK_detail_ingredient_7` FOREIGN KEY (`ingbase4`) REFERENCES `ingredient` (`idingredient`),
  CONSTRAINT `IngBase1` FOREIGN KEY (`ingbase1`) REFERENCES `ingredient` (`idingredient`),
  CONSTRAINT `detail_ibfk_1` FOREIGN KEY (`idproduit`) REFERENCES `produit` (`idproduit`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE IF NOT EXISTS `employe` (
  `idres` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `tel` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `role` varchar(50) NOT NULL,
  PRIMARY KEY (`idres`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE IF NOT EXISTS `fournisseur` (
  `nomfourn` varchar(50) NOT NULL,
  `adresse` varchar(50) NOT NULL,
  `codepostal` int(11) NOT NULL,
  `ville` varchar(50) NOT NULL,
  `tel` int(11) NOT NULL,
  `datearchive` date DEFAULT NULL,
  PRIMARY KEY (`nomfourn`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE IF NOT EXISTS `ingredient` (
  `idingredient` int(11) NOT NULL AUTO_INCREMENT,
  `nomingre` varchar(50) NOT NULL,
  `frais` tinyint(1) NOT NULL,
  `unite` int(11) NOT NULL,
  `stockmin` int(11) NOT NULL,
  `stockunite` int(11) NOT NULL,
  `prixuht_moyen` decimal(15,2) NOT NULL,
  `q_a_com` int(11) NOT NULL DEFAULT 0,
  `datearchiv` date DEFAULT NULL,
  PRIMARY KEY (`idingredient`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE IF NOT EXISTS `livre` (
  `Id_Commande` int(11) NOT NULL,
  `etatLivraison` varchar(50) NOT NULL,
  `coutLivraison` decimal(15,2) DEFAULT NULL,
  `DateArchiv` date DEFAULT NULL,
  `Id_Livreur` int(11) NOT NULL,
  PRIMARY KEY (`Id_Commande`),
  KEY `Id_Livreur` (`Id_Livreur`),
  CONSTRAINT `livre_ibfk_1` FOREIGN KEY (`Id_Commande`) REFERENCES `command` (`Id_Commande`),
  CONSTRAINT `livre_ibfk_2` FOREIGN KEY (`Id_Livreur`) REFERENCES `livreur` (`Id_Livreur`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE IF NOT EXISTS `livreur` (
  `Id_Livreur` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `Telephone` varchar(50) NOT NULL,
  `disponible` tinyint(1) NOT NULL,
  `password` text NOT NULL,
  PRIMARY KEY (`Id_Livreur`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE IF NOT EXISTS `produit` (
  `idproduit` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `isactive` tinyint(1) NOT NULL,
  `taille` tinyint(1) DEFAULT NULL,
  `nbingbase` int(11) DEFAULT NULL,
  `NbIngOpt` int(11) DEFAULT NULL,
  `prixuht` decimal(15,2) NOT NULL,
  `image` text DEFAULT NULL,
  `nboptmax` int(11) DEFAULT NULL,
  `datearchiv` date DEFAULT NULL,
  PRIMARY KEY (`idproduit`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE IF NOT EXISTS `provient` (
  `idingredient` int(11) NOT NULL,
  `nomfourn` varchar(50) NOT NULL,
  `prixuht` int(11) NOT NULL,
  PRIMARY KEY (`idingredient`,`nomfourn`),
  KEY `nomfourn` (`nomfourn`),
  CONSTRAINT `provient_ibfk_1` FOREIGN KEY (`idingredient`) REFERENCES `ingredient` (`idingredient`),
  CONSTRAINT `provient_ibfk_2` FOREIGN KEY (`nomfourn`) REFERENCES `fournisseur` (`nomfourn`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
