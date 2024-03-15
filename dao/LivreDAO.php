<?php
require_once __DIR__ . '/../class/Livre.php';
class LivreDAO
{
    private $connexion;

    public function __construct($connexion) {
        $this->connexion = $connexion;
    }

    public function create(Livre $livre) {
        $sql = "INSERT INTO livre (Id_Commande, etatLivraison, coutLivraison, DateArchiv, Id_Livreur) VALUES (:Id_Commande, :etatLivraison, :coutLivraison, :DateArchiv, :Id_Livreur)";
        $requete = $this->connexion->prepare($sql);
        $requete->bindValue(":Id_Commande", $livre->getIdCommande());
        $requete->bindValue(":etatLivraison", $livre->getEtatLivraison());
        $requete->bindValue(":coutLivraison", $livre->getCoutLivraison());
        $requete->bindValue(":DateArchiv", $livre->getDateArchive());
        $requete->bindValue(":Id_Livreur", $livre->getIdLivreur());
        $requete->execute();
    }

    public function delete(Livre $livre) {
        $sql = "DELETE FROM livre WHERE Id_Commande = :Id_Commande";
        $requete = $this->connexion->prepare($sql);
        $requete->bindValue(":Id_Commande", $livre->getIdCommande());
        $requete->execute();
    }

    public function update(Livre $livre) {
        $sql = "UPDATE livre SET etatLivraison = :etatLivraison, coutLivraison = :coutLivraison, DateArchiv = :DateArchiv, Id_Livreur = :Id_Livreur WHERE Id_Commande = :Id_Commande";
        $requete = $this->connexion->prepare($sql);
        $requete->bindValue(":Id_Commande", $livre->getIdCommande());
        $requete->bindValue(":etatLivraison", $livre->getEtatLivraison());
        $requete->bindValue(":coutLivraison", $livre->getCoutLivraison());
        $requete->bindValue(":DateArchiv", $livre->getDateArchive());
        $requete->bindValue(":Id_Livreur", $livre->getIdLivreur());
        $requete->execute();
    }

    public function getByIdCommande($idCommande) {
        $sql = "SELECT * FROM livre WHERE Id_Commande = :Id_Commande";
        $requete = $this->connexion->prepare($sql);
        $requete->bindValue(":Id_Commande", $idCommande);
        $requete->execute();
        $resultat = $requete->fetch(PDO::FETCH_ASSOC);
        return new Livre($resultat["Id_Commande"], $resultat["etatLivraison"], $resultat["coutLivraison"], $resultat["DateArchiv"], $resultat["Id_Livreur"]);
    }

    public function getByIdLivreur($idLivreur) {
        $sql = "SELECT * FROM livre WHERE Id_Livreur = :Id_Livreur";
        $requete = $this->connexion->prepare($sql);
        $requete->bindValue(":Id_Livreur", $idLivreur);
        $requete->execute();
        $resultat = $requete->fetch(PDO::FETCH_ASSOC);
        foreach ($resultat as $resultat) {
            $livres[] = new Livre($resultat["Id_Commande"], $resultat["etatLivraison"], $resultat["coutLivraison"], $resultat["DateArchiv"], $resultat["Id_Livreur"]);
        }
    }

    public function getAll() {
        $sql = "SELECT * FROM livre";
        $requete = $this->connexion->prepare($sql);
        $requete->execute();
        $resultats = $requete->fetchAll(PDO::FETCH_ASSOC);
        $livres = [];
        foreach ($resultats as $resultat) {
            $livres[] = new Livre($resultat["Id_Commande"], $resultat["etatLivraison"], $resultat["coutLivraison"], $resultat["DateArchiv"], $resultat["Id_Livreur"]);
        }
        return $livres;
    }
}
