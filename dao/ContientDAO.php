<?php
require_once __DIR__ . '/../class/Contient.php';
class ContientDAO
{
    private $connexion;

    public function __construct($connexion) {
        $this->connexion = $connexion;
    }

    public function create(Contient $contient) {
        $query = "INSERT INTO contient (num_of, quant, Id_Commande) VALUES (:num_of, :quant, :Id_Commande)";
        $requete = $this->connexion->prepare($query);
        $requete->bindValue(':num_of', $contient->getNumOf());
        $requete->bindValue(':quant', $contient->getQuantite());
        $requete->bindValue(':Id_Commande', $contient->getIdCommande());
        $requete->execute();
    }

    public function delete(Contient $contient) {
        $query = "DELETE FROM contient WHERE num_of = :num_of AND Id_Commande = :Id_Commande";
        $requete = $this->connexion->prepare($query);
        $requete->bindValue(':num_of', $contient->getNumOf());
        $requete->bindValue(':Id_Commande', $contient->getIdCommande());
        $requete->execute();
    }

    public function update(Contient $contient) {
        $query = "UPDATE contient SET quant = :quant WHERE num_of = :num_of AND Id_Commande = :Id_Commande";
        $requete = $this->connexion->prepare($query);
        $requete->bindValue(':num_of', $contient->getNumOf());
        $requete->bindValue(':quant', $contient->getQuantite());
        $requete->bindValue(':Id_Commande', $contient->getIdCommande());
        $requete->execute();
    }

    public function getById($numOf, $idCommande) {
        $query = "SELECT * FROM contient WHERE num_of = :num_of AND Id_Commande = :Id_Commande";
        $requete = $this->connexion->prepare($query);
        $requete->bindValue(':num_of', $numOf);
        $requete->bindValue(':Id_Commande', $idCommande);
        $requete->execute();
        $resultat = $requete->fetch(PDO::FETCH_ASSOC);
        return new Contient($resultat['num_of'], $resultat['quant'], $resultat['Id_Commande']);
    }

    public function getAll() {
        $query = "SELECT * FROM contient";
        $requete = $this->connexion->prepare($query);
        $requete->execute();
        $resultats = $requete->fetchAll(PDO::FETCH_ASSOC);
        $contients = [];
        foreach ($resultats as $resultat) {
            $contients[] = new Contient($resultat['num_of'], $resultat['quant'], $resultat['Id_Commande']);
        }
        return $contients;
    }
}
