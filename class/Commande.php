<?php
class Commande
{
    private $idCommande;
    private $nom;
    private $telephone;
    private $adresse;
    private $codePostal;
    private $ville;
    private $dateCommande;
    private $etatCommande;
    private $typeEmbal;
    private $dateArchiv;

    public function __construct($idCommande, $nom, $telephone, $adresse, $codePostal, $ville, $dateCommande, $etatCommande, $typeEmbal, $dateArchiv)
    {
        $this->idCommande = $idCommande;
        $this->nom = $nom;
        $this->telephone = $telephone;
        $this->adresse = $adresse;
        $this->codePostal = $codePostal;
        $this->ville = $ville;
        $this->dateCommande = $dateCommande;
        $this->etatCommande = $etatCommande;
        $this->typeEmbal = $typeEmbal;
        $this->dateArchiv = $dateArchiv;
    }

    public function getIdCommande()
    {
        return $this->idCommande;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function getTelephone()
    {
        return $this->telephone;
    }

    public function getAdresse()
    {
        return $this->adresse;
    }

    public function getCodePostal()
    {
        return $this->codePostal;
    }

    public function getVille()
    {
        return $this->ville;
    }

    public function getDateCommande()
    {
        return $this->dateCommande;
    }

    public function getEtatCommande()
    {
        return $this->etatCommande;
    }

    public function getTypeEmbal()
    {
        return $this->typeEmbal;
    }

    public function getDateArchiv()
    {
        return $this->dateArchiv;
    }

    public function setIdCommande($idCommande)
    {
        $this->idCommande = $idCommande;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;
    }

    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    }

    public function setCodePostal($codePostal)
    {
        $this->codePostal = $codePostal;
    }

    public function setVille($ville)
    {
        $this->ville = $ville;
    }

    public function setDateCommande($dateCommande)
    {
        $this->dateCommande = $dateCommande;
    }

    public function setEtatCommande($etatCommande)
    {
        $this->etatCommande = $etatCommande;
    }

    public function setTypeEmbal($typeEmbal)
    {
        $this->typeEmbal = $typeEmbal;
    }

    public function setDateArchiv($dateArchiv)
    {
        $this->dateArchiv = $dateArchiv;
    }

    
}
