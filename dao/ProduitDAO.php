<?php
class ProduitDAO
{
    private $connexion;
    public function __construct($connexion) {
        $this->connexion = $connexion;
    }

    public function create(Produit $produit) {
        $sql = "INSERT INTO produit (nom, description, isactive, taille, nbingbase, NbIngOpt, prixuht, image, nboptmax, datearchiv) VALUES (:Nom, :description, :isactive, :taille, :nbingbase, :NbIngOpt, :prixuht, :image, :nboptmax, :datearchiv)";
        $requete = $this->connexion->prepare($sql);
        $requete->bindValue(":Nom", $produit->getNom());
        $requete->bindValue(":description", $produit->getDescription());
        $requete->bindValue(":isactive", $produit->isActive());
        $requete->bindValue(":taille", $produit->getTaille());
        $requete->bindValue(":nbingbase", $produit->getNbIngBase());
        $requete->bindValue(":NbIngOpt", $produit->getNbIngOpt());
        $requete->bindValue(":prixuht", $produit->getPrix());
        $requete->bindValue(":image", $produit->getImage());
        $requete->bindValue(":nboptmax", $produit->getNbOptMax());
        $requete->bindValue(":datearchiv", $produit->getDateArchive());
        $requete->execute();
        $produit->setIdProduit($this->connexion->lastInsertId());
    }

    public function getById($id) {
        $sql = "SELECT * FROM produit WHERE idproduit = :id";
        $requete = $this->connexion->prepare($sql);
        $requete->bindValue(":id", $id);
        $requete->execute();
        $produit = $requete->fetch();
        return new Produit($produit['idproduit'], $produit['nom'], $produit['description'], $produit['isactive'], $produit['taille'], $produit['nbingbase'], $produit['NbIngOpt'], $produit['prixuht'], $produit['image'], $produit['nboptmax'], $produit['datearchiv']);
    }

    public function getAll() {
        $sql = "SELECT * FROM produit";
        $requete = $this->connexion->prepare($sql);
        $requete->execute();
        $produits = $requete->fetchAll();
        $resultat = [];
        foreach ($produits as $produit) {
            $resultat[] = new Produit($produit['idproduit'], $produit['nom'], $produit['description'], $produit['isactive'], $produit['taille'], $produit['nbingbase'], $produit['NbIngOpt'], $produit['prixuht'], $produit['image'], $produit['nboptmax'], $produit['datearchiv']);
        }
        return $resultat;
    }

    public function update(Produit $produit) {
        $sql = "UPDATE produit SET nom = :Nom, description = :description, isactive = :isactive, taille = :taille, nbingbase = :nbingbase, NbIngOpt = :NbIngOpt, prixuht = :prixuht, image = :image, nboptmax = :nboptmax, datearchiv = :datearchiv WHERE idproduit = :id";
        $requete = $this->connexion->prepare($sql);
        $requete->bindValue(":Nom", $produit->getNom());
        $requete->bindValue(":description", $produit->getDescription());
        $requete->bindValue(":isactive", $produit->isActive());
        $requete->bindValue(":taille", $produit->getTaille());
        $requete->bindValue(":nbingbase", $produit->getNbIngBase());
        $requete->bindValue(":NbIngOpt", $produit->getNbIngOpt());
        $requete->bindValue(":prixuht", $produit->getPrix());
        $requete->bindValue(":image", $produit->getImage());
        $requete->bindValue(":nboptmax", $produit->getNbOptMax());
        $requete->bindValue(":datearchiv", $produit->getDateArchive());
        $requete->bindValue(":id", $produit->getIdProduit());
        $requete->execute();
    }

    public function delete(Produit $produit) {
        $sql = "DELETE FROM produit WHERE idproduit = :id";
        $requete = $this->connexion->prepare($sql);
        $requete->bindValue(":id", $produit->getIdProduit());
        $requete->execute();
    }
}
