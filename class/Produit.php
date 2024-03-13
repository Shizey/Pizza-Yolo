<?php
class Produit
{
    private $idProduit;
    private $nom;
    private $description;
    private $isActive;
    private $taille;
    private $nbIngBase;
    private $nbIngOpt;
    private $prix;
    private $image;
    private $nbOptMax;
    private $dateArchiv;

    public function __construct($idProduit, $nom, $description, $isActive, $taille, $nbIngBase, $nbIngOpt, $prix, $image, $nbOptMax, $dateArchiv)
    {
        $this->idProduit = $idProduit;
        $this->nom = $nom;
        $this->description = $description;
        $this->isActive = $isActive;
        $this->taille = $taille;
        $this->nbIngBase = $nbIngBase;
        $this->nbIngOpt = $nbIngOpt;
        $this->prix = $prix;
        $this->image = $image;
        $this->nbOptMax = $nbOptMax;
        $this->dateArchiv = $dateArchiv;
    }

    public function getIdProduit()
    {
        return $this->idProduit;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function isActive()
    {
        return $this->isActive;
    }

    public function getTaille()
    {
        return $this->taille;
    }

    public function getNbIngBase()
    {
        return $this->nbIngBase;
    }

    public function getNbIngOpt()
    {
        return $this->nbIngOpt;
    }

    public function getPrix()
    {
        return $this->prix;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function getNbOptMax()
    {
        return $this->nbOptMax;
    }

    public function getDateArchive()
    {
        return $this->dateArchiv;
    }

    public function setIdProduit($idProduit)
    {
        $this->idProduit = $idProduit;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
    }

    public function setTaille($taille)
    {
        $this->taille = $taille;
    }

    public function setNbIngBase($nbIngBase)
    {
        $this->nbIngBase = $nbIngBase;
    }

    public function setNbIngOpt($nbIngOpt)
    {
        $this->nbIngOpt = $nbIngOpt;
    }

    public function setPrix($prix)
    {
        $this->prix = $prix;
    }

    public function setImage($image)
    {
        $this->image = $image;
    }

    public function setNbOptMax($nbOptMax)
    {
        $this->nbOptMax = $nbOptMax;
    }

    public function setDateArchive($dateArchiv)
    {
        $this->dateArchiv = $dateArchiv;
    }
}
