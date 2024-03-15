<?php
require_once __DIR__ . '/../class/Provient.php';
class ProvientDAO 
{
    private $connexion;
    public function __construct($connexion) {
        $this->connexion = $connexion;
    }

    public function create(Provient $provient) {
        $sql = "INSERT INTO provient (idingredient, nomfourn, prixuht) VALUES (:idingredient, :nomfourn, :prixuht)";
        $requete = $this->connexion->prepare($sql);
        $requete->bindValue(":idingredient", $provient->getIdIngredient());
        $requete->bindValue(":nomfourn", $provient->getNomFournisseur());
        $requete->bindValue(":prixuht", $provient->getPrix());
        $requete->execute();
    }

    public function getByIdIngredient($id) {
        $sql = "SELECT * FROM provient WHERE idingredient = :id";
        $requete = $this->connexion->prepare($sql);
        $requete->bindValue(":id", $id);
        $requete->execute();
        $provient = $requete->fetch();
        return new Provient($provient['idingredient'], $provient['nomfourn'], $provient['prixuht']);
    }

    public function getAll() {
        $sql = "SELECT * FROM provient";
        $requete = $this->connexion->prepare($sql);
        $requete->execute();
        $provients = $requete->fetchAll();
        $resultat = [];
        foreach ($provients as $provient) {
            $resultat[] = new Provient($provient['idingredient'], $provient['nomfourn'], $provient['prixuht']);
        }
        return $resultat;
    }

    public function update(Provient $provient) {
        $sql = "UPDATE provient SET idingredient = :idingredient, nomfourn = :nomfourn, prixuht = :prixuht WHERE idingredient = :id AND nomfourn = :nomfourn";
        $requete = $this->connexion->prepare($sql);
        $requete->bindValue(":idingredient", $provient->getIdIngredient());
        $requete->bindValue(":nomfourn", $provient->getNomFournisseur());
        $requete->bindValue(":prixuht", $provient->getPrix());
        $requete->bindValue(":id", $provient->getIdIngredient());
        $requete->execute();
    }

    public function delete(Provient $provient) {
        $sql = "DELETE FROM provient WHERE idingredient = :id AND nomfourn = :nomfourn";
        $requete = $this->connexion->prepare($sql);
        $requete->bindValue(":id", $provient->getIdIngredient());
        $requete->bindValue(":nomfourn", $provient->getNomFournisseur());
        $requete->execute();
    }

    public function getByNomFournisseur($nom) {
        $sql = "SELECT * FROM provient WHERE nomfourn = :nom";
        $requete = $this->connexion->prepare($sql);
        $requete->bindValue(":nom", $nom);
        $requete->execute();
        $provients = $requete->fetchAll();
        $resultat = [];
        foreach ($provients as $provient) {
            $resultat[] = new Provient($provient['idingredient'], $provient['nomfourn'], $provient['prixuht']);
        }
        return $resultat;
    }

    public function getByBoth($id, $nom) {
        $sql = "SELECT * FROM provient WHERE idingredient = :id AND nomfourn = :nom";
        $requete = $this->connexion->prepare($sql);
        $requete->bindValue(":id", $id);
        $requete->bindValue(":nom", $nom);
        $requete->execute();
        $provient = $requete->fetch();
        return new Provient($provient['idingredient'], $provient['nomfourn'], $provient['prixuht']);
    }
}
