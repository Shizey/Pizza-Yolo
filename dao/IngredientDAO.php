<?php
class IngredientDAO
{
    private $connexion;

    public function __construct($connexion)
    {
        $this->connexion = $connexion;
    }

    public function create(Ingredient $ingredient) {
        $query = "INSERT INTO ingredient (nomingre, frais, unite, stockmin, stockunite, prixuht_moyen, q_a_com, datearchiv) VALUES (:nomingre, :frais, :unite, :stockmin, :stockunite, :prixuht_moyen, :q_a_com, :datearchiv)";
        $requete = $this->connexion->prepare($query);
        $requete->bindValue(":nomingre", $ingredient->getNomIngredient());
        $requete->bindValue(":frais", $ingredient->getIsFrais());
        $requete->bindValue(":unite", $ingredient->getUnite());
        $requete->bindValue(":stockmin", $ingredient->getStockMin());
        $requete->bindValue(":stockunite", $ingredient->getStockUnite());
        $requete->bindValue(":prixuht_moyen", $ingredient->getPrixMoyen());
        $requete->bindValue(":q_a_com", $ingredient->getQuantiteACommander());
        $requete->bindValue(":datearchiv", $ingredient->getDateArchive());
        $requete->execute();
        $ingredient->setIdIngredient($this->connexion->lastInsertId());
    }

    public function delete(Ingredient $ingredient) {
        $query = "DELETE FROM ingredient WHERE idingredient = :idingredient";
        $requete = $this->connexion->prepare($query);
        $requete->bindValue(":idingredient", $ingredient->getIdIngredient());
        $requete->execute();
    }

    public function update(Ingredient $ingredient) {
        $query = "UPDATE ingredient SET nomingre = :nomingre, frais = :frais, unite = :unite, stockmin = :stockmin, stockunite = :stockunite, prixuht_moyen = :prixuht_moyen, q_a_com = :q_a_com, datearchiv = :datearchiv WHERE idingredient = :idingredient";
        $requete = $this->connexion->prepare($query);
        $requete->bindValue(":idingredient", $ingredient->getIdIngredient());
        $requete->bindValue(":nomingre", $ingredient->getNomIngredient());
        $requete->bindValue(":frais", $ingredient->getIsFrais());
        $requete->bindValue(":unite", $ingredient->getUnite());
        $requete->bindValue(":stockmin", $ingredient->getStockMin());
        $requete->bindValue(":stockunite", $ingredient->getStockUnite());
        $requete->bindValue(":prixuht_moyen", $ingredient->getPrixMoyen());
        $requete->bindValue(":q_a_com", $ingredient->getQuantiteACommander());
        $requete->bindValue(":datearchiv", $ingredient->getDateArchive());
        $requete->execute();
    }

    public function getById($idIngredient) {
        $query = "SELECT * FROM ingredient WHERE idingredient = :idingredient";
        $requete = $this->connexion->prepare($query);
        $requete->bindValue(":idingredient", $idIngredient);
        $requete->execute();
        $resultat = $requete->fetch(PDO::FETCH_ASSOC);
        return new Ingredient($resultat["idingredient"], $resultat["nomingre"], $resultat["frais"], $resultat["unite"], $resultat["stockmin"], $resultat["stockunite"], $resultat["prixuht_moyen"], $resultat["q_a_com"], $resultat["datearchiv"]);
    }

    public function getByName($nomIngredient) {
        $query = "SELECT * FROM ingredient WHERE nomingre = :nomingre";
        $requete = $this->connexion->prepare($query);
        $requete->bindValue(":nomingre", $nomIngredient);
        $requete->execute();
        $resultat = $requete->fetch(PDO::FETCH_ASSOC);
        return new Ingredient($resultat["idingredient"], $resultat["nomingre"], $resultat["frais"], $resultat["unite"], $resultat["stockmin"], $resultat["stockunite"], $resultat["prixuht_moyen"], $resultat["q_a_com"], $resultat["datearchiv"]);
    }

    public function getAll() {
        $query = "SELECT * FROM ingredient";
        $requete = $this->connexion->prepare($query);
        $requete->execute();
        $resultats = $requete->fetchAll(PDO::FETCH_ASSOC);
        $ingredients = [];
        foreach ($resultats as $resultat) {
            $ingredients[] = new Ingredient($resultat["idingredient"], $resultat["nomingre"], $resultat["frais"], $resultat["unite"], $resultat["stockmin"], $resultat["stockunite"], $resultat["prixuht_moyen"], $resultat["q_a_com"], $resultat["datearchiv"]);
        }
        return $ingredients;
    }
}
