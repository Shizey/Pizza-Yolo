<?php
class FournisseurDAO
{
    private $connexion;
    
    public function __construct($connexion)
    {
        $this->connexion = $connexion;
    }

    public function create(Fournisseur $fournisseur)
    {
        $query = "INSERT INTO fournisseur (nomfourn, adresse, codepostal, ville, tel, datearchive) VALUES (:nomfourn, :adresse, :codepostal, :ville, :tel, :datearchive)";
        $requete = $this->connexion->prepare($query);
        $requete->bindValue(":nomfourn", $fournisseur->getNomFournisseur());
        $requete->bindValue(":adresse", $fournisseur->getAdresse());
        $requete->bindValue(":codepostal", $fournisseur->getCodePostal());
        $requete->bindValue(":ville", $fournisseur->getVille());
        $requete->bindValue(":tel", $fournisseur->getTel());
        $requete->bindValue(":datearchive", $fournisseur->getDateArchive());
        $requete->execute();
    }

    public function delete(Fournisseur $fournisseur)
    {
        $query = "DELETE FROM fournisseur WHERE nomfourn = :nomfourn";
        $requete = $this->connexion->prepare($query);
        $requete->bindValue(":nomfourn", $fournisseur->getNomFournisseur());
        $requete->execute();
    }

    public function update(Fournisseur $fournisseur)
    {
        $query = "UPDATE fournisseur SET adresse = :adresse, codepostal = :codepostal, ville = :ville, tel = :tel, datearchive = :datearchive WHERE nomfourn = :nomfourn";
        $requete = $this->connexion->prepare($query);
        $requete->bindValue(":nomfourn", $fournisseur->getNomFournisseur());
        $requete->bindValue(":adresse", $fournisseur->getAdresse());
        $requete->bindValue(":codepostal", $fournisseur->getCodePostal());
        $requete->bindValue(":ville", $fournisseur->getVille());
        $requete->bindValue(":tel", $fournisseur->getTel());
        $requete->bindValue(":datearchive", $fournisseur->getDateArchive());
        $requete->execute();
    }

    public function getByName($nomFourn)
    {
        $query = "SELECT * FROM fournisseur WHERE nomfourn = :nomfourn";
        $requete = $this->connexion->prepare($query);
        $requete->bindValue(":nomfourn", $nomFourn);
        $requete->execute();
        $resultat = $requete->fetch(PDO::FETCH_ASSOC);
        return new Fournisseur($resultat["nomfourn"], $resultat["adresse"], $resultat["codepostal"], $resultat["ville"], $resultat["tel"], $resultat["datearchive"]);
    }

    public function getAll()
    {
        $query = "SELECT * FROM fournisseur";
        $requete = $this->connexion->prepare($query);
        $requete->execute();
        $resultats = $requete->fetchAll(PDO::FETCH_ASSOC);
        $fournisseurs = [];
        foreach ($resultats as $resultat) {
            $fournisseurs[] = new Fournisseur($resultat["nomfourn"], $resultat["adresse"], $resultat["codepostal"], $resultat["ville"], $resultat["tel"], $resultat["datearchive"]);
        }
        return $fournisseurs;
    }
}
