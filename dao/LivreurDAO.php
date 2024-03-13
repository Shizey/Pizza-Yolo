<?php
class LivreurDAO
{
    private $connexion;
    public function __construct($connexion) {
        $this->connexion = $connexion;
    }

    public function create(Livreur $livreur) {
        $sql = "INSERT INTO livreur (nom, prenom, Telephone, disponible, password) VALUES (:Nom, :Prenom, :Telephone, :disponible, :password)";
        $requete = $this->connexion->prepare($sql);
        $requete->bindValue(":Nom", $livreur->getNom());
        $requete->bindValue(":Prenom", $livreur->getPrenom());
        $requete->bindValue(":Telephone", $livreur->getTel());
        $requete->bindValue(":disponible", $livreur->isDisponible());
        $requete->bindValue(":password", $livreur->getPassword());
        $requete->execute();
        $livreur->setIdLivreur($this->connexion->lastInsertId());
    }

    public function getById($id) {
        $sql = "SELECT * FROM livreur WHERE id_livreur = :id";
        $requete = $this->connexion->prepare($sql);
        $requete->bindValue(":id", $id);
        $requete->execute();
        $livreur = $requete->fetch();
        return new Livreur($livreur['id_livreur'], $livreur['nom'], $livreur['prenom'], $livreur['Telephone'], $livreur['disponible'], $livreur['password']);
    }

    public function getAll() {
        $sql = "SELECT * FROM livreur";
        $requete = $this->connexion->prepare($sql);
        $requete->execute();
        $livreurs = $requete->fetchAll();
        $resultat = [];
        foreach ($livreurs as $livreur) {
            $resultat[] = new Livreur($livreur['id_livreur'], $livreur['nom'], $livreur['prenom'], $livreur['Telephone'], $livreur['disponible'], $livreur['password']);
        }
        return $resultat;
    }

    public function update(Livreur $livreur) {
        $sql = "UPDATE livreur SET nom = :Nom, prenom = :Prenom, Telephone = :Telephone, disponible = :disponible, password = :password WHERE id_livreur = :id";
        $requete = $this->connexion->prepare($sql);
        $requete->bindValue(":Nom", $livreur->getNom());
        $requete->bindValue(":Prenom", $livreur->getPrenom());
        $requete->bindValue(":Telephone", $livreur->getTel());
        $requete->bindValue(":disponible", $livreur->isDisponible());
        $requete->bindValue(":password", $livreur->getPassword());
        $requete->bindValue(":id", $livreur->getIdLivreur());
        $requete->execute();
    }

    public function delete(Livreur $livreur) {
        $sql = "DELETE FROM livreur WHERE id_livreur = :id";
        $requete = $this->connexion->prepare($sql);
        $requete->bindValue(":id", $livreur->getIdLivreur());
        $requete->execute();
    }
}
