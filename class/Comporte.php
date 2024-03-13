<?php
class Comporte
{
    private $idIngredient;
    private $idProduit;
    private $quantite;
    private $type;
    
    public function __construct($idIngredient, $idProduit, $quantite, $type)
    {
        $this->idIngredient = $idIngredient;
        $this->idProduit = $idProduit;
        $this->quantite = $quantite;
        $this->type = $type;
    }

    public function getIdIngredient()
    {
        return $this->idIngredient;
    }

    public function getIdProduit()
    {
        return $this->idProduit;
    }

    public function getQuantite()
    {
        return $this->quantite;
    }

    public function getType()
    {
        return $this->type;
    }

    public function setIdIngredient($idIngredient)
    {
        $this->idIngredient = $idIngredient;
    }

    public function setIdProduit($idProduit)
    {
        $this->idProduit = $idProduit;
    }

    public function setQuantite($quantite)
    {
        $this->quantite = $quantite;
    }

    public function setType($type)
    {
        $this->type = $type;
    }
}
