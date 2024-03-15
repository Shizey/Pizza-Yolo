<?php
require_once __DIR__ . '/../class/Commande.php';
class CommandeDAO
{
    private $connexion;

    public function __construct($connexion)
    {
        $this->connexion = $connexion;
    }

    public function create(Commande &$commande)
    {
        $query = "INSERT INTO command (nom, telephone, adresse, code_postale, ville, datecommande, etatcmd, typeembal, datearchiv) VALUES (:nom, :telephone, :adresse, :code_postale, :ville, :datecommande, :etatcmd, :typeembal, :datearchiv)";
        $requete = $this->connexion->prepare($query);
        $requete->bindValue(':nom', $commande->getNom());
        $requete->bindValue(':telephone', $commande->getTelephone());
        $requete->bindValue(':adresse', $commande->getAdresse());
        $requete->bindValue(':code_postale', $commande->getCodePostal());
        $requete->bindValue(':ville', $commande->getVille());
        $requete->bindValue(':datecommande', $commande->getDateCommande());
        $requete->bindValue(':etatcmd', $commande->getEtatCommande());
        $requete->bindValue(':typeembal', $commande->getTypeEmbal());
        $requete->bindValue(':datearchiv', $commande->getDateArchiv());
        $requete->execute();
        $commande->setIdCommande($this->connexion->lastInsertId());
    }

    public function delete(Commande $commande) {
        $query = "DELETE FROM command WHERE Id_Commande = :idcommande";
        $requete = $this->connexion->prepare($query);
        $requete->bindValue(':idcommande', $commande->getIdCommande());
        $requete->execute();
    }

    public function update(Commande $commande) {
        $query = "UPDATE command SET nom = :nom, telephone = :telephone, adresse = :adresse, code_postale = :code_postale, ville = :ville, datecommande = :datecommande, etatcmd = :etatcmd, typeembal = :typeembal, datearchiv = :datearchiv WHERE Id_Commande = :idcommande";
        $requete = $this->connexion->prepare($query);
        $requete->bindValue(':idcommande', $commande->getIdCommande());
        $requete->bindValue(':nom', $commande->getNom());
        $requete->bindValue(':telephone', $commande->getTelephone());
        $requete->bindValue(':adresse', $commande->getAdresse());
        $requete->bindValue(':code_postale', $commande->getCodePostal());
        $requete->bindValue(':ville', $commande->getVille());
        $requete->bindValue(':datecommande', $commande->getDateCommande());
        $requete->bindValue(':etatcmd', $commande->getEtatCommande());
        $requete->bindValue(':typeembal', $commande->getTypeEmbal());
        $requete->bindValue(':datearchiv', $commande->getDateArchiv());
        $requete->execute();
    }

    public function getById($idCommande) {
        $query = "SELECT * FROM command WHERE Id_Commande = :idcommande";
        $requete = $this->connexion->prepare($query);
        $requete->bindValue(':idcommande', $idCommande);
        $requete->execute();
        $resultat = $requete->fetch(PDO::FETCH_ASSOC);
        return new Commande($resultat['Id_Commande'], $resultat['nom'], $resultat['telephone'], $resultat['adresse'], $resultat['code_postale'], $resultat['ville'], $resultat['datecommande'], $resultat['etatcmd'], $resultat['typeembal'], $resultat['datearchiv']);
    }

    public function getAll() {
        $query = "SELECT * FROM command";
        $requete = $this->connexion->prepare($query);
        $requete->execute();
        $resultats = $requete->fetchAll(PDO::FETCH_ASSOC);
        $commandes = [];
        foreach ($resultats as $resultat) {
            $commandes[] = new Commande($resultat['Id_Commande'], $resultat['nom'], $resultat['telephone'], $resultat['adresse'], $resultat['code_postale'], $resultat['ville'], $resultat['datecommande'], $resultat['etatcmd'], $resultat['typeembal'], $resultat['datearchiv']);
        }
        return $commandes;
    }
}