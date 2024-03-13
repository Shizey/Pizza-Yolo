<?php
class DetailDAO
{
    private $connexion;

    public function __construct($connexion) {
        $this->connexion = $connexion;
    }

    public function create(Detail $detail) {
        $query = "INSERT INTO detail (nomprod, ingbase1, ingbase2, ingbase3, ingbase4, ingopt1, ingopt2, ingopt3, ingopt4, datearchive, idproduit) VALUES (:nomprod, :ingbase1, :ingbase2, :ingbase3, :ingbase4, :ingopt1, :ingopt2, :ingopt3, :ingopt4, :datearchive, :idproduit)";
        $requete = $this->connexion->prepare($query);
        $requete->bindValue(':nomprod', $detail->getNomProd());
        $ingBase = $detail->getIngBases();
        foreach ($ingBase as $key => $value) {
            $requete->bindValue(':ingbase' . ($key + 1), $value);
        }
        $ingOpt = $detail->getIngOpts();
        foreach ($ingOpt as $key => $value) {
            $requete->bindValue(':ingopt' . ($key + 1), $value);
        }
        $requete->bindValue(':datearchive', $detail->getDateArchive());
        $requete->bindValue(':idproduit', $detail->getIdProduit());
        $requete->execute();
        $detail->setNumOf($this->connexion->lastInsertId());
    }

    public function delete(Detail $detail) {
        $query = "DELETE FROM detail WHERE num_of = :num_of";
        $requete = $this->connexion->prepare($query);
        $requete->bindValue(':num_of', $detail->getNumOf());
        $requete->execute();
    }

    public function update(Detail $detail) {
        $query = "UPDATE detail SET nomprod = :nomprod, ingbase1 = :ingbase1, ingbase2 = :ingbase2, ingbase3 = :ingbase3, ingbase4 = :ingbase4, ingopt1 = :ingopt1, ingopt2 = :ingopt2, ingopt3 = :ingopt3, ingopt4 = :ingopt4, datearchive = :datearchive, idproduit = :idproduit WHERE num_of = :num_of";
        $requete = $this->connexion->prepare($query);
        $requete->bindValue(':num_of', $detail->getNumOf());
        $requete->bindValue(':nomprod', $detail->getNomProd());
        $ingBase = $detail->getIngBases();
        foreach ($ingBase as $key => $value) {
            $requete->bindValue(':ingbase' . ($key + 1), $value);
        }
        $ingOpt = $detail->getIngOpts();
        foreach ($ingOpt as $key => $value) {
            $requete->bindValue(':ingopt' . ($key + 1), $value);
        }
        $requete->bindValue(':datearchive', $detail->getDateArchive());
        $requete->bindValue(':idproduit', $detail->getIdProduit());
        $requete->execute();
    }

    public function getById($numOf) {
        $query = "SELECT * FROM detail WHERE num_of = :num_of";
        $requete = $this->connexion->prepare($query);
        $requete->bindValue(':num_of', $numOf);
        $requete->execute();
        $resultat = $requete->fetch(PDO::FETCH_ASSOC);
        return new Detail($resultat['num_of'], $resultat['nomprod'], $resultat['ingbase1'], $resultat['ingbase2'], $resultat['ingbase3'], $resultat['ingbase4'], $resultat['ingopt1'], $resultat['ingopt2'], $resultat['ingopt3'], $resultat['ingopt4'], $resultat['datearchive'], $resultat['idproduit']);
    }

    public function getAll() {
        $query = "SELECT * FROM detail";
        $requete = $this->connexion->prepare($query);
        $requete->execute();
        $resultats = $requete->fetchAll(PDO::FETCH_ASSOC);
        $details = [];
        foreach ($resultats as $resultat) {
            $details[] = new Detail($resultat['num_of'], $resultat['nomprod'], $resultat['ingbase1'], $resultat['ingbase2'], $resultat['ingbase3'], $resultat['ingbase4'], $resultat['ingopt1'], $resultat['ingopt2'], $resultat['ingopt3'], $resultat['ingopt4'], $resultat['datearchive'], $resultat['idproduit']);
        }
        return $details;
    }
}
