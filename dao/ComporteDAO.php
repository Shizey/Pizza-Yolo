<?php
require_once __DIR__ . '/../class/Comporte.php';
class ComporteDAO
{
    private $connexion;

    public function __construct($connexion)
    {
        $this->connexion = $connexion;
    }

    public function create(Comporte &$comporte) {
        $query = "INSERT INTO comporte (idingredient, idproduit, quant, type) VALUES (:idingredient, :idproduit, :quant, :type)";
        $requete = $this->connexion->prepare($query);
        $requete->bindValue(':idingredient', $comporte->getIdIngredient());
        $requete->bindValue(':idproduit', $comporte->getIdProduit());
        $requete->bindValue(':quant', $comporte->getQuantite());
        $requete->bindValue(':type', $comporte->getType());
        $requete->execute();
    }

    public function delete(Comporte $comporte) {
        $query = "DELETE FROM comporte WHERE idingredient = :idingredient AND idproduit = :idproduit";
        $requete = $this->connexion->prepare($query);
        $requete->bindValue(':idingredient', $comporte->getIdIngredient());
        $requete->bindValue(':idproduit', $comporte->getIdProduit());
        $requete->execute();
    }

    public function update(Comporte $comporte) {
        $query = "UPDATE comporte SET quant = :quant, type = :type WHERE idingredient = :idingredient AND idproduit = :idproduit";
        $requete = $this->connexion->prepare($query);
        $requete->bindValue(':idingredient', $comporte->getIdIngredient());
        $requete->bindValue(':idproduit', $comporte->getIdProduit());
        $requete->bindValue(':quant', $comporte->getQuantite());
        $requete->bindValue(':type', $comporte->getType());
        $requete->execute();
    }

    public function getById($idIngredient, $idProduit) {
        $query = "SELECT * FROM comporte WHERE idingredient = :idingredient AND idproduit = :idproduit";
        $requete = $this->connexion->prepare($query);
        $requete->bindValue(':idingredient', $idIngredient);
        $requete->bindValue(':idproduit', $idProduit);
        $requete->execute();
        $resultat = $requete->fetch(PDO::FETCH_ASSOC);
        return new Comporte($resultat['idingredient'], $resultat['idproduit'], $resultat['quant'], $resultat['type']);
    }

    public function getAll() {
        $query = "SELECT * FROM comporte";
        $requete = $this->connexion->prepare($query);
        $requete->execute();
        $resultats = $requete->fetchAll(PDO::FETCH_ASSOC);
        $comportes = [];
        foreach ($resultats as $resultat) {
            $comportes[] = new Comporte($resultat['idingredient'], $resultat['idproduit'], $resultat['quant'], $resultat['type']);
        }
        return $comportes;
    }

    public function getByIdIngredient($idIngredient) {
        $query = "SELECT * FROM comporte WHERE idingredient = :idingredient";
        $requete = $this->connexion->prepare($query);
        $requete->bindValue(':idingredient', $idIngredient);
        $requete->execute();
        $resultats = $requete->fetchAll(PDO::FETCH_ASSOC);
        $comportes = [];
        foreach ($resultats as $resultat) {
            $comportes[] = new Comporte($resultat['idingredient'], $resultat['idproduit'], $resultat['quant'], $resultat['type']);
        }
        return $comportes;
    }

    public function getByIdProduit($idProduit) {
        $query = "SELECT * FROM comporte WHERE idproduit = :idproduit";
        $requete = $this->connexion->prepare($query);
        $requete->bindValue(':idproduit', $idProduit);
        $requete->execute();
        $resultats = $requete->fetchAll(PDO::FETCH_ASSOC);
        $comportes = [];
        foreach ($resultats as $resultat) {
            $comportes[] = new Comporte($resultat['idingredient'], $resultat['idproduit'], $resultat['quant'], $resultat['type']);
        }
        return $comportes;
    }
}
