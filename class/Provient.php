<?php
class Provient 
{
    private $idIngredient;
    private $nomFournisseur;
    private $prix;

    public function __construct($idIngredient, $nomFournisseur, $prix)
    {
        $this->idIngredient = $idIngredient;
        $this->nomFournisseur = $nomFournisseur;
        $this->prix = $prix;
    }

    public function getIdIngredient()
    {
        return $this->idIngredient;
    }

    public function getNomFournisseur()
    {
        return $this->nomFournisseur;
    }

    public function getPrix()
    {
        return $this->prix;
    }

    public function setIdIngredient($idIngredient)
    {
        $this->idIngredient = $idIngredient;
    }

    public function setNomFournisseur($nomFournisseur)
    {
        $this->nomFournisseur = $nomFournisseur;
    }

    public function setPrix($prix)
    {
        $this->prix = $prix;
    }
}
