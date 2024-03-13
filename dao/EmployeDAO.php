<?php
class EmployeDAO
{
    private $connexion;

    public function __construct($connexion)
    {
        $this->connexion = $connexion;
    }

    public function create(Employe &$employe) {
        $query = "INSERT INTO employe (nom, prenom, tel, password, role) VALUES (:nom, :prenom, :tel, :password, :role)";
        $requete = $this->connexion->prepare($query);
        $requete->bindValue(":nom", $employe->getNom());
        $requete->bindValue(":prenom", $employe->getPrenom());
        $requete->bindValue(":tel", $employe->getTel());
        $requete->bindValue(":password", $employe->getPassword());
        $requete->bindValue(":role", $employe->getRole());
        $requete->execute();
        $employe->setIdEmploye($this->connexion->lastInsertId());
    }

    public function delete(Employe $employe) {
        $query = "DELETE FROM employe WHERE idEmploye = :idEmploye";
        $requete = $this->connexion->prepare($query);
        $requete->bindValue(":idEmploye", $employe->getIdEmploye());
        $requete->execute();
    }

    public function update(Employe $employe) {
        $query = "UPDATE employe SET nom = :nom, prenom = :prenom, tel = :tel, password = :password, role = :role WHERE idEmploye = :idEmploye";
        $requete = $this->connexion->prepare($query);
        $requete->bindValue(":idEmploye", $employe->getIdEmploye());
        $requete->bindValue(":nom", $employe->getNom());
        $requete->bindValue(":prenom", $employe->getPrenom());
        $requete->bindValue(":tel", $employe->getTel());
        $requete->bindValue(":password", $employe->getPassword());
        $requete->bindValue(":role", $employe->getRole());
        $requete->execute();
    }

    public function getById($idEmploye) {
        $query = "SELECT * FROM employe WHERE idEmploye = :idEmploye";
        $requete = $this->connexion->prepare($query);
        $requete->bindValue(":idEmploye", $idEmploye);
        $requete->execute();
        var_dump($requete);
        $resultat = $requete->fetch(PDO::FETCH_ASSOC);
        var_dump($resultat);
        return new Employe($resultat["idEmploye"], $resultat["nom"], $resultat["prenom"], $resultat["tel"], $resultat["password"], $resultat["role"]);
    }

    public function getAll() {
        $query = "SELECT * FROM employe";
        $requete = $this->connexion->prepare($query);
        $requete->execute();
        $resultats = $requete->fetchAll(PDO::FETCH_ASSOC);
        $employes = [];
        foreach ($resultats as $resultat) {
            $employes[] = new Employe($resultat["idEmploye"], $resultat["nom"], $resultat["prenom"], $resultat["tel"], $resultat["password"], $resultat["role"]);
        }
        return $employes;
    }
}
