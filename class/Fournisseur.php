<?php
class Fournisseur
{
    private $nomFournisseur;
    private $adresse;
    private $codePostal;
    private $ville;
    private $tel;
    private $dateArchive;
    
    public function __construct($nomFournisseur, $adresse, $codePostal, $ville, $tel, $dateArchive)
    {
        $this->nomFournisseur = $nomFournisseur;
        $this->adresse = $adresse;
        $this->codePostal = $codePostal;
        $this->ville = $ville;
        $this->tel = $tel;
        $this->dateArchive = $dateArchive;
    }

    public function getNomFournisseur()
    {
        return $this->nomFournisseur;
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

    public function getTel()
    {
        return $this->tel;
    }

    public function getDateArchive()
    {
        return $this->dateArchive;
    }

    public function setNomFournisseur($nomFournisseur)
    {
        $this->nomFournisseur = $nomFournisseur;
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

    public function setTel($tel)
    {
        $this->tel = $tel;
    }

    public function setDateArchive($dateArchive)
    {
        $this->dateArchive = $dateArchive;
    }
}
